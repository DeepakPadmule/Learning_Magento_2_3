<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Capstone\CustomCOD\Model;
 
/**
 * Pay In Store payment method model
 */
class CustomCOD extends \Magento\Payment\Model\Method\AbstractMethod
{
 
    /**
     * Payment code
     *
     * @var string
     */
    protected $_code = 'customcod';
 
    /**
     * Availability option
     *
     * @var bool
     */
    protected $_isOffline = true;
}