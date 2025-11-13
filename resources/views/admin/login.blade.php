<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="d-flex justify-content-center align-items-center min-vh-100 bg-light">
        <div class="col-md-6 col-lg-4">
            @if (session('error'))
                <div class="alert alert-danger my-2">
                    {{ session('error') }}
                </div>
            @endif
            <div class="card shadow-lg p-4">

                <div class="card-body">
                    <h3 class="text-center mb-4">Admin Login</h3>
                    <form action="{{ route('admin.auth') }}" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                id="floatingInput" name="email" placeholder="name@example.com" autofocus>
                            <label for="floatingInput">Email address*</label>
                            @error('email')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="floatingPassword" name="password" placeholder="Password">
                            <label for="floatingPassword">Password*</label>
                            @error('password')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>


                        <div class="d-grid">
                            <button type="submit" class="btn btn-dark btn-lg">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>