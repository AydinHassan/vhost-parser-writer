<?php

namespace AydinHassan\VHostParserWriter\Directive;

/**
 * Class CustomLog
 * @package AydinHassan\VHostParserWriter\Directive
 */
class CustomLog implements DirectiveInterface
{
    /**
     * @var string
     */
    protected $customLog;

    /**
     * @param string $customLog
     */
    public function __construct($customLog)
    {
        $this->customLog = $customLog;
    }

    /**
     * @return string
     */
    public function getCustomLog()
    {
        return $this->customLog;
    }

    /**
     * @return string
     */
    public function render()
    {
        return 'CustomLog ' . $this->customLog;
    }
}
