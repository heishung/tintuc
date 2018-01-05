<?php

include "controller/c_tintuc.php";
$c_tintuc=new C_tintuc();
$noidung=$c_tintuc->index();
$slide=$noidung['slide'];
$menu=$noidung['menu'];
?>
<!--top nav-->
<?php require "layuots/topnav.php";?>
<!--end topnav-->
<!-- Page Content -->
<div class="container">

    <!-- slider -->
    <div class="row carousel-holder">
        <div class="col-md-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">

                        <?php
                          for($i=0;$i<count($slide);$i++) {
                           if ($i==0){?>
                               <div class="item active">
                                   <img class="slide-image" src="public/image/slide/<?php echo $slide[$i]->Hinh ?>" alt="<?php echo $slide[$i]->Ten ?>">
                               </div>
                               <?php

                           }
                           else{?>
                               <div class="item ">
                                   <img class="slide-image" src="public/image/slide/<?php echo $slide[$i]->Hinh ?>" alt="<?php echo $slide[$i]->Ten ?>">
                               </div>
                               <?php

                           }
                        }
                        ?>


                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </div>
    <!-- end slide -->

    <div class="space20"></div>


    <div class="row main-left">
        <!--menu left-->
        <?php require "layuots/menuleft.php";?>
        <!--end menu left-->
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:#337AB7; color:white;" >
                    <h2 style="margin-top:0px; margin-bottom:0px;"> Tin Tức</h2>
                </div>

                <div class="panel-body">
                        <?php
                            foreach ($menu as $mn){?>
                                <!-- item -->
                                <div class="row-item row">
                                    <h3>
                                        <a href="#"><?= $mn->Ten ?></a> |
                                        <?php

                                            $loaitin=explode(',',$mn->LoaiTin);
                                            foreach ($loaitin as $lt){

                                                list($id,$ten,$tenkhongdau)=explode(':',$lt);
                                                ?>
                                                <small><a href="loaitin.html"><i><?= $ten ?></i></a>/</small>
                                                <?php
                                            }
                                        ?>


                                    </h3>
                                    <div class="col-md-12 border-right">
                                        <div class="col-md-3">
                                            <a href="chitiet.html">
                                                <img class="img-responsive" src="public/image/tintuc/<?= $mn->HinhTin ?>" alt="">
                                            </a>
                                        </div>

                                        <div class="col-md-9">
                                            <h3><?= $mn->TieuDeTin?></h3>
                                            <p><?= $mn->NoiDungTin ?></p>
                                            <a class="btn btn-primary" href="chitiet.html">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                                        </div>

                                    </div>

                                    <div class="break"></div>
                                </div>
                                <!-- end item -->
                            <?php }
                        ?>


                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- end Page Content -->

<!-- Footer -->
<?php
    require "layuots/footer.php";
?>