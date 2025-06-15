<!DOCTYPE html>
<html>
<head>
    <title>Profil Praktikan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/
dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">PRAK601</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link active" href="/profil">Profil</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <?php if (!empty($foto)): ?>
                                <img src="<?= base_url($foto) ?>" class="rounded-circle" width="150" alt="Foto Praktikan">
                            <?php endif; ?>
                            <h2 class="mt-3"><?= $nama ?></h2>
                            <p class="text-muted"><?= $nim ?> • <?= $prodi ?></p>
                        </div>

                        <hr>

                        <h5>Hobi</h5>
                        <p><?= $hobi ?></p>

                        <h5>Skill</h5>
                        <p><?= $skill ?></p>

                        <h5>Informasi Lain</h5>
                        <p>Saya suka mengeksplorasi filosofi desain dalam game, baik dari aspek naratif maupun gameplaynya.</p>

                        <div class="text-end">
                            <a href="/" class="btn btn-secondary mt-3">Kembali ke Beranda</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
