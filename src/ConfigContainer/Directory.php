<?php

namespace AydinHassan\VHostParserWriter\ConfigContainer;

use AydinHassan\VHostParserWriter\Directive\IpWhiteList;

/**
 * Class Directory
 * @package AydinHassan\VHostParserWriter\ConfigContainer
 */
class Directory implements ConfigContainerInterface
{

    /**
     * @var array
     */
    protected $args = [];

    /**
     * @var array
     */
    protected $directives = [];

    /**
     * @return string
     */
    public function getNodeName()
    {
        return 'Directory';
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

    public function addDirective($directive)
    {
        $this->directives[] = $directive;
    }

    /**
     * @param $ipAddress
     * @throws \Exception#
     */
    public function whiteListIp($ipAddress)
    {
        foreach ($this->directives as $directive) {

            if ($directive instanceof IpWhiteList) {
                if ($ipAddress === $directive->getIpAddress()) {
                    throw new \Exception(sprintf('Ip address: "%s" already white listed', $directive->getIpAddress()));
                }
            }
        }

        $this->directives[] = new IpWhiteList($ipAddress);
    }
}
