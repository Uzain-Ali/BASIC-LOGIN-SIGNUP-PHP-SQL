<?php
session_start();
include_once 'config.php';

session_destroy();

header('location:../index.php');
?>