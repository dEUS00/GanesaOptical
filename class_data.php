<?php
	class data {
		private $servername = "localhost";
		private $username = "root";
		private $password = "";
		private $dbname = "ganesa_optical";

		function frame() {
			$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

			$sql = "SELECT * FROM t_frame";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
                echo "<table class=\"highlight\">";
                	echo "<thead>";
                		echo "<tr>";
                			echo "<th>Nama Frame</th>";
                			echo "<th>Stok</th>";
                			echo "<th>Harga</th>";
                		echo "</tr>";
                	echo "</thead>";
                	echo "<tbody>";
	                while($row = $result->fetch_assoc()) {
	                    echo "<tr>";
	                    echo "<td>" . $row["nama_frame"] . "</td>";
	                    echo "<td>" . $row["stok"] . "</td>";
	                    echo "<td>" . $row["harga"] . "</td>";
	                    echo "</tr>";
	                }   
	                echo "</tbody>";
                echo "</table>";
            }
            else {
            	echo "Tidak ada data";
            }

            $conn->close();
		}

		function lensa() {
			$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

			$sql = "SELECT * FROM t_lensa";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
                echo "<table class=\"highlight\">";
                	echo "<thead>";
                		echo "<tr>";
                			echo "<th>Nama Lensa</th>";
                			echo "<th>Ukuran</th>";
                			echo "<th>Jenis</th>";
                			echo "<th>Harga</th>";
                		echo "</tr>";
                	echo "</thead>";
                	echo "<tbody>";
	                while($row = $result->fetch_assoc()) {
	                    echo "<tr>";
	                    echo "<td>" . $row["nama_lensa"] . "</td>";
	                    echo "<td>" . $row["ukuran_lensa"] . "</td>";
	                    echo "<td>" . $row["jenis_lensa"] . "</td>";
	                    echo "<td>" . $row["harga_lensa"] . "</td>";
	                    echo "</tr>";
	                }   
	                echo "</tbody>";
                echo "</table>";
            }
            else {
            	echo "Tidak ada data";
            }

            $conn->close();
		}

		function pemesanan() {
			$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

			$sql = "SELECT * FROM t_pemesanan";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
                echo "<table class=\"highlight\">";
                	echo "<thead>";
                		echo "<tr>";
                			echo "<th>Nama Frame</th>";
                			echo "<th>Nama Lensa</th>";
                			echo "<th>Kontak</th>";
                			echo "<th>Jumlah</th>";
                			echo "<th>Harga</th>";
                			echo "<th>Tanggal</th>";
                		echo "</tr>";
                	echo "</thead>";
                	echo "<tbody>";
	                while($row = $result->fetch_assoc()) {
	                    echo "<tr>";
	                    echo "<td>" . $row["nama_frame"] . "</td>";
	                    echo "<td>" . $row["nama_lensa"] . "</td>";
	                    echo "<td>" . $row["nomor_hp"] . "</td>";
	                    echo "<td>" . $row["jumlah"] . "</td>";
	                    echo "<td>" . $row["harga"] . "</td>";
	                    echo "<td>" . $row["tanggal"] . "</td>";
	                    echo "</tr>";
	                }   
	                echo "</tbody>";
                echo "</table>";
            }
            else {
            	echo "Tidak ada data";
            }

            $conn->close();
		}

		function reparasi() {
			$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

			$sql = "SELECT * FROM t_reparasi";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
                echo "<table class=\"highlight\">";
                	echo "<thead>";
                		echo "<tr>";
                			echo "<th>Kontak</th>";
                			echo "<th>Harga</th>";
                			echo "<th>Keterangan</th>";
                			echo "<th>Tanggal</th>";
                		echo "</tr>";
                	echo "</thead>";
                	echo "<tbody>";
	                while($row = $result->fetch_assoc()) {
	                    echo "<tr>";
	                    echo "<td>" . $row["nomor_hp"] . "</td>";
	                    echo "<td>" . $row["harga"] . "</td>";
	                    echo "<td>" . $row["keterangan"] . "</td>";
	                    echo "<td>" . $row["tanggal"] . "</td>";
	                    echo "</tr>";
	                }   
	                echo "</tbody>";
                echo "</table>";
            }
            else {
            	echo "Tidak ada data";
            }

            $conn->close();
		}

		function kustomer() {
			$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

			$sql = "SELECT * FROM t_customer";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
                echo "<table class=\"highlight\">";
                	echo "<thead>";
                		echo "<tr>";
                			echo "<th>Nama Kustomer</th>";
                			echo "<th>Kontak</th>";
                			echo "<th>Keterangan Penyakit</th>";
                		echo "</tr>";
                	echo "</thead>";
                	echo "<tbody>";
	                while($row = $result->fetch_assoc()) {
	                    echo "<tr>";
	                    echo "<td>" . $row["nama_kustomer"] . "</td>";
	                    echo "<td>" . $row["nomor_hp"] . "</td>";
	                    echo "<td>" . $row["keterangan_penyakit"] . "</td>";
	                    echo "</tr>";
	                }   
	                echo "</tbody>";
                echo "</table>";
            }
            else {
            	echo "Tidak ada data";
            }

            $conn->close();
		}

	}
?>