<?php
$tipo = $_GET['tipo'];
if (isset($_GET['liga'])) {
    include('inc/eventos/partidos.php');
} else {
    include('inc/eventos/lista.php');
}
?>