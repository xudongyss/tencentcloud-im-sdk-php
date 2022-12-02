<?php
/**
 * SetMsgReadRequest
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
 * SetMsgReadRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class SetMsgReadRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SetMsgReadRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'reportAccount' => 'string',
        'peerAccount' => 'string',
        'msgReadTime' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'reportAccount' => null,
        'peerAccount' => null,
        'msgReadTime' => null
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
        'reportAccount' => 'Report_Account',
        'peerAccount' => 'Peer_Account',
        'msgReadTime' => 'MsgReadTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reportAccount' => 'setReportAccount',
        'peerAccount' => 'setPeerAccount',
        'msgReadTime' => 'setMsgReadTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reportAccount' => 'getReportAccount',
        'peerAccount' => 'getPeerAccount',
        'msgReadTime' => 'getMsgReadTime'
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
        $this->container['reportAccount'] = isset($data['reportAccount']) ? $data['reportAccount'] : null;
        $this->container['peerAccount'] = isset($data['peerAccount']) ? $data['peerAccount'] : null;
        $this->container['msgReadTime'] = isset($data['msgReadTime']) ? $data['msgReadTime'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['reportAccount'] === null) {
            $invalidProperties[] = "'reportAccount' can't be null";
        }
        if ($this->container['peerAccount'] === null) {
            $invalidProperties[] = "'peerAccount' can't be null";
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
     * Gets reportAccount
     *
     * @return string
     */
    public function getReportAccount()
    {
        return $this->container['reportAccount'];
    }

    /**
     * Sets reportAccount
     *
     * @param string $reportAccount 进行消息已读的用户 UserId
     *
     * @return $this
     */
    public function setReportAccount($reportAccount)
    {
        $this->container['reportAccount'] = $reportAccount;

        return $this;
    }

    /**
     * Gets peerAccount
     *
     * @return string
     */
    public function getPeerAccount()
    {
        return $this->container['peerAccount'];
    }

    /**
     * Sets peerAccount
     *
     * @param string $peerAccount 进行消息已读的单聊会话的另一方用户 UserId
     *
     * @return $this
     */
    public function setPeerAccount($peerAccount)
    {
        $this->container['peerAccount'] = $peerAccount;

        return $this;
    }

    /**
     * Gets msgReadTime
     *
     * @return string|null
     */
    public function getMsgReadTime()
    {
        return $this->container['msgReadTime'];
    }

    /**
     * Sets msgReadTime
     *
     * @param string|null $msgReadTime 时间戳（秒），该时间戳之前的消息全部已读。若不填，则取当前时间戳
     *
     * @return $this
     */
    public function setMsgReadTime($msgReadTime)
    {
        $this->container['msgReadTime'] = $msgReadTime;

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


