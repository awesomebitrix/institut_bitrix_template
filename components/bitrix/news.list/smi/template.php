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
<ul class="smi">
<li style=" padding: 5px 0 5px 5px; font-size: 15px; text-transform: uppercase; text-align: center; margin-bottom: 15px;">СМИ о нас</li>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

	<li id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<? if ($arItem["DISPLAY_PROPERTIES"]['SMI_LINK']){?> 
			<a href="<?=htmlspecialcharsBack($arItem["PROPERTIES"]["SMI_LINK"]["VALUE"]["TEXT"])?>" target="_blank">
				<table>
					<tr>
						<td style="width: 25%;">
							<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>

									<img 
										src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
										alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
										title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
										width="100%"
										/>

							<?endif?>
					</td>
						<td style="width: 75%;">
							<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>

						
								
									<?echo $arItem["NAME"]?>
									
								
								<? if ($arItem["DISPLAY_PROPERTIES"]['SMI_DATA']){?> 

										<p class="smi-p">
											от: <em><?=htmlspecialcharsBack($arItem["PROPERTIES"]["SMI_DATA"]["VALUE"]["TEXT"])?></em>
										</p>
								<?}?> 
						
							<?endif;?>
							
						</td>
					</tr>
				</table>

			</a>
		<?}?> 
	</li>

<?endforeach;?>

</ul>