<?

use Bitrix\Main; 
Main\EventManager::getInstance()->addEventHandler(
    'sale',
    'OnSaleOrderBeforeSaved',
    'myOrderSet'
);


function myOrderSet(Main\Event $event)
{
    /** @var Order $order */
    $message['order'] = $event->getParameter("ENTITY");
    $message['oldValues'] = $event->getParameter("VALUES");
	mail("i.kynchevich@gmail.com", "Order", print_r($message,true));
}

mail("i.kynchevich@gmail.com", "Order", print_r("sss",true));