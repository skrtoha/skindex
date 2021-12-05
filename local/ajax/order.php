<?
use Bitrix\Sale\Basket;
use Bitrix\Sale\Order;

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$GLOBALS['APPLICATION']->RestartBuffer();

\Bitrix\Main\Loader::includeModule('catalog');
\Bitrix\Main\Loader::includeModule('sale');

switch($_GET['act']){
    case 'add_to_basket':
        Add2Basket($_GET['price_id'], 1);
        
        $quantity = 0;
        $result = CSaleBasket::GetList(false, [
            'FUSER_ID' => \Bitrix\Sale\Fuser::getId()
        ]);
        while($row = $result->Fetch()){
            $quantity += $row['QUANTITY'];
        }
        echo $quantity;
        break;
}
die();
?>