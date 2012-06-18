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
 * BadRequestHttpException.
 *
 * @author The Mad Video Inc. <development@themadvideo.com>
 */
class BadRequestHttpException extends HttpException
{
    /**
     * Constructor.
     *
     * @param string    $message  The internal exception message
     * @param Exception $previous The previous exception
     * @param integer   $code     The internal exception code
     */
    public function __construct($message = "Bad Request. The request could not be understood by the server due to malformed syntax. The client SHOULD NOT repeat the request without modifications. ", \Exception $previous = null, $code = 0)
    {
        parent::__construct(400, $message, $previous, array(), $code);
    }
}
