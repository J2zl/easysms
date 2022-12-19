
# 短信sdk


**安装**

```
composer require j2zl/easy-sms
```

## 发布配置文件
```
php artisan vendor:publish --provider="EasySms\Providers\ServiceProvider"
```

## 短信SDK
> 已完成

- send 发送短信
- sendRawContent 发送自定义短信


#### 发送短信

```php
$sms = app('EasySms');
list($success, $response) = $sms->send('183****014', '无需填入, 兼容jumdata语法', ['5678']);
list($success, $response) = $sms->sendRawContent('183****014', 'content');

if ($success == false) {
    // 短信发送失败
}
```