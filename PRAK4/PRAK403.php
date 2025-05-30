<?php 
$mhs1 = ["No"=>"1", "Nama"=>"Ridho", "Mata Kuliah diambil"=>["Pemrograman I", "Praktikum Pemrograman I", "Pengatar Lingkungan Lahan Basah", "Arsitektur Komputer"], "SKS"=>["2", "1", "2", "3"]];
$mhs2 = ["No"=>"2", "Nama"=>"Ratna", "Mata Kuliah diambil"=>["Basis Data I", "Praktikum Basis Data I", "Kalkulus"], "SKS"=>["2", "1", "3"]];
$mhs3 = ["No"=>"3", "Nama"=>"Tono", "Mata Kuliah diambil"=>["Rekayasa Perangkat Lunak", "Analisis Perancangan Sistem", "Komputasi Awan", "Kecerdasan Bisnis"], "SKS"=>["3", "3", "3", "3"]];

$mahasiswa = [$mhs1, $mhs2, $mhs3];

foreach($mahasiswa as $index => $dataMhs) {
    $jumlahSKS = array_sum($dataMhs["SKS"]);
    $mahasiswa[$index]["Total SKS"] = $jumlahSKS;
    $mahasiswa[$index]["Keterangan"] = periksaKeterangan($jumlahSKS);
}

function periksaKeterangan($totalSKS) {
    return ($totalSKS > 7) ? "Tidak Revisi" : "Revisi";
}

function beriWarna($dataSKS, $indeks) {
    if($indeks == 0) {
        return ($dataSKS > 7) ? "green" : "red";
    }
    var_dump($dataSKS);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK403</title>
</head>
<body>
    <table border='1' cellpadding='5' cellspacing='0'>
        <tr>
            <?php foreach($mahasiswa[0] as $kolom => $nilai) : ?>
                <th><?= $kolom; ?></th>
            <?php endforeach; ?>
        </tr>
        
        <?php foreach($mahasiswa as $data) : ?>
            <?php foreach($data["Mata Kuliah diambil"] as $urutan => $mk) : ?>
                <tr>
                    <td><?= ($urutan == 0) ? $data["No"] : " " ?></td>
                    <td><?= ($urutan == 0) ? $data["Nama"] : " " ?></td>
                    <td><?= $mk; ?></td>
                    <td><?= $data["SKS"][$urutan] ?></td>
                    <td><?= ($urutan == 0) ? $data["Total SKS"] : " " ?></td>
                    <td style="background-color: <?= beriWarna($data["Total SKS"], $urutan)?>;">
                        <?= ($urutan == 0) ? $data["Keterangan"] : " "?>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>