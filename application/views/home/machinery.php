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
                        <li><a href="<?php echo base_url(); ?>index.php/home">Home</a></li>
                        <li class="active"><a class="drop" href="#">Products</a>
                            <ul>
                                <li class="active"><a  href="#">Machinery</a>
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
                        <li><a href="<?php echo base_url(); ?>index.php/about">About Us</a></li>
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
                    <li><a href="#">Machinery</a></li>
                </ul>
            </section>
        </div>
    </div>

    <div class="wrapper row3">
        <section class="hoc container clear"><br>
            <h6 class="heading center"> <?php echo strtoupper($category['Category']) ?></h6><hr><br>
            <div class="group excerpts">
                <?php
                foreach ($products as $product){
                        ?>
                        <div class="col-md-4 col-sm-6">
                            <article>
                                <figure><img src="<?php echo base_url(); ?>products/<?php echo $category['Category']?>/<?php echo $product['Image']?>" alt="" >
                                    <figcaption>
                                        <?php
                                        list($d,$t) = explode(" ", $product['Date']);
                                        list($year, $mo, $day) = explode("-", $d);
                                        if($mo=="01"){
                                            $month="Jan";
                                        }
                                        elseif($mo=="02"){
                                            $month="Feb";
                                        }
                                        elseif($mo=="03"){
                                            $month="Mar";
                                        }
                                        elseif($mo=="04"){
                                            $month="Apr";
                                        }
                                        elseif($mo=="05"){
                                            $month="May";
                                        }
                                        elseif($mo=="06"){
                                            $month="Jun";
                                        }
                                        elseif($mo=="07"){
                                            $month="Jul";
                                        }
                                        elseif($mo=="08"){
                                            $month="Aug";
                                        }
                                        elseif($mo=="09"){
                                            $month="Sep";
                                        }
                                        elseif($mo=="10"){
                                            $month="Oct";
                                        }
                                        elseif($mo=="11"){
                                            $month="Nov";
                                        }
                                        else{
                                            $month="Dec";
                                        }
                                        ?>
                                        <time datetime="2045-04-06T08:15+00:00"><strong><?php echo $day?></strong> <em><?php echo $month?></em></time>
                                    </figcaption>
                                    <div class="img-overlay">
                                        <div class="text">More</div>
                                        <div class="text3"><i class="fa fa-eye"></i></div>
                                    </div>
                                </figure>
                                <div class="hgroup">
                                    <h4 class="heading"><?php echo $product['Name']?></h4>
                                    <ul class="nospace meta">
                                        <li>by <a href="#">Mec-hro</a></li>
                                        <li>in <a href="#"><?php echo $category['Category']?></a></li>
                                    </ul>
                                </div>
                                <footer>
                                    <div class="fl_center">
                                        <a class="btn" href="<?php echo base_url(); ?>index.php/machinery/detail/<?php echo $product['Id']?>">View</a>
                                    </div>
                                </footer>
                            </article>
                        </div>
                        <?php
                }
                ?>
            </div>
        </section>
    </div>
    <ul class="pagination justify-content-center">
        <?php if($page!=1){ ?>
            <li class="page-item">
                <?php $previous=$page-1?>
                <a class="page-link" href="<?php echo base_url(); ?>index.php/machinery/category/<?php echo $category['Id'] ?>/<?php echo $previous?>">Previous</a>
            </li>
            <li class="page-item "><a class="page-link" href="<?php echo base_url(); ?>index.php/machinery/category/<?php echo $category['Id'] ?>/<?php echo $page-1?>"><?php echo $page-1 ?></a></li>
        <?php }?>
        <li class="page-item active"><a class="page-link " href="<?php echo base_url(); ?>index.php/machinery/category/<?php echo $category['Id'] ?>/<?php echo $page?>"><?php echo $page ?></a></li>
        <?php
        if($page>=$last){
        } else{?>
            <li class="page-item"><a class="page-link" href="<?php echo base_url(); ?>index.php/machinery/category/<?php echo $category['Id'] ?>/<?php echo $page+1?>"><?php echo $page+1 ?></a></li>
            <li class="page-item">
                <?php $next=$page+1?>
                <a class="page-link" href="<?php echo base_url(); ?>index.php/machinery/category/<?php echo $category['Id'] ?>/<?php echo $next?>">Next</a>
            </li>
        <?php }?>
    </ul>
    <?php
    $this->load->view('layout/footer');
    ?>
    <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
</div>
<script src="<?php echo base_url(); ?>scripts/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>scripts/jquery.backtotop.js"></script>
<script src="<?php echo base_url(); ?>scripts/mscript.js"></script>
<script src="<?php echo base_url(); ?>scripts/jarallax.js"></script>
<script src="<?php echo base_url(); ?>scripts/script.js"></script>
<script src="<?php echo base_url(); ?>scripts/jquery.mobilemenu.js"></script>
</body>