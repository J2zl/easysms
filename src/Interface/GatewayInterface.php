<?php

namespace EasySms\Interface;

interface GatewayInterface
{
    /**
     * 发送短信通知
     *
     * @param string $mobile 手机号
     * @param string $template_id 短信模板id
     * @param array $tag 参数，用做替代模板中的@1@变量
     * @return array [bool:success, array:responseArray]
     * @throws \GuzzleHttp\Exception\*
     */
    public function send(string $mobile, string $template_id, array $tag=[]) : array 

    /**
     * 发送原始文本短信
     *
     * @param string $mobile
     * @param string $content
     * @return array [bool:success, array:responseArr]
     * @throws \GuzzleHttp\Exception\*
     */
    public function sendRawContent(string $mobile, string $content) : array 

}