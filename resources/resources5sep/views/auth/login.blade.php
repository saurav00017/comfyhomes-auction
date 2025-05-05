<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="Dashlead - Admin Panel HTML Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="sales dashboard, admin dashboard, bootstrap 4 admin template, html admin template, admin panel design, admin panel design, bootstrap 4 dashboard, admin panel template, html dashboard template, bootstrap admin panel, sales dashboard design, best sales dashboards, sales performance dashboard, html5 template, dashboard template">

    <!-- Favicon -->
    <link rel="icon" href="{{ config('app.baseURL') }}/admin-assets/images/favicon.png" type="image/png" sizes="16x16">

    <!-- Title -->
    <title>Comfy Homes Admin</title>

    <!-- Fontawesome css -->
    <link href="{{ config('app.baseURL') }}/admin-assets/plugins/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Ionicons css -->
    <link href="{{ config('app.baseURL') }}/admin-assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- Typicons css -->
    <link href="{{ config('app.baseURL') }}/admin-assets/plugins/typicons.font/typicons.css" rel="stylesheet">

    <!-- Feather css -->
    <link href="{{ config('app.baseURL') }}/admin-assets/plugins/feather/feather.css" rel="stylesheet">

    <!-- Flag-icons css -->
    <link href="{{ config('app.baseURL') }}/admin-assets/plugins/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">

    <!-- Style css -->
    <link href="{{ config('app.baseURL') }}/admin-assets/css/style.css" rel="stylesheet">
    <link href="{{ config('app.baseURL') }}/admin-assets/css/custom-style.css" rel="stylesheet">
    <link href="{{ config('app.baseURL') }}/admin-assets/css/skins.css" rel="stylesheet">
    <link href="{{ config('app.baseURL') }}/admin-assets/css/dark-style.css" rel="stylesheet">
    <link href="{{ config('app.baseURL') }}/admin-assets/css/custom-dark-style.css" rel="stylesheet">

    <!-- Sidebar css -->
    <link href="{{ config('app.baseURL') }}/admin-assets/plugins/sidebar/sidebar.css" rel="stylesheet">

    <!-- Sidemenu css -->
    <link href="{{ config('app.baseURL') }}/admin-assets/plugins/sidemenu/sidemenu.css" rel="stylesheet">

    <!-- Switcher css -->
    <link href="{{ config('app.baseURL') }}/admin-assets/switcher/css/switcher.css" rel="stylesheet">
    <link href="{{ config('app.baseURL') }}/admin-assets/switcher/demo.css" rel="stylesheet">

    <style type="text/css">
        @media (min-width: 1200px) {
            .container {
                max-width: 1581px;
            }
        }

        .welcome-section-02 {
            background-image: url("{{ config('app.baseURL') }}/assets/images/house.jpeg");
        }

        .card-header {
            font-size: 25px;
        }

        @media (min-width: 768px) {
            .col-md-9 {
                flex: 0 0 75%;
                max-width: 90%;
            }
        }

        .btn-primary {
            background-color: #8a7b8e;
            border-color: #8a7b8e;
        }

        .btn-primary:hover {
            color: black;
            background-color: #fff;
            border-color: #fff;
        }

        input {
            background-color: #5ce1e6;
        }

        .card {
            border: none;
        }

        @media screen and (max-width: 1400px) {
            .btn {
                margin-left: 90px;
                border-radius: 10px;
            }
        }
    </style>
</head>
<body>
    <section class="welcome-section-02">
        <div class="container custom-container-02">
            <div class="row" style="height: 720px;">
                <div class="container">
                    <div class="row justify-content">
                        <div class="col-8" style="margin-top: 15px;">
<!--                             <img src="{{ config('app.baseURL') }}/admin-assets/images/house.jpeg" class="header-brand-img desktop-logo" alt="House Image" style="height: 675px; width: 1000px;">
 -->                        </div>
                        <div class="col-4" style="margin-top: 95px;">
                            <div class="card" style="height: 500px; border-radius: 35px; width: 390px;">
                                <div class="text-center">
                                    <img src="{{ config('app.baseURL') }}/assets/img/propberries.jpeg" class="header-brand-img desktop-logo" alt="Splash Logo" style="height: 100px; margin: 12px auto;">
                                </div>
                                <div class="card-header text-center">{{ __('Login') }}</div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Username/Email Address" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3 text-center">
                                            <button type="submit" class="btn btn-primary" style="width: 200px; border-radius: 10px;">
                                                {{ __('Login') }}
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
