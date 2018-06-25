<?php

require_once "../koneksi.php";

if ( session_destroy() )
{
    header('Location: ../index.php');
}

?>