<?php exit;?>a:3:{s:8:"template";a:14:{i:0;s:46:"C:/yanshiwwwroot/miqi/themes/miqinew/goods.dwt";i:1;s:60:"C:/yanshiwwwroot/miqi/themes/miqinew/library/page_header.lbi";i:2;s:56:"C:/yanshiwwwroot/miqi/themes/miqinew/library/ur_here.lbi";i:3;s:62:"C:/yanshiwwwroot/miqi/themes/miqinew/library/goods_gallery.lbi";i:4;s:52:"C:/yanshiwwwroot/miqi/themes/miqinew/library/vip.lbi";i:5;s:62:"C:/yanshiwwwroot/miqi/themes/miqinew/library/goods_related.lbi";i:6;s:60:"C:/yanshiwwwroot/miqi/themes/miqinew/library/top10_goods.lbi";i:7;s:60:"C:/yanshiwwwroot/miqi/themes/miqinew/library/brand_goods.lbi";i:8;s:68:"C:/yanshiwwwroot/miqi/themes/miqinew/library/recommend_new_goods.lbi";i:9;s:69:"C:/yanshiwwwroot/miqi/themes/miqinew/library/recommend_best_goods.lbi";i:10;s:63:"C:/yanshiwwwroot/miqi/themes/miqinew/library/goods_fittings.lbi";i:11;s:57:"C:/yanshiwwwroot/miqi/themes/miqinew/library/comments.lbi";i:12;s:62:"C:/yanshiwwwroot/miqi/themes/miqinew/library/benwangyoushi.lbi";i:13;s:60:"C:/yanshiwwwroot/miqi/themes/miqinew/library/page_footer.lbi";}s:7:"expires";i:1421008774;s:8:"maketime";i:1421005174;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title>ewewe_身体护理_ECSHOP米奇网-站博士模板堂（www.zbos56.com）</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/miqinew/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/common.js"></script><script type="text/javascript" src="js/left_goodslist.js"></script><script>
function changeAtt(t) {
t.lastChild.checked='checked';
for (var i = 0; i<t.parentNode.childNodes.length;i++) {
        if (t.parentNode.childNodes[i].className == 'cattsel') {
            t.parentNode.childNodes[i].className = '';
        }
    }
t.className = "cattsel";
changePrice();
}
</script>
<script type="text/javascript">
function $id(element) {
  return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onclick=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}
</script>
</head>
<body>
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<script type="text/javascript">
//收藏本站 bbs.ecmoban.com
function AddFavorite(title, url) {
  try {
      window.external.addFavorite(url, title);
  }
catch (e) {
     try {
       window.sidebar.addPanel(title, url, "");
    }
     catch (e) {
         alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
     }
  }
}
</script>
<div class="header ">
  <div class="headBody">
    <div class="heads">
      <div class="bookmail">
        <ul>
          <li class="background_ico"><a href="#" target="_blank" rel="nofollow">手机版<span>MIQI</span></a></li>
          <li class="background_line"><a href="#" target="_blank" rel="nofollow">邀请好友</a></li>
          <li><a href="javascript:void(0);" onclick="AddFavorite('我的网站',location.href)">加入收藏</a></li>
          <li class="background_pay">关注<span>MIQI</span><span class="arrow"></span>
            <div class="bookmail_more">
              <ul>
                <li class="more01"><a href="#" target="_blank" rel="nofollow">新浪微博</a></li>
                <li class="more02"><a href="#" target="_blank" rel="nofollow">腾讯微博</a></li>
                <li class="more03"><a href="#" target="_blank" rel="nofollow">QQ空间</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
      <div class="user_control">
        <ul>
          <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script><script type="text/javascript" src="js/jquery.json.js"></script><script type="text/javascript" src="js/jquery.SuperSlide.js"></script>          <script type="text/javascript" src="js/transport.js"></script><script type="text/javascript" src="js/utils.js"></script><script type="text/javascript" src="js/ecmoban_common.js"></script> 
          <font id="ECS_MEMBERZONE" style="display:block; float:left;">554fcae493e564ee0dc75bdf2ebf94camember_info|a:1:{s:4:"name";s:11:"member_info";}554fcae493e564ee0dc75bdf2ebf94ca </font>
                     <li><a class="head_blog" href="user.php?act=oath&type=weibo">微博登录</a></li>
          <li><a class="head_qq" href="user.php?act=oath&type=qq"><span class="arial">QQ</span>登录</a></li>
          <li style="background:none;"><a class="head_alipay " href="user.php?act=oath&type=alipay">支付宝登录</a></li>
        </ul>
      </div>
    </div>
    <div class="headBox">
      <div class="logo"><a href="index.php" name="top"><img src="themes/miqinew/images/logo.gif" /></a></div>
      
      <div id="search"  class="headSearch">
        <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()"  >
          <div class="headSearch_input">
            <input name="keywords" type="text" id="keyword" value="美体小铺" onclick="javascript:if(this.value=='美体小铺')this.value=''"  />
          </div>
          <div class="headSearch_btn">
            <input name="imageField" type="submit" value=""  style="cursor:pointer;" />
          </div>
        </form>
      </div>
      
      <div class="shop_txt_out" id="ECS_CARTINFO" >
       554fcae493e564ee0dc75bdf2ebf94cacart_info|a:1:{s:4:"name";s:9:"cart_info";}554fcae493e564ee0dc75bdf2ebf94ca      </div>
    </div>
    <div class="headNav" style="position:relative; z-index:999;">
      <div class="classNav"> <a class="classNav_a" href="#">全部商品分类</a> 
      
      
      <div class="left_nav" style="position:absolute; left:0; top:33px;">
        <div class="leftNav" id="J_mainCata">
          <ul>
                        <li>
              <p class="leftNav_p01"><a class="a1" href="category.php?id=1" title="彩妆">彩妆</a></p>
              <div class="childer_hide" >
                                                <a href="category.php?id=47" target="_blank">眼线</a>
                                <a href="category.php?id=48" target="_blank">眼影</a>
                                <a href="category.php?id=49" target="_blank">睫毛</a>
                                <a href="category.php?id=50" target="_blank">眉粉眉笔</a>
                                                                <a href="category.php?id=51" target="_blank">BB霜</a>
                                <a href="category.php?id=52" target="_blank">粉底</a>
                                <a href="category.php?id=53" target="_blank">粉饼</a>
                                <a href="category.php?id=54" target="_blank">散粉</a>
                                <a href="category.php?id=55" target="_blank">隔离霜</a>
                                                                <a href="category.php?id=56" target="_blank">眼影</a>
                                <a href="category.php?id=57" target="_blank">修容</a>
                                <a href="category.php?id=58" target="_blank">润唇</a>
                                <a href="category.php?id=59" target="_blank">卸妆</a>
                                <a href="category.php?id=60" target="_blank">浓密卷翘</a>
                                                                <a href="category.php?id=61" target="_blank">腮红</a>
                                <a href="category.php?id=62" target="_blank">唇妆</a>
                                <a href="category.php?id=63" target="_blank">美甲</a>
                                <a href="category.php?id=64" target="_blank">修容</a>
                                <a href="category.php?id=65" target="_blank">遮瑕</a>
                                <a href="category.php?id=66" target="_blank">底妆定妆</a>
                                              </div>
			  <div class="J_arrowBtn" style="top: 19px; display: block;"></div>
			  <div class="leftSubNav" id="J_subCata" style="opacity: 1; left: 220px; display: block; top: 0px;">
        
          <div class="leftSubNav_list" >
            <div class="leftSubNav_left">
			                        <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="category.php?id=4" target="_blank">眼部彩妆</a></p>
                <dl>
                                    <dd><a href="category.php?id=47" target="_blank">眼线</a></dd>
                                    <dd><a href="category.php?id=48" target="_blank">眼影</a></dd>
                                    <dd><a href="category.php?id=49" target="_blank">睫毛</a></dd>
                                    <dd><a href="category.php?id=50" target="_blank">眉粉眉笔</a></dd>
                  				  <div class="blank"></div>
                </dl>
              </div>
			                   <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="category.php?id=5" target="_blank">面部彩妆</a></p>
                <dl>
                                    <dd><a href="category.php?id=51" target="_blank">BB霜</a></dd>
                                    <dd><a href="category.php?id=52" target="_blank">粉底</a></dd>
                                    <dd><a href="category.php?id=53" target="_blank">粉饼</a></dd>
                                    <dd><a href="category.php?id=54" target="_blank">散粉</a></dd>
                                    <dd><a href="category.php?id=55" target="_blank">隔离霜</a></dd>
                  				  <div class="blank"></div>
                </dl>
              </div>
			                   <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="category.php?id=3" target="_blank">彩妆套装</a></p>
                <dl>
                                    <dd><a href="category.php?id=56" target="_blank">眼影</a></dd>
                                    <dd><a href="category.php?id=57" target="_blank">修容</a></dd>
                                    <dd><a href="category.php?id=58" target="_blank">润唇</a></dd>
                                    <dd><a href="category.php?id=59" target="_blank">卸妆</a></dd>
                                    <dd><a href="category.php?id=60" target="_blank">浓密卷翘</a></dd>
                  				  <div class="blank"></div>
                </dl>
              </div>
			                   <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="category.php?id=2" target="_blank">其他彩妆</a></p>
                <dl>
                                    <dd><a href="category.php?id=61" target="_blank">腮红</a></dd>
                                    <dd><a href="category.php?id=62" target="_blank">唇妆</a></dd>
                                    <dd><a href="category.php?id=63" target="_blank">美甲</a></dd>
                                    <dd><a href="category.php?id=64" target="_blank">修容</a></dd>
                                    <dd><a href="category.php?id=65" target="_blank">遮瑕</a></dd>
                                    <dd><a href="category.php?id=66" target="_blank">底妆定妆</a></dd>
                  				  <div class="blank"></div>
                </dl>
              </div>
			                 </div>
			
            <div class="leftSubNav_list_right">
              <dl>
                                <dd>
                                    <a href="category.php?id=1&amp;brand=9" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385075742122482555.jpg" alt="贝玲妃 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=1&amp;brand=10" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385071326106067039.jpg" alt="蜜丝佛陀 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=1&amp;brand=12" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385074662344849612.jpg" alt="娇兰 (3)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=1&amp;brand=19" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385075349519828204.jpg" alt="香奈儿 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=1&amp;brand=20" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385075993147931634.jpg" alt="安娜苏 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=1&amp;brand=21" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385076120760632260.jpg" alt="纪梵希 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=1&amp;brand=22" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385076231378742775.jpg" alt="谜尚 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=1&amp;brand=23" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385076375210486006.jpg" alt="欧莱雅 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=1&amp;brand=24" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385076518149939285.jpg" alt="思亲肤 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=1&amp;brand=25">浮生若梦</a>
                                  </dd>
                              </dl>
              
            </div>
          </div>
       
         
        </div>
		<div class="blank"></div>
            </li>
                        <li>
              <p class="leftNav_p02"><a class="a1" href="category.php?id=6" title="护肤">护肤</a></p>
              <div class="childer_hide" >
                                                <a href="category.php?id=19" target="_blank">洁面</a>
                                <a href="category.php?id=20" target="_blank">面膜</a>
                                <a href="category.php?id=21" target="_blank">卸妆</a>
                                <a href="category.php?id=22" target="_blank">防晒</a>
                                <a href="category.php?id=23" target="_blank">精华</a>
                                <a href="category.php?id=24" target="_blank">化妆水</a>
                                <a href="category.php?id=25" target="_blank">乳液</a>
                                <a href="category.php?id=26" target="_blank">面霜</a>
                                <a href="category.php?id=27" target="_blank">面油</a>
                                                                <a href="category.php?id=28" target="_blank">保湿</a>
                                <a href="category.php?id=29" target="_blank">去浮肿</a>
                                <a href="category.php?id=30" target="_blank">去眼纹</a>
                                <a href="category.php?id=31" target="_blank">去眼袋</a>
                                <a href="category.php?id=32" target="_blank">去黑眼圈</a>
                                                                <a href="category.php?id=33" target="_blank">护唇</a>
                                <a href="category.php?id=34" target="_blank">喷雾</a>
                                <a href="category.php?id=35" target="_blank">啫喱</a>
                                <a href="category.php?id=36" target="_blank">角质按摩</a>
                                <a href="category.php?id=37" target="_blank">祛痘祛斑</a>
                                <a href="category.php?id=38" target="_blank">T区护理</a>
                                <a href="category.php?id=39" target="_blank">颈霜</a>
                                <a href="category.php?id=40" target="_blank">保健食品</a>
                                                                <a href="category.php?id=41" target="_blank">美白</a>
                                <a href="category.php?id=42" target="_blank">保湿</a>
                                <a href="category.php?id=43" target="_blank">嫩肤</a>
                                <a href="category.php?id=44" target="_blank">补水</a>
                                <a href="category.php?id=45" target="_blank">紧致去皱</a>
                                              </div>
			  <div class="J_arrowBtn" style="top: 19px; display: block;"></div>
			  <div class="leftSubNav" id="J_subCata" style="opacity: 1; left: 220px; display: block; top: 0px;">
        
          <div class="leftSubNav_list" >
            <div class="leftSubNav_left">
			                        <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="category.php?id=7" target="_blank">面部护理</a></p>
                <dl>
                                    <dd><a href="category.php?id=19" target="_blank">洁面</a></dd>
                                    <dd><a href="category.php?id=20" target="_blank">面膜</a></dd>
                                    <dd><a href="category.php?id=21" target="_blank">卸妆</a></dd>
                                    <dd><a href="category.php?id=22" target="_blank">防晒</a></dd>
                                    <dd><a href="category.php?id=23" target="_blank">精华</a></dd>
                                    <dd><a href="category.php?id=24" target="_blank">化妆水</a></dd>
                                    <dd><a href="category.php?id=25" target="_blank">乳液</a></dd>
                                    <dd><a href="category.php?id=26" target="_blank">面霜</a></dd>
                                    <dd><a href="category.php?id=27" target="_blank">面油</a></dd>
                  				  <div class="blank"></div>
                </dl>
              </div>
			                   <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="category.php?id=8" target="_blank">眼部护理</a></p>
                <dl>
                                    <dd><a href="category.php?id=28" target="_blank">保湿</a></dd>
                                    <dd><a href="category.php?id=29" target="_blank">去浮肿</a></dd>
                                    <dd><a href="category.php?id=30" target="_blank">去眼纹</a></dd>
                                    <dd><a href="category.php?id=31" target="_blank">去眼袋</a></dd>
                                    <dd><a href="category.php?id=32" target="_blank">去黑眼圈</a></dd>
                  				  <div class="blank"></div>
                </dl>
              </div>
			                   <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="category.php?id=9" target="_blank">其他护理</a></p>
                <dl>
                                    <dd><a href="category.php?id=33" target="_blank">护唇</a></dd>
                                    <dd><a href="category.php?id=34" target="_blank">喷雾</a></dd>
                                    <dd><a href="category.php?id=35" target="_blank">啫喱</a></dd>
                                    <dd><a href="category.php?id=36" target="_blank">角质按摩</a></dd>
                                    <dd><a href="category.php?id=37" target="_blank">祛痘祛斑</a></dd>
                                    <dd><a href="category.php?id=38" target="_blank">T区护理</a></dd>
                                    <dd><a href="category.php?id=39" target="_blank">颈霜</a></dd>
                                    <dd><a href="category.php?id=40" target="_blank">保健食品</a></dd>
                  				  <div class="blank"></div>
                </dl>
              </div>
			                   <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="category.php?id=11" target="_blank">护肤套装</a></p>
                <dl>
                                    <dd><a href="category.php?id=41" target="_blank">美白</a></dd>
                                    <dd><a href="category.php?id=42" target="_blank">保湿</a></dd>
                                    <dd><a href="category.php?id=43" target="_blank">嫩肤</a></dd>
                                    <dd><a href="category.php?id=44" target="_blank">补水</a></dd>
                                    <dd><a href="category.php?id=45" target="_blank">紧致去皱</a></dd>
                  				  <div class="blank"></div>
                </dl>
              </div>
			                 </div>
			
            <div class="leftSubNav_list_right">
              <dl>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=1" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385070574091897739.jpg" alt="兰蔻 (6)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=2" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385070660861937745.jpg" alt="雅诗兰黛 (3)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=7" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385071326106067039.jpg" alt="倩碧 (2)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=12" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385071484398955050.jpg" alt="娇兰 (3)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=13" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385071888294863849.jpg" alt="雅顿 (2)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=14" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385071998799359953.jpg" alt="迪奥 (2)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=15" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385072100245819895.jpg" alt="茱莉蔻 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=16" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385072216409455201.jpg" alt="我的美白日记 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=17" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385072323411408978.jpg" alt="美体小铺 (2)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=18" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385076231378742775.jpg" alt="碧欧泉 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=23" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385076375210486006.jpg" alt="欧莱雅 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=24" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385078397715580649.jpg" alt="思亲肤 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=32" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385079115095792076.jpg" alt="娇韵诗 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=33" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385079318413536424.jpg" alt="资生堂 (2)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=34" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385079568646758244.jpg" alt="菲诗小铺 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=36" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385080502608521813.jpg" alt="高丝 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=41" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385662855656952777.jpg" alt="兰芝 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=44">欧树</a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=45">悠香伊</a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=46">SK-II</a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=47">姗娜</a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=48">韩国思美兰</a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=49">佰草集</a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=50">瑞尔薇黛</a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=51">和汉方</a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=52">可莱丝</a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=53">泊美</a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=54">欧珀莱</a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=55">丝塔芙</a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=56">植村秀</a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=57">婵真</a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=58">嘉娜宝</a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=59">英国AA网</a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=60">雅漾</a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=61">契尔氏</a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=62">彼得罗夫</a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=63">希思黎</a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=64">DHC</a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=65">JUJU</a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=66">理肤泉</a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=67">蓓丽</a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=68">曼秀雷敦</a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=69">肌研</a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=6&amp;brand=70">玫琳凯</a>
                                  </dd>
                              </dl>
              
            </div>
          </div>
       
         
        </div>
		<div class="blank"></div>
            </li>
                        <li>
              <p class="leftNav_p03"><a class="a1" href="category.php?id=12" title="男士">男士</a></p>
              <div class="childer_hide" >
                                                <a href="category.php?id=67" target="_blank">洁面</a>
                                <a href="category.php?id=68" target="_blank">爽肤</a>
                                <a href="category.php?id=69" target="_blank">乳液</a>
                                <a href="category.php?id=70" target="_blank">眼霜</a>
                                <a href="category.php?id=71" target="_blank">精华</a>
                                <a href="category.php?id=72" target="_blank">面霜</a>
                                <a href="category.php?id=73" target="_blank">面膜</a>
                                                                <a href="category.php?id=74" target="_blank">沐浴</a>
                                <a href="category.php?id=75" target="_blank">清洁</a>
                                <a href="category.php?id=76" target="_blank">香体喷雾</a>
                                <a href="category.php?id=77" target="_blank">阿迪达斯</a>
                                                                <a href="category.php?id=78" target="_blank">防晒</a>
                                <a href="category.php?id=79" target="_blank">剃须</a>
                                <a href="category.php?id=80" target="_blank">BB霜</a>
                                                                <a href="category.php?id=81" target="_blank">保湿</a>
                                <a href="category.php?id=82" target="_blank">活肤</a>
                                <a href="category.php?id=83" target="_blank">兰芝</a>
                                <a href="category.php?id=84" target="_blank">欧莱雅</a>
                                <a href="category.php?id=85" target="_blank">碧欧泉</a>
                                              </div>
			  <div class="J_arrowBtn" style="top: 19px; display: block;"></div>
			  <div class="leftSubNav" id="J_subCata" style="opacity: 1; left: 220px; display: block; top: 0px;">
        
          <div class="leftSubNav_list" >
            <div class="leftSubNav_left">
			                        <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="category.php?id=14" target="_blank">面部护理</a></p>
                <dl>
                                    <dd><a href="category.php?id=67" target="_blank">洁面</a></dd>
                                    <dd><a href="category.php?id=68" target="_blank">爽肤</a></dd>
                                    <dd><a href="category.php?id=69" target="_blank">乳液</a></dd>
                                    <dd><a href="category.php?id=70" target="_blank">眼霜</a></dd>
                                    <dd><a href="category.php?id=71" target="_blank">精华</a></dd>
                                    <dd><a href="category.php?id=72" target="_blank">面霜</a></dd>
                                    <dd><a href="category.php?id=73" target="_blank">面膜</a></dd>
                  				  <div class="blank"></div>
                </dl>
              </div>
			                   <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="category.php?id=15" target="_blank">身体护理</a></p>
                <dl>
                                    <dd><a href="category.php?id=74" target="_blank">沐浴</a></dd>
                                    <dd><a href="category.php?id=75" target="_blank">清洁</a></dd>
                                    <dd><a href="category.php?id=76" target="_blank">香体喷雾</a></dd>
                                    <dd><a href="category.php?id=77" target="_blank">阿迪达斯</a></dd>
                  				  <div class="blank"></div>
                </dl>
              </div>
			                   <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="category.php?id=13" target="_blank">其他护理</a></p>
                <dl>
                                    <dd><a href="category.php?id=78" target="_blank">防晒</a></dd>
                                    <dd><a href="category.php?id=79" target="_blank">剃须</a></dd>
                                    <dd><a href="category.php?id=80" target="_blank">BB霜</a></dd>
                  				  <div class="blank"></div>
                </dl>
              </div>
			                   <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="category.php?id=46" target="_blank">男士套装</a></p>
                <dl>
                                    <dd><a href="category.php?id=81" target="_blank">保湿</a></dd>
                                    <dd><a href="category.php?id=82" target="_blank">活肤</a></dd>
                                    <dd><a href="category.php?id=83" target="_blank">兰芝</a></dd>
                                    <dd><a href="category.php?id=84" target="_blank">欧莱雅</a></dd>
                                    <dd><a href="category.php?id=85" target="_blank">碧欧泉</a></dd>
                  				  <div class="blank"></div>
                </dl>
              </div>
			                 </div>
			
            <div class="leftSubNav_list_right">
              <dl>
                                <dd>
                                    <a href="category.php?id=12&amp;brand=1" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385070660861937745.jpg" alt="兰蔻 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=12&amp;brand=7" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385072323411408978.jpg" alt="倩碧 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=12&amp;brand=18" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385076231378742775.jpg" alt="碧欧泉 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=12&amp;brand=23" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385079115095792076.jpg" alt="欧莱雅 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=12&amp;brand=33" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385079318413536424.jpg" alt="资生堂 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=12&amp;brand=34" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385080175714409282.jpg" alt="菲诗小铺 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=12&amp;brand=40" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385080502608521813.jpg" alt="阿迪达斯 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=12&amp;brand=41" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385080599437329243.jpg" alt="兰芝 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=12&amp;brand=42" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385080708963724707.jpg" alt="科颜氏 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=12&amp;brand=43">阿玛尼</a>
                                  </dd>
                              </dl>
              
            </div>
          </div>
       
         
        </div>
		<div class="blank"></div>
            </li>
                        <li>
              <p class="leftNav_p04"><a class="a1" href="category.php?id=16" title="香氛">香氛</a></p>
              <div class="childer_hide" >
                                                <a href="category.php?id=90" target="_blank">淡香</a>
                                <a href="category.php?id=91" target="_blank">花香调</a>
                                <a href="category.php?id=92" target="_blank">迪奥</a>
                                <a href="category.php?id=93" target="_blank">安娜苏</a>
                                <a href="category.php?id=94" target="_blank">菲拉格慕</a>
                                                                <a href="category.php?id=95" target="_blank">淡香</a>
                                <a href="category.php?id=96" target="_blank">海洋香调</a>
                                <a href="category.php?id=97" target="_blank">博柏利</a>
                                <a href="category.php?id=98" target="_blank">宝格丽</a>
                                <a href="category.php?id=99" target="_blank">阿迪达斯</a>
                                                                <a href="category.php?id=100" target="_blank">淡香</a>
                                <a href="category.php?id=101" target="_blank">花果香调</a>
                                <a href="category.php?id=102" target="_blank">爱马仕</a>
                                <a href="category.php?id=103" target="_blank">凯文克莱</a>
                                                                <a href="category.php?id=104" target="_blank">淡香</a>
                                <a href="category.php?id=105" target="_blank">香体</a>
                                <a href="category.php?id=106" target="_blank">花香调</a>
                                <a href="category.php?id=107" target="_blank">花果香调</a>
                                <a href="category.php?id=108" target="_blank">草木香调</a>
                                              </div>
			  <div class="J_arrowBtn" style="top: 19px; display: block;"></div>
			  <div class="leftSubNav" id="J_subCata" style="opacity: 1; left: 220px; display: block; top: 0px;">
        
          <div class="leftSubNav_list" >
            <div class="leftSubNav_left">
			                        <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="category.php?id=86" target="_blank">女士香水</a></p>
                <dl>
                                    <dd><a href="category.php?id=90" target="_blank">淡香</a></dd>
                                    <dd><a href="category.php?id=91" target="_blank">花香调</a></dd>
                                    <dd><a href="category.php?id=92" target="_blank">迪奥</a></dd>
                                    <dd><a href="category.php?id=93" target="_blank">安娜苏</a></dd>
                                    <dd><a href="category.php?id=94" target="_blank">菲拉格慕</a></dd>
                  				  <div class="blank"></div>
                </dl>
              </div>
			                   <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="category.php?id=87" target="_blank">男士香水</a></p>
                <dl>
                                    <dd><a href="category.php?id=95" target="_blank">淡香</a></dd>
                                    <dd><a href="category.php?id=96" target="_blank">海洋香调</a></dd>
                                    <dd><a href="category.php?id=97" target="_blank">博柏利</a></dd>
                                    <dd><a href="category.php?id=98" target="_blank">宝格丽</a></dd>
                                    <dd><a href="category.php?id=99" target="_blank">阿迪达斯</a></dd>
                  				  <div class="blank"></div>
                </dl>
              </div>
			                   <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="category.php?id=88" target="_blank">中性香水</a></p>
                <dl>
                                    <dd><a href="category.php?id=100" target="_blank">淡香</a></dd>
                                    <dd><a href="category.php?id=101" target="_blank">花果香调</a></dd>
                                    <dd><a href="category.php?id=102" target="_blank">爱马仕</a></dd>
                                    <dd><a href="category.php?id=103" target="_blank">凯文克莱</a></dd>
                  				  <div class="blank"></div>
                </dl>
              </div>
			                   <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="category.php?id=89" target="_blank">香水套装</a></p>
                <dl>
                                    <dd><a href="category.php?id=104" target="_blank">淡香</a></dd>
                                    <dd><a href="category.php?id=105" target="_blank">香体</a></dd>
                                    <dd><a href="category.php?id=106" target="_blank">花香调</a></dd>
                                    <dd><a href="category.php?id=107" target="_blank">花果香调</a></dd>
                                    <dd><a href="category.php?id=108" target="_blank">草木香调</a></dd>
                  				  <div class="blank"></div>
                </dl>
              </div>
			                 </div>
			
            <div class="leftSubNav_list_right">
              <dl>
                                <dd>
                                    <a href="category.php?id=16&amp;brand=12" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385071484398955050.jpg" alt="娇兰 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=16&amp;brand=13" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385071888294863849.jpg" alt="雅顿 (2)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=16&amp;brand=14" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385075349519828204.jpg" alt="迪奥 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=16&amp;brand=20" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385076800385519114.jpg" alt="安娜苏 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=16&amp;brand=26" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385076915245433330.jpg" alt="博柏利 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=16&amp;brand=27" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385077155008131442.jpg" alt="大卫杜夫 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=16&amp;brand=28" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385077477188890125.jpg" alt="马克.雅克布 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=16&amp;brand=29" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385077604377412545.jpg" alt="菲拉格慕 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=16&amp;brand=30" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385077748974263151.jpg" alt="范思哲 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=16&amp;brand=31">凯文克莱</a>
                                  </dd>
                              </dl>
              
            </div>
          </div>
       
         
        </div>
		<div class="blank"></div>
            </li>
                        <li>
              <p class="leftNav_p05"><a class="a1" href="category.php?id=17" title="身体护理">身体护理</a></p>
              <div class="childer_hide" >
                                                <a href="category.php?id=113" target="_blank">沐浴</a>
                                <a href="category.php?id=114" target="_blank">脱毛</a>
                                <a href="category.php?id=115" target="_blank">手足护理</a>
                                <a href="category.php?id=116" target="_blank">香体止汗</a>
                                <a href="category.php?id=117" target="_blank">其他护理</a>
                                                                <a href="category.php?id=118" target="_blank">丰胸塑臀</a>
                                <a href="category.php?id=119" target="_blank">纤体瘦身</a>
                                <a href="category.php?id=120" target="_blank">精油护理</a>
                                                                <a href="category.php?id=121" target="_blank">洗发</a>
                                <a href="category.php?id=122" target="_blank">护发</a>
                                <a href="category.php?id=123" target="_blank">染发</a>
                                <a href="category.php?id=124" target="_blank">焗油</a>
                                <a href="category.php?id=125" target="_blank">美发造型</a>
                                                                <a href="category.php?id=126" target="_blank">保湿</a>
                                <a href="category.php?id=127" target="_blank">沐浴</a>
                                <a href="category.php?id=128" target="_blank">护发养发</a>
                                <a href="category.php?id=129" target="_blank">美体套装</a>
                                              </div>
			  <div class="J_arrowBtn" style="top: 19px; display: block;"></div>
			  <div class="leftSubNav" id="J_subCata" style="opacity: 1; left: 220px; display: block; top: 0px;">
        
          <div class="leftSubNav_list" >
            <div class="leftSubNav_left">
			                        <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="category.php?id=109" target="_blank">身体护理</a></p>
                <dl>
                                    <dd><a href="category.php?id=113" target="_blank">沐浴</a></dd>
                                    <dd><a href="category.php?id=114" target="_blank">脱毛</a></dd>
                                    <dd><a href="category.php?id=115" target="_blank">手足护理</a></dd>
                                    <dd><a href="category.php?id=116" target="_blank">香体止汗</a></dd>
                                    <dd><a href="category.php?id=117" target="_blank">其他护理</a></dd>
                  				  <div class="blank"></div>
                </dl>
              </div>
			                   <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="category.php?id=110" target="_blank">丰胸瘦身</a></p>
                <dl>
                                    <dd><a href="category.php?id=118" target="_blank">丰胸塑臀</a></dd>
                                    <dd><a href="category.php?id=119" target="_blank">纤体瘦身</a></dd>
                                    <dd><a href="category.php?id=120" target="_blank">精油护理</a></dd>
                  				  <div class="blank"></div>
                </dl>
              </div>
			                   <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="category.php?id=111" target="_blank">美发护发</a></p>
                <dl>
                                    <dd><a href="category.php?id=121" target="_blank">洗发</a></dd>
                                    <dd><a href="category.php?id=122" target="_blank">护发</a></dd>
                                    <dd><a href="category.php?id=123" target="_blank">染发</a></dd>
                                    <dd><a href="category.php?id=124" target="_blank">焗油</a></dd>
                                    <dd><a href="category.php?id=125" target="_blank">美发造型</a></dd>
                  				  <div class="blank"></div>
                </dl>
              </div>
			                   <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="category.php?id=112" target="_blank">洗护套装</a></p>
                <dl>
                                    <dd><a href="category.php?id=126" target="_blank">保湿</a></dd>
                                    <dd><a href="category.php?id=127" target="_blank">沐浴</a></dd>
                                    <dd><a href="category.php?id=128" target="_blank">护发养发</a></dd>
                                    <dd><a href="category.php?id=129" target="_blank">美体套装</a></dd>
                  				  <div class="blank"></div>
                </dl>
              </div>
			                 </div>
			
            <div class="leftSubNav_list_right">
              <dl>
                                <dd>
                                    <a href="category.php?id=17&amp;brand=15" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385072216409455201.jpg" alt="茱莉蔻 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=17&amp;brand=17" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385078397715580649.jpg" alt="美体小铺 (2)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=17&amp;brand=32" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385079115095792076.jpg" alt="娇韵诗 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=17&amp;brand=33" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385079318413536424.jpg" alt="资生堂 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=17&amp;brand=34" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385079444533254362.jpg" alt="菲诗小铺 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=17&amp;brand=35" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385079568646758244.jpg" alt="多芬 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=17&amp;brand=36" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385079676209216392.jpg" alt="高丝 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=17&amp;brand=37" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385079770833052568.jpg" alt="NYR (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=17&amp;brand=38" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1385079890162676741.jpg" alt="露得清 (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="category.php?id=17&amp;brand=39">魅力匙</a>
                                  </dd>
                              </dl>
              
            </div>
          </div>
       
         
        </div>
		<div class="blank"></div>
            </li>
                        <li>
              <p class="leftNav_p06"><a class="a1" href="category.php?id=18" title="美容工具">美容工具</a></p>
              <div class="childer_hide" >
                                                <a href="category.php?id=134" target="_blank">美甲工具</a>
                                <a href="category.php?id=135" target="_blank">瘦身纤体</a>
                                                                <a href="category.php?id=136" target="_blank">化妆镜</a>
                                <a href="category.php?id=137" target="_blank">辅助化妆</a>
                                <a href="category.php?id=138" target="_blank">定妆</a>
                                <a href="category.php?id=139" target="_blank">艾黛儿</a>
                                                                <a href="category.php?id=140" target="_blank">护发养发</a>
                                <a href="category.php?id=141" target="_blank">发型定型</a>
                                                                <a href="category.php?id=142" target="_blank">收纳</a>
                                <a href="category.php?id=143" target="_blank">化妆包</a>
                                <a href="category.php?id=144" target="_blank">雅诗兰黛</a>
                                              </div>
			  <div class="J_arrowBtn" style="top: 19px; display: block;"></div>
			  <div class="leftSubNav" id="J_subCata" style="opacity: 1; left: 220px; display: block; top: 0px;">
        
          <div class="leftSubNav_list" >
            <div class="leftSubNav_left">
			                        <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="category.php?id=130" target="_blank">美体工具</a></p>
                <dl>
                                    <dd><a href="category.php?id=134" target="_blank">美甲工具</a></dd>
                                    <dd><a href="category.php?id=135" target="_blank">瘦身纤体</a></dd>
                  				  <div class="blank"></div>
                </dl>
              </div>
			                   <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="category.php?id=131" target="_blank">化妆工具</a></p>
                <dl>
                                    <dd><a href="category.php?id=136" target="_blank">化妆镜</a></dd>
                                    <dd><a href="category.php?id=137" target="_blank">辅助化妆</a></dd>
                                    <dd><a href="category.php?id=138" target="_blank">定妆</a></dd>
                                    <dd><a href="category.php?id=139" target="_blank">艾黛儿</a></dd>
                  				  <div class="blank"></div>
                </dl>
              </div>
			                   <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="category.php?id=132" target="_blank">美发工具</a></p>
                <dl>
                                    <dd><a href="category.php?id=140" target="_blank">护发养发</a></dd>
                                    <dd><a href="category.php?id=141" target="_blank">发型定型</a></dd>
                  				  <div class="blank"></div>
                </dl>
              </div>
			                   <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="category.php?id=133" target="_blank">日用收纳</a></p>
                <dl>
                                    <dd><a href="category.php?id=142" target="_blank">收纳</a></dd>
                                    <dd><a href="category.php?id=143" target="_blank">化妆包</a></dd>
                                    <dd><a href="category.php?id=144" target="_blank">雅诗兰黛</a></dd>
                  				  <div class="blank"></div>
                </dl>
              </div>
			                 </div>
			
            <div class="leftSubNav_list_right">
              <dl>
                              </dl>
              
            </div>
          </div>
       
         
        </div>
		<div class="blank"></div>
            </li>
                      </ul>
        </div>
        
        
      </div>
      
      
      
      
      
      </div>
      <div class="subNav">
        <ul>
          <li  class="current"> <a href="index.php">首页</a></li>
                    <li ><a href="category.php?id=3" >彩妆套装</a>
          <div class='sub_nav'>
<dl>
<dd>
<a class="t" href="category.php?id=56">眼影</a>
</dd>
<dd>
<a class="t" href="category.php?id=57">修容</a>
</dd>
<dd>
<a class="t" href="category.php?id=58">润唇</a>
</dd>
<dd>
<a class="t" href="category.php?id=59">卸妆</a>
</dd>
<dd>
<a class="t" href="category.php?id=60">浓密卷翘</a>
</dd>
</dl>
</div>
          
          </li>
                    <li ><a href="category.php?id=5" >眼部彩妆</a>
          <div class='sub_nav'>
<dl>
<dd>
<a class="t" href="category.php?id=47">眼线</a>
</dd>
<dd>
<a class="t" href="category.php?id=48">眼影</a>
</dd>
<dd>
<a class="t" href="category.php?id=49">睫毛</a>
</dd>
<dd>
<a class="t" href="category.php?id=50">眉粉眉笔</a>
</dd>
</dl>
</div>
          
          </li>
                    <li ><a href="category.php?id=6" >护肤</a>
          <div class='sub_nav'>
<dl>
<dd>
<a class="t" href="category.php?id=7">面部护理</a>
</dd>
<dd>
<a class="t" href="category.php?id=8">眼部护理</a>
</dd>
<dd>
<a class="t" href="category.php?id=9">其他护理</a>
</dd>
<dd>
<a class="t" href="category.php?id=11">护肤套装</a>
</dd>
</dl>
</div>
          
          </li>
                    <li ><a href="group_buy.php" >团购商品</a>
                    
          </li>
                  </ul>
      </div>
      <div class="rightNav">
        <ul>
          <li><a href="#">正在购买</a></li>
          <li><a href="#">帮助中心</a></li>
        </ul>
      </div>
    </div>
  </div>
</div> <script type="text/javascript" src="js/magiczoom.js"></script><script type="text/javascript" src="js/miqi_goods.js"></script><script type="text/javascript" src="js/magiczoomplus.js"></script> 
<script>
$(function(){
	/*放大镜缩略图左右切换效果*/
	$("#detail_img_slider").slide({
			mainCell:"#J_tabSlider ul",
			vis:5,
			prevCell:".pre_btn",
			nextCell:".next_btn",
			effect:"leftLoop"
	})
	/*放大镜缩略图点击选中效果*/
	$("#J_tabSlider ul li a").click(function(){
		$("#J_tabSlider ul li").removeClass("cur");
		$(this).parent().addClass("cur");
	})	
})
</script>
<div class="content_title">
  <div class="block">
    <div id="ur_here"> <span>当前位置:</span> <a href=".">首页</a> <code>&gt;</code> <a href="category.php?id=17">身体护理</a> <code>&gt;</code> ewewe </div>
  </div>
</div>
<div class="content_detailed">
  <div class="contentBody" >
    <div class="mainBody">
      <div id="goodsInfo" class="clearfix">
       <div class="mod_picfold clearfix">
  <div id="detail_main_img" class="imgbox">
    <div class="layout_wrap">
      <div class="prodimg"  title="ewewe">  <a href="images/201501/goods_img/147_P_1420976327436.gif" class="MagicZoomPlus" id="Zoomer" rel="hint-text: ; selectors-effect: false; selectors-class: on; zoom-distance: 22;zoom-width: 450; zoom-height: 450;" onclick="window.open('gallery.php?id=147'); return false;"><img id="J_prodImg" src="images/201501/goods_img/147_G_1420976327287.jpg" alt="ewewe" /></a></div>
      <div class="tabbox clearfix">
        <div id="detail_img_slider" class="imgtab">
          <div class="imgtab_clip" id="J_tabSlider">
            <ul class="imgtab_con">
               
                            <li class="cur"> <a href="images/201501/goods_img/147_P_1420976327436.gif" rel="zoom-id: Zoomer" rev="images/201501/goods_img/147_P_1420976327436.gif"><img src="images/201501/thumb_img/147_thumb_P_1420976327116.jpg" alt="ewewe"></a> </li>
                            <li > <a href="images/201501/goods_img/147_P_1420976360586.jpg" rel="zoom-id: Zoomer" rev="images/201501/goods_img/147_P_1420976360586.jpg"><img src="images/201501/thumb_img/147_thumb_P_1420976360097.jpg" alt="ewewe"></a> </li>
               
                          </ul>
          </div>
          <div id="detail_imgNextOrPreBtnDiv" class="imgtab_trrigle"> <a href="javascript:void(0);" class="pre_btn"> << </a> <a href="javascript:void(0);" class="next_btn"> >></a> </div>
        </div>
      </div>
    </div>
  </div>
</div> 
        
        <div class="textInfo">
          <form action="javascript:addToCart(147)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
            <div class="center_title"><a>ewewe</a></div>
            <div class="detail_center">
              <div class="center_txt">
                <div class="center_text"> 
                   
                  
                   
                  
                   
                  
                   
                  
                   
                  
                  
                  <p style="display:none" > 商品点击数：1 </p>
                  <p> 
                    
                     
                    市场价：￥<span>0</span> 
                     
                  </p>
                  <b> 
                   
                  <font  id="ECS_SHOPPRICE"></font> </b>
                  <p style="display:none" > 
                     
                    注册用户：<font  id="ECS_RANKPRICE_1">￥<span>0</span></font> 
                     
                    vip：<font  id="ECS_RANKPRICE_2">￥<span>0</span></font> 
                     
                    微信用户：<font  id="ECS_RANKPRICE_99">￥<span>0</span></font> 
                     
                  </p>
                  <p>节&nbsp;&nbsp;&nbsp;省：¥（折）</p>
                  <p>已售出： <span style="color: #4c4c4c;">0件</span></p>
                  <p style="display:none"> 用户评价： <img src="themes/miqinew/images/stars5.gif" alt="comment rank 5" /> </p>
                  
                   
      			<div class="clearfix"></div>
                                    <p style="display:none" > 商品总价：<font id="ECS_GOODS_AMOUNT" class="shop"></font> </p>
                  <p style="display:none"> 
                     
                    
                  </p>
                   
                </div>
              </div>
              
              
                     
                    
              <div class="center_txt clearfix"> 
                
                                <p style="display:none"><strong>购买此商品可使用：</strong><font class="f4">0 积分</font></p>
                 
                
                 
                   
                
                 
               
                
                
                
                <div class="center_add">
                  <div class="center_add_left"> <a onclick="buyNumber.minus()" href="javascript:;"><img src="themes/miqinew/images/jian.gif" ></a>
                    <input name="number" type="text" value="1" defaultnumber="1" onblur="changePrice()" id="product_num">
					<a onclick="buyNumber.plus()" href="javascript:;"><img src="themes/miqinew/images/jia.gif" /></a></div>
                  <p> 
                    
                     
                    商品库存：                    1000  
                     
                    
                    </p>
                </div>
                <script>
                       
                                // add by liuguichun 2011-7-19
                                var buyNumber = {
                                    maxNumber : 100,
                                    minNumber : 1,
                                    defaultNumber : function(){
                                        var defaultnumber = $('#product_num').attr('defaultnumber');
                                        defaultnumber = parseInt(defaultnumber)
                                        if(defaultnumber < 1){
                                            defaultnumber = 1;
                                        }
                                        return defaultnumber;
                                    },
                                                                                                                                    
                                    goodNumber : function(num){
                                        if(typeof(num) == 'number'){
                                            return $('#product_num').val(num);
                                        }else{
                                            return parseInt($('#product_num').val());
                                        }
                                                                                                                                        
                                    },
                                    plus : function(){
                                        var num = buyNumber.goodNumber() + buyNumber.defaultNumber();
                                        if(num <= buyNumber.maxNumber){
                                            buyNumber.goodNumber(num);
                                        }
                                    },
                                    minus : function(){
                                        var num = buyNumber.goodNumber() - buyNumber.defaultNumber();
                                        if(num >= buyNumber.minNumber){
                                            buyNumber.goodNumber(num);
                                        }
                                    }
                                                                                                                                    
                                }
                            </script>
                <div class="center_btn">
                  <div class="center_shop_btn"> <a href="javascript:addToCartShowDiv(147)"></a> </div>
                  <div class="center_collect_btn"> <a href="javascript:collect(147)">收藏该商品</a> </div>
                   <div class="center_collect_help">
                    <p><a href="#">享受MECLUB会员特权</a></p>
                    <div class="center_collect_pop" > <b>如何成为VIP </b>
                      <p>会员终身制，永不降级!</p>
                      <div class="center_collect_table">
                        <table>
                          <tbody>
                            <tr>
                              <th>等级</th>
                              <th>单笔 / 累计</th>
                              <th>积分</th>
                            </tr>
                            <tr>
                              <td>VIP</td>
                              <td>500元</td>
                              <td>1.5倍</td>
                            </tr>
                            <tr>
                              <td>AVIP</td>
                              <td>1000元</td>
                              <td>2倍</td>
                            </tr>
                            <tr>
                              <td>SVIP</td>
                              <td>3000元</td>
                              <td>2倍</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <p><span>更多尊享特权，点击</span><a href="#">查看详情</a></p>
                    </div>
                  </div>                  
                </div>
                <div class="center_pop" id="addtocartdialog" style="display:none;">
               <div class="center_pop_close"><a href="javascript:void(0)"></a></div>
              <div class="center_pop_txt">
    
              </div>
<div class="center_pop_btn">
    <a href="flow.php"></a>
</div>
                            
                        </div>
                
              </div>
              <div class="center_bottom">
				
<div class="bdsharebuttonbox" data-tag="share_1">
	<a class="bds_mshare" data-cmd="mshare"></a>
	<a class="bds_qzone" data-cmd="qzone" href="#"></a>
	<a class="bds_tsina" data-cmd="tsina"></a>
	<a class="bds_baidu" data-cmd="baidu"></a>
	<a class="bds_renren" data-cmd="renren"></a>
	<a class="bds_tqq" data-cmd="tqq"></a>
	<a class="bds_more" data-cmd="more">更多</a>
	<a class="bds_count" data-cmd="count"></a>
</div>
<script>
	window._bd_share_config = {
		common : {
			bdText : '',	
			bdDesc : '',	
			bdUrl : '', 	
		},
		share : [{
			"bdSize" : 16
		}],
		slide : [{	   
			bdImg : 0,
			bdPos : "right",
			bdTop : 100
		}],
		image : [{
			viewType : 'list',
			viewPos : 'top',
			viewColor : 'black',
			viewSize : '16',
			viewList : ['qzone','tsina','huaban','tqq','renren']
		}],
		selectShare : [{
			"bdselectMiniList" : ['qzone','tqq','kaixin001','bdxc','tqf']
		}]
	}
	with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion='+~(-new Date()/36e5)];
</script>
					
					
					
              </div>
            </div>
			
            <div class="detail_logo">
              <div class="detail_logo_img"> <a target="_blank" href=""></a> </div>
              <div class="detail_logo_txt">
                <p></p>
              </div>
              <div class="detail_logo_btn"> <a href="" >进入品牌专柜</a> </div>
            </div>
          </form>
        </div>
      </div>
      <div class="blank"></div>
    </div>
  </div>
  <div class="blank5"></div>
  <div class="detail_middle ">
    <div class="block clearfix"> 
      
      <div class="AreaL" style=" width:275px"> 
         <div class=" top_10_goods lshadow">
  <h2 class="mall_leftTitle c333">同类热销排行</h2>
  <div class="boxCenterList2"> 
     
    
    <ul
  
    
    style=" border-bottom:1px solid #F2F2F2; " 
     
    
    class="clearfix ul_list"  id=top1s1 onMouseOver="show_goodspic(1,'top1')">
    <div class="iteration2" > 1 </div>
    <li   class="iteration1" > <a href="goods.php?id=1" title="" style="float:left">希思黎轻柔护肤西柚柔肤水250ml</a>
    </li>
    </ul>
    <ul 
  
    
    style=" border-bottom:1px solid #F2F2F2; " 
     
    
    class="clearfix ul_box"  id=top1b1 >
    <div class="iteration"> 1 </div>
    <div class="rank_txt"><a href="goods.php?id=1" title="">希思黎轻柔护肤西柚柔肤水250ml</a></div>
    <div class="rank_img " > <a href="goods.php?id=1"><img src="images/201311/thumb_img/1_thumb_G_1384988540522.gif" alt=""  width="85" height="85" /></a> </div>
    <li  class="iteration1"  >
    
    <div class="rank_text left"  ><p class="rank_price">￥<span>399</span></p> <p class="already_sold">已售出 6 件</p></div>
    </li>
    </ul>
    
     
    
    <ul
  
    
    style=" border-bottom:1px solid #F2F2F2; " 
     
    
    class="clearfix ul_list"  id=top1s2 onMouseOver="show_goodspic(2,'top1')">
    <div class="iteration2" > 2 </div>
    <li   > <a href="goods.php?id=53" title="" style="float:left">迪奥EDP真我女士香水50ml</a>
    </li>
    </ul>
    <ul 
  
    
    style=" border-bottom:1px solid #F2F2F2; " 
     
    
    class="clearfix ul_box"  id=top1b2 >
    <div class="iteration"> 2 </div>
    <div class="rank_txt"><a href="goods.php?id=53" title="">迪奥EDP真我女士香水50ml</a></div>
    <div class="rank_img " > <a href="goods.php?id=53"><img src="images/201311/thumb_img/53_thumb_G_1385077221189.jpg" alt=""  width="85" height="85" /></a> </div>
    <li  >
    
    <div class="rank_text left"  ><p class="rank_price">￥<span>679</span></p> <p class="already_sold">已售出 4 件</p></div>
    </li>
    </ul>
    
     
    
    <ul
  
    
    style=" border-bottom:1px solid #F2F2F2; " 
     
    
    class="clearfix ul_list"  id=top1s3 onMouseOver="show_goodspic(3,'top1')">
    <div class="iteration2" > 3 </div>
    <li   > <a href="goods.php?id=9" title="" style="float:left">雅诗兰黛第六代特润精华露50ml</a>
    </li>
    </ul>
    <ul 
  
    
    style=" border-bottom:1px solid #F2F2F2; " 
     
    
    class="clearfix ul_box"  id=top1b3 >
    <div class="iteration"> 3 </div>
    <div class="rank_txt"><a href="goods.php?id=9" title="">雅诗兰黛第六代特润精华露50ml</a></div>
    <div class="rank_img " > <a href="goods.php?id=9"><img src="images/201311/thumb_img/9_thumb_G_1384987018566.gif" alt=""  width="85" height="85" /></a> </div>
    <li  >
    
    <div class="rank_text left"  ><p class="rank_price">￥<span>669</span></p> <p class="already_sold">已售出 3 件</p></div>
    </li>
    </ul>
    
     
    
    <ul
  
    
    style=" border-bottom:1px solid #F2F2F2; " 
     
    
    class="clearfix ul_list"  id=top1s4 onMouseOver="show_goodspic(4,'top1')">
    <div class="iteration2" > 4 </div>
    <li   > <a href="goods.php?id=123" title="" style="float:left">迪奥红毒女士香水EDT 50ml</a>
    </li>
    </ul>
    <ul 
  
    
    style=" border-bottom:1px solid #F2F2F2; " 
     
    
    class="clearfix ul_box"  id=top1b4 >
    <div class="iteration"> 4 </div>
    <div class="rank_txt"><a href="goods.php?id=123" title="">迪奥红毒女士香水EDT 50ml</a></div>
    <div class="rank_img " > <a href="goods.php?id=123"><img src="images/201312/thumb_img/123_thumb_G_1385947952157.jpg" alt=""  width="85" height="85" /></a> </div>
    <li  >
    
    <div class="rank_text left"  ><p class="rank_price">￥<span>459</span></p> <p class="already_sold">已售出 2 件</p></div>
    </li>
    </ul>
    
     
    
    <ul
  
    
    
    class="clearfix ul_list"  id=top1s5 onMouseOver="show_goodspic(5,'top1')">
    <div class="iteration2" > 5 </div>
    <li   > <a href="goods.php?id=57" title="" style="float:left">凯文克莱BE中性香水200ml</a>
    </li>
    </ul>
    <ul 
  
    
    
    class="clearfix ul_box"  id=top1b5 >
    <div class="iteration"> 5 </div>
    <div class="rank_txt"><a href="goods.php?id=57" title="">凯文克莱BE中性香水200ml</a></div>
    <div class="rank_img " > <a href="goods.php?id=57"><img src="images/201311/thumb_img/57_thumb_G_1385077699842.jpg" alt=""  width="85" height="85" /></a> </div>
    <li  >
    
    <div class="rank_text left"  ><p class="rank_price">￥<span>259</span></p> <p class="already_sold">已售出 2 件</p></div>
    </li>
    </ul>
    
     
    <SCRIPT type=text/javascript> window.onload = show_goodspic(1,'top1');</SCRIPT> 
  </div>
</div>  <div class="user_loves lshadow">
 <h2 class="mall_leftTitle c333">同品牌产品推荐</h2>
     <ul class="pro_list">
  
           <li >
           <a href="goods.php?id=123" class="pro_pic"><img src="images/201312/thumb_img/123_thumb_G_1385947952157.jpg" alt="迪奥红毒女士香水EDT 50ml"  width="120" height="120" /></a><br />
           <a href="goods.php?id=123" title="迪奥红毒女士香水EDT 50ml" class="pro_title">迪奥红毒女士香水EDT 50ml</a>
            <p class="already_sold">已售出 2 件</p>
             <p class="pro_price">
              <a  href="goods.php?id=123" >
                        <font class="shop_s">￥<span>400</span></font>
                        </a>
            </p>
        </li>
           <li >
           <a href="goods.php?id=90" class="pro_pic"><img src="images/201311/thumb_img/90_thumb_G_1385663078304.jpg" alt="迪奥雪晶灵透白亮采洁面泡沫110ml"  width="120" height="120" /></a><br />
           <a href="goods.php?id=90" title="迪奥雪晶灵透白亮采洁面泡沫110ml" class="pro_title">迪奥雪晶灵透白亮采洁面泡沫110ml</a>
            <p class="already_sold">已售出 0 件</p>
             <p class="pro_price">
              <a  href="goods.php?id=90" >
                        <font class="shop_s">￥<span>299</span></font>
                        </a>
            </p>
        </li>
           <li >
           <a href="goods.php?id=53" class="pro_pic"><img src="images/201311/thumb_img/53_thumb_G_1385077221189.jpg" alt=" 迪奥EDP真我女士香水50ml"  width="120" height="120" /></a><br />
           <a href="goods.php?id=53" title=" 迪奥EDP真我女士香水50ml" class="pro_title">迪奥EDP真我女士香水50ml</a>
            <p class="already_sold">已售出 4 件</p>
             <p class="pro_price">
              <a  href="goods.php?id=53" >
                        <font class="shop_s">￥<span>679</span></font>
                        </a>
            </p>
        </li>
           <li >
           <a href="goods.php?id=41" class="pro_pic"><img src="images/201311/thumb_img/41_thumb_G_1385071859480.jpg" alt="迪奥水动力精萃细致美肤露 50ml"  width="120" height="120" /></a><br />
           <a href="goods.php?id=41" title="迪奥水动力精萃细致美肤露 50ml" class="pro_title">迪奥水动力精萃细致美肤露 50ml</a>
            <p class="already_sold">已售出 0 件</p>
             <p class="pro_price">
              <a  href="goods.php?id=41" >
                        <font class="shop_s">￥<span>479</span></font>
                        </a>
            </p>
        </li>
            <div class="more"><a href="brand.php?id=14">更多</a></div>
 </ul>
</div>
<div class="blank5"></div> 
        <div class=" newStarPro  lshadow"  >
          <div class="ff_1">
            <h2 id="ECS_tree1" class=" tabFront" style="">热销排行</h2>
            <h2 id="ECS_tree2" class=" tabBack"  style="">推荐排行</h2>
          </div>
          <div style="clear:both"></div>
          <div class="tab_body">
            <div id="ECS_tree1_BODY"> <div class=" top_10_goods lshadow">
   <div class="boxCenterList2"> 
<ul
  
   
        style=" border-bottom:1px solid #F2F2F2; "
        class="clearfix ul_list"  id=top3s1 onMouseOver="show_goodspic(1,'top3')">
    <div class="iteration2" > 1 </div>
    <li   class="iteration1" > <a href="goods.php?id=19" title="兰蔻精华眼膜霜15ml" style="float:left">兰蔻精华眼膜霜15ml</a>
    </li>
    </ul>
    
     <ul 
  
   
        style=" border-bottom:1px solid #F2F2F2; "
        class="clearfix ul_box"  id=top3b1 >
     <div class="iteration"> 1 </div>
    <div class="rank_txt"><a href="goods.php?id=19" title="兰蔻精华眼膜霜15ml">兰蔻精华眼膜霜15ml</a></div>
    <div class="rank_img " > <a href="goods.php?id=19"><img src="images/201311/thumb_img/19_thumb_G_1384994159077.gif" alt="兰蔻精华眼膜霜15ml"  width="85" height="85"/></a> </div>
    <li  class="iteration1"  >
    <div class="rank_text left"  ><p class="rank_price">￥<span>429</span></p><p class="already_sold">已售出 0 件</p></div>
    </li>
    </ul>
    
<ul
  
   
        style=" border-bottom:1px solid #F2F2F2; "
        class="clearfix ul_list"  id=top3s2 onMouseOver="show_goodspic(2,'top3')">
    <div class="iteration2" > 2 </div>
    <li   > <a href="goods.php?id=116" title="JUJU透明质酸保湿洗面膏120g" style="float:left">JUJU透明质酸保湿洗面膏120g</a>
    </li>
    </ul>
    
     <ul 
  
   
        style=" border-bottom:1px solid #F2F2F2; "
        class="clearfix ul_box"  id=top3b2 >
     <div class="iteration"> 2 </div>
    <div class="rank_txt"><a href="goods.php?id=116" title="JUJU透明质酸保湿洗面膏120g">JUJU透明质酸保湿洗面膏120g</a></div>
    <div class="rank_img " > <a href="goods.php?id=116"><img src="images/201311/thumb_img/116_thumb_G_1385664773753.jpg" alt="JUJU透明质酸保湿洗面膏120g"  width="85" height="85"/></a> </div>
    <li  >
    <div class="rank_text left"  ><p class="rank_price">￥<span>70</span></p><p class="already_sold">已售出 0 件</p></div>
    </li>
    </ul>
    
<ul
  
   
        style=" border-bottom:1px solid #F2F2F2; "
        class="clearfix ul_list"  id=top3s3 onMouseOver="show_goodspic(3,'top3')">
    <div class="iteration2" > 3 </div>
    <li   > <a href="goods.php?id=118" title=" 理肤泉特安洁面乳200ml" style="float:left">理肤泉特安洁面乳200ml</a>
    </li>
    </ul>
    
     <ul 
  
   
        style=" border-bottom:1px solid #F2F2F2; "
        class="clearfix ul_box"  id=top3b3 >
     <div class="iteration"> 3 </div>
    <div class="rank_txt"><a href="goods.php?id=118" title=" 理肤泉特安洁面乳200ml">理肤泉特安洁面乳200ml</a></div>
    <div class="rank_img " > <a href="goods.php?id=118"><img src="images/201311/thumb_img/118_thumb_G_1385664875584.jpg" alt=" 理肤泉特安洁面乳200ml"  width="85" height="85"/></a> </div>
    <li  >
    <div class="rank_text left"  ><p class="rank_price">￥<span>119</span></p><p class="already_sold">已售出 0 件</p></div>
    </li>
    </ul>
    
<ul
  
   
        style=" border-bottom:1px solid #F2F2F2; "
        class="clearfix ul_list"  id=top3s4 onMouseOver="show_goodspic(4,'top3')">
    <div class="iteration2" > 4 </div>
    <li   > <a href="goods.php?id=120" title="曼秀雷敦洁清爽卸妆洁面泡200ml" style="float:left">曼秀雷敦洁清爽卸妆洁面泡200ml</a>
    </li>
    </ul>
    
     <ul 
  
   
        style=" border-bottom:1px solid #F2F2F2; "
        class="clearfix ul_box"  id=top3b4 >
     <div class="iteration"> 4 </div>
    <div class="rank_txt"><a href="goods.php?id=120" title="曼秀雷敦洁清爽卸妆洁面泡200ml">曼秀雷敦洁清爽卸妆洁面泡200ml</a></div>
    <div class="rank_img " > <a href="goods.php?id=120"><img src="images/201311/thumb_img/120_thumb_G_1385665066460.jpg" alt="曼秀雷敦洁清爽卸妆洁面泡200ml"  width="85" height="85"/></a> </div>
    <li  >
    <div class="rank_text left"  ><p class="rank_price">￥<span>49</span></p><p class="already_sold">已售出 0 件</p></div>
    </li>
    </ul>
    
<ul
  
   
        style=" border-bottom:1px solid #F2F2F2; "
        class="clearfix ul_list"  id=top3s5 onMouseOver="show_goodspic(5,'top3')">
    <div class="iteration2" > 5 </div>
    <li   > <a href="goods.php?id=122" title="玫琳凯中性洗面乳绿2号" style="float:left">玫琳凯中性洗面乳绿2号</a>
    </li>
    </ul>
    
     <ul 
  
   
        style=" border-bottom:1px solid #F2F2F2; "
        class="clearfix ul_box"  id=top3b5 >
     <div class="iteration"> 5 </div>
    <div class="rank_txt"><a href="goods.php?id=122" title="玫琳凯中性洗面乳绿2号">玫琳凯中性洗面乳绿2号</a></div>
    <div class="rank_img " > <a href="goods.php?id=122"><img src="images/201311/thumb_img/122_thumb_G_1385665161614.jpg" alt="玫琳凯中性洗面乳绿2号"  width="85" height="85"/></a> </div>
    <li  >
    <div class="rank_text left"  ><p class="rank_price">￥<span>69</span></p><p class="already_sold">已售出 0 件</p></div>
    </li>
    </ul>
    
<ul
  
   
        style=" border-bottom:1px solid #F2F2F2; "
        class="clearfix ul_list"  id=top3s6 onMouseOver="show_goodspic(6,'top3')">
    <div class="iteration2" > 6 </div>
    <li   > <a href="goods.php?id=12" title="雅顿保湿调理露200ml" style="float:left">雅顿保湿调理露200ml</a>
    </li>
    </ul>
    
     <ul 
  
   
        style=" border-bottom:1px solid #F2F2F2; "
        class="clearfix ul_box"  id=top3b6 >
     <div class="iteration"> 6 </div>
    <div class="rank_txt"><a href="goods.php?id=12" title="雅顿保湿调理露200ml">雅顿保湿调理露200ml</a></div>
    <div class="rank_img " > <a href="goods.php?id=12"><img src="images/201311/thumb_img/12_thumb_G_1384995644320.jpg" alt="雅顿保湿调理露200ml"  width="85" height="85"/></a> </div>
    <li  >
    <div class="rank_text left"  ><p class="rank_price">￥<span>78</span></p><p class="already_sold">已售出 0 件</p></div>
    </li>
    </ul>
    
<ul
  
   
        style=" border-bottom:1px solid #F2F2F2; "
        class="clearfix ul_list"  id=top3s7 onMouseOver="show_goodspic(7,'top3')">
    <div class="iteration2" > 7 </div>
    <li   > <a href="goods.php?id=20" title="纪梵希幻影四宫格胭脂21#7g" style="float:left">纪梵希幻影四宫格胭脂21#7g</a>
    </li>
    </ul>
    
     <ul 
  
   
        style=" border-bottom:1px solid #F2F2F2; "
        class="clearfix ul_box"  id=top3b7 >
     <div class="iteration"> 7 </div>
    <div class="rank_txt"><a href="goods.php?id=20" title="纪梵希幻影四宫格胭脂21#7g">纪梵希幻影四宫格胭脂21#7g</a></div>
    <div class="rank_img " > <a href="goods.php?id=20"><img src="images/201311/thumb_img/20_thumb_G_1384994312013.gif" alt="纪梵希幻影四宫格胭脂21#7g"  width="85" height="85"/></a> </div>
    <li  >
    <div class="rank_text left"  ><p class="rank_price">￥<span>259</span></p><p class="already_sold">已售出 0 件</p></div>
    </li>
    </ul>
    
<ul
  
   
        style=" border-bottom:1px solid #F2F2F2; "
        class="clearfix ul_list"  id=top3s8 onMouseOver="show_goodspic(8,'top3')">
    <div class="iteration2" > 8 </div>
    <li   > <a href="goods.php?id=23" title=" 安娜苏魔影幻彩唇膏305#3.4g" style="float:left">安娜苏魔影幻彩唇膏305#3.4g</a>
    </li>
    </ul>
    
     <ul 
  
   
        style=" border-bottom:1px solid #F2F2F2; "
        class="clearfix ul_box"  id=top3b8 >
     <div class="iteration"> 8 </div>
    <div class="rank_txt"><a href="goods.php?id=23" title=" 安娜苏魔影幻彩唇膏305#3.4g">安娜苏魔影幻彩唇膏305#3.4g</a></div>
    <div class="rank_img " > <a href="goods.php?id=23"><img src="images/201311/thumb_img/23_thumb_G_1385075287189.jpg" alt=" 安娜苏魔影幻彩唇膏305#3.4g"  width="85" height="85"/></a> </div>
    <li  >
    <div class="rank_text left"  ><p class="rank_price">￥<span>149</span></p><p class="already_sold">已售出 0 件</p></div>
    </li>
    </ul>
    
<ul
  
   
        style=" border-bottom:1px solid #F2F2F2; "
        class="clearfix ul_list"  id=top3s9 onMouseOver="show_goodspic(9,'top3')">
    <div class="iteration2" > 9 </div>
    <li   > <a href="goods.php?id=24" title="贝玲妃留声机粉底霜9.5g" style="float:left">贝玲妃留声机粉底霜9.5g</a>
    </li>
    </ul>
    
     <ul 
  
   
        style=" border-bottom:1px solid #F2F2F2; "
        class="clearfix ul_box"  id=top3b9 >
     <div class="iteration"> 9 </div>
    <div class="rank_txt"><a href="goods.php?id=24" title="贝玲妃留声机粉底霜9.5g">贝玲妃留声机粉底霜9.5g</a></div>
    <div class="rank_img " > <a href="goods.php?id=24"><img src="images/201311/thumb_img/24_thumb_G_1385074818364.jpg" alt="贝玲妃留声机粉底霜9.5g"  width="85" height="85"/></a> </div>
    <li  >
    <div class="rank_text left"  ><p class="rank_price">￥<span>240</span></p><p class="already_sold">已售出 0 件</p></div>
    </li>
    </ul>
    
<ul
  
   
        class="clearfix ul_list"  id=top3s10 onMouseOver="show_goodspic(10,'top3')">
    <div class="iteration2" > 10 </div>
    <li   > <a href="goods.php?id=5" title="索爱原装M2卡读卡器" style="float:left">索爱原装M2卡读卡器</a>
    </li>
    </ul>
    
     <ul 
  
   
        class="clearfix ul_box"  id=top3b10 >
     <div class="iteration"> 10 </div>
    <div class="rank_txt"><a href="goods.php?id=5" title="索爱原装M2卡读卡器">索爱原装M2卡读卡器</a></div>
    <div class="rank_img " > <a href="goods.php?id=5"><img src="images/200905/thumb_img/5_thumb_G_1241422518886.jpg" alt="索爱原装M2卡读卡器"  width="85" height="85"/></a> </div>
    <li  >
    <div class="rank_text left"  ><p class="rank_price">￥<span>20</span></p><p class="already_sold">已售出 0 件</p></div>
    </li>
    </ul>
        <SCRIPT type=text/javascript> window.onload = show_goodspic(3,'top3');</SCRIPT>
  </div>
</div>
 </div>
            <div id="ECS_tree2_BODY" style="display:none;"> <div class=" top_10_goods lshadow">
   <div class="boxCenterList2"> 
        <ul
  
   
        style=" border-bottom:1px solid #F2F2F2; "
        class="clearfix ul_list"  id=top2s1 onMouseOver="show_goodspic(1,'top2')">
    <div class="iteration2" > 1 </div>
    <li   class="iteration1" > <a href="goods.php?id=17" title="娇韵诗超V型纤容紧致瘦脸面膜75ml" style="float:left">娇韵诗超V型纤容紧致瘦脸面膜75ml</a>
    </li>
    </ul>
    <ul 
  
   
        style=" border-bottom:1px solid #F2F2F2; "
        class="clearfix ul_box"  id=top2b1 >
    <div class="iteration"> 1 </div>
    <div class="rank_txt"><a href="goods.php?id=17" title="娇韵诗超V型纤容紧致瘦脸面膜75ml">娇韵诗超V型纤容紧致瘦脸面膜75ml</a></div>
   <div class="rank_img " > <a href="goods.php?id=17"><img src="images/201311/thumb_img/17_thumb_G_1384994573595.gif" alt="娇韵诗超V型纤容紧致瘦脸面膜75ml"  width="85" height="85"/></a> </div>
    <li  class="iteration1"  >
    <div class="rank_text left"  ><p class="rank_price">￥<span>275</span></p><p class="already_sold">已售出 0 件</p></div>
    </li>
    </ul>
        <ul
  
   
        style=" border-bottom:1px solid #F2F2F2; "
        class="clearfix ul_list"  id=top2s2 onMouseOver="show_goodspic(2,'top2')">
    <div class="iteration2" > 2 </div>
    <li   > <a href="goods.php?id=114" title="思亲肤绿茶泡沫洁面摩丝160ml" style="float:left">思亲肤绿茶泡沫洁面摩丝160ml</a>
    </li>
    </ul>
    <ul 
  
   
        style=" border-bottom:1px solid #F2F2F2; "
        class="clearfix ul_box"  id=top2b2 >
    <div class="iteration"> 2 </div>
    <div class="rank_txt"><a href="goods.php?id=114" title="思亲肤绿茶泡沫洁面摩丝160ml">思亲肤绿茶泡沫洁面摩丝160ml</a></div>
   <div class="rank_img " > <a href="goods.php?id=114"><img src="images/201311/thumb_img/114_thumb_G_1385664673343.jpg" alt="思亲肤绿茶泡沫洁面摩丝160ml"  width="85" height="85"/></a> </div>
    <li  >
    <div class="rank_text left"  ><p class="rank_price">￥<span>59</span></p><p class="already_sold">已售出 0 件</p></div>
    </li>
    </ul>
        <ul
  
   
        style=" border-bottom:1px solid #F2F2F2; "
        class="clearfix ul_list"  id=top2s3 onMouseOver="show_goodspic(3,'top2')">
    <div class="iteration2" > 3 </div>
    <li   > <a href="goods.php?id=117" title="嘉娜宝玫瑰药用洗面奶150g" style="float:left">嘉娜宝玫瑰药用洗面奶150g</a>
    </li>
    </ul>
    <ul 
  
   
        style=" border-bottom:1px solid #F2F2F2; "
        class="clearfix ul_box"  id=top2b3 >
    <div class="iteration"> 3 </div>
    <div class="rank_txt"><a href="goods.php?id=117" title="嘉娜宝玫瑰药用洗面奶150g">嘉娜宝玫瑰药用洗面奶150g</a></div>
   <div class="rank_img " > <a href="goods.php?id=117"><img src="images/201311/thumb_img/117_thumb_G_1385664825588.jpg" alt="嘉娜宝玫瑰药用洗面奶150g"  width="85" height="85"/></a> </div>
    <li  >
    <div class="rank_text left"  ><p class="rank_price">￥<span>39</span></p><p class="already_sold">已售出 0 件</p></div>
    </li>
    </ul>
        <ul
  
   
        style=" border-bottom:1px solid #F2F2F2; "
        class="clearfix ul_list"  id=top2s4 onMouseOver="show_goodspic(4,'top2')">
    <div class="iteration2" > 4 </div>
    <li   > <a href="goods.php?id=119" title="蓓丽柔和泡沫洁面膏125ml" style="float:left">蓓丽柔和泡沫洁面膏125ml</a>
    </li>
    </ul>
    <ul 
  
   
        style=" border-bottom:1px solid #F2F2F2; "
        class="clearfix ul_box"  id=top2b4 >
    <div class="iteration"> 4 </div>
    <div class="rank_txt"><a href="goods.php?id=119" title="蓓丽柔和泡沫洁面膏125ml">蓓丽柔和泡沫洁面膏125ml</a></div>
   <div class="rank_img " > <a href="goods.php?id=119"><img src="images/201311/thumb_img/119_thumb_G_1385664985753.jpg" alt="蓓丽柔和泡沫洁面膏125ml"  width="85" height="85"/></a> </div>
    <li  >
    <div class="rank_text left"  ><p class="rank_price">￥<span>350</span></p><p class="already_sold">已售出 0 件</p></div>
    </li>
    </ul>
        <ul
  
   
        style=" border-bottom:1px solid #F2F2F2; "
        class="clearfix ul_list"  id=top2s5 onMouseOver="show_goodspic(5,'top2')">
    <div class="iteration2" > 5 </div>
    <li   > <a href="goods.php?id=121" title="肌研极润玻尿酸保湿沫面乳100g" style="float:left">肌研极润玻尿酸保湿沫面乳100g</a>
    </li>
    </ul>
    <ul 
  
   
        style=" border-bottom:1px solid #F2F2F2; "
        class="clearfix ul_box"  id=top2b5 >
    <div class="iteration"> 5 </div>
    <div class="rank_txt"><a href="goods.php?id=121" title="肌研极润玻尿酸保湿沫面乳100g">肌研极润玻尿酸保湿沫面乳100g</a></div>
   <div class="rank_img " > <a href="goods.php?id=121"><img src="images/201311/thumb_img/121_thumb_G_1385665117605.jpg" alt="肌研极润玻尿酸保湿沫面乳100g"  width="85" height="85"/></a> </div>
    <li  >
    <div class="rank_text left"  ><p class="rank_price">￥<span>65</span></p><p class="already_sold">已售出 0 件</p></div>
    </li>
    </ul>
        <ul
  
   
        style=" border-bottom:1px solid #F2F2F2; "
        class="clearfix ul_list"  id=top2s6 onMouseOver="show_goodspic(6,'top2')">
    <div class="iteration2" > 6 </div>
    <li   > <a href="goods.php?id=22" title="娇兰金钻修颜粉饼SPF10" style="float:left">娇兰金钻修颜粉饼SPF10</a>
    </li>
    </ul>
    <ul 
  
   
        style=" border-bottom:1px solid #F2F2F2; "
        class="clearfix ul_box"  id=top2b6 >
    <div class="iteration"> 6 </div>
    <div class="rank_txt"><a href="goods.php?id=22" title="娇兰金钻修颜粉饼SPF10">娇兰金钻修颜粉饼SPF10</a></div>
   <div class="rank_img " > <a href="goods.php?id=22"><img src="images/201311/thumb_img/22_thumb_G_1384994678955.gif" alt="娇兰金钻修颜粉饼SPF10"  width="85" height="85"/></a> </div>
    <li  >
    <div class="rank_text left"  ><p class="rank_price">￥<span>399</span></p><p class="already_sold">已售出 0 件</p></div>
    </li>
    </ul>
        <ul
  
   
        style=" border-bottom:1px solid #F2F2F2; "
        class="clearfix ul_list"  id=top2s7 onMouseOver="show_goodspic(7,'top2')">
    <div class="iteration2" > 7 </div>
    <li   > <a href="goods.php?id=23" title=" 安娜苏魔影幻彩唇膏305#3.4g" style="float:left">安娜苏魔影幻彩唇膏305#3.4g</a>
    </li>
    </ul>
    <ul 
  
   
        style=" border-bottom:1px solid #F2F2F2; "
        class="clearfix ul_box"  id=top2b7 >
    <div class="iteration"> 7 </div>
    <div class="rank_txt"><a href="goods.php?id=23" title=" 安娜苏魔影幻彩唇膏305#3.4g">安娜苏魔影幻彩唇膏305#3.4g</a></div>
   <div class="rank_img " > <a href="goods.php?id=23"><img src="images/201311/thumb_img/23_thumb_G_1385075287189.jpg" alt=" 安娜苏魔影幻彩唇膏305#3.4g"  width="85" height="85"/></a> </div>
    <li  >
    <div class="rank_text left"  ><p class="rank_price">￥<span>149</span></p><p class="already_sold">已售出 0 件</p></div>
    </li>
    </ul>
        <ul
  
   
        style=" border-bottom:1px solid #F2F2F2; "
        class="clearfix ul_list"  id=top2s8 onMouseOver="show_goodspic(8,'top2')">
    <div class="iteration2" > 8 </div>
    <li   > <a href="goods.php?id=24" title="贝玲妃留声机粉底霜9.5g" style="float:left">贝玲妃留声机粉底霜9.5g</a>
    </li>
    </ul>
    <ul 
  
   
        style=" border-bottom:1px solid #F2F2F2; "
        class="clearfix ul_box"  id=top2b8 >
    <div class="iteration"> 8 </div>
    <div class="rank_txt"><a href="goods.php?id=24" title="贝玲妃留声机粉底霜9.5g">贝玲妃留声机粉底霜9.5g</a></div>
   <div class="rank_img " > <a href="goods.php?id=24"><img src="images/201311/thumb_img/24_thumb_G_1385074818364.jpg" alt="贝玲妃留声机粉底霜9.5g"  width="85" height="85"/></a> </div>
    <li  >
    <div class="rank_text left"  ><p class="rank_price">￥<span>240</span></p><p class="already_sold">已售出 0 件</p></div>
    </li>
    </ul>
        <ul
  
   
        class="clearfix ul_list"  id=top2s9 onMouseOver="show_goodspic(9,'top2')">
    <div class="iteration2" > 9 </div>
    <li   > <a href="goods.php?id=5" title="索爱原装M2卡读卡器" style="float:left">索爱原装M2卡读卡器</a>
    </li>
    </ul>
    <ul 
  
   
        class="clearfix ul_box"  id=top2b9 >
    <div class="iteration"> 9 </div>
    <div class="rank_txt"><a href="goods.php?id=5" title="索爱原装M2卡读卡器">索爱原装M2卡读卡器</a></div>
   <div class="rank_img " > <a href="goods.php?id=5"><img src="images/200905/thumb_img/5_thumb_G_1241422518886.jpg" alt="索爱原装M2卡读卡器"  width="85" height="85"/></a> </div>
    <li  >
    <div class="rank_text left"  ><p class="rank_price">￥<span>20</span></p><p class="already_sold">已售出 0 件</p></div>
    </li>
    </ul>
        <SCRIPT type=text/javascript> window.onload = show_goodspic(2,'top2');</SCRIPT>
  </div>
</div> </div>
          </div>
        </div>
        <script type="text/javascript">
//<![CDATA[
  var cycleList = ['ECS_tree1','ECS_tree2'];
  var tabFront = 'tabFront';
  var tabBack = 'tabBack';
  function cycleShow(obj)
  {
    var curObj;
    var curBody;
    for (i=0; i < cycleList.length; i++)
    {
      curObj = document.getElementById(cycleList[i]);
      curBody = document.getElementById(cycleList[i] + '_BODY');
      if (obj.id == curObj.id)
      {
        curObj.className = tabFront;
        curBody.style.display = "";
      }
      else
      {
        curObj.className = tabBack;
        curBody.style.display = "none";
      }
    }
  }
  // 添加事件
  for (i=0; i< cycleList.length; i++)
  {
    document.getElementById(cycleList[i]).onmousemove = function()
    {
      cycleShow(this);
    };
  }
//]]>
</script> 
          
         
        
      </div>
       
      
      <div class="AreaR" style=" width:904px; overflow:hidden"> 
      
      
 
       
 
<style type="text/css">
.tip_spare {display:none}
</style>
<script type="text/javascript">
var btn_buy = "确定";
var is_cancel = "取消";
var select_spe = "请选择商品属性";
var select_base = '请选择套餐基本件';
var select_shop = '请选择套餐商品';
var data_not_complete = '数据格式不完整';
var understock = '库存不足，请选择其他商品';
jQuery(function($){
	//组合套餐tab切换
	var _tab = $('#cn_b h2');
	var _con = $('#cn_h blockquote');
	var _index = 0;
	_con.eq(0).show().siblings('blockquote').hide();
	_tab.css('cursor','pointer');
	_tab.click(function(){
		_index = _tab.index(this);
		_tab.eq(_index).removeClass('h2bg').siblings('h2').addClass('h2bg');
		_con.eq(_index).show().siblings('blockquote').hide();
	})
	//选择基本件
	$('.m_goods_body').click(function(){
		if($(this).prop('checked')){
			ec_group_addToCart($(this).attr('item'), 147); //基本件(组,主件)
		}else{
			ec_group_delInCart($(this).attr('item'), 147); //删除基本件(组,主件)
			display_Price($(this).attr('item'),$(this).attr('item').charAt($(this).attr('item').length-1));
		}
	})
	//变更选购的配件
	$('.m_goods_list').click(function(){
		//是否选择主件
		if(!$(this).parents('form').find('.m_goods_body').prop('checked')){
			alert(select_base);
			return false;
		}
		if($(this).prop('checked')){
			ec_group_addToCart($(this).attr('item'), $(this).val(),147); //新增配件(组,配件,主件)
		}else{
			ec_group_delInCart($(this).attr('item'), $(this).val(),147); //删除基本件(组,配件,主件)
			display_Price($(this).attr('item'),$(this).attr('item').charAt($(this).attr('item').length-1));
		}
	})
	//可以购买套餐的最大数量
	$(".combo_stock").keyup(function(){
		var group = $(this).parents('form').attr('name');
		getMaxStock(group);//根据套餐获取该套餐允许购买的最大数
	});
})
//允许购买套餐的最大数量
function getMaxStock(group){
	var obj = $('input[name="'+group+'_number"]');
	var original = parseInt(Number(obj.val()));
	var stock = $("."+group).eq(0).attr('stock');
	//是否是数字
	if(isNaN(original)){
		original = 1;
		obj.val(original);
	}
	$("."+group).each(function(index){
		if($("."+group).eq(index).prop('checked')){
			var item_stock = parseInt($("."+group).eq(index).attr('stock'));
			stock = (stock > item_stock)?item_stock:stock;//取最小值
		}
	});
	//更新
	original = (original < 1)?1:original;
	stock = (stock < 1)?1:stock;
	if(original > stock){
		obj.val(stock);
	}
}
//统计套餐价格
function display_Price(_item,indexTab){
	var _size = $('.'+_item).size();
	var _amount_shop_price = 0;
	var _amount_spare_price = 0;
	indexTab = indexTab - 1;
	for(i=0; i<_size; i++){
		obj = $('.'+_item).eq(i);
		if(obj.prop('checked')){
			_amount_shop_price += parseFloat(obj.attr('data')); //原件合计
			_amount_spare_price += parseFloat(obj.attr('spare')); //优惠合计
		}
	}
	var tip_spare = $('.tip_spare:eq('+indexTab+')');//节省文本
	if(_amount_spare_price > 0){//省钱显示提示信息
		tip_spare.show();
		tip_spare.children('strong').text(_amount_spare_price);
	}else{
		tip_spare.hide();
	}
	//显示总价
	$('.combo_price:eq('+indexTab+')').text(_amount_shop_price);
}
//处理添加商品到购物车
function ec_group_addToCart(group,goodsId,parentId){
  var goods        = new Object();
  var spec_arr     = new Array();
  var fittings_arr = new Array();
  var number       = 1;
  var quick		   = 0;
  var group_item   = (typeof(parentId) == "undefined") ? goodsId : parseInt(parentId);
  goods.quick    = quick;
  goods.spec     = spec_arr;
  goods.goods_id = goodsId;
  goods.number   = number;
  goods.parent   = (typeof(parentId) == "undefined") ? 0 : parseInt(parentId);
  goods.group = group + '_' + group_item;//组名
  Ajax.call('flow.php?step=add_to_cart_combo', 'goods=' + $.toJSON(goods), ec_group_addToCartResponse, 'POST', 'JSON'); //兼容jQuery by mike
}
//处理添加商品到购物车的反馈信息
function ec_group_addToCartResponse(result)
{
  if (result.error > 0)
  {
    // 如果需要缺货登记，跳转
    if (result.error == 2)
    {
      alert(understock);
	  cancel_checkboxed(result.group, result.goods_id);//取消checkbox
    }
    // 没选规格，弹出属性选择框
    else if (result.error == 6)
    {
      ec_group_openSpeDiv(result.message, result.group, result.goods_id, result.parent);
    }
    else
    {
      alert(result.message);
	  cancel_checkboxed(result.group, result.goods_id);//取消checkbox
    }
  }
  else
  {
	//处理Ajax数据
	var group = result.group.substr(0,result.group.lastIndexOf("_"));
	$("."+group).each(function(index){
		if($("."+group).eq(index).val()==result.goods_id){
			//主件显示价格、配件显示基本件+属性价
			var goods_price = (result.parent > 0) ? (parseFloat(result.fittings_price)+parseFloat(result.spec_price)):result.goods_price;
			$("."+group).eq(index).attr('data',goods_price);//赋值到文本框data参数
			$("."+group).eq(index).attr('stock',result.stock);//赋值到文本框stock参数
			$('.'+group+'_display').eq(index).text(goods_price);//前台显示
		}
	});
	getMaxStock(group);//根据套餐获取该套餐允许购买的最大数
	display_Price(group,group.charAt(group.length-1));//显示套餐价格
  }
}
//处理删除购物车中的商品
function ec_group_delInCart(group,goodsId,parentId){
  var goods        = new Object();
  var group_item   = (typeof(parentId) == "undefined") ? goodsId : parseInt(parentId);
  goods.goods_id = goodsId;
  goods.parent   = (typeof(parentId) == "undefined") ? 0 : parseInt(parentId);
  goods.group = group + '_' + group_item;//组名
  Ajax.call('flow.php?step=del_in_cart_combo', 'goods=' + $.toJSON(goods), ec_group_delInCartResponse, 'POST', 'JSON'); //兼容jQuery by mike
}
//处理删除购物车中的商品的反馈信息
function ec_group_delInCartResponse(result)
{
	var group = result.group;
	if (result.error > 0){
		alert(data_not_complete);
	}else if(result.parent == 0){
		$('.'+group).attr("checked",false);
	}
	display_Price(group,group.charAt(group.length-1));//显示套餐价格
}
//生成属性选择层
function ec_group_openSpeDiv(message, group, goods_id, parent) 
{
  var _id = "speDiv";
  var m = "mask";
  if (docEle(_id)) document.removeChild(docEle(_id));
  if (docEle(m)) document.removeChild(docEle(m));
  //计算上卷元素值
  var scrollPos; 
  if (typeof window.pageYOffset != 'undefined') 
  { 
    scrollPos = window.pageYOffset; 
  } 
  else if (typeof document.compatMode != 'undefined' && document.compatMode != 'BackCompat') 
  { 
    scrollPos = document.documentElement.scrollTop; 
  } 
  else if (typeof document.body != 'undefined') 
  { 
    scrollPos = document.body.scrollTop; 
  }
  var i = 0;
  var sel_obj = document.getElementsByTagName('select');
  while (sel_obj[i])
  {
    sel_obj[i].style.visibility = "hidden";
    i++;
  }
  // 新激活图层
  var newDiv = document.createElement("div");
  newDiv.id = _id;
  newDiv.style.position = "absolute";
  newDiv.style.zIndex = "10000";
  newDiv.style.width = "300px";
  newDiv.style.height = "260px";
  newDiv.style.top = (parseInt(scrollPos + 200)) + "px";
  newDiv.style.left = (parseInt(document.body.offsetWidth) - 200) / 2 + "px"; // 屏幕居中
  newDiv.style.overflow = "auto"; 
  newDiv.style.background = "#FFF";
  newDiv.style.border = "3px solid #59B0FF";
  newDiv.style.padding = "5px";
  //生成层内内容
  newDiv.innerHTML = '<h4 style="font-size:14; margin:15 0 0 15;">' + select_spe + "</h4>";
  for (var spec = 0; spec < message.length; spec++)
  {
      newDiv.innerHTML += '<hr style="color: #EBEBED; height:1px;"><h6 style="text-align:left; background:#ffffff; margin-left:15px;">' +  message[spec]['name'] + '</h6>';
      if (message[spec]['attr_type'] == 1)
      {
        for (var val_arr = 0; val_arr < message[spec]['values'].length; val_arr++)
        {
          if (val_arr == 0)
          {
            newDiv.innerHTML += "<input style='margin-left:15px;' type='radio' name='spec_" + message[spec]['attr_id'] + "' value='" + message[spec]['values'][val_arr]['id'] + "' id='spec_value_" + message[spec]['values'][val_arr]['id'] + "' checked /><font color=#555555>" + message[spec]['values'][val_arr]['label'] + '</font> [' + message[spec]['values'][val_arr]['format_price'] + ']</font><br />';      
          }
          else
          {
            newDiv.innerHTML += "<input style='margin-left:15px;' type='radio' name='spec_" + message[spec]['attr_id'] + "' value='" + message[spec]['values'][val_arr]['id'] + "' id='spec_value_" + message[spec]['values'][val_arr]['id'] + "' /><font color=#555555>" + message[spec]['values'][val_arr]['label'] + '</font> [' + message[spec]['values'][val_arr]['format_price'] + ']</font><br />';      
          }
        } 
        newDiv.innerHTML += "<input type='hidden' name='spec_list' value='" + val_arr + "' />";
      }
      else
      {
        for (var val_arr = 0; val_arr < message[spec]['values'].length; val_arr++)
        {
          newDiv.innerHTML += "<input style='margin-left:15px;' type='checkbox' name='spec_" + message[spec]['attr_id'] + "' value='" + message[spec]['values'][val_arr]['id'] + "' id='spec_value_" + message[spec]['values'][val_arr]['id'] + "' /><font color=#555555>" + message[spec]['values'][val_arr]['label'] + ' [' + message[spec]['values'][val_arr]['format_price'] + ']</font><br />';     
        }
        newDiv.innerHTML += "<input type='hidden' name='spec_list' value='" + val_arr + "' />";
      }
  }
  newDiv.innerHTML += "<br /><center>[<a href='javascript:ec_group_submit_div(\"" + group + "\"," + goods_id + "," + parent + ")' class='f6' >" + btn_buy + "</a>]&nbsp;&nbsp;[<a href='javascript:ec_group_cancel_div(\"" + group + "\"," + goods_id + ")' class='f6' >" + is_cancel + "</a>]</center>";
  document.body.appendChild(newDiv);
  // mask图层
  var newMask = document.createElement("div");
  newMask.id = m;
  newMask.style.position = "absolute";
  newMask.style.zIndex = "9999";
  newMask.style.width = document.body.scrollWidth + "px";
  newMask.style.height = document.body.scrollHeight + "px";
  newMask.style.top = "0px";
  newMask.style.left = "0px";
  newMask.style.background = "#FFF";
  newMask.style.filter = "alpha(opacity=30)";
  newMask.style.opacity = "0.40";
  document.body.appendChild(newMask);
} 
//获取选择属性后，再次提交到购物车
function ec_group_submit_div(group, goods_id, parentId) 
{
  var goods        = new Object();
  var spec_arr     = new Array();
  var fittings_arr = new Array();
  var number       = 1;
  var input_arr      = document.getElementById('speDiv').getElementsByTagName('input'); //by mike
  var quick		   = 1;
  var spec_arr = new Array();
  var j = 0;
  for (i = 0; i < input_arr.length; i ++ )
  {
    var prefix = input_arr[i].name.substr(0, 5);
    if (prefix == 'spec_' && (
      ((input_arr[i].type == 'radio' || input_arr[i].type == 'checkbox') && input_arr[i].checked)))
    {
      spec_arr[j] = input_arr[i].value;
      j++ ;
    }
  }
  goods.quick    = quick;
  goods.spec     = spec_arr;
  goods.goods_id = goods_id;
  goods.number   = number;
  goods.parent   = (typeof(parentId) == "undefined") ? 0 : parseInt(parentId);
  goods.group    = group;//组名
  Ajax.call('flow.php?step=add_to_cart_combo', 'goods=' + $.toJSON(goods), ec_group_addToCartResponse, 'POST', 'JSON'); //兼容jQuery by mike
  document.body.removeChild(docEle('speDiv'));
  document.body.removeChild(docEle('mask'));
  var i = 0;
  var sel_obj = document.getElementsByTagName('select');
  while (sel_obj[i])
  {
    sel_obj[i].style.visibility = "";
    i++;
  }
}
//关闭mask和新图层的同时取消选择
function ec_group_cancel_div(group, goods_id){
  document.body.removeChild(docEle('speDiv'));
  document.body.removeChild(docEle('mask'));
  var i = 0;
  var sel_obj = document.getElementsByTagName('select');
  while (sel_obj[i])
  {
    sel_obj[i].style.visibility = "";
    i++;
  }
  cancel_checkboxed(group, goods_id);//取消checkbox
}
/*
*套餐提交到购物车 by mike
*/
function addMultiToCart(group,goodsId){
	var goods     = new Object();
	var number    = $('input[name="'+group+'_number"]').val();
	
	goods.group = group;
	goods.goods_id = goodsId;
	goods.number = (number < 1) ? 1:number;
	
	//判断是否勾选套餐
	if(!$("."+group).is(':checked')){
		alert(select_shop);
		return false;	
	}
	
	Ajax.call('flow.php?step=add_to_cart_group', 'goods=' + $.toJSON(goods), addMultiToCartResponse, 'POST', 'JSON'); //兼容jQuery by mike
}
//回调
function addMultiToCartResponse(result){
	if(result.error > 0){
		alert(result.message);
	}else{
		window.location.href = 'flow.php';
	}
}
//取消选项
function cancel_checkboxed(group, goods_id){
	//取消选择
	group = group.substr(0,group.lastIndexOf("_"));
	$("."+group).each(function(index){
		if($("."+group).eq(index).val()==goods_id){
			$("."+group).eq(index).attr("checked",false);			  
		}
	});
}
/*
//sleep
function sleep(d){
	for(var t = Date.now();Date.now() - t <= d;);
}
*/
</script> 
      
      
        
        <div class="inDetail_boxOut ">
          <DIV class="inDetail_box">
            <div class="fixed_out ">
              <div  id="inner" class="fixed" >
                <ul class="inLeft_btn">
                  <li><a id="property-id" href="#shangpsx" class="current">商品属性</a></li>
                  <li><a id="detail-id" href="#shangpjs">本单详情</a></li>
                  <li><a id="shot-id" href="#miqsp">产品实拍</a></li>
                  <li><a id="coms1-id" href="#coms1">买家评论</a></li>
                  <li class="advantage"><a id="good-id" href="#miqfw">米奇网优势</a></li>
                </ul>
              </div>
            </div>
            <script type="text/javascript">
var obj11 = document.getElementById("inner");
var top11 = getTop(obj11);
var isIE6 = /msie 6/i.test(navigator.userAgent);
window.onscroll = function(){
var bodyScrollTop = document.documentElement.scrollTop || document.body.scrollTop;
if (bodyScrollTop > top11){
obj11.style.position = (isIE6) ? "absolute" : "fixed";
obj11.style.top = (isIE6) ? bodyScrollTop + "px" : "0px";
} else {
obj11.style.position = "static";
}
}
function getTop(e){
var offset = e.offsetTop;
if(e.offsetParent != null) offset += getTop(e.offsetParent);
return offset;
}
</script>
            <div class="inLeft_ensure"> <a href="#" target="_blank"></a> <a href="#" target="_blank"></a> <a href="#" target="_blank"></a> <a href="#" target="_blank"></a> </div>
            <div  id="no_try_record"> 
              
              
              <div class="inLeft_title property_title" id="shangpsx"> <img border="0" src="themes/miqinew/images/inLeft_title01.gif"> </div>
              <div class="inLeft_attributes" style="margin:0;">
                <div class="inLeft_attributes_1">
                  <table border="0" cellspacing="0" cellpadding="0" >
                    <tbody>
                      <tr>
                        <td>商品名称</td>
                        <td><p class="fit_people "> ewewe</p></td>
                        <td align="center" style="text-align:center;" rowspan="9"><img src="images/201501/goods_img/147_G_1420976327287.jpg" alt="ewewe"  /></td>
                      </tr>
                      
                                            
                    </tbody>
                  </table>
                </div>
              </div>
              
              <div class="inLeft_title " id="shangpjs"> <img border="0" src="themes/miqinew/images/inLeft_title02.gif"> </div>
              <div class="inLeft_attributes inLeft_style">
                <div class="inLeft_orderDetail" >
                  <div class="inLeft_orderDetail_in" >  </div>
                </div>
              </div>
              
              
              
              
              <div class="inLeft_title " id="miqsp">
                                <img border="0" src="themes/miqinew/images/inLeft_title04.gif">
                            </div>
                            
                            
                           
                                           
                                           
                                                           
                     <div class="inLeft_title " id="coms1">
                                <img border="0" src="themes/miqinew/images/inLeft_title06.gif">
                            </div>   
                                 
                                 
                    
                             <div class="inLeft_comment" > 
                             
                                   
                            <div id="i-comment"  style="margin-top:20px;">
                <div class="rate"> <strong>100%</strong> <br> 好评度 </div>
                <div class="percent"> 
                  <dl> 
                    <dt>好评</dt> 
                    <dd class="d1"> 
                      <div style="width: 100%;"> </div> 
                    </dd> 
                    <dd class="d2"> 100%</dd> 
                  </dl> 
                  <dl> 
                    <dt>中评</dt> 
                    <dd class="d1"> 
                      <div style="width: 0%;"> </div> 
                    </dd> 
                    <dd class="d2"> 0%</dd> 
                  </dl> 
                  <dl> 
                    <dt>差评</dt> 
                    <dd class="d1"> 
                      <div style="width: 0%;"> </div> 
                    </dd> 
                    <dd class="d2"> 0%</dd> 
                  </dl> 
                </div> 
                <div class="actor"> 
                 <a href=""> <img src="images/201501/thumb_img/147_thumb_G_1420976327133.jpg" alt="" style="width:100px;height:100px;"></a>
                </div> 
                <div class="btns"> 
                  <div>购买过ewewe的顾客，在收到商品才可以对该商品发表评论</div> 
                  <a href="javascript:void(0);" class="btn-comment" id="showcommentform">我要评价</a>
                </div>
                <div class="clear"></div>
              </div>
                   
                                
              <div class="comment_body " >
               
                <div id="ECS_COMMENT"> 554fcae493e564ee0dc75bdf2ebf94cacomments|a:3:{s:4:"name";s:8:"comments";s:4:"type";i:0;s:2:"id";i:147;}554fcae493e564ee0dc75bdf2ebf94ca</div> 
                </div>
                </div>
                 
                
                
                <div class="inLeft_title " id="miqfw">
                                <img border="0" src="themes/miqinew/images/inLeft_title07.gif">
                            </div>
               <div class="slideTxtBox3"   >
  <div class="hd" >
    <ul>
      <li  ><img src="themes/miqinew/images/advantage_btn_new01.jpg" border="0"></li>
      <li  ><img src="themes/miqinew/images/advantage_btn_new02.jpg" border="0"></li>
      <li   ><img src="themes/miqinew/images/advantage_btn_new03.jpg" border="0"></li>
      <li   ><img src="themes/miqinew/images/advantage_btn_new04.jpg" border="0"></li>
      <li  ><img src="themes/miqinew/images/advantage_btn_new05.jpg" border="0"></li>
      <li   ><img src="themes/miqinew/images/advantage_btn_new06.jpg" border="0"></li>
      <li   ><img src="themes/miqinew/images/advantage_btn_new07.jpg" border="0"></li>
      <li  ><img src="themes/miqinew/images/advantage_btn_new08.jpg" border="0"></li>
    </ul>
  </div>
  <div class="bd">
    <ul>
      <div  class="inLeft_tabnav" > <img src="themes/miqinew/images/mall_tab01.jpg" border="0"> <img src="themes/miqinew/images/mall_tab01_01.jpg" border="0"> </div>
    </ul>
    <ul>
      <div > <img src="themes/miqinew/images/mall_tab02.jpg" border="0" usemap="#Map"> <img src="themes/miqinew/images/mall_tab02_01.jpg" border="0" usemap="#Map"> </div>
    </ul>
    <ul>
      <div > <img src="themes/miqinew/images/mall_tab03.jpg" border="0"> </div>
    </ul>
    <ul>
      <div > <img src="themes/miqinew/images/mall_tab04.jpg" border="0"> </div>
    </ul>
    <ul>
      <div > <img src="themes/miqinew/images/mall_tab05.jpg" border="0"> </div>
    </ul>
    <ul>
      <div  > <img src="themes/miqinew/images/mall_tab06.jpg" border="0"> </div>
    </ul>
    <ul>
      <div > <img src="themes/miqinew/images/mall_tab07.jpg" border="0"> </div>
    </ul>
    <ul>
      <div > <img src="themes/miqinew/images/mall_tab08.jpg" border="0"> </div>
    </ul>
  </div>
</div>
<script type="text/javascript">jQuery(".slideTxtBox3").slide();</script> 
            </DIV>
          </div>
        </div>
        <div class="blank"></div>
         
         </div>
       
    </div>
  </div>
</div>
<div class="blank5"></div>
<div class="footer">
  <div class="footerBody">
    <Div class="block"> 
      
      
<div class="footTop "> 
    <ul>
    <li  class="foot_help foot_help_1 "><a href='article_cat.php?id=5' title="新手上路 ">新手上路 </a></li>
        <li><a href="article.php?id=9" title="售后流程">售后流程</a></li>
        <li><a href="article.php?id=10" title="购物流程">购物流程</a></li>
        <li><a href="article.php?id=11" title="订购方式">订购方式</a></li>
        <li><a href="article.php?id=36" title="隐私声明">隐私声明</a></li>
      </ul>
    <ul>
    <li  class="foot_help foot_help_2 "><a href='article_cat.php?id=6' title="手机常识 ">手机常识 </a></li>
        <li><a href="article.php?id=12" title="如何分辨原装电池">如何分辨原装电池</a></li>
        <li><a href="article.php?id=13" title="如何分辨水货手机 ">如何分辨水货手机</a></li>
        <li><a href="article.php?id=14" title="如何享受全国联保">如何享受全国联保</a></li>
      </ul>
    <ul>
    <li  class="foot_help foot_help_3 "><a href='article_cat.php?id=7' title="配送与支付 ">配送与支付 </a></li>
        <li><a href="article.php?id=15" title="货到付款区域">货到付款区域</a></li>
        <li><a href="article.php?id=16" title="配送支付智能查询 ">配送支付智能查询</a></li>
        <li><a href="article.php?id=17" title="支付方式说明">支付方式说明</a></li>
      </ul>
    <ul>
    <li  class="foot_help foot_help_4 "><a href='article_cat.php?id=10' title="会员中心">会员中心</a></li>
        <li><a href="article.php?id=18" title="资金管理">资金管理</a></li>
        <li><a href="article.php?id=19" title="我的收藏">我的收藏</a></li>
        <li><a href="article.php?id=20" title="我的订单">我的订单</a></li>
      </ul>
    <ul>
    <li  class="foot_help foot_help_5 "><a href='article_cat.php?id=8' title="服务保证 ">服务保证 </a></li>
        <li><a href="article.php?id=21" title="退换货原则">退换货原则</a></li>
        <li><a href="article.php?id=22" title="售后服务保证 ">售后服务保证</a></li>
        <li><a href="article.php?id=23" title="产品质量保证 ">产品质量保证</a></li>
      </ul>
    <ul>
    <li  class="foot_help foot_help_6 "><a href='article_cat.php?id=9' title="联系我们 ">联系我们 </a></li>
        <li><a href="article.php?id=24" title="网站故障报告">网站故障报告</a></li>
        <li><a href="article.php?id=25" title="选机咨询 ">选机咨询</a></li>
        <li><a href="article.php?id=26" title="投诉与建议 ">投诉与建议</a></li>
      </ul>
   
</div>
<div class="footBottom_blog clearfix">
  <div class="footBlog_01"> </div>
  <div class="footBlog_02"> <a href="http://itunes.apple.com/cn/app/id522502776" target="_blank"></a> </div>
  <div class="footBlog_03"> <a href="http://t.sina.com.cn/miqimm" target="_blank"></a> </div>
  <div class="footBlog_04"> </div>
</div>
<div class="footBottom_line">
  <div class="footLine_list"> <img src="themes/miqinew/images/foot_01.gif" border="0"> </div>
  <div class="footLine_list"> <img src="themes/miqinew/images/foot_02.gif" border="0"> </div>
  <div class="footLine_list"> <img src="themes/miqinew/images/foot_03.gif" border="0"> </div>
  <div class="footLine_list"> <img src="themes/miqinew/images/foot_04.gif" border="0"> </div>
  <div class="footLine_list"> <img src="themes/miqinew/images/foot_05.gif" border="0"> </div>
  <div class="footLine_list"> <img src="themes/miqinew/images/foot_06.gif" border="0"> </div>
  <div class="footLine_list"> <img src="themes/miqinew/images/foot_07.gif" border="0"> </div>
  <div class="footLine_list"> <img src="themes/miqinew/images/foot_08.gif" border="0"> </div>
</div>
<div class="footer_txt">
  <p><span class="arial">© </span><span class="weiruan">2013 MIQI.CN</span> 所有设计和内容保留一切权利 <a href="http://www.miibeian.gov.cn/" target="_blank" style="color:#666;">京ICP备10056078号</a> 京公网安备110105005750  米奇网客服热线：4000-800-777(每天09:00-18:00)</p>
  <p class="lightGrey">CEO邮箱 ceo@miqi.cn   投诉邮箱 tousu@miqi.cn</p>
</div>
<div class="footBottom_list">
  <ul>
    <li>
      <div class="one"><a href="#" target="_blank"></a></div>
    </li>
    <li>
      <div class="two"><a href="#" rel="nofollow" target="_blank"></a></div>
    </li>
    <li>
      <div class="three"><a href="#" target="_blank"></a></div>
    </li>
    <li>
      <div class="four"><a href="#"></a></div>
    </li>
    <li>
      <div class="five"><a href="#" rel="nofollow" target="_blank"></a></div>
    </li>
    <li>
      <div class="six"><a href="#" rel="nofollow" target="_blank"></a></div>
    </li>
  </ul>
</div>
 
 
<div id="bottomNav" class="box" style="display:none">
  <div class="bNavList clearfix">
    <div class="f_l"> 
       
    </div>
  </div>
</div>
<div class="blank"></div>
<div id="footer" style="height:1px; width:1px; overflow:hidden; background:none;">
  <div class="text"> &copy; 2005-2015 ECSHOP米奇网-站博士模板堂（www.zbos56.com） 版权所有，并保留所有权利。<br />
    站博士模板堂（www.zbos56.com）  
     
     
     
     
    <a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=1747602925&amp;Site=ECSHOP米奇网-站博士模板堂（www.zbos56.com）&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:1747602925:4" height="16" border="0" alt="QQ" /> 1747602925</a> 
     
     
     
     
     
     
     
     
     
     
     
     
     
    <br />
     
    554fcae493e564ee0dc75bdf2ebf94caquery_info|a:1:{s:4:"name";s:10:"query_info";}554fcae493e564ee0dc75bdf2ebf94ca<br />
    <a href="http://www.ecshop.com" target="_blank" style=" font-family:Verdana; font-size:11px;">Powered&nbsp;by&nbsp;<strong><span style="color: #3366FF">ECShop</span>&nbsp;<span style="color: #FF9966">v2.7.3</span></strong></a>&nbsp;<a href="http://www.ecshop.com/license.php?product=ecshop_b2c&url=http%3A%2F%2Ftx.wushuai.net%2F" target="_blank"
>&nbsp;&nbsp;Licensed</a><br />
        <div align="left"  id="rss"><a href=""><img src="themes/miqinew/images/xml_rss2.gif" alt="rss" /></a></div>
  </div>
</div>
<div id="topcontrol" style="width:60px;">
  <div class="nreturn"> <a target="_blank" id="sider_talkonline" href="http://www.miqi.cn/order-shoppingcart" class="ntel buy" style="display: block;">购物袋</a> <a target="_blank" id="sider_talkonline" href="http://chat32.live800.com/live800/chatClient/chatbox.jsp?companyID=128742&amp;configID=34167&amp;jid=6712194369" class="ntel kf " style="display: block;">客服</a> <a id="sider_addmark" href="javascript:void(0);" class="ntel sider_addmark" style="display: block;">收藏</a> <a id="sider_returntop" href="javascript:void(0);" class="ntel sider_returntop" style="display: block;">回顶部</a> </div>
</div>
<script>
$(function(){
	isIe6 = false;
	
	if ('undefined' == typeof(document.body.style.maxHeight)) {
		isIe6 = true;
	}
	var offset = $("#topcontrol").offset();		
	var bottom = $("#topcontrol").css("bottom");		
	$(window).scroll(function(){
		if ($(window).scrollTop() > 500){
			$("#topcontrol").fadeIn(800);
			
			if(isIe6)
			{			
				$("#topcontrol").css("position","absolute")	
				$("#topcontrol").css("bottom",bottom)
			}
		}
		else
		{
			$("#topcontrol").fadeOut(500);
		}
		
	});
	
	$("#topcontrol #sider_returntop").click(function(){
		$('body,html').animate({scrollTop:0},500);
		return false;
	});
})
</script> 
      
      </Div>
  </div>
</div>
</body>
<script type="text/javascript">
var goods_id = 147;
var goodsattr_style = 1;
var gmt_end_time = 0;
var day = "天";
var hour = "小时";
var minute = "分钟";
var second = "秒";
var end = "结束";
var goodsId = 147;
var now_time = 1420976374;
onload = function(){
  changePrice();
  fixpng();
  try {onload_leftTime();}
  catch (e) {}
}
/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;
  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}
/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;
    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}
</script>
</html>