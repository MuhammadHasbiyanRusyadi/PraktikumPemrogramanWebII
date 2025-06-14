<?php
require_once 'Model.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Buku</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {

            background-image: url('Background.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            }

        .container {
            background-color: rgba(255, 255, 255, 0.92);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            padding: 40px;
            width: 100%;
            max-width: 800px;
            text-align: center;
            animation: fadeIn 0.5s ease-out;
            backdrop-filter: blur(3px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        h1 {
            color: #333;
            margin-bottom: 30px;
            font-size: 2.5rem;
            font-weight: 700;
            position: relative;
            display: inline-block;
        }

        h1::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background-color: #333;
            border-radius: 2px;
        }

        .menu {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }

        .menu-item {
            padding: 20px;
            background: white;
            border-radius: 10px;
            text-decoration: none;
            color: #333;
            font-weight: 600;
            font-size: 1.1rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 2px solid transparent;
        }

        .menu-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
            border-color: #667eea;
            color: #667eea;
        }

        .menu-item i {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color:rgb(0, 0, 0);
        }

        .welcome-text {
            color: #555;
            margin-bottom: 20px;
            font-size: 1.1rem;
            line-height: 1.6;
        }

        .logo {
            width: 80px;
            height: 80px;
            margin-bottom: 20px;
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

        /* Responsive adjustments */
        @media (max-width: 600px) {
            .container {
                padding: 30px 20px;
            }
            
            h1 {
                font-size: 2rem;
            }
            
            .menu {
                grid-template-columns: 1fr;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
    <h1>Form Tambah Buku</h1>
        <div class="menu">
            <a href="Member.php" class="menu-item">
                <i class="fas fa-users"></i>
                Data Member
            </a>
            <a href="Buku.php" class="menu-item">
                <i class="fas fa-book"></i>
                Data Buku
            </a>
            <a href="Peminjaman.php" class="menu-item">
                <i class="fas fa-exchange-alt"></i>
                Data Peminjaman
            </a>
        </div>
    </div>
</body>
</html>