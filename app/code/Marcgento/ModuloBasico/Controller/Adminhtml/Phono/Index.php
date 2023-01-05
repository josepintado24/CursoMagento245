<?php


namespace Marcgento\ModuloBasico\Controller\Adminhtml\Phono;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Backend\App\Action
{
    protected $resultPageFactory;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ){
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Marcgento_ModuloBasico::phono');
        $resultPage->addBreadcrumb(__('Grid Phono'), __('Grid Phono'));
        $resultPage->addBreadcrumb(__('Manage Phono'), __('Manage Phono'));
        $resultPage->getConfig()->getTitle()->prepend(__('Phono Title'));
        return $resultPage;
    }

    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Marcgento_ModuloBasico::Phono');
    }
}
