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

$_VARS['page-faq'] = [
    'layout'=>['layout_second'],

    [
      

       'layout_second'=>[
            [
                'page-class'=>'layout_second page-faq',
            ],
        ],

      'data_page-faq'=>'
          <script type="text/javascript">
              // <![CDATA[
              ship_1_price=0;ship_2_price=20;certificatesurl="https://checkoutpagewithhttps.com/certificates.php";
              // ]]>
          </script><ul>
            <li><a href="#products">Products </a></li>
            <li><a href="#ordering">How to Order </a></li>
            <li><a href="#shipping">Shipping</a></li>
            <li><a href="#track">Managing Orders </a></li>
            <li><a href="#business">Business Opportunities </a></li>
          </ul>
          <h2 id="products">Products</h2>
          <h3>Are the medications in your list brand name pills?</h3>
          <p>All the medications one can see in our product lists are generic.</p>
          <h3>What does the term "generic" mean? Do generic medications produce the same effect that the brand name medicines do?</h3>
          <p>The difference between a brand name medicine and a generic one is in the name, shape, color and in the price. A generic drug is usually called by the name of the active ingredient while a manufacturer uses a brand name. However, a manufacturer cannot possess a patent for a certain chemical agent, this is why manufacturers of generic medications can legally produce the so-called "generics". They are the same chemically and since the active ingredient is identical, they have the same medical effect. Thus buying a generic medication one pays less but gets the very same result.But we ought to mention that only once you follow all the instructions of your health care provider you get the intended effect. </p>
          <h3>Why are generic medicines so cheap?</h3>
          <p>Unlike generic drugs, a large part of the costs incurred by original manufacturers of brand name drugs are for research and development and advertising. The expense of obtaining FDA approval alone in the U.S. is enormous. Manufacturers of generic drugs do not have to absorb or recover these costs. Consequently, significant cost savings can be passed along to you.</p>
          <h3>Your pills do not look like the brand name medication. The pills I have received have a different name printed on them.  Why?</h3>
          <p>As we have already mentioned that no manufacturer can take out a patent for a chemical agent. Thus generics can have the exactly same active ingredients as the brand pills. However, names and appearance (shape and color) of medications can be and are always patented and should be treated as the intellectual property. Thus using the name and the shape of the brand pills a manufacturer producing generic medications will be accused of the copyright infringement. This is why generic pills look different, they are of a different color and have a different shape if compared to a brand name pill.</p>
          <h3>How can I be sure in the quality of the pills you offer?</h3>
          <p>High quality of the medications we offer is the subject of our primary concern. The logic is very simple: the better the quality of goods is, the more customers we have. Thus we are very attentive and selective in the choice of the supplier, the quality of goods is thoroughly tested and the documentation is closely checked. The medications are manufactured in India by an Indian state licensed, Indian FDA approved company.</p>
          <h3>What is the shelf life of the pills?</h3>
          <p>The expiry date is mentioned on each blister. It is different for different batches. The shelf life is 2 years from the date of manufacture and would differ from batch to batch depending on when they were manufactured.</p>
          <h3>What is the difference between 50mg Viagra tabs and 100mg tabs?</h3>
          <p>Generic Viagra we offer is available in 50mg and 100mg tabs. These are fixed dosages of Sildenafil (the active ingredient) in the pills: thus a 50mg Viagra pill contains 50 mg of Sildenafil concentrate and a 100mg Viagra pill contains 100mg of Sildenafil. The standard dose for achieving the effect is a 50mg pill. However, the ingredient effects different people in a different way so we would recommend you to start with 25mg (split a 50mg pill in two and take one half only) to see if this is enough for you. If not - take a whole 50mg pill.</p>
          <h3>What is the difference between Viagra, Cialis, Levitra, Soft and Regular?</h3>
          Please, check the table below:
          <div class="scrollable" style="overflow: auto; max-width: 100%;"><table class="simple">
              <thead>
              <tr>
                <td>Drug Name</td>
                <td>Dosage</td>
                <td>Time before it starts to act</td>
                <td>How to take</td>
                <td>Fatty food/alcohol</td>
                <td>Effect lasts</td>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>Viagra</td>
                <td>50mg, 100mg</td>
                <td>1 hour</td>
                <td>take with a glass of water</td>
                <td>no</td>
                <td>3-4 hours</td>
              </tr>
              <tr>
                <td>Viagra Soft</td>
                <td>50mg, 100mg</td>
                <td>15 - 20 minutes</td>
                <td>to be chewed until dissolved completely</td>
                <td>no</td>
                <td>6 hours</td>
              </tr>
              <tr>
                <td>Cialis</td>
                <td>20mg</td>
                <td>30 minutes</td>
                <td>take with a glass of water</td>
                <td>no</td>
                <td>36 hours</td>
              </tr>
              <tr>
                <td>Cialis Soft</td>
                <td>20mg</td>
                <td>15 - 20 minutes</td>
                <td>to be chewed until dissolved completely</td>
                <td>no</td>
                <td>24 - 36 hours</td>
              </tr>
              <tr>
                <td>Levitra</td>
                <td>20mg</td>
                <td>10 minutes
                  - 1 hour</td>
                <td>take with a glass of water</td>
                <td>no</td>
                <td>12 hours</td>
              </tr>
              </tbody></table></div>
          <h2 id="ordering">How to Order</h2>
          <h3>Should I have a prescription to order from you?</h3>
          <p>Some products available in our pharmacy require a valid prescription. If the law of your country or territory requires you to obtain prescription for any of the products which you plan to purchase you will be asked by our customer support representative to send it after you complete the order.</p>
  
          <p>Please be informed that we require a valid prescription for your order.
            You should fax it to <img alt="" src="imgs/prescription-phone.gif"> or send a scan copy to the email <img alt="" src="imgs/prescription-email.gif">.
            Please be advised that in case you don\'t provide a valid prescription within a three-day period your order will not be processed.</p>
          <p>We strongly recommend you to consult your physician, prior to ordering, to be sure that the medicine you are about to order, is the one you need. </p>
  
  
          <h3>What should I do to order from you?</h3>
          <p>NOTE: We only accept orders placed on the website. We do not accept orders over the phone or by e-mail messaging.</p>
          <p>If you wish to order a product from us you are to do the following:</p>
          <ol>
            <li>Choose the product you want to purchase by clicking "Buy now" button</li>
            <li>Choose the amount of product you wish to buy</li>
            <li>Click "Checkout"</li>
            <li>Fill in the order information required</li>
            <li>Check all the fields, product quantity and press the "Submit transaction" button</li>
            <li>If the order is accepted you will see the notification on the screen and the order confirmation message will be automatically sent to the e-mail address you specify. This message is very important, in case you do not receive it within 10 minutes, let us know and we will resend it. This message can be downloaded from your <a rel="nofollow" href="account.php">account section</a>.</li>
          </ol>
          <h3>What payment methods do you have?</h3>
          <p>We have the following payment methods:</p>
          <ul>
            <li>Payment by a credit card</li>
            <!--<li>Money Gram</li>
            <li>Western Union</li>-->
          </ul>
          <!--
          <h3>How to choose a wire method? When will my order be sent in this case?</h3>
          <p>To pay by wire you are to do the following:</p>
          <ul>
              <li>Choose the product you wish to order</li>
              <li>Go to the "Checkout" page, check the wire payment box, fill in the order form and click on the "Submit transaction" button.</li>
              <li>If all the information you have inserted is correct, you will see the text of the order confirmation message on the screen, the address where the wire should be sent to is given in this message. The very same message will be sent to your e-mail box however we advise you to save this text to your hard drive in case the message is not delivered.</li>
              <li>Send the wire to the address specified within 48 hour after you place the order.</li>
              <li>As soon as we receive the payment (it will take about 3-5 days), the product will be sent out.</li></ul>
          <p><b>Note:</b> the order is considered to be paid and thus the product will be sent out only in case we get the FULL amount from you.</p>
           -->
          <h3>When will you actually post the charge?</h3>
          <p>The order procedure is executed in the following way:</p>
          <ol>
            <li>As soon as you fill in the form at the checkout page and press the "Submit" button, the information is transmitted to our processing centre where it is checked and thus the credit card is charged.</li>
            <li>As soon as the payment is authorized, your order is approved and processed.</li>
          </ol>
          <h3>Is it secure to give my credit card information at your site?</h3>
          <p>We take the security of our customers seriously and thus we take reasonable steps to protect your information. For submitting the order you are redirected to the secure order page. The security of the page can be easily checked: an icon resembling a padlock is displayed on the bottom of most browsers window, this shows that the information you insert into the form is SSL (Secure Socket Layer) encrypted when transmitted to our credit card processing company. Please remember that a secure page begins with "https:" while insecure ones begin with "http:" without the "s" at the end.</p>
          <p>In addition to Web browser security, our servers are checked daily for any security risks by reputable companies such as McAfee and WebSafe. You can check our security certificates <a id="sbcertificatesurl" href="https://ssl-checkout-page.com/certificates.php">here</a>.</p>
          <h3>Do you have any discount system?</h3>
          <p>Yes, we do. Please, check it out <a rel="nofollow" href="bonuses.php">here</a>.</p>
          <h2 id="shipping" class="faq">Shipping</h2>
          <h3>Do you ship to my area?</h3>
          <p>The orders are shipped to almost all countries of the world, for the exception of some countries in Asia.</p>
          <h3>Where the pills are sent from?</h3>
          The medications are manufactured in India, thus the orders are processed and sent out from there.
          <h3>What packages do you use? Will I have to sign for the shipment?</h3>
          <p>Your privacy is very important for us. Your order will be sent in a discrete envelope that will be left in your mail box. You will not have to sign for it in case the order is sent by Standard Mail.</p>
          <h3>Will my order be shipped the same day I purchase?</h3>
          <p>The products we sell are in stock for immediate delivery. However we have to check your order first to make sure that the shipping information is correct, after that the product you have ordered is packed and only then it is sent out. All these procedures take about 1-2 days.</p>
          <h3>What are the shipping methods? When can I expect the delivery?</h3>
          <p>Currently we offer two shipping methods:</p>
          <ol>
            <li>Express International Mail: the packages sent by this postal service can be tracked by the tracking number supplied after the order is shipped. See your <a rel="nofollow" href="account.php">account section</a>. Please, note, however, that in some cases we reserve the right to send your order without a tracking number but with the same delivery time as it would be in case of Express Mail. This is done mostly in cases when we need to secure successful delivery to European countries and Canada.</a></li>
            <li>Standard International Airmail: the packages sent by this postal service can NOT be tracked.</li>
          </ol>
          <div class="scrollable" style="overflow: auto; max-width: 100%;">
            <table class="simple" >
              <thead>
              <tr>
                <th>Shipping Option</th>
                <th>Rates</th>
                <th>Delivery</th>
                <th>Tracking</th>
              </tr>
              </thead>
              <tbody id="shipment_tbody">
              <tr>
                <td>Express International Mail <sup>*</sup></td>
                <td>$<script type="text/javascript">document.write(ship_2_price)</script></td>
                <td>5-9 days</td>
                <td>yes</td>
              </tr>
              <tr>
                <td>Standard International Airmail</td>
                <td>$<script type="text/javascript">document.write(ship_1_price)</script></td>
                <td>10-21 days</td>
                <td>no</td>
              </tr>
              </tbody></table></div>
          <p><sup>*</sup> We will not be able to send your order by Express International Mail if you specify a  mail forwarding address (e.g. PO box, General delivery, Poste restante, UPS store, APO/FPO), hotel or educational facility in your shipping address or if you give us a wrong telephone number.</p>
          <p>Please Note! When you order some brand products, the Standard airmail service may be unavailable as a shipping method. The order will be delivered by Express International Mail.</p>
  
          <p>Please, keep in mind that the time of delivery specified here is the estimated delivery time which is true for most cases,
            but cannot be guaranteed due to the probability of force majeure events described below.</p>
          <p>Please, note that our company is not liable for extended delays due to the customs inspections of international mail.</p>
          <p>Also, we shall not be liable for delays in deliveries due to mail disruptions during the Christmas and New Year celebration, natural disasters, strikes and other events which disrupt mailing process being beyond our control.</p>
  
  
          <h3>What are the shipping rates?</h3>
          <p>The shipping rates may vary depending on the shipping option you choose, country of destination, and the amount of products you order. To find out the shipping cost, add desired products to shopping cart, and proceed to checkout.</p>
          <h3>Can my order be delayed at customs?</h3>
          <p>If this happen, you\'ll be informed. They ask the recipient to come and give a permission to examine the parcel. After that you should receive your products. If you have any problems with getting your order, please let us know and we will try to resolve the problem.</p>
          <h3>What if the package is damaged or something is missing?</h3>
          <p>In this case you should contact our support team and notify of the problem. We will either resend the package or refund your payment. See our <a rel="nofollow" href="policies.php">Policies</a> for more information.</p>
          <p>Please note that, if your order consists of 90 pills or more, the order will be sent in several packages.</p>
          <h3>How much will I have to pay if you reship the product?</h3>
          <p>We will reship the product free of charges. No additional charges will be placed.</p>
  
          <h2 id="track">Managing Orders</h2>
          <h3>How can I check the status of my order?</h3>
          <p>There are 2 options to do that:</p>
          <ul>
            <li>to contact our support team (<a rel="nofollow" href="contact.php">Contact Us</a>)</li>
            <li>to check the status from the web site (<a rel="nofollow" href="account.php">Account</a>)</li>
          </ul>
          <p>Your bonus, the status of your recent order, the dispatch date and the approximate day of the delivery can be checked in your <a rel="nofollow" href="account.php">account section</a>. To enter your account section you need to insert the order number, your e-mail address and the verification code (the digits in the box next to the "Verification code" field).</p>
          <p>In case your order was sent by a Express International Mail, the tracking number can also be obtained from the same page.</p>
          <h3>The order has not been sent out yet. I need to change the shipping details. What should I do?</h3>
          <p>In your <a rel="nofollow" href="account.php">account section</a> you can leave us a message to cancel the order or to change the shipping information.</p>
          <h3>I need to cancel the order. Please, advise.</h3>
          <p>Please check our <a rel="nofollow" href="policy.php#refund">Reimbursements and Returns Policy</a>.</p>
          <h2 id="business" class="faq">Business Opportunities</h2>
          <!--
          <h3>Interested in doing business with us?</h3>
          <p>Please check the benefits of our affiliate program:</p>
          <ul>
              <li>up to 50% reshare commission</li>
              <li>free hosting for your sites</li>
              <li>real time statistics</li>
              <li>individually suited commissions</li>
          </ul>
          <p>And many more tools to make earning cash easy.</p>
          <p>Check the details of our program and sign up <a href="http://rx-partners.biz/register.php?site=tt">here</a>.</p>
          -->
          <h3>Want to become our supplier and offer new products?</h3>
          <p>We will be glad to consider your proposal. Please send the details to our <a rel="nofollow" href="contact.php">e-mail address</a>. Please, be informed that the products you offer should comply with the quality requirements and should come with the quality certificates.</p>
              ',
    ],
];

$_VARS['page-policies'] = [
    
    'layout'=>['layout_second'],

    [

       'layout_second'=>[
            [
                'page-class'=>'layout_second page-policies',
            ],
        ],

      'data_page-policies'=>'
          <ul>
            <li><a href="#shipping">Shipping Policy</a></li>
            <li><a href="#cancellation">Order Cancellation Policy</a></li>
            <li><a href="#refund">Refund Policy</a></li>
            <li><a href="#privacy">Privacy Policy</a></li>
            <li><a href="#disclaimer">Disclaimer</a></li>
          </ul>
          <h2 id="shipping">Shipping Policy</h2>
          <p>The medicines we offer are manufactured and shipped from India. It is a long way thus the delivery takes time. Usually, the shipments are delivered within 10-17 days but in some cases there may be a delay for 5 more days.</p>
          <p>In case of non-delivery after the dead-line, please contact us to inform of the matter. We will try our best to offer you the solution that will fully meet your interests. Click <a rel="nofollow" href="faq.php#shipping">here</a> to learn more about shipping.</p>
          <h2 id="cancellation">Order Cancellation Policy</h2>
          <p>Please, be informed that we accept order cancellations ONLY within 24 hours after order submitting. If you wish to cancel the order you have to contact our support team by phone or e-mail ( <a rel="nofollow" href="contact.php">Contact us</a> ) and let them know of your decision. In case you contact us after 24 hours, no order cancellation will be processed.</p>
          <p>Make sure that you insert a valid shipping address in the order form, we recommend you to double check the notes before submitting the order. Any mistake may cause non-delivery of ordered products. If you have noticed that the address notes were specified incorrectly, contact us as soon as you can to inform of the matter ( <a rel="nofollow" href="contact.php">Contact us</a> ).</p>
          <h2 id="refund">Refund Policy</h2>
          <p>The medications we offer are generically equivalent to their brand-name counterparts. We guarantee that they are the same chemically and have the same medical effect.</p>
          <p>In case you are not satisfied with the effect our medications produce, please <a rel="nofollow" href="contact.php">contact us</a> to inform of the problem. We will supply you with the return address and as soon as the product is received by our returns department, we will start the refund procedure.</p>
          <p>Before contacting us, please, make sure that you take the right dosage of the products and follow the instructions for use. Mind that the effects can be slowed down by fatty food and alcohol you take prior to the tab.</p>
          <p>In case of <strong>non-delivery of the product</strong> by the dead line (the delivery takes 10-17 days, there may be an additional delay for 5 days for the customs checking) you can contact our support team ( <a rel="nofollow" href="contact.php">Contact us</a> ) to qualify for a refund. Your payment will be fully reimbursed to your credit card. The refund procedure usually takes 5-7 business days, after this period the refund will be reflected at your credit card statement.</p>
          <p>Due to the specific nature of products we offer we do not accept returns. No one can guarantee that the storage conditions are met during the order transportation thus we cannot accept them even if the package remains unopened.</p>
          <h2 id="privacy">Privacy Policy</h2>
          <p>We understand that the privacy of all information you provide is of a primary importance. This is why we do everything possible to use it carefully and sensibly. This information is never shared with other companies or third party service providers.</p>
          <p>All transactions on our checkout page are 100% secure. We protect the security of your information by using 256 bit Secure Sockets Layer (SSL) software, which encrypts all information you input. In addition our billing servers are certified by independent and reputable agencies that ensure that we keep your information safe and private.</p>
          <p>Only the last 4 digits of your credit card are reflected in our database thus even our customer support operators do not have any access to the credit card information.</p>
          <h2 id="disclaimer">Disclaimer</h2>
          <ol>
            <li>Our company is not responsible for, and expressly disclaims all liability for any delay in delivery which does not exceed 10 days after the specified estimated delivery date. 10 (ten) days after the specified estimated delivery date, or the next business day, in case of a local holiday, is considered a deadline.</li>
            <li>Our company is not responsible for failed delivery in case if Customer specified an insufficient address, wrong address or an address which does not lead to a successful delivery in any other way.
              <br> Our company is not responsible for failed delivery in case if Customer failed to claim the package, refused it or prevented a successful delivery in any other way. All reships in such cases are made only via International Regular Mail.</li>
            <li>Our company is not responsible for, and expressly disclaims all liability for a delivery of any generic product which does not meet Customer\'s expectations by criteria such as – color, shape and size of the pill, presence of any marking printed on, or branded upon pill, bearing a marketing name, or being made by a manufacturer different from the one Customer expected to get.
              <br> For any generic product, all of the product information presented on the website, such as, but not limited to – thumbnails, product images, manufacturer names and marketing names, are there solely for information purposes.</li>
  
            <li>Our company is not responsible for, and expressly disclaims all liability for lack of efficiency of the received product in case the product was purchased for off-label use.</li>
            <li>By placing an order with our company, you confirm that you have read, understood and agreed with this disclaimer. Any action taken to claim your payment back for any of the reasons listed above, will be considered a fraudulent action and may lead to legal action and ban from our system.</li>
          </ol>
              ',
    ],
];


