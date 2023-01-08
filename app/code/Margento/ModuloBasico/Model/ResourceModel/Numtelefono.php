<?php

namespace Margento\ModuloBasico\Model\ResourceModel;

class Numtelefono extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb

{
    public function _construct()
    {
        $this->_init('marcgento_numtelefono', 'numtelefono_id');
    }
}
