</div>






		

<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>


<!-- footer -->

		<footer>
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
					"AREA_FILE_RECURSIVE" => "Y",
					"AREA_FILE_SHOW" => "sect",
					"AREA_FILE_SUFFIX" => "footer",
					"EDIT_TEMPLATE" => ""
				)
			);?>
			
		</footer>	
	
	

	</div>                

	<!-- mobile-menu div-page-clossed -->

<!--[if lt IE 9]>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/es5-shim.min.js"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/html5shiv.min.js"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/html5shiv-printshiv.min.js"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/respond.min.js"></script>
	<![endif]-->

<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery-1.11.2.min.js"></script>

<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.preloader.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.dropdown.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.mmenu.all.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.equalheights.min.js"></script>

<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/waypoints.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/plugins-scroll.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.stellar.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/lightbox.js"></script>

<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/common.js"></script>

<script src="//yastatic.net/share2/share.js"></script>


<script type="text/javascript">
	$(document).ready(function(){
	 
	$(window).scroll(function(){
	if ($(this).scrollTop() > 100) {
	$('.scrollup').fadeIn();
	} else {
	$('.scrollup').fadeOut();
	}
	});
	 
	$('.scrollup').click(function(){
	$("html, body").animate({ scrollTop: 0 }, 600);
	return false;
	});
	 
	});
	 
</script>
<script>
$(function(){
	$(".mm-listview").append('<li><a href="http://gpk.gov.by/">Государственный пограничный комитет</a></li><li><a href="http://gpk.gov.by/study/">Как стать пограничником</a></li><li><a href="http://tops.gpk.gov.by/study/">Территориальные органы пограничной службы</a></li>');
 	});
</script>
<script>
       $().ready(function(){
        $('[rel="tooltip"]').tooltip();

    });

    function rotateCard(btn){
        var $card = $(btn).closest('.card-container');
        console.log($card);
        if($card.hasClass('hover')){
            $card.removeClass('hover');
        } else {
            $card.addClass('hover');
        }
    }
</script>

<script type="text/javascript">
$(function(){
  $("#gallery").preloader();
  });
</script>
<script type="text/javascript">
 	$(function(){ $('.panel-text').equalHeights(); });
</script>


<script type="text/javascript">
	$(window).stellar();
</script>

<script>
        $(function() {
            $(".toggle-menu").click(function() {
                $("#razdel").slideToggle();
                $(".hamburger").toggleClass("is-active");
                $(this).toggleClass("active"); return false;

            });
        });
</script>


<a href="#" class="scrollup">Наверх</a>

	</body>
</html>