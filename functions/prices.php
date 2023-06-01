<?php 

function price($price, $currency = "€") {
    return number_format( $price / 100, 2, ",", " " ) . " " . $currency;
}

function priceWithTax($price, $tax = 20) {
    return price( $price * (1 + $tax) );
}