<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:62:"/home/wwwroot/mj2019.qmdmob.com/app/home/view/index_index.html";i:1555671885;s:62:"/home/wwwroot/mj2019.qmdmob.com/app/home/view/common_head.html";i:1555637574;s:62:"/home/wwwroot/mj2019.qmdmob.com/app/home/view/common_left.html";i:1555385429;s:65:"/home/wwwroot/mj2019.qmdmob.com/app/home/view/common_footer1.html";i:1555671282;s:63:"/home/wwwroot/mj2019.qmdmob.com/app/home/view/common_head1.html";i:1555637572;s:64:"/home/wwwroot/mj2019.qmdmob.com/app/home/view/common_footer.html";i:1555671147;}*/ ?>
<!DOCTYPE html>
<html mip lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width,minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" />
    <title><?php if($info['title']): ?><?php echo $info['title']; elseif($title): ?><?php echo $title; else: ?><?php echo $sys['title']; endif; ?></title>
    <link rel="stylesheet" type="text/css" href="https://c.mipcdn.com/static/v2/mip.css">
    <link rel="canonical" href="http(s)://example.com">
    <link rel="stylesheet" href="__HOME__/css/swiper.min.css">
    <link rel="stylesheet" href="__HOME__/css/landisi.css">
    <link rel="stylesheet" href="__HOME__/css/plandisi.css">
    <script src="__HOME__/js/jq.js"></script>
    <script src="__HOME__/js/swiper.min.js"></script>
</head>
<body>
    <div class="lds-pc-box">
        <header>
            <div class="head-box content-box">
                <ul>
                    <a href="/home-index-news_list.html">
                        <li>新闻中心</li>
                    </a>
                    <a href="/about-31.html">
                        <li>常见问题</li>
                    </a>
                    <a href="/about-30.html">
                        <li>关于我们</li>
                    </a>
                    <a href="home/index/wzdt">
                        <li>网站地图</li>
                    </a>
                </ul>
            </div>

            <div class="logo-box content-box">
                <a href=""><img src="__HOME__/images/shouye_03.png" width="340px" height="60px"></a>
                <div>
                    <p>国内加盟热线：<span>028-83944948</span></p>
                    <span>173-18641860</span>
                </div>
            </div>

            <!-- 导航条 -->
            <div class="nav-box">
                <ul class="nav content-box">
                	
                    <a href="/">              <?php if($catId == ''): ?>                        <li class="selected">                        	<?php else: ?>                        	<li>                        	<?php endif; ?>
                                          	                        	首页</li>
                    </a>
                   <?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['child'] == 1): ?>
                    <a href="<?php echo url('home/'.$vo['catdir'].'/index',['catId'=>$v['id']] ); ?>">                      <?php if($vo['id'] == $catId): ?>
                        <li class="selected">                        	<?php else: ?>                        	<li>                        	<?php endif; ?>                        	                        	<?php echo $vo['catname']; ?></li>
                    </a>  
                            <?php else: ?>
                                  <a href="<?php echo url('home/'.$vo['catdir'].'/index',['catId'=>$vo['id']] ); ?>">
                                <?php if($vo['id'] == $catId): ?>                        <li class="selected">                        	<?php else: ?>                        	<li>                        	<?php endif; ?>                        	                        	<?php echo $vo['catname']; ?></li>
                    </a> 
             
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    <!--<a href="">
                        <li>专业定制</li>
                    </a>
                    <a href="">
                        <li>招商加盟</li>
                    </a>
                    <a href="">
                        <li>安装教程</li>
                    </a>
                    <a href="">
                        <li>价格咨询</li>
                    </a>-->
                </ul>
            </div>

            <!-- banner -->
            <div class="swiper-container home-banner">
                <div class="swiper-wrapper">
                    <div class="swiper-slide pos-txt">
                        <img src="__HOME__/images/banner1_07.png">

                        <div class="txt-box">
                            <h1 class="content-box">西南木饰面厂家</h1>
                            <div class="content-box">
                                <h2>真材实料</h2>
                                <h2>出众品质</h2>
                            </div>
                            <p class="content-box">REALMATERIALOUTSTANDINGQUALITY</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="__HOME__/images/banner1_07.png">
                    </div>
                    <div class="swiper-slide">
                        <img src="__HOME__/images/banner1_07.png">
                    </div>
                </div>
                <!-- 如果需要分页器 -->
                <div class="swiper-pagination"></div>

                <!-- 如果需要导航按钮 -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>

            <script>
                var mySwiper = new Swiper('.home-banner', {
                    direction: 'horizontal', // 垂直切换选项
                    loop: true, // 循环模式选项
                    speed: 2000,
                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: false,
                        clickable: true,
                    },
                    // 如果需要分页器
                    pagination: {
                        el: '.swiper-pagination',
                    },
                    // 如果需要前进后退按钮
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    }
                })        
            </script>
        </header>








        <!-- 中间内容 -->



        <div class="centre-box content-box">



            <!-- 客服 -->



            <div class="kefu-box">



                <img src="__HOME__/images/shouye_24.png">



            </div>



                        <div class="left-box">


                <div class="search-box">


                    <input type="text" value="柚木">


                    <button><img src="__HOME__/images/search.png" /></button>


                </div>





                <div class="title-lds-box">


                    蓝帝思产品中心


                </div>





                <div class="classify-box">


                    <p>材质分类<img src="__HOME__/images/right-jt1.png" /></p>


                    <ul>


                        <li><img src="__HOME__/images/right-jt2.png" /><a href="<?php echo url('home/index/product',['cz'=>1]); ?>">柚木饰面板</a></li>


                        <li><img src="__HOME__/images/right-jt2.png" /><a href="<?php echo url('home/index/product',['cz'=>2]); ?>">胡桃木饰面板</a></li>


                        <li><img src="__HOME__/images/right-jt2.png" /><a href="<?php echo url('home/index/product',['cz'=>3]); ?>">枫木饰面板</a></li>


                        <li><img src="__HOME__/images/right-jt2.png" /><a href="<?php echo url('home/index/product',['cz'=>4]); ?>">水曲柳饰面板</a></li>


                        <li><img src="__HOME__/images/right-jt2.png" /><a href="<?php echo url('home/index/product',['cz'=>5]); ?>">橡木饰面板</a></li>


                    </ul>


                </div>


                <div class="classify-box">


                    <p>花纹分类<img src="__HOME__/images/right-jt1.png" /></p>


                    <ul>


                        <li><img src="__HOME__/images/right-jt2.png" /><a href="<?php echo url('home/index/product',['hw'=>1]); ?>">秋香饰面板</a></li>


                        <li><img src="__HOME__/images/right-jt2.png" /><a href="<?php echo url('home/index/product',['hw'=>2]); ?>">铁刀木饰面板</a></li>


                        <li><img src="__HOME__/images/right-jt2.png" /><a href="<?php echo url('home/index/product',['hw'=>3]); ?>">斑马饰面板</a></li>


                        <li><img src="__HOME__/images/right-jt2.png" /><a href="<?php echo url('home/index/product',['hw'=>4]); ?>">青藤柳饰面板</a></li>


                    </ul>


                </div>


                <div class="classify-box">


                    <p>工艺分类<img src="__HOME__/images/right-jt1.png" /></p>


                    <ul>


                        <li><img src="__HOME__/images/right-jt2.png" /><a href="<?php echo url('home/index/product',['gy'=>1]); ?>">单面饰面板</a></li>


                        <li><img src="__HOME__/images/right-jt2.png" /><a href="<?php echo url('home/index/product',['gy'=>2]); ?>">双面木饰面板</a></li>


                        <li><img src="__HOME__/images/right-jt2.png" /><a href="<?php echo url('home/index/product',['gy'=>3]); ?>">高光饰面板</a></li>


                        <li><img src="__HOME__/images/right-jt2.png" /><a href="<?php echo url('home/index/product',['gy'=>4]); ?>">浮雕柳饰面板</a></li>


                        <li><img src="__HOME__/images/right-jt2.png" /><a href="<?php echo url('home/index/product',['gy'=>5]); ?>">锯齿饰面板</a></li>


                        <li><img src="__HOME__/images/right-jt2.png" /><a href="<?php echo url('home/index/product',['gy'=>6]); ?>">加长饰面板</a></li>


                        <li><img src="__HOME__/images/right-jt2.png" /><a href="<?php echo url('home/index/product',['gy'=>7]); ?>">加宽饰面板</a></li>


                    </ul>


                </div>


                <div class="classify-box">


                    <p>色调分类<img src="__HOME__/images/right-jt1.png" /></p>


                    <ul>


                        <li><img src="__HOME__/images/right-jt2.png" /><a href="<?php echo url('home/index/product',['sd'=>1] ); ?>">暖色饰面板</a></li>


                        <li><img src="__HOME__/images/right-jt2.png" /><a href="<?php echo url('home/index/product',['sd'=>2] ); ?>">冷色木饰面板</a></li>


                    </ul>


                </div>


            </div>






            <div class="right-box">



                <h3 class="title-link"><a href="/">首页</a>><a href="/services-3.html">产品中心</a>></h3>







                <div class="display-box">



                    <h4>结构展示<span>/</span><span>STRUCTURE DISPLAY</span></h4>







                    <div class="img-txt-box">



                        <img class="mbjg-img" src="__HOME__/images/mbjg1_03.png" width="406px" height="242px" />







                        <div>



                            <h5>免漆木饰面产品剖析</h5>







                            <span>贴面板是用径向刨切工艺制成人工薄皮，经过多道工艺贴合而成的装饰面板。</span>



                            <p>性能特点：</p>



                            <p>1.健康环保（免漆板材，无甲醛释放）</p>



                            <p>2.抗菌耐磨（封闭涂层，有效绝缘，硬度高）</p>



                            <p>3.耐候性强（优质漆面，不易褪色）</p>



                            <p>4.不易焰灼（阻焰饰面，有效防焰）</p>



                        </div>



                    </div>



                </div>







                <div class="display-box">



                    <h4>新品展示<span>/</span><span>NEWS</span>



                        <p><a href="">更多》</a></p>



                    </h4>

                    <ul class="xpzs">

                       <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>

                        <li>
                          <a href="<?php echo url('home/index/productinfo',array('id'=>$v['id'],'catId'=>$v['catid'])); ?>">
           <img src="__PUBLIC__<?php echo $v['thumb']; ?>"> </a>
                        <a href="<?php echo url('home/index/productinfo',array('id'=>$v['id'],'catId'=>$v['catid'])); ?>">
       
                            <?php echo $v['title']; ?>
                       
                       </a>
                        </li>

                        <?php endforeach; endif; else: echo "" ;endif; ?>

                      

                    </ul>


                </div>


                <div class="display-box">


                    <h4>案例中心<span>/</span><span>PROJECT CASE</span>


                        <p><a href="">更多》</a></p>


                    </h4>


                    <p class="pitch-on"><span class="col-txt" id="gz">工装</span>|<span id="jz">家装</span></p>


                    <ul id="gz-ul" class="alzx">

         <?php if(is_array($options) || $options instanceof \think\Collection || $options instanceof \think\Paginator): $i = 0; $__LIST__ = $options;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                 <!--     <a href="<?php echo url('home/'.$vo['catdir'].'/info',array('id'=>$vo['id'],'catId'=>$vo['catid'])); ?>">   -->
                      	<li>
                 <a href="<?php echo url('home/index/picture_show',array('id'=>$v['id'])); ?>">    <img src="__PUBLIC__<?php echo $v['pic']; ?>"></a>
                    <a href="<?php echo url('home/index/picture_show',array('id'=>$v['id'])); ?>">  <?php echo $v['title']; ?></a>

                        </li>
                        <!--</a>-->
     <?php endforeach; endif; else: echo "" ;endif; ?>


                    </ul>


                    <ul id="jz-ul" class="alzx">



                       
         <?php if(is_array($options) || $options instanceof \think\Collection || $options instanceof \think\Paginator): $i = 0; $__LIST__ = $options;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>

                 <!--     <a href="<?php echo url('home/'.$vo['catdir'].'/info',array('id'=>$vo['id'],'catId'=>$vo['catid'])); ?>">   -->
                      	<li>
                <img src="__PUBLIC__<?php echo $v['pic']; ?>"><?php echo $v['title']; ?></a>

                        </li>
                        <!--</a>-->
     <?php endforeach; endif; else: echo "" ;endif; ?>

                    </ul>







                    <script>



                        $('#gz').click(function () {



                            $('#gz').addClass('col-txt');



                            $('#gz-ul').css('display', 'flex');







                            $('#jz').removeClass('col-txt');



                            $('#jz-ul').css('display', 'none');



                        })







                        $('#jz').click(function () {



                            $('#jz').addClass('col-txt');



                            $('#jz-ul').css('display', 'flex');







                            $('#gz').removeClass('col-txt');



                            $('#gz-ul').css('display', 'none');



                        })



                    </script>







                </div>



            </div>



        </div>







        <div class="gylc-box display-box content-box">



            <h4>工艺流程<span>/</span><span>PROCESS FLOW</span></h4>







            <div class="gylc">



                <img src="__HOME__/images/shouye_54.png">







                <div class="gylc-right">



                    <h2>工艺流程</h2>



                    <div class="hidd-box">



                        <div class="gylc-scroll">



                            <span>找线定位 → 核查预埋件与洞口 → 涂刷防腐、防潮涂料 → 龙骨配置与安装 → 安装成品木饰面板。</span>







                            <p>1、找位与划线：木护墙、木筒子板安装前，应根据设计图要求，先找好标高、平面位置、竖向尺寸，进行弹线。</p>







                            <p>2、核预埋件及洞口：弹线后检查预埋件、木砖是否符合设计及安装的需求，主要检查排列间距、尺寸、位置是否满足钉装龙骨的要求；量测门窗及其他洞口位置、尺寸是否方正垂直，与设计要求是否相符。



                            </p>







                            <p>3、涂刷防潮、防腐涂料：设计有防潮、防腐要求的木护墙、木筒子板，在钉装龙骨时应压铺防潮卷材，或在钉装龙骨前进行涂刷防潮、防腐的施工。</p>







                            <p>4、龙骨的配置与安装...</p>



                        </div>



                    </div>



                </div>



            </div>



        </div>







        <div class="xwzx-box display-box content-box">



            <h4>新闻中心<span>/</span><span>NEWS CENTER</span>



                <p><a href="<?php echo url('home/index/news_list'); ?>">更多》</a></p>



            </h4>







            <ul class="new-list">

         <?php if(is_array($news) || $news instanceof \think\Collection || $news instanceof \think\Paginator): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
             <li>


                    <p>
                    	
                    	   <a href="<?php echo url('home/index/new_show',array('id'=>$v['id'])); ?>">   
                    	   	<img src="__HOME__/images/discover.png" />  </a>
                    	   	<a href="<?php echo url('home/index/new_show',array('id'=>$v['id'])); ?>">   
                    	   		<?php echo $v['title']; ?></a>


                    </p>


                    <span><?php echo $v['createtime']; ?></span>


                </li>
   
     <?php endforeach; endif; else: echo "" ;endif; ?>

               


            </ul>







        </div>






        <footer>


            <div class="content-box">


                <div class="footer-top">


          
                <ul>


                    <li>产品分类</li>


                    <li><a href="<?php echo url('home/index/product',['cz'=>1]); ?>">材质类</a></li>


                    <li><a href="<?php echo url('home/index/product',['hw'=>1]); ?>">花纹类</a></li>


                    <li><a href="<?php echo url('home/index/product',['gy'=>1]); ?>">工艺类</a></li>


                    <li><a href="<?php echo url('home/index/product',['sd'=>1]); ?>">色调类</a></li>


                </ul>


                <ul>


                    <li>专业定制</li>


                    <li><a href="/about-37.html">常规定制</a></li>


                    <li><a href="/about-38.html">拿样定制</a></li>


                </ul>


                <ul>


                    <li>招商加盟</li>


                    <li><a href="/about-32.html">加盟流程</a></li>


                    <li><a href="/about-33.html">加盟价格</a></li>


                </ul>


                <ul>


                    <li>安装流程</li>


                    <li><a href="/about-35.html">气钉安装</a></li>


                    <li><a href="/about-36.html">胶粘法</a></li>


                </ul>


                <ul>


                    <li>售后服务</li>

                    <li><a href="/about-40.html">免费设计</a></li>

                    <li><a href="/about-41.html">送货上门</a></li>

                    <li><a href="/about-42.html">上门量房</a></li>

                    <li><a href="/about-43.html">指导安装</a></li>

                </ul>

                <ul>

                    <li>国内加盟热线</li>

                    <li><a href="tel:02883944948">028-83944948</a></li>

                    <li><a href="tel:17318641860">173-18641860</a></li>

                    <li><a href="tel:18123381189">181-23381189</a></li>

                </ul>

                    <div class="code-box">


                        <p><a href="/about-44.html"> 联系我们</a></p>


                        <img src="__HOME__/images/code_07.png">


                    </div>


                </div>





                <div class="footer-bottom">


                    <p>友情链接</p>





                    <ul>

      <?php if(is_array($linkList) || $linkList instanceof \think\Collection || $linkList instanceof \think\Paginator): $i = 0; $__LIST__ = $linkList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

                <li><a href="<?php echo $vo['url']; ?>" rel="external" title="<?php echo $vo['name']; ?>"><?php echo $vo['name']; ?></a></li>

                <?php endforeach; endif; else: echo "" ;endif; ?>

                    </ul>


                </div>


                <p class="about-us">蜀ICP备18021852号</p>


                <p class="about-us">联系邮箱：189450152@qq.com</p>


                <p class="about-us">联系地址：四川省成都市新都区龙桥镇渭水工业园</p>


            </div>


        </footer>



    </div>







    <div class="lds-phone-box">



        <header>



            <div class="head-box">
                <a class="logo-img" href=""><img src="__HOME__/images/shouye_03 (2).png" /></a>
                <ul>
                    <li><a href="/home-index-news_list.html">新闻中心</a></li>
                    <li><a href="/about-31.html">常见问题</a></li>
                    <li><a href="/about-30.html">关于我们</a></li>
                    <li><a href="home/index/wzdt">网站地图</a></li>
                </ul>
            </div>
            <div class="jmrx-box">
                <div class="phone-box">
                    国内加盟热线：<span>

                        <p><a href="tel:02883944248">028-83944248</a></p>
                        <p><a href="tel:17318601860">173-18601860</a></p>
                    </span>
                </div>







                <div class="caidan-box">



                    <img id="caidan" src="__HOME__/images/caidan.png">



                    <ul class="hid">



                        <li><a href="/">首页</a></li>

    <?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

                        <li><a href="<?php echo url('home/'.$vo['catdir'].'/index',['catId'=>$vo['id']] ); ?>"><?php echo $vo['catname']; ?></a></li>
     <?php endforeach; endif; else: echo "" ;endif; ?>


                     


                    </ul>

              

                </div>



            </div>







            <!-- banner -->

            <div class="swiper-container home-banner">

                <div class="swiper-wrapper">

                    <div class="swiper-slide pos-txt">

                        <img src="__HOME__/images/pcpxq-banner_02.png">

                       
                    </div>


                </div>

                <!-- 如果需要分页器 -->

                <div class="swiper-pagination"></div>



            </div>







            <div class="search-link-box">



                <div class="search-box">



                    <input type="text" value="柚木"><button><img src="__HOME__/images/psearch.png"></button>



                </div>

                <div class="link-title">

                    首页>产品中心>材料分类

                </div>

            </div>

            <!-- 导航 -->



            <div class="nav-box">



                蓝帝思产品分类导航







                <img id="nav-but" src="__HOME__/images/pnav.png">







                <div class="nav-list">



                    <div class="classify-box">



                        <p>材质分类<img src="__HOME__/images/right-jt1.png" /></p>



                        <ul>



                            <li>
                            
                            	<img src="__HOME__/images/right-jt2 (2).png" />
                            	<a href="<?php echo url('home/index/product',['cz'=>1]); ?>">柚木饰面板</a></li>

                            <li><img src="__HOME__/images/right-jt2 (2).png" />
                            <a href="<?php echo url('home/index/product',['cz'=>2]); ?>">胡桃木饰面板</a></li>



                            <li><img src="__HOME__/images/right-jt2 (2).png" />
                            <a href="<?php echo url('home/index/product',['cz'=>3]); ?>">枫木饰面板</a></li>



                            <li><img src="__HOME__/images/right-jt2 (2).png" />
                            <a href="<?php echo url('home/index/product',['cz'=>4]); ?>">水曲柳饰面板</a></li>



                            <li><img src="__HOME__/images/right-jt2 (2).png" /> 
                            	<a href="<?php echo url('home/index/product',['cz'=>5]); ?>">橡木饰面板</a></li>



                        </ul>



                    </div>



                    <div class="classify-box">



                        <p>花纹分类<img src="__HOME__/images/right-jt1.png" /></p>



                        <ul>



                            <li><img src="__HOME__/images/right-jt2 (2).png" />
                            <a href="<?php echo url('home/index/product',['hw'=>1]); ?>">秋香饰面板</a></li>



                            <li><img src="__HOME__/images/right-jt2 (2).png" />
                            <a href="<?php echo url('home/index/product',['hw'=>2]); ?>">铁刀木饰面板</a></li>



                            <li><img src="__HOME__/images/right-jt2 (2).png" />
                             <a href="<?php echo url('home/index/product',['hw'=>3]); ?>">斑马饰面板</a></li>



                            <li><img src="__HOME__/images/right-jt2 (2).png" />
                            <a href="<?php echo url('home/index/product',['hw'=>4]); ?>">青藤柳饰面板</a></li>



                        </ul>



                    </div>



                    <div class="classify-box">



                        <p>工艺分类<img src="__HOME__/images/right-jt1.png" /></p>



                        <ul>



                            <li><img src="__HOME__/images/right-jt2 (2).png" />
                            <a href="<?php echo url('home/index/product',['gy'=>1]); ?>">单面饰面板</a></li>



                            <li><img src="__HOME__/images/right-jt2 (2).png" />
                            <a href="<?php echo url('home/index/product',['gy'=>2]); ?>">双面木饰面板</a></li>
                            <li><img src="__HOME__/images/right-jt2 (2).png" />
                            <a href="<?php echo url('home/index/product',['gy'=>3]); ?>">高光饰面板</a></li>

                            <li><img src="__HOME__/images/right-jt2 (2).png" />
                            <a href="<?php echo url('home/index/product',['gy'=>4]); ?>">浮雕柳饰面板</a></li>

                            <li><img src="__HOME__/images/right-jt2 (2).png" />
                            <a href="<?php echo url('home/index/product',['gy'=>5]); ?>">锯齿饰面板</a></li>

                            <li><img src="__HOME__/images/right-jt2 (2).png" />
                            <a href="<?php echo url('home/index/product',['gy'=>6]); ?>">加长饰面板</a></li>

                            <li><img src="__HOME__/images/right-jt2 (2).png" />
                            <a href="<?php echo url('home/index/product',['gy'=>7]); ?>">加宽饰面板</a></li>

                        </ul>



                    </div>



                    <div class="classify-box">



                        <p>色调分类<img src="__HOME__/images/right-jt1.png" /></p>



                        <ul>



                            <li><img src="__HOME__/images/right-jt2 (2).png" /><a href="<?php echo url('home/index/product',['sd'=>1] ); ?>">暖色饰面板</a></li>



                            <li><img src="__HOME__/images/right-jt2 (2).png" /><a href="<?php echo url('home/index/product',['sd'=>2] ); ?>">冷色木饰面板</a></li>



                        </ul>



                    </div>



                </div>



            </div>



        </header>





        <script>



            var mySwiper = new Swiper('.home-banner', {



                direction: 'horizontal', // 垂直切换选项



                loop: true, // 循环模式选项



                speed: 2000,



                autoplay: {



                    delay: 3000,



                    disableOnInteraction: false,



                    clickable: true,



                },



                // 如果需要分页器



                pagination: {



                    el: '.swiper-pagination',



                },



            })







            $('#caidan').click(function () {



                $('.hid').toggleClass('show');



            })







            $('#nav-but').click(function () {



                $('.nav-list').toggleClass('show');



            })



        </script>







        <!-- 客服 -->


        <div class="kefu-box">



            <img src="__HOME__/images/shouye_24.png">



        </div>


        <!-- 内容 -->

        <div class="conter-box">



            <div class="show-box">



                <h2>结构展示<span>/</span><span>STRUCTURE DISPLAY</span></h2>







                <div class="show-img-txt">



                    <img src="__HOME__/images/shouye_09.png">







                    <h3>木饰面产品性能</h3>



                    <p>1.健康环保，无甲醛</p>



                    <p>2.抗拒耐磨，硬度高</p>



                    <p>3.耐候性强，不褪色</p>



                    <p>4.不易焰灼，超防焰</p>



                </div>



            </div>







            <div class="show-box">



                <h2>



                    新品展示<span>/</span><span>NEW PRODUCT</span>







                    <p><a href="">更多》</a></p>



                </h2>







                <ul>



                                 <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>

                        <li>
                          <a href="<?php echo url('home/index/productinfo',array('id'=>$v['id'],'catId'=>$v['catid'])); ?>">
           <img src="__PUBLIC__<?php echo $v['thumb']; ?>"> </a>
                        <a href="<?php echo url('home/index/productinfo',array('id'=>$v['id'],'catId'=>$v['catid'])); ?>">
       
                            <?php echo $v['title']; ?>
                       
                       </a>
                        </li>

                        <?php endforeach; endif; else: echo "" ;endif; ?>


                </ul>



            </div>







            <div class="show-box alzx">



                <h2>



                    案例中心<span>/</span><span>PROJECT CASE</span>



                    <p><a href="">更多》</a></p>


                </h2>



                <p class="pitch-on"><span class="col-txt" id="pgz">工装</span>|<span id="pjz">家装</span></p>

                    <ul id="gz-ul" class="alzx">

         <?php if(is_array($options) || $options instanceof \think\Collection || $options instanceof \think\Paginator): $i = 0; $__LIST__ = $options;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                 <!--     <a href="<?php echo url('home/'.$vo['catdir'].'/info',array('id'=>$vo['id'],'catId'=>$vo['catid'])); ?>">   -->
                      	<li>
                 <a href="<?php echo url('home/index/picture_show',array('id'=>$v['id'])); ?>">    <img src="__PUBLIC__<?php echo $v['pic']; ?>"></a>
                    <a href="<?php echo url('home/index/picture_show',array('id'=>$v['id'])); ?>">  <?php echo $v['title']; ?></a>

                        </li>
                        <!--</a>-->
     <?php endforeach; endif; else: echo "" ;endif; ?>


                    </ul>


                    <ul id="jz-ul" class="alzx">



                       
         <?php if(is_array($options) || $options instanceof \think\Collection || $options instanceof \think\Paginator): $i = 0; $__LIST__ = $options;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>

                 <!--     <a href="<?php echo url('home/'.$vo['catdir'].'/info',array('id'=>$vo['id'],'catId'=>$vo['catid'])); ?>">   -->
                      	<li>
                <img src="__PUBLIC__<?php echo $v['pic']; ?>"><?php echo $v['title']; ?></a>

                        </li>
                        <!--</a>-->
     <?php endforeach; endif; else: echo "" ;endif; ?>

                    </ul>

                <script>

                    $('#pgz').click(function () {



                        $('#pgz').addClass('col-txt');



                        $('#pgz-ul').css('display', 'flex');







                        $('#pjz').removeClass('col-txt');



                        $('#pjz-ul').css('display', 'none');



                    })







                    $('#pjz').click(function () {



                        $('#pjz').addClass('col-txt');



                        $('#pjz-ul').css('display', 'flex');







                        $('#pgz').removeClass('col-txt');



                        $('#pgz-ul').css('display', 'none');



                    })



                </script>







            </div>







            <div class="show-box">



                <h2>工艺流程<span>/</span><span>PROCESS FLOW</span></h2>







                <div class="show-img-txt">



                    <img src="__HOME__/images/shouye_54.png">







                    <p>找线定位 → 核查预埋件与洞口 → 涂刷防腐、防潮涂料 → 龙骨配置与安装 → 安装成品木饰面板。</p>







                    <p>1、找位与划线：木护墙、木筒子板安装前，应根据设计图要求，先找好标高、平面位置、竖向尺寸，进行弹线。</p>







                    <p>2、核预埋件及洞口：弹线后检查预埋件、木砖是否符合设计及安装的需求，主要检查排列间距、尺寸、位置是否满足钉装龙骨的要求；量测门窗及其他洞口位置、尺寸是否方正垂直，与设计要求是否相符。



                    </p>







                    <p>3、涂刷防潮、防腐涂料：设计有防潮、防腐要求的木护墙、木筒子板，在钉装龙骨时应压铺防潮卷材，或在钉装龙骨前进行涂刷防潮、防腐的施工。</p>







                    <p>4、龙骨的配置与安装...</p>







                </div>



            </div>







        </div>


        <div class="show-box xwzx-box">



            <h2>新闻中心<span>/</span><span>NEWS CENTER</span></h2>







            <ul class="new-list">



         <?php if(is_array($news) || $news instanceof \think\Collection || $news instanceof \think\Paginator): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
             <li>


                    <p>
                    	
                    	   <a href="<?php echo url('home/index/new_show',array('id'=>$v['id'])); ?>">   
                    	   	<img src="__HOME__/images/discover.png" />  </a>
                    	   	<a href="<?php echo url('home/index/new_show',array('id'=>$v['id'])); ?>">   
                    	   		<?php echo $v['title']; ?></a>


                    </p>


                    <span><?php echo $v['createtime']; ?></span>


                </li>
   
     <?php endforeach; endif; else: echo "" ;endif; ?>


            </ul>



        </div>







    <footer>
            <div class="footer-nav-list">
                <ul>
                    <li>产品分类</li>
                    <li><a href="<?php echo url('home/index/product',['cz'=>1]); ?>">材质类</a></li>
                    <li><a href="<?php echo url('home/index/product',['hw'=>1]); ?>">花纹类</a></li>
                    <li><a href="<?php echo url('home/index/product',['gy'=>1]); ?>">工艺类</a></li>
                    <li><a href="<?php echo url('home/index/product',['sd'=>1]); ?>">色调类</a></li>
                </ul>
                <ul>
                    <li>专业定制</li>
                    <li><a href="/about-37.html">常规定制</a></li>
                    <li><a href="/about-38.html">拿样定制</a></li>
                </ul>
                <ul>
                    <li>招商加盟</li>
                    <li><a href="/about-32.html">加盟流程</a></li>
                    <li><a href="/about-33.html">加盟价格</a></li>
                </ul>
                <ul>
                    <li>安装流程</li>
                    <li><a href="/about-35.html">气钉安装</a></li>
                    <li><a href="/about-36.html">胶粘法</a></li>
                </ul>
                <ul>
                    <li>售后服务</li>
                    <li><a href="/about-40.html">免费设计</a></li>
                    <li><a href="/about-41.html">送货上门</a></li>
                    <li><a href="/about-42.html">上门量房</a></li>
                    <li><a href="/about-43.html">指导安装</a></li>
                </ul>
                <ul>
                    <li>国内加盟热线</li>
                    <li><a href="tel:02883944948">028-83944948</a></li>
                    <li><a href="tel:17318641860">173-18641860</a></li>
                    <li><a href="tel:18123381189">181-23381189</a></li>
                </ul>
            </div>
            <div class="line-box"></div>
            <div class="friend-link">
                <h4>友情链接</h4>
                <ul>           <?php if(is_array($linkList) || $linkList instanceof \think\Collection || $linkList instanceof \think\Paginator): $i = 0; $__LIST__ = $linkList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>                <li><a href="<?php echo $vo['url']; ?>" rel="external" title="<?php echo $vo['name']; ?>"><?php echo $vo['name']; ?></a></li>                <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                <p>蜀ICP备18021852号 <span>联系邮箱：189450152@qq.com</span></p>
                <p class="about-us">联系地址：四川省成都市新都区龙桥镇渭水工业园</p>
            </div>
        </footer>
    </div>
    <script src="https://c.mipcdn.com/static/v2/mip.js"></script>
</body>

</html>    