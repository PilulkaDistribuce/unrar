<?php

namespace Pilulka\Rar\Contract;

interface RarArchive extends \Traversable
{

    public function close();

    public function getComment();

    public function getEntries();

    public function getEntry($entryname);

    public function isBroken();

    public function isSolid();

    public static function open($filename, $password = NULL, $volume_callback = NULL);

    public function setAllowBroken($allow_broken);

    public function __toString();

}
