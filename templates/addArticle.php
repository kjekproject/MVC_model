<?php 

include 'templates/header.php'; 
?>

<h1>Add article</h1>

<form action="?task=articles&action=insert" method="post"> 
    Title: <input type="text" name="title" /><br />
    Author: <input type="text" name="author" /><br />
    Add date: <input type="text" name="date_add" value="<?php date("Y:m:d"); ?>"/><br />
    Content:<br />
    <textarea name="content"></textarea><br />
    Category:
    <select name="cat" size="0">
        <?php
        foreach($this->get('catsData') as $cats) {
            echo "<option value=\"".$cats['id']."\">".$cats['name']."</option>";
        }
        ?>
    </select><br/>
    <input type="submit" value="Add" />
</form>

<?php 

include 'templates/footer.html.php'; 
?>