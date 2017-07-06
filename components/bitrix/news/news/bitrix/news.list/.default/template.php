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
<section id="news">
	
		

			<?if($arParams["DISPLAY_TOP_PAGER"]):?>
				<?=$arResult["NAV_STRING"]?><br />
			<?endif;?>
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				
				<div class="news_item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
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
											<span>
												<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
													<p class="news_time fa fa-clock-o"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></p>
												<?endif?>
												
												<p class="news_rewiews fa fa-eye"><?=$arItem['SHOW_COUNTER']?></p>
											</span>
                                            

							</div>	
						
						<?endif;?>
					<?endif?>
					
						
					
						<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
						<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
							<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><h4><?=TruncateText($arItem["NAME"], 100);?></h4></a>
						<?else:?>
							<h4><?=TruncateText($arItem["NAME"], 100);?></h4><br />
						<?endif;?>
					<?endif;?>




					<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
						<p><?echo $arItem["PREVIEW_TEXT"];?></p>
						<span>
										<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="btn btn-primary" role="button">Читать</a>

						<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
							<small>
							<?=$arProperty["NAME"]?>:&nbsp;
							<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
								<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
							<?else:?>
								<?=$arProperty["DISPLAY_VALUE"];?>
							<?endif?>
							</small>
						<?endforeach;?>
						</span>	



					<?endif;?>
					
					





				</div>
			<?endforeach;?>




			<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
				<br /><?=$arResult["NAV_STRING"]?>
			<?endif;?>


		

</section>

