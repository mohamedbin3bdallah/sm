						<!--portfolio-->
                        <div id="portfolio"  class="row">
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
                                <!--2 columns-->
								<?php if(!empty($portfolio)) { ?>
								<?php foreach($portfolio as $portfol) { ?>
                                <div class=" col-sm-6 col-xs-6  col-xs-12 wow fadeIn" data-wow-duration="2s">
                                    <div class="view view-first" >
                                        <img src="<?php echo base_url(); ?>portfolio/<?php echo $portfol->image; ?>" class=" img-responsive" />
                                        <a  href="<?php echo base_url(); ?>portfolio/<?php echo $portfol->image; ?>"  class="mask example-image-link" data-lightbox="example-set">
                                            <h2><?php echo $portfol->title; ?></h2>
                                            <p><?php echo $portfol->description; ?></p>
                                            <i class="info fa fa-3x fa-search-plus"></i>
                                        </a>
                                    </div>
                                </div>
								<?php } } else echo 'There are no '.$link->title.'s'; ?>
                                
								<!--3 columns-->
                                <!-- <div class=" col-lg-4 col-sm-6 col-xs-6 wow fadeIn" data-wow-duration="2s">
                                    <div class="view view-first" >
                                        <img src="img/city3.jpg" class="  img-responsive" />
                                        <a href="img/city3.jpg" class="mask example-image-link" data-lightbox="example-set">
                                            <h2>Hover Style #1</h2>
                                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                                            <i class="info fa fa-3x fa-search-plus"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class=" col-lg-4 col-sm-6 col-xs-6 wow fadeIn" data-wow-duration="2s">
                                    <div class="view view-first" >
                                        <img src="img/summer-to-fall.jpg" class="  img-responsive" />
                                        <a  href="img/summer-to-fall.jpg" class="mask example-image-link" data-lightbox="example-set">
                                            <h2>Hover Style #1</h2>
                                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                                            <i class="info fa fa-3x fa-search-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 col-xs-6 wow fadeIn" data-wow-duration="2s">
                                    <div class="view view-first" >
                                        <img src="img/city4.jpg" class="  img-responsive" />
                                        <a  href="img/city4.jpg" class="mask example-image-link" data-lightbox="example-set">
                                            <h2>Hover Style #1</h2>
                                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                                            <i class="info fa fa-3x fa-search-plus"></i>
                                        </a>
                                    </div>
                                </div> -->
                                
								<!--4 columns-->
                                <!-- <div class="last-column-gallery col-lg-3 col-sm-6 col-xs-6  wow fadeIn" data-wow-duration="2s">
                                    <div class="view view-first" >
                                        <img src="img/city3.jpg" class="  img-responsive" />
                                        <a  href="img/city3.jpg" class="mask example-image-link" data-lightbox="example-set">
                                            <h2>Hover Style #1</h2>
                                            <p>A wonderful serenity has taken possession of my entire soul</p>
                                            <i class="info fa fa-3x fa-search-plus"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="last-column-gallery col-lg-3 col-sm-6 col-xs-6  wow fadeIn" data-wow-duration="2s">
                                    <div class="view view-first" >
                                        <img src="img/city4.jpg" class="  img-responsive" />
                                        <a  href="img/city4.jpg" class="mask example-image-link" data-lightbox="example-set">
                                            <h2>Hover Style #1</h2>
                                            <p>A wonderful serenity has taken possession of my entire soul</p>
                                            <i class="info fa fa-3x fa-search-plus"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="last-column-gallery col-lg-3 col-sm-6 col-xs-6  wow fadeIn" data-wow-duration="2s">
                                    <div class="view view-first" >
                                        <img src="img/fading_silhouette_____Paris_by_denkyo.jpg" class="  img-responsive" />
                                        <a  href="img/fading_silhouette_____Paris_by_denkyo.jpg" class="mask example-image-link" data-lightbox="example-set">
                                            <h2>Hover Style #1</h2>
                                            <p>A wonderful serenity has taken possession of my entire soul</p>
                                            <i class="info fa fa-3x fa-search-plus"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="last-column-gallery col-lg-3 col-sm-6 col-xs-6  wow fadeIn" data-wow-duration="2s">
                                    <div class="view view-first" >
                                        <img src="img/golden.jpg" class="  img-responsive" />
                                        <a  href="img/golden.jpg" class="mask example-image-link" data-lightbox="example-set">
                                            <h2>Hover Style #1</h2>
                                            <p>A wonderful serenity has taken possession of my entire soul</p>
                                            <i class="info fa fa-3x fa-search-plus"></i>
                                        </a>
                                    </div>
                                </div> -->
                            </div>
                        </div>


                        <!--/portfolio-->
                        <div class="break"></div>