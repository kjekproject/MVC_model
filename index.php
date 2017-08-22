<?php

if(isset($_GET['task'])) {
    if($_GET['task'] == 'categories') {
        include 'controller/categories.php';
        $ob = new CategoriesController();
        $action = $_GET['action'];
        $ob->$action();
    } elseif($_GET['task'] == 'articles') {
        include 'controller/articles.php';
        $ob = new ArticlesController();
        $action = $_GET['action'];
        $ob->$action();
    }
} else {
    include 'controller/articles.php';
    $ob = new ArticlesController();
    $ob->index();
}