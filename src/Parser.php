<?php

namespace AydinHassan\VHostParserWriter;

class Parser
{
    public function parse($vHost)
    {
        $vhostRegEx = '/<VirtualHost (\d{1,3}\.\d{1,3}.\d{1,3}.\d{1,3}):(\d+)>([\s\S]+)<\/VirtualHost>/';
        $matches    = [];

        if (!preg_match($vhostRegEx, $vHost, $matches)) {
            throw new \Exception("No VHost Found");
        }

        $ipAddress  = $matches[1];
        $port       = $matches[2];
        $directives = $matches[4];

        $vhost = new VHost;
        $vhost->setIp($ipAddress);
        $vhost->setPort($port);

        $matches = [];
//        $directory = preg_match_all('/<Directory "(.*")>([\s\S]*?)<\/Directory>/', $vHost, $matches, PREG_SET_ORDER);
//
//        $vhost = new Vhost;
//        foreach ($matches as $match) {
//
//            $dir = new Directory;
//            $dir->dir = $match[1];
//
//            //echo "Directory: " . $match[1] . "\n";
//
//            $lines = explode("\n", trim($match[2]));
//
//            foreach ($lines as $line) {
//
//                if (preg_match('/^Allow from (\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3})/', trim($line), $matches)) {
//                    $dir->parts[] = new IpWhiteList($matches[1]);
//                }
//
//            }
//            $dir->whiteListIp('254.254.254.253');
//
//            $vhost->directories[] = $dir;
//        }

        return $vhost;
    }
}
