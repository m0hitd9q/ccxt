
import assert from 'assert';
import testFundingRateHistory from './base/test.fundingRateHistory.js';
import testSharedMethods from './base/test.sharedMethods.js';

async function testFetchFundingRateHistory (exchange, symbol) {
    const method = 'fetchFundingRateHistory';
    const fundingRatesHistory = await exchange.fetchFundingRateHistory (symbol);
    assert (Array.isArray (fundingRatesHistory), exchange.id + ' ' + method + ' ' + symbol + ' must return an array, returned ' + exchange.json (fundingRatesHistory));
    for (let i = 0; i < fundingRatesHistory.length; i++) {
        testFundingRateHistory (exchange, method, fundingRatesHistory[i], symbol);
    }
    testSharedMethods.assertTimestampOrder (exchange, method, symbol, fundingRatesHistory);
}

export default testFetchFundingRateHistory;
