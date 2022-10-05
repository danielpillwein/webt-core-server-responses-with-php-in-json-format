<?php

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
}