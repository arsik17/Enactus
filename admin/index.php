<?php

require_once('../database.php');
require_once('../models/articles.php');
require_once('../models/employees.php');

$link = db_connect();

if(isset($_GET['action']))
    $action = $_GET['action'];
else
    $action = "";
    
if($action == "add-article"){
    if(!empty($_POST)){
        articles_new($link, $_POST['title'], $_POST['date'], $_POST['text']);
        header("Location: index.php");
    }
    include('../views/admin.php');
}else if($action == "edit-article"){
    if(!isset($_GET['id']))
        header("Location: index.php");
    $id = (int)$_GET['id'];

    if(!empty($_POST) && $id > 0){
        articles_edit($link, $id, $_POST['title'], $_POST['date'], $_POST['text']);
        header("Location: index.php");
    }

    $article = article_get($link, $id);
    include('../views/admin.php');
}
else if($action == "delete-article"){
    $id = $_GET['id'];
    $article = articles_delete($link, $id);
    header("Location: index.php");
}



if(isset($_GET['action']))
    $action1 = $_GET['action'];
else
    $action1 = "";
    
if($action1 == "add-employee"){
    if(!empty($_POST)){
        employees_new($link, $_POST['fname'], $_POST['lname'], $_POST['position'], $_POST['avatar']);
        header("Location: index.php");
    }
    include('../views/admin.php');
}else if($action1 == "edit-employee"){
    if(!isset($_GET['id']))
        header("Location: index.php");
    $id1 = (int)$_GET['id'];

    if(!empty($_POST) && $id1 > 0){
        employees_edit($link, $id1, $_POST['fname'], $_POST['lname'], $_POST['position'], $_POST['avatar']);
        header("Location: index.php");
    }

    $employee = employee_get($link, $id1);
    include('../views/admin.php');
}
else if($action == "delete-employee"){
    $id1 = $_GET['id'];
    $employee = employees_delete($link, $id1);
    header("Location: index.php");
}
else{
    $articles = articles_all($link);
    $employees = employees_all($link);
    include('../views/admin_page.php');
}

?>