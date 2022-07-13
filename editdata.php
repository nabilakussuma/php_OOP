<?php
include('config.php');
$db = new Database();
$id_mhs = $_GET['id'];
if (!is_null($id_mhs)) {
    $data_mhs = $db->get_by_id($id_mhs);
} else {
    header('location:tampil_data.php');
}