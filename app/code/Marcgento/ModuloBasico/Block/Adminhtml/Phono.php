<?php


namespace Marcgento\ModuloBasico\Block\Adminhtml;


class Phono extends \Magento\Backend\Block\Widget\Grid\Container
{
    protected function _construct()
    {
        $this->_controller = 'adminhtml_phono';
        $this->_blockGroup = 'Marcgento_ModuloBasico';
        parent::_construct();
    }
}
