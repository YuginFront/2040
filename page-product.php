<?
    _setData([
        'data_dosages' => [
            [
                'high_dosage' => '<span>High dosage</span>to get a stronger effect',
                'low_dosage' => '<span>Low dosage</span>to try for the first time',
                'dosage_head' => '<span>Dosage, mg</span>',
                'isActive' => true,
                'isWithVal' => false,
                'data_dosage_list' => [
                    [
                        'data_row' => [
                            [
                                'val' => '200mg',
                            ],
                        ],
                    ],
                    [
                        'isActive' => true,
                        'data_row' => [
                            [
                                'val' => '180mg',
                            ],
                        ],
                    ],
                    [
                        'data_row' => [
                            [
                                'val' => '150mg',
                            ],
                        ],
                    ],
                    [
                        'data_row' => [
                            [
                                'val' => '120mg',
                            ],
                        ],
                    ],
                    [
                        'data_row' => [
                            [
                                'val' => '100mg',
                            ],
                        ],
                    ],
                    [
                        'data_row' => [
                            [
                                'val' => '50mg',
                            ],
                        ],
                    ],
                    [
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

    <article class="product-desc">
        <div class="desc-short">
            <header class="desc-header">
                <img src="img/pills/viagra.png" alt="" class="pill-img hidden-dev">
                <h3 class="h3">Viagra Professional</h3>
                <div class="substance">Sildenafil Citrate</div>
            </header>
            <div class="product-desc-img">
                <img src="img/pills/blister.png" alt="" class="blister-img">
                <img src="img/pills/viagra.png" alt="" class="pill-img hidden-lg">
            </div>
            <div class="product-spec">

                <h4>Brands</h4>
                <ul class="desc-list">
                    <li class="desc-item">
                        <a href="">Tazalis</a>
                    </li>
                    <li class="desc-item">
                        <a href="">
                            Cenforce
                        </a>
                    </li>
                    <li class="desc-item">
                        <a href="">
                            Sildigra
                        </a>
                    </li>
                </ul>
                
                <h4>Manufacturer</h4>
                <ul class="desc-list">
                    <li class="desc-item">Axon Pharma Pvt</li>
                    <li class="desc-item">Dadha Pharma</li>
                </ul>

                <h4>Disease(s):</h4>
                <ul class="desc-list">
                    <li class="desc-item">Axon Pharma Pvt</li>
                    <li class="desc-item">Dadha Pharma</li>
                </ul>

            </div>

        </div>
        <p class="desc-full">
            Generic Viagra — is the first and the most well-known remedy for male erection. Its active ingredient is called Sildenafil. It provides enhanced blood flow to the male genital area. The cavernous body is relaxed <span class="read-full">Read full description</span>
        </p>
    </article>
</div>

<div class="col-lg col-lg-6">
    <div class="product">
        <div class="product__header  product__header--dosage">
            <h2 class="product__title">Choose your dosage</h2>
            <p class="product__desc">When it comes to men’s health, a lot of issues need to be taken into account. <a href="#" class="product__toggle-desc">read full</a><span class="product__fulldesc"> One of the most prominent one is erectile dysfunction/ impotence. This condition is described as the inability to have and sustain an erection from the point of arousal to the actual sexual activity.</span></p>
        </div>
        <div class="product__body">
            <? render('block_dosage', _var('data_dosages')) ?>
        </div>
        <div class="product__header  product__header--package">
            <h2 class="product__title">Choose your package</h2>
            <p class="product__desc">When it comes to men’s health, a lot of issues need to be taken into account. <a href="#" class="product__toggle-desc">read full</a><span class="product__fulldesc"> One of the most prominent one is erectile dysfunction/ impotence. This condition is described as the inability to have and sustain an erection from the point of arousal to the actual sexual activity.</span></p>
        </div>
        <div class="product__body">
            <? render('block_dosage', _var('data_packages')) ?>
        </div>
    </div>        
</div>
