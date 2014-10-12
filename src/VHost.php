<?php

namespace AydinHassan\VHostParserWriter;


class VHost
{
    protected $configContainers = [];
    protected $directives = [];
    protected $ip;
    protected $port;

    public function getConfigContainers()
    {
        return $this->configContainers;
    }

    public function setConfigContainers(array $configContainers)
    {
        $this->configContainers = $configContainers;
    }

    public function addConfigContainer($configContainer)
    {
        $this->configContainers[] = $configContainer;
    }

    public function getDirectives()
    {
        return $this->directives;
    }

    public function setDirectives(array $directives)
    {
        $this->directives = $directives;
    }

    public function addDirective($directive)
    {
        $this->directives[] = $directive;
    }

    public function setIp($ip)
    {
        $this->ip = $ip;
    }

    public function getIp()
    {
        return $this->ip;
    }

    public function setPort($port)
    {
        $this->port = $port;
    }

    public function getPort()
    {
        return $this->port;
    }
}


//
//$vhost ='
//<Directory "/srv/httpd/htdocs/mydomain.com">
//    Options Indexes FollowSymLinks
//    AllowOverride All
//    Order deny,allow
//    Allow from 127.0.0.1
//    Allow from xxx.xxx.xxx.xxx
//    Allow from xxx.xxx.xxx.xxx
//    Deny from all
//</Directory>
//<Directory "/srv/httpd/htdocs/myseconddomain">
//    Options Indexes FollowSymLinks
//    AllowOverride All
//    Order deny,allow
//    Allow from 127.0.0.1
//    Allow from xxx.xxx.xxx.xxx
//    Allow from xxx.xxx.xxx.xxx
//    Deny from all
//</Directory>
//
//';
//
//$matches = [];
//$directory = preg_match_all('/<Directory "(.*")>([\s\S]*?)<\/Directory>/', $vhost, $matches, PREG_SET_ORDER);
//
//$vhost = new Vhost;
//foreach ($matches as $match) {
//
//    $dir = new Directory;
//    $dir->dir = $match[1];
//
//    //echo "Directory: " . $match[1] . "\n";
//
//    $lines = explode("\n", trim($match[2]));
//
//    foreach ($lines as $line) {
//
//        if (preg_match('/^Allow from (\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3})/', trim($line), $matches)) {
//            $dir->parts[] = new IpWhiteList($matches[1]);
//        }
//
//    }
//    $dir->whiteListIp('254.254.254.253');
//
//    $vhost->directories[] = $dir;
//}


