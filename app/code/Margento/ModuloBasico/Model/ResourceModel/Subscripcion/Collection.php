<?php

namespace Margento\ModuloBasico\Model\ResourceModel\Subscripcion;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection

{
    public function _construct()
    {
        $this->_init('Margento\ModuloBasico\Model\Subscripcion', 'Margento\ModuloBasico\Model\ResourceModel\Subscripcion');
    }
}
