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

					<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
						<h1><?=$arResult["NAME"]?></h1>
					<?endif;?>
					<h5 style="font-size: 13px;">
						<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>

						<? if ($arResult["DISPLAY_PROPERTIES"]['AVTOR']){?> 
							<p><em>Автор:</em> <?=htmlspecialcharsBack($arResult["PROPERTIES"]["AVTOR"]["VALUE"]["TEXT"])?>,</p>
						<?}?>
						<? if ($arResult["DISPLAY_PROPERTIES"]['NEWS_PHOTO']){?> 
							<p><em>Фото:</em> <?=htmlspecialcharsBack($arResult["PROPERTIES"]["NEWS_PHOTO"]["VALUE"]["TEXT"])?>,</p>
						<?}?>
						<p><?=$arResult["DISPLAY_ACTIVE_FROM"]?></p><p class="float-right"><i class="fa fa-eye"></i><?=$arResult['SHOW_COUNTER']?></p>
					<?endif;?>
					</h5>
					

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

<!-- фотогалерея -->
<? if ($arResult["DISPLAY_PROPERTIES"]['MORE_PHOTO']){?>

<? if ($arResult["DISPLAY_PROPERTIES"]['TITLE_PHOTO']){?>
 <h3 style="text-align: center;"><?echo $arResult['DISPLAY_PROPERTIES']['TITLE_PHOTO']['DISPLAY_VALUE'];?> </h3>
 	<div style="clear:both"></div>
<?}?> 

<div class="grid owl-carousel owl-theme">

<? 
// additional photos 
$LINE_ELEMENT_COUNT = 2; // number of elements in a row 
if(count($arResult["MORE_PHOTO"])>0):?> 
<?foreach($arResult["MORE_PHOTO"] as $PHOTO):?> 

<? $file = CFile::ResizeImageGet($PHOTO, array('width'=>350), BX_RESIZE_IMAGE_EXACT, true); ?> 



<a class="example-image-link" data-lightbox="example-set" data-title="<?=$arResult["NAME"]?>"  href="<?=$PHOTO["SRC"]?>" name="more_photo"> 
<img  border="0" src="<?=$file["src"]?>" 
alt="<?=$arResult["NAME"]?>" title="<?=$arResult["NAME"]?>" /> 
</a> 


<?endforeach?>
<?endif?>  
</div>
<?}?>
<!-- / фотогалерея -->
<br>
<div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,twitter,viber" data-counter=""></div>
		</div>


	</div>


	<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"related-news", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "/news/#ELEMENT_CODE#/",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "SHOW_COUNTER",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "20",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "6",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "120",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ID",
		"SORT_BY2" => "ID",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "DESC",
		"COMPONENT_TEMPLATE" => "related-news"
	),
	false
);?>
<br>
<br>
