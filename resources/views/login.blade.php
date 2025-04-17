<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('plugins/toastr/toastr.min.css') }}">
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('dist/css/login-style.css') }}" />
    <style>
        .toast-top-center {
            top: 70px !important; /* Adjust the value as needed */
        }
    </style>
    
</head>
<body>
    <div class="login_form">
        <h3>Log in with</h3>

        <form action="{{ route('processLogin') }}" method="POST">
            @csrf

            <div class="input_box">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter email address" required />
            </div>

            <div class="input_box">
                <input type="password" id="password" name="password" placeholder="Enter your password" required />
            </div>

            <button type="submit">Log In</button>

            <p class="sign_up">You want to know <a href="#">About us?</a></p>
        </form>
    </div>
</body>

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Toastr -->
<script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>

<script>
    $(document).ready(function() {
        @if(session('error'))
            toastr.error("{{ session('error') }}", "Error", {
                closeButton: true,
                progressBar: true,
                positionClass: "toast-top-center",
                timeOut: 5000
            });
        @endif

        @if(session('success'))
            toastr.success("{{ session('success') }}", "Success", {
                closeButton: true,
                progressBar: true,
                positionClass: "toast-top-center",
                timeOut: 10000
            });
        @endif
    });
</script>
</html>