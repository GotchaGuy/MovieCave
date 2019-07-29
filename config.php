<?php

return [
    "database" => [
        "driver" => "mysql",
        "host" => "localhost",
        "dbname" => "movie_cave",
        "user" => "root",
        "password" => "",
        "options" => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ],
];
