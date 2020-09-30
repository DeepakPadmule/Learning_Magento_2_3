<?php

namespace Learning\PluginModule\Plugin;

class Product
{
    // created for testing purpose
    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
    {
        // echo 'Hello from Plugin/Product.php';
        return $result;
    }

}