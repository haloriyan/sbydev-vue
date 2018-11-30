<?php
include 'controller.php';

class users extends EMBO {
	public function showAll() {
		$q = EMBO::tabel('user')->pilih()->eksekusi();
		$response = [];
		while($r = EMBO::ambil($q)) {
			$response[] = $r;
		}
		echo json_encode($response);
	}
	public function delete() {
		$id = EMBO::pos('iduser');
		$del = EMBO::tabel('user')->hapus()->dimana(['iduser' => $id])->eksekusi();
		return $del;
	}
	public function add() {
		$nama = EMBO::pos('nama');
		$email = EMBO::pos('email');
		$pwd = EMBO::pos('pwd');

		$add = EMBO::tabel('user')
					->tambah([
						'iduser' 		=> null,
						'nama'			=> $nama,
						'email'			=> $email,
						'password'		=> $pwd,
						'registered'	=> time()
					])
					->eksekusi();
	}
	public function change($id, $kolom, $value) {
		$u = EMBO::tabel('user')->ubah([$kolom => $value])->eksekusi();
		return $u;
	}
}

$users = new users();

?>