<?php require 'inc/head.php'; ?>

<?php
if (!isset($_SESSION['loginname']) && !isset($_POST['loginname'])){
    header('location:login.php');
}
?>
<section class="cookies container-fluid">
    <div class="row">
        TODO : Display shopping cart items from $_SESSION here. <br><br>
    <?php

    if (isset($_SESSION['pannier'])){

        foreach ($_SESSION['pannier'] as $pannier) {

            echo $pannier ."<br>";
        }
    } else{
        echo 'pannier vide';
    }
    ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
