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
                'page-class'=>'layout_second page-contact',
            ],
        ],

    ],
];

$_VARS['page-about'] = [
    'layout'=>['layout_second'],

    [

        'layout_second'=>[
            [
                'page-class'=>'layout_second page-about',
            ],
        ],

      'page-content' => '
        <h3>12 years in business!</h3>
  
        <p>This website, which has been in business for 12 years, is one of the leading pharmacies on the Internet. Our goal has been to deliver safe, generic medications at a good price!
          Our website provides quality generic medicines shipped directly from India. Each of the products that are available through our website are produced with the best raw materials and the greatest care at world-class pharmaceutical manufacturing plants in India. Each of these plants are Indian FDA approved and are internationally certified, so you know our products are safe.
        </p>
        <h3>Safety</h3>
  
        <p>We take your safety seriously. All the products we distribute comply with the Drugs and Cosmetics Act of India 1940, as well as any other applicable rules or amendments. We are sure that any of these products will meet your high standards, now and in the future. We 100% guarantee it! You can find more information about generic medications here.
          Dosage information, along with any other relevant or important general information on the medications we provide can be found at this website. Be sure to read this information before placing your order. If you are not 100% sure that you should be taking a specific medication, consult a physician. If you have any other questions, concerns, or just want to learn a little more about us and the services we provide, please contact our customer support team. They are available 24 hours per day, 7 days per week, through email, online chat or by phone.
        </p>
        <h3>Privacy</h3>
  
        <p>Privacy is very important to us. Your email address and personal information will not be abused. Spam is illegal, and we do not take part in those activities. If you do receive any spam related to our products or services, please contact our customer support department and the situation will be dealt with accordingly.
        </p>
        <h3>Responsibility</h3>
  
        <p>Everything we do at this website is 100% legal. We are responsible corporate citizens and operate in accordance with all applicable laws. It\'s absolutely secure to place orders with us as our secure billing system makes sure that all your information is kept private and safe. There is no need to worry when you order from us.
          If there is a problem with your order (which there rarely is), like being stopped at customs or get lost by the shipping company, contact us immediately. We will work out a plan to either reship your order or refund your money. Our main concern is your satisfaction!
        </p>
        <h3></h3>
  
  
  
        <h3>Contact</h3>
  
        <p>
          <img src="imgs/contact-phone.gif"><br>
          <img src="imgs/contact-toll_free.gif"><br>
          <img src="imgs/contact-phone-uk.gif"><br>
          Or submit <a href="contact.php" rel="nofollow">contact form</a>.
        </p>
      ',
    ],
];

$_VARS['page-account'] = [

    'layout'=>['layout_second'],

    [

        'layout_second'=>[
            [
                'page-class'=>'layout_second page-account',
            ],
        ],
      
      'data_page-account'=>'
          <p>To get into your account area, please insert the order ID number of the first order placed with us and the e-mail address that was specified while ordering. Please, insert the digits from the box into the "Code on the image" field.</p>
          <form method="post" action="/account.php">
            <table>
              <tfoot><tr><th>&nbsp;</th><th><input type="submit" value="Login"/> </th></tr></tfoot>
              <tbody>
              <tr><th>Order ID<sup>*</sup>:</th><td><input name="order_id"/></td></tr>
              <tr><th>Your Email<sup>*</sup>:</th><td><input name="email"/></td></tr>
              <tr class="vcode"><th>Enter the code shown<sup>*</sup>:</th><td><input name="vcode" size="8"/><img id="vcode_img" class="vcode" alt="verification code image" src="/imgs/rand.php"/> <a href="javascript:reloadImageCode()">reload image</a></td></tr>
              </tbody>
            </table>
          </form>
          <p>Please note! We have a special discount program for our customers, check it out <a rel="nofollow" href="/bonuses.php">here</a>.</p>
          <div><h4 style="padding-top: 50px;"><a href="/coupon.php"></a></h4></div>
              ',
    ],
];


$_VARS['page-shopping'] = [
    'layout'=>['layout_base'],
    [
        'layout_base'=>[
            [
                'page-class'=>'page-shopping',
            ],
        ],
    ],
];


