<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$APPLICATION->AddHeadString('<meta property="og:title" content="' . $arResult["NAME"] . '" />');
$APPLICATION->AddHeadString('<meta property="og:description" content="' . $arResult["PREVIEW_TEXT"] . '" />');
$APPLICATION->AddHeadString('<meta property="og:image" content="' . $arResult["PREVIEW_PICTURE"]["SRC"] . '" />');
?>