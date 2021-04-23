				<script>
			        window.onload = function()
					{
						document.getElementById("sidebar").style.backgroundImage = 'url(<?php echo base_url(); ?>simpletheme/img/<?php echo $site[0]->bgimg; ?>)';
					}
				</script>
				<!-- sidebar -->
                <div class="container">
                    <div class="row">
                        <div id="sidebar" class="column col-sm-3 col-xs-12 " >
                            <div id="logo" class="row  animated fadeInDown">
                                <a class="logo" href="#">Simple</a>
                            </div>
                            <nav id="nav" class=" navbar    animated fadeInLeft">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                        <!--<span class="sr-only">Toggle navigation</span>-->
                                        <span class="fa fa-4x fa-list"></span>

                                    </button>
                                </div>
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav links">

                                        <li class="active">
                                            <a href="#links">Links</a>
                                        </li>
										<?php if(!empty($links)) { ?>
											<?php foreach($links as $link) { ?>
												<li>
													<a href="#<?php echo $link->link; ?>"><?php echo $link->title; ?></a>
												</li>
											<?php } ?>
                                        <?php } ?>										
                                    </ul>
									<ul class="nav">
										<li>
											<a href="<?php echo base_url(); ?>admin/logout">LogOut</a>
                                        </li>
                                    </ul>
                                    <form class="form" role="search">
                                        <div class="input-group">
                                            <input type="text" class="form-control search-box" placeholder="Search" name="srch-term" id="srch-term">
                                            <div class="input-group-btn">
                                                <button  type="submit" class="btn search-box" ><i class="glyphicon glyphicon-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>								
                            </nav>
                        </div>
                    </div>
                </div>				
                <!-- /sidebar -->