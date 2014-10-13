<?php

namespace AydinHassan\VHostParserWriter;

use AydinHassan\VHostParserWriter\Directive\ConfigContainer;
use AydinHassan\VHostParserWriter\Directive\DirectiveInterface;
use AydinHassan\VhostParserWriter\VHost;

/**
 * Class Writer
 */
class Writer
{

    /**
     * @return string
     */
    public function write(VHost $vHost)
    {
        $vHostFormat = "<VirtualHost %s:%d>\n%s\n</VirtualHost>";

        $directives = '';

        foreach ($vHost->getDirectives() as $directive) {
            $directives .= $this->renderDirective($directive);
        }

        $vHostString = sprintf(
            $vHostFormat,
            $vHost->getIp(),
            $vHost->getPort(),
            $directives
        );

        return $vHostString;
    }

    /**
     * @param $directive
     * @return string
     */
    public function renderDirective($directive)
    {
        $directiveString = '';
        if ($directive instanceof ConfigContainer) {
            $directiveString .= "    <" . $directive->getNodeName() . " " . implode(" ", $directive->getArgs()) . ">\n";

            foreach ($directive->getDirectives() as $secondLevelDirective) {
                $directiveString .= "        " . $secondLevelDirective->getName() .
                    " " . implode(" ", $secondLevelDirective->getArgs()) . "\n";
            }

            $directiveString .= "    </" . $directive->getNodeName() . ">\n";
            return $directiveString;
        } elseif ($directive instanceof DirectiveInterface) {
            return "    " . $directive->getName() . " " . implode(" ", $directive->getArgs()) . "\n";
        }
    }
}
