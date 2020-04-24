<h1>Choose Your Shipping method</h1>

<div class="ship-cart">
    <table class="ship-cart__tbl">
        <thead>
            <tr>
                <th colspan="3">Shopping cart</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="ship-cart__body-prod">
                    <img src="img/pills/viagra.png" alt="">
                    Viagra Professional
                    <? render('block_profits') ?>
                </td>
                <td class="ship-cart__body-dosage">
                    50mg
                    <span>120 tablets</span>
                    <div><a href="">Click here</a> to upgrade to 50mg × 270 tablet and <i>save $ 63.38</i></div>
                </td>
                <td class="ship-cart__body-price">
                    $23.23
                    <span>$1.23 per pill</span>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td>Viagra Professional</td>
                <td>50mg <span>120 tablets</span></td>
                <td>Free</td>
            </tr>
        </tfoot>
    </table>
</div>

<div class="ship-method">
    <table>
        <thead>
            <tr>
                <th>Shipping methods</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td>
                    <button class="btn">Continue Shopping</button>
                    <button class="btn">Checkout</button>
                </td>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <td>
                    <button class="btn">Free registered mail shipping 10-21 days $0</button>
                    <button class="btn">Another shipping  $12.12</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<? render('block_checkout-control') ?>