<?php

require_once "koneksi.php";

if ( session_destroy() ){
    header('Location: mahasiswa.php');
}

?>