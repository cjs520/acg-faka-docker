<?php
/* Smarty version 3.1.46, created on 2024-05-31 08:53:22
  from '/var/www/html/app/View/Admin/Store/Store.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_665990020d3cf3_82721514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0211e6d32260cf49c7db40f93ce6ccb1fa86055d' => 
    array (
      0 => '/var/www/html/app/View/Admin/Store/Store.html',
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
function content_665990020d3cf3_82721514 (Smarty_Internal_Template $_smarty_tpl) {
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
            <!--begin::Tables Widget 9-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <div class="card-toolbar">
                        <button class="btn btn-sm btn-light-primary me-3 plugin-btn" data-type="-1">全部</button>
                        <button class="btn btn-sm btn-light-dark me-3 plugin-btn" data-type="0"><i
                                    class="fas fa-plug"></i>通用扩展
                        </button>
                        <button class="btn btn-sm btn-light-dark me-3 plugin-btn" data-type="1"><i
                                    class="fab fa-amazon-pay"></i>支付扩展
                        </button>
                        <button class="btn btn-sm btn-light-dark me-3 plugin-btn" data-type="2"><i
                                    class="fab fa-slideshare"></i>网站模板
                        </button>
                        <button class="btn btn-sm btn-light-dark me-3 plugin-btn" data-type="3"><i
                                    class="fab fa-themeco"></i>专业版插件
                        </button>
                        <button class="btn btn-sm btn-light-dark me-3 plugin-btn" data-type="4"><i
                                    class="far fa-building"></i>企业版插件
                        </button>
                        <button class="btn btn-sm btn-light-danger me-3 update-pro" style="display: none;"><i
                                    class="fab fa-vuejs"></i>开通专业版/企业版(免费使用所有插件)
                        </button>
                    </div>
                </div>
                <!--end::Header-->

                <div class="card-body py-3">
                    <form class="search-query"></form>
                    <table id="plugin"></table>
                </div>
            </div>

            <!--end::Tables Widget 9-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
<!--end::Content-->

<!--modal-->
<div class="store-login" style="display: none">
    <form class="layui-form" style="margin-top: 20px;">
        <div class="layui-form-item">
            <label class="layui-form-label">账号</label>
            <div class="layui-input-inline">
                <label>
                    <input type="text" name="username" placeholder="请输入账号" autocomplete="new-password"
                           class="layui-input">
                </label>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">密码</label>
            <div class="layui-input-inline">
                <label>
                    <input type="text" name="password" placeholder="请输入密码" autocomplete="new-password"
                           class="layui-input">
                </label>
            </div>
        </div>

        <div class="layui-form-item">
            <div class="layui-input-block">
                <button type="button" class="btn btn-sm btn-primary login-btn">立即登录</button>
            </div>
        </div>
    </form>
</div>
<div class="store-register" style="display: none">
    <form class="layui-form" style="margin-top: 20px;">
        <div class="layui-form-item">
            <label class="layui-form-label">账号</label>
            <div class="layui-input-inline">
                <label>
                    <input type="text" name="reg_username" placeholder="请输入账号，支持中文"
                           class="layui-input">
                </label>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">密码</label>
            <div class="layui-input-inline">
                <label>
                    <input type="text" name="reg_password" placeholder="请输入密码"
                           class="layui-input">
                </label>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">验证码</label>
            <div class="layui-input-inline">
                <label>
                    <input type="text" name="reg_captcha" placeholder="验证码"
                           class="layui-input">
                </label>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"></label>
            <div class="layui-input-inline">
                <img src=" " class="captcha-reg" style="height: 100%;border-radius: 3px;" alt="">
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button type="button" class="btn btn-sm btn-success register-btn">立即注册</button>
            </div>
        </div>
    </form>
</div>

<?php echo '<script'; ?>
>


    $(function () {
        layui.use(['hex', 'form'], function () {
            let table = $("#plugin");
            let pluginLoadIndex;
            let form = layui.form;
            var cao = layui.hex;
            let cookie;
            let userLevel = -1;
            let purchasePrice = {};

            function captcha() {
                $.post('/admin/api/app/captcha?type=captcha_reg', res => {
                    if (res.code == 200) {
                        cookie = res.data.cookie;
                        $('.captcha-reg').attr("src", res.data.base64);
                    }
                });
            }


            let tab = function () {
                layer.tab({
                    area: "320px",
                    closeBtn: false,
                    tab: [{
                        title: '<i class="fab fa-app-store-ios" style="color: #f16a8b;font-size: 14px;"></i> 登录账号',
                        content: $(".store-login").html()
                    }, {
                        title: '<i class="fas fa-user-plus" style="color: #f16a8b;font-size: 14px;"></i> 注册账号',
                        content: $('.store-register').html()
                    }],
                    success: () => {
                        captcha();
                        $('.captcha-reg').click(() => {
                            captcha()
                        });
                        $('.register-btn').click(() => {
                            let layIndex = layer.load(1, {
                                shade: [0.3, '#fff']
                            });
                            $.post("/admin/api/app/register", {
                                username: $('.layui-layer-content input[name=reg_username]').val(),
                                password: $('.layui-layer-content input[name=reg_password]').val(),
                                captcha: $('.layui-layer-content input[name=reg_captcha]').val(),
                                cookie: cookie
                            }, res => {
                                layer.close(layIndex);
                                if (res.code == 200) {
                                    window.location.reload();
                                    layer.msg("注册成功");
                                    return;
                                }
                                layer.msg(res.msg);
                            });
                        });
                        $('.login-btn').click(() => {
                            let layIndex = layer.load(1, {
                                shade: [0.3, '#fff']
                            });
                            $.post("/admin/api/app/login", {
                                username: $('.layui-layer-content input[name=username]').val(),
                                password: $('.layui-layer-content input[name=password]').val()
                            }, res => {
                                layer.close(layIndex);
                                if (res.code == 200) {
                                    window.location.reload();
                                    layer.msg("登录成功");
                                    return;
                                }
                                layer.msg(res.msg);
                            });
                        });
                    }
                });
            }


            let purchase = function (plugin = null) {

                let items = [];

                if (plugin) {
                    items.push({
                        title: '<b style="color: #eb88c8;margin:5px;">购买插件</b>',
                        content: "<div style='padding: 20px;'>" +
                            "<div style='margin-bottom: 10px;background: #b55a94;padding: 10px;border-radius: 10px;color: white;'>" +
                            "<p><b>插件名称：</b>" + plugin.plugin_name + "</p>" +
                            "<p><b>插件作者：</b>" + plugin.user.username + "</p>" +
                            "<p><b>插件说明：</b>" + plugin.description + "</p>" +
                            "<p><b>插件演示：</b><a href='" + plugin.web_site + "' target='_blank'>" + plugin.web_site + "</a></p>" +
                            "</div>" +
                            "<p style='margin-bottom: 15px;'><span class='badge badge-light-danger'>价格：" + plugin.price + "/永久</span></p>" +
                            "<p><span class='badge badge-primary purchase-btn' plugin-id='" + plugin.id + "' data-type='0' data-pay='0'>支付宝</span> <span class='badge badge-success purchase-btn'  plugin-id='" + plugin.id + "' data-type='0' data-pay='1'>微信支付</span></p>" +
                            "</div>"
                    });
                }

                if (userLevel == -1) {
                    items.push({
                        title: '<b style="color: #0d8ddc;margin:5px;">专业版</b>',
                        content: "<div style='padding: 20px;'><b style='color: #109b81;margin-bottom: 10px;display: block;'>说明：本程序基于MIT开源协议进行开源，项目开源地址：<a href='https://github.com/lizhipay/acg-faka' target='_blank'>https://github.com/lizhipay/acg-faka</a>，所以是完全免费的，这里的专业版或企业版仅仅是针对应用商店付费插件和技术服务而产生的。</b>" +
                            "<div style='margin-bottom: 10px;background: #2fb0ff;padding: 10px;border-radius: 10px;color: white;'>" +
                            "<p>1.专业版插件免费使用</p>" +
                            "<p>2.技术指导(包含店铺功能的使用)</p>" +
                            "<p>3.远程协助</p>" +
                            "</div>" +
                            "<p style='margin-bottom: 15px;'><span class='badge badge-light-danger'>价格：" + purchasePrice.pro + "/永久</span><span style='text-decoration: line-through;'>(原价:598)</span> <span style='font-size: 12px;'>正式版恢复原价</span></p>" +
                            "<p><span class='badge badge-primary purchase-btn' data-type='1' data-pay='0'>支付宝</span> <span class='badge badge-success purchase-btn' data-type='1' data-pay='1'>微信支付</span></p>" +
                            "</div>"
                    });
                    items.push({
                        title: '<b style="color: #0fb183;margin:5px;">企业版(推荐)</b>',
                        content: "<div style='padding: 20px;'><b style='color: #109b81;margin-bottom: 10px;display: block;'>说明：本程序基于MIT开源协议进行开源，项目开源地址：<a href='https://github.com/lizhipay/acg-faka' target='_blank'>https://github.com/lizhipay/acg-faka</a>，所以是完全免费的，这里的专业版或企业版仅仅是针对应用商店付费插件和技术服务而产生的。</b>" +
                            "<div style='margin-bottom: 10px;background: #19b387;padding: 10px;border-radius: 10px;color: white;'>" +
                            "<p>1.企业版插件免费使用</p>" +
                            "<p>2.专业版插件免费使用</p>" +
                            "<p>3.技术指导(包含店铺功能的使用)</p>" +
                            "<p>4.远程协助</p>" +
                            "<p>5.店铺小功能修改</p>" +
                            "<p>6.支付插件免费对接制作</p>" +
                            "<p>7.7×12小时专属技术响应</p>" +
                            "<p>8.企业版专用售后QQ群</p>" +
                            "</div>" +
                            "<p style='margin-bottom: 15px;'><span class='badge badge-light-danger'>价格：" + purchasePrice.enterprise + "/永久</span><span style='text-decoration: line-through;'>(原价:898)</span> <span style='font-size: 12px;'>正式版恢复原价</span></p>" +
                            "<p><span class='badge badge-primary purchase-btn' data-type='2' data-pay='0'>支付宝</span> <span class='badge badge-success purchase-btn' data-type='2' data-pay='1'>微信支付</span></p>" +
                            "</div>"
                    });
                } else if (userLevel == 0) {
                    items.push({
                        title: '<b style="color: #0fb183;margin:5px;">企业版(推荐)</b>',
                        content: "<div style='padding: 20px;'><b style='color: #109b81;margin-bottom: 10px;display: block;'>说明：本程序基于MIT开源协议进行开源，项目开源地址：<a href='https://github.com/lizhipay/acg-faka' target='_blank'>https://github.com/lizhipay/acg-faka</a>，所以是完全免费的，这里的专业版或企业版仅仅是针对应用商店付费插件和技术服务而产生的。</b>" +
                            "<div style='margin-bottom: 10px;background: #19b387;padding: 10px;border-radius: 10px;color: white;'>" +
                            "<p>1.企业版插件免费使用</p>" +
                            "<p>2.专业版插件免费使用</p>" +
                            "<p>3.技术指导(包含店铺功能的使用)</p>" +
                            "<p>4.远程协助</p>" +
                            "<p>5.店铺小功能修改</p>" +
                            "<p>6.支付插件免费对接制作</p>" +
                            "<p>7.7×12小时专属技术响应</p>" +
                            "<p>8.企业版专用售后QQ群</p>" +
                            "</div>" +
                            "<p style='margin-bottom: 15px;'><span class='badge badge-light-danger'>价格：" + purchasePrice.enterprise + "/永久</span><span style='text-decoration: line-through;'>(原价:898)</span> <span style='font-size: 12px;'>正式版恢复原价</span></p>" +
                            "<p><span class='badge badge-primary purchase-btn' data-type='2' data-pay='0'>支付宝</span> <span class='badge badge-success purchase-btn' data-type='2' data-pay='1'>微信支付</span></p>" +
                            "</div>"
                    });
                }


                layer.tab({
                    area: "420px",
                    tab: items,
                    success: () => {
                        $('.purchase-btn').click(function () {
                            let layIndex = layer.load(1, {shade: [0.3, '#fff']});
                            let type = $(this).attr("data-type");
                            let pay = $(this).attr("data-pay");
                            let pluginId = $(this).attr("plugin-id");
                            pluginId = pluginId == undefined ? 0 : pluginId;
                            $.post("/admin/api/app/purchase", {
                                type: type,
                                plugin_id: pluginId,
                                payType: pay
                            }, res => {
                                layer.close(layIndex);
                                if (res.code == 200) {
                                    window.location.href = res.data.url;
                                }
                                layer.msg(res.msg);
                            })
                        });
                    }
                });
            }


            let init = true;
            //验证是否初始化
            $.ajaxSettings.async = false;
            $.post('/admin/api/app/init', res => {
                if (res.code != 200) {
                    tab();
                    init = false;
                }
            });
            $.ajaxSettings.async = true;

            let type = ["<span class='badge badge-light-primary'>通用扩展</span>", "<span class='badge badge-light-success'>支付扩展</span>", "<span class='badge badge-light-info'>网站模板</span>"];

            let queryParams = null;
            table.bootstrapTable({
                url: '/admin/api/app/plugins',//请求的url地址
                method: "post",//请求方式
                // striped:true,//是否显示行间隔色
                pageSize: 18,//每页显示的数量
                pageList: [18, 25, 50, 100],
                showRefresh: false,//是否显示刷新按钮
                cache: false,//是否使用缓存
                showToggle: false,//是否显示详细视图和列表视图的切换按钮
                cardView: false,
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
                    layer.close(pluginLoadIndex);
                    if (res.code != 200) {
                        if (init) {
                            tab();
                        }
                    } else if (res.code == 200) {
                        purchasePrice = res.purchase;
                        let level = "";
                        if (res.user.level) {
                            if (res.user.level.level == 0) {
                                level = '<span style="color: white;background: #0d8ddc; padding: 5px;border-radius: 5px;">专业版</span>';
                                $('.update-pro').html('<i class="fab fa-vuejs"></i>升级到企业版(推荐)');
                                $('.update-pro').show();
                            } else if (res.user.level.level == 1) {
                                level = '<span style="color: white;background: #19ad2b; padding: 5px;border-radius: 5px;">企业版</span>';
                            }
                            userLevel = res.user.level.level;
                        } else {
                            $('.update-pro').show();
                        }
                        $('.store-text').html(' <b class="badge badge-light">' + res.user.username + '</b> ' + level);
                    }
                    return {
                        "total": res.count,
                        "rows": res.data
                    }
                },
                columns: [

                    {
                        field: 'plugin_name', title: '软件名称', formatter: function (val, item) {
                            return '<span class="badge badge-light-dark"><img src="<?php echo App\Service\App::APP_URL;?>
' + item.icon + '"  style="width: 18px;border-radius: 5px;margin-top: -2px"/> ' + item.plugin_name + '</span> '
                        }
                    }
                    ,
                    {
                        field: 'user', title: '开发商', formatter: function (val, item) {
                            if (item.user.official == 1) {
                                return '<span class="badge badge-light-success">官方</span>';
                            }
                            return '<span class="badge badge-light">' + item.user.username + '</span>';
                        }
                    }
                    ,
                    {
                        field: 'type', title: '类型', formatter: function (val, item) {
                            return type[item.type];
                        }
                    }
                    ,
                    {
                        field: 'description', title: '说明', formatter: function (val, item) {
                            return '<span class="description">' + item.description + '</span>';
                        },
                    },
                    {
                        field: 'description', title: '官网', formatter: function (val, item) {
                            return '<a href="' + item.web_site + '" target="_blank"><span class="badge badge-light-primary">' + item.web_site + '</span></a>';
                        }
                    },
                    {
                        field: 'version', title: '版本', formatter: function (val, item) {
                            return '<span class="badge badge-light">' + item.version + '</span>';
                        }
                    },
                    {
                        field: 'price', title: '价格', formatter: function (val, item) {
                            if (item.price == 0) {

                                return "<span class='badge badge-light-success'>免费</span>";
                            }

                            let html = " <span class='badge badge-light-danger'>" + item.price + "</span> ";
                            if (item.group == 1) {
                                html += " <span class='badge badge-light-primary'>专业版免费</span> <span class='badge badge-light-success'>企业版免费</span> ";
                            }

                            if (item.group == 2) {
                                html += "  <span class='badge badge-light-success'>企业版免费</span> ";
                            }
                            return html;
                        }
                    },
                    {
                        field: 'price', title: '到期时间', formatter: function (val, item) {
                            if (item.price == 0) {
                                return "-";
                            }
                            if (item.has.has == true) {
                                return "<span class='badge badge-light-success'>" + item.has.expire + "</span>";
                            }
                            return "<span class='badge badge-light'>未开通</span>";
                        }
                    },
                    {
                        field: 'operate',
                        title: '',
                        formatter: function (val, item) {
                            let html = "";
                            if ((item.has.has == true && item.install == 0) || (item.price == 0 && item.install == 0)) {
                                html += " <span class='badge badge-light-primary install' style='cursor: pointer;'>安装</span> ";
                            }
                            if (item.has.has == true && item.install == 1 || (item.price == 0 && item.install == 1)) {

                                if (item.version != item.local_version) {
                                    html += " <span class='badge badge-light-primary upgrade' style='cursor: pointer;'>更新 ( <span style='color: red;'>" + item.local_version + "</span> ➩ <b style='color: #28b728;'>" + item.version + "</b>)</span> ";
                                }

                                html += " <span class='badge badge-light-danger uninstall' style='cursor: pointer;'>卸载</span> ";
                            }
                            if (item.price > 0 && item.has.has == false) {
                                if (item.owned == true) {
                                    html += " <span class='badge badge-light-primary unbind' style='cursor: pointer;'>解绑</span> <span class='badge badge-light-success purchase' style='cursor: pointer;'>重新购买</span>";
                                } else {
                                    html += " <span class='badge badge-light-success purchase' style='cursor: pointer;'>立即购买</span> ";
                                }
                            }
                            return html;
                        },
                        events: {
                            'click .unbind': function (event, value, row, index) {
                                layer.open({
                                    type: 1,
                                    shade: false,
                                    title: false,
                                    area: cao.isPc() ? "712px" : ["100%", "100%"],
                                    content: '<div style="padding: 30px;"><table id="purchaseRecords"></table></div>',
                                    success: function () {
                                        $("#purchaseRecords").bootstrapTable({
                                            url: '/admin/api/app/purchaseRecords?plugin_id=' + row.id,//请求的url地址
                                            method: "post",//请求方式
                                            // striped:true,//是否显示行间隔色
                                            showRefresh: false,//是否显示刷新按钮
                                            cache: false,//是否使用缓存
                                            showToggle: false,//是否显示详细视图和列表视图的切换按钮
                                            cardView: false,
                                            singleSelect: true,//复选框只能选择一条记录
                                            contentType: "application/x-www-form-urlencoded",//使用post请求时必须加上
                                            dataType: "json",//接收的数据类型
                                            clickToSelect: true,
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
                                                return {
                                                    "total": res.count,
                                                    "rows": res.data
                                                }
                                            },
                                            columns: [
                                                {checkbox: true}
                                                ,
                                                {
                                                    field: 'server_ip',
                                                    title: '服务器IP'
                                                },
                                                {
                                                    field: 'app_key', title: '授权指纹',
                                                    formatter: function (val, item) {
                                                        return '<span class="badge badge-light-primary">' + item.app_key + '</span>';
                                                    }
                                                },
                                                {
                                                    field: 'expire_date', title: '到期时间',
                                                    formatter: function (val, item) {
                                                        return '<span class="badge badge-light-success">' + item.expire_date + '</span>';
                                                    }
                                                }
                                            ]
                                        });
                                    },
                                    btn: ["解绑授权至本机器"],
                                    yes: () => {
                                        let data = cao.listObjectToArray($("#purchaseRecords").bootstrapTable('getSelections'));
                                        let authId = data[0];
                                        if (authId > 0) {
                                            layer.confirm('您正在进行指纹授权解绑操作，解绑后，该插件将在原站点授权失效，是否继续？', {
                                                btn: ['立即解绑', '取消'],
                                                title: "解绑提示"
                                            }, function () {
                                                let layIndex = layer.load(1, {shade: [0.3, '#fff']});
                                                $.post('/admin/api/app/unbind', {
                                                    auth_id: authId
                                                }, res => {
                                                    layer.close(layIndex);
                                                    if (res.code == 200) {
                                                        table.bootstrapTable('refresh', {silent: true});
                                                        layer.closeAll();
                                                    }
                                                    layer.msg(res.msg);
                                                });
                                            });
                                        } else {
                                            layer.msg("请选择要解绑的授权");
                                        }
                                    }
                                });
                            },
                            'click .purchase': function (event, value, row, index) {
                                purchase(row);
                            },
                            'click .install': function (event, value, row, index) {
                                layer.confirm('您正在安装插件 <span style="color: red;"> ' + row.plugin_name + " </span>，是否继续？", {
                                    btn: ['安装', '取消'],
                                    title: "安装插件"
                                }, function () {
                                    let layIndex = layer.load(1, {shade: [0.3, '#fff']});
                                    $.post('/admin/api/app/install', {
                                        plugin_key: row.plugin_key,
                                        type: row.type,
                                        plugin_id: row.id
                                    }, res => {

                                        layer.close(layIndex);
                                        layer.msg(res.msg);
                                        let url = "/admin/plugin/index";
                                        if (row.type == 1) {
                                            url = "/admin/pay/plugin";
                                        } else if (row.type == 2) {
                                            url = "/admin/config/index";
                                        }
                                        if (res.code == 200) {
                                         /*   $.get("/admin/api/app/delUpdates", res => {
                                            });*/
                                            window.location.href = url;
                                        }
                                    });
                                });
                            },
                            'click .uninstall': function (event, value, row, index) {
                                layer.confirm('你想要卸载 <span style="color: red;"> ' + row.plugin_name + " </span>吗，这将清空该插件的所有数据，并且无法恢复？", {
                                    btn: ['卸载', '取消'],
                                    title: "卸载插件"
                                }, function () {
                                    let layIndex = layer.load(1, {shade: [0.3, '#fff']});
                                    $.post('/admin/api/app/uninstall', {
                                        plugin_key: row.plugin_key,
                                        type: row.type
                                    }, res => {
                                        layer.close(layIndex);
                                        layer.msg(res.msg);
                                        if (res.code == 200) {
                                            table.bootstrapTable('refresh', {silent: true});
                                        }
                                    });
                                });
                            },
                            'click .upgrade': function (event, value, row, index) {
                                layer.confirm(row.update_content.replace(/\n/, "<br>"), {
                                    btn: ['立即更新', '取消'],
                                    title: "更新插件 -> " + '<span style="color: red;">' + row.plugin_name + '</span>'
                                }, function () {
                                    let layIndex = layer.load(1, {shade: [0.3, '#fff']});
                                    $.post('/admin/api/app/upgrade', {
                                        plugin_key: row.plugin_key,
                                        type: row.type,
                                        plugin_id: row.id
                                    }, res => {
                                        layer.close(layIndex);
                                        layer.msg(res.msg);
                                        if (res.code == 200) {
                                            table.bootstrapTable('refresh', {silent: true});
                                        }
                                    });
                                });
                            }
                        }
                    }
                ]
            });


            $('.plugin-btn').click(function () {
                pluginLoadIndex = layer.load(1, {
                    shade: [0.3, '#fff']
                });

                $('.plugin-btn').removeClass("btn-light-primary").addClass("btn-light-dark");
                $(this).addClass("btn-light-primary").removeClass("btn-light-dark");
                let query = {};
                let type = parseInt($(this).attr("data-type"));


                switch (type) {
                    case -1:
                        query.type = -1;
                        query.group = 0;
                        break;
                    case 0:
                        query.type = 0;
                        query.group = 0;
                        break;
                    case 1:
                        query.type = 1;
                        query.group = 0;
                        break;
                    case 2:
                        query.type = 2;
                        query.group = 0;
                        break;
                    case 3:
                        query.type = 0;
                        query.group = 1;
                        break;
                    case 4:
                        query.type = 0;
                        query.group = 2;
                        break;
                }

                table.bootstrapTable('refresh', {
                    silent: true,
                    pageNumber: 1,
                    query: query
                });
            });

            $('.update-pro').click(function () {
                purchase();
            });

            cao.query('.search-query', table, [
                {title: "搜索应用..", name: "keywords", type: "input"},
            ], true, false);


            $('.search-query').submit(function () {
                $('.queryBtn').click();
                return false;
            });

        });
    });
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:../Footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
