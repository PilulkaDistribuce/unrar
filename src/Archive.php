<?php

namespace Pilulka\Rar;

class Archive implements Contract\RarArchive
{

    public function close()
    {
        // TODO: Implement close() method.
    }

    public function getComment()
    {
        // TODO: Implement getComment() method.
    }

    public function getEntries()
    {
        // TODO: Implement getEntries() method.
    }

    public function getEntry($entryname)
    {
        // TODO: Implement getEntry() method.
    }

    public function isBroken()
    {
        // TODO: Implement isBroken() method.
    }

    public function isSolid()
    {
        // TODO: Implement isSolid() method.
    }

    public static function open($filename, $password = NULL, $volume_callback = NULL)
    {
        // TODO: Implement open() method.
    }

    public function setAllowBroken($allow_broken)
    {
        // TODO: Implement setAllowBroken() method.
    }

    public function __toString()
    {
        return '';
    }

}
