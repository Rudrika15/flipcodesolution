<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Form Submission</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FlipCode Solutions</title>
        <!-- Add Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body style="background-color: #f4f4f4; font-family: Arial, sans-serif;">
        <img src="https://flipcodesolutions.com/img/logo.png"  width="200" class="mb-1" alt="Flipcode" />

        <table class="container" style="width: 100%; max-width: 1000px; margin: 0 auto; padding: 20px;">
            <tr>
                <td>
                    <h4>Hello {{ $user->fullname}},</h4>
                    <p class="lead">Thank you so much  for contacting us. see you ahead</p>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Name:</strong> {{ $user->fullname}}</li>
                        <li class="list-group-item"><strong>Email:</strong> {{ $user->email }}</li>
                        <li class="list-group-item"><strong>City:</strong> {{ $user->city }}</li>
                    </ul>
                    <div class="mt-4">
                        <!-- 
                            <h5><strong>Message:</strong></h5>
                            <p>{{ $user->message }}</p> -->
                    </div>
                </td>
            </tr>
            

            <tr>
                <td>
                    <div class="jumbotron text-center bg-secondary text-white mt-2" style="padding: 20px;">
                        <p class="mb-0 text-center">Thank you again</p>
                    </div>
                </td>
            </tr>
        </table>

    </body>

    </html>
</body>

</html>