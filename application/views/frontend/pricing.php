						<!--pricing-->
                        <div id="pricing"  > 
                            <div class="col-sm-12">
                                <div class="header text-center">
                                    <?php echo $link->title; ?> 
                                </div> 
                            </div>
							<div class="wow fadeIn" data-wow-duration="2s">
                                <h3 class="text-center"><?php echo $link->subject; ?></h3>
                                <div class="text-center">
                                    <p><?php echo $link->body; ?></p>
								</div>
                            </div>
							<?php if(!empty($pricing)) { ?>
                            <?php $j=1; foreach($pricing as $price) { ?>
							<?php if(($j%3) == 1) { ?><div class="row"><?php } ?>
								<div class="col-md-4">
                                    <div class="panel panel-danger wow fadeInLeft" >
                                        <div class="panel-heading"><h3 class="text-center"><?php echo $price->title; ?></h3></div>
                                        <div class="panel-body text-center">
                                            <p class="lead" style="font-size:40px"><h2><?php echo $price->description; ?></h2></p>
                                        </div>
                                        <ul class="list-group list-group-flush text-center">
										<?php
											$features = $this->Admin_mo->getwhere('pricing_features', array('pricingid'=>$price->id));
											if(!empty($features)) {
												for($i=0;$i<count($features);$i++) {
										?>
													<li class="list-group-item"><i class="icon-ok text-danger"></i><?php echo $features[$i]->descrip.' : '.$features[$i]->feature; ?></li>
										<?php } } ?>
                                        </ul>
                                        <div class="panel-footer">
                                            <a class="btn btn-lg btn-block btn-danger" href="">BUY NOW!</a>
                                        </div>
                                    </div>
                                </div>								
                            <?php if(($j%3) == 0) { ?></div><?php } ?>
							<?php $j++; } } else echo 'There are no '.$link->title.'s'; ?>
                        </div>
                        <!--/pricing-->
                        <div class="break"></div>