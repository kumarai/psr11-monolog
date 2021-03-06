<?php

declare(strict_types=1);

namespace WShafer\PSR11MonoLog\Handler;

use Monolog\Handler\LogglyHandler;
use Monolog\Handler\MissingExtensionException;
use Monolog\Logger;
use WShafer\PSR11MonoLog\FactoryInterface;

class LogglyHandlerFactory implements FactoryInterface
{
    /**
     * @param array $options
     * @return LogglyHandler
     * @throws MissingExtensionException
     */
    public function __invoke(array $options)
    {
        $token  = (string)  ($options['token']     ?? '');
        $level  = (int)     ($options['level']     ?? Logger::DEBUG);
        $bubble = (bool) ($options['bubble']    ?? true);

        return new LogglyHandler(
            $token,
            $level,
            $bubble
        );
    }
}
