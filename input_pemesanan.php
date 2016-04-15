<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><!--Import materialize.css-->
    <link href="css/materialize.min.css" media="screen,projection" rel="stylesheet" type="text/css">
    <!--Let browser know website is optimized for mobile-->
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!--Import jQuery before materialize.js-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script> 
    <script src="js/materialize.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        $( document ).ready(function() {
            $(".dropdown-button").dropdown();
            $(".button-collapse").sideNav({
                edge: 'left'
            });
        });
    </script>

    <?php
        include("class_input.php");

        $input = new input();
        $input->pemesanan();
    ?>

    <title>GO Inventory</title>
</head>

<body>
    <ul id="lihat_data" class="dropdown-content">
        <li><a href="#!">Frame</a></li>
        <li><a href="#!">Pemesanan</a></li>
        <li><a href="#!">Reparasi</a></li>
        <li><a href="#!">Kustomer</a></li>
    </ul>
    <nav>
        <div class="nav-wrapper blue">
            <a href="#!" class="brand-logo">GO Inventory</a>
            <a href="#!" data-activates="mobile_menu" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="side-nav" id="mobile_menu">
                <li><a href="index.php">Home</a></li>
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header">Input Data<i class="material-icons right">arrow_drop_down</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="input_frame.php">Frame</a></li>
                                <li><a href="input_lensa.php">Lensa</a></li>
                                <li class="active blue lighten-2"><a href="input_pemesanan.php">Pemesanan</a></li>
                                <li><a href="input_reparasi.php">Reparasi</a></li>
                                <li><a href="input_kustomer.php">Kustomer</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="collapsible-header">Lihat Data<i class="material-icons right">arrow_drop_down</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="data_frame.php">Frame</a></li>
                                <li><a href="data_pemesanan.php">Pemesanan</a></li>
                                <li><a href="data_reparasi.php">Reparasi</a></li>
                                <li><a href="data_kustomer.php">Kustomer</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="section">
                <h5>Pemesanan</h5>
                <form method="post" class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="nama_frame" name="nama_frame" type="text" class="validate">
                            <label for="nama_frame">Nama Frame</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="nama_lensa" name="nama_lensa" type="text" class="validate">
                            <label for="nama_lensa">Nama Lensa</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s4">
                            <input id="nomor_hp" name="nomor_hp" type="text" class="validate">
                            <label for="nomor_hp">Kontak</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="jumlah" name="jumlah" type="text" class="validate">
                            <label for="jumlah">Jumlah</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="harga" name="harga" type="text" class="validate">
                            <label for="harga">Harga (Rp)</label>
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Kirim
                        <i class="material-icons right">send</i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>