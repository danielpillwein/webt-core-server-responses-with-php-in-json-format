<?php
require_once "OST.php";
require_once "Song.php";

class Seeder
{
    public static function generateOSTs(): array
    {
        return [
            new OST(3, "Minecraft Volume Alpha", "Minecraft", 2011, [
                new Song(1, "C418 - Minecraft", "C418", 4, 434),
                new Song(2, "C418 - Key", "C418", 10, 65),
                new Song(3, "C418 - Subwoofer Lullaby", "C418", 2, 208),
                new Song(4, "C418 - Living Mice", "C418", 1, 177),
            ]),
            new OST(2, "Ori and the Blind Forest - OST", "Ori and the Blind Forest", 2015, [
                new Song(1, "Lost In the Storm (feat. Aeralie Brighton) - OST", "Gareth Coker", 4, 69),
                new Song(2, "Naru, Embracing the Light (feat. Rachel Mellis) - OST", "Gareth Coker", 5, 85),
                new Song(3, "Calling Out - OST", "Gareth Coker", 3, 89),
                new Song(4, "The Blinded Forest - OST", "Gareth Coker", 2, 209),
            ]),
            new OST(1, "Hytale OST", "Hytale", 2020, [
                new Song(1, "Hytale OST - Heroes of Orbis", "Oscar Garvin", 5, 176),
                new Song(2, "Hytale OST - Kweebec Village", "Oscar Garvin", 4, 233),
                new Song(3, "Hytale OST - Night on the Dunes", "Oscar Garvin", 2, 385),
                new Song(4, "Hytale OST - Traveling Band", "Oscar Garvin", 1, 375),
            ]),
        ];
    }

    public static function getOSTbyId($id) {
        foreach (self::generateOSTs() as $soundTrack) {
            if ($soundTrack->getId() == $id) {
                return $soundTrack;
            }
        }

        return new OST();
    }
}