<?php
get_header();
while (have_posts()) :
    the_post();
    $slider_args = array(
        "post_type" => "standard_slider",
        "order" => "desc"
    );
    $slider_query = new WP_Query($slider_args);

    $member_args = array(
        "post_type" => "team-member",
        "order" => "desc"
    );
    $member_query = new WP_Query($member_args);
?>
    <div class="wrapper">
        <div class="welcome">
            <?php
            if (get_field('first_h1') && get_field('second_h1')) {
            ?>
                <h1 class="co-title"><strong>
                        <?php echo get_field('first_h1'); ?>
                    </strong>
                    <?php echo get_field('second_h1'); ?>
                </h1>
            <?php }
            if (get_field('third_h4') && get_field('third_content')) {
            ?>
                <h4 class="splash">
                    <?php echo get_field('third_h4'); ?>
                </h4>
                <p class="title-splash">
                    <?php echo get_field('third_content'); ?>
                </p>
            <?php } ?>
        </div>
        <?php if (get_the_post_thumbnail_url()) {
        ?>
            <div class="photographer">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="fencing-mask">
            </div>
        <?php
        } ?>
    </div>
    </section>
    <section id="about" class="about-hero">
        <div class="wrapper">
            <div class="camera"></div>
            <div class="blurb">
                <?php
                if (get_field('first_h2') && get_field('second_h2') && get_field('third_h2')) {
                ?>
                    <h2>
                        <?php echo get_field('first_h2'); ?>
                        <strong>
                            <?php echo get_field('second_h2'); ?>
                        </strong>
                        <?php echo get_field('third_h2'); ?>
                    </h2>
                <?php }
                if (get_field('about_us_details')) {
                    echo get_field('about_us_details');
                }
                ?>
                <div class="social">
                    <?php if (get_field('facebook_link')) {
                    ?>
                        <a href="<?php echo get_field('facebook_link'); ?>" target="_blank"><i class="icon-facebook"></i></a>
                    <?php
                    }
                    if (get_field('instagram_link')) {
                    ?>
                        <a href="<?php echo get_field('instagram_link'); ?>" target="_blank"><i class="icon-instagram"></i></a>
                    <?php
                    }
                    if (get_field('x_link')) {
                    ?>
                        <a href="<?php echo get_field('x_link'); ?>" target="_blank"><i class="icon-testx xcolor"></i></a>
                    <?php
                    } ?>
                </div>
            </div>
        </div>
    </section>
    <section id="gallery">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <?php
                $count_posts = wp_count_posts('standard_slider')->publish;
                $index = 0;
                while ($slider_query->have_posts()) :
                    $slider_query->the_post();
                ?>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $index; ?>" class="<?php echo ($index == 0) ? 'active' : ''; ?>" aria-current="true" aria-label="Slide <?php echo $index; ?>"></button>
                <?php
                    $index++;
                endwhile;
                wp_reset_query();
                ?>
            </div>
            <div class="carousel-inner">
                <?php
                $index = 0;
                while ($slider_query->have_posts()) :
                    $slider_query->the_post();
                ?>
                    <div class="<?php echo $index; ?> carousel-item<?php echo ($index == 0) ? ' active' : ''; ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Ella, Ana, and Team" class="d-block" style="width:100%">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>
                                <?php echo get_the_title() ? get_the_title() : ''; ?>
                            </h3>
                            <p>
                                <?php echo get_the_content() ? get_the_content() : ''; ?>
                            </p>
                        </div>
                    </div>
                <?php
                    $index++;
                endwhile;
                wp_reset_query();
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section id="featured" class="what-hero">
        <div class="wrapper">
            <div class="blurb">
                <?php
                if (get_field('first_h2_strong') && get_field('second_h2_strong') && get_field('third_p_content')) {
                    $image = get_field('what_we_can_do_image');
                ?>
                    <h2><strong>
                            <?php echo get_field('first_h2_strong'); ?>
                        </strong>
                        <?php echo get_field('second_h2_strong'); ?>
                    </h2>
                    <div class="what-blurb">
                        <?php echo get_field('third_p_content'); ?>
                    </div>
            </div>
            <div class="featured"><img src="<?php echo $image; ?>" alt="Featured"></div>
        <?php } ?>
        </div>
    </section>
    <section id="team">
        <div class="wrapper">
            <div class="blurb1">
                <?php
                if (get_field('gtk_first_h2') && get_field('gtk_second_h2') && get_field('gtk_content')) {
                ?>
                    <h2 class="blurb3"><?php echo get_field('gtk_first_h2'); ?> <strong><?php echo get_field('gtk_second_h2'); ?></strong></h2>
                    <div class="blurb2">
                        <?php echo get_field('gtk_content'); ?>
                    </div>
                <?php } ?>
                <div class="team">
                    <div class="row1">
                        <?php while ($member_query->have_posts()) : $member_query->the_post(); ?>
                            <div class="column1">
                                <div class="card1">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" data-position="<?php echo get_field('member_position'); ?>" data-image="<?php echo get_the_post_thumbnail_url(); ?>" data-title="<?php echo get_the_title(); ?>" data-content="<?php echo get_the_content(); ?>" alt="<?php echo get_the_title(); ?>" style="width:100%" class="more-infdata" data-bs-toggle="modal" data-bs-target="#tate">
                                    <div class="container1">
                                        <?php if (get_the_title()) { ?>
                                            <h2><?php echo get_the_title(); ?></h2>
                                        <?php }
                                        if (get_field('member_position')) { ?>
                                            <p class="title1"><?php echo get_field('member_position'); ?></p>
                                        <?php }
                                        if (get_field('member_quote')) { ?>
                                            <blockquote>
                                                <?php echo get_field('member_quote'); ?>
                                            </blockquote>
                                        <?php } ?>
                                        <button type="button" class="btn btn-primary more-info more-infdata" data-position="<?php echo get_field('member_position'); ?>" data-image="<?php echo get_the_post_thumbnail_url(); ?>" data-title="<?php echo get_the_title(); ?>" data-content="<?php echo get_the_content(); ?>" data-bs-toggle="modal" data-bs-target="#tate">
                                            More info
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="wrapper">
            <div class="blurb">
                <h2><strong>Say</strong> Hello</h2>
                <?php if (get_option('contact_line')) { ?>
                    <p><?php echo get_option('contact_line'); ?></p>
                <?php } ?>
            </div>
            <form id="form" method="post" accept-charset="UTF-8">
                <input type="text" id="name" name="name" placeholder="Name" required="" />
                <input type="email" id="email" name="email" placeholder="Email" required="" />
                <textarea id="message" name="message" placeholder="Message" required=""></textarea>

                <div id="recaptcha">
                    <div class="g-recaptcha" data-sitekey="6LdGoD4oAAAAALA5-ENyLGrDn3UaB0JIcfzuBKuR"></div>
                </div>
                <br />
                <button id="send-button">Send</button>

                <div class="loading">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/loading.gif" id="loading-img" alt="loading-image">
                </div>
                <output id="info" class="output"></output>
            </form>
            <div class="">
                <div class="stay">
                    <div class="news">
                        <p class="title11">Stay <strong>in Touch</strong>:
                            <button type="button" class="btn btn-primary more-info" data-bs-toggle="modal" data-bs-target="#newsletter">
                                Newsletter
                            </button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
endwhile;
wp_reset_query();
get_footer();
