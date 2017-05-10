<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?= App::getInstance()->title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php" alt="Exchange.fr"><img width="50%" src="img/logo.gif"></a>
        </div>
        <div class="navbar-header pull-left">
                <a class="navbar-brand" href="../forum/index.php">News</a>
            
        </div>
        <div class="navbar-header pull-left">
                <a class="navbar-brand" href="../forum/index.php">Club</a>
            
        </div>
        <div class="navbar-header pull-left">
                <a class="navbar-brand" href="../forum/index.php">Exchanger</a>
            
        </div>
        <div class="navbar-header pull-left">
                <a class="navbar-brand" href="../forum/index.php">Forum</a>
            
        </div>



        <div class="navbar-header pull-right">
            
<?php   if ($_SESSION) {
           echo '<a class="navbar-brand" href="index.php?p=users.disconnect">Account</a>';
        }
?>
        <div class="navbar-header pull-right">
            
<?php   if (!$_SESSION) {
            echo '<a class="navbar-brand" href="index.php?p=users.login">Connect</a>';
        }else{
            echo '<a class="navbar-brand" href="index.php?p=users.disconnect">Disconnect</a>';
        }
?>

            
        </div>

    </div>
</nav>

<div class="container">

    <div class="starter-template" style="padding-top: 100px;">
        <?= $content; ?>
    </div>

</div><!-- /.container -->


</body>
</html>
