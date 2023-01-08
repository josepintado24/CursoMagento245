<?php

namespace Margento\ModuloBasico\Model\ResourceModel\Numtelefono;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection

{
    public function _construct()
    {
        $this->_init('Margento\ModuloBasico\Model\Numtelefono', 'Margento\ModuloBasico\Model\ResourceModel\Numtelefono');
    }
}
