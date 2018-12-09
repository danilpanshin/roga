<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Рога и сила: продажа автомобилей");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Main page");

$USER->Authorize(1);
?>

<?$APPLICATION->IncludeComponent(
	"qsoft:main.banner", 
	".default", 
	array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => ".default",
		"NOINDEX" => "N",
		"QUANTITY" => "3",
		"TYPE" => "cars"
	),
	false
);?>

<h2 class="push_right">Модели недели</h2>
 <section class="product_line"> <figure class="product_item">
<div class="product_item_pict">
 <a href="#"> <img alt="BMW X3 2.0d" src="/local/templates/.default/images/test_top_week_1.png" title="BMW X3 2.0d"> </a>
</div>
 <figcaption>
<h3><a href="#">BMW X3 2.0d</a></h3>
<p class="product_item_price dark_grey">
	 2 230 000 руб.
</p>
 <a class="buy_button inverse inline-block pie" href="#">В корзину</a> </figcaption> </figure> <figure class="product_item">
<div class="product_item_label new">
</div>
<div class="product_item_pict">
 <a href="#"> <img alt="AUDI A6 3.0 TFSI" src="/local/templates/.default/images/test_top_week_2.png" title="AUDI A6 3.0 TFSI"> </a>
</div>
 <figcaption>
<h3><a href="#">AUDI A6 3.0 TFSI</a></h3>
<p class="product_item_price dark_grey">
	 2 870 000 руб.
</p>
 <a class="buy_button inverse inline-block pie" href="#">В корзину</a> </figcaption> </figure> <figure class="product_item">
<div class="product_item_label sale">
</div>
<div class="product_item_pict">
 <a href="#"> <img alt="Mercedes-Benz A200" src="/local/templates/.default/images/test_top_week_3.png" title="Mercedes-Benz A200"> </a>
</div>
 <figcaption>
<h3><a href="#">Mercedes-Benz A200</a></h3>
<p class="product_item_price dark_grey">
	 1 310 000 руб.
</p>
 <a class="buy_button inverse inline-block pie" href="#">В корзину</a> </figcaption> </figure> <figure class="product_item">
<div class="product_item_pict">
 <a href="#"> <img alt="BMW Z4 sDrive35i" src="/local/templates/.default/images/no-image.jpg" title="BMW Z4 sDrive35i"> </a>
</div>
 <figcaption>
<h3><a href="#">BMW Z4 sDrive35i</a></h3>
<p class="product_item_price">
	 3 532 000 руб.
</p>
 <a class="buy_button inverse inline-block pie" href="#">В корзину</a> </figcaption> </figure> </section> 
 <section class="news_block inverse">

<div>
 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"news_list_main", 
	array(
		"ACTIVE_DATE_FORMAT" => "j M Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "news_list_main",
		"DETAIL_URL" => "/company/news/#ELEMENT_CODE#/",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "3",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "150",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>
</div>
 </section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>