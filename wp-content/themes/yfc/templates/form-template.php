<?php
/*
 * Template Name: Pledge Form
 */
get_header();
$fencerusers = get_users();
?>
<form method="post" id="pledgeform" name="front_end" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
    <?php wp_nonce_field('create_pledge_form_submit', 'dasdasdasdasdsfgd'); ?>
    <input type="hidden" name="data" value="foobarid">
    <section class="section-main">
        <div class="container">
            <section class="section-one">
                <div class="row">
                    <div class="col-md-12 col-xs-12 col-lg-12">
                        <h1 class="fm-header">
                            <?php
                            if (get_field('pledge_form_title')) {
                                echo get_field('pledge_form_title');
                            } else {
                                echo "Please Enter your title";
                            } ?>
                        </h1>
                    </div>
                </div>
            </section>
            <hr>
            <section class="section-two">
                <div class="row">
                    <div class="col-md-3">
                        <div class="fm-left-image">
                            <?php if (get_field('pledge_image_one')) {
                                ?>
                                <img src="<?php echo get_field('pledge_image_one'); ?>" class="limg">
                                <?php
                            } ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="fm-center-content">
                            <div class="fm-cc-one">
                                <h3>
                                    <?php
                                    if (get_field('pledge_center_content_title')) {
                                        echo get_field('pledge_center_content_title');
                                    }
                                    ?>
                                </h3>
                                <strong>
                                    <?php
                                    if (get_field('pledge_center_content_sub_title')) {
                                        echo get_field('pledge_center_content_sub_title');
                                    }
                                    ?>
                                </strong>
                            </div>
                            <div class="fm-cc-second mt-3">
                                <p>
                                    <strong>When:</strong>
                                    <?php
                                    if (get_field('pledge_center_content_when')) {
                                        echo get_field('pledge_center_content_when');
                                    }
                                    ?>
                                    <br>
                                    <strong>Where:</strong>
                                    <?php
                                    if (get_field('pledge_center_content_where')) {
                                        echo get_field('pledge_center_content_where');
                                    }
                                    ?>
                                </p>
                            </div>
                            <div class="fm-cc-third mt-3">
                                <p>
                                    <?php
                                    if (get_field('pledge_center_content_line')) {
                                        echo get_field('pledge_center_content_line');
                                    }
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fm-left-image">
                            <?php if (get_field('pledge_image_two')) {
                                ?>
                                <img src="<?php echo get_field('pledge_image_two'); ?>" class="limg">
                                <?php
                            } ?>
                        </div>
                        <div class="fm-cc-third mt-3">
                            <p>
                                <?php
                                if (get_field('pledge_image_two_title_one')) {
                                    echo get_field('pledge_image_two_title_one');
                                }
                                ?>
                                <br>
                                <?php
                                if (get_field('pledge_image_two_link')) {
                                    ?>
                                    <a target="_blank" href="<?php echo get_field('pledge_image_two_link'); ?>">
                                        <?php echo get_field('pledge_image_two_link'); ?>
                                    </a>
                                    <?php
                                }
                                ?>

                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-three">
                <div class="row">
                    <div class="col-md-12">
                        <div class="fm-content mt-3">
                            <p>
                                <?php
                                if (get_field('pledge_main_content')) {
                                    echo get_field('pledge_main_content');
                                }
                                ?>
                            </p>
                        </div>
                        <div class="fm-content-i">
                            <i>
                                <?php
                                if (get_field('pledge_content_sub_line')) {
                                    echo get_field('pledge_content_sub_line');
                                }
                                ?>
                            </i>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <table class="table mt-4 fm-table table-responsive">
                            <tr>
                                <th class="fm-align">Fencer's Name :</th>
                                <td>
                                    <input type="hidden" class="ajaxurlwp"
                                        value="<?php echo admin_url('admin-ajax.php'); ?>">
                                    <select class="form-select getfencerdata fenceruserid" name="fencers_name">
                                        <option value="">Select Fencer</option>
                                        <?php
                                        foreach ($fencerusers as $user) {
                                            if ($user->ID !== 1) {
                                                ?>
                                                <option value="<?php echo esc_html($user->ID); ?>">
                                                    <?php echo esc_html($user->display_name); ?>
                                                </option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th class="fm-align">School :</th>
                                <td class="fmschoolname">-</td>
                            </tr>
                            <tr>
                                <th class="fm-align">Email :</th>
                                <td class="fmemail">&nbsp<a href="">-</a></td>
                            </tr>
                            <tr>
                                <th class="fm-align">Grade :</th>
                                <td class="fmgrade">-</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <table class="table fm-table">
                            <tr>
                                <th class="fm-align">Weapon 1</th>
                                <td class="fmwp1">-</td>
                            </tr>
                            <tr>
                                <th class="fm-align">Weapon 2</th>
                                <td class="fmwp2">-</td>
                            </tr>
                            <tr>
                                <th class="fm-align">Weapon 3</th>
                                <td class="fmwp3">-</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <table class="table fm-table">
                            <tr>
                                <th class="fm-align">Rating</th>
                                <td class="fmrt1">-</td>
                            </tr>
                            <tr>
                                <th class="fm-align">Rating</th>
                                <td class="fmrt2">-</td>
                            </tr>
                            <tr>
                                <th class="fm-align">Rating</th>
                                <td class="fmrt3">-</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-12">
                        <table class="table fm-table">
                            <tr>
                                <th class="fm-align fmcwidth">Fencing Stats</th>
                                <td class="fmurl">&nbsp<a href="" target="_blank">-</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="fm-form-inputs">
                            <div class="form-group">
                                <table class="table mt-4 fm-table">
                                    <tr>
                                        <th class="fm-align">Sponsor Name <span class="reqcl">*</span>:</th>
                                        <td>&nbsp<input type="text" class="fm-custom-input" name="fm_Sponsor_name"
                                                required></td>
                                    </tr>
                                    <tr>
                                        <th class="fm-align">Sponsor Email <span class="reqcl">*</span>:</th>
                                        <td>&nbsp<input type="email" class="fm-custom-input" name="fm_Sponsor_email">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="fm-align">Sponsor Phone :</th>
                                        <td>&nbsp<input type="text" class="fm-custom-input" name="fm_Sponsor_phone">
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="fm-custom-text">
                            <p>
                                ** Just like Walk-A-Thon is based on $ per mile walked. This will be $ per points earned
                                <br>
                                ** Only need to complete the <span class="fm-red">RED</span> columns
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <table class="table fm-custom-table">
                            <thead class="fm-table-head">
                                <tr>
                                    <th class="fm-custom-width"></th>
                                    <th class="fm-align-c">Max Possible Points</th>
                                    <td class="fm-red"><strong>Pledge Amount</strong> </br> $ per Point</td>
                                    <th class="fm-red">( or ) Lump Sum Donation</th>
                                    <th class="fm-align-c">Fencer's Points</th>
                                    <th class="fm-align-c">Total Donation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="3"><strong>Preliminary Round Robin</strong></td>
                                    <td rowspan="2">$<input placeholder="lump sum pledge" type="text"
                                            class="fm-custom-in fm-lumpsum" name="fm-lump-sum-amt"></td>
                                    <td class="fm-align-c" colspan="2">Calculated once tournament completes</td>
                                </tr>
                                <tr>
                                    <td class="fm-align" colspan="1">Pools</td>
                                    <td class="fm-align-c">30</td>
                                    <td>$<input type="text" placeholder="pledge per point"
                                            name="fm-pledge-per-point-amt1" class="fm-custom-in"></td>
                                    <td class="fm-align-c"></td>
                                    <td class="fm-align-c">$0.00</td>
                                </tr>
                                <tr>
                                    <td colspan="3"><strong>Direct Elimination Rounds</strong></td>
                                </tr>
                                <tr>
                                    <td class="fm-align" colspan="1">Table 256</td>
                                    <td class="fm-align-c">15</td>
                                    <td>$<input type="text" placeholder="pledge per point"
                                            name="fm-pledge-per-point-amt2" class="fm-custom-in"></td>
                                    <td class="fm-align-c fm-bottom-border-remove"></td>
                                    <td class="fm-align-c"></td>
                                    <td class="fm-align-c">$0.00</td>
                                </tr>
                                <tr>
                                    <td class="fm-align" colspan="1">Table 128</td>
                                    <td class="fm-align-c">15</td>
                                    <td>$<input type="text" placeholder="pledge per point"
                                            name="fm-pledge-per-point-amt3" class="fm-custom-in"></td>
                                    <td class="fm-align-c fm-bottom-border-remove"></td>
                                    <td class="fm-align-c"></td>
                                    <td class="fm-align-c">$0.00</td>
                                </tr>
                                <tr>
                                    <td class="fm-align" colspan="1">Table 64</td>
                                    <td class="fm-align-c">15</td>
                                    <td>$<input type="text" placeholder="pledge per point"
                                            name="fm-pledge-per-point-amt4" class="fm-custom-in"></td>
                                    <td class="fm-align-c fm-bottom-border-remove"></td>
                                    <td class="fm-align-c"></td>
                                    <td class="fm-align-c">$0.00</td>
                                </tr>
                                <tr>
                                    <td class="fm-align" colspan="1">Table 32</td>
                                    <td class="fm-align-c">15</td>
                                    <td>$<input type="text" placeholder="pledge per point"
                                            name="fm-pledge-per-point-amt5" class="fm-custom-in"></td>
                                    <td class="fm-align-c fm-bottom-border-remove"></td>
                                    <td class="fm-align-c"></td>
                                    <td class="fm-align-c">$0.00</td>
                                </tr>
                                <tr>
                                    <td class="fm-align" colspan="1">Table 16</td>
                                    <td class="fm-align-c">15</td>
                                    <td>$<input type="text" placeholder="pledge per point"
                                            name="fm-pledge-per-point-amt6" class="fm-custom-in"></td>
                                    <td class="fm-align-c fm-bottom-border-remove"></td>
                                    <td class="fm-align-c"></td>
                                    <td class="fm-align-c">$0.00</td>
                                </tr>
                                <tr>
                                    <td class="fm-align" colspan="1">Table 8</td>
                                    <td class="fm-align-c">15</td>
                                    <td>$<input type="text" placeholder="pledge per point"
                                            name="fm-pledge-per-point-amt7" class="fm-custom-in"></td>
                                    <td class="fm-align-c fm-bottom-border-remove"></td>
                                    <td class="fm-align-c"></td>
                                    <td class="fm-align-c">$0.00</td>
                                </tr>
                                <tr>
                                    <td class="fm-align" colspan="1">Semi-Final</td>
                                    <td class="fm-align-c">15</td>
                                    <td>$<input type="text" placeholder="pledge per point"
                                            name="fm-pledge-per-point-amt8" class="fm-custom-in"></td>
                                    <td class="fm-align-c fm-bottom-border-remove"></td>
                                    <td class="fm-align-c"></td>
                                    <td class="fm-align-c">$0.00</td>
                                </tr>
                                <tr>
                                    <td class="fm-align" colspan="1">Final</td>
                                    <td class="fm-align-c">15</td>
                                    <td>$<input type="text" placeholder="pledge per point"
                                            name="fm-pledge-per-point-amt9" class="fm-custom-in"></td>
                                    <td class="fm-align-c fm-bottom-border-remove"></td>
                                    <td class="fm-align-c"></td>
                                    <td class="fm-align-c">$0.00</td>
                                </tr>
                                <tr class="fm-last-tr">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="fm-align-c">Total</td>
                                    <td class="fm-align-c">$0.00</td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- <input type="hidden" class="fmschoolname_a">
                        <input type="hidden" class="fmemail_a">
                        <input type="hidden" class="fmgrade_a">
                        <input type="hidden" class="fmwp1_a">
                        <input type="hidden" class="fmwp2_a">
                        <input type="hidden" class="fmwp3_a">
                        <input type="hidden" class="fmrt1_a">
                        <input type="hidden" class="fmrt2_a">
                        <input type="hidden" class="fmrt3_a">
                        <input type="hidden" class="fmurl_a"> -->

                        <button type="submit" class="btn btn-danger slignbtn">Submit</button>
                        <input type="hidden" name="action" value="pledge-form-data" />
                    </div>
                    <div class="col-md-12">
                        <div class="fm-custom-text">
                            <p>
                                * Please make check(s) payable to: <strong>Youth Fencing Chicago</strong>
                                <br>
                                * For Digtial Payment, please ask for contact information
                                <br>
                                * Remember to check with your company about matching donations.
                                <br>
                                * A FencingTimeLive link can be sent to follow the progress of the tournament upon
                                request
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
</form>
<?php
get_footer();
