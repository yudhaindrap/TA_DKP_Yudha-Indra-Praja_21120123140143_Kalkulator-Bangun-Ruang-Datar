<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Bangun {
    public static function is_number($s) {
        return is_numeric($s);
    }

    public static function hitung($bangun, $data) {
        $hasil_text = ""; 
        switch ($bangun) {
            case "Kubus":
                if (self::is_number($data['sisi'])) {
                    $sisi = floatval($data['sisi']);
                    $luas_permukaan = 6 * ($sisi ** 2);
                    $volume = $sisi ** 3;
                    $hasil_text = "Kubus:<br>Luas Permukaan = $luas_permukaan<br>Volume = $volume";
                } else {
                    $hasil_text = "Masukkan harus berupa angka!";
                }
                break;
            case "Balok":
                if (self::is_number($data['panjang']) && self::is_number($data['lebar']) && self::is_number($data['tinggi'])) {
                    $panjang = floatval($data['panjang']);
                    $lebar = floatval($data['lebar']);
                    $tinggi = floatval($data['tinggi']);
                    $luas_permukaan = 2 * ($panjang * $lebar + $panjang * $tinggi + $lebar * $tinggi);
                    $volume = $panjang * $lebar * $tinggi;
                    $hasil_text = "Balok:<br>Luas Permukaan = $luas_permukaan<br>Volume = $volume";
                } else {
                    $hasil_text = "Masukkan harus berupa angka!";
                }
                break;
            case "Kerucut":
                if (self::is_number($data['jari']) && self::is_number($data['tinggi'])) {
                    $jari = floatval($data['jari']);
                    $tinggi = floatval($data['tinggi']);
                    $luas_permukaan = pi() * $jari * ($jari + sqrt($jari ** 2 + $tinggi ** 2));
                    $volume = (1/3) * pi() * ($jari ** 2) * $tinggi;
                    $hasil_text = "Kerucut:<br>Luas Permukaan = $luas_permukaan<br>Volume = $volume";
                } else {
                    $hasil_text = "Masukkan harus berupa angka!";
                }
                break;
            case "Bola":
                if (self::is_number($data['jari'])) {
                    $jari = floatval($data['jari']);
                    $luas_permukaan = 4 * pi() * ($jari ** 2);
                    $volume = (4/3) * pi() * ($jari ** 3);
                    $hasil_text = "Bola:<br>Luas Permukaan = $luas_permukaan<br>Volume = $volume";
                } else {
                    $hasil_text = "Masukkan harus berupa angka!";
                }
                break;
            case "Prisma":
                if (self::is_number($data['alas']) && self::is_number($data['tinggi_alas']) && self::is_number($data['tinggi_segitiga'])) {
                    $alas = floatval($data['alas']);
                    $tinggi_alas = floatval($data['tinggi_alas']);
                    $tinggi_segitiga = floatval($data['tinggi_segitiga']);
                    $luas_permukaan = 2 * $alas * $tinggi_alas + 3 * $alas * $tinggi_segitiga;
                    $volume = $alas * $tinggi_alas;
                    $hasil_text = "Prisma:<br>Luas Permukaan = $luas_permukaan<br>Volume = $volume";
                } else {
                    $hasil_text = "Masukkan harus berupa angka!";
                }
                break;
            case "Tabung":
                if (self::is_number($data['jari']) && self::is_number($data['tinggi'])) {
                    $jari = floatval($data['jari']);
                    $tinggi = floatval($data['tinggi']);
                    $luas_permukaan = 2 * pi() * $jari * ($jari + $tinggi);
                    $volume = pi() * ($jari ** 2) * $tinggi;
                    $hasil_text = "Tabung:<br>Luas Permukaan = $luas_permukaan<br>Volume = $volume";
                } else {
                    $hasil_text = "Masukkan harus berupa angka!";
                }
                break;
            case "Limas":
                if (self::is_number($data['alas']) && self::is_number($data['tinggi_alas']) && self::is_number($data['tinggi_segitiga'])) {
                    $alas = floatval($data['alas']);
                    $tinggi_alas = floatval($data['tinggi_alas']);
                    $tinggi_segitiga = floatval($data['tinggi_segitiga']);
                    $luas_permukaan = $alas * 3 * $tinggi_segitiga + 3 * $alas * $tinggi_alas;
                    $volume = (1/3) * $alas * $tinggi_alas;
                    $hasil_text = "Limas:<br>Luas Permukaan = $luas_permukaan<br>Volume = $volume";
                } else {
                    $hasil_text = "Masukkan harus berupa angka!";
                }
                break;
            case "Persegi":
                if (self::is_number($data['sisi'])) {
                    $sisi = floatval($data['sisi']);
                    $luas = $sisi ** 2;
                    $keliling = 4 * $sisi;
                    $hasil_text = "Persegi:<br>Luas = $luas<br>Keliling = $keliling";
                } else {
                    $hasil_text = "Masukkan harus berupa angka!";
                }
                break;
            case "PersegiPanjang":
                if (self::is_number($data['panjang']) && self::is_number($data['lebar'])) {
                    $panjang = floatval($data['panjang']);
                    $lebar = floatval($data['lebar']);
                    $luas = $panjang * $lebar;
                    $keliling = 2 * ($panjang + $lebar);
                    $hasil_text = "Persegi Panjang:<br>Luas = $luas<br>Keliling = $keliling";
                } else {
                    $hasil_text = "Masukkan harus berupa angka!";
                }
                break;
            case "Segitiga":
                if (self::is_number($data['alas']) && self::is_number($data['tinggi'])) {
                    $alas = floatval($data['alas']);
                    $tinggi = floatval($data['tinggi']);
                    $luas = 0.5 * $alas * $tinggi;
                    $keliling = $alas + $tinggi + sqrt($alas ** 2 + $tinggi ** 2); // Assuming it's a right triangle
                    $hasil_text = "Segitiga:<br>Luas = $luas<br>Keliling = $keliling";
                } else {
                    $hasil_text = "Masukkan harus berupa angka!";
                }
                break;
            case "JajarGenjang":
                if (self::is_number($data['alas']) && self::is_number($data['tinggi']) && self::is_number($data['miring'])) {
                    $alas = floatval($data['alas']);
                    $tinggi = floatval($data['tinggi']);
                    $miring = floatval($data['miring']);
                    $luas = $alas * $tinggi;
                    $keliling = 2 * ($alas + $miring);
                    $hasil_text = "Jajar Genjang:<br>Luas = $luas<br>Keliling = $keliling";
                } else {
                    $hasil_text = "Masukkan harus berupa angka!";
                }
                break;
            case "Trapesium":
                if (self::is_number($data['sisi_a']) && self::is_number($data['sisi_b']) && self::is_number($data['tinggi']) && self::is_number($data['sisi_c']) && self::is_number($data['sisi_d'])) {
                    $sisi_a = floatval($data['sisi_a']);
                    $sisi_b = floatval($data['sisi_b']);
                    $tinggi = floatval($data['tinggi']);
                    $sisi_c = floatval($data['sisi_c']);
                    $sisi_d = floatval($data['sisi_d']);
                    $luas = 0.5 * ($sisi_a + $sisi_b) * $tinggi;
                    $keliling = $sisi_a + $sisi_b + $sisi_c + $sisi_d;
                    $hasil_text = "Trapesium:<br>Luas = $luas<br>Keliling = $keliling";
                } else {
                    $hasil_text = "Masukkan harus berupa angka!";
                }
                break;
            case "BelahKetupat":
                if (self::is_number($data['diagonal1']) && self::is_number($data['diagonal2']) && self::is_number($data['sisi'])) {
                    $diagonal1 = floatval($data['diagonal1']);
                    $diagonal2 = floatval($data['diagonal2']);
                    $sisi = floatval($data['sisi']);
                    $luas = 0.5 * $diagonal1 * $diagonal2;
                    $keliling = 4 * $sisi;
                    $hasil_text = "Belah Ketupat:<br>Luas = $luas<br>Keliling = $keliling";
                } else {
                    $hasil_text = "Masukkan harus berupa angka!";
                }
                break;
            case "Lingkaran":
                if (self::is_number($data['jari'])) {
                    $jari = floatval($data['jari']);
                    $luas = pi() * ($jari ** 2);
                    $keliling = 2 * pi() * $jari;
                    $hasil_text = "Lingkaran:<br>Luas = $luas<br>Keliling = $keliling";
                } else {
                    $hasil_text = "Masukkan harus berupa angka!";
                }
    
                break;
            
            default:
                $hasil_text = "Pilihan tidak valid!";
                break;
        }

        return $hasil_text;
    }
}

$hasil_text = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['bangun'])) {
    $pilihan = $_POST['bangun'];

    $data = $_POST;

    unset($data['bangun']);

    $hasil_text = Bangun::hitung($pilihan, $data);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KALKULATOR BANGUN RUANG & DATAR</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <h1>Kalkulator Bangun Ruang & Datar</h1>
    <div class="container">
        <form method="post" action="index.php">
            <label for="bangun">Pilih Bangun:</label>
            <select id="bangun" name="bangun" onchange="tampilkanKolom()">
                <option value="Kubus">Kubus</option>
                <option value="Balok">Balok</option>
                <option value="Kerucut">Kerucut</option>
                <option value="Bola">Bola</option>
                <option value="Prisma">Prisma</option>
                <option value="Tabung">Tabung</option>
                <option value="Limas">Limas</option>
                <option value="Persegi">Persegi</option>
                <option value="PersegiPanjang">Persegi Panjang</option>
                <option value="Segitiga">Segitiga</option>
                <option value="JajarGenjang">Jajar Genjang</option>
                <option value="Trapesium">Trapesium</option>
                <option value="BelahKetupat">Belah Ketupat</option>
                <option value="Lingkaran">Lingkaran</option>
            </select>
            <div id="gambarKubus" class="gambar-bangun">
                <img src="gambar/kubus.png" alt="Kubus" style="width: 400px; height: 400px;">
            </div>
            <div id="gambarBalok" class="gambar-bangun">
                <img src="gambar/balok.png" alt="Balok" style="width: 400px; height: 400px;">
            </div>
            <div id="gambarKerucut" class="gambar-bangun">
                <img src="gambar/kerucut.png" alt="Kerucut" style="width: 400px; height: 400px;">
            </div>
            <div id="gambarBola" class="gambar-bangun">
                <img src="gambar/bola.png" alt="Bola" style="width: 400px; height: 400px;">
            </div>
            <div id="gambarPrisma" class="gambar-bangun">
                <img src="gambar/prisma.png" alt="Prisma" style="width: 400px; height: 400px;">
            </div>
            <div id="gambarTabung" class="gambar-bangun">
                <img src="gambar/tabung.png" alt="Tabung" style="width: 400px; height: 400px;">
            </div>
            <div id="gambarLimas" class="gambar-bangun">
                <img src="gambar/limas.png" alt="Limas" style="width: 400px; height: 400px;">
            </div>
            <div id="gambarPersegi" class="gambar-bangun">
                <img src="gambar/persegi.png" alt="Persegi" style="width: 400px; height: 400px;">
            </div>
            <div id="gambarPersegiPanjang" class="gambar-bangun">
                <img src="gambar/persegipanjang.png" alt="Persegi Panjang" style="width: 400px; height: 400px;">
            </div>
            <div id="gambarSegitiga" class="gambar-bangun">
                <img src="gambar/segitiga.png" alt="Segitiga" style="width: 400px; height: 400px;">
            </div>
            <div id="gambarJajarGenjang" class="gambar-bangun">
                <img src="gambar/jajargenjang.png" alt="Jajar Genjang" style="width: 400px; height: 400px;">
            </div>
            <div id="gambarTrapesium" class="gambar-bangun">
                <img src="gambar/trapesium.png" alt="Trapesium" style="width: 400px; height: 400px;">
            </div>
            <div id="gambarBelahKetupat" class="gambar-bangun">
                <img src="gambar/belahketupat.png" alt="Belah Ketupat" style="width: 400px; height: 400px;">
            </div>
            <div id="gambarLingkaran" class="gambar-bangun">
                <img src="gambar/lingkaran.png" alt="Lingkaran" style="width: 400px; height: 400px;">
            </div>
            <div id="input-fields"></div>
            <button type="submit">Hitung</button>
        </form>
        <div id="hasil"><?php echo $hasil_text; ?></div>
    </div>
    <script>
        function tampilkanGambar() {
            var pilihan = document.getElementById("bangun").value;

            var semuaGambar = document.getElementsByClassName("gambar-bangun");
            for (var i = 0; i < semuaGambar.length; i++) {
                semuaGambar[i].style.display = "none";
            }

            var gambarYangDitampilkan = document.getElementById("gambar" + pilihan);
            if (gambarYangDitampilkan) {
                gambarYangDitampilkan.style.display = "block";
            }
        }

        window.onload = function() {
            tampilkanGambar(); 
            tampilkanKolom();
        };
    </script>
</body>
</html>
