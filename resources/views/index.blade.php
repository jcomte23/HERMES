<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="PHP-based program to send e-mails to anyone in a reliable, intuitive and secure manner" />
    <meta name="keywords" content=" Email sender,
    Personal server,
    Emails,
    Sending application,
    Email security,
    Intuitive user interface,
    Advanced configuration,
    Email attachments,
    Scheduled sending,
    Delivery notifications,
    Read receipts,
    Email encryption,
    Email authentication,
    Email contacts,
    Shipment tracking,
    Shipment logs,
    User experience,
    Electronic communications,
    Reliable sending,
    Full control" />
    <meta name="sitedomain" content="https://github.com/jcomte23/ContactForm" />
    <meta name="organization" content="Jcomte23" />
    <meta name="author" content="Javier Cómbita Téllez" />
    <meta name="designer" content="Javier Cómbita Téllez" />
    <meta name="robots" content="index,follow" />
    <meta name="googlebot" content="index,follow" />
    <meta name="revisit-after" content="15days" />
    <link rel="apple-touch-icon" sizes="57x57" href="favicon.ico" />
    <link rel="apple-touch-icon" sizes="60x60" href="favicon.ico" />
    <link rel="apple-touch-icon" sizes="72x72" href="favicon.ico" />
    <link rel="apple-touch-icon" sizes="76x76" href="favicon.ico" />
    <link rel="apple-touch-icon" sizes="114x114" href="favicon.ico" />
    <link rel="apple-touch-icon" sizes="120x120" href="favicon.ico" />
    <link rel="apple-touch-icon" sizes="144x144" href="favicon.ico" />
    <link rel="apple-touch-icon" sizes="152x152" href="favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="favicon.ico" />
    <link rel="icon" type="image/png" sizes="36x36" href="favicon.ico" />
    <link rel="icon" type="image/png" sizes="48x48" href="favicon.ico" />
    <link rel="icon" type="image/png" sizes="72x72" href="favicon.ico" />
    <link rel="icon" type="image/png" sizes="96x96" href="favicon.ico" />
    <link rel="icon" type="image/png" sizes="144x144" href="favicon.ico" />
    <link rel="icon" type="image/png" sizes="192x192" href="favicon.ico" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico" />
    <link rel="icon" type="image/png" sizes="96x96" href="favicon.ico" />
    <link rel="icon" type="image/png" sizes="16x16" href="favicon.ico" />
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
    <title>Jcomte23 - {{ config('app.name', 'Laravel') }}</title>
</head>

<body>
    <header class="p-3 bg-dark text-white">
        <div class="">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-between">
                <a href="https://javiercombita.com"
                    class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none" target="_blank">
                    <img src="img/logo.webp" width="60" alt="logo">
                </a>
                <h2 class="text-center">{{ config('app.name', 'Laravel') }}</h2>
                <a href="https://javiercombita.com"
                    class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none" target="_blank">
                    <img src="img/logo.webp" width="60" alt="logo">
                </a>
                
            </div>
        </div>
    </header>

    <a href="{{route('lang',"es")}}">español</a>
    <a href="{{route('lang',"en")}}">ingles</a>

    <div class="column-row mt-4">
        <?php if (isset($_POST["status"])) : ?>
        <?php if ($_POST["status"] == 'danger') : ?>
        <div class="col-lg-4 mx-auto alert alert-danger text-center" role="alert">
            Error,message not sent!
        </div>
        <?php endif; ?>

        <?php if ($_POST["status"] == 'success') : ?>
        <div class="col-lg-4 mx-auto alert alert-success text-center" role="alert">
            Message sent successfully!
        </div>
        <?php endif; ?>
        <?php endif; ?>

        <form action="./server.php" method="post" class="mt-2">
            <div class="column-row">
                <div class="col-lg-3 mx-auto">
                    <label for="name" class="form-label">{{ __('Name') }}</label>
                    <input type="text" class="form-control" required name="name" id="Name" autocomplete="off"
                        placeholder="{{ __('Your name') }}">
                </div>
                <div class="col-lg-3 mx-auto">
                    <label for="email" class="form-label">{{ __('Email') }}</label>
                    <input type="email" class="form-control" required name="email" id="Email" autocomplete="off"
                        placeholder="{{ __('Destination Email') }}">
                </div>
                <div class="col-lg-3 mx-auto">
                    <label for="subject" class="form-label">{{ __('Subject of the email') }}</label>
                    <input type="text" class="form-control" required name="subject" id="Subject" autocomplete="off"
                        placeholder="{{ __('The subject of your email') }}">
                </div>
                <div class="col-lg-3 mx-auto">
                    <label for="message" class="form-label">{{ __('Message of the email') }}</label>
                    <textarea class="form-control" required name="message" id="message" rows="5" autocomplete="off"
                        placeholder="{{ __('Message') }}"></textarea>
                </div>
            </div>
            <div class="text-center">
                <br>
                <button name="btnSend" class="btn btn-dark mx-auto" type="submit">{{ __('Send') }}</button>
            </div>
    </div>
    </form>
    <br>
    <footer class="bg-dark  mt-auto text-center text-white ">
        <div class="container p-4 pb-0">
            <section class="">
                <!-- linkedin -->
                <a class="btn btn-outline-light btn-floating m-1"
                    href="https://co.linkedin.com/in/javier-c%C3%B3mbita-t%C3%A9llez-4b4aa3258?trk=people-guest_people_search-card"
                    role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path
                            d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                    </svg>
                </a>
                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/jcomte23"
                    role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                        <path
                            d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                    </svg></a>
                <!-- GitHub -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/jcomte23/ContactForm"
                    role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-github" viewBox="0 0 16 16">
                        <path
                            d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                    </svg>
                </a>
            </section>
        </div>


        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <a class="text-white text-decoration-none" href="https://github.com/jcomte23">Jcomte23</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>
</html>
