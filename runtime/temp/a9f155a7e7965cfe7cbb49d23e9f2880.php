<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"/home/wwwroot/mj2019.qmdmob.com/app/admin/view/database/restore.html";i:1554520763;s:63:"/home/wwwroot/mj2019.qmdmob.com/app/admin/view/common/head.html";i:1554520763;s:63:"/home/wwwroot/mj2019.qmdmob.com/app/admin/view/common/foot.html";i:1554520763;}*/ ?>
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
        <legend>备份文件列表</legend>
    </fieldset>
    <table class="layui-table" id="list" lay-filter="list"></table>
</div>
<script type="text/javascript" src="__STATIC__/plugins/layui/layui.js"></script>


<script type="text/html" id="size">
    {{d.sortSize}}
</script>
<script type="text/html" id="action">
    <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="recover">恢复</a>
    <a href="<?php echo url('downFile'); ?>?type=sql&file={{d.name}}" class="layui-btn layui-btn-xs">下载</a>
    <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><?php echo lang('del'); ?></a>
</script>
<script>
    layui.use('table', function() {
        var table = layui.table, $ = layui.jquery;
        table.render({
            elem: '#list'
            ,url: '<?php echo url("restore"); ?>',
            method:'post'
            ,cols: [[
                {field:'name', title: '文件名称', width:250}
                ,{field:'size', title: '文件大小', width:200,sort:true,templet:'#size'}
                ,{field:'time', title: '备份时间', width:200,sort:true}
                ,{field:'number', title: '卷号', width:150}
                ,{width:160, align:'center', toolbar: '#action'}
            ]]
        });
        table.on('tool(list)', function(obj) {
            var data = obj.data;
            if (obj.event === 'recover') {
                loading = layer.load(1, {shade: [0.1, '#fff']});
                layer.confirm('确认要导入数据吗？',{icon: 0}, function (index) {
                    $.post("<?php echo url('restoreData'); ?>",{sqlfilepre:data.name},function(res){
                        layer.close(loading);
                        if(res.code==1){
                            layer.msg(res.msg, {time: 1000,icon:1});
                        }else{
                            layer.msg(res.msg, {time: 1000,icon:2});
                        }
                    });
                    layer.close(index);
                });
            }else if(obj.event === 'del'){
                layer.confirm('确认要删除该备份文件吗？', {icon: 3}, function (index) {
                    loading = layer.load(1, {shade: [0.1, '#fff']});
                    $.post('<?php echo url("delSqlFiles"); ?>',{sqlfilename: data.name}, function (res) {
                        layer.close(loading);
                        if (res.code == 1) {
                            layer.msg(res.msg, {time: 1000,icon:1});
                            obj.del();
                        }else{
                            layer.msg(res.info,{time: 1000,icon:2});
                        }
                    });
                    layer.close(index);
                });
            }
        });
    });
</script>