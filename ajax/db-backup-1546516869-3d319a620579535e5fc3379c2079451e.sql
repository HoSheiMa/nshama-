DROP TABLE IF EXISTS active_t;

CREATE TABLE `active_t` (
  `id` text COLLATE utf8_bin NOT NULL,
  `email` text COLLATE utf8_bin NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `state` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO active_t VALUES("5c294ec4c4a041.15136281","user@user.user","جديد","3");



DROP TABLE IF EXISTS active_v;

CREATE TABLE `active_v` (
  `id` text COLLATE utf8_bin NOT NULL,
  `email` text COLLATE utf8_bin NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `state` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO active_v VALUES("1242","vakozerugo@zdfpost.net","title","2"),
("124s2","vakozerugo@zdfpost.net","title","2"),
("12sa42","vakozerugo@zdfpost.net","title","2"),
("5c1b375e5fe5d4.74708972","vakozerugo@zdfpost.net","test_sup","3"),
("5c1c40b22b9525.26052111","vakozerugo@zdfpost.net","test__","3"),
("1242","vakozerugo@zdfpost.net","title","2"),
("124s2","vakozerugo@zdfpost.net","title","2"),
("12sa42","vakozerugo@zdfpost.net","title","2"),
("5c1b375e5fe5d4.74708972","vakozerugo@zdfpost.net","test_sup","3"),
("5c1c40b22b9525.26052111","vakozerugo@zdfpost.net","test__","3"),
("5c290d1e2b3415.96948626","user@user.user","عنوان جديد","3"),
("5c290d1e2b3415.96948626","user@user.user","عنوان جديد","3"),
("5c2954dc36ff69.58770281","user@user.user","dfgiq","3"),
("5c2955ede46060.44450421","user@user.user","saf","3");



DROP TABLE IF EXISTS admins;

CREATE TABLE `admins` (
  `id` text COLLATE utf8_bin NOT NULL,
  `username` text COLLATE utf8_bin NOT NULL,
  `password` text COLLATE utf8_bin NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO admins VALUES("1","admin@admin.co","admin44","Admin"),
("1","admin@admin.co","admin44","Admin");



DROP TABLE IF EXISTS bookshowcase;

CREATE TABLE `bookshowcase` (
  `id` text COLLATE utf8_bin NOT NULL,
  `writer` text COLLATE utf8_bin NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `body` text COLLATE utf8_bin NOT NULL,
  `cover` text COLLATE utf8_bin NOT NULL,
  `source` text COLLATE utf8_bin NOT NULL,
  `tag` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO bookshowcase VALUES("2","writer2","bookname21","long body losng body long body long body long body long body long body long body long body long body long body long body long body long body long body long body long body long body","assets/5c234b0f1485e1.64572235.jpg","assets/5c234acf3d4ea7.49247616.pdf","كتب دين");



DROP TABLE IF EXISTS c_t_;

CREATE TABLE `c_t_` (
  `name` text COLLATE utf8_bin NOT NULL,
  `img` text COLLATE utf8_bin NOT NULL,
  `id` text COLLATE utf8_bin NOT NULL,
  `email` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;




DROP TABLE IF EXISTS c_v_;

CREATE TABLE `c_v_` (
  `name` text COLLATE utf8_bin NOT NULL,
  `img` text COLLATE utf8_bin NOT NULL,
  `id` text COLLATE utf8_bin NOT NULL,
  `email` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO c_v_ VALUES("جميعة التطوع","https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3GgB-8mhisjwekU587x6CyWnYmzzygaj1QoMoolP2G8X-hG5k","758923hf","vakozerugo@zdfpost.net"),
("جميعة التطوع","https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3GgB-8mhisjwekU587x6CyWnYmzzygaj1QoMoolP2G8X-hG5k","758923hf","vakozerugo@zdfpost.net"),
("","assets/5c295507509d67.74311497.png","5c2954dc36ff69.58770281","user@user.user"),
("","assets/5c2955444602a7.47970829.png","5c2954dc36ff69.58770281","user@user.user"),
("","assets/5c295560e73b08.29746266.png","5c2954dc36ff69.58770281","user@user.user"),
("","assets/5c2956455cf9a5.42397878.png","5c2955ede46060.44450421","user@user.user"),
("","../assets/5c295733e15cf0.82938562.jpg","5c2955ede46060.44450421","user@user.user"),
("saf","../assets/5c2957c4890277.34237087.jpg","5c2955ede46060.44450421","user@user.user");



DROP TABLE IF EXISTS cards;

CREATE TABLE `cards` (
  `id` text COLLATE utf8_bin NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `img` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;




DROP TABLE IF EXISTS certificates;

CREATE TABLE `certificates` (
  `id` text COLLATE utf8_bin NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `img` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO certificates VALUES("id5740356","test","assets/5c0cc1df979c34.49159271.jpg"),
("id50537109","daDAS","assets/5c1c4cd3c300b4.37519821.jpg"),
("id5740356","test","assets/5c0cc1df979c34.49159271.jpg"),
("id50537109","daDAS","assets/5c1c4cd3c300b4.37519821.jpg");



DROP TABLE IF EXISTS creater;

CREATE TABLE `creater` (
  `id` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `work` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `img` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO creater VALUES("asd2c","name","work name","https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJTMIfMNAlxHc1eMH2e-gn_gSY3zy6NZhw4MRCjD2V9S03mZh_"),
("asd2c","name","work name","https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJTMIfMNAlxHc1eMH2e-gn_gSY3zy6NZhw4MRCjD2V9S03mZh_");



DROP TABLE IF EXISTS event_txt;

CREATE TABLE `event_txt` (
  `id` text COLLATE utf8_bin NOT NULL,
  `title` text COLLATE utf8_bin NOT NULL,
  `text` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO event_txt VALUES("id69479370","حدث جديد","شبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبت"),
("id56106567","عنوان ","محتوي"),
("id25497436","new2","hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x "),
("id31686401","title","text"),
("id15551757","عنوان جميل","المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي "),
("id69479370","حدث جديد","شبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبت"),
("id56106567","عنوان ","محتوي"),
("id25497436","new2","hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x "),
("id31686401","title","text"),
("id15551757","عنوان جميل","المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي "),
("id21279907","خبر جديد"," المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي");



DROP TABLE IF EXISTS images;

CREATE TABLE `images` (
  `id` text COLLATE utf8_bin NOT NULL,
  `img` text COLLATE utf8_bin NOT NULL,
  `title` text COLLATE utf8_bin NOT NULL,
  `tag` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO images VALUES("12321","assets/5c296c7cc11029.35186655.jpg","صورة ليوم سعيد","صور تذكارية");



DROP TABLE IF EXISTS info;

CREATE TABLE `info` (
  `tag` text COLLATE utf8_bin NOT NULL,
  `data` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO info VALUES("views","1307"),
("asks","0"),
("views","1307"),
("users_signup","2"),
("asks","0"),
("users_signup","2");



DROP TABLE IF EXISTS members;

CREATE TABLE `members` (
  `id` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `work` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `img` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO members VALUES("asf1","name","work name","https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJTMIfMNAlxHc1eMH2e-gn_gSY3zy6NZhw4MRCjD2V9S03mZh_"),
("asf1s","name","work name","https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJTMIfMNAlxHc1eMH2e-gn_gSY3zy6NZhw4MRCjD2V9S03mZh_"),
("id87103271","SAFKPO2","OPJPOFQJ","assets/5c2d1bf08af466.35287850.jpg"),
("asf1","name","work name","https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJTMIfMNAlxHc1eMH2e-gn_gSY3zy6NZhw4MRCjD2V9S03mZh_"),
("id9948730","hello","opjfopasj1","assets/5c0c61421cf131.57558212.jpg"),
("asf1s","name","work name","https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJTMIfMNAlxHc1eMH2e-gn_gSY3zy6NZhw4MRCjD2V9S03mZh_"),
("id87103271","SAFKPO2","OPJPOFQJ","assets/5c2d1bf08af466.35287850.jpg"),
("id9948730","hello","opjfopasj1","assets/5c0c61421cf131.57558212.jpg");



DROP TABLE IF EXISTS problem_ask;

CREATE TABLE `problem_ask` (
  `address` text COLLATE utf8_bin NOT NULL,
  `problem` text COLLATE utf8_bin NOT NULL,
  `date` text COLLATE utf8_bin NOT NULL,
  `id` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;




DROP TABLE IF EXISTS statistics;

CREATE TABLE `statistics` (
  `id` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `icon_name` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `title` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `num` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO statistics VALUES("fsf289","group","title","12412"),
("id42556762","group","new","500"),
("id30932617","check_circle","title","23589"),
("id66659545","favorite","<h3 class=text-danger>title</h3>","23574"),
("fsf289","group","title","12412"),
("id42556762","group","new","500"),
("id55578613","group","team","787878"),
("id30932617","check_circle","title","23589"),
("id66659545","favorite","<h3 class=text-danger>title</h3>","23574");



DROP TABLE IF EXISTS supporters;

CREATE TABLE `supporters` (
  `id` text CHARACTER SET utf8 NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `info` text CHARACTER SET utf8 NOT NULL,
  `img` text CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO supporters VALUES("id49798583","test","test1","assets/5c0cb890085e14.35508144.png"),
("id49798583","test","test1","assets/5c0cb890085e14.35508144.png");



DROP TABLE IF EXISTS supporters_users;

CREATE TABLE `supporters_users` (
  `name` text COLLATE utf8_bin NOT NULL,
  `email` text COLLATE utf8_bin NOT NULL,
  `pass` text COLLATE utf8_bin NOT NULL,
  `address` text COLLATE utf8_bin NOT NULL,
  `about` text COLLATE utf8_bin NOT NULL,
  `officer` text COLLATE utf8_bin NOT NULL,
  `ophone` text COLLATE utf8_bin NOT NULL,
  `owork` text COLLATE utf8_bin NOT NULL,
  `oemail` text COLLATE utf8_bin NOT NULL,
  `request_name` text COLLATE utf8_bin NOT NULL,
  `request_phone` text COLLATE utf8_bin NOT NULL,
  `request_id` text COLLATE utf8_bin NOT NULL,
  `img` text COLLATE utf8_bin NOT NULL,
  `access` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO supporters_users VALUES("test_sup","test_sup@test_sup.co","ىثص حشسسصقخي","test_sup","test_sup","test_sup","test_sup","test_sup","test_sup@testsup.co","test_sup","test_sup","test_sup","5c1b36ca5b13b5.13936678.jpg","0"),
("test_sup","test_sup@test_sup.co","ىثص حشسسصقخي","test_sup","test_sup","test_sup","test_sup","test_sup","test_sup@testsup.co","test_sup","test_sup","test_sup","5c1b36ca5b13b5.13936678.jpg","0");



DROP TABLE IF EXISTS team_user;

CREATE TABLE `team_user` (
  `name` text COLLATE utf8_bin NOT NULL,
  `address` text COLLATE utf8_bin NOT NULL,
  `email` text COLLATE utf8_bin NOT NULL,
  `pass` text COLLATE utf8_bin NOT NULL,
  `img` text COLLATE utf8_bin NOT NULL,
  `about` text COLLATE utf8_bin NOT NULL,
  `track` text COLLATE utf8_bin NOT NULL,
  `phone` text COLLATE utf8_bin NOT NULL,
  `telphone` text COLLATE utf8_bin NOT NULL,
  `facebook` text COLLATE utf8_bin NOT NULL,
  `twitter` text COLLATE utf8_bin NOT NULL,
  `instagram` text COLLATE utf8_bin NOT NULL,
  `officer` text COLLATE utf8_bin NOT NULL,
  `ophone` text COLLATE utf8_bin NOT NULL,
  `owork` text COLLATE utf8_bin NOT NULL,
  `oemail` text COLLATE utf8_bin NOT NULL,
  `leader_name` text COLLATE utf8_bin NOT NULL,
  `leader_phone` text COLLATE utf8_bin NOT NULL,
  `leader_id` text COLLATE utf8_bin NOT NULL,
  `vision` text COLLATE utf8_bin NOT NULL,
  `message` text COLLATE utf8_bin NOT NULL,
  `goals` text COLLATE utf8_bin NOT NULL,
  `creator` text COLLATE utf8_bin NOT NULL,
  `access` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO team_user VALUES("فريق تجريبي","ijsfa","eefw@qwe.qwe","123","5c290cb50d23c5.90020440.jpg","fkeowkio","[\"4\",\"5\",\"6\",\"11\",\"12\",\"13\"]","w9889","789","7897q87","89789","78","789","7","897","89","897","89789","78","7897","897","897","[[\"987\",\"789\",\"7897\"], [\"897\",\"789\",\"89789\"], [\"89789\",\"789\",\"789\"]]","1"),
("فريق الاول","","test@test.co","12","5c19b5e75b7ce6.45022646.jpg","فريق الاول","[\"3\",\"5\",\"6\",\"9\",\"11\",\"12\",\"13\",\"14\"]","35723895789","87238950708907","87328950798","789723895789","78957238957","82395723897","358237897","8789275897","test@test.co","AKFPASKFP","OJIO","ASFKASJFOAS","AFOPAJ","OPJFOSPAJPFO","JOJFOJFPOQWJPOJ","[[\"POJPOQWFJIOQWJD\",\"JOP\",\"JOJFOQWJO\"], [\"IWJOP\",\"JWOFJEO\",\"PQWJOPFJQWPOJ\"], [\"JOJDWPOJDPO\",\"JOJFOPQJOPJO\",\"OPJQWFPOFJQWPO\"]]","0");



DROP TABLE IF EXISTS teams_members;

CREATE TABLE `teams_members` (
  `email` text COLLATE utf8_bin NOT NULL,
  `team_email` text COLLATE utf8_bin NOT NULL,
  `team_name` text COLLATE utf8_bin NOT NULL,
  `person_name` text COLLATE utf8_bin NOT NULL,
  `state` text COLLATE utf8_bin NOT NULL,
  `date` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;




DROP TABLE IF EXISTS time__users;

CREATE TABLE `time__users` (
  `email` text COLLATE utf8_bin NOT NULL,
  `full_time` text COLLATE utf8_bin NOT NULL,
  `time_V` text COLLATE utf8_bin NOT NULL,
  `time_T` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO time__users VALUES("vakozerugo@zdfpost.net","483","303","0"),
("user@user.user","225","185","40"),
("user@user.user","225","185","40"),
("user2@user2.user2","0","0","0"),
("vakozerugo@zdfpost.net","483","303","0"),
("user@user.user","225","185","40"),
("user@user.user","225","185","40"),
("user2@user2.user2","0","0","0");



DROP TABLE IF EXISTS time_t;

CREATE TABLE `time_t` (
  `id` text COLLATE utf8_bin NOT NULL,
  `email` text COLLATE utf8_bin NOT NULL,
  `total_time` text COLLATE utf8_bin NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;




DROP TABLE IF EXISTS time_v;

CREATE TABLE `time_v` (
  `id` text COLLATE utf8_bin NOT NULL,
  `email` text COLLATE utf8_bin NOT NULL,
  `total_time` text COLLATE utf8_bin NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;




DROP TABLE IF EXISTS topnews;

CREATE TABLE `topnews` (
  `img` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `title` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `smalltitle` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `id` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO topnews VALUES("assets/5c1ca1f4793bb4.01293609.jpg","<div class=\"row justify-content-center\"><div class=\"col-12\"><h1>خبر <span class=\"text-danger\">جديد</span></h1></div><div class=\"col-12\"><h5>نحتضن المتطوعين والمتطوعات</h5></div><div class=\"col-12\"><h5>فرص تطوعية   |   المساعدة في المبادرات الإنسانية   |   دورات تدريبية</h5></div></div>","<div class=\"col-12 text-center\"> <button class=\"btn btn-danger\">  !تواصل معنا </button>     <div style=\"width:10px;display:inline-block\"></div>     <button class=\"btn btn-danger\"> أعرف المزيد </button></div>","id80065917"),
("assets/5c1ca1f4793bb4.01293609.jpg","<div class=\"row justify-content-center\"><div class=\"col-12\"><h1>خبر <span class=\"text-danger\">جديد</span></h1></div><div class=\"col-12\"><h5>نحتضن المتطوعين والمتطوعات</h5></div><div class=\"col-12\"><h5>فرص تطوعية   |   المساعدة في المبادرات الإنسانية   |   دورات تدريبية</h5></div></div>","<div class=\"col-12 text-center\"> <button class=\"btn btn-danger\">  !تواصل معنا </button>     <div style=\"width:10px;display:inline-block\"></div>     <button class=\"btn btn-danger\"> أعرف المزيد </button></div>","id80065917");



DROP TABLE IF EXISTS topnews2;

CREATE TABLE `topnews2` (
  `img` text NOT NULL,
  `id` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `title` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `body` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO topnews2 VALUES("assets/5c297790658d33.24283727.png","id21279907","خبر جديد","تعريف للخبر الجديد");



DROP TABLE IF EXISTS trainers;

CREATE TABLE `trainers` (
  `id` text COLLATE utf8_bin NOT NULL,
  `cv` text COLLATE utf8_bin NOT NULL,
  `full_name` text COLLATE utf8_bin NOT NULL,
  `nu_id` text COLLATE utf8_bin NOT NULL,
  `pass` text COLLATE utf8_bin NOT NULL,
  `nationalty` text COLLATE utf8_bin NOT NULL,
  `national` text COLLATE utf8_bin NOT NULL,
  `date` text COLLATE utf8_bin NOT NULL,
  `email` text COLLATE utf8_bin NOT NULL,
  `phone` text COLLATE utf8_bin NOT NULL,
  `tel_phone` text COLLATE utf8_bin NOT NULL,
  `emr_phone` text COLLATE utf8_bin NOT NULL,
  `level` text COLLATE utf8_bin NOT NULL,
  `work` text COLLATE utf8_bin NOT NULL,
  `work_focus` text COLLATE utf8_bin NOT NULL,
  `jop_type` text COLLATE utf8_bin NOT NULL,
  `jop_manger` text COLLATE utf8_bin NOT NULL,
  `job_title` text COLLATE utf8_bin NOT NULL,
  `job_place` text COLLATE utf8_bin NOT NULL,
  `track` text COLLATE utf8_bin NOT NULL,
  `vol_time` text COLLATE utf8_bin NOT NULL,
  `expir` text COLLATE utf8_bin NOT NULL,
  `access` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO trainers VALUES("5","5c1ad2dcbca958.31940496.jpg","jgsdiojio igojeiowj","iojiowejioj","1234","سعودي","ذكر","2018-12-01","test_t@test.co","34567890-","34567890","4567890","1","2356789hjk","ewiohfio","1","نعم","fwefweij","jweiojgio","[2,3,4,5,6,7]","صباحًا","نعم","1"),
("5","5c1ad2dcbca958.31940496.jpg","jgsdiojio igojeiowj","iojiowejioj","1234","سعودي","ذكر","2018-12-01","test_t@test.co","34567890-","34567890","4567890","1","2356789hjk","ewiohfio","1","نعم","fwefweij","jweiojgio","[2,3,4,5,6,7]","صباحًا","نعم","1");



DROP TABLE IF EXISTS trainers info;

;

INSERT INTO trainers info VALUES("5","5c1ad2dcbca958.31940496.jpg","jgsdiojio igojeiowj","iojiowejioj","1234","سعودي","ذكر","2018-12-01","test_t@test.co","34567890-","34567890","4567890","1","2356789hjk","ewiohfio","1","نعم","fwefweij","jweiojgio","[2,3,4,5,6,7]","صباحًا","نعم","1"),
("5","5c1ad2dcbca958.31940496.jpg","jgsdiojio igojeiowj","iojiowejioj","1234","سعودي","ذكر","2018-12-01","test_t@test.co","34567890-","34567890","4567890","1","2356789hjk","ewiohfio","1","نعم","fwefweij","jweiojgio","[2,3,4,5,6,7]","صباحًا","نعم","1");



DROP TABLE IF EXISTS training_courses;

CREATE TABLE `training_courses` (
  `img` text COLLATE utf8_bin NOT NULL,
  `id` text COLLATE utf8_bin NOT NULL,
  `title` text COLLATE utf8_bin NOT NULL,
  `body` text COLLATE utf8_bin NOT NULL,
  `date` text COLLATE utf8_bin NOT NULL,
  `state` text COLLATE utf8_bin NOT NULL,
  `email` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO training_courses VALUES("assets/5c294ec4c49f78.78341729.png","5c294ec4c4a041.15136281","جديد","جديد","2018-01-01","1","eefw@qwe.qwe");



DROP TABLE IF EXISTS users;

CREATE TABLE `users` (
  `id` text COLLATE utf8_bin NOT NULL,
  `email` text COLLATE utf8_bin NOT NULL,
  `nu_id` text COLLATE utf8_bin NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `date` text COLLATE utf8_bin NOT NULL,
  `full_name` text COLLATE utf8_bin NOT NULL,
  `pass` text COLLATE utf8_bin NOT NULL,
  `nationalty` text COLLATE utf8_bin NOT NULL,
  `national` text COLLATE utf8_bin NOT NULL,
  `mobile` text COLLATE utf8_bin NOT NULL,
  `telphone` text COLLATE utf8_bin NOT NULL,
  `emr_phone` text COLLATE utf8_bin NOT NULL,
  `level` text COLLATE utf8_bin NOT NULL,
  `work` text COLLATE utf8_bin NOT NULL,
  `work_focus` text COLLATE utf8_bin NOT NULL,
  `job_type` text COLLATE utf8_bin NOT NULL,
  `job_title` text COLLATE utf8_bin NOT NULL,
  `job_place` text COLLATE utf8_bin NOT NULL,
  `track` text COLLATE utf8_bin NOT NULL,
  `expir` text COLLATE utf8_bin NOT NULL,
  `jop_manger` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO users VALUES("5","user@user.user","user","user","2018-01-01","user user","1234","سعودي","ذكر","user","user","userq","1","user","user","2","user","user","[\"4\",\"5\",\"6\",\"7\",\"12\",\"13\",\"14\"]","0","نعم"),
("5","user2@user2.user2","user2","hiewhio","2018-01-01","asfhi ohfih","user2","سعودي","ذكر","user2","user2","user2","1","user2","user2","2","user2","user2","[\"4\",\"5\",\"6\",\"11\",\"12\",\"13\"]","نعم","نعم"),
("5","user@user.user","user","user","2018-01-01","user user","1234","سعودي","ذكر","user","user","userq","1","user","user","2","user","user","[\"4\",\"5\",\"6\",\"7\",\"12\",\"13\",\"14\"]","0","نعم"),
("5","user2@user2.user2","user2","hiewhio","2018-01-01","asfhi ohfih","user2","سعودي","ذكر","user2","user2","user2","1","user2","user2","2","user2","user2","[\"4\",\"5\",\"6\",\"11\",\"12\",\"13\"]","نعم","نعم");



DROP TABLE IF EXISTS videos;

CREATE TABLE `videos` (
  `id` text COLLATE utf8_bin NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `body` text COLLATE utf8_bin NOT NULL,
  `source` text COLLATE utf8_bin NOT NULL,
  `tag` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO videos VALUES("id5c2391ea4eaa21.23301435","جديد","جديد","assets/5c239332ced357.35482577.mp4","فيديوهات دينة"),
("id5c2392e6816b14.91145619","جديد","جديد","assets/5c2392e6816d19.56664372.mp4","فيديوهات دينة");



DROP TABLE IF EXISTS volunteer opportunities;

;




DROP TABLE IF EXISTS volunteer opportunities info;

;




DROP TABLE IF EXISTS volunteers;

CREATE TABLE `volunteers` (
  `id` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `work` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `img` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO volunteers VALUES("asd2lp","name","work name","https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJTMIfMNAlxHc1eMH2e-gn_gSY3zy6NZhw4MRCjD2V9S03mZh_"),
("id8465576","test","test2","assets/5c2d1b8b964109.73701599.jpg"),
("id67034912","name test","work test","assets/5c0c73fed3f7b4.26048798.png"),
("id67034912","name test","work test","assets/5c0c73fed3f7b4.26048798.png"),
("asd2lp","name","work name","https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJTMIfMNAlxHc1eMH2e-gn_gSY3zy6NZhw4MRCjD2V9S03mZh_"),
("id8465576","test","test2","assets/5c2d1b8b964109.73701599.jpg");



DROP TABLE IF EXISTS web_info;

CREATE TABLE `web_info` (
  `tag` text COLLATE utf8_bin NOT NULL,
  `info` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO web_info VALUES("logo","assets/5c1f33e878b0e0.54368342.jpg"),
("bookTags","[\"كتب دين\",\"قسم جديد\"]"),
("Stop___web","true"),
("VideosTags","[\"فيديوهات دينة\",\"قسم جديد\"]"),
("STOPMSG","NOT WORK"),
("vote","true"),
("vote_q","هل التصميم"),
("vote_a","[\"جميل\",\"جيد\",\"ليس جيد\",\"قبيح\"]"),
("vote_data","[14,1,1,1]"),
("ads_html","\n\n<html></html>"),
("info_web_system","<div class=\"col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center wow bounceInLeft\" style=\"box-sizing: border-box; font-family: Cairo, sans-serif; position: relative; width: 1336px; min-height: 1px; padding-right: 15px; padding-left: 15px; flex: 0 0 100%; max-width: 100%; animation-name: bounceInLeft; color: #212529; font-size: 16px; visibility: visible; text-align: center !important;\" data-mce-style=\"box-sizing: border-box; font-family: Cairo, sans-serif; position: relative; width: 1336px; min-height: 1px; padding-right: 15px; padding-left: 15px; flex: 0 0 100%; max-width: 100%; animation-name: bounceInLeft; color: #212529; font-size: 16px; visibility: visible; text-align: center !important;\"><h3 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1.75rem;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1.75rem;\"><span style=\"background-color: rgb(204, 255, 255);\" data-mce-style=\"background-color: #ccffff;\">الرؤية و الرسالة والقيم</span></h3></div><div class=\"col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center wow bounceInRight\" style=\"box-sizing: border-box; font-family: Cairo, sans-serif; position: relative; width: 1336px; min-height: 1px; padding-right: 15px; padding-left: 15px; flex: 0 0 100%; max-width: 100%; animation-name: bounceInRight; color: #212529; font-size: 16px; visibility: visible; text-align: center !important;\" data-mce-style=\"box-sizing: border-box; font-family: Cairo, sans-serif; position: relative; width: 1336px; min-height: 1px; padding-right: 15px; padding-left: 15px; flex: 0 0 100%; max-width: 100%; animation-name: bounceInRight; color: #212529; font-size: 16px; visibility: visible; text-align: center !important;\"><div class=\"col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center wow bounceInRight\" style=\"box-sizing: border-box; position: relative; width: 1336px; min-height: 1px; padding-right: 15px; padding-left: 15px; flex: 0 0 100%; max-width: 100%; animation-name: bounceInRight; visibility: visible;\" data-mce-style=\"box-sizing: border-box; position: relative; width: 1336px; min-height: 1px; padding-right: 15px; padding-left: 15px; flex: 0 0 100%; max-width: 100%; animation-name: bounceInRight; visibility: visible;\"><h5 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1.25rem;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1.25rem;\">الرؤية مجتمع متكامل غني بثقافة العمل التطوعي</h5></div><div class=\"col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center wow bounceInLeft\" style=\"box-sizing: border-box; position: relative; width: 1336px; min-height: 1px; padding-right: 15px; padding-left: 15px; flex: 0 0 100%; max-width: 100%; animation-name: bounceInLeft; visibility: visible;\" data-mce-style=\"box-sizing: border-box; position: relative; width: 1336px; min-height: 1px; padding-right: 15px; padding-left: 15px; flex: 0 0 100%; max-width: 100%; animation-name: bounceInLeft; visibility: visible;\"><div class=\"col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center wow bounceInLeft\" style=\"box-sizing: border-box; position: relative; width: 1336px; min-height: 1px; padding-right: 15px; padding-left: 15px; flex: 0 0 100%; max-width: 100%; animation-name: bounceInLeft; visibility: visible;\" data-mce-style=\"box-sizing: border-box; position: relative; width: 1336px; min-height: 1px; padding-right: 15px; padding-left: 15px; flex: 0 0 100%; max-width: 100%; animation-name: bounceInLeft; visibility: visible;\"><h5 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1.25rem;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1.25rem;\">الرسالة تأسيس منظومة متكاملة متعددة الروافد للعمل التطوعي بالشراكة مع أفراد و مؤسسات المجتمع</h5></div></div><h5 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1.25rem;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1.25rem;\">الأهداف إنشاء قاعدة بيانات للعمل التطوعي في الممكلة العربية السعودية بناء شراكات مع جميع القطاعات الحكومية والخاصة العمل على تنظيم سياسات وتشريعات الأعمال التطوعية وتذليل معوقاتها تنفيذ دورات تعريفية وتدريبية للأفراد ( المتطوعين ) والمنظمات التي تستقطب المتطوعين رفع الوعي بالعمل التطوعي وتعزيزه قيم الجمعية : التميز في الأداء ، الشراكة ، الشفافية ، العمل بروح الجماعة ، المهنية</h5></div>"),
("vote_id","id36587"),
("ImagesTags","[\"صور تذكارية\"]"),
("info_web_2","<div style=\"box-sizing: border-box; font-family: Cairo, sans-serif; color: rgb(33, 37, 41); font-size: 16px; height: 100px;\"><br data-mce-bogus=\"1\"></div><div class=\"row\" style=\"box-sizing: border-box; font-family: Cairo, sans-serif; display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px; color: rgb(33, 37, 41); font-size: 16px;\"><div class=\"col text-right\" style=\"box-sizing: border-box; position: relative; width: 1396px; min-height: 1px; padding: 50px; flex-basis: 0px; flex-grow: 1; max-width: 100%; text-align: right !important;\"><h3 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: rgb(32, 201, 151); font-size: 1.75rem;\">خدماتنا</h3><h6 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1rem;\">التدريب والتوعية في مجال العمل التطوعي .</h6><h6 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1rem;\">ربط راغبي العمل التطوعي بالجهات المستفيدة .</h6><h6 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1rem;\">تقديم الدعم للمجموعات التطوعية وفق اتفاقيات قانونية .</h6><h6 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1rem;\">تنظيم برامج تطوعية لخدمة المجتمع .</h6><h6 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1rem;\">تنظيم الفعاليات والندوات في مجال العمل التطوعي .</h6><h6 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1rem;\">تنفيذ وتقديم الاستشارات والدراسات والاحصائيات في مجال العمل التطوعي .</h6><h6 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1rem;\">توثيق وحفظ الساعات التطوعية واستخراج قيمتها الاقتصادية بالريال السعودي .</h6></div></div>"),
("info_web_3","<h3 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #20c997; font-size: 1.75rem; text-align: right;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #20c997; font-size: 1.75rem; text-align: right;\"><br></h3><h3 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #20c997; font-size: 1.75rem; text-align: right;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #20c997; font-size: 1.75rem; text-align: right;\"><br></h3><h3 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #20c997; font-size: 1.75rem; text-align: right;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #20c997; font-size: 1.75rem; text-align: right;\"><br></h3><h3 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: rgb(32, 201, 151); font-size: 1.75rem; text-align: right;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #20c997; font-size: 1.75rem; text-align: right;\"><strong>شروط العضوية</strong></h3><h6 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #212529; font-size: 1rem; text-align: right;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #212529; font-size: 1rem; text-align: right;\">قبول طلب عضويته من مجلس الإدارة .</h6><h6 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #212529; font-size: 1rem; text-align: right;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #212529; font-size: 1rem; text-align: right;\">أن يكون فلسطيني الجنسية.</h6><h6 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #212529; font-size: 1rem; text-align: right;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #212529; font-size: 1rem; text-align: right;\">أن يكون كامل الأهلية المعتبرة شرعاً(عدا الصديق(</h6><h6 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #212529; font-size: 1rem; text-align: right;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #212529; font-size: 1rem; text-align: right;\">أن يكون غير محكوم عليه بإدانة في جريمة مخلة بالشرف أو الأمانة ما لم يكن قد رد اعتباره.</h6><h6 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #212529; font-size: 1rem; text-align: right;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #212529; font-size: 1rem; text-align: right;\">أن يكون قد سدد الاشتراك السنوي.</h6><div style=\"box-sizing: border-box; font-family: Cairo, sans-serif; color: #212529; font-size: 16px; text-align: right; height: 30px;\" data-mce-style=\"box-sizing: border-box; font-family: Cairo, sans-serif; color: #212529; font-size: 16px; text-align: right; height: 30px;\"><br></div><h3 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #20c997; font-size: 1.75rem; text-align: right;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #20c997; font-size: 1.75rem; text-align: right;\">فئات العضوية</h3><h5 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #20c997; font-size: 1.25rem; text-align: right;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #20c997; font-size: 1.25rem; text-align: right;\">عضو الشرف</h5><h6 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #212529; font-size: 1rem; text-align: right;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #212529; font-size: 1rem; text-align: right;\">هو العضو الذي تمنحه الجمعية عضويته نظير ما قدمه لها من خدمات جليلة مادية كانت أو معنوية ساعدت على تحقيق أهداف الجمعية. يحق لعضو الشرف حضور اجتماعات الجمعية العمومية و مناقشة ما يطرح فيها دون أن يكون له حق التصويت أو الترشيح لعضوية مجلس الإدارة.</h6><h5 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #20c997; font-size: 1.25rem; text-align: right;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #20c997; font-size: 1.25rem; text-align: right;\">العضو الفخري</h5><h6 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #212529; font-size: 1rem; text-align: right;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #212529; font-size: 1rem; text-align: right;\">هو العضو الذي تمنحه الجمعية العمومية عضوية فخرية بمجلس الإدارة و يكون له حق المناقشة في اجتماعات المجلس و لكن ليس له حق التصويت و لا يثبت بحضوره صحة الانعقاد.</h6>"),
("Contact_us","<h2 data-mce-style=\"text-align: right;\" style=\"text-align: right;\"><sup><span style=\"text-decoration: underline;\" data-mce-style=\"text-decoration: underline;\"><code>يمكنك التواصل معنا</code></span></sup></h2><h3 data-mce-style=\"text-align: right;\" style=\"text-align: right;\">يمكنك التواصل معنا و ارسال اي شكوة في اي وقت</h3><p style=\"text-align: right;\" data-mce-style=\"text-align: right;\">&nbsp;لطلب الدعم اضغط علي الزر و ابعت الشكوة الخاصة بك ولا تنسة ان تضع البريد الخاص بك لنراسلك :]</p><p><br data-mce-bogus=\"1\"></p><p><br data-mce-bogus=\"1\"></p>");



