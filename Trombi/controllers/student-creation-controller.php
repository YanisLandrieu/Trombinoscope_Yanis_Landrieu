<?php
require_once __DIR__ . '/../function.php';

if($_GET != null) {
    register_user($_GET['firstname'], $_GET['lastname'], $_GET['class'],$_GET['img_name'] );

    header('Location: ../student-creation.php');
}