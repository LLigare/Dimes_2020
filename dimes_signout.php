<?php
session_start();
if(session_destroy())
{
    header("Location: dimes_signin.php");
}
?>