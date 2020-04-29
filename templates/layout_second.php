<?
/**
 * @reserved 'page'
 * @reserved 'data'
 */

?>

<div class="<? _var('page-class'); ?>">
	<? render('str_site-header',_var('data_str_site-header')); ?>
	<div class="main">
		<div class="container clearfix">
			<? render(_var('page', true), _var('data')); ?>
	    </div>
    </div>
</div>