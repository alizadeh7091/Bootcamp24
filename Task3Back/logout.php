<?php

setcookie('logged_in', '', time() - (3600), '/');

if (!isset($_COOKIE['logged_in'])) {
    header('Location: panel.php');
} else {
    header('Location: login.php');
}
