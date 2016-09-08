<?php

namespace Mirahost\NetworkTools;

class Traceroute
{

    public function sendTraceroute($host)
    {
        //TODO update regex to valiadate hostname
        $host = preg_replace("/[^A-Za-z0-9.]/", "", $host);

        $output =  shell_exec("traceroute " . escapeshellarg($host) . " 2>&1");

        return $output;
    }
}