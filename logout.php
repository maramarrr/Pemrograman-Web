<?php
session_start();
unset($_SESSION['username']); // hapus data user saja
header("Location: index.html");
exit();
