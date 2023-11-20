<?php
/*
 * Template Name: After Registration
 */
get_header();
?>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 mt-5 ">
            <div class="jumbotron text-xs-center">
                <h1 class="display-3">You are now registered!</h1>
                <p class="lead">Please click this link to login.
                </p>
                <p>
                    <a class="btn btn-danger" href="<?php echo get_site_url(); ?>/wp-login.php">Login </a>
                </p>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<?php
get_footer();