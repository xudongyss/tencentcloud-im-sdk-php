<?php
namespace TencentCloud\IM;

use TencentCloud\IM\Api\AccountApi;
use TencentCloud\IM\Api\GroupApi;
use TencentCloud\IM\Api\SingleChatApi;

class Tim
{
    // SDKAppID
    private static $sdkAppId = null;
    // 密钥
    private static $key = null;
    // 管理员帐号
    private static $identifier = null;

    /**
     * 账号管理
     * @var AccountApi
     */
    public static $account = null;
    /**
     * 群组管理
     * @var GroupApi
     */
    public static $group = null;
    /**
     * 单聊
     * @var null
     */
    public static $singleChat = null;
    /**
     * 初始化
     * @param $sdkAppId
     * @param $identifier
     * @param $key
     * @return void
     */
    public static function init($sdkAppId, $identifier, $key)
    {
        $config = new Configuration();
        $config->setSdkappid($sdkAppId);
        $config->setIdentifier($identifier);
        $config->setKey($key);

        static::$account = new AccountApi(null, $config);
        static::$group = new GroupApi(null, $config);
        static::$singleChat = new SingleChatApi(null, $config);
    }

    /**
     * 随机数
     * @return int
     * @throws \Exception
     */
    public static function random()
    {
        return random_int(0, 999999999);
    }
}