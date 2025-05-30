<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK401</title>
</head>
<body>
    <form action="" method="post">
        <label for="panjang">Panjang : </label>
        <input type="text" name="panjang" id="panjang"> <br>

        <label for="lebar">Lebar : </label>
        <input type="text" name="lebar" id="lebar"> <br>

        <label for="nilai">Nilai : </label>
        <input type="text" name="nilai" id="nilai"> <br>

        <button name="cetak">Cetak</button>
    </form>

    <?php 
        if(isset($_POST['cetak'])) {
            $panjang = $_POST['panjang'];
            $lebar = $_POST['lebar'];
            $nilai = $_POST['nilai'];

            $limit = $panjang * $lebar;
            $arrAngka = explode(" ", $nilai);
            $jumlahAngka = count($arrAngka);

            if($jumlahAngka > $limit) {
                echo "Panjang nilai tidak sesuai dengan ukuran matriks";
            }
            else {
                $matriks = array_chunk($arrAngka, $lebar);
                echo "<table border='1' cellpadding='5' cellspacing='0'>";
                foreach($matriks as $baris) {
                    echo "<tr>";
                    foreach($baris as $angka) {
                        echo "<td>$angka</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }
        }
    ?>
</body>
</html>