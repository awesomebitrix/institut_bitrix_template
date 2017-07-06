<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="search-form">
	<form action="<?=$arResult["FORM_ACTION"]?>" name="search" action="#" method="get" class="form-inline form-search">
		<div class="input-group">
			<label class="sr-only" for="searchInput"><i class="fa fa-search" aria-hidden="true"></i></label>
			<?if($arParams["USE_SUGGEST"] === "Y"):?>
			<?$APPLICATION->IncludeComponent(
				"bitrix:search.suggest.input",
				"",
				array(
					"NAME" => "q",
					"VALUE" => "",
					"INPUT_SIZE" => 15,
					"DROPDOWN_SIZE" => 10,
				),
				$component, array("HIDE_ICONS" => "Y") 
			);?>
			
			<?else:?>
				<input class="form-control" name="q"  id="searchInput" type="text" name="search" placeholder="Поиск по сайту	
"/> 
			<?endif;?>
			<div class="input-group-btn">
				<button name="s" type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i></button>
			</div>  
		</div>
	</form>
</div>

<!--
<div class="search-form search-form-sm visible-sm">
	<form action="<?=$arResult["FORM_ACTION"]?>" name="search" action="#" method="get" class="form-inline form-search pull-right">
		<div class="input-group">
			<label class="sr-only" for="searchInput">Поиск</label>
			<?if($arParams["USE_SUGGEST"] === "Y"):?>
			<?$APPLICATION->IncludeComponent(
				"bitrix:search.suggest.input",
				"",
				array(
					"NAME" => "q",
					"VALUE" => "",
					"INPUT_SIZE" => 15,
					"DROPDOWN_SIZE" => 10,
				),
				$component, array("HIDE_ICONS" => "Y")
			);?>
			
			<?else:?>
				<input class="form-control" name="q"  id="searchInput" type="text" name="search" placeholder="Поиск"/>
			<?endif;?>
			
			<div class="input-group-btn">
				<button name="s" type="submit" class="btn btn-primary"><?=GetMessage("BSF_T_SEARCH_BUTTON");?></button>
			</div>
		</div>
	</form>
</div> -->