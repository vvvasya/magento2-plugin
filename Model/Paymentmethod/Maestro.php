<?php
/**
 * Copyright © 2020 PAY. All rights reserved.
 */

namespace Paynl\Payment\Model\Paymentmethod;

/**
 * Description of Ideal
 *
 * @author Andy Pieters <andy@pay.nl>
 */
class Maestro extends \Paynl\Payment\Model\Paymentmethod\PaymentMethod
{
    protected $_code = 'paynl_payment_maestro';

    protected function getDefaultPaymentOptionId()
    {
        return 712;
    }
}