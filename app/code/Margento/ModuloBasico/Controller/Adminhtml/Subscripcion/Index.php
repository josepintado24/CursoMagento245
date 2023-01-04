<?php

namespace Margento\ModuloBasico\Controller\Adminhtml\Subscripcion;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Backend\App\Action

{
    protected $resultPageFactory;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Margento_ModuloBasico::subscripcion');
        $resultPage->addBreadcrumb(__('Grid Subscripcion'), __('Grid Subscripcion'));
        $resultPage->addBreadcrumb(__('Manage Subscripcion'), __('Manage Subscripcion'));
        $resultPage->getConfig()->getTitle()->prepend(__('Subscripcion'));
        return $resultPage;
    }

    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Margento_ModuloBasico::subscripcion');
    }
}
