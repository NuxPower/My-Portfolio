<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yohan Lukin Callanta - Portfolio</title>
    <link rel="stylesheet" href="WEBSYS-PROJECTCSS.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
</head>
<body>
    <div id="particles-js"></div>

    <nav id="navbar" class="transparent shadow">
        <div class="container">
            <div class="nav-left">
                <a href="#" id="header-link"><h1>Yohan Lukin Callanta</h1></a>
                <div class="nav-right">
                    <div class="menu-toggle" id="menu-toggle">&#9776;</div>
                        <ul class="nav-list hidden">
                            <li class="active"><a href="#about">About</a></li>
                            <li class="active"><a href="#education-background">Education</a></li>
                            <li class="active"><a href="#work-experience">Experience</a></li>
                            <li class="active"><a href="#skills">Skills</a></li>
                            <li class="active"><a href="#projects">Projects</a></li>
                            <li class="active"><a href="#contact">Contact</a></li>
                        </ul>
                </div>
            </div>
        </div>
    </nav>

    <header class="hero">
        <div class="container">
            <div class="image-gallery">
                <img src="https://www.imghost.net/ib/3BmuKI5Z09l9Lkh_1710733918.png" alt="Image 1"/>
                <!-- <img src="Empty.png" alt="Image 1"> -->
            </div>
            <div class="hero-content">
                <div class="circular-image">
                    <img src="https://i.ibb.co/QndMXx1/received-875844060538503.jpg" alt="circular-image">
                </div>    
                <div class="hero-overlay">
                    <h1>Yohan Lukin Callanta</h1>
                </div>
                <p>Web Developer & Programmer</p>
            </div>
        </div>
    </header>

    <section id="about" class="animated-section">
        <div class="container">
                <h2>About Me</h2>
                <p>
                    Hello there! I'm Yohan Lukin Callanta, currently 19 years old, an enthusiastic and aspiring web developer and programmer based in Philippines.
                    Ever since I embarked on my journey into the world of coding, I've been passionate about crafting digital experiences
                    and solving problems through innovative and efficient solutions.
                </p>
        
                <p>
                    My journey in web development began with a curiosity to understand the intricacies of building for the web. I have
                    been immersed in learning and exploring various technologies, from front-end frameworks like HTML, CSS, and JavaScript. The dynamic nature of programming and the ever-evolving tech landscape
                    fuel my constant desire to enhance my skills and stay up-to-date with the latest trends in the field.
                </p>
        
                <p>
                    Beyond coding, I believe in the power of collaboration and continuous improvement. I am excited about the prospect of
                    contributing to meaningful projects, solving real-world problems, and constantly refining my skills to make a positive
                    impact in the digital realm.
                </p>
        
                <p>
                    Let's connect and explore the endless possibilities of the web together. Feel free to reach out and join me on this
                    exciting journey of growth and creativity!
                </p>
        </div>
    </section>

    <section id="education-background" class="animated-section">
        <div class="container">
            <h2>Education Background</h2>
            <ul>
                <li>
                    <h3>Bukidnon National High School</h3>
                    <p>Special Program in Sports</p>
                </li>
                <li>
                    <h3>Bukidnon National High School</h3>
                    <p>General Academic Strand</p>
                </li>
                <li>
                    <h3>Central Mindanao University</h3>
                    <p>2nd Year Undergraduate</p>
                </li>
            </ul>
        </div>
    </section>

    <section id="work-experience" class="animated-section">
        <div class="container">
            <h2>Work Experience</h2>
            <ul>
                <li>
                    <h3>CMU Quality Assurance Office</h3>
                    <p>ISO Accreditation</p>
                </li>
                <li>
                    <h3>DepED (Freelance)</h3>
                    <p>Data Analysis and Reporting</p>
                </li>
                <li>
                    <h3>DPWH (Freelance)</h3>
                    <p>Structural and Plumbing Engineering (Assistant)</p>
                </li>
            </ul>
    </section>

    <section id="skills" class="animated-section">
        <div class="container">
            <h2>Programming Skills</h2>
            <ul>
                <li>HTML5</li>
                <li>CSS3</li>
                <li>JavaScript</li>
                <li>Python</li>
                <li>Java</li>
                <li>C/C++</li>
            </ul>
        </div>
    </section>

    <section id="projects" class="animated-section">
        <div class="container">
            <h2>Projects</h2>
            <div class="project">
                <img src='https://i.postimg.cc/tJXh13QX/Screenshot-2023-12-14-112041.png' alt='Project 1'/>
                <div id="project-description">
                    <h3>Project 1</h3>
                    <p>A simple calculator with chill, anime vibes.</p>
                </div>
            </div>
            <div class="project">
                <img src="https://www.imghost.net/ib/gZBPTy27YzyB0tg_1710734517.png" alt="Project 2"/>
                <div id="project-description">
                    <h3>Project 2</h3>
                    <p>Simple Registration Form.</p>
                </div>
            </div>
        </div>
    </section>


    <section id="contact" class="animated-section">
        <div class="container">
            <h2>Contact</h2>
            <p>Feel free to reach out to me at: nahoynikulcallanta@gmail.com</p>
        </div>    </section>

    <footer>
        <div class="container">
            <p>&copy; 2023 Yohan Lukin Callanta. All Rights Reserved.</p>
        </div>
    </footer>

    <script>
        
        document.addEventListener('DOMContentLoaded', function () {
            const scrollLinks = document.querySelectorAll('a[href^="#"]');
            scrollLinks.forEach(link => {
                link.addEventListener('click', function (e) {
                    e.preventDefault();

                    const targetId = this.getAttribute('href').substring(1);
                    const targetElement = document.getElementById(targetId);

                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 50,
                            behavior: 'smooth'
                        });
                    }
                });
            });

            const scrollTopButton = document.getElementById('scroll-top-button');
            if (scrollTopButton) {
                scrollTopButton.addEventListener('click', function () {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                });
            }
        });
        document.addEventListener("DOMContentLoaded", function () {
            const images = document.querySelectorAll('.image-gallery img');
            let currentImageIndex = 0;

            document.getElementById('nextButton').addEventListener('click', function () {
                changeImage(1);
            });

            document.getElementById('prevButton').addEventListener('click', function () {
                changeImage(-1);
            });

            function changeImage(step) {
                images[currentImageIndex].style.opacity = 0;
                currentImageIndex = (currentImageIndex + step + images.length) % images.length;
                images[currentImageIndex].style.opacity = 1;
            }
        });

        document.addEventListener('DOMContentLoaded', function () {
            const headerLink = document.getElementById('header-link');
            const navList = document.querySelector('.nav-list');

            // ambot saon ni nag libog nako
            function smoothScroll(target, duration) {
                const targetPosition = target.getBoundingClientRect().top + window.scrollY;
                const startPosition = window.pageYOffset;
                const distance = targetPosition - startPosition;
                let startTime = null;

                function animation(currentTime) {
                    if (startTime === null) startTime = currentTime;
                    const timeElapsed = currentTime - startTime;
                    const run = ease(timeElapsed, startPosition, distance, duration);
                    window.scrollTo(0, run);
                    if (timeElapsed < duration) requestAnimationFrame(animation);
                }

                function ease(t, b, c, d) {
                    t /= d / 2;
                    if (t < 1) return c / 2 * t * t + b;
                    t--;
                    return -c / 2 * (t * (t - 2) - 1) + b;
                }

                requestAnimationFrame(animation);
            }

            headerLink.addEventListener('click', function (event) {
                event.preventDefault();
                const targetSection = document.querySelector('body');
                const duration = 1000; 
                smoothScroll(targetSection, duration);
            });

            headerLink.addEventListener('mouseenter', function () {
                headerLink.style.transition = 'color 0.3s ease-in-out';
                headerLink.style.color = '#4E7A5B';
            });

            headerLink.addEventListener('mouseout', function () {
                headerLink.style.transition = 'color 0.3s ease-in-out';
                headerLink.style.color = '';
            });

            menuToggle.addEventListener('click', function () {
                navList.classList.toggle('active');
            });

            window.addEventListener('resize', function () {
                if (window.innerWidth > 768) {
                    navList.classList.remove('active');
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            particlesJS('particles-js', {
                "particles": {
                    "number": {
                        "value": 80,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": "#ffffff"
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        },
                        "polygon": {
                            "nb_sides": 5
                        },
                        "image": {
                            "src": "img/github.svg",
                            "width": 100,
                            "height": 100
                        }
                    },
                    "opacity": {
                        "value": 0.5,
                        "random": false,
                        "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 3,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#ffffff",
                        "opacity": 0.4,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 6,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false,
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": true,
                            "mode": "repulse"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 400,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "bubble": {
                            "distance": 400,
                            "size": 40,
                            "duration": 2,
                            "opacity": 8,
                            "speed": 3
                        },
                        "repulse": {
                            "distance": 200,
                            "duration": 0.4
                        },
                        "push": {
                            "particles_nb": 4
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                    }
                },
                "retina_detect": true
            });
        });

        particlesJS("particles-js", {
            "particles": {
                "number": {
                    "value": 80,
                    "density": {
                        "enable": true,
                        "value_area": 800
                    }
                },
                "color": {
                    "value": "#ffffff"
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    },
                    "polygon": {
                        "nb_sides": 5
                    },
                    "image": {
                        "src": "img/github.svg",
                        "width": 100,
                        "height": 100
                    }
                },
                "opacity": {
                    "value": 0.5,
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 3,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 40,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#ffffff",
                    "opacity": 0.4,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 6,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false,
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "repulse"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 400,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 400,
                        "size": 40,
                        "duration": 2,
                        "opacity": 8,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 200,
                        "duration": 0.4
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true
        });
    </script>
</body>
</html>
