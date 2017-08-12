<?php

include 'templates/header.php'; 
?>

<h1>Category list</h1>

    <table>
        <tr>
            <td>Name</td>
            <td></td>
        </tr>
        <?php foreach($this->get('catsData') as $cats) { ?>
        <tr>
            <td><?php $cats['name']; ?></td>
            <td><a href="?task=categories&action=delete&id=<?php $cats['id']; ?>">Delete</a></td>
        </tr>
        <?php } ?>
    </table>

<?php include 'templates/footer.php'; ?>
