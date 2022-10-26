<?php

    // birinci ders içerik
    class Welcome
    {

        public function Hello($isim = 'john', $soyisim = 'doe')
        {
            $text = 'Hoşgeldiniz sayın ' . $isim . ' ' . $soyisim;
            return $text;
        }
    }

    $neyse = new Welcome;

    $hello1 = $neyse->Hello();

    $hello2 = $neyse->Hello('Ayşe', "Yenilir");

    echo $hello1;

    echo '</br>';

    echo $hello2;




    /* 
    Acces Modifier ( erişim belirleyiciler)

    public : GEnel heryeren erişen açık olduğunu ifade eder
    private : Özel Yalnızca sınıf içerisinden erişilebilr
    Protected : Korumalı sınıf içerisinden ve türetilen sınıflardan erişilebilir

    static: sabit sınıf içerisindeki herhangi bir özellik veya metoda sınıf çağırılmadan erişilebilir

    $this : bu sınıfta şeklinde sınıfı işaret etmek için kullanılır.
    self:: : kendi sınıfımda şeklinde sınıfı işaret etmek için kullanılır
    parent:: : Ebeveyn sınıfımda, şeklinde sınıfı işaret etmek için kullanılır

    */


    class Kutuphane 
    {
        public $libraryName="Alice Harikalar Diyarında";
        public const YEAR = 1980;
        
        public function getInfo()
        {
            $text = "Kütüphane hergün 08:00 - 17:00 arasında hizmet vermektedir";
            return $text;

        }
    }

    $nesne = new Kutuphane;

    echo "Kütüphanenin adı:" . $nesne->libraryName;
    echo "<br>";
    echo "Kütüphanenin kuruluş yılı" . $nesne::YEAR;
    echo "<br>";

    ?>