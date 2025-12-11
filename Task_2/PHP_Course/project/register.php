<?php
require_once 'includes/header.php';
?>

<div>
    <h1>Register</h1>
    <p> Lah punyo akun? <a href="login.php">Login lee!</a></p>

    <form action="includes/register-inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="confirmPassword" placeholder="Confirm password">
        <button type="submit" name="submit">REGISTRER</button>
    </form>
</div>

<?php
require_once 'includes/footer.php';
?>

