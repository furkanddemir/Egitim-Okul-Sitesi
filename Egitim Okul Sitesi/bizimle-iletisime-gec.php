 <?php
$host = "localhost";
$kullaniciadi = "root";
$sifre = "";
$veritabani = "universiteveritabani";
$baglanti = mysqli_connect($host, $kullaniciadi, $sifre, $veritabani);


?>



<html>
  <head>
    <link rel="stylesheet" href="style.css" />
    <title>İSTANBUL DEMİR ÜNİVERSİTESİ | ANASAYFA </title>
  </head>
  
  <body>
		
    <div class="menu">
	
      <div class="logo"><a href="index.php"><img src="images/logo2.png" width="200" height="200"/></a></div>
      <ul>
        <li><a href="index.php">ANASAYFA</a></li>
        <li><a href="#">BÖLÜMLER</a>

            <div class="acilir-menu">
                <ul>
                  <li><a href="bilgisayar-programciligi.php">BİLGİSAYAR PROGRAMCILIĞI</a></li>
                  <li><a href="elektrik-elektronik.php">ELEKTRİK ELEKTRONİK</a></li>
                </ul>
              </div>
        </li>
        <li><a href="#">ÖĞRENCİ</a>
		<div class="acilir-menu">
                <ul>
				<li><a href="kayitli-ogrenci-ara.php">KAYITLI ÖĞRENCİ ARA</a></li>
				<li><a href="kayitli-ogrenciler.php">KAYITLI ÖĞRENCİLER</a></li>
                </ul>
              </div>
        </li>
        <li><a href="bizimle-iletisime-gec.php">BİZİMLE İLETİŞİME GEÇ</a></li>
		<li class="sosyal-medya">
                <a href="tel:05511487543"><img src="images/telefon.png"></a>
                <a href="https://api.whatsapp.com/send?phone=905511487543&amp"><img src="images/wp.png"></a>
                <a href="mailto:furkan.demir2@ogr.gelisim.edu.tr"><img src="images/gmail.png"></a>
            </li>
      </ul>
    </div>
	
	 
        <h1>İletişim Formu</h1>
		
		
        <form action="bizimle-iletisime-gec.php" method="post"><br><br><br>
            <label for="adsoyad">Ad Soyad:</label>
            <input type="text" id="adsoyad" name="adsoyad" required><br><br><br>

            <label for="eposta">E-posta Adresiniz:</label>
            <input type="eposta" id="eposta" name="eposta" required><br><br><br>

            <label for="bolum_ad">Okuduğunuz Bölüm:</label>
            <select id="bolum_ad" name="bolum_ad">
                <option value="Bilgisayar Programcılığı">Bilgisayar Programcılığı</option>
                <option value="Elektrik Elektronik">Elektrik Elektronik</option>
                <option value="Kayıtlı Değilim">Kayıtlı Değilim</option>
            </select><br><br><br>

            <label for="mesaj">Mesajınız:</label>
            <textarea id="mesaj" name="mesaj" rows="4" required></textarea>

            <input type="submit" value="Gönder">
			
<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $adsoyad = $_POST["adsoyad"];
    $eposta = $_POST["eposta"];
    $bolum_ad = $_POST["bolum_ad"];
    $mesaj = $_POST["mesaj"];

    $sql = "INSERT INTO iletisim (adsoyad, eposta, bolum_ad, mesaj) VALUES ('$adsoyad', '$eposta', '$bolum_ad', '$mesaj')";

    if (mysqli_query($baglanti, $sql)) {
        echo "Mesajınız başarıyla gönderildi.";
    } else {
        echo "Hata: " . $sql . "<br>" . mysqli_error($baglanti);
    }
}
?>
        </form>
		

  </body>
</html>


<?php
mysqli_close($baglanti);
?>