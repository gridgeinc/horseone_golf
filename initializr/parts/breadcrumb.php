<?php //breadcrumb(); 
?>
<!--パンくずリストプラグイン：Prime Strategy Bread Crumb-->
<!-- <div id="pankuzu">   
<?php
$bread = array(
	'type' => 'string',
	'home_label' => 'TOP',
);
if (function_exists('bread_crumb')) {
	bread_crumb($bread);
}
?>
</div> -->

<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
	<div class="breadcrumbsInner">
		<?php if (function_exists('bcn_display')) {
			bcn_display();
		} ?>
	</div>
</div>