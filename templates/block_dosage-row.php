<?
    $clss_dosoption = array("block-dosage__right-option");
    ( _var('isActive') ) ? array_push($clss_dosoption, "block-dosage__right-option--active") : $clss_dosoption;
    $clss_dosoption_list = implode("  ", $clss_dosoption);
?>

<a href="#"
    class="<?= $clss_dosoption_list ?>"
>
    <? render('block_dosage-col', _var('data_row')) ?>
</a>