						<script language="javascript">
							var i = 1;
							function addFeatures()
							{
								features.innerHTML = features.innerHTML +"<tr><td><input type='text' class='form-control' placeholder='Description "+i+"' name='descrip["+i+"]'></td><td><input type='text' class='form-control' placeholder='feature "+i+"' name='feature["+i+"]'></td></tr>";
								i++;
							}
						</script>
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
							<?php
								echo $admessage;
								echo validation_errors();
								echo form_open('admin/setpricing');
							?>
                            <div class="row">                             
                                <div class="col-sm-12">

                                    <div class="col-xs-5">
										<?php
											if(isset($pricing_edit[0]->title)) $title = $pricing_edit[0]->title;
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
                                    <div class="col-xs-5">
                                        <?php
											if(isset($pricing_edit[0]->description)) $description = $pricing_edit[0]->description;
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
								</div>
							</div>
							<div class="row">
                                <div class="col-sm-12">
									<div class="col-sm-3">
										<?php
											$data = array(
												'name' => 'addfeature',
												'id' => 'addfeature',
												'value' => 'true',
												'type' => 'button',
												'content' => 'Feature'
											);
											$js = 'class="btn btn-info" onClick="addFeatures()"';
											echo form_button('addfeature', 'Feature', $js);
										?>
									</div>									
								</div>
							</div>
							<div class="row">
								<div class="col-sm-8 col-sm-offset-2">
									<table id="features"></table>
								</div>
							</div>
							<div class="row">
                                <div class="col-sm-12">									
                                    <div class="col-sm-2">
                                        <?php
											$data = array(
												'linkid'  => $link->id
											);
											echo form_hidden($data);
											
											if(isset($pricing_edit[0]->id))
											{
												$data = array(
													'id'  => $pricing_edit[0]->id
												);
												echo form_hidden($data);
											}
											
											$data = array(
												'name' => 'saveprice',
												'id' => 'saveprice',
												'class' => 'btn btn-info',
												'value' => 'true',
												'type' => 'submit',
												'content' => 'Save'
											);
											echo form_button($data);
										?>
                                    </div>
                                </div>                            
                            </div>
							<?php								
								echo form_close();
							?>
                        </div>
						
						<div id="intro" class="col-sm-12 wow fadeIn"  data-wow-duration="2s" >
                            <h1 class=" intro-head text-center"> <?php echo $link->title.'s'; ?>  </h1>
                            <div  class="intro-text text-center margin-bottom">
								<?php if(!empty($pricing)) { ?>
								<div class="table-responsive">
								<table class="table">
									<tr>
										<th>Title</th>
										<th>Description</th>
										<th>Features</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
									<?php $j=1; foreach($pricing as $price) { ?>
									<tr>
										<td><?php echo $price->title; ?></td>
										<td><?php echo $price->description; ?></td>
										<td>
										<?php
											$features = $this->Admin_mo->getwhere('pricing_features', array('pricingid'=>$price->id));
											if(!empty($features))
											{
										?>
											<a href="#price<?php print($j); ?>" data-toggle="modal" data-target="#price<?php print($j); ?>">Details</a>
											<div id="price<?php print($j); ?>" tabindex="-1" class="modal fade" role="dialog" aria-hidden="true">											
												<div class="modal-dialog">
													<!-- Modal content-->
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal">&times;</button>
															<h5 class="modal-title">
																<?php echo $price->title; ?>
																<?php echo '<br>'; ?>
																<?php echo $price->description; ?>
															</h5>
														</div>
														<div class="modal-body">
															<?php for($i=0;$i<count($features);$i++) { ?>																
																<h4><?php echo $features[$i]->descrip.'<br>'; ?></h4>
																<p><?php echo $features[$i]->feature; ?></p>
															<?php } ?>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
														</div>
													</div>
												</div>
											</div>
										<?php } ?>
										</td>
										<td><a href="<?php echo base_url(); ?>admin/edit/pricing/<?php echo $link->id; ?>/<?php echo $price->id; ?>/<?php echo ''; ?>"><i class="glyphicon glyphicon-edit"></i></a></td>
										<td><a href="<?php echo base_url(); ?>admin/del/pricing/<?php echo $price->id; ?>/<?php echo ''; ?>"><i class="glyphicon glyphicon-remove"></i></a></td>
									</tr>
									<?php $j++; } ?>
								</table>
								</div>
								<?php } else echo 'There are no '.$link->title.'s'; ?>
                            </div>
                        </div>
						
                        <!--/pricing-->
                        <div class="break"></div>