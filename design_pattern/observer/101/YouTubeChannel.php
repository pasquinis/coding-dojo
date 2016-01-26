<?php

class YouTubeChannel
{
    private $observerCollection;

    public function __construct()
    {
        $this->observerCollection = [];
    }

    public function registerObserver(ChannelObserver $observer)
    {
        $this->observerCollection[] = $observer;

    }

    public function notifyObservers()
    {
        foreach($this->observerCollection as $observer)
        {
            $observer->notify();
        }
    }
}
