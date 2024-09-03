<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="portfolio,skills,project,james anthony,rosales" name="keywords">

        <title>Project & Skills</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/2.5.0/remixicon.css" rel="stylesheet">

        <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">

    </head>

    <body>

        <header id="header" class="header-top">
            <div class="container">
                <nav class="nav-menu d-none d-lg-block" id="center">
                    <ul>
                        <li class="{{ request()->is('/') ? '' : '' }}"><a href="{{ route('homepage') }}"><span>Home</span></a></li>
                        <li class="{{ request()->is('education-experience') ? '' : '' }}"><a href="{{ route('education-experience') }}"><span>Education & Experience</span></a></li>
                        <li class="{{ request()->is('project-skills') ? 'active' : '' }}"><a href="{{ route('project-skills') }}"><span>Projects & Skills</span></a></li>
                        <li class="{{ request()->is('about') ? '' : '' }}"><a href="{{ route('about') }}"><span>About</span></a></li>
                    </ul>
                </nav>
            </div>
        </header>
 
        <main>
            <section class="skills container">
                <div class="container">
                    <div class="section-title">
                        <h1 style="font-size:xx-large; font-weight: bold;">Skills</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <div class="icon-box">
                                <i class="ri-global-line" style="color: #ffbb2c;"></i>
                                <h2 style="font-size:medium; font-weight: bold;">Computer Programming</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                            <div class="icon-box">
                                <i class="ri-router-line" style="color: #5578ff;"></i>
                                <h2 style="font-size:medium; font-weight: bold;">Network Configuration</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                            <div class="icon-box">
                                <i class="ri-computer-line" style="color: #e80368;"></i>
                                <h2 style="font-size:medium; font-weight: bold;">Computer Troubleshooting</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                            <div class="icon-box">
                                <i class="ri-code-s-slash-line" style="color: #1c7d32;"></i>
                                <h2 style="font-size:medium; font-weight: bold;">Front-end Development</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="portfolio" class="portfolio container">
                <div class="container">
                    <div class="section-title">
                        <h1 style="font-size:xx-large; font-weight: bold;">Projects</h1>
                    </div>

                    <div class="row portfolio-container">
                        <div class="col-lg-6 col-md-6 portfolio-item">
                            <h2 style="font-size:larger" class="text-center">InCELLIgence Hub</h2>
                            <div class="portfolio-wrap d-flex justify-content-center align-items-center">
                                <img src="{{ asset('asset/image/incelligence-hub.png') }}" class="img-fluid" alt="Incelligence Hub">
                                <div class="portfolio-info">
                                    <p>An interactive learning website targetted for young students.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 portfolio-item">
                            <h2 style="font-size:larger"  class="text-center">Mind Whisper</h2>
                            <div class="portfolio-wrap d-flex justify-content-center align-items-center">
                                <img src="{{ asset('asset/image/mind-whisper.png') }}" class="img-fluid" alt="Mind Whisper">
                                <div class="portfolio-info">
                                    <p>A helpful website for individuals strugling with their mental health</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 portfolio-item">
                            <h2 style="font-size:larger"  class="text-center">University Logical Network Design</h2>
                            <div class="portfolio-wrap d-flex justify-content-center align-items-center">
                                <img src="{{ asset('asset/image/logic-design.png') }}" class="img-fluid" alt="University Logical Network Design">
                                <div class="portfolio-info">
                                    <p>Network Design for Bicol University. Includes simulation in packet tracer.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 portfolio-item">
                            <h2 style="font-size:larger"  class="text-center">JFV Library Management System</h2>
                            <div class="portfolio-wrap d-flex justify-content-center align-items-center">
                                <img src="{{ asset('asset/image/jfv-lms.png') }}" class="img-fluid" alt="JFV Library Management System">
                                <div class="portfolio-info">
                                    <p>JAVA based application for a Library Management System</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </main>

    </body>

</html>