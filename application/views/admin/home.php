						<!-- home -->
                        <div  id='home' class="  fadeInUp ">
                            <div  class="col-sm-12">   
                                <div class=" header text-center ">
                                    <?php echo $link->title; ?>
                                </div> 
                            </div>
							
							<!--intro -->
							<div id="intro" class="col-sm-12 wow fadeIn"  data-wow-duration="2s" >
								<h1 class=" intro-head text-center"><?php echo $link->subject; ?></h1>
								<div  class="intro-text text-center margin-bottom">
									<?php echo $link->body; ?>
								</div>
							</div>
							<!--end intro -->

							<?php if(count($home) < 3 || isset($home_edit)) { ?>
                            <div class="row">
							<?php
								echo $admessage;
								echo validation_errors();
								echo form_open_multipart('admin/sethome');
							?>
                                <div class="col-sm-12">
                                    <div class="col-xs-4">
										<?php
											if(isset($home_edit[0]->title)) $title = $home_edit[0]->title;
											else $title = set_value('title');
											$data = array(
												'name' => 'title',
												'id' => 'title',
												'placeholder' => 'Title',
												'class' => 'form-control',
												'max' => 100,
												'value' => $title
											);
											echo form_input($data);
										?>
                                    </div>
									<div class="col-xs-4">
                                        <?php
											if(isset($home_edit[0]->description)) $description = $home_edit[0]->description;
											else $description = set_value('description');
											$data = array(
												'name' => 'description',
												'id' => 'description',
												'placeholder' => 'Description',
												'class' => 'form-control',
												'rows' => 5,
												'value' => $description
											);
											echo form_textarea($data);
										?>
                                    </div>
									<div class="col-sm-3">
										<?php
											if(isset($home_edit[0]->image) && $home_edit[0]->image != '')
											{ 
												?><img src="<?php echo base_url(); ?>home/<?php echo $home_edit[0]->image; ?>" class="img-responsive" style="max-width:150px;max-height:150px;"/><?php
												$data = array(
													'oldimage'  => $home_edit[0]->image
												);
												echo form_hidden($data);
											}
											$data = array(
												'name'  => 'file',
												'id'  => 'file',
												'value' => ''
											);
											echo form_upload($data);
										?>
									</div>
									<div class="col-sm-2">
                                        <?php
											$data = array(
												'linkid'  => $link->id
											);
											echo form_hidden($data);
											
											if(isset($home_edit[0]->id))
											{
												$data = array(
													'id'  => $home_edit[0]->id
												);
												echo form_hidden($data);
											}
											
											$data = array(
												'name' => 'savehome',
												'id' => 'savehome',
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
							<?php } ?>
                        </div>
						
						<div id="intro" class="col-sm-12 wow fadeIn"  data-wow-duration="2s" >
                            <h1 class=" intro-head text-center"> <?php echo $link->title; ?>  </h1>
                            <div  class="intro-text text-center margin-bottom">
								<?php if(!empty($home)) { ?>
								<div class="table-responsive">
								<table class="table">
									<tr>
										<th>Title</th>
										<th>Description</th>
										<th>Image</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
									<?php foreach($home as $slide) { ?>
									<tr>
										<td><?php echo $slide->title; ?></td>
										<td><?php echo $slide->description; ?></td>
										<td><img src="<?php echo base_url(); ?>home/<?php echo $slide->image; ?>" class="img-responsive" style="max-width:150px;max-height:150px;"/></td>
										<td><a href="<?php echo base_url(); ?>admin/edit/home/<?php echo $link->id; ?>/<?php echo $slide->id; ?>/<?php echo ''; ?>"><i class="glyphicon glyphicon-edit"></i></a></td>
										<td><a href="<?php echo base_url(); ?>admin/del/home/<?php echo $slide->id; ?>/<?php echo $slide->image; ?>"><i class="glyphicon glyphicon-remove"></i></a></td>
									</tr>
									<?php } ?>
								</table>
								</div>
								<?php } else echo 'There are no '.$link->title; ?>
                            </div>
                        </div>
						
                        <!--end home--> 
                        <div class="break"> </div>