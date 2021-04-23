<style>
#color {
    text-indent: 0.01px;
    text-overflow: '';
    width: 70%;
    height: 25%;
    line-height: 25px;	
}
#color option {		
	float: left;
	color: #FFF;
	width: 10%;    
	text-align: center;
	border-radius: 3px;
	margin: 2px;
	padding: 7px;	
}
</style>
				<!-- main -->

                <div id="main" class="column col-sm-9 col-xs-12" >

                    <div class="full col-sm-9">

                        <!--welcome-->
                            <div class="col-sm-12">
                                <div class="wow fadeInDown">
                                        <?php
											//echo $admessage;
											echo validation_errors();
											echo form_open_multipart('admin/setsite');
										?>
										<div class="row">
										<?php
											$data = array(
												'name' => 'title',
												'id' => 'title',
												'placeholder' => 'Site Title',
												'class' => 'form-control',
												'max' => 100,
												'value' => $site[0]->title
											);
											echo form_input($data);
										?>
										</div>
										<div class="row">
										<?php
											$data = array(
												'name' => 'slogan',
												'id' => 'slogan',
												'placeholder' => 'Slogan',
												'class' => 'form-control',
												'max' => 255,
												'value' => $site[0]->slogan
											);
											echo form_input($data);
										?>
										</div>
										<div class="row">
										<?php
											echo form_label('Logo', 'logo');
											if($site[0]->logo != '') { ?><img src="<?php echo base_url(); ?>simpletheme/img/<?php echo $site[0]->logo; ?>" class="img-responsive" style="max-width:75px;max-height:75px;"><?php } ?>
										<?php
											$data = array(
												'name'  => 'logo',
												'id'  => 'logo',
												'class' => 'form-control',
												'value' => ''
											);
											echo form_upload($data);
										?>										
										</div>
										<div class="row">
										<?php
											echo form_label('BackGround Image', 'bgimg');
											if($site[0]->bgimg != '') { ?><img src="<?php echo base_url(); ?>simpletheme/img/<?php echo $site[0]->bgimg; ?>" class="img-responsive" style="max-width:75px;max-height:75px;"><?php } ?>
										<?php
											$data = array(
												'name'  => 'bgimg',
												'id'  => 'bgimg',
												'class' => 'form-control',
												'value' => ''
											);
											echo form_upload($data);
										?>										
										</div>
										<div class="row">
										<?php
											echo form_label('Theme Color', 'themecolor');
											if($site[0]->color != '')
											{
												$colorcode = $this->Admin_mo->getwhere('colors', array('id'=>$site[0]->color));
												?><div class="img-responsive" style="background-color:<?php echo $colorcode[0]->code; ?>;width:75px;height:75px;border-radius:10px;"></div><?php
											}
										?>
											<select name="color" id="color" class="form-control" multiple>
										<?php
											foreach($colors as $key => $value)
											{
												$colorarr[$value->id] = $value->color;
												?><option value="<?php echo $value->id; ?>" style="background-color:<?php echo $value->code; ?>;"></option><?php
											}
										?>
											</select>
										<?php
											/*$data = array(												
												'id' => 'color',
												'class' => 'form-control',
												'style' => 'background-color:'.$value->code,
											);
											echo form_dropdown('color', $colorarr, '', $data);*/
										?>										
										</div>
										<div class="row">
										<?php
											$data = array(
												'name' => 'savesite',
												'id' => 'savesite',
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
                        <!--End welcome-->
                        <div class="break"></div>                                  					
