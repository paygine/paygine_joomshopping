<?php
/*
* @package JoomShopping for Joomla!
* @subpackage payment
* @author wolfsoft@mail.ru
*/

defined('_JEXEC') or die();

define('_JSHOP_CFG_PAYGINE_SHOP_ID', 'Sector ID');
define('_JSHOP_CFG_PAYGINE_SHOP_ID_DESCRIPTION', 'Ваш номер магазина в системе Paygine');
define('_JSHOP_CFG_PAYGINE_PASSWORD', 'Пароль');
define('_JSHOP_CFG_PAYGINE_PASSWORD_DESCRIPTION', 'Пароль для цифровой подписи');
define('_JSHOP_CFG_PAYGINE_MODE', 'Тестовый режим');
define('_JSHOP_CFG_PAYGINE_MODE_DESCRIPTION', 'Тестовый режим работы - платежи не будут проводиться');
define('_JSHOP_CFG_PAYGINE_ORDER_NOT_PAID', 'Заказ не оплачен');
define('_JSHOP_CFG_PAYGINE_KKT', 'KKT');
define('_JSHOP_CFG_PAYGINE_KKT_DESCRIPTION', 'Передавать данные на свою ККТ');
define('_JSHOP_CFG_PAYGINE_TAX', 'Код ставки НДС для ККТ');
define('_JSHOP_CFG_PAYGINE_TAX_DESCRIPTION', '1 – ставка НДС 18%
2 – ставка НДС 10%
3 – ставка НДС расч. 18/118
4 – ставка НДС расч. 10/110
5 – ставка НДС 0%
6 – НДС не облагается');