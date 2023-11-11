<?php
/*
 * Template Name: Registration Custom
 */
get_header();
?>
<form id="wp_signup_form" action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
    <?php wp_nonce_field('create_user_form_submit', 'djie3duhb3edub3u'); ?>
    <input type="hidden" name="action" value="add_foobar">
    <input type="hidden" name="data" value="foobarid">
    <section class="h-100 h-custom gradient-custom-2">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                    <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <h3 class="fw-normal mb-2">General Infomation</h3>
                                        <div class="row">
                                            <div class="col-md-12 mb-3 pb-1">
                                                <div class="form-outline">
                                                    <label class="form-label" for="fencername">Fencer's Name <span
                                                            class="reqcl">*</span></label>
                                                    <input id="fencername" name="fencername" type="text" required
                                                        class="form-control form-control-md" />
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3 pb-1">
                                                <div class="form-outline">
                                                    <label class="form-label" for="femail">Email <span
                                                            class="reqcl">*</span></label>
                                                    <input id="femail" name="femail" type="email"
                                                        class="form-control form-control-md" />
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3 pb-1">
                                                <div class="form-outline">
                                                    <label class="form-label" for="upassword">Password <span
                                                            class="reqcl">*</span></label>
                                                    <input id="upassword" onblur="validatePassword(this);"
                                                        name="upassword" type="password"
                                                        class="form-control form-control-md currentpass" />
                                                    <span class="errormsgpassword"></span>
                                                    <!-- <ul>
                                                        <li>At least one upper case English letter, (?=.*?[A-Z])</li>
                                                        <li>At least one lower case English letter, (?=.*?[a-z])</li>
                                                        <li>At least one digit, (?=.*?[0-9])</li>
                                                        <li>At least one special character, (?=.*?[#?!@$%^&*-])</li>
                                                        <li>Minimum eight in length .{8,} (with the anchors)</li>
                                                    </ul> -->
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3 pb-1">
                                                <div class="form-outline">
                                                    <label class="form-label" for="rpassword">Re-Password <span
                                                            class="reqcl">*</span></label>
                                                    <input id="rpassword" type="password"
                                                        class="form-control form-control-md repeatpassword" />
                                                    <span class="repeatmsgpassword"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3 pb-1">
                                                <div class="form-outline">
                                                    <label class="form-label" for="fschool">School</label>
                                                    <input id="fschool" name="fschool" type="text"
                                                        class="form-control form-control-md" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3 pb-1">
                                                <div class="form-outline">
                                                    <label class="form-label" for="fgrade">Grade</label>
                                                    <input id="fgrade" name="fgrade" type="text"
                                                        class="form-control form-control-md" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <h3 class="fw-normal mb-2">Weapon Infomation</h3>
                                        <div class="row">
                                            <div class="col-md-4 mb-3 pb-1">
                                                <div class="form-outline">
                                                    <label class="form-label" for="weaponone">Weapon 1</label>
                                                    <select id="weaponone" name="weaponone"
                                                        class="form-select form-control-md">
                                                        <option value="">Select Weapon</option>
                                                        <option value="Epee">Epee</option>
                                                        <option value="Foil">Foil</option>
                                                        <option value="Saber">Saber</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3 pb-1">
                                                <div class="form-outline">
                                                    <label class="form-label" for="ratingone">Rating</label>
                                                    <select id="ratingone" name="ratingone"
                                                        class="form-select form-control-md">
                                                        <option value="">Select Rating</option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="E">E</option>
                                                        <option value="U">U</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3 pb-1">
                                                <div class="form-outline">
                                                    <label class="form-label" for="ratingyearone">Rating Year</label>
                                                    <input id="ratingyearone" name="ratingyearone" type="text"
                                                        class="form-control form-control-md" />
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3 pb-1">
                                                <div class="form-outline">
                                                    <label class="form-label" for="weapontwo">Weapon 2</label>
                                                    <select id="weapontwo" name="weapontwo"
                                                        class="form-select form-control-md">
                                                        <option value="">Select Weapon</option>
                                                        <option value="Epee">Epee</option>
                                                        <option value="Foil">Foil</option>
                                                        <option value="Saber">Saber</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3 pb-1">
                                                <div class="form-outline">
                                                    <label class="form-label" for="ratingtwo">Rating</label>
                                                    <select id="ratingtwo" name="ratingtwo"
                                                        class="form-select form-control-md">
                                                        <option value="">Select Rating</option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="E">E</option>
                                                        <option value="U">U</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3 pb-1">
                                                <div class="form-outline">
                                                    <label class="form-label" for="ratingyeartwo">Rating Year</label>
                                                    <input id="ratingyeartwo" name="ratingyeartwo" type="text"
                                                        class="form-control form-control-md" />
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3 pb-1">
                                                <div class="form-outline">
                                                    <label class="form-label" for="weaponthree">Weapon 3</label>
                                                    <select id="weaponthree" name="weaponthree"
                                                        class="form-select form-control-md">
                                                        <option value="">Select Weapon</option>
                                                        <option value="Epee">Epee</option>
                                                        <option value="Foil">Foil</option>
                                                        <option value="Saber">Saber</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3 pb-1">
                                                <div class="form-outline">
                                                    <label class="form-label" for="ratingthree">Rating</label>
                                                    <select id="ratingthree" name="ratingthree"
                                                        class="form-select form-control-md">
                                                        <option value="">Select Rating</option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="E">E</option>
                                                        <option value="U">U</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3 pb-1">
                                                <div class="form-outline">
                                                    <label class="form-label" for="ratingyearthree">Rating Year</label>
                                                    <input id="ratingyearthree" name="ratingyearthree" type="text"
                                                        class="form-control form-control-md" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <h3 class="fw-normal mb-2">Fencing Record</h3>
                                            </div>
                                            <div class="col-md-12 mb-3 pb-1">
                                                <div class="form-outline">
                                                    <label class="form-label" for="ftrackingurl">You can add your
                                                        Fencing Tracker URL</label>
                                                    <input id="ftrackingurl" name="ftrackingurl" type="text"
                                                        class="form-control form-control-md" />
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3 pb-1">
                                                <button type="submit" class="btn btn-danger btn-lg btnvalidate"
                                                    name="submit" data-mdb-ripple-color="dark">Register</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
<?php
get_footer();
