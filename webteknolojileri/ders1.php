<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php ders 1</title>
</head>

<body>
    <!-- HTML YORUM SATIRI -->
    <?php
    /* Açıklama satırı ( çoklu satır kullanılabilir)
     */
    // tek satır açıklama kısayol shift + alt + a
    /* kullanılan komut:
      echo: Ekrana yazdırma işlemi yapar.
      nokta operatorü ile birleştirme işlemi yapılabilir.
      ters slash / kaçış karakteridir.  özel ifadelerden önce kullanılır

    
    */
    echo "<h3> Adnan Menderes Üniversitesi </h3>";

    echo ' tek tırnak da kullanılabilir echoyla';
    echo "<h4> Aydın meslek yüksekokulu</h4>";
    echo " bilgisayar mühendisliği" . "<br>" . "aymes";
    echo "<hr> <h4> Değişken tanımlama </h4>";
    echo "<ol> 
        <li> Değişken isimleri $ ile başlar.   </li>
        <li> Değişken isimleri sayısal ifadeler ile başlayalamaz </li>
        <li> Değişken isimlerinde boşluk kullanilmaz. İki kelime varsa birinci_sinif veya birinci-sinif  </li>
        <li>  değişken isimleri küçük-büyük harfe duyarlıdır \$Sayi != \$sayi  </li>
        <li>  Değişken ismi, değişkenin taşıdığı içeriği ifade etmeli.  </li>
        <li>  Değişken içeriğinde metinsel ifade varsa çift tırnak veya tek tırnak kullanılabilir. </li>
        <li>  değişken içeriğinde sayısal bir ifade varsa tırnak kullanmak gerekli değildir </li>
        <li>  Değişken içerikleri ekrana echo komutu le yazdırabilir </li>

    </ol>";

    echo " <hr> <h4> Değişken tanımlama örnekleri </h4>";

    $isim = "Emre";
    $soyisim = "Harmandar";
    $gsm = "123123123";

    echo $isim . "<br>";
    echo "$isim $soyisim $gsm";

    /*UYGULAMA:
    Üniversite-myo-ad-soyad-numara değişkenlerini tanimlayiniz.
    Bu Değişkenlerin içerikleri tablo veya form içeriğinde ekrana yazdırınız.

    */
    $üniversite = "Adnan menderes üni";
    $ad = "Emre";
    $soyad = "Harmandar";
    $Numara = "216029025";




    ?>


    <form action="">
        <label for="üniversite"> Üniversite: </label>
        <input type="text" name="" value="<?php echo $üniversite; ?>"><br>

        <label for="üniversite"> Üniversite: </label>
        <input type="text" name="" value="<?php echo $üniversite; ?>"> <br>

        <label for="üniversite"> Üniversite: </label>
        <input type="text" name="" value="<?php echo $üniversite; ?>"> <br>

        <label for="üniversite"> Üniversite: </label>
        <input type="text" name="" value="<?php echo $üniversite; ?>"><br>
    </form>
</body>

</html>