// ----------------------------------------------------------------------------

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code
// EDIT THE CORRESPONDENT .ts FILE INSTEAD

'use strict';
// ----------------------------------------------------------------------------
import testOrderBook from '../../../test/Exchange/base/test.orderBook.js';
import errors from '../../../base/errors.js';
/*  ------------------------------------------------------------------------ */
export default async (exchange, symbol) => {
    // log (symbol.green, 'watching order book...')
    const method = 'watchOrderBook';
    // we have to skip some exchanges here due to the frequency of trading or to other factors
    const skippedExchanges = [
        'cex',
        'kucoin',
        'luno',
        'ripio',
        'gopax',
        'woo',
        'alpaca', // requires auth
    ];
    if (skippedExchanges.includes(exchange.id)) {
        console.log(exchange.id, method, '() test skipped');
        return;
    }
    if (!exchange.has[method]) {
        console.log(exchange.id, 'does not support', method, '() method');
        return;
    }
    let response = undefined;
    let now = Date.now();
    const ends = now + 10000;
    while (now < ends) {
        try {
            response = await exchange[method](symbol);
            testOrderBook(exchange, method, response, symbol);
        }
        catch (e) {
            if (!(e instanceof errors.NetworkError)) {
                throw e;
            }
        }
        now = Date.now();
    }
    return response;
};
