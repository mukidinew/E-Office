<?php
require '../../include/koneksi.php'; 
$kode=isset($_GET['kode'])?$_GET['kode']:'';
$pilih = $db->prepare('SELECT * FROM e_sekolah where npsn=?');
$pilih->bindValue(1, $kode, PDO::PARAM_STR);
$pilih->execute();
$row = $pilih->fetch(PDO::FETCH_BOTH);


?>
<div id="tabs">
	<ul>
		<li><a title="Identitas Satuan Pendidikan" href="#tab-1">Identitas</a></li>
		<li><a title="Dokumen & Perijinan" href="#tab-2">Dokumen</a></li>
		<li><a title="Sarana & Prasarana" href="#tab-3">Sarpras</a></li>
		<li><a title="Kontak" href="#tab-4">Kontak</a></li>
		<li><a title="Data Bank" href="#tab-6">Data Bank</a></li>
		<li><a title="Peta" href="#tab-5">Peta</a></li>
	</ul>
	<div class="row" style="width:800px">
		<form id="form-edit-sekolah">
			<div id="tab-1">
				<div class="col-sm-6">
					<div class="form-group">
						<label for="npsn" class="">NPSN</label>
						<input value="<?php echo isset($_GET['kode'])?$row['npsn']:''; ?>" type="text" id="npsn" name="npsn" class="form-control" readonly/>
					</div>
				</div>                
				<div class="col-sm-6">
					<div class="form-group">
						<label for="nama" class="">Nama Sekolah</label>
						<input value="<?php echo isset($_GET['kode'])?$row['nama_sp']:''; ?>" type="text" id="nama" name="nama" class="form-control"/>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label for="alamat" class="">Alamat</label>
						<input value="<?php echo isset($_GET['kode'])?$row['alamat_jalan']:''; ?>" type="text" id="alamat" name="alamat" class="form-control"/>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label for="kelurahan" class="">Kelurahan</label>
						<input value="<?php echo isset($_GET['kode'])?$row['desa_kelurahan']:''; ?>" type="text" id="kelurahan" name="kelurahan" class="form-control"/>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label for="kecamatan" class="">Kecamatan</label>
						<input value="<?php echo isset($_GET['kode'])?$row['kec_']:''; ?>" type="text" id="kecamatan" name="kecamatan" class="form-control"/>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label for="jenjang" class="">Jenjang</label>
						<input value="<?php echo isset($_GET['kode'])?$row['jenjang']:''; ?>" type="text" id="jenjang" name="jenjang" class="form-control"/>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label for="status" class="">Status</label>
						<input value="<?php echo isset($_GET['kode'])?$row['status_sekolah']:''; ?>" type="text" id="status" name="status" class="form-control"/>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label for="waktu" class="">Waktu</label>
						<input value="<?php echo isset($_GET['kode'])?$row['waktu_penyelenggaraan']:''; ?>" type="text" id="waktu" name="waktu" class="form-control"/>
					</div>
				</div>
			</div>
			<div id="tab-2">
				<div class="col-sm-4">
					<div class="form-group">
						<label for="akreditasi" class="">Akreditasi</label>
						<input value="<?php echo isset($_GET['kode'])?$row['akreditasi']:''; ?>" type="text" id="akreditasi" name="akreditasi" class="form-control"/>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label for="sk-akreditasi" class="">SK Akreditasi</label>
						<input value="<?php echo isset($_GET['kode'])?$row['sk_akreditasi']:''; ?>" type="text" id="sk-akreditasi" name="sk-akreditasi" class="form-control"/>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label for="tanggal-sk-akreditasi" class="">Tanggal SK Akreditasi</label>
						<input value="<?php echo isset($_GET['kode'])?$row['tanggal_sk_akreditasi']:''; ?>" type="text" id="tanggal-sk-akreditasi" name="tanggal-sk-akreditasi" class="form-control tanggal"/>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label for="sk-pendirian" class="">SK Pendirian</label>
						<input value="<?php echo isset($_GET['kode'])?$row['sk_pendirian_sekolah']:''; ?>" type="text" id="sk-pendirian" name="sk-pendirian" class="form-control"/>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label for="tanggal-sk-pendirian" class="">Tanggal SK Pendirian</label>
						<input value="<?php echo isset($_GET['kode'])?$row['tanggal_sk_pendirian']:''; ?>" type="text" id="tanggal-sk-pendirian" name="tanggal-sk-pendirian" class="form-control tanggal"/>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label for="sk-ijin" class="">SK Ijin</label>
						<input value="<?php echo isset($_GET['kode'])?$row['sk_izin_operasional']:''; ?>" type="text" id="sk-ijin" name="sk-ijin" class="form-control"/>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label for="tanggal-sk-ijin" class="">Tanggal SK Ijin</label>
						<input value="<?php echo isset($_GET['kode'])?$row['tanggal_sk_izin_operasional']:''; ?>" type="text" id="tanggal-sk-ijin" name="tanggal-sk-ijin" class="form-control tanggal"/>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label for="mbs" class="">MBS</label>
						<input value="<?php echo isset($_GET['kode'])?$row['mbs']:''; ?>" type="text" id="mbs" name="mbs" class="form-control"/>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label for="sertifikat-iso" class="">Sertifikasi ISO</label>
						<input value="<?php echo isset($_GET['kode'])?$row['sertifikasi_iso']:''; ?>" type="text" id="sertifikat-iso" name="sertifikat-iso" class="form-control"/>
					</div>
				</div>
			</div>
			<div id="tab-3">
				<div class="col-sm-12">
					<div class="form-group">
						<label for="akses-internet" class="">Akses Internet</label>
						<input value="<?php echo isset($_GET['kode'])?$row['akses_internet']:''; ?>" type="text" id="akses-internet" name="akses-internet" class="form-control"/>
					</div>
				</div>
			</div>
			<div id="tab-4">
				<div class="col-sm-4">
					<div class="form-group">
						<label for="telpon" class="">Telpon</label>
						<input value="<?php echo isset($_GET['kode'])?$row['nomor_telepon']:''; ?>" type="text" id="telpon" name="telpon" class="form-control"/>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label for="fax" class="">FAX</label>
						<input value="<?php echo isset($_GET['kode'])?$row['nomor_fax']:''; ?>" type="text" id="fax" name="fax" class="form-control"/>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label for="email" class="">EMAIL</label>
						<input value="<?php echo isset($_GET['kode'])?$row['email']:''; ?>" type="text" id="email" name="email" class="form-control"/>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label for="website" class="">Website</label>
						<input value="<?php echo isset($_GET['kode'])?$row['website']:''; ?>" type="text" id="website" name="website" class="form-control"/>
					</div>
				</div>
			</div>
			<div id="tab-6">
				<div class="col-sm-4">
					<div class="form-group">
						<label for="rekening-bank" class="">Rekening Bank</label>
						<input value="<?php echo isset($_GET['kode'])?$row['no_rekening']:''; ?>" type="text" id="rekening-bank" name="rekening-bank" class="form-control"/>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label for="nama-bank" class="">Nama Bank</label>
						<input value="<?php echo isset($_GET['kode'])?$row['nama_bank']:''; ?>" type="text" id="nama-bank" name="nama-bank" class="form-control"/>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label for="cabang-bank" class="">Cabang Bank</label>
						<input value="<?php echo isset($_GET['kode'])?$row['cabang_kcp_unit']:''; ?>" type="text" id="cabang-bank" name="cabang-bank" class="form-control"/>
					</div>
				</div>
			</div>
			<div id="tab-5">
				<div class="col-sm-6">
					<div class="form-group">
						<label for="lintang" class="">Lintang</label>
						<input value="<?php echo isset($_GET['kode'])?$row['lintang']:''; ?>" placeholder="contoh: -7.305000" type="text" id="lintang" name="lintang" class="form-control"/>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label for="bujur" class="">Bujur</label>
						<input value="<?php echo isset($_GET['kode'])?$row['bujur']:''; ?>" placeholder="contoh: 110.491700" type="text" id="bujur" name="bujur" class="form-control"/>
					</div>
				</div>
			</div>
		</form>
	</div>  
	<i class="error text-danger"></i>
</div>
<script>
$(function(){
	$("#tabs").tabs();
	$(".tanggal").datepicker({dateFormat: 'dd MM yy' });
});
</script>