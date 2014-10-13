<?php

namespace AydinHassan\VHostParserWriter\Directive;


class ConfigContainer implements ConfigContainerInterface
{
    protected $directives;
    protected $nodeName;
    protected $args;

    public function __construct($nodeName, $args)
    {
        $this->nodeName = $nodeName;
        $this->args     = $args;
    }

    /**
     * @return string
     */
    public function getNodeName()
    {
        return $this->nodeName;
    }

    /**
     * @return array
     */
    public function getArgs()
    {
        return $this->args;
    }

    /**
     * @return Directive[]
     */
    public function getDirectives()
    {
        return $this->directives;
    }
}