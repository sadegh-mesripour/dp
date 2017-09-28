<?php

namespace Strategy\Log;

require_once "../../vendor/autoload.php";

class Client
{
    public function useLog($data, Log $logger)
    {
        $logger->log($data);

    }

}

$var = new Client();
$var->useLog("| data for log", new LogToFile);
print_r("</br>***********************<br>");
$var->useLog("| data for log", new LogToDatabase);
print_r("</br>***********************<br>");
$var->useLog("| data for log", new LogToXService);
