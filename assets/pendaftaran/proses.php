<?php

$koneksi = mysql_connect("localhost","root","") or die("Mysql Error".mysql_error);
$db = mysql_select_db("pendaftaran");


//Untuk Siswa
$no_daftar = $_POST['no_daftar'];
$anak = $_POST['anak'];
$anak_tempat_lahir = $_POST['anak_tempat_lahir'];
$anak_tgl = $_POST['anak_tgl'];
$anak_bln = $_POST['anak_bln'];
$anak_thn = $_POST['anak_thn'];
$anak_jenkel = $_POST['anak_jenkel'];
$anak_agama = $_POST['anak_agama'];
$anak_alamat = $_POST['anak_alamat'];
$anak_asal_sekolah = $_POST['anak_asal_sekolah'];
$anak_alamat_sekolah = $_POST['anak_alamat_sekolah'];
$jlh_saudara = $_POST['jlh_saudara'];
$anak_ke = $_POST['anak_ke'];
$tanggungan = $_POST['tanggungan'];

//Untuk Nilai Ujian

$sains = $_POST['sains'];
$mat = $_POST['mat'];
$bing = $_POST['bing'];
$bind = $_POST['bind'];

//Untuk Ayah

$ayah = $_POST['ayah'];
$ayah_tempat_lahir = $_POST['ayah_tempat_lahir'];
$ayah_tgl = $_POST['ayah_tgl'];
$ayah_bln = $_POST['ayah_bln'];
$ayah_thn = $_POST['ayah_thn'];
$ayah_agama = $_POST['ayah_agama'];
$ayah_alamat = $_POST['ayah_alamat'];
$ayah_pekerjaan = $_POST['ayah_pekerjaan'];
$ayah_penghasilan = $_POST['ayah_penghasilan'];

//Untuk Ibu
$ibu = $_POST['ibu'];
$ibu_tempat_lahir = $_POST['ibu_tempat_lahir'];
$ibu_tgl = $_POST['ibu_tgl'];
$ibu_bln = $_POST['ibu_bln'];
$ibu_thn = $_POST['ibu_thn'];
$ibu_agama = $_POST['ibu_agama'];
$ibu_alamat = $_POST['ibu_alamat'];
$ibu_pekerjaan = $_POST['ibu_pekerjaan'];
$ibu_penghasilan = $_POST['ibu_penghasilan'];

if($anak != "" and $anak_agama != "" and $anak_alamat != "" and $anak_tempat_lahir != "" and $anak_tgl != "" and $anak_bln != "" and $anak_thn != "" and $anak_jenkel != "" and $anak_asal_sekolah != "" and $anak_alamat_sekolah != "" and $jlh_saudara != "" and $anak_ke != "" and $tanggungan != "" and $bind != "" and $bing != "" and $mat != "" and $sains != "" and $ayah != "" and $ayah_agama != "" and $ayah_tempat_lahir != "" and $ayah_tgl != "" and $ayah_bln != "" and $ayah_thn != "" and $ayah_alamat != "" and $ayah_pekerjaan != "" and $ayah_penghasilan != ""  and $ibu != "" and $ibu_agama != "" and $ibu_tempat_lahir != "" and $ibu_tgl != "" and $ibu_bln != "" and $ibu_thn != "" and $ibu_alamat != "" and $ibu_pekerjaan != "" and $ibu_penghasilan != "")
{
$simpan_siswa = mysql_query("insert into siswa values('$no_daftar','$anak','$anak_tempat_lahir','$anak_thn-$anak_bln-$anak_tgl','$anak_jenkel','$anak_agama','$anak_alamat','$anak_asal_sekolah','$anak_asal_sekolah','$jlh_saudara','$anak_ke','$tanggungan')");

$simpan_nilai  = mysql_query("insert into nilai_un values('$no_daftar','$bing','$bind','$mat','$sains')");

$simpan_ayah = mysql_query("insert into ayah values('$no_daftar','$ayah','$ayah_tempat_lahir','$ayah_thn-$ayah_bln-$ayah_tgl','$ayah_agama','$ayah_alamat','$ayah_pekerjaan','$ayah_penghasilan')");

$simpan_ibu = mysql_query("insert into ibu values('$no_daftar','$ibu','$ibu_tempat_lahir','$ibu_thn-$ibu_bln-$ibu_tgl','$ibu_agama','$ibu_alamat','$ibu_pekerjaan','$ibu_penghasilan')");

echo "tersimpan";
}
else
{
?>
<script type="text/javascript">
	alert("Tolong Isi Dengan Benar");
	document.location.href = 'index.php';
</script>
<?php

}

?>