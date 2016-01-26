<?php

require_once('User.php');
require_once('Administrator.php');
require_once('YouTubeChannel.php');

class YouTubeChannelTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
    }

    public function testICanNotifyToAUserSubscribers()
    {
        $channel = new YouTubeChannel();
        $luis = new Administrator();
        $mark = new User();
        $john = new User();

        $channel->registerObserver($luis);
        $channel->registerObserver($mark);
        $channel->registerObserver($john);
        $channel->notifyObservers();
    }
}
