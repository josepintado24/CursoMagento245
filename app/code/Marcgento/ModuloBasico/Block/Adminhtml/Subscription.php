<?php


namespace Marcgento\ModuloBasico\Block\Adminhtml;


class Subscription extends \Magento\Backend\Block\Widget\Grid\Container
{
    protected function _construct()
    {
        $this->_controller = 'adminhtml_subscription';
        $this->_blockGroup = 'Marcgento_ModuloBasico';
        $this->_headerText = __('Elemnto Marco');
        $this->_addButtonLabel = __('Add News');
        parent::_construct();
    }
}
