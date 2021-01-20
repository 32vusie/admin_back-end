<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/login.css">
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
        <!-- <img src="" id="icon" alt="User Icon" /> -->
        </div>

        <!-- Login Form -->
        <form method="post" action="php/core/Login/admin-login.php">
        <input type="text" id="username" class="fadeIn second" name="username" placeholder="Username">
        <input type="password" id="password" class="fadeIn third" name="password" placeholder="password" >
        <input type="submit" name="submitBtnLogin" id="submitBtnLogin" class="fadeIn fourth" value="Login">
        <span class="loginMsg"><?php echo @$msg ?></span>
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
        <a class="underlineHover" href="#">Forgot Password?</a>
        </div>

    </div>
</div>