<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/loading.gif" id="loading-img"
                    alt="loading-image">
            </div>
            <output id="info" class="output"></output>
        </form>
        <!----------- BEGIN NEWSLETTER info ----------->
        <div class="">
            <div class="stay">
                <div class="news">
                    <p class="title11">Stay <strong>in Touch</strong>:
                        <!-- Trigger the modal with a button -->
                        <button type="button" class="btn btn-primary more-info" data-bs-toggle="modal"
                            data-bs-target="#newsletter">
                            Newsletter
                        </button>
                    </p>
                    <!-- The Modal -->
                    <div class="modal fade" id="newsletter" class="newsletter1">
                        <div class="modal-dialog">
                            <div class="modal-content ">
                                <!-- Modal Header -->
                                <div class="modal-header ">
                                    <h7 class="modal-title">Stay <strong>In Touch</strong></h7>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <!-- BEGIN Modal CONTENT  -->
                                <div class="modal-body">
                                    <div class="rowmode">
                                        <iframe src="./news-subscribe/index.html" frameborder="0" scrolling="no"
                                            class="iframe-news"></iframe>
                                    </div>
                                </div>
                                <!-- END Modal CONTENT  -->
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END The Modal -->
                </div>
            </div>
        </div>
    </div>
    <!----------- END NEWSLETTER info ----------->
    <div class="copy">
        <p class="copyright" style="text-align: center;">
            <a class="dropdown-item" href="#hero"><strong>Youth Fencing</strong> Chicago, LLC</a>&copy; 2023 <br />
            501(c)(3) not-for-profit
        </p>
    </div>

</section>

<!-- Detect Opera mini -->
<script type="text/javascript">
function o() {
    var isMobile = {
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
    };
    if (isMobile.Opera()) alert('Looks like you are using Opera Mini, please use a different browser');
}
window.onload = o;
</script>


<!-- Bootstarp 5 Back to Top -->
<script>
window.addEventListener('load', function() {
    let btnTop = document.getElementById("btn-top");
    // display the button when user scrolls more than 20px
    window.onscroll = function() {
        if (
            document.body.scrollTop > 20 || document.documentElement.scrollTop > 20
        ) {
            btnTop.style.display = "block";
        } else {
            btnTop.style.display = "none";
        }
    };
    btnTop.addEventListener("click", function() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    });
})
</script>
<?php wp_footer(); ?>
</body>

</html>