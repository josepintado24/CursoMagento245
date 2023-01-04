<?php

namespace Margento\ModuloBasico\Block\Adminhtml;

use \Magento\Backend\Block\Widget\Grid\Container;

class Subscripcion extends Container
{

    public function __construct()
    {
        $this->_blockGroup = 'Margento_ModuloBasico';
        $this->_controller = 'joseadmin_suscripcion';
        $this->_headerText = __('Elemnto Marco');
        $this->_addButtonLabel = __('Add News');
        parent::_construct();
    }
}
