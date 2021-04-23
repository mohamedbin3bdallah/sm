				<!-- main -->

                <div id="main" class="column col-sm-9 col-xs-12" >

                    <div class="full col-sm-9">
							<!--welcome-->
							<div id='welcome' class="weclome">
                            <div class="col-sm-12">
                                <div class="wow fadeInDown">
                                    <div class='welcome-logo text-center wow  pulse' data-wow-delay="1s" data-wow-duration="2s" data-wow-iteration="infinite">
                                        <!--<li class="fa fa-2x fa-heart-o" ></li>-->
                                        <?php if($site[0]->logo != '') { ?><img class="logo-img " src="<?php echo base_url(); ?>simpletheme/img/<?php echo $site[0]->logo; ?>"><?php } ?>
                                    </div>
                                </div>
                                <div  class='welcome-text text-center wow fadeIn'>
                                    <a href="#home"><h3><?php echo $site[0]->slogan; ?></h3></a>
                                </div>
                            </div> 
                        </div>
                        <!--End welcome-->
                        <div class="break"></div>