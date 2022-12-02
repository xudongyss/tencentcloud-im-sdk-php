<?php
/**
 * AccountImportRequest
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
 * AccountImportRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class AccountImportRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountImportRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'userID' => 'string',
        'nick' => 'string',
        'faceUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'userID' => null,
        'nick' => null,
        'faceUrl' => null
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
        'userID' => 'UserID',
        'nick' => 'Nick',
        'faceUrl' => 'FaceUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'userID' => 'setUserID',
        'nick' => 'setNick',
        'faceUrl' => 'setFaceUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'userID' => 'getUserID',
        'nick' => 'getNick',
        'faceUrl' => 'getFaceUrl'
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
        $this->container['userID'] = isset($data['userID']) ? $data['userID'] : null;
        $this->container['nick'] = isset($data['nick']) ? $data['nick'] : null;
        $this->container['faceUrl'] = isset($data['faceUrl']) ? $data['faceUrl'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['userID'] === null) {
            $invalidProperties[] = "'userID' can't be null";
        }
        if ((mb_strlen($this->container['userID']) > 32)) {
            $invalidProperties[] = "invalid value for 'userID', the character length must be smaller than or equal to 32.";
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
     * Gets userID
     *
     * @return string
     */
    public function getUserID()
    {
        return $this->container['userID'];
    }

    /**
     * Sets userID
     *
     * @param string $userID 用户名，长度不超过32字节
     *
     * @return $this
     */
    public function setUserID($userID)
    {
        if ((mb_strlen($userID) > 32)) {
            throw new \InvalidArgumentException('invalid length for $userID when calling AccountImportRequest., must be smaller than or equal to 32.');
        }

        $this->container['userID'] = $userID;

        return $this;
    }

    /**
     * Gets nick
     *
     * @return string|null
     */
    public function getNick()
    {
        return $this->container['nick'];
    }

    /**
     * Sets nick
     *
     * @param string|null $nick 用户昵称
     *
     * @return $this
     */
    public function setNick($nick)
    {
        $this->container['nick'] = $nick;

        return $this;
    }

    /**
     * Gets faceUrl
     *
     * @return string|null
     */
    public function getFaceUrl()
    {
        return $this->container['faceUrl'];
    }

    /**
     * Sets faceUrl
     *
     * @param string|null $faceUrl 用户头像 URL
     *
     * @return $this
     */
    public function setFaceUrl($faceUrl)
    {
        $this->container['faceUrl'] = $faceUrl;

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


