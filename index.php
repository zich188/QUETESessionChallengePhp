<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php'; ?>

<?php
//session_start();
//Methode GET
//je verifie si $_GET['add_to_cart'] est instancié
    //if (isset($_GET['add_to_cart']))
    //{
//si oui je stock dans $_SESSION la valeur de add_to_cart
   // $_SESSION['pannier']['name'] = $_GET['add_to_cart'];
    //}


//methode POST

if (!empty($_POST['add_to_pannier']) && isset($_SESSION['loginname']))

{
    $_SESSION['pannier'][] = $_POST['add_to_pannier'];
    var_dump($_SESSION['pannier']);
    var_dump($_POST['add_to_pannier']);
    echo "ajouté au pannier";
    /*$var = $_POST['add_to_pannier'];
    $_SESSION['pannier'][] = $var;*/
}

//var_dump($_POST);
?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id;?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                        <form method="post" action="">
                            <button type="submit" name="add_to_pannier" value=<?= $cookie['name']; ?>>add to cart</button>
                        </form>
                        <!--<a href="?add_to_cart=<?= $cookie['name']; ?>" class="btn btn-primary">-->
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add to cart</a>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
