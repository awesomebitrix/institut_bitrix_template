<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
$arFilter = array('IBLOCK_ID' => $arParams["IBLOCK_ID"]);
$rsSections = CIBlockSection::GetList(array('SORT' => 'ASC'), $arFilter);
while ($arSection = $rsSections->Fetch())
{
    $arResult["SECTIONS"][$arSection ["ID"]] = $arSection ;
}
?>