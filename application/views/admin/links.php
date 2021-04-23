						<!-- links -->
                        <div id='pricing' class="  fadeInUp ">
                            <div  class="col-sm-12">   
                                <div class=" header text-center ">
                                    Links 
                                </div> 
                            </div>

                            <div class="row">    
                            <hr>
							<?php
								echo $admessage;
								echo validation_errors();
								echo form_open('admin/setlink');
							?>
                                <div class="col-sm-12">

                                    <div class="col-xs-3">
										<?php										
											$data = array(
												'name' => 'title',
												'id' => 'title',
												'placeholder' => 'Title',
												'class' => 'form-control',
												'max' => 50,
												'value' => set_value('title')
											);
											echo form_input($data);
										?>
                                    </div>
                                    <div class="col-xs-4">
                                        <?php																				
											$data = array(
												'name' => 'link',
												'id' => 'link',
												'placeholder' => 'Link',
												'class' => 'form-control',
												'max' => 50,
												'value' => set_value('link')
											);
											echo form_input($data);
										?>
                                    </div>
									<div class="col-xs-3">
										<?php										
											$data = array(
												'name' => 'subject',
												'id' => 'subject',
												'placeholder' => 'Subject',
												'class' => 'form-control',
												'max' => 100,
												'value' => set_value('subject')
											);
											echo form_input($data);
										?>
                                    </div>
									<div class="col-xs-4">
                                        <?php											
											$data = array(
												'name' => 'body',
												'id' => 'body',
												'placeholder' => 'Body',
												'class' => 'form-control',
												'rows' => 5,
												'value' => set_value('body')
											);
											echo form_textarea($data);
										?>
                                    </div>
									<div class="col-sm-3">
										<?php
											foreach($types as $type)
											{
												$ourtypes[$type->id] = $type->name;
											}											
											echo form_dropdown('type', $ourtypes, array(), 'class="form-control"');
										?>
									</div>									
                                    <div class="col-sm-2">
                                        <?php																				
											$data = array(
												'name' => 'page',
												'id' => 'page',
												'class' => 'btn btn-info',
												'value' => 'true',
												'type' => 'submit',
												'content' => 'Save'
											);
											echo form_button($data);
										?>
                                    </div>
                                </div>
                            <?php								
								echo form_close();
							?>
                            </div>
                        </div>
						<!--intro -->
                        <div id="intro" class="col-sm-12 wow fadeIn"  data-wow-duration="2s" >
                            <h1 class=" intro-head text-center"> Links  </h1>
                            <div  class="intro-text text-center margin-bottom">
								<?php if(!empty($links)) { ?>
								<table class="table">
									<tr>
										<th>Title</th>
										<th>Link</th>
										<th>Subject</th>
										<th>Body</th>
										<th>Type</th>
										<th>Delete</th>
									</tr>
									<?php foreach($links as $link) { ?>
									<tr>
										<td><?php echo $link->title; ?></td>
										<td><?php echo $link->link; ?></td>
										<td><?php echo $link->subject; ?></td>
										<td><?php echo $link->body; ?></td>
										<td>
											<?php												
												$typename = $this->Admin_mo->getwhere('types', array('id'=>$link->type));
												echo $typename[0]->name;
											?>
										</td>
										<td><a href="<?php echo base_url(); ?>admin/del/links/<?php echo $link->id; ?>/<?php echo ''; ?>"><i class="glyphicon glyphicon-remove"></i></a></td>
									</tr>
									<?php } ?>
								</table>
								<?php } else echo 'There are no links'; ?>
                            </div>
                        </div>
                        <!--end intro -->
						<!--end home--> 
                        <div class="break"> </div>