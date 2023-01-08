<?php

namespace Margento\ModuloBasico\Model\ResourceModel;

class Subscripcion extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb

{
    public function _construct()
    {
        $this->_init('marcgento_subscription', 'subscription_id');
    }
}
