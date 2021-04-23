						<!--contact us-->
                        <div id="contactus" class="row contactus margin-bottom ">
                            <div class=" header text-center"><?php echo $link->title; ?></div>
                            <div class="wow fadeIn" data-wow-duration="2s">
                                <h3 class="text-center"><?php echo $link->subject; ?></h3>
                                <div class="text-center">
                                    <p><?php echo $link->body; ?></p>
								</div>
                            </div>
							<?php if(empty($contactus) || isset($contactus_edit)) { ?>
							<div class="row">
							<div class="col-sm-6">
                                <div class="wow fadeInDown">
                                        <?php
											//echo $admessage;
											echo validation_errors();
											echo form_open_multipart('admin/setcontactus');
										?>
										<div class="row">
										<?php
											if(isset($contactus_edit[0]->email)) $email = $contactus_edit[0]->email;
											else $email = set_value('email');
											$data = array(
												'name' => 'email',
												'id' => 'email',
												'placeholder' => 'Email',
												'class' => 'form-control',
												'max' => 100,
												'value' => $email
											);
											echo form_input($data);
										?>
										</div>
										<div class="row">
										<?php
											if(isset($contactus_edit[0]->address)) $address = $contactus_edit[0]->address;
											else $address = set_value('address');
											$data = array(
												'name' => 'address',
												'id' => 'address',
												'placeholder' => 'Address',
												'class' => 'form-control',
												'rows' => 5,
												'value' => $address
											);
											echo form_textarea($data);
										?>
										</div>
										<div class="row">
										<?php
											if(isset($contactus_edit[0]->googlemap) && $contactus_edit[0]->googlemap == 1) $googlemapcheck = 'TRUE';
											else $googlemapcheck = 'FALSE';
											$data = array(
												'name'  => 'googlemap',
												'id'  => 'googlemap',
												'class' => '',
												'value' => '1',
												'checked'     => $googlemapcheck
											);
											echo form_checkbox($data);
											echo form_label('Google Map', 'googlemap');
										?>
										</div>
										<div class="row">
										<?php
											if(isset($contactus_edit[0]->contactform) && $contactus_edit[0]->contactform == 1) $contactformcheck = 'TRUE';
											else $contactformcheck = 'FALSE';
											$data = array(
												'name'  => 'contactform',
												'id'  => 'contactform',
												'class' => '',
												'value' => '1',
												'checked'     => $contactformcheck
											);
											echo form_checkbox($data);
											echo form_label('Contact Form', 'contactform');
										?>										
										</div>										
										<div class="row">
										<?php
											$data = array(
												'linkid'  => $link->id
											);
											echo form_hidden($data);
											
											if(isset($contactus_edit[0]->id))
											{
												$data = array(
													'id'  => $contactus_edit[0]->id
												);
												echo form_hidden($data);
											}
											
											$data = array(
												'name' => 'savecontactus',
												'id' => 'savecontactus',
												'class' => 'btn btn-info',
												'value' => 'true',
												'type' => 'submit',
												'content' => 'Save'
											);
											echo form_button($data);
										?>
										</div>
										<?php								
											echo form_close();
										?>
                                </div>                                
                            </div>
							</div>
							<?php } ?>
                        </div>
                        <!--/row-->
						
						<div id="intro" class="col-sm-12 wow fadeIn"  data-wow-duration="2s" >
                            <h1 class=" intro-head text-center"> <?php echo $link->title.'s'; ?>  </h1>
                            <div  class="intro-text text-center margin-bottom">
								<?php if(!empty($contactus)) { ?>
								<div class="table-responsive">
								<table class="table">
									<tr>
										<th>Email</th>
										<th>Address</th>
										<th>Google Map</th>
										<th>Contact Form</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
									<?php foreach($contactus as $contact) { ?>
									<tr>
										<td><?php echo $contact->email; ?></td>
										<td><?php echo $contact->address; ?></td>
										<td><?php if($contact->googlemap == '1') echo 'YES'; else echo 'NO'; ?></td>
										<td><?php if($contact->contactform == '1') echo 'YES'; else echo 'NO'; ?></td>
										<td><a href="<?php echo base_url(); ?>admin/edit/contactus/<?php echo $link->id; ?>/<?php echo $contact->id; ?>/<?php echo ''; ?>"><i class="glyphicon glyphicon-edit"></i></a></td>
										<td><a href="<?php echo base_url(); ?>admin/del/contactus/<?php echo $contact->id; ?>/<?php echo ''; ?>"><i class="glyphicon glyphicon-remove"></i></a></td>
									</tr>
									<?php } ?>
								</table>
								</div>
								<?php } else echo 'There are no '.$link->title.'s'; ?>
                            </div>
                        </div>

                        <!--/ contact us-->

                        <div class="break"></div>