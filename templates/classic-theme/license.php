<?php
include_once TEMPLATE_PATH.'/header.php';
?>
<!-- Dashboard Container -->
<div class="dashboard-container">

    <?php include_once TEMPLATE_PATH.'/dashboard_sidebar.php'; ?>


    <!-- Dashboard Content
    ================================================== -->
    <div class="dashboard-content-container" data-simplebar>
        <div class="dashboard-content-inner" >

        <a href="<?php url("CERTIFICATES") ?>" class="btn-primary btn-rounded">
                            <h3><i class="fa fa-arrow-left"></i> <?php _e("Go Back") ?></h3></a>
            <!-- Row -->
            <div class="row">
                <!-- Dashboard Box -->
                <div class="col-xl-12">
                    <div class="dashboard-box">
                        <div class="text-right headline" style="padding-top:10px;clear">
                        </div>
                        <!-- Content Start -->
                        <div class="content">
                            <div class="content with-padding">
                                <?php
                                if($error != ''){
                                    echo '<span class="status-not-available">'.$error.'</span>';
                                }
                                ?>
                                <form method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                                <div class="row">
                                <div class="col-6 col-md-4">
                                <h4 class="mt-50"><?php _e("License Name") ?></h4>
                                <input type="text" class="with-border" id="license_name" name="license_name" value="<?php _esc($license_name)?>">
                                </div>
                                <div class="col-6 col-md-4">
                                <h4 class="mt-50"><?php _e("License From") ?></h4>
                                <input type="text" class="with-border" id="license_from" name="license_from" value="<?php _esc($license_from)?>">
                                </div>
                                <div class="col-6 col-md-4">
                                <h5><?php _e("License Number") ?></h5>
                                <input type="text" class="with-border" id="license_number" name="license_number" value="<?php _esc($license_number)?>">
                                </div>
                                </div>

                                    <div class="submit-field">
                                        <h5><?php _e("File") ?> <span style="color:red;">*</span></h5>
                                        <div class="uploadButton">
                                            <input class="uploadButton-input" type="file" id="license" name="license">
                                            <label class="uploadButton-button ripple-effect" for="license"><?php _e("Upload License") ?></label>
                                            <span class="uploadButton-file-name"><?php _e("Only pdf, doc, docx, rtf, rtx, ppt, pptx, jpeg, jpg, bmp, png file types allowed.") ?></span>
                                        </div>
                                    </div>
                                    <?php if($id != '') echo '<input type="hidden" name="id" value="'._esc($id,false).'">'; ?>
                                    <button type="submit" name="submit" class="button ripple-effect"><?php _e("Save") ?></button>
                                </form>
                            </div>
                        </div>
                        <!-- Content End -->
                    </div>
                </div>
            </div>
            <!-- Row / End -->
            <?php include_once TEMPLATE_PATH.'/overall_footer_dashboard.php'; ?>

