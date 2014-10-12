<?php

namespace AydinHassan\VHostParserWriterTest;

use AydinHassan\VHostParserWriter\VHost;
use AydinHassan\VHostParserWriter\Writer;

class WriterTest extends \PHPUnit_Framework_TestCase
{

    protected $vHost;
    protected $vHostWriter;

    public function setUp()
    {
        $this->vHost = new VHost();
        $this->vHost->setIp("212.34.23.123");
        $this->vHost->setPort(200);
        $this->vHostWriter = new Writer($this->vHost);
    }

    public function testVhostWrite()
    {
        $expected = "<VirtualHost 212.34.23.123:200>\n\n</VirtualHost>";
        $this->assertSame($expected, $this->vHostWriter->write());
    }
}
