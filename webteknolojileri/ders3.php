<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ders3</title>
</head>
<body>
    <?php

    /*uygulama ödevi:
    kuyruk ve yığın veri yapılarının php üzerinde kullanılarak örneklendirilmesini gerçekleştiriniz
    */

    /* uygulama:
    50'den büyükse
    geçtiniz - notunuz :xx
    50'deb küçükse
    kaldınız - nnotunuz:xx

    */

    $not = rand (10,100);
    if ($not >= 50) {
        echo "Geçtiniz - Notunuz : $not";
    } else {
        echo "Kaldınız - Notunuz: $not";
    }


    echo "<h3> Sık Kullanılan String Fonksiyonlar </h3>";

    $yazi="Aydın Adnan Menderes Üniversitesi";
   
    echo "<br> Değişken içeriği : $yazi   (" . gettype($yazi) . ")";       ;

    //içeriğin büyük harfe dönüştürülmesi

    echo "<br> \$yazi içeriğinin büyük harfle yazılması:" . $buyukyazi = strtoupper($yazi);
    echo "<br> \$yazi içeriğinin büyük harfle yazılması:" . $buyukyazi = mb_strtoupper($yazi);

    //içeriğin küçük harfe dönüştürülmesi
    echo "<br> \$yazi içeriğinin küçük harfle yazılması:" . $kucukyazi = strtolower($buyukyazi);
    echo "<br> \$yazi içeriğinin küçük harfle yazılması:" . $kucukyazi = mb_strtolower($buyukyazi);

    //İçeriğin ilk harfinin, büyük harfe dönüştürülmesi
    echo "<br> \$yazi ilk harfinin, büyük harfle yazilmasi" . $ilk_yazi = ucfirst($kucukyazi);


    //İçeriğin tüm kelimelerinin ilk harfinin, büyük harfe dönüştürülmesi
    echo "<br> \$yazi tüm kelimelerinin ilk hafinin büyük harfle yazilmasi:" . $kelime = ucwords($kucuk_yazi);

    //İçeriğin harf sayısı:
    echo "<br> \$yazi içerisindeki harf sayısı :" . strlen($yazi);

    //ASCİİ CHAR KARŞILIĞI
    echo "<br> karakter karşılıgı " . chr(109);
    echo "<br> karakter karşılıgı " . chr(64);
    echo "Ascii karakterleri: " ;
    for ($i=1; $i <=  255; $i++) { 
        echo"$i" . chr($i) . "-";
    }



    //Metnin parçalanarak diziye dönüştürülmesi
    $dizi = explode(" " , $yazi);
    echo "<br>";
    print_r($dizi);


    //Uygulama : Paragraftaki kelime ve cümle sayılarını alt alta yazdırınız.

    $metin="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

    $kelimelerdizisi = explode(" " , $metin);
    $cümlelerdizisi = explode(" . " , $metin);

    echo "<br> kelime sayısı: " . count($kelimelerdizisi);
    echo "<br> cümle sayısı : " . count($cümlelerdizisi);


    // uygulama: Veri tabanından gelen 2021-12-25 değerini 25-12-2021 şeklinde ekrana yazdırınız.
     echo "<br>";
    $tarih = "2021-12-25";
    $yenitarih = explode("-" , $tarih);
    echo "$yenitarih[2] - $yenitarih[1] - $yenitarih[0]";
    
    //dizinin metne dönüştürülmesi (implode)
    echo "<br>";
    $aylar = [" Ocak" , "şubat" , " mart " , " nisan"];
    print_r($aylar);
    $aylarstring = implode(" ", $aylar );
    echo "<br>string : $aylarstring";

    //str_split()
    //verilen bir metnin belirten sayı kadar ayrılarak bir dizi içeriğine aktarılması. eğer sayı belirtilmezse metni harf harf böler

    $iban="TR0010002000300040005000";

    $ibanyeni = str_split($iban,4);
    print_r($ibanyeni);
    echo "<br>";

    foreach ($ibanyeni as $parca) {
        echo "$parca ";
    }


    /* trim substr  str_replace md5 - */


    





    

    







     ?>
</body>
</html>