<?php
/* Smarty version 3.1.46, created on 2024-05-31 09:15:57
  from '/var/www/html/app/Pay/Alipay/View/1.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_6659954db92a50_25307277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f694c1f68444c534d5672c9056d14e4142ff47a8' => 
    array (
      0 => '/var/www/html/app/Pay/Alipay/View/1.html',
      1 => 1643212640,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6659954db92a50_25307277 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>欢迎使用支付宝付款！</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo '<script'; ?>
 src="/assets/static/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/assets/static/layer/layer.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/assets/static/jquery.qrcode.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/app/Pay/Alipay/Assets/pay.js"><?php echo '</script'; ?>
>
    <style type="text/css">
        .hr-top {
            margin-top: 20px;
            border-top: 1px dashed #e5e5e5;
            padding: 10px 0;
            position: relative;
        }

        .mobile {
            display: none;
        }

        .openAlipay {
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
            color: #fff;
            background-color: #2e6da4;
            border-color: #2e6da4;
        }

    </style>
    <link href="/app/Pay/Alipay/Assets/css/pay.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class=" body">
    <h1 class="mod-title">
        <span class="ico_log ico-zfbsm" style="margin-left: 50px;"></span>
    </h1>


    <div class="mod-ct" style="margin-top: 2px;">

        <div class="pc">
            <div style="font-size: 32px;padding-top: 20px;">请支付 <b style="color: red;">¥
                <?php echo $_smarty_tpl->tpl_vars['order']->value['amount'];?>
</b> 元
            </div>
            <div class="hr-top"></div>

            <div class="qrcode-img-wrapper" data-role="qrPayImgWrapper">
                <div data-role="qrPayImg" class="qrcode-img-area">
                    <div class="ui-loading qrcode-loading" data-role="qrPayImgLoading" style="display: none;">加载中</div>
                    <div style="position: relative;display: inline-block;">
                        <div style="margin: 5px;display: block;" id="qrcode"></div>
                    </div>
                </div>
            </div>

            <!--<div><span style="background: yellow;color: red;font-size: 16px;">支付时请填写金额 <b
                    style="color: red;font-size: 24px;"><?php echo $_smarty_tpl->tpl_vars['order']->value['poll_amount'];?>
</b> 元，否则不到账！</span></div>-->
        </div>

        <div class="mobile hr-top">
            <button type="button" class="openAlipay" onclick="goAlipay();">👉点击我呼起支付宝进行支付👈</button>
        </div>

        <div class="footer">
            <div>
                <div class="tip ">


                    <div class="ico-scan"></div>
                    <div class="tip-text">
                        <p>打开支付宝扫一扫</p>
                        <p>手机使用相册扫</p>
                    </div>
                </div>
            </div>
            <div class="detail" id="orderDetail">
                <dl class="detail-ct" id="desc" style="display: none;">
                    <dt>金额</dt>
                    <dd><?php echo $_smarty_tpl->tpl_vars['order']->value['amount'];?>
</dd>
                    <dt>商户订单：</dt>
                    <dd id="ordernum"><?php echo $_smarty_tpl->tpl_vars['order']->value['trade_no'];?>
</dd>
                    <dt>创建时间：</dt>
                    <dd><?php echo $_smarty_tpl->tpl_vars['order']->value['create_date'];?>
</dd>
                    <dt>状态</dt>
                    <dd>等待支付</dd>
                </dl>
                <a href="javascript:void(0)" class="arrow" style="z-index: 999999"><i class="ico-arrow"></i></a>
            </div>
        </div>
    </div>

    <?php echo '<script'; ?>
 type="text/javascript">
        let tradeNo = '<?php echo $_smarty_tpl->tpl_vars['order']->value['trade_no'];?>
';
        let qrcode = "<?php echo $_smarty_tpl->tpl_vars['order']->value['pay_url'];?>
";

        $('#qrcode').qrcode({
            render: "canvas",
            width: 200,
            height: 200,
            text: qrcode
        });

        let goAlipay = () => {
            window.open(qrcode);
        }

        if (pay.isMobile()) {
            window.open(qrcode);
            $('.mobile').show();
        }

        //查询订单
        pay.queryTimer(tradeNo, null, res => {
            layer.msg('支付成功');
            setTimeout(() => {
                window.location.href = "<?php echo $_smarty_tpl->tpl_vars['option']->value['returnUrl'];?>
";
            }, 1000);
        }, res => {
            layer.msg('订单已被关闭');
            setTimeout(() => {
                window.location.href = "<?php echo $_smarty_tpl->tpl_vars['option']->value['returnUrl'];?>
";
            }, 1000);
        });

        //点击小箭头事件
        $('#orderDetail a').click(function () {
            if ($('#orderDetail').hasClass('detail-open')) {
                $('#orderDetail .detail-ct').slideUp(500, function () {
                    $('#orderDetail').removeClass('detail-open');
                });
            } else {
                $('#orderDetail .detail-ct').slideDown(500, function () {
                    $('#orderDetail').addClass('detail-open');
                });
            }
        });
    <?php echo '</script'; ?>
>
</div>
</body>
</html><?php }
}
