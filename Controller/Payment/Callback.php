<?php

namespace QuickPay\Payment\Controller\Payment;

if (interface_exists("\Magento\Framework\App\CsrfAwareActionInterface")) {
    class Callback extends AbstractCallback implements \Magento\Framework\App\CsrfAwareActionInterface {}
} else {
    class Callback extends AbstractCallback {}
}
