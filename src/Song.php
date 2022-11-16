<?php

class Song implements JsonSerializable
{
    private int $id;
    private string $name;
    private string $artist;
    private int $trackNumber;
    private int $duration;

    /**
     * @param int $id
     * @param string $name
     * @param string $artist
     * @param int $trackNumber
     * @param int $duration
     */
    public function __construct(int $id=0, string $name="Vienna", string $artist="", int $trackNumber=0, int $duration=0)
    {
        $this->id = $id;
        $this->name = $name;
        $this->artist = $artist;
        $this->trackNumber = $trackNumber;
        $this->duration = $duration;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getTrackNumber()
    {
        return $this->trackNumber;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}