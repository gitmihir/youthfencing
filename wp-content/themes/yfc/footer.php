<?php
if (is_front_page()) {
?>
    <div class="row">
        <div class="col-md-6">
            <div class="adv_sec">
                <?php if (get_option('advisory_title')) { ?>
                    <h3 class="adv_title"><?php echo get_option('advisory_title'); ?></h3>
                <?php } ?>
                <ul class="adv_list">
                    <?php if (get_option('advisory_first_name')) { ?>
                        <li><?php echo get_option('advisory_first_name'); ?></li>
                    <?php }
                    if (get_option('advisory_second_name')) { ?>
                        <li><?php echo get_option('advisory_second_name'); ?></li>
                    <?php }
                    if (get_option('advisory_third_name')) { ?>
                        <li><?php echo get_option('advisory_third_name'); ?></li>
                    <?php }
                    if (get_option('advisory_fourth_name')) { ?>
                        <li><?php echo get_option('advisory_fourth_name'); ?></li>
                    <?php }
                    if (get_option('advisory_fifth_name')) { ?>
                        <li><?php echo get_option('advisory_fifth_name'); ?></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <?php if (get_option('copyright_line')) { ?>
                <p class="add_sec">
                    <?php echo get_option('copyright_line'); ?>
                </p>
            <?php } ?>
        </div>
    </div>

    <div class="modal fade" id="newsletter" class="newsletter1">
        <div class="modal-dialog">
            <div class="modal-content ">
                <div class="modal-header ">
                    <h7 class="modal-title">Stay <strong>In Touch</strong></h7>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <main>
                        <div class="newsletter">
                            <form action="<?php echo get_site_url(); ?>/do-not-touch-this-page" method="POST" accept-charset="utf-8" name="signup-form" id="signup-form" class="form-inline">
                                <div class="form-group">
                                    <span id="name-info" class="info"></span><br />
                                    <input type="name" class="form-control" id="fname" placeholder="Enter Name" name="name-news" />
                                </div>

                                <div class="form-group">
                                    <span id="email-info" class="info"></span><br />
                                    <input type="email" class="form-control" id="femail" placeholder="Enter email" name="email-news" />
                                </div>

                                <input type="hidden" name="hp" id="hp" tabindex="-1" autocomplete="off" placeholder="123-456-7890" />
                                <input type="hidden" name="contact" id="contact" value="" />
                                <input type="hidden" name="Email2" id="Email2" value="your@email.com" />

                                <div class="form-group">
                                    <span id="button-info" class="button-info"></span><br />
                                    <button type="submit" class="btn btn-danger">Subscribe</button>
                                </div>
                            </form>
                            <div class="form-group">
                                <img src="./loading.gif" id="loading-img" />
                            </div>
                            <div class="form-group">
                                <div class="response_msg" id="status"></div>
                            </div>
                        </div>
                    </main>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="tate">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">The Who</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="rowmode">
                        <div class="columnmode1 right">
                            <img class="imgw100" src="" alt="" />
                            <p class="title"></p>
                            <p class="subtitle"></p>
                        </div>
                        <div class="columnmode2 left"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<?php wp_footer(); ?>
</body>

</html>