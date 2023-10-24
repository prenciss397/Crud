<?php

require_once __DIR__ . '/../controller/action.php';

if(isset($_GET['id'])) {
    $student = selectStudent($_GET['id']);
    return $student;
}