<?php

namespace Margento\ModuloBasico\Block;

use Magento\Framework\View\Element\Template;

class Margento extends Template
{

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        public \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    public function getJjgay()
    {
       
            return $this->scopeConfig->getValue(
                'jlsection/jlgroup/title',
                \Magento\Store\Model\ScopeInterface::SCOPE_STORE
            );
    }
}
