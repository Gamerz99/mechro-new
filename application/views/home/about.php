<?php
$this->load->view('layout/header');
?>
<body id="top" >

<div id="loading1" class="loading text-center">
    <div id="loading1" class="loadtext text-center">
        <img src="<?php echo base_url(); ?>images/loading.svg" width="80px">

    </div>
</div>

<div class="load">
    <div class="wrapper bgded overlay main1 mbr-parallax-background">
        <div class="wrapper row0">
            <div id="topbar" class="hoc clear">
                <div class="fl_right">
                    <ul class="nospace">
                        <li><i class="fa fa-phone"></i> +94 0714864007 / +940770083907</li>
                        <li><i class="fa fa-envelope-o"></i> mechrocom@gmail.com</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="wrapper row1">
            <header id="header" class="hoc clear">
                <div id="logo" class="fl_left">
                    <h1><a href="<?php echo base_url(); ?>index.php">MECH-RO</a></h1>
                </div>
                <nav id="mainav" class="fl_right">
                    <ul class="clear">
                        <li ><a href="<?php echo base_url(); ?>index.php/home">Home</a></li>
                        <li><a class="drop" href="#">Products</a>
                            <ul>
                                <li><a  href="#">Machinery</a>
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>index.php/machinery/category/4">Tea Machinery</a></li>
                                        <li><a href="<?php echo base_url(); ?>index.php/machinery/category/5">Conveyors</a></li>
                                        <li><a href="<?php echo base_url(); ?>index.php/machinery/category/6">Dust Collector</a></li>
                                        <li><a href="<?php echo base_url(); ?>index.php/machinery/category/7">Exhaust Fan</a></li>
                                        <li><a href="<?php echo base_url(); ?>index.php/machinery/category/8">Packers</a></li>
                                        <li><a href="<?php echo base_url(); ?>index.php/machinery/category/9">Filters</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Construction</a>
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>index.php/construction/category/10">Equipment</a></li>
                                        <li><a href="<?php echo base_url(); ?>index.php/construction/category/11">Roofing Sheets</a></li>
                                        <li><a href="<?php echo base_url(); ?>index.php/construction/category/12">Gates</a></li>
                                        <li><a href="<?php echo base_url(); ?>index.php/construction/category/13">Roller Doors</a></li>
                                        <li><a href="<?php echo base_url(); ?>index.php/construction/category/14">Hand Railing</a></li>
                                        <li><a href="<?php echo base_url(); ?>index.php/construction/category/15">Building</a></li>
                                    </ul>
                                </li>
                                <li ><a href="#">Other</a>
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>index.php/other/category/16">Land</a></li>
                                        <li><a href="<?php echo base_url(); ?>index.php/other/category/17">Vehicles</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo base_url(); ?>index.php/all">All Products</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url(); ?>index.php/project">Our Projects</a></li>
                        <li class="active"><a href="<?php echo base_url(); ?>index.php/about">About Us</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/gallery">Gallery</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/contact">Contact Us</a></li
                    </ul>
                </nav>
            </header>
        </div>

        <div class="wrapper">
            <section id="breadcrumb" class="hoc clear">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </section>
        </div>
    </div>

    <div id="one" class="container text-center "><br>
        <h6 class="heading center">BORD OF DIRECTORS</h6><hr>
        <div class="row ">
            <div class="col-sm-8"><br><br>
                <h3>A Perfectionist On Every Detail</h3>
                <p>Hi!!!. I am KALITHA, managing director of “R & R HOLDINGS”.” THE EVENTS” is a sub company of R & R HOLDINGS. The Events crew try to give you memorable experiences through creative event planning and management, because in your dreams, every detail matters.</p><br><br>
                <p class="about-p1"><strong>Mr. Chamila Manoj Samaranayaka</strong></p>
                <p class="about-p1"><strong>(UG) BSc Eng. EEE</strong></p>
            </div>
            <div class="col-sm-4 about">
                <img src="<?php echo base_url(); ?>about/director.jpg" class=" person" alt="Random Name" width="255" height="255">
                <p class="font">MANAGING DIRECTOR</p>
            </div>

        </div><br>
        <hr>
        <div class="row ">
            <div class="col-sm-4 about">
                <img src="<?php echo base_url(); ?>about/director.jpg" class=" person" alt="Random Name" width="255" height="255">
                <p class="font">MANAGING DIRECTOR</p>
            </div>
            <div class="col-sm-8"><br><br>
                <h3>A Perfectionist On Every Detail</h3>
                <p>Hi!!!. I am KALITHA, managing director of “R & R HOLDINGS”.” THE EVENTS” is a sub company of R & R HOLDINGS. The Events crew try to give you memorable experiences through creative event planning and management, because in your dreams, every detail matters.</p><br><br>
                <p class="about-p1"><strong>Mrs. Sandani Shanika D. Liyanage</strong></p>
                <p class="about-p1"><strong>(UG) BSc Eng. EEE</strong></p>
            </div>
        </div><br>
        <h6 class="heading center">OUR VISION</h6><hr>
        <p class="about-text">We aim to be the organization that constantly stays a way ahead in dealing with needs and changes, creates new values, provides solutions, and contributes broadly to the private and government institutions and the society in Sri Lanka, not only in the international industry within higher good will.</p><br><br>
        <h6 class="heading center">OUR MISSION</h6><hr>
        <p class="about-text">Providing services for industrial, construction and automobile sectors by carrying out engineering product marketing whilst focusing on fabrication of systems with local and imported machinery and equipment to achieve a higher quality standard, with using knowledge, skill, attitude high technology and valuable sources.</p><br><br>


    </div>
    <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
    <?php
    $this->load->view('layout/footer');
    ?>

</div>
<script src="<?php echo base_url(); ?>scripts/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>scripts/jquery.backtotop.js"></script>
<script src="<?php echo base_url(); ?>scripts/jarallax.js"></script>
<script src="<?php echo base_url(); ?>scripts/mscript.js"></script>
<script src="<?php echo base_url(); ?>scripts/script.js"></script>
<script src="<?php echo base_url(); ?>scripts/jquery.mobilemenu.js"></script>
</body>
