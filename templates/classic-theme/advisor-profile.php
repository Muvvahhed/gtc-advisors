<?php
  overall_header("advisor profile")
  ?>

    
    <div class="container-fluid d-flex flex-row border-top border-bottom border-1 header__categories p-3 ps-lg-5">
      <?php foreach($defaultCategories as $cat){?>
        <a href="<?php _esc($config['site_url']."categories?category=".$cat["cat_name"]) ?>" class="me-3 text-center category-pill text--black"><?php _esc($cat["cat_name"]) ?></a>
      <?php }?>  
    </div>

      <main class="main">
        <!-- First Part -->
        <section class="container d-flex flex-column advisor__profile-info-container">
          <div class="align-self-center mt-4 mt-md-5 mt-lg-0 advisor__profile-info p-3">
            
            <div class="d-flex flex-column align-items-center frame-1 flex-lg-row pt-md-4">
              <img class="advisor__profile-img" src="<?php _esc($config['site_url']);?>storage/profile/<?php _esc($profileImage)?>" alt="advisor-profile-image" >
              <div class="ms-lg-5 d-flex flex-column align-items-center align-items-lg-start">
                <h2 class="text--black advisor__profile-name mt-3 mt-lg-0"><?php _esc($name) ?><img class="advisor__icon" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/<?php _esc($advisorType == "freelancer"?"freelancer-icon.png":"agency-icon.png") ?>"></h2>
                <p class="advisor__bio text--black mt-2 mt-lg-3 mb-3"><?php _esc($bio) ?></p>
                <div class="d-flex flex-row flex-wrap justify-content-center justify-content-lg-start category-pill-container">
                  <?php foreach($categories as $category){?>
                    <a class="me-1 mb-2 text-center category-pill text--black" href="<?php _esc($config['site_url']."categories?category=".$category) ?>"><?php _esc($category)?></a>
                  <?php }?>
                </div>
                <?php if($is_login){ ?>
                <a href="<?php url("MESSAGE") ?>" class="advisor__invite-btn mt-2 mt-lg-3">Invite to Job</a>
                <?php } ?>
              </div>
            </div>


            

            <div class="frame-2 container mt-3 mt-md-4 d-lg-block">
              <div class="row mb-2 gx-2 mb-3">
                <div class="col-6 col-md-5 ps-4 col-lg-auto"><span class="profile__text--dark">Availability:</span></div>
                <div class="col-6 col-md-5 col-lg-auto"><span class="profile__text--light">Full-time (24hrs/wk)</span></div>
              </div>
              <div class="row mb-2 gx-2 mb-3">
                <div class="col-6 col-md-5 ps-4 col-lg-auto"><span class="profile__text--dark">Language:</span></div>
                <div class="col-6 col-md-5 col-lg-auto"><span class="profile__text--light"><?php _esc(ucwords(join("/ ", $languages)))?></span></div>
              </div>
              <div class="row mb-2 gx-2 mb-3">
                <div class="col-6 col-md-5 ps-4 col-lg-auto"><span class="profile__text--dark">Location:</span></div>
                <div class="col-6 col-md-5 col-lg-auto"><span class="profile__text--light"><?php _esc($location) ?></span></div>
              </div>
              <div class="row mb-2 gx-2 mb-3">
                <div class="col-6 col-md-5 ps-4 col-lg-auto"><span class="profile__text--dark">Response Rate:</span></div>
                <div class="col-6 col-md-5 col-lg-auto"><span class="profile__text--light">Replies within 1 hour</span></div>
              </div>
              <div class="row mb-2 gx-2 mb-3">
                <div class="col-6 col-md-5 ps-4 col-lg-auto"><a href="#" data-bs-toggle="modal" data-bs-target="#report" class="profile__report"><i class="ag-icon-flag fa-regular fa fa-flag"></i> Report Advisor</a></div>
              </div>

            </div>
          </div>
        </section>
        
        <div class="d-flex t-cont">
          <div class="t t-active profile-tab">Profile</div>
          <div class="t certification-tab">Certification</div>
          <div class="t license-tab">Licenses</div>
          <div class="t resume-tab">CV/Resume</div>
        </div>
       
        <!-- second part -->
        <div class="d-flex flex-column flex-lg-row second-part">
          
          <section class="profile__tab">
            
            <!-- Profile -->
            <!-- <input type="radio" name="profile-tab" id="ptab-1" class="tabs__radio" checked>
            <label for="ptab-1" class="tabs__label">Profile</label> -->
            <div class="tabs__content pt-4" id="profile-tab">
              <h3 class="profile__text--dark">ABOUT</h3>
              <p class="tabs__content__text mt-3 mt-lg-4"><?php _esc($description) ?></p>
              <div class="mt-4 <?php _esc($advisorType == "freelancer"? "d-none":"") ?> tabs__content_line pt-3 pb-3">
                <h3 class="profile__text--dark">ORGANIZATION SIZE</h3>
                <p class="mt-3 mt-lg-4 profile__text--dark profile__text--dark--normal"><?php _esc($agencySize)?></p>
              </div>
              <div class="mt-3 mt-lg-4 <?php _esc($advisorType == "freelancer"? "d-none":"") ?>">
                <h3 class="profile__text--dark">YEAR FOUNDED</h3>
                <p class="mt-3 mt-lg-4 profile__text--dark profile__text--dark--normal"><?php _esc($yearFounded)?></p>
              </div>
            </div>
            
            <!-- Certification -->
            <!-- <input type="radio" name="profile-tab" id="ptab-2" class="tabs__radio" >
            <label for="ptab-2" class="tabs__label">Certification</label> -->
            <div class="tabs__content d-none" id="certification-tab">
              <h3 class="profile__text--dark">CERTIFICATIONS</h3>
              <div class="container mt-3 mt-lg-4 d-flex flex-row flex-wrap justify-content-between justify-content-md-start tabs__img--container">
                <?php foreach($certificates as $certificate){ ?>
                  <?php $ext = end(explode(".",$certificate["filename"])); ?>
                  <div class="mb-4 d-flex flex-column">
                    <?php if($ext == "pdf" || $ext == "docx"){?>
                      <img class="tabs__img" alt="CertificateImage" src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/certifications/Globa.png"> 
                    <?php }else{?>
                      <img class="tabs__img" alt="Certificate Image" src="<?php _esc($config['site_url']);?>storage/certifications/<?php _esc($certificate["filename"])?>">
                    <?php }?>
                    <a target="_blank" href="<?php _esc($config['site_url']);?>storage/certifications/<?php _esc($certificate['filename'])?>" class="tabs__img--title mt-3"><i class="fas <?php _esc($ext=="pdf" || $ext == "doc"?"fa-file-pdf":"fa-image")?> me-2"></i><?php _esc($certificate["certificate_from"]." ".$certificate["certificate_name"].".".$ext) ?></a>
                  </div>                        
                <?php } ?>   
              </div>
            </div>
  
            <!-- Licenses -->
            <!-- <input type="radio" name="profile-tab" id="ptab-3" class="tabs__radio">
            <label for="ptab-3" class="tabs__label">Licenses</label> -->
            <div class="tabs__content d-none" id="license-tab">
              <h3 class="profile__text--dark">LICENSES</h3>
              <div class="container mt-3 d-flex flex-row flex-wrap justify-content-between justify-content-lg-start tabs__img--container">
                <?php foreach($licenses as $license){ ?>
                  <?php $ext = end(explode(".",$license["filename"])); ?>
                  <div class="mb-4 d-flex flex-column">
                    <?php if($ext == "pdf" || $ext == "docx"){?>
                      <img class="tabs__img" alt="License Image" src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/certifications/Globa.png"> 
                    <?php }else{?>
                      <img class="tabs__img" alt="License Image" src="<?php _esc($config['site_url']);?>storage/licenses/<?php _esc($license["filename"])?>">
                    <?php }?>
                    <a target="_blank" href="<?php _esc($config['site_url']);?>storage/licenses/<?php _esc($license['filename'])?>" class="tabs__img--title mt-3"><i class="fas <?php _esc($ext=="pdf" || $ext == "doc"?"fa-file-pdf":"fa-image")?> me-2"></i><?php _esc($license["license_from"]." ".$license["license_name"].".".$ext) ?></a>
                  </div>                        
                <?php } ?>   
              </div>
            </div>
            
            <!-- Resume -->
            <!-- <input type="radio" name="profile-tab" id="ptab-4" class="tabs__radio">
            <label for="ptab-4" class="tabs__label">CV/Resume</label> -->
            <div class="tabs__content d-none" id="resume-tab">
              <h3 class="profile__text--dark">RESUME</h3>
              <div class="container mt-3 d-flex flex-row flex-wrap justify-content-between justify-content-lg-start tabs__img--container">
                <?php foreach($resumes as $resume){?>
                  
                  <?php $ext = end(explode(".",$resume["filename"])); ?>
                  <div class="mb-4 d-flex flex-column">
                    <?php if($ext == "pdf" || $ext == "docx"){?>
                      <img class="tabs__img" alt="Resume Image" src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/certifications/Globa.png"> 
                    <?php }else{?>
                      <img class="tabs__img" alt="Resume Image" src="<?php _esc($config['site_url']);?>storage/resumes/<?php _esc($resume["filename"])?>">
                    <?php }?>
                    <a target="_blank" href="<?php _esc($config['site_url']);?>storage/resumes/<?php _esc($resume['filename'])?>" class="tabs__img--title mt-3"><i class="fas <?php _esc($ext=="pdf" || $ext == "doc"?"fa-file-pdf":"fa-image")?> me-2"></i>
                      <?php _esc($resume["name"]? $resume["name"].".".$ext : "Resume.".$ext) ?>
                    </a>
                  </div>                        
                <?php } ?>   
              </div>
            </div>
                    
          </section>
  
          <!-- third part -->
          <section class="similar-profiles-section container d-flex flex-wrap container justify-content-center justify-content-md-start justify-content-center flex-lg-column ">
            <!-- <div class="mb-3">
              <h3 class="profile__text--dark">Similar Profiles</h3>
            </div> -->
            <!-- <h3 class="profile__text--dark">Similar Profiles</h3> -->
            <div class="">
            <h3 class="profile__text--dark border-bottom border-1 pb-3">Similar Profiles</h3>
              <div class="similar-advisor__profile d-flex flex-row justify-content-start align-items-center mt-4">
                  <img class="" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/advisors/1.png">
                  <div class="d-flex flex-column ps-3">
                    <a href="<?php _esc($config['site_url']."advisor-profile/mustapha") ?>" class="profile__text--dark">Juan Rodrick</a>
                    <span class="similar-advisor__profile--expertise">Coporate Income Tax</span>
                    <span class="similar-advisor__profile--type d-flex align-items-center"><img class="me-1" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/<?php _esc($advisorType == "freelancer"?"freelancer-icon.png":"agency-icon.png") ?>">Freelancer</span>
                  </div>
              </div>
          
              <div class="similar-advisor__profile d-flex flex-row justify-content-start align-items-center mt-4">
                  <img class="" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/advisors/1.png">
                  <div class="d-flex flex-column ps-3">
                    <a class="profile__text--dark">Juan Rodrick</a>
                    <span class="similar-advisor__profile--expertise">Coporate Income Tax</span>
                    <span class="similar-advisor__profile--type d-flex align-items-center"><img class="me-1" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/<?php _esc($advisorType == "freelancer"?"freelancer-icon.png":"agency-icon.png") ?>">Freelancer</span>
                  </div>
              </div>
          
              <div class="similar-advisor__profile d-flex flex-row justify-content-start align-items-center mt-4">
                  <img class="" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/advisors/1.png">
                  <div class="d-flex flex-column ps-3">
                    <a class="profile__text--dark">Juan Rodrick</a>
                    <span class="similar-advisor__profile--expertise">Coporate Income Tax</span>
                    <span class="similar-advisor__profile--type d-flex align-items-center"><img class="me-1" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/<?php _esc($advisorType == "freelancer"?"freelancer-icon.png":"agency-icon.png") ?>">Freelancer</span>
                  </div>
              </div>
          
              <div class="similar-advisor__profile d-flex flex-row justify-content-start align-items-center mt-4">
                  <img class="" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/advisors/1.png">
                  <div class="d-flex flex-column ps-3">
                    <a class="profile__text--dark">Juan Rodrick</a>
                    <span class="similar-advisor__profile--expertise">Coporate Income Tax</span>
                    <span class="similar-advisor__profile--type d-flex align-items-center"><img class="me-1" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/<?php _esc($advisorType == "freelancer"?"freelancer-icon.png":"agency-icon.png") ?>">Freelancer</span>
                  </div>
              </div>
          
              <div class="similar-advisor__profile d-flex flex-row justify-content-start align-items-center mt-4">
                  <img class="" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/advisors/1.png">
                  <div class="d-flex flex-column ps-3">
                    <a class="profile__text--dark">Juan Rodrick</a>
                    <span class="similar-advisor__profile--expertise">Coporate Income Tax</span>
                    <span class="similar-advisor__profile--type d-flex align-items-center"><img class="me-1" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/<?php _esc($advisorType == "freelancer"?"freelancer-icon.png":"agency-icon.png") ?>">Freelancer</span>
                  </div>
              </div>
          
            </div>
          </section>  
        </div>


                

            <!-- ############### NEW CARDS SECTION -->
            <section class="based-on-your-activity-section d-flex flex-column align-items-center align-items-lg-start">
              <div class="d-flex flex-row justify-content-between align-items-center">
                <span class="fs-6 text--black rva-title">Recently Viewed Advisors</span>
                <div class="text-center p-2 slick-arrow" >
                    <i class="fas fa-angle-right"></i>
                </div>
              </div>
              <div class="mt-4 pt-2 d-flex profile-card-container">

                <div class="profile-card d-flex flex-column">
                  <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/activities/Ade-Lateef.png" alt="profile image">
                  <div class="ps-2 pe-2 ps-lg-0 pe-lg-0">
                    <div class="d-flex align-items-center profile-card-title mt-2 mb-1 mt-md-3 mb-md-2 ps-md-2 pe-md-2 ps-lg-4 pe-lg-4">
                      <a href="<?php _esc($config['site_url']."advisor-profile/mustapha") ?>" class="profile__text--dark profile__text--dark--normal me-2 me-lg-3">Ade Lateef</a>
                      <img class="mt-lg-1" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/<?php _esc($advisorType == "freelancer"?"freelancer-icon.png":"agency-icon.png") ?>" alt="">
                    </div>
                    <div class="profile-card-body ps-md-2 pe-md-2 ps-lg-4 pe-lg-4">
                      <p class="expertise mb-2">Tax Audits, Financial Planning, IRS Representation</p>
                      <p class="bio mb-1 mb-md-2 mb-lg-3 d-flex flex-wrap">I am the perfect guy for the job, contact me blah and blah ..........</p>
                      <p class="response">Response Rate: Replies within 1 hour</p>
                    </div>
                    <div class="profile-card-footer d-flex flex-row justify-content-between align-items-center ps-md-2 pe-md-2 ps-lg-4 pe-lg-4">
                      <button class="like-icon--btn"><i class="fa-heart fa-solid fa-regular like-icon"></i></button>
                      <img class="g-verified-logo" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/Verified Expert Badge Transperent 2.png">
                    </div>
                  </div>
                </div>
                <div class="profile-card d-flex flex-column">
                  <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/activities/Ade-Lateef.png" alt="profile image">
                  <div class="ps-2 pe-2 ps-lg-0 pe-lg-0">
                    <div class="d-flex align-items-center profile-card-title mt-2 mb-1 mt-md-3 mb-md-2 ps-md-2 pe-md-2 ps-lg-4 pe-lg-4">
                      <a href="<?php _esc($config['site_url']."advisor-profile/mustapha") ?>" class="profile__text--dark profile__text--dark--normal me-2 me-lg-3">Ade Lateef</a>
                      <img class="mt-lg-1" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/<?php _esc($advisorType == "freelancer"?"freelancer-icon.png":"agency-icon.png") ?>" alt="">
                    </div>
                    <div class="profile-card-body ps-md-2 pe-md-2 ps-lg-4 pe-lg-4">
                      <p class="expertise mb-2">Tax Audits, Financial Planning, IRS Representation</p>
                      <p class="bio mb-1 mb-md-2 mb-lg-3 d-flex flex-wrap">I am the perfect guy for the job, contact me blah and blah ..........</p>
                      <p class="response">Response Rate: Replies within 1 hour</p>
                    </div>
                    <div class="profile-card-footer d-flex flex-row justify-content-between align-items-center ps-md-2 pe-md-2 ps-lg-4 pe-lg-4">
                      <button class="like-icon--btn"><i class="fa-heart fa-solid fa-regular like-icon"></i></button>
                      <img class="g-verified-logo" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/Verified Expert Badge Transperent 2.png">
                    </div>
                  </div>
                </div>
                <div class="profile-card d-flex flex-column">
                  <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/activities/Ade-Lateef.png" alt="profile image">
                  <div class="ps-2 pe-2 ps-lg-0 pe-lg-0">
                    <div class="d-flex align-items-center profile-card-title mt-2 mb-1 mt-md-3 mb-md-2 ps-md-2 pe-md-2 ps-lg-4 pe-lg-4">
                      <a href="<?php _esc($config['site_url']."advisor-profile/mustapha") ?>" class="profile__text--dark profile__text--dark--normal me-2 me-lg-3">Ade Lateef</a>
                      <img class="mt-lg-1" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/<?php _esc($advisorType == "freelancer"?"freelancer-icon.png":"agency-icon.png") ?>" alt="">
                    </div>
                    <div class="profile-card-body ps-md-2 pe-md-2 ps-lg-4 pe-lg-4">
                      <p class="expertise mb-2">Tax Audits, Financial Planning, IRS Representation</p>
                      <p class="bio mb-1 mb-md-2 mb-lg-3 d-flex flex-wrap">I am the perfect guy for the job, contact me blah and blah ..........</p>
                      <p class="response">Response Rate: Replies within 1 hour</p>
                    </div>
                    <div class="profile-card-footer d-flex flex-row justify-content-between align-items-center ps-md-2 pe-md-2 ps-lg-4 pe-lg-4">
                      <button class="like-icon--btn"><i class="fa-heart fa-solid fa-regular like-icon"></i></button>
                      <img class="g-verified-logo" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/Verified Expert Badge Transperent 2.png">
                    </div>
                  </div>
                </div>
                <div class="profile-card d-flex flex-column">
                  <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/activities/Ade-Lateef.png" alt="profile image">
                  <div class="ps-2 pe-2 ps-lg-0 pe-lg-0">
                    <div class="d-flex align-items-center profile-card-title mt-2 mb-1 mt-md-3 mb-md-2 ps-md-2 pe-md-2 ps-lg-4 pe-lg-4">
                      <a href="<?php _esc($config['site_url']."advisor-profile/mustapha") ?>" class="profile__text--dark profile__text--dark--normal me-2 me-lg-3">Ade Lateef</a>
                      <img class="mt-lg-1" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/<?php _esc($advisorType == "freelancer"?"freelancer-icon.png":"agency-icon.png") ?>" alt="">
                    </div>
                    <div class="profile-card-body ps-md-2 pe-md-2 ps-lg-4 pe-lg-4">
                      <p class="expertise mb-2">Tax Audits, Financial Planning, IRS Representation</p>
                      <p class="bio mb-1 mb-md-2 mb-lg-3 d-flex flex-wrap">I am the perfect guy for the job, contact me blah and blah ..........</p>
                      <p class="response">Response Rate: Replies within 1 hour</p>
                    </div>
                    <div class="profile-card-footer d-flex flex-row justify-content-between align-items-center ps-md-2 pe-md-2 ps-lg-4 pe-lg-4">
                      <button class="like-icon--btn"><i class="fa-heart fa-solid fa-regular like-icon"></i></button>
                      <img class="g-verified-logo" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/Verified Expert Badge Transperent 2.png">
                    </div>
                  </div>
                </div>
                <div class="profile-card d-flex flex-column">
                  <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/activities/Ade-Lateef.png" alt="profile image">
                  <div class="ps-2 pe-2 ps-lg-0 pe-lg-0">
                    <div class="d-flex align-items-center profile-card-title mt-2 mb-1 mt-md-3 mb-md-2 ps-md-2 pe-md-2 ps-lg-4 pe-lg-4">
                      <a href="<?php _esc($config['site_url']."advisor-profile/mustapha") ?>" class="profile__text--dark profile__text--dark--normal me-2 me-lg-3">Ade Lateef</a>
                      <img class="mt-lg-1" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/<?php _esc($advisorType == "freelancer"?"freelancer-icon.png":"agency-icon.png") ?>" alt="">
                    </div>
                    <div class="profile-card-body ps-md-2 pe-md-2 ps-lg-4 pe-lg-4">
                      <p class="expertise mb-2">Tax Audits, Financial Planning, IRS Representation</p>
                      <p class="bio mb-1 mb-md-2 mb-lg-3 d-flex flex-wrap">I am the perfect guy for the job, contact me blah and blah ..........</p>
                      <p class="response">Response Rate: Replies within 1 hour</p>
                    </div>
                    <div class="profile-card-footer d-flex flex-row justify-content-between align-items-center ps-md-2 pe-md-2 ps-lg-4 pe-lg-4">
                      <button class="like-icon--btn"><i class="fa-heart fa-solid fa-regular like-icon"></i></button>
                      <img class="g-verified-logo" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/Verified Expert Badge Transperent 2.png">
                    </div>
                  </div>
                </div>
                <div class="profile-card d-flex flex-column">
                  <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/activities/Ade-Lateef.png" alt="profile image">
                  <div class="ps-2 pe-2 ps-lg-0 pe-lg-0">
                    <div class="d-flex align-items-center profile-card-title mt-2 mb-1 mt-md-3 mb-md-2 ps-md-2 pe-md-2 ps-lg-4 pe-lg-4">
                      <a href="<?php _esc($config['site_url']."advisor-profile/mustapha") ?>" class="profile__text--dark profile__text--dark--normal me-2 me-lg-3">Ade Lateef</a>
                      <img class="mt-lg-1" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/<?php _esc($advisorType == "freelancer"?"freelancer-icon.png":"agency-icon.png") ?>" alt="">
                    </div>
                    <div class="profile-card-body ps-md-2 pe-md-2 ps-lg-4 pe-lg-4">
                      <p class="expertise mb-2">Tax Audits, Financial Planning, IRS Representation</p>
                      <p class="bio mb-1 mb-md-2 mb-lg-3 d-flex flex-wrap">I am the perfect guy for the job, contact me blah and blah ..........</p>
                      <p class="response">Response Rate: Replies within 1 hour</p>
                    </div>
                    <div class="profile-card-footer d-flex flex-row justify-content-between align-items-center ps-md-2 pe-md-2 ps-lg-4 pe-lg-4">
                      <button class="like-icon--btn"><i class="fa-heart fa-solid fa-regular like-icon"></i></button>
                      <img class="g-verified-logo" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/Verified Expert Badge Transperent 2.png">
                    </div>
                  </div>
                </div>
                <div class="profile-card d-flex flex-column">
                  <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/activities/Ade-Lateef.png" alt="profile image">
                  <div class="ps-2 pe-2 ps-lg-0 pe-lg-0">
                    <div class="d-flex align-items-center profile-card-title mt-2 mb-1 mt-md-3 mb-md-2 ps-md-2 pe-md-2 ps-lg-4 pe-lg-4">
                      <a href="<?php _esc($config['site_url']."advisor-profile/mustapha") ?>" class="profile__text--dark profile__text--dark--normal me-2 me-lg-3">Ade Lateef</a>
                      <img class="mt-lg-1" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/<?php _esc($advisorType == "freelancer"?"freelancer-icon.png":"agency-icon.png") ?>" alt="">
                    </div>
                    <div class="profile-card-body ps-md-2 pe-md-2 ps-lg-4 pe-lg-4">
                      <p class="expertise mb-2">Tax Audits, Financial Planning, IRS Representation</p>
                      <p class="bio mb-1 mb-md-2 mb-lg-3 d-flex flex-wrap">I am the perfect guy for the job, contact me blah and blah ..........</p>
                      <p class="response">Response Rate: Replies within 1 hour</p>
                    </div>
                    <div class="profile-card-footer d-flex flex-row justify-content-between align-items-center ps-md-2 pe-md-2 ps-lg-4 pe-lg-4">
                      <button class="like-icon--btn"><i class="fa-heart fa-solid fa-regular like-icon"></i></button>
                      <img class="g-verified-logo" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/Verified Expert Badge Transperent 2.png">
                    </div>
                  </div>
                </div>
                <div class="profile-card d-flex flex-column">
                  <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/activities/Ade-Lateef.png" alt="profile image">
                  <div class="ps-2 pe-2 ps-lg-0 pe-lg-0">
                    <div class="d-flex align-items-center profile-card-title mt-2 mb-1 mt-md-3 mb-md-2 ps-md-2 pe-md-2 ps-lg-4 pe-lg-4">
                      <a href="<?php _esc($config['site_url']."advisor-profile/mustapha") ?>" class="profile__text--dark profile__text--dark--normal me-2 me-lg-3">Ade Lateef</a>
                      <img class="mt-lg-1" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/<?php _esc($advisorType == "freelancer"?"freelancer-icon.png":"agency-icon.png") ?>" alt="">
                    </div>
                    <div class="profile-card-body ps-md-2 pe-md-2 ps-lg-4 pe-lg-4">
                      <p class="expertise mb-2">Tax Audits, Financial Planning, IRS Representation</p>
                      <p class="bio mb-1 mb-md-2 mb-lg-3 d-flex flex-wrap">I am the perfect guy for the job, contact me blah and blah ..........</p>
                      <p class="response">Response Rate: Replies within 1 hour</p>
                    </div>
                    <div class="profile-card-footer d-flex flex-row justify-content-between align-items-center ps-md-2 pe-md-2 ps-lg-4 pe-lg-4">
                      <button class="like-icon--btn"><i class="fa-heart fa-solid fa-regular like-icon"></i></button>
                      <img class="g-verified-logo" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/Verified Expert Badge Transperent 2.png">
                    </div>
                  </div>
                </div>
                <div class="profile-card d-flex flex-column">
                  <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/activities/Ade-Lateef.png" alt="profile image">
                  <div class="ps-2 pe-2 ps-lg-0 pe-lg-0">
                    <div class="d-flex align-items-center profile-card-title mt-2 mb-1 mt-md-3 mb-md-2 ps-md-2 pe-md-2 ps-lg-4 pe-lg-4">
                      <a href="<?php _esc($config['site_url']."advisor-profile/mustapha") ?>" class="profile__text--dark profile__text--dark--normal me-2 me-lg-3">Ade Lateef</a>
                      <img class="mt-lg-1" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/<?php _esc($advisorType == "freelancer"?"freelancer-icon.png":"agency-icon.png") ?>" alt="">
                    </div>
                    <div class="profile-card-body ps-md-2 pe-md-2 ps-lg-4 pe-lg-4">
                      <p class="expertise mb-2">Tax Audits, Financial Planning, IRS Representation</p>
                      <p class="bio mb-1 mb-md-2 mb-lg-3 d-flex flex-wrap">I am the perfect guy for the job, contact me blah and blah ..........</p>
                      <p class="response">Response Rate: Replies within 1 hour</p>
                    </div>
                    <div class="profile-card-footer d-flex flex-row justify-content-between align-items-center ps-md-2 pe-md-2 ps-lg-4 pe-lg-4">
                      <button class="like-icon--btn"><i class="fa-heart fa-solid fa-regular like-icon"></i></button>
                      <img class="g-verified-logo" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/Verified Expert Badge Transperent 2.png">
                    </div>
                  </div>
                </div>
                <div class="profile-card d-flex flex-column">
                  <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/activities/Ade-Lateef.png" alt="profile image">
                  <div class="ps-2 pe-2 ps-lg-0 pe-lg-0">
                    <div class="d-flex align-items-center profile-card-title mt-2 mb-1 mt-md-3 mb-md-2 ps-md-2 pe-md-2 ps-lg-4 pe-lg-4">
                      <a href="<?php _esc($config['site_url']."advisor-profile/mustapha") ?>" class="profile__text--dark profile__text--dark--normal me-2 me-lg-3">Ade Lateef</a>
                      <img class="mt-lg-1" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/<?php _esc($advisorType == "freelancer"?"freelancer-icon.png":"agency-icon.png") ?>" alt="">
                    </div>
                    <div class="profile-card-body ps-md-2 pe-md-2 ps-lg-4 pe-lg-4">
                      <p class="expertise mb-2">Tax Audits, Financial Planning, IRS Representation</p>
                      <p class="bio mb-1 mb-md-2 mb-lg-3 d-flex flex-wrap">I am the perfect guy for the job, contact me blah and blah ..........</p>
                      <p class="response">Response Rate: Replies within 1 hour</p>
                    </div>
                    <div class="profile-card-footer d-flex flex-row justify-content-between align-items-center ps-md-2 pe-md-2 ps-lg-4 pe-lg-4">
                      <button class="like-icon--btn"><i class="fa-heart fa-solid fa-regular like-icon"></i></button>
                      <img class="g-verified-logo" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/Verified Expert Badge Transperent 2.png">
                    </div>
                  </div>
                </div>
                <div class="profile-card d-flex flex-column">
                  <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/activities/Ade-Lateef.png" alt="profile image">
                  <div class="ps-2 pe-2 ps-lg-0 pe-lg-0">
                    <div class="d-flex align-items-center profile-card-title mt-2 mb-1 mt-md-3 mb-md-2 ps-md-2 pe-md-2 ps-lg-4 pe-lg-4">
                      <a href="<?php _esc($config['site_url']."advisor-profile/mustapha") ?>" class="profile__text--dark profile__text--dark--normal me-2 me-lg-3">Ade Lateef</a>
                      <img class="mt-lg-1" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/<?php _esc($advisorType == "freelancer"?"freelancer-icon.png":"agency-icon.png") ?>" alt="">
                    </div>
                    <div class="profile-card-body ps-md-2 pe-md-2 ps-lg-4 pe-lg-4">
                      <p class="expertise mb-2">Tax Audits, Financial Planning, IRS Representation</p>
                      <p class="bio mb-1 mb-md-2 mb-lg-3 d-flex flex-wrap">I am the perfect guy for the job, contact me blah and blah ..........</p>
                      <p class="response">Response Rate: Replies within 1 hour</p>
                    </div>
                    <div class="profile-card-footer d-flex flex-row justify-content-between align-items-center ps-md-2 pe-md-2 ps-lg-4 pe-lg-4">
                      <button class="like-icon--btn"><i class="fa-heart fa-solid fa-regular like-icon"></i></button>
                      <img class="g-verified-logo" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/Verified Expert Badge Transperent 2.png">
                    </div>
                  </div>
                </div>
                <div class="profile-card d-flex flex-column">
                  <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/activities/Ade-Lateef.png" alt="profile image">
                  <div class="ps-2 pe-2 ps-lg-0 pe-lg-0">
                    <div class="d-flex align-items-center profile-card-title mt-2 mb-1 mt-md-3 mb-md-2 ps-md-2 pe-md-2 ps-lg-4 pe-lg-4">
                      <a href="<?php _esc($config['site_url']."advisor-profile/mustapha") ?>" class="profile__text--dark profile__text--dark--normal me-2 me-lg-3">Ade Lateef</a>
                      <img class="mt-lg-1" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/<?php _esc($advisorType == "freelancer"?"freelancer-icon.png":"agency-icon.png") ?>" alt="">
                    </div>
                    <div class="profile-card-body ps-md-2 pe-md-2 ps-lg-4 pe-lg-4">
                      <p class="expertise mb-2">Tax Audits, Financial Planning, IRS Representation</p>
                      <p class="bio mb-1 mb-md-2 mb-lg-3 d-flex flex-wrap">I am the perfect guy for the job, contact me blah and blah ..........</p>
                      <p class="response">Response Rate: Replies within 1 hour</p>
                    </div>
                    <div class="profile-card-footer d-flex flex-row justify-content-between align-items-center ps-md-2 pe-md-2 ps-lg-4 pe-lg-4">
                      <button class="like-icon--btn"><i class="fa-heart fa-solid fa-regular like-icon"></i></button>
                      <img class="g-verified-logo" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/Verified Expert Badge Transperent 2.png">
                    </div>
                  </div>
                </div>
              
               

              </div>

              
              </div>
            </section>


            <!-- report advisor popup modal -->
            <div class="modal fade custom-modal" id="report">
                <div class="modal-dialog modal-lg modal-sm">
                    <div class="modal-content">
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                      <div class="modal-body pl-30 pr-30 pt-20 pb-80">
                        <div class="text-center">
                          <div class="advi-report pb-30">Report Advisor </div>
                          <br>
                          <div class="bline"></div>
                        </div>
                        <span class="why-report">Why are you reporting this?</span> 
                        <form class="login-register text-start mt-20 pb-30" action="#">
                          
                            <div class="form-group">
                                <ul class="list-checkbox">
                                    <li>
                                        <label class="cb-container">
                                          <input type="checkbox" checked="checked"><span class="select-reasons-report">The advisor is a scam</span><span class="checkmark"></span>
                                        </label>
                                      </li>
                                  <li>
                                    <label class="cb-container">
                                      <input type="checkbox"><span class="select-reasons-report">The advisor is violent</span><span class="checkmark"></span>
                                    </label>
                                  </li>
                                  <li>
                                    <label class="cb-container">
                                      <input type="checkbox"><span class="select-reasons-report">The advisor didn’t deliver</span><span class="checkmark"></span>
                                    </label>
                                  </li>
                                  <li>
                                    <label class="cb-container">
                                      <input type="checkbox">
                                      <span class="select-reasons-report">The advisor is not credible</span><span class="checkmark"></span>
                                    </label>
                                  </li>
                                  <li>
                                    <label class="cb-container">
                                      <input type="checkbox"><span class="select-reasons-report">The advisor isn’t diligent</span><span class="checkmark"></span>
                                    </label>
                                  </li>
                                  <li>
                                    <label class="cb-container">
                                      <input type="checkbox"><span class="select-reasons-report">Other</span><span class="checkmark"></span>
                                    </label>
                                  </li>
                                </ul>
                              </div>

                          <div class="form-group-rep">
                            <label class="form-label" for="name">Your Full Name</label>
                            <input class="form-control" id="name" type="text" required="" name="name" placeholder="Name">
                          </div>
                          <div class="form-group-rep">
                            <label class="form-label" for="email">Your Email address</label>
                            <input class="form-control" id="email" type="text" required="" name="email" placeholder="Email address">
                          </div>
                          <div class="form-group-rep">
                            <label class="form-label" for="des">Description</label>
                            <textarea class="form-control" rows="4" cols="5" name="message" placeholder="Type Reasons...." aria-label="" required="" data-msg=""></textarea>
                          </div>
                          <div class="form-group-rep">
                            <button class="btn btn-report" type="submit" name="report">Report Advisor</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

      </main>

<script>
  $(".like-icon").click((e)=>{
    e.target.classList.toggle("fa-regular")
  })

  $(".t").click((e)=>{
    $(".t").removeClass("t-active")
    $(".tabs__content").addClass("d-none")
    e.target.classList.add("t-active")
    $(`#${e.target.classList[1]}`).removeClass("d-none")

  })

  $(".based-on-your-activity-section .slick-arrow").click(() =>{
    document.querySelector(".profile-card-container").scrollLeft += document.querySelector(".profile-card-container").clientWidth
  })
  
 </script>
<?php
// include('footer.php');
overall_footer();
?>  