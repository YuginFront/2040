<?
    $clss = array("block-dosage");
    ( _var('isActive') ) ? array_push($clss, "block-dosage--active") : $clss;
    $clss_list = implode("  ", $clss);

    $clss_left = array("block-dosage__left");
    ( _var('isWithVal') ) ? $clss_left : array_push($clss_left, 'block-dosage__left--without-val');
    $clss_left_list = implode("  ", $clss_left);
?>

<div
    class="<?= $clss_list ?>"
>
    <div class="block-dosage__body">
        <div
            class="<?= $clss_left_list ?>"
        >
            <div class="block-dosage__left-body">
                <div class="block-dosage__limit  block-dosage__limit--high"><? _var('high_dosage') ?></div>
                <div class="block-dosage__limit  block-dosage__limit--low"><? _var('low_dosage') ?></div>
            </div>
        </div>
        <div class="block-dosage__right">
            <div class="block-dosage__right-head">
                <? _var('dosage_head') ?>
            </div>
            <div class="block-dosage__right-body">
                <? render('block_dosage-row', _var('data_dosage_list')) ?>
            </div>
        </div>
    </div>
    <? if (_var('hasBonuses')): ?>
        <div class="block-dosage__footer">
            <a href="#" class="icon icon-pack-pop">Popular</a>
            <a href="#" class="icon icon-pack-shipping">Free shipping</a>
            <a href="#" class="icon icon-pack-bonus">Bonus</a>
        </div>
    <? endif; ?>
</div>