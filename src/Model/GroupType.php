<?php
/**
 * GroupType
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
 * GroupType Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class GroupType
{
    /**
     * Possible values of this enum
     */
    const WORK = 'Work';
    const _PRIVATE = 'Private';
    const _PUBLIC = 'Public';
    const MEETING = 'Meeting';
    const CHAT_ROOM = 'ChatRoom';
    const AV_CHAT_ROOM = 'AVChatRoom';
    const COMMUNITY = 'Community';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::WORK,
            self::_PRIVATE,
            self::_PUBLIC,
            self::MEETING,
            self::CHAT_ROOM,
            self::AV_CHAT_ROOM,
            self::COMMUNITY,
        ];
    }
}


