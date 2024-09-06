<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="portfolio,education,experience,james anthony,rosales" name="keywords">

        <title>Contact-Us</title>

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
                        <li class="{{ request()->is('pages/education-experience') ? '' : '' }}"><a href="{{ route('education-experience') }}"><span>Education & Experience</span></a></li>
                        <li class="{{ request()->is('pages/project-skills') ? '' : '' }}"><a href="{{ route('project-skills') }}"><span>Projects & Skills</span></a></li>
                        <li class="{{ request()->is('pages/about') ? '' : '' }}"><a href="{{ route('about') }}"><span>About</span></a></li>
                        <li class="{{ request()->is('pages/contact-us') ? 'active' : '' }}"><a href="{{ route('contact-us') }}"><span>Contact Us</span></a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <main>
            <section id="contact" class="contact">
                <div class="container">
                    <div class="row cont justify-content-center">
                        <div class="col-md-6">
                            <img src="{{ asset('asset/image/msg-pn.svg') }}" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <h1 style="margin-top: 20px;">Get in touch with us</h1>
                            <form action="/submit-form" method="POST">
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" id="name" name="name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" id="email" name="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="subject">Subject:</label>
                                    <input type="text" id="subject" name="subject" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="message">Message:</label>
                                    <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                                </div>
                                <button type="submit"id="btn-sub" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </body>

</html>
