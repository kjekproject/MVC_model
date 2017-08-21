<?php 

include 'templates/header.php'; 
?>

<h1>Add category</h1>

<form action="?task=categories&action=insert" method="post">
    Category name: 
    <input type="text" name="name" /><br />
    <input type="submit" value="Add" />
</form>

<?php 

include 'templates/footer.php'; 
?>
