<?php

session_start();
session_unset();
header("Location: ../news/index.php");

?>