<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SIPRO - Sistem Produk</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">

            <a class="navbar-brand fw-bold" href="/products">
                INVENTARIS
            </a>

            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/products">
                            Products
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/categories">
                            Categories
                        </a>
                    </li>

                    <li class="nav-item ms-2">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">
                                Logout
                            </button>
                        </form>
                    </li>

                </ul>   

            </div>

        </div>
    </nav>

    <!-- CONTENT -->
    <div class="container mt-5">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>