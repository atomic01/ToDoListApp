<?php
session_start();
$_SESSION['listid']=$_POST['listid'];


header("Location: http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/dashboard/logedin_user_list_preview.php");

?>