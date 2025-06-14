<?php
require_once 'Model.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'nama' => $_POST['nama'],
        'nomor' => $_POST['nomor'],
        'alamat' => $_POST['alamat']
    ];

    if (isset($_POST['id'])) {
        updateMember($_POST['id'], $data);
    } else {
        addMember($data);
    }
    header('Location: Member.php');
    exit();
}

$member = null;
if (isset($_GET['id'])) {
    $member = getMemberById($_GET['id']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $member ? 'Edit' : 'Tambah' ?> Member</title>
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

        input, textarea {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        input:focus, textarea:focus {
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
            background: linear-gradient(to right, #333);
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
        <a href="Member.php" class="btn btn-secondary" style="margin-bottom: 20px;">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>

        <h1><?= $member ? 'Edit' : 'Tambah' ?> Data Member</h1>
        
        <form method="post">
            <?php if ($member): ?>
            <input type="hidden" name="id" value="<?= $member['id_member'] ?>">
            <?php endif; ?>
            
            <div class="form-group">
                <label for="nama">Nama Member</label>
                <input type="text" id="nama" name="nama" value="<?= $member ? htmlspecialchars($member['nama_member']) : '' ?>" required>
            </div>
            
            <div class="form-group">
                <label for="nomor">Nomor Member</label>
                <input type="text" id="nomor" name="nomor" value="<?= $member ? htmlspecialchars($member['nomor_member']) : '' ?>" required>
            </div>
            
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea id="alamat" name="alamat" rows="3" required><?= $member ? htmlspecialchars($member['alamat']) : '' ?></textarea>
            </div>
            
            <div class="button-group">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Simpan
                </button>
                <a href="Member.php" class="btn btn-secondary">
                    <i class="fas fa-times"></i> Batal
                </a>
            </div>
        </form>
    </div>
</body>
</html>