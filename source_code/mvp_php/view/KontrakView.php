<?php

interface KontrakView{
	public function tampil();
	public function tambah();
	public function update($id);
	public function actionadd($data);
	public function actionupdate($data);
	public function actiondelete($id);
}

?>