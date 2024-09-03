<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="portfolio,education,experience,james anthony,rosales" name="keywords">

        <title>Education & Experience</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

        <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">

    </head>

    <body>

        <header id="header" class="header-top">
            <div class="container">
                <nav class="nav-menu d-none d-lg-block" id="center">
                    <ul>
                        <li class="{{ request()->is('/') ? '' : '' }}"><a href="{{ route('homepage') }}"><span>Home</span></a></li>
                        <li class="{{ request()->is('education-experience') ? 'active' : '' }}"><a href="{{ route('education-experience') }}"><span>Education & Experience</span></a></li>
                        <li class="{{ request()->is('project-skills') ? '' : '' }}"><a href="{{ route('project-skills') }}"><span>Projects & Skills</span></a></li>
                        <li class="{{ request()->is('about') ? '' : '' }}"><a href="{{ route('about') }}"><span>About</span></a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <main>
            <section id="education-experience" class="educ-exp">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12" data-aos="fade-up">
                            <div class="col-md-12 mt-4 mt-md-0 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <h1 style="text-align:left; font-size:x-large; font-weight: bold;">
                                    <a href="https://bicol-u.edu.ph/" style="color:#ffefef">Bicol University</a><br>
                                </h1>
                                <h2 style="text-align:left; font-size:larger;">August 2022 - Present</h2>
                                <p style="text-align:left;color:#fff"><em>Undergraduate Student</em></p>
                                <ul style="text-align:left;">
                                    <li>Currently a junior student at Bicol University (Main Campus) majoring in Information Technology.</li>
                                </ul>
                            </div>

                            <div class="col-md-12 mt-4 mt-md-0 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <h1 style="text-align:left; font-size:x-large; font-weight: bold;">DCTV Cable and Network Services Inc.<br></h1>
                                <h2 style="text-align:left; font-size:larger;">2022</h2>
                                <p style="text-align:left;color:#fff"><em>Work Immersion Intern</em></p>
                                <ul style="text-align:left;">
                                    <li>Experienced in hands-on internet service installations, including fiber optic setup and problem-solving for equipment compatibility.</li>
                                    <li>Effective communication with customers and exposure to field operations and safety protocols.</li>
                                </ul>
                            </div>

                            <div class="col-md-12 mt-4 mt-md-0 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <h1 style="text-align:left; font-size:x-large; font-weight: bold;">Obtained National Certificate in Computer System Servicing (CSS)<br></h1>
                                <h2 style="text-align:left; font-size:larger;">2021</h2>
                                <p style="text-align:left;color:#fff"><em>Certificate Holder</em></p>
                                <ul style="text-align:left;">
                                    <li>Accredited Assessment Center - San Francisco Institute of Science and Technology (SFIST)</li>
                                </ul>
                            </div>

                            <div class="col-md-12 mt-4 mt-md-0 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <h1 style="text-align:left; font-size:x-large; font-weight: bold;">320 hours Training in the JDVP Program for CSS NCII<br></h1>
                                <h2 style="text-align:left; font-size:larger;">2021</h2>
                                <p style="text-align:left;color:#fff"><em>Trainee</em></p>
                                <ul style="text-align:left;">
                                    <li>Bicol Training and Technological College Inc., Aguinaldo St., Bacacay, Albay</li>
                                </ul>
                            </div>

                            <div class="col-md-12 mt-4 mt-md-0 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <h1 style="text-align:left; font-size:x-large; font-weight: bold;">Completed CSS NCII Training<br></h1>
                                <h2 style="text-align:left; font-size:larger;">2021</h2>
                                <p style="text-align:left;color:#fff"><em>Trainee</em></p>
                                <ul style="text-align:left;">
                                    <li>Livelihood and Skills Training Center (LSTC-Tabaco City)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

    </body>

</html>
