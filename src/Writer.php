<?php

namespace AydinHassan\VHostParserWriter;

use AydinHassan\VhostParserWriter\VHost;

/**
 * Class Writer
 */
class Writer
{
    /**
     * @var VHost
     */
    protected $vHost;

    /**
     * @param VHost $vHost
     */
    public function __construct(VHost $vHost)
    {
        $this->vHost = $vHost;
    }

    /**
     * @return string
     */
    public function write()
    {
        $vHostFormat = "<VirtualHost %s:%d>\n%s%s\n</VirtualHost>";

        $directives = '';

        foreach ($this->vHost->getDirectives() as $directive) {
            $directives .= '';
        }

        $configContainersString = '';
        foreach ($this->vHost->getConfigContainers() as $configContainers) {
            $configContainersString .= '';
        }

        $vHostString = sprintf(
            $vHostFormat,
            $this->vHost->getIp(),
            $this->vHost->getPort(),
            $directives,
            $configContainersString
        );

        return $vHostString;
    }
}
