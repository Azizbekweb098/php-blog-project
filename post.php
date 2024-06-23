<?php


require 'includes/navbar.php';

require  'databese.php';

$id = $_GET['id'];

$statement = $pdo->prepare("SELECT * FROM okjonl WHERE id = ?");
$statement->execute([$id]);
$post = $statement->fetch();

?>
<div class="col-lg-8 mx-auto p-3 py-md-5">
   <h3><?= $post['id'] ?></h3>
 

        <h1><?= $post['title'] ?></h1>
        <p class="fs-5 col-md-8"><?= $post['body']  ?></p>
 




    <?php require  'includes/footer.php' ?>
