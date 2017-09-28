<?php

namespace Strategy\Log;


class LogToFile implements Log
{

    public function log($data)
    {
        var_dump("log to file ".$data);
    }
}