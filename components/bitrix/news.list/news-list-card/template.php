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

	
	
		<h4 class="section_title">Новости института</h4>
		<div class="news-flex">
			
		
			<?if($arParams["DISPLAY_TOP_PAGER"]):?>
				<?=$arResult["NAV_STRING"]?><br />
			<?endif;?>
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				
				<div class="news-item-flex" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
						<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
							

							<div class="image-container">
											<img
											class="img-responsive"
											src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
											width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
											height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
											alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
											title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
											>
							</div>	
						
						<?endif;?>
					<?endif?>
					
						
					<div class="news-flex-content">

						<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
							<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
								<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><h4><?=TruncateText($arItem["NAME"], 150);?></h4></a>
							<?endif;?>
						<?endif;?>


						<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
							<p><?echo $arItem["PREVIEW_TEXT"];?></p>

					</div>

					<div class="news-flex-footer">
						<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
									<p><i class="fa fa-clock-o"></i><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></p>
								<?endif?>
									<p class="float-right "><i class="fa fa-eye"></i><?=$arItem['SHOW_COUNTER']?></p>
												

					</div>		
					
								
					



						<?endif;?>

					
					
					
					





				</div>
			<?endforeach;?>
			<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
				<?=$arResult["NAV_STRING"]?>
			<?endif;?>


		</div>



