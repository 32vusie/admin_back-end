<?php 

if(!isset($_SESSION['login'])){ //if login in session is not set
  header("Location: login.php");
} else {
  header("Location:home.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<?php include_once './php/seps/header.php'; ?>
<body>

<?php include_once './php/seps/nav.php'; ?>

<div class="container-fluid">
    <div class="row content">
        <?php include_once './php/seps/sidenav.php'; ?>
    <br>
    <?php include_once './php/seps/cards.php' ?>
  </div>
</div>

</body>
</html>
