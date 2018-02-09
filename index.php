<?php
include 'includes/main.php';

if ($_SESSION['created']) {
    header('Location: http://localhost:8080/results.php');
} else {
    header('Location: http://localhost:8080/settings.php');
}

die("Forbidden to visit this site.");