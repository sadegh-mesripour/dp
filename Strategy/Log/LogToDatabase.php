<?php

namespace Strategy\Log;


class LogToDatabase implements Log
{

    public function log($data)
    {
        var_dump("log to database ".$data);
    }
}