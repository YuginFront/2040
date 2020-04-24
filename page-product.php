<?
    _setData([
        'data_dosages' => [
            [
                'high_dosage' => '<span>High dosage</span>to get a stronger effect',
                'low_dosage' => '<span>Low dosage</span>to try for the first time',
                'dosage_head' => '<span>Dosage, mg</span>',
                'isActive' => true,
                'isWithVal' => false,
                'isDosage' => true,
                'data_dosage_list' => [
                    [
                        'data_val' => '200',
                        'data_row' => [
                            [
                                'val' => '200mg',
                            ],
                        ],
                    ],
                    [
                        'data_val' => '180',
                        // 'isActive' => true,
                        'data_row' => [
                            [
                                'val' => '180mg',
                            ],
                        ],
                    ],
                    [
                        'data_val' => '150',
                        'data_row' => [
                            [
                                'val' => '150mg',
                            ],
                        ],
                    ],
                    [
                        'data_val' => '120',
                        'data_row' => [
                            [
                                'val' => '120mg',
                            ],
                        ],
                    ],
                    [
                        'data_val' => '100',
                        'data_row' => [
                            [
                                'val' => '100mg',
                            ],
                        ],
                    ],
                    [
                        'data_val' => '50',
                        'data_row' => [
                            [
                                'val' => '50mg',
                            ],
                        ],
                    ],
                    [
                        'data_val' => '25',
                        'data_row' => [
                            [
                                'val' => '25mg',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'data_packages' => [
            [
                'high_dosage' => '<span>The lowest price</span>per pill',
                'low_dosage' => '<span>The cheapest</span>package',
                'dosage_head' => '<span>Tablets</span><span>Price</span>',
                'hasBonuses' => true,
                // 'isActive' => true,
                // 'isWithVal' => false,
                'data_dosage_list' => [
                    [
                        'data_row' => [
                            [
                                'isLight' => true,
                                'val' => '120',
                            ],
                            [
                                'val' => '$111.95',
                            ],
                        ],
                    ],
                    [
                        'isActive' => true,
                        'data_row' => [
                            [
                                'isLight' => true,
                                'val' => '180',
                            ],
                            [
                                'val' => '$146.95',
                            ],
                            [
                                'val' => '<span class="icon icon-pack-pop-sm"></span><span class="icon icon-pack-bonus-sm"></span><span class="icon icon-pack-shipping-sm"></span>'
                            ],
                        ],
                    ],
                    [
                        'data_row' => [
                            [
                                'isLight' => true,
                                'val' => '90',
                            ],
                            [
                                'val' => '$64.95',
                            ],
                        ],
                    ],
                    [
                        'data_row' => [
                            [
                                'isLight' => true,
                                'val' => '60',
                            ],
                            [
                                'val' => '$52.95',
                            ],
                            [
                                'val' => '<span class="icon icon-pack-pop-sm"></span><span class="icon icon-pack-bonus-sm"></span>'
                            ],
                        ],
                    ],
                    [
                        'data_row' => [
                            [
                                'isLight' => true,
                                'val' => '30',
                            ],
                            [
                                'val' => '$29.95',
                            ],
                            [
                                'val' => '<span class="icon icon-pack-bonus-sm"></span>'
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ]);
?>

<div class="col-lg col-lg-6">

</div>

<div class="col-lg col-lg-6">
    <div class="product">
        <? render('block_checkout-control') ?>
        <div class="product__header  product__header--dosage">
            <h2 class="product__title">Choose your dosage</h2>
            <p class="product__desc">When it comes to men’s health, a lot of issues need to be taken into account. <span class="product__fulldesc"> One of the most prominent one is erectile dysfunction/ impotence. This condition is described as the inability to have and sustain an erection from the point of arousal to the actual sexual activity.</span><a href="#" class="product__toggle-desc">read full</a></p>
        </div>
        <div class="product__body">
            <? render('block_dosage', _var('data_dosages')) ?>
        </div>
        <div class="product__header  product__header--package">
            <h2 class="product__title">Choose your package</h2>
            <p class="product__desc">When it comes to men’s health, a lot of issues need to be taken into account. <span class="product__fulldesc"> One of the most prominent one is erectile dysfunction/ impotence. This condition is described as the inability to have and sustain an erection from the point of arousal to the actual sexual activity.</span><a href="#" class="product__toggle-desc">read full</a></p>
        </div>
        <div class="product__body">
            <? render('block_dosage', _var('data_packages')) ?>
        </div>
    </div>        
</div>
