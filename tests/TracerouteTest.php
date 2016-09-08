<?php

use Mirahost\NetworkTools\Traceroute;

class TracerouteTest extends PHPUnit_Framework_TestCase {

    public function testTraceroute()
    {
        $ping = new Traceroute;
        $this->assertContains('traceroute', $ping->sendTraceroute('http://example.com'));
    }

}