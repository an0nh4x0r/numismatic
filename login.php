<?php
$current_page = 'login';
include_once('includes/header.php');
?>

<div class="container">
    <div class="row">
        <form class="center-block well">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email here">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your passport here">
            </div>

            <div class="checkbox">
                <label>
                    <input type="checkbox"> Remember Me
                </label>
            </div>
            <button type="button" class="btn btn-default">Forgot Password</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>


<?php
include_once('includes/footer.php');
?>
