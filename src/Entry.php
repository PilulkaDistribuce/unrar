<?php

namespace Pilulka\Rar;

class Entry implements Contract\RarEntry
{

    /* Constants */
    const HOST_MSDOS = 0;
    const HOST_OS2 = 1;
    const HOST_WIN32 = 2;
    const HOST_UNIX = 3;
    const HOST_MACOS = 4;
    const HOST_BEOS = 5;
    const ATTRIBUTE_WIN_READONLY = 1;
    const ATTRIBUTE_WIN_HIDDEN = 2;
    const ATTRIBUTE_WIN_SYSTEM = 4;
    const ATTRIBUTE_WIN_DIRECTORY = 16;
    const ATTRIBUTE_WIN_ARCHIVE = 32;
    const ATTRIBUTE_WIN_DEVICE = 64;
    const ATTRIBUTE_WIN_NORMAL = 128;
    const ATTRIBUTE_WIN_TEMPORARY = 256;
    const ATTRIBUTE_WIN_SPARSE_FILE = 512;
    const ATTRIBUTE_WIN_REPARSE_POINT = 1024;
    const ATTRIBUTE_WIN_COMPRESSED = 2048;
    const ATTRIBUTE_WIN_OFFLINE = 4096;
    const ATTRIBUTE_WIN_NOT_CONTENT_INDEXED = 8192;
    const ATTRIBUTE_WIN_ENCRYPTED = 16384;
    const ATTRIBUTE_WIN_VIRTUAL = 65536;
    const ATTRIBUTE_UNIX_WORLD_EXECUTE = 1;
    const ATTRIBUTE_UNIX_WORLD_WRITE = 2;
    const ATTRIBUTE_UNIX_WORLD_READ = 4;
    const ATTRIBUTE_UNIX_GROUP_EXECUTE = 8;
    const ATTRIBUTE_UNIX_GROUP_WRITE = 16;
    const ATTRIBUTE_UNIX_GROUP_READ = 32;
    const ATTRIBUTE_UNIX_OWNER_EXECUTE = 64;
    const ATTRIBUTE_UNIX_OWNER_WRITE = 128;
    const ATTRIBUTE_UNIX_OWNER_READ = 256;
    const ATTRIBUTE_UNIX_STICKY = 512;
    const ATTRIBUTE_UNIX_SETGID = 1024;
    const ATTRIBUTE_UNIX_SETUID = 2048;
    const ATTRIBUTE_UNIX_FINAL_QUARTET = 61440;
    const ATTRIBUTE_UNIX_FIFO = 4096;
    const ATTRIBUTE_UNIX_CHAR_DEV = 8192;
    const ATTRIBUTE_UNIX_DIRECTORY = 16384;
    const ATTRIBUTE_UNIX_BLOCK_DEV = 24576;
    const ATTRIBUTE_UNIX_REGULAR_FILE = 32768;
    const ATTRIBUTE_UNIX_SYM_LINK = 40960;
    const ATTRIBUTE_UNIX_SOCKET = 49152;

    public function extract($dir, $filepath = "", $password = NULL, $extended_data = false)
    {
        // TODO: Implement extract() method.
    }

    public function getAttr()
    {
        // TODO: Implement getAttr() method.
    }

    public function getCrc()
    {
        // TODO: Implement getCrc() method.
    }

    public function getFileTime()
    {
        // TODO: Implement getFileTime() method.
    }

    public function getHostOs()
    {
        // TODO: Implement getHostOs() method.
    }

    public function getMethod()
    {
        // TODO: Implement getMethod() method.
    }

    public function getName()
    {
        // TODO: Implement getName() method.
    }

    public function getPackedSize()
    {
        // TODO: Implement getPackedSize() method.
    }

    public function getStream($password)
    {
        // TODO: Implement getStream() method.
    }

    public function getUnpackedSize()
    {
        // TODO: Implement getUnpackedSize() method.
    }

    public function getVersion()
    {
        // TODO: Implement getVersion() method.
    }

    public function isDirectory()
    {
        // TODO: Implement isDirectory() method.
    }

    public function isEncrypted()
    {
        // TODO: Implement isEncrypted() method.
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
    }

}
