<?php include('include/connection.php')?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Smart Learning</title>
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary JavaScript plugins) -->
        <script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
        <!-- Custom Theme files -->
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <!-- Custom Theme files -->
        <!--//theme-style-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Hope Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){		
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                /*
                        var defaults = {
                        containerID: 'toTop', // fading element id
                        containerHoverID: 'toTopHover', // fading element hover id
                        scrollSpeed: 1200,
                        easingType: 'linear' 
                        };
                 */
                $().UItoTop({ easingType: 'easeOutQuart' });
            });
        </script>
    </head>
    <body>
        <!-- header -->
        <?php include('header.php') ?>
        <!-- header -->
        <!-- our -->
        <div class="contact">
	<div class="container">
		<h3>Contact</h3>
		<div class="map">
			<b>Hamza Usmani</br>Address=Scriet,ccsu meerut 25004</br>mobile number=+91 8354885643			</br></br>
			Prashant Kumar</br>Address=scriet</br>mobile number=+91 xxxxxxxxxx </b>
		</div>
		<div class="co-ntact">
					<form method="post" action="contact-post.html">
						<div class="to">
							<input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
							<input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
							<input type="text" class="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
						</div>
						<div class="text">
						   <textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message:</textarea>
						   <div class="form-submit">
						   <input name="submit" type="submit" id="submit" value="Submit"><br>
						   </div>
						</div>
						<div class="clearfix"></div>
					</form>
		</div>
	</div>
</div>
        <!-- our -->
        <!-- footer -->
        <?php include('footer.php') ?>
        <!-- footer -->
        <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 0;"></span> <span id="toTopHover" style="opacity: 0;"> </span></a>
    </body>
</html>