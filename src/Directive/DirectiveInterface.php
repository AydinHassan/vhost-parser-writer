<?php

namespace AydinHassan\VHostParserWriter\Directive;

/**
 * Interface DirectiveInterface
 * @package AydinHassan\VHostParserWriter\Directive
 */
interface DirectiveInterface
{
    /**
     * @return string
     */
    public function getRegEx();

    /**
     * @return string
     */
    public function getName();

    /**
     * @return array
     */
    public function getArgs();
}
