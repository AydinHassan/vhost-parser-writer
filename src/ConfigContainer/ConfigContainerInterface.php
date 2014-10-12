<?php

namespace AydinHassan\VHostParserWriter\ConfigContainer;

/**
 * Interface ConfigContainerInterface
 * @package AydinHassan\VHostParserWriter\ConfigContainer
 */
interface ConfigContainerInterface
{

    /**
     * @return string
     */
    public function getNodeName();

    /**
     * @return array
     */
    public function getArgs();

    /**
     * @return Directive[]
     */
    public function getDirectives();
}