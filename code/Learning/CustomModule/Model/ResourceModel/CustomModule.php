<?php
namespace Learning\CustomModule\Model\ResourceModel;
class CustomModule extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('learning_custom_table', 'test_id');   //here "learning_custom_table" is table name and "test_id" is the primary key of custom table
    }
}