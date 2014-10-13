<?php

namespace AydinHassan\VHostParserWriter\Directive;

/**
 * Class ServerName
 * @package AydinHassan\VHostParserWriter\Directive
 */
class ServerName implements DirectiveInterface
{
    /**
     * @var string
     */
    protected $serverName;

    /**
     * @param string $serverName
     */
    public function __construct($serverName)
    {
        $this->serverName = $serverName;
    }

    /**
     * @return string
     */
    public function getServerName()
    {
        return $this->serverName;
    }

    /**
     * @return string
     */
    public function render()
    {
        return 'ServerName ' . $this->serverName;
    }
}
