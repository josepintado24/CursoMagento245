<?php

namespace Margento\ModuloBasico\Block\Adminhtml;

use \Magento\Backend\Block\Widget\Grid\Container;

class Numtelefono extends Container
{

    protected function _construct()
    {
        $this->_blockGroup = 'Margento_ModuloBasico';
        $this->_controller = 'adminhtml_numtelefono';
        $this->_headerText = __('Elemnto JL');
        $this->_addButtonLabel = __('Add Nuevo');
        parent::_construct();
    }
}
