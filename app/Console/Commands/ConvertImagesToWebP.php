<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Intervention\Image\Encoders\WebpEncoder; // Import WebP encoder

use Intervention\Image\Drivers\Gd\Driver; // Import the GD driver
use Intervention\Image\ImageManager;

class ConvertImagesToWebP extends Command
{
    protected $signature = 'convert:images';
    protected $description = 'Convert all PNG/JPG images to WebP format';

    public function handle()
    {
        $directories = [
            public_path('blogImages'),
            public_path('client-logo'),
            public_path('img'),
            public_path('portfolioImages'),
            public_path('technologyImages'),
            public_path('serviceImages'),
            public_path('sliderImages'),
        ];

        // Create ImageManager instance with GD driver
        $manager = new ImageManager(new Driver());

        foreach ($directories as $directory) {
            if (!File::exists($directory)) {
                $this->warn("Skipping: $directory (Directory not found)");
                continue;
            }

            $files = File::files($directory);

            foreach ($files as $file) {
                if (in_array($file->getExtension(), ['png', 'jpg', 'jpeg'])) {
                    $webpPath = $file->getPath() . '/' . $file->getFilenameWithoutExtension() . '.webp';

                    // Convert PNG/JPG to WebP using WebpEncoder
                    $image = $manager->read($file->getRealPath())->encode(new WebpEncoder(80));
                    $image->save($webpPath);

                    $this->info("Converted: " . $file->getFilename() . " → " . basename($webpPath));
                }
            }
        }

        $this->info('All images have been converted to WebP!');
    }
}
