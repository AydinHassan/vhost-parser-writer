<?php

namespace AydinHassan\VHostParserWriter\Directive;

/**
 * Class ServerAdmin
 * @package AydinHassan\VHostParserWriter\Directive
 */
class ServerAdmin implements DirectiveInterface
{
    /**
     * @var string
     */
    protected $serverAdmin;

    /**
     * @param string $serverAdmin
     */
    public function __construct($serverAdmin)
    {
        $this->serverAdmin = $serverAdmin;
    }

    /**
     * @return string
     */
    public function getServerAdmin()
    {
        return $this->serverAdmin;
    }

    /**
     * @return string
     */
    public function render()
    {
        return 'ServerAdmin ' . $this->serverAdmin;
    }
}
