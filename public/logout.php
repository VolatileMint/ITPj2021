<?php // logout.php
session_start();
$_SESSION = array(); // セッションの中身を削除
session_destroy(); // セッションを破棄