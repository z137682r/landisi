<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"F:\phpStudy\PHPTutorial\WWW\landisi/app/admin\view\navigation\form.html";i:1556084969;s:67:"F:\phpStudy\PHPTutorial\WWW\landisi/app/admin\view\common\head.html";i:1554520763;s:67:"F:\phpStudy\PHPTutorial\WWW\landisi/app/admin\view\common\foot.html";i:1554520763;}*/ ?>
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
<div class="admin-main layui-anim layui-anim-upbit" ng-app="hd" ng-controller="ctrl">
    <fieldset class="layui-elem-field layui-field-title">
        <legend><?php echo $title; ?></legend>
    </fieldset>
    <form action="" method="post" class="layui-form layui-form-pane">
        <div class="layui-form-item">
            <label class="layui-form-label">上级目录</label>
            <div class="layui-input-inline">
                <select name="pid" lay-filter="aihao">
                    <option value="0">顶级</option>
                    <?php if(is_array($navigationList) || $navigationList instanceof \think\Collection || $navigationList instanceof \think\Paginator): $i = 0; $__LIST__ = $navigationList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo $vo['id']; ?>"<?php echo isset($info['pid']) && $info['pid'] == $vo['id']?'selected':''; ?>><?php echo $vo['name']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">网页名称</label>
            <div class="layui-input-inline">
                <input type="text" name="name" ng-model="field.name" value="<?php echo isset($info['name'])?$info['name']:''; ?>" lay-verify="required" placeholder="<?php echo lang('pleaseEnter'); ?>网页名称" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">网页链接</label>
            <div class="layui-input-4">
                <input type="text" name="url" ng-model="field.url" value="<?php echo isset($info['url'])?$info['url']:''; ?>" lay-verify="required" placeholder="<?php echo lang('pleaseEnter'); ?>网页链接" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">是否显示</label>
            <div class="layui-input-block">
                <input type="radio" name="status" value="1" title="是"<?php echo isset($info['status']) && $info['status'] == 1?'checked':''; ?> >
                <input type="radio" name="status" value="0" title="否"<?php echo isset($info['status']) && $info['status'] == 0?'checked':''; ?>>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('order'); ?></label>
            <div class="layui-input-4">
                <input type="text" name="sort" ng-model="field.sort"  value="<?php echo isset($info['sort'])?$info['sort']:''; ?>" placeholder="从小到大排序" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button type="submit" class="layui-btn" lay-submit="" lay-filter="submit"><?php echo lang('submit'); ?></button>
                <a href="<?php echo url('index'); ?>" class="layui-btn layui-btn-primary"><?php echo lang('back'); ?></a>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript" src="__STATIC__/plugins/layui/layui.js"></script>


<script>
    layui.use('form',function(){})
</script>