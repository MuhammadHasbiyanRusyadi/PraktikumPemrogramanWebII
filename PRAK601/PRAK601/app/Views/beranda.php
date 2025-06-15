<!DOCTYPE html>
<html>
<head>
    <title>Beranda - PRAK601</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/
dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
        <div class="container">
            <a class="navbar-brand" href="#">PRAK601</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="/">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="/profil">Profil</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Beranda Content -->
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-body text-center">
                        <img src="<?= base_url($foto) ?>" class="rounded-circle mb-3 shadow" width="150" alt="Foto Praktikan">
                        <h2 class="mb-0"><?= $nama ?></h2>
                        <p class="text-muted"><?= $nim ?> • <?= $prodi ?></p>
                        
                        <hr>

                        <h5 class="mt-4">Tentang Website</h5>
                        <p class="text-muted">
                            Website ini dibuat untuk memenuhi tugas Praktikum Pemrograman Web II dengan implementasi MVC menggunakan framework CodeIgniter 4 (Modul 6).
                        </p>

                        <div class="text-center mt-4">
                            <a href="/profil" class="btn btn-primary px-4 py-2">Lihat Profil Lengkap Saya.</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center py-4 mt-5 text-muted">
        &copy; <?= date('Y') ?> Muhammad Hasbiyan Rusyadi – PRAK601
    </footer>

</body>
</html>
