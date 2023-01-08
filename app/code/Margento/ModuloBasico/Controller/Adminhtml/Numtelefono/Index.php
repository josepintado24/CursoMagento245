<?php

namespace Margento\ModuloBasico\Controller\Adminhtml\Numtelefono;

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
        $resultPage->setActiveMenu('Margento_ModuloBasico::numtelefono');
        $resultPage->addBreadcrumb(__('Grid numtelefono'), __('Grid numtelefono'));
        $resultPage->addBreadcrumb(__('Manage numtelefono'), __('Manage numtelefono'));
        $resultPage->getConfig()->getTitle()->prepend(__('Reserva de numero de telefonos'));
        return $resultPage;
    }

    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Margento_ModuloBasico::numtelefono');
    }
}
