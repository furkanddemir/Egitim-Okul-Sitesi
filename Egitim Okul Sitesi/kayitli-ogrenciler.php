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
	
	
	
      <h1>OKULUMUZA KAYITLI ÖĞRENCİLERİMİZ</h1>
	  
	  <section id="ogrenciler">
	</section>
	
	
	<h3>Bilgisayar Programcılığı Bölümü Öğrencilerimiz</h3><br>
	
		<table border="1">
        <tr>
            <th>Öğrenci ID</th>
            <th>Ad</th>
            <th>Soyad</th>
			<th>E-Posta</th>
			<th>Bölüm ID</th>
			<th>Bölüm Tutarı</th>				
			
        </tr>

        <?php
		
		if (!$baglanti) {
			die("Bağlantı hatası: " . mysqli_connect_error());
		}

		$query = "SELECT ogrenci_id, ad, soyad, eposta,bolum_id, bolum_tutari FROM ogrenciler WHERE bolum_id = 200";
		$result = mysqli_query($baglanti, $query);

		if (!$result) {
			die("Sorgu hatası: " . mysqli_error($baglanti));
		}

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["ogrenci_id"] . "</td>";
            echo "<td>" . $row["ad"] . "</td>";
            echo "<td>" . $row["soyad"] . "</td>";
			echo "<td>" . $row["eposta"] . "</td>";   
			echo "<td>" . $row["bolum_id"] . "</td>"; 
			echo "<td>" . $row["bolum_tutari"] . "</td>"; 
            echo "</tr>";
        }
        ?>
		</table><br><br>
		
		<h3>Elektrik Elektronik Bölümü Öğrencilerimiz</h3><br>
	
		<table border="1">
        <tr>
            <th>Öğrenci ID</th>
            <th>Ad</th>
            <th>Soyad</th>
			<th>E-Posta</th>
			<th>Bölüm ID</th>
			<th>Bölüm Tutarı</th>				
			
        </tr>

        <?php
		
		if (!$baglanti) {
			die("Bağlantı hatası: " . mysqli_connect_error());
		}

		$query = "SELECT ogrenci_id, ad, soyad, eposta,bolum_id, bolum_tutari FROM ogrenciler WHERE bolum_id = 201";
		$result = mysqli_query($baglanti, $query);

		if (!$result) {
			die("Sorgu hatası: " . mysqli_error($baglanti));
		}

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["ogrenci_id"] . "</td>";
            echo "<td>" . $row["ad"] . "</td>";
            echo "<td>" . $row["soyad"] . "</td>";
			echo "<td>" . $row["eposta"] . "</td>";   
			echo "<td>" . $row["bolum_id"] . "</td>"; 
			echo "<td>" . $row["bolum_tutari"] . "</td>"; 
            echo "</tr>";
        }
        ?>
		</table><br><br>			
        <p style="text-align: center;">Bu Site Furkan Demir - 220111597 Numaralı Öğrenci Tarafından İnternet Programcılığı (BBP221) Dersi 1. Dönem Proje Ödevi İçin Yapılmıştır.</p>

  </body>
</html>


<?php
mysqli_close($baglanti);
?>