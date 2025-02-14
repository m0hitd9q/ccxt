import os
import sys

root = os.path.dirname(os.path.dirname(os.path.dirname(os.path.dirname(os.path.abspath(__file__)))))
sys.path.append(root)

# ----------------------------------------------------------------------------

# PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
# https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code

# ----------------------------------------------------------------------------
# -*- coding: utf-8 -*-


from ccxt.test.base import test_open_interest  # noqa E402


async def test_fetch_open_interest_history(exchange, symbol):
    method = 'fetchOpenInterestHistory'
    open_interest_history = await exchange.fetch_open_interest_history(symbol)
    assert isinstance(open_interest_history, list), exchange.id + ' ' + method + ' must return an array, returned ' + exchange.json(open_interest_history)
    for i in range(0, len(open_interest_history)):
        test_open_interest(exchange, method, open_interest_history[i])
