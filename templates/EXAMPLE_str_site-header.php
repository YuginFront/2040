<?php
/**
 * @rendered at: type_second, type_base,
 */
?>


<header class="site-header">
	<div class="top-line-xs hidden-lg">
		<div class="btn-menu js-classSwitch" data-dbx-name=".swipe-menu,.swipe-overlay">
          <div class="btn-menu-inner">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
        
		<a href="" class="logo-xs">
			<img src="img/logo.png" alt="">
		</a>

		<? render('form-header-search',_var('data_form-header-search')); ?>

		<div class="round-cart icon icon-cart"></div>
	</div>
	<div class="swipe-menu">
		<div class="top-line">
			<div class="site clearfix">
				<? render('list-menu',_var('data_list-contacts')); ?>
				<? render('blocks_switchers',_var('data_blocks_switchers')); ?>
				<div class="icon icon-close-white hidden-lg"></div>
			</div>
		</div>
		<div class="header-content-box">
			<div class="site header-content">
					<a href="/" class="logo hidden-dev">
						<img src="<? _var('src_logo-desktop') ?>" alt="<? _var('alt_logo-img') ?>">
					</a>
					<div class="cart-box">
						<div class="round-cart icon icon-cart"></div>
						<div class="cart-info">
							<div class="cart-total">3 items</div>
							<div class="cart-amount">$134.99</div>
						</div>
						<div class="btn-sm icon icon-cart btn-checkout">Checkout</div>
					</div>
					<nav class="header-nav">
								<div class="header-menu-item all-categories icon icon-arrow-down-circle-white js-classSwitch" data-dbx-name=".list-categories">
								<a href="" class="hidden-dev">All categories</a>
							</div>
								<ul class="list-categories">
							         <li class="icon icon-arrow-right"><a href="">Alcoholism</a></li>
							         <li class="icon icon-arrow-right"><a href="">Alzheimer's And Parkinson's</a></li>
							         <li class="icon icon-arrow-right"><a href="">Analgesics</a></li>
							         <li class="icon icon-arrow-right"><a href="">Anti-inflammatories</a></li>
							         <li class="icon icon-arrow-right"><a href="">Antiallergic</a></li>
							         <li class="icon icon-arrow-right"><a href="">Anticonvulsants</a></li>
							         <li class="icon icon-arrow-right"><a href="">Antidepressants</a></li>
							         <li class="icon icon-arrow-right"><a href="">Antifungals</a></li>
							         <li class="icon icon-arrow-right"><a href="">Alcoholism</a></li>
							         <li class="icon icon-arrow-right"><a href="">Alzheimer's And Parkinson's</a></li>
							         <li class="icon icon-arrow-right"><a href="">Analgesics</a></li>
							         <li class="icon icon-arrow-right"><a href="">Anti-inflammatories</a></li>
							         <li class="icon icon-arrow-right"><a href="">Antiallergic</a></li>
							         <li class="icon icon-arrow-right"><a href="">Anticonvulsants</a></li>
							         <li class="icon icon-arrow-right"><a href="">Antidepressants</a></li>
							         <!-- <li class="icon icon-arrow-right"><a href="">Anti-inflammatories</a></li>
							         <li class="icon icon-arrow-right"><a href="">Antiallergic</a></li>
							         <li class="icon icon-arrow-right"><a href="">Alcoholism</a></li>
							         <li class="icon icon-arrow-right"><a href="">Alzheimer's And Parkinson's</a></li>
							         <li class="icon icon-arrow-right"><a href="">Analgesics</a></li>
							         <li class="icon icon-arrow-right"><a href="">Anti-inflammatories</a></li>
							         <li class="icon icon-arrow-right"><a href="">Antiallergic</a></li> -->
						        </ul>
						<ul class="header-menu">

							<li class="header-menu-item">
								<a href="">
									Bestsellers
								</a>
							</li>
							<li class="header-menu-item">
								<a href="">
									FAQ
								</a>
							</li>
							<li class="header-menu-item">
								<a href="">
									Policies
								</a>
							</li>
							<li class="header-menu-item">
								<a href="">
									Contact Us
								</a>
							</li>
							<li class="header-menu-item">
								<a href="">
									Track Order
								</a>
							</li>
							<li class="header-menu-item">
								<a href="">
									About Us
								</a>
							</li>
						</ul>
				    </nav>

			</div>
		</div>
		<ul class="no-list list-contacts hidden-lg">
			<li class="list-contacts-item icon icon-phone-sm">
	  			<img src="img/phone-1.png" alt=""> 
	  		</li>
			<li class="list-contacts-item icon icon-phone-sm">
	  			<img src="img/phone-2.png" alt="">
	  		</li>
		</ul>
		<? render('list-benefits',_var('data_list-benefits-item')); ?>
	</div>
				 <div class="header-search site hidden-dev">
			    	
					<? render('form-header-search',_var('data_form-header-search')); ?>
				</div>
</header>
