<?php
/**
 * File ExceptionLoggerFactoryTest.php
 */

namespace Tebru\Executioner\Test\Factory;
use Mockery;
use PHPUnit_Framework_TestCase;
use Tebru\Executioner\Factory\ExceptionLoggerFactory;
use Tebru\Executioner\Logger\ExceptionLogger;

/**
 * Class ExceptionLoggerFactoryTest
 *
 * @author Nate Brunette <nbrunett@nerdery.com>
 */
class ExceptionLoggerFactoryTest extends PHPUnit_Framework_TestCase
{
    protected function tearDown()
    {
        Mockery::close();
    }

    public function testWillCreateLogger()
    {
        $factory = new ExceptionLoggerFactory();
        $logger = $factory->make();
        $this->assertTrue(is_a($logger, ExceptionLogger::class));
    }
}