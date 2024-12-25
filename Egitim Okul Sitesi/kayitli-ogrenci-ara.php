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
	
	 
        <h1>ÖĞRENCİ ARA</h1><br>
        <form action="kayitli-ogrenci-ara.php" method="POST">
        <label for="ad">Öğrenci Adı:</label>
        <input type="text" id="ad" name="ad" required>
        <label for="soyad">Öğrenci Soyadı:</label>
        <input type="text" id="soyad" name="soyad" required>
        <button type="submit">Ara</button><br><br>
    
			
<?php
			if (!$baglanti) {
    die("Bağlantı hatası: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];

    // Öğrenci bilgilerini sorgula
    $sql = "SELECT ogrenciler.ogrenci_id, ogrenciler.ad, ogrenciler.soyad, ogrenciler.eposta, ogrenciler.bolum_id, bolumler.bolum_ad, bolumler.bolum_tutari 
            FROM ogrenciler  
            JOIN bolumler ON ogrenciler.bolum_id = bolumler.bolum_id 
            WHERE ogrenciler.ad = '$ad' AND ogrenciler.soyad = '$soyad'";
    $result = mysqli_query($baglanti, $sql);

    // Sonuçları ekrana tablo içinde yazdır
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            echo "<table border='1'>
                <tr>
                    <th>Öğrenci ID</th>
                    <th>Ad</th>
                    <th>Soyad</th>
					<th>E-Posta</th>
                    <th>Bölüm ID</th>
                    <th>Bölüm Adı</th>
                    <th>Bölüm Tutarı</th>
                </tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                    <td>" . $row["ogrenci_id"] . "</td>
                    <td>" . $row["ad"] . "</td>
                    <td>" . $row["soyad"] . "</td>
					<td>" . $row["eposta"] . "</td>
                    <td>" . $row["bolum_id"] . "</td>
                    <td>" . $row["bolum_ad"] . "</td>
                    <td>" . $row["bolum_tutari"] . "</td>
                </tr>";
            }

            echo "</table>";
        } else {
            echo "Öğrenci bulunamadı.";
        }
    } else {
        echo "Sorgu hatası: " . mysqli_error($baglanti);
    }
}

?>
        </form>
		

  </body>
</html>


<?php
mysqli_close($baglanti);
?>