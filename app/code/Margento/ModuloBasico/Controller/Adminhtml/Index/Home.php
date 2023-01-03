<?php

namespace Margento\ModuloBasico\Controller\Adminhtml\Index;

use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\Action;

class Home extends Action
{
    private $pageFactory;
    public function __construct(Context $context, PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
        parent::__construct($context);
    }
    public function execute()
    {

        return $this->pageFactory->create();
    }
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Margento_ModuloBasico::index');
    }
}
