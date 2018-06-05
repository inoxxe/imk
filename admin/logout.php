<?php

require_once "db.php";

if ( session_destroy() ){
    header('Location: ../index.php');
}

?>