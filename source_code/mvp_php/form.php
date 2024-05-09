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
if (isset($_GET['add'])){
    $tp->tambah();
    
}else if (isset($_GET['update'])){
    $id = $_GET['id'];
    $tp->update($id);
    
}