<?php require_once('includes/global.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Online Loan Application - Heritage Financial</title>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'page_includes/head.php'); ?>
</head>
<body class="fixed-sn">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'page_includes/header.php'); ?>
    <main>

        <!-- Page Intro -->
        <div class="container-full">
            <div class="row">
                <div class="col-12">
					<div class="loan-app-header">
                        <h1 class="animated bounceInRight">Apply Online</h1>
					</div>
                </div>
            </div>
        </div>
        <!-- End Page Intro -->

        <!-- Content -->

        <div class="container-full">

            <div class="row">

                <div class="col-12">

					<div class="loan-app-sub-header">
	                    <p>Begin the application process here.</p>
					</div>

                        <iframe id="loan_app_iframe" src="<?php echo $GLOB_LO[0]['loan_app_url']; ?>" name="loan_app_iframe" frameborder="0"></iframe>



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



        });

    </script>
</body>

</html>
