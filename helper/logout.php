<?php

session_start();



$_SESSION['log'] = false;
$_SESSION['who'] = '';
$_SESSION['type'] = '';


echo "
    <script>
    window.location.assign('../') </script>
    ";