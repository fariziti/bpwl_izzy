<?php 

class database {
	
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "game";
	var $con;

	
	function __construct(){
		$this->con=mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
	}
	function tampil_data(){
		$data = mysqli_query($this->con,"select * from peserta");
		while ($d=mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function input ($pdaftar,$alamat,$tim){
		mysqli_query($this->con,"insert into peserta values ('' ,'$pdaftar','$alamat','$tim')");
	}
	function hapus($id){
		mysqli_query($this->con,"delete from peserta where id='$id'");
	}
	function edit ($id){
		$data = mysqli_query($this->con,"select * from peserta where id='$id'");
		while ($d=mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function update ($id,$pdaftar,$alamat,$tim){
		$data = mysqli_query($this->con,"update peserta set pendaftar='$pdaftar',alamat='$alamat',tim='$tim' where id='$id';");
	}
}
