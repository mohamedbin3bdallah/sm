
                        <!--service -->
                        <div id="pricing" class="row">
							<div class="col-sm-12 ">
                                <div class="header text-center margin-bottom ">
                                    <?php echo $link->title; ?> 
                                </div> 
                            </div>
							<div class="wow fadeIn" data-wow-duration="2s">
                                <h3 class="text-center "><?php echo $link->subject ; ?></h3>

                                <p class="text-center margin-bottom"><?php echo $link->body ; ?></p>
                            </div>
							
                            <div class="row">
                            <?php
								echo $admessage;
								echo validation_errors();
								echo form_open('admin/setservice');
							?>
                                <div class="col-sm-12">

                                    <div class="col-xs-4">
										<?php
											if(isset($services_edit[0]->title)) $title = $services_edit[0]->title;
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
											if(isset($services_edit[0]->description)) $description = $services_edit[0]->description;
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
									<div class="col-sm-2">
										<?php
											foreach($icons as $icon)
											{
												$ouricons[$icon->id] = $icon->name;
											}
											if(isset($services_edit[0]->icon)) $selected = array($services_edit[0]->icon);
											else $selected = array();
											echo form_dropdown('icon', $ouricons, $selected, 'class="form-control"');
										?>
									</div>									
                                    <div class="col-sm-2">
                                        <?php
											$data = array(
												'linkid'  => $link->id
											);
											echo form_hidden($data);											
											
											if(isset($services_edit[0]->id))
											{
												$data = array(
													'id'  => $services_edit[0]->id
												);
												echo form_hidden($data);
											}
											
											$data = array(
												'name' => 'saveservice',
												'id' => 'saveservice',
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
						
						<div id="intro" class="col-sm-12 wow fadeIn"  data-wow-duration="2s" >
                            <h1 class=" intro-head text-center"> <?php echo $link->title.'s'; ?>  </h1>
                            <div  class="intro-text text-center margin-bottom">
								<?php if(!empty($services)) { ?>
								<div class="table-responsive">
								<table class="table">
									<tr>
										<th>Title</th>
										<th>Description</th>
										<th>Icon</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
									<?php foreach($services as $service) { ?>
									<tr>
										<td><?php echo $service->title; ?></td>
										<td><?php echo $service->description; ?></td>
										<td>
											<?php												
												$typename = $this->Admin_mo->getwhere('icons', array('id'=>$service->icon));
												echo $typename[0]->name;
											?>
										</td>
										<td><a href="<?php echo base_url(); ?>admin/edit/services/<?php echo $link->id; ?>/<?php echo $service->id; ?>/<?php echo ''; ?>"><i class="glyphicon glyphicon-edit"></i></a></td>
										<td><a href="<?php echo base_url(); ?>admin/del/services/<?php echo $service->id; ?>/<?php echo ''; ?>"><i class="glyphicon glyphicon-remove"></i></a></td>
									</tr>
									<?php } ?>
								</table>
								</div>
								<?php } else echo 'There are no '.$link->title.'s'; ?>
                            </div>
                        </div>

                        <!--/service-->
                        <div class="break"></div>