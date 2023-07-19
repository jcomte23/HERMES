<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
        content="PHP-based program to send e-mails to anyone in a reliable, intuitive and secure manner" />
    <meta name="keywords"
        content=" Email sender,
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
        <div class="d-flex flex-wrap align-items-center justify-content-between">
            <a href="https://javiercombita.com"
                class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none" target="_blank">
                <img src="img/logo.webp" width="60" alt="logo">
            </a>
            <h2 class="text-center">{{ config('app.name', 'Laravel') }}</h2>
            <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#lang">
                {{ __('Lang') }}
            </button>
        </div>
    </header>

    <div class="modal fade" id="lang" tabindex="-1" aria-labelledby="langLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row ">
                        <div class="col-6 mb-3"><a href="{{ route('lang', 'zh_CN') }}"
                                class="country d-flex flex-column align-items-center"><img src="img/flags/cn.svg"
                                    alt="China" width="50">{{ __('Chinese') }}</a></div>
                        <div class="col-6 mb-3"><a href="{{ route('lang', 'es') }}"
                                class="country d-flex flex-column align-items-center"><img src="img/flags/es.svg"
                                    alt="España" width="50">{{ __('Spanish') }}</a></div>
                        <div class="col-6 mb-3"><a href="{{ route('lang', 'en') }}"
                                class="country d-flex flex-column align-items-center"><img src="img/flags/us.svg"
                                    alt="EEUU" width="50">{{ __('English') }}</a></div>
                        <div class="col-6 mb-3"><a href="{{ route('lang', 'pt_BR') }}"
                                class="country d-flex flex-column align-items-center"><img src="img/flags/br.svg"
                                    alt="Brasil" width="50">{{ __('Portuguese') }}</a></div>
                        <div class="col-6 mb-3"><a href="{{ route('lang', 'fr') }}"
                                class="country d-flex flex-column align-items-center"><img src="img/flags/fr.svg"
                                    alt="Frances" width="50">{{ __('French') }}</a></div>
                        <div class="col-6 mb-3"><a href="{{ route('lang', 'it') }}"
                                class="country d-flex flex-column align-items-center"><img src="img/flags/it.svg"
                                    alt="Italia" width="50">{{ __('Italian') }}</a></div>
                        <div class="col-6 mb-3"><a href="{{ route('lang', 'ru') }}"
                                class="country d-flex flex-column align-items-center"><img src="img/flags/ru.svg"
                                    alt="Rusia" width="50">{{ __('Russian') }}</a></div>
                        <div class="col-6 mb-3"><a href="{{ route('lang', 'hi') }}"
                                class="country d-flex flex-column align-items-center"><img src="img/flags/in.svg"
                                    alt="Hindia" width="50">{{ __('Hindi') }}</a></div>
                        <div class="col-6 mb-3"><a href="{{ route('lang', 'ar') }}"
                                class="country d-flex flex-column align-items-center"><img src="img/flags/qa.svg"
                                    alt="Qatar" width="50">{{ __('Arabic') }}</a></div>
                        <div class="col-6 mb-3"><a href="{{ route('lang', 'ja') }}"
                                class="country d-flex flex-column align-items-center"><img src="img/flags/jp.svg"
                                    alt="Japon" width="50">{{ __('Japanese') }}</a></div>
                        <div class="col-6 mb-3"><a href="{{ route('lang', 'ko') }}"
                                class="country d-flex flex-column align-items-center"><img src="img/flags/kr.svg"
                                    alt="Korea" width="50">{{ __('Korean') }}</a></div>
                        <div class="col-6 mb-3"><a href="{{ route('lang', 'sv') }}"
                                class="country d-flex flex-column align-items-center"><img src="img/flags/se.svg"
                                    alt="Suecia" width="50">{{ __('Swedish') }}</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="column-row mt-4">
        @if (session('status'))
            <div class="col-lg-10 mx-auto alert alert-success text-center" role="alert">
                {{__('mailSent')}}
            </div>
        @endif

        <form action="{{ route('setEmail') }}" method="post" class="mt-2">
            @csrf
            <div class="column-row px-4">
                <div class="col-lg-10 mx-auto">
                    <label for="name" class="form-label">{{ __('Name') }}
                        <span class="text-danger">
                            @error('name')
                                ({{ $message }})
                            @enderror
                        </span>
                    </label>
                    <input type="text" class="form-control" name="name" id="Name" autocomplete="off"
                        placeholder="{{ __('Your name') }}" value="{{ @old('name') }}">
                </div>

                <div class="col-lg-10 mx-auto">
                    <label for="destinationEmail" class="form-label">{{ __('Email') }}
                        <span class="text-danger">
                            @error('destinationEmail')
                                ({{ $message }})
                            @enderror
                        </span>
                    </label>
                    <input type="email" class="form-control" name="destinationEmail" id="destinationEmail"
                        autocomplete="off" placeholder="{{ __('Destination Email') }}"
                        value="{{ @old('destinationEmail') }}">
                </div>

                <div class="col-lg-10 mx-auto">
                    <label for="subject" class="form-label">{{ __('Subject of the email') }}
                        <span class="text-danger">
                            @error('subject')
                                ({{ $message }})
                            @enderror
                        </span>
                    </label>
                    <input type="text" class="form-control" name="subject" id="Subject" autocomplete="off"
                        placeholder="{{ __('The subject of your email') }}" value="{{ @old('subject') }}">
                </div>

                <div class="col-lg-10 mx-auto">
                    <label for="message" class="form-label">{{ __('Message of the email') }}
                        <span class="text-danger">
                            @error('message')
                                ({{ $message }})
                            @enderror
                        </span>
                    </label>
                    <textarea class="form-control" name="message" id="message" rows="5" autocomplete="off"
                        placeholder="{{ __('Message') }}" value="{{ @old('message') }}"></textarea>
                </div>
            </div>
            <div class="text-center">
                <br>
                <button class="btn btn-dark mx-auto" type="submit">{{ __('Send') }}</button>
            </div>
        </form>

    </div>

    <br>

    <footer class="bg-dark mt-auto text-center text-white ">
        <div class="container p-4 pb-0">
            <!-- linkedin -->
            <a class="btn btn-outline-light btn-floating m-1"
                href="https://co.linkedin.com/in/javier-c%C3%B3mbita-t%C3%A9llez-4b4aa3258?trk=people-guest_people_search-card"
                role="button">
                <i class="bi bi-linkedin"></i>
            </a>
            <!-- Twitter -->
            <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/jcomte23" role="button">
                <i class="bi bi-twitter"></i>
            </a>
            <!-- GitHub -->
            <a id="logoGitHub" class="btn btn-outline-light btn-floating m-1"
                href="https://github.com/jcomte23/ContactForm" role="button">
                <i class="bi bi-github"></i>
            </a>
        </div>

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <a class="text-white text-decoration-none" href="https://github.com/jcomte23">Jcomte23</a>
        </div>
    </footer>
</body>

</html>
