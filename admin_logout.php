<?php session_start(); ?>
<?php @require_once("includes/functions.php"); ?>
<?php

    session_unset();
    session_destroy();
    redirect_to("admin.php?out=true");