<?php require_once($_SERVER['DOCUMENT_ROOT'].'includes/global.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="Description" content="Mortgage loan company offering residential and commercial loans. Purchases and refis for residential and commercial in Maryland, DC and Virginia.">
	<meta name="Keywords" content="Heritage Financial, Annapolis, Loans, Mortgages, Refis, FHA, VA, Maryland, DC, Virginia, Best Rates">
	<meta name="robots" content="index, follow">
    <title>Heritage Financial</title>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'page_includes/head.php'); ?>
</head>

<body class="fixed-sn page-index">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'page_includes/header.php'); ?>

    <main>


        <!-- Content -->

        <?php require_once($_SERVER['DOCUMENT_ROOT'].'page_includes/slider.php'); ?>


        <div class="container index-cards">

			<div class="row">
				<div class="col-12">
					<h2 class="h2-main">Exprerience the Heritage Financial Difference</h2>
				</div>
			</div>
            <div class="row">
                <div class="col-lg-4 wow bounceInLeft mb-5">

                <!--Card-->
                <div class="card card-cascade wider">

                    <!--Card image-->
                    <div class="view gradient-card-header index-card1">
                        <h2 class="h2-responsive">$500 BEST RATE GUARANTEE!</h2>
                    </div>
                    <!--/Card image-->

                    <!--Card content-->
                    <div class="card-body text-center">

                        <p class="card-text guarantee-text">
                            We will beat any other<br>Lender's rate<br>or give you $500! *
							<br>
							Call Now For Details<br>
						</p>
						<p>
							<a href="tel:800-351-5755" class="btn btn-default z-depth-3"><i class="fas fa-phone mr-3"></i> (800) 351-5755</a>
                        </p>
                    </div>
                    <!--/.Card content-->

                </div>
                <!--/.Card-->

                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4 wow bounceInUp mb-5">
                    <!--Card-->
                    <div class="card card-cascade wider">

                        <!--Card image-->
                        <div class="view gradient-card-header index-card2">
                            <h2 class="h2-responsive">Residential and Commercial Mortgages</h2>
                        </div>
                        <!--/Card image-->

                        <!--Card content-->
                        <div class="card-body text-center">

                            <p class="card-text">PURCHASES & REFINANCING<br><br>
                                IN MARYLAND, WASHINGTON, D.C., AND VIRGINIA<br><br>
                                FOR:<br>
                                Conventional | FHA | VA | USDA | Bank-Owned | Short Sales |
                                Foreclosures | HELOC’s | Reverse Mortgages | 203K</p>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4 wow bounceInRight mb-5">
                    <!--Card-->
                    <div class="card card-cascade wider">

                        <!--Card image-->
                        <div class="view gradient-card-header index-card3">
                            <h2 class="h2-responsive">Closing Cost<br>Estimates</h2>
                        </div>
                        <!--/Card image-->

                        <!--Card content-->
                        <div class="card-body text-left">

                            <p class="card-text">
                                <strong>Call us today for:</strong>
                                <br>
                                Title Quotes<br>
                                Loan Estimate Quotes<br>
                                Seller Net Sheets<br>
                                Buyer Estimates<br>
                                ALTA Settlement Statements<br>
                                <!--button type="button" class="btn btn-default z-depth-3 show-quote float-right mt-4">Access App</button-->
                            </p>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>



        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="disclaimer">* You must provide a Loan Estimate dated the same day as our rate quote. We will beat the other lender's rate/origination fee/points total or pay you $500 at closing with that lender upon verification of Note and Closing Disclosure. The above reimbursements will be made at time of settlement only with heritage Title, LTD. IT will be reflected as a credit towards closing costs on your Closing Disclosure. This offer is subject to lender approval.</div>
                </div>
            </div>
        </div>
        <!-- End Content -->

    </main>

    <?php
    require_once($_SERVER['DOCUMENT_ROOT'].'page_includes/footer.php');
    require_once($_SERVER['DOCUMENT_ROOT'].'page_includes/foot.php');
    ?>


    <script type="text/javascript">
        $(document).ready(function() {


            $('.carousel').carousel({
                interval: 5000
            });

        });
    </script>
</body>

</html>
