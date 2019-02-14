<?php require_once($_SERVER['DOCUMENT_ROOT'].'page_includes/modals/success.php'); ?>
<!--Footer-->
<footer class="page-footer center-on-small-only">

    <!--Footer Links-->
    <div class="container">
        <div class="row my-4">

            <div class="col-md-4">
                <h5 class="title mb-4 font-bold">Corporate Location</h5>
                <!--Info-->
                <p><i class="fas fa-map-marker-alt mr-3"></i> 175 Admiral Cochrane Dr.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Suite 111<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Annapolis, MD 21401</p>
                <p><i class="fas fa-phone mr-3"></i> (800) 351-5755</p>
                <p><i class="fas fa-print mr-3"></i> (410) 224-0880 </p>
            </div>

            <hr class="clearfix w-100 d-md-none">

            <div class="col-md-4">
                <h5 class="title mb-4 font-bold">Contact Info</h5>
                <p><i class="fas fa-phone mr-3"></i> <?php echo $GLOB_LO['0']['cellphone']; ?></p>
                <p><i class="fas fa-envelope mr-3"></i> <?php echo $GLOB_LO['0']['lo_email']; ?> </p>
            </div>

            <hr class="clearfix w-100 d-md-none">

			<div class="col-md-4 text-center">
                <h5 class="title mb-4 font-bold">Licenses</h5>
                <?php echo $GLOB_LO_license; ?>
            </div>




        </div>
    </div>
    <!--/.Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2018 Copyright: <a href="http://heritagetitlemd.com"> Heritage Title, LTD </a>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->
