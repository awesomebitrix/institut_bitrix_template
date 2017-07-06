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
  
<div class="white_field center">

<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
	<h3><?=$arResult["NAME"]?></h3>
<?endif;?>


 <div class="alert-blk">
             <div class="alert alert-info-alt alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                <i class="fa fa-times" aria-hidden="true"></i></button>
                  <p>Любое использование фотографий допускается только при указании ссылки на официальный портал Институт пограничной службы Республики Беларусь ips.gpk.gov.by</p>
  <p>Использование фотографий официального портала ips.gpk.gov.by в коммерческих целях без письменного разрешения не допускается</p>  
              </div> 

</div>
 
<div class="">
<ul class="clearfix" id="gallery">
 
<?
$arWaterMark = Array(
    array(
        "name" => "watermark",
        "position" => "bottomcenter",
        "type" => "image",
       	 "size" => "small",
        "file" => $_SERVER["DOCUMENT_ROOT"].'/img/wdgpkgovby.png', 
    )
); 
 
// additional photos
$LINE_ELEMENT_COUNT = 2; // number of elements in a row
if(count($arResult["MORE_PHOTO"])>0):?>

<?foreach($arResult["MORE_PHOTO"] as $PHOTO):?>

<? 
$file = CFile::ResizeImageGet(
$PHOTO, array('width'=>300, 'height'=>'220'), BX_RESIZE_IMAGE_EXACT, true); 
?>


<?
$size = getimagesize ("http://".$_SERVER["HTTP_HOST"].$arResult[ "MORE_PHOTO"]["SRC"]);
$arFileTmp2 = CFile::ResizeImageGet(
    $PHOTO,
    array("width" => $size[0]-1, "height" => $size[1]-1),
    BX_RESIZE_IMAGE_EXACT,
    true,
    $arWaterMark);
?>
 
 <li><p>
 
<div class="item">

<a 
class="example-image-link hvr-grow" 
data-lightbox="example-set" 
data-title="<?=(strlen($PHOTO["DESCRIPTION"]) > 0 ? $PHOTO["DESCRIPTION"] : $arResult["NAME"])?>" 
href="<?=$arFileTmp2["src"]?>" 
name="<?=(strlen($PHOTO["DESCRIPTION"]) > 0 ? $PHOTO["DESCRIPTION"] : $arResult["NAME"])?>"
>


<img
class="example-image img-responsive"  
border="0" 
src="<?=$file["src"]?>" 
width="100%"
height="auto"
alt="<?=$arResult["NAME"]?>" 
title="<?=$arResult["NAME"]?>" 
/>

</a>
</div>
</p></li>
<?endforeach?>
<?endif?> 
 
</ul>
</div>
</div>


 