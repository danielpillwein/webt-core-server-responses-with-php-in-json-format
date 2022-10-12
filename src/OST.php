<?php
require_once "Song.php";

class OST
{
    private $id;
    private $name;
    private $game;
    private $releaseYear;
    private $songs = [];

    /**
     * @param $id
     * @param $name
     * @param $game
     * @param $releaseYear
     * @param array $songs
     */
    public function __construct($id, $name, $game, $releaseYear, array $songs = [])
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
}