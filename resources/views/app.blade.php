<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terdecor</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body>
    <nav
        class="navbar navbar-light fixed-top border-bottom py-2 px-4 d-flex justify-content-between align-items-center">
        <a href="#" class="navbar-brand m-0 fw-bold"><img src="{{ asset('images/logo.png') }}"
                class="img-fluid logo"></a>
        <button class="btn btn-primary" type="button">Hubungi Kami</button>
    </nav>
    @yield('content')
    <footer class="bg-custom-primary text-center py-4 mt-5">
        <div class="container">
            <div class="text-white">
                <p class="mb-0" style="color: #e9e9e9">© 2025 Terdecor. All rights reserved.</p>
                <p class="mb-0" style="color: #e9e9e9">Follow us on:
                    <a href="#" class="text-decoration-none" style="color: #e9e9e9"><i
                            class="fab fa-instagram"></i></a>
                </p>
            </div>
        </div>
    </footer>
    <a href="https://wa.me/6281234567890" target="_blank" class="whatsapp-float">
        <i class="fab fa-whatsapp"></i>WhatsApp
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
