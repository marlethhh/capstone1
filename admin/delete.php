<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header('Location: ../index.php');
    exit();
}
include "../auth/conn.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM patient_record WHERE pr_id = $id";
    if (mysqli_query($conn, $sql)) {
        echo "Deleted Record";
        header("Location: ./patientrecords.php");
    }
}
