<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <form action="" method="POST">
        <label for="nama1">Nama: 1</label>
        <input type="text" id="nama1" name="nama1"> <br>

        <label for="nama2">Nama: 2</label>
        <input type="text" id="nama2" name="nama2"> <br>

        <label for="nama3">Nama: 3</label>
        <input type="text" id="nama3" name="nama3"> <br>

        <button type="submit" name="submit">Urutkan</button>
    </form>
    <?php 
    if(isset($_POST['submit'])) {
        $name1 = $_POST['nama1'];
        $name2 = $_POST['nama2'];
        $name3 = $_POST['nama3'];
    
        $input = [$name1, $name2, $name3];
        sort($input);
    
        foreach ($input as $i) {
            echo "$i <br>" ;}}?>
</body>
</html>