<?php
/**
 * File SingleAttemptStrategy.php
 */

namespace Tebru\Executioner\Strategy\Termination;

use Tebru\Executioner\Strategy\Termination;

/**
 * Class SingleAttemptStrategy
 *
 * Use this strategy if you do not want to handle multiple attempts
 *
 * @author Nate Brunette <n@tebru.net>
 */
class SingleAttemptStrategy extends Termination
{
    /**
     * Always return true, we're only trying once
     *
     * @return bool
     */
    public function hasFinished()
    {
        return true;
    }
}