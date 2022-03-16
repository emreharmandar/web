<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ders2</title>
</head>
<body>
    <?php

    //php versiyon detay bilgisini gösterir. //
    // echo phpinfo();

    echo "<h4> Tırnak işaretleri arasındaki farklar </h4>";
    $uni = "Adnan Menderes üniversitesi";
    echo "Değişken içeriği : $uni";
    echo "<br>";
    /* değişken isminin yazdırılması */
    echo " kazandıgımız üniversite \$uni";
    echo "<br>";
    echo 'Kazandığınız üniversite: $uni';
    echo "<br>";
    echo "1- Kazandıgınız üniversite : $uni";
    echo "<br>";
    echo "2- Kazandıgınız üniversite:" . $uni;
    echo "<br>";
    echo " 3- Kazandığınız üniversite:" . "$uni";
    echo "<br>";
    echo ' 4- Kazandığınız Üniversite:' . "$uni" ;
    echo "<br>";

    echo "<hr> <h4> temel matematiksel işlemler </h4>";
    echo "<h5> Çıkarma işlemi </h5>";

    $sayi1=10;
    $sayi2=20;
    echo"\$sayi1 - \$sayi2=" . ($sayi1-$sayi2);
    echo "<br>";
    echo "$sayi1-$sayi2=" . ($sayi1-$sayi2);
    echo"<br>";
    
    $sonuc=$sayi1-$sayi2;
    echo "$sayi1-$sayi2=$sonuc";


    echo"<br>";


    echo "<h5> Çarpma işlemi </h5>";

    $sayi1=10;
    $sayi2=20;
    echo"\$sayi1 * \$sayi2=" . ($sayi1*$sayi2);
    echo "<br>";
    echo "$sayi1*$sayi2=" . ($sayi1*$sayi2);
    echo"<br>";
    
    $sonuc=$sayi1*$sayi2;
    echo "$sayi1*$sayi2=$sonuc";

    echo"<br>";



    echo "<h5> Bölme işlemi </h5>";

    $sayi1=10;
    $sayi2=20;
    echo"\$sayi1 / \$sayi2=" . ($sayi1/$sayi2);
    echo "<br>";
    echo "$sayi1/$sayi2=" . ($sayi1/$sayi2);
    echo"<br>";
    
    $sonuc=$sayi1/$sayi2;
    echo "$sayi1/$sayi2=$sonuc"; 


    echo "<h5> Üst Alma İşlemi (pow) </h5>";

    $x = 4;
    $y = "2";
    echo " Değişken tipi: " . gettype($x) . "<br>";
    echo " Değişken tipi: " . gettype($y) . "<br>";
    echo "$x<sup>$y</sup>= " . pow($x, $y);

    echo "<h5> karekök Alma İşlemi (sqrt(x))</h5>";
    $x = 123;
    //$y = sqrt(123);
    $karekok = sqrt($x);
    echo $karekok;

    echo "<h5> Mutlak Değeri Alma (abs(x))</h5>";
    $x = (-12);
    $mutlak=abs($x);
    echo "|$x| sayısının mutlak değeri $mutlak";

    echo "<h5> Taban Değişimi İşlemi (base_convert(x,taban1,taban2))</h5>";
    echo "27 sayısının 2'ik tabandaki karşılığı : " . base_convert(27, 10, 2);
    echo "<br>";
    $sayi = 50;
    $taban = 10;
    $yenitaban = 2;
    $sonuc = base_convert($sayi, $taban, $yenitaban);
    //(50)10 = (...)2
    echo "$sayi<sub>$taban</sub>=($sonuc)<sub>$yenitaban)</sub> "; 




    echo "<h5>Mod İşlemi (fmod(x,y))</h5>";
    $x = 20;
    $y = 4;
    $mod = fmod($x, $y);
    echo "$x mod $y : $mod";

    // girilen sayının tek mi çift mi oldugunu gösterir
    $z = 71;
    echo "<br> $z sayısı: " . (fmod($z, 2) == 0 ? "çiftttir" : "tektir");



    echo "<h5> Yuvarlama işlemleri (round(x,y))</h5>";
    $x = 15.313;
    $y = 15.385;
    
    echo "$x Bir ondalık basamak yuvarlama sonucu:" . round($x, 1) . "<br>";
    echo "$y Bir ondalık basamak yuvarlama sonucu "  . round($y , 1 ) . "<br>";



    echo "<h5> Rasgele sayı üretimi işlemi (rand(x,y))</h5>";
    echo "10-100 arasında rasgele sayı üretildi: " . rand(10, 100);


    for ($i=0; $i <= 10; $i++) { 
        echo "$i. Sayı:" . rand(0, 100) ."<br>";
    }

















 

    ?>
    
</body>
</html>