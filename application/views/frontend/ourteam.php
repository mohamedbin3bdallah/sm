<!--our team--> 

                        <div id="ourteam" class="row margin-bottom">

                            <div class="col-sm-12">
                                <div class="header text-center margin-bottom">
									<?php echo $link->title; ?>
                                </div>
                            </div>
                            <div class="wow fadeIn" data-wow-duration="2s">
                                <h3 class="text-center "><?php echo $link->subject; ?></h3>
                                <p class="text-center margin-bottom"><?php echo $link->body; ?></p>
                            </div>
							<?php if(!empty($ourteam)) { ?>
							<?php $j=1; foreach($ourteam as $teammember) { ?>
                            <div class="col-lg-3 col-sm-6 col-xs-6  wow <?php if(($j%2) == 1) echo 'fadeInDown'; else echo 'fadeInUp'; ?>">
                                <img src="<?php echo base_url(); ?>ourteam/<?php echo $teammember->image; ?>" class="img-circle img-responsive">
                                <div class="text-center team-name"><?php echo $teammember->title; ?></div>
                                <div class="text-center team_position"><?php echo $teammember->description; ?></div>
                                <div id="team-social" class="text-center">
                                    <a href="#" class="team-social-link">
                                        <i class="fa  fa-facebook"></i>
                                    </a>
                                    <a href="#" class="team-social-link">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#" class="team-social-link">
                                        <i class="fa  fa-dribbble"></i>
                                    </a>
                                    <a href="#" class="team-social-link">
                                        <i class="fa  fa-google-plus"></i>
                                    </a>
                                </div>
                            </div>
							<?php $j++; } } else echo 'There are no '.$link->title.'s'; ?>                            
						</div>
                        <!--End our team--> 
                        <div class="break"></div>