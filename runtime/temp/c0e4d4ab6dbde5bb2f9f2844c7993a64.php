<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:59:"/home/wwwroot/mj2019.qmdmob.com/app/admin/view/ad/type.html";i:1554520762;s:63:"/home/wwwroot/mj2019.qmdmob.com/app/admin/view/common/head.html";i:1554520763;s:63:"/home/wwwroot/mj2019.qmdmob.com/app/admin/view/common/foot.html";i:1554520763;}*/ ?>
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
        <legend><?php echo lang('ad'); ?>位管理</legend>
    </fieldset>
    <div class="demoTable">
        <div class="layui-inline">
            <input class="layui-input" name="key" id="key" placeholder="<?php echo lang('pleaseEnter'); ?>关键字">
        </div>
        <button class="layui-btn" id="search" data-type="reload"><?php echo lang('search'); ?></button>
        <a href="<?php echo url('type'); ?>" class="layui-btn">显示全部</a>
        <a href="<?php echo url('addType'); ?>" class="layui-btn" style="float:right;"><i class="fa fa-plus" aria-hidden="true"></i><?php echo lang('add'); ?><?php echo lang('ad'); ?>位</a>
        <div style="clear: both;"></div>
    </div>
    <table class="layui-table" id="list" lay-filter="list"></table>
</div>
<script type="text/javascript" src="__STATIC__/plugins/layui/layui.js"></script>


<script type="text/html" id="order">
    <input name="{{d.type_id}}" data-id="{{d.type_id}}" class="list_order layui-input" value=" {{d.sort}}" size="10"/>
</script>
<script type="text/html" id="action">
    <a href="<?php echo url('editType'); ?>?type_id={{d.type_id}}" class="layui-btn layui-btn-xs">编辑</a>
    <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>
</script>
<script>
    layui.use('table', function() {
        var table = layui.table, $ = layui.jquery;
        var tableIn = table.render({
            id: 'type',
            elem: '#list',
            url: '<?php echo url("type"); ?>',
            method: 'post',
            cols: [[
                {field: 'type_id', title: '<?php echo lang("id"); ?>', width: 80, fixed: true, sort: true},
                {field: 'name', title: '广告位名称', width: 400, templet: '#name'},
                {field: 'sort', align: 'center', title: '<?php echo lang("order"); ?>', width: 120, templet: '#order', sort: true},
                {width: 160, align: 'center', toolbar: '#action'}
            ]]
        });
        //搜索
        $('#search').on('click', function () {
            var key = $('#key').val();
            if ($.trim(key) === '') {
                layer.msg('<?php echo lang("pleaseEnter"); ?>关键字！', {icon: 0});
                return;
            }
            tableIn.reload({
                where: {key: key}
            });
        });
        //排序
        $('body').on('blur','.list_order',function() {
            var type_id = $(this).attr('data-id');
            var sort = $(this).val();
            var loading = layer.load(1, {shade: [0.1, '#fff']});
            $.post('<?php echo url("typeOrder"); ?>',{type_id:type_id,sort:sort},function(res){
                layer.close(loading);
                if(res.code === 1){
                    layer.msg(res.msg, {time: 1000, icon: 1});
                    tableIn.reload();
                }else{
                    layer.msg(res.msg,{time:1000,icon:2});
                }
            })
        });
        table.on('tool(list)', function(obj) {
            var data = obj.data;
            if(obj.event === 'del'){
                layer.confirm('您确定要删除该广告分类吗？', function(index){
                    var loading = layer.load(1, {shade: [0.1, '#fff']});
                    $.post("<?php echo url('delType'); ?>",{type_id:data.type_id},function(res){
                        layer.close(loading);
                        if(res.code===1){
                            layer.msg(res.msg,{time:1000,icon:1});
                            tableIn.reload();
                        }else{
                            layer.msg('操作失败！',{time:1000,icon:2});
                        }
                    });
                    layer.close(index);
                });
            }
        });
    });
</script>