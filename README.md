## QuickPay_Magento2

Module QuickPay\Payment implements integration with the QuickPay payment service provider.

Currently in beta release, use at your own risk. Pull requests welcome!

Tested in Magento 2.1.2 - 2.3

Implemented so far:
* Authorize
* Capture 
* Partial Capture
* Refund
* Partial Refund
* Cancel
* Payment Fees

### Installation
```
composer require quickpay/magento2
php bin/magento module:enable QuickPay_Payment
php bin/magento setup:upgrade
php bin/magento setup:di:compile
``` 

**Please note that FTP installation will not work as this module has requirements that will be auto installed when using composer**
