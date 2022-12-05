<?php
namespace TencentCloud\IM;

use Tencent\TLSSigAPIv2;
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
    private static $account = null;
    /**
     * 群组管理
     * @var GroupApi
     */
    private static $group = null;
    /**
     * 单聊
     * @var SingleChatApi
     */
    private static $singleChat = null;
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
     * @return AccountApi|null
     */
    private static function account()
    {
        return static::$account;
    }

    /**
     * @return GroupApi|null
     */
    private static function group()
    {
        return static::$group;
    }

    /**
     * @return SingleChatApi|null
     */
    private static function singleChat()
    {
        return static::$singleChat;
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

    /**
     * @param $name
     * @param $arguments
     * @return \TencentCloud\IM\Model\CommonResponse
     * @throws ApiException
     */
    public static function __callStatic($name, $arguments)
    {
        try {
            $response = call_user_func_array([static::$name(), $arguments[0]], [static::random(), $arguments[1]]);
            if ($response->getErrorCode() === 0) return $response;

            throw new ApiException($response->getErrorInfo(), $response->getErrorCode());
        } catch (\Exception $e) {
            throw $e;
        }
    }

    /**
     * UserSig
     * @param $userId
     * @param $expire       有效期：单位 秒，默认 180 天
     * @return string
     * @throws \Exception
     */
    public static function genUserSig($userId, $expire = 86400 * 180)
    {
        $api = new TLSSigAPIv2(static::$sdkAppId, static::$key);
        return $api->genUserSig($userId, $expire);
    }
}