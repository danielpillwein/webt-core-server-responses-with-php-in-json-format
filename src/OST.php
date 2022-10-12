<?php
require_once "Song.php";

class OST implements JsonSerializable
{
    private $id;
    private $name;
    private $game;
    private $releaseYear;
    private $songs = [];

    /**
     * @param int $id
     * @param string $name
     * @param string $game
     * @param int $releaseYear
     * @param array $songs
     */
    public function __construct(int $id=0, string $name="", string $game="", int $releaseYear=1970, array $songs = [])
    {
        $this->id = $id;
        $this->name = $name;
        $this->game = $game;
        $this->releaseYear = $releaseYear;
        $this->songs = $songs;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
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
    public function getGame()
    {
        return $this->game;
    }

    /**
     * @return mixed
     */
    public function getReleaseYear()
    {
        return $this->releaseYear;
    }

    /**
     * @return array
     */
    public function getSongs(): array
    {
        return $this->songs;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}