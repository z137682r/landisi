<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:64:"F:\phpStudy\PHPTutorial\WWW\landisi/app/home\view\news_list.html";i:1556089051;s:66:"F:\phpStudy\PHPTutorial\WWW\landisi/app/home\view\common_head.html";i:1556013348;s:66:"F:\phpStudy\PHPTutorial\WWW\landisi/app/home\view\common_left.html";i:1556015374;s:69:"F:\phpStudy\PHPTutorial\WWW\landisi/app/home\view\common_footer1.html";i:1555671282;s:67:"F:\phpStudy\PHPTutorial\WWW\landisi/app/home\view\common_head1.html";i:1556012266;s:68:"F:\phpStudy\PHPTutorial\WWW\landisi/app/home\view\common_footer.html";i:1555671147;}*/ ?>
<!DOCTYPE html><html mip lang="en"><head>    <meta charset="UTF-8">    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <meta name="viewport" content="width=device-width,minimum-scale=1">    <meta http-equiv="X-UA-Compatible" content="ie=edge">    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" />    <title><?php if($info['title']): ?><?php echo $info['title']; elseif($title): ?><?php echo $title; else: ?><?php echo $sys['title']; endif; ?></title>    <link rel="stylesheet" type="text/css" href="https://c.mipcdn.com/static/v2/mip.css">    <link rel="canonical" href="http(s)://example.com">    <link rel="stylesheet" href="__HOME__/css/swiper.min.css">    <link rel="stylesheet" href="__HOME__/css/landisi.css">    <link rel="stylesheet" href="__HOME__/css/plandisi.css">    <script src="__HOME__/js/jq.js"></script>    <script src="__HOME__/js/swiper.min.js"></script></head><body>    <div class="lds-pc-box">        <header>            <div class="head-box content-box">                <ul>                    <a href="/home-index-news_list.html">                        <li>新闻中心</li>                    </a>                    <a href="/about-31.html">                        <li>常见问题</li>                    </a>                    <a href="/about-30.html">                        <li>关于我们</li>                    </a>                    <a href="home/index/wzdt">                        <li>网站地图</li>                    </a>                </ul>            </div>            <div class="logo-box content-box">                <a href=""><img src="__HOME__/images/shouye_03.png" width="340px" height="60px"></a>                <div>                    <p>国内加盟热线：<span>028-83944948</span></p>                    <span>173-18641860</span>                </div>            </div>            <!-- 导航条 -->            <div class="nav-box">                <ul class="nav content-box">                	                    <a href="/">              <?php if($catId == ''): ?>                        <li class="selected">                        	<?php else: ?>                        	<li>                        	<?php endif; ?>                                          	                        	首页</li>                    </a>                   <?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['child'] == 1): ?>                    <a href="<?php echo url('home/'.$vo['catdir'].'/index',['catId'=>$v['id']] ); ?>">                      <?php if($vo['id'] == $catId): ?>                        <li class="selected">                        	<?php else: ?>                        	<li>                        	<?php endif; ?>                        	                        	<?php echo $vo['catname']; ?></li>                    </a>                              <?php else: ?>                                  <a href="<?php echo url('home/'.$vo['catdir'].'/index',['catId'=>$vo['id']] ); ?>">                                <?php if($vo['id'] == $catId): ?>                        <li class="selected">                        	<?php else: ?>                        	<li>                        	<?php endif; ?>                        	                        	<?php echo $vo['catname']; ?></li>                    </a>                                  <?php endif; endforeach; endif; else: echo "" ;endif; ?>                    <!--<a href="">                        <li>专业定制</li>                    </a>                    <a href="">                        <li>招商加盟</li>                    </a>                    <a href="">                        <li>安装教程</li>                    </a>                    <a href="">                        <li>价格咨询</li>                    </a>-->                </ul>            </div>            <!-- banner -->            <div class="swiper-container home-banner">                <div class="swiper-wrapper">                    <div class="swiper-slide pos-txt">                        <img src="__HOME__/images/banner1_07.png">                        <div class="txt-box">                            <h1 class="content-box">西南木饰面厂家</h1>                            <div class="content-box">                                <h2>真材实料</h2>                                <h2>出众品质</h2>                            </div>                            <p class="content-box">REALMATERIALOUTSTANDINGQUALITY</p>                        </div>                    </div>                    <div class="swiper-slide">                        <img src="__HOME__/images/banner1_07.png">                    </div>                    <div class="swiper-slide">                        <img src="__HOME__/images/banner1_07.png">                    </div>                </div>                <!-- 如果需要分页器 -->                <div class="swiper-pagination"></div>                <!-- 如果需要导航按钮 -->                <div class="swiper-button-prev"></div>                <div class="swiper-button-next"></div>            </div>            <script>                var mySwiper = new Swiper('.home-banner', {                    direction: 'horizontal', // 垂直切换选项                    loop: true, // 循环模式选项                    speed: 2000,                    autoplay: {                        delay: 3000,                        disableOnInteraction: false,                        clickable: true,                    },                    // 如果需要分页器                    pagination: {                        el: '.swiper-pagination',                    },                    // 如果需要前进后退按钮                    navigation: {                        nextEl: '.swiper-button-next',                        prevEl: '.swiper-button-prev',                    }                })                    </script>        </header>











        <!-- 中间内容 -->





        <div class="centre-box content-box">





                       <div class="left-box">



                    <form action="home-index-product.html"class="search-box">

                        <input type="text"  name="kw" value="<?php echo input('kw'); ?>"><button><img src="__HOME__/images/psearch.png"></button>
                    </form>







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





                <h3 class="title-link">新闻中心</h3>











                <div class="display-box azjc-box">



              <h2>



                     新闻中心<span>/</span><span>News</span>



                </h2>



            <ul class="new-list" style="display: block;">

        <?php if(is_array($news) || $news instanceof \think\Collection || $news instanceof \think\Paginator): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>

             <li style="width: 100%;">

                    <p style="width: 100%;display: flex;justify-content: space-between;align-items: center;">

                    	   <a href="<?php echo url('home/index/new_show',array('id'=>$v['id'])); ?>" style="width: 75%;display: inline-block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;display: flex;align-items: center;">   

                    	   	<img src="__PUBLIC__<?php echo $v['thumb']; ?>" style="width: 80px;height:80px;margin: 0 10px 0 0;"/>  

                    	   	

                    	   		<?php echo $v['title']; ?></a>
                                   <span><?php echo $v['createtime']; ?></span>
                    </p>





                    





                </li>

   

     <?php endforeach; endif; else: echo "" ;endif; ?>

            </ul>

                </div>











            </div>





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

                <header>            <div class="head-box">                <a class="logo-img" href=""><img src="__HOME__/images/shouye_03 (2).png" /></a>                <ul>                    <li><a href="/home-index-news_list.html">新闻中心</a></li>                    <li><a href="/about-31.html">常见问题</a></li>                    <li><a href="/about-30.html">关于我们</a></li>                    <li><a href="home/index/wzdt">网站地图</a></li>                </ul>            </div>            <div class="jmrx-box">                <div class="phone-box">                    国内加盟热线：<span>                        <p><a href="tel:02883944248">028-83944248</a></p>                        <p><a href="tel:17318601860">173-18601860</a></p>                    </span>                </div>                <div class="caidan-box">                    <img id="caidan" src="__HOME__/images/caidan.png">                    <ul class="hid">                        <li><a href="/">首页</a></li>    <?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>                        <li><a href="<?php echo url('home/'.$vo['catdir'].'/index',['catId'=>$vo['id']] ); ?>"><?php echo $vo['catname']; ?></a></li>     <?php endforeach; endif; else: echo "" ;endif; ?>                                         </ul>                              </div>            </div>            <!-- banner -->            <div class="swiper-container home-banner">                <div class="swiper-wrapper">                    <div class="swiper-slide pos-txt">                        <img src="__HOME__/images/pcpxq-banner_02.png">                                           </div>                </div>                <!-- 如果需要分页器 -->                <div class="swiper-pagination"></div>            </div>            <div class="search-link-box">                <div class="search-box">                    <form action="home-index-product.html">                        <input type="text" name="kw" value="<?php echo input('kw'); ?>"><button><img src="__HOME__/images/psearch.png"></button>                    </form>                </div>                <div class="link-title">                    <a href="../">首页</a>><a href="services-3.html">产品中心</a>>材料分类                </div>            </div>            <!-- 导航 -->            <div class="nav-box">                蓝帝思产品分类导航                <img id="nav-but" src="__HOME__/images/pnav.png">                <div class="nav-list">                    <div class="classify-box">                        <p>材质分类<img src="__HOME__/images/right-jt1.png" /></p>                        <ul>                            <li>                                                        	<img src="__HOME__/images/right-jt2 (2).png" />                            	<a href="<?php echo url('home/index/product',['cz'=>1]); ?>">柚木饰面板</a></li>                            <li><img src="__HOME__/images/right-jt2 (2).png" />                            <a href="<?php echo url('home/index/product',['cz'=>2]); ?>">胡桃木饰面板</a></li>                            <li><img src="__HOME__/images/right-jt2 (2).png" />                            <a href="<?php echo url('home/index/product',['cz'=>3]); ?>">枫木饰面板</a></li>                            <li><img src="__HOME__/images/right-jt2 (2).png" />                            <a href="<?php echo url('home/index/product',['cz'=>4]); ?>">水曲柳饰面板</a></li>                            <li><img src="__HOME__/images/right-jt2 (2).png" />                             	<a href="<?php echo url('home/index/product',['cz'=>5]); ?>">橡木饰面板</a></li>                        </ul>                    </div>                    <div class="classify-box">                        <p>花纹分类<img src="__HOME__/images/right-jt1.png" /></p>                        <ul>                            <li><img src="__HOME__/images/right-jt2 (2).png" />                            <a href="<?php echo url('home/index/product',['hw'=>1]); ?>">秋香饰面板</a></li>                            <li><img src="__HOME__/images/right-jt2 (2).png" />                            <a href="<?php echo url('home/index/product',['hw'=>2]); ?>">铁刀木饰面板</a></li>                            <li><img src="__HOME__/images/right-jt2 (2).png" />                             <a href="<?php echo url('home/index/product',['hw'=>3]); ?>">斑马饰面板</a></li>                            <li><img src="__HOME__/images/right-jt2 (2).png" />                            <a href="<?php echo url('home/index/product',['hw'=>4]); ?>">青藤柳饰面板</a></li>                        </ul>                    </div>                    <div class="classify-box">                        <p>工艺分类<img src="__HOME__/images/right-jt1.png" /></p>                        <ul>                            <li><img src="__HOME__/images/right-jt2 (2).png" />                            <a href="<?php echo url('home/index/product',['gy'=>1]); ?>">单面饰面板</a></li>                            <li><img src="__HOME__/images/right-jt2 (2).png" />                            <a href="<?php echo url('home/index/product',['gy'=>2]); ?>">双面木饰面板</a></li>                            <li><img src="__HOME__/images/right-jt2 (2).png" />                            <a href="<?php echo url('home/index/product',['gy'=>3]); ?>">高光饰面板</a></li>                            <li><img src="__HOME__/images/right-jt2 (2).png" />                            <a href="<?php echo url('home/index/product',['gy'=>4]); ?>">浮雕柳饰面板</a></li>                            <li><img src="__HOME__/images/right-jt2 (2).png" />                            <a href="<?php echo url('home/index/product',['gy'=>5]); ?>">锯齿饰面板</a></li>                            <li><img src="__HOME__/images/right-jt2 (2).png" />                            <a href="<?php echo url('home/index/product',['gy'=>6]); ?>">加长饰面板</a></li>                            <li><img src="__HOME__/images/right-jt2 (2).png" />                            <a href="<?php echo url('home/index/product',['gy'=>7]); ?>">加宽饰面板</a></li>                        </ul>                    </div>                    <div class="classify-box">                        <p>色调分类<img src="__HOME__/images/right-jt1.png" /></p>                        <ul>                            <li><img src="__HOME__/images/right-jt2 (2).png" /><a href="<?php echo url('home/index/product',['sd'=>1] ); ?>">暖色饰面板</a></li>                            <li><img src="__HOME__/images/right-jt2 (2).png" /><a href="<?php echo url('home/index/product',['sd'=>2] ); ?>">冷色木饰面板</a></li>                        </ul>                    </div>                </div>            </div>        </header>



        <script>



            var mySwiper = new Swiper('.home-banner', {



                direction: 'horizontal', // 垂直切换选项



                loop: false, // 循环模式选项



                speed: 2000,



            })





            $('#caidan').click(function () {



                $('.hid').toggleClass('show');



            })



            $('#nav-but').click(function () {



                $('.nav-list').toggleClass('show');



            })



        </script>



        <!-- 内容 -->



        <div class="conter-box cpzx-conter-box">



            <div class="show-box alzx">



                <h2>



                     新闻中心<span>/</span><span>News</span>



                </h2>



            <ul class="new-list">

        <?php if(is_array($news) || $news instanceof \think\Collection || $news instanceof \think\Paginator): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>

             <li>

                    <p>

                    	   <a href="<?php echo url('home/index/new_show',array('id'=>$v['id'])); ?>">   

                    	   	<img src="__PUBLIC__<?php echo $v['thumb']; ?>" />  </a>

                    	   	<a href="<?php echo url('home/index/new_show',array('id'=>$v['id'])); ?>">   

                    	   		<?php echo $v['title']; ?></a>

                    </p>





                    <span><?php echo $v['createtime']; ?></span>





                </li>

   

     <?php endforeach; endif; else: echo "" ;endif; ?>

            </ul>













            </div>





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