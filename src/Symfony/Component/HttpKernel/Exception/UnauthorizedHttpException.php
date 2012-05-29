<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) The Mad Video Inc. <development@themadvideo.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\Exception;

/**
 * UnauthorizedHttpException.
 *
 * @author The Mad Video Inc. <development@themadvideo.com>
 */
class UnauthorizedHttpException extends HttpException
{
    /**
     * Constructor.
     *
     * @param string    $message  The internal exception message
     * @param Exception $previous The previous exception
     * @param integer   $code     The internal exception code
     */
    public function __construct($message = null, \Exception $previous = null, $code = 0)
    {
        parent::__construct(401, $message, $previous, array(), $code);
    }
}
