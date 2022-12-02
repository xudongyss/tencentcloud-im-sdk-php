<?php
/**
 * GetRecentContactListGroupGetResponse
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
use \TencentCloud\IM\ObjectSerializer;

/**
 * GetRecentContactListGroupGetResponse Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class GetRecentContactListGroupGetResponse extends CommonResponse 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetRecentContactListGroupGetResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sessionItem' => 'object[]',
        'completeFlag' => 'int',
        'timeStamp' => 'int',
        'startIndex' => 'int',
        'topTimeStamp' => 'int',
        'topStartIndex' => 'int',
        'errorDisplay' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'sessionItem' => null,
        'completeFlag' => 'int32',
        'timeStamp' => 'int32',
        'startIndex' => 'int32',
        'topTimeStamp' => 'int32',
        'topStartIndex' => 'int32',
        'errorDisplay' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes + parent::openAPITypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats + parent::openAPIFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'sessionItem' => 'SessionItem',
        'completeFlag' => 'CompleteFlag',
        'timeStamp' => 'TimeStamp',
        'startIndex' => 'StartIndex',
        'topTimeStamp' => 'TopTimeStamp',
        'topStartIndex' => 'TopStartIndex',
        'errorDisplay' => 'ErrorDisplay'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sessionItem' => 'setSessionItem',
        'completeFlag' => 'setCompleteFlag',
        'timeStamp' => 'setTimeStamp',
        'startIndex' => 'setStartIndex',
        'topTimeStamp' => 'setTopTimeStamp',
        'topStartIndex' => 'setTopStartIndex',
        'errorDisplay' => 'setErrorDisplay'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sessionItem' => 'getSessionItem',
        'completeFlag' => 'getCompleteFlag',
        'timeStamp' => 'getTimeStamp',
        'startIndex' => 'getStartIndex',
        'topTimeStamp' => 'getTopTimeStamp',
        'topStartIndex' => 'getTopStartIndex',
        'errorDisplay' => 'getErrorDisplay'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['sessionItem'] = isset($data['sessionItem']) ? $data['sessionItem'] : null;
        $this->container['completeFlag'] = isset($data['completeFlag']) ? $data['completeFlag'] : null;
        $this->container['timeStamp'] = isset($data['timeStamp']) ? $data['timeStamp'] : null;
        $this->container['startIndex'] = isset($data['startIndex']) ? $data['startIndex'] : null;
        $this->container['topTimeStamp'] = isset($data['topTimeStamp']) ? $data['topTimeStamp'] : null;
        $this->container['topStartIndex'] = isset($data['topStartIndex']) ? $data['topStartIndex'] : null;
        $this->container['errorDisplay'] = isset($data['errorDisplay']) ? $data['errorDisplay'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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
     * Gets sessionItem
     *
     * @return object[]|null
     */
    public function getSessionItem()
    {
        return $this->container['sessionItem'];
    }

    /**
     * Sets sessionItem
     *
     * @param object[]|null $sessionItem 会话对象数组
     *
     * @return $this
     */
    public function setSessionItem($sessionItem)
    {
        $this->container['sessionItem'] = $sessionItem;

        return $this;
    }

    /**
     * Gets completeFlag
     *
     * @return int|null
     */
    public function getCompleteFlag()
    {
        return $this->container['completeFlag'];
    }

    /**
     * Sets completeFlag
     *
     * @param int|null $completeFlag 结束标识：1 表示已返回全量会话，0 表示还有会话没拉完
     *
     * @return $this
     */
    public function setCompleteFlag($completeFlag)
    {
        $this->container['completeFlag'] = $completeFlag;

        return $this;
    }

    /**
     * Gets timeStamp
     *
     * @return int|null
     */
    public function getTimeStamp()
    {
        return $this->container['timeStamp'];
    }

    /**
     * Sets timeStamp
     *
     * @param int|null $timeStamp 普通会话下一页拉取的起始时间，分页拉取时通过请求包的 TimeStamp 字段带给移动通信后台
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
     * @return int|null
     */
    public function getStartIndex()
    {
        return $this->container['startIndex'];
    }

    /**
     * Sets startIndex
     *
     * @param int|null $startIndex 普通会话下一页拉取的起始位置，分页拉取时通过请求包的 StartIndex 字段带给移动通信后台
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
     * @return int|null
     */
    public function getTopTimeStamp()
    {
        return $this->container['topTimeStamp'];
    }

    /**
     * Sets topTimeStamp
     *
     * @param int|null $topTimeStamp 置顶会话下一页拉取的起始时间，分页拉取时通过请求包的 TopTimeStamp 字段带给移动通信后台
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
     * @return int|null
     */
    public function getTopStartIndex()
    {
        return $this->container['topStartIndex'];
    }

    /**
     * Sets topStartIndex
     *
     * @param int|null $topStartIndex 置顶会话下一页拉取的起始位置，分页拉取时通过请求包的 TopStartIndex 字段带给移动通信后台
     *
     * @return $this
     */
    public function setTopStartIndex($topStartIndex)
    {
        $this->container['topStartIndex'] = $topStartIndex;

        return $this;
    }

    /**
     * Gets errorDisplay
     *
     * @return string|null
     */
    public function getErrorDisplay()
    {
        return $this->container['errorDisplay'];
    }

    /**
     * Sets errorDisplay
     *
     * @param string|null $errorDisplay 详细的客户端展示信息
     *
     * @return $this
     */
    public function setErrorDisplay($errorDisplay)
    {
        $this->container['errorDisplay'] = $errorDisplay;

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


