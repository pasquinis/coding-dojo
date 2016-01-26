<?php

require_once('ChannelObserver.php');

class User implements ChannelObserver
{
    public function notify()
    {
        print PHP_EOL . "user a new video is uploaded";
    }
}
