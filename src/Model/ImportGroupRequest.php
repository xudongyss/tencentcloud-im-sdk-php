<?php
/**
 * ImportGroupRequest
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
 * ImportGroupRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class ImportGroupRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ImportGroupRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ownerAccount' => 'string',
        'type' => 'string',
        'groupId' => 'string',
        'name' => 'string',
        'introduction' => 'string',
        'notification' => 'string',
        'faceUrl' => 'string',
        'maxMemberCount' => 'int',
        'applyJoinOption' => 'string',
        'appDefinedData' => '\TencentCloud\IM\Model\DefinedData[]',
        'createTime' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'ownerAccount' => null,
        'type' => null,
        'groupId' => null,
        'name' => null,
        'introduction' => null,
        'notification' => null,
        'faceUrl' => null,
        'maxMemberCount' => 'int32',
        'applyJoinOption' => null,
        'appDefinedData' => null,
        'createTime' => 'int32'
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
        'ownerAccount' => 'Owner_Account',
        'type' => 'Type',
        'groupId' => 'GroupId',
        'name' => 'Name',
        'introduction' => 'Introduction',
        'notification' => 'Notification',
        'faceUrl' => 'FaceUrl',
        'maxMemberCount' => 'MaxMemberCount',
        'applyJoinOption' => 'ApplyJoinOption',
        'appDefinedData' => 'AppDefinedData',
        'createTime' => 'CreateTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ownerAccount' => 'setOwnerAccount',
        'type' => 'setType',
        'groupId' => 'setGroupId',
        'name' => 'setName',
        'introduction' => 'setIntroduction',
        'notification' => 'setNotification',
        'faceUrl' => 'setFaceUrl',
        'maxMemberCount' => 'setMaxMemberCount',
        'applyJoinOption' => 'setApplyJoinOption',
        'appDefinedData' => 'setAppDefinedData',
        'createTime' => 'setCreateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ownerAccount' => 'getOwnerAccount',
        'type' => 'getType',
        'groupId' => 'getGroupId',
        'name' => 'getName',
        'introduction' => 'getIntroduction',
        'notification' => 'getNotification',
        'faceUrl' => 'getFaceUrl',
        'maxMemberCount' => 'getMaxMemberCount',
        'applyJoinOption' => 'getApplyJoinOption',
        'appDefinedData' => 'getAppDefinedData',
        'createTime' => 'getCreateTime'
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

    const APPLY_JOIN_OPTION_FREE_ACCESS = 'FreeAccess';
    const APPLY_JOIN_OPTION_NEED_PERMISSION = 'NeedPermission';
    const APPLY_JOIN_OPTION_DISABLE_APPLY = 'DisableApply';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getApplyJoinOptionAllowableValues()
    {
        return [
            self::APPLY_JOIN_OPTION_FREE_ACCESS,
            self::APPLY_JOIN_OPTION_NEED_PERMISSION,
            self::APPLY_JOIN_OPTION_DISABLE_APPLY,
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
        $this->container['ownerAccount'] = isset($data['ownerAccount']) ? $data['ownerAccount'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['introduction'] = isset($data['introduction']) ? $data['introduction'] : null;
        $this->container['notification'] = isset($data['notification']) ? $data['notification'] : null;
        $this->container['faceUrl'] = isset($data['faceUrl']) ? $data['faceUrl'] : null;
        $this->container['maxMemberCount'] = isset($data['maxMemberCount']) ? $data['maxMemberCount'] : null;
        $this->container['applyJoinOption'] = isset($data['applyJoinOption']) ? $data['applyJoinOption'] : null;
        $this->container['appDefinedData'] = isset($data['appDefinedData']) ? $data['appDefinedData'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 30)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['introduction']) && (mb_strlen($this->container['introduction']) > 240)) {
            $invalidProperties[] = "invalid value for 'introduction', the character length must be smaller than or equal to 240.";
        }

        if (!is_null($this->container['notification']) && (mb_strlen($this->container['notification']) > 300)) {
            $invalidProperties[] = "invalid value for 'notification', the character length must be smaller than or equal to 300.";
        }

        if (!is_null($this->container['faceUrl']) && (mb_strlen($this->container['faceUrl']) > 100)) {
            $invalidProperties[] = "invalid value for 'faceUrl', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['maxMemberCount']) && ($this->container['maxMemberCount'] > 6000)) {
            $invalidProperties[] = "invalid value for 'maxMemberCount', must be smaller than or equal to 6000.";
        }

        $allowedValues = $this->getApplyJoinOptionAllowableValues();
        if (!is_null($this->container['applyJoinOption']) && !in_array($this->container['applyJoinOption'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'applyJoinOption', must be one of '%s'",
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
     * Gets ownerAccount
     *
     * @return string|null
     */
    public function getOwnerAccount()
    {
        return $this->container['ownerAccount'];
    }

    /**
     * Sets ownerAccount
     *
     * @param string|null $ownerAccount 群主 ID，自动添加到群成员中。如果不填，群没有群主
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        $this->container['ownerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type 群组类型，包括 Public（陌生人社交群），Private（同新版本中的Work，好友工作群）， ChatRoom（同新版本中的Meeting，会议群）、Community（社群）
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets groupId
     *
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
     * Sets groupId
     *
     * @param string|null $groupId 为了使得群组 ID 更加简单，便于记忆传播，腾讯云支持 App 在通过 REST API 创建群组时自定义群组 ID。详细请参阅 群组系统（https://cloud.tencent.com/document/product/269/1502）
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name 群名称，最长30字节
     *
     * @return $this
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 30)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ImportGroupRequest., must be smaller than or equal to 30.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets introduction
     *
     * @return string|null
     */
    public function getIntroduction()
    {
        return $this->container['introduction'];
    }

    /**
     * Sets introduction
     *
     * @param string|null $introduction 群简介，最长240字节
     *
     * @return $this
     */
    public function setIntroduction($introduction)
    {
        if (!is_null($introduction) && (mb_strlen($introduction) > 240)) {
            throw new \InvalidArgumentException('invalid length for $introduction when calling ImportGroupRequest., must be smaller than or equal to 240.');
        }

        $this->container['introduction'] = $introduction;

        return $this;
    }

    /**
     * Gets notification
     *
     * @return string|null
     */
    public function getNotification()
    {
        return $this->container['notification'];
    }

    /**
     * Sets notification
     *
     * @param string|null $notification 群公告，最长300字节
     *
     * @return $this
     */
    public function setNotification($notification)
    {
        if (!is_null($notification) && (mb_strlen($notification) > 300)) {
            throw new \InvalidArgumentException('invalid length for $notification when calling ImportGroupRequest., must be smaller than or equal to 300.');
        }

        $this->container['notification'] = $notification;

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
     * @param string|null $faceUrl 群头像 URL，最长100字节
     *
     * @return $this
     */
    public function setFaceUrl($faceUrl)
    {
        if (!is_null($faceUrl) && (mb_strlen($faceUrl) > 100)) {
            throw new \InvalidArgumentException('invalid length for $faceUrl when calling ImportGroupRequest., must be smaller than or equal to 100.');
        }

        $this->container['faceUrl'] = $faceUrl;

        return $this;
    }

    /**
     * Gets maxMemberCount
     *
     * @return int|null
     */
    public function getMaxMemberCount()
    {
        return $this->container['maxMemberCount'];
    }

    /**
     * Sets maxMemberCount
     *
     * @param int|null $maxMemberCount 最大群成员数量，最大为6000，不填默认为2000个
     *
     * @return $this
     */
    public function setMaxMemberCount($maxMemberCount)
    {

        if (!is_null($maxMemberCount) && ($maxMemberCount > 6000)) {
            throw new \InvalidArgumentException('invalid value for $maxMemberCount when calling ImportGroupRequest., must be smaller than or equal to 6000.');
        }

        $this->container['maxMemberCount'] = $maxMemberCount;

        return $this;
    }

    /**
     * Gets applyJoinOption
     *
     * @return string|null
     */
    public function getApplyJoinOption()
    {
        return $this->container['applyJoinOption'];
    }

    /**
     * Sets applyJoinOption
     *
     * @param string|null $applyJoinOption 申请加群处理方式。包含 FreeAccess（自由加入），NeedPermission（需要验证），DisableApply（禁止加群），不填默认为NeedPermission（需要验证）
     *
     * @return $this
     */
    public function setApplyJoinOption($applyJoinOption)
    {
        $allowedValues = $this->getApplyJoinOptionAllowableValues();
        if (!is_null($applyJoinOption) && !in_array($applyJoinOption, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'applyJoinOption', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['applyJoinOption'] = $applyJoinOption;

        return $this;
    }

    /**
     * Gets appDefinedData
     *
     * @return \TencentCloud\IM\Model\DefinedData[]|null
     */
    public function getAppDefinedData()
    {
        return $this->container['appDefinedData'];
    }

    /**
     * Sets appDefinedData
     *
     * @param \TencentCloud\IM\Model\DefinedData[]|null $appDefinedData 群组维度的自定义字段，默认情况是没有的，需要开通，详细请参阅 群组系统(https://cloud.tencent.com/document/product/269/1502)
     *
     * @return $this
     */
    public function setAppDefinedData($appDefinedData)
    {
        $this->container['appDefinedData'] = $appDefinedData;

        return $this;
    }

    /**
     * Gets createTime
     *
     * @return int|null
     */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
     * Sets createTime
     *
     * @param int|null $createTime 群组的创建时间
     *
     * @return $this
     */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;

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


