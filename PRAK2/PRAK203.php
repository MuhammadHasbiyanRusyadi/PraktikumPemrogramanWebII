
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
        <label for="nilai">Nilai: </label>
        <input type="text" id="nilai" name="nilai"> <br>
        <label for="dari">Dari: </label> <br>
        <?php 
            $suhu = ['Celcius','Fahrenheit', 'Reamur', 'Kelvin'];
            foreach($suhu as $s) {
                echo "
                    <input type='radio'  name='dari' value='$s' required> 
                    <label for='$s'>$s </label> <br>";}?>
        <label for="dari">Ke: </label> <br>
        <?php 
            foreach($suhu as $s) {
                echo "
                    <input type='radio'  name='ke' value='$s' required> 
                    <label for='$s'>$s </label> <br>";}?>
        <button type="submit" name="submit">Urutkan</button>
    </form>
    <?php 
        if(isset($_POST['submit'])) {
            $nilai = $_POST['nilai'];
            $asal = $_POST['dari'];
            $tujuan = $_POST['ke'];
            
            if($asal == "Celcius" && $tujuan == "Fahrenheit") {$hslkonver = 9/5 * $nilai + 32; echo "<h2>Hasil Konversi $hslkonver °F</h2>";}
            else if($asal == "Celcius" && $tujuan == "Reamur") {$hslkonver = 4/5 * $nilai; echo "<h2>Hasil Konversi $hslkonver °R</h2>"; }
            else if($asal == "Celcius" && $tujuan == "Kelvin") {$hslkonver = 273.15 + $nilai; echo "<h2>Hasil Konversi $hslkonver °K</h2>"; }

            else if($asal == "Fahrenheit" && $tujuan == "Celcius") {$hslkonver = 5/9 * ($nilai - 32); echo "<h2>Hasil Konversi $hslkonver °C</h2>";}
            else if($asal == "Fahrenheit" && $tujuan == "Reamur") {$hslkonver = 4/9 * ($nilai - 32); echo "<h2>Hasil Konversi $hslkonver °R</h2>";}
            else if($asal == "Fahrenheit" && $tujuan == "Kelvin") {$hslkonver = 5/9 * ($nilai + 459.67); echo "<h2>Hasil Konversi $hslkonver °K</h2>";}

            else if($asal == "Reamur" && $tujuan == "Celcius") {$hslkonver = 5/4 * $nilai; echo "<h2>Hasil Konversi $hslkonver °C</h2>";}
            else if($asal == "Reamur" && $tujuan == "Fahrenheit") {$hslkonver = 9/4 * $nilai + 32; echo "<h2>Hasil Konversi $hslkonver °F</h2>";}
            else if($asal == "Reamur" && $tujuan == "Kelvin") {$hslkonver = 5/4 * $nilai + 273.15; echo "<h2>Hasil Konversi $hslkonver °K</h2>";}

            else if($asal == "Kelvin" && $tujuan == "Celcius") {$hslkonver = $nilai - 273.15; echo "<h2>Hasil Konversi $hslkonver °C</h2>";}
            else if($asal == "Kelvin" && $tujuan == "Fahrenheit") {$hslkonver = 9/5 * $nilai - 459.67; echo "<h2>Hasil Konversi $hslkonver °F</h2>";}
            else if($asal == "Kelvin" && $tujuan == "Reamur") {$hslkonver = 4/5 * ($nilai - 273.15); echo "<h2>Hasil Konversi $hslkonver °R</h2>";}}?>
</body>
</html>