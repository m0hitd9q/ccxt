<?php
namespace ccxt;
use \ccxt\Precise;
use React\Async;
use React\Promise;

// ----------------------------------------------------------------------------

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code

// -----------------------------------------------------------------------------
include_once __DIR__ . '/../base/test_order_book.php';

function test_fetch_l2_order_book($exchange, $symbol) {
    return Async\async(function () use ($exchange, $symbol) {
        $method = 'fetchL2OrderBook';
        $order_book = Async\await($exchange->fetch_l2_order_book($symbol));
        test_order_book($exchange, $method, $order_book, $symbol);
    }) ();
}
