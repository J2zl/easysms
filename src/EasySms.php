<?php

namespace Rzl\EasySms;

use Rzl\EasySms\Gateways\GzDataGateWay;
use Rzl\EasySms\Gateways\JuMeiGateWay;
use Rzl\EasySms\Support\Config;

class Sms
{
    protected $config;

    protected $sms;

    public function __construct($config) {
        $this->config = new Config($config);

        $default = $this->config->get('default');
        $smsConfig = $this->config->get('gateways.'.$default);
        switch ($default) {
            case 'jumei':
                $this->sms = new JuMeiGateWay($smsConfig);
                break;
            case 'gzdata':
                $this->sms = new GzDataGateWay($smsConfig);
                break;
        }
    }

    public function send(string $mobile, string $template_id, array $tag=[]) {
        return $this->sms->send(string $mobile, string $template_id, array $tag=[]);
    }

    public function sendRawContent(string $mobile, string $content) {
        return $this->sms->send(string $mobile, string $content);
    }
}