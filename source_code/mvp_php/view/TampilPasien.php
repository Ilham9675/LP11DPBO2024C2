<?php


include("KontrakView.php");
include("presenter/ProsesPasien.php");

class TampilPasien implements KontrakView
{
	private $prosespasien; //presenter yang dapat berinteraksi langsung dengan view
	private $tpl;

	function __construct()
	{
		//konstruktor
		$this->prosespasien = new ProsesPasien();
	}

	function tampil()
	{
		$this->prosespasien->prosesDataPasien();
		$data = null;

		//semua terkait tampilan adalah tanggung jawab view
		for ($i = 0; $i < $this->prosespasien->getSize(); $i++) {
			$no = $i + 1;
			$data .= "<tr>
			<td>" . $no . "</td>
			<td>" . $this->prosespasien->getNik($i) . "</td>
			<td>" . $this->prosespasien->getNama($i) . "</td>
			<td>" . $this->prosespasien->getTempat($i) . "</td>
			<td>" . $this->prosespasien->getTl($i) . "</td>
			<td>" . $this->prosespasien->getGender($i) . "</td>
			<td>" . $this->prosespasien->getEmail($i) . "</td>
			<td>" . $this->prosespasien->getTelp($i) . "</td>
			<td>
                <a href='form.php?id=" . $this->prosespasien->getId($i) .  "&update' class='btn btn-warning' '>Edit</a>
                <a href='index.php?id_hapus=" . $this->prosespasien->getId($i) . "' class='btn btn-danger' '>Hapus</a>
            </td>";
			
		}
		// Membaca template skin.html
		$this->tpl = new Template("templates/skin.html");

		// Mengganti kode Data_Tabel dengan data yang sudah diproses
		$this->tpl->replace("DATA_TABEL", $data);

		// Menampilkan ke layar
		$this->tpl->write();
	}

	function tambah()
	{
		
		$data = null;

		
        $data .= '
        <form method="post" action="index.php">
 
        <br><br><div class="card">
        
        <div class="card-header bg-primary">
        <h1 class="text-white text-center">  Create New Member </h1>
        </div><br>
        
        <label> NIK: </label>
        <input type="text" name="nik" class="form-control" required> <br>
        
        <label> NAMA: </label>
        <input type="text" name="nama" class="form-control" required> <br>
        
        <label> TEMPAT: </label>
        <input type="text" name="tempat" class="form-control" required> <br>

        <label> TANGGAL LAHIR: </label>
        <input type="date" name="tl" class="form-control" required> <br>

        <label> GENDER: </label>
		<select name="gender" class="form-control" required>
			<option value="">Pilih Gender</option>
			<option value="Perempuan">Perempuan</option>
			<option value="Laki-laki">Laki-laki</option>
		</select> <br>


        <label> EMAIL: </label>
        <input type="email" name="email" class="form-control" required> <br>

        <label> TELEPON: </label>
        <input type="text" name="telp" class="form-control" required> <br>
        
        <button class="btn btn-success" type="submit" name="add"> Submit </button><br>
        <a class="btn btn-info" type="cancel" name="cancel" href="index.php"> Cancel </a><br>
        </form>';
		
		// Membaca template skin.html
		$this->tpl = new Template("templates/form.html");

		// Mengganti kode Data_Tabel dengan data yang sudah diproses
		$this->tpl->replace("FORM", $data);

		// Menampilkan ke layar
		$this->tpl->write();
	}

	function update($id){
		$this->prosespasien->prosesDataPasienID($id);
		$data = null;
		$data .= '
		<form method="post" action="index.php">
	
		<br><br><div class="card">
		
		<div class="card-header bg-primary">
		<h1 class="text-white text-center">  Update Member </h1>
		</div><br>
		<input type="hidden" name="id" value="'.$this->prosespasien->getId(0).'" class="form-control"> <br>
		
		<label> NIK: </label>
		<input type="text" name="nik" value="' . $this->prosespasien->getNik(0) . '" class="form-control" required> <br>
		
		<label> NAMA: </label>
		<input type="text" name="nama" value="' . $this->prosespasien->getNama(0) . '" class="form-control" required> <br>
		
		<label> TEMPAT: </label>
		<input type="text" name="tempat" value="' . $this->prosespasien->getTempat(0) . '" class="form-control" required> <br>

		<label> TANGGAL LAHIR: </label>
		<input type="date" name="tl" value="' . $this->prosespasien->getTl(0) . '" class="form-control" required> <br>

		<label> GENDER: </label>
		<select name="gender" class="form-control" required>
			<option value="">Pilih Gender</option>
			<option value="Perempuan"' . ($this->prosespasien->getGender(0) == 'Perempuan' ? ' selected' : '') . '>Perempuan</option>
			<option value="Laki-laki"' . ($this->prosespasien->getGender(0) == 'Laki-laki' ? ' selected' : '') . '>Laki-laki</option>
		</select> <br>


		<label> EMAIL: </label>
		<input type="email" name="email" value="' . $this->prosespasien->getEmail(0) . '" class="form-control" required> <br>

		<label> TELEPON: </label>
		<input type="text" name="telp" value="' . $this->prosespasien->getTelp(0) . '" class="form-control" required> <br>
		
		<button class="btn btn-success" type="submit" name="update"> Update </button><br>
		<a class="btn btn-info" type="cancel" name="cancel" href="index.php"> Cancel </a><br>
		</form>';	

		// Membaca template skin.html
		$this->tpl = new Template("templates/form.html");

		// Mengganti kode Data_Tabel dengan data yang sudah diproses
		$this->tpl->replace("FORM", $data);

		// Menampilkan ke layar
		$this->tpl->write();

	}

	function actionadd($data){
		$this->prosespasien->prosesAddData($data);
	}

	function actionupdate($data){
		$this->prosespasien->prosesUpdateData($data);
	}
	function actiondelete($id){
		$this->prosespasien->prosesDeleteData($id);
	}


}
