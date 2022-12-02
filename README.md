  # tencentcloud-im-sdk-php
TIM REST API

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new Configuration();
//TODO: 此处替换成您的SDKAppID,应用 SDKAppID，可在即时通信 IM 控制台（https://console.cloud.tencent.com/im） 的应用卡片中获取。
$config->setSdkappid(123456789);
//TODO: 此处替换成您的identifier;用户名，调用 REST API时必须为App管理员帐号 参考:https://cloud.tencent.com/document/product/269/31999#app-.E7.AE.A1.E7.90.86.E5.91.98
$config->setIdentifier("identifier");
//TODO: 此处替换成您的key, 参考：https://cloud.tencent.com/document/product/269/32688#getkey
$config->setKey("key");

$apiInstance = new TencentCloud\IM\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int | 
$accountCheckRequest = new \TencentCloud\IM\Model\AccountCheckRequest(); // \TencentCloud\IM\Model\AccountCheckRequest | 
 //TODO: Set the request parameters

try {
    $result = $apiInstance->accountCheck($random, $accountCheckRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountCheck: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://console.tim.qq.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountApi* | [**accountCheck**](docs/Api/AccountApi.md#accountcheck) | **POST** /v4/im_open_login_svc/account_check | 查询帐号 (https://cloud.tencent.com/document/product/269/38417)
*AccountApi* | [**accountDelete**](docs/Api/AccountApi.md#accountdelete) | **POST** /v4/im_open_login_svc/account_delete | 删除帐号（https://cloud.tencent.com/document/product/269/36443）
*AccountApi* | [**accountImport**](docs/Api/AccountApi.md#accountimport) | **POST** /v4/im_open_login_svc/account_import | 导入单个帐号（https://cloud.tencent.com/document/product/269/1608）
*AccountApi* | [**kick**](docs/Api/AccountApi.md#kick) | **POST** /v4/im_open_login_svc/kick | 失效帐号登录状态（https://cloud.tencent.com/document/product/269/3853）
*AccountApi* | [**multiAccountImport**](docs/Api/AccountApi.md#multiaccountimport) | **POST** /v4/im_open_login_svc/multiaccount_import | 导入多个帐号（https://cloud.tencent.com/document/product/269/4919）
*AccountApi* | [**queryOnlineStatus**](docs/Api/AccountApi.md#queryonlinestatus) | **POST** /v4/openim/query_online_status | 查询帐号在线状态（https://cloud.tencent.com/document/product/269/2566）
*AllMemberPushApi* | [**imAddTag**](docs/Api/AllMemberPushApi.md#imaddtag) | **POST** /v4/all_member_push/im_add_tag | 添加用户标签（https://cloud.tencent.com/document/product/269/45941）
*AllMemberPushApi* | [**imGetAttr**](docs/Api/AllMemberPushApi.md#imgetattr) | **POST** /v4/all_member_push/im_get_attr | 获取用户属性（https://cloud.tencent.com/document/product/269/45937）
*AllMemberPushApi* | [**imGetAttrName**](docs/Api/AllMemberPushApi.md#imgetattrname) | **POST** /v4/all_member_push/im_get_attr_name | 获取应用属性名称（https://cloud.tencent.com/document/product/269/45936）
*AllMemberPushApi* | [**imGetTag**](docs/Api/AllMemberPushApi.md#imgettag) | **POST** /v4/all_member_push/im_get_tag | 获取用户标签（https://cloud.tencent.com/document/product/269/45940）
*AllMemberPushApi* | [**imPush**](docs/Api/AllMemberPushApi.md#impush) | **POST** /v4/all_member_push/im_push | 全员推送（https://cloud.tencent.com/document/product/269/45934）
*AllMemberPushApi* | [**imRemoveAllTags**](docs/Api/AllMemberPushApi.md#imremovealltags) | **POST** /v4/all_member_push/im_remove_all_tags | 删除用户所有标签（https://cloud.tencent.com/document/product/269/45943）
*AllMemberPushApi* | [**imRemoveAttr**](docs/Api/AllMemberPushApi.md#imremoveattr) | **POST** /v4/all_member_push/im_remove_attr | 删除用户属性（https://cloud.tencent.com/document/product/269/45939）
*AllMemberPushApi* | [**imRemoveTag**](docs/Api/AllMemberPushApi.md#imremovetag) | **POST** /v4/all_member_push/im_remove_tag | 删除用户标签（https://cloud.tencent.com/document/product/269/45942）
*AllMemberPushApi* | [**imSetAttr**](docs/Api/AllMemberPushApi.md#imsetattr) | **POST** /v4/all_member_push/im_set_attr | 设置用户属性（https://cloud.tencent.com/document/product/269/45938）
*AllMemberPushApi* | [**imSetAttrName**](docs/Api/AllMemberPushApi.md#imsetattrname) | **POST** /v4/all_member_push/im_set_attr_name | 设置应用属性名称（https://cloud.tencent.com/document/product/269/45935）
*GroupApi* | [**addGroupMember**](docs/Api/GroupApi.md#addgroupmember) | **POST** /v4/group_open_http_svc/add_group_member | 增加群成员（https://cloud.tencent.com/document/product/269/1621）
*GroupApi* | [**changeGroupOwner**](docs/Api/GroupApi.md#changegroupowner) | **POST** /v4/group_open_http_svc/change_group_owner | 转让群主（https://cloud.tencent.com/document/product/269/1633）
*GroupApi* | [**clearGroupAttr**](docs/Api/GroupApi.md#cleargroupattr) | **POST** /v4/group_open_http_svc/clear_group_attr | 清空群自定义属性（https://cloud.tencent.com/document/product/269/67009）
*GroupApi* | [**createGroup**](docs/Api/GroupApi.md#creategroup) | **POST** /v4/group_open_http_svc/create_group | 创建群组（https://cloud.tencent.com/document/product/269/1615）
*GroupApi* | [**deleteGroupMember**](docs/Api/GroupApi.md#deletegroupmember) | **POST** /v4/group_open_http_svc/delete_group_member | 删除群成员（https://cloud.tencent.com/document/product/269/1622）
*GroupApi* | [**deleteGroupMsgBySender**](docs/Api/GroupApi.md#deletegroupmsgbysender) | **POST** /v4/group_open_http_svc/delete_group_msg_by_sender | 删除指定用户发送的消息（https://cloud.tencent.com/document/product/269/2359）
*GroupApi* | [**destroyGroup**](docs/Api/GroupApi.md#destroygroup) | **POST** /v4/group_open_http_svc/destroy_group | 解散群组(https://cloud.tencent.com/document/product/269/1624)
*GroupApi* | [**forbidSendMsg**](docs/Api/GroupApi.md#forbidsendmsg) | **POST** /v4/group_open_http_svc/forbid_send_msg | 批量禁言和取消禁言(https://cloud.tencent.com/document/product/269/1627)
*GroupApi* | [**getAppidGroupList**](docs/Api/GroupApi.md#getappidgrouplist) | **POST** /v4/group_open_http_svc/get_appid_group_list | 获取 App 中的所有群组（https://cloud.tencent.com/document/product/269/1614）
*GroupApi* | [**getGroupAttr**](docs/Api/GroupApi.md#getgroupattr) | **POST** /v4/group_open_http_svc/get_group_attr | 获取群自定义属性（https://cloud.tencent.com/document/product/269/67012）
*GroupApi* | [**getGroupInfo**](docs/Api/GroupApi.md#getgroupinfo) | **POST** /v4/group_open_http_svc/get_group_info | 获取群详细资料（https://cloud.tencent.com/document/product/269/1616）
*GroupApi* | [**getGroupMemberInfo**](docs/Api/GroupApi.md#getgroupmemberinfo) | **POST** /v4/group_open_http_svc/get_group_member_info | 获取群成员详细资料（https://cloud.tencent.com/document/product/269/1617）
*GroupApi* | [**getGroupShuttedUin**](docs/Api/GroupApi.md#getgroupshutteduin) | **POST** /v4/group_open_http_svc/get_group_shutted_uin | 获取被禁言群成员列表(https://cloud.tencent.com/document/product/269/2925)
*GroupApi* | [**getJoinedGroupList**](docs/Api/GroupApi.md#getjoinedgrouplist) | **POST** /v4/group_open_http_svc/get_joined_group_list | 获取用户所加入的群组(https://cloud.tencent.com/document/product/269/1625)
*GroupApi* | [**getOnlineMemberNum**](docs/Api/GroupApi.md#getonlinemembernum) | **POST** /v4/group_open_http_svc/get_online_member_num | 获取直播群在线人数（https://cloud.tencent.com/document/product/269/49180）
*GroupApi* | [**getRoleInGroup**](docs/Api/GroupApi.md#getroleingroup) | **POST** /v4/group_open_http_svc/get_role_in_group | 查询用户在群组中的身份(https://cloud.tencent.com/document/product/269/1626)
*GroupApi* | [**groupMsgGetSimple**](docs/Api/GroupApi.md#groupmsggetsimple) | **POST** /v4/group_open_http_svc/group_msg_get_simple | 拉取群历史消息（https://cloud.tencent.com/document/product/269/2738）
*GroupApi* | [**groupMsgRecall**](docs/Api/GroupApi.md#groupmsgrecall) | **POST** /v4/group_open_http_svc/group_msg_recall | 撤回群消息（https://cloud.tencent.com/document/product/269/12341）
*GroupApi* | [**importGroup**](docs/Api/GroupApi.md#importgroup) | **POST** /v4/group_open_http_svc/import_group | 导入群基础资料（https://cloud.tencent.com/document/product/269/1634）
*GroupApi* | [**importGroupMember**](docs/Api/GroupApi.md#importgroupmember) | **POST** /v4/group_open_http_svc/import_group_member | 导入群成员（https://cloud.tencent.com/document/product/269/1636）
*GroupApi* | [**importGroupMsg**](docs/Api/GroupApi.md#importgroupmsg) | **POST** /v4/group_open_http_svc/import_group_msg | 导入群消息（https://cloud.tencent.com/document/product/269/1635）
*GroupApi* | [**modifyGroupAttr**](docs/Api/GroupApi.md#modifygroupattr) | **POST** /v4/group_open_http_svc/modify_group_attr | 修改群自定义属性（https://cloud.tencent.com/document/product/269/67010）
*GroupApi* | [**modifyGroupBaseInfo**](docs/Api/GroupApi.md#modifygroupbaseinfo) | **POST** /v4/group_open_http_svc/modify_group_base_info | 修改群基础资料（https://cloud.tencent.com/document/product/269/1620）
*GroupApi* | [**modifyGroupMemberInfo**](docs/Api/GroupApi.md#modifygroupmemberinfo) | **POST** /v4/group_open_http_svc/modify_group_member_info | 修改群成员资料(https://cloud.tencent.com/document/product/269/1623)
*GroupApi* | [**modifyGroupMsg**](docs/Api/GroupApi.md#modifygroupmsg) | **POST** /v4/openim/modify_group_msg | 修改群聊历史消息（https://cloud.tencent.com/document/product/269/74741）
*GroupApi* | [**sendGroupMsg**](docs/Api/GroupApi.md#sendgroupmsg) | **POST** /v4/group_open_http_svc/send_group_msg | 在群组中发送普通消息（https://cloud.tencent.com/document/product/269/1629）
*GroupApi* | [**sendGroupSystemNotification**](docs/Api/GroupApi.md#sendgroupsystemnotification) | **POST** /v4/group_open_http_svc/send_group_system_notification | 在群组中发送系统通知（https://cloud.tencent.com/document/product/269/1630）
*GroupApi* | [**setGroupAttr**](docs/Api/GroupApi.md#setgroupattr) | **POST** /v4/group_open_http_svc/set_group_attr | 重置群自定义属性（https://cloud.tencent.com/document/product/269/67011）
*GroupApi* | [**setUnreadMsgNum**](docs/Api/GroupApi.md#setunreadmsgnum) | **POST** /v4/group_open_http_svc/set_unread_msg_num | 设置成员未读消息计数（https://cloud.tencent.com/document/product/269/1637）
*MuteApi* | [**getnospeaking**](docs/Api/MuteApi.md#getnospeaking) | **POST** /v4/openconfigsvr/getnospeaking | 查询全局禁言（https://cloud.tencent.com/document/product/269/4229）
*MuteApi* | [**setnospeaking**](docs/Api/MuteApi.md#setnospeaking) | **POST** /v4/openconfigsvr/setnospeaking | 设置全局禁言（https://cloud.tencent.com/document/product/269/4230）
*OperationApi* | [**allowBannedObject**](docs/Api/OperationApi.md#allowbannedobject) | **POST** /v4/im_cos_msg/allow_banned_object | 聊天文件解封（https://cloud.tencent.com/document/product/269/74776）
*OperationApi* | [**forbidIllegalObject**](docs/Api/OperationApi.md#forbidillegalobject) | **POST** /v4/im_cos_msg/forbid_illegal_object | 聊天文件封禁（https://cloud.tencent.com/document/product/269/74775）
*OperationApi* | [**getCosSig**](docs/Api/OperationApi.md#getcossig) | **POST** /v4/im_cos_msg/get_cos_sig | 聊天文件签名（https://cloud.tencent.com/document/product/269/74777）
*OperationApi* | [**getHistory**](docs/Api/OperationApi.md#gethistory) | **POST** /v4/open_msg_svc/get_history | 下载最近消息记录（https://cloud.tencent.com/document/product/269/1650）
*OperationApi* | [**getIPList**](docs/Api/OperationApi.md#getiplist) | **POST** /v4/ConfigSvc/GetIPList | 获取服务器 IP 地址（https://cloud.tencent.com/document/product/269/45438）
*OperationApi* | [**getappinfo**](docs/Api/OperationApi.md#getappinfo) | **POST** /v4/openconfigsvr/getappinfo | 拉取运营数据（https://cloud.tencent.com/document/product/269/4193）
*PortraitApi* | [**portraitGet**](docs/Api/PortraitApi.md#portraitget) | **POST** /v4/profile/portrait_get | 拉取资料（https://cloud.tencent.com/document/product/269/1639）
*PortraitApi* | [**portraitSet**](docs/Api/PortraitApi.md#portraitset) | **POST** /v4/profile/portrait_set | 设置资料（https://cloud.tencent.com/document/product/269/1640）
*RecentContactApi* | [**deleteRecentContact**](docs/Api/RecentContactApi.md#deleterecentcontact) | **POST** /v4/recentcontact/delete | 删除单个会话（https://cloud.tencent.com/document/product/269/62119）
*RecentContactApi* | [**getRecentContactList**](docs/Api/RecentContactApi.md#getrecentcontactlist) | **POST** /v4/recentcontact/get_list | 拉取会话列表（https://cloud.tencent.com/document/product/269/62118）
*RelationshipsApi* | [**blackListAdd**](docs/Api/RelationshipsApi.md#blacklistadd) | **POST** /v4/sns/black_list_add | 添加黑名单（https://cloud.tencent.com/document/product/269/3718）
*RelationshipsApi* | [**blackListCheck**](docs/Api/RelationshipsApi.md#blacklistcheck) | **POST** /v4/sns/black_list_check | 校验黑名单（https://cloud.tencent.com/document/product/269/3725）
*RelationshipsApi* | [**blackListDelete**](docs/Api/RelationshipsApi.md#blacklistdelete) | **POST** /v4/sns/black_list_delete | 删除黑名单（https://cloud.tencent.com/document/product/269/3719）
*RelationshipsApi* | [**blackListGet**](docs/Api/RelationshipsApi.md#blacklistget) | **POST** /v4/sns/black_list_get | 拉取黑名单（https://cloud.tencent.com/document/product/269/3722）
*RelationshipsApi* | [**friendAdd**](docs/Api/RelationshipsApi.md#friendadd) | **POST** /v4/sns/friend_add | 添加好友（https://cloud.tencent.com/document/product/269/1643）
*RelationshipsApi* | [**friendCheck**](docs/Api/RelationshipsApi.md#friendcheck) | **POST** /v4/sns/friend_check | 校验好友（https://cloud.tencent.com/document/product/269/1646）
*RelationshipsApi* | [**friendDelete**](docs/Api/RelationshipsApi.md#frienddelete) | **POST** /v4/sns/friend_delete | 删除好友（https://cloud.tencent.com/document/product/269/1644）
*RelationshipsApi* | [**friendDeleteAll**](docs/Api/RelationshipsApi.md#frienddeleteall) | **POST** /v4/sns/friend_delete_all | 删除所有好友（https://cloud.tencent.com/document/product/269/1645）
*RelationshipsApi* | [**friendGet**](docs/Api/RelationshipsApi.md#friendget) | **POST** /v4/sns/friend_get | 拉取好友（https://cloud.tencent.com/document/product/269/1647）
*RelationshipsApi* | [**friendGetList**](docs/Api/RelationshipsApi.md#friendgetlist) | **POST** /v4/sns/friend_get_list | 拉取指定好友（https://cloud.tencent.com/document/product/269/8609）
*RelationshipsApi* | [**friendImport**](docs/Api/RelationshipsApi.md#friendimport) | **POST** /v4/sns/friend_import | 导入好友（https://cloud.tencent.com/document/product/269/8301）
*RelationshipsApi* | [**friendUpdate**](docs/Api/RelationshipsApi.md#friendupdate) | **POST** /v4/sns/friend_update | 更新好友（https://cloud.tencent.com/document/product/269/12525）
*RelationshipsApi* | [**groupAdd**](docs/Api/RelationshipsApi.md#groupadd) | **POST** /v4/sns/group_add | 添加分组（https://cloud.tencent.com/document/product/269/10107）
*RelationshipsApi* | [**groupDelete**](docs/Api/RelationshipsApi.md#groupdelete) | **POST** /v4/sns/group_delete | 删除分组（https://cloud.tencent.com/document/product/269/10108）
*RelationshipsApi* | [**groupGet**](docs/Api/RelationshipsApi.md#groupget) | **POST** /v4/sns/group_get | 拉取分组（https://cloud.tencent.com/document/product/269/54763）
*SingleChatApi* | [**adminGetroammsg**](docs/Api/SingleChatApi.md#admingetroammsg) | **POST** /v4/openim/admin_getroammsg | 查询单聊消息（https://cloud.tencent.com/document/product/269/42794）
*SingleChatApi* | [**adminMsgwithdraw**](docs/Api/SingleChatApi.md#adminmsgwithdraw) | **POST** /v4/openim/admin_msgwithdraw | 撤回单聊消息（https://cloud.tencent.com/document/product/269/38980）
*SingleChatApi* | [**adminSetMsgRead**](docs/Api/SingleChatApi.md#adminsetmsgread) | **POST** /v4/openim/admin_set_msg_read | 设置单聊消息已读（https://cloud.tencent.com/document/product/269/50349）
*SingleChatApi* | [**batchsendmsg**](docs/Api/SingleChatApi.md#batchsendmsg) | **POST** /v4/openim/batchsendmsg | 批量发单聊消息（https://cloud.tencent.com/document/product/269/1612）
*SingleChatApi* | [**getC2cUnreadMsgNum**](docs/Api/SingleChatApi.md#getc2cunreadmsgnum) | **POST** /v4/openim/get_c2c_unread_msg_num | 查询单聊未读消息计数（https://cloud.tencent.com/document/product/269/56043）
*SingleChatApi* | [**importmsg**](docs/Api/SingleChatApi.md#importmsg) | **POST** /v4/openim/importmsg | 导入单聊消息（https://cloud.tencent.com/document/product/269/2568）
*SingleChatApi* | [**modifyC2cMsg**](docs/Api/SingleChatApi.md#modifyc2cmsg) | **POST** /v4/openim/modify_c2c_msg | 修改单聊历史消息（https://cloud.tencent.com/document/product/269/74740）
*SingleChatApi* | [**sendmsg**](docs/Api/SingleChatApi.md#sendmsg) | **POST** /v4/openim/sendmsg | 单发单聊消息（https://cloud.tencent.com/document/product/269/2282）


## Documentation For Models

 - [AccountCheckRequest](docs/Model/AccountCheckRequest.md)
 - [AccountCheckRequestCheckItem](docs/Model/AccountCheckRequestCheckItem.md)
 - [AccountCheckResponse](docs/Model/AccountCheckResponse.md)
 - [AccountDeleteRequest](docs/Model/AccountDeleteRequest.md)
 - [AccountDeleteRequestDeleteItem](docs/Model/AccountDeleteRequestDeleteItem.md)
 - [AccountDeleteResponse](docs/Model/AccountDeleteResponse.md)
 - [AccountImportRequest](docs/Model/AccountImportRequest.md)
 - [AddGroupMemberRequest](docs/Model/AddGroupMemberRequest.md)
 - [AddGroupMemberRequestMemberList](docs/Model/AddGroupMemberRequestMemberList.md)
 - [AddGroupMemberResponse](docs/Model/AddGroupMemberResponse.md)
 - [AllowBannedObjectRequest](docs/Model/AllowBannedObjectRequest.md)
 - [BatchSendSingleChatMsgRequest](docs/Model/BatchSendSingleChatMsgRequest.md)
 - [BatchSendSingleChatMsgResponse](docs/Model/BatchSendSingleChatMsgResponse.md)
 - [BlackListAddRequest](docs/Model/BlackListAddRequest.md)
 - [BlackListAddResponse](docs/Model/BlackListAddResponse.md)
 - [BlackListCheckRequest](docs/Model/BlackListCheckRequest.md)
 - [BlackListCheckResponse](docs/Model/BlackListCheckResponse.md)
 - [BlackListDeleteRequest](docs/Model/BlackListDeleteRequest.md)
 - [BlackListDeleteResponse](docs/Model/BlackListDeleteResponse.md)
 - [BlackListGetRequest](docs/Model/BlackListGetRequest.md)
 - [BlackListGetResponse](docs/Model/BlackListGetResponse.md)
 - [ChangeGroupOwnerRequest](docs/Model/ChangeGroupOwnerRequest.md)
 - [ClearGroupAttrRequest](docs/Model/ClearGroupAttrRequest.md)
 - [CommonResponse](docs/Model/CommonResponse.md)
 - [CreateGroupRequest](docs/Model/CreateGroupRequest.md)
 - [CreateGroupRequestMemberList](docs/Model/CreateGroupRequestMemberList.md)
 - [CreateGroupResponse](docs/Model/CreateGroupResponse.md)
 - [DefinedData](docs/Model/DefinedData.md)
 - [DeleteGroupMemberRequest](docs/Model/DeleteGroupMemberRequest.md)
 - [DeleteGroupMsgBySenderRequest](docs/Model/DeleteGroupMsgBySenderRequest.md)
 - [DestroyGroupRequest](docs/Model/DestroyGroupRequest.md)
 - [ForbidCallbackControl](docs/Model/ForbidCallbackControl.md)
 - [ForbidIllegalObjectRequest](docs/Model/ForbidIllegalObjectRequest.md)
 - [ForbidSendMsgRequest](docs/Model/ForbidSendMsgRequest.md)
 - [FriendAddRequest](docs/Model/FriendAddRequest.md)
 - [FriendAddRequestAddFriendItem](docs/Model/FriendAddRequestAddFriendItem.md)
 - [FriendAddResponse](docs/Model/FriendAddResponse.md)
 - [FriendCheckRequest](docs/Model/FriendCheckRequest.md)
 - [FriendCheckResponse](docs/Model/FriendCheckResponse.md)
 - [FriendDeleteAllRequest](docs/Model/FriendDeleteAllRequest.md)
 - [FriendDeleteAllResponse](docs/Model/FriendDeleteAllResponse.md)
 - [FriendDeleteRequest](docs/Model/FriendDeleteRequest.md)
 - [FriendDeleteResponse](docs/Model/FriendDeleteResponse.md)
 - [FriendGetListRequest](docs/Model/FriendGetListRequest.md)
 - [FriendGetListResponse](docs/Model/FriendGetListResponse.md)
 - [FriendGetRequest](docs/Model/FriendGetRequest.md)
 - [FriendGetResponse](docs/Model/FriendGetResponse.md)
 - [FriendImportRequest](docs/Model/FriendImportRequest.md)
 - [FriendImportRequestAddFriendItem](docs/Model/FriendImportRequestAddFriendItem.md)
 - [FriendImportRequestCustomItem](docs/Model/FriendImportRequestCustomItem.md)
 - [FriendImportResponse](docs/Model/FriendImportResponse.md)
 - [FriendUpdateRequest](docs/Model/FriendUpdateRequest.md)
 - [FriendUpdateRequestSnsItem](docs/Model/FriendUpdateRequestSnsItem.md)
 - [FriendUpdateRequestUpdateItem](docs/Model/FriendUpdateRequestUpdateItem.md)
 - [FriendUpdateResponse](docs/Model/FriendUpdateResponse.md)
 - [GetAppInfoRequest](docs/Model/GetAppInfoRequest.md)
 - [GetAppInfoResponse](docs/Model/GetAppInfoResponse.md)
 - [GetAppidGroupListRequest](docs/Model/GetAppidGroupListRequest.md)
 - [GetAppidGroupListResponse](docs/Model/GetAppidGroupListResponse.md)
 - [GetC2cUnreadMsgNumRequest](docs/Model/GetC2cUnreadMsgNumRequest.md)
 - [GetC2cUnreadMsgNumResponse](docs/Model/GetC2cUnreadMsgNumResponse.md)
 - [GetCosSigRequest](docs/Model/GetCosSigRequest.md)
 - [GetCosSigRequestRawURLs](docs/Model/GetCosSigRequestRawURLs.md)
 - [GetCosSigResponse](docs/Model/GetCosSigResponse.md)
 - [GetGroupAttrRequest](docs/Model/GetGroupAttrRequest.md)
 - [GetGroupAttrResponse](docs/Model/GetGroupAttrResponse.md)
 - [GetGroupInfoRequest](docs/Model/GetGroupInfoRequest.md)
 - [GetGroupInfoRequestResponseFilter](docs/Model/GetGroupInfoRequestResponseFilter.md)
 - [GetGroupInfoResponse](docs/Model/GetGroupInfoResponse.md)
 - [GetGroupMemberInfoRequest](docs/Model/GetGroupMemberInfoRequest.md)
 - [GetGroupMemberInfoResponse](docs/Model/GetGroupMemberInfoResponse.md)
 - [GetGroupShuttedUinRequest](docs/Model/GetGroupShuttedUinRequest.md)
 - [GetGroupShuttedUinResponse](docs/Model/GetGroupShuttedUinResponse.md)
 - [GetIPListRequest](docs/Model/GetIPListRequest.md)
 - [GetIPListResponse](docs/Model/GetIPListResponse.md)
 - [GetJoinedGroupListRequest](docs/Model/GetJoinedGroupListRequest.md)
 - [GetJoinedGroupListRequestResponseFilter](docs/Model/GetJoinedGroupListRequestResponseFilter.md)
 - [GetJoinedGroupListResponse](docs/Model/GetJoinedGroupListResponse.md)
 - [GetNoSpeakingRequest](docs/Model/GetNoSpeakingRequest.md)
 - [GetNoSpeakingResponse](docs/Model/GetNoSpeakingResponse.md)
 - [GetOnlineMemberNumRequest](docs/Model/GetOnlineMemberNumRequest.md)
 - [GetOnlineMemberNumResponse](docs/Model/GetOnlineMemberNumResponse.md)
 - [GetOperateMsgHistoryRequest](docs/Model/GetOperateMsgHistoryRequest.md)
 - [GetOperateMsgHistoryResponse](docs/Model/GetOperateMsgHistoryResponse.md)
 - [GetRecentContactListGroupDeleteRequest](docs/Model/GetRecentContactListGroupDeleteRequest.md)
 - [GetRecentContactListGroupDeleteResponse](docs/Model/GetRecentContactListGroupDeleteResponse.md)
 - [GetRecentContactListGroupGetRequest](docs/Model/GetRecentContactListGroupGetRequest.md)
 - [GetRecentContactListGroupGetResponse](docs/Model/GetRecentContactListGroupGetResponse.md)
 - [GetRoamMsgRequest](docs/Model/GetRoamMsgRequest.md)
 - [GetRoamMsgResponse](docs/Model/GetRoamMsgResponse.md)
 - [GetRoleInGroupRequest](docs/Model/GetRoleInGroupRequest.md)
 - [GetRoleInGroupResponse](docs/Model/GetRoleInGroupResponse.md)
 - [GroupAddRequest](docs/Model/GroupAddRequest.md)
 - [GroupAddResponse](docs/Model/GroupAddResponse.md)
 - [GroupDeleteRequest](docs/Model/GroupDeleteRequest.md)
 - [GroupDeleteResponse](docs/Model/GroupDeleteResponse.md)
 - [GroupGetRequest](docs/Model/GroupGetRequest.md)
 - [GroupGetResponse](docs/Model/GroupGetResponse.md)
 - [GroupMsgGetSimpleRequest](docs/Model/GroupMsgGetSimpleRequest.md)
 - [GroupMsgGetSimpleResponse](docs/Model/GroupMsgGetSimpleResponse.md)
 - [GroupMsgRecallRequest](docs/Model/GroupMsgRecallRequest.md)
 - [GroupMsgRecallRequestMsgSeqList](docs/Model/GroupMsgRecallRequestMsgSeqList.md)
 - [GroupMsgRecallResponse](docs/Model/GroupMsgRecallResponse.md)
 - [GroupType](docs/Model/GroupType.md)
 - [ImAddTagRequest](docs/Model/ImAddTagRequest.md)
 - [ImGetAttrNameRequest](docs/Model/ImGetAttrNameRequest.md)
 - [ImGetAttrNameResponse](docs/Model/ImGetAttrNameResponse.md)
 - [ImGetAttrRequest](docs/Model/ImGetAttrRequest.md)
 - [ImGetAttrResponse](docs/Model/ImGetAttrResponse.md)
 - [ImGetTagRequest](docs/Model/ImGetTagRequest.md)
 - [ImGetTagResponse](docs/Model/ImGetTagResponse.md)
 - [ImPushRequest](docs/Model/ImPushRequest.md)
 - [ImPushRequestCondition](docs/Model/ImPushRequestCondition.md)
 - [ImPushResponse](docs/Model/ImPushResponse.md)
 - [ImRemoveAllTagRequest](docs/Model/ImRemoveAllTagRequest.md)
 - [ImRemoveAttrRequest](docs/Model/ImRemoveAttrRequest.md)
 - [ImRemoveTagRequest](docs/Model/ImRemoveTagRequest.md)
 - [ImRemoveTagRequestUserTags](docs/Model/ImRemoveTagRequestUserTags.md)
 - [ImSetAttrNameRequest](docs/Model/ImSetAttrNameRequest.md)
 - [ImSetAttrRequest](docs/Model/ImSetAttrRequest.md)
 - [ImSetAttrRequestUserAttrs](docs/Model/ImSetAttrRequestUserAttrs.md)
 - [ImageInfo](docs/Model/ImageInfo.md)
 - [ImportGroupMemberRequest](docs/Model/ImportGroupMemberRequest.md)
 - [ImportGroupMemberRequestMemberList](docs/Model/ImportGroupMemberRequestMemberList.md)
 - [ImportGroupMemberResponse](docs/Model/ImportGroupMemberResponse.md)
 - [ImportGroupMsgRequest](docs/Model/ImportGroupMsgRequest.md)
 - [ImportGroupMsgRequestMsgList](docs/Model/ImportGroupMsgRequestMsgList.md)
 - [ImportGroupMsgResponse](docs/Model/ImportGroupMsgResponse.md)
 - [ImportGroupRequest](docs/Model/ImportGroupRequest.md)
 - [ImportGroupResponse](docs/Model/ImportGroupResponse.md)
 - [ImportMsgRequest](docs/Model/ImportMsgRequest.md)
 - [KickRequest](docs/Model/KickRequest.md)
 - [ModifyC2cMsgRequest](docs/Model/ModifyC2cMsgRequest.md)
 - [ModifyGroupAttrRequest](docs/Model/ModifyGroupAttrRequest.md)
 - [ModifyGroupAttrRequestGroupAttr](docs/Model/ModifyGroupAttrRequestGroupAttr.md)
 - [ModifyGroupBaseInfoRequest](docs/Model/ModifyGroupBaseInfoRequest.md)
 - [ModifyGroupBaseInfoRequestAppDefinedData](docs/Model/ModifyGroupBaseInfoRequestAppDefinedData.md)
 - [ModifyGroupMemberInfoRequest](docs/Model/ModifyGroupMemberInfoRequest.md)
 - [ModifyGroupMemberInfoRequestAppMemberDefinedData](docs/Model/ModifyGroupMemberInfoRequestAppMemberDefinedData.md)
 - [ModifyGroupMsgRequest](docs/Model/ModifyGroupMsgRequest.md)
 - [MsgWithdrawRequest](docs/Model/MsgWithdrawRequest.md)
 - [MultiAccountImportRequest](docs/Model/MultiAccountImportRequest.md)
 - [MultiAccountImportResponse](docs/Model/MultiAccountImportResponse.md)
 - [OfflinePushInfo](docs/Model/OfflinePushInfo.md)
 - [OfflinePushInfoAndroidInfo](docs/Model/OfflinePushInfoAndroidInfo.md)
 - [OfflinePushInfoApnsInfo](docs/Model/OfflinePushInfoApnsInfo.md)
 - [PortraitGetRequest](docs/Model/PortraitGetRequest.md)
 - [PortraitGetResponse](docs/Model/PortraitGetResponse.md)
 - [PortraitSetRequest](docs/Model/PortraitSetRequest.md)
 - [PortraitSetRequestProfileItem](docs/Model/PortraitSetRequestProfileItem.md)
 - [PortraitSetResponse](docs/Model/PortraitSetResponse.md)
 - [QueryOnlineStatusRequest](docs/Model/QueryOnlineStatusRequest.md)
 - [QueryOnlineStatusResponse](docs/Model/QueryOnlineStatusResponse.md)
 - [SendGroupMsgRequest](docs/Model/SendGroupMsgRequest.md)
 - [SendGroupMsgResponse](docs/Model/SendGroupMsgResponse.md)
 - [SendGroupSystemNotificationRequest](docs/Model/SendGroupSystemNotificationRequest.md)
 - [SendMsgControl](docs/Model/SendMsgControl.md)
 - [SendSingleChatMsgRequest](docs/Model/SendSingleChatMsgRequest.md)
 - [SendSingleChatMsgResponse](docs/Model/SendSingleChatMsgResponse.md)
 - [SetGroupAttrRequest](docs/Model/SetGroupAttrRequest.md)
 - [SetMsgReadRequest](docs/Model/SetMsgReadRequest.md)
 - [SetNoSpeakingRequest](docs/Model/SetNoSpeakingRequest.md)
 - [SetUnreadMsgNumRequest](docs/Model/SetUnreadMsgNumRequest.md)
 - [TIMCustomElem](docs/Model/TIMCustomElem.md)
 - [TIMCustomElemMsgContent](docs/Model/TIMCustomElemMsgContent.md)
 - [TIMFaceElem](docs/Model/TIMFaceElem.md)
 - [TIMFaceElemMsgContent](docs/Model/TIMFaceElemMsgContent.md)
 - [TIMFileElem](docs/Model/TIMFileElem.md)
 - [TIMFileElemMsgContent](docs/Model/TIMFileElemMsgContent.md)
 - [TIMImageElem](docs/Model/TIMImageElem.md)
 - [TIMImageElemMsgContent](docs/Model/TIMImageElemMsgContent.md)
 - [TIMLocationElem](docs/Model/TIMLocationElem.md)
 - [TIMLocationElemMsgContent](docs/Model/TIMLocationElemMsgContent.md)
 - [TIMMsgElement](docs/Model/TIMMsgElement.md)
 - [TIMSoundElem](docs/Model/TIMSoundElem.md)
 - [TIMSoundElemMsgContent](docs/Model/TIMSoundElemMsgContent.md)
 - [TIMTextElem](docs/Model/TIMTextElem.md)
 - [TIMTextElemMsgContent](docs/Model/TIMTextElemMsgContent.md)
 - [TIMVideoFileElem](docs/Model/TIMVideoFileElem.md)
 - [TIMVideoFileElemMsgContent](docs/Model/TIMVideoFileElemMsgContent.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Contact
 腾讯云IM REST API SDK 技术交流QQ群

 QQ群号:909322484
