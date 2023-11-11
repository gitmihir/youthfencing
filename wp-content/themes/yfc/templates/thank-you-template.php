<?php
/*
 * Template Name: Thank you Page
 */
get_header();
?>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 mt-5 ">
            <div class="jumbotron text-xs-center">
                <h1 class="display-3">Thank You!</h1>
                <p class="lead">A copy of this will be sent to them, And that final pledge will be sent once tournament
                    complete
                    with
                    fencers final points tallied.</p>
                <hr>
                <p>
                    <a class="btn btn-danger" href="<?php echo get_site_url(); ?>">Back Home </a>
                </p>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<?php
get_footer();