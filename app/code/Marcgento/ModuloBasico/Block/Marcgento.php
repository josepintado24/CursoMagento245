<?php


namespace Marcgento\ModuloBasico\Block;

use Magento\Framework\View\Element\Template;

class Marcgento extends Template
{
    public function __cosntruct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ){
        parent::__construct($context, $data);
    }
}
