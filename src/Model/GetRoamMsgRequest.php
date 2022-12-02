<?php
/**
 * GetRoamMsgRequest
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
 * GetRoamMsgRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class GetRoamMsgRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetRoamMsgRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fromAccount' => 'string',
        'toAccount' => 'string',
        'maxCnt' => 'int',
        'minTime' => 'int',
        'maxTime' => 'int',
        'lastMsgKey' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'fromAccount' => null,
        'toAccount' => null,
        'maxCnt' => 'int32',
        'minTime' => 'int32',
        'maxTime' => 'int32',
        'lastMsgKey' => null
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
        'fromAccount' => 'From_Account',
        'toAccount' => 'To_Account',
        'maxCnt' => 'MaxCnt',
        'minTime' => 'MinTime',
        'maxTime' => 'MaxTime',
        'lastMsgKey' => 'LastMsgKey'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fromAccount' => 'setFromAccount',
        'toAccount' => 'setToAccount',
        'maxCnt' => 'setMaxCnt',
        'minTime' => 'setMinTime',
        'maxTime' => 'setMaxTime',
        'lastMsgKey' => 'setLastMsgKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fromAccount' => 'getFromAccount',
        'toAccount' => 'getToAccount',
        'maxCnt' => 'getMaxCnt',
        'minTime' => 'getMinTime',
        'maxTime' => 'getMaxTime',
        'lastMsgKey' => 'getLastMsgKey'
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
        $this->container['fromAccount'] = isset($data['fromAccount']) ? $data['fromAccount'] : null;
        $this->container['toAccount'] = isset($data['toAccount']) ? $data['toAccount'] : null;
        $this->container['maxCnt'] = isset($data['maxCnt']) ? $data['maxCnt'] : null;
        $this->container['minTime'] = isset($data['minTime']) ? $data['minTime'] : null;
        $this->container['maxTime'] = isset($data['maxTime']) ? $data['maxTime'] : null;
        $this->container['lastMsgKey'] = isset($data['lastMsgKey']) ? $data['lastMsgKey'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['fromAccount'] === null) {
            $invalidProperties[] = "'fromAccount' can't be null";
        }
        if ($this->container['toAccount'] === null) {
            $invalidProperties[] = "'toAccount' can't be null";
        }
        if ($this->container['maxCnt'] === null) {
            $invalidProperties[] = "'maxCnt' can't be null";
        }
        if ($this->container['minTime'] === null) {
            $invalidProperties[] = "'minTime' can't be null";
        }
        if ($this->container['maxTime'] === null) {
            $invalidProperties[] = "'maxTime' can't be null";
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
     * Gets fromAccount
     *
     * @return string
     */
    public function getFromAccount()
    {
        return $this->container['fromAccount'];
    }

    /**
     * Sets fromAccount
     *
     * @param string $fromAccount 会话其中一方的 UserID，若已指定发送消息方帐号，则为消息发送方
     *
     * @return $this
     */
    public function setFromAccount($fromAccount)
    {
        $this->container['fromAccount'] = $fromAccount;

        return $this;
    }

    /**
     * Gets toAccount
     *
     * @return string
     */
    public function getToAccount()
    {
        return $this->container['toAccount'];
    }

    /**
     * Sets toAccount
     *
     * @param string $toAccount 会话其中一方的 UserID
     *
     * @return $this
     */
    public function setToAccount($toAccount)
    {
        $this->container['toAccount'] = $toAccount;

        return $this;
    }

    /**
     * Gets maxCnt
     *
     * @return int
     */
    public function getMaxCnt()
    {
        return $this->container['maxCnt'];
    }

    /**
     * Sets maxCnt
     *
     * @param int $maxCnt 请求的消息条数
     *
     * @return $this
     */
    public function setMaxCnt($maxCnt)
    {
        $this->container['maxCnt'] = $maxCnt;

        return $this;
    }

    /**
     * Gets minTime
     *
     * @return int
     */
    public function getMinTime()
    {
        return $this->container['minTime'];
    }

    /**
     * Sets minTime
     *
     * @param int $minTime 请求的消息时间范围的最小值
     *
     * @return $this
     */
    public function setMinTime($minTime)
    {
        $this->container['minTime'] = $minTime;

        return $this;
    }

    /**
     * Gets maxTime
     *
     * @return int
     */
    public function getMaxTime()
    {
        return $this->container['maxTime'];
    }

    /**
     * Sets maxTime
     *
     * @param int $maxTime 请求的消息时间范围的最大值
     *
     * @return $this
     */
    public function setMaxTime($maxTime)
    {
        $this->container['maxTime'] = $maxTime;

        return $this;
    }

    /**
     * Gets lastMsgKey
     *
     * @return string|null
     */
    public function getLastMsgKey()
    {
        return $this->container['lastMsgKey'];
    }

    /**
     * Sets lastMsgKey
     *
     * @param string|null $lastMsgKey 上一次拉取到的最后一条消息的 MsgKey，续拉时需要填该字段,填写方法见示例（https://cloud.tencent.com/document/product/269/42794）
     *
     * @return $this
     */
    public function setLastMsgKey($lastMsgKey)
    {
        $this->container['lastMsgKey'] = $lastMsgKey;

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


