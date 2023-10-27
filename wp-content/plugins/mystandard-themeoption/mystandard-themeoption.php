<?php
/*
  Plugin Name: My Standard Theme Option
  Plugin URI: http://www.imihir.com/
  description: a plugin to add theme
  Version: 1.2
  Author: Mihir
  Author URI: http://www.imihir.com/
  License: GPL2
 */
// create custom plugin settings menu
add_action('admin_menu', 'my_standard_theme_create_menu');

function my_standard_theme_create_menu()
{
    global $page_hook_suffix;
    $page_hook_suffix = add_menu_page('My Standard Settings', 'Theme Options', 'administrator', __FILE__, 'my_standard_theme_settings_page', 'dashicons-admin-generic');
    add_action('admin_init', 'register_my_standard_theme_settings');
}

function load_custom_wp_admin_style($hook)
{
    global $page_hook_suffix;
    if ($hook != $page_hook_suffix) {
        return;
    }
    $dir = plugins_url() . "/mystandard-themeoption/assets/";
    wp_enqueue_style('bootstrap-min-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css');
    wp_enqueue_style('bootstrap-colorpicker-css', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/css/bootstrap-colorpicker.css');
    wp_enqueue_style('mystandardplugin-css', $dir . '/css/mystandardplugin.css');
    wp_enqueue_script('jquery-min-js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
    wp_enqueue_script('bootstrap-min-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
    wp_enqueue_script('bootstrap-colorpicker-js', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/js/bootstrap-colorpicker.js');
    wp_enqueue_script('mystandardplugin-js', $dir . '/js/mystandardplugin.js');
}

add_action('admin_enqueue_scripts', 'load_custom_wp_admin_style');

function register_my_standard_theme_settings()
{
    //register our settings
    register_setting('my-standard-theme-settings-group', 'advisory_title');
    register_setting('my-standard-theme-settings-group', 'advisory_first_name');
    register_setting('my-standard-theme-settings-group', 'advisory_second_name');
    register_setting('my-standard-theme-settings-group', 'advisory_third_name');
    register_setting('my-standard-theme-settings-group', 'advisory_fourth_name');
    register_setting('my-standard-theme-settings-group', 'advisory_fifth_name');
    register_setting('my-standard-theme-settings-group', 'copyright_line');
    register_setting('my-standard-theme-settings-group', 'contact_line');
}


function my_standard_theme_settings_page()
{
?>
    <div class="wrap">
        <div class="container" style="float: left;width: 100%;">
            <form method="post" action="options.php" autocomplete="off">
                <?php settings_fields('my-standard-theme-settings-group'); ?>
                <?php do_settings_sections('my-standard-theme-settings-group'); ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="theme_options_header">
                            <h1>Theme Options</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="sidebarclass">
                            <div class="contact_info"></i> Left Footer Info</div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="contactdiv">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 style="margin-top: 10px;margin-bottom: 17px;">Footer Info</h3>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="advisory_title">Advisory Title</label>
                                <input type="text" id="advisory_title" class="form-control" name="advisory_title" value="<?php echo esc_attr(get_option('advisory_title')); ?>" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="advisory_first_name">First Name</label>
                                <input type="text" id="advisory_first_name" class="form-control" name="advisory_first_name" value="<?php echo esc_attr(get_option('advisory_first_name')); ?>" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="advisory_second_name">Second Name</label>
                                <input type="text" id="advisory_second_name" name="advisory_second_name" class="form-control" value="<?php echo esc_attr(get_option('advisory_second_name')); ?>" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="advisory_third_name">Third Name</label>
                                <input type="text" id="advisory_third_name" name="advisory_third_name" class="form-control" value="<?php echo esc_attr(get_option('advisory_third_name')); ?>" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="advisory_fourth_name">Fourth Name</label>
                                <input type="text" id="advisory_fourth_name" name="advisory_fourth_name" class="form-control" value="<?php echo esc_attr(get_option('advisory_fourth_name')); ?>" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="advisory_fifth_name">Fifth Name</label>
                                <input type="text" id="advisory_fifth_name" name="advisory_fifth_name" class="form-control" value="<?php echo esc_attr(get_option('advisory_fifth_name')); ?>" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="copyright_line">Copy Right Line</label>
                                <textarea id="copyright_line" name="copyright_line" class="form-control" autocomplete="off"><?php echo esc_attr(get_option('copyright_line')); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="contact_line">Contact Line</label>
                                <textarea id="contact_line" name="contact_line" class="form-control" autocomplete="off"><?php echo esc_attr(get_option('contact_line')); ?></textarea>
                            </div>
                        </div>
                        <div class="btndiv">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php submit_button(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php
    if (function_exists('wp_enqueue_media')) {
        wp_enqueue_media();
    } else {
        wp_enqueue_style('thickbox');
        wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');
    }
}
