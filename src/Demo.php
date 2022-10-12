<?php
require_once "Seeder.php";

$soundTracks = Seeder::generateOSTs();

foreach ($soundTracks as $soundTrack) {
    echo "\nNAME: " . $soundTrack->getName() . " | GAME: " . $soundTrack->getGame() . " | RELEASE: " . $soundTrack->getReleaseYear() . "\n";
    foreach ($soundTrack->getSongs() as $song) {
        echo $song->getTrackNumber() . ": " .  $song->getName() . "\n";
    }
}
