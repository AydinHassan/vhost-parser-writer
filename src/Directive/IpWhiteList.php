<?php

namespace AydinHassan\VHostParserWriter\Directive;

/**
 * Class IpWhiteList
 * @package AydinHassan\VHostParserWriter\Directive
 */
class IpWhiteList
{
    /**
     * @var string
     */
    protected $ipAddress;

    /**
     * @param string $ipAddress
     */
    public function __construct($ipAddress)
    {
        $this->ipAddress = $ipAddress;
    }

    /**
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * @return string
     */
    public function render()
    {
        return 'Allow from ' . $this->ipAddress;
    }
}
