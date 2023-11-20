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
                <p class="lead">Thank you for your pledge. This will tremendously help us to help the kids of Chicago!
                </p>
                <p>You will receive a copy of this form for your record. Please keep in mind, once the tournament is
                    complete, the fencer's final points will be tallied, the <bold>Final</bold> pledge remittance will
                    be sent at that time.</p>
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