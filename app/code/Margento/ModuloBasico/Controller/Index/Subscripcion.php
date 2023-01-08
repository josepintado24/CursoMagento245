<?php

namespace Margento\ModuloBasico\Controller\Index;

class Subscripcion extends \Magento\Framework\App\Action\Action

{
    public function execute()
    {
        $subscription = $this->_objectManager->create('Margento\ModuloBasico\Model\Numtelefono');

        // $subscription->setFirstname('Jose');
        // $subscription->setLastname('Pintado');
        // $subscription->setEmail('josepintado24@gmail.com');
        // $subscription->setMessage('Mensaje registro');

        // $subscription->save();
        print 'hola';
        $metodos = get_class_methods($subscription);
        echo '<pre>';
        // foreach ($metodos as $metodo) {
        //     echo $metodo . "\n";
        // }
        $this->getResponse()->setBody($subscription->getOrigData());
    }
}
