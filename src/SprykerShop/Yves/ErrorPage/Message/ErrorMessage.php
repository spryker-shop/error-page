<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\ErrorPage\Message;

use SprykerShop\Yves\ErrorPage\ErrorPageConfig;
use Symfony\Component\Debug\Exception\FlattenException;

class ErrorMessage implements ErrorMessageInterface
{
    /**
     * @var \SprykerShop\Yves\ErrorPage\ErrorPageConfig
     */
    protected $errorPageConfig;

    /**
     * @param \SprykerShop\Yves\ErrorPage\ErrorPageConfig $errorPageConfig
     */
    public function __construct(
        ErrorPageConfig $errorPageConfig
    ) {
        $this->errorPageConfig = $errorPageConfig;
    }

    /**
     * @param $exception
     *
     * @return string
     */
    public function getNotFoundMessage($exception): string
    {
        if (!$this->errorPageConfig->isErrorStackTraceEnabled()) {
            return '';
        }

        if ($exception instanceof FlattenException) {
            return $exception->getMessage();
        }

        return '';
    }
}
