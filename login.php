<?php
//On démarre une nouvelle session
session_start();
if (isset($_SESSION['loginname'])) {
    header('location: index.php');
}
// On vérifie si le formulaire a été envoyé
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($_POST as $key => $value) {
        $data[$key] = trim($value);
    }
    $name = $_POST['loginname'];
    $errors = '';

    if (empty($data['loginname']) && isset($data['loginname'])) {
        $errors = 'Entrez un username';
    }
    /*if ($name != 'kolo' && !empty($name))
    {
        $errors = 'Membre non reconnu';
    }*/
    if (!empty($errors)) {
        echo htmlspecialchars($errors);

    }

    if (empty($errors)) {
        //session_start();
        $_SESSION['loginname'] = $_POST['loginname'];
        header('Refresh: 1;URL=index.php');
        echo htmlentities("Welcome " . $_SESSION['loginname']);
    }

}

?>


<?php require 'inc/head.php'; ?>
<div class="container" style="margin-top:40px">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong> Sign in to continue</strong>
                </div>
                <div class="panel-body">
                    <form role="form" action="#" method="POST">
                        <fieldset>
                            <div class="row">
                                <div class="center-block">
                                    <img class="profile-img"
                                         src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                                         alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                              <i class="glyphicon glyphicon-user"></i>
                                            </span>
                                            <input class="form-control" placeholder="Username" name="loginname"
                                                   type="text" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="valider" class="btn btn-lg btn-primary btn-block" value="Sign in">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="panel-footer ">
                    Don't have an account ? <a href="#" onClick="">Too bad !</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require 'inc/foot.php'; ?>


