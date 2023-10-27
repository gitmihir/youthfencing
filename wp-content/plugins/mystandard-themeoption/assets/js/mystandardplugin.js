$(document).ready(function () {
    $('.header_logo_upload').click(function (e) {
        e.preventDefault();

        var custom_uploader = wp.media({
            title: 'Custom Image',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be selected
        })
                .on('select', function () {
                    var attachment = custom_uploader.state().get('selection').first().toJSON();
                    $('.header_logo').attr('src', attachment.url);
                    $('.header_logo_url').val(attachment.url);

                })
                .open();
    });
    $('.favicon_logo_upload').click(function (e) {
        e.preventDefault();

        var custom_uploader = wp.media({
            title: 'Custom Image',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be selected
        })
                .on('select', function () {
                    var attachment = custom_uploader.state().get('selection').first().toJSON();
                    $('.favicon_logo').attr('src', attachment.url);
                    $('.favicon_logo_url').val(attachment.url);

                })
                .open();
    });
    $('#mystandard_header_topbar_color').colorpicker();
    $('#mystandard_header_topbar_title_color').colorpicker();
    $('#mystandard_header_topbar_content_color').colorpicker();
    $('#mystandard_header_topbar_content_hover_color').colorpicker();
    $('#mystandard_header_background_color').colorpicker();


    $(".contactdiv").show();
    $(".socialdiv").hide();
    $(".footerdiv").hide();
    $(".colordiv").hide();
    $(".page_div").hide();
    $(".car_div").hide();


    $(".contact_info").addClass("menuactiveclass");
    $(".contact_info").click(function () {
        $(".contactdiv").show();
        $(".socialdiv").hide();
        $(".footerdiv").hide();
        $(".colordiv").hide();
        $(".page_div").hide();
        $(".car_div").hide();

        $(".contact_info").addClass("menuactiveclass");
        $(".social_info").removeClass("menuactiveclass");
        $(".footer_info").removeClass("menuactiveclass");
        $(".theme_colors").removeClass("menuactiveclass");
        $(".pages_options").removeClass("menuactiveclass");
        $(".car_options").removeClass("menuactiveclass");
    });
    $(".social_info").click(function () {
        $(".contactdiv").hide();
        $(".socialdiv").show();
        $(".footerdiv").hide();
        $(".colordiv").hide();
        $(".page_div").hide();
        $(".car_div").hide();

        $(".contact_info").removeClass("menuactiveclass");
        $(".social_info").addClass("menuactiveclass");
        $(".footer_info").removeClass("menuactiveclass");
        $(".theme_colors").removeClass("menuactiveclass");
        $(".pages_options").removeClass("menuactiveclass");
        $(".car_options").removeClass("menuactiveclass");
    });
    $(".footer_info").click(function () {
        $(".contactdiv").hide();
        $(".socialdiv").hide();
        $(".footerdiv").show();
        $(".colordiv").hide();
        $(".page_div").hide();
        $(".car_div").hide();

        $(".contact_info").removeClass("menuactiveclass");
        $(".social_info").removeClass("menuactiveclass");
        $(".footer_info").addClass("menuactiveclass");
        $(".theme_colors").removeClass("menuactiveclass");
        $(".pages_options").removeClass("menuactiveclass");
        $(".car_options").removeClass("menuactiveclass");
    });
    $(".theme_colors").click(function () {
        $(".contactdiv").hide();
        $(".socialdiv").hide();
        $(".footerdiv").hide();
        $(".colordiv").show();
        $(".page_div").hide();
        $(".car_div").hide();

        $(".contact_info").removeClass("menuactiveclass");
        $(".social_info").removeClass("menuactiveclass");
        $(".footer_info").removeClass("menuactiveclass");
        $(".theme_colors").addClass("menuactiveclass");
        $(".pages_options").removeClass("menuactiveclass");
        $(".car_options").removeClass("menuactiveclass");
    });

    $(".pages_options").click(function () {
        $(".contactdiv").hide();
        $(".socialdiv").hide();
        $(".footerdiv").hide();
        $(".colordiv").hide();
        $(".page_div").show();
        $(".car_div").hide();

        $(".contact_info").removeClass("menuactiveclass");
        $(".social_info").removeClass("menuactiveclass");
        $(".footer_info").removeClass("menuactiveclass");
        $(".theme_colors").removeClass("menuactiveclass");
        $(".pages_options").addClass("menuactiveclass");
        $(".car_options").removeClass("menuactiveclass");
    });
    $(".car_options").click(function () {
        $(".contactdiv").hide();
        $(".socialdiv").hide();
        $(".footerdiv").hide();
        $(".colordiv").hide();
        $(".page_div").hide();
        $(".car_div").show();

        $(".contact_info").removeClass("menuactiveclass");
        $(".social_info").removeClass("menuactiveclass");
        $(".footer_info").removeClass("menuactiveclass");
        $(".theme_colors").removeClass("menuactiveclass");
        $(".pages_options").removeClass("menuactiveclass");
        $(".car_options").addClass("menuactiveclass");
    });

});
