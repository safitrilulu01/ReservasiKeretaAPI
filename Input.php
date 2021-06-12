<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Reservasi</title>
</head>

<body>
    <form action="TampilReservasi.php" method="POST">
        <h2 align="center"> Reservasi Kereta Api Kelompok 2 </h2>
        <hr size="5px" width="50%" color=blue>
        <img src="KERETA.jpg" height="10%" width="30%">

        <table>
            <tr>
                <td>Nama Penumpang</td>
                <td>:</td>
                <td><input type="text" name="np" require></td>
            </tr>

        </table>

        <table>
            <tr>
                <td>Dari</td>
                <td>:</td>
            </tr>
        </table>
        <select name="pemberangkatan">
            <option value="">-== Pilih Pemberangkatan ==-</option>
            <option value="Bandung">Bandung</option>
            <option value="Banjar">Banjar</option>
            <option value="Batu">Batu</option>
            <option value="Blitar">Blitar</option>
            <option value="Cirebon">Cirebon</option>
            <option value="Cimahi">Cimahi</option>
            <option value="Jakarta">Jakarta</option>
            <option value="Jogyakarta">Jogyakarta</option>
            <option value="Jambi">Jambi</option>
            <option value="Jayapura">Jayapura</option>
            <option value="Magelang">Magelang</option>
            <option value="Malang">Malang</option>
            <option value="Madiun">Madiun</option>
            <option value="Pekalongan">Pekalongan</option>
            <option value="Palembang">Palembang</option>
            <option value="Palu">Palu</option>
            <option value="Pontianak">Pontianak</option>
            <option value="Surabaya">Surabaya</option>
            <option value="Semarang">Semarang</option>
            <option value="Samarinda">Samarinda</option>
            <option value="Serang">Serang</option>
            <option value="Tegal">Tegal</option>
        </select>
        <br><br>

        <table>
            <tr>
                <td>Ke</td>
                <td>:</td>
            </tr>
        </table>
        <select name="tujuan">
            <option value="tujuan">-== Pilih Tujuan ==-</option>
            <option value="Bandung">Bandung</option>
            <option value="Banjar">Banjar</option>
            <option value="Batu">Batu</option>
            <option value="Blitar">Blitar</option>
            <option value="Cirebon">Cirebon</option>
            <option value="Cimahi">Cimahi</option>
            <option value="Jakarta">Jakarta</option>
            <option value="Jogyakarta">Jogyakarta</option>
            <option value="Jambi">Jambi</option>
            <option value="Jayapura">Jayapura</option>
            <option value="Magelang">Magelang</option>
            <option value="Malang">Malang</option>
            <option value="Madiun">Madiun</option>
            <option value="Pekalongan">Pekalongan</option>
            <option value="Palembang">Palembang</option>
            <option value="Palu">Palu</option>
            <option value="Pontianak">Pontianak</option>
            <option value="Surabaya">Surabaya</option>
            <option value="Semarang">Semarang</option>
            <option value="Samarinda">Samarinda</option>
            <option value="Serang">Serang</option>
            <option value="Tegal">Tegal</option>
        </select><br><br>

        <table>
            <tr>
                <td>Pergi</td>
                <td>:</td>
            </tr>
        </table>
        <select name="hari">
            <option value="hari">Hari</option>
            <option value="Senin">Senin</option>
            <option value="Selasa">Selasa</option>
            <option value="Rabu">Rabu</option>
            <option value="Kamis">Kamis</option>
            <option value="Jumat">Jumat</option>
            <option value="Sabtu">Sabtu</option>
            <option value="Minggu">Minggu</option>

        </select>

        <select name="tanggal">
            <option value="tanggal">Tanggal</option>
            <?php
            for ($tanggal = 1; $tanggal <= 31; $tanggal++) {
                echo "<option value='$tanggal'>$tanggal</option>";
            }
            ?>
        </select>

        <select name="bulan">
            <option value="bulan">Bulan</option>
            <option value="Januari">Januari</option>
            <option value="Februari">Februari</option>
            <option value="Maret">Maret</option>
            <option value="April">April</option>
            <option value="Mei">Mei</option>
            <option value="Juni">Juni</option>
            <option value="Juli">Juli</option>
            <option value="Agustus">Agustus</option>
            <option value="September">September</option>
            <option value="Oktober">Oktober</option>
            <option value="November">November</option>
            <option value="Desember">Desember</option>
        </select>

        <select name="tahun">
            <option value="tahun1">Tahun</option>
            <?php
            for ($tahun = 2021; $tahun <= 2024; $tahun++) {
                echo "<option value='$tahun'>$tahun</option>";
            }
            ?>
        </select><br><br>

        <table>
            <tr>
                <td>Pulang</td>
                <td>:</td>
            </tr>
        </table>
        <select name="haripulang">
            <option value="haripulang">Hari</option>
            <option value="Senin">Senin</option>
            <option value="Selasa">Selasa</option>
            <option value="Rabu">Rabu</option>
            <option value="Kamis">Kamis</option>
            <option value="Jumat">Jumat</option>
            <option value="Sabtu">Sabtu</option>
            <option value="Minggu">Minggu</option>

        </select>

        <select name="tanggalpulang">
            <option value="tanggalpulang">Tanggal</option>
            <?php
            for ($tanggalpulang = 1; $tanggalpulang <= 31; $tanggalpulang++) {
                echo "<option value='$tanggalpulang'>$tanggalpulang</option>";
            }
            ?>
        </select>

        <select name="bulanpulang">
            <option value="bulanpulang">Bulan</option>
            <option value="Januari">Januari</option>
            <option value="Februari">Februari</option>
            <option value="Maret">Maret</option>
            <option value="April">April</option>
            <option value="Mei">Mei</option>
            <option value="Juni">Juni</option>
            <option value="Juli">Juli</option>
            <option value="Agustus">Agustus</option>
            <option value="September">September</option>
            <option value="Oktober">Oktober</option>
            <option value="November">November</option>
            <option value="Desember">Desember</option>
        </select>

        <select name="tahunpulang">
            <option value="tahunpulang">Tahun</option>
            <?php
            for ($tahunpulang = 2021; $tahunpulang <= 2024; $tahunpulang++) {
                echo "<option value='$tahunpulang'>$tahunpulang</option>";
            }
            ?>
        </select><br><br>

        <table>
            <tr>
                <td>Kelas</td>
                <td>:</td>
            </tr>
        </table>
        <select name="kelas">
            <option value="kelas">== Pilih Kelas ==</option>
            <option value="Ekonomi">Ekonomi</option>
            <option value="Bisnis">Bisnis</option>
            <option value="Ekslusif">Ekslusif</option>

        </select><br><br>

        <table>
            <tr>
                <td>Nama Kereta</td>
                <td>:</td>
            </tr>
        </table>
        <select name="nk">
            <option value="kelas">== Nama Kereta ==</option>
            <option value="KA001">KA001</option>
            <option value="KA002">KA002</option>
            <option value="KA003">KA003</option>
            <option value="KA004">KA004</option>
            <option value="KA005">KA005</option>

        </select><br><br>

        <tr>
            <td>Penumpang Dewasa</td>
            <td>:</td>
            <td><input type="text" name="pd" require></td>
        </tr><br><br>

        <tr>
            <td>Penumpang Balita</td>
            <td>:</td>
            <td><input type="text" name="pb" require></td>
        </tr><br><br>

        <tr>
            <td>
                <input type="radio" name="waktu" value="Keberangkatan 1 Pukul 05:00 WIB"> Keberangkatan 1 Pukul 05:00 WIB <br>
                <input type="radio" name="waktu" value="Keberangkatan 2 Pukul 07:00 WIB"> Keberangkatan 2 Pukul 07:00 WIB<br>
                <input type="radio" name="waktu" value="Keberangkatan 3 Pukul 09:00 WIB"> Keberangkatan 3 Pukul 09:00 WIB<br>
                <input type="radio" name="waktu" value="Keberangkatan 4 Pukul 11:00 WIB"> Keberangkatan 4 Pukul 11:00 WIB<br>
                <input type="radio" name="waktu" value="Keberangkatan 5 Pukul 14:00 WIB"> Keberangkatan 5 Pukul 14:00 WIB<br>
            </td>
        </tr>
        <tr>
            <td>
                <input type="radio" name="harga" value="Rp 500k">Rp 500k<br>
                <input type="radio" name="harga" value="Rp 100k"> Rp 100k<br>
                <input type="radio" name="harga" value="Rp 150k"> Rp 150k<br>
            </td>
        </tr>

        </table>

        <br><br>

        <input type="submit" value="Pesan Kereta API">


    </form>
</body>

</html>