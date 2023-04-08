<?php
session_start();
session_destroy();
header("Location: /mercatinodelsoftair/index.php");
?>