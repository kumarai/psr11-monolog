<?php
declare(strict_types=1);

namespace WShafer\PSR11MonoLog\Processor;

use Monolog\Processor\PsrLogMessageProcessor;
use WShafer\PSR11MonoLog\MapperInterface;

/**
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class ProcessorMapper implements MapperInterface
{
    /**
     * @param string $type
     * @return null|string
     *
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     */
    public function map(string $type)
    {
        $type = strtolower($type);

        switch ($type) {
            case 'psrlogmessage':
                return PsrLogMessageProcessorFactory::class;
        }

        return null;
    }
}