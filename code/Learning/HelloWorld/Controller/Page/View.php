<?php

declare(strict_types=1);

namespace Learning\HelloWorld\Controller\Page;

use Magento\Framework\View\Result\Json;
use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

class View extends Action
{
    public function execute()
    {
        /** @var Json $jsonResult */
        $jsonResult = $this->resultFactory->create(ResultFactory::TYPE_JSON);
        $jsonResult->setData([
            'message' => 'My First Page'
        ]);
        return $jsonResult;
    }
}