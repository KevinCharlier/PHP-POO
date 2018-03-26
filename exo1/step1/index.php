<?php 
require 'form.php';
$form = new Form($_POST);
?>

<form action="#" method="POST">

    <?php

    echo $form->text();
    echo $form->select();
    echo $form->textarea();
    echo $form->radio();
    echo $form->checkbox();
    echo $form->submit();

    ?>

</form>
