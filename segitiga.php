<html>
    <head>
        <title>Luas Segitiga</title>
    </head>
        <body>
        <form method="post" action="Segitiga.php" style="display: inline-block;">
        <mark><b>Menghitung Luas Segitiga</b></mark>
       
            <table>
                <tr>
                    <td>Alas</td><td>:</td><td><input type="text" name="alas"></td>
                </tr>
                <tr>
                    <td>Tinggi</td><td>:</td><td><input type="text" name="tinggi"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="luassegetiga" value="Hasil" /></td>
                </tr>
            </table>
            </form>

            <form method="post" style="display: inline-block;">
        <mark><b>Menghitung Luas persegi</b></mark>
       
            <table>
                <tr>
                    <td>Sisi</td>
                    <td>:</td>
                    <td><input type="text" name="sisi"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="luas" value="Hasil" /></td>
                </tr>
            </table>
            </form>

          <form method="post" style="display: inline-block;">
          <mark><b>Menghitung Luas Lingkaran</b></mark>
       
            <table>
                <tr>
                    <td>Jari-jari</td>
                    <td>:</td>
                    <td><input type="text" name="jari"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="luaslingkaran" value="Hasil" /></td>
                </tr>
            </table>
            </form>

        </body>
</html>
<?php
error_reporting(0);

$alas=$_POST['alas'];
$tinggi=$_POST['tinggi'];
if($_POST['luassegetiga']){
    $luas=($alas*$tinggi)/2;
echo "Jadi luas segitiganya yaitu = ".$luas;
}



$sisi=$_POST['sisi'];
if($_POST['luas']){
    $luas=($sisi*$sisi);
    echo "Jadi luas Persegi yaitu = ".$luas;
}

$jari=$_POST['jari'];
if($_POST['luaslingkaran']){
    $luas=(3.14*$jari*$jari);
    echo "Jadi luas Lingkaran yaitu = ".$luas;
}
?>