<?php
require_once 'includes/header.php';
?>

<div>
    <h1>Log in</h1>
    <p> Indak ado akun? <a href="register.php">Register ciek lu!</a></p>

    <form action="includes/login-inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button type="submit" name="submit">LOGIN</button>
    </form>
</div>
<?php
require_once 'includes/footer.php';
?>

