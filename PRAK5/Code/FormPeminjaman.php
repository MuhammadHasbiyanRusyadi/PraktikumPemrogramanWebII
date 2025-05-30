<?php
require_once 'Model.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'member' => $_POST['member'],
        'buku' => $_POST['buku'],
        'pinjam' => $_POST['pinjam'],
        'kembali' => $_POST['kembali']
    ];

    if (isset($_POST['id'])) {
        updateLoan($_POST['id'], $data);
    } else {
        addLoan($data);
    }
    header('Location: Peminjaman.php');
    exit();
}

$loan = null;
if (isset($_GET['id'])) {
    $loan = getLoanById($_GET['id']);
}

$members = getMembersForDropdown();
$books = getBooksForDropdown();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $loan ? 'Edit' : 'Tambah' ?> Peminjaman</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #333;
            min-height: 100vh;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-attachment: fixed;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            padding: 40px;
            width: 100%;
            max-width: 600px;
            animation: fadeIn 0.5s ease-out;
        }

        h1 {
            color: #333;
            margin-bottom: 30px;
            font-size: 2rem;
            font-weight: 700;
            position: relative;
        }

        h1::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background-color: #333;
            border-radius: 2px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #555;
        }

        input, select {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        input:focus, select:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.2);
        }

        .button-group {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        .btn {
            padding: 12px 25px;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary {
            background-color: #333;
            color: white;
        }

        .btn-secondary {
            background-color: #333;
            color: white;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <a href="Peminjaman.php" class="btn btn-secondary" style="margin-bottom: 20px;">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>

        <h1><?= $loan ? 'Edit' : 'Tambah' ?> Data Peminjaman</h1>
        
        <form method="post">
            <?php if ($loan): ?>
            <input type="hidden" name="id" value="<?= $loan['id_peminjaman'] ?>">
            <?php endif; ?>
            
            <div class="form-group">
                <label for="member">Member</label>
                <select id="member" name="member" required>
                    <option value="">Pilih Member</option>
                    <?php foreach ($members as $member): ?>
                    <option value="<?= $member['id_member'] ?>" <?= ($loan && $loan['id_member'] == $member['id_member']) ? 'selected' : '' ?>>
                        <?= htmlspecialchars($member['nama_member']) ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <div class="form-group">
                <label for="buku">Buku</label>
                <select id="buku" name="buku" required>
                    <option value="">Pilih Buku</option>
                    <?php foreach ($books as $book): ?>
                    <option value="<?= $book['id_buku'] ?>" <?= ($loan && $loan['id_buku'] == $book['id_buku']) ? 'selected' : '' ?>>
                        <?= htmlspecialchars($book['judul_buku']) ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <div class="form-group">
                <label for="pinjam">Tanggal Pinjam</label>
                <input type="date" id="pinjam" name="pinjam" value="<?= $loan ? $loan['tgl_pinjam'] : '' ?>" required>
            </div>
            
            <div class="form-group">
                <label for="kembali">Tanggal Kembali</label>
                <input type="date" id="kembali" name="kembali" value="<?= $loan ? $loan['tgl_kembali'] : '' ?>" required>
            </div>
            
            <div class="button-group">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Simpan
                </button>
                <a href="Peminjaman.php" class="btn btn-secondary">
                    <i class="fas fa-times"></i> Batal
                </a>
            </div>
        </form>
    </div>
</body>
</html>