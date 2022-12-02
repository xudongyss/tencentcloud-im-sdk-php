<?php
/**
 * CreateGroupRequest
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
 * CreateGroupRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class CreateGroupRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateGroupRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ownerAccount' => 'string',
        'type' => '\TencentCloud\IM\Model\GroupType',
        'groupId' => 'string',
        'name' => 'string',
        'introduction' => 'string',
        'notification' => 'string',
        'faceUrl' => 'string',
        'maxMemberCount' => 'int',
        'applyJoinOption' => 'string',
        'appDefinedData' => '\TencentCloud\IM\Model\DefinedData[]',
        'memberList' => '\TencentCloud\IM\Model\CreateGroupRequestMemberList[]'
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
        'memberList' => null
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
        'memberList' => 'MemberList'
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
        'memberList' => 'setMemberList'
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
        'memberList' => 'getMemberList'
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
        $this->container['memberList'] = isset($data['memberList']) ? $data['memberList'] : null;
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
     * @param string|null $ownerAccount 群主 ID（需是 已导入(https://cloud.tencent.com/document/product/269/1608))的帐号）。填写后自动添加到群成员中；如果不填，群没有群主
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
     * @return \TencentCloud\IM\Model\GroupType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \TencentCloud\IM\Model\GroupType $type type
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
     * @param string|null $groupId 为了使得群组 ID 更加简单，便于记忆传播，腾讯云支持 App 在通过 REST API 创建群组时 自定义群组 ID(https://cloud.tencent.com/document/product/269/1502#.E8.87.AA.E5.AE.9A.E4.B9.89.E7.BE.A4.E7.BB.84-id)
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
     * @param string $name 群名称，最长30字节，使用 UTF-8 编码，1个汉字占3个字节
     *
     * @return $this
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 30)) {
            throw new \InvalidArgumentException('invalid length for $name when calling CreateGroupRequest., must be smaller than or equal to 30.');
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
     * @param string|null $introduction 群简介，最长240字节，使用 UTF-8 编码，1个汉字占3个字节
     *
     * @return $this
     */
    public function setIntroduction($introduction)
    {
        if (!is_null($introduction) && (mb_strlen($introduction) > 240)) {
            throw new \InvalidArgumentException('invalid length for $introduction when calling CreateGroupRequest., must be smaller than or equal to 240.');
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
     * @param string|null $notification 群公告，最长300字节，使用 UTF-8 编码，1个汉字占3个字节
     *
     * @return $this
     */
    public function setNotification($notification)
    {
        if (!is_null($notification) && (mb_strlen($notification) > 300)) {
            throw new \InvalidArgumentException('invalid length for $notification when calling CreateGroupRequest., must be smaller than or equal to 300.');
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
            throw new \InvalidArgumentException('invalid length for $faceUrl when calling CreateGroupRequest., must be smaller than or equal to 100.');
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
     * @param int|null $maxMemberCount 最大群成员数量，缺省时的默认值：付费套餐包上限，例如体验版是20，如果升级套餐包，需按照修改群基础资料修改这个字段
     *
     * @return $this
     */
    public function setMaxMemberCount($maxMemberCount)
    {
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
     * @param string|null $applyJoinOption 申请加群处理方式。包含 FreeAccess（自由加入），NeedPermission（需要验证），DisableApply（禁止加群），不填默认为 NeedPermission（需要验证） 仅当创建支持申请加群的 群组(https://cloud.tencent.com/document/product/269/1502#.E5.8A.A0.E7.BE.A4.E6.96.B9.E5.BC.8F.E5.B7.AE.E5.BC.82) 时，该字段有效
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
     * @param \TencentCloud\IM\Model\DefinedData[]|null $appDefinedData appDefinedData
     *
     * @return $this
     */
    public function setAppDefinedData($appDefinedData)
    {
        $this->container['appDefinedData'] = $appDefinedData;

        return $this;
    }

    /**
     * Gets memberList
     *
     * @return \TencentCloud\IM\Model\CreateGroupRequestMemberList[]|null
     */
    public function getMemberList()
    {
        return $this->container['memberList'];
    }

    /**
     * Sets memberList
     *
     * @param \TencentCloud\IM\Model\CreateGroupRequestMemberList[]|null $memberList 群组维度的自定义字段，默认情况是没有的，可以通过 即时通信 IM 控制台(https://console.cloud.tencent.com/im) 进行配置，详情请参阅 自定义字段(https://cloud.tencent.com/document/product/269/1502#.E8.87.AA.E5.AE.9A.E4.B9.89.E5.AD.97.E6.AE.B5)
     *
     * @return $this
     */
    public function setMemberList($memberList)
    {
        $this->container['memberList'] = $memberList;

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


