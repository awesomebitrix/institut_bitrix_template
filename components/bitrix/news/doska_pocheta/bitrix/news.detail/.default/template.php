<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

	<div class="news">
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
			<div class="image-container">
							<img
				border="0"
				src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
				alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
				title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
				/>
				<div class="img-bottom">
					
					<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
							<p class="news_time fa fa-calendar-check-o"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></p>
					<?endif;?>
					<p class="news_rewiews fa fa-eye"><?=$arResult['SHOW_COUNTER']?></p>

				</div>
			</div>
			
		<?endif?>
			<div class="content-container">
				
				<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arResult["FIELDS"]["PREVIEW_TEXT"]):?>
					<?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?>
				<?endif;?>
			
	
			<?if($arResult["NAV_RESULT"]):?>
				
				<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
			<?elseif(strlen($arResult["DETAIL_TEXT"])>0):?>
				<?echo $arResult["DETAIL_TEXT"];?>
			<?else:?>
				<?echo $arResult["PREVIEW_TEXT"];?>
			<?endif?>
			<br>
<div class="pluso" data-background="transparent" data-options="medium,square,line,horizontal,nocounter,theme=01" data-services="vkontakte,odnoklassniki,facebook,twitter,google,moimir,email,print"></div>
			
			
		</div>
	</div>
