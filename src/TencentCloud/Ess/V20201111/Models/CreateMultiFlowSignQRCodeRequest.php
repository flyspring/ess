<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateMultiFlowSignQRCode请求参数结构体
 *
 * @method UserInfo getOperator() 获取执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method void setOperator(UserInfo $Operator) 设置执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method string getTemplateId() 获取合同模板ID，为32位字符串。
可登录腾讯电子签控制台，在 "模板"->"模板中心"->"列表展示设置"选中模板 ID 中查看某个模板的TemplateId(在页面中展示为模板ID)。
 * @method void setTemplateId(string $TemplateId) 设置合同模板ID，为32位字符串。
可登录腾讯电子签控制台，在 "模板"->"模板中心"->"列表展示设置"选中模板 ID 中查看某个模板的TemplateId(在页面中展示为模板ID)。
 * @method string getFlowName() 获取合同流程的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。
该名称还将用于合同签署完成后的下载文件名。
 * @method void setFlowName(string $FlowName) 设置合同流程的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。
该名称还将用于合同签署完成后的下载文件名。
 * @method integer getMaxFlowNum() 获取通过此二维码可发起的流程最大限额，如未明确指定，默认为5份。
一旦发起流程数超越该限制，该二维码将自动失效。
 * @method void setMaxFlowNum(integer $MaxFlowNum) 设置通过此二维码可发起的流程最大限额，如未明确指定，默认为5份。
一旦发起流程数超越该限制，该二维码将自动失效。
 * @method integer getQrEffectiveDay() 获取二维码的有效期限，默认为7天，最高设定不得超过90天。
一旦超过二维码的有效期限，该二维码将自动失效。
 * @method void setQrEffectiveDay(integer $QrEffectiveDay) 设置二维码的有效期限，默认为7天，最高设定不得超过90天。
一旦超过二维码的有效期限，该二维码将自动失效。
 * @method integer getFlowEffectiveDay() 获取合同流程的签署有效期限，若未设定签署截止日期，则默认为自合同流程创建起的7天内截止。
若在签署截止日期前未完成签署，合同状态将变更为已过期，从而导致合同无效。
最长设定期限不得超过30天。
 * @method void setFlowEffectiveDay(integer $FlowEffectiveDay) 设置合同流程的签署有效期限，若未设定签署截止日期，则默认为自合同流程创建起的7天内截止。
若在签署截止日期前未完成签署，合同状态将变更为已过期，从而导致合同无效。
最长设定期限不得超过30天。
 * @method array getRestrictions() 获取指定签署人信息。
在指定签署人后，仅允许特定签署人通过扫描二维码进行签署。
 * @method void setRestrictions(array $Restrictions) 设置指定签署人信息。
在指定签署人后，仅允许特定签署人通过扫描二维码进行签署。
 * @method string getUserData() 获取调用方自定义的个性化字段(可自定义此字段的值)，并以base64方式编码，支持的最大数据大小为 20480长度。
在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。
回调的相关说明可参考开发者中心的<a href="https://qian.tencent.com/developers/company/callback_types_v2" target="_blank">回调通知</a>模块。
 * @method void setUserData(string $UserData) 设置调用方自定义的个性化字段(可自定义此字段的值)，并以base64方式编码，支持的最大数据大小为 20480长度。
在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。
回调的相关说明可参考开发者中心的<a href="https://qian.tencent.com/developers/company/callback_types_v2" target="_blank">回调通知</a>模块。
 * @method string getCallbackUrl() 获取已废弃，回调配置统一使用企业应用管理-应用集成-企业版应用中的配置 
<br/> 通过一码多扫二维码发起的合同，回调消息可参考文档 https://qian.tencent.com/developers/company/callback_types_contracts_sign
<br/> 用户通过签署二维码发起合同时，因企业额度不足导致失败 会触发签署二维码相关回调,具体参考文档 https://qian.tencent.com/developers/company/callback_types_commons#%E7%AD%BE%E7%BD%B2%E4%BA%8C%E7%BB%B4%E7%A0%81%E7%9B%B8%E5%85%B3%E5%9B%9E%E8%B0%83

 * @method void setCallbackUrl(string $CallbackUrl) 设置已废弃，回调配置统一使用企业应用管理-应用集成-企业版应用中的配置 
<br/> 通过一码多扫二维码发起的合同，回调消息可参考文档 https://qian.tencent.com/developers/company/callback_types_contracts_sign
<br/> 用户通过签署二维码发起合同时，因企业额度不足导致失败 会触发签署二维码相关回调,具体参考文档 https://qian.tencent.com/developers/company/callback_types_commons#%E7%AD%BE%E7%BD%B2%E4%BA%8C%E7%BB%B4%E7%A0%81%E7%9B%B8%E5%85%B3%E5%9B%9E%E8%B0%83

 * @method Agent getAgent() 获取代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method void setAgent(Agent $Agent) 设置代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method ApproverRestriction getApproverRestrictions() 获取限制二维码用户条件（已弃用）
 * @method void setApproverRestrictions(ApproverRestriction $ApproverRestrictions) 设置限制二维码用户条件（已弃用）
 * @method array getApproverComponentLimitTypes() 获取指定签署方在使用个人印章签署控件（SIGN_SIGNATURE） 时可使用的签署方式：自由书写、正楷临摹、系统签名、个人印章。
 * @method void setApproverComponentLimitTypes(array $ApproverComponentLimitTypes) 设置指定签署方在使用个人印章签署控件（SIGN_SIGNATURE） 时可使用的签署方式：自由书写、正楷临摹、系统签名、个人印章。
 * @method boolean getForbidPersonalMultipleSign() 获取禁止个人用户重复签署，默认不禁止，即同一用户可多次扫码签署多份合同。若要求同一用户仅能扫码签署一份合同，请传入true。
 * @method void setForbidPersonalMultipleSign(boolean $ForbidPersonalMultipleSign) 设置禁止个人用户重复签署，默认不禁止，即同一用户可多次扫码签署多份合同。若要求同一用户仅能扫码签署一份合同，请传入true。
 * @method boolean getFlowNameAppendScannerInfo() 获取合同流程名称是否应包含扫码签署人的信息，且遵循特定格式（flowname-姓名-手机号后四位）。
例如，通过参数FlowName设定的扫码发起合同名称为“员工入职合同”，当扫码人张三（手机号18800009527）扫码签署时，合同名称将自动生成为“员工入职合同-张三-9527”。
 * @method void setFlowNameAppendScannerInfo(boolean $FlowNameAppendScannerInfo) 设置合同流程名称是否应包含扫码签署人的信息，且遵循特定格式（flowname-姓名-手机号后四位）。
例如，通过参数FlowName设定的扫码发起合同名称为“员工入职合同”，当扫码人张三（手机号18800009527）扫码签署时，合同名称将自动生成为“员工入职合同-张三-9527”。
 */
class CreateMultiFlowSignQRCodeRequest extends AbstractModel
{
    /**
     * @var UserInfo 执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     */
    public $Operator;

    /**
     * @var string 合同模板ID，为32位字符串。
可登录腾讯电子签控制台，在 "模板"->"模板中心"->"列表展示设置"选中模板 ID 中查看某个模板的TemplateId(在页面中展示为模板ID)。
     */
    public $TemplateId;

    /**
     * @var string 合同流程的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。
该名称还将用于合同签署完成后的下载文件名。
     */
    public $FlowName;

    /**
     * @var integer 通过此二维码可发起的流程最大限额，如未明确指定，默认为5份。
一旦发起流程数超越该限制，该二维码将自动失效。
     */
    public $MaxFlowNum;

    /**
     * @var integer 二维码的有效期限，默认为7天，最高设定不得超过90天。
一旦超过二维码的有效期限，该二维码将自动失效。
     */
    public $QrEffectiveDay;

    /**
     * @var integer 合同流程的签署有效期限，若未设定签署截止日期，则默认为自合同流程创建起的7天内截止。
若在签署截止日期前未完成签署，合同状态将变更为已过期，从而导致合同无效。
最长设定期限不得超过30天。
     */
    public $FlowEffectiveDay;

    /**
     * @var array 指定签署人信息。
在指定签署人后，仅允许特定签署人通过扫描二维码进行签署。
     */
    public $Restrictions;

    /**
     * @var string 调用方自定义的个性化字段(可自定义此字段的值)，并以base64方式编码，支持的最大数据大小为 20480长度。
在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。
回调的相关说明可参考开发者中心的<a href="https://qian.tencent.com/developers/company/callback_types_v2" target="_blank">回调通知</a>模块。
     */
    public $UserData;

    /**
     * @var string 已废弃，回调配置统一使用企业应用管理-应用集成-企业版应用中的配置 
<br/> 通过一码多扫二维码发起的合同，回调消息可参考文档 https://qian.tencent.com/developers/company/callback_types_contracts_sign
<br/> 用户通过签署二维码发起合同时，因企业额度不足导致失败 会触发签署二维码相关回调,具体参考文档 https://qian.tencent.com/developers/company/callback_types_commons#%E7%AD%BE%E7%BD%B2%E4%BA%8C%E7%BB%B4%E7%A0%81%E7%9B%B8%E5%85%B3%E5%9B%9E%E8%B0%83

     * @deprecated
     */
    public $CallbackUrl;

    /**
     * @var Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     */
    public $Agent;

    /**
     * @var ApproverRestriction 限制二维码用户条件（已弃用）
     * @deprecated
     */
    public $ApproverRestrictions;

    /**
     * @var array 指定签署方在使用个人印章签署控件（SIGN_SIGNATURE） 时可使用的签署方式：自由书写、正楷临摹、系统签名、个人印章。
     */
    public $ApproverComponentLimitTypes;

    /**
     * @var boolean 禁止个人用户重复签署，默认不禁止，即同一用户可多次扫码签署多份合同。若要求同一用户仅能扫码签署一份合同，请传入true。
     */
    public $ForbidPersonalMultipleSign;

    /**
     * @var boolean 合同流程名称是否应包含扫码签署人的信息，且遵循特定格式（flowname-姓名-手机号后四位）。
例如，通过参数FlowName设定的扫码发起合同名称为“员工入职合同”，当扫码人张三（手机号18800009527）扫码签署时，合同名称将自动生成为“员工入职合同-张三-9527”。
     */
    public $FlowNameAppendScannerInfo;

    /**
     * @param UserInfo $Operator 执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     * @param string $TemplateId 合同模板ID，为32位字符串。
可登录腾讯电子签控制台，在 "模板"->"模板中心"->"列表展示设置"选中模板 ID 中查看某个模板的TemplateId(在页面中展示为模板ID)。
     * @param string $FlowName 合同流程的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。
该名称还将用于合同签署完成后的下载文件名。
     * @param integer $MaxFlowNum 通过此二维码可发起的流程最大限额，如未明确指定，默认为5份。
一旦发起流程数超越该限制，该二维码将自动失效。
     * @param integer $QrEffectiveDay 二维码的有效期限，默认为7天，最高设定不得超过90天。
一旦超过二维码的有效期限，该二维码将自动失效。
     * @param integer $FlowEffectiveDay 合同流程的签署有效期限，若未设定签署截止日期，则默认为自合同流程创建起的7天内截止。
若在签署截止日期前未完成签署，合同状态将变更为已过期，从而导致合同无效。
最长设定期限不得超过30天。
     * @param array $Restrictions 指定签署人信息。
在指定签署人后，仅允许特定签署人通过扫描二维码进行签署。
     * @param string $UserData 调用方自定义的个性化字段(可自定义此字段的值)，并以base64方式编码，支持的最大数据大小为 20480长度。
在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。
回调的相关说明可参考开发者中心的<a href="https://qian.tencent.com/developers/company/callback_types_v2" target="_blank">回调通知</a>模块。
     * @param string $CallbackUrl 已废弃，回调配置统一使用企业应用管理-应用集成-企业版应用中的配置 
<br/> 通过一码多扫二维码发起的合同，回调消息可参考文档 https://qian.tencent.com/developers/company/callback_types_contracts_sign
<br/> 用户通过签署二维码发起合同时，因企业额度不足导致失败 会触发签署二维码相关回调,具体参考文档 https://qian.tencent.com/developers/company/callback_types_commons#%E7%AD%BE%E7%BD%B2%E4%BA%8C%E7%BB%B4%E7%A0%81%E7%9B%B8%E5%85%B3%E5%9B%9E%E8%B0%83

     * @param Agent $Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     * @param ApproverRestriction $ApproverRestrictions 限制二维码用户条件（已弃用）
     * @param array $ApproverComponentLimitTypes 指定签署方在使用个人印章签署控件（SIGN_SIGNATURE） 时可使用的签署方式：自由书写、正楷临摹、系统签名、个人印章。
     * @param boolean $ForbidPersonalMultipleSign 禁止个人用户重复签署，默认不禁止，即同一用户可多次扫码签署多份合同。若要求同一用户仅能扫码签署一份合同，请传入true。
     * @param boolean $FlowNameAppendScannerInfo 合同流程名称是否应包含扫码签署人的信息，且遵循特定格式（flowname-姓名-手机号后四位）。
例如，通过参数FlowName设定的扫码发起合同名称为“员工入职合同”，当扫码人张三（手机号18800009527）扫码签署时，合同名称将自动生成为“员工入职合同-张三-9527”。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("MaxFlowNum",$param) and $param["MaxFlowNum"] !== null) {
            $this->MaxFlowNum = $param["MaxFlowNum"];
        }

        if (array_key_exists("QrEffectiveDay",$param) and $param["QrEffectiveDay"] !== null) {
            $this->QrEffectiveDay = $param["QrEffectiveDay"];
        }

        if (array_key_exists("FlowEffectiveDay",$param) and $param["FlowEffectiveDay"] !== null) {
            $this->FlowEffectiveDay = $param["FlowEffectiveDay"];
        }

        if (array_key_exists("Restrictions",$param) and $param["Restrictions"] !== null) {
            $this->Restrictions = [];
            foreach ($param["Restrictions"] as $key => $value){
                $obj = new ApproverRestriction();
                $obj->deserialize($value);
                array_push($this->Restrictions, $obj);
            }
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("ApproverRestrictions",$param) and $param["ApproverRestrictions"] !== null) {
            $this->ApproverRestrictions = new ApproverRestriction();
            $this->ApproverRestrictions->deserialize($param["ApproverRestrictions"]);
        }

        if (array_key_exists("ApproverComponentLimitTypes",$param) and $param["ApproverComponentLimitTypes"] !== null) {
            $this->ApproverComponentLimitTypes = [];
            foreach ($param["ApproverComponentLimitTypes"] as $key => $value){
                $obj = new ApproverComponentLimitType();
                $obj->deserialize($value);
                array_push($this->ApproverComponentLimitTypes, $obj);
            }
        }

        if (array_key_exists("ForbidPersonalMultipleSign",$param) and $param["ForbidPersonalMultipleSign"] !== null) {
            $this->ForbidPersonalMultipleSign = $param["ForbidPersonalMultipleSign"];
        }

        if (array_key_exists("FlowNameAppendScannerInfo",$param) and $param["FlowNameAppendScannerInfo"] !== null) {
            $this->FlowNameAppendScannerInfo = $param["FlowNameAppendScannerInfo"];
        }
    }
}
