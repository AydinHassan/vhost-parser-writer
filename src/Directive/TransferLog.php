<?php

namespace AydinHassan\VHostParserWriter\Directive;

/**
 * Class TransferLog
 * @package AydinHassan\VHostParserWriter\Directive
 */
class TransferLog implements DirectiveInterface
{
    /**
     * @var string
     */
    protected $transferLog;

    /**
     * @param string $transferLog
     */
    public function __construct($transferLog)
    {
        $this->transferLog = $transferLog;
    }

    /**
     * @return string
     */
    public function getTransferLog()
    {
        return $this->transferLog;
    }

    /**
     * @return string
     */
    public function render()
    {
        return 'TransferLog ' . $this->transferLog;
    }
}
