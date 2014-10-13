<?php

namespace AydinHassan\VHostParserWriterTest;

use AydinHassan\VHostParserWriter\Directive\DocumentRoot;
use AydinHassan\VHostParserWriter\Directive\ErrorLog;
use AydinHassan\VHostParserWriter\Directive\ServerAdmin;
use AydinHassan\VHostParserWriter\Directive\ServerName;
use AydinHassan\VHostParserWriter\VHost;
use AydinHassan\VHostParserWriter\Writer;

class WriterTest extends \PHPUnit_Framework_TestCase
{

    protected $vHost;
    protected $vHostWriter;

    public function setUp()
    {
        $this->vHostWriter = new Writer();
    }

    public function testVhostWrite()
    {
        $vHost = new VHost();
        $vHost->setIp("212.34.23.123");
        $vHost->setPort(200);

        $expected = \AydinHassan\stripIndent('
        <VirtualHost 212.34.23.123:200>

        </VirtualHost>
        ');
        $this->assertSame($expected, $this->vHostWriter->write($vHost));
    }

    public function testVhostWriteWithBasicDirectives()
    {
        $vHost = new VHost();
        $vHost->setIp("212.34.23.123");
        $vHost->setPort(200);
        $vHost->addDirective(new DocumentRoot("/www/example2"));
        $vHost->addDirective(new ServerName("www.example.org"));
        $vHost->addDirective(new ErrorLog("/var/log/log.txt"));

        $expected = \AydinHassan\stripIndent('
        <VirtualHost 212.34.23.123:200>
            DocumentRoot /www/example2
            ServerName www.example.org
            ErrorLog /var/log/log.txt

        </VirtualHost>
        ');

        $this->assertSame($expected, $this->vHostWriter->write($vHost));
    }
}
