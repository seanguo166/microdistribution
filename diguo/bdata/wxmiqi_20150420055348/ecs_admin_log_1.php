<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_admin_log`;");
E_C("CREATE TABLE `ecs_admin_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `log_time` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `log_info` varchar(255) NOT NULL DEFAULT '',
  `ip_address` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`log_id`),
  KEY `log_time` (`log_time`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_admin_log` values('1','1427669137','2','编辑商店设置: ','183.34.91.92');");
E_D("replace into `ecs_admin_log` values('2','1427680247','2','编辑会员账号: tianxin96','113.117.246.255');");
E_D("replace into `ecs_admin_log` values('3','1427681221','2','批量删除会员账号: 001,2222,003','183.54.19.247');");
E_D("replace into `ecs_admin_log` values('4','1427740490','2','编辑商店设置: ','182.121.206.80');");
E_D("replace into `ecs_admin_log` values('5','1427740491','2','编辑商店设置: ','182.121.206.80');");
E_D("replace into `ecs_admin_log` values('6','1427740657','2','编辑商店设置: ','182.121.206.80');");
E_D("replace into `ecs_admin_log` values('7','1427761820','2','编辑商品类型: 电影','110.83.9.149');");
E_D("replace into `ecs_admin_log` values('8','1427780472','2','编辑商品: 玫琳凯中性洗面乳绿2号','182.121.206.80');");
E_D("replace into `ecs_admin_log` values('9','1427780563','2','编辑商品: 玫琳凯中性洗面乳绿2号','182.121.206.80');");
E_D("replace into `ecs_admin_log` values('10','1427780614','2','编辑商品: 玫琳凯中性洗面乳绿2号','182.121.206.80');");
E_D("replace into `ecs_admin_log` values('11','1427829891','2','编辑商店设置: ','58.248.103.208');");
E_D("replace into `ecs_admin_log` values('12','1427848892','2','编辑商品: 迪奥红毒女士香水EDT 50ml','182.121.205.157');");
E_D("replace into `ecs_admin_log` values('13','1427848892','2','编辑商品: 迪奥红毒女士香水EDT 50ml','182.121.205.157');");
E_D("replace into `ecs_admin_log` values('14','1427849452','2','添加会员账号: 123123','182.121.205.157');");
E_D("replace into `ecs_admin_log` values('15','1427851097','2','编辑会员账号: tianxin319','111.75.71.203');");
E_D("replace into `ecs_admin_log` values('16','1427851186','2','编辑会员账号: tianxin319','111.75.71.203');");
E_D("replace into `ecs_admin_log` values('17','1427851196','2','编辑会员账号: tianxin320','111.75.71.203');");
E_D("replace into `ecs_admin_log` values('18','1427851552','2','编辑商品: 肌研极润玻尿酸保湿沫面乳100g','182.121.205.157');");
E_D("replace into `ecs_admin_log` values('19','1427851658','2','编辑会员账号: tianxin318','111.75.71.203');");
E_D("replace into `ecs_admin_log` values('20','1427857226','2','添加商品: 150401商品测试','49.65.65.129');");
E_D("replace into `ecs_admin_log` values('21','1427857226','2','添加商品: 150401商品测试','49.65.65.129');");
E_D("replace into `ecs_admin_log` values('22','1427858242','2','编辑商品: 150401商品测试','49.65.65.129');");
E_D("replace into `ecs_admin_log` values('23','1427858242','2','编辑商品: 150401商品测试','49.65.65.129');");
E_D("replace into `ecs_admin_log` values('24','1427858283','2','编辑商品: 150401商品测试','49.65.65.129');");
E_D("replace into `ecs_admin_log` values('25','1427858283','2','编辑商品: 150401商品测试','49.65.65.129');");
E_D("replace into `ecs_admin_log` values('26','1427879111','2','删除会员账号: tianxin2','183.34.69.49');");
E_D("replace into `ecs_admin_log` values('27','1427915837','2','添加文章: 测试','111.75.71.203');");
E_D("replace into `ecs_admin_log` values('28','1427916597','2','编辑会员账号: tianxin319','111.75.71.203');");
E_D("replace into `ecs_admin_log` values('29','1427916611','2','编辑会员账号: tianxin319','111.75.71.203');");
E_D("replace into `ecs_admin_log` values('30','1428012017','2','编辑会员账号: tianxin466','121.22.183.126');");
E_D("replace into `ecs_admin_log` values('31','1428046411','2','回收商品: 彼得罗夫温和洁面泡沫200ml','112.225.226.164');");
E_D("replace into `ecs_admin_log` values('32','1428046722','2','删除文章: 88','112.225.226.164');");
E_D("replace into `ecs_admin_log` values('33','1428097408','2','编辑订单: 2015040433447,订单总金额由 543.50 变为 550.00','115.199.169.207');");
E_D("replace into `ecs_admin_log` values('34','1428304064','1','编辑商店设置: ','113.93.100.107');");
E_D("replace into `ecs_admin_log` values('35','1428304098','1','Edit Shop config: ','113.93.100.107');");
E_D("replace into `ecs_admin_log` values('36','1428304098','1','编辑商店设置: ','113.93.100.107');");
E_D("replace into `ecs_admin_log` values('37','1428449817','2','编辑订单: 2015040888900','27.224.37.84');");
E_D("replace into `ecs_admin_log` values('38','1428528215','2','批量回收商品: ','113.93.100.11');");
E_D("replace into `ecs_admin_log` values('39','1428607081','2','编辑广告: cate_1_6','182.121.203.226');");
E_D("replace into `ecs_admin_log` values('40','1428607112','2','删除广告: ','182.121.203.226');");
E_D("replace into `ecs_admin_log` values('41','1428726664','2','编辑会员账号: tianxin1059','119.131.249.204');");
E_D("replace into `ecs_admin_log` values('42','1428729956','2','编辑商品: 玫琳凯中性洗面乳绿2号','182.121.205.76');");
E_D("replace into `ecs_admin_log` values('43','1428752445','2','删除商品分类: 唇妆','183.52.104.2');");
E_D("replace into `ecs_admin_log` values('44','1428753950','2','删除权限管理: bbsbaby89','183.52.104.2');");
E_D("replace into `ecs_admin_log` values('45','1428754023','2','删除广告: ','183.52.104.2');");
E_D("replace into `ecs_admin_log` values('46','1428856967','2','编辑文章: 测试','113.243.48.80');");
E_D("replace into `ecs_admin_log` values('47','1428862478','2','编辑会员账号: tianxin1121','113.243.48.80');");
E_D("replace into `ecs_admin_log` values('48','1428972855','2','编辑权限管理: tianxin100','61.143.18.10');");
E_D("replace into `ecs_admin_log` values('49','1428972871','2','编辑权限管理: admin','61.143.18.10');");
E_D("replace into `ecs_admin_log` values('50','1429067214','2','编辑会员账号: tianxin1320','61.143.18.10');");
E_D("replace into `ecs_admin_log` values('51','1429067307','2','编辑会员账号: tianxin1320','61.143.18.10');");
E_D("replace into `ecs_admin_log` values('52','1429067311','2','编辑会员账号: tianxin1320','61.143.18.10');");
E_D("replace into `ecs_admin_log` values('53','1429098065','2','编辑会员账号: tianxin350','61.143.18.10');");
E_D("replace into `ecs_admin_log` values('54','1429149985','2','编辑会员账号: tianxin1231','113.93.101.201');");
E_D("replace into `ecs_admin_log` values('55','1429268592','2','编辑权限管理: admin','113.101.138.211');");
E_D("replace into `ecs_admin_log` values('56','1429268816','2','编辑权限管理: admin','113.101.138.211');");
E_D("replace into `ecs_admin_log` values('57','1429269882','1','编辑权限管理: admin','113.101.138.211');");
E_D("replace into `ecs_admin_log` values('58','1429270056','1','编辑权限管理: xiaojun','113.101.138.211');");
E_D("replace into `ecs_admin_log` values('59','1429270063','1','编辑权限管理: xiaojun','113.101.138.211');");
E_D("replace into `ecs_admin_log` values('60','1429270075','1','编辑权限管理: xiaojun','113.101.138.211');");
E_D("replace into `ecs_admin_log` values('61','1429451360','1','删除权限管理: xiaojun','121.12.23.140');");
E_D("replace into `ecs_admin_log` values('62','1429451366','1','编辑权限管理: admin','121.12.23.140');");
E_D("replace into `ecs_admin_log` values('63','1429451381','1','编辑权限管理: tianxin100','121.12.23.140');");
E_D("replace into `ecs_admin_log` values('64','1429451437','1','编辑权限管理: tianxin100','121.12.23.140');");
E_D("replace into `ecs_admin_log` values('65','1429451482','1','编辑权限管理: admin','121.12.23.140');");
E_D("replace into `ecs_admin_log` values('66','1429451547','1','编辑权限管理: tianxin100','121.12.23.140');");

require("../../inc/footer.php");
?>