@extends('admin/layouts/app')
@section('content')
    <div class="yjgl">
        <div class="ssjc_right_up">
            <div class="nei">
                <div class="ssjc_ru_title">
                  <span class="left_ten">
                    管理员列表
                  </span>
                    <div class="clear"></div>
                </div>
                <div class="sbaz_table">
                    <p><span class="float_left"><span></span></span>
                        <span class="float_right"> <input type="submit" value="查询" class="in_sub"></span>
                        <span class="float_right"> <a href="{{url('admin/user/create')}}"><input type="submit" value="添加" class="in_sub"></a></span>
                        <span class="float_right"> <input type="submit" value="导出" class="in_sub"></span>
                        <div class="clear"></div>
                    </p>
                </div>
            </div>
            <div class="ssjc_right_bottom">
                <div class="nei">
                    <div class="ssjc_rub_table">
                        <table class="tj_table" border="0">
                            <thead>
                            <tr>
                                <td>序号</td>
                                <td>账号</td>
                                <td>等级</td>
                                <td>邮箱</td>
                                <td>联系电话</td>
                                <td>备注</td>
                                <td>操作</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>01</td>
                                <td>5000KW</td>
                                <td>调高空调出水温度5℃，降低冷却泵点击频率。</td>
                                <td>01夏季空调调频策略</td>
                                <td>5000KW</td>
                                <td>调高空调出水温度5℃，降低冷却泵点击频率。</td>
                                <td><a href="#" class="lindianjia">修改</a> | <a href="#">删除</a></td>
                            </tr>
                            <tr class="kongxian"></tr>
                            <tr class="kongxian"></tr>
                            </tbody>
                        </table>
                        <div class="t_fanye">
                            <span class="upten"></span>
                            <span class="up"></span>
                            <span class="split"></span>
                            <span class="page_info_one">第 1 / 1 页</span>
                            <span class="split"></span>
                            <span class="dowm"></span>
                            <span class="downten"></span>
                            <span class="page_info_two">页记录数 15</span>
                            <span class="page_info_three">当前1-1条记录，共1条记录</span>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="cheng_ershi"></div>
                </div>
            </div>
        </div>
    </div>
@endsection