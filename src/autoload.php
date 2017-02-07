<?php

if (!extension_loaded('rar')) {

    // autoloading
    require __DIR__ . "/Contract/RarArchive.php";
    require __DIR__ . "/Contract/RarEntry.php";
    require __DIR__ . "/Archive.php";
    require __DIR__ . "/Entry.php";

    // class alliases

    class_alias(\Pilulka\Rar\Archive::class, 'RarArchive');
    class_alias(\Pilulka\Rar\Entry::class, 'RarEntry');

}
