-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 06 月 10 日 02:43
-- 服务器版本: 5.1.33
-- PHP 版本: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `work`
--

-- --------------------------------------------------------

--
-- 表的结构 `wx_user`
--

CREATE TABLE IF NOT EXISTS `wx_user` (
  `wx_id` int(3) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `wx_uname` varchar(50) DEFAULT NULL COMMENT '微信账号',
  `wx_action` varchar(30) DEFAULT NULL COMMENT '操作',
  `wx_ltime` varchar(50) DEFAULT NULL COMMENT '时间',
  PRIMARY KEY (`wx_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 导出表中的数据 `wx_user`
--

INSERT INTO `wx_user` (`wx_id`, `wx_uname`, `wx_action`, `wx_ltime`) VALUES
(2, 'ajflkdkadfdf', '123', 'asf');

-- --------------------------------------------------------

--
-- 表的结构 `w_advise`
--

CREATE TABLE IF NOT EXISTS `w_advise` (
  `a_id` int(4) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `a_name` varchar(10) NOT NULL COMMENT '建议人',
  `a_content` varchar(500) NOT NULL COMMENT '建议内容',
  `a_grade` varchar(4) NOT NULL COMMENT '建议级别',
  `a_time` date NOT NULL COMMENT '建议时间',
  `a_other` varchar(200) NOT NULL COMMENT '备注',
  PRIMARY KEY (`a_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='个人建议表' AUTO_INCREMENT=9 ;

--
-- 导出表中的数据 `w_advise`
--

INSERT INTO `w_advise` (`a_id`, `a_name`, `a_content`, `a_grade`, `a_time`, `a_other`) VALUES
(1, '李四', '改进宿舍住宿环境', '重要', '2015-10-07', '建议不错'),
(3, '张文', '改善食堂环境', '重要', '2015-10-09', '建议不错'),
(4, '张丽丽', '改善食物质量', '非常重要', '2015-10-02', '很不错'),
(5, '牛文', '改进教师环境', '非常重要', '2015-10-10', '绝对重要'),
(6, '牛佳慧', '不要伪装', '特别重要', '2015-10-06', '特别不错'),
(7, '神皇', '                	\r\n                改善住宿和教师环境', '重要', '2015-10-22', '                	\r\n                该建议非常重要'),
(8, '李国豪', '希望贵校能够打造震惊世界的中国功夫巨星', '一般', '1995-09-02', ' 好\r\n                ');

-- --------------------------------------------------------

--
-- 表的结构 `w_applyjob`
--

CREATE TABLE IF NOT EXISTS `w_applyjob` (
  `aj_id` int(5) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `aj_name` varchar(20) NOT NULL COMMENT '求职人员',
  `aj_user` char(12) NOT NULL COMMENT '求职用户',
  `aj_post` varchar(50) NOT NULL COMMENT '求职岗位',
  `aj_tel` char(11) NOT NULL COMMENT '联系方式',
  `aj_money` int(4) NOT NULL COMMENT '目标薪金',
  `aj_techang` varchar(30) NOT NULL COMMENT '技术特长',
  `aj_remaks` varchar(50) NOT NULL COMMENT '备注',
  PRIMARY KEY (`aj_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='求职表' AUTO_INCREMENT=8 ;

--
-- 导出表中的数据 `w_applyjob`
--

INSERT INTO `w_applyjob` (`aj_id`, `aj_name`, `aj_user`, `aj_post`, `aj_tel`, `aj_money`, `aj_techang`, `aj_remaks`) VALUES
(2, '李四', 's13326343312', '网页设计', '13326344456', 5000, '网页设计与美工', '不错'),
(6, '李三', 's13326343313', '编程人员', '13326343312', 7000, '精通php编程、java、c语言，熟悉美工         ', ''),
(4, '李六', 's13326343314', '软件编程', '13326343312', 5000, '善于编程', '不错'),
(5, '赵丽颖', 's13326343315', '技术与服务', '13326343313', 40000, '善于演绎与服务', '不错'),
(7, '李三宝', 's13326343311', 'php高级架构师', '13326343311', 10000, '善于写需求分析	\r\n                ', '希望贵公司给我一个机会，我肯定好好干       	\r\n                ');

-- --------------------------------------------------------

--
-- 表的结构 `w_class`
--

CREATE TABLE IF NOT EXISTS `w_class` (
  `c_id` int(4) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `c_name` varchar(10) NOT NULL COMMENT '班级姓名',
  `g_name` varchar(10) NOT NULL COMMENT '年级',
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='班级表' AUTO_INCREMENT=10 ;

--
-- 导出表中的数据 `w_class`
--

INSERT INTO `w_class` (`c_id`, `c_name`, `g_name`) VALUES
(7, 'p5', '14级'),
(2, 'p2', '14级'),
(3, 'p6', '14级'),
(4, '美1', '15级'),
(5, '美2', '15级'),
(6, '美3', '15级'),
(9, '美4', '15级');

-- --------------------------------------------------------

--
-- 表的结构 `w_donate`
--

CREATE TABLE IF NOT EXISTS `w_donate` (
  `d_id` int(4) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `d_name` varchar(10) NOT NULL COMMENT '捐赠人',
  `d_money` int(5) NOT NULL COMMENT '金额',
  `t_id` int(1) NOT NULL COMMENT '捐赠类型（外键）',
  `d_time` date NOT NULL COMMENT '捐赠时间',
  `d_tel` char(11) NOT NULL COMMENT '联系方式',
  `d_shifou` int(1) NOT NULL COMMENT '是否在前台显示（1为显示 0为不显示）',
  `d_remarks` varchar(50) NOT NULL COMMENT '备注',
  PRIMARY KEY (`d_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='捐赠表' AUTO_INCREMENT=9 ;

--
-- 导出表中的数据 `w_donate`
--

INSERT INTO `w_donate` (`d_id`, `d_name`, `d_money`, `t_id`, `d_time`, `d_tel`, `d_shifou`, `d_remarks`) VALUES
(1, '李三', 120, 1, '2015-10-08', '13326343311', 1, '希望对我所捐助的学生有帮助'),
(2, '李珊珊', 300, 3, '2015-10-12', '13326343312', 1, '希望对学校有大大的帮助'),
(4, '马冬梅', 200, 1, '2015-10-20', '13326343316', 1, '无'),
(5, '朱晓', 1000, 2, '2014-10-23', '13326343317', 1, '好'),
(6, '逍遥', 1200, 2, '1994-09-12', '13326343317', 0, '                	                好好用'),
(8, '魏茂磊', 1000, 2, '1992-09-01', '13326343310', 1, '好好啊哈哈哦啊                ');

-- --------------------------------------------------------

--
-- 表的结构 `w_enterprise`
--

CREATE TABLE IF NOT EXISTS `w_enterprise` (
  `e_id` int(4) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `e_name` varchar(20) NOT NULL COMMENT '企业名称',
  `e_add` varchar(25) NOT NULL COMMENT '企业地址',
  `e_intro` varchar(500) NOT NULL COMMENT '企业简介',
  `e_img` varchar(20) NOT NULL COMMENT '企业图片',
  `e_tel` char(11) NOT NULL COMMENT '联系方式',
  `e_mil` varchar(20) NOT NULL COMMENT '企业邮箱',
  `e_user` char(12) NOT NULL COMMENT '企业用户账号',
  `e_pwd` varchar(8) NOT NULL COMMENT '企业密码',
  PRIMARY KEY (`e_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='企业表' AUTO_INCREMENT=11 ;

--
-- 导出表中的数据 `w_enterprise`
--

INSERT INTO `w_enterprise` (`e_id`, `e_name`, `e_add`, `e_intro`, `e_img`, `e_tel`, `e_mil`, `e_user`, `e_pwd`) VALUES
(1, '龙翔企业', '上海市花园路二号', '主打棒棒哒             	                	                	主打食品                                                ', '1445504349.jpg', '021-6666666', 'long123@.com', 'q13326343111', '33333333'),
(2, '海信企业', '北京市朝阳区三号', '主打电子产品', '1449800141.jpg', '0431-653401', 'haixin@.com', 'q13326343112', '11111111'),
(3, '海尔', '青岛市花园路2号', '主打电子产品和销售', '1444875628.jpg', '0432-653401', 'haier@.com', 'q13326343113', '11111111'),
(5, '京东', '上海市花园路', '主打电子销售', '1444875799.jpg', '010-1534011', 'jingdong@.com', 'q13326343115', '11111111'),
(6, '石化有限公司', '山东省济南市', '主打石油', '1445323179.jpg', '021-2556870', '123@.com', 'q13326343114', '11111111'),
(10, '电信', '北京市    ', '国有电信企业', '1445755689.jpg', '010-8888888', '123@qq.com', 'q13326343116', '11111111');

-- --------------------------------------------------------

--
-- 表的结构 `w_grade`
--

CREATE TABLE IF NOT EXISTS `w_grade` (
  `g_id` int(3) NOT NULL AUTO_INCREMENT COMMENT '年级编号',
  `g_name` varchar(10) NOT NULL COMMENT '年级名称',
  PRIMARY KEY (`g_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='年级表' AUTO_INCREMENT=4 ;

--
-- 导出表中的数据 `w_grade`
--

INSERT INTO `w_grade` (`g_id`, `g_name`) VALUES
(1, '15级'),
(2, '14级');

-- --------------------------------------------------------

--
-- 表的结构 `w_invite`
--

CREATE TABLE IF NOT EXISTS `w_invite` (
  `i_id` int(5) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `i_name` varchar(40) NOT NULL COMMENT '招聘公司',
  `i_user` char(12) NOT NULL COMMENT '招聘用户账号',
  `i_num` int(4) NOT NULL COMMENT '招聘人数',
  `i_reward` varchar(4) NOT NULL COMMENT '悬赏',
  `i_dizhi` varchar(100) NOT NULL COMMENT '公司地址',
  `i_jinyan` varchar(6) NOT NULL COMMENT '工作经验',
  `i_sexyq` varchar(4) NOT NULL COMMENT '性别要求',
  `i_tel` char(11) NOT NULL COMMENT '联系方式',
  `i_into` varchar(50) NOT NULL COMMENT '招聘介绍',
  `i_time` varchar(11) NOT NULL COMMENT '到期时间',
  PRIMARY KEY (`i_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='公司招聘表' AUTO_INCREMENT=14 ;

--
-- 导出表中的数据 `w_invite`
--

INSERT INTO `w_invite` (`i_id`, `i_name`, `i_user`, `i_num`, `i_reward`, `i_dizhi`, `i_jinyan`, `i_sexyq`, `i_tel`, `i_into`, `i_time`) VALUES
(2, '海尔公司', 'q13326343112', 1, '否', '青岛市南山路3号', '不需要', '男', '0532-563401', '需网络主管', '2016/10/23'),
(3, '龙文有限公司', 'q13326343113', 3, '是', '威海市二号', '不需要', '女', '0631-645234', '女员工管理员，薪金面谈', '2016/10/12'),
(5, 'EVA科技', 'q13326343114', 1, '是', '炎黄市中心', '需要', '不限', '000-1010101', '机甲驾驶员', '2016/10/23'),
(6, 'CR铠甲研究中心', 'q13326343115', 1, '是', '炎黄市铠甲路3号', '需要', '不限', '000-1101101', '铠甲召唤人员一名', '2016/10/12'),
(7, '北京食品有限公司', 'q13326343116', 2, '是', '北京市花园路', '不需', '不限', '010-1108888', '技术管理员', '2016/10/20'),
(8, '弑神者有限公司', 'q13326343117', 20, '是', '炎黄市北海岸', '不需要', '不限', '000-2020202', '与神域细胞成功配对者', '2016/09/02'),
(13, '龙翔企业', 'q13326343111', 3, '是', '上海市花园路2号 	\r\n                ', '需要', '不限', '021-1235690', '需程序高级架构师', '2016-10-02');

-- --------------------------------------------------------

--
-- 表的结构 `w_lianxi`
--

CREATE TABLE IF NOT EXISTS `w_lianxi` (
  `l_id` int(2) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `l_name` char(6) NOT NULL COMMENT '姓名',
  `l_class` int(2) NOT NULL COMMENT '班级编号',
  `l_nation` char(6) NOT NULL COMMENT '民族',
  `l_sex` char(1) NOT NULL COMMENT '性别',
  `id` int(2) NOT NULL COMMENT 'lianxi2的主键',
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 导出表中的数据 `w_lianxi`
--

INSERT INTO `w_lianxi` (`l_id`, `l_name`, `l_class`, `l_nation`, `l_sex`, `id`) VALUES
(1, '李三', 1, '汉族', '1', 1),
(2, '李四', 1, '回族', '男', 0),
(4, '张丽奥', 2, '兽族', '女', 0),
(6, '张三丰', 2, '女真族', '男', 0);

-- --------------------------------------------------------

--
-- 表的结构 `w_lianxi2`
--

CREATE TABLE IF NOT EXISTS `w_lianxi2` (
  `id` int(2) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `name` varchar(6) NOT NULL COMMENT '姓名',
  `age` int(2) NOT NULL COMMENT '年龄',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 导出表中的数据 `w_lianxi2`
--

INSERT INTO `w_lianxi2` (`id`, `name`, `age`) VALUES
(1, '朱晓', 1);

-- --------------------------------------------------------

--
-- 表的结构 `w_manage`
--

CREATE TABLE IF NOT EXISTS `w_manage` (
  `m_id` int(4) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `m_name` varchar(20) NOT NULL COMMENT '用户账号',
  `m_pwd` varchar(20) NOT NULL COMMENT '登录密码',
  `m_sex` char(2) NOT NULL COMMENT '管理员性别',
  `m_age` int(3) NOT NULL COMMENT '年龄',
  `m_tel` char(11) NOT NULL COMMENT '联系方式',
  `m_jb` int(1) NOT NULL COMMENT '管理员级别（0为普通管理员1为超级管理员）',
  PRIMARY KEY (`m_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='管理员表' AUTO_INCREMENT=11 ;

--
-- 导出表中的数据 `w_manage`
--

INSERT INTO `w_manage` (`m_id`, `m_name`, `m_pwd`, `m_sex`, `m_age`, `m_tel`, `m_jb`) VALUES
(1, 'g18953827837', '123', '男', 34, '18953827837', 1),
(2, 'g13326343316', '123', '女', 33, '13326343316', 0),
(6, 'g13326343317', '123', '男', 35, '13326343317', 0),
(10, 'g13326343311', '12345678', '男', 23, '13326343311', 0);

-- --------------------------------------------------------

--
-- 表的结构 `w_member`
--

CREATE TABLE IF NOT EXISTS `w_member` (
  `m_id` int(4) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `m_name` varchar(20) NOT NULL COMMENT '用户名称',
  `mt_id` int(1) NOT NULL COMMENT '会员类型（外键）',
  `m_timestart` date NOT NULL COMMENT '注册时间',
  `m_timeend` date NOT NULL COMMENT '到期时间',
  `m_tel` char(11) NOT NULL COMMENT '联系方式',
  `m_remarks` varchar(100) NOT NULL COMMENT '备注',
  `m_shifou` int(1) NOT NULL COMMENT '是否审核通过（通过的为1 未通过的为0）',
  PRIMARY KEY (`m_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='会员表' AUTO_INCREMENT=20 ;

--
-- 导出表中的数据 `w_member`
--

INSERT INTO `w_member` (`m_id`, `m_name`, `mt_id`, `m_timestart`, `m_timeend`, `m_tel`, `m_remarks`, `m_shifou`) VALUES
(1, 's13326343311', 1, '2015-10-07', '2016-10-09', '13326343311', '    		学生    	', 1),
(2, 'q13326343111', 5, '2015-10-08', '2015-12-08', '13326343332', '    		    		    企业    	    	    	    	', 1),
(3, 'q13326343313', 5, '2015-10-08', '2016-10-08', '13326343313', '企业', 0),
(4, 's13326343314', 1, '2015-10-10', '2015-11-10', '13326343314', '学生', 0),
(6, 's13326343317', 1, '2015-10-06', '2015-11-06', '13326343315', '学生', 0),
(19, 's13326343311', 1, '2015-09-03', '2016-09-03', '13326343311', '    		adsdasdasd    	', 0);

-- --------------------------------------------------------

--
-- 表的结构 `w_membertype`
--

CREATE TABLE IF NOT EXISTS `w_membertype` (
  `mt_id` int(5) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `mt_name` varchar(10) NOT NULL COMMENT '会员类型',
  `mt_money` int(3) NOT NULL COMMENT '金额',
  `mt_fun` varchar(300) NOT NULL COMMENT '功能',
  PRIMARY KEY (`mt_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='会员类型表' AUTO_INCREMENT=8 ;

--
-- 导出表中的数据 `w_membertype`
--

INSERT INTO `w_membertype` (`mt_id`, `mt_name`, `mt_money`, `mt_fun`) VALUES
(6, '永久会员', 200, '能查看一些更具体的信息'),
(1, '月会员', 16, '    		    		能查看一些具体信息    	    	'),
(5, '年度会员', 60, '能查看一些具体信息');

-- --------------------------------------------------------

--
-- 表的结构 `w_mibao`
--

CREATE TABLE IF NOT EXISTS `w_mibao` (
  `m_id` int(4) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `m_user` char(12) NOT NULL COMMENT '用户名',
  `m_cname` varchar(10) NOT NULL COMMENT '初中班主任的名字',
  `m_fname` varchar(10) NOT NULL COMMENT '父亲的名字',
  PRIMARY KEY (`m_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 导出表中的数据 `w_mibao`
--

INSERT INTO `w_mibao` (`m_id`, `m_user`, `m_cname`, `m_fname`) VALUES
(1, 'q13326343111', '张树人', '无双皇'),
(2, 's13326343311', '景群好', '天皇');

-- --------------------------------------------------------

--
-- 表的结构 `w_serve`
--

CREATE TABLE IF NOT EXISTS `w_serve` (
  `s_id` int(5) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `s_name` varchar(10) NOT NULL COMMENT '学生姓名',
  `s_city` varchar(10) NOT NULL COMMENT '就业城市',
  `s_company` varchar(30) NOT NULL COMMENT '就业公司',
  `s_requite` varchar(30) NOT NULL COMMENT '福利',
  `s_img` varchar(20) NOT NULL COMMENT '就业照片',
  `s_time` date NOT NULL COMMENT '就业时间',
  `s_now` varchar(10) NOT NULL COMMENT '在职状态',
  `s_money` varchar(20) NOT NULL COMMENT '工资待遇',
  `s_progerss` varchar(100) NOT NULL COMMENT '工作历程',
  `s_gangwei` varchar(50) NOT NULL COMMENT '在职岗位',
  `s_help` varchar(10) NOT NULL COMMENT '求助信号',
  `s_remarkes` varchar(100) NOT NULL COMMENT '备注',
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='就业服务表' AUTO_INCREMENT=8 ;

--
-- 导出表中的数据 `w_serve`
--

INSERT INTO `w_serve` (`s_id`, `s_name`, `s_city`, `s_company`, `s_requite`, `s_img`, `s_time`, `s_now`, `s_money`, `s_progerss`, `s_gangwei`, `s_help`, `s_remarkes`) VALUES
(1, '王凤梅', '上海', '上海军医外科', '五险一金', '1449800243.jpg', '2015-10-10', '在职', '月薪3000', '三年', '网络管理员', '无', '无'),
(3, '李晓雅', '青岛', '青岛科技大', '五险一金', '1449800254.jpg', '2015-10-06', '在职', '月薪9000', '四年', '高级架构师', '无', '无'),
(4, '夏洛克', '泰安', '泰安华夏科技有限公司', '无限加一金 公司提供住宿', '1449800280.jpg', '2015-10-07', '在职', '月薪10000', '六年', '高级架构设计师', '无', '无'),
(5, '曾志伟', '东海市', '东海市特警支队', '五险一金 加住宿房', '1449800291.jpg', '2015-10-06', '在职', '月薪4000', '五年', '证物分析科', '无', '无'),
(6, '李万盆', '上海', '上海市万达科技', '五险一金', '1445224779.jpeg', '2012-10-19', '在职', '3000', '三年', '技术主管', '无', '无'),
(7, '小李飞三', '上海', '隆华食品有限公司', '五险加公司给住房\r\n                ', '1445563587.jpg', '2000-09-12', '在职', '20000', '六年', '架构师', '无', '好好舔上司  	\r\n                ');

-- --------------------------------------------------------

--
-- 表的结构 `w_student`
--

CREATE TABLE IF NOT EXISTS `w_student` (
  `s_id` int(5) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `s_name` varchar(10) NOT NULL COMMENT '姓名',
  `s_sex` char(2) NOT NULL COMMENT '性别',
  `s_bir` varchar(10) NOT NULL COMMENT '出生日期',
  `s_tel` char(11) NOT NULL COMMENT '手机',
  `s_qq` char(10) NOT NULL COMMENT 'qq',
  `s_img` char(20) NOT NULL COMMENT '头像',
  `s_zj` char(18) NOT NULL COMMENT '身份证号',
  `g_id` varchar(10) NOT NULL COMMENT '年级',
  `c_id` varchar(4) NOT NULL COMMENT '班级',
  `s_mil` varchar(20) NOT NULL COMMENT '邮箱',
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='学生信息表' AUTO_INCREMENT=6 ;

--
-- 导出表中的数据 `w_student`
--

INSERT INTO `w_student` (`s_id`, `s_name`, `s_sex`, `s_bir`, `s_tel`, `s_qq`, `s_img`, `s_zj`, `g_id`, `c_id`, `s_mil`) VALUES
(1, '李珊', '女', '1994/12/3', '18953827876', '1621965661', '1449800441.jpg', '371202199604257111', '2015级', '5', '161@123.com'),
(2, '张华', '男', '1994/02/12', '13326343322', '1621965662', '1449800448.jpg', '371201199604257112', '2015级', '2', '123@12.com'),
(5, '李三', '男', '1995/12/01', '13326343312', '1621965660', '1444825379.jpg', '371202199604257120', '2014级', '2', '12346@qq.com');

-- --------------------------------------------------------

--
-- 表的结构 `w_typedonate`
--

CREATE TABLE IF NOT EXISTS `w_typedonate` (
  `t_id` int(4) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `t_type` varchar(10) NOT NULL COMMENT '捐赠类型',
  PRIMARY KEY (`t_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='捐赠对象表' AUTO_INCREMENT=4 ;

--
-- 导出表中的数据 `w_typedonate`
--

INSERT INTO `w_typedonate` (`t_id`, `t_type`) VALUES
(1, '学生'),
(2, '学校'),
(3, '专项基金会');

-- --------------------------------------------------------

--
-- 表的结构 `w_user`
--

CREATE TABLE IF NOT EXISTS `w_user` (
  `u_id` int(3) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `u_name` varchar(12) NOT NULL COMMENT '用护账号',
  `u_pwd` varchar(8) NOT NULL COMMENT '用户密码',
  `u_tel` char(11) NOT NULL COMMENT '联系方式',
  `u_nicheng` varchar(20) NOT NULL COMMENT '用户昵称',
  `u_gexin` varchar(30) NOT NULL COMMENT '个性签名',
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- 导出表中的数据 `w_user`
--

INSERT INTO `w_user` (`u_id`, `u_name`, `u_pwd`, `u_tel`, `u_nicheng`, `u_gexin`) VALUES
(1, 's13326343311', '22222222', '13326343310', '莲花君', '出淤泥而不染，浊青莲而不夭。             '),
(2, 's13326343312', '12345678', '13326343312', '一帘幽梦', '我就是我，无可替代。'),
(21, 's13371020121', '12345678', '13371020121', '5765', 'uyuiy\r\n                '),
(20, 's18953827834', '12345678', '18953827834', 'sdfsdf', '          adfadfadsf      	\r\n '),
(19, 's18953827833', '12345678', '18953827833', '', ''),
(18, 's18953827837', '12345678', '18953827834', 'bafd', '                	\r\n           '),
(17, 's18953827835', '12345678', '18953827837', '婉约', '                	\r\n           '),
(22, 'admin', 'admin', '', '', ''),
(23, 's12345678912', '12345678', '18005391529', 'nihoa ', '                	\r\n           ');
