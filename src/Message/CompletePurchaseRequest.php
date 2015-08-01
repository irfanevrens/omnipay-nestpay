<?php namespace Omnipay\NestPay\Message;

/**
 * NestPay Complete Purchase Request
 * 
 * (c) Yasin Kuyu
 * 2015, insya.com
 * http://www.github.com/yasinkuyu/omnipay-nestpay
 */
class CompletePurchaseRequest extends PurchaseRequest
{
    public function getData()
    {
        $this->validate('transactionReference', 'amount', 'currency');

        $data['Name'] = $this->getClientId();
        $data['ClientId'] = $this->getClientId();
        $data['Password'] = $this->getPassword();
        $data['Type'] =  'PostAuth';
        $data['OrderId'] = $this->transactionReference();
        
        return $data;
    }
}
