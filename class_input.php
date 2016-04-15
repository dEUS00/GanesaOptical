<?php
	class input {
		private $servername = "localhost";
		private $username = "root";
		private $password = "";
		private $dbname = "ganesa_optical";

		function frame() {
			if (isset($_POST["nama_frame"]) && isset($_POST["stok"]) && isset($_POST["harga"])) {
				$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

				$nama_frame = $_POST["nama_frame"];
				$stok = $_POST["stok"];
				$harga = $_POST["harga"];

				$sql = "INSERT INTO t_frame(`nama_frame`, `stok`, `harga`) VALUES('$nama_frame', '$stok', '$harga')";

				$conn->query($sql);
				$conn->close();
			}
		}

		function lensa() {
			if (isset($_POST["nama_lensa"]) && isset($_POST["ukuran_lensa"]) && isset($_POST["jenis_lensa"]) && isset($_POST["harga_lensa"])) {
				$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

				$nama_lensa = $_POST["nama_lensa"];
				$ukuran_lensa = $_POST["ukuran_lensa"];
				$jenis_lensa = $_POST["jenis_lensa"];
				$harga_lensa = $_POST["harga_lensa"];


				$sql = "INSERT INTO t_lensa(`nama_lensa`, `ukuran_lensa`, `jenis_lensa`, `harga_lensa`) VALUES('$nama_lensa', '$ukuran_lensa', '$jenis_lensa', '$harga_lensa')";

				$conn->query($sql);
				$conn->close();
			}
		}

		function pemesanan() {
			if (isset($_POST["nama_frame"]) && isset($_POST["nama_lensa"]) && isset($_POST["nomor_hp"])) {
				$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

				$nama_frame = $_POST["nama_frame"];
				$nama_lensa = $_POST["nama_lensa"];
				$nomor_hp = $_POST["nomor_hp"];
				$jumlah = $_POST["jumlah"];
				$harga = $_POST["harga"];
				$curDate = date("Y-m-d");

				$sql = "INSERT INTO t_pemesanan(`nama_frame`, `nama_lensa`, `nomor_hp`, `jumlah`, `harga`, `tanggal`) VALUES('$nama_frame', '$nama_lensa', '$nomor_hp', '$jumlah', '$harga', '$curDate')";

				$conn->query($sql);
				$conn->close();
			}
		}

		function reparasi() {
			if (isset($_POST["nomor_hp"]) && isset($_POST["harga"]) && isset($_POST["keterangan"])) {
				$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

				$nomor_hp = $_POST["nomor_hp"];
				$harga = $_POST["harga"];
				$keterangan = $_POST["keterangan"];
				$curDate = date("Y-m-d");

				$sql = "INSERT INTO t_reparasi(`nomor_hp`, `harga`, `keterangan`, `tanggal`) VALUES('$nomor_hp', '$harga', '$keterangan', '$curDate')";

				$conn->query($sql);
				$conn->close();
			}
		}

		function kustomer() {
			if (isset($_POST["nama_kustomer"]) && isset($_POST["nomor_hp"]) && isset($_POST["keterangan_penyakit"])) {
				$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

				$nama_kustomer = $_POST["nama_kustomer"];
				$nomor_hp = $_POST["nomor_hp"];
				$keterangan_penyakit = $_POST["keterangan_penyakit"];

				$sql = "INSERT INTO t_customer(`nama_kustomer`, `nomor_hp`, `keterangan_penyakit`) VALUES('$nama_kustomer', '$nomor_hp', '$keterangan_penyakit')";

				$conn->query($sql);
				$conn->close();
			}
		}
	}
?>