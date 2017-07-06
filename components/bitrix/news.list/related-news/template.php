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


				<div class="related-carousel">


					<?foreach($arResult["ITEMS"] as $arItem):?>

						<?
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						?>

                        <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="related-news-items" id="<?=$this->GetEditAreaId($arItem['ID']);?>">

									<div class="related-news-data">
										<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
                                            <div class="related-name">
                                                <p>
                                                    <?=TruncateText($arItem["NAME"], 60);?>
                                                </p>
                                            </div>

                                            <p><?echo $arItem["PREVIEW_TEXT"];?></p>
										<?endif;?>
									</div>





                        </a>
					<?endforeach;?>
				</div>


			<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
				<br /><?=$arResult["NAV_STRING"]?>
			<?endif;?>




