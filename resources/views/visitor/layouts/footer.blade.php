<footer id="picassoFooter">
    <div class="footer-content">
        <div class="footer-section footer-logo">
            <picture>
                <source loading="lazy" srcset="{{ asset('img/newLogo.webp') }}" type="image/webp">
                <img loading="lazy" src="{{ asset('img/newLogo.png') }}" alt="footer-logo"
                    style="width: 70px; height: 70px;">
            </picture>
            <h2>Flipcode Solutions</h2>
            <p>Innovating the future, one brushstroke at a time.</p>
        </div>
        <div class="footer-section footer-navigation">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="{{ route('home') }}" class="hover-effect">Home</a></li>
                <li><a href="{{ route('about') }}" class="hover-effect">About Us</a></li>
                <li><a href="{{ route('service') }}"class="hover-effect">Services</a></li>
                <li><a href="{{ route('portfolio') }}" class="hover-effect">Portfolio</a></li>
                <li><a href="{{ route('contact') }}" class="hover-effect">Contact</a></li>
            </ul>
        </div>
        <div class="footer-section footer-contact">
            <h3>Contact Us</h3>
            <p><i class="fas fa-envelope"></i> contact@flipcodesolutions.com</p>
            <p><i class="fas fa-phone"></i> +91 997 940 4044</p>
            <div class="d-flex align-items-start">
                <i class="fas fa-map-marker-alt"></i>
                <div>
                    <p>Flipcode Solutions Private Limited<br>
                        Nr. Panama Sales, Dalmill Road<br>
                        Surendranagar,<br>
                        Gujarat 363001 India
                    </p>
                </div>
            </div>


        </div>
        <div class="footer-section footer-cta">
            <h3>Stay Connected</h3>
            <div class="social-icons">
                <a href="https://www.facebook.com/profile.php?id=61553723550979"target="_blank" class="social-icon"
                    aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/flipcodesolutions/" target="_blank" class="social-icon"
                    aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/company/flipcode-solutions-private-limited/mycompany/" target="_blank"
                    class="social-icon" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>

    <div class="footer-bottom text-center p-3">

        <span>&copy;</span><span id="demo"></span> <span>Copyright </span>
        <script>
            const d = new Date();
            let year = d.getFullYear();
            document.getElementById("demo").innerHTML = year;
        </script>
        <a class="text-white" href="#"> Flipcodesolution Private Limited</a>
    </div>
</footer>
{{-- <script>
    window.onload = function() {
        const canvas = document.getElementById('picassoCanvas');
        const ctx = canvas.getContext('2d');
        let particles = [];

        function resizeCanvas() {
            canvas.width = canvas.offsetWidth;
            canvas.height = canvas.offsetHeight;
        }

        class Particle {
            constructor() {
                this.x = Math.random() * canvas.width;
                this.y = Math.random() * canvas.height;
                this.size = Math.random() * 5 + 1;
                this.speedX = Math.random() * 3 - 1.5;
                this.speedY = Math.random() * 3 - 1.5;
                this.color = Math.random() < 0.5 ? '#FFD700' : '#AFEEEE';
            }

            update() {
                this.x += this.speedX;
                this.y += this.speedY;

                if (this.size > 0.2) this.size -= 0.1;

                if (this.x < 0 || this.x > canvas.width) this.speedX *= -1;
                if (this.y < 0 || this.y > canvas.height) this.speedY *= -1;
            }

            draw() {
                ctx.fillStyle = this.color;
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                ctx.fill();
            }
        }

        function createParticles() {
            for (let i = 0; i < 100; i++) {
                particles.push(new Particle());
            }
        }

        function animateParticles() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            for (let i = 0; i < particles.length; i++) {
                particles[i].update();
                particles[i].draw();

                for (let j = i; j < particles.length; j++) {
                    const dx = particles[i].x - particles[j].x;
                    const dy = particles[i].y - particles[j].y;
                    const distance = Math.sqrt(dx * dx + dy * dy);

                    if (distance < 100) {
                        ctx.beginPath();
                        ctx.strokeStyle = particles[i].color;
                        ctx.lineWidth = 0.2;
                        ctx.moveTo(particles[i].x, particles[i].y);
                        ctx.lineTo(particles[j].x, particles[j].y);
                        ctx.stroke();
                    }
                }

                if (particles[i].size <= 0.2) {
                    particles.splice(i, 1);
                    i--;
                }
            }
            requestAnimationFrame(animateParticles);
        }

        function init() {
            resizeCanvas();
            createParticles();
            animateParticles();
        }

        init();

        window.addEventListener('resize', () => {
            resizeCanvas();
            particles = [];
            createParticles();
        });

        // Interactive elements
        const ctaButtons = document.querySelectorAll('.cta-button');
        ctaButtons.forEach(button => {
            button.addEventListener('mouseover', () => {
                for (let i = 0; i < 10; i++) {
                    particles.push(new Particle());
                }
            });
        });

        const socialIcons = document.querySelectorAll('.social-icon');
        socialIcons.forEach(icon => {
            icon.addEventListener('mouseover', () => {
                for (let i = 0; i < 5; i++) {
                    const particle = new Particle();
                    particle.x = icon.offsetLeft + icon.offsetWidth / 2;
                    particle.y = icon.offsetTop + icon.offsetHeight / 2;
                    particles.push(particle);
                }
            });
        });
    };
</script> --}}
