<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\ErrorPage\Plugin\Provider;

use Silex\Application;
use SprykerShop\Yves\ShopApplication\Plugin\Provider\AbstractYvesControllerProvider;

class ErrorPageControllerProvider extends AbstractYvesControllerProvider
{
    public const ROUTE_ERROR_404 = 'error/404';
    public const ROUTE_ERROR_404_PATH = '/error/404';
    public const ROUTE_ERROR_403 = 'error/403';
    public const ROUTE_ERROR_403_PATH = '/error/403';

    /**
     * @param \Silex\Application $app
     *
     * @return void
     */
    protected function defineControllers(Application $app)
    {
        $this->addError404Route();
        $this->addError403Route();
    }

    /**
     * @return $this
     */
    protected function addError404Route(): self
    {
        $this->createController(self::ROUTE_ERROR_404_PATH, self::ROUTE_ERROR_404, 'ErrorPage', 'Error404');

        return $this;
    }

    /**
     * @return $this
     */
    protected function addError403Route(): self
    {
        $this->createController(self::ROUTE_ERROR_403_PATH, self::ROUTE_ERROR_403, 'ErrorPage', 'Error403');

        return $this;
    }
}
