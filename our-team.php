<?php require_once($_SERVER['DOCUMENT_ROOT'].'includes/global.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="Heritage Financial's team. Contact a loan originator or processor.">
	<meta name="Keywords" content="Heritage Financial, Annapolis, Loans, Mortgages, Our Team, Staff, Employees, Loan Originators, Processors">
	<meta name="robots" content="index, follow">
    <title>Our Team - Heritage Financial</title>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'page_includes/head.php'); ?>
</head>
<body class="fixed-sn">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'page_includes/header.php'); ?>
    <main>

        <!-- Page Intro -->
        <div class="container-full">
            <div class="row">
                <div class="col-12">
                    <div class="page-intro-small">
                        <div class="view hm-stylish-light">
                            <img src="/img/custom/page-intro/staff-web.jpg" class="page-intro-img" alt="">
                            <div class="mask">
                                <div class="container">
                                    <div class="carousel-caption text-left">
                                        <h1 class="animated bounceInRight">Heritage Financial</h1>
                                        <p class="animated flipInY">Meet Our Team</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Intro -->

        <!-- Content -->

        <div class="container our-team">

            <section class="section team-section pb-5">

                <!--Section heading-->
                <h2 class="h1 text-center py-5 animated slideInRight">Meet our amazing team</h2>

				<div class="row">
					<div class="col-12">
						<div class="card mb-3">
						    <div class="card-body">
						        <h2>Loan Officers</h2>
						    </div>
						</div>
					</div>
				</div>

                <!-- Grid row -->
                <div class="row text-center">

                    <?php for($l=0;$l<count($lo);$l++) {

						if($lo[$l]['proc'] == 'no') {
	                        if($lo[$l]['photo_loc'] == '') {
	                            $img = '/img/custom/page-our-team/no-image.png';
	                        } else {
	                            $img = $lo[$l]['photo_loc'];
	                        }
							$position = 'Loan Officer';
							?>

                    <!-- Grid column -->
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-r wow zoomIn">
                        <div class="card card-body staff">
                            <div class="avatar mt-3">
                                <img src="<?php echo $img; ?>" class="rounded-circle" alt="<?php echo $lo[$l]['fullname']; ?>">
                            </div>
                            <h5 class="font-bold">
                                    <strong><?php echo $lo[$l]['fullname']; ?></strong>
                            </h5>
                            <p class="grey-text"><?php echo $position; ?></p>
                            <p class="grey-text"><?php echo $lo[$l]['cellphone']; ?></p>
                            <a href="javascript: void(0)" class="btn btn-default z-depth-3 email_title" data-id="<?php echo $lo[$l]['id']; ?>" data-name="<?php echo $lo[$l]['fullname']; ?>" data-toggle="modal" data-target="#agent_contact_modal">Email</a>
                        </div>
                    </div>
                    <!-- Grid column -->

                    <?php }
				} ?>

                </div>
                <!-- Grid row -->

				<div class="row">
					<div class="col-12">
						<div class="card mb-3">
						    <div class="card-body">
						        <h2>Management/Processors</h2>
						    </div>
						</div>
					</div>
				</div>

				<!-- Grid row -->
                <div class="row text-center">



                    <?php for($l=0;$l<count($lo);$l++) {

						if($lo[$l]['proc'] == 'yes') {
	                        if($lo[$l]['photo_loc'] == '') {
	                            $img = '/img/custom/page-our-team/no-image.png';
	                        } else {
	                            $img = $lo[$l]['photo_loc'];
	                        }
							$position = 'Manager';
							?>

                    <!-- Grid column -->
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-r wow zoomIn">
                        <div class="card card-body staff">
                            <div class="avatar mt-3">
                                <img src="<?php echo $img; ?>" class="rounded-circle" alt="<?php echo $lo[$l]['fullname']; ?>">
                            </div>
                            <h5 class="font-bold">
                                    <strong><?php echo $lo[$l]['fullname']; ?></strong>
                            </h5>
                            <p class="grey-text"><?php echo $position; ?></p>
                            <p class="grey-text"><?php echo $lo[$l]['cellphone']; ?></p>
                            <a href="javascript: void(0)" class="btn btn-default z-depth-3 email_title" data-id="<?php echo $lo[$l]['id']; ?>" data-name="<?php echo $lo[$l]['fullname']; ?>" data-toggle="modal" data-target="#agent_contact_modal">Email</a>
                        </div>
                    </div>
                    <!-- Grid column -->

                    <?php }
				} ?>

                </div>
                <!-- Grid row -->

            </section>

        </div>


        <!-- End Content -->
    </main>

<!--Modal: Contact form-->
<div class="modal fade agent-contact-modal" id="agent_contact_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Header-->
            <div class="modal-header white-text">
                <h4 class="title"><i class="fa fa-pencil"></i> Contact <span id="agent_name"></span></h4>
                <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body-->
            <div class="modal-body mb-0" id="contact_form">
                <div class="md-form form-sm">
                    <i class="fa fa-user prefix blue-text"></i>
                    <input type="text" id="contact_name" class="form-control required">
                    <label for="contact_name">Your name</label>
                </div>

                <div class="md-form form-sm">
                    <i class="fa fa-phone-square prefix blue-text"></i>
                    <input type="text" id="contact_phone" class="form-control phone">
                    <label for="contact_phone">Your phone</label>
                </div>

                <div class="md-form form-sm">
                    <i class="fa fa-envelope prefix blue-text"></i>
                    <input type="text" id="contact_email" class="form-control required">
                    <label for="contact_email">Your email</label>
                </div>

                <div class="md-form form-sm">
                    <i class="fa fa-pencil prefix blue-text"></i>
                    <textarea type="text" id="contact_message" class="md-textarea mb-0 required"></textarea>
                    <label for="contact_message">Your message</label>
                </div>

                <div class="text-center mt-1-half">
                    <button class="btn btn-default mb-2" id="submit_form">Send Message <i class="fa fa-paper-plane-o ml-1"></i></button>
                </div>
                <input type="hidden" id="title_id">

            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: Contact form-->
<?php
require_once($_SERVER['DOCUMENT_ROOT'].'page_includes/footer.php');
require_once($_SERVER['DOCUMENT_ROOT'].'page_includes/foot.php');
?>

    <script type="text/javascript">

        $(document).ready(function() {



        });

    </script>
</body>

</html>
