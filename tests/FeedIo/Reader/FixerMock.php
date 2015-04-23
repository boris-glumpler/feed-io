<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 21/04/15
 * Time: 22:31
 */

namespace FeedIo\Reader;


use FeedIo\FeedInterface;
use Psr\Log\LoggerInterface;

class FixerMock implements FixerInterface
{

    /**
     * @var Psr\Log\LoggerInterface
     */
    protected $logger;

    /**
     * @param LoggerInterface $logger
     * @return $this
     */
    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;

        return $this;
    }

    /**
     * @param FeedInterface $feed
     * @return $this
     */
    public function correct(FeedInterface $feed)
    {
        $feed->setTitle('corrected');
        return $this;
    }

}