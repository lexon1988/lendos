<?php
    if($_COOKIE['acc']<>"welcome") {

        header('Location: ../login.php');
        exit();
    };
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Админка</title>
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/css/style_admin.css">

    </head>


    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse">
        <div class="container_admin">


                <ul class="nav navbar-nav">
                    <li><a href="/" class="navbar-brand"><span class="glyphicon glyphicon-home"></span> Home</a></li>

                    <li><a href="/admin/pages/index.php" class="navbar-brand"><span class="glyphicon glyphicon-save-file"></span> Страницы</a></li>

                    <li><a href="/admin/faq.php" class="navbar-brand"><span class="glyphicon glyphicon-info-sign"></span> Инструкция</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/logout.php" class="navbar-brand">Выход <span class="glyphicon glyphicon-log-out"></span></a></li>
                </ul>

        </div>
    </nav>

<body>