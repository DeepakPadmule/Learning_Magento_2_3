<?php
namespace Learning\CustomModule\Controller\Adminhtml\Page;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

/**
 * Class Index
 */
class View extends Action implements HttpGetActionInterface
{
    const MENU_ID = 'Learning_CustomModule::custom_module';

    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * Index constructor.
     *
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);

        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * Load the page defined in view/adminhtml/layout/exampleadminnewpage_helloworld_index.xml
     *
     * @return Page
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu(static::MENU_ID);
        // $resultPage->getConfig()->getTitle()->prepend(__('Custom Data'));
        return $resultPage;
    }

    // public function execute()
    // {
    //     $connection = Mage::getModel('catalog/product')->getConnection('core_read');
    //     $sql = 'SELECT * FROM `sales_flat_order`';
    //     $orders = $connection->fetchAll($sql);
    // }
}
