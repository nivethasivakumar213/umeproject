<?php
session_start();
$_SESSION['a'] = "Hi i am a new session_cache_expire";
echo $_SESSION['a'];

?>