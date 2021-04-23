<!--service -->
                        <div id="service" class="row">
                            <div class="col-sm-12 ">
                                <div class="header text-center margin-bottom ">
                                    <?php echo $link->title; ?> 
                                </div> 
                            </div>
                            <div class="wow fadeIn animated" data-wow-duration="2s">
                                <h3 class="text-center"><?php echo $link->subject; ?></h3>
                                <p class="text-center margin-bottom"><?php echo $link->body; ?></p>
                            </div>
							<?php if(!empty($services)) { ?>
                            <?php $j=1; foreach($services as $service) { ?>
							<?php if(($j%3) == 1) { ?><div class="row padding"><?php } ?>                            
                                <!--2 columns -->
                                <!-- <div class="col-md-6 text-center wow fadeInLeft" data-wow-duration="2s">
                                    <i class="fa  fa-leaf fa-5x "></i>
                                    <div class="panel-heading">
                                        <h3>Nice For you </h3>
                                    </div>
                                    <div class="panel-body text-justify">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </p>

                                    </div>
                                </div>
                                <div class="col-md-6 text-center wow fadeInRight" data-wow-duration="2s">
                                    <i class="fa  fa-wechat fa-5x "></i>
                                    <div class="panel-heading">
                                        <h3>Open Vision</h3>
                                    </div>
                                    <div class="panel-body text-justify">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </p>

                                    </div>
                                </div> -->
                                <!--3 columns-->
                                <div class=" col-md-4 text-center wow fadeInLeft" data-wow-duration="2s">
									<?php
										foreach($icons as $icon)
										{
											if($icon->id == $service->icon) $service->icon = $icon->name;
										}
									?>
                                    <!--<i class="fa  fa-<?php //echo $service->icon; ?>-o fa-5x "></i>-->
									<i class="fa  fa-<?php echo $service->icon; ?> fa-5x "></i>
                                    <div class="panel-heading">
                                        <h3><?php echo $service->title; ?></h3>
                                    </div>
                                    <div class="panel-body text-justify">
                                        <p><?php echo $service->description; ?></p>
                                    </div>
                                </div>
								<?php if(($j%3) == 0) { ?></div><?php } ?>
								<?php $j++; } } else echo 'There are no '.$link->title.'s'; ?>      
                            </div>
                        </div>
                        <!--/service-->
                        <div class="break"></div>