<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bridget OConnor</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
</head>
<body>
    <header>
        <div class= "menu-toggler">
            <div class="bar half start"></div>
            <div class="bar"></div>
            <div class="bar half end"></div>
        </div>
        <nav class="top-nav">
            <ul class="nav-list">
                <li>
                    <a href="index.html" class="nav-link">HOME</a>
                </li>
                <li>
                    <a href="#about" class="nav-link">ABOUT</a>
                </li>
                <li>
                    <a href="#services" class="nav-link">SKILLS</a>
                </li>
                <li>
                    <a href="#portfolio" class="nav-link">PORTFOLIO</a>
                </li>
                <li>
                    <a href="#experience" class="nav-link">EXPERIENCE</a>
                </li>
                <li>
                    <a href="#contact" class="nav-link">CONTACT</a>
                </li>
            </ul>
        </nav>
        <div class="landing-text">
            <h1>BRIDGET OCONNOR</h1>
            <h6>Developer | Artist </h6>
        </div>
    </header>

    <section class="about" id="about">
        <div class= "container">
            <div class="profile-img" data-aos="fade-right" data-aos-delay="300">
                <img src="images/profile.jpeg" alt="">
            </div>
            <div class="about-details" data-aos="fade-left" data-aos-delay="600">
                <div class="about-heading">
                    <h1>About</h1>
                    <h6>Me</h6>
                </div>
                <p>
                    Hello! I'm an Animation and CS Undergraduate, studying at Loyola Marymount University. 
                    I'm also minoring in Asian and Pacific studies. 
                    Born and raised in Hawai'i, I came to college in LA to pursue my passions of studying art and technology!
                    I'm currently back at home, working and studying remotely.
                    Career-wise I'm interested in software engineering, web-development, UI/UX, and AR.
                    I'm flexible and always excited meet new people and try new fields and tools.
                </p>
                <div class="social-media">
                    <ul class="nav-list">
                        <li>
                            <a href="https://github.com/boconno808/" class="icon-link">
                                <i class="fab fa-github-square"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/bridgetoco/" class="icon-link">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/bridgetoconno/" class="icon-link">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="services" id="services">
        <div class="container">
            <div class="section-heading">
                <h1>Skills</h1>
                <h6>My proficiencies</h6>
            </div>
            <div class="my-skills">
                <div class="skill" data-aos="fade-in" data-aos-delay="300">
                    <div class="icon-container">
                        <i class="fas fa-code"></i>
                    </div>
                    <h1>Development</h1>
                    <p>
                        Javascript, HTML/CSS, Java, C#, Jest, RTL,
                        React.js, Node.js, Python
                    </p>
                </div>
                <div class="skill" data-aos="fade-in" data-aos-delay="600">
                    <div class="icon-container">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h1>Art/Design</h1>
                    <p>
                        Photoshop, Illustrator,
                        Adobe XD, Adobe Animate, Maya, Unity
                    </p>
                </div>
                <div class="skill" data-aos="fade-in" data-aos-delay="900">
                    <div class="icon-container">
                        <i class="fas fa-archive"></i>
                    </div>
                    <h1>Organization</h1>
                    <p>
                        Jira, Microsoft Office, Git,
                        Agile/Kanban Workflows
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="portfolio" id="portfolio">
        <div class="container">
            <div class="section-heading">
                <h1>Portfolio</h1>
                <h6>See a few of my recent projects</h6>
            </div>
            <div class="portfolio-item">
                <div class="portfolio-img has-margin-right" data-aos="fade-right" data-aos-delay="300">
                    <img src="images/portitem1.jpeg" alt="">
                </div>
                <div class="portfolio-description" data-aos="fade-left" data-aos-delay="600" >
                    <h6>Web Development</h6>
                    <h1>SURP Research Website</h1>
                    <p>
                        Created a website using React.js and Next.js to showcase our SURP(Summer Undergraduate Research Project)
                        research and data analysis on those with transnational Japanese and Korean identities
                    </p>
                    <a href="https://surp2020.racheljn.vercel.app/" class="cta">View Project</a>
                </div>
            </div>
            <div class="portfolio-item">
                <div class="portfolio-description has-margin-right" data-aos="fade-right" data-aos-delay="900">
                    <h6>Game Development</h6>
                    <h1>Passage of Time</h1>
                    <p>
                        Interactive unity game that aims to spread awareness about immediate 
                        threat of the rising sea level. Utilizes kinect, OSC ports, Max, and Processing.
                    </p>
                    <a href="https://youtu.be/fvHHfGzNtkc" class="cta">View Project</a>
                </div>
                <div class="portfolio-img">
                    <img src="images/portitem2.jpeg" alt="" data-aos="fade-left" data-aos-delay="1200">
                </div>
            </div>
            <div class="portfolio-item">
                <div class="portfolio-img has-margin-right" data-aos="fade-right" data-aos-delay="1500">
                    <img src="images/portitem3.jpeg" alt="">
                </div>
                <div class="portfolio-description" data-aos="fade-left" data-aos-delay="1800">
                    <h6>Web Development</h6>
                    <h1>Coro-No-Virus</h1>
                    <p>
                        Informational website created for Athenahacks 2020 in a team of 2, supports
                        multiple languages. 
                        Created using React.js, Microsoft Azure Translator, and the Material UI library.
                    </p>
                    <a href="https://boconno808.github.io/CoroNo/" class="cta">View Project</a>
                </div>
            </div>
            <div class="portfolio-item">
                <div class="portfolio-description has-margin-right" data-aos="fade-right" data-aos-delay="2100">
                    <h6>Web Development</h6>
                    <h1>Random Japanese Word Generator</h1>
                    <p>
                        Simple website that randomly generates Japanese words with English definitions. 
                        Website also shows whether or not the word generated is common and its JLPT level if applicable.
                        Created using React.js, Gatsby, Semantic UI, Denshi-Jishos API, and a random word generator API.
                    </p>
                    <a href="https://randomjpnwordgen.netlify.app/" class="cta">View Project</a>
                </div>
                <div class="portfolio-img">
                    <img src="images/portitem4.jpeg" alt="" data-aos="fade-left" data-aos-delay="2400">
                </div>
            </div>
        </div>
    </section>

    <section class="experience" id="experience">
        <div class="container">
            <div class="section-heading">
                <h1>Experience</h1>
                <h6>Recent employment history</h6>
            </div>
        </div>
        <div class="timeline" data-aos="fade-down" data-aos-delay="300">
            <ul>
                <li class="date" data-date="6/2020 - 8/2020">
                    <h1>Savage x Fenty - TechStyle</h1>
                    <p>
                        Helped fix bugs and add minor features to the Savage X Fenty website of
                        International e-commerce company TechStyle using React.js / Redux.
                        Worked to introduce additional tests in the build pipe using react-testing-library / Jest.
                        Experienced managing tasks in Jira and Agile/Kanban workflow.
                    </p>
                </li>
                <li class="date" data-date="3/2019 - 5/2019">
                    <h1>TSEHAI Publishers</h1>
                    <p>
                        Drew detail heavy illustrations in Adobe Illustrator for Ethiopian centric children's coloring book.
                    </p>
                </li>
                <li class="date" data-date="1/2019 - 5/2019">
                    <h1>Automotus</h1>
                    <p>
                        Helped to develop front end features for the client portal of a company
                        that helps parking & traffic administrators boost efficiency with video-analysis technology.
                        Implemented UI components using the React library coded in Typescript.
                    </p>
                </li>
            </ul>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="container">
            <div class="section-heading">
                <h1>Contact</h1>
                <h6>I'd love to get in touch</h6>
                <h6 class="sent-notification"></h6>
            </div>
            <form id="myForm" data-aos="fade-up" data-aos-delay="300">

                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter name..." required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter email..." required>

                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" placeholder="Enter subject..." required>

                <label for="message">Message:</label>
                <textarea name="message" id="message" cols="10" rows="10"></textarea>
                <button type="submit" id="submit" onsubmit="sendEmail()">Submit</button>
            </form>
        </div>
    </section>

    <footer class="copyright">
        <div class="up" id="up">
            <i class="fas fa-chevron-up"></i>

        </div>
        <p>&copy; 2020 Bridget OConnor</p>
    </footer>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript">
        function sendEmail(){
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var message = $("#message");

            if(isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject)){
                $.ajax({
                    url: 'sendEmail.php',
                    method: 'POST',
                    dataType: 'json',
                    data:{
                        name: name.val(),
                        email: email.val(),
                        subject: subject.val(),
                        message: message.val()
                    }, success: function(response){
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Thanks for your email!");
                    }
                });
            }
        }
        function isNotEmpty(caller){
            if(caller.val()==""){
                caller.css('border','1px solid red');
                return false;
            }
            else
            {
                caller.css('border', '');
                return true;
            }
        }
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="main.js"></script>
</body>
</html>