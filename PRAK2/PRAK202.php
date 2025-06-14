<?php 
    $errName = $errNIM = $errGender = $name = $NIM = $gender = " ";
        if(isset($_POST['submit'])) {
            $name = $_POST['nama'];
            $NIM = $_POST['nim'];
            $gender = isset($_POST['jk']) ? $_POST['jk'] : "";
        
            if(empty($name)) {$errName = "Nama tidak boleh kosong";}
            if(empty($NIM)) {$errNIM = "NIM tidak boleh kosong";}
            if(empty($gender)) {$errGender = "Jenis kelamin tidak boleh kosong";}}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .asterisk::after {
            content: " *";
            color: red;
        }
        .error {color: red;}
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="nama" >Nama: </label>
        <span class="asterisk"> 
            <input type="text" id="nama" name="nama">  
        </span>
        <?php if($errName) :?><span class="error"><?= $errName; ?></span><?php endif; ?> <br>

        <label for="nim" >Nim: </label>
        <span class="asterisk"> 
            <input type="text" id="nim" name="nim"> 
        </span> 
        <?php if($errNIM) :?><span class="error"><?= $errNIM; ?></span><?php endif; ?> <br>

        <label class="asterisk" >Jenis Kelamin: </label> 
        <?php if($errGender) :?><span class="error"><?= $errGender; ?></span><?php endif; ?> <br>
        
        <input type="radio" id="laki" name="jk" value="Laki-Laki"> 
        <label for="laki">Laki-Laki </label>  <br>
        <input type="radio" id="perempuan" name="jk" value="Perempuan"> 
        <label for="perempuan">Perempuan </label> <br>

        <button type="submit" name="submit">Submit</button>
    </form>
    <?php if(isset($_POST['submit']) && !empty($name) && !empty($NIM) && !empty($gender)) : ?>
        <h2>Output: </h2>
        <span><?= $name; ?></span> <br>
        <span><?= $NIM; ?></span> <br>
        <span><?= $gender; ?></span>
    <?php endif; ?>
</body>
</html>