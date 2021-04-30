<?php /** @noinspection PhpMultipleClassesDeclarationsInOneFile */

namespace Authing\Types;

class Query {
  /**
   * Required
   *
   *
   */
  public bool $isActionAllowed;

  /**
   * Required
   *
   *
   */
  public bool $isActionDenied;

  /**
   * Optional
   *
   *
   */
  public \Authing\Types\PaginatedAuthorizedTargets $authorizedTargets;

  /**
   * Optional
   *
   *
   */
  public string $qiniuUptoken;

  /**
   * Optional
   *
   *
   */
  public bool $isDomainAvaliable;

  /**
   * 获取社会化登录定义
   * Optional
   *
   *
   */
  public \Authing\Types\SocialConnection $socialConnection;

  /**
   * 获取所有社会化登录定义
   * Required
   * 
   * @var SocialConnection[]
   * 
   */
  public array $socialConnections;

  /**
   * 获取当前用户池的社会化登录配置
   * Required
   *
   *
   */
  public \Authing\Types\SocialConnectionInstance $socialConnectionInstance;

  /**
   * 获取当前用户池的所有社会化登录配置
   * Required
   * 
   * @var SocialConnectionInstance[]
   * 
   */
  public array $socialConnectionInstances;

  /**
   * Required
   * 
   * @var EmailTemplate[]
   * 
   */
  public array $emailTemplates;

  /**
   * Required
   *
   *
   */
  public string $previewEmail;

  /**
   * 获取函数模版
   * Required
   *
   *
   */
  public string $templateCode;

  /**
   * Optional
   * 
   * @var Function
   * 
   */
  public $function;

  /**
   * Required
   *
   *
   */
  public \Authing\Types\PaginatedFunctions $functions;

  /**
   * Optional
   *
   *
   */
  public \Authing\Types\Group $group;

  /**
   * Required
   *
   *
   */
  public \Authing\Types\PaginatedGroups $groups;

  /**
   * 查询 MFA 信息
   * Optional
   *
   *
   */
  public \Authing\Types\Mfa $queryMfa;

  /**
   * Optional
   *
   *
   */
  public \Authing\Types\Node $nodeById;

  /**
   * 通过 code 查询节点
   * Optional
   *
   *
   */
  public \Authing\Types\Node $nodeByCode;

  /**
   * 查询组织机构详情
   * Required
   *
   *
   */
  public \Authing\Types\Org $org;

  /**
   * 查询用户池组织机构列表
   * Required
   *
   *
   */
  public \Authing\Types\PaginatedOrgs $orgs;

  /**
   * 查询子节点列表
   * Required
   * 
   * @var Node[]
   * 
   */
  public array $childrenNodes;

  /**
   * Required
   *
   *
   */
  public \Authing\Types\Node $rootNode;

  /**
   * Optional
   *
   *
   */
  public bool $isRootNode;

  /**
   * Required
   * 
   * @var Node[]
   * 
   */
  public array $searchNodes;

  /**
   * Required
   *
   *
   */
  public \Authing\Types\CheckPasswordStrengthResult $checkPasswordStrength;

  /**
   * Optional
   *
   *
   */
  public \Authing\Types\Policy $policy;

  /**
   * Required
   *
   *
   */
  public \Authing\Types\PaginatedPolicies $policies;

  /**
   * Required
   *
   *
   */
  public \Authing\Types\PaginatedPolicyAssignments $policyAssignments;

  /**
   * 获取一个对象被授权的资源列表
   * Optional
   *
   *
   */
  public \Authing\Types\PaginatedAuthorizedResources $authorizedResources;

  /**
   * 通过 **code** 查询角色详情
   * Optional
   *
   *
   */
  public \Authing\Types\Role $role;

  /**
   * 获取角色列表
   * Required
   *
   *
   */
  public \Authing\Types\PaginatedRoles $roles;

  /**
   * 查询某个实体定义的自定义数据
   * Required
   * 
   * @var UserDefinedData[]
   * 
   */
  public array $udv;

  /**
   * 查询用户池定义的自定义字段
   * Required
   * 
   * @var UserDefinedField[]
   * 
   */
  public array $udf;

  /**
   * 批量查询多个对象的自定义数据
   * Required
   * 
   * @var UserDefinedDataMap[]
   * 
   */
  public array $udfValueBatch;

  /**
   * Optional
   *
   *
   */
  public \Authing\Types\User $user;

  /**
   * Required
   * 
   * @var User[]
   * 
   */
  public array $userBatch;

  /**
   * Required
   *
   *
   */
  public \Authing\Types\PaginatedUsers $users;

  /**
   * 已归档的用户列表
   * Required
   *
   *
   */
  public \Authing\Types\PaginatedUsers $archivedUsers;

  /**
   * Required
   *
   *
   */
  public \Authing\Types\PaginatedUsers $searchUser;

  /**
   * Optional
   *
   *
   */
  public \Authing\Types\JWTTokenStatus $checkLoginStatus;

  /**
   * Optional
   *
   *
   */
  public bool $isUserExists;

  /**
   * Optional
   *
   *
   */
  public \Authing\Types\User $findUser;

  /**
   * 查询用户池详情
   * Required
   *
   *
   */
  public \Authing\Types\UserPool $userpool;

  /**
   * 查询用户池列表
   * Required
   *
   *
   */
  public \Authing\Types\PaginatedUserpool $userpools;

  /**
   * Required
   * 
   * @var UserPoolType[]
   * 
   */
  public array $userpoolTypes;

  /**
   * 获取 accessToken ，如 SDK 初始化
   * Required
   *
   *
   */
  public \Authing\Types\AccessTokenRes $accessToken;

  /**
   * 用户池注册白名单列表
   * Required
   * 
   * @var WhiteList[]
   * 
   */
  public array $whitelist;
}

class ResourceType {
  const DATA = 'DATA';
  const API = 'API';
  const MENU = 'MENU';
  const UI = 'UI';
  const BUTTON = 'BUTTON';
}

class PolicyAssignmentTargetType {
  const USER = 'USER';
  const ROLE = 'ROLE';
  const GROUP = 'GROUP';
  const ORG = 'ORG';
  const AK_SK = 'AK_SK';
}

/**
 * AuthorizedTargetsActionsInput
 */
class AuthorizedTargetsActionsInput {
  /**
 * @param $op Operator op
 * @param $list string[] list
 */

public function __construct(
    /**
     * Required
     *
     * @var Operator
     */
    public $op,
    /**
     * Required
     *
     * @var string[]
     */
    public $list
)
{
}

}
    

class Operator {
  const AND = 'AND';
  const OR = 'OR';
}

class PaginatedAuthorizedTargets {
  /**
   * Optional
   * 
   * @var ResourcePermissionAssignment[]
   * 
   */
  public array $list;

  /**
   * Optional
   *
   *
   */
  public int $totalCount;
}

class ResourcePermissionAssignment {
  /**
   * Optional
   *
   *
   */
  public \Authing\Types\PolicyAssignmentTargetType $targetType;

  /**
   * Optional
   *
   *
   */
  public string $targetIdentifier;

  /**
   * Optional
   * 
   * @var string[]
   * 
   */
  public array $actions;
}

class SocialConnection {
  /**
   * 社会化登录服务商唯一标志
   * Required
   *
   *
   */
  public string $provider;

  /**
   * 名称
   * Required
   *
   *
   */
  public string $name;

  /**
   * logo
   * Required
   *
   *
   */
  public string $logo;

  /**
   * 描述信息
   * Optional
   *
   *
   */
  public string $description;

  /**
   * 表单字段
   * Optional
   * 
   * @var SocialConnectionField[]
   * 
   */
  public array $fields;
}

class SocialConnectionField {
  /**
   * Optional
   *
   *
   */
  public string $key;

  /**
   * Optional
   *
   *
   */
  public string $label;

  /**
   * Optional
   *
   *
   */
  public string $type;

  /**
   * Optional
   *
   *
   */
  public string $placeholder;

  /**
   * Optional
   * 
   * @var SocialConnectionField[]
   * 
   */
  public array $children;
}

class SocialConnectionInstance {
  /**
   * Required
   *
   *
   */
  public string $provider;

  /**
   * Required
   *
   *
   */
  public bool $enabled;

  /**
   * Optional
   * 
   * @var SocialConnectionInstanceField[]
   * 
   */
  public array $fields;
}

class SocialConnectionInstanceField {
  /**
   * Required
   *
   *
   */
  public string $key;

  /**
   * Required
   *
   *
   */
  public string $value;
}

class EmailTemplate {
  /**
   * 邮件模版类型
   * Required
   *
   *
   */
  public \Authing\Types\EmailTemplateType $type;

  /**
   * 模版名称
   * Required
   *
   *
   */
  public string $name;

  /**
   * 邮件主题
   * Required
   *
   *
   */
  public string $subject;

  /**
   * 显示的邮件发送人
   * Required
   *
   *
   */
  public string $sender;

  /**
   * 邮件模版内容
   * Required
   *
   *
   */
  public string $content;

  /**
   * 重定向链接，操作成功后，用户将被重定向到此 URL。
   * Optional
   *
   *
   */
  public string $redirectTo;

  /**
   * Optional
   *
   *
   */
  public bool $hasURL;

  /**
   * 验证码过期时间（单位为秒）
   * Optional
   *
   *
   */
  public int $expiresIn;

  /**
   * 是否开启（自定义模版）
   * Optional
   *
   *
   */
  public bool $enabled;

  /**
   * 是否是系统默认模版
   * Optional
   *
   *
   */
  public bool $isSystem;
}

class EmailTemplateType {
  const RESET_PASSWORD = 'RESET_PASSWORD';
  const PASSWORD_RESETED_NOTIFICATION = 'PASSWORD_RESETED_NOTIFICATION';
  const CHANGE_PASSWORD = 'CHANGE_PASSWORD';
  const WELCOME = 'WELCOME';
  const VERIFY_EMAIL = 'VERIFY_EMAIL';
  const CHANGE_EMAIL = 'CHANGE_EMAIL';
}

/**
 * 函数
 */
class FunctionType {
  /**
   * ID
   * Required
   *
   *
   */
  public string $id;

  /**
   * 函数名称
   * Required
   *
   *
   */
  public string $name;

  /**
   * 源代码
   * Required
   *
   *
   */
  public string $sourceCode;

  /**
   * 描述信息
   * Optional
   *
   *
   */
  public string $description;

  /**
   * 云函数链接
   * Optional
   *
   *
   */
  public string $url;
}

class SortByEnum {
  const CREATEDAT_DESC = 'CREATEDAT_DESC';
  const CREATEDAT_ASC = 'CREATEDAT_ASC';
  const UPDATEDAT_DESC = 'UPDATEDAT_DESC';
  const UPDATEDAT_ASC = 'UPDATEDAT_ASC';
}

class PaginatedFunctions {
  /**
   * Required
   * 
   * @var Function[]
   * 
   */
  public array $list;

  /**
   * Required
   *
   *
   */
  public int $totalCount;
}

class Group {
  /**
   * 唯一标志 code
   * Required
   *
   *
   */
  public string $code;

  /**
   * 名称
   * Required
   *
   *
   */
  public string $name;

  /**
   * 描述
   * Optional
   *
   *
   */
  public string $description;

  /**
   * 创建时间
   * Optional
   *
   *
   */
  public string $createdAt;

  /**
   * 修改时间
   * Optional
   *
   *
   */
  public string $updatedAt;

  /**
   * 包含的用户列表
   * Required
   *
   *
   */
  public \Authing\Types\PaginatedUsers $users;

  /**
   * 被授权访问的所有资源
   * Optional
   *
   *
   */
  public \Authing\Types\PaginatedAuthorizedResources $authorizedResources;
}

class PaginatedUsers {
  /**
   * Required
   *
   *
   */
  public int $totalCount;

  /**
   * Required
   * 
   * @var User[]
   * 
   */
  public array $list;
}

class User {
  /**
   * 用户 ID
   * Required
   *
   *
   */
  public string $id;

  /**
   * Required
   *
   *
   */
  public string $arn;

  /**
   * 用户在组织机构中的状态
   * Optional
   *
   *
   */
  public \Authing\Types\UserStatus $status;

  /**
   * 用户池 ID
   * Required
   *
   *
   */
  public string $userPoolId;

  /**
   * 用户名，用户池内唯一
   * Optional
   *
   *
   */
  public string $username;

  /**
   * 邮箱，用户池内唯一
   * Optional
   *
   *
   */
  public string $email;

  /**
   * 邮箱是否已验证
   * Optional
   *
   *
   */
  public bool $emailVerified;

  /**
   * 手机号，用户池内唯一
   * Optional
   *
   *
   */
  public string $phone;

  /**
   * 手机号是否已验证
   * Optional
   *
   *
   */
  public bool $phoneVerified;

  /**
   * Optional
   *
   *
   */
  public string $unionid;

  /**
   * Optional
   *
   *
   */
  public string $openid;

  /**
   * 用户的身份信息
   * Optional
   * 
   * @var Identity[]
   * 
   */
  public array $identities;

  /**
   * 昵称，该字段不唯一。
   * Optional
   *
   *
   */
  public string $nickname;

  /**
   * 注册方式
   * Optional
   * 
   * @var string[]
   * 
   */
  public array $registerSource;

  /**
   * 头像链接，默认为 https://usercontents.authing.cn/authing-avatar.png
   * Optional
   *
   *
   */
  public string $photo;

  /**
   * 用户密码，数据库使用密钥加 salt 进行加密，非原文密码。
   * Optional
   *
   *
   */
  public string $password;

  /**
   * 用户社会化登录第三方身份提供商返回的原始用户信息，非社会化登录方式注册的用户此字段为空。
   * Optional
   *
   *
   */
  public string $oauth;

  /**
   * 用户登录凭证，开发者可以在后端检验该 token 的合法性，从而验证用户身份。详细文档请见：[验证 Token](https://docs.authing.co/advanced/verify-jwt-token.html)
   * Optional
   *
   *
   */
  public string $token;

  /**
   * token 过期时间
   * Optional
   *
   *
   */
  public string $tokenExpiredAt;

  /**
   * 用户登录总次数
   * Optional
   *
   *
   */
  public int $loginsCount;

  /**
   * 用户最近一次登录时间
   * Optional
   *
   *
   */
  public string $lastLogin;

  /**
   * 用户上一次登录时使用的 IP
   * Optional
   *
   *
   */
  public string $lastIP;

  /**
   * 用户注册时间
   * Optional
   *
   *
   */
  public string $signedUp;

  /**
   * 该账号是否被禁用
   * Optional
   *
   *
   */
  public bool $blocked;

  /**
   * 账号是否被软删除
   * Optional
   *
   *
   */
  public bool $isDeleted;

  /**
   * Optional
   *
   *
   */
  public string $device;

  /**
   * Optional
   *
   *
   */
  public string $browser;

  /**
   * Optional
   *
   *
   */
  public string $company;

  /**
   * Optional
   *
   *
   */
  public string $name;

  /**
   * Optional
   *
   *
   */
  public string $givenName;

  /**
   * Optional
   *
   *
   */
  public string $familyName;

  /**
   * Optional
   *
   *
   */
  public string $middleName;

  /**
   * Optional
   *
   *
   */
  public string $profile;

  /**
   * Optional
   *
   *
   */
  public string $preferredUsername;

  /**
   * Optional
   *
   *
   */
  public string $website;

  /**
   * Optional
   *
   *
   */
  public string $gender;

  /**
   * Optional
   *
   *
   */
  public string $birthdate;

  /**
   * Optional
   *
   *
   */
  public string $zoneinfo;

  /**
   * Optional
   *
   *
   */
  public string $locale;

  /**
   * Optional
   *
   *
   */
  public string $address;

  /**
   * Optional
   *
   *
   */
  public string $formatted;

  /**
   * Optional
   *
   *
   */
  public string $streetAddress;

  /**
   * Optional
   *
   *
   */
  public string $locality;

  /**
   * Optional
   *
   *
   */
  public string $region;

  /**
   * Optional
   *
   *
   */
  public string $postalCode;

  /**
   * Optional
   *
   *
   */
  public string $city;

  /**
   * Optional
   *
   *
   */
  public string $province;

  /**
   * Optional
   *
   *
   */
  public string $country;

  /**
   * Optional
   *
   *
   */
  public string $createdAt;

  /**
   * Optional
   *
   *
   */
  public string $updatedAt;

  /**
   * 用户所在的角色列表
   * Optional
   *
   *
   */
  public \Authing\Types\PaginatedRoles $roles;

  /**
   * 用户所在的分组列表
   * Optional
   *
   *
   */
  public \Authing\Types\PaginatedGroups $groups;

  /**
   * 用户所在的部门列表
   * Optional
   *
   *
   */
  public \Authing\Types\PaginatedDepartments $departments;

  /**
   * 被授权访问的所有资源
   * Optional
   *
   *
   */
  public \Authing\Types\PaginatedAuthorizedResources $authorizedResources;

  /**
   * 用户外部 ID
   * Optional
   *
   *
   */
  public string $externalId;
}

class UserStatus {
  const Suspended = 'Suspended';
  const Resigned = 'Resigned';
  const Activated = 'Activated';
  const Archived = 'Archived';
}

class Identity {
  /**
   * Optional
   *
   *
   */
  public string $openid;

  /**
   * Optional
   *
   *
   */
  public string $userIdInIdp;

  /**
   * Optional
   *
   *
   */
  public string $userId;

  /**
   * Optional
   *
   *
   */
  public string $connectionId;

  /**
   * Optional
   *
   *
   */
  public bool $isSocial;

  /**
   * Optional
   *
   *
   */
  public string $provider;

  /**
   * Optional
   *
   *
   */
  public string $userPoolId;

  /**
   * Optional
   *
   *
   */
  public string $refreshToken;

  /**
   * Optional
   *
   *
   */
  public string $accessToken;
}

class PaginatedRoles {
  /**
   * Required
   *
   *
   */
  public int $totalCount;

  /**
   * Required
   * 
   * @var Role[]
   * 
   */
  public array $list;
}

class Role {
  /**
   * 权限组 code
   * Required
   *
   *
   */
  public string $namespace;

  /**
   * 唯一标志 code
   * Required
   *
   *
   */
  public string $code;

  /**
   * 资源描述符 arn
   * Required
   *
   *
   */
  public string $arn;

  /**
   * 角色描述
   * Optional
   *
   *
   */
  public string $description;

  /**
   * 是否为系统内建，系统内建的角色不能删除
   * Optional
   *
   *
   */
  public bool $isSystem;

  /**
   * 创建时间
   * Optional
   *
   *
   */
  public string $createdAt;

  /**
   * 修改时间
   * Optional
   *
   *
   */
  public string $updatedAt;

  /**
   * 被授予此角色的用户列表
   * Required
   *
   *
   */
  public \Authing\Types\PaginatedUsers $users;

  /**
   * 被授权访问的所有资源
   * Optional
   *
   *
   */
  public \Authing\Types\PaginatedAuthorizedResources $authorizedResources;

  /**
   * 父角色
   * Optional
   *
   *
   */
  public \Authing\Types\Role $parent;
}

class PaginatedAuthorizedResources {
  /**
   * Required
   *
   *
   */
  public int $totalCount;

  /**
   * Required
   * 
   * @var AuthorizedResource[]
   * 
   */
  public array $list;
}

class AuthorizedResource {
  /**
   * Required
   *
   *
   */
  public string $code;

  /**
   * Optional
   *
   *
   */
  public \Authing\Types\ResourceType $type;

  /**
   * Optional
   * 
   * @var string[]
   * 
   */
  public array $actions;
}

class PaginatedGroups {
  /**
   * Required
   *
   *
   */
  public int $totalCount;

  /**
   * Required
   * 
   * @var Group[]
   * 
   */
  public array $list;
}

class PaginatedDepartments {
  /**
   * Required
   * 
   * @var UserDepartment[]
   * 
   */
  public array $list;

  /**
   * Required
   *
   *
   */
  public int $totalCount;
}

class UserDepartment {
  /**
   * Required
   *
   *
   */
  public \Authing\Types\Node $department;

  /**
   * 是否为主部门
   * Required
   *
   *
   */
  public bool $isMainDepartment;

  /**
   * 加入该部门的时间
   * Optional
   *
   *
   */
  public string $joinedAt;
}

class Node {
  /**
   * Required
   *
   *
   */
  public string $id;

  /**
   * 组织机构 ID
   * Optional
   *
   *
   */
  public string $orgId;

  /**
   * 节点名称
   * Required
   *
   *
   */
  public string $name;

  /**
   * 多语言名称，**key** 为标准 **i18n** 语言编码，**value** 为对应语言的名称。
   * Optional
   *
   *
   */
  public string $nameI18n;

  /**
   * 描述信息
   * Optional
   *
   *
   */
  public string $description;

  /**
   * 多语言描述信息
   * Optional
   *
   *
   */
  public string $descriptionI18n;

  /**
   * 在父节点中的次序值。**order** 值大的排序靠前。有效的值范围是[0, 2^32)
   * Optional
   *
   *
   */
  public int $order;

  /**
   * 节点唯一标志码，可以通过 code 进行搜索
   * Optional
   *
   *
   */
  public string $code;

  /**
   * 是否为根节点
   * Optional
   *
   *
   */
  public bool $root;

  /**
   * 距离父节点的深度（如果是查询整棵树，返回的 **depth** 为距离根节点的深度，如果是查询某个节点的子节点，返回的 **depth** 指的是距离该节点的深度。）
   * Optional
   *
   *
   */
  public int $depth;

  /**
   * Required
   * 
   * @var string[]
   * 
   */
  public array $path;

  /**
   * Required
   * 
   * @var string[]
   * 
   */
  public array $codePath;

  /**
   * Required
   * 
   * @var string[]
   * 
   */
  public array $namePath;

  /**
   * Optional
   *
   *
   */
  public string $createdAt;

  /**
   * Optional
   *
   *
   */
  public string $updatedAt;

  /**
   * 该节点的子节点 **ID** 列表
   * Optional
   * 
   * @var string[]
   * 
   */
  public array $children;

  /**
   * 节点的用户列表
   * Required
   *
   *
   */
  public \Authing\Types\PaginatedUsers $users;

  /**
   * 被授权访问的所有资源
   * Optional
   *
   *
   */
  public \Authing\Types\PaginatedAuthorizedResources $authorizedResources;
}

class Mfa {
  /**
   * MFA ID
   * Required
   *
   *
   */
  public string $id;

  /**
   * 用户 ID
   * Required
   *
   *
   */
  public string $userId;

  /**
   * 用户池 ID
   * Required
   *
   *
   */
  public string $userPoolId;

  /**
   * 是否开启 MFA
   * Required
   *
   *
   */
  public bool $enable;

  /**
   * 密钥
   * Optional
   *
   *
   */
  public string $secret;
}

class Org {
  /**
   * 组织机构 ID
   * Required
   *
   *
   */
  public string $id;

  /**
   * 根节点
   * Required
   *
   *
   */
  public \Authing\Types\Node $rootNode;

  /**
   * 组织机构节点列表
   * Required
   * 
   * @var Node[]
   * 
   */
  public array $nodes;
}

class PaginatedOrgs {
  /**
   * Required
   *
   *
   */
  public int $totalCount;

  /**
   * Required
   * 
   * @var Org[]
   * 
   */
  public array $list;
}

class CheckPasswordStrengthResult {
  /**
   * Required
   *
   *
   */
  public bool $valid;

  /**
   * Optional
   *
   *
   */
  public string $message;
}

class Policy {
  /**
   * 权限组 code
   * Required
   *
   *
   */
  public string $namespace;

  /**
   * Required
   *
   *
   */
  public string $code;

  /**
   * Required
   *
   *
   */
  public bool $isDefault;

  /**
   * Optional
   *
   *
   */
  public string $description;

  /**
   * Required
   * 
   * @var PolicyStatement[]
   * 
   */
  public array $statements;

  /**
   * Optional
   *
   *
   */
  public string $createdAt;

  /**
   * Optional
   *
   *
   */
  public string $updatedAt;

  /**
   * 被授权次数
   * Required
   *
   *
   */
  public int $assignmentsCount;

  /**
   * 授权记录
   * Required
   * 
   * @var PolicyAssignment[]
   * 
   */
  public array $assignments;
}

class PolicyStatement {
  /**
   * Required
   *
   *
   */
  public string $resource;

  /**
   * Required
   * 
   * @var string[]
   * 
   */
  public array $actions;

  /**
   * Optional
   *
   *
   */
  public \Authing\Types\PolicyEffect $effect;

  /**
   * Optional
   * 
   * @var PolicyStatementCondition[]
   * 
   */
  public array $condition;
}

class PolicyEffect {
  const ALLOW = 'ALLOW';
  const DENY = 'DENY';
}

class PolicyStatementCondition {
  /**
   * Required
   *
   *
   */
  public string $param;

  /**
   * Required
   *
   *
   */
  public string $operator;

  /**
   * Required
   * 
   * @var any
   * 
   */
  public $value;
}

class PolicyAssignment {
  /**
   * Required
   *
   *
   */
  public string $code;

  /**
   * Required
   *
   *
   */
  public \Authing\Types\PolicyAssignmentTargetType $targetType;

  /**
   * Required
   *
   *
   */
  public string $targetIdentifier;
}

class PaginatedPolicies {
  /**
   * Required
   *
   *
   */
  public int $totalCount;

  /**
   * Required
   * 
   * @var Policy[]
   * 
   */
  public array $list;
}

class PaginatedPolicyAssignments {
  /**
   * Required
   *
   *
   */
  public int $totalCount;

  /**
   * Required
   * 
   * @var PolicyAssignment[]
   * 
   */
  public array $list;
}

class UDFTargetType {
  const NODE = 'NODE';
  const ORG = 'ORG';
  const USER = 'USER';
  const USERPOOL = 'USERPOOL';
  const ROLE = 'ROLE';
  const PERMISSION = 'PERMISSION';
  const APPLICATION = 'APPLICATION';
}

class UserDefinedData {
  /**
   * Required
   *
   *
   */
  public string $key;

  /**
   * Required
   *
   *
   */
  public \Authing\Types\UdfDataType $dataType;

  /**
   * Required
   *
   *
   */
  public string $value;

  /**
   * Optional
   *
   *
   */
  public string $label;
}

class UDFDataType {
  const STRING = 'STRING';
  const NUMBER = 'NUMBER';
  const DATETIME = 'DATETIME';
  const BOOLEAN = 'BOOLEAN';
  const OBJECT = 'OBJECT';
}

class UserDefinedField {
  /**
   * Required
   *
   *
   */
  public \Authing\Types\UdfTargetType $targetType;

  /**
   * Required
   *
   *
   */
  public \Authing\Types\UdfDataType $dataType;

  /**
   * Required
   *
   *
   */
  public string $key;

  /**
   * Optional
   *
   *
   */
  public string $label;

  /**
   * Optional
   *
   *
   */
  public string $options;
}

class UserDefinedDataMap {
  /**
   * Required
   *
   *
   */
  public string $targetId;

  /**
   * Required
   * 
   * @var UserDefinedData[]
   * 
   */
  public array $data;
}

/**
 * SearchUserDepartmentOpt
 */
class SearchUserDepartmentOpt {
  /**
   * Optional
   *
   *
   */
  public string $departmentId;

  /**
   * Optional
   *
   *
   */
  public bool $includeChildrenDepartments;


public function __construct() {

}

/**
 * @param $departmentId string departmentId
 * @return SearchUserDepartmentOpt
 */
public function withDepartmentId($departmentId) {
  $this->departmentId = $departmentId;
  return $this;
}

/**
 * @param $includeChildrenDepartments bool includeChildrenDepartments
 * @return SearchUserDepartmentOpt
 */
public function withIncludeChildrenDepartments($includeChildrenDepartments) {
  $this->includeChildrenDepartments = $includeChildrenDepartments;
  return $this;
}
}
    

/**
 * SearchUserGroupOpt
 */
class SearchUserGroupOpt {
  /**
   * Optional
   *
   *
   */
  public string $code;


public function __construct() {

}

/**
 * @param $code string code
 * @return SearchUserGroupOpt
 */
public function withCode($code) {
  $this->code = $code;
  return $this;
}
}
    

/**
 * SearchUserRoleOpt
 */
class SearchUserRoleOpt {
  /**
   * Optional
   *
   *
   */
  public string $namespace;

/**
 * @param $code string code
 */

public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $code
)
{
}

/**
 * @param $namespace string namespace
 * @return SearchUserRoleOpt
 */
public function withNamespace($namespace) {
  $this->namespace = $namespace;
  return $this;
}
}
    

class JWTTokenStatus {
  /**
   * Optional
   *
   *
   */
  public int $code;

  /**
   * Optional
   *
   *
   */
  public string $message;

  /**
   * Optional
   *
   *
   */
  public bool $status;

  /**
   * Optional
   *
   *
   */
  public int $exp;

  /**
   * Optional
   *
   *
   */
  public int $iat;

  /**
   * Optional
   *
   *
   */
  public \Authing\Types\JWTTokenStatusDetail $data;
}

class JWTTokenStatusDetail {
  /**
   * Optional
   *
   *
   */
  public string $id;

  /**
   * Optional
   *
   *
   */
  public string $userPoolId;

  /**
   * Optional
   *
   *
   */
  public string $arn;
}

class UserPool {
  /**
   * Required
   *
   *
   */
  public string $id;

  /**
   * Required
   *
   *
   */
  public string $name;

  /**
   * Required
   *
   *
   */
  public string $domain;

  /**
   * Optional
   *
   *
   */
  public string $description;

  /**
   * Required
   *
   *
   */
  public string $secret;

  /**
   * Required
   *
   *
   */
  public string $jwtSecret;

  /**
   * Optional
   *
   *
   */
  public string $ownerId;

  /**
   * Optional
   * 
   * @var UserPoolType[]
   * 
   */
  public array $userpoolTypes;

  /**
   * Required
   *
   *
   */
  public string $logo;

  /**
   * Optional
   *
   *
   */
  public string $createdAt;

  /**
   * Optional
   *
   *
   */
  public string $updatedAt;

  /**
   * 用户邮箱是否验证（用户的 emailVerified 字段）默认值，默认为 false
   * Required
   *
   *
   */
  public bool $emailVerifiedDefault;

  /**
   * 用户注册之后是否发送欢迎邮件
   * Required
   *
   *
   */
  public bool $sendWelcomeEmail;

  /**
   * 是否关闭注册
   * Required
   *
   *
   */
  public bool $registerDisabled;

  /**
   * 是否开启用户池下应用间单点登录
   * Required
   *
   *
   */
  public bool $appSsoEnabled;

  /**
   * 用户池禁止注册后，是否还显示微信小程序扫码登录。当 **showWXMPQRCode** 为 **true** 时，
   * 前端显示小程序码，此时只有以前允许注册时，扫码登录过的用户可以继续登录；新用户扫码无法登录。
   * Optional
   *
   *
   */
  public bool $showWxQRCodeWhenRegisterDisabled;

  /**
   * 前端跨域请求白名单
   * Optional
   *
   *
   */
  public string $allowedOrigins;

  /**
   * 用户 **token** 有效时间，单位为秒，默认为 15 天。
   * Optional
   *
   *
   */
  public int $tokenExpiresAfter;

  /**
   * 是否已删除
   * Optional
   *
   *
   */
  public bool $isDeleted;

  /**
   * 注册频繁检测
   * Optional
   *
   *
   */
  public \Authing\Types\FrequentRegisterCheckConfig $frequentRegisterCheck;

  /**
   * 登录失败检测
   * Optional
   *
   *
   */
  public \Authing\Types\LoginFailCheckConfig $loginFailCheck;

  /**
   * 手机号修改策略
   * Optional
   *
   *
   */
  public \Authing\Types\ChangePhoneStrategy $changePhoneStrategy;

  /**
   * 邮箱修改策略
   * Optional
   *
   *
   */
  public \Authing\Types\ChangeEmailStrategy $changeEmailStrategy;

  /**
   * APP 扫码登录配置
   * Optional
   *
   *
   */
  public \Authing\Types\QrcodeLoginStrategy $qrcodeLoginStrategy;

  /**
   * APP 拉起小程序登录配置
   * Optional
   *
   *
   */
  public \Authing\Types\App2WxappLoginStrategy $app2WxappLoginStrategy;

  /**
   * 注册白名单配置
   * Optional
   *
   *
   */
  public \Authing\Types\RegisterWhiteListConfig $whitelist;

  /**
   * 自定义短信服务商配置
   * Optional
   *
   *
   */
  public \Authing\Types\CustomSMSProvider $customSMSProvider;

  /**
   * 用户池套餐类型
   * Optional
   *
   *
   */
  public int $packageType;

  /**
   * 是否使用自定义数据库 CUSTOM_USER_STORE 模式
   * Optional
   *
   *
   */
  public bool $useCustomUserStore;

  /**
   * 是否要求邮箱必须验证才能登录（如果是通过邮箱登录的话）
   * Optional
   *
   *
   */
  public bool $loginRequireEmailVerified;

  /**
   * 短信验证码长度
   * Optional
   *
   *
   */
  public int $verifyCodeLength;
}

class UserPoolType {
  /**
   * Optional
   *
   *
   */
  public string $code;

  /**
   * Optional
   *
   *
   */
  public string $name;

  /**
   * Optional
   *
   *
   */
  public string $description;

  /**
   * Optional
   *
   *
   */
  public string $image;

  /**
   * Optional
   * 
   * @var string[]
   * 
   */
  public array $sdks;
}

class FrequentRegisterCheckConfig {
  /**
   * Optional
   *
   *
   */
  public int $timeInterval;

  /**
   * Optional
   *
   *
   */
  public int $limit;

  /**
   * Optional
   *
   *
   */
  public bool $enabled;
}

class LoginFailCheckConfig {
  /**
   * Optional
   *
   *
   */
  public int $timeInterval;

  /**
   * Optional
   *
   *
   */
  public int $limit;

  /**
   * Optional
   *
   *
   */
  public bool $enabled;
}

class ChangePhoneStrategy {
  /**
   * Optional
   *
   *
   */
  public bool $verifyOldPhone;
}

class ChangeEmailStrategy {
  /**
   * Optional
   *
   *
   */
  public bool $verifyOldEmail;
}

class QrcodeLoginStrategy {
  /**
   * Optional
   *
   *
   */
  public int $qrcodeExpiresAfter;

  /**
   * Optional
   *
   *
   */
  public bool $returnFullUserInfo;

  /**
   * Optional
   *
   *
   */
  public bool $allowExchangeUserInfoFromBrowser;

  /**
   * Optional
   *
   *
   */
  public int $ticketExpiresAfter;
}

class App2WxappLoginStrategy {
  /**
   * Optional
   *
   *
   */
  public int $ticketExpriresAfter;

  /**
   * Optional
   *
   *
   */
  public bool $ticketExchangeUserInfoNeedSecret;
}

class RegisterWhiteListConfig {
  /**
   * 是否开启手机号注册白名单
   * Optional
   *
   *
   */
  public bool $phoneEnabled;

  /**
   * 是否开启邮箱注册白名单
   * Optional
   *
   *
   */
  public bool $emailEnabled;

  /**
   * 是否开用户名注册白名单
   * Optional
   *
   *
   */
  public bool $usernameEnabled;
}

class CustomSMSProvider {
  /**
   * Optional
   *
   *
   */
  public bool $enabled;

  /**
   * Optional
   *
   *
   */
  public string $provider;

  /**
   * Optional
   *
   *
   */
  public string $config;
}

class PaginatedUserpool {
  /**
   * Required
   *
   *
   */
  public int $totalCount;

  /**
   * Required
   * 
   * @var UserPool[]
   * 
   */
  public array $list;
}

class AccessTokenRes {
  /**
   * Optional
   *
   *
   */
  public string $accessToken;

  /**
   * Optional
   *
   *
   */
  public int $exp;

  /**
   * Optional
   *
   *
   */
  public int $iat;
}

class WhitelistType {
  const USERNAME = 'USERNAME';
  const EMAIL = 'EMAIL';
  const PHONE = 'PHONE';
}

class WhiteList {
  /**
   * Optional
   *
   *
   */
  public string $createdAt;

  /**
   * Optional
   *
   *
   */
  public string $updatedAt;

  /**
   * Required
   *
   *
   */
  public string $value;
}

class Mutation {
  /**
   * 允许操作某个资源
   * Required
   *
   *
   */
  public \Authing\Types\CommonMessage $allow;

  /**
   * 将一个（类）资源授权给用户、角色、分组、组织机构，且可以分别指定不同的操作权限。
   * Required
   *
   *
   */
  public \Authing\Types\CommonMessage $authorizeResource;

  /**
   * 配置社会化登录
   * Required
   *
   *
   */
  public \Authing\Types\SocialConnectionInstance $createSocialConnectionInstance;

  /**
   * 开启社会化登录
   * Required
   *
   *
   */
  public \Authing\Types\SocialConnectionInstance $enableSocialConnectionInstance;

  /**
   * 关闭社会化登录
   * Required
   *
   *
   */
  public \Authing\Types\SocialConnectionInstance $disableSocialConnectionInstance;

  /**
   * 设置用户在某个组织机构内所在的主部门
   * Required
   *
   *
   */
  public \Authing\Types\CommonMessage $setMainDepartment;

  /**
   * 配置自定义邮件模版
   * Required
   *
   *
   */
  public \Authing\Types\EmailTemplate $configEmailTemplate;

  /**
   * 启用自定义邮件模版
   * Required
   *
   *
   */
  public \Authing\Types\EmailTemplate $enableEmailTemplate;

  /**
   * 停用自定义邮件模版（将会使用系统默认邮件模版）
   * Required
   *
   *
   */
  public \Authing\Types\EmailTemplate $disableEmailTemplate;

  /**
   * 发送邮件
   * Required
   *
   *
   */
  public \Authing\Types\CommonMessage $sendEmail;

  /**
   * 创建函数
   * Optional
   * 
   * @var Function
   * 
   */
  public $createFunction;

  /**
   * 修改函数
   * Required
   * 
   * @var Function
   * 
   */
  public $updateFunction;

  /**
   * Required
   *
   *
   */
  public \Authing\Types\CommonMessage $deleteFunction;

  /**
   * Required
   *
   *
   */
  public \Authing\Types\CommonMessage $addUserToGroup;

  /**
   * Required
   *
   *
   */
  public \Authing\Types\CommonMessage $removeUserFromGroup;

  /**
   * 创建角色
   * Required
   *
   *
   */
  public \Authing\Types\Group $createGroup;

  /**
   * 修改角色
   * Required
   *
   *
   */
  public \Authing\Types\Group $updateGroup;

  /**
   * 批量删除角色
   * Required
   *
   *
   */
  public \Authing\Types\CommonMessage $deleteGroups;

  /**
   * Optional
   *
   *
   */
  public \Authing\Types\User $loginByEmail;

  /**
   * Optional
   *
   *
   */
  public \Authing\Types\User $loginByUsername;

  /**
   * Optional
   *
   *
   */
  public \Authing\Types\User $loginByPhoneCode;

  /**
   * Optional
   *
   *
   */
  public \Authing\Types\User $loginByPhonePassword;

  /**
   * 修改 MFA 信息
   * Optional
   *
   *
   */
  public \Authing\Types\Mfa $changeMfa;

  /**
   * 创建组织机构
   * Required
   *
   *
   */
  public \Authing\Types\Org $createOrg;

  /**
   * 删除组织机构
   * Required
   *
   *
   */
  public \Authing\Types\CommonMessage $deleteOrg;

  /**
   * 添加子节点
   * Required
   *
   *
   */
  public \Authing\Types\Org $addNode;

  /**
   * 添加子节点
   * Required
   *
   *
   */
  public \Authing\Types\Node $addNodeV2;

  /**
   * 修改节点
   * Required
   *
   *
   */
  public \Authing\Types\Node $updateNode;

  /**
   * 删除节点（会一并删掉子节点）
   * Required
   *
   *
   */
  public \Authing\Types\CommonMessage $deleteNode;

  /**
   * （批量）将成员添加到节点中
   * Required
   *
   *
   */
  public \Authing\Types\Node $addMember;

  /**
   * （批量）将成员从节点中移除
   * Required
   *
   *
   */
  public \Authing\Types\Node $removeMember;

  /**
   * Required
   *
   *
   */
  public \Authing\Types\Org $moveNode;

  /**
   * Optional
   *
   *
   */
  public \Authing\Types\CommonMessage $resetPassword;

  /**
   * Required
   *
   *
   */
  public \Authing\Types\Policy $createPolicy;

  /**
   * Required
   *
   *
   */
  public \Authing\Types\Policy $updatePolicy;

  /**
   * Required
   *
   *
   */
  public \Authing\Types\CommonMessage $deletePolicy;

  /**
   * Required
   *
   *
   */
  public \Authing\Types\CommonMessage $deletePolicies;

  /**
   * Required
   *
   *
   */
  public \Authing\Types\CommonMessage $addPolicyAssignments;

  /**
   * 开启授权
   * Required
   *
   *
   */
  public \Authing\Types\CommonMessage $enablePolicyAssignment;

  /**
   * 开启授权
   * Required
   *
   *
   */
  public \Authing\Types\CommonMessage $disbalePolicyAssignment;

  /**
   * Required
   *
   *
   */
  public \Authing\Types\CommonMessage $removePolicyAssignments;

  /**
   * Optional
   *
   *
   */
  public \Authing\Types\User $registerByUsername;

  /**
   * Optional
   *
   *
   */
  public \Authing\Types\User $registerByEmail;

  /**
   * Optional
   *
   *
   */
  public \Authing\Types\User $registerByPhoneCode;

  /**
   * 创建角色
   * Required
   *
   *
   */
  public \Authing\Types\Role $createRole;

  /**
   * 修改角色
   * Required
   *
   *
   */
  public \Authing\Types\Role $updateRole;

  /**
   * 删除角色
   * Required
   *
   *
   */
  public \Authing\Types\CommonMessage $deleteRole;

  /**
   * 批量删除角色
   * Required
   *
   *
   */
  public \Authing\Types\CommonMessage $deleteRoles;

  /**
   * 给用户授权角色
   * Optional
   *
   *
   */
  public \Authing\Types\CommonMessage $assignRole;

  /**
   * 撤销角色
   * Optional
   *
   *
   */
  public \Authing\Types\CommonMessage $revokeRole;

  /**
   * 使用子账号登录
   * Required
   *
   *
   */
  public \Authing\Types\User $loginBySubAccount;

  /**
   * Required
   *
   *
   */
  public \Authing\Types\UserDefinedField $setUdf;

  /**
   * Optional
   *
   *
   */
  public \Authing\Types\CommonMessage $removeUdf;

  /**
   * Optional
   * 
   * @var UserDefinedData[]
   * 
   */
  public array $setUdv;

  /**
   * Optional
   *
   *
   */
  public \Authing\Types\CommonMessage $setUdfValueBatch;

  /**
   * Optional
   * 
   * @var UserDefinedData[]
   * 
   */
  public array $removeUdv;

  /**
   * Optional
   * 
   * @var UserDefinedData[]
   * 
   */
  public array $setUdvBatch;

  /**
   * Optional
   *
   *
   */
  public \Authing\Types\RefreshToken $refreshToken;

  /**
   * 创建用户。此接口需要管理员权限，普通用户注册请使用 **register** 接口。
   * Required
   *
   *
   */
  public \Authing\Types\User $createUser;

  /**
   * 更新用户信息。
   * Required
   *
   *
   */
  public \Authing\Types\User $updateUser;

  /**
   * 修改用户密码，此接口需要验证原始密码，管理员直接修改请使用 **updateUser** 接口。
   * Required
   *
   *
   */
  public \Authing\Types\User $updatePassword;

  /**
   * 绑定手机号，调用此接口需要当前用户未绑定手机号
   * Required
   *
   *
   */
  public \Authing\Types\User $bindPhone;

  /**
   * 绑定邮箱
   * Required
   *
   *
   */
  public \Authing\Types\User $bindEmail;

  /**
   * 解绑定手机号，调用此接口需要当前用户已绑定手机号并且绑定了其他登录方式
   * Required
   *
   *
   */
  public \Authing\Types\User $unbindPhone;

  /**
   * 修改手机号。此接口需要验证手机号验证码，管理员直接修改请使用 **updateUser** 接口。
   * Required
   *
   *
   */
  public \Authing\Types\User $updatePhone;

  /**
   * 修改邮箱。此接口需要验证邮箱验证码，管理员直接修改请使用 updateUser 接口。
   * Required
   *
   *
   */
  public \Authing\Types\User $updateEmail;

  /**
   * 解绑定邮箱
   * Required
   *
   *
   */
  public \Authing\Types\User $unbindEmail;

  /**
   * 删除用户
   * Optional
   *
   *
   */
  public \Authing\Types\CommonMessage $deleteUser;

  /**
   * 批量删除用户
   * Optional
   *
   *
   */
  public \Authing\Types\CommonMessage $deleteUsers;

  /**
   * 创建用户池
   * Required
   *
   *
   */
  public \Authing\Types\UserPool $createUserpool;

  /**
   * Required
   *
   *
   */
  public \Authing\Types\UserPool $updateUserpool;

  /**
   * Required
   *
   *
   */
  public string $refreshUserpoolSecret;

  /**
   * Required
   *
   *
   */
  public \Authing\Types\CommonMessage $deleteUserpool;

  /**
   * Required
   *
   *
   */
  public \Authing\Types\RefreshAccessTokenRes $refreshAccessToken;

  /**
   * Required
   * 
   * @var WhiteList[]
   * 
   */
  public array $addWhitelist;

  /**
   * Required
   * 
   * @var WhiteList[]
   * 
   */
  public array $removeWhitelist;
}

class CommonMessage {
  /**
   * 可读的接口响应说明，请以业务状态码 code 作为判断业务是否成功的标志
   * Optional
   *
   *
   */
  public string $message;

  /**
   * 业务状态码（与 HTTP 响应码不同），但且仅当为 200 的时候表示操作成功表示，详细说明请见：
   * [Authing 错误代码列表](https://docs.authing.co/advanced/error-code.html)
   * Optional
   *
   *
   */
  public int $code;
}

/**
 * AuthorizeResourceOpt
 */
class AuthorizeResourceOpt {
  /**
   * Optional
   * 
   * @var string[]
   * 
   */
  public array $actions;

/**
 * @param $targetType PolicyAssignmentTargetType targetType
 * @param $targetIdentifier string targetIdentifier
 */

public function __construct(
    /**
     * Required
     *
     * @var PolicyAssignmentTargetType
     */
    public $targetType,
    /**
     * Required
     *
     * @var string
     */
    public $targetIdentifier
)
{
}

/**
 * @param $actions string[] actions
 * @return AuthorizeResourceOpt
 */
public function withActions($actions) {
  $this->actions = $actions;
  return $this;
}
}
    

/**
 * CreateSocialConnectionInstanceInput
 */
class CreateSocialConnectionInstanceInput {
  /**
   * Optional
   * 
   * @var CreateSocialConnectionInstanceFieldInput[]
   * 
   */
  public array $fields;

/**
 * @param $provider string 社会化登录 provider
 */

public function __construct(
    /**
     * 社会化登录 provider
     * Required
     *
     * @var string
     */
    public $provider
)
{
}

/**
 * @param $fields CreateSocialConnectionInstanceFieldInput[] fields
 * @return CreateSocialConnectionInstanceInput
 */
public function withFields($fields) {
  $this->fields = $fields;
  return $this;
}
}
    

/**
 * CreateSocialConnectionInstanceFieldInput
 */
class CreateSocialConnectionInstanceFieldInput {
  /**
 * @param $key string key
 * @param $value string value
 */

public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $key,
    /**
     * Required
     *
     * @var string
     */
    public $value
)
{
}

}
    

/**
 * ConfigEmailTemplateInput
 */
class ConfigEmailTemplateInput {
  /**
   * 重定向链接，操作成功后，用户将被重定向到此 URL。
   * Optional
   *
   *
   */
  public string $redirectTo;

  /**
   * Optional
   *
   *
   */
  public bool $hasURL;

  /**
   * 验证码过期时间（单位为秒）
   * Optional
   *
   *
   */
  public int $expiresIn;

/**
 * @param $type EmailTemplateType 邮件模版类型
 * @param $name string 模版名称
 * @param $subject string 邮件主题
 * @param $sender string 显示的邮件发送人
 * @param $content string 邮件模版内容
 */

public function __construct(
    /**
     * 邮件模版类型
     * Required
     *
     * @var EmailTemplateType
     */
    public $type,
    /**
     * 模版名称
     * Required
     *
     * @var string
     */
    public $name,
    /**
     * 邮件主题
     * Required
     *
     * @var string
     */
    public $subject,
    /**
     * 显示的邮件发送人
     * Required
     *
     * @var string
     */
    public $sender,
    /**
     * 邮件模版内容
     * Required
     *
     * @var string
     */
    public $content
)
{
}

/**
 * @param $redirectTo string 重定向链接，操作成功后，用户将被重定向到此 URL。
 * @return ConfigEmailTemplateInput
 */
public function withRedirectTo($redirectTo) {
  $this->redirectTo = $redirectTo;
  return $this;
}

/**
 * @param $hasURL bool hasURL
 * @return ConfigEmailTemplateInput
 */
public function withHasUrl($hasURL) {
  $this->hasURL = $hasURL;
  return $this;
}

/**
 * @param $expiresIn int 验证码过期时间（单位为秒）
 * @return ConfigEmailTemplateInput
 */
public function withExpiresIn($expiresIn) {
  $this->expiresIn = $expiresIn;
  return $this;
}
}
    

class EmailScene {
  const RESET_PASSWORD = 'RESET_PASSWORD';
  const VERIFY_EMAIL = 'VERIFY_EMAIL';
  const CHANGE_EMAIL = 'CHANGE_EMAIL';
  const MFA_VERIFY = 'MFA_VERIFY';
}

/**
 * CreateFunctionInput
 */
class CreateFunctionInput {
  /**
   * 描述信息
   * Optional
   *
   *
   */
  public string $description;

  /**
   * 云函数链接
   * Optional
   *
   *
   */
  public string $url;

/**
 * @param $name string 函数名称
 * @param $sourceCode string 源代码
 */

public function __construct(
    /**
     * 函数名称
     * Required
     *
     * @var string
     */
    public $name,
    /**
     * 源代码
     * Required
     *
     * @var string
     */
    public $sourceCode
)
{
}

/**
 * @param $description string 描述信息
 * @return CreateFunctionInput
 */
public function withDescription($description) {
  $this->description = $description;
  return $this;
}

/**
 * @param $url string 云函数链接
 * @return CreateFunctionInput
 */
public function withUrl($url) {
  $this->url = $url;
  return $this;
}
}
    

/**
 * UpdateFunctionInput
 */
class UpdateFunctionInput {
  /**
   * 函数名称
   * Optional
   *
   *
   */
  public string $name;

  /**
   * 源代码
   * Optional
   *
   *
   */
  public string $sourceCode;

  /**
   * 描述信息
   * Optional
   *
   *
   */
  public string $description;

  /**
   * 云函数链接
   * Optional
   *
   *
   */
  public string $url;

/**
 * @param $id string ID
 */

public function __construct(
    /**
     * ID
     * Required
     *
     * @var string
     */
    public $id
)
{
}

/**
 * @param $name string 函数名称
 * @return UpdateFunctionInput
 */
public function withName($name) {
  $this->name = $name;
  return $this;
}

/**
 * @param $sourceCode string 源代码
 * @return UpdateFunctionInput
 */
public function withSourceCode($sourceCode) {
  $this->sourceCode = $sourceCode;
  return $this;
}

/**
 * @param $description string 描述信息
 * @return UpdateFunctionInput
 */
public function withDescription($description) {
  $this->description = $description;
  return $this;
}

/**
 * @param $url string 云函数链接
 * @return UpdateFunctionInput
 */
public function withUrl($url) {
  $this->url = $url;
  return $this;
}
}
    

/**
 * LoginByEmailInput
 */
class LoginByEmailInput {
  /**
   * 图形验证码
   * Optional
   *
   *
   */
  public string $captchaCode;

  /**
   * 如果用户不存在，是否自动创建一个账号
   * Optional
   *
   *
   */
  public bool $autoRegister;

  /**
   * Optional
   *
   *
   */
  public string $clientIp;

  /**
   * 设置用户自定义字段，要求符合 Array<{ key: string; value: string }> 格式
   * Optional
   *
   *
   */
  public string $params;

  /**
   * 请求上下文信息，将会传递到 pipeline 中
   * Optional
   *
   *
   */
  public string $context;

/**
 * @param $email string email
 * @param $password string password
 */

public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $email,
    /**
     * Required
     *
     * @var string
     */
    public $password
)
{
}

/**
 * @param $captchaCode string 图形验证码
 * @return LoginByEmailInput
 */
public function withCaptchaCode($captchaCode) {
  $this->captchaCode = $captchaCode;
  return $this;
}

/**
 * @param $autoRegister bool 如果用户不存在，是否自动创建一个账号
 * @return LoginByEmailInput
 */
public function withAutoRegister($autoRegister) {
  $this->autoRegister = $autoRegister;
  return $this;
}

/**
 * @param $clientIp string clientIp
 * @return LoginByEmailInput
 */
public function withClientIp($clientIp) {
  $this->clientIp = $clientIp;
  return $this;
}

/**
 * @param $params string 设置用户自定义字段，要求符合 Array<{ key: string; value: string }> 格式
 * @return LoginByEmailInput
 */
public function withParams($params) {
  $this->params = $params;
  return $this;
}

/**
 * @param $context string 请求上下文信息，将会传递到 pipeline 中
 * @return LoginByEmailInput
 */
public function withContext($context) {
  $this->context = $context;
  return $this;
}
}
    

/**
 * LoginByUsernameInput
 */
class LoginByUsernameInput {
  /**
   * 图形验证码
   * Optional
   *
   *
   */
  public string $captchaCode;

  /**
   * 如果用户不存在，是否自动创建一个账号
   * Optional
   *
   *
   */
  public bool $autoRegister;

  /**
   * Optional
   *
   *
   */
  public string $clientIp;

  /**
   * 设置用户自定义字段，要求符合 Array<{ key: string; value: string }> 格式
   * Optional
   *
   *
   */
  public string $params;

  /**
   * 请求上下文信息，将会传递到 pipeline 中
   * Optional
   *
   *
   */
  public string $context;

/**
 * @param $username string username
 * @param $password string password
 */

public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $username,
    /**
     * Required
     *
     * @var string
     */
    public $password
)
{
}

/**
 * @param $captchaCode string 图形验证码
 * @return LoginByUsernameInput
 */
public function withCaptchaCode($captchaCode) {
  $this->captchaCode = $captchaCode;
  return $this;
}

/**
 * @param $autoRegister bool 如果用户不存在，是否自动创建一个账号
 * @return LoginByUsernameInput
 */
public function withAutoRegister($autoRegister) {
  $this->autoRegister = $autoRegister;
  return $this;
}

/**
 * @param $clientIp string clientIp
 * @return LoginByUsernameInput
 */
public function withClientIp($clientIp) {
  $this->clientIp = $clientIp;
  return $this;
}

/**
 * @param $params string 设置用户自定义字段，要求符合 Array<{ key: string; value: string }> 格式
 * @return LoginByUsernameInput
 */
public function withParams($params) {
  $this->params = $params;
  return $this;
}

/**
 * @param $context string 请求上下文信息，将会传递到 pipeline 中
 * @return LoginByUsernameInput
 */
public function withContext($context) {
  $this->context = $context;
  return $this;
}
}
    

/**
 * LoginByPhoneCodeInput
 */
class LoginByPhoneCodeInput {
  /**
   * 如果用户不存在，是否自动创建一个账号
   * Optional
   *
   *
   */
  public bool $autoRegister;

  /**
   * Optional
   *
   *
   */
  public string $clientIp;

  /**
   * 设置用户自定义字段，要求符合 Array<{ key: string; value: string }> 格式
   * Optional
   *
   *
   */
  public string $params;

  /**
   * 请求上下文信息，将会传递到 pipeline 中
   * Optional
   *
   *
   */
  public string $context;

/**
 * @param $phone string phone
 * @param $code string code
 */

public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $phone,
    /**
     * Required
     *
     * @var string
     */
    public $code
)
{
}

/**
 * @param $autoRegister bool 如果用户不存在，是否自动创建一个账号
 * @return LoginByPhoneCodeInput
 */
public function withAutoRegister($autoRegister) {
  $this->autoRegister = $autoRegister;
  return $this;
}

/**
 * @param $clientIp string clientIp
 * @return LoginByPhoneCodeInput
 */
public function withClientIp($clientIp) {
  $this->clientIp = $clientIp;
  return $this;
}

/**
 * @param $params string 设置用户自定义字段，要求符合 Array<{ key: string; value: string }> 格式
 * @return LoginByPhoneCodeInput
 */
public function withParams($params) {
  $this->params = $params;
  return $this;
}

/**
 * @param $context string 请求上下文信息，将会传递到 pipeline 中
 * @return LoginByPhoneCodeInput
 */
public function withContext($context) {
  $this->context = $context;
  return $this;
}
}
    

/**
 * LoginByPhonePasswordInput
 */
class LoginByPhonePasswordInput {
  /**
   * 图形验证码
   * Optional
   *
   *
   */
  public string $captchaCode;

  /**
   * 如果用户不存在，是否自动创建一个账号
   * Optional
   *
   *
   */
  public bool $autoRegister;

  /**
   * Optional
   *
   *
   */
  public string $clientIp;

  /**
   * 设置用户自定义字段，要求符合 Array<{ key: string; value: string }> 格式
   * Optional
   *
   *
   */
  public string $params;

  /**
   * 请求上下文信息，将会传递到 pipeline 中
   * Optional
   *
   *
   */
  public string $context;

/**
 * @param $phone string phone
 * @param $password string password
 */

public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $phone,
    /**
     * Required
     *
     * @var string
     */
    public $password
)
{
}

/**
 * @param $captchaCode string 图形验证码
 * @return LoginByPhonePasswordInput
 */
public function withCaptchaCode($captchaCode) {
  $this->captchaCode = $captchaCode;
  return $this;
}

/**
 * @param $autoRegister bool 如果用户不存在，是否自动创建一个账号
 * @return LoginByPhonePasswordInput
 */
public function withAutoRegister($autoRegister) {
  $this->autoRegister = $autoRegister;
  return $this;
}

/**
 * @param $clientIp string clientIp
 * @return LoginByPhonePasswordInput
 */
public function withClientIp($clientIp) {
  $this->clientIp = $clientIp;
  return $this;
}

/**
 * @param $params string 设置用户自定义字段，要求符合 Array<{ key: string; value: string }> 格式
 * @return LoginByPhonePasswordInput
 */
public function withParams($params) {
  $this->params = $params;
  return $this;
}

/**
 * @param $context string 请求上下文信息，将会传递到 pipeline 中
 * @return LoginByPhonePasswordInput
 */
public function withContext($context) {
  $this->context = $context;
  return $this;
}
}
    

/**
 * PolicyStatementInput
 */
class PolicyStatementInput {
  /**
   * Optional
   *
   *
   */
  public \Authing\Types\PolicyEffect $effect;

  /**
   * Optional
   * 
   * @var PolicyStatementConditionInput[]
   * 
   */
  public array $condition;

/**
 * @param $resource string resource
 * @param $actions string[] actions
 */

public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $resource,
    /**
     * Required
     *
     * @var string[]
     */
    public $actions
)
{
}

/**
 * @param $effect PolicyEffect effect
 * @return PolicyStatementInput
 */
public function withEffect($effect) {
  $this->effect = $effect;
  return $this;
}

/**
 * @param $condition PolicyStatementConditionInput[] condition
 * @return PolicyStatementInput
 */
public function withCondition($condition) {
  $this->condition = $condition;
  return $this;
}
}
    

/**
 * PolicyStatementConditionInput
 */
class PolicyStatementConditionInput {
  /**
 * @param $param string param
 * @param $operator string operator
 * @param $value any value
 */

public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $param,
    /**
     * Required
     *
     * @var string
     */
    public $operator,
    /**
     * Required
     *
     * @var any
     */
    public $value
)
{
}

}
    

/**
 * RegisterByUsernameInput
 */
class RegisterByUsernameInput {
  /**
   * Optional
   *
   *
   */
  public \Authing\Types\RegisterProfile $profile;

  /**
   * Optional
   *
   *
   */
  public bool $forceLogin;

  /**
   * Optional
   *
   *
   */
  public bool $generateToken;

  /**
   * Optional
   *
   *
   */
  public string $clientIp;

  /**
   * 设置用户自定义字段，要求符合 Array<{ key: string; value: string }> 格式
   * Optional
   *
   *
   */
  public string $params;

  /**
   * 请求上下文信息，将会传递到 pipeline 中
   * Optional
   *
   *
   */
  public string $context;

/**
 * @param $username string username
 * @param $password string password
 */

public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $username,
    /**
     * Required
     *
     * @var string
     */
    public $password
)
{
}

/**
 * @param $profile RegisterProfile profile
 * @return RegisterByUsernameInput
 */
public function withProfile($profile) {
  $this->profile = $profile;
  return $this;
}

/**
 * @param $forceLogin bool forceLogin
 * @return RegisterByUsernameInput
 */
public function withForceLogin($forceLogin) {
  $this->forceLogin = $forceLogin;
  return $this;
}

/**
 * @param $generateToken bool generateToken
 * @return RegisterByUsernameInput
 */
public function withGenerateToken($generateToken) {
  $this->generateToken = $generateToken;
  return $this;
}

/**
 * @param $clientIp string clientIp
 * @return RegisterByUsernameInput
 */
public function withClientIp($clientIp) {
  $this->clientIp = $clientIp;
  return $this;
}

/**
 * @param $params string 设置用户自定义字段，要求符合 Array<{ key: string; value: string }> 格式
 * @return RegisterByUsernameInput
 */
public function withParams($params) {
  $this->params = $params;
  return $this;
}

/**
 * @param $context string 请求上下文信息，将会传递到 pipeline 中
 * @return RegisterByUsernameInput
 */
public function withContext($context) {
  $this->context = $context;
  return $this;
}
}
    

/**
 * RegisterProfile
 */
class RegisterProfile {
  /**
   * Optional
   *
   *
   */
  public string $ip;

  /**
   * Optional
   *
   *
   */
  public string $oauth;

  /**
   * Optional
   *
   *
   */
  public string $username;

  /**
   * Optional
   *
   *
   */
  public string $nickname;

  /**
   * Optional
   *
   *
   */
  public string $company;

  /**
   * Optional
   *
   *
   */
  public string $photo;

  /**
   * Optional
   *
   *
   */
  public string $device;

  /**
   * Optional
   *
   *
   */
  public string $browser;

  /**
   * Optional
   *
   *
   */
  public string $name;

  /**
   * Optional
   *
   *
   */
  public string $givenName;

  /**
   * Optional
   *
   *
   */
  public string $familyName;

  /**
   * Optional
   *
   *
   */
  public string $middleName;

  /**
   * Optional
   *
   *
   */
  public string $profile;

  /**
   * Optional
   *
   *
   */
  public string $preferredUsername;

  /**
   * Optional
   *
   *
   */
  public string $website;

  /**
   * Optional
   *
   *
   */
  public string $gender;

  /**
   * Optional
   *
   *
   */
  public string $birthdate;

  /**
   * Optional
   *
   *
   */
  public string $zoneinfo;

  /**
   * Optional
   *
   *
   */
  public string $locale;

  /**
   * Optional
   *
   *
   */
  public string $address;

  /**
   * Optional
   *
   *
   */
  public string $formatted;

  /**
   * Optional
   *
   *
   */
  public string $streetAddress;

  /**
   * Optional
   *
   *
   */
  public string $locality;

  /**
   * Optional
   *
   *
   */
  public string $region;

  /**
   * Optional
   *
   *
   */
  public string $postalCode;

  /**
   * Optional
   *
   *
   */
  public string $country;

  /**
   * Optional
   * 
   * @var UserDdfInput[]
   * 
   */
  public array $udf;


public function __construct() {

}

/**
 * @param $ip string ip
 * @return RegisterProfile
 */
public function withIp($ip) {
  $this->ip = $ip;
  return $this;
}

/**
 * @param $oauth string oauth
 * @return RegisterProfile
 */
public function withOauth($oauth) {
  $this->oauth = $oauth;
  return $this;
}

/**
 * @param $username string username
 * @return RegisterProfile
 */
public function withUsername($username) {
  $this->username = $username;
  return $this;
}

/**
 * @param $nickname string nickname
 * @return RegisterProfile
 */
public function withNickname($nickname) {
  $this->nickname = $nickname;
  return $this;
}

/**
 * @param $company string company
 * @return RegisterProfile
 */
public function withCompany($company) {
  $this->company = $company;
  return $this;
}

/**
 * @param $photo string photo
 * @return RegisterProfile
 */
public function withPhoto($photo) {
  $this->photo = $photo;
  return $this;
}

/**
 * @param $device string device
 * @return RegisterProfile
 */
public function withDevice($device) {
  $this->device = $device;
  return $this;
}

/**
 * @param $browser string browser
 * @return RegisterProfile
 */
public function withBrowser($browser) {
  $this->browser = $browser;
  return $this;
}

/**
 * @param $name string name
 * @return RegisterProfile
 */
public function withName($name) {
  $this->name = $name;
  return $this;
}

/**
 * @param $givenName string givenName
 * @return RegisterProfile
 */
public function withGivenName($givenName) {
  $this->givenName = $givenName;
  return $this;
}

/**
 * @param $familyName string familyName
 * @return RegisterProfile
 */
public function withFamilyName($familyName) {
  $this->familyName = $familyName;
  return $this;
}

/**
 * @param $middleName string middleName
 * @return RegisterProfile
 */
public function withMiddleName($middleName) {
  $this->middleName = $middleName;
  return $this;
}

/**
 * @param $profile string profile
 * @return RegisterProfile
 */
public function withProfile($profile) {
  $this->profile = $profile;
  return $this;
}

/**
 * @param $preferredUsername string preferredUsername
 * @return RegisterProfile
 */
public function withPreferredUsername($preferredUsername) {
  $this->preferredUsername = $preferredUsername;
  return $this;
}

/**
 * @param $website string website
 * @return RegisterProfile
 */
public function withWebsite($website) {
  $this->website = $website;
  return $this;
}

/**
 * @param $gender string gender
 * @return RegisterProfile
 */
public function withGender($gender) {
  $this->gender = $gender;
  return $this;
}

/**
 * @param $birthdate string birthdate
 * @return RegisterProfile
 */
public function withBirthdate($birthdate) {
  $this->birthdate = $birthdate;
  return $this;
}

/**
 * @param $zoneinfo string zoneinfo
 * @return RegisterProfile
 */
public function withZoneinfo($zoneinfo) {
  $this->zoneinfo = $zoneinfo;
  return $this;
}

/**
 * @param $locale string locale
 * @return RegisterProfile
 */
public function withLocale($locale) {
  $this->locale = $locale;
  return $this;
}

/**
 * @param $address string address
 * @return RegisterProfile
 */
public function withAddress($address) {
  $this->address = $address;
  return $this;
}

/**
 * @param $formatted string formatted
 * @return RegisterProfile
 */
public function withFormatted($formatted) {
  $this->formatted = $formatted;
  return $this;
}

/**
 * @param $streetAddress string streetAddress
 * @return RegisterProfile
 */
public function withStreetAddress($streetAddress) {
  $this->streetAddress = $streetAddress;
  return $this;
}

/**
 * @param $locality string locality
 * @return RegisterProfile
 */
public function withLocality($locality) {
  $this->locality = $locality;
  return $this;
}

/**
 * @param $region string region
 * @return RegisterProfile
 */
public function withRegion($region) {
  $this->region = $region;
  return $this;
}

/**
 * @param $postalCode string postalCode
 * @return RegisterProfile
 */
public function withPostalCode($postalCode) {
  $this->postalCode = $postalCode;
  return $this;
}

/**
 * @param $country string country
 * @return RegisterProfile
 */
public function withCountry($country) {
  $this->country = $country;
  return $this;
}

/**
 * @param $udf UserDdfInput[] udf
 * @return RegisterProfile
 */
public function withUdf($udf) {
  $this->udf = $udf;
  return $this;
}
}
    

/**
 * UserDdfInput
 */
class UserDdfInput {
  /**
 * @param $key string key
 * @param $value string value
 */

public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $key,
    /**
     * Required
     *
     * @var string
     */
    public $value
)
{
}

}
    

/**
 * RegisterByEmailInput
 */
class RegisterByEmailInput {
  /**
   * Optional
   *
   *
   */
  public \Authing\Types\RegisterProfile $profile;

  /**
   * Optional
   *
   *
   */
  public bool $forceLogin;

  /**
   * Optional
   *
   *
   */
  public bool $generateToken;

  /**
   * Optional
   *
   *
   */
  public string $clientIp;

  /**
   * 设置用户自定义字段，要求符合 Array<{ key: string; value: string }> 格式
   * Optional
   *
   *
   */
  public string $params;

  /**
   * 请求上下文信息，将会传递到 pipeline 中
   * Optional
   *
   *
   */
  public string $context;

/**
 * @param $email string email
 * @param $password string password
 */

public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $email,
    /**
     * Required
     *
     * @var string
     */
    public $password
)
{
}

/**
 * @param $profile RegisterProfile profile
 * @return RegisterByEmailInput
 */
public function withProfile($profile) {
  $this->profile = $profile;
  return $this;
}

/**
 * @param $forceLogin bool forceLogin
 * @return RegisterByEmailInput
 */
public function withForceLogin($forceLogin) {
  $this->forceLogin = $forceLogin;
  return $this;
}

/**
 * @param $generateToken bool generateToken
 * @return RegisterByEmailInput
 */
public function withGenerateToken($generateToken) {
  $this->generateToken = $generateToken;
  return $this;
}

/**
 * @param $clientIp string clientIp
 * @return RegisterByEmailInput
 */
public function withClientIp($clientIp) {
  $this->clientIp = $clientIp;
  return $this;
}

/**
 * @param $params string 设置用户自定义字段，要求符合 Array<{ key: string; value: string }> 格式
 * @return RegisterByEmailInput
 */
public function withParams($params) {
  $this->params = $params;
  return $this;
}

/**
 * @param $context string 请求上下文信息，将会传递到 pipeline 中
 * @return RegisterByEmailInput
 */
public function withContext($context) {
  $this->context = $context;
  return $this;
}
}
    

/**
 * RegisterByPhoneCodeInput
 */
class RegisterByPhoneCodeInput {
  /**
   * Optional
   *
   *
   */
  public string $password;

  /**
   * Optional
   *
   *
   */
  public \Authing\Types\RegisterProfile $profile;

  /**
   * Optional
   *
   *
   */
  public bool $forceLogin;

  /**
   * Optional
   *
   *
   */
  public bool $generateToken;

  /**
   * Optional
   *
   *
   */
  public string $clientIp;

  /**
   * 设置用户自定义字段，要求符合 Array<{ key: string; value: string }> 格式
   * Optional
   *
   *
   */
  public string $params;

  /**
   * 请求上下文信息，将会传递到 pipeline 中
   * Optional
   *
   *
   */
  public string $context;

/**
 * @param $phone string phone
 * @param $code string code
 */

public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $phone,
    /**
     * Required
     *
     * @var string
     */
    public $code
)
{
}

/**
 * @param $password string password
 * @return RegisterByPhoneCodeInput
 */
public function withPassword($password) {
  $this->password = $password;
  return $this;
}

/**
 * @param $profile RegisterProfile profile
 * @return RegisterByPhoneCodeInput
 */
public function withProfile($profile) {
  $this->profile = $profile;
  return $this;
}

/**
 * @param $forceLogin bool forceLogin
 * @return RegisterByPhoneCodeInput
 */
public function withForceLogin($forceLogin) {
  $this->forceLogin = $forceLogin;
  return $this;
}

/**
 * @param $generateToken bool generateToken
 * @return RegisterByPhoneCodeInput
 */
public function withGenerateToken($generateToken) {
  $this->generateToken = $generateToken;
  return $this;
}

/**
 * @param $clientIp string clientIp
 * @return RegisterByPhoneCodeInput
 */
public function withClientIp($clientIp) {
  $this->clientIp = $clientIp;
  return $this;
}

/**
 * @param $params string 设置用户自定义字段，要求符合 Array<{ key: string; value: string }> 格式
 * @return RegisterByPhoneCodeInput
 */
public function withParams($params) {
  $this->params = $params;
  return $this;
}

/**
 * @param $context string 请求上下文信息，将会传递到 pipeline 中
 * @return RegisterByPhoneCodeInput
 */
public function withContext($context) {
  $this->context = $context;
  return $this;
}
}
    

/**
 * SetUdfValueBatchInput
 */
class SetUdfValueBatchInput {
  /**
 * @param $targetId string targetId
 * @param $key string key
 * @param $value string value
 */

public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $targetId,
    /**
     * Required
     *
     * @var string
     */
    public $key,
    /**
     * Required
     *
     * @var string
     */
    public $value
)
{
}

}
    

/**
 * UserDefinedDataInput
 */
class UserDefinedDataInput {
  /**
   * Optional
   *
   *
   */
  public string $value;

/**
 * @param $key string key
 */

public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $key
)
{
}

/**
 * @param $value string value
 * @return UserDefinedDataInput
 */
public function withValue($value) {
  $this->value = $value;
  return $this;
}
}
    

class RefreshToken {
  /**
   * Optional
   *
   *
   */
  public string $token;

  /**
   * Optional
   *
   *
   */
  public int $iat;

  /**
   * Optional
   *
   *
   */
  public int $exp;
}

/**
 * CreateUserInput
 */
class CreateUserInput {
  /**
   * 用户名，用户池内唯一
   * Optional
   *
   *
   */
  public string $username;

  /**
   * 邮箱，不区分大小写，如 Bob@example.com 和 bob@example.com 会识别为同一个邮箱。用户池内唯一。
   * Optional
   *
   *
   */
  public string $email;

  /**
   * 邮箱是否已验证
   * Optional
   *
   *
   */
  public bool $emailVerified;

  /**
   * 手机号，用户池内唯一
   * Optional
   *
   *
   */
  public string $phone;

  /**
   * 手机号是否已验证
   * Optional
   *
   *
   */
  public bool $phoneVerified;

  /**
   * Optional
   *
   *
   */
  public string $unionid;

  /**
   * Optional
   *
   *
   */
  public string $openid;

  /**
   * 昵称，该字段不唯一。
   * Optional
   *
   *
   */
  public string $nickname;

  /**
   * 头像链接，默认为 https://usercontents.authing.cn/authing-avatar.png
   * Optional
   *
   *
   */
  public string $photo;

  /**
   * Optional
   *
   *
   */
  public string $password;

  /**
   * 注册方式
   * Optional
   * 
   * @var string[]
   * 
   */
  public array $registerSource;

  /**
   * Optional
   *
   *
   */
  public string $browser;

  /**
   * 用户社会化登录第三方身份提供商返回的原始用户信息，非社会化登录方式注册的用户此字段为空。
   * Optional
   *
   *
   */
  public string $oauth;

  /**
   * 用户累计登录次数，当你从你原有用户系统向 Authing 迁移的时候可以设置此字段。
   * Optional
   *
   *
   */
  public int $loginsCount;

  /**
   * Optional
   *
   *
   */
  public string $lastLogin;

  /**
   * Optional
   *
   *
   */
  public string $company;

  /**
   * Optional
   *
   *
   */
  public string $lastIP;

  /**
   * 用户注册时间，当你从你原有用户系统向 Authing 迁移的时候可以设置此字段。
   * Optional
   *
   *
   */
  public string $signedUp;

  /**
   * Optional
   *
   *
   */
  public bool $blocked;

  /**
   * Optional
   *
   *
   */
  public bool $isDeleted;

  /**
   * Optional
   *
   *
   */
  public string $device;

  /**
   * Optional
   *
   *
   */
  public string $name;

  /**
   * Optional
   *
   *
   */
  public string $givenName;

  /**
   * Optional
   *
   *
   */
  public string $familyName;

  /**
   * Optional
   *
   *
   */
  public string $middleName;

  /**
   * Optional
   *
   *
   */
  public string $profile;

  /**
   * Optional
   *
   *
   */
  public string $preferredUsername;

  /**
   * Optional
   *
   *
   */
  public string $website;

  /**
   * Optional
   *
   *
   */
  public string $gender;

  /**
   * Optional
   *
   *
   */
  public string $birthdate;

  /**
   * Optional
   *
   *
   */
  public string $zoneinfo;

  /**
   * Optional
   *
   *
   */
  public string $locale;

  /**
   * Optional
   *
   *
   */
  public string $address;

  /**
   * Optional
   *
   *
   */
  public string $formatted;

  /**
   * Optional
   *
   *
   */
  public string $streetAddress;

  /**
   * Optional
   *
   *
   */
  public string $locality;

  /**
   * Optional
   *
   *
   */
  public string $region;

  /**
   * Optional
   *
   *
   */
  public string $postalCode;

  /**
   * Optional
   *
   *
   */
  public string $country;

  /**
   * Optional
   *
   *
   */
  public string $externalId;


public function __construct() {

}

/**
 * @param $username string 用户名，用户池内唯一
 * @return CreateUserInput
 */
public function withUsername($username) {
  $this->username = $username;
  return $this;
}

/**
 * @param $email string 邮箱，不区分大小写，如 Bob@example.com 和 bob@example.com 会识别为同一个邮箱。用户池内唯一。
 * @return CreateUserInput
 */
public function withEmail($email) {
  $this->email = $email;
  return $this;
}

/**
 * @param $emailVerified bool 邮箱是否已验证
 * @return CreateUserInput
 */
public function withEmailVerified($emailVerified) {
  $this->emailVerified = $emailVerified;
  return $this;
}

/**
 * @param $phone string 手机号，用户池内唯一
 * @return CreateUserInput
 */
public function withPhone($phone) {
  $this->phone = $phone;
  return $this;
}

/**
 * @param $phoneVerified bool 手机号是否已验证
 * @return CreateUserInput
 */
public function withPhoneVerified($phoneVerified) {
  $this->phoneVerified = $phoneVerified;
  return $this;
}

/**
 * @param $unionid string unionid
 * @return CreateUserInput
 */
public function withUnionid($unionid) {
  $this->unionid = $unionid;
  return $this;
}

/**
 * @param $openid string openid
 * @return CreateUserInput
 */
public function withOpenid($openid) {
  $this->openid = $openid;
  return $this;
}

/**
 * @param $nickname string 昵称，该字段不唯一。
 * @return CreateUserInput
 */
public function withNickname($nickname) {
  $this->nickname = $nickname;
  return $this;
}

/**
 * @param $photo string 头像链接，默认为 https://usercontents.authing.cn/authing-avatar.png
 * @return CreateUserInput
 */
public function withPhoto($photo) {
  $this->photo = $photo;
  return $this;
}

/**
 * @param $password string password
 * @return CreateUserInput
 */
public function withPassword($password) {
  $this->password = $password;
  return $this;
}

/**
 * @param $registerSource string[] 注册方式
 * @return CreateUserInput
 */
public function withRegisterSource($registerSource) {
  $this->registerSource = $registerSource;
  return $this;
}

/**
 * @param $browser string browser
 * @return CreateUserInput
 */
public function withBrowser($browser) {
  $this->browser = $browser;
  return $this;
}

/**
 * @param $oauth string 用户社会化登录第三方身份提供商返回的原始用户信息，非社会化登录方式注册的用户此字段为空。
 * @return CreateUserInput
 */
public function withOauth($oauth) {
  $this->oauth = $oauth;
  return $this;
}

/**
 * @param $loginsCount int 用户累计登录次数，当你从你原有用户系统向 Authing 迁移的时候可以设置此字段。
 * @return CreateUserInput
 */
public function withLoginsCount($loginsCount) {
  $this->loginsCount = $loginsCount;
  return $this;
}

/**
 * @param $lastLogin string lastLogin
 * @return CreateUserInput
 */
public function withLastLogin($lastLogin) {
  $this->lastLogin = $lastLogin;
  return $this;
}

/**
 * @param $company string company
 * @return CreateUserInput
 */
public function withCompany($company) {
  $this->company = $company;
  return $this;
}

/**
 * @param $lastIP string lastIP
 * @return CreateUserInput
 */
public function withLastIp($lastIP) {
  $this->lastIP = $lastIP;
  return $this;
}

/**
 * @param $signedUp string 用户注册时间，当你从你原有用户系统向 Authing 迁移的时候可以设置此字段。
 * @return CreateUserInput
 */
public function withSignedUp($signedUp) {
  $this->signedUp = $signedUp;
  return $this;
}

/**
 * @param $blocked bool blocked
 * @return CreateUserInput
 */
public function withBlocked($blocked) {
  $this->blocked = $blocked;
  return $this;
}

/**
 * @param $isDeleted bool isDeleted
 * @return CreateUserInput
 */
public function withIsDeleted($isDeleted) {
  $this->isDeleted = $isDeleted;
  return $this;
}

/**
 * @param $device string device
 * @return CreateUserInput
 */
public function withDevice($device) {
  $this->device = $device;
  return $this;
}

/**
 * @param $name string name
 * @return CreateUserInput
 */
public function withName($name) {
  $this->name = $name;
  return $this;
}

/**
 * @param $givenName string givenName
 * @return CreateUserInput
 */
public function withGivenName($givenName) {
  $this->givenName = $givenName;
  return $this;
}

/**
 * @param $familyName string familyName
 * @return CreateUserInput
 */
public function withFamilyName($familyName) {
  $this->familyName = $familyName;
  return $this;
}

/**
 * @param $middleName string middleName
 * @return CreateUserInput
 */
public function withMiddleName($middleName) {
  $this->middleName = $middleName;
  return $this;
}

/**
 * @param $profile string profile
 * @return CreateUserInput
 */
public function withProfile($profile) {
  $this->profile = $profile;
  return $this;
}

/**
 * @param $preferredUsername string preferredUsername
 * @return CreateUserInput
 */
public function withPreferredUsername($preferredUsername) {
  $this->preferredUsername = $preferredUsername;
  return $this;
}

/**
 * @param $website string website
 * @return CreateUserInput
 */
public function withWebsite($website) {
  $this->website = $website;
  return $this;
}

/**
 * @param $gender string gender
 * @return CreateUserInput
 */
public function withGender($gender) {
  $this->gender = $gender;
  return $this;
}

/**
 * @param $birthdate string birthdate
 * @return CreateUserInput
 */
public function withBirthdate($birthdate) {
  $this->birthdate = $birthdate;
  return $this;
}

/**
 * @param $zoneinfo string zoneinfo
 * @return CreateUserInput
 */
public function withZoneinfo($zoneinfo) {
  $this->zoneinfo = $zoneinfo;
  return $this;
}

/**
 * @param $locale string locale
 * @return CreateUserInput
 */
public function withLocale($locale) {
  $this->locale = $locale;
  return $this;
}

/**
 * @param $address string address
 * @return CreateUserInput
 */
public function withAddress($address) {
  $this->address = $address;
  return $this;
}

/**
 * @param $formatted string formatted
 * @return CreateUserInput
 */
public function withFormatted($formatted) {
  $this->formatted = $formatted;
  return $this;
}

/**
 * @param $streetAddress string streetAddress
 * @return CreateUserInput
 */
public function withStreetAddress($streetAddress) {
  $this->streetAddress = $streetAddress;
  return $this;
}

/**
 * @param $locality string locality
 * @return CreateUserInput
 */
public function withLocality($locality) {
  $this->locality = $locality;
  return $this;
}

/**
 * @param $region string region
 * @return CreateUserInput
 */
public function withRegion($region) {
  $this->region = $region;
  return $this;
}

/**
 * @param $postalCode string postalCode
 * @return CreateUserInput
 */
public function withPostalCode($postalCode) {
  $this->postalCode = $postalCode;
  return $this;
}

/**
 * @param $country string country
 * @return CreateUserInput
 */
public function withCountry($country) {
  $this->country = $country;
  return $this;
}

/**
 * @param $externalId string externalId
 * @return CreateUserInput
 */
public function withExternalId($externalId) {
  $this->externalId = $externalId;
  return $this;
}
}
    

/**
 * UpdateUserInput
 */
class UpdateUserInput {
  /**
   * 邮箱。直接修改用户邮箱需要管理员权限，普通用户修改邮箱请使用 **updateEmail** 接口。
   * Optional
   *
   *
   */
  public string $email;

  /**
   * Optional
   *
   *
   */
  public string $unionid;

  /**
   * Optional
   *
   *
   */
  public string $openid;

  /**
   * 邮箱是否已验证。直接修改 emailVerified 需要管理员权限。
   * Optional
   *
   *
   */
  public bool $emailVerified;

  /**
   * 手机号。直接修改用户手机号需要管理员权限，普通用户修改邮箱请使用 **updatePhone** 接口。
   * Optional
   *
   *
   */
  public string $phone;

  /**
   * 手机号是否已验证。直接修改 **phoneVerified** 需要管理员权限。
   * Optional
   *
   *
   */
  public bool $phoneVerified;

  /**
   * 用户名，用户池内唯一
   * Optional
   *
   *
   */
  public string $username;

  /**
   * 昵称，该字段不唯一。
   * Optional
   *
   *
   */
  public string $nickname;

  /**
   * 密码。直接修改用户密码需要管理员权限，普通用户修改邮箱请使用 **updatePassword** 接口。
   * Optional
   *
   *
   */
  public string $password;

  /**
   * 头像链接，默认为 https://usercontents.authing.cn/authing-avatar.png
   * Optional
   *
   *
   */
  public string $photo;

  /**
   * 注册方式
   * Optional
   *
   *
   */
  public string $company;

  /**
   * Optional
   *
   *
   */
  public string $browser;

  /**
   * Optional
   *
   *
   */
  public string $device;

  /**
   * Optional
   *
   *
   */
  public string $oauth;

  /**
   * Optional
   *
   *
   */
  public string $tokenExpiredAt;

  /**
   * 用户累计登录次数，当你从你原有用户系统向 Authing 迁移的时候可以设置此字段。
   * Optional
   *
   *
   */
  public int $loginsCount;

  /**
   * Optional
   *
   *
   */
  public string $lastLogin;

  /**
   * Optional
   *
   *
   */
  public string $lastIP;

  /**
   * 用户注册时间，当你从你原有用户系统向 Authing 迁移的时候可以设置此字段。
   * Optional
   *
   *
   */
  public bool $blocked;

  /**
   * Optional
   *
   *
   */
  public string $name;

  /**
   * Optional
   *
   *
   */
  public string $givenName;

  /**
   * Optional
   *
   *
   */
  public string $familyName;

  /**
   * Optional
   *
   *
   */
  public string $middleName;

  /**
   * Optional
   *
   *
   */
  public string $profile;

  /**
   * Optional
   *
   *
   */
  public string $preferredUsername;

  /**
   * Optional
   *
   *
   */
  public string $website;

  /**
   * Optional
   *
   *
   */
  public string $gender;

  /**
   * Optional
   *
   *
   */
  public string $birthdate;

  /**
   * Optional
   *
   *
   */
  public string $zoneinfo;

  /**
   * Optional
   *
   *
   */
  public string $locale;

  /**
   * Optional
   *
   *
   */
  public string $address;

  /**
   * Optional
   *
   *
   */
  public string $formatted;

  /**
   * Optional
   *
   *
   */
  public string $streetAddress;

  /**
   * Optional
   *
   *
   */
  public string $locality;

  /**
   * Optional
   *
   *
   */
  public string $region;

  /**
   * Optional
   *
   *
   */
  public string $postalCode;

  /**
   * Optional
   *
   *
   */
  public string $city;

  /**
   * Optional
   *
   *
   */
  public string $province;

  /**
   * Optional
   *
   *
   */
  public string $country;

  /**
   * Optional
   *
   *
   */
  public string $externalId;


public function __construct() {

}

/**
 * @param $email string 邮箱。直接修改用户邮箱需要管理员权限，普通用户修改邮箱请使用 **updateEmail** 接口。
 * @return UpdateUserInput
 */
public function withEmail($email) {
  $this->email = $email;
  return $this;
}

/**
 * @param $unionid string unionid
 * @return UpdateUserInput
 */
public function withUnionid($unionid) {
  $this->unionid = $unionid;
  return $this;
}

/**
 * @param $openid string openid
 * @return UpdateUserInput
 */
public function withOpenid($openid) {
  $this->openid = $openid;
  return $this;
}

/**
 * @param $emailVerified bool 邮箱是否已验证。直接修改 emailVerified 需要管理员权限。
 * @return UpdateUserInput
 */
public function withEmailVerified($emailVerified) {
  $this->emailVerified = $emailVerified;
  return $this;
}

/**
 * @param $phone string 手机号。直接修改用户手机号需要管理员权限，普通用户修改邮箱请使用 **updatePhone** 接口。
 * @return UpdateUserInput
 */
public function withPhone($phone) {
  $this->phone = $phone;
  return $this;
}

/**
 * @param $phoneVerified bool 手机号是否已验证。直接修改 **phoneVerified** 需要管理员权限。
 * @return UpdateUserInput
 */
public function withPhoneVerified($phoneVerified) {
  $this->phoneVerified = $phoneVerified;
  return $this;
}

/**
 * @param $username string 用户名，用户池内唯一
 * @return UpdateUserInput
 */
public function withUsername($username) {
  $this->username = $username;
  return $this;
}

/**
 * @param $nickname string 昵称，该字段不唯一。
 * @return UpdateUserInput
 */
public function withNickname($nickname) {
  $this->nickname = $nickname;
  return $this;
}

/**
 * @param $password string 密码。直接修改用户密码需要管理员权限，普通用户修改邮箱请使用 **updatePassword** 接口。
 * @return UpdateUserInput
 */
public function withPassword($password) {
  $this->password = $password;
  return $this;
}

/**
 * @param $photo string 头像链接，默认为 https://usercontents.authing.cn/authing-avatar.png
 * @return UpdateUserInput
 */
public function withPhoto($photo) {
  $this->photo = $photo;
  return $this;
}

/**
 * @param $company string 注册方式
 * @return UpdateUserInput
 */
public function withCompany($company) {
  $this->company = $company;
  return $this;
}

/**
 * @param $browser string browser
 * @return UpdateUserInput
 */
public function withBrowser($browser) {
  $this->browser = $browser;
  return $this;
}

/**
 * @param $device string device
 * @return UpdateUserInput
 */
public function withDevice($device) {
  $this->device = $device;
  return $this;
}

/**
 * @param $oauth string oauth
 * @return UpdateUserInput
 */
public function withOauth($oauth) {
  $this->oauth = $oauth;
  return $this;
}

/**
 * @param $tokenExpiredAt string tokenExpiredAt
 * @return UpdateUserInput
 */
public function withTokenExpiredAt($tokenExpiredAt) {
  $this->tokenExpiredAt = $tokenExpiredAt;
  return $this;
}

/**
 * @param $loginsCount int 用户累计登录次数，当你从你原有用户系统向 Authing 迁移的时候可以设置此字段。
 * @return UpdateUserInput
 */
public function withLoginsCount($loginsCount) {
  $this->loginsCount = $loginsCount;
  return $this;
}

/**
 * @param $lastLogin string lastLogin
 * @return UpdateUserInput
 */
public function withLastLogin($lastLogin) {
  $this->lastLogin = $lastLogin;
  return $this;
}

/**
 * @param $lastIP string lastIP
 * @return UpdateUserInput
 */
public function withLastIp($lastIP) {
  $this->lastIP = $lastIP;
  return $this;
}

/**
 * @param $blocked bool 用户注册时间，当你从你原有用户系统向 Authing 迁移的时候可以设置此字段。
 * @return UpdateUserInput
 */
public function withBlocked($blocked) {
  $this->blocked = $blocked;
  return $this;
}

/**
 * @param $name string name
 * @return UpdateUserInput
 */
public function withName($name) {
  $this->name = $name;
  return $this;
}

/**
 * @param $givenName string givenName
 * @return UpdateUserInput
 */
public function withGivenName($givenName) {
  $this->givenName = $givenName;
  return $this;
}

/**
 * @param $familyName string familyName
 * @return UpdateUserInput
 */
public function withFamilyName($familyName) {
  $this->familyName = $familyName;
  return $this;
}

/**
 * @param $middleName string middleName
 * @return UpdateUserInput
 */
public function withMiddleName($middleName) {
  $this->middleName = $middleName;
  return $this;
}

/**
 * @param $profile string profile
 * @return UpdateUserInput
 */
public function withProfile($profile) {
  $this->profile = $profile;
  return $this;
}

/**
 * @param $preferredUsername string preferredUsername
 * @return UpdateUserInput
 */
public function withPreferredUsername($preferredUsername) {
  $this->preferredUsername = $preferredUsername;
  return $this;
}

/**
 * @param $website string website
 * @return UpdateUserInput
 */
public function withWebsite($website) {
  $this->website = $website;
  return $this;
}

/**
 * @param $gender string gender
 * @return UpdateUserInput
 */
public function withGender($gender) {
  $this->gender = $gender;
  return $this;
}

/**
 * @param $birthdate string birthdate
 * @return UpdateUserInput
 */
public function withBirthdate($birthdate) {
  $this->birthdate = $birthdate;
  return $this;
}

/**
 * @param $zoneinfo string zoneinfo
 * @return UpdateUserInput
 */
public function withZoneinfo($zoneinfo) {
  $this->zoneinfo = $zoneinfo;
  return $this;
}

/**
 * @param $locale string locale
 * @return UpdateUserInput
 */
public function withLocale($locale) {
  $this->locale = $locale;
  return $this;
}

/**
 * @param $address string address
 * @return UpdateUserInput
 */
public function withAddress($address) {
  $this->address = $address;
  return $this;
}

/**
 * @param $formatted string formatted
 * @return UpdateUserInput
 */
public function withFormatted($formatted) {
  $this->formatted = $formatted;
  return $this;
}

/**
 * @param $streetAddress string streetAddress
 * @return UpdateUserInput
 */
public function withStreetAddress($streetAddress) {
  $this->streetAddress = $streetAddress;
  return $this;
}

/**
 * @param $locality string locality
 * @return UpdateUserInput
 */
public function withLocality($locality) {
  $this->locality = $locality;
  return $this;
}

/**
 * @param $region string region
 * @return UpdateUserInput
 */
public function withRegion($region) {
  $this->region = $region;
  return $this;
}

/**
 * @param $postalCode string postalCode
 * @return UpdateUserInput
 */
public function withPostalCode($postalCode) {
  $this->postalCode = $postalCode;
  return $this;
}

/**
 * @param $city string city
 * @return UpdateUserInput
 */
public function withCity($city) {
  $this->city = $city;
  return $this;
}

/**
 * @param $province string province
 * @return UpdateUserInput
 */
public function withProvince($province) {
  $this->province = $province;
  return $this;
}

/**
 * @param $country string country
 * @return UpdateUserInput
 */
public function withCountry($country) {
  $this->country = $country;
  return $this;
}

/**
 * @param $externalId string externalId
 * @return UpdateUserInput
 */
public function withExternalId($externalId) {
  $this->externalId = $externalId;
  return $this;
}
}
    

/**
 * UpdateUserpoolInput
 */
class UpdateUserpoolInput {
  /**
   * Optional
   *
   *
   */
  public string $name;

  /**
   * Optional
   *
   *
   */
  public string $logo;

  /**
   * Optional
   *
   *
   */
  public string $domain;

  /**
   * Optional
   *
   *
   */
  public string $description;

  /**
   * Optional
   * 
   * @var string[]
   * 
   */
  public array $userpoolTypes;

  /**
   * Optional
   *
   *
   */
  public bool $emailVerifiedDefault;

  /**
   * Optional
   *
   *
   */
  public bool $sendWelcomeEmail;

  /**
   * Optional
   *
   *
   */
  public bool $registerDisabled;

  /**
   * Optional
   *
   *
   */
  public bool $appSsoEnabled;

  /**
   * Optional
   *
   *
   */
  public string $allowedOrigins;

  /**
   * Optional
   *
   *
   */
  public int $tokenExpiresAfter;

  /**
   * Optional
   *
   *
   */
  public \Authing\Types\FrequentRegisterCheckConfigInput $frequentRegisterCheck;

  /**
   * Optional
   *
   *
   */
  public \Authing\Types\LoginFailCheckConfigInput $loginFailCheck;

  /**
   * Optional
   *
   *
   */
  public \Authing\Types\ChangePhoneStrategyInput $changePhoneStrategy;

  /**
   * Optional
   *
   *
   */
  public \Authing\Types\ChangeEmailStrategyInput $changeEmailStrategy;

  /**
   * Optional
   *
   *
   */
  public \Authing\Types\QrcodeLoginStrategyInput $qrcodeLoginStrategy;

  /**
   * Optional
   *
   *
   */
  public \Authing\Types\App2WxappLoginStrategyInput $app2WxappLoginStrategy;

  /**
   * Optional
   *
   *
   */
  public \Authing\Types\RegisterWhiteListConfigInput $whitelist;

  /**
   * 自定义短信服务商配置
   * Optional
   *
   *
   */
  public \Authing\Types\CustomSmsProviderInput $customSMSProvider;

  /**
   * 是否要求邮箱必须验证才能登录（如果是通过邮箱登录的话）
   * Optional
   *
   *
   */
  public bool $loginRequireEmailVerified;

  /**
   * Optional
   *
   *
   */
  public int $verifyCodeLength;


public function __construct() {

}

/**
 * @param $name string name
 * @return UpdateUserpoolInput
 */
public function withName($name) {
  $this->name = $name;
  return $this;
}

/**
 * @param $logo string logo
 * @return UpdateUserpoolInput
 */
public function withLogo($logo) {
  $this->logo = $logo;
  return $this;
}

/**
 * @param $domain string domain
 * @return UpdateUserpoolInput
 */
public function withDomain($domain) {
  $this->domain = $domain;
  return $this;
}

/**
 * @param $description string description
 * @return UpdateUserpoolInput
 */
public function withDescription($description) {
  $this->description = $description;
  return $this;
}

/**
 * @param $userpoolTypes string[] userpoolTypes
 * @return UpdateUserpoolInput
 */
public function withUserpoolTypes($userpoolTypes) {
  $this->userpoolTypes = $userpoolTypes;
  return $this;
}

/**
 * @param $emailVerifiedDefault bool emailVerifiedDefault
 * @return UpdateUserpoolInput
 */
public function withEmailVerifiedDefault($emailVerifiedDefault) {
  $this->emailVerifiedDefault = $emailVerifiedDefault;
  return $this;
}

/**
 * @param $sendWelcomeEmail bool sendWelcomeEmail
 * @return UpdateUserpoolInput
 */
public function withSendWelcomeEmail($sendWelcomeEmail) {
  $this->sendWelcomeEmail = $sendWelcomeEmail;
  return $this;
}

/**
 * @param $registerDisabled bool registerDisabled
 * @return UpdateUserpoolInput
 */
public function withRegisterDisabled($registerDisabled) {
  $this->registerDisabled = $registerDisabled;
  return $this;
}

/**
 * @param $appSsoEnabled bool appSsoEnabled
 * @return UpdateUserpoolInput
 */
public function withAppSsoEnabled($appSsoEnabled) {
  $this->appSsoEnabled = $appSsoEnabled;
  return $this;
}

/**
 * @param $allowedOrigins string allowedOrigins
 * @return UpdateUserpoolInput
 */
public function withAllowedOrigins($allowedOrigins) {
  $this->allowedOrigins = $allowedOrigins;
  return $this;
}

/**
 * @param $tokenExpiresAfter int tokenExpiresAfter
 * @return UpdateUserpoolInput
 */
public function withTokenExpiresAfter($tokenExpiresAfter) {
  $this->tokenExpiresAfter = $tokenExpiresAfter;
  return $this;
}

/**
 * @param $frequentRegisterCheck FrequentRegisterCheckConfigInput frequentRegisterCheck
 * @return UpdateUserpoolInput
 */
public function withFrequentRegisterCheck($frequentRegisterCheck) {
  $this->frequentRegisterCheck = $frequentRegisterCheck;
  return $this;
}

/**
 * @param $loginFailCheck LoginFailCheckConfigInput loginFailCheck
 * @return UpdateUserpoolInput
 */
public function withLoginFailCheck($loginFailCheck) {
  $this->loginFailCheck = $loginFailCheck;
  return $this;
}

/**
 * @param $changePhoneStrategy ChangePhoneStrategyInput changePhoneStrategy
 * @return UpdateUserpoolInput
 */
public function withChangePhoneStrategy($changePhoneStrategy) {
  $this->changePhoneStrategy = $changePhoneStrategy;
  return $this;
}

/**
 * @param $changeEmailStrategy ChangeEmailStrategyInput changeEmailStrategy
 * @return UpdateUserpoolInput
 */
public function withChangeEmailStrategy($changeEmailStrategy) {
  $this->changeEmailStrategy = $changeEmailStrategy;
  return $this;
}

/**
 * @param $qrcodeLoginStrategy QrcodeLoginStrategyInput qrcodeLoginStrategy
 * @return UpdateUserpoolInput
 */
public function withQrcodeLoginStrategy($qrcodeLoginStrategy) {
  $this->qrcodeLoginStrategy = $qrcodeLoginStrategy;
  return $this;
}

/**
 * @param $app2WxappLoginStrategy App2WxappLoginStrategyInput app2WxappLoginStrategy
 * @return UpdateUserpoolInput
 */
public function withApp2WxappLoginStrategy($app2WxappLoginStrategy) {
  $this->app2WxappLoginStrategy = $app2WxappLoginStrategy;
  return $this;
}

/**
 * @param $whitelist RegisterWhiteListConfigInput whitelist
 * @return UpdateUserpoolInput
 */
public function withWhitelist($whitelist) {
  $this->whitelist = $whitelist;
  return $this;
}

/**
 * @param $customSMSProvider CustomSmsProviderInput 自定义短信服务商配置
 * @return UpdateUserpoolInput
 */
public function withCustomSmsProvider($customSMSProvider) {
  $this->customSMSProvider = $customSMSProvider;
  return $this;
}

/**
 * @param $loginRequireEmailVerified bool 是否要求邮箱必须验证才能登录（如果是通过邮箱登录的话）
 * @return UpdateUserpoolInput
 */
public function withLoginRequireEmailVerified($loginRequireEmailVerified) {
  $this->loginRequireEmailVerified = $loginRequireEmailVerified;
  return $this;
}

/**
 * @param $verifyCodeLength int verifyCodeLength
 * @return UpdateUserpoolInput
 */
public function withVerifyCodeLength($verifyCodeLength) {
  $this->verifyCodeLength = $verifyCodeLength;
  return $this;
}
}
    

/**
 * FrequentRegisterCheckConfigInput
 */
class FrequentRegisterCheckConfigInput {
  /**
   * Optional
   *
   *
   */
  public int $timeInterval;

  /**
   * Optional
   *
   *
   */
  public int $limit;

  /**
   * Optional
   *
   *
   */
  public bool $enabled;


public function __construct() {

}

/**
 * @param $timeInterval int timeInterval
 * @return FrequentRegisterCheckConfigInput
 */
public function withTimeInterval($timeInterval) {
  $this->timeInterval = $timeInterval;
  return $this;
}

/**
 * @param $limit int limit
 * @return FrequentRegisterCheckConfigInput
 */
public function withLimit($limit) {
  $this->limit = $limit;
  return $this;
}

/**
 * @param $enabled bool enabled
 * @return FrequentRegisterCheckConfigInput
 */
public function withEnabled($enabled) {
  $this->enabled = $enabled;
  return $this;
}
}
    

/**
 * LoginFailCheckConfigInput
 */
class LoginFailCheckConfigInput {
  /**
   * Optional
   *
   *
   */
  public int $timeInterval;

  /**
   * Optional
   *
   *
   */
  public int $limit;

  /**
   * Optional
   *
   *
   */
  public bool $enabled;


public function __construct() {

}

/**
 * @param $timeInterval int timeInterval
 * @return LoginFailCheckConfigInput
 */
public function withTimeInterval($timeInterval) {
  $this->timeInterval = $timeInterval;
  return $this;
}

/**
 * @param $limit int limit
 * @return LoginFailCheckConfigInput
 */
public function withLimit($limit) {
  $this->limit = $limit;
  return $this;
}

/**
 * @param $enabled bool enabled
 * @return LoginFailCheckConfigInput
 */
public function withEnabled($enabled) {
  $this->enabled = $enabled;
  return $this;
}
}
    

/**
 * ChangePhoneStrategyInput
 */
class ChangePhoneStrategyInput {
  /**
   * Optional
   *
   *
   */
  public bool $verifyOldPhone;


public function __construct() {

}

/**
 * @param $verifyOldPhone bool verifyOldPhone
 * @return ChangePhoneStrategyInput
 */
public function withVerifyOldPhone($verifyOldPhone) {
  $this->verifyOldPhone = $verifyOldPhone;
  return $this;
}
}
    

/**
 * ChangeEmailStrategyInput
 */
class ChangeEmailStrategyInput {
  /**
   * Optional
   *
   *
   */
  public bool $verifyOldEmail;


public function __construct() {

}

/**
 * @param $verifyOldEmail bool verifyOldEmail
 * @return ChangeEmailStrategyInput
 */
public function withVerifyOldEmail($verifyOldEmail) {
  $this->verifyOldEmail = $verifyOldEmail;
  return $this;
}
}
    

/**
 * QrcodeLoginStrategyInput
 */
class QrcodeLoginStrategyInput {
  /**
   * Optional
   *
   *
   */
  public int $qrcodeExpiresAfter;

  /**
   * Optional
   *
   *
   */
  public bool $returnFullUserInfo;

  /**
   * Optional
   *
   *
   */
  public bool $allowExchangeUserInfoFromBrowser;

  /**
   * Optional
   *
   *
   */
  public int $ticketExpiresAfter;


public function __construct() {

}

/**
 * @param $qrcodeExpiresAfter int qrcodeExpiresAfter
 * @return QrcodeLoginStrategyInput
 */
public function withQrcodeExpiresAfter($qrcodeExpiresAfter) {
  $this->qrcodeExpiresAfter = $qrcodeExpiresAfter;
  return $this;
}

/**
 * @param $returnFullUserInfo bool returnFullUserInfo
 * @return QrcodeLoginStrategyInput
 */
public function withReturnFullUserInfo($returnFullUserInfo) {
  $this->returnFullUserInfo = $returnFullUserInfo;
  return $this;
}

/**
 * @param $allowExchangeUserInfoFromBrowser bool allowExchangeUserInfoFromBrowser
 * @return QrcodeLoginStrategyInput
 */
public function withAllowExchangeUserInfoFromBrowser($allowExchangeUserInfoFromBrowser) {
  $this->allowExchangeUserInfoFromBrowser = $allowExchangeUserInfoFromBrowser;
  return $this;
}

/**
 * @param $ticketExpiresAfter int ticketExpiresAfter
 * @return QrcodeLoginStrategyInput
 */
public function withTicketExpiresAfter($ticketExpiresAfter) {
  $this->ticketExpiresAfter = $ticketExpiresAfter;
  return $this;
}
}
    

/**
 * App2WxappLoginStrategyInput
 */
class App2WxappLoginStrategyInput {
  /**
   * Optional
   *
   *
   */
  public int $ticketExpriresAfter;

  /**
   * Optional
   *
   *
   */
  public bool $ticketExchangeUserInfoNeedSecret;


public function __construct() {

}

/**
 * @param $ticketExpriresAfter int ticketExpriresAfter
 * @return App2WxappLoginStrategyInput
 */
public function withTicketExpriresAfter($ticketExpriresAfter) {
  $this->ticketExpriresAfter = $ticketExpriresAfter;
  return $this;
}

/**
 * @param $ticketExchangeUserInfoNeedSecret bool ticketExchangeUserInfoNeedSecret
 * @return App2WxappLoginStrategyInput
 */
public function withTicketExchangeUserInfoNeedSecret($ticketExchangeUserInfoNeedSecret) {
  $this->ticketExchangeUserInfoNeedSecret = $ticketExchangeUserInfoNeedSecret;
  return $this;
}
}
    

/**
 * RegisterWhiteListConfigInput
 */
class RegisterWhiteListConfigInput {
  /**
   * Optional
   *
   *
   */
  public bool $phoneEnabled;

  /**
   * Optional
   *
   *
   */
  public bool $emailEnabled;

  /**
   * Optional
   *
   *
   */
  public bool $usernameEnabled;


public function __construct() {

}

/**
 * @param $phoneEnabled bool phoneEnabled
 * @return RegisterWhiteListConfigInput
 */
public function withPhoneEnabled($phoneEnabled) {
  $this->phoneEnabled = $phoneEnabled;
  return $this;
}

/**
 * @param $emailEnabled bool emailEnabled
 * @return RegisterWhiteListConfigInput
 */
public function withEmailEnabled($emailEnabled) {
  $this->emailEnabled = $emailEnabled;
  return $this;
}

/**
 * @param $usernameEnabled bool usernameEnabled
 * @return RegisterWhiteListConfigInput
 */
public function withUsernameEnabled($usernameEnabled) {
  $this->usernameEnabled = $usernameEnabled;
  return $this;
}
}
    

/**
 * CustomSmsProviderInput
 */
class CustomSmsProviderInput {
  /**
   * Optional
   *
   *
   */
  public bool $enabled;

  /**
   * Optional
   *
   *
   */
  public string $provider;

  /**
   * Optional
   *
   *
   */
  public string $config;


public function __construct() {

}

/**
 * @param $enabled bool enabled
 * @return CustomSmsProviderInput
 */
public function withEnabled($enabled) {
  $this->enabled = $enabled;
  return $this;
}

/**
 * @param $provider string provider
 * @return CustomSmsProviderInput
 */
public function withProvider($provider) {
  $this->provider = $provider;
  return $this;
}

/**
 * @param $config string config
 * @return CustomSmsProviderInput
 */
public function withConfig($config) {
  $this->config = $config;
  return $this;
}
}
    

class RefreshAccessTokenRes {
  /**
   * Optional
   *
   *
   */
  public string $accessToken;

  /**
   * Optional
   *
   *
   */
  public int $exp;

  /**
   * Optional
   *
   *
   */
  public int $iat;
}

/**
 * 批量删除返回结果
 */
class BatchOperationResult {
  /**
   * 删除成功的个数
   * Required
   *
   *
   */
  public int $succeedCount;

  /**
   * 删除失败的个数
   * Required
   *
   *
   */
  public int $failedCount;

  /**
   * Optional
   *
   *
   */
  public string $message;

  /**
   * Optional
   * 
   * @var string[]
   * 
   */
  public array $errors;
}

class KeyValuePair {
  /**
   * Required
   *
   *
   */
  public string $key;

  /**
   * Required
   *
   *
   */
  public string $value;
}

/**
 * SocialConnectionFieldInput
 */
class SocialConnectionFieldInput {
  /**
   * Optional
   *
   *
   */
  public string $key;

  /**
   * Optional
   *
   *
   */
  public string $label;

  /**
   * Optional
   *
   *
   */
  public string $type;

  /**
   * Optional
   *
   *
   */
  public string $placeholder;

  /**
   * Optional
   * 
   * @var SocialConnectionFieldInput[]
   * 
   */
  public array $children;


public function __construct() {

}

/**
 * @param $key string key
 * @return SocialConnectionFieldInput
 */
public function withKey($key) {
  $this->key = $key;
  return $this;
}

/**
 * @param $label string label
 * @return SocialConnectionFieldInput
 */
public function withLabel($label) {
  $this->label = $label;
  return $this;
}

/**
 * @param $type string type
 * @return SocialConnectionFieldInput
 */
public function withType($type) {
  $this->type = $type;
  return $this;
}

/**
 * @param $placeholder string placeholder
 * @return SocialConnectionFieldInput
 */
public function withPlaceholder($placeholder) {
  $this->placeholder = $placeholder;
  return $this;
}

/**
 * @param $children SocialConnectionFieldInput[] children
 * @return SocialConnectionFieldInput
 */
public function withChildren($children) {
  $this->children = $children;
  return $this;
}
}
    

/**
 * CreateSocialConnectionInput
 */
class CreateSocialConnectionInput {
  /**
   * Optional
   *
   *
   */
  public string $description;

  /**
   * Optional
   * 
   * @var SocialConnectionFieldInput[]
   * 
   */
  public array $fields;

/**
 * @param $provider string provider
 * @param $name string name
 * @param $logo string logo
 */

public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $provider,
    /**
     * Required
     *
     * @var string
     */
    public $name,
    /**
     * Required
     *
     * @var string
     */
    public $logo
)
{
}

/**
 * @param $description string description
 * @return CreateSocialConnectionInput
 */
public function withDescription($description) {
  $this->description = $description;
  return $this;
}

/**
 * @param $fields SocialConnectionFieldInput[] fields
 * @return CreateSocialConnectionInput
 */
public function withFields($fields) {
  $this->fields = $fields;
  return $this;
}
}
    

    
class AddMemberResponse {

    public \Authing\Types\Node $addMember;
}
    
class AddMemberParam {

    /**
     * Optional
     */
    public int $page;

    /**
     * Optional
     */
    public int $limit;

    /**
     * Optional
     */
    public \Authing\Types\SortByEnum $sortBy;

    /**
     * Optional
     */
    public bool $includeChildrenNodes;

    /**
     * Optional
     */
    public string $nodeId;

    /**
     * Optional
     */
    public string $orgId;

    /**
     * Optional
     */
    public string $nodeCode;

    /**
     * Optional
     */
    public bool $isLeader;

/**
 * @param $userIds string[]
 */
public function __construct(
    /**
     * Required
     *
     * @var string[]
     */
    public $userIds
)
{
}

/**
 * @param $page int
 * @return AddMemberParam
 */
public function withPage($page) {
  $this->page = $page;
  return $this;
}

/**
 * @param $limit int
 * @return AddMemberParam
 */
public function withLimit($limit) {
  $this->limit = $limit;
  return $this;
}

/**
 * @param $sortBy SortByEnum
 * @return AddMemberParam
 */
public function withSortBy($sortBy) {
  $this->sortBy = $sortBy;
  return $this;
}

/**
 * @param $includeChildrenNodes bool
 * @return AddMemberParam
 */
public function withIncludeChildrenNodes($includeChildrenNodes) {
  $this->includeChildrenNodes = $includeChildrenNodes;
  return $this;
}

/**
 * @param $nodeId string
 * @return AddMemberParam
 */
public function withNodeId($nodeId) {
  $this->nodeId = $nodeId;
  return $this;
}

/**
 * @param $orgId string
 * @return AddMemberParam
 */
public function withOrgId($orgId) {
  $this->orgId = $orgId;
  return $this;
}

/**
 * @param $nodeCode string
 * @return AddMemberParam
 */
public function withNodeCode($nodeCode) {
  $this->nodeCode = $nodeCode;
  return $this;
}

/**
 * @param $isLeader bool
 * @return AddMemberParam
 */
public function withIsLeader($isLeader) {
  $this->isLeader = $isLeader;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::AddMemberDocument,
        "operationName" => "addMember",
        "variables" => $this
      ];
    }

    const AddMemberDocument = <<<EOF
mutation addMember(\$page: Int, \$limit: Int, \$sortBy: SortByEnum, \$includeChildrenNodes: Boolean, \$nodeId: String, \$orgId: String, \$nodeCode: String, \$userIds: [String!]!, \$isLeader: Boolean) {
  addMember(nodeId: \$nodeId, orgId: \$orgId, nodeCode: \$nodeCode, userIds: \$userIds, isLeader: \$isLeader) {
    id
    orgId
    name
    nameI18n
    description
    descriptionI18n
    order
    code
    root
    depth
    path
    createdAt
    updatedAt
    children
    users(page: \$page, limit: \$limit, sortBy: \$sortBy, includeChildrenNodes: \$includeChildrenNodes) {
      totalCount
      list {
        id
        arn
        userPoolId
        username
        status
        email
        emailVerified
        phone
        phoneVerified
        unionid
        openid
        nickname
        registerSource
        photo
        password
        oauth
        token
        tokenExpiredAt
        loginsCount
        lastLogin
        lastIP
        signedUp
        blocked
        isDeleted
        device
        browser
        company
        name
        givenName
        familyName
        middleName
        profile
        preferredUsername
        website
        gender
        birthdate
        zoneinfo
        locale
        address
        formatted
        streetAddress
        locality
        region
        postalCode
        city
        province
        country
        createdAt
        updatedAt
        externalId
      }
    }
  }
}
EOF;
}
    

    
class AddNodeResponse {

    public \Authing\Types\Org $addNode;
}
    
class AddNodeParam {

    /**
     * Optional
     */
    public string $parentNodeId;

    /**
     * Optional
     */
    public string $nameI18n;

    /**
     * Optional
     */
    public string $description;

    /**
     * Optional
     */
    public string $descriptionI18n;

    /**
     * Optional
     */
    public int $order;

    /**
     * Optional
     */
    public string $code;

/**
 * @param $orgId string
 * @param $name string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $orgId,
    /**
     * Required
     *
     * @var string
     */
    public $name
)
{
}

/**
 * @param $parentNodeId string
 * @return AddNodeParam
 */
public function withParentNodeId($parentNodeId) {
  $this->parentNodeId = $parentNodeId;
  return $this;
}

/**
 * @param $nameI18n string
 * @return AddNodeParam
 */
public function withNameI18n($nameI18n) {
  $this->nameI18n = $nameI18n;
  return $this;
}

/**
 * @param $description string
 * @return AddNodeParam
 */
public function withDescription($description) {
  $this->description = $description;
  return $this;
}

/**
 * @param $descriptionI18n string
 * @return AddNodeParam
 */
public function withDescriptionI18n($descriptionI18n) {
  $this->descriptionI18n = $descriptionI18n;
  return $this;
}

/**
 * @param $order int
 * @return AddNodeParam
 */
public function withOrder($order) {
  $this->order = $order;
  return $this;
}

/**
 * @param $code string
 * @return AddNodeParam
 */
public function withCode($code) {
  $this->code = $code;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::AddNodeDocument,
        "operationName" => "addNode",
        "variables" => $this
      ];
    }

    const AddNodeDocument = <<<EOF
mutation addNode(\$orgId: String!, \$parentNodeId: String, \$name: String!, \$nameI18n: String, \$description: String, \$descriptionI18n: String, \$order: Int, \$code: String) {
  addNode(orgId: \$orgId, parentNodeId: \$parentNodeId, name: \$name, nameI18n: \$nameI18n, description: \$description, descriptionI18n: \$descriptionI18n, order: \$order, code: \$code) {
    id
    rootNode {
      id
      orgId
      name
      nameI18n
      description
      descriptionI18n
      order
      code
      root
      depth
      path
      createdAt
      updatedAt
      children
    }
    nodes {
      id
      orgId
      name
      nameI18n
      description
      descriptionI18n
      order
      code
      root
      depth
      path
      createdAt
      updatedAt
      children
    }
  }
}
EOF;
}
    

    
class AddNodeV2Response {

    public \Authing\Types\Node $addNodeV2;
}
    
class AddNodeV2Param {

    /**
     * Optional
     */
    public string $parentNodeId;

    /**
     * Optional
     */
    public string $nameI18n;

    /**
     * Optional
     */
    public string $description;

    /**
     * Optional
     */
    public string $descriptionI18n;

    /**
     * Optional
     */
    public int $order;

    /**
     * Optional
     */
    public string $code;

/**
 * @param $orgId string
 * @param $name string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $orgId,
    /**
     * Required
     *
     * @var string
     */
    public $name
)
{
}

/**
 * @param $parentNodeId string
 * @return AddNodeV2Param
 */
public function withParentNodeId($parentNodeId) {
  $this->parentNodeId = $parentNodeId;
  return $this;
}

/**
 * @param $nameI18n string
 * @return AddNodeV2Param
 */
public function withNameI18n($nameI18n) {
  $this->nameI18n = $nameI18n;
  return $this;
}

/**
 * @param $description string
 * @return AddNodeV2Param
 */
public function withDescription($description) {
  $this->description = $description;
  return $this;
}

/**
 * @param $descriptionI18n string
 * @return AddNodeV2Param
 */
public function withDescriptionI18n($descriptionI18n) {
  $this->descriptionI18n = $descriptionI18n;
  return $this;
}

/**
 * @param $order int
 * @return AddNodeV2Param
 */
public function withOrder($order) {
  $this->order = $order;
  return $this;
}

/**
 * @param $code string
 * @return AddNodeV2Param
 */
public function withCode($code) {
  $this->code = $code;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::AddNodeV2Document,
        "operationName" => "addNodeV2",
        "variables" => $this
      ];
    }

    const AddNodeV2Document = <<<EOF
mutation addNodeV2(\$orgId: String!, \$parentNodeId: String, \$name: String!, \$nameI18n: String, \$description: String, \$descriptionI18n: String, \$order: Int, \$code: String) {
  addNodeV2(orgId: \$orgId, parentNodeId: \$parentNodeId, name: \$name, nameI18n: \$nameI18n, description: \$description, descriptionI18n: \$descriptionI18n, order: \$order, code: \$code) {
    id
    orgId
    name
    nameI18n
    description
    descriptionI18n
    order
    code
    root
    depth
    path
    createdAt
    updatedAt
    children
  }
}
EOF;
}
    

    
class AddPolicyAssignmentsResponse {

    public \Authing\Types\CommonMessage $addPolicyAssignments;
}
    
class AddPolicyAssignmentsParam {

    /**
     * Optional
     * 
     * @var string[]
     */
    public array $targetIdentifiers;

    /**
     * Optional
     */
    public bool $inheritByChildren;

    /**
     * Optional
     */
    public string $namespace;

/**
 * @param $policies string[]
 * @param $targetType PolicyAssignmentTargetType
 */
public function __construct(
    /**
     * Required
     *
     * @var string[]
     */
    public $policies,
    /**
     * Required
     *
     * @var PolicyAssignmentTargetType
     */
    public $targetType
)
{
}

/**
 * @param $targetIdentifiers string[]
 * @return AddPolicyAssignmentsParam
 */
public function withTargetIdentifiers($targetIdentifiers) {
  $this->targetIdentifiers = $targetIdentifiers;
  return $this;
}

/**
 * @param $inheritByChildren bool
 * @return AddPolicyAssignmentsParam
 */
public function withInheritByChildren($inheritByChildren) {
  $this->inheritByChildren = $inheritByChildren;
  return $this;
}

/**
 * @param $namespace string
 * @return AddPolicyAssignmentsParam
 */
public function withNamespace($namespace) {
  $this->namespace = $namespace;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::AddPolicyAssignmentsDocument,
        "operationName" => "addPolicyAssignments",
        "variables" => $this
      ];
    }

    const AddPolicyAssignmentsDocument = <<<EOF
mutation addPolicyAssignments(\$policies: [String!]!, \$targetType: PolicyAssignmentTargetType!, \$targetIdentifiers: [String!], \$inheritByChildren: Boolean, \$namespace: String) {
  addPolicyAssignments(policies: \$policies, targetType: \$targetType, targetIdentifiers: \$targetIdentifiers, inheritByChildren: \$inheritByChildren, namespace: \$namespace) {
    message
    code
  }
}
EOF;
}
    

    
class AddUserToGroupResponse {

    public \Authing\Types\CommonMessage $addUserToGroup;
}
    
class AddUserToGroupParam {

    /**
     * Optional
     */
    public string $code;

/**
 * @param $userIds string[]
 */
public function __construct(
    /**
     * Required
     *
     * @var string[]
     */
    public $userIds
)
{
}

/**
 * @param $code string
 * @return AddUserToGroupParam
 */
public function withCode($code) {
  $this->code = $code;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::AddUserToGroupDocument,
        "operationName" => "addUserToGroup",
        "variables" => $this
      ];
    }

    const AddUserToGroupDocument = <<<EOF
mutation addUserToGroup(\$userIds: [String!]!, \$code: String) {
  addUserToGroup(userIds: \$userIds, code: \$code) {
    message
    code
  }
}
EOF;
}
    

    
class AddWhitelistResponse {

    /**
     * @var WhiteList[]
     */
    public array $addWhitelist;
}
    
class AddWhitelistParam {

    /**
 * @param $type WhitelistType
 * @param $list string[]
 */
public function __construct(
    /**
     * Required
     *
     * @var WhitelistType
     */
    public $type,
    /**
     * Required
     *
     * @var string[]
     */
    public $list
)
{
}

    function createRequest() {
      return [
        "query" => self::AddWhitelistDocument,
        "operationName" => "addWhitelist",
        "variables" => $this
      ];
    }

    const AddWhitelistDocument = <<<EOF
mutation addWhitelist(\$type: WhitelistType!, \$list: [String!]!) {
  addWhitelist(type: \$type, list: \$list) {
    createdAt
    updatedAt
    value
  }
}
EOF;
}
    

    
class AllowResponse {

    public \Authing\Types\CommonMessage $allow;
}
    
class AllowParam {

    /**
     * Optional
     */
    public string $userId;

    /**
     * Optional
     * 
     * @var string[]
     */
    public array $userIds;

    /**
     * Optional
     */
    public string $roleCode;

    /**
     * Optional
     * 
     * @var string[]
     */
    public array $roleCodes;

    /**
     * Optional
     */
    public string $namespace;

/**
 * @param $resource string
 * @param $action string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $resource,
    /**
     * Required
     *
     * @var string
     */
    public $action
)
{
}

/**
 * @param $userId string
 * @return AllowParam
 */
public function withUserId($userId) {
  $this->userId = $userId;
  return $this;
}

/**
 * @param $userIds string[]
 * @return AllowParam
 */
public function withUserIds($userIds) {
  $this->userIds = $userIds;
  return $this;
}

/**
 * @param $roleCode string
 * @return AllowParam
 */
public function withRoleCode($roleCode) {
  $this->roleCode = $roleCode;
  return $this;
}

/**
 * @param $roleCodes string[]
 * @return AllowParam
 */
public function withRoleCodes($roleCodes) {
  $this->roleCodes = $roleCodes;
  return $this;
}

/**
 * @param $namespace string
 * @return AllowParam
 */
public function withNamespace($namespace) {
  $this->namespace = $namespace;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::AllowDocument,
        "operationName" => "allow",
        "variables" => $this
      ];
    }

    const AllowDocument = <<<EOF
mutation allow(\$resource: String!, \$action: String!, \$userId: String, \$userIds: [String!], \$roleCode: String, \$roleCodes: [String!], \$namespace: String) {
  allow(resource: \$resource, action: \$action, userId: \$userId, userIds: \$userIds, roleCode: \$roleCode, roleCodes: \$roleCodes, namespace: \$namespace) {
    message
    code
  }
}
EOF;
}
    

    
class AssignRoleResponse {

    public \Authing\Types\CommonMessage $assignRole;
}
    
class AssignRoleParam {

    /**
     * Optional
     */
    public string $namespace;

    /**
     * Optional
     */
    public string $roleCode;

    /**
     * Optional
     * 
     * @var string[]
     */
    public array $roleCodes;

    /**
     * Optional
     * 
     * @var string[]
     */
    public array $userIds;

    /**
     * Optional
     * 
     * @var string[]
     */
    public array $groupCodes;

    /**
     * Optional
     * 
     * @var string[]
     */
    public array $nodeCodes;

public function __construct() {

}

/**
 * @param $namespace string
 * @return AssignRoleParam
 */
public function withNamespace($namespace) {
  $this->namespace = $namespace;
  return $this;
}

/**
 * @param $roleCode string
 * @return AssignRoleParam
 */
public function withRoleCode($roleCode) {
  $this->roleCode = $roleCode;
  return $this;
}

/**
 * @param $roleCodes string[]
 * @return AssignRoleParam
 */
public function withRoleCodes($roleCodes) {
  $this->roleCodes = $roleCodes;
  return $this;
}

/**
 * @param $userIds string[]
 * @return AssignRoleParam
 */
public function withUserIds($userIds) {
  $this->userIds = $userIds;
  return $this;
}

/**
 * @param $groupCodes string[]
 * @return AssignRoleParam
 */
public function withGroupCodes($groupCodes) {
  $this->groupCodes = $groupCodes;
  return $this;
}

/**
 * @param $nodeCodes string[]
 * @return AssignRoleParam
 */
public function withNodeCodes($nodeCodes) {
  $this->nodeCodes = $nodeCodes;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::AssignRoleDocument,
        "operationName" => "assignRole",
        "variables" => $this
      ];
    }

    const AssignRoleDocument = <<<EOF
mutation assignRole(\$namespace: String, \$roleCode: String, \$roleCodes: [String], \$userIds: [String!], \$groupCodes: [String!], \$nodeCodes: [String!]) {
  assignRole(namespace: \$namespace, roleCode: \$roleCode, roleCodes: \$roleCodes, userIds: \$userIds, groupCodes: \$groupCodes, nodeCodes: \$nodeCodes) {
    message
    code
  }
}
EOF;
}
    

    
class AuthorizeResourceResponse {

    public \Authing\Types\CommonMessage $authorizeResource;
}
    
class AuthorizeResourceParam {

    /**
     * Optional
     */
    public string $namespace;

    /**
     * Optional
     */
    public string $resource;

    /**
     * Optional
     */
    public \Authing\Types\ResourceType $resourceType;

    /**
     * Optional
     * 
     * @var AuthorizeResourceOpt[]
     */
    public array $opts;

public function __construct() {

}

/**
 * @param $namespace string
 * @return AuthorizeResourceParam
 */
public function withNamespace($namespace) {
  $this->namespace = $namespace;
  return $this;
}

/**
 * @param $resource string
 * @return AuthorizeResourceParam
 */
public function withResource($resource) {
  $this->resource = $resource;
  return $this;
}

/**
 * @param $resourceType ResourceType
 * @return AuthorizeResourceParam
 */
public function withResourceType($resourceType) {
  $this->resourceType = $resourceType;
  return $this;
}

/**
 * @param $opts AuthorizeResourceOpt[]
 * @return AuthorizeResourceParam
 */
public function withOpts($opts) {
  $this->opts = $opts;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::AuthorizeResourceDocument,
        "operationName" => "authorizeResource",
        "variables" => $this
      ];
    }

    const AuthorizeResourceDocument = <<<EOF
mutation authorizeResource(\$namespace: String, \$resource: String, \$resourceType: ResourceType, \$opts: [AuthorizeResourceOpt]) {
  authorizeResource(namespace: \$namespace, resource: \$resource, resourceType: \$resourceType, opts: \$opts) {
    code
    message
  }
}
EOF;
}
    

    
class BindEmailResponse {

    public \Authing\Types\User $bindEmail;
}
    
class BindEmailParam {

    /**
 * @param $email string
 * @param $emailCode string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $email,
    /**
     * Required
     *
     * @var string
     */
    public $emailCode
)
{
}

    function createRequest() {
      return [
        "query" => self::BindEmailDocument,
        "operationName" => "bindEmail",
        "variables" => $this
      ];
    }

    const BindEmailDocument = <<<EOF
mutation bindEmail(\$email: String!, \$emailCode: String!) {
  bindEmail(email: \$email, emailCode: \$emailCode) {
    id
    arn
    userPoolId
    status
    username
    email
    emailVerified
    phone
    phoneVerified
    unionid
    openid
    nickname
    registerSource
    photo
    password
    oauth
    token
    tokenExpiredAt
    loginsCount
    lastLogin
    lastIP
    signedUp
    blocked
    isDeleted
    device
    browser
    company
    name
    givenName
    familyName
    middleName
    profile
    preferredUsername
    website
    gender
    birthdate
    zoneinfo
    locale
    address
    formatted
    streetAddress
    locality
    region
    postalCode
    city
    province
    country
    createdAt
    updatedAt
  }
}
EOF;
}
    

    
class BindPhoneResponse {

    public \Authing\Types\User $bindPhone;
}
    
class BindPhoneParam {

    /**
 * @param $phone string
 * @param $phoneCode string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $phone,
    /**
     * Required
     *
     * @var string
     */
    public $phoneCode
)
{
}

    function createRequest() {
      return [
        "query" => self::BindPhoneDocument,
        "operationName" => "bindPhone",
        "variables" => $this
      ];
    }

    const BindPhoneDocument = <<<EOF
mutation bindPhone(\$phone: String!, \$phoneCode: String!) {
  bindPhone(phone: \$phone, phoneCode: \$phoneCode) {
    id
    arn
    userPoolId
    status
    username
    email
    emailVerified
    phone
    phoneVerified
    unionid
    openid
    nickname
    registerSource
    photo
    password
    oauth
    token
    tokenExpiredAt
    loginsCount
    lastLogin
    lastIP
    signedUp
    blocked
    isDeleted
    device
    browser
    company
    name
    givenName
    familyName
    middleName
    profile
    preferredUsername
    website
    gender
    birthdate
    zoneinfo
    locale
    address
    formatted
    streetAddress
    locality
    region
    postalCode
    city
    province
    country
    createdAt
    updatedAt
  }
}
EOF;
}
    

    
class ChangeMfaResponse {

    public \Authing\Types\Mfa $changeMfa;
}
    
class ChangeMfaParam {

    /**
     * Optional
     */
    public bool $enable;

    /**
     * Optional
     */
    public string $id;

    /**
     * Optional
     */
    public string $userId;

    /**
     * Optional
     */
    public string $userPoolId;

    /**
     * Optional
     */
    public bool $refresh;

public function __construct() {

}

/**
 * @param $enable bool
 * @return ChangeMfaParam
 */
public function withEnable($enable) {
  $this->enable = $enable;
  return $this;
}

/**
 * @param $id string
 * @return ChangeMfaParam
 */
public function withId($id) {
  $this->id = $id;
  return $this;
}

/**
 * @param $userId string
 * @return ChangeMfaParam
 */
public function withUserId($userId) {
  $this->userId = $userId;
  return $this;
}

/**
 * @param $userPoolId string
 * @return ChangeMfaParam
 */
public function withUserPoolId($userPoolId) {
  $this->userPoolId = $userPoolId;
  return $this;
}

/**
 * @param $refresh bool
 * @return ChangeMfaParam
 */
public function withRefresh($refresh) {
  $this->refresh = $refresh;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::ChangeMfaDocument,
        "operationName" => "changeMfa",
        "variables" => $this
      ];
    }

    const ChangeMfaDocument = <<<EOF
mutation changeMfa(\$enable: Boolean, \$id: String, \$userId: String, \$userPoolId: String, \$refresh: Boolean) {
  changeMfa(enable: \$enable, id: \$id, userId: \$userId, userPoolId: \$userPoolId, refresh: \$refresh) {
    id
    userId
    userPoolId
    enable
    secret
  }
}
EOF;
}
    

    
class ConfigEmailTemplateResponse {

    public \Authing\Types\EmailTemplate $configEmailTemplate;
}
    
class ConfigEmailTemplateParam {

    /**
 * @param $input ConfigEmailTemplateInput
 */
public function __construct(
    /**
     * Required
     *
     * @var ConfigEmailTemplateInput
     */
    public $input
)
{
}

    function createRequest() {
      return [
        "query" => self::ConfigEmailTemplateDocument,
        "operationName" => "configEmailTemplate",
        "variables" => $this
      ];
    }

    const ConfigEmailTemplateDocument = <<<EOF
mutation configEmailTemplate(\$input: ConfigEmailTemplateInput!) {
  configEmailTemplate(input: \$input) {
    type
    name
    subject
    sender
    content
    redirectTo
    hasURL
    expiresIn
    enabled
    isSystem
  }
}
EOF;
}
    

    
class CreateFunctionResponse {

    /**
     * @var Function
     */
    public $createFunction;
}
    
class CreateFunctionParam {

    /**
 * @param $input CreateFunctionInput
 */
public function __construct(
    /**
     * Required
     *
     * @var CreateFunctionInput
     */
    public $input
)
{
}

    function createRequest() {
      return [
        "query" => self::CreateFunctionDocument,
        "operationName" => "createFunction",
        "variables" => $this
      ];
    }

    const CreateFunctionDocument = <<<EOF
mutation createFunction(\$input: CreateFunctionInput!) {
  createFunction(input: \$input) {
    id
    name
    sourceCode
    description
    url
  }
}
EOF;
}
    

    
class CreateGroupResponse {

    public \Authing\Types\Group $createGroup;
}
    
class CreateGroupParam {

    /**
     * Optional
     */
    public string $description;

/**
 * @param $code string
 * @param $name string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $code,
    /**
     * Required
     *
     * @var string
     */
    public $name
)
{
}

/**
 * @param $description string
 * @return CreateGroupParam
 */
public function withDescription($description) {
  $this->description = $description;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::CreateGroupDocument,
        "operationName" => "createGroup",
        "variables" => $this
      ];
    }

    const CreateGroupDocument = <<<EOF
mutation createGroup(\$code: String!, \$name: String!, \$description: String) {
  createGroup(code: \$code, name: \$name, description: \$description) {
    code
    name
    description
    createdAt
    updatedAt
  }
}
EOF;
}
    

    
class CreateOrgResponse {

    public \Authing\Types\Org $createOrg;
}
    
class CreateOrgParam {

    /**
     * Optional
     */
    public string $code;

    /**
     * Optional
     */
    public string $description;

/**
 * @param $name string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $name
)
{
}

/**
 * @param $code string
 * @return CreateOrgParam
 */
public function withCode($code) {
  $this->code = $code;
  return $this;
}

/**
 * @param $description string
 * @return CreateOrgParam
 */
public function withDescription($description) {
  $this->description = $description;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::CreateOrgDocument,
        "operationName" => "createOrg",
        "variables" => $this
      ];
    }

    const CreateOrgDocument = <<<EOF
mutation createOrg(\$name: String!, \$code: String, \$description: String) {
  createOrg(name: \$name, code: \$code, description: \$description) {
    id
    rootNode {
      id
      orgId
      name
      nameI18n
      description
      descriptionI18n
      order
      code
      root
      depth
      path
      createdAt
      updatedAt
      children
    }
    nodes {
      id
      orgId
      name
      nameI18n
      description
      descriptionI18n
      order
      code
      root
      depth
      path
      createdAt
      updatedAt
      children
    }
  }
}
EOF;
}
    

    
class CreatePolicyResponse {

    public \Authing\Types\Policy $createPolicy;
}
    
class CreatePolicyParam {

    /**
     * Optional
     */
    public string $namespace;

    /**
     * Optional
     */
    public string $description;

/**
 * @param $code string
 * @param $statements PolicyStatementInput[]
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $code,
    /**
     * Required
     *
     * @var PolicyStatementInput[]
     */
    public $statements
)
{
}

/**
 * @param $namespace string
 * @return CreatePolicyParam
 */
public function withNamespace($namespace) {
  $this->namespace = $namespace;
  return $this;
}

/**
 * @param $description string
 * @return CreatePolicyParam
 */
public function withDescription($description) {
  $this->description = $description;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::CreatePolicyDocument,
        "operationName" => "createPolicy",
        "variables" => $this
      ];
    }

    const CreatePolicyDocument = <<<EOF
mutation createPolicy(\$namespace: String, \$code: String!, \$description: String, \$statements: [PolicyStatementInput!]!) {
  createPolicy(namespace: \$namespace, code: \$code, description: \$description, statements: \$statements) {
    namespace
    code
    isDefault
    description
    statements {
      resource
      actions
      effect
      condition {
        param
        operator
        value
      }
    }
    createdAt
    updatedAt
    assignmentsCount
  }
}
EOF;
}
    

    
class CreateRoleResponse {

    public \Authing\Types\Role $createRole;
}
    
class CreateRoleParam {

    /**
     * Optional
     */
    public string $namespace;

    /**
     * Optional
     */
    public string $description;

    /**
     * Optional
     */
    public string $parent;

/**
 * @param $code string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $code
)
{
}

/**
 * @param $namespace string
 * @return CreateRoleParam
 */
public function withNamespace($namespace) {
  $this->namespace = $namespace;
  return $this;
}

/**
 * @param $description string
 * @return CreateRoleParam
 */
public function withDescription($description) {
  $this->description = $description;
  return $this;
}

/**
 * @param $parent string
 * @return CreateRoleParam
 */
public function withParent($parent) {
  $this->parent = $parent;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::CreateRoleDocument,
        "operationName" => "createRole",
        "variables" => $this
      ];
    }

    const CreateRoleDocument = <<<EOF
mutation createRole(\$namespace: String, \$code: String!, \$description: String, \$parent: String) {
  createRole(namespace: \$namespace, code: \$code, description: \$description, parent: \$parent) {
    namespace
    code
    arn
    description
    createdAt
    updatedAt
    parent {
      namespace
      code
      arn
      description
      createdAt
      updatedAt
    }
  }
}
EOF;
}
    

    
class CreateSocialConnectionInstanceResponse {

    public \Authing\Types\SocialConnectionInstance $createSocialConnectionInstance;
}
    
class CreateSocialConnectionInstanceParam {

    /**
 * @param $input CreateSocialConnectionInstanceInput
 */
public function __construct(
    /**
     * Required
     *
     * @var CreateSocialConnectionInstanceInput
     */
    public $input
)
{
}

    function createRequest() {
      return [
        "query" => self::CreateSocialConnectionInstanceDocument,
        "operationName" => "createSocialConnectionInstance",
        "variables" => $this
      ];
    }

    const CreateSocialConnectionInstanceDocument = <<<EOF
mutation createSocialConnectionInstance(\$input: CreateSocialConnectionInstanceInput!) {
  createSocialConnectionInstance(input: \$input) {
    provider
    enabled
    fields {
      key
      value
    }
  }
}
EOF;
}
    

    
class CreateUserResponse {

    public \Authing\Types\User $createUser;
}
    
class CreateUserParam {

    /**
     * Optional
     */
    public bool $keepPassword;

/**
 * @param $userInfo CreateUserInput
 */
public function __construct(
    /**
     * Required
     *
     * @var CreateUserInput
     */
    public $userInfo
)
{
}

/**
 * @param $keepPassword bool
 * @return CreateUserParam
 */
public function withKeepPassword($keepPassword) {
  $this->keepPassword = $keepPassword;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::CreateUserDocument,
        "operationName" => "createUser",
        "variables" => $this
      ];
    }

    const CreateUserDocument = <<<EOF
mutation createUser(\$userInfo: CreateUserInput!, \$keepPassword: Boolean) {
  createUser(userInfo: \$userInfo, keepPassword: \$keepPassword) {
    id
    arn
    userPoolId
    status
    username
    email
    emailVerified
    phone
    phoneVerified
    unionid
    openid
    nickname
    registerSource
    photo
    password
    oauth
    token
    tokenExpiredAt
    loginsCount
    lastLogin
    lastIP
    signedUp
    blocked
    isDeleted
    device
    browser
    company
    name
    givenName
    familyName
    middleName
    profile
    preferredUsername
    website
    gender
    birthdate
    zoneinfo
    locale
    address
    formatted
    streetAddress
    locality
    region
    postalCode
    city
    province
    country
    createdAt
    updatedAt
    externalId
  }
}
EOF;
}
    

    
class CreateUserpoolResponse {

    public \Authing\Types\UserPool $createUserpool;
}
    
class CreateUserpoolParam {

    /**
     * Optional
     */
    public string $description;

    /**
     * Optional
     */
    public string $logo;

    /**
     * Optional
     * 
     * @var string[]
     */
    public array $userpoolTypes;

/**
 * @param $name string
 * @param $domain string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $name,
    /**
     * Required
     *
     * @var string
     */
    public $domain
)
{
}

/**
 * @param $description string
 * @return CreateUserpoolParam
 */
public function withDescription($description) {
  $this->description = $description;
  return $this;
}

/**
 * @param $logo string
 * @return CreateUserpoolParam
 */
public function withLogo($logo) {
  $this->logo = $logo;
  return $this;
}

/**
 * @param $userpoolTypes string[]
 * @return CreateUserpoolParam
 */
public function withUserpoolTypes($userpoolTypes) {
  $this->userpoolTypes = $userpoolTypes;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::CreateUserpoolDocument,
        "operationName" => "createUserpool",
        "variables" => $this
      ];
    }

    const CreateUserpoolDocument = <<<EOF
mutation createUserpool(\$name: String!, \$domain: String!, \$description: String, \$logo: String, \$userpoolTypes: [String!]) {
  createUserpool(name: \$name, domain: \$domain, description: \$description, logo: \$logo, userpoolTypes: \$userpoolTypes) {
    id
    name
    domain
    description
    secret
    jwtSecret
    userpoolTypes {
      code
      name
      description
      image
      sdks
    }
    logo
    createdAt
    updatedAt
    emailVerifiedDefault
    sendWelcomeEmail
    registerDisabled
    appSsoEnabled
    showWxQRCodeWhenRegisterDisabled
    allowedOrigins
    tokenExpiresAfter
    isDeleted
    frequentRegisterCheck {
      timeInterval
      limit
      enabled
    }
    loginFailCheck {
      timeInterval
      limit
      enabled
    }
    changePhoneStrategy {
      verifyOldPhone
    }
    changeEmailStrategy {
      verifyOldEmail
    }
    qrcodeLoginStrategy {
      qrcodeExpiresAfter
      returnFullUserInfo
      allowExchangeUserInfoFromBrowser
      ticketExpiresAfter
    }
    app2WxappLoginStrategy {
      ticketExpriresAfter
      ticketExchangeUserInfoNeedSecret
    }
    whitelist {
      phoneEnabled
      emailEnabled
      usernameEnabled
    }
    customSMSProvider {
      enabled
      provider
    }
    packageType
  }
}
EOF;
}
    

    
class DeleteFunctionResponse {

    public \Authing\Types\CommonMessage $deleteFunction;
}
    
class DeleteFunctionParam {

    /**
 * @param $id string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $id
)
{
}

    function createRequest() {
      return [
        "query" => self::DeleteFunctionDocument,
        "operationName" => "deleteFunction",
        "variables" => $this
      ];
    }

    const DeleteFunctionDocument = <<<EOF
mutation deleteFunction(\$id: String!) {
  deleteFunction(id: \$id) {
    message
    code
  }
}
EOF;
}
    

    
class DeleteGroupsResponse {

    public \Authing\Types\CommonMessage $deleteGroups;
}
    
class DeleteGroupsParam {

    /**
 * @param $codeList string[]
 */
public function __construct(
    /**
     * Required
     *
     * @var string[]
     */
    public $codeList
)
{
}

    function createRequest() {
      return [
        "query" => self::DeleteGroupsDocument,
        "operationName" => "deleteGroups",
        "variables" => $this
      ];
    }

    const DeleteGroupsDocument = <<<EOF
mutation deleteGroups(\$codeList: [String!]!) {
  deleteGroups(codeList: \$codeList) {
    message
    code
  }
}
EOF;
}
    

    
class DeleteNodeResponse {

    public \Authing\Types\CommonMessage $deleteNode;
}
    
class DeleteNodeParam {

    /**
 * @param $orgId string
 * @param $nodeId string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $orgId,
    /**
     * Required
     *
     * @var string
     */
    public $nodeId
)
{
}

    function createRequest() {
      return [
        "query" => self::DeleteNodeDocument,
        "operationName" => "deleteNode",
        "variables" => $this
      ];
    }

    const DeleteNodeDocument = <<<EOF
mutation deleteNode(\$orgId: String!, \$nodeId: String!) {
  deleteNode(orgId: \$orgId, nodeId: \$nodeId) {
    message
    code
  }
}
EOF;
}
    

    
class DeleteOrgResponse {

    public \Authing\Types\CommonMessage $deleteOrg;
}
    
class DeleteOrgParam {

    /**
 * @param $id string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $id
)
{
}

    function createRequest() {
      return [
        "query" => self::DeleteOrgDocument,
        "operationName" => "deleteOrg",
        "variables" => $this
      ];
    }

    const DeleteOrgDocument = <<<EOF
mutation deleteOrg(\$id: String!) {
  deleteOrg(id: \$id) {
    message
    code
  }
}
EOF;
}
    

    
class DeletePoliciesResponse {

    public \Authing\Types\CommonMessage $deletePolicies;
}
    
class DeletePoliciesParam {

    /**
     * Optional
     */
    public string $namespace;

/**
 * @param $codeList string[]
 */
public function __construct(
    /**
     * Required
     *
     * @var string[]
     */
    public $codeList
)
{
}

/**
 * @param $namespace string
 * @return DeletePoliciesParam
 */
public function withNamespace($namespace) {
  $this->namespace = $namespace;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::DeletePoliciesDocument,
        "operationName" => "deletePolicies",
        "variables" => $this
      ];
    }

    const DeletePoliciesDocument = <<<EOF
mutation deletePolicies(\$codeList: [String!]!, \$namespace: String) {
  deletePolicies(codeList: \$codeList, namespace: \$namespace) {
    message
    code
  }
}
EOF;
}
    

    
class DeletePolicyResponse {

    public \Authing\Types\CommonMessage $deletePolicy;
}
    
class DeletePolicyParam {

    /**
     * Optional
     */
    public string $namespace;

/**
 * @param $code string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $code
)
{
}

/**
 * @param $namespace string
 * @return DeletePolicyParam
 */
public function withNamespace($namespace) {
  $this->namespace = $namespace;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::DeletePolicyDocument,
        "operationName" => "deletePolicy",
        "variables" => $this
      ];
    }

    const DeletePolicyDocument = <<<EOF
mutation deletePolicy(\$code: String!, \$namespace: String) {
  deletePolicy(code: \$code, namespace: \$namespace) {
    message
    code
  }
}
EOF;
}
    

    
class DeleteRoleResponse {

    public \Authing\Types\CommonMessage $deleteRole;
}
    
class DeleteRoleParam {

    /**
     * Optional
     */
    public string $namespace;

/**
 * @param $code string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $code
)
{
}

/**
 * @param $namespace string
 * @return DeleteRoleParam
 */
public function withNamespace($namespace) {
  $this->namespace = $namespace;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::DeleteRoleDocument,
        "operationName" => "deleteRole",
        "variables" => $this
      ];
    }

    const DeleteRoleDocument = <<<EOF
mutation deleteRole(\$code: String!, \$namespace: String) {
  deleteRole(code: \$code, namespace: \$namespace) {
    message
    code
  }
}
EOF;
}
    

    
class DeleteRolesResponse {

    public \Authing\Types\CommonMessage $deleteRoles;
}
    
class DeleteRolesParam {

    /**
     * Optional
     */
    public string $namespace;

/**
 * @param $codeList string[]
 */
public function __construct(
    /**
     * Required
     *
     * @var string[]
     */
    public $codeList
)
{
}

/**
 * @param $namespace string
 * @return DeleteRolesParam
 */
public function withNamespace($namespace) {
  $this->namespace = $namespace;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::DeleteRolesDocument,
        "operationName" => "deleteRoles",
        "variables" => $this
      ];
    }

    const DeleteRolesDocument = <<<EOF
mutation deleteRoles(\$codeList: [String!]!, \$namespace: String) {
  deleteRoles(codeList: \$codeList, namespace: \$namespace) {
    message
    code
  }
}
EOF;
}
    

    
class DeleteUserResponse {

    public \Authing\Types\CommonMessage $deleteUser;
}
    
class DeleteUserParam {

    /**
 * @param $id string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $id
)
{
}

    function createRequest() {
      return [
        "query" => self::DeleteUserDocument,
        "operationName" => "deleteUser",
        "variables" => $this
      ];
    }

    const DeleteUserDocument = <<<EOF
mutation deleteUser(\$id: String!) {
  deleteUser(id: \$id) {
    message
    code
  }
}
EOF;
}
    

    
class DeleteUserpoolResponse {

    public \Authing\Types\CommonMessage $deleteUserpool;
}
    
class DeleteUserpoolParam {



    function createRequest() {
      return [
        "query" => self::DeleteUserpoolDocument,
        "operationName" => "deleteUserpool",
        "variables" => $this
      ];
    }

    const DeleteUserpoolDocument = <<<EOF
mutation deleteUserpool {
  deleteUserpool {
    message
    code
  }
}
EOF;
}
    

    
class DeleteUsersResponse {

    public \Authing\Types\CommonMessage $deleteUsers;
}
    
class DeleteUsersParam {

    /**
 * @param $ids string[]
 */
public function __construct(
    /**
     * Required
     *
     * @var string[]
     */
    public $ids
)
{
}

    function createRequest() {
      return [
        "query" => self::DeleteUsersDocument,
        "operationName" => "deleteUsers",
        "variables" => $this
      ];
    }

    const DeleteUsersDocument = <<<EOF
mutation deleteUsers(\$ids: [String!]!) {
  deleteUsers(ids: \$ids) {
    message
    code
  }
}
EOF;
}
    

    
class DisableEmailTemplateResponse {

    public \Authing\Types\EmailTemplate $disableEmailTemplate;
}
    
class DisableEmailTemplateParam {

    /**
 * @param $type EmailTemplateType
 */
public function __construct(
    /**
     * Required
     *
     * @var EmailTemplateType
     */
    public $type
)
{
}

    function createRequest() {
      return [
        "query" => self::DisableEmailTemplateDocument,
        "operationName" => "disableEmailTemplate",
        "variables" => $this
      ];
    }

    const DisableEmailTemplateDocument = <<<EOF
mutation disableEmailTemplate(\$type: EmailTemplateType!) {
  disableEmailTemplate(type: \$type) {
    type
    name
    subject
    sender
    content
    redirectTo
    hasURL
    expiresIn
    enabled
    isSystem
  }
}
EOF;
}
    

    
class DisableSocialConnectionInstanceResponse {

    public \Authing\Types\SocialConnectionInstance $disableSocialConnectionInstance;
}
    
class DisableSocialConnectionInstanceParam {

    /**
 * @param $provider string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $provider
)
{
}

    function createRequest() {
      return [
        "query" => self::DisableSocialConnectionInstanceDocument,
        "operationName" => "disableSocialConnectionInstance",
        "variables" => $this
      ];
    }

    const DisableSocialConnectionInstanceDocument = <<<EOF
mutation disableSocialConnectionInstance(\$provider: String!) {
  disableSocialConnectionInstance(provider: \$provider) {
    provider
    enabled
    fields {
      key
      value
    }
  }
}
EOF;
}
    

    
class DisbalePolicyAssignmentResponse {

    public \Authing\Types\CommonMessage $disbalePolicyAssignment;
}
    
class DisbalePolicyAssignmentParam {

    /**
     * Optional
     */
    public string $namespace;

/**
 * @param $policy string
 * @param $targetType PolicyAssignmentTargetType
 * @param $targetIdentifier string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $policy,
    /**
     * Required
     *
     * @var PolicyAssignmentTargetType
     */
    public $targetType,
    /**
     * Required
     *
     * @var string
     */
    public $targetIdentifier
)
{
}

/**
 * @param $namespace string
 * @return DisbalePolicyAssignmentParam
 */
public function withNamespace($namespace) {
  $this->namespace = $namespace;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::DisbalePolicyAssignmentDocument,
        "operationName" => "disbalePolicyAssignment",
        "variables" => $this
      ];
    }

    const DisbalePolicyAssignmentDocument = <<<EOF
mutation disbalePolicyAssignment(\$policy: String!, \$targetType: PolicyAssignmentTargetType!, \$targetIdentifier: String!, \$namespace: String) {
  disbalePolicyAssignment(policy: \$policy, targetType: \$targetType, targetIdentifier: \$targetIdentifier, namespace: \$namespace) {
    message
    code
  }
}
EOF;
}
    

    
class EnableEmailTemplateResponse {

    public \Authing\Types\EmailTemplate $enableEmailTemplate;
}
    
class EnableEmailTemplateParam {

    /**
 * @param $type EmailTemplateType
 */
public function __construct(
    /**
     * Required
     *
     * @var EmailTemplateType
     */
    public $type
)
{
}

    function createRequest() {
      return [
        "query" => self::EnableEmailTemplateDocument,
        "operationName" => "enableEmailTemplate",
        "variables" => $this
      ];
    }

    const EnableEmailTemplateDocument = <<<EOF
mutation enableEmailTemplate(\$type: EmailTemplateType!) {
  enableEmailTemplate(type: \$type) {
    type
    name
    subject
    sender
    content
    redirectTo
    hasURL
    expiresIn
    enabled
    isSystem
  }
}
EOF;
}
    

    
class EnablePolicyAssignmentResponse {

    public \Authing\Types\CommonMessage $enablePolicyAssignment;
}
    
class EnablePolicyAssignmentParam {

    /**
     * Optional
     */
    public string $namespace;

/**
 * @param $policy string
 * @param $targetType PolicyAssignmentTargetType
 * @param $targetIdentifier string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $policy,
    /**
     * Required
     *
     * @var PolicyAssignmentTargetType
     */
    public $targetType,
    /**
     * Required
     *
     * @var string
     */
    public $targetIdentifier
)
{
}

/**
 * @param $namespace string
 * @return EnablePolicyAssignmentParam
 */
public function withNamespace($namespace) {
  $this->namespace = $namespace;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::EnablePolicyAssignmentDocument,
        "operationName" => "enablePolicyAssignment",
        "variables" => $this
      ];
    }

    const EnablePolicyAssignmentDocument = <<<EOF
mutation enablePolicyAssignment(\$policy: String!, \$targetType: PolicyAssignmentTargetType!, \$targetIdentifier: String!, \$namespace: String) {
  enablePolicyAssignment(policy: \$policy, targetType: \$targetType, targetIdentifier: \$targetIdentifier, namespace: \$namespace) {
    message
    code
  }
}
EOF;
}
    

    
class EnableSocialConnectionInstanceResponse {

    public \Authing\Types\SocialConnectionInstance $enableSocialConnectionInstance;
}
    
class EnableSocialConnectionInstanceParam {

    /**
 * @param $provider string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $provider
)
{
}

    function createRequest() {
      return [
        "query" => self::EnableSocialConnectionInstanceDocument,
        "operationName" => "enableSocialConnectionInstance",
        "variables" => $this
      ];
    }

    const EnableSocialConnectionInstanceDocument = <<<EOF
mutation enableSocialConnectionInstance(\$provider: String!) {
  enableSocialConnectionInstance(provider: \$provider) {
    provider
    enabled
    fields {
      key
      value
    }
  }
}
EOF;
}
    

    
class LoginByEmailResponse {

    public \Authing\Types\User $loginByEmail;
}
    
class LoginByEmailParam {

    /**
 * @param $input LoginByEmailInput
 */
public function __construct(
    /**
     * Required
     *
     * @var LoginByEmailInput
     */
    public $input
)
{
}

    function createRequest() {
      return [
        "query" => self::LoginByEmailDocument,
        "operationName" => "loginByEmail",
        "variables" => $this
      ];
    }

    const LoginByEmailDocument = <<<EOF
mutation loginByEmail(\$input: LoginByEmailInput!) {
  loginByEmail(input: \$input) {
    id
    arn
    status
    userPoolId
    username
    email
    emailVerified
    phone
    phoneVerified
    unionid
    openid
    nickname
    registerSource
    photo
    password
    oauth
    token
    tokenExpiredAt
    loginsCount
    lastLogin
    lastIP
    signedUp
    blocked
    isDeleted
    device
    browser
    company
    name
    givenName
    familyName
    middleName
    profile
    preferredUsername
    website
    gender
    birthdate
    zoneinfo
    locale
    address
    formatted
    streetAddress
    locality
    region
    postalCode
    city
    province
    country
    createdAt
    updatedAt
    externalId
  }
}
EOF;
}
    

    
class LoginByPhoneCodeResponse {

    public \Authing\Types\User $loginByPhoneCode;
}
    
class LoginByPhoneCodeParam {

    /**
 * @param $input LoginByPhoneCodeInput
 */
public function __construct(
    /**
     * Required
     *
     * @var LoginByPhoneCodeInput
     */
    public $input
)
{
}

    function createRequest() {
      return [
        "query" => self::LoginByPhoneCodeDocument,
        "operationName" => "loginByPhoneCode",
        "variables" => $this
      ];
    }

    const LoginByPhoneCodeDocument = <<<EOF
mutation loginByPhoneCode(\$input: LoginByPhoneCodeInput!) {
  loginByPhoneCode(input: \$input) {
    id
    arn
    userPoolId
    status
    username
    email
    emailVerified
    phone
    phoneVerified
    unionid
    openid
    nickname
    registerSource
    photo
    password
    oauth
    token
    tokenExpiredAt
    loginsCount
    lastLogin
    lastIP
    signedUp
    blocked
    isDeleted
    device
    browser
    company
    name
    givenName
    familyName
    middleName
    profile
    preferredUsername
    website
    gender
    birthdate
    zoneinfo
    locale
    address
    formatted
    streetAddress
    locality
    region
    postalCode
    city
    province
    country
    createdAt
    updatedAt
    externalId
  }
}
EOF;
}
    

    
class LoginByPhonePasswordResponse {

    public \Authing\Types\User $loginByPhonePassword;
}
    
class LoginByPhonePasswordParam {

    /**
 * @param $input LoginByPhonePasswordInput
 */
public function __construct(
    /**
     * Required
     *
     * @var LoginByPhonePasswordInput
     */
    public $input
)
{
}

    function createRequest() {
      return [
        "query" => self::LoginByPhonePasswordDocument,
        "operationName" => "loginByPhonePassword",
        "variables" => $this
      ];
    }

    const LoginByPhonePasswordDocument = <<<EOF
mutation loginByPhonePassword(\$input: LoginByPhonePasswordInput!) {
  loginByPhonePassword(input: \$input) {
    id
    arn
    userPoolId
    status
    username
    email
    emailVerified
    phone
    phoneVerified
    unionid
    openid
    nickname
    registerSource
    photo
    password
    oauth
    token
    tokenExpiredAt
    loginsCount
    lastLogin
    lastIP
    signedUp
    blocked
    isDeleted
    device
    browser
    company
    name
    givenName
    familyName
    middleName
    profile
    preferredUsername
    website
    gender
    birthdate
    zoneinfo
    locale
    address
    formatted
    streetAddress
    locality
    region
    postalCode
    city
    province
    country
    createdAt
    updatedAt
    externalId
  }
}
EOF;
}
    

    
class LoginBySubAccountResponse {

    public \Authing\Types\User $loginBySubAccount;
}
    
class LoginBySubAccountParam {

    /**
     * Optional
     */
    public string $captchaCode;

    /**
     * Optional
     */
    public string $clientIp;

/**
 * @param $account string
 * @param $password string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $account,
    /**
     * Required
     *
     * @var string
     */
    public $password
)
{
}

/**
 * @param $captchaCode string
 * @return LoginBySubAccountParam
 */
public function withCaptchaCode($captchaCode) {
  $this->captchaCode = $captchaCode;
  return $this;
}

/**
 * @param $clientIp string
 * @return LoginBySubAccountParam
 */
public function withClientIp($clientIp) {
  $this->clientIp = $clientIp;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::LoginBySubAccountDocument,
        "operationName" => "loginBySubAccount",
        "variables" => $this
      ];
    }

    const LoginBySubAccountDocument = <<<EOF
mutation loginBySubAccount(\$account: String!, \$password: String!, \$captchaCode: String, \$clientIp: String) {
  loginBySubAccount(account: \$account, password: \$password, captchaCode: \$captchaCode, clientIp: \$clientIp) {
    id
    arn
    status
    userPoolId
    username
    email
    emailVerified
    phone
    phoneVerified
    unionid
    openid
    nickname
    registerSource
    photo
    password
    oauth
    token
    tokenExpiredAt
    loginsCount
    lastLogin
    lastIP
    signedUp
    blocked
    isDeleted
    device
    browser
    company
    name
    givenName
    familyName
    middleName
    profile
    preferredUsername
    website
    gender
    birthdate
    zoneinfo
    locale
    address
    formatted
    streetAddress
    locality
    region
    postalCode
    city
    province
    country
    createdAt
    updatedAt
    externalId
  }
}
EOF;
}
    

    
class LoginByUsernameResponse {

    public \Authing\Types\User $loginByUsername;
}
    
class LoginByUsernameParam {

    /**
 * @param $input LoginByUsernameInput
 */
public function __construct(
    /**
     * Required
     *
     * @var LoginByUsernameInput
     */
    public $input
)
{
}

    function createRequest() {
      return [
        "query" => self::LoginByUsernameDocument,
        "operationName" => "loginByUsername",
        "variables" => $this
      ];
    }

    const LoginByUsernameDocument = <<<EOF
mutation loginByUsername(\$input: LoginByUsernameInput!) {
  loginByUsername(input: \$input) {
    id
    arn
    userPoolId
    status
    username
    email
    emailVerified
    phone
    phoneVerified
    unionid
    openid
    nickname
    registerSource
    photo
    password
    oauth
    token
    tokenExpiredAt
    loginsCount
    lastLogin
    lastIP
    signedUp
    blocked
    isDeleted
    device
    browser
    company
    name
    givenName
    familyName
    middleName
    profile
    preferredUsername
    website
    gender
    birthdate
    zoneinfo
    locale
    address
    formatted
    streetAddress
    locality
    region
    postalCode
    city
    province
    country
    createdAt
    updatedAt
    externalId
  }
}
EOF;
}
    

    
class MoveNodeResponse {

    public \Authing\Types\Org $moveNode;
}
    
class MoveNodeParam {

    /**
 * @param $orgId string
 * @param $nodeId string
 * @param $targetParentId string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $orgId,
    /**
     * Required
     *
     * @var string
     */
    public $nodeId,
    /**
     * Required
     *
     * @var string
     */
    public $targetParentId
)
{
}

    function createRequest() {
      return [
        "query" => self::MoveNodeDocument,
        "operationName" => "moveNode",
        "variables" => $this
      ];
    }

    const MoveNodeDocument = <<<EOF
mutation moveNode(\$orgId: String!, \$nodeId: String!, \$targetParentId: String!) {
  moveNode(orgId: \$orgId, nodeId: \$nodeId, targetParentId: \$targetParentId) {
    id
    rootNode {
      id
      orgId
      name
      nameI18n
      description
      descriptionI18n
      order
      code
      root
      depth
      path
      createdAt
      updatedAt
      children
    }
    nodes {
      id
      orgId
      name
      nameI18n
      description
      descriptionI18n
      order
      code
      root
      depth
      path
      createdAt
      updatedAt
      children
    }
  }
}
EOF;
}
    

    
class RefreshAccessTokenResponse {

    public \Authing\Types\RefreshAccessTokenRes $refreshAccessToken;
}
    
class RefreshAccessTokenParam {

    /**
     * Optional
     */
    public string $accessToken;

public function __construct() {

}

/**
 * @param $accessToken string
 * @return RefreshAccessTokenParam
 */
public function withAccessToken($accessToken) {
  $this->accessToken = $accessToken;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::RefreshAccessTokenDocument,
        "operationName" => "refreshAccessToken",
        "variables" => $this
      ];
    }

    const RefreshAccessTokenDocument = <<<EOF
mutation refreshAccessToken(\$accessToken: String) {
  refreshAccessToken(accessToken: \$accessToken) {
    accessToken
    exp
    iat
  }
}
EOF;
}
    

    
class RefreshTokenResponse {

    public \Authing\Types\RefreshToken $refreshToken;
}
    
class RefreshTokenParam {

    /**
     * Optional
     */
    public string $id;

public function __construct() {

}

/**
 * @param $id string
 * @return RefreshTokenParam
 */
public function withId($id) {
  $this->id = $id;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::RefreshTokenDocument,
        "operationName" => "refreshToken",
        "variables" => $this
      ];
    }

    const RefreshTokenDocument = <<<EOF
mutation refreshToken(\$id: String) {
  refreshToken(id: \$id) {
    token
    iat
    exp
  }
}
EOF;
}
    

    
class RefreshUserpoolSecretResponse {

    public string $refreshUserpoolSecret;
}
    
class RefreshUserpoolSecretParam {



    function createRequest() {
      return [
        "query" => self::RefreshUserpoolSecretDocument,
        "operationName" => "refreshUserpoolSecret",
        "variables" => $this
      ];
    }

    const RefreshUserpoolSecretDocument = <<<EOF
mutation refreshUserpoolSecret {
  refreshUserpoolSecret
}
EOF;
}
    

    
class RegisterByEmailResponse {

    public \Authing\Types\User $registerByEmail;
}
    
class RegisterByEmailParam {

    /**
 * @param $input RegisterByEmailInput
 */
public function __construct(
    /**
     * Required
     *
     * @var RegisterByEmailInput
     */
    public $input
)
{
}

    function createRequest() {
      return [
        "query" => self::RegisterByEmailDocument,
        "operationName" => "registerByEmail",
        "variables" => $this
      ];
    }

    const RegisterByEmailDocument = <<<EOF
mutation registerByEmail(\$input: RegisterByEmailInput!) {
  registerByEmail(input: \$input) {
    id
    arn
    userPoolId
    status
    username
    email
    emailVerified
    phone
    phoneVerified
    unionid
    openid
    nickname
    registerSource
    photo
    password
    oauth
    token
    tokenExpiredAt
    loginsCount
    lastLogin
    lastIP
    signedUp
    blocked
    isDeleted
    device
    browser
    company
    name
    givenName
    familyName
    middleName
    profile
    preferredUsername
    website
    gender
    birthdate
    zoneinfo
    locale
    address
    formatted
    streetAddress
    locality
    region
    postalCode
    city
    province
    country
    createdAt
    updatedAt
    externalId
  }
}
EOF;
}
    

    
class RegisterByPhoneCodeResponse {

    public \Authing\Types\User $registerByPhoneCode;
}
    
class RegisterByPhoneCodeParam {

    /**
 * @param $input RegisterByPhoneCodeInput
 */
public function __construct(
    /**
     * Required
     *
     * @var RegisterByPhoneCodeInput
     */
    public $input
)
{
}

    function createRequest() {
      return [
        "query" => self::RegisterByPhoneCodeDocument,
        "operationName" => "registerByPhoneCode",
        "variables" => $this
      ];
    }

    const RegisterByPhoneCodeDocument = <<<EOF
mutation registerByPhoneCode(\$input: RegisterByPhoneCodeInput!) {
  registerByPhoneCode(input: \$input) {
    id
    arn
    userPoolId
    status
    username
    email
    emailVerified
    phone
    phoneVerified
    unionid
    openid
    nickname
    registerSource
    photo
    password
    oauth
    token
    tokenExpiredAt
    loginsCount
    lastLogin
    lastIP
    signedUp
    blocked
    isDeleted
    device
    browser
    company
    name
    givenName
    familyName
    middleName
    profile
    preferredUsername
    website
    gender
    birthdate
    zoneinfo
    locale
    address
    formatted
    streetAddress
    locality
    region
    postalCode
    city
    province
    country
    createdAt
    updatedAt
    externalId
  }
}
EOF;
}
    

    
class RegisterByUsernameResponse {

    public \Authing\Types\User $registerByUsername;
}
    
class RegisterByUsernameParam {

    /**
 * @param $input RegisterByUsernameInput
 */
public function __construct(
    /**
     * Required
     *
     * @var RegisterByUsernameInput
     */
    public $input
)
{
}

    function createRequest() {
      return [
        "query" => self::RegisterByUsernameDocument,
        "operationName" => "registerByUsername",
        "variables" => $this
      ];
    }

    const RegisterByUsernameDocument = <<<EOF
mutation registerByUsername(\$input: RegisterByUsernameInput!) {
  registerByUsername(input: \$input) {
    id
    arn
    userPoolId
    status
    username
    email
    emailVerified
    phone
    phoneVerified
    unionid
    openid
    nickname
    registerSource
    photo
    password
    oauth
    token
    tokenExpiredAt
    loginsCount
    lastLogin
    lastIP
    signedUp
    blocked
    isDeleted
    device
    browser
    company
    name
    givenName
    familyName
    middleName
    profile
    preferredUsername
    website
    gender
    birthdate
    zoneinfo
    locale
    address
    formatted
    streetAddress
    locality
    region
    postalCode
    city
    province
    country
    createdAt
    updatedAt
    externalId
  }
}
EOF;
}
    

    
class RemoveMemberResponse {

    public \Authing\Types\Node $removeMember;
}
    
class RemoveMemberParam {

    /**
     * Optional
     */
    public int $page;

    /**
     * Optional
     */
    public int $limit;

    /**
     * Optional
     */
    public \Authing\Types\SortByEnum $sortBy;

    /**
     * Optional
     */
    public bool $includeChildrenNodes;

    /**
     * Optional
     */
    public string $nodeId;

    /**
     * Optional
     */
    public string $orgId;

    /**
     * Optional
     */
    public string $nodeCode;

/**
 * @param $userIds string[]
 */
public function __construct(
    /**
     * Required
     *
     * @var string[]
     */
    public $userIds
)
{
}

/**
 * @param $page int
 * @return RemoveMemberParam
 */
public function withPage($page) {
  $this->page = $page;
  return $this;
}

/**
 * @param $limit int
 * @return RemoveMemberParam
 */
public function withLimit($limit) {
  $this->limit = $limit;
  return $this;
}

/**
 * @param $sortBy SortByEnum
 * @return RemoveMemberParam
 */
public function withSortBy($sortBy) {
  $this->sortBy = $sortBy;
  return $this;
}

/**
 * @param $includeChildrenNodes bool
 * @return RemoveMemberParam
 */
public function withIncludeChildrenNodes($includeChildrenNodes) {
  $this->includeChildrenNodes = $includeChildrenNodes;
  return $this;
}

/**
 * @param $nodeId string
 * @return RemoveMemberParam
 */
public function withNodeId($nodeId) {
  $this->nodeId = $nodeId;
  return $this;
}

/**
 * @param $orgId string
 * @return RemoveMemberParam
 */
public function withOrgId($orgId) {
  $this->orgId = $orgId;
  return $this;
}

/**
 * @param $nodeCode string
 * @return RemoveMemberParam
 */
public function withNodeCode($nodeCode) {
  $this->nodeCode = $nodeCode;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::RemoveMemberDocument,
        "operationName" => "removeMember",
        "variables" => $this
      ];
    }

    const RemoveMemberDocument = <<<EOF
mutation removeMember(\$page: Int, \$limit: Int, \$sortBy: SortByEnum, \$includeChildrenNodes: Boolean, \$nodeId: String, \$orgId: String, \$nodeCode: String, \$userIds: [String!]!) {
  removeMember(nodeId: \$nodeId, orgId: \$orgId, nodeCode: \$nodeCode, userIds: \$userIds) {
    id
    name
    nameI18n
    description
    descriptionI18n
    order
    code
    root
    depth
    createdAt
    updatedAt
    children
    users(page: \$page, limit: \$limit, sortBy: \$sortBy, includeChildrenNodes: \$includeChildrenNodes) {
      totalCount
      list {
        id
        arn
        userPoolId
        status
        username
        email
        emailVerified
        phone
        phoneVerified
        unionid
        openid
        nickname
        registerSource
        photo
        password
        oauth
        token
        tokenExpiredAt
        loginsCount
        lastLogin
        lastIP
        signedUp
        blocked
        isDeleted
        device
        browser
        company
        name
        givenName
        familyName
        middleName
        profile
        preferredUsername
        website
        gender
        birthdate
        zoneinfo
        locale
        address
        formatted
        streetAddress
        locality
        region
        postalCode
        city
        province
        country
        createdAt
        updatedAt
      }
    }
  }
}
EOF;
}
    

    
class RemovePolicyAssignmentsResponse {

    public \Authing\Types\CommonMessage $removePolicyAssignments;
}
    
class RemovePolicyAssignmentsParam {

    /**
     * Optional
     * 
     * @var string[]
     */
    public array $targetIdentifiers;

    /**
     * Optional
     */
    public string $namespace;

/**
 * @param $policies string[]
 * @param $targetType PolicyAssignmentTargetType
 */
public function __construct(
    /**
     * Required
     *
     * @var string[]
     */
    public $policies,
    /**
     * Required
     *
     * @var PolicyAssignmentTargetType
     */
    public $targetType
)
{
}

/**
 * @param $targetIdentifiers string[]
 * @return RemovePolicyAssignmentsParam
 */
public function withTargetIdentifiers($targetIdentifiers) {
  $this->targetIdentifiers = $targetIdentifiers;
  return $this;
}

/**
 * @param $namespace string
 * @return RemovePolicyAssignmentsParam
 */
public function withNamespace($namespace) {
  $this->namespace = $namespace;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::RemovePolicyAssignmentsDocument,
        "operationName" => "removePolicyAssignments",
        "variables" => $this
      ];
    }

    const RemovePolicyAssignmentsDocument = <<<EOF
mutation removePolicyAssignments(\$policies: [String!]!, \$targetType: PolicyAssignmentTargetType!, \$targetIdentifiers: [String!], \$namespace: String) {
  removePolicyAssignments(policies: \$policies, targetType: \$targetType, targetIdentifiers: \$targetIdentifiers, namespace: \$namespace) {
    message
    code
  }
}
EOF;
}
    

    
class RemoveUdfResponse {

    public \Authing\Types\CommonMessage $removeUdf;
}
    
class RemoveUdfParam {

    /**
 * @param $targetType UdfTargetType
 * @param $key string
 */
public function __construct(
    /**
     * Required
     *
     * @var UdfTargetType
     */
    public $targetType,
    /**
     * Required
     *
     * @var string
     */
    public $key
)
{
}

    function createRequest() {
      return [
        "query" => self::RemoveUdfDocument,
        "operationName" => "removeUdf",
        "variables" => $this
      ];
    }

    const RemoveUdfDocument = <<<EOF
mutation removeUdf(\$targetType: UDFTargetType!, \$key: String!) {
  removeUdf(targetType: \$targetType, key: \$key) {
    message
    code
  }
}
EOF;
}
    

    
class RemoveUdvResponse {

    /**
     * @var UserDefinedData[]
     */
    public array $removeUdv;
}
    
class RemoveUdvParam {

    /**
 * @param $targetType UdfTargetType
 * @param $targetId string
 * @param $key string
 */
public function __construct(
    /**
     * Required
     *
     * @var UdfTargetType
     */
    public $targetType,
    /**
     * Required
     *
     * @var string
     */
    public $targetId,
    /**
     * Required
     *
     * @var string
     */
    public $key
)
{
}

    function createRequest() {
      return [
        "query" => self::RemoveUdvDocument,
        "operationName" => "removeUdv",
        "variables" => $this
      ];
    }

    const RemoveUdvDocument = <<<EOF
mutation removeUdv(\$targetType: UDFTargetType!, \$targetId: String!, \$key: String!) {
  removeUdv(targetType: \$targetType, targetId: \$targetId, key: \$key) {
    key
    dataType
    value
    label
  }
}
EOF;
}
    

    
class RemoveUserFromGroupResponse {

    public \Authing\Types\CommonMessage $removeUserFromGroup;
}
    
class RemoveUserFromGroupParam {

    /**
     * Optional
     */
    public string $code;

/**
 * @param $userIds string[]
 */
public function __construct(
    /**
     * Required
     *
     * @var string[]
     */
    public $userIds
)
{
}

/**
 * @param $code string
 * @return RemoveUserFromGroupParam
 */
public function withCode($code) {
  $this->code = $code;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::RemoveUserFromGroupDocument,
        "operationName" => "removeUserFromGroup",
        "variables" => $this
      ];
    }

    const RemoveUserFromGroupDocument = <<<EOF
mutation removeUserFromGroup(\$userIds: [String!]!, \$code: String) {
  removeUserFromGroup(userIds: \$userIds, code: \$code) {
    message
    code
  }
}
EOF;
}
    

    
class RemoveWhitelistResponse {

    /**
     * @var WhiteList[]
     */
    public array $removeWhitelist;
}
    
class RemoveWhitelistParam {

    /**
 * @param $type WhitelistType
 * @param $list string[]
 */
public function __construct(
    /**
     * Required
     *
     * @var WhitelistType
     */
    public $type,
    /**
     * Required
     *
     * @var string[]
     */
    public $list
)
{
}

    function createRequest() {
      return [
        "query" => self::RemoveWhitelistDocument,
        "operationName" => "removeWhitelist",
        "variables" => $this
      ];
    }

    const RemoveWhitelistDocument = <<<EOF
mutation removeWhitelist(\$type: WhitelistType!, \$list: [String!]!) {
  removeWhitelist(type: \$type, list: \$list) {
    createdAt
    updatedAt
    value
  }
}
EOF;
}
    

    
class ResetPasswordResponse {

    public \Authing\Types\CommonMessage $resetPassword;
}
    
class ResetPasswordParam {

    /**
     * Optional
     */
    public string $phone;

    /**
     * Optional
     */
    public string $email;

/**
 * @param $code string
 * @param $newPassword string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $code,
    /**
     * Required
     *
     * @var string
     */
    public $newPassword
)
{
}

/**
 * @param $phone string
 * @return ResetPasswordParam
 */
public function withPhone($phone) {
  $this->phone = $phone;
  return $this;
}

/**
 * @param $email string
 * @return ResetPasswordParam
 */
public function withEmail($email) {
  $this->email = $email;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::ResetPasswordDocument,
        "operationName" => "resetPassword",
        "variables" => $this
      ];
    }

    const ResetPasswordDocument = <<<EOF
mutation resetPassword(\$phone: String, \$email: String, \$code: String!, \$newPassword: String!) {
  resetPassword(phone: \$phone, email: \$email, code: \$code, newPassword: \$newPassword) {
    message
    code
  }
}
EOF;
}
    

    
class RevokeRoleResponse {

    public \Authing\Types\CommonMessage $revokeRole;
}
    
class RevokeRoleParam {

    /**
     * Optional
     */
    public string $namespace;

    /**
     * Optional
     */
    public string $roleCode;

    /**
     * Optional
     * 
     * @var string[]
     */
    public array $roleCodes;

    /**
     * Optional
     * 
     * @var string[]
     */
    public array $userIds;

    /**
     * Optional
     * 
     * @var string[]
     */
    public array $groupCodes;

    /**
     * Optional
     * 
     * @var string[]
     */
    public array $nodeCodes;

public function __construct() {

}

/**
 * @param $namespace string
 * @return RevokeRoleParam
 */
public function withNamespace($namespace) {
  $this->namespace = $namespace;
  return $this;
}

/**
 * @param $roleCode string
 * @return RevokeRoleParam
 */
public function withRoleCode($roleCode) {
  $this->roleCode = $roleCode;
  return $this;
}

/**
 * @param $roleCodes string[]
 * @return RevokeRoleParam
 */
public function withRoleCodes($roleCodes) {
  $this->roleCodes = $roleCodes;
  return $this;
}

/**
 * @param $userIds string[]
 * @return RevokeRoleParam
 */
public function withUserIds($userIds) {
  $this->userIds = $userIds;
  return $this;
}

/**
 * @param $groupCodes string[]
 * @return RevokeRoleParam
 */
public function withGroupCodes($groupCodes) {
  $this->groupCodes = $groupCodes;
  return $this;
}

/**
 * @param $nodeCodes string[]
 * @return RevokeRoleParam
 */
public function withNodeCodes($nodeCodes) {
  $this->nodeCodes = $nodeCodes;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::RevokeRoleDocument,
        "operationName" => "revokeRole",
        "variables" => $this
      ];
    }

    const RevokeRoleDocument = <<<EOF
mutation revokeRole(\$namespace: String, \$roleCode: String, \$roleCodes: [String], \$userIds: [String!], \$groupCodes: [String!], \$nodeCodes: [String!]) {
  revokeRole(namespace: \$namespace, roleCode: \$roleCode, roleCodes: \$roleCodes, userIds: \$userIds, groupCodes: \$groupCodes, nodeCodes: \$nodeCodes) {
    message
    code
  }
}
EOF;
}
    

    
class SendEmailResponse {

    public \Authing\Types\CommonMessage $sendEmail;
}
    
class SendEmailParam {

    /**
 * @param $email string
 * @param $scene EmailScene
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $email,
    /**
     * Required
     *
     * @var EmailScene
     */
    public $scene
)
{
}

    function createRequest() {
      return [
        "query" => self::SendEmailDocument,
        "operationName" => "sendEmail",
        "variables" => $this
      ];
    }

    const SendEmailDocument = <<<EOF
mutation sendEmail(\$email: String!, \$scene: EmailScene!) {
  sendEmail(email: \$email, scene: \$scene) {
    message
    code
  }
}
EOF;
}
    

    
class SetMainDepartmentResponse {

    public \Authing\Types\CommonMessage $setMainDepartment;
}
    
class SetMainDepartmentParam {

    /**
     * Optional
     */
    public string $departmentId;

/**
 * @param $userId string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $userId
)
{
}

/**
 * @param $departmentId string
 * @return SetMainDepartmentParam
 */
public function withDepartmentId($departmentId) {
  $this->departmentId = $departmentId;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::SetMainDepartmentDocument,
        "operationName" => "setMainDepartment",
        "variables" => $this
      ];
    }

    const SetMainDepartmentDocument = <<<EOF
mutation setMainDepartment(\$userId: String!, \$departmentId: String) {
  setMainDepartment(userId: \$userId, departmentId: \$departmentId) {
    message
    code
  }
}
EOF;
}
    

    
class SetUdfResponse {

    public \Authing\Types\UserDefinedField $setUdf;
}
    
class SetUdfParam {

    /**
     * Optional
     */
    public string $options;

/**
 * @param $targetType UdfTargetType
 * @param $key string
 * @param $dataType UdfDataType
 * @param $label string
 */
public function __construct(
    /**
     * Required
     *
     * @var UdfTargetType
     */
    public $targetType,
    /**
     * Required
     *
     * @var string
     */
    public $key,
    /**
     * Required
     *
     * @var UdfDataType
     */
    public $dataType,
    /**
     * Required
     *
     * @var string
     */
    public $label
)
{
}

/**
 * @param $options string
 * @return SetUdfParam
 */
public function withOptions($options) {
  $this->options = $options;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::SetUdfDocument,
        "operationName" => "setUdf",
        "variables" => $this
      ];
    }

    const SetUdfDocument = <<<EOF
mutation setUdf(\$targetType: UDFTargetType!, \$key: String!, \$dataType: UDFDataType!, \$label: String!, \$options: String) {
  setUdf(targetType: \$targetType, key: \$key, dataType: \$dataType, label: \$label, options: \$options) {
    targetType
    dataType
    key
    label
    options
  }
}
EOF;
}
    

    
class SetUdfValueBatchResponse {

    public \Authing\Types\CommonMessage $setUdfValueBatch;
}
    
class SetUdfValueBatchParam {

    /**
 * @param $targetType UdfTargetType
 * @param $input SetUdfValueBatchInput[]
 */
public function __construct(
    /**
     * Required
     *
     * @var UdfTargetType
     */
    public $targetType,
    /**
     * Required
     *
     * @var SetUdfValueBatchInput[]
     */
    public $input
)
{
}

    function createRequest() {
      return [
        "query" => self::SetUdfValueBatchDocument,
        "operationName" => "setUdfValueBatch",
        "variables" => $this
      ];
    }

    const SetUdfValueBatchDocument = <<<EOF
mutation setUdfValueBatch(\$targetType: UDFTargetType!, \$input: [SetUdfValueBatchInput!]!) {
  setUdfValueBatch(targetType: \$targetType, input: \$input) {
    code
    message
  }
}
EOF;
}
    

    
class SetUdvResponse {

    /**
     * @var UserDefinedData[]
     */
    public array $setUdv;
}
    
class SetUdvParam {

    /**
 * @param $targetType UdfTargetType
 * @param $targetId string
 * @param $key string
 * @param $value string
 */
public function __construct(
    /**
     * Required
     *
     * @var UdfTargetType
     */
    public $targetType,
    /**
     * Required
     *
     * @var string
     */
    public $targetId,
    /**
     * Required
     *
     * @var string
     */
    public $key,
    /**
     * Required
     *
     * @var string
     */
    public $value
)
{
}

    function createRequest() {
      return [
        "query" => self::SetUdvDocument,
        "operationName" => "setUdv",
        "variables" => $this
      ];
    }

    const SetUdvDocument = <<<EOF
mutation setUdv(\$targetType: UDFTargetType!, \$targetId: String!, \$key: String!, \$value: String!) {
  setUdv(targetType: \$targetType, targetId: \$targetId, key: \$key, value: \$value) {
    key
    dataType
    value
    label
  }
}
EOF;
}
    

    
class SetUdvBatchResponse {

    /**
     * @var UserDefinedData[]
     */
    public array $setUdvBatch;
}
    
class SetUdvBatchParam {

    /**
     * Optional
     * 
     * @var UserDefinedDataInput[]
     */
    public array $udvList;

/**
 * @param $targetType UdfTargetType
 * @param $targetId string
 */
public function __construct(
    /**
     * Required
     *
     * @var UdfTargetType
     */
    public $targetType,
    /**
     * Required
     *
     * @var string
     */
    public $targetId
)
{
}

/**
 * @param $udvList UserDefinedDataInput[]
 * @return SetUdvBatchParam
 */
public function withUdvList($udvList) {
  $this->udvList = $udvList;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::SetUdvBatchDocument,
        "operationName" => "setUdvBatch",
        "variables" => $this
      ];
    }

    const SetUdvBatchDocument = <<<EOF
mutation setUdvBatch(\$targetType: UDFTargetType!, \$targetId: String!, \$udvList: [UserDefinedDataInput!]) {
  setUdvBatch(targetType: \$targetType, targetId: \$targetId, udvList: \$udvList) {
    key
    dataType
    value
    label
  }
}
EOF;
}
    

    
class UnbindEmailResponse {

    public \Authing\Types\User $unbindEmail;
}
    
class UnbindEmailParam {



    function createRequest() {
      return [
        "query" => self::UnbindEmailDocument,
        "operationName" => "unbindEmail",
        "variables" => $this
      ];
    }

    const UnbindEmailDocument = <<<EOF
mutation unbindEmail {
  unbindEmail {
    id
    arn
    userPoolId
    status
    username
    email
    emailVerified
    phone
    phoneVerified
    unionid
    openid
    nickname
    registerSource
    photo
    password
    oauth
    token
    tokenExpiredAt
    loginsCount
    lastLogin
    lastIP
    signedUp
    blocked
    isDeleted
    device
    browser
    company
    name
    givenName
    familyName
    middleName
    profile
    preferredUsername
    website
    gender
    birthdate
    zoneinfo
    locale
    address
    formatted
    streetAddress
    locality
    region
    postalCode
    city
    province
    country
    createdAt
    updatedAt
  }
}
EOF;
}
    

    
class UnbindPhoneResponse {

    public \Authing\Types\User $unbindPhone;
}
    
class UnbindPhoneParam {



    function createRequest() {
      return [
        "query" => self::UnbindPhoneDocument,
        "operationName" => "unbindPhone",
        "variables" => $this
      ];
    }

    const UnbindPhoneDocument = <<<EOF
mutation unbindPhone {
  unbindPhone {
    id
    arn
    userPoolId
    status
    username
    email
    emailVerified
    phone
    phoneVerified
    unionid
    openid
    nickname
    registerSource
    photo
    password
    oauth
    token
    tokenExpiredAt
    loginsCount
    lastLogin
    lastIP
    signedUp
    blocked
    isDeleted
    device
    browser
    company
    name
    givenName
    familyName
    middleName
    profile
    preferredUsername
    website
    gender
    birthdate
    zoneinfo
    locale
    address
    formatted
    streetAddress
    locality
    region
    postalCode
    city
    province
    country
    createdAt
    updatedAt
  }
}
EOF;
}
    

    
class UpdateEmailResponse {

    public \Authing\Types\User $updateEmail;
}
    
class UpdateEmailParam {

    /**
     * Optional
     */
    public string $oldEmail;

    /**
     * Optional
     */
    public string $oldEmailCode;

/**
 * @param $email string
 * @param $emailCode string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $email,
    /**
     * Required
     *
     * @var string
     */
    public $emailCode
)
{
}

/**
 * @param $oldEmail string
 * @return UpdateEmailParam
 */
public function withOldEmail($oldEmail) {
  $this->oldEmail = $oldEmail;
  return $this;
}

/**
 * @param $oldEmailCode string
 * @return UpdateEmailParam
 */
public function withOldEmailCode($oldEmailCode) {
  $this->oldEmailCode = $oldEmailCode;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::UpdateEmailDocument,
        "operationName" => "updateEmail",
        "variables" => $this
      ];
    }

    const UpdateEmailDocument = <<<EOF
mutation updateEmail(\$email: String!, \$emailCode: String!, \$oldEmail: String, \$oldEmailCode: String) {
  updateEmail(email: \$email, emailCode: \$emailCode, oldEmail: \$oldEmail, oldEmailCode: \$oldEmailCode) {
    id
    arn
    userPoolId
    status
    username
    email
    emailVerified
    phone
    phoneVerified
    unionid
    openid
    nickname
    registerSource
    photo
    password
    oauth
    token
    tokenExpiredAt
    loginsCount
    lastLogin
    lastIP
    signedUp
    blocked
    isDeleted
    device
    browser
    company
    name
    givenName
    familyName
    middleName
    profile
    preferredUsername
    website
    gender
    birthdate
    zoneinfo
    locale
    address
    formatted
    streetAddress
    locality
    region
    postalCode
    city
    province
    country
    createdAt
    updatedAt
  }
}
EOF;
}
    

    
class UpdateFunctionResponse {

    /**
     * @var Function
     */
    public $updateFunction;
}
    
class UpdateFunctionParam {

    /**
 * @param $input UpdateFunctionInput
 */
public function __construct(
    /**
     * Required
     *
     * @var UpdateFunctionInput
     */
    public $input
)
{
}

    function createRequest() {
      return [
        "query" => self::UpdateFunctionDocument,
        "operationName" => "updateFunction",
        "variables" => $this
      ];
    }

    const UpdateFunctionDocument = <<<EOF
mutation updateFunction(\$input: UpdateFunctionInput!) {
  updateFunction(input: \$input) {
    id
    name
    sourceCode
    description
    url
  }
}
EOF;
}
    

    
class UpdateGroupResponse {

    public \Authing\Types\Group $updateGroup;
}
    
class UpdateGroupParam {

    /**
     * Optional
     */
    public string $name;

    /**
     * Optional
     */
    public string $description;

    /**
     * Optional
     */
    public string $newCode;

/**
 * @param $code string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $code
)
{
}

/**
 * @param $name string
 * @return UpdateGroupParam
 */
public function withName($name) {
  $this->name = $name;
  return $this;
}

/**
 * @param $description string
 * @return UpdateGroupParam
 */
public function withDescription($description) {
  $this->description = $description;
  return $this;
}

/**
 * @param $newCode string
 * @return UpdateGroupParam
 */
public function withNewCode($newCode) {
  $this->newCode = $newCode;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::UpdateGroupDocument,
        "operationName" => "updateGroup",
        "variables" => $this
      ];
    }

    const UpdateGroupDocument = <<<EOF
mutation updateGroup(\$code: String!, \$name: String, \$description: String, \$newCode: String) {
  updateGroup(code: \$code, name: \$name, description: \$description, newCode: \$newCode) {
    code
    name
    description
    createdAt
    updatedAt
  }
}
EOF;
}
    

    
class UpdateNodeResponse {

    public \Authing\Types\Node $updateNode;
}
    
class UpdateNodeParam {

    /**
     * Optional
     */
    public int $page;

    /**
     * Optional
     */
    public int $limit;

    /**
     * Optional
     */
    public \Authing\Types\SortByEnum $sortBy;

    /**
     * Optional
     */
    public bool $includeChildrenNodes;

    /**
     * Optional
     */
    public string $name;

    /**
     * Optional
     */
    public string $code;

    /**
     * Optional
     */
    public string $description;

/**
 * @param $id string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $id
)
{
}

/**
 * @param $page int
 * @return UpdateNodeParam
 */
public function withPage($page) {
  $this->page = $page;
  return $this;
}

/**
 * @param $limit int
 * @return UpdateNodeParam
 */
public function withLimit($limit) {
  $this->limit = $limit;
  return $this;
}

/**
 * @param $sortBy SortByEnum
 * @return UpdateNodeParam
 */
public function withSortBy($sortBy) {
  $this->sortBy = $sortBy;
  return $this;
}

/**
 * @param $includeChildrenNodes bool
 * @return UpdateNodeParam
 */
public function withIncludeChildrenNodes($includeChildrenNodes) {
  $this->includeChildrenNodes = $includeChildrenNodes;
  return $this;
}

/**
 * @param $name string
 * @return UpdateNodeParam
 */
public function withName($name) {
  $this->name = $name;
  return $this;
}

/**
 * @param $code string
 * @return UpdateNodeParam
 */
public function withCode($code) {
  $this->code = $code;
  return $this;
}

/**
 * @param $description string
 * @return UpdateNodeParam
 */
public function withDescription($description) {
  $this->description = $description;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::UpdateNodeDocument,
        "operationName" => "updateNode",
        "variables" => $this
      ];
    }

    const UpdateNodeDocument = <<<EOF
mutation updateNode(\$page: Int, \$limit: Int, \$sortBy: SortByEnum, \$includeChildrenNodes: Boolean, \$id: String!, \$name: String, \$code: String, \$description: String) {
  updateNode(id: \$id, name: \$name, code: \$code, description: \$description) {
    id
    orgId
    name
    nameI18n
    description
    descriptionI18n
    order
    code
    root
    depth
    path
    createdAt
    updatedAt
    children
    users(page: \$page, limit: \$limit, sortBy: \$sortBy, includeChildrenNodes: \$includeChildrenNodes) {
      totalCount
    }
  }
}
EOF;
}
    

    
class UpdatePasswordResponse {

    public \Authing\Types\User $updatePassword;
}
    
class UpdatePasswordParam {

    /**
     * Optional
     */
    public string $oldPassword;

/**
 * @param $newPassword string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $newPassword
)
{
}

/**
 * @param $oldPassword string
 * @return UpdatePasswordParam
 */
public function withOldPassword($oldPassword) {
  $this->oldPassword = $oldPassword;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::UpdatePasswordDocument,
        "operationName" => "updatePassword",
        "variables" => $this
      ];
    }

    const UpdatePasswordDocument = <<<EOF
mutation updatePassword(\$newPassword: String!, \$oldPassword: String) {
  updatePassword(newPassword: \$newPassword, oldPassword: \$oldPassword) {
    id
    arn
    userPoolId
    status
    username
    email
    emailVerified
    phone
    phoneVerified
    unionid
    openid
    nickname
    registerSource
    photo
    password
    oauth
    token
    tokenExpiredAt
    loginsCount
    lastLogin
    lastIP
    signedUp
    blocked
    isDeleted
    device
    browser
    company
    name
    givenName
    familyName
    middleName
    profile
    preferredUsername
    website
    gender
    birthdate
    zoneinfo
    locale
    address
    formatted
    streetAddress
    locality
    region
    postalCode
    city
    province
    country
    createdAt
    updatedAt
  }
}
EOF;
}
    

    
class UpdatePhoneResponse {

    public \Authing\Types\User $updatePhone;
}
    
class UpdatePhoneParam {

    /**
     * Optional
     */
    public string $oldPhone;

    /**
     * Optional
     */
    public string $oldPhoneCode;

/**
 * @param $phone string
 * @param $phoneCode string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $phone,
    /**
     * Required
     *
     * @var string
     */
    public $phoneCode
)
{
}

/**
 * @param $oldPhone string
 * @return UpdatePhoneParam
 */
public function withOldPhone($oldPhone) {
  $this->oldPhone = $oldPhone;
  return $this;
}

/**
 * @param $oldPhoneCode string
 * @return UpdatePhoneParam
 */
public function withOldPhoneCode($oldPhoneCode) {
  $this->oldPhoneCode = $oldPhoneCode;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::UpdatePhoneDocument,
        "operationName" => "updatePhone",
        "variables" => $this
      ];
    }

    const UpdatePhoneDocument = <<<EOF
mutation updatePhone(\$phone: String!, \$phoneCode: String!, \$oldPhone: String, \$oldPhoneCode: String) {
  updatePhone(phone: \$phone, phoneCode: \$phoneCode, oldPhone: \$oldPhone, oldPhoneCode: \$oldPhoneCode) {
    id
    arn
    userPoolId
    status
    username
    email
    emailVerified
    phone
    phoneVerified
    unionid
    openid
    nickname
    registerSource
    photo
    password
    oauth
    token
    tokenExpiredAt
    loginsCount
    lastLogin
    lastIP
    signedUp
    blocked
    isDeleted
    device
    browser
    company
    name
    givenName
    familyName
    middleName
    profile
    preferredUsername
    website
    gender
    birthdate
    zoneinfo
    locale
    address
    formatted
    streetAddress
    locality
    region
    postalCode
    city
    province
    country
    createdAt
    updatedAt
  }
}
EOF;
}
    

    
class UpdatePolicyResponse {

    public \Authing\Types\Policy $updatePolicy;
}
    
class UpdatePolicyParam {

    /**
     * Optional
     */
    public string $namespace;

    /**
     * Optional
     */
    public string $description;

    /**
     * Optional
     * 
     * @var PolicyStatementInput[]
     */
    public array $statements;

    /**
     * Optional
     */
    public string $newCode;

/**
 * @param $code string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $code
)
{
}

/**
 * @param $namespace string
 * @return UpdatePolicyParam
 */
public function withNamespace($namespace) {
  $this->namespace = $namespace;
  return $this;
}

/**
 * @param $description string
 * @return UpdatePolicyParam
 */
public function withDescription($description) {
  $this->description = $description;
  return $this;
}

/**
 * @param $statements PolicyStatementInput[]
 * @return UpdatePolicyParam
 */
public function withStatements($statements) {
  $this->statements = $statements;
  return $this;
}

/**
 * @param $newCode string
 * @return UpdatePolicyParam
 */
public function withNewCode($newCode) {
  $this->newCode = $newCode;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::UpdatePolicyDocument,
        "operationName" => "updatePolicy",
        "variables" => $this
      ];
    }

    const UpdatePolicyDocument = <<<EOF
mutation updatePolicy(\$namespace: String, \$code: String!, \$description: String, \$statements: [PolicyStatementInput!], \$newCode: String) {
  updatePolicy(namespace: \$namespace, code: \$code, description: \$description, statements: \$statements, newCode: \$newCode) {
    namespace
    code
    description
    statements {
      resource
      actions
      effect
      condition {
        param
        operator
        value
      }
    }
    createdAt
    updatedAt
  }
}
EOF;
}
    

    
class UpdateRoleResponse {

    public \Authing\Types\Role $updateRole;
}
    
class UpdateRoleParam {

    /**
     * Optional
     */
    public string $description;

    /**
     * Optional
     */
    public string $newCode;

    /**
     * Optional
     */
    public string $namespace;

/**
 * @param $code string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $code
)
{
}

/**
 * @param $description string
 * @return UpdateRoleParam
 */
public function withDescription($description) {
  $this->description = $description;
  return $this;
}

/**
 * @param $newCode string
 * @return UpdateRoleParam
 */
public function withNewCode($newCode) {
  $this->newCode = $newCode;
  return $this;
}

/**
 * @param $namespace string
 * @return UpdateRoleParam
 */
public function withNamespace($namespace) {
  $this->namespace = $namespace;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::UpdateRoleDocument,
        "operationName" => "updateRole",
        "variables" => $this
      ];
    }

    const UpdateRoleDocument = <<<EOF
mutation updateRole(\$code: String!, \$description: String, \$newCode: String, \$namespace: String) {
  updateRole(code: \$code, description: \$description, newCode: \$newCode, namespace: \$namespace) {
    namespace
    code
    arn
    description
    createdAt
    updatedAt
    parent {
      namespace
      code
      arn
      description
      createdAt
      updatedAt
    }
  }
}
EOF;
}
    

    
class UpdateUserResponse {

    public \Authing\Types\User $updateUser;
}
    
class UpdateUserParam {

    /**
     * Optional
     */
    public string $id;

/**
 * @param $input UpdateUserInput
 */
public function __construct(
    /**
     * Required
     *
     * @var UpdateUserInput
     */
    public $input
)
{
}

/**
 * @param $id string
 * @return UpdateUserParam
 */
public function withId($id) {
  $this->id = $id;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::UpdateUserDocument,
        "operationName" => "updateUser",
        "variables" => $this
      ];
    }

    const UpdateUserDocument = <<<EOF
mutation updateUser(\$id: String, \$input: UpdateUserInput!) {
  updateUser(id: \$id, input: \$input) {
    id
    arn
    userPoolId
    status
    username
    email
    emailVerified
    phone
    phoneVerified
    unionid
    openid
    nickname
    registerSource
    photo
    password
    oauth
    token
    tokenExpiredAt
    loginsCount
    lastLogin
    lastIP
    signedUp
    blocked
    isDeleted
    device
    browser
    company
    name
    givenName
    familyName
    middleName
    profile
    preferredUsername
    website
    gender
    birthdate
    zoneinfo
    locale
    address
    formatted
    streetAddress
    locality
    region
    postalCode
    city
    province
    country
    createdAt
    updatedAt
    externalId
  }
}
EOF;
}
    

    
class UpdateUserpoolResponse {

    public \Authing\Types\UserPool $updateUserpool;
}
    
class UpdateUserpoolParam {

    /**
 * @param $input UpdateUserpoolInput
 */
public function __construct(
    /**
     * Required
     *
     * @var UpdateUserpoolInput
     */
    public $input
)
{
}

    function createRequest() {
      return [
        "query" => self::UpdateUserpoolDocument,
        "operationName" => "updateUserpool",
        "variables" => $this
      ];
    }

    const UpdateUserpoolDocument = <<<EOF
mutation updateUserpool(\$input: UpdateUserpoolInput!) {
  updateUserpool(input: \$input) {
    id
    name
    domain
    description
    secret
    jwtSecret
    userpoolTypes {
      code
      name
      description
      image
      sdks
    }
    logo
    createdAt
    updatedAt
    emailVerifiedDefault
    sendWelcomeEmail
    registerDisabled
    appSsoEnabled
    showWxQRCodeWhenRegisterDisabled
    allowedOrigins
    tokenExpiresAfter
    isDeleted
    frequentRegisterCheck {
      timeInterval
      limit
      enabled
    }
    loginFailCheck {
      timeInterval
      limit
      enabled
    }
    changePhoneStrategy {
      verifyOldPhone
    }
    changeEmailStrategy {
      verifyOldEmail
    }
    qrcodeLoginStrategy {
      qrcodeExpiresAfter
      returnFullUserInfo
      allowExchangeUserInfoFromBrowser
      ticketExpiresAfter
    }
    app2WxappLoginStrategy {
      ticketExpriresAfter
      ticketExchangeUserInfoNeedSecret
    }
    whitelist {
      phoneEnabled
      emailEnabled
      usernameEnabled
    }
    customSMSProvider {
      enabled
      provider
      config
    }
    packageType
    useCustomUserStore
    loginRequireEmailVerified
    verifyCodeLength
  }
}
EOF;
}
    

    
class AccessTokenResponse {

    public \Authing\Types\AccessTokenRes $accessToken;
}
    
class AccessTokenParam {

    /**
 * @param $userPoolId string
 * @param $secret string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $userPoolId,
    /**
     * Required
     *
     * @var string
     */
    public $secret
)
{
}

    function createRequest() {
      return [
        "query" => self::AccessTokenDocument,
        "operationName" => "accessToken",
        "variables" => $this
      ];
    }

    const AccessTokenDocument = <<<EOF
query accessToken(\$userPoolId: String!, \$secret: String!) {
  accessToken(userPoolId: \$userPoolId, secret: \$secret) {
    accessToken
    exp
    iat
  }
}
EOF;
}
    

    
class ArchivedUsersResponse {

    public \Authing\Types\PaginatedUsers $archivedUsers;
}
    
class ArchivedUsersParam {

    /**
     * Optional
     */
    public int $page;

    /**
     * Optional
     */
    public int $limit;

public function __construct() {

}

/**
 * @param $page int
 * @return ArchivedUsersParam
 */
public function withPage($page) {
  $this->page = $page;
  return $this;
}

/**
 * @param $limit int
 * @return ArchivedUsersParam
 */
public function withLimit($limit) {
  $this->limit = $limit;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::ArchivedUsersDocument,
        "operationName" => "archivedUsers",
        "variables" => $this
      ];
    }

    const ArchivedUsersDocument = <<<EOF
query archivedUsers(\$page: Int, \$limit: Int) {
  archivedUsers(page: \$page, limit: \$limit) {
    totalCount
    list {
      id
      arn
      status
      userPoolId
      username
      email
      emailVerified
      phone
      phoneVerified
      unionid
      openid
      nickname
      registerSource
      photo
      password
      oauth
      token
      tokenExpiredAt
      loginsCount
      lastLogin
      lastIP
      signedUp
      blocked
      isDeleted
      device
      browser
      company
      name
      givenName
      familyName
      middleName
      profile
      preferredUsername
      website
      gender
      birthdate
      zoneinfo
      locale
      address
      formatted
      streetAddress
      locality
      region
      postalCode
      city
      province
      country
      createdAt
      updatedAt
      externalId
    }
  }
}
EOF;
}
    

    
class AuthorizedTargetsResponse {

    public \Authing\Types\PaginatedAuthorizedTargets $authorizedTargets;
}
    
class AuthorizedTargetsParam {

    /**
     * Optional
     */
    public \Authing\Types\PolicyAssignmentTargetType $targetType;

    /**
     * Optional
     */
    public \Authing\Types\AuthorizedTargetsActionsInput $actions;

/**
 * @param $namespace string
 * @param $resourceType ResourceType
 * @param $resource string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $namespace,
    /**
     * Required
     *
     * @var ResourceType
     */
    public $resourceType,
    /**
     * Required
     *
     * @var string
     */
    public $resource
)
{
}

/**
 * @param $targetType PolicyAssignmentTargetType
 * @return AuthorizedTargetsParam
 */
public function withTargetType($targetType) {
  $this->targetType = $targetType;
  return $this;
}

/**
 * @param $actions AuthorizedTargetsActionsInput
 * @return AuthorizedTargetsParam
 */
public function withActions($actions) {
  $this->actions = $actions;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::AuthorizedTargetsDocument,
        "operationName" => "authorizedTargets",
        "variables" => $this
      ];
    }

    const AuthorizedTargetsDocument = <<<EOF
query authorizedTargets(\$namespace: String!, \$resourceType: ResourceType!, \$resource: String!, \$targetType: PolicyAssignmentTargetType, \$actions: AuthorizedTargetsActionsInput) {
  authorizedTargets(namespace: \$namespace, resource: \$resource, resourceType: \$resourceType, targetType: \$targetType, actions: \$actions) {
    totalCount
    list {
      targetType
      targetIdentifier
      actions
    }
  }
}
EOF;
}
    

    
class CheckLoginStatusResponse {

    public \Authing\Types\JWTTokenStatus $checkLoginStatus;
}
    
class CheckLoginStatusParam {

    /**
     * Optional
     */
    public string $token;

public function __construct() {

}

/**
 * @param $token string
 * @return CheckLoginStatusParam
 */
public function withToken($token) {
  $this->token = $token;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::CheckLoginStatusDocument,
        "operationName" => "checkLoginStatus",
        "variables" => $this
      ];
    }

    const CheckLoginStatusDocument = <<<EOF
query checkLoginStatus(\$token: String) {
  checkLoginStatus(token: \$token) {
    code
    message
    status
    exp
    iat
    data {
      id
      userPoolId
      arn
    }
  }
}
EOF;
}
    

    
class CheckPasswordStrengthResponse {

    public \Authing\Types\CheckPasswordStrengthResult $checkPasswordStrength;
}
    
class CheckPasswordStrengthParam {

    /**
 * @param $password string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $password
)
{
}

    function createRequest() {
      return [
        "query" => self::CheckPasswordStrengthDocument,
        "operationName" => "checkPasswordStrength",
        "variables" => $this
      ];
    }

    const CheckPasswordStrengthDocument = <<<EOF
query checkPasswordStrength(\$password: String!) {
  checkPasswordStrength(password: \$password) {
    valid
    message
  }
}
EOF;
}
    

    
class ChildrenNodesResponse {

    /**
     * @var Node[]
     */
    public array $childrenNodes;
}
    
class ChildrenNodesParam {

    /**
 * @param $orgId string
 * @param $nodeId string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $orgId,
    /**
     * Required
     *
     * @var string
     */
    public $nodeId
)
{
}

    function createRequest() {
      return [
        "query" => self::ChildrenNodesDocument,
        "operationName" => "childrenNodes",
        "variables" => $this
      ];
    }

    const ChildrenNodesDocument = <<<EOF
query childrenNodes(\$orgId: String!, \$nodeId: String!) {
  childrenNodes(orgId: \$orgId, nodeId: \$nodeId) {
    id
    orgId
    name
    nameI18n
    description
    descriptionI18n
    order
    code
    root
    depth
    path
    createdAt
    updatedAt
    children
  }
}
EOF;
}
    

    
class EmailTemplatesResponse {

    /**
     * @var EmailTemplate[]
     */
    public array $emailTemplates;
}
    
class EmailTemplatesParam {



    function createRequest() {
      return [
        "query" => self::EmailTemplatesDocument,
        "operationName" => "emailTemplates",
        "variables" => $this
      ];
    }

    const EmailTemplatesDocument = <<<EOF
query emailTemplates {
  emailTemplates {
    type
    name
    subject
    sender
    content
    redirectTo
    hasURL
    expiresIn
    enabled
    isSystem
  }
}
EOF;
}
    

    
class FindUserResponse {

    public \Authing\Types\User $findUser;
}
    
class FindUserParam {

    /**
     * Optional
     */
    public string $email;

    /**
     * Optional
     */
    public string $phone;

    /**
     * Optional
     */
    public string $username;

    /**
     * Optional
     */
    public string $externalId;

public function __construct() {

}

/**
 * @param $email string
 * @return FindUserParam
 */
public function withEmail($email) {
  $this->email = $email;
  return $this;
}

/**
 * @param $phone string
 * @return FindUserParam
 */
public function withPhone($phone) {
  $this->phone = $phone;
  return $this;
}

/**
 * @param $username string
 * @return FindUserParam
 */
public function withUsername($username) {
  $this->username = $username;
  return $this;
}

/**
 * @param $externalId string
 * @return FindUserParam
 */
public function withExternalId($externalId) {
  $this->externalId = $externalId;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::FindUserDocument,
        "operationName" => "findUser",
        "variables" => $this
      ];
    }

    const FindUserDocument = <<<EOF
query findUser(\$email: String, \$phone: String, \$username: String, \$externalId: String) {
  findUser(email: \$email, phone: \$phone, username: \$username, externalId: \$externalId) {
    id
    arn
    userPoolId
    status
    username
    email
    emailVerified
    phone
    phoneVerified
    unionid
    openid
    nickname
    registerSource
    photo
    password
    oauth
    token
    tokenExpiredAt
    loginsCount
    lastLogin
    lastIP
    signedUp
    blocked
    isDeleted
    device
    browser
    company
    name
    givenName
    familyName
    middleName
    profile
    preferredUsername
    website
    gender
    birthdate
    zoneinfo
    locale
    address
    formatted
    streetAddress
    locality
    region
    postalCode
    city
    province
    country
    createdAt
    updatedAt
    externalId
  }
}
EOF;
}
    

    
class FunctionResponse {

    /**
     * @var Function
     */
    public $function;
}
    
class FunctionParam {

    /**
     * Optional
     */
    public string $id;

public function __construct() {

}

/**
 * @param $id string
 * @return FunctionParam
 */
public function withId($id) {
  $this->id = $id;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::FunctionDocument,
        "operationName" => "function",
        "variables" => $this
      ];
    }

    const FunctionDocument = <<<EOF
query function(\$id: String) {
  function(id: \$id) {
    id
    name
    sourceCode
    description
    url
  }
}
EOF;
}
    

    
class FunctionsResponse {

    public \Authing\Types\PaginatedFunctions $functions;
}
    
class FunctionsParam {

    /**
     * Optional
     */
    public int $page;

    /**
     * Optional
     */
    public int $limit;

    /**
     * Optional
     */
    public \Authing\Types\SortByEnum $sortBy;

public function __construct() {

}

/**
 * @param $page int
 * @return FunctionsParam
 */
public function withPage($page) {
  $this->page = $page;
  return $this;
}

/**
 * @param $limit int
 * @return FunctionsParam
 */
public function withLimit($limit) {
  $this->limit = $limit;
  return $this;
}

/**
 * @param $sortBy SortByEnum
 * @return FunctionsParam
 */
public function withSortBy($sortBy) {
  $this->sortBy = $sortBy;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::FunctionsDocument,
        "operationName" => "functions",
        "variables" => $this
      ];
    }

    const FunctionsDocument = <<<EOF
query functions(\$page: Int, \$limit: Int, \$sortBy: SortByEnum) {
  functions(page: \$page, limit: \$limit, sortBy: \$sortBy) {
    list {
      id
      name
      sourceCode
      description
      url
    }
    totalCount
  }
}
EOF;
}
    

    
class GetUserDepartmentsResponse {

    public \Authing\Types\User $getUserDepartments;
}
    
class GetUserDepartmentsParam {

    /**
     * Optional
     */
    public string $orgId;

/**
 * @param $id string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $id
)
{
}

/**
 * @param $orgId string
 * @return GetUserDepartmentsParam
 */
public function withOrgId($orgId) {
  $this->orgId = $orgId;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::GetUserDepartmentsDocument,
        "operationName" => "getUserDepartments",
        "variables" => $this
      ];
    }

    const GetUserDepartmentsDocument = <<<EOF
query getUserDepartments(\$id: String!, \$orgId: String) {
  user(id: \$id) {
    departments(orgId: \$orgId) {
      totalCount
      list {
        department {
          id
          orgId
          name
          nameI18n
          description
          descriptionI18n
          order
          code
          root
          depth
          path
          codePath
          namePath
          createdAt
          updatedAt
          children
        }
        isMainDepartment
        joinedAt
      }
    }
  }
}
EOF;
}
    

    
class GetUserGroupsResponse {

    public \Authing\Types\User $getUserGroups;
}
    
class GetUserGroupsParam {

    /**
 * @param $id string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $id
)
{
}

    function createRequest() {
      return [
        "query" => self::GetUserGroupsDocument,
        "operationName" => "getUserGroups",
        "variables" => $this
      ];
    }

    const GetUserGroupsDocument = <<<EOF
query getUserGroups(\$id: String!) {
  user(id: \$id) {
    groups {
      totalCount
      list {
        code
        name
        description
        createdAt
        updatedAt
      }
    }
  }
}
EOF;
}
    

    
class GetUserRolesResponse {

    public \Authing\Types\User $getUserRoles;
}
    
class GetUserRolesParam {

    /**
     * Optional
     */
    public string $namespace;

/**
 * @param $id string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $id
)
{
}

/**
 * @param $namespace string
 * @return GetUserRolesParam
 */
public function withNamespace($namespace) {
  $this->namespace = $namespace;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::GetUserRolesDocument,
        "operationName" => "getUserRoles",
        "variables" => $this
      ];
    }

    const GetUserRolesDocument = <<<EOF
query getUserRoles(\$id: String!, \$namespace: String) {
  user(id: \$id) {
    roles(namespace: \$namespace) {
      totalCount
      list {
        code
        namespace
        arn
        description
        createdAt
        updatedAt
        parent {
          code
          namespace
          arn
          description
          createdAt
          updatedAt
        }
      }
    }
  }
}
EOF;
}
    

    
class GroupResponse {

    public \Authing\Types\Group $group;
}
    
class GroupParam {

    /**
 * @param $code string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $code
)
{
}

    function createRequest() {
      return [
        "query" => self::GroupDocument,
        "operationName" => "group",
        "variables" => $this
      ];
    }

    const GroupDocument = <<<EOF
query group(\$code: String!) {
  group(code: \$code) {
    code
    name
    description
    createdAt
    updatedAt
  }
}
EOF;
}
    

    
class GroupWithUsersResponse {

    public \Authing\Types\Group $groupWithUsers;
}
    
class GroupWithUsersParam {

    /**
     * Optional
     */
    public int $page;

    /**
     * Optional
     */
    public int $limit;

/**
 * @param $code string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $code
)
{
}

/**
 * @param $page int
 * @return GroupWithUsersParam
 */
public function withPage($page) {
  $this->page = $page;
  return $this;
}

/**
 * @param $limit int
 * @return GroupWithUsersParam
 */
public function withLimit($limit) {
  $this->limit = $limit;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::GroupWithUsersDocument,
        "operationName" => "groupWithUsers",
        "variables" => $this
      ];
    }

    const GroupWithUsersDocument = <<<EOF
query groupWithUsers(\$code: String!, \$page: Int, \$limit: Int) {
  group(code: \$code) {
    users(page: \$page, limit: \$limit) {
      totalCount
      list {
        id
        arn
        userPoolId
        username
        email
        emailVerified
        phone
        phoneVerified
        unionid
        openid
        nickname
        registerSource
        photo
        password
        oauth
        token
        tokenExpiredAt
        loginsCount
        lastLogin
        lastIP
        signedUp
        blocked
        isDeleted
        device
        browser
        company
        name
        givenName
        familyName
        middleName
        profile
        preferredUsername
        website
        gender
        birthdate
        zoneinfo
        locale
        address
        formatted
        streetAddress
        locality
        region
        postalCode
        city
        province
        country
        createdAt
        updatedAt
        externalId
      }
    }
  }
}
EOF;
}
    

    
class GroupsResponse {

    public \Authing\Types\PaginatedGroups $groups;
}
    
class GroupsParam {

    /**
     * Optional
     */
    public string $userId;

    /**
     * Optional
     */
    public int $page;

    /**
     * Optional
     */
    public int $limit;

    /**
     * Optional
     */
    public \Authing\Types\SortByEnum $sortBy;

public function __construct() {

}

/**
 * @param $userId string
 * @return GroupsParam
 */
public function withUserId($userId) {
  $this->userId = $userId;
  return $this;
}

/**
 * @param $page int
 * @return GroupsParam
 */
public function withPage($page) {
  $this->page = $page;
  return $this;
}

/**
 * @param $limit int
 * @return GroupsParam
 */
public function withLimit($limit) {
  $this->limit = $limit;
  return $this;
}

/**
 * @param $sortBy SortByEnum
 * @return GroupsParam
 */
public function withSortBy($sortBy) {
  $this->sortBy = $sortBy;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::GroupsDocument,
        "operationName" => "groups",
        "variables" => $this
      ];
    }

    const GroupsDocument = <<<EOF
query groups(\$userId: String, \$page: Int, \$limit: Int, \$sortBy: SortByEnum) {
  groups(userId: \$userId, page: \$page, limit: \$limit, sortBy: \$sortBy) {
    totalCount
    list {
      code
      name
      description
      createdAt
      updatedAt
    }
  }
}
EOF;
}
    

    
class IsActionAllowedResponse {

    public bool $isActionAllowed;
}
    
class IsActionAllowedParam {

    /**
     * Optional
     */
    public string $namespace;

/**
 * @param $resource string
 * @param $action string
 * @param $userId string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $resource,
    /**
     * Required
     *
     * @var string
     */
    public $action,
    /**
     * Required
     *
     * @var string
     */
    public $userId
)
{
}

/**
 * @param $namespace string
 * @return IsActionAllowedParam
 */
public function withNamespace($namespace) {
  $this->namespace = $namespace;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::IsActionAllowedDocument,
        "operationName" => "isActionAllowed",
        "variables" => $this
      ];
    }

    const IsActionAllowedDocument = <<<EOF
query isActionAllowed(\$resource: String!, \$action: String!, \$userId: String!, \$namespace: String) {
  isActionAllowed(resource: \$resource, action: \$action, userId: \$userId, namespace: \$namespace)
}
EOF;
}
    

    
class IsActionDeniedResponse {

    public bool $isActionDenied;
}
    
class IsActionDeniedParam {

    /**
 * @param $resource string
 * @param $action string
 * @param $userId string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $resource,
    /**
     * Required
     *
     * @var string
     */
    public $action,
    /**
     * Required
     *
     * @var string
     */
    public $userId
)
{
}

    function createRequest() {
      return [
        "query" => self::IsActionDeniedDocument,
        "operationName" => "isActionDenied",
        "variables" => $this
      ];
    }

    const IsActionDeniedDocument = <<<EOF
query isActionDenied(\$resource: String!, \$action: String!, \$userId: String!) {
  isActionDenied(resource: \$resource, action: \$action, userId: \$userId)
}
EOF;
}
    

    
class IsDomainAvaliableResponse {

    public bool $isDomainAvaliable;
}
    
class IsDomainAvaliableParam {

    /**
 * @param $domain string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $domain
)
{
}

    function createRequest() {
      return [
        "query" => self::IsDomainAvaliableDocument,
        "operationName" => "isDomainAvaliable",
        "variables" => $this
      ];
    }

    const IsDomainAvaliableDocument = <<<EOF
query isDomainAvaliable(\$domain: String!) {
  isDomainAvaliable(domain: \$domain)
}
EOF;
}
    

    
class IsRootNodeResponse {

    public bool $isRootNode;
}
    
class IsRootNodeParam {

    /**
 * @param $nodeId string
 * @param $orgId string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $nodeId,
    /**
     * Required
     *
     * @var string
     */
    public $orgId
)
{
}

    function createRequest() {
      return [
        "query" => self::IsRootNodeDocument,
        "operationName" => "isRootNode",
        "variables" => $this
      ];
    }

    const IsRootNodeDocument = <<<EOF
query isRootNode(\$nodeId: String!, \$orgId: String!) {
  isRootNode(nodeId: \$nodeId, orgId: \$orgId)
}
EOF;
}
    

    
class IsUserExistsResponse {

    public bool $isUserExists;
}
    
class IsUserExistsParam {

    /**
     * Optional
     */
    public string $email;

    /**
     * Optional
     */
    public string $phone;

    /**
     * Optional
     */
    public string $username;

    /**
     * Optional
     */
    public string $externalId;

public function __construct() {

}

/**
 * @param $email string
 * @return IsUserExistsParam
 */
public function withEmail($email) {
  $this->email = $email;
  return $this;
}

/**
 * @param $phone string
 * @return IsUserExistsParam
 */
public function withPhone($phone) {
  $this->phone = $phone;
  return $this;
}

/**
 * @param $username string
 * @return IsUserExistsParam
 */
public function withUsername($username) {
  $this->username = $username;
  return $this;
}

/**
 * @param $externalId string
 * @return IsUserExistsParam
 */
public function withExternalId($externalId) {
  $this->externalId = $externalId;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::IsUserExistsDocument,
        "operationName" => "isUserExists",
        "variables" => $this
      ];
    }

    const IsUserExistsDocument = <<<EOF
query isUserExists(\$email: String, \$phone: String, \$username: String, \$externalId: String) {
  isUserExists(email: \$email, phone: \$phone, username: \$username, externalId: \$externalId)
}
EOF;
}
    

    
class AuthorizedResourcesResponse {

    public \Authing\Types\PaginatedAuthorizedResources $authorizedResources;
}
    
class AuthorizedResourcesParam {

    /**
     * Optional
     */
    public \Authing\Types\PolicyAssignmentTargetType $targetType;

    /**
     * Optional
     */
    public string $targetIdentifier;

    /**
     * Optional
     */
    public string $namespace;

    /**
     * Optional
     */
    public string $resourceType;

public function __construct() {

}

/**
 * @param $targetType PolicyAssignmentTargetType
 * @return AuthorizedResourcesParam
 */
public function withTargetType($targetType) {
  $this->targetType = $targetType;
  return $this;
}

/**
 * @param $targetIdentifier string
 * @return AuthorizedResourcesParam
 */
public function withTargetIdentifier($targetIdentifier) {
  $this->targetIdentifier = $targetIdentifier;
  return $this;
}

/**
 * @param $namespace string
 * @return AuthorizedResourcesParam
 */
public function withNamespace($namespace) {
  $this->namespace = $namespace;
  return $this;
}

/**
 * @param $resourceType string
 * @return AuthorizedResourcesParam
 */
public function withResourceType($resourceType) {
  $this->resourceType = $resourceType;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::AuthorizedResourcesDocument,
        "operationName" => "authorizedResources",
        "variables" => $this
      ];
    }

    const AuthorizedResourcesDocument = <<<EOF
query authorizedResources(\$targetType: PolicyAssignmentTargetType, \$targetIdentifier: String, \$namespace: String, \$resourceType: String) {
  authorizedResources(targetType: \$targetType, targetIdentifier: \$targetIdentifier, namespace: \$namespace, resourceType: \$resourceType) {
    totalCount
    list {
      code
      type
      actions
    }
  }
}
EOF;
}
    

    
class ListGroupAuthorizedResourcesResponse {

    public \Authing\Types\Group $listGroupAuthorizedResources;
}
    
class ListGroupAuthorizedResourcesParam {

    /**
     * Optional
     */
    public string $namespace;

    /**
     * Optional
     */
    public string $resourceType;

/**
 * @param $code string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $code
)
{
}

/**
 * @param $namespace string
 * @return ListGroupAuthorizedResourcesParam
 */
public function withNamespace($namespace) {
  $this->namespace = $namespace;
  return $this;
}

/**
 * @param $resourceType string
 * @return ListGroupAuthorizedResourcesParam
 */
public function withResourceType($resourceType) {
  $this->resourceType = $resourceType;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::ListGroupAuthorizedResourcesDocument,
        "operationName" => "listGroupAuthorizedResources",
        "variables" => $this
      ];
    }

    const ListGroupAuthorizedResourcesDocument = <<<EOF
query listGroupAuthorizedResources(\$code: String!, \$namespace: String, \$resourceType: String) {
  group(code: \$code) {
    authorizedResources(namespace: \$namespace, resourceType: \$resourceType) {
      totalCount
      list {
        code
        type
        actions
      }
    }
  }
}
EOF;
}
    

    
class ListNodeByCodeAuthorizedResourcesResponse {

    public \Authing\Types\Node $listNodeByCodeAuthorizedResources;
}
    
class ListNodeByCodeAuthorizedResourcesParam {

    /**
     * Optional
     */
    public string $namespace;

    /**
     * Optional
     */
    public string $resourceType;

/**
 * @param $orgId string
 * @param $code string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $orgId,
    /**
     * Required
     *
     * @var string
     */
    public $code
)
{
}

/**
 * @param $namespace string
 * @return ListNodeByCodeAuthorizedResourcesParam
 */
public function withNamespace($namespace) {
  $this->namespace = $namespace;
  return $this;
}

/**
 * @param $resourceType string
 * @return ListNodeByCodeAuthorizedResourcesParam
 */
public function withResourceType($resourceType) {
  $this->resourceType = $resourceType;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::ListNodeByCodeAuthorizedResourcesDocument,
        "operationName" => "listNodeByCodeAuthorizedResources",
        "variables" => $this
      ];
    }

    const ListNodeByCodeAuthorizedResourcesDocument = <<<EOF
query listNodeByCodeAuthorizedResources(\$orgId: String!, \$code: String!, \$namespace: String, \$resourceType: String) {
  nodeByCode(orgId: \$orgId, code: \$code) {
    authorizedResources(namespace: \$namespace, resourceType: \$resourceType) {
      totalCount
      list {
        code
        type
        actions
      }
    }
  }
}
EOF;
}
    

    
class ListNodeByIdAuthorizedResourcesResponse {

    public \Authing\Types\Node $listNodeByIdAuthorizedResources;
}
    
class ListNodeByIdAuthorizedResourcesParam {

    /**
     * Optional
     */
    public string $namespace;

    /**
     * Optional
     */
    public string $resourceType;

/**
 * @param $id string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $id
)
{
}

/**
 * @param $namespace string
 * @return ListNodeByIdAuthorizedResourcesParam
 */
public function withNamespace($namespace) {
  $this->namespace = $namespace;
  return $this;
}

/**
 * @param $resourceType string
 * @return ListNodeByIdAuthorizedResourcesParam
 */
public function withResourceType($resourceType) {
  $this->resourceType = $resourceType;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::ListNodeByIdAuthorizedResourcesDocument,
        "operationName" => "listNodeByIdAuthorizedResources",
        "variables" => $this
      ];
    }

    const ListNodeByIdAuthorizedResourcesDocument = <<<EOF
query listNodeByIdAuthorizedResources(\$id: String!, \$namespace: String, \$resourceType: String) {
  nodeById(id: \$id) {
    authorizedResources(namespace: \$namespace, resourceType: \$resourceType) {
      totalCount
      list {
        code
        type
        actions
      }
    }
  }
}
EOF;
}
    

    
class ListRoleAuthorizedResourcesResponse {

    public \Authing\Types\Role $listRoleAuthorizedResources;
}
    
class ListRoleAuthorizedResourcesParam {

    /**
     * Optional
     */
    public string $namespace;

    /**
     * Optional
     */
    public string $resourceType;

/**
 * @param $code string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $code
)
{
}

/**
 * @param $namespace string
 * @return ListRoleAuthorizedResourcesParam
 */
public function withNamespace($namespace) {
  $this->namespace = $namespace;
  return $this;
}

/**
 * @param $resourceType string
 * @return ListRoleAuthorizedResourcesParam
 */
public function withResourceType($resourceType) {
  $this->resourceType = $resourceType;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::ListRoleAuthorizedResourcesDocument,
        "operationName" => "listRoleAuthorizedResources",
        "variables" => $this
      ];
    }

    const ListRoleAuthorizedResourcesDocument = <<<EOF
query listRoleAuthorizedResources(\$code: String!, \$namespace: String, \$resourceType: String) {
  role(code: \$code, namespace: \$namespace) {
    authorizedResources(resourceType: \$resourceType) {
      totalCount
      list {
        code
        type
        actions
      }
    }
  }
}
EOF;
}
    

    
class ListUserAuthorizedResourcesResponse {

    public \Authing\Types\User $listUserAuthorizedResources;
}
    
class ListUserAuthorizedResourcesParam {

    /**
     * Optional
     */
    public string $namespace;

    /**
     * Optional
     */
    public string $resourceType;

/**
 * @param $id string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $id
)
{
}

/**
 * @param $namespace string
 * @return ListUserAuthorizedResourcesParam
 */
public function withNamespace($namespace) {
  $this->namespace = $namespace;
  return $this;
}

/**
 * @param $resourceType string
 * @return ListUserAuthorizedResourcesParam
 */
public function withResourceType($resourceType) {
  $this->resourceType = $resourceType;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::ListUserAuthorizedResourcesDocument,
        "operationName" => "listUserAuthorizedResources",
        "variables" => $this
      ];
    }

    const ListUserAuthorizedResourcesDocument = <<<EOF
query listUserAuthorizedResources(\$id: String!, \$namespace: String, \$resourceType: String) {
  user(id: \$id) {
    authorizedResources(namespace: \$namespace, resourceType: \$resourceType) {
      totalCount
      list {
        code
        type
        actions
      }
    }
  }
}
EOF;
}
    

    
class NodeByCodeResponse {

    public \Authing\Types\Node $nodeByCode;
}
    
class NodeByCodeParam {

    /**
 * @param $orgId string
 * @param $code string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $orgId,
    /**
     * Required
     *
     * @var string
     */
    public $code
)
{
}

    function createRequest() {
      return [
        "query" => self::NodeByCodeDocument,
        "operationName" => "nodeByCode",
        "variables" => $this
      ];
    }

    const NodeByCodeDocument = <<<EOF
query nodeByCode(\$orgId: String!, \$code: String!) {
  nodeByCode(orgId: \$orgId, code: \$code) {
    id
    orgId
    name
    nameI18n
    description
    descriptionI18n
    order
    code
    root
    depth
    path
    createdAt
    updatedAt
    children
  }
}
EOF;
}
    

    
class NodeByCodeWithMembersResponse {

    public \Authing\Types\Node $nodeByCodeWithMembers;
}
    
class NodeByCodeWithMembersParam {

    /**
     * Optional
     */
    public int $page;

    /**
     * Optional
     */
    public int $limit;

    /**
     * Optional
     */
    public \Authing\Types\SortByEnum $sortBy;

    /**
     * Optional
     */
    public bool $includeChildrenNodes;

/**
 * @param $orgId string
 * @param $code string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $orgId,
    /**
     * Required
     *
     * @var string
     */
    public $code
)
{
}

/**
 * @param $page int
 * @return NodeByCodeWithMembersParam
 */
public function withPage($page) {
  $this->page = $page;
  return $this;
}

/**
 * @param $limit int
 * @return NodeByCodeWithMembersParam
 */
public function withLimit($limit) {
  $this->limit = $limit;
  return $this;
}

/**
 * @param $sortBy SortByEnum
 * @return NodeByCodeWithMembersParam
 */
public function withSortBy($sortBy) {
  $this->sortBy = $sortBy;
  return $this;
}

/**
 * @param $includeChildrenNodes bool
 * @return NodeByCodeWithMembersParam
 */
public function withIncludeChildrenNodes($includeChildrenNodes) {
  $this->includeChildrenNodes = $includeChildrenNodes;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::NodeByCodeWithMembersDocument,
        "operationName" => "nodeByCodeWithMembers",
        "variables" => $this
      ];
    }

    const NodeByCodeWithMembersDocument = <<<EOF
query nodeByCodeWithMembers(\$page: Int, \$limit: Int, \$sortBy: SortByEnum, \$includeChildrenNodes: Boolean, \$orgId: String!, \$code: String!) {
  nodeByCode(orgId: \$orgId, code: \$code) {
    id
    orgId
    name
    nameI18n
    description
    descriptionI18n
    order
    code
    root
    depth
    createdAt
    updatedAt
    children
    users(page: \$page, limit: \$limit, sortBy: \$sortBy, includeChildrenNodes: \$includeChildrenNodes) {
      totalCount
      list {
        id
        arn
        userPoolId
        status
        username
        email
        emailVerified
        phone
        phoneVerified
        unionid
        openid
        nickname
        registerSource
        photo
        password
        oauth
        token
        tokenExpiredAt
        loginsCount
        lastLogin
        lastIP
        signedUp
        blocked
        isDeleted
        device
        browser
        company
        name
        givenName
        familyName
        middleName
        profile
        preferredUsername
        website
        gender
        birthdate
        zoneinfo
        locale
        address
        formatted
        streetAddress
        locality
        region
        postalCode
        city
        province
        country
        createdAt
        updatedAt
        externalId
      }
    }
  }
}
EOF;
}
    

    
class NodeByIdResponse {

    public \Authing\Types\Node $nodeById;
}
    
class NodeByIdParam {

    /**
 * @param $id string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $id
)
{
}

    function createRequest() {
      return [
        "query" => self::NodeByIdDocument,
        "operationName" => "nodeById",
        "variables" => $this
      ];
    }

    const NodeByIdDocument = <<<EOF
query nodeById(\$id: String!) {
  nodeById(id: \$id) {
    id
    orgId
    name
    nameI18n
    description
    descriptionI18n
    order
    code
    root
    depth
    path
    createdAt
    updatedAt
    children
  }
}
EOF;
}
    

    
class NodeByIdWithMembersResponse {

    public \Authing\Types\Node $nodeByIdWithMembers;
}
    
class NodeByIdWithMembersParam {

    /**
     * Optional
     */
    public int $page;

    /**
     * Optional
     */
    public int $limit;

    /**
     * Optional
     */
    public \Authing\Types\SortByEnum $sortBy;

    /**
     * Optional
     */
    public bool $includeChildrenNodes;

/**
 * @param $id string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $id
)
{
}

/**
 * @param $page int
 * @return NodeByIdWithMembersParam
 */
public function withPage($page) {
  $this->page = $page;
  return $this;
}

/**
 * @param $limit int
 * @return NodeByIdWithMembersParam
 */
public function withLimit($limit) {
  $this->limit = $limit;
  return $this;
}

/**
 * @param $sortBy SortByEnum
 * @return NodeByIdWithMembersParam
 */
public function withSortBy($sortBy) {
  $this->sortBy = $sortBy;
  return $this;
}

/**
 * @param $includeChildrenNodes bool
 * @return NodeByIdWithMembersParam
 */
public function withIncludeChildrenNodes($includeChildrenNodes) {
  $this->includeChildrenNodes = $includeChildrenNodes;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::NodeByIdWithMembersDocument,
        "operationName" => "nodeByIdWithMembers",
        "variables" => $this
      ];
    }

    const NodeByIdWithMembersDocument = <<<EOF
query nodeByIdWithMembers(\$page: Int, \$limit: Int, \$sortBy: SortByEnum, \$includeChildrenNodes: Boolean, \$id: String!) {
  nodeById(id: \$id) {
    id
    orgId
    name
    nameI18n
    description
    descriptionI18n
    order
    code
    root
    depth
    createdAt
    updatedAt
    children
    users(page: \$page, limit: \$limit, sortBy: \$sortBy, includeChildrenNodes: \$includeChildrenNodes) {
      totalCount
      list {
        id
        arn
        userPoolId
        status
        username
        email
        emailVerified
        phone
        phoneVerified
        unionid
        openid
        nickname
        registerSource
        photo
        password
        oauth
        token
        tokenExpiredAt
        loginsCount
        lastLogin
        lastIP
        signedUp
        blocked
        isDeleted
        device
        browser
        company
        name
        givenName
        familyName
        middleName
        profile
        preferredUsername
        website
        gender
        birthdate
        zoneinfo
        locale
        address
        formatted
        streetAddress
        locality
        region
        postalCode
        city
        province
        country
        createdAt
        updatedAt
        externalId
      }
    }
  }
}
EOF;
}
    

    
class OrgResponse {

    public \Authing\Types\Org $org;
}
    
class OrgParam {

    /**
 * @param $id string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $id
)
{
}

    function createRequest() {
      return [
        "query" => self::OrgDocument,
        "operationName" => "org",
        "variables" => $this
      ];
    }

    const OrgDocument = <<<EOF
query org(\$id: String!) {
  org(id: \$id) {
    id
    rootNode {
      id
      orgId
      name
      nameI18n
      description
      descriptionI18n
      order
      code
      root
      depth
      path
      createdAt
      updatedAt
      children
    }
    nodes {
      id
      orgId
      name
      nameI18n
      description
      descriptionI18n
      order
      code
      root
      depth
      path
      createdAt
      updatedAt
      children
    }
  }
}
EOF;
}
    

    
class OrgsResponse {

    public \Authing\Types\PaginatedOrgs $orgs;
}
    
class OrgsParam {

    /**
     * Optional
     */
    public int $page;

    /**
     * Optional
     */
    public int $limit;

    /**
     * Optional
     */
    public \Authing\Types\SortByEnum $sortBy;

public function __construct() {

}

/**
 * @param $page int
 * @return OrgsParam
 */
public function withPage($page) {
  $this->page = $page;
  return $this;
}

/**
 * @param $limit int
 * @return OrgsParam
 */
public function withLimit($limit) {
  $this->limit = $limit;
  return $this;
}

/**
 * @param $sortBy SortByEnum
 * @return OrgsParam
 */
public function withSortBy($sortBy) {
  $this->sortBy = $sortBy;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::OrgsDocument,
        "operationName" => "orgs",
        "variables" => $this
      ];
    }

    const OrgsDocument = <<<EOF
query orgs(\$page: Int, \$limit: Int, \$sortBy: SortByEnum) {
  orgs(page: \$page, limit: \$limit, sortBy: \$sortBy) {
    totalCount
    list {
      id
      rootNode {
        id
        name
        nameI18n
        path
        description
        descriptionI18n
        order
        code
        root
        depth
        createdAt
        updatedAt
        children
      }
      nodes {
        id
        name
        path
        nameI18n
        description
        descriptionI18n
        order
        code
        root
        depth
        createdAt
        updatedAt
        children
      }
    }
  }
}
EOF;
}
    

    
class PoliciesResponse {

    public \Authing\Types\PaginatedPolicies $policies;
}
    
class PoliciesParam {

    /**
     * Optional
     */
    public int $page;

    /**
     * Optional
     */
    public int $limit;

    /**
     * Optional
     */
    public string $namespace;

public function __construct() {

}

/**
 * @param $page int
 * @return PoliciesParam
 */
public function withPage($page) {
  $this->page = $page;
  return $this;
}

/**
 * @param $limit int
 * @return PoliciesParam
 */
public function withLimit($limit) {
  $this->limit = $limit;
  return $this;
}

/**
 * @param $namespace string
 * @return PoliciesParam
 */
public function withNamespace($namespace) {
  $this->namespace = $namespace;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::PoliciesDocument,
        "operationName" => "policies",
        "variables" => $this
      ];
    }

    const PoliciesDocument = <<<EOF
query policies(\$page: Int, \$limit: Int, \$namespace: String) {
  policies(page: \$page, limit: \$limit, namespace: \$namespace) {
    totalCount
    list {
      namespace
      code
      description
      createdAt
      updatedAt
      statements {
        resource
        actions
        effect
        condition {
          param
          operator
          value
        }
      }
    }
  }
}
EOF;
}
    

    
class PolicyResponse {

    public \Authing\Types\Policy $policy;
}
    
class PolicyParam {

    /**
     * Optional
     */
    public string $namespace;

/**
 * @param $code string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $code
)
{
}

/**
 * @param $namespace string
 * @return PolicyParam
 */
public function withNamespace($namespace) {
  $this->namespace = $namespace;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::PolicyDocument,
        "operationName" => "policy",
        "variables" => $this
      ];
    }

    const PolicyDocument = <<<EOF
query policy(\$namespace: String, \$code: String!) {
  policy(code: \$code, namespace: \$namespace) {
    namespace
    code
    isDefault
    description
    statements {
      resource
      actions
      effect
      condition {
        param
        operator
        value
      }
    }
    createdAt
    updatedAt
  }
}
EOF;
}
    

    
class PolicyAssignmentsResponse {

    public \Authing\Types\PaginatedPolicyAssignments $policyAssignments;
}
    
class PolicyAssignmentsParam {

    /**
     * Optional
     */
    public string $namespace;

    /**
     * Optional
     */
    public string $code;

    /**
     * Optional
     */
    public \Authing\Types\PolicyAssignmentTargetType $targetType;

    /**
     * Optional
     */
    public string $targetIdentifier;

    /**
     * Optional
     */
    public int $page;

    /**
     * Optional
     */
    public int $limit;

public function __construct() {

}

/**
 * @param $namespace string
 * @return PolicyAssignmentsParam
 */
public function withNamespace($namespace) {
  $this->namespace = $namespace;
  return $this;
}

/**
 * @param $code string
 * @return PolicyAssignmentsParam
 */
public function withCode($code) {
  $this->code = $code;
  return $this;
}

/**
 * @param $targetType PolicyAssignmentTargetType
 * @return PolicyAssignmentsParam
 */
public function withTargetType($targetType) {
  $this->targetType = $targetType;
  return $this;
}

/**
 * @param $targetIdentifier string
 * @return PolicyAssignmentsParam
 */
public function withTargetIdentifier($targetIdentifier) {
  $this->targetIdentifier = $targetIdentifier;
  return $this;
}

/**
 * @param $page int
 * @return PolicyAssignmentsParam
 */
public function withPage($page) {
  $this->page = $page;
  return $this;
}

/**
 * @param $limit int
 * @return PolicyAssignmentsParam
 */
public function withLimit($limit) {
  $this->limit = $limit;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::PolicyAssignmentsDocument,
        "operationName" => "policyAssignments",
        "variables" => $this
      ];
    }

    const PolicyAssignmentsDocument = <<<EOF
query policyAssignments(\$namespace: String, \$code: String, \$targetType: PolicyAssignmentTargetType, \$targetIdentifier: String, \$page: Int, \$limit: Int) {
  policyAssignments(namespace: \$namespace, code: \$code, targetType: \$targetType, targetIdentifier: \$targetIdentifier, page: \$page, limit: \$limit) {
    totalCount
    list {
      code
      targetType
      targetIdentifier
    }
  }
}
EOF;
}
    

    
class PolicyWithAssignmentsResponse {

    public \Authing\Types\Policy $policyWithAssignments;
}
    
class PolicyWithAssignmentsParam {

    /**
     * Optional
     */
    public int $page;

    /**
     * Optional
     */
    public int $limit;

/**
 * @param $code string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $code
)
{
}

/**
 * @param $page int
 * @return PolicyWithAssignmentsParam
 */
public function withPage($page) {
  $this->page = $page;
  return $this;
}

/**
 * @param $limit int
 * @return PolicyWithAssignmentsParam
 */
public function withLimit($limit) {
  $this->limit = $limit;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::PolicyWithAssignmentsDocument,
        "operationName" => "policyWithAssignments",
        "variables" => $this
      ];
    }

    const PolicyWithAssignmentsDocument = <<<EOF
query policyWithAssignments(\$page: Int, \$limit: Int, \$code: String!) {
  policy(code: \$code) {
    code
    isDefault
    description
    statements {
      resource
      actions
      effect
    }
    createdAt
    updatedAt
    assignmentsCount
    assignments(page: \$page, limit: \$limit) {
      code
      targetType
      targetIdentifier
    }
  }
}
EOF;
}
    

    
class PreviewEmailResponse {

    public string $previewEmail;
}
    
class PreviewEmailParam {

    /**
 * @param $type EmailTemplateType
 */
public function __construct(
    /**
     * Required
     *
     * @var EmailTemplateType
     */
    public $type
)
{
}

    function createRequest() {
      return [
        "query" => self::PreviewEmailDocument,
        "operationName" => "previewEmail",
        "variables" => $this
      ];
    }

    const PreviewEmailDocument = <<<EOF
query previewEmail(\$type: EmailTemplateType!) {
  previewEmail(type: \$type)
}
EOF;
}
    

    
class QiniuUptokenResponse {

    public string $qiniuUptoken;
}
    
class QiniuUptokenParam {

    /**
     * Optional
     */
    public string $type;

public function __construct() {

}

/**
 * @param $type string
 * @return QiniuUptokenParam
 */
public function withType($type) {
  $this->type = $type;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::QiniuUptokenDocument,
        "operationName" => "qiniuUptoken",
        "variables" => $this
      ];
    }

    const QiniuUptokenDocument = <<<EOF
query qiniuUptoken(\$type: String) {
  qiniuUptoken(type: \$type)
}
EOF;
}
    

    
class QueryMfaResponse {

    public \Authing\Types\Mfa $queryMfa;
}
    
class QueryMfaParam {

    /**
     * Optional
     */
    public string $id;

    /**
     * Optional
     */
    public string $userId;

    /**
     * Optional
     */
    public string $userPoolId;

public function __construct() {

}

/**
 * @param $id string
 * @return QueryMfaParam
 */
public function withId($id) {
  $this->id = $id;
  return $this;
}

/**
 * @param $userId string
 * @return QueryMfaParam
 */
public function withUserId($userId) {
  $this->userId = $userId;
  return $this;
}

/**
 * @param $userPoolId string
 * @return QueryMfaParam
 */
public function withUserPoolId($userPoolId) {
  $this->userPoolId = $userPoolId;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::QueryMfaDocument,
        "operationName" => "queryMfa",
        "variables" => $this
      ];
    }

    const QueryMfaDocument = <<<EOF
query queryMfa(\$id: String, \$userId: String, \$userPoolId: String) {
  queryMfa(id: \$id, userId: \$userId, userPoolId: \$userPoolId) {
    id
    userId
    userPoolId
    enable
    secret
  }
}
EOF;
}
    

    
class RoleResponse {

    public \Authing\Types\Role $role;
}
    
class RoleParam {

    /**
     * Optional
     */
    public string $namespace;

/**
 * @param $code string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $code
)
{
}

/**
 * @param $namespace string
 * @return RoleParam
 */
public function withNamespace($namespace) {
  $this->namespace = $namespace;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::RoleDocument,
        "operationName" => "role",
        "variables" => $this
      ];
    }

    const RoleDocument = <<<EOF
query role(\$code: String!, \$namespace: String) {
  role(code: \$code, namespace: \$namespace) {
    namespace
    code
    arn
    description
    createdAt
    updatedAt
    parent {
      namespace
      code
      arn
      description
      createdAt
      updatedAt
    }
  }
}
EOF;
}
    

    
class RoleWithUsersResponse {

    public \Authing\Types\Role $roleWithUsers;
}
    
class RoleWithUsersParam {

    /**
     * Optional
     */
    public string $namespace;

/**
 * @param $code string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $code
)
{
}

/**
 * @param $namespace string
 * @return RoleWithUsersParam
 */
public function withNamespace($namespace) {
  $this->namespace = $namespace;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::RoleWithUsersDocument,
        "operationName" => "roleWithUsers",
        "variables" => $this
      ];
    }

    const RoleWithUsersDocument = <<<EOF
query roleWithUsers(\$code: String!, \$namespace: String) {
  role(code: \$code, namespace: \$namespace) {
    users {
      totalCount
      list {
        id
        arn
        status
        userPoolId
        username
        email
        emailVerified
        phone
        phoneVerified
        unionid
        openid
        nickname
        registerSource
        photo
        password
        oauth
        token
        tokenExpiredAt
        loginsCount
        lastLogin
        lastIP
        signedUp
        blocked
        isDeleted
        device
        browser
        company
        name
        givenName
        familyName
        middleName
        profile
        preferredUsername
        website
        gender
        birthdate
        zoneinfo
        locale
        address
        formatted
        streetAddress
        locality
        region
        postalCode
        city
        province
        country
        createdAt
        updatedAt
        externalId
      }
    }
  }
}
EOF;
}
    

    
class RolesResponse {

    public \Authing\Types\PaginatedRoles $roles;
}
    
class RolesParam {

    /**
     * Optional
     */
    public string $namespace;

    /**
     * Optional
     */
    public int $page;

    /**
     * Optional
     */
    public int $limit;

    /**
     * Optional
     */
    public \Authing\Types\SortByEnum $sortBy;

public function __construct() {

}

/**
 * @param $namespace string
 * @return RolesParam
 */
public function withNamespace($namespace) {
  $this->namespace = $namespace;
  return $this;
}

/**
 * @param $page int
 * @return RolesParam
 */
public function withPage($page) {
  $this->page = $page;
  return $this;
}

/**
 * @param $limit int
 * @return RolesParam
 */
public function withLimit($limit) {
  $this->limit = $limit;
  return $this;
}

/**
 * @param $sortBy SortByEnum
 * @return RolesParam
 */
public function withSortBy($sortBy) {
  $this->sortBy = $sortBy;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::RolesDocument,
        "operationName" => "roles",
        "variables" => $this
      ];
    }

    const RolesDocument = <<<EOF
query roles(\$namespace: String, \$page: Int, \$limit: Int, \$sortBy: SortByEnum) {
  roles(namespace: \$namespace, page: \$page, limit: \$limit, sortBy: \$sortBy) {
    totalCount
    list {
      namespace
      code
      arn
      description
      createdAt
      updatedAt
    }
  }
}
EOF;
}
    

    
class RootNodeResponse {

    public \Authing\Types\Node $rootNode;
}
    
class RootNodeParam {

    /**
 * @param $orgId string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $orgId
)
{
}

    function createRequest() {
      return [
        "query" => self::RootNodeDocument,
        "operationName" => "rootNode",
        "variables" => $this
      ];
    }

    const RootNodeDocument = <<<EOF
query rootNode(\$orgId: String!) {
  rootNode(orgId: \$orgId) {
    id
    orgId
    name
    nameI18n
    description
    descriptionI18n
    order
    code
    root
    depth
    path
    codePath
    namePath
    createdAt
    updatedAt
    children
  }
}
EOF;
}
    

    
class SearchNodesResponse {

    /**
     * @var Node[]
     */
    public array $searchNodes;
}
    
class SearchNodesParam {

    /**
 * @param $keyword string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $keyword
)
{
}

    function createRequest() {
      return [
        "query" => self::SearchNodesDocument,
        "operationName" => "searchNodes",
        "variables" => $this
      ];
    }

    const SearchNodesDocument = <<<EOF
query searchNodes(\$keyword: String!) {
  searchNodes(keyword: \$keyword) {
    id
    orgId
    name
    nameI18n
    description
    descriptionI18n
    order
    code
    root
    depth
    path
    codePath
    namePath
    createdAt
    updatedAt
    children
  }
}
EOF;
}
    

    
class SearchUserResponse {

    public \Authing\Types\PaginatedUsers $searchUser;
}
    
class SearchUserParam {

    /**
     * Optional
     * 
     * @var string[]
     */
    public array $fields;

    /**
     * Optional
     */
    public int $page;

    /**
     * Optional
     */
    public int $limit;

    /**
     * Optional
     * 
     * @var SearchUserDepartmentOpt[]
     */
    public array $departmentOpts;

    /**
     * Optional
     * 
     * @var SearchUserGroupOpt[]
     */
    public array $groupOpts;

    /**
     * Optional
     * 
     * @var SearchUserRoleOpt[]
     */
    public array $roleOpts;

/**
 * @param $query string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $query
)
{
}

/**
 * @param $fields string[]
 * @return SearchUserParam
 */
public function withFields($fields) {
  $this->fields = $fields;
  return $this;
}

/**
 * @param $page int
 * @return SearchUserParam
 */
public function withPage($page) {
  $this->page = $page;
  return $this;
}

/**
 * @param $limit int
 * @return SearchUserParam
 */
public function withLimit($limit) {
  $this->limit = $limit;
  return $this;
}

/**
 * @param $departmentOpts SearchUserDepartmentOpt[]
 * @return SearchUserParam
 */
public function withDepartmentOpts($departmentOpts) {
  $this->departmentOpts = $departmentOpts;
  return $this;
}

/**
 * @param $groupOpts SearchUserGroupOpt[]
 * @return SearchUserParam
 */
public function withGroupOpts($groupOpts) {
  $this->groupOpts = $groupOpts;
  return $this;
}

/**
 * @param $roleOpts SearchUserRoleOpt[]
 * @return SearchUserParam
 */
public function withRoleOpts($roleOpts) {
  $this->roleOpts = $roleOpts;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::SearchUserDocument,
        "operationName" => "searchUser",
        "variables" => $this
      ];
    }

    const SearchUserDocument = <<<EOF
query searchUser(\$query: String!, \$fields: [String], \$page: Int, \$limit: Int, \$departmentOpts: [SearchUserDepartmentOpt], \$groupOpts: [SearchUserGroupOpt], \$roleOpts: [SearchUserRoleOpt]) {
  searchUser(query: \$query, fields: \$fields, page: \$page, limit: \$limit, departmentOpts: \$departmentOpts, groupOpts: \$groupOpts, roleOpts: \$roleOpts) {
    totalCount
    list {
      id
      arn
      userPoolId
      status
      username
      email
      emailVerified
      phone
      phoneVerified
      unionid
      openid
      nickname
      registerSource
      photo
      password
      oauth
      token
      tokenExpiredAt
      loginsCount
      lastLogin
      lastIP
      signedUp
      blocked
      isDeleted
      device
      browser
      company
      name
      givenName
      familyName
      middleName
      profile
      preferredUsername
      website
      gender
      birthdate
      zoneinfo
      locale
      address
      formatted
      streetAddress
      locality
      region
      postalCode
      city
      province
      country
      createdAt
      updatedAt
      externalId
    }
  }
}
EOF;
}
    

    
class SocialConnectionResponse {

    public \Authing\Types\SocialConnection $socialConnection;
}
    
class SocialConnectionParam {

    /**
 * @param $provider string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $provider
)
{
}

    function createRequest() {
      return [
        "query" => self::SocialConnectionDocument,
        "operationName" => "socialConnection",
        "variables" => $this
      ];
    }

    const SocialConnectionDocument = <<<EOF
query socialConnection(\$provider: String!) {
  socialConnection(provider: \$provider) {
    provider
    name
    logo
    description
    fields {
      key
      label
      type
      placeholder
    }
  }
}
EOF;
}
    

    
class SocialConnectionInstanceResponse {

    public \Authing\Types\SocialConnectionInstance $socialConnectionInstance;
}
    
class SocialConnectionInstanceParam {

    /**
 * @param $provider string
 */
public function __construct(
    /**
     * Required
     *
     * @var string
     */
    public $provider
)
{
}

    function createRequest() {
      return [
        "query" => self::SocialConnectionInstanceDocument,
        "operationName" => "socialConnectionInstance",
        "variables" => $this
      ];
    }

    const SocialConnectionInstanceDocument = <<<EOF
query socialConnectionInstance(\$provider: String!) {
  socialConnectionInstance(provider: \$provider) {
    provider
    enabled
    fields {
      key
      value
    }
  }
}
EOF;
}
    

    
class SocialConnectionInstancesResponse {

    /**
     * @var SocialConnectionInstance[]
     */
    public array $socialConnectionInstances;
}
    
class SocialConnectionInstancesParam {



    function createRequest() {
      return [
        "query" => self::SocialConnectionInstancesDocument,
        "operationName" => "socialConnectionInstances",
        "variables" => $this
      ];
    }

    const SocialConnectionInstancesDocument = <<<EOF
query socialConnectionInstances {
  socialConnectionInstances {
    provider
    enabled
    fields {
      key
      value
    }
  }
}
EOF;
}
    

    
class SocialConnectionsResponse {

    /**
     * @var SocialConnection[]
     */
    public array $socialConnections;
}
    
class SocialConnectionsParam {



    function createRequest() {
      return [
        "query" => self::SocialConnectionsDocument,
        "operationName" => "socialConnections",
        "variables" => $this
      ];
    }

    const SocialConnectionsDocument = <<<EOF
query socialConnections {
  socialConnections {
    provider
    name
    logo
    description
    fields {
      key
      label
      type
      placeholder
    }
  }
}
EOF;
}
    

    
class TemplateCodeResponse {

    public string $templateCode;
}
    
class TemplateCodeParam {



    function createRequest() {
      return [
        "query" => self::TemplateCodeDocument,
        "operationName" => "templateCode",
        "variables" => $this
      ];
    }

    const TemplateCodeDocument = <<<EOF
query templateCode {
  templateCode
}
EOF;
}
    

    
class UdfResponse {

    /**
     * @var UserDefinedField[]
     */
    public array $udf;
}
    
class UdfParam {

    /**
 * @param $targetType UdfTargetType
 */
public function __construct(
    /**
     * Required
     *
     * @var UdfTargetType
     */
    public $targetType
)
{
}

    function createRequest() {
      return [
        "query" => self::UdfDocument,
        "operationName" => "udf",
        "variables" => $this
      ];
    }

    const UdfDocument = <<<EOF
query udf(\$targetType: UDFTargetType!) {
  udf(targetType: \$targetType) {
    targetType
    dataType
    key
    label
    options
  }
}
EOF;
}
    

    
class UdfValueBatchResponse {

    /**
     * @var UserDefinedDataMap[]
     */
    public array $udfValueBatch;
}
    
class UdfValueBatchParam {

    /**
 * @param $targetType UdfTargetType
 * @param $targetIds string[]
 */
public function __construct(
    /**
     * Required
     *
     * @var UdfTargetType
     */
    public $targetType,
    /**
     * Required
     *
     * @var string[]
     */
    public $targetIds
)
{
}

    function createRequest() {
      return [
        "query" => self::UdfValueBatchDocument,
        "operationName" => "udfValueBatch",
        "variables" => $this
      ];
    }

    const UdfValueBatchDocument = <<<EOF
query udfValueBatch(\$targetType: UDFTargetType!, \$targetIds: [String!]!) {
  udfValueBatch(targetType: \$targetType, targetIds: \$targetIds) {
    targetId
    data {
      key
      dataType
      value
      label
    }
  }
}
EOF;
}
    

    
class UdvResponse {

    /**
     * @var UserDefinedData[]
     */
    public array $udv;
}
    
class UdvParam {

    /**
 * @param $targetType UdfTargetType
 * @param $targetId string
 */
public function __construct(
    /**
     * Required
     *
     * @var UdfTargetType
     */
    public $targetType,
    /**
     * Required
     *
     * @var string
     */
    public $targetId
)
{
}

    function createRequest() {
      return [
        "query" => self::UdvDocument,
        "operationName" => "udv",
        "variables" => $this
      ];
    }

    const UdvDocument = <<<EOF
query udv(\$targetType: UDFTargetType!, \$targetId: String!) {
  udv(targetType: \$targetType, targetId: \$targetId) {
    key
    dataType
    value
    label
  }
}
EOF;
}
    

    
class UserResponse {

    public \Authing\Types\User $user;
}
    
class UserParam {

    /**
     * Optional
     */
    public string $id;

public function __construct() {

}

/**
 * @param $id string
 * @return UserParam
 */
public function withId($id) {
  $this->id = $id;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::UserDocument,
        "operationName" => "user",
        "variables" => $this
      ];
    }

    const UserDocument = <<<EOF
query user(\$id: String) {
  user(id: \$id) {
    id
    arn
    userPoolId
    status
    username
    email
    emailVerified
    phone
    phoneVerified
    identities {
      openid
      userIdInIdp
      userId
      connectionId
      isSocial
      provider
      userPoolId
    }
    unionid
    openid
    nickname
    registerSource
    photo
    password
    oauth
    token
    tokenExpiredAt
    loginsCount
    lastLogin
    lastIP
    signedUp
    blocked
    isDeleted
    device
    browser
    company
    name
    givenName
    familyName
    middleName
    profile
    preferredUsername
    website
    gender
    birthdate
    zoneinfo
    locale
    address
    formatted
    streetAddress
    locality
    region
    postalCode
    city
    province
    country
    createdAt
    updatedAt
    externalId
  }
}
EOF;
}
    

    
class UserBatchResponse {

    /**
     * @var User[]
     */
    public array $userBatch;
}
    
class UserBatchParam {

    /**
 * @param $ids string[]
 */
public function __construct(
    /**
     * Required
     *
     * @var string[]
     */
    public $ids
)
{
}

    function createRequest() {
      return [
        "query" => self::UserBatchDocument,
        "operationName" => "userBatch",
        "variables" => $this
      ];
    }

    const UserBatchDocument = <<<EOF
query userBatch(\$ids: [String!]!) {
  userBatch(ids: \$ids) {
    id
    arn
    userPoolId
    status
    username
    email
    emailVerified
    phone
    phoneVerified
    unionid
    openid
    nickname
    registerSource
    photo
    password
    oauth
    token
    tokenExpiredAt
    loginsCount
    lastLogin
    lastIP
    signedUp
    blocked
    isDeleted
    device
    browser
    company
    name
    givenName
    familyName
    middleName
    profile
    preferredUsername
    website
    gender
    birthdate
    zoneinfo
    locale
    address
    formatted
    streetAddress
    locality
    region
    postalCode
    city
    province
    country
    createdAt
    updatedAt
    externalId
  }
}
EOF;
}
    

    
class UserpoolResponse {

    public \Authing\Types\UserPool $userpool;
}
    
class UserpoolParam {



    function createRequest() {
      return [
        "query" => self::UserpoolDocument,
        "operationName" => "userpool",
        "variables" => $this
      ];
    }

    const UserpoolDocument = <<<EOF
query userpool {
  userpool {
    id
    name
    domain
    description
    secret
    jwtSecret
    ownerId
    userpoolTypes {
      code
      name
      description
      image
      sdks
    }
    logo
    createdAt
    updatedAt
    emailVerifiedDefault
    sendWelcomeEmail
    registerDisabled
    appSsoEnabled
    showWxQRCodeWhenRegisterDisabled
    allowedOrigins
    tokenExpiresAfter
    isDeleted
    frequentRegisterCheck {
      timeInterval
      limit
      enabled
    }
    loginFailCheck {
      timeInterval
      limit
      enabled
    }
    changePhoneStrategy {
      verifyOldPhone
    }
    changeEmailStrategy {
      verifyOldEmail
    }
    qrcodeLoginStrategy {
      qrcodeExpiresAfter
      returnFullUserInfo
      allowExchangeUserInfoFromBrowser
      ticketExpiresAfter
    }
    app2WxappLoginStrategy {
      ticketExpriresAfter
      ticketExchangeUserInfoNeedSecret
    }
    whitelist {
      phoneEnabled
      emailEnabled
      usernameEnabled
    }
    customSMSProvider {
      enabled
      provider
      config
    }
    packageType
    useCustomUserStore
    loginRequireEmailVerified
    verifyCodeLength
  }
}
EOF;
}
    

    
class UserpoolTypesResponse {

    /**
     * @var UserPoolType[]
     */
    public array $userpoolTypes;
}
    
class UserpoolTypesParam {



    function createRequest() {
      return [
        "query" => self::UserpoolTypesDocument,
        "operationName" => "userpoolTypes",
        "variables" => $this
      ];
    }

    const UserpoolTypesDocument = <<<EOF
query userpoolTypes {
  userpoolTypes {
    code
    name
    description
    image
    sdks
  }
}
EOF;
}
    

    
class UserpoolsResponse {

    public \Authing\Types\PaginatedUserpool $userpools;
}
    
class UserpoolsParam {

    /**
     * Optional
     */
    public int $page;

    /**
     * Optional
     */
    public int $limit;

    /**
     * Optional
     */
    public \Authing\Types\SortByEnum $sortBy;

public function __construct() {

}

/**
 * @param $page int
 * @return UserpoolsParam
 */
public function withPage($page) {
  $this->page = $page;
  return $this;
}

/**
 * @param $limit int
 * @return UserpoolsParam
 */
public function withLimit($limit) {
  $this->limit = $limit;
  return $this;
}

/**
 * @param $sortBy SortByEnum
 * @return UserpoolsParam
 */
public function withSortBy($sortBy) {
  $this->sortBy = $sortBy;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::UserpoolsDocument,
        "operationName" => "userpools",
        "variables" => $this
      ];
    }

    const UserpoolsDocument = <<<EOF
query userpools(\$page: Int, \$limit: Int, \$sortBy: SortByEnum) {
  userpools(page: \$page, limit: \$limit, sortBy: \$sortBy) {
    totalCount
    list {
      id
      name
      domain
      ownerId
      description
      secret
      jwtSecret
      logo
      createdAt
      updatedAt
      emailVerifiedDefault
      sendWelcomeEmail
      registerDisabled
      appSsoEnabled
      showWxQRCodeWhenRegisterDisabled
      allowedOrigins
      tokenExpiresAfter
      isDeleted
      packageType
      useCustomUserStore
      loginRequireEmailVerified
      verifyCodeLength
    }
  }
}
EOF;
}
    

    
class UsersResponse {

    public \Authing\Types\PaginatedUsers $users;
}
    
class UsersParam {

    /**
     * Optional
     */
    public int $page;

    /**
     * Optional
     */
    public int $limit;

    /**
     * Optional
     */
    public \Authing\Types\SortByEnum $sortBy;

public function __construct() {

}

/**
 * @param $page int
 * @return UsersParam
 */
public function withPage($page) {
  $this->page = $page;
  return $this;
}

/**
 * @param $limit int
 * @return UsersParam
 */
public function withLimit($limit) {
  $this->limit = $limit;
  return $this;
}

/**
 * @param $sortBy SortByEnum
 * @return UsersParam
 */
public function withSortBy($sortBy) {
  $this->sortBy = $sortBy;
  return $this;
}
    function createRequest() {
      return [
        "query" => self::UsersDocument,
        "operationName" => "users",
        "variables" => $this
      ];
    }

    const UsersDocument = <<<EOF
query users(\$page: Int, \$limit: Int, \$sortBy: SortByEnum) {
  users(page: \$page, limit: \$limit, sortBy: \$sortBy) {
    totalCount
    list {
      id
      arn
      userPoolId
      status
      username
      email
      emailVerified
      phone
      phoneVerified
      unionid
      openid
      nickname
      registerSource
      photo
      password
      oauth
      token
      tokenExpiredAt
      loginsCount
      lastLogin
      lastIP
      signedUp
      blocked
      isDeleted
      device
      browser
      company
      name
      givenName
      familyName
      middleName
      profile
      preferredUsername
      website
      gender
      birthdate
      zoneinfo
      locale
      address
      formatted
      streetAddress
      locality
      region
      postalCode
      city
      province
      country
      createdAt
      updatedAt
      externalId
    }
  }
}
EOF;
}
    

    
class WhitelistResponse {

    /**
     * @var WhiteList[]
     */
    public array $whitelist;
}
    
class WhitelistParam {

    /**
 * @param $type WhitelistType
 */
public function __construct(
    /**
     * Required
     *
     * @var WhitelistType
     */
    public $type
)
{
}

    function createRequest() {
      return [
        "query" => self::WhitelistDocument,
        "operationName" => "whitelist",
        "variables" => $this
      ];
    }

    const WhitelistDocument = <<<EOF
query whitelist(\$type: WhitelistType!) {
  whitelist(type: \$type) {
    createdAt
    updatedAt
    value
  }
}
EOF;
}
    