<?
    _setData([
        'data_checkout-control' => [
            [
                'statusDosage' => 'passed',
                'statusPackage' => 'passed',
                'statusShipping' => 'active',
            ],
        ],
    ]);
?>

<h1>Choose Your Shipping method</h1>

<? render('tbl_ship-cart') ?>

<? render('tbl_ship-method') ?>

<? render('block_checkout-control', _var('data_checkout-control')) ?>