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

	<div class="gpk">
	    <ul class="nav nav-pills nav-stacked">
			<li class="title-li"><a><?echo $arResult["title"] ?></a></li>
			
				
			
			<?
			if(is_array($arResult["item"])):
				foreach($arResult["item"] as $arItem):?>
					<li>
						<a href="<?=$arItem["link"]?>" class="news-gpk row" target="_blank">
							<?if(strlen($arItem["enclosure"]["url"])>0):?>
								<div class="col-md-4 gpk-img">
										<img
										class="img-responsive"
										src="<?=$arItem["enclosure"]["url"]?>"
										alt="<?=$arItem["enclosure"]["url"]?>"
										title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
										>
								</div>
							<?endif;?>
					
							<?if(strlen($arItem["link"])>0):?>
								

								<div class="col-md-8 gpk-text">
									<p><?=TruncateText($arItem["title"], 50);?></p>
								</div>
							
							<?endif;?>

					
						</a>
					</li>
				<?endforeach;
			endif;?>
			
		</ul>	
	</div>
