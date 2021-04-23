                        <!-- Button trigger modal -->

                    </div><!-- /col-9 -->
                </div><!-- /padding -->
                <!--</div>-->

                <!-- /main -->

                <!--</div>-->
            </div>
        </div>

        <!--my scripts-->

        <!--wow animation--> 
        <script src="js/wow.js"></script>
        <script>
            var wow = new WOW(
                    {
                        boxClass: 'wow', // animated element css class (default is wow)
                        animateClass: 'animated', // animation css class (default is animated)
                        offset: 0, // distance to the element when triggering the animation (default is 0)
                        mobile: true        // trigger animations on mobile devices (true is default)
                    }
            );
            wow.init();
        </script>

        <!-- Retina for  high-resolution image -->
        <script type="text/javascript" src="/scripts/retina.js"></script> 


        <script type="text/javascript">


            /* google maps */

            google.maps.visualRefresh = true;
            var map;
            function initialize() {
                var geocoder = new google.maps.Geocoder();
                var address = $('#map-input').text(); /* change the map-input to your address */
                var mapOptions = {
                    zoom: 15,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    scrollwheel: false

                };
                map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
                if (geocoder) {
                    geocoder.geocode({'address': address}, function(results, status) {
                        if (status == google.maps.GeocoderStatus.OK) {
                            if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
                                map.setCenter(results[0].geometry.location);
                                var infowindow = new google.maps.InfoWindow(
                                        {
                                            content: address,
                                            map: map,
                                            position: results[0].geometry.location,
                                        });
                                var marker = new google.maps.Marker({
                                    position: results[0].geometry.location,
                                    map: map,
                                    title: address
                                });
                            } else {
                                alert("No results found");
                            }
                        }
                    });
                }
            }
            google.maps.event.addDomListener(window, 'load', initialize);
            /* end google maps */
        </script>


        <!--end wow animation-->



        <!-- scroll to scripts -->
        <script type="text/javascript">
            jQuery(function($) {
                /**
                 * Demo binding and preparation, no need to read this part
                 */
                //borrowed from jQuery easing plugin
                //http://gsgd.co.uk/sandbox/jquery.easing.php
                $.easing.elasout = function(x, t, b, c, d) {
                    var s = 1.70158;
                    var p = 0;
                    var a = c;
                    if (t == 0)
                        return b;
                    if ((t /= d) == 1)
                        return b + c;
                    if (!p)
                        p = d * .3;
                    if (a < Math.abs(c)) {
                        a = c;
                        var s = p / 4;
                    }
                    else
                        var s = p / (2 * Math.PI) * Math.asin(c / a);
                    return a * Math.pow(2, -10 * t) * Math.sin((t * d - s) * (2 * Math.PI) / p) + c + b;
                };
                $('a.back').click(function() {
                    $(this).parents('div.pane').scrollTo(0, 800, {queue: true});
                    $(this).parents('div.section').find('span.message').text(this.title);
                    return false;
                });
                //just for the example, to stop the click on the links.
                $('ul.links').click(function(e) {
                    e.preventDefault();
                    var link = e.target;
                    link.blur();
                    if (link.title)
                        $(this).parent().find('span.message').text(link.title);
                });
                // This one is important, many browsers don't reset scroll on refreshes
                // Reset all scrollable panes to (0,0)
                $('div.pane').scrollTo(0);
                // Reset the screen to (0,0)
                $.scrollTo(0);
                // TOC, shows how to scroll the whole window
                $('#nav a , #welcome a').click(function() {//$.scrollTo works EXACTLY the same way, but scrolls the whole screen
                    $.scrollTo(this.hash, 1500);
                    $(this.hash).find('span.message').text(this.title);
                    return false;
                });
                //                $('#welcome a').click(function() {//$.scrollTo works EXACTLY the same way, but scrolls the whole screen
                //                    $.scrollTo(this.hash, 1500);
                //                    $(this.hash).find('span.message').text(this.title);
                //                    return false;
                //                });

            });</script>

        <!--end scroll to scripts-->

        <!--blog tap -->
        <script>
            $('#blog a').click(function(e) {
                e.preventDefault();
                $(this).tab('show');
            })
        </script>

        <!--/blog tab-->


        <!--end my scripts-->



    </body>
</html>