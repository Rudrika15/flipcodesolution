{{-- <footer class=" bg-dark text-center text-white ">
   
    <div class="container p-4">
      
        <section class="d-flex justify-content-end mb-4 footer-social-link-icons ">
           
            <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/flipcodesolutions/"
                target="_blank" role="button">
                <i class="bi bi-instagram"></i>
            </a>

            
            <a class="btn btn-outline-light btn-floating m-1"
                href="https://www.facebook.com/profile.php?id=61553723550979" target="_blank" role="button">
                <i class="bi bi-facebook"></i>
            </a>

          
            <a class="btn btn-outline-light btn-floating m-1"
                href="https://www.linkedin.com/company/flipcode-solutions-private-limited/mycompany/" target="_blank"
                role="button">
                <i class="bi bi-linkedin"></i>
            </a>

        </section>
        
        <section class="footer-links text-start">
           
            <div class="row ">
                
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0 ps-5">
                    <h5 class="text-uppercase">Quick links</h5>

                    <ul class="list-unstyled mb-0 for-hover">
                        <li>
                            <a class="text-white" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li>
                            <a class="text-white" href="{{ route('about') }}">About</a>
                        </li>
                        <li>
                            <a class="text-white" href="{{ route('service') }}">Services</a>
                        </li>
                        <li>
                            <a class="text-white" href="{{ route('contact') }}">Get in Touch</a>
                        </li>
                    </ul>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Address</h5>
                    <p>
                        Flipcode Solution Private Limited <br>
                        Nr. Panama Sales, Dalmill road <br>
                        Surendranagar ,<br>
                        Gujarat 363001 India
                    </p>
                </div>
               
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0 for-hover">
                    <h5 class="text-uppercase">Email</h5>
                    <a class="text-white" href="mailto:contact@flipcodesolutions.com">contact@flipcodesolutions.com</a>
                    <a class="text-white" href="mailto:career@flipcodesolutions.com">career@flipcodesolutions.com</a>
                    <h5 class="text-uppercase mt-4">Contact No</h5>
                    <a class="text-white" href="tel:9979404044">+91 997 940 4044</a>
                </div>
               
            </div>
            
        </section>
       
    </div>

  

 
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">

        <span>&copy;</span><span id="demo"></span> <span>Copyright </span>
        <script>
            const d = new Date();
            let year = d.getFullYear();
            document.getElementById("demo").innerHTML = year;
        </script>
        <a class="text-white" href="#"> Flipcodesolution Private Limited</a>
    </div>
   
</footer> --}}
<footer id="picassoFooter">
    <div class="footer-content">
        <div class="footer-section footer-logo">
            <img src="img/newLogo.png" style="width: 70px; height: 70px;">
            {{-- <svg class="logo" width="100" height="100" viewBox="0 0 100 100" src="img/newLogo.png"> --}}
            {{-- <circle cx="50" cy="50" r="45" fill="#ff6600" stroke="#ff6600" stroke-width="5" />
            <path d="M30 70 Q 50 20 70 70" stroke="#AFEEEE" stroke-width="5" fill="none" />
            <circle cx="50" cy="50" r="10" fill="#ff6600" />
            </svg> --}}
            <h2>Flipcode Solutions</h2>
            <p>Innovating the future, one brushstroke at a time.</p>
        </div>
        <div class="footer-section footer-navigation">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="{{ route('home') }}" class="hover-effect">Home</a></li>
                <li><a href="{{ route('about') }}" class="hover-effect">About Us</a></li>
                <li><a href="{{ route('service') }}"class="hover-effect">Services</a></li>
                <li><a href="{{ route('portfolio') }}" class="hover-effect">Clients</a></li>
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
                    <p>Flipcode Solution Private Limited<br>
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
    {{-- <div class="footer-art">
        <canvas id="picassoCanvas"></canvas>
    </div> --}}
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
<script>
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
</script>
