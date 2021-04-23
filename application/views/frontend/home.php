						<!-- home -->
                        <div  id='home' class="  fadeInUp ">
                            <div  class="col-sm-12">   
                                <div class=" header text-center ">
                                    <?php echo $link->title; ?> 
                                </div> 
                            </div>

							<?php if(!empty($home)) { ?>
							<div class="row">
                                <div class="col-sm-12">
                                    <div id="slider" class="carousel  carousel-fade" data-ride="carousel" data-interval="4000" data-pause="none">
                                        <ol class="carousel-indicators">
											<?php for($i=0;$i<count($home);$i++) { ?>
												<li data-target="#slider" data-slide-to="<?php echo $i+1; ?>" class="<?php if($i == 0) echo 'active'; ?>"></li>
											<?php } ?>
                                        </ol>
                                        <!-- Carousel items -->
                                        <div class="carousel-inner">
											<?php for($i=0;$i<count($home);$i++) { ?>
                                            <div class="<?php if($i == 0) echo 'active'; ?> item"><img  class="img-responsive" src="<?php echo base_url(); ?>home/<?php echo $home[$i]->image; ?>"/>
                                                <div class="carousel-caption">
                                                    <a href="#">
                                                        <h3><?php echo $home[$i]->title; ?></h3>
                                                        <p><?php echo $home[$i]->description; ?></p>
                                                    </a>
                                                </div>
                                            </div>
											<?php } ?>                                            
                                        </div>
                                        <!-- Carousel nav -->
                                        <a class="carousel-control left" href="#slider" data-slide="prev"><span class="fa fa-2x fa-angle-double-left"></span></a>
                                        <a class="carousel-control right" href="#slider" data-slide="next"><span class="fa fa-2x fa-angle-double-right"></span></a>
                                    </div>
                                </div> 
                            </div>
							<?php } ?>                                            
                        </div>
                        <!--intro -->
                        <div id="intro" class="col-sm-12 wow fadeIn"  data-wow-duration="2s" >
                            <h1 class=" intro-head text-center"><?php echo $link->subject; ?></h1>
                            <div  class="intro-text text-center margin-bottom">
                                <?php echo $link->body; ?>
                            </div>
                        </div>
                        <!--end intro -->
                        <!--end home--> 
                        <div class="break"> </div>