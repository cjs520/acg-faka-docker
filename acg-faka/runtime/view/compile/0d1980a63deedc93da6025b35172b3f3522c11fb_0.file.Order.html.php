<?php
/* Smarty version 3.1.46, created on 2024-05-31 08:53:17
  from '/var/www/html/app/View/Admin/Trade/Order.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_66598ffd877814_67043975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d1980a63deedc93da6025b35172b3f3522c11fb' => 
    array (
      0 => '/var/www/html/app/View/Admin/Trade/Order.html',
      1 => 1717144758,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Header.html' => 1,
    'file:../Toolbar.html' => 1,
    'file:../Footer.html' => 1,
  ),
),false)) {
function content_66598ffd877814_67043975 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../Header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <?php $_smarty_tpl->_subTemplateRender("file:../Toolbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">
            <!--begin::Row-->
            <div class="row g-5 g-xl-10">
                <div class="col-xl-4">
                    <!--begin::Statistics Widget 1-->
                    <div class="card bgi-no-repeat card-xl-stretch mb-xl-8"
                         style="background-position: right top; background-size: 30% auto; background-image: url(/assets/admin/images/svg/shapes/abstract-4.svg)">
                        <!--begin::Body-->
                        <div class="card-body">
                            <span class="card-title fw-bolder text-muted text-hover-primary fs-4">订单数量</span>
                            <div class="fw-bolder fs-1 text-primary my-6 order_count">...</div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Statistics Widget 1-->
                </div>
                <div class="col-xl-4">
                    <!--begin::Statistics Widget 1-->
                    <div class="card bgi-no-repeat card-xl-stretch mb-xl-8"
                         style="background-position: right top; background-size: 30% auto; background-image: url(/assets/admin/images/svg/shapes/abstract-4.svg)">
                        <!--begin::Body-->
                        <div class="card-body">
                            <span class="card-title fw-bolder text-muted text-hover-primary fs-4">订单金额</span>
                            <div class="fw-bolder fs-1 text-success my-6 order_amount">...</div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Statistics Widget 1-->
                </div>
                <div class="col-xl-4">
                    <!--begin::Statistics Widget 1-->
                    <div class="card bgi-no-repeat card-xl-stretch mb-xl-8"
                         style="background-position: right top; background-size: 30% auto; background-image: url(/assets/admin/images/svg/shapes/abstract-4.svg)">
                        <!--begin::Body-->
                        <div class="card-body">
                            <span class="card-title fw-bolder text-muted text-hover-primary fs-4">手续费</span>
                            <div class="fw-bolder fs-1 text-danger my-6 order_cost">...</div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Statistics Widget 1-->
                </div>
            </div>
            <!--end::Row-->

            <!--begin::Tables Widget 9-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <div class="card-toolbar">
                        <button class="btn btn-sm btn-light-primary clear me-3"><i class="fab fa-edge"></i>
                            一键清理无用订单
                        </button>
                        <!--start::HOOK-->
                        <?php echo hook(\App\Consts\Hook::ADMIN_VIEW_ORDER_TOOLBAR);?>

                        <!--end::HOOK-->
                        <span class="badge badge-light-primary fs-8">Tips：上方订单数据显示会根据下方的查询条件进行筛选显示。</span>
                    </div>
                </div>
                <!--end::Header-->

                <div class="card-body py-3">
                    <form class="search-query"></form>
                    <table id="order" lay-filter="order"></table>
                </div>
            </div>

            <!--end::Tables Widget 9-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
<!--end::Content-->

<style>
    .order-modal-table tr {
        height: 24px;
        line-height: 24px;
    }

    .order-modal-table tr td:nth-child(1) {
        width: 60px;
        font-weight: bolder;
        color: #8b979c;
    }

    .order-modal-table tr td {
        font-size: 14px;
        display: inline-block;
        margin-right: 20px;
    }
</style>

<div style="display: none" class="order-modal">
    <div style="padding: 10px;">
        <table class="order-modal-table">
            <tbody>
            <tr>
                <td>下单会员</td>
                <td>[owner]</td>
            </tr>

            <tr>
                <td>商品</td>
                <td>[commodity_id]</td>
            </tr>
            <tr>
                <td>订单号</td>
                <td>[trade_no]</td>
            </tr>
            <tr>
                <td>订单金额</td>
                <td>[amount]</td>
            </tr>
            <tr>
                <td>购买数量</td>
                <td>[card_num]</td>
            </tr>
            <tr>
                <td>预选卡密</td>
                <td>[card_id]</td>
            </tr>
            <tr>
                <td>支付方式</td>
                <td>[pay_id]</td>
            </tr>
            <tr>
                <td>下单时间</td>
                <td>[create_time]</td>
            </tr>
            <tr>
                <td>下单IP</td>
                <td>[create_ip]</td>
            </tr>
            <tr>
                <td>下单设备</td>
                <td>[create_device]</td>
            </tr>

            <tr>
                <td>支付状态</td>
                <td>[status]</td>
            </tr>
            <tr>
                <td>支付时间</td>
                <td>[pay_time]</td>
            </tr>
            <tr>
                <td>支付地址</td>
                <td>[pay_url]</td>
            </tr>

            <tr>
                <td>查询密码</td>
                <td>[password]</td>
            </tr>
            <tr>
                <td>联系方式</td>
                <td>[contact]</td>
            </tr>
            <tr>
                <td>发货状态</td>
                <td>[delivery_status]</td>
            </tr>
            <tr>
                <td>优惠卷</td>
                <td>[coupon_id]</td>
            </tr>
            <tr>
                <td>手续费</td>
                <td>[cost]</td>
            </tr>
            <tr>
                <td>推广者</td>
                <td>[from]</td>
            </tr>

            <tr>
                <td>订单成本</td>
                <td>[rent]</td>
            </tr>
            <tr>
                <td>商户</td>
                <td>[user_id]</td>
            </tr>
            </tbody>
        </table>
    </div>

</div>

<?php echo '<script'; ?>
>

    $(function () {
        layui.use(['hex', 'form'], function () {
            let table = $("#order");
            let cao = layui.hex;
            let status = ['<span class="badge badge-light-danger">未支付</span>', '<span class="badge badge-light-success">已支付</span>'];
            let delivery_status = ['<span class="badge badge-light-danger">未发货</span>', '<span class="badge badge-light-success">已发货</span>'];
            let delivery_way = ['<span class="badge badge-light-success">自动发货</span>', '<span class="badge badge-light-danger">手动发货</span>'];
            let create_device = [
                '<i class="fab fa-windows"></i>',
                '<i class="fab fa-android"></i>',
                '<i class="fab fa-apple"></i>',
                '<i class="fas fa-tablet-alt"></i>'
            ];
            let contactType = ["", "[手机]", "[邮箱]", "[QQ]"];

            let queryParams = null;
            table.bootstrapTable({
                url: '/admin/api/order/data',//请求的url地址
                method: "post",//请求方式
                // striped:true,//是否显示行间隔色
                pageSize: 13,//每页显示的数量
                pageList: [13, 25, 50, 100],
                showRefresh: false,//是否显示刷新按钮
                cache: false,//是否使用缓存
                showToggle: false,//是否显示详细视图和列表视图的切换按钮
                cardView: false,
                detailView: true,
                detailViewIcon: true,//3，隐藏图标列
                // detailViewByClick: true,//4,隐藏图标列
                detailFormatter: function (index, item, element) {
                    let user = function (item) {
                        if (!item.user) {
                            return '<span class="badge badge-light-success user" style="cursor: pointer;" >系统</span>';
                        }
                        return '<span class="badge badge-light-dark user" style="cursor: pointer;" ><img src="' + item.user.avatar + '"  style="width: 18px;border-radius: 100%;"/> ' + item.user.username + '(' + item.user.id + ')</span>'
                    }

                    return $('.order-modal').html()
                        .replace('[owner]', (item.owner ? '<span class="badge badge-light-dark"" ><img src="' + item.owner.avatar + '"  style="width: 18px;border-radius: 100%;"/> ' + item.owner.username + '(' + item.owner.id + ')</span>' : '<span class="badge badge-light-success">访客</span>'))
                        .replace('[commodity_id]', item.commodity ? '<span class="badge badge-light">' + item.commodity.name + '</span>' : '-')
                        .replace('[trade_no]', '<span class="badge badge-light">' + item.trade_no + '</span>')
                        .replace('[amount]', '<span class="badge badge-light-success"><i class="fas fa-yen-sign text-success fs-10"></i> ' + item.amount + '</span>')
                        .replace('[card_num]', '<span class="badge badge-light-dark">' + item.card_num + '</span>')
                        .replace('[card_id]', item.card_id ? '<span class="badge badge-light-success">是</span>' : '<span class="badge badge-light-danger">否</span>')
                        .replace('[pay_id]', item.pay ? '<span class="badge badge-light-primary"><img src="' + item.pay.icon + '"  style="width: 18px;border-radius: 100%;"/> ' + item.pay.name + '</span>' : '-')
                        .replace('[create_time]', '<span class="badge badge-light">' + item.create_time + '</span>')
                        .replace('[create_ip]', '<span class="badge badge-light">' + item.create_ip + '</span>')
                        .replace('[create_device]', '<span class="badge badge-light-primary">' + create_device[item.create_device] + '</span>')
                        .replace('[status]', status[item.status])
                        .replace('[pay_time]', item.pay_time ? '<span class="badge badge-light">' + item.pay_time + '</span>' : '-')
                        .replace('[pay_url]', '<a href="' + item.pay_url + '" target="_blank">' + item.pay_url + '</a>')
                        .replace('[password]', item.password ? '<span class="badge badge-light">' + item.password + '</span>' : '-')
                        .replace('[contact]', '<span class="badge badge-light">' + item.contact + '</span>')
                        .replace('[delivery_status]', delivery_status[item.delivery_status])
                        .replace('[coupon_id]', item.coupon ? '<span class="badge badge-light-primary">' + item.coupon.code + '</span>' : '-')
                        .replace('[cost]', item.user ? '<span class="badge badge-light-primary"><i class="fas fa-yen-sign text-primary fs-10"></i> ' + item.cost + '</span>' : '-')
                        .replace('[from]', item.promote ? '<span class="badge badge-light-dark"" ><img src="' + item.promote.avatar + '"  style="width: 18px;border-radius: 100%;"/> ' + item.promote.username + '(' + item.promote.id + ')</span>' : '-')
                        .replace('[rent]', '<span class="badge badge-light-danger">' + item.rent + '</span>')
                        .replace('[user_id]', user(item));
                },
                pagination: true,//是否显示分页
                pageNumber: 1,//初始化显示第几页，默认第1页
                singleSelect: false,//复选框只能选择一条记录
                sidePagination: 'server',//分页显示方式，可以选择客户端和服务端（server|client）
                contentType: "application/x-www-form-urlencoded",//使用post请求时必须加上
                dataType: "json",//接收的数据类型
                queryParamsType: 'limit',//参数格式，发送标准的Restful类型的请求
                queryParams: function (params) {
                    params.page = (params.offset / params.limit) + 1;
                    if (queryParams) {
                        for (const key in params) {
                            queryParams[key] = params[key];
                        }
                    } else {
                        queryParams = params;
                    }
                    return queryParams;
                },
                //回调函数
                responseHandler: function (res) {
                    $('.order_count').html(res.order_count);
                    $('.order_amount').html(res.order_amount);
                    $('.order_cost').html(res.order_cost);

                    return {
                        "total": res.count,
                        "rows": res.data
                    }
                },
                columns: [
                    {checkbox: true}
                    , {
                        field: 'trade_no', title: '订单号', formatter: function (val, item) {
                            return '<span class="badge badge-light">' + item.trade_no + '</span>';
                        }
                    }
                    , {
                        field: 'owner', title: '会员', formatter: function (val, item) {
                            if (!item.owner) {
                                return '<span class="badge badge-light-success owner" style="cursor: pointer;" >访客</span>';
                            }
                            return '<span class="badge badge-light-dark owner" style="cursor: pointer;" ><img src="' + item.owner.avatar + '"  style="width: 18px;border-radius: 100%;"/> ' + item.owner.username + '(' + item.owner.id + ')</span>'
                        },
                        events: {
                            'click .owner': function (event, value, row, index) {
                                let id = row.owner ? row.owner.id : 0;
                                $("input[name='equal-owner']").val(id);
                                table.bootstrapTable('refresh', {
                                    silent: true,
                                    pageNumber: 1,
                                    query: {"equal-owner": id}
                                });
                            }
                        }
                    }
                    , {
                        field: 'commodity', title: '商品', formatter: function (val, item) {
                            if (!item.commodity) {
                                return "-";
                            }
                            let race = "";

                            if (item.race) {
                                race = " ( <b style='color: #20b033;'>" + item.race + "</b> )";
                            }

                            return '<span class="badge badge-light">' + item.commodity.name + '' + race + '</span>';
                        }
                    }
                    , {
                        field: 'card_num', title: '数量', formatter: function (val, item) {
                            return '<span class="badge badge-light-dark">' + item.card_num + '</span>';
                        }
                    }
                    , {
                        field: 'amount', title: '金额', formatter: function (val, item) {
                            return '<span class="badge badge-light-success"><i class="fas fa-yen-sign text-success fs-10"></i> ' + item.amount + '</span>';
                        }
                    }
                    , {
                        field: 'delivery_way', title: '发货方式', formatter: function (val, item) {
                            if (!item.commodity) {
                                return "-";
                            }
                            return delivery_way[item.commodity.delivery_way];
                        }
                    }
                    , {
                        field: 'pay_id', title: '支付方式', formatter: function (val, item) {
                            if (!item.pay) {
                                return "-";
                            }
                            return '<span class="badge badge-light-primary"><img src="' + item.pay.icon + '"  style="width: 18px;border-radius: 100%;"/> ' + item.pay.name + '</span>';
                        }
                    }
                    , {
                        field: 'create_device', title: '设备', formatter: function (val, item) {
                            return '<span class="badge badge-light-primary">' + create_device[item.create_device] + '</span>';
                        }
                    }
                    , {
                        field: 'create_time', title: '下单时间', width: 150, formatter: function (val, item) {
                            return '<span class="badge badge-light">' + item.create_time + '</span>';
                        }
                    }
                    , {
                        field: 'create_ip', title: '客户IP', width: 115, formatter: function (val, item) {
                            return '<span class="badge badge-light">' + item.create_ip + '</span>';
                        }
                    }
                    , {
                        field: 'contact', title: '联系方式', formatter: function (val, item) {
                            if (!item.commodity) {
                                return "-";
                            }
                            return '<span class="badge badge-light">' + item.contact + '</span>';
                        }
                    }
                    , {
                        field: 'password', title: '查询密码', formatter: function (val, item) {
                            if (!item.password) {
                                return "-";
                            }
                            return '<span class="badge badge-light-dark">' + item.password + '</span>';
                        }
                    }
                    , {
                        field: 'status', title: '支付状态', formatter: function (val, item) {
                            return status[item.status];
                        }
                    }
                    , {
                        field: 'delivery_status', title: '发货状态', formatter: function (val, item) {
                            return delivery_status[item.delivery_status];
                        }
                    }

                    , {
                        field: 'cost', title: '手续费', formatter: function (val, item) {
                            if (!item.user) {
                                return '-';
                            }
                            return '<span class="badge badge-light-primary"><i class="fas fa-yen-sign text-primary fs-10"></i> ' + item.cost + '</span>';
                        }
                    }
                    , {
                        field: 'secret', title: '卡密信息', formatter: function (val, item) {
                            if (item.status != 1) {
                                return "-";
                            }

                            if (item.delivery_status != 1) {
                                return '<span class="badge badge-light-primary delivery-card" style="cursor: pointer;" >手动发货</span>';
                            }

                            return '<span class="badge badge-light-primary view-card" style="cursor: pointer;" >查看</span>';
                        },
                        events: {
                            'click .view-card': function (event, value, map, index) {
                                layer.open({
                                    type: 1,
                                    title: "查看卡密",
                                    area: cao.isPc() ? ['420px', '420px'] : ["100%", "100%"],
                                    content: '<textarea class="layui-input" style="padding: 15px;height: 100%;">' + map.secret + '</textarea>'
                                });
                            },
                            'click .delivery-card': function (event, value, map, index) {
                                modal(map);
                            },
                        }
                    }
                    , {
                        field: 'user', title: '商家', formatter: function (val, item) {
                            if (!item.user) {
                                return '<span class="badge badge-light-success user" style="cursor: pointer;" >系统</span>';
                            }
                            return '<span class="badge badge-light-dark user" style="cursor: pointer;" ><img src="' + item.user.avatar + '"  style="width: 18px;border-radius: 100%;"/> ' + item.user.username + '(' + item.user.id + ')</span>'
                        }
                        ,
                        events: {
                            'click .user': function (event, value, row, index) {
                                let id = row.user ? row.user.id : 0;
                                $("input[name='equal-user_id']").val(id);
                                table.bootstrapTable('refresh', {
                                    silent: true,
                                    pageNumber: 1,
                                    query: {"equal-user_id": id}
                                });
                            }
                        }
                    }
                    , {
                        field: 'widget', title: '控件', formatter: function (val, item) {
                            let parse = JSON.parse(item.widget);
                            if (!parse || parse.length == 0) {
                                return '-';
                            }
                            return '<span class="widget" style="cursor: pointer;" ><i class="fas fa-eye"></i></span>';
                        }
                        , events: {
                            'click .widget': function (event, value, map, index) {
                                let html = '<div style="padding: 10px;" class="more-table">\n' +
                                    '        <table class="layui-table">\n' +
                                    '            <tbody class="widget-container">\n' +
                                    '            </tbody>\n' +
                                    '        </table>\n' +
                                    '    </div>';
                                let parse = JSON.parse(map.widget);
                                if (!parse) {
                                    return;
                                }
                                layer.open({
                                    type: 1,
                                    shadeClose: true,
                                    title: '<i class="fas fa-eye"></i> <span style="color: gray;">Widget</span>',
                                    content: html,
                                    area: cao.isPc() ? "420px" : ["100%", "100%"],
                                    success: () => {
                                        for (const parseKey in parse) {
                                            $('.widget-container').append('<tr><td>' + parse[parseKey].cn + '</td><td>' + parse[parseKey].value + '</td></tr>');
                                        }
                                    }
                                });
                            }
                        }
                    },
                    <!--start::HOOK-->
                    <?php echo hook(\App\Consts\Hook::ADMIN_VIEW_ORDER_TABLE);?>

                    <!--end::HOOK-->
                ]
            });

            let modal = (values = {}) => {
                cao.popup('/admin/api/order/save', [
                    {
                        title: "发货内容",
                        name: "secret",
                        type: "textarea",
                        placeholder: "手动发货的信息.."
                    }
                ], res => {
                    table.bootstrapTable('refresh', {silent: true});
                }, values);
            }

            cao.query('.search-query', table, [
                {title: "订单号", name: "equal-trade_no", type: "input", width: 140},
                {title: "商品ID", name: "equal-commodity_id", type: "input", width: 140},
                {title: "卡密信息(模糊)", name: "search-secret", type: "input", width: 140},
                {title: "联系方式", name: "equal-contact", type: "input", width: 140},
                {
                    title: "支付状态", name: "equal-status", type: "select", dict: [
                        {id: 0, name: "未支付"},
                        {id: 1, name: "已支付"},
                    ], width: 140
                },
                {
                    title: "发货状态", name: "equal-delivery_status", type: "select", dict: [
                        {id: 0, name: "未发货"},
                        {id: 1, name: "已发货"},
                    ], width: 140
                },
                {
                    title: "支付方式", name: "equal-pay_id", type: "select", dict: "pay,id,name", width: 140
                },
                {
                    title: "下单设备", name: "equal-create_device", type: "select", dict: [
                        {id: 0, name: "PC"},
                        {id: 1, name: "安卓"},
                        {id: 2, name: "IOS"},
                        {id: 3, name: "IPAD"}
                    ], width: 140
                },
                {title: "IP地址", name: "equal-create_ip", type: "input", width: 140},
                {title: "会员ID，0=访客", name: "equal-owner", type: "input", width: 140},
                {title: "商户ID，0=系统", name: "equal-user_id", type: "input", width: 140},
                {title: "开始时间", name: "betweenStart-create_time", type: "date", width: 140},
                {title: "结束时间", name: "betweenEnd-create_time", type: "date", width: 140},
            ], true, false);

            $('.clear').click(() => {
                let loaderIndex = layer.load(2, {shade: ['0.3', '#fff']});
                $.post("/admin/api/order/clear", res => {
                    layer.close(loaderIndex);
                    layer.msg(res.msg);
                    table.bootstrapTable('refresh', {silent: false});
                });
            });
        });
    });
<?php echo '</script'; ?>
>
<!--start::HOOK-->
<?php echo hook(\App\Consts\Hook::ADMIN_VIEW_ORDER_FOOTER);?>

<!--end::HOOK-->
<?php $_smarty_tpl->_subTemplateRender("file:../Footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
