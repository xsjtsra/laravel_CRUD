<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="{{ route('home.index') }}">Home</a>
                <a class="nav-link" href="{{ route('home.showDataPengguna') }}">Data Pengguna</a> 
                <a class="nav-link" href="{{ route('home.bunga') }}">Data Bunga</a> 
            </div>
        </div>
        <div class="text-end d-flex align-items-center">
            <div class="user me-3">
                Halo, {{ Auth::user()->nama }}
            </div>
            <div class="logout">
                <a href="{{ route('login.logout') }}" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>
</nav>