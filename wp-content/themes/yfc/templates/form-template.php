<?php
/*
 * Template Name: Pledge Form
 */
get_header();
$fencerusers = get_users();
if (is_user_logged_in()) {
?>
    <section class="section-main">
        <div class="container">
            <section class="section-one">
                <div class="row">
                    <div class="col-md-12 col-xs-12 col-lg-12">
                        <h1 class="fm-header">Youth Fencing Chicago's Fence-A-Thon</h1>
                    </div>
                </div>
            </section>
            <hr>
            <section class="section-two">
                <div class="row">
                    <div class="col-md-3">
                        <div class="fm-left-image">
                            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/10/IMG_5264-e1698523272661.png" class="limg">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="fm-center-content">
                            <div class="fm-cc-one">
                                <h3>The Junior Olympics</h3>
                                <strong>Cadet Epee Division</strong>
                            </div>
                            <div class="fm-cc-second mt-3">
                                <p>
                                    <strong>When:</strong>February 16-19, 2024
                                    <br>
                                    <strong>Where:</strong>Charlotte Convention Center
                                </p>
                            </div>
                            <div class="fm-cc-third mt-3">
                                <p>Giving back through fencing</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fm-left-image">
                            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/10/Picture1.png" class="limg">
                        </div>
                        <div class="fm-cc-third mt-3">
                            <p>
                                <strong>Youth Fencing</strong>Chicago
                                <br>
                                <a target="_blank" href="mailto:youthfencingchicago.com">youthfencingchicago.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-three">
                <div class="row">
                    <div class="col-md-12">
                        <div class="fm-content mt-3">
                            <p>Fencing is not than just a sport, it's a developmental tool that carries great benefits for the growth of young children. Fencing
                                is unique sport that has so many benefits, but many kids (and parents) don't have access to this opportunity. We want to
                                change this. We want to get into your school or your organization. We want to teach your young kids, in small groups, to
                                fence! We want the wonderful developmental benefits to apply for all the kids. Mostly, we want to make fencing fun and
                                accessible to all young kids who might otherwise not get a chance to. We do this ALL for FREE ! That's why we are asking for
                                your pledge.
                            </p>
                        </div>
                        <div class="fm-content-i">
                            <i>A very Big Thank You in advance for taking the time to help Chicago kids. - The Youth Fencing Chicago Team</i>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <table class="table mt-4 fm-table">
                            <tr>
                                <th class="fm-align">Fencer's Name :</th>
                                <td>
                                    <input type="hidden" class="ajaxurlwp" value="<?php echo admin_url('admin-ajax.php'); ?>">
                                    <select class="form-control getfencerdata">
                                        <option value="">Select Fencer</option>
                                        <?php
                                        foreach ($fencerusers as $user) {
                                            if ($user->ID !== 1) {
                                        ?>
                                                <option value="<?php echo esc_html($user->ID); ?>"><?php echo esc_html($user->display_name); ?></option>
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
                                        <th class="fm-align">Sponsor Name :</th>
                                        <td>&nbsp<input type="text" class="fm-custom-input" name="fm_Sponsor_name"></td>
                                    </tr>
                                    <tr>
                                        <th class="fm-align">Sponsor Email :</th>
                                        <td>&nbsp<input type="email" class="fm-custom-input" name="fm_Sponsor_email"></td>
                                    </tr>
                                    <tr>
                                        <th class="fm-align">Sponsor Phone :</th>
                                        <td>&nbsp<input type="text" class="fm-custom-input" name="fm_Sponsor_phone"></td>
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
                                    <td rowspan="2">$<input placeholder="lump sum pledge" type="text" class="fm-custom-in fm-lumpsum"></td>
                                    <td class="fm-align-c" colspan="2">Calculated once tournament completes</td>
                                </tr>
                                <tr>
                                    <td class="fm-align" colspan="1">Pools</td>
                                    <td class="fm-align-c">30</td>
                                    <td>$<input type="text" placeholder="pledge per point" class="fm-custom-in"></td>
                                    <td class="fm-align-c"></td>
                                    <td class="fm-align-c">$0.00</td>
                                </tr>
                                <tr>
                                    <td colspan="3"><strong>Direct Elimination Rounds</strong></td>
                                </tr>
                                <tr>
                                    <td class="fm-align" colspan="1">Table 256</td>
                                    <td class="fm-align-c">15</td>
                                    <td>$<input type="text" placeholder="pledge per point" class="fm-custom-in"></td>
                                    <td class="fm-align-c fm-bottom-border-remove"></td>
                                    <td class="fm-align-c"></td>
                                    <td class="fm-align-c">$0.00</td>
                                </tr>
                                <tr>
                                    <td class="fm-align" colspan="1">Table 128</td>
                                    <td class="fm-align-c">15</td>
                                    <td>$<input type="text" placeholder="pledge per point" class="fm-custom-in"></td>
                                    <td class="fm-align-c fm-bottom-border-remove"></td>
                                    <td class="fm-align-c"></td>
                                    <td class="fm-align-c">$0.00</td>
                                </tr>
                                <tr>
                                    <td class="fm-align" colspan="1">Table 64</td>
                                    <td class="fm-align-c">15</td>
                                    <td>$<input type="text" placeholder="pledge per point" class="fm-custom-in"></td>
                                    <td class="fm-align-c fm-bottom-border-remove"></td>
                                    <td class="fm-align-c"></td>
                                    <td class="fm-align-c">$0.00</td>
                                </tr>
                                <tr>
                                    <td class="fm-align" colspan="1">Table 32</td>
                                    <td class="fm-align-c">15</td>
                                    <td>$<input type="text" placeholder="pledge per point" class="fm-custom-in"></td>
                                    <td class="fm-align-c fm-bottom-border-remove"></td>
                                    <td class="fm-align-c"></td>
                                    <td class="fm-align-c">$0.00</td>
                                </tr>
                                <tr>
                                    <td class="fm-align" colspan="1">Table 16</td>
                                    <td class="fm-align-c">15</td>
                                    <td>$<input type="text" placeholder="pledge per point" class="fm-custom-in"></td>
                                    <td class="fm-align-c fm-bottom-border-remove"></td>
                                    <td class="fm-align-c"></td>
                                    <td class="fm-align-c">$0.00</td>
                                </tr>
                                <tr>
                                    <td class="fm-align" colspan="1">Table 8</td>
                                    <td class="fm-align-c">15</td>
                                    <td>$<input type="text" placeholder="pledge per point" class="fm-custom-in"></td>
                                    <td class="fm-align-c fm-bottom-border-remove"></td>
                                    <td class="fm-align-c"></td>
                                    <td class="fm-align-c">$0.00</td>
                                </tr>
                                <tr>
                                    <td class="fm-align" colspan="1">Semi-Final</td>
                                    <td class="fm-align-c">15</td>
                                    <td>$<input type="text" placeholder="pledge per point" class="fm-custom-in"></td>
                                    <td class="fm-align-c fm-bottom-border-remove"></td>
                                    <td class="fm-align-c"></td>
                                    <td class="fm-align-c">$0.00</td>
                                </tr>
                                <tr>
                                    <td class="fm-align" colspan="1">Final</td>
                                    <td class="fm-align-c">15</td>
                                    <td>$<input type="text" placeholder="pledge per point" class="fm-custom-in"></td>
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
                                * A FencingTimeLive link can be sent to follow the progress of the tournament upon request
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
<?php
}
get_footer();
