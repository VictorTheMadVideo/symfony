<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) The Mad Video Inc. <development@themadvideo.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Security\Core\Exception;

/**
 * AuthorizationException is thrown when the account has not the required role.
 *
 * @author The Mad Video Inc. <development@themadvideo.com>
 */
class AuthorizationException extends \RuntimeException
{
    public function __construct($message = 'Unauthorized', \Exception $previous = null)
    {
        parent::__construct($message, 401, $previous);
    }
}
