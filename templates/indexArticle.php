<?php

include 'templates/header.php';
?>

<h1>Articles list</h1>
<table>
    <tr>
        <td>Title</td>
        <td>Add date</td>
        <td>Author</td>
        <td>Category</td>
        <td></td>
    </tr>
    
    <?php
    foreach ($this->get('articles') as $articles) {
        echo "<tr>
            <td><a href=\"?task=articles&action=one&id=".$articles['id']."\">".$articles['title']."</a></td>
            <td>".$articles['date_add']."</td>
            <td>".$articles['author']."</td>
            <td>".$articles['name']."</td>
            <td><a href=\"?task=articles&action=delete&id=".$articles['id']."\">Delete</a></td>
            </tr>";
    }
    ?>
</table>

<?php

include 'templates/footer.php';
?>