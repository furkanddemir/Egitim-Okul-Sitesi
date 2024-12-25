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
	
	
	
      <h1 >BİLGİSAYAR PROGRAMCILIĞI</h1>
	  
    <section id="bilgisayar">
	</section>
	
	<h3>Bilgisayar Programcılığı Bölümü Nedir?</h3><br>
	<p class="metinler">Bilgisayar Programcılığı Bölümü, bilgisayar programcılığına uygun programların yorumlanıp öğrenilmesini 
	sağlamak amacıyla oluşturulmuş bir eğitimdir. Bir ön lisans bölümü olan program ile öğrenciler 2 yıllık bir eğitime tabii tutulur. 
	Bilgisayar programlamayı bilen ve yazılım oluşturabilen kişileri yetiştirip sektöre kazandırır. Bilişim sektöründe faaliyet gösterilen 
	bu alanda bilgisayar aracılığıyla tasarım, donanım ve veri tabanı işleri, yazılım düzenleme işlemleri öğretilir. <br><br>
	Bölümün temel amacı bilişim ve bilgisayar alanında uzman personel yetiştirmek ve günümüz teknolojisi ile çağı yakalayıp daha ileriye 
	adım atmaktır. Aynı zamanda öğrencilere yazılım geliştirme disiplini kazandırarak bilgisayar sektöründeki yeniliklere katkı sağlamak 
	amaçlanır. Bu alanda eğitim görmek isteyen kişiler programlamayı kavrayabilmeli, sayısal ve sözel mantık konusunda kendisini geliştirmeli
	ve kavramları bilgisayar diline dökebilmelidir. Bilgisayar Programcılığı Bölümünü tercih etmek isteyen adayların programlama ve yazılıma
	karşı meraklı ve ilgili olması, sorumluluk sahibi ve disiplinli olması, pozitif bilimlere ilgili olması ve teknolojik gelişmeleri 
	takip etmesi gerekir. 2 yıllık Bilgisayar Programcılığı Bölümünü başarıyla tamamlayan kişiler Bilgisayar Programcısı unvanını almaya 
	hak kazanır.</p>
	<br><br><br>
	
	
	<h3>Bilgisayar Programcılığı Bölümü Ders Programı</h3><br>
		
		<table border="1">
        <tr>
            <th>Ders ID</th>
            <th>Ders Adı</th>
            <th>Bölüm ID</th>
			<th>Öğretmen ID</th>
			
        </tr>

        <?php
		
		if (!$baglanti) {
			die("Bağlantı hatası: " . mysqli_connect_error());
		}

		$query = "SELECT * FROM Dersler WHERE bolum_id = 200";
		$result = mysqli_query($baglanti, $query);

		if (!$result) {
			die("Sorgu hatası: " . mysqli_error($baglanti));
		}

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["ders_id"] . "</td>";
            echo "<td>" . $row["ders_ad"] . "</td>";
            echo "<td>" . $row["bolum_id"] . "</td>";
			echo "<td>" . $row["ogretmen_id"] . "</td>";   
            echo "</tr>";
        }
        ?>
		</table><br><br>
		
		<h3>Bilgisayar Programcılığı Bölümü Öğretmenlerimiz</h3><br>
		
		<table border="1">
        <tr>
            <th>Öğretmen ID</th>
			<th>Unvan</th>
            <th>Ad</th>
            <th>Soyad</th>
        </tr>

        <?php
		
		if (!$baglanti) {
			die("Bağlantı hatası: " . mysqli_connect_error());
		}

		$query = "SELECT * FROM ogretimelemanlari WHERE bolum_id = 200";
		$result = mysqli_query($baglanti, $query);

		if (!$result) {
			die("Sorgu hatası: " . mysqli_error($baglanti));
		}

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["ogretmen_id"] . "</td>";
			echo "<td>" . $row["unvan"] . "</td>";
            echo "<td>" . $row["ad"] . "</td>";
            echo "<td>" . $row["soyad"] . "</td>";
            echo "</tr>";
        }
        ?>
		</table><br><br>
		
	<h3>Bilgisayar Programcılığı Bölümü Bölüm Başkanı</h3><br>
		
		<table border="1">
        <tr>
            <th>Bölüm Başkanı</th>
        </tr>
		
		<?php
		
		if (!$baglanti) {
			die("Bağlantı hatası: " . mysqli_connect_error());
		}

		$query = "SELECT * FROM Bolumler WHERE bolum_id = 200";
		$result = mysqli_query($baglanti, $query);

		if (!$result) {
			die("Sorgu hatası: " . mysqli_error($baglanti));
		}
		
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["bolum_baskani"] . "</td>";
            echo "</tr>";
        }
        ?>
		</table><br><br>
	
		
	<h3>Bilgisayar Programcılığı Bölümü Bölüm Ücreti</h3><br>
	
		<table border="1">
        <tr>
            <th>Bölüm Ücreti</th>
        </tr>
		
		<?php
		
		if (!$baglanti) {
			die("Bağlantı hatası: " . mysqli_connect_error());
		}

		$query = "SELECT bolum_tutari FROM bolumler WHERE bolum_id = 200";
		$result = mysqli_query($baglanti, $query);

		if (!$result) {
			die("Sorgu hatası: " . mysqli_error($baglanti));
		}
		
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
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