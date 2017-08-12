<?php

if($_GET['task'] == 'categories') {
    include 'controller/categories.php';
    $ob = new CategoriesController();
    $ob->$_GET['action']();
} elseif ($_GET['task'] == 'articles') { 
    include 'controller/articles.php';
    $ob = new ArticlesController();
    $ob->$_GET['action']();
} else {
    include 'controller/artilces.php';
    $ob = new ArticlesController();
    $ob->index();
}