<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nickole Tan Yin Yin</title>

        <link rel="icon" type="image/png" href="{{ asset('favicon2.png') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/mdi.css') }}">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Quicksand:wght@300..700&family=Saira:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    </head>
    <body>
        <div class="main-screen">
            <div class="left">
                <!-- Personal Info -->
                <div class="personal-info">
                    <div class="nickname">Nickole Tan</div>
                    <div class="role">Full Stack Web Developer</div>
                    <div class="summary">
                        I build accessible, pixel-perfect digital experiencs for the web.
                    </div>
                </div>

                <!-- Navigator -->
                <div class="navigator">
                    <a href="#intro" class="nav-link bolded">
                        <div class="line"></div>
                        <span>Introduction</span>
                    </a>
                    <a href="#intro" class="nav-link">
                        <div class="line"></div>
                        <span>Experience</span>
                    </a>
                    <a href="#intro" class="nav-link">
                        <div class="line"></div>
                        <span>Projects</span>
                    </a>
                </div>

                <!-- Directions -->
                <div class="directions">
                    <a href="#" class="nav-link">
                        <i class="mdi mdi-github"></i>
                    </a>
                    <a href="#" class="nav-link">
                        <i class="mdi mdi-linkedin"></i>
                    </a>
                </div>
            </div>

            <div class="right">
                <section class="intro">
                    <p>
                        I’m a developer passionate about crafting accessible, pixel-perfect user interfaces that blend thoughtful design with robust engineering. My favorite work lies at the intersection of design and development, creating experiences that not only look great but are meticulously built for performance and usability.
                        <br/><br/>
                        Currently, I'm a Senior Front-End Engineer at <b>Klaviyo</b>, specializing in accessibility. I contribute to the creation and maintenance of UI components that power Klaviyo’s frontend, ensuring our platform meets web accessibility standards and best practices to deliver an inclusive user experience.
                        <br/><br/>
                        In the past, I've had the opportunity to develop software across a variety of settings — from advertising agencies and large corporations to start-ups and small digital product studios. Additionally, I also released a comprehensive video course a few years ago, guiding learners through building a web app with the Spotify API.
                    </p>
                </section>

                <section class="experience">
                    <div class="exp-box">
                        <div class="date">
                            2024 - Present
                        </div>
                        <div class="info">
                            <div class="title">Junior Full Stack Web Developer</div>
                            <div class="company">Cocube Solutions Sdn Bhd</div>
                            <div class="desc">
                                In the past, I've had the opportunity to develop software across a variety of settings — from advertising agencies and large corporations to start-ups and small digital product studios. Additionally, I also released a comprehensive video course a few years ago, guiding learners through building a web app with the Spotify API.
                            </div>
                            <div class="badget-list">
                                <div class="badget">Typescript</div>
                                <div class="badget">VueJs</div>
                                <div class="badget">PHP</div>
                                <div class="badget">Docker</div>
                            </div>
                        </div>
                    </div>

                    <div class="exp-box">
                        <div class="date">
                            2024 - Present
                        </div>
                        <div class="info">
                            <div class="title">Full Stack Web Developer</div>
                            <div class="company">KF Tech Flow Solutions</div>
                            <div class="desc">
                                In the past, I've had the opportunity to develop software across a variety of settings — from advertising agencies and large corporations to start-ups and small digital product studios. Additionally, I also released a comprehensive video course a few years ago, guiding learners through building a web app with the Spotify API.
                            </div>
                            <div class="badget-list">
                                <div class="badget">Typescript</div>
                                <div class="badget">VueJs</div>
                                <div class="badget">PHP</div>
                                <div class="badget">Docker</div>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="more">
                        <span>View Full Resume</span>
                        <i class="mdi mdi-arrow-top-right"></i>
                    </a>
                </section>

                <section class="project">
                    <div class="project-list">
                        
                        <a href="#" class="projectnav">
                            <div class="first">
                                <img src="{{ asset('default.png') }}" alt="thumbnail" class="thumbnail"/>
                                <div class="info">
                                    <div class="name">CondoMart Landing Page</div>
                                    <div class="badget-list">
                                        <div class="badget">Laravel</div>
                                    </div>
                                    <div class="desc">
                                        Web app for visualizing personalized Spotify data.
                                    </div>
                                </div>
                            </div>

                            <div class="secondary">
                                <div>
                                    <div class="label">What I Did</div>
                                    <div class="info">
                                        <div class="points">Designed and implemented REST APIs using Laravel</div>

                                        <div class="points">Built admin dashboard with Vue 3 + Tailwind</div>

                                        <div class="points">Implemented role-based access control</div>

                                        <div class="points">Optimized database queries for large datasets</div>
                                    </div>
                                </div>

                                <div>
                                    <div class="label">Impacts</div>
                                    <div class="info">
                                        <div class="points">Designed and implemented REST APIs using Laravel</div>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="more">
                                <i class="mdi mdi-unfold-more-horizontal"></i>
                                <span>Hover to Explore</span>
                            </div>
                            
                        </a>

                        <a href="#" class="projectnav">
                            <div class="first">
                                <img src="{{ asset('default.png') }}" alt="thumbnail" class="thumbnail"/>
                                <div class="info">
                                    <div class="name">CondoMart Landing Page</div>
                                    <div class="badget-list">
                                        <div class="badget">Laravel</div>
                                    </div>
                                    <div class="desc">
                                        Web app for visualizing personalized Spotify data.
                                    </div>
                                </div>
                            </div>

                            <div class="secondary">
                                <div>
                                    <div class="label">What I Did</div>
                                    <div class="info">
                                        <div class="points">Designed and implemented REST APIs using Laravel</div>

                                        <div class="points">Built admin dashboard with Vue 3 + Tailwind</div>

                                        <div class="points">Implemented role-based access control</div>

                                        <div class="points">Optimized database queries for large datasets</div>
                                    </div>
                                </div>

                                <div>
                                    <div class="label">Impacts</div>
                                    <div class="info">
                                        <div class="points">Designed and implemented REST APIs using Laravel</div>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="more">
                                <i class="mdi mdi-unfold-more-horizontal"></i>
                                <span>Hover to Explore</span>
                            </div>
                            
                        </a>
                    </div>

                    <a href="#" class="more">
                        <span>View All Archieved Projects</span>
                        <i class="mdi mdi-arrow-top-right"></i>
                    </a>
                </section>

                <section class="footer">
                    <span>Loosely designed in Figma and coded in Cursor by yours truly. Built with Laravel and VueJs, deployed with Namecheap. All text is set in the Saira typeface.</span>
                </section>
            </div>
        </div>

        <div id="followMouse"></div>
        <script>
            const followDiv = document.getElementById('followMouse');

            document.addEventListener('mousemove', (e) => {
            // e.clientX 和 e.clientY 是鼠标坐标
            followDiv.style.transform = `translate(${e.clientX - 150}px, ${e.clientY - 150}px)`;
            });
        </script>
    </body>
</html>