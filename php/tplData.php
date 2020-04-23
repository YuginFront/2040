<?php
$_VARS = [];
$_ext = 'html';
$_VARS['base']=[
    'layout'=>'',
    'file'=>[
        'name'=>'index',
        'ext'=>$_ext,
        'skip'=>1,
    ],
    [
        'index_page'=>!empty($_GET['page'])?$_GET['page']:'',
    ]
];

// TEMPLATES

$_VARS['str_site-header'] = [

    [
      'href_logo'=>'/',
      'src_logo'=>'img/logo.png',
      'src_logo-desktop'=>'img/logo.png',
      'alt_logo-img'=>'',

      'data_list-menu' => [
        [
            'self-class' => 'menu',
            'data_list-primary-item' => [
                [
                    'class-item' => 'menu-item icon icon-contacts',
                    'use_link' => 1,
                    'text-menu-item' => 'Contact us',
                ],
                [
                    'class-item' => 'menu-item icon icon-order',
                    'use_link' => 1,
                    'text-menu-item' => 'Track order',
                ],
                [
                    'class-item' => 'menu-item icon icon-sitemap',
                    'use_link' => 1,
                    'text-menu-item' => 'Sitemap',
                ],
                [
                    'class-item' => 'menu-item icon icon-faq',
                    'use_link' => 1,
                    'text-menu-item' => 'Faq',
                ],
                [
                    'class-item' => 'menu-item icon icon-policies',
                    'use_link' => 1,
                    'text-menu-item' => 'Policies',
                ],
                [
                    'class-item' => 'menu-item icon icon-about',
                    'use_link' => 1,
                    'text-menu-item' => 'About us',
                ],
            ],
        ],
      ],


    ],
];

$_VARS['blocks_switchers'] = [

    // 'file'=>[
    //     'name'=>'blocks_switchers',
    //     'ext'=>$_ext,
    //     'skip'=>0,
    // ],
    [
        'data_form_sexy-select-language'=>[
            [
                'selected-text'=>'English',
                'action'=>'test.php',
                'method'=>'post',
                'select-name'=>'language',
                'id'=>'select-lang',
                
                'self' => 'language',
                'data_form_sexy-select_item'=>[
                    [
                        // 'value' => 'cs',
                       'value' => 'Čeština',
                        'text'  => 'Čeština',
                        // 'text'  => 'Čš',
                        'id'  => '',
                        'selected'  => '',
                    ],
                    [
                        // 'value' => 'da',
                        'value' => 'Dansk',
                        'text'  => 'Dansk',
                        // 'text'  => 'DA',
                        'id'  => '',
                        'selected'  => '',
                    ],
                    [
                        // 'value' => 'nl',
                        'text'  => 'Nederlands',
                        'value'  => 'Nederlands',
                        'id'  => '',
                        'selected'  => '',
                    ],
                    [
                        // 'value' => 'en',
                        'text'  => 'English',
                        'value'  => 'English',
                        // 'text'  => 'EN',
                        'id'  => '',
                        'selected'  => ' selected="selected"',
                    ],
                    [
                        'value' => 'fi',
                        'text'  => 'Suomi',
                        // 'text'  => 'FI',
                        'id'  => '',
                        'selected'  => '',
                    ],
                    [
                        'value' => 'fr',
                        'text'  => 'Fran&ccedil;ais',
                        // 'text'  => 'FR',
                        'id'  => '',
                        'selected'  => '',
                    ],
                    [
                        'value' => 'de',
                        'text'  => 'Deutsch',
                        // 'text'  => 'DE',
                        'id'  => '',
                        'selected'  => '',
                    ],
                    [
                        'value' => 'el',
                        'text'  => 'Ελληνικά',
                        'id'  => '',
                        'selected'  => '',
                    ],
                    [
                        'value' => 'hu',
                        'text'  => 'Magyar',
                        'id'  => '',
                        'selected'  => '',
                    ],
                    [
                        'value' => 'it',
                        'text'  => 'Italiano',
                        'id'  => '',
                        'selected'  => '',
                    ],
                    [
                        // 'value' => 'ja',
                        'value' => '日本語 Nihongo',
                        'text'  => '日本語 Nihongo',
                        'id'  => '',
                        'selected'  => '',
                    ],
                    [
                        'value' => 'no',
                        'text'  => 'Norsk',
                        'id'  => '',
                        'selected'  => '',
                    ],
                    [
                        'value' => 'pl',
                        'text'  => 'Polski',
                        'id'  => '',
                        'selected'  => '',
                    ],
                    [
                        'value' => 'pt',
                        'text'  => 'Portugu&ecirc;s',
                        'id'  => '',
                        'selected'  => '',
                    ],
                    [
                        'value' => 'es',
                        'text'  => 'Espa&ntilde;ol',
                        'id'  => '',
                        'selected'  => '',
                    ],
                    [
                        'value' => 'sv',
                        'text'  => 'Svenska',
                        'id'  => '',
                        'selected'  => '',
                    ],
                    [
                        'value' => 'tr',
                        'text'  => 'Türkçe',
                        'id'  => '',
                        'selected'  => '',
                    ],

                ],
            ],
        ],

        'data_form_sexy-select-currency'=>[
            [
                
                'action'=>'test.php',
                'method'=>'post',
                'self' => 'currency',
                'selected-text'=>'USD&nbsp;(&#36;)',
                'select-name'=>'currency',
                'id'=>'select-currency',
                
                'data_form_sexy-select_item'=>[
                    [
                        'value' => 'USD',
                        'text'  => 'USD&nbsp;(&#36;)',
                        'id'  => '',
                        'selected'  => ' selected="selected"',
                    ],
                    [
                        'value' => 'EUR',
                        'text'  => 'EUR&nbsp;(&euro;)',
                        'id'  => '',
                        'selected'  => '',
                    ],
                    [
                        'value' => 'AUD',
                        'text'  => 'AUD&nbsp;(A&#36;)',
                        'id'  => '',
                        'selected'  => '',
                    ],
                    [
                        'value' => 'CAD',
                        'text'  => 'CAD&nbsp;(C&#36;)',
                        'id'  => '',
                        'selected'  => '',
                    ],
                    [
                        'value' => 'NZD',
                        'text'  => 'NZD&nbsp;(NZ&#36;)',
                        'id'  => '',
                        'selected'  => '',
                    ],
                    [
                        'value' => 'JPY',
                        'text'  => 'JPY&nbsp;(&yen;)',
                        'id'  => '',
                        'selected'  => '',
                    ],
                    [
                        'value' => 'BRL',
                        'text'  => 'BRL&nbsp;(R&#36;)',
                        'id'  => '',
                        'selected'  => '',
                    ],
                    [
                        'value' => 'ARS',
                        'text'  => 'ARS&nbsp;(&#36;)',
                        'id'  => '',
                        'selected'  => '',
                    ],
                    [
                        'value' => 'MXN',
                        'text'  => 'MXN&nbsp;(Mex&#36;)',
                        'id'  => '',
                        'selected'  => '',
                    ],
                    [
                        'value' => 'ZAR',
                        'text'  => 'ZAR&nbsp;(R)',
                        'id'  => '',
                        'selected'  => '',
                    ],
                    [
                        'value' => 'SGD',
                        'text'  => 'SGD&nbsp;(S&#36;)',
                        'id'  => '',
                        'selected'  => '',
                    ],
                    [
                        'value' => 'GBP',
                        'text'  => 'GBP&nbsp;(&pound;)',
                        'id'  => '',
                        'selected'  => '',
                    ],
                    [
                        'value' => 'NOK',
                        'text'  => 'NOK&nbsp;(kr)',
                        'id'  => '',
                        'selected'  => '',
                    ],
                    [
                        'value' => 'SEK',
                        'text'  => 'SEK&nbsp;(kr)',
                        'id'  => '',
                        'selected'  => '',
                    ],
                    [
                        'value' => 'DKK',
                        'text'  => 'DKK&nbsp;(kr)',
                        'id'  => '',
                        'selected'  => '',
                    ],
                    [
                        'value' => 'PLN',
                        'text'  => 'PLN&nbsp;(zl)',
                        'id'  => '',
                        'selected'  => '',
                    ],
                    [
                        'value' => 'CZK',
                        'text'  => 'CZK&nbsp;(Kč)',
                        'id'  => '',
                        'selected'  => '',
                    ],
                    [
                        'value' => 'RON',
                        'text'  => 'RON&nbsp;(lei)',
                        'id'  => '',
                        'selected'  => '',
                    ],
                    [
                        'value' => 'HUF',
                        'text'  => 'HUF&nbsp;(Ft)',
                        'id'  => '',
                        'selected'  => '',
                    ],
                    [
                        'value' => 'CHF',
                        'text'  => 'CHF&nbsp;(SFr.)',
                        'id'  => '',
                        'selected'  => '',
                    ],
                    [
                        'value' => 'AED',
                        'text'  => 'AED&nbsp;(AED)',
                        'id'  => '',
                        'selected'  => '',
                    ],
                    [
                        'value' => 'SAR',
                        'text'  => 'SAR&nbsp;(SAR)',
                        'id'  => '',
                        'selected'  => '',
                    ],
                    [
                        'value' => 'TRY',
                        'text'  => 'TRY&nbsp;(&#8378;)',
                        'id'  => '',
                        'selected'  => '',
                    ],

                ],
            ],
        ],
    ],
];

$_VARS['form_sexy-select'] = [
   
    [
        'action' => 'Yugin_The_Best.php',
        'method' => ' ',
        'self' => ' ',
        'selected-text' => ' ',
        'select-name' => ' ',
        'id' => ' ',
        
    ],
];

$_VARS['form_select-option'] = [

    // 'file'=>[
    //     'name'=>'form_select-option',
    //     'ext'=>$_ext,
    //     'skip'=>0,
    // ],
    [
        'value' =>' ',
        'selected' => ' ',
        'id' => ' ',
        'text' => ' ', 
       

    ],
];

$_VARS['form-header-search'] = [
    [

        
    ],
];

$_VARS['list-primary'] = [

    [
      'data_list-primary-item' => null,
    ],
];

$_VARS['list-primary-item'] = [

    [
      'class-item' => '',
      'text-menu-item'=>'',
      'use_link'=>1,
    ],

];

$_VARS['list-product'] = [
    [
        'data_list-product-item' => [

            [
              'grid-class' => 'col-sm col-sm-6 col-lg-4',
              'img-url'=>'img/pills/viagra.png',
              'alt_img'=>'Viagra',
              'href_btn-buy'=>'#',
              'product-name'=>'Viagra Professional',
              'info'=>'Generic Viagra — is the first and the most well-known remedy for male erection. Its active ingredient is called Sildenafil.',
              'price'=>'$2.23',
            ],

            [
              'grid-class' => 'col-sm col-sm-6 col-lg-4',
              'img-url'=>'img/pills/cialis.png',
              'alt_img'=>'Viagra',
              'href_btn-buy'=>'#',
              'product-name'=>'Viagra Professional',
              'info'=>'Generic Viagra — is the first and the most well-known remedy for male erection. Its active ingredient is called Sildenafil.',
              'price'=>'$2.23',
            ],

            [
              'grid-class' => 'col-sm col-sm-6 col-lg-4',
              'img-url'=>'img/pills/levitra.png',
              'alt_img'=>'Viagra',
              'href_btn-buy'=>'#',
              'product-name'=>'Viagra Professional',
              'info'=>'Generic Viagra — is the first and the most well-known remedy for male erection. Its active ingredient is called Sildenafil.',
              'price'=>'$2.23',
            ],

            [
              'grid-class' => 'col-sm col-sm-6 col-lg-4',
              'img-url'=>'img/pills/zit.png',
              'alt_img'=>'Viagra',
              'href_btn-buy'=>'#',
              'product-name'=>'Viagra Professional',
              'info'=>'Generic Viagra — is the first and the most well-known remedy for male erection. Its active ingredient is called Sildenafil.',
              'price'=>'$2.23',
            ],

            [
              'grid-class' => 'col-sm col-sm-6 col-lg-4',
              'img-url'=>'img/pills/zit.png',
              'alt_img'=>'Viagra',
              'href_btn-buy'=>'#',
              'product-name'=>'Viagra Professional',
              'info'=>'Generic Viagra — is the first and the most well-known remedy for male erection. Its active ingredient is called Sildenafil.',
              'price'=>'$2.23',
            ],

            [
              'grid-class' => 'col-sm col-sm-6 col-lg-4',
              'img-url'=>'img/pills/zit-2.png',
              'alt_img'=>'Viagra',
              'href_btn-buy'=>'#',
              'product-name'=>'Viagra Professional',
              'info'=>'Generic Viagra — is the first and the most well-known remedy for male erection. Its active ingredient is called Sildenafil.',
              'price'=>'$2.23',
            ],
            
        ],
    ],
];

$_VARS['list-product-item'] = [

    [
      'grid-class' => 'col col-6 col-md-4 col-lg-3',
      'img-url'=>'img/pills/viagra.png',
      'alt_img'=>'Viagra',
      'href_btn-buy'=>'#',
      'product-name'=>'Viagra',
      'info'=>'Generic Viagra — is the first and the most well-known remedy for male erection. Its active ingredient is called',
      'price'=>'&#8364; 0.81',

    ],

];




// LAYOUTS

$_VARS['layout_base'] = [
    [
        'data_str_site-header' => null,
    ],
];

$_VARS['layout_second'] = [
    [
        'data_str_site-header' => null,
    ],
];

// PAGES

$_VARS['page-index'] = [
    'layout'=>['layout_base'],
    [
        'layout_base'=>[
            [
                'page-class'=>'layout_base',
            ],
        ],
    ],
];

$_VARS['page-product'] = [
    'layout'=>['layout_second'],
    [
        'layout_second'=>[
            [
                'page-class'=>'layout_second',
            ],
        ],

    ],
];

$_VARS['page-contact'] = [
    'layout'=>['layout_second'],
    [
        'layout_second'=>[
            [
                'page-class'=>'layout_second',
            ],
        ],

        'col-left' => 'list-product',

    ],
];




