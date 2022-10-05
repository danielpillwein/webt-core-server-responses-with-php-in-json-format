<?php

class Song
{
    private $id;
    private $name;
    private $artist;
    private $trackNumber;
    private $duration;

    /**
     * @param $id
     * @param $name
     * @param $artist
     * @param $trackNumber
     * @param $duration
     */
    public function __construct($id, $name, $artist, $trackNumber, $duration)
    {
        $this->id = $id;
        $this->name = $name;
        $this->artist = $artist;
        $this->trackNumber = $trackNumber;
        $this->duration = $duration;
    }
}