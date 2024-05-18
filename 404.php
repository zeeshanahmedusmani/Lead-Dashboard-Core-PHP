<!DOCTYPE html>
<html lang="en">
  <?php
    include 'inc/head.php';
  ?>
<body>

<?php
    include 'inc/header.php';
  ?>

                                                    
<!--STYLE START-->
    <style>
        .error-sec{
            height: 600px;
            display: flex;
            align-items: center;
            justify-content: space-around;
        }
        .error-sec .error-img img{
            width: 100%;
            display: block;
            object-fit: cover;
        }
        .error-sec .error-img,
        .error-sec .error-content {
            flex=1 ;
        }
        .error-sec .error-content h2 {
            font-size: 200px;
            line-height: 140px;
            font-weight: 900;
        }
        .error-sec .error-content h4{
             font-size: 50px;
             font-weight: 900;
             color: #3b9cd7;
        }
        .error-sec .error-content a{
            display: inline-block;
            padding: 8px 29px;
            background: linear-gradient(to right, #3b9cd7 0, #3b9cd7 100%);
            color: #fff!important;
            border-radius: 5px;
            font-size: 16px;
            margin: 0 0 15px 10px;
        }
        .error-sec .error-content a:hover{
            text-decoration: none;
        }
    </style>
    
    <!--STYLE END-->

    <!--404 SECTION START-->
    
    <section class="error-sec">
        <div class="error-content">
                        <h2>404</h2>
                        <h4>Page Not Found</h4>
                        <a class="fotBtn" href="https://bestclasshelpers.com/">Back to Home</a>
                    </div>
        <div class="error-img">
            <img src="assets/images/home-collage-v2.png" />                
        </div>
    </section>
    
    
    <!--404 SECTION END-->


<!-- Footer Section Begin -->

<?php
    include 'inc/footer.php';
  ?>

<script>
	$(document).ready(function() {
		$('ul.nav li.dropdown').hover(function() {
		  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function() {
		  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
 	// Tabs
  $('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
    $('.tab ul.tabs li a').on('click', function (g) {
        var tab = $(this).closest('.tab'), 
        index = $(this).closest('li').index();
        tab.find('ul.tabs > li').removeClass('current');
        $(this).closest('li').addClass('current');
        tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
        tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();
        g.preventDefault();
  });
  
</script> 


</body>
