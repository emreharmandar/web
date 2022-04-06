<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders5</title>
</head>
<body>
     <h3> php'de diziler devam </h3>
    <?php 


    $isimler = array();
    $isimler[0] = "Mehmet";
    $isimler[] = "Canan";
    $isimler[3] = "Kemal";
    $isimler[2] = "Nur";

    echo"<pre>";
    print_r($isimler);

    echo"</pre>";


    $ogrenciDetay= array (
        "id"   => 1,
        "adi"  => "Havva",
        "soyadi" => "Yildız",
        "bolum" => "Bilgisayar",
        "yaşı"  => 20,
        "dersler" => array(
            "ders1" => "Web Programlama",
            "ders2" => "Veri tabanı", 
            "ders3" => "mobil programlama"
        ),
        "sınıf"  => 2,
        "memleket" => "antalya" 
    );
    echo"<pre>";
    print_r($ogrenciDetay);

    echo"</pre>";
    
    /* uygulama:
    Çıktı : Havvanur isimli ögrencinin web programlama, veri tabanı ve mobil programlama dersleri vardır. */

    echo "$ogrenciDetay[adi] $ogrenciDetay[soyadi] isimli öğrencinin " .
    $ogrenciDetay["dersler"]["ders1"] .
    $ogrenciDetay["dersler"]["ders2"]  .
    $ogrenciDetay["dersler"]["ders3"]. " dersleri vardır. ";
    
    





    
    
    


    




    ?>
    
</body>
</html>