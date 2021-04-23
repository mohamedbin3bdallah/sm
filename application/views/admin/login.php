<!--Login-->

                        <div id="contactus" class="row contactus margin-bottom ">
                            <div class=" header text-center">LogIn </div>
                            <hr>
							<?php
								echo $message;
								echo validation_errors();
								echo form_open('simpletheme/login');
							?>
                                <div class="col-sm-12">

                                    <div class="col-xs-12">
										<?php										
											$data = array(
												'name' => 'username',
												'id' => 'username',
												'placeholder' => 'Username',
												'class' => 'form-control',
												'max' => 50,
												'value' => set_value('username')
											);
											echo form_input($data);
										?>
                                    </div>
                                    <div class="col-xs-12">
                                        <?php																				
											$data = array(
												'name' => 'password',
												'id' => 'password',
												'placeholder' => 'Password',
												'class' => 'form-control',
												'max' => 50,
												'value' => set_value('password')
											);
											echo form_password($data);
										?>
                                    </div>                                    
                                    <div class="col-sm-12">
                                        <?php																				
											$data = array(
												'name' => 'login',
												'id' => 'login',
												'class' => 'btn btn-info',
												'value' => 'true',
												'type' => 'submit',
												'content' => 'LogIn'
											);
											echo form_button($data);
										?>
                                    </div>
                                </div>
                            <?php								
								echo form_close();
							?>

                        </div>
                        <!--/row-->

                        <!--/ login-->
						
                        <div class="break"></div>