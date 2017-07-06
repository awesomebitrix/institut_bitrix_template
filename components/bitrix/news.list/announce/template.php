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

<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">

<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
            
                   
                                 

             <div class="card-container manual-flip" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="card">
                    <div class="front">
                        <div class="cover">
                            <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
                                <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>



                                                    <img
                                                    src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                                                    alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                                                    title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                                                    >


                                <?endif;?>
                            <?endif?>
                        </div>
                        <div class="user">
                            <img class="profile-pic" src="<?=SITE_TEMPLATE_PATH?>/img/logo_ips.png">
                        </div>
                        <div class="content">
                            <div class="main">
                               <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                                    <h4 class="hvr-underline-from-center"><?echo $arItem["NAME"];?></h4>
                                <?endif;?>

                                

                                 
                                
                            </div>
                            
                            <div class="footer">
                                <button class="btn btn-simple" onclick="rotateCard(this)">
                                    <i class="fa fa-mail-forward"></i> Подробнее
                                </button>
                               
                            </div>
                        </div>
                    </div> <!-- end front panel -->
                    <div class="back">

                        <div class="content">
                            <div class="main">
                                
                                <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                                    <h4  class="text-center"><?echo $arItem["NAME"];?></h4>
                                <?endif;?>

                                 
                                  <? if ($arItem["DISPLAY_PROPERTIES"]['ANNOUNCE_DESCR']){?> 
                                     <p class="text-center  vacenter"><?=htmlspecialcharsBack($arItem["PROPERTIES"]["ANNOUNCE_DESCR"]["VALUE"]["TEXT"])?></p>
                                <?}?> 


                            </div>
                        </div>
                        <div class="footer">
                            <button class="btn btn-simple" style="z-index: 2;" rel="tooltip" title="Перевернуть" onclick="rotateCard(this)">
                                <i class="fa fa-reply"></i> Назад
                            </button>

                             <button class="btn btn-simple" style="width: 100%;" rel="tooltip" title="Показать все события">
                                    <a href="http://ips.gpk.gov.by/announce/"><i class="fa fa-podcast" aria-hidden="true"></i> События</a>
                                </button>

                        </div>
                    </div> <!-- end back panel -->
                </div> <!-- end card -->
            </div> <!-- end card-container -->
            
            
 <?endforeach;?>
