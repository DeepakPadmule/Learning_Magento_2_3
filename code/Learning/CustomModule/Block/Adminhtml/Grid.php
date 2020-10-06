<?php

namespace Learning\CustomModule\Block\Adminhtml;

use Magento\Backend\Block\Widget\Grid\Container;

class Grid  extends Container
{
    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_controller = 'adminhtml_grid';
        $this->_blockGroup = 'Learning_CustomModule';
        $this->_headerText = __('Custom Grid');
        parent::_construct();
        $this->removeButton('add');
    }
}