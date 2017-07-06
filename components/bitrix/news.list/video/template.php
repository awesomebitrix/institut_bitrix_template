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
<ul class="video_ips">
<li style="width: 100%; padding: 5px 0 5px 5px; font-size: 15px; text-transform: uppercase; text-align: center; margin-bottom: 15px;">Видеоролики о пограничной службе</li>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

	<li style="display: inline-block; padding-right: 5px;" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<? if ($arItem["DISPLAY_PROPERTIES"]['VIDEO_LINK']){?> 
			<a href="<?=htmlspecialcharsBack($arItem["PROPERTIES"]["VIDEO_LINK"]["VALUE"]["TEXT"])?>" target="_blank">
				<table>
					<tr>
						<td style="width: 35%; padding-right: 10px;">
							<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>

									<img 
										src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
										alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
										title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
										width="100%"
										/>

							<?endif?>
					</td>
						<td style="width: 65%;">
							<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>

						
								
									<?echo $arItem["NAME"]?>
									

						
							<?endif;?>
							
						</td>
					</tr>
				</table>

			</a>
		<?}?> 
	</li>

<?endforeach;?>
<div class="clearfix"></div>
<li style="border-bottom: none; padding-top: 10px;"> 
	<a style="margin-left: 5px;" href="https://www.youtube.com/channel/UCJUQWK-NB4pincyfdraY2cA/videos?shelf_id=0&sort=dd&view=0" target="_blank">Все видеоролики <i class="fa fa-share" aria-hidden="true"></i></a>
</li>

</ul>
