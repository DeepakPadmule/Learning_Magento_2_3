<?php

namespace Learning\CustomModule\Controller\Page;

use Magento\Framework\App\Action\Context;
use Learning\CustomModule\Model\CustomModuleFactory;

class Save extends \Magento\Framework\App\Action\Action
{
	/**
     * @var CustomModule
     */
    protected $_custom_module;

	public function __construct(Context $context, CustomModuleFactory $custom_module) 
    {
        $this->_custom_module = $custom_module;
        parent::__construct($context);
    }

	public function execute()
    {
        $data = $this->getRequest()->getParams();
    	$custom_module = $this->_custom_module->create();
        $custom_module->setData($data);
        if($custom_module->save())
        {
            $this->messageManager->addSuccessMessage(__('You saved the data.'));
        }
        else
        {
            $this->messageManager->addErrorMessage(__('Data was not saved.'));
        }
        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setPath('custom_module/page/view');
        return $resultRedirect;
    }
}