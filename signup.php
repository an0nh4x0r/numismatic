<?php
$current_page = 'signup';
include_once('includes/header.php');
?>

<div class="container">
    <div class="row">
        <form class="center-block well">

            <div class="form-group">
                <label for="name">Enter Your Username</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your username here">
            </div>

            <div class="form-group">
                <label for="name">Enter Your Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name here">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email here">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password">
            </div>

            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" class="form-control" id="confirm_password" placeholder="Please confirm password">
            </div>

            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</div>

<?php
include_once('includes/footer.php');
?>
