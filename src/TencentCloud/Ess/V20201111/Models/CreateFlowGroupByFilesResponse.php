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
 * CreateFlowGroupByFiles返回参数结构体
 *
 * @method string getFlowGroupId() 获取合同(流程)组的合同组Id
 * @method void setFlowGroupId(string $FlowGroupId) 设置合同(流程)组的合同组Id
 * @method array getFlowIds() 获取合同(流程)组中子合同列表.
 * @method void setFlowIds(array $FlowIds) 设置合同(流程)组中子合同列表.
 * @method array getApprovers() 获取合同组签署方信息。
 * @method void setApprovers(array $Approvers) 设置合同组签署方信息。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateFlowGroupByFilesResponse extends AbstractModel
{
    /**
     * @var string 合同(流程)组的合同组Id
     */
    public $FlowGroupId;

    /**
     * @var array 合同(流程)组中子合同列表.
     */
    public $FlowIds;

    /**
     * @var array 合同组签署方信息。
     */
    public $Approvers;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $FlowGroupId 合同(流程)组的合同组Id
     * @param array $FlowIds 合同(流程)组中子合同列表.
     * @param array $Approvers 合同组签署方信息。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("FlowGroupId",$param) and $param["FlowGroupId"] !== null) {
            $this->FlowGroupId = $param["FlowGroupId"];
        }

        if (array_key_exists("FlowIds",$param) and $param["FlowIds"] !== null) {
            $this->FlowIds = $param["FlowIds"];
        }

        if (array_key_exists("Approvers",$param) and $param["Approvers"] !== null) {
            $this->Approvers = [];
            foreach ($param["Approvers"] as $key => $value){
                $obj = new FlowGroupApprovers();
                $obj->deserialize($value);
                array_push($this->Approvers, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
