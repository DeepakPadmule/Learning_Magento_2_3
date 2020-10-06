<?php

namespace Learning\CustomModule\Controller\Adminhtml\Grid;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
// use Magento\Backend\Model\View\Result\Page as PageFactory;
class Index extends Action
{
    protected $resultPageFactory;
    public function __construct(Context $context, PageFactory $resultPageFactory)
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }
    
    public function execute()
    {
        // print_r('we are in Grid\Index.php');
        $this->_view->loadLayout();
        $resultPage = $this->resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->prepend(__('Custom Data Grid'));
        $resultPage->setActiveMenu('Learning_CustomModule::custom_module');
        $resultPage->addBreadcrumb(__('Grid'), __('Grid'));
        $this->_addContent($this->_view->getLayout()->createBlock('Learning\CustomModule\Block\Adminhtml\Grid\Grid'));
        $this->_view->renderLayout();
    }
    protected function _isAllowed()
    {
        return true;
    }
}