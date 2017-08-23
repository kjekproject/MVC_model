<?php

include 'templates/header.php'; 

foreach($this->get('articles') as $articles) {
    echo "<h1>".$articles['title']."</h1>
        Author: ".$articles['author']."<br />
        Add date: ".$articles['date_add']."<br />
        Category: ".$articles['name']."<br />
        Content:".$articles['content'];
}

include 'templates/footer.php'; 
?>