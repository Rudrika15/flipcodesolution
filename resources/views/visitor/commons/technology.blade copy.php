<style>
    @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap");
    @import url("https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css");

    * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }

    .slider-container {
        position: relative;
        width: 100vw;
        height: 50vh;
        overflow: hidden;
        margin-bottom: 50px;
    }

    .left-slide {
        height: 100%;
        width: 35%;
        position: absolute;
        top: 0;
        left: 0;
        transition: transform 0.5s ease-in-out;
    }

    .left-slide>div {
        height: 100%;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        color: #fff;
        text-align: center;
    }

    .left-slide h1 {
        font-size: 40px;
        margin-bottom: 10px;
        margin-top: 0;
        /* Removed negative margin to center properly */
    }

    .right-slide {
        height: 100% !important;
        position: absolute !important;
        left: 35% !important;
        width: 65% !important;
        transition: transform 0.5s ease-in-out;
    }

    .right-slide>div {
        background-repeat: no-repeat !important;
        background-size: cover !important;
        background-position: center center !important;
        height: 100%;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 20px;
        /* Add padding for better readability */
        color: #fff;
    }

    button {
        border: none;
        background-color: #fff;
        color: #aaa;
        cursor: pointer;
        font-size: 16px;
        width: 40px !important;
        height: 40px !important;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .slider-container .action-buttons button {
        position: absolute;
        left: 35%;
        top: 50%;
        z-index: 100;
    }

    .slider-container .action-buttons .down-button {
        transform: translateX(-100%);
        border-radius: 4px 0 0 4px;
        background-color: #5b5d5c
    }

    .slider-container .action-buttons .up-button {
        transform: translateY(-100%);
        border-radius: 0 4px 4px 0;
        background-color: #5b5d5c
    }

    .down-button:hover,
    .up-button:hover {
        background-color: #f0f0f0;
    }

    .introText {
        padding: 25px;
        font: 1.6rem sans-serif;
        text-align: left;
    }

    /* mobileview media query for intro text */
    @media only screen and (max-width: 600px) {
        .introText {
            padding: 25px;
            font: 0.7rem sans-serif;
            text-align: left;
        }
    }

    .img {
        width: 50%;
        aspect-ratio: 3/2;
        object-fit: fit;
    }
</style>
<div class="slider-container">
    <div class="left-slide">
        <div>
            <img class="img" src="https://flipcodesolutions.com/img/react.png" alt="">
        </div>
        <div>
            <img class="img"
                src="data:image/png;base64,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"
                alt="">
        </div>
        <div>
            <img class="img" src="https://storage.googleapis.com/cms-storage-bucket/0dbfcc7a59cd1cf16282.png"
                width="300" height="300" alt="">
        </div>

        <div>
            <img class="img" src="https://www.php.net/images/logos/new-php-logo.svg" width="500" height="500"
                alt="">
        </div>
        <div>
            <img class="img" src="https://cdn-icons-png.flaticon.com/512/174/174836.png" width="300"
                height="300" alt="">
        </div>
        <div>
            <img class="img" src="https://flipcodesolutions.com/img/iosapp.png" width="300" height="300"
                alt="">
        </div>
        <div>
            <img class="img" src="https://cdn-icons-png.flaticon.com/512/174/174881.png" width="300"
                height="300" alt="">
        </div>
        <div>
            <img class="img"
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT13_r1wkc5ME-mabc_Tdqnru5PGc_GzvS0pw&s"
                width="300" height="300" alt="">
        </div>
        <div>
            <img class="img"
                src="https://seeklogo.com/images/M/microsoft-net-framework-logo-B9BA1A3DA1-seeklogo.com.png"
                width="300" height="300" alt="">
        </div>
        <div>
            <img class="img"
                src="https://uxwing.com/wp-content/themes/uxwing/download/brands-and-social-media/vue-js-icon.png"
                width="300" height="300" alt="">
        </div>
        <div>
            <img class="img"
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShcmNsbFZbkW12pz87b1Q64Dl2VNcmhXzcnQ&s"
                width="300" height="300" alt="">
        </div>
        <div>
            <img class="img" src="https://www.svgrepo.com/show/376337/node-js.svg" width="300" height="300"
                alt="">
        </div>
    </div>
    <div class="right-slide">
        <div style="background-color: #404137;">

            <p class="introText">
                Node.js is an open-source, cross-platform runtime environment that allows developers to execute
                JavaScript on the server side. Built on Chrome's V8 engine, it enables fast, scalable network
                applications by using an event-driven, non-blocking I/O model. Node.js is ideal for building real-time
                applications and APIs.
            </p>
        </div>
        <div style="background-color: #c3002f;">

            <p class="introText">
                Angular is a robust, open-source framework developed by Google for building dynamic web applications. It
                uses TypeScript and a component-based architecture to create scalable, maintainable, and modular
                applications. With features like two-way data binding, dependency injection, and a comprehensive set of
                tools, Angular is widely used for developing complex, single-page applications.
            </p>
        </div>
        <div style="background-color: #4dba87;">

            <p class="introText">
                Vue.js is a progressive JavaScript framework used for building user interfaces and single-page
                applications. It's designed to be incrementally adoptable, making it easy to integrate with other
                projects. Vue's reactive data binding and component-based architecture offer flexibility, simplicity,
                and performance, making it popular among developers for creating dynamic web applications.
            </p>
        </div>
        <div style="background-color: #672a7a;">

            <p class="introText">
                .NET is a free, open-source development platform created by Microsoft. It enables developers to build a
                wide range of applications, including web, mobile, desktop, and cloud-based apps. With support for
                multiple programming languages like C#, F#, and VB.NET, .NET offers flexibility, scalability, and robust
                performance across various platforms.
            </p>
        </div>
        <div style="background-color: #55aef6;">

            <p class="introText">
                React Native is an open-source framework developed by Facebook for building mobile applications using
                JavaScript and React. It allows developers to create apps for both iOS and Android from a single
                codebase. React Native combines the best of native development with React, offering fast performance and
                a rich user experience.
            </p>
        </div>
        <div style="background-color: #00769d;">

            <p class="introText">
                WordPress is a popular open-source content management system (CMS) used for creating websites and blogs.
                It offers a user-friendly interface, customizable themes, and a vast plugin ecosystem, making it
                accessible to both beginners and professionals. WordPress powers over 40% of websites worldwide,
                enabling easy website creation and management.
            </p>
        </div>
        <div style="background-color: #000;">

            <p class="introText">
                Swift is a powerful, intuitive programming language created by Apple for building iOS, macOS, watchOS,
                and tvOS applications. It offers modern syntax, safety features, and high performance, making it easy
                for developers to write efficient and reliable code. Swift is designed to be beginner-friendly while
                also meeting the needs of professional developers.
            </p>
        </div>
        <div style="background-color: #aac148;">

            <p class="introText">
                Android is an open-source operating system developed by Google, designed for smartphones, tablets, and
                other mobile devices. It supports a wide range of applications and services, offering flexibility and
                customization. With a vast app ecosystem and user-friendly interface, Android powers millions of devices
                worldwide, making it the most popular mobile OS.
            </p>
        </div>
        <div style="background-color: #777bb3;">

            <p class="introText">
                PHP is a widely-used open-source scripting language designed for web development. It is embedded in HTML
                and executed on the server, making it ideal for creating dynamic web pages. Known for its simplicity and
                flexibility, PHP powers many of the world's websites and content management systems, including
                WordPress.
            </p>
        </div>


        <div style="background-color: #055a9d;">

            <p class="introText">
                What is Flutter? — A Quick OverviewFlutter is an open-source UI software development kit created by
                Google for developing natively compiled applications that use it as the “reparirman”. Developers can
                compile natively, while making sure the apps they create with Flutter are fast and provide high-quality
                user experience on all form factors. Flutter allows developing visually rich and efficient applications
                with its set of customizable widgets, compiled directly to native code. This strategy requires less
                development time, uniformity in the app across multiple platforms and hence becoming a much sought after
                alternative to build cutting edge apps.
            </p>
        </div>
        <div style="background-color: #ff2d20;">

            <p class="introText">
                We mentioned that Laravel is an open-source PHP web framework created by Taylor Otwell. It tries to make
                web development less painful and more fun by giving you a clean syntax combined with powerful tools.
                Laravel uses MVC (Model-View-Controller) architectural pattern, hence code remains in separate files and
                it becomes easy to manage.
            </p>
        </div>
        <div style="background-color: #69dcfb;">

            <p class="introText">
                React. js, known simply as React or React. js is a JavaScript library for creating user interfaces
                and the Nature of Spa (Single Page Application) are more suitable where data will change over time.
                React is maintained and backed by Facebook, with its elegant design of building component-based
                modular user interfaces along with state management in the components themselves.
            </p>
        </div>
    </div>
    <div class="action-buttons">
        <button class="up-button">
            <i class="fa-solid fa-arrow-up"></i>
        </button>
        <button class="down-button">
            <i class="fa-solid fa-arrow-down"></i>
        </button>
    </div>
</div>
<script>
    // Get references to HTML elements
    const sliderContainer = document.querySelector(".slider-container");
    const slidesLeft = document.querySelector(".left-slide");
    const slidesRight = document.querySelector(".right-slide");
    const upButton = document.querySelector(".up-button");
    const downButton = document.querySelector(".down-button");

    // Calculate the total number of slides
    const slidesLength = slidesRight.querySelectorAll("div").length;

    // Initialize the active slide index
    let activeSlidesIndex = 0;

    // Set initial position for left slides
    slidesLeft.style.top = `-${(slidesLength - 1) * 50}vh`; // Adjusted to 50vh

    // Add click event listeners to up and down buttons
    upButton.addEventListener("click", () => changeSlide("up"));
    downButton.addEventListener("click", () => changeSlide("down"));

    // Function to change the active slide
    const changeSlide = (direction) => {
        const sliderHeight = sliderContainer.clientHeight;
        if (direction === "up") {
            activeSlidesIndex++;
            if (activeSlidesIndex > slidesLength - 1) {
                activeSlidesIndex = 0;
            }
        } else if (direction === "down") {
            activeSlidesIndex--;
            if (activeSlidesIndex < 0) {
                activeSlidesIndex = slidesLength - 1;
            }
        }

        // Update the transform property to change the slide position
        slidesRight.style.transform = `translateY(-${activeSlidesIndex * sliderHeight}px)`;
        slidesLeft.style.transform = `translateY(${activeSlidesIndex * sliderHeight}px)`;
    };

    // Auto-scroll every 3 seconds
    setInterval(() => changeSlide("up"), 2500);
</script>
