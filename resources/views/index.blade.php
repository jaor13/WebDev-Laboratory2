<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="portfolio,homepage,james,anthony,rosales" name="keywords">

        <title>HomePage</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/icofont/1.0.1/icofont.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/2.5.0/remixicon.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.0.7/css/boxicons.min.css" rel="stylesheet">

        <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">


    </head>

    <body>
        <header id="header" class="header-tops">
            <div class="container">
                <h1><a href="indexx.html">James Anthony O. Rosales</a></h1>
                <h2 style="color:#fff">I'm <span class="typing" style="color:#a2d2ad"></span></h2>

                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{ route('homepage') }}"> <span>Home</span></a></li>
                        <li class="{{ request()->is('education-experience') ? 'active' : '' }}"><a href="{{ route('education-experience') }}"> <span>Education & Experience</span></a></li>
                        <li class="{{ request()->is('project-skills') ? 'active' : '' }}"><a href="{{ route('project-skills') }}"> <span>Projects & Skills</span></a></li>
                        <li class="{{ request()->is('about') ? 'active' : '' }}"><a href="{{ route('about') }}"><span>About</span></a></li>
                    </ul>
                </nav>

                <div class="social-links">
                    <a href="https://www.linkedin.com/in/james-anthony-rosales-/" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    <a href="https://github.com/jaor13" target="_blank" class="github"><i class="bx bxl-github"></i></a>
                    <a href="mailto:jaor2022-6131-98317@bicol-u.edu.ph" target="_blank" class="google"><i class="bx bxl-google"></i></a>
                </div>
            </div>
        </header>

        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
        <script type="text/javascript">
            var typed = new Typed('.typing', {
            strings: ["a passionate undergrad student in the IT Field. Check out my skills, experience, and projects!"],
            loop: true,
            typeSpeed: 40,
            backSpeed: 50
            });
        </script>
    </body>
</html>