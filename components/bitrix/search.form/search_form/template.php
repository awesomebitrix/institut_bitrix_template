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
$this->setFrameMode(true);?>
<div id="custom-search-input">
<form class="input-group" action="<?=$arResult["FORM_ACTION"]?>">
	
		
			<?if($arParams["USE_SUGGEST"] === "Y"):?>
			<input type="text" name="q" class="search-query form-control" placeholder="Поиск" />
			<span class="input-group-btn">
                                    <button class="btn btn-danger" type="button">
                                        <span class="fa fa-search"></span>
                                    </button>
                                </span>
            <?endif;?>
		
	
</form>
</div>

