<?php

namespace Pilulka\Rar\Contract;

interface RarEntry
{
    /* Methods */
    public function extract($dir, $filepath = "", $password = NULL, $extended_data = false);

    public function getAttr();

    public function getCrc();

    public function getFileTime();

    public function getHostOs();

    public function getMethod();

    public function getName();

    public function getPackedSize();

    public function getStream($password);

    public function getUnpackedSize();

    public function getVersion();

    public function isDirectory();

    public function isEncrypted();

    public function __toString();

}
