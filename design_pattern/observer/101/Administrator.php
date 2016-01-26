<?php

require_once('ChannelObserver.php');

class Administrator implements ChannelObserver
{

    public function notify()
    {
        print PHP_EOL . "admin a new video is uploaded";
    }
}
