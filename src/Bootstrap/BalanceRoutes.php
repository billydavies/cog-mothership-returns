<?php

namespace Message\Mothership\OrderReturn\Bootstrap;

use Message\Cog\Bootstrap\RoutesInterface;

class BalanceRoutes implements RoutesInterface
{
	public function registerRoutes($router)
	{
		$router['ms.ecom.return']->setPrefix('/return/balance');

		$router['ms.ecom.return']->add('ms.ecom.return.balance.process', '/{returnID}', 'Message:Mothership:OrderReturn::Controller:OrderReturn:Balance:Confirm#process')
			->setMethod('POST');
		$router['ms.ecom.return']->add('ms.ecom.return.balance', '/{returnID}', 'Message:Mothership:OrderReturn::Controller:OrderReturn:Balance:Confirm#index');

		$router['ms.ecom.return']->add('ms.ecom.return.balance.successful', '/{returnID}/successful/{hash}', 'Message:Mothership:OrderReturn::Controller:OrderReturn:Balance:Complete#successful');
		$router['ms.ecom.return']->add('ms.ecom.return.balance.unsuccessful', '/{returnID}/unsuccessful/{hash}', 'Message:Mothership:OrderReturn::Controller:OrderReturn:Balance:Complete#unsuccessful');
	}
}