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
namespace TencentCloud\Ic\V20190307\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCards请求参数结构体
 *
 * @method string getSdkappid() 获取应用ID
 * @method void setSdkappid(string $Sdkappid) 设置应用ID
 * @method integer getOffset() 获取偏移值
 * @method void setOffset(integer $Offset) 设置偏移值
 * @method integer getLimit() 获取列表限制
 * @method void setLimit(integer $Limit) 设置列表限制
 */
class DescribeCardsRequest extends AbstractModel
{
    /**
     * @var string 应用ID
     */
    public $Sdkappid;

    /**
     * @var integer 偏移值
     */
    public $Offset;

    /**
     * @var integer 列表限制
     */
    public $Limit;

    /**
     * @param string $Sdkappid 应用ID
     * @param integer $Offset 偏移值
     * @param integer $Limit 列表限制
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
        if (array_key_exists("Sdkappid",$param) and $param["Sdkappid"] !== null) {
            $this->Sdkappid = $param["Sdkappid"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
