<!--contact us-->

                        <div id="contactus" class="row contactus margin-bottom ">
                            <div class=" header text-center"><?php echo $link->title; ?></div>
							<div class="wow fadeIn" data-wow-duration="2s">
                                <h3 class="text-center "><?php echo $link->subject; ?></h3>
                                <p class="text-center margin-bottom"><?php echo $link->body; ?></p>
                            </div>
							<?php if(!empty($contactus)) { ?>
							<?php foreach($contactus as $contact) { ?>
                            <?php if($contact->googlemap == '1') { ?><div id="map-canvas" ></div><?php } ?>
                            <hr>
                            <div class="col-sm-4"> <address>
                                    <strong>Address</strong><br>
                                    <span id="map-input">
                                        <?php echo $contact->address; ?><br>
                                    </span>
                                </address>
                                <address>
                                    <strong>Email Us</strong><br>
                                    <a href="mailto:#"><?php echo $contact->email; ?></a>
                                </address> 
                            </div>
							
							<?php if($contact->contactform == '1') { ?>
                            <form class=" clearfix">
                                <div class="col-sm-8">
                                    <div class="col-xs-12">
                                        <input class="form-control" id="name" name="name" placeholder="Name" required="" type="text">
                                    </div>
                                    <div class="col-xs-12">
                                        <input class="form-control" id="email" name="email" placeholder="Email" required="" type="email">
                                    </div>
                                    <div class="col-xs-12">
                                        <input class="form-control" name="subject" placeholder="Subject" required="" type="text">
                                    </div>
                                    <div class="col-xs-12">
                                        <textarea class="form-control"  cols="40" rows="4" placeholder="Your Massege" required="" ></textarea>
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-info col-xs-12">Contact Us</button>
                                    </div>
                                </div>
                            </form>
							<?php } ?>
							<?php } } else echo 'There are no '.$link->title.'s'; ?>
                        </div>
                        <!--/row-->

                        <!--/ contact us-->

                        <div class="break"></div>