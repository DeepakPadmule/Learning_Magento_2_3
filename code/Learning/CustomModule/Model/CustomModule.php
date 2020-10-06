<?php
namespace Learning\CustomModule\Model;
use Magento\Framework\Model\AbstractModel;

class CustomModule extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Learning\CustomModule\Model\ResourceModel\CustomModule');
    }
}