	<?
		if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
		//delayed function must return a string
		if(empty($arResult))
			return "";
		$strReturn = '<div class="bs-example"><ul class="breadcrumb"><li><a href="/"><i class="fa fa-home"></i></a></li>';

		$num_items = count($arResult);
		for($index = 1, $itemSize = $num_items; $index < $itemSize; $index++)
		{
			$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
			
			if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
				$strReturn .= '<li><a href="'.$arResult[$index]["LINK"].'" title="'.$title.'">'.$title.'</a></li>';
			else
				$strReturn .= '<li>'.$title.'</li>';
		}

		$strReturn .= '</ul></div>';
		return $strReturn;
	?>

