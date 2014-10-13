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

    public function testVhostWriteWithParams()
    {
        $expected = $this->stripIndent('
        <VirtualHost 212.34.23.123:200>

        </VirtualHost>
        ');

        $this->assertSame($expected, $this->vHostWriter->write());
    }


    public function stripIndent($multiLineString)
    {
        $lines = explode("\n", $multiLineString);

        if (count($lines) < 1) {
            return $multiLineString;
        }

        $firstLine  = $lines[1];
        $matches    = [];
        preg_match('/\S/', $firstLine, $matches, PREG_OFFSET_CAPTURE);
        $whiteSpaceCount = $matches[0][1];

        $strippedLines = [];
        for ($i = 0; $i < count($lines); $i++) {

            if ($i === 0) {
                continue;
            }

            $line               = $lines[$i];
            $strippedLines[]    = substr($line, $whiteSpaceCount);
        }

        $return = rtrim(implode("\n", $strippedLines), "\n");
        return $return;
    }
}
