<?php

/******************************************
Asisten Pemrogaman 13
 ******************************************/

include("model/Template.class.php");
include("model/DB.class.php");
include("model/Pasien.class.php");
include("model/TabelPasien.class.php");
include("view/TampilPasien.php");


$tp = new TampilPasien();
if (isset($_POST['add'])){
    $data = array(
        'nik' => $_POST['nik'],
        'nama' => $_POST['nama'],
        'tempat' => $_POST['tempat'],
        'tl' => $_POST['tl'],
        'gender' => $_POST['gender'],
        'email' => $_POST['email'],
        'telp' => $_POST['telp']
    );
    $tp->actionadd($data);
    header("location:index.php");
}else if (!empty($_GET['id_hapus'])){
    $id = $_GET['id_hapus'];
    $tp->actiondelete($id);
    header("location:index.php");
}else if (isset($_POST['update'])){
    $data = array(
        'id' => $_POST['id'],
        'nik' => $_POST['nik'],
        'nama' => $_POST['nama'],
        'tempat' => $_POST['tempat'],
        'tl' => $_POST['tl'],
        'gender' => $_POST['gender'],
        'email' => $_POST['email'],
        'telp' => $_POST['telp']
    );
    $tp->actionupdate($data);
    header("location:index.php");
}else{
    $tp->tampil();
}
