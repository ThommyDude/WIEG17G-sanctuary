<?php
include 'includes/main.php';

if ($_SESSION['created']) {
    redirect('results.php');
} else {
    redirect('settings.php');
}