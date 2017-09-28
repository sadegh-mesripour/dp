<?php

namespace Strategy\Log;


class LogToXService implements Log
{

    public function log($data)
    {
        var_dump("log to X service ".$data);
    }
}