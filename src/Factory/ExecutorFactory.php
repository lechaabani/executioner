<?php
/**
 * File ExecutorFactory.php
 */

namespace Tebru\Executioner\Factory;

use Tebru\Executioner\Attemptor;
use Tebru\Executioner\Executor;
use Tebru\Executioner\Logger\ExceptionLogger;
use Tebru\Executioner\Strategy\TerminationStrategy;
use Tebru\Executioner\Strategy\WaitStrategy;

/**
 * Class ExecutorFactory
 *
 * Creates ExecutorFactories
 *
 * @author Nate Brunette <n@tebru.net>
 */
class ExecutorFactory
{
    /**
     * Make an ExecutorFactory
     *
     * @param ExceptionLogger $logger
     * @param WaitStrategy $waitStrategy
     * @param TerminationStrategy $terminationStrategy
     * @param Attemptor $attemptor
     *
     * @return Executor
     */
    public function make(
        ExceptionLogger $logger,
        WaitStrategy $waitStrategy,
        TerminationStrategy $terminationStrategy,
        Attemptor $attemptor = null
    ) {
        return new Executor($logger, $waitStrategy, $terminationStrategy, $attemptor);
    }
} 
