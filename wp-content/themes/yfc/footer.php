<section id="contact">
    <div class="wrapper">
        <div class="blurb">
            <h2><strong>Say</strong> Hello</h2>
            <p>Fencing is such an incredible sport. It's one of the few sport that not only trains the body, but
                also teaches the mind. It would be great to be able to bring fencing into your school or
                organization. Feel free to get in touch with us if you have any questions</p>
        </div>

        <form id="form" method="post" accept-charset="UTF-8">
            <input type="text" id="name" name="name" placeholder="Name" required="" />
            <input type="email" id="email" name="email" placeholder="Email" required="" />
            <textarea id="message" name="message" placeholder="Message" required=""></textarea>

            <div id="recaptcha">
                <div class="g-recaptcha" data-sitekey="6LdGoD4oAAAAALA5-ENyLGrDn3UaB0JIcfzuBKuR"></div>
            </div>
            <br />
            <button id="send-button" type="submit">Send</button>

            <div class="loading">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/loading.gif" id="loading-img" alt="loading-image">
            </div>
            <output id="info" class="output"></output>
        </form>
        <!----------- BEGIN NEWSLETTER info ----------->
        <div class="">
            <div class="stay">
                <div class="news">
                    <p class="title11">Stay <strong>in Touch</strong>:
                        <!-- Trigger the modal with a button -->
                        <button type="button" class="btn btn-primary more-info" data-bs-toggle="modal" data-bs-target="#newsletter">
                            Newsletter
                        </button>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="copy">
        <p class="copyright" style="text-align: center;">
            <a class="dropdown-item" href="#hero"><strong>Youth Fencing</strong> Chicago, LLC</a>&copy; 2023 <br />
            501(c)(3) not-for-profit
        </p>
    </div>

</section>
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
                                <input type="name" class="form-control" id="name" placeholder="Enter Name" name="name" />
                            </div>

                            <div class="form-group">
                                <span id="email-info" class="info"></span><br />
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" />
                            </div>
                            <div style="display: none !important">
                                <input type="text" name="hp" id="hp" tabindex="-1" autocomplete="off" placeholder="123-456-7890" /><br /><br />
                            </div>
                            <div class="input-field" style="display: none !important">
                                <input type="text" name="contact" id="contact" value="" />
                            </div>
                            <div class="text-field">
                                <input type="text" name="Email2" id="Email2" value="your@email.com" />
                            </div>
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
            <!-- END Modal CONTENT  -->
            <!-- Modal footer -->
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
<?php wp_footer(); ?>
</body>

</html>