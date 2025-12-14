<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SIRBO</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <div class="layout">
        <!-- SIDEBAR -->
        <aside class="sidebar">
            <h2 class="logo">SIRBO</h2>
            <nav>
                <a href="/dashboard">Dashboard</a>
                <a href="/booking">Booking</a>
                <a href="/payment">Payment</a>

                <hr>

                <a href="/admin/dashboard">Admin</a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="logout">Logout</button>
                </form>
            </nav>
        </aside>

        <!-- CONTENT -->
        <main class="content">
            @yield('content')
        </main>
    </div>

</body>

</html>