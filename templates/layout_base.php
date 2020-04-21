<?
/**
 * @reserved 'page'
 * @reserved 'data'
 */

?>

<div class="<? _var('page-class'); ?>">
	<? render('str_site-header',_var('data_str_site-header')); ?>
	<main>
		<div class="container">
	    	<? render(_var('page', true), _var('data')); ?>
	    </div>
    </main>
</div>