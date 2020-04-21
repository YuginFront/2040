
<form action="/<? _var('action'); ?>" method="<? _var('method'); ?>" class="switchers-item "> 
  	<div class="custom-select  <? _var('self'); ?>">
        <div class="selected-text"><? _var('selected-text'); ?></div>  
        <select name="<? _var('select-name'); ?>" id="<? _var('id'); ?>"  >
            <? render('form_select-option','data_form_sexy-select_item')?>
        </select>
    </div>
</form>
