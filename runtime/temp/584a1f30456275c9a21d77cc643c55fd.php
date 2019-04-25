<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:64:"/home/wwwroot/mj2019.qmdmob.com/app/admin/view/system/email.html";i:1554520765;s:63:"/home/wwwroot/mj2019.qmdmob.com/app/admin/view/common/head.html";i:1554520763;s:63:"/home/wwwroot/mj2019.qmdmob.com/app/admin/view/common/foot.html";i:1554520763;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo config('sys_name'); ?>后台管理</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="__STATIC__/plugins/layui/css/layui.css" media="all" />
    <link rel="stylesheet" href="__ADMIN__/css/global.css" media="all">
    <link rel="stylesheet" href="__STATIC__/common/css/font.css" media="all">
</head>
<body class="skin-<?php if(!empty($_COOKIE['skin'])){echo $_COOKIE['skin'];}else{echo '0';setcookie('skin','0');}?>">
<div class="admin-main layui-anim layui-anim-upbit">
    <fieldset class="layui-elem-field layui-field-title">
        <legend>邮箱配置</legend>
    </fieldset>
    <form class="layui-form layui-form-pane">
        <div class="layui-form-item">
            <label class="layui-form-label">服务器</label>
            <div class="layui-input-4">
                <input type="text" lay-verify="required" name="smtp_server" placeholder="SMTP服务器" value="<?php echo $info['smtp_server']; ?>" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">SMTP端口</label>
            <div class="layui-input-4">
                <input type="text" lay-verify="required" name="smtp_port" placeholder="SMTP端口" value="<?php echo $info['smtp_port']; ?>" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">发信人</label>
            <div class="layui-input-4">
                <input type="text" name="smtp_user" lay-verify="required" placeholder="发信人邮件地址" value="<?php echo $info['smtp_user']; ?>" class="layui-input">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">身份验证码</label>
            <div class="layui-input-3">
                <input type="text" name="smtp_pwd" lay-verify="required" placeholder="SMTP身份验证码" value="<?php echo $info['smtp_pwd']; ?>" class="layui-input">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">测试邮箱</label>
            <div class="layui-input-3">
                <input type="text" name="test_eamil" id="test_eamil" placeholder="测试接收邮件地址" value="<?php echo $info['test_eamil']; ?>" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button type="button" class="layui-btn" lay-submit="" lay-filter="submit"><?php echo lang('submit'); ?></button>
                <button type="reset" class="layui-btn layui-btn-primary"><?php echo lang('reset'); ?></button>
                <button type="button" class="layui-btn layui-btn-normal" id="trySend">测试发送</button>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript" src="__STATIC__/plugins/layui/layui.js"></script>


<script>
    layui.use(['form', 'layer'], function () {
        var form = layui.form,layer = layui.layer,$= layui.jquery;
        //发送测试邮件
        $('#trySend').click(function(){
            loading =layer.load(1, {shade: [0.1,'#fff']});
            var email = $('#test_eamil').val();
            $.post("<?php echo url('trySend'); ?>",{email:email},function(res){
                layer.close(loading);
                if(res.code > 0){
                    layer.msg(res.msg,{time:1800});
                }else{
                    layer.msg(res.msg,{time:1800});
                }
            });
        });
        //提交监听
        form.on('submit(submit)', function (data) {
            loading =layer.load(1, {shade: [0.1,'#fff']});
            $.post("<?php echo url('system/email'); ?>",data.field,function(res){
                layer.close(loading);
                if(res.code > 0){
                    layer.msg(res.msg,{icon: 1, time: 1000},function(){
                        location.href = res.url;
                    });
                }else{
                    layer.msg(res.msg,{icon: 2, time: 1000});
                }
            });
        })
    })
</script>
</body>
</html>