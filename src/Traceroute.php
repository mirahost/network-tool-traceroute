<?php

namespace Mirahost\NetworkTools;

class Traceroute
{

    public function sendTraceroute($host)
    {
        //TODO update regex to valiadate hostname
        $host = preg_replace("/[^A-Za-z0-9.]/", "", $host);

        $output =  shell_exec("traceroute -m20 -w1 -q1" . escapeshellarg($host) . " 2>&1");

        //clear any stale traceroute processes
        system("killall -q traceroute");

        return $output;
    }
}