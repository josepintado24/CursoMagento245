<?php

// declare(strict_types=1);

namespace Margento\ModuloBasico\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;


/**
 * Class Index
 */
class Index extends Action
{
    /**
     * @var PageFactory
     */
    private $pageFactory;

    /**
     * @var RequestInterface
     */
    private $request;

    /**
     * @param PageFactory $pageFactory
     * @param RequestInterface $request
     * @param Context $context
     */
    public function __construct(Context $context, PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
        parent::__construct($context);
    }

    /**
     * @inheritdoc
     */
    public function execute()
    {

        return $this->pageFactory->create();
    }
}
