<?php

require_once __DIR__ . '/../controller/action.php';

if (isset($_POST['btnupdate'])) {
    $id = $_POST['id'];
    $studid = $_POST['studid'];
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $age = $_POST['age'];
    $stat = $_POST['stat'];
    $address = $_POST['address'];
    $cn = $_POST['cn'];


    $bool = updateStudent($id, $studid, $lname, $fname, $age, $stat, $address, $cn);
    if ($bool) {
        header("location: ./view.php");
    } else {
        echo "Something Went Wrong!";
    }
}
