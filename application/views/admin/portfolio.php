						<!--portfolio--> 
                        <div id="pricing"  class="row">
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
                            <div class="row">
                            <?php
								echo $admessage;
								echo validation_errors();
								echo form_open_multipart('admin/setportfolio');
							?>
                                <div class="col-sm-12">

                                    <div class="col-xs-4">
										<?php
											if(isset($portfolio_edit[0]->title)) $title = $portfolio_edit[0]->title;
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
                                    <div class="col-xs-3">
                                        <?php
											if(isset($portfolio_edit[0]->description)) $description = $portfolio_edit[0]->description;
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
											if(isset($portfolio_edit[0]->image) && $portfolio_edit[0]->image != '')
											{ 
												?><img src="<?php echo base_url(); ?>portfolio/<?php echo $portfolio_edit[0]->image; ?>" class="img-responsive" style="max-width:150px;max-height:150px;"/><?php
												$data = array(
													'oldimage'  => $portfolio_edit[0]->image
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
											
											if(isset($ourteam_edit[0]->id))
											{
												$data = array(
													'id'  => $ourteam_edit[0]->id
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
                            <h1 class=" intro-head text-center"> <?php echo $link->title; ?>  </h1>
                            <div  class="intro-text text-center margin-bottom">
								<?php if(!empty($portfolio)) { ?>
								<div class="table-responsive">
								<table class="table">
									<tr>
										<th>Title</th>
										<th>Description</th>
										<th>Image</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
									<?php foreach($portfolio as $portfol) { ?>
									<tr>
										<td><?php echo $portfol->title; ?></td>
										<td><?php echo $portfol->description; ?></td>
										<td><img src="<?php echo base_url(); ?>portfolio/<?php echo $portfol->image; ?>" class="img-responsive" style="max-width:150px;max-height:150px;"/></td>
										<td><a href="<?php echo base_url(); ?>admin/edit/portfolio/<?php echo $link->id; ?>/<?php echo $portfol->id; ?>/<?php echo ''; ?>"><i class="glyphicon glyphicon-edit"></i></a></td>
										<td><a href="<?php echo base_url(); ?>admin/del/portfolio/<?php echo $portfol->id; ?>/<?php echo $portfol->image; ?>"><i class="glyphicon glyphicon-remove"></i></a></td>
									</tr>
									<?php } ?>
								</table>
								</div>
								<?php } else echo 'There are no '.$link->title; ?>
                            </div>
                        </div>

                        <!--/portfolio-->
                        <div class="break"></div>