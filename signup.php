<?php
/**
 * Sign up a new user
 */

// Initialization
require_once('includes/init.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // User::signup($_POST);

    // header('Location: http://' . $_SERVER['HTTP_HOST'] . '/signup_success.php');
    echo $_SERVER['HTTP_HOST'] . '<br>';
    exit;
}

$page_title = 'Sign Up';
include('includes/header.php');
?>

<h1>Sign Up</h1>
<form method="post">
    <div>
        <label for="name">Name</label>
        <input type="text" id="name" name="name"/>
    </div>
    
    <div>
        <label for="email">E-mail</label>
        <input type="text" id="email" name="email"/>
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password"/>
    </div>

    <input type="submit" value="Sign Up"/>
</form>

<?php include('includes/footer.php'); ?>
