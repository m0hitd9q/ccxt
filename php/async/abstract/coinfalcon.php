<?php

namespace ccxt\async\abstract;

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code


abstract class coinfalcon extends \ccxt\async\Exchange {
    public function public_get_markets($params = array()) {
        return $this->request('markets', 'public', 'GET', $params);
    }
    public function public_get_markets_market($params = array()) {
        return $this->request('markets/{market}', 'public', 'GET', $params);
    }
    public function public_get_markets_market_orders($params = array()) {
        return $this->request('markets/{market}/orders', 'public', 'GET', $params);
    }
    public function public_get_markets_market_trades($params = array()) {
        return $this->request('markets/{market}/trades', 'public', 'GET', $params);
    }
    public function private_get_user_accounts($params = array()) {
        return $this->request('user/accounts', 'private', 'GET', $params);
    }
    public function private_get_user_orders($params = array()) {
        return $this->request('user/orders', 'private', 'GET', $params);
    }
    public function private_get_user_orders_id($params = array()) {
        return $this->request('user/orders/{id}', 'private', 'GET', $params);
    }
    public function private_get_user_orders_id_trades($params = array()) {
        return $this->request('user/orders/{id}/trades', 'private', 'GET', $params);
    }
    public function private_get_user_trades($params = array()) {
        return $this->request('user/trades', 'private', 'GET', $params);
    }
    public function private_get_user_fees($params = array()) {
        return $this->request('user/fees', 'private', 'GET', $params);
    }
    public function private_get_account_withdrawals_id($params = array()) {
        return $this->request('account/withdrawals/{id}', 'private', 'GET', $params);
    }
    public function private_get_account_withdrawals($params = array()) {
        return $this->request('account/withdrawals', 'private', 'GET', $params);
    }
    public function private_get_account_deposit_id($params = array()) {
        return $this->request('account/deposit/{id}', 'private', 'GET', $params);
    }
    public function private_get_account_deposits($params = array()) {
        return $this->request('account/deposits', 'private', 'GET', $params);
    }
    public function private_get_account_deposit_address($params = array()) {
        return $this->request('account/deposit_address', 'private', 'GET', $params);
    }
    public function private_post_user_orders($params = array()) {
        return $this->request('user/orders', 'private', 'POST', $params);
    }
    public function private_post_account_withdraw($params = array()) {
        return $this->request('account/withdraw', 'private', 'POST', $params);
    }
    public function private_delete_user_orders_id($params = array()) {
        return $this->request('user/orders/{id}', 'private', 'DELETE', $params);
    }
    public function private_delete_account_withdrawals_id($params = array()) {
        return $this->request('account/withdrawals/{id}', 'private', 'DELETE', $params);
    }
    public function publicGetMarkets($params = array()) {
        return $this->request('markets', 'public', 'GET', $params);
    }
    public function publicGetMarketsMarket($params = array()) {
        return $this->request('markets/{market}', 'public', 'GET', $params);
    }
    public function publicGetMarketsMarketOrders($params = array()) {
        return $this->request('markets/{market}/orders', 'public', 'GET', $params);
    }
    public function publicGetMarketsMarketTrades($params = array()) {
        return $this->request('markets/{market}/trades', 'public', 'GET', $params);
    }
    public function privateGetUserAccounts($params = array()) {
        return $this->request('user/accounts', 'private', 'GET', $params);
    }
    public function privateGetUserOrders($params = array()) {
        return $this->request('user/orders', 'private', 'GET', $params);
    }
    public function privateGetUserOrdersId($params = array()) {
        return $this->request('user/orders/{id}', 'private', 'GET', $params);
    }
    public function privateGetUserOrdersIdTrades($params = array()) {
        return $this->request('user/orders/{id}/trades', 'private', 'GET', $params);
    }
    public function privateGetUserTrades($params = array()) {
        return $this->request('user/trades', 'private', 'GET', $params);
    }
    public function privateGetUserFees($params = array()) {
        return $this->request('user/fees', 'private', 'GET', $params);
    }
    public function privateGetAccountWithdrawalsId($params = array()) {
        return $this->request('account/withdrawals/{id}', 'private', 'GET', $params);
    }
    public function privateGetAccountWithdrawals($params = array()) {
        return $this->request('account/withdrawals', 'private', 'GET', $params);
    }
    public function privateGetAccountDepositId($params = array()) {
        return $this->request('account/deposit/{id}', 'private', 'GET', $params);
    }
    public function privateGetAccountDeposits($params = array()) {
        return $this->request('account/deposits', 'private', 'GET', $params);
    }
    public function privateGetAccountDepositAddress($params = array()) {
        return $this->request('account/deposit_address', 'private', 'GET', $params);
    }
    public function privatePostUserOrders($params = array()) {
        return $this->request('user/orders', 'private', 'POST', $params);
    }
    public function privatePostAccountWithdraw($params = array()) {
        return $this->request('account/withdraw', 'private', 'POST', $params);
    }
    public function privateDeleteUserOrdersId($params = array()) {
        return $this->request('user/orders/{id}', 'private', 'DELETE', $params);
    }
    public function privateDeleteAccountWithdrawalsId($params = array()) {
        return $this->request('account/withdrawals/{id}', 'private', 'DELETE', $params);
    }
}