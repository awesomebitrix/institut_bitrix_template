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

CJSCore::Init(array("ajax"));
?>
<script>
	BX.ready(function(){
		var input = BX("<?echo $arResult["ID"]?>");
		if (input)
			new JsSuggest(input, '<?echo $arParams["ADDITIONAL_VALUES"]?>');
	});
</script>
<div id="custom-search-input">
	<div class="input-group">
		<IFRAME
			style="width:0px; height:0px; border: 0px;"
			src="javascript:''"
			name="<?echo $arResult["ID"]?>_div_frame"
			id="<?echo $arResult["ID"]?>_div_frame"
		></IFRAME><input
			<?if($arParams["INPUT_SIZE"] > 0):?>
				size="<?echo $arParams["INPUT_SIZE"]?>"
			<?endif?>
			name="<?echo $arParams["NAME"]?>"
			id="<?echo $arResult["ID"]?>"
			value="<?echo $arParams["VALUE"]?>"
			class="search-query form-control"
			type="text"
			autocomplete="true"
			
		/>
		<span class="input-group-btn">
            <button class="btn btn-danger" type="button">
                <span class="fa fa-search"></span>
            </button>
        </span>
	</div>
</div>
