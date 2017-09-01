@extends('admin/layouts/app')
@section('content')
    <div class="yjgl">
        <div class="ssjc_right_up">
            <div class="nei">
                <div class="ssjc_ru_title">
                  <span class="left_ten">
                    查询条件
                  </span>
                    <div class="clear"></div>
                </div>
                <div class="sbaz_table">
                    <p><span class="float_left"><span>查询：</span><input type="text"></span>
                        <span class="float_right">
                    <input type="submit" value="查询" class="in_sub">
                 </span>
                    <div class="clear"></div>
                    </p>
                </div>
            </div>
            <div class="ssjc_right_bottom">
                <div class="nei">
                    <p>数据列表</p>
                    <div class="ssjc_rub_table">
                        <table class="tj_table" border="0">
                            <thead>
                            <tr>
                                <td>策略名称</td>
                                <td>目标负荷</td>
                                <td>策略解析</td>
                                <td>操作</td>
                            </tr>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>01夏季空调调频策略</td>
                                <td>5000KW</td>
                                <td>调高空调出水温度5℃，降低冷却泵点击频率。</td>
                                <td><a href="#" class="lindianjia">修改</a> | <a href="#">删除</a></td>
                            </tr>
                            <tr>
                                <td>02照明控制策略</td>
                                <td>2000KW</td>
                                <td>根据室内亮度，调节LED灯亮度及功率。</td>
                                <td><a href="#" class="lindianjia">修改</a> | <a href="#">删除</a></td>
                            </tr>
                            <tr>
                                <td>02插座控制策略</td>
                                <td>2000KW</td>
                                <td>根据工作时间安排，节约非工作时间插座功率。</td>
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