<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

//Кэшируем необходимые нам ключи $arResult что бы можно было их использовать в component_epilog.php
$this->__component->SetResultCacheKeys(array(
    "NAME",
    "PREVIEW_TEXT",
    "PREVIEW_PICTURE"
));

$arResult["MORE_PHOTO"] = array(); 
if(isset($arResult["PROPERTIES"]["MORE_PHOTO"]["VALUE"]) && is_array($arResult["PROPERTIES"]["MORE_PHOTO"]["VALUE"])) 
{ 
foreach($arResult["PROPERTIES"]["MORE_PHOTO"]["VALUE"] as $FILE) 
{ 
$FILE = CFile::GetFileArray($FILE); 
if(is_array($FILE)) 
$arResult["MORE_PHOTO"][]=$FILE; 
} 
} 
?>  