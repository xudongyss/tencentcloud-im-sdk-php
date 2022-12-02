<?php
/**
 * OfflinePushInfoAndroidInfo
 *
 * PHP version 5
 *
 * @category Class
 * @package  TencentCloud\IM

 */

/**
 * TIM SERVER REST API SDK
 *
 * TIM REST API
 *
 * 
 */

/**
 *
 * Do not edit the class manually.
 */

namespace TencentCloud\IM\Model;

use \ArrayAccess;
use \TencentCloud\IM\ObjectSerializer;

/**
 * OfflinePushInfoAndroidInfo Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class OfflinePushInfoAndroidInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OfflinePushInfo_AndroidInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sound' => 'string',
        'huaWeiChannelID' => 'string',
        'xiaoMiChannelID' => 'string',
        'oPPOChannelID' => 'string',
        'googleChannelID' => 'string',
        'vIVOClassification' => 'string',
        'huaWeiImportance' => 'string',
        'extAsHuaweiIntentParam' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'sound' => null,
        'huaWeiChannelID' => null,
        'xiaoMiChannelID' => null,
        'oPPOChannelID' => null,
        'googleChannelID' => null,
        'vIVOClassification' => null,
        'huaWeiImportance' => null,
        'extAsHuaweiIntentParam' => 'int32'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'sound' => 'Sound',
        'huaWeiChannelID' => 'HuaWeiChannelID',
        'xiaoMiChannelID' => 'XiaoMiChannelID',
        'oPPOChannelID' => 'OPPOChannelID',
        'googleChannelID' => 'GoogleChannelID',
        'vIVOClassification' => 'VIVOClassification',
        'huaWeiImportance' => 'HuaWeiImportance',
        'extAsHuaweiIntentParam' => 'ExtAsHuaweiIntentParam'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sound' => 'setSound',
        'huaWeiChannelID' => 'setHuaWeiChannelID',
        'xiaoMiChannelID' => 'setXiaoMiChannelID',
        'oPPOChannelID' => 'setOPPOChannelID',
        'googleChannelID' => 'setGoogleChannelID',
        'vIVOClassification' => 'setVIVOClassification',
        'huaWeiImportance' => 'setHuaWeiImportance',
        'extAsHuaweiIntentParam' => 'setExtAsHuaweiIntentParam'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sound' => 'getSound',
        'huaWeiChannelID' => 'getHuaWeiChannelID',
        'xiaoMiChannelID' => 'getXiaoMiChannelID',
        'oPPOChannelID' => 'getOPPOChannelID',
        'googleChannelID' => 'getGoogleChannelID',
        'vIVOClassification' => 'getVIVOClassification',
        'huaWeiImportance' => 'getHuaWeiImportance',
        'extAsHuaweiIntentParam' => 'getExtAsHuaweiIntentParam'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const VIVO_CLASSIFICATION__0 = '0';
    const VIVO_CLASSIFICATION__1 = '1';
    const EXT_AS_HUAWEI_INTENT_PARAM_0 = 0;
    const EXT_AS_HUAWEI_INTENT_PARAM_1 = 1;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVIVOClassificationAllowableValues()
    {
        return [
            self::VIVO_CLASSIFICATION__0,
            self::VIVO_CLASSIFICATION__1,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getExtAsHuaweiIntentParamAllowableValues()
    {
        return [
            self::EXT_AS_HUAWEI_INTENT_PARAM_0,
            self::EXT_AS_HUAWEI_INTENT_PARAM_1,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['sound'] = isset($data['sound']) ? $data['sound'] : null;
        $this->container['huaWeiChannelID'] = isset($data['huaWeiChannelID']) ? $data['huaWeiChannelID'] : null;
        $this->container['xiaoMiChannelID'] = isset($data['xiaoMiChannelID']) ? $data['xiaoMiChannelID'] : null;
        $this->container['oPPOChannelID'] = isset($data['oPPOChannelID']) ? $data['oPPOChannelID'] : null;
        $this->container['googleChannelID'] = isset($data['googleChannelID']) ? $data['googleChannelID'] : null;
        $this->container['vIVOClassification'] = isset($data['vIVOClassification']) ? $data['vIVOClassification'] : null;
        $this->container['huaWeiImportance'] = isset($data['huaWeiImportance']) ? $data['huaWeiImportance'] : null;
        $this->container['extAsHuaweiIntentParam'] = isset($data['extAsHuaweiIntentParam']) ? $data['extAsHuaweiIntentParam'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getVIVOClassificationAllowableValues();
        if (!is_null($this->container['vIVOClassification']) && !in_array($this->container['vIVOClassification'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'vIVOClassification', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getExtAsHuaweiIntentParamAllowableValues();
        if (!is_null($this->container['extAsHuaweiIntentParam']) && !in_array($this->container['extAsHuaweiIntentParam'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'extAsHuaweiIntentParam', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets sound
     *
     * @return string|null
     */
    public function getSound()
    {
        return $this->container['sound'];
    }

    /**
     * Sets sound
     *
     * @param string|null $sound Android 离线推送声音文件路径。
     *
     * @return $this
     */
    public function setSound($sound)
    {
        $this->container['sound'] = $sound;

        return $this;
    }

    /**
     * Gets huaWeiChannelID
     *
     * @return string|null
     */
    public function getHuaWeiChannelID()
    {
        return $this->container['huaWeiChannelID'];
    }

    /**
     * Sets huaWeiChannelID
     *
     * @param string|null $huaWeiChannelID 华为手机 EMUI 10.0 及以上的通知渠道字段。该字段不为空时，会覆盖控制台配置的 ChannelID 值；该字段为空时，不会覆盖控制台配置的 ChannelID 值。
     *
     * @return $this
     */
    public function setHuaWeiChannelID($huaWeiChannelID)
    {
        $this->container['huaWeiChannelID'] = $huaWeiChannelID;

        return $this;
    }

    /**
     * Gets xiaoMiChannelID
     *
     * @return string|null
     */
    public function getXiaoMiChannelID()
    {
        return $this->container['xiaoMiChannelID'];
    }

    /**
     * Sets xiaoMiChannelID
     *
     * @param string|null $xiaoMiChannelID 小米手机 MIUI 10 及以上的通知类别（Channel）适配字段。该字段不为空时，会覆盖控制台配置的 ChannelID 值；该字段为空时，不会覆盖控制台配置的 ChannelID 值
     *
     * @return $this
     */
    public function setXiaoMiChannelID($xiaoMiChannelID)
    {
        $this->container['xiaoMiChannelID'] = $xiaoMiChannelID;

        return $this;
    }

    /**
     * Gets oPPOChannelID
     *
     * @return string|null
     */
    public function getOPPOChannelID()
    {
        return $this->container['oPPOChannelID'];
    }

    /**
     * Sets oPPOChannelID
     *
     * @param string|null $oPPOChannelID OPPO 手机 Android 8.0 及以上的 NotificationChannel 通知适配字段。该字段不为空时，会覆盖控制台配置的 ChannelID 值；该字段为空时，不会覆盖控制台配置的 ChannelID 值。
     *
     * @return $this
     */
    public function setOPPOChannelID($oPPOChannelID)
    {
        $this->container['oPPOChannelID'] = $oPPOChannelID;

        return $this;
    }

    /**
     * Gets googleChannelID
     *
     * @return string|null
     */
    public function getGoogleChannelID()
    {
        return $this->container['googleChannelID'];
    }

    /**
     * Sets googleChannelID
     *
     * @param string|null $googleChannelID Google 手机 Android 8.0 及以上的通知渠道字段。Google 推送新接口（上传证书文件）支持 channel id，旧接口（填写服务器密钥）不支持。
     *
     * @return $this
     */
    public function setGoogleChannelID($googleChannelID)
    {
        $this->container['googleChannelID'] = $googleChannelID;

        return $this;
    }

    /**
     * Gets vIVOClassification
     *
     * @return string|null
     */
    public function getVIVOClassification()
    {
        return $this->container['vIVOClassification'];
    }

    /**
     * Sets vIVOClassification
     *
     * @param string|null $vIVOClassification VIVO 手机推送消息分类，“0”代表运营消息，“1”代表系统消息，不填默认为1。
     *
     * @return $this
     */
    public function setVIVOClassification($vIVOClassification)
    {
        $allowedValues = $this->getVIVOClassificationAllowableValues();
        if (!is_null($vIVOClassification) && !in_array($vIVOClassification, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'vIVOClassification', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['vIVOClassification'] = $vIVOClassification;

        return $this;
    }

    /**
     * Gets huaWeiImportance
     *
     * @return string|null
     */
    public function getHuaWeiImportance()
    {
        return $this->container['huaWeiImportance'];
    }

    /**
     * Sets huaWeiImportance
     *
     * @param string|null $huaWeiImportance 华为推送通知消息分类，取值为 LOW、NORMAL，不填默认为 NORMAL。
     *
     * @return $this
     */
    public function setHuaWeiImportance($huaWeiImportance)
    {
        $this->container['huaWeiImportance'] = $huaWeiImportance;

        return $this;
    }

    /**
     * Gets extAsHuaweiIntentParam
     *
     * @return int|null
     */
    public function getExtAsHuaweiIntentParam()
    {
        return $this->container['extAsHuaweiIntentParam'];
    }

    /**
     * Sets extAsHuaweiIntentParam
     *
     * @param int|null $extAsHuaweiIntentParam 在控制台配置华为推送为“打开应用内指定页面”的前提下，传“1”表示将透传内容 Ext 作为 Intent 的参数，“0”表示将透传内容 Ext 作为 Action 参数。不填默认为0。两种传参区别可参见 华为推送文档（https://developer.huawei.com/consumer/cn/doc/development/HMSCore-Guides/andorid-basic-clickaction-0000001087554076#section20203190121410）。
     *
     * @return $this
     */
    public function setExtAsHuaweiIntentParam($extAsHuaweiIntentParam)
    {
        $allowedValues = $this->getExtAsHuaweiIntentParamAllowableValues();
        if (!is_null($extAsHuaweiIntentParam) && !in_array($extAsHuaweiIntentParam, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'extAsHuaweiIntentParam', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['extAsHuaweiIntentParam'] = $extAsHuaweiIntentParam;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


