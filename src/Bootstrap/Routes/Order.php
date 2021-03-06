<?php

namespace Message\Mothership\OrderReturn\Bootstrap\Routes;

use Message\Cog\Bootstrap\RoutesInterface;

class Order implements RoutesInterface
{
	public function registerRoutes($router)
	{
		$router['ms.order']->add('ms.commerce.order.view.return', 'view/{orderID}/return', 'Message:Mothership:OrderReturn::Controller:OrderReturn:Order:Listing#view')
			->setRequirement('orderID', '\d+');
	}
}