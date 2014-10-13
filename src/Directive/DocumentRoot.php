<?php

namespace AydinHassan\VHostParserWriter\Directive;

/**
 * Class DocumentRoot
 * @package AydinHassan\VHostParserWriter\Directive
 */
class DocumentRoot implements DirectiveInterface
{
    /**
     * @var string
     */
    protected $documentRoot;

    /**
     * @param string $documentRoot
     */
    public function __construct($documentRoot)
    {
        $this->documentRoot = $documentRoot;
    }

    /**
     * @return string
     */
    public function getDocumentRoot()
    {
        return $this->documentRoot;
    }

    /**
     * @return string
     */
    public function render()
    {
        return 'DocumentRoot ' . $this->documentRoot;
    }
}
