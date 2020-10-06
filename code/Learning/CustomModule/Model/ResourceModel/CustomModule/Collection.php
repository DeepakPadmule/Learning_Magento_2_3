<?php
namespace Learning\CustomModule\Model\ResourceModel\CustomModule;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Learning\CustomModule\Model\CustomModule',
            'Learning\CustomModule\Model\ResourceModel\CustomModule'
        );
    }
}