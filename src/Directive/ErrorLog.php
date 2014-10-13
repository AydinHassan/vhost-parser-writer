<?php

namespace AydinHassan\VHostParserWriter\Directive;

/**
 * Class ErrorLog
 * @package AydinHassan\VHostParserWriter\Directive
 */
class ErrorLog implements DirectiveInterface
{
    /**
     * @var string
     */
    protected $errorLog;

    /**
     * @param string $errorLog
     */
    public function __construct($errorLog)
    {
        $this->errorLog = $errorLog;
    }

    /**
     * @return string
     */
    public function getErrorLog()
    {
        return $this->errorLog;
    }

    /**
     * @return string
     */
    public function render()
    {
        return 'ErrorLog ' . $this->errorLog;
    }
}
