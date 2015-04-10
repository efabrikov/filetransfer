<?php

namespace efabrikov\filetransfer;

use efabrikov\filetransfer\Logger;

class SSH
{
    public function __construct($user, $pass, $hostname, $umask = '0755')
    {
        Logger::log('__construct');
    }

    public function cd($path)
    {
        Logger::log('cd ' . $path);

        return $this;
    }

    public function download($filename)
    {
        Logger::log('download ' . $filename);

        return $this;
    }

    public function close()
    {
        Logger::log('close ');

        return $this;
    }
}