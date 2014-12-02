<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\DependencyInjection;

trigger_error('Class "Symfony\Component\HttpKernel\DependencyInjection\RegisterListenersPass" is deprecated since 2.5 and will be removed in 3.0. Use "Symfony\Component\EventDispatcher\DependencyInjection\RegisterListenersPass" instead.', E_USER_DEPRECATED);

use Symfony\Component\EventDispatcher\DependencyInjection\RegisterListenersPass as BaseRegisterListenersPass;

/**
 * Compiler pass to register tagged services for an event dispatcher.
 *
 * @deprecated Deprecated in 2.5, to be removed in 3.0. Use Symfony\Component\EventDispatcher\DependencyInjection\RegisterListenersPass instead.
 */
class RegisterListenersPass extends BaseRegisterListenersPass
{
}
