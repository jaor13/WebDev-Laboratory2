<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="portfolio,about,james anthony,rosales" name="keywords">

        <title>About</title>
        
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
                            <li class="{{ request()->is('pages/education-experience') ? '' : '' }}"><a href="{{ route('education-experience') }}"><span>Education & Experience</span></a></li>
                            <li class="{{ request()->is('pages/project-skills') ? '' : '' }}"><a href="{{ route('project-skills') }}"><span>Projects & Skills</span></a></li>
                            <li class="{{ request()->is('pages/about') ? 'active' : '' }}"><a href="{{ route('about') }}"><span>About</span></a></li>
                            <li class="{{ request()->is('pages/contact-us') ? '' : '' }}"><a href="{{ route('contact-us') }}"><span>Contact Us</span></a></li>
                        </ul>
                    </nav>
                </div>
        </header>

        <main>
            <section class="about-me container">
                <div class="container" id="cont-abt">
                    <div class="row">
                        <div class="col-lg-4" data-aos="fade-right">
                            <img src="{{ asset('asset/image/jar.png') }}" class="img-fluid" alt="My Picture">
                        </div>
                        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                            <p>I’m an undergraduate student with a strong passion for the IT field, particularly in networking, where I enjoy working with routers, PC configurations, and various setups. While I also have an interest in coding, my enthusiasm leans more towards front-end development. I love creating intuitive and visually appealing user interfaces, blending my technical skills with creativity to bring ideas to life.</p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul>
                                        <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> 13 June 2003</li>
                                        <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> +63 908-593-0667</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul>
                                        <li><i class="icofont-rounded-right"></i> <strong>City:</strong> Tabaco, Albay</li>
                                        <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> rjamesanthony48@gmail.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container" id="cont-abt">
                    <div class="row">
                        <div class="col-lg-4" data-aos="fade-right">
                            <img src="{{ asset('asset/image/pd.png') }}" class="img-fluid" alt="My Picture">
                        </div>
                        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <p>I'm an undergraduate IT student passionate about creating digital art, especially graphic and web design. I also enjoy exploring new things, whether they relate to my field or not, always searching for what excites me the most and what I love doing.</p>                            <div class="row">
                                <div class="col-lg-6">
                                    <ul>
                                    <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> 8 September 2003</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> +63 970-610-4541</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul>
                                    <li><i class="icofont-rounded-right"></i> <strong>City:</strong> Sto. Domingo, Albay</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> yandydiane08@gmail.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container" id="cont-abt">
                    <div class="row">
                        <div class="col-lg-4" data-aos="fade-right">
                            <img src="{{ asset('asset/image/zaro.jpg') }}" class="img-fluid" alt="My Picture">
                        </div>
                        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                            <p>As an undergraduate student aspiring to be a web developer, I am currently honing my skills in web development and design. I have a passion for creating intuitive, functional websites and am eager to continue learning about front-end and back-end development </p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul>
                                        <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> 7 November 2002 </li>
                                        <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> +639917768905</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul>
                                        <li><i class="icofont-rounded-right"></i> <strong>City:</strong> Legazpi City, Albay</li>
                                        <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> zaro.quintanilla.2@gmail.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
            </section>
        </main>

    </body>

</html>
    