<header>


    <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav sn-bg-4 fixed mdb-sidenav">
        <ul class="custom-scrollbar list-unstyled" style="max-height:100vh;">
            <!-- Logo -->
            <li>
                <div class="logo-wrapper waves-light">
                    <a href="index.html"><img src="/img/custom/nav/logo-web.png" class="img-fluid flex-center" alt="Heritage Financial"></a>
                    <h4 class="font-weight-bold text-center white-text"><?php echo $GLOB_LO[0]['fullname']; ?></h4>
                </div>

            </li>
            <!--/. Logo -->


            <!-- Side navigation links -->
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li><a class="navbar-link waves-effect" href="index.html"><i class="fal fa-fw fa-home"></i> Home</a></li>
                    <li><a class="navbar-link waves-effect" href="apply-for-loan.html"><i class="fal fa-fw fa-pencil-alt"></i> Apply For A Loan</a></li>
                    <li><a class="navbar-link waves-effect" href="https://www.titlecapture.com/app/30/heritagetitle" target="_blank"><i class="fal fa-fw fa-calculator" aria-hidden="true"></i>Get An Instant Quote</a></li>
                    <li><a class="navbar-link waves-effect" href="borrower-information.html"><i class="fal fa-fw fa-users"></i> Buyers/Borrowers</a></li>
                    <li><a class="navbar-link waves-effect" href="contact-md.html"><i class="fal fa-fw fa-phone"></i> Contact Me</a></li>



                </ul>
            </li>
            <!--Social-->
            <li>
                <div class="d-flex justify-content-between nav-social">
                    <?php if($GLOB_LO['linkedin_url'] != '') { ?>
                    <a class="btn-floating btn-sm peach-gradient nav-social ml-5" href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <?php } ?>
                    <?php if($GLOB_LO['facebook_url'] != '') { ?>
                    <a class="btn-floating btn-sm blue-gradient nav-social mr-5" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <?php } ?>
                </div>
            </li>
            <!--/Social-->
            <!--/. Side navigation links -->
        </ul>
        <div class="sidenav-bg mask-strong"></div>
    </div>
    <!--/. Sidebar navigation -->
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav z-depth-3">

        <div class="float-left">
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
        </div>

        <ul class="nav navbar-nav nav-flex-icons ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="tel:<?php echo $GLOB_LO['cellphone']; ?>"><i class="fas fa-phone"></i> <span class="clearfix d-sm-inline-block"><?php echo $GLOB_LO[0]['cellphone']; ?></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="apply-for-loan.html" target="_blank"><i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Application Login</span></a>
            </li>

        </ul>
    </nav>
    <!-- /.Navbar -->



</header>
