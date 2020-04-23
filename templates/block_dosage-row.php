<?
    $clss_dosoption = array("");
    ( _var('isActive') ) ? array_push($clss_dosoption, "block-dosage__right-option--active") : $clss_dosoption;
    $clss_dosoption_list = implode("  ", $clss_dosoption);
?>

<a href="#"
    class="block-dosage__right-option"
    data-value="<? _var('data_val') ?>"
>
    <? render('block_dosage-col', _var('data_row')) ?>
</a>