            <!-- Footer Start -->
            
            <div class="footer">
                <div class="container">    
                    <!-- Social Media -->
                    <div class="social">
                        <a href="https://pt-br.facebook.com/soujava" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/soujava" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="https://plus.google.com/u/0/102674160374374284719/" class="google-plus"><i class="fa fa-google-plus"></i></a>
                    </div>
                    <!-- Copy right -->
                    <div class="copy-right">
                        <p>&copy; Copyright 2014 <a href="#">Café Brasil 2015</a></p>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
            
            <!-- Scroll to top -->
            <span class="scroll-to-top"><a href="#"><i class="fa fa-chevron-up"></i></a></span> 
			
        </div>
        <!-- Wrapper End -->
        
        <!-- Javascript files -->
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
		
        <!-- Bootstrap JS -->
        <script src="js/bootstrap.min.js"></script>
		
        <!-- Jquery for Countdown  -->
        <script type="text/javascript" src="js/jquery.countdown.min.js"></script>
		
        <!-- jQuery prettyPhoto & Isotope -->
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/isotope.js"></script>
        <!-- Masonry JS -->
        <script src="js/masonry.pkgd.min.js"></script>
        <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
        <script type="text/javascript" src="js/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
        <!-- jQuery flot -->
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
        <script src="js/jquery.flot.min.js"></script>     
        <script src="js/jquery.flot.resize.min.js"></script>
		
        <!-- Style Switcher JS -->
        <script type="text/javascript" src="js/jquery.style-switcher.js"></script>
		
        <!-- Knob JS -->
        <script src="js/jquery.knob.js"></script>
		
		
        <!-- Parallax JS --> 
        <script src="js/jquery.parallax-1.1.3.js"></script>
		
        <!-- Count To JS  -->
        <script src="js/jquery.countTo.js"></script>
        <!-- WayPoints JS -->
        <script src="js/waypoints.min.js"></script>
        <!-- GMap JS -->
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript" src="js/jquery.ui.map.min.js"></script>
        <script type="text/javascript" src="js/jquery.ui.map.overlays.min.js"></script>
        <!-- Respond JS for IE8 -->
        <script src="js/respond.min.js"></script>
        <!-- HTML5 Support for IE -->
        <script src="js/html5shiv.js"></script>
        <!-- This Page Java Script -->
        <script type="text/javascript">
            
            /* ******************************************** */
            /*  JS for Revolution slider  */
            /* ******************************************** */

            var slider;

            jQuery(document).ready(function() {

               slider = jQuery('.banner').revolution(
               {
                    delay:8000,
                    startwidth:1170,
                    startheight:550,
                    
                    hideThumbs:10,
                    
                    navigationType:"none",    
                    
                    
                    hideArrowsOnMobile:"on",
                    
                    touchenabled:"on",
                    onHoverStop:"on",
                    
                    navOffsetHorizontal:0,
                    navOffsetVertical:20,
                    
                    stopAtSlide:-1,
                    stopAfterLoops:-1,

                    shadow:0,
                    
                    fullWidth:"on",
                    fullScreen:"off"
                });
            });
        
            /* ******************************************** */
            /* plot js */
            /* *************************************** */  
/*        
            $(function() {
                // Chart data #1 
                var d1 = [[0, 0], [1, 1.5], [2, 3.2], [3, 4.5],[4, 5.9], [5, 5], [6, 5.3], [7, 6],[8, 6.3], [9, 7], [10, 7.5], [11, 8]];

                var options = {
                    series: {
                        lines: {
                            show: true, fill: true, lineWidth:1, fillColor: { colors: [ { opacity: 0.1 }, { opacity: 0.35}] }
                        },
                        points: {
                            show: true, fill: true, lineWidth:2, radius:3, fillColor: "#fff"
                        },
                        shadowSize: 0
                    },
                    colors :["#57d6e9"],
                    grid: {
                        hoverable: true, color: "#aaa", backgroundColor:"#fff" ,borderWidth:1, borderColor:"#eee", labelMargin:10
                    },
                    xaxis: {
                        ticks: 6,
                        font: {
                            size: 12,
                            color: ["#989898"]
                        }
                    },
                    yaxis: {
                        ticks: 3,
                        font: {
                            size: 12,
                            color: ["#989898"]
                        }
                    }, 
                    legend: {
                        backgroundOpacity:0,
                        noColumns:2,
                        labelBoxBorderColor: "#fff"
                    }
                };
            
                $("<div id='tooltip'></div>").css({
                    position: "absolute",
                    display: "none",
                    "border-radius":"5px",
                    padding: "5px 5px",
                    color:"#999",
                    "font-size":"11px",
                    "background-color": "#fff",
                    "border":"1px solid #ccc"
                }).appendTo("body");

                $(".plot-chart").bind("plothover", function (event, pos, item) {
                    if (item) {
                        var x = item.datapoint[0].toFixed(2),
                            y = item.datapoint[1].toFixed(2);

                    $("#tooltip").html(x + ", " + y)
                        .css({top: item.pageY+5, left: item.pageX+5})
                        .fadeIn(200);
                    } else {
                        $("#tooltip").hide();
                    }
                });

                $.plot(".plot-chart", [ {data: d1,  label: "Revenue"} ], options);
            });
*/          
            /* Code for GMap */
			$('#map').gmap({ 'center': '-23.5660698, -46.6429271', 'zoom': 18, 'scrollwheel': false }).bind('init', function() {	
				$('#map').gmap('loadFusion', { 'query': { 'from': 297050 } } ).gmap('loadFusion', { query: "SELECT * FROM 297050 WHERE ST_INTERSECTS(Address, CIRCLE(LATLNG(-23.5660698,-46.6429271),20000))"}, 297050).gmap('get', 'overlays > FusionTablesLayer').setMap(null);
			});
	
            
            // code here...
            /* JS for Experience */
            $(".knob").knob({
                'min':0,
                'max':100,
                'readOnly': true,
                'dynamicDraw': true,
                'thickness': 0.2,
            });  
        </script>
        <!-- Custom JS -->
        <script src="js/custom.js"></script>
        
    </body>    
</html>
