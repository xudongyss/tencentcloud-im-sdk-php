<?php
/**
 * GetRecentContactListGroupGetRequest
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
 * GetRecentContactListGroupGetRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class GetRecentContactListGroupGetRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetRecentContactListGroupGetRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fromAccount' => 'string',
        'timeStamp' => 'int',
        'startIndex' => 'int',
        'topTimeStamp' => 'int',
        'topStartIndex' => 'int',
        'assistFlags' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'fromAccount' => null,
        'timeStamp' => 'int32',
        'startIndex' => 'int32',
        'topTimeStamp' => 'int32',
        'topStartIndex' => 'int32',
        'assistFlags' => 'int32'
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
        'timeStamp' => 'TimeStamp',
        'startIndex' => 'StartIndex',
        'topTimeStamp' => 'TopTimeStamp',
        'topStartIndex' => 'TopStartIndex',
        'assistFlags' => 'AssistFlags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fromAccount' => 'setFromAccount',
        'timeStamp' => 'setTimeStamp',
        'startIndex' => 'setStartIndex',
        'topTimeStamp' => 'setTopTimeStamp',
        'topStartIndex' => 'setTopStartIndex',
        'assistFlags' => 'setAssistFlags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fromAccount' => 'getFromAccount',
        'timeStamp' => 'getTimeStamp',
        'startIndex' => 'getStartIndex',
        'topTimeStamp' => 'getTopTimeStamp',
        'topStartIndex' => 'getTopStartIndex',
        'assistFlags' => 'getAssistFlags'
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
        $this->container['timeStamp'] = isset($data['timeStamp']) ? $data['timeStamp'] : null;
        $this->container['startIndex'] = isset($data['startIndex']) ? $data['startIndex'] : null;
        $this->container['topTimeStamp'] = isset($data['topTimeStamp']) ? $data['topTimeStamp'] : null;
        $this->container['topStartIndex'] = isset($data['topStartIndex']) ? $data['topStartIndex'] : null;
        $this->container['assistFlags'] = isset($data['assistFlags']) ? $data['assistFlags'] : null;
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
        if ($this->container['timeStamp'] === null) {
            $invalidProperties[] = "'timeStamp' can't be null";
        }
        if ($this->container['startIndex'] === null) {
            $invalidProperties[] = "'startIndex' can't be null";
        }
        if ($this->container['topTimeStamp'] === null) {
            $invalidProperties[] = "'topTimeStamp' can't be null";
        }
        if ($this->container['topStartIndex'] === null) {
            $invalidProperties[] = "'topStartIndex' can't be null";
        }
        if ($this->container['assistFlags'] === null) {
            $invalidProperties[] = "'assistFlags' can't be null";
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
     * @param string $fromAccount 填 UserID，请求拉取该用户的会话列表
     *
     * @return $this
     */
    public function setFromAccount($fromAccount)
    {
        $this->container['fromAccount'] = $fromAccount;

        return $this;
    }

    /**
     * Gets timeStamp
     *
     * @return int
     */
    public function getTimeStamp()
    {
        return $this->container['timeStamp'];
    }

    /**
     * Sets timeStamp
     *
     * @param int $timeStamp 普通会话的起始时间，第一页填 0
     *
     * @return $this
     */
    public function setTimeStamp($timeStamp)
    {
        $this->container['timeStamp'] = $timeStamp;

        return $this;
    }

    /**
     * Gets startIndex
     *
     * @return int
     */
    public function getStartIndex()
    {
        return $this->container['startIndex'];
    }

    /**
     * Sets startIndex
     *
     * @param int $startIndex 普通会话的起始位置，第一页填 0
     *
     * @return $this
     */
    public function setStartIndex($startIndex)
    {
        $this->container['startIndex'] = $startIndex;

        return $this;
    }

    /**
     * Gets topTimeStamp
     *
     * @return int
     */
    public function getTopTimeStamp()
    {
        return $this->container['topTimeStamp'];
    }

    /**
     * Sets topTimeStamp
     *
     * @param int $topTimeStamp 置顶会话的起始时间，第一页填 0
     *
     * @return $this
     */
    public function setTopTimeStamp($topTimeStamp)
    {
        $this->container['topTimeStamp'] = $topTimeStamp;

        return $this;
    }

    /**
     * Gets topStartIndex
     *
     * @return int
     */
    public function getTopStartIndex()
    {
        return $this->container['topStartIndex'];
    }

    /**
     * Sets topStartIndex
     *
     * @param int $topStartIndex 置顶会话的起始位置，第一页填 0
     *
     * @return $this
     */
    public function setTopStartIndex($topStartIndex)
    {
        $this->container['topStartIndex'] = $topStartIndex;

        return $this;
    }

    /**
     * Gets assistFlags
     *
     * @return int
     */
    public function getAssistFlags()
    {
        return $this->container['assistFlags'];
    }

    /**
     * Sets assistFlags
     *
     * @param int $assistFlags 会话辅助标志位： bit 0 - 是否支持置顶会话 bit 1 - 是否返回空会话 bit 2 - 是否支持置顶会话分页
     *
     * @return $this
     */
    public function setAssistFlags($assistFlags)
    {
        $this->container['assistFlags'] = $assistFlags;

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


