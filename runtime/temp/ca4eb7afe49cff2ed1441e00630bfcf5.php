<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:67:"F:\phpStudy\PHPTutorial\WWW\landisi/app/home\view\product_list.html";i:1556013006;s:66:"F:\phpStudy\PHPTutorial\WWW\landisi/app/home\view\common_head.html";i:1556013348;s:66:"F:\phpStudy\PHPTutorial\WWW\landisi/app/home\view\common_left.html";i:1556015374;s:69:"F:\phpStudy\PHPTutorial\WWW\landisi/app/home\view\common_footer1.html";i:1555671282;s:67:"F:\phpStudy\PHPTutorial\WWW\landisi/app/home\view\common_head1.html";i:1556012266;s:68:"F:\phpStudy\PHPTutorial\WWW\landisi/app/home\view\common_footer.html";i:1555671147;}*/ ?>
<!DOCTYPE html>

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

                <h3 class="title-link"><a href="/">首页</a>><a href="/services-3.html">产品中心</a></h3>

                <div class="cpzx-box">

                    <div class="choose-title">

                        已选条件：
                        <?php if(is_array($str) || $str instanceof \think\Collection || $str instanceof \think\Paginator): $i = 0; $__LIST__ = $str;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <a href="<?php echo url('home/index/product',array_merge($map,[$key=>0])); ?>"><span><?php echo $vo; ?><img src="__HOME__/images/ganbi.png"></span></a>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>

                    <table>

                        <tr>

                            <th>品牌</th>

                            <th>蓝帝思</th>

                        </tr>

                        <tr>
                            <th>色调</th>

                            <th>

                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['sd'=>1]):['sd'=>1]); ?>">暖色</a></span>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['sd'=>2]):['sd'=>2]); ?>">冷色</a></span>


                            </th>


                        </tr>


                        <tr>


                            <th>材质</th>


                            <th>


                                <span class="col-lan"><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['cz'=>1]):['cz'=>1]); ?>">柚木</a></span>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['cz'=>2]):['cz'=>2]); ?>">胡桃木</a></span>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['cz'=>3]):['cz'=>3]); ?>">枫木</a></span>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['cz'=>4]):['cz'=>4]); ?>">水曲柳</a></span>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['cz'=>5]):['cz'=>5]); ?>">橡木</a></span>


                            </th>


                        </tr>
 

                        <tr>


                            <th>花纹</th>


                            <th>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['hw'=>1]):['hw'=>1]); ?>">秋香</a></span>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['hw'=>2]):['hw'=>2]); ?>">铁刀</a></span>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['hw'=>3]):['hw'=>3]); ?>">斑马</a></span>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['hw'=>4]):['hw'=>4]); ?>">青藤</a></span>


                            </th>


                        </tr>


                        <tr>


                            <th>厚度</th>


                            <th>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['hd'=>1]):['hd'=>1]); ?>">3mm</a></span>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['hd'=>2]):['hd'=>2]); ?>">5mm</a></span>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['hd'=>3]):['hd'=>3]); ?>">9mm</a></span>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['hd'=>4]):['hd'=>4]); ?>">15mm</a></span>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['hd'=>5]):['hd'=>5]); ?>">18mm</a></span>


                            </th>


                        </tr>


                        <tr>


                            <th>工艺</th>


                            <th>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['gy'=>1]):['gy'=>1]); ?>">单面</a></span>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['gy'=>2]):['gy'=>2]); ?>">双面</a></span>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['gy'=>3]):['gy'=>3]); ?>">高光</a></span>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['gy'=>4]):['gy'=>4]); ?>">浮雕</a></span>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['gy'=>5]):['gy'=>5]); ?>">锯齿</a></span>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['gy'=>6]):['gy'=>6]); ?>">加长</a></span>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['gy'=>7]):['gy'=>7]); ?>">加宽</a></span>

 
                            </th>


                        </tr>


                        <tr>


                            <th>尺寸</th> 


                            <th>


                                <span>木皮板尺寸：2440mm * 1220mm</span>


                                <span>木皮仿步尺寸：2440mm * 610mm</span>


                            </th>


                        </tr>


                    </table>


                </div>





                <div class="display-box cpzx-display-box">


                    <h4>产品中心<span>/</span><span>PRODOCT CENTER</span>





                    </h4>





                    <ul class="cpzx-list">


                       <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>

                       
                        <li>
                      
                          <a href="<?php echo url('home/index/productinfo',array('id'=>$v['id'],'catId'=>$v['catid'])); ?>">  <img src="__PUBLIC__<?php echo $v['thumb']; ?>">   </a>


                          <a href="<?php echo url('home/index/productinfo',array('id'=>$v['id'],'catId'=>$v['catid'])); ?>">  <?php echo $v['title']; ?>   </a>
                   

                        </li>
                 
                        <?php endforeach; endif; else: echo "" ;endif; ?>

                    </ul>
                </div>
                <?php echo $page; ?>
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
     
        <script>
            var mySwiper = new Swiper('.home-banner', {
                direction: 'horizontal', // 垂直切换选项
                loop: false, // 循环模式选项
                speed: 2000,
                // autoplay: {
                //     delay: 3000,
                //     disableOnInteraction: false,
                //     clickable: true,
                // },
                // 如果需要分页器
                // pagination: {
                //     el: '.swiper-pagination',
                // },
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

            <div class="show-box cpxq-box">
                <div class="cpzx-box">
                         <div class="choose-title">
  
                        已选条件：

                             <?php if(is_array($str) || $str instanceof \think\Collection || $str instanceof \think\Paginator): $i = 0; $__LIST__ = $str;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                             <a href="<?php echo url('home/index/product',array_merge($map,[$key=>0])); ?>"><span><?php echo $vo; ?><img src="__HOME__/images/ganbi.png"></span></a>
                             <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>

                    <table>

                        <tr>

                            <th>品牌</th>

                            <th>蓝帝思</th>

                        </tr>

                        <tr>
                            <th>色调</th>

                            <th>

                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['sd'=>1]):['sd'=>1]); ?>">暖色</a></span>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['sd'=>2]):['sd'=>2]); ?>">冷色</a></span>


                            </th>


                        </tr>


                        <tr>


                            <th>材质</th>


                            <th>


                                <span class="col-lan"><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['cz'=>1]):['cz'=>1]); ?>">柚木</a></span>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['cz'=>2]):['cz'=>2]); ?>">胡桃木</a></span>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['cz'=>3]):['cz'=>3]); ?>">枫木</a></span>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['cz'=>4]):['cz'=>4]); ?>">水曲柳</a></span>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['cz'=>5]):['cz'=>5]); ?>">橡木</a></span>


                            </th>


                        </tr>


                        <tr>


                            <th>花纹</th>


                            <th>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['hw'=>1]):['hw'=>1]); ?>">秋香</a></span>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['hw'=>2]):['hw'=>2]); ?>">铁刀</a></span>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['hw'=>3]):['hw'=>3]); ?>">斑马</a></span>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['hw'=>4]):['hw'=>4]); ?>">青藤</a></span>


                            </th>


                        </tr>


                        <tr>


                            <th>厚度</th>


                            <th>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['hd'=>1]):['hd'=>1]); ?>">3mm</a></span>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['hd'=>2]):['hd'=>2]); ?>">5mm</a></span>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['hd'=>3]):['hd'=>3]); ?>">9mm</a></span>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['hd'=>4]):['hd'=>4]); ?>">15mm</a></span>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['hd'=>5]):['hd'=>5]); ?>">18mm</a></span>


                            </th>


                        </tr>


                        <tr>


                            <th>工艺</th>


                            <th>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['gy'=>1]):['gy'=>1]); ?>">单面</a></span>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['gy'=>2]):['gy'=>2]); ?>">双面</a></span>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['gy'=>3]):['gy'=>3]); ?>">高光</a></span>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['gy'=>4]):['gy'=>4]); ?>">浮雕</a></span>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['gy'=>5]):['gy'=>5]); ?>">锯齿</a></span>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['gy'=>6]):['gy'=>6]); ?>">加长</a></span>


                                <span><a href="<?php echo url('home/index/product',isset($map)?array_merge($map,['gy'=>7]):['gy'=>7]); ?>">加宽</a></span>


                            </th>


                        </tr>


                        <tr>


                            <th>尺寸</th>


                            <th>


                                <span>木皮板尺寸：2440mm * 1220mm</span>


                                <span>木皮仿步尺寸：2440mm * 610mm</span>


                            </th>


                        </tr>


                    </table>


                </div>
            </div>

            <div class="show-box alzx">
                <h2>
                    产品中心<span>/</span><span>PRODOCT CENTER</span>

                    <!-- <p>更多》</p> -->
                </h2>

                <ul class="cpzx-list">
                        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>

                       
                        <li>
                      
                          <a href="<?php echo url('home/index/productinfo',array('id'=>$v['id'],'catId'=>$v['catid'])); ?>">  <img src="__PUBLIC__<?php echo $v['thumb']; ?>">   </a>


                          <a href="<?php echo url('home/index/productinfo',array('id'=>$v['id'],'catId'=>$v['catid'])); ?>">  <?php echo $v['title']; ?>   </a>
                   

                        </li>
                 
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <?php echo $page; ?>
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
                <ul>
                </ul>
                <p>蜀ICP备18021852号 <span>联系邮箱：189450152@qq.com</span></p>
                <p class="about-us">联系地址：四川省成都市新都区龙桥镇渭水工业园</p>
            </div>
        </footer>
    </div>
    <script src="https://c.mipcdn.com/static/v2/mip.js"></script>
</body>

</html>