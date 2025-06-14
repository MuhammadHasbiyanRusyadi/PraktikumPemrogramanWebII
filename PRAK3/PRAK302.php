<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .gambar{
            width: 20px;
        }
    </style>
</head>
<body>
    <form method="post">
        Tinggi : <input type="number" name="tinggi" value="<?= isset($_POST['tinggi']) ? htmlspecialchars($_POST['tinggi']) : '' ?>"><br><br>
        Alamat Gambar : <input type="url" name="link_gambar" value="<?= isset($_POST['link_gambar']) ? htmlspecialchars($_POST['link_gambar']) : '' ?>"><br>
        <button type="submit" name="cetak">Cetak</button><br>
    </form>

    <?php 
        if (isset($_POST['cetak'])) {
            $jumlah_tinggi = (int)$_POST['tinggi'];
            $link_gambar = $_POST['link_gambar'];

            $a = 1;
            while ($a <= $jumlah_tinggi) {
                $b=2;
                while ($b <= $a) {
                    echo "<span style='display: inline-block; width: 30px;'> &nbsp; </span>";
                    $b++;
                }
                $c=$jumlah_tinggi;
                while ($c >= $a) {
                    echo "<img src='$link_gambar', width ='30'>";
                    $c--;
                }
                echo"<br>";
                $a++;
            }
        }


    ?>
</body>
</html>