
import testLedgerEntry from './base/test.ledgerEntry.js';

async function testFetchLedgerEntry (exchange, code) {
    const method = 'fetchLedgerEntry';
    const items = await exchange.fetchLedger (code);
    const length = items.length;
    if (length > 0) {
        const item = await exchange.fetchLedgerEntry (items[0].id);
        const now = exchange.milliseconds ();
        testLedgerEntry (exchange, method, item, code, now);
    }
}

export default testFetchLedgerEntry;
