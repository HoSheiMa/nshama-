DROP TABLE IF EXISTS active_t;

CREATE TABLE `active_t` (
  `id` text COLLATE utf8_bin NOT NULL,
  `email` text COLLATE utf8_bin NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `state` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO active_t VALUES("5c294ec4c4a041.15136281","user@user.user","جديد","3"),
("23523","jidsajio@dsa.das","test","1");



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
("5c2955ede46060.44450421","user@user.user","saf","3"),
("5c34b717a907d5.31990130","user@user.user1","gyu","0"),
("23523","jidsajio@dsa.das","test","1"),
("23523","vakozerugo@zdfpost.net","test","3"),
("5c3cf3f3a9c543.14905635","vakozerugo@zdfpost.net","تجربة","3"),
("5c34b717a907d5.31990130","vakozerugo@zdfpost.net","gyu","2"),
("5c3cf3f3a9c543.14905635","jidsajio@dsa.das","تجربة","3"),
("5c3cf3f3a9c543.14905635","omar1scout@hotmail.com","تجربة","2");



DROP TABLE IF EXISTS admins;

CREATE TABLE `admins` (
  `id` text COLLATE utf8_bin NOT NULL,
  `username` text COLLATE utf8_bin NOT NULL,
  `password` text COLLATE utf8_bin NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `access` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO admins VALUES("2","omar1scout@hotmail.com","a0566390715","omar1scout","[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\",\"14\",\"15\",\"16\",\"17\",\"18\",\"19\",\"20\",\"21\",\"22\",\"23\",\"24\",\"25\",\"26\",\"27\",\"28\",\"29\",\"30\",\"31\"]"),
("1","admin@admin.co","admin44","Admin","[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\",\"14\",\"15\",\"16\",\"17\",\"18\",\"19\",\"20\",\"21\",\"22\",\"23\",\"24\",\"25\",\"26\",\"27\",\"28\",\"29\",\"30\",\"31\"]\n");



DROP TABLE IF EXISTS appbar;

CREATE TABLE `appbar` (
  `title` text COLLATE utf8_bin NOT NULL,
  `link` text COLLATE utf8_bin NOT NULL,
  `visable` text COLLATE utf8_bin NOT NULL,
  `type` text COLLATE utf8_bin NOT NULL,
  `freeze` text COLLATE utf8_bin NOT NULL,
  `id_` text COLLATE utf8_bin NOT NULL,
  `spt` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO appbar VALUES("الصفحة الرئيسية","index.php","true","link","true","sad090",""),
("عن النادي","id234","true","dropdown","true","e21ef",""),
("خدماتنا","req.php?q=page7","true","link","true","k09d0",""),
("المتطوعين","req.php?q=page4","true","link","true","e0i012e",""),
("العضويات","req.php?q=page5","true","link","true","e21j09",""),
("شركاء و داعمين","req.php?q=page6","true","link","true","e2109",""),
("المعارض","id26","true","dropdown","true","214op",""),
("اتصل بنا","req.php?q=pagecallus","true","link","true","k0r9328e09","");



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

INSERT INTO bookshowcase VALUES("2","نادي النشامى","عمر فريد عالم","long body losng body long body long body long body long body long body long body long body long body long body long body long body long body long body long body long body long body","assets/5c3ce990663a99.96766454.jpg","assets/5c234acf3d4ea7.49247616.pdf","التقارير السنوية"),
("id5c4a17de5901d2.06752325","تجربة","تجربة","تجربة","assets/5c4a17df22a864.04808452.jpg","assets/5c4a17de590498.34276820.pdf","بوروينت");



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
("saf","../assets/5c2957c4890277.34237087.jpg","5c2955ede46060.44450421","user@user.user"),
("test","../assets/5c3cf392ae6ba6.11814713.jpg","23523","vakozerugo@zdfpost.net"),
("تجربة","../assets/5c3cf4555fb121.59286115.jpg","5c3cf3f3a9c543.14905635","vakozerugo@zdfpost.net"),
("اجتماع ","../assets/5c3f014c4823b6.66662068.jpg","","jidsajio@dsa.das"),
("الإجتماع الدوري للإدارة ","../assets/5c3f3b2278c326.72550420.jpg","","user@user.user"),
("الرحلة السنوية","../assets/5c3f3b47995404.71117263.jpg","","user@user.user"),
("حفظ النعمة","../assets/5c3f3b67460be5.70912408.png","","user@user.user"),
("نادي النشامى التطوعي | nshama","../assets/5c3f3bae8eb4f3.40135036.jpg","","user@user.user"),
("تجربة","../assets/5c3fc3518a9de9.72746277.png","","jidsajio@dsa.das");



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




DROP TABLE IF EXISTS creater;

CREATE TABLE `creater` (
  `id` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `work` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `img` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `phone` text NOT NULL,
  `twitter` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO creater VALUES("id96684077","عمر فريد عالم","المدير التنفيذي","assets/5c3cf9e256fa28.97826589.jpg","0566390713","https://twitter.com/omar1scout");



DROP TABLE IF EXISTS dropdown-info;

;




DROP TABLE IF EXISTS event_txt;

CREATE TABLE `event_txt` (
  `id` text COLLATE utf8_bin NOT NULL,
  `title` text COLLATE utf8_bin NOT NULL,
  `text` text COLLATE utf8_bin NOT NULL,
  `date` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO event_txt VALUES("id69479370","حدث جديد","شبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبت","2018-12-12"),
("id56106567","عنوان ","محتوي","2018-12-12"),
("id25497436","new2","hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x ","2018-12-12"),
("id31686401","title","text","2018-12-12"),
("id15551757","عنوان جميل","المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي ","2018-12-12"),
("id69479370","حدث جديد","شبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبتشبتشسحهخبتحخشستبخشستخبتشسخبت","2018-12-12"),
("id56106567","عنوان ","محتوي","2018-12-12"),
("id25497436","new2","hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x hello world!x ","2018-12-12"),
("id31686401","title","text","2018-12-12"),
("id15551757","عنوان جميل","المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي المحتوي ","2018-12-12"),
("id21279907","تعديل","<p>1111</p>","2018-12-12"),
("id16964721","test","test","Tuesday the 8th"),
("id8978271","afhsaiufhui","","11, 1, 2019"),
("id83303833","عنوان الخبر","<p>تهبتهخشستبهخشستبهختشسهخبتشستبهخبشستهخب</p>","11, 1, 2019"),
("id36551990","تجربة","<p>تجربة تجربة تجرببة&nbsp; <br></p><p>تجربة تجربة تجرببة&nbsp; <br></p><p>تجربة تجربة تجرببة&nbsp; <br></p><p>تجربة تجربة تجرببة&nbsp; <br></p><p>تجربة تجربة تجرببة&nbsp; <br></p><p>تجربة تجربة تجرببة&nbsp; <br></p><p>تجربة تجربة تجرببة&nbsp; <br></p><p>تجربة تجربة تجرببة&nbsp; <br></p><p><br></p><p><br></p>","14, 1, 2019");



DROP TABLE IF EXISTS images;

CREATE TABLE `images` (
  `id` text COLLATE utf8_bin NOT NULL,
  `img` text COLLATE utf8_bin NOT NULL,
  `title` text COLLATE utf8_bin NOT NULL,
  `tag` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO images VALUES("id5c3f3a5e17a3b4.10124244","assets/5c3f3a5e17a6d6.16683760.jpg","النشامى التطوعي","التسجيل"),
("id5c40bc25b200d3.95453811","assets/5c40bc25b20461.79364599.jpg","123","التسجيل"),
("id5c433762341d25.94225461","assets/5c433762342077.75537723.jpg","omar1scout","التسجيل"),
("id5c469cc53e31a0.28883408","assets/5c469cc53e3487.99392748.jpg","omar1scout","13dw"),
("id5c4a1821e7eda6.93688646","assets/5c4a1821e7f0c2.00111955.jpg","omar1scout","التسجيل");



DROP TABLE IF EXISTS info;

CREATE TABLE `info` (
  `tag` text COLLATE utf8_bin NOT NULL,
  `data` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO info VALUES("views","2697"),
("asks","-4"),
("views","2697"),
("users_signup","2"),
("asks","-4"),
("users_signup","2"),
("subs","[\"das.asfsa.as@saf.saf\",\"das.asfsa.as@saf.saf\",\"das.asfsa.as@saf.saf\",\"das.asfsa.as@saf.saf\",\"das.asfsa.as@saf.saf\",\"Farooos177fa@gmail.com\",\"0566390713\"]");



DROP TABLE IF EXISTS links;

CREATE TABLE `links` (
  `img-link` text COLLATE utf8_bin NOT NULL,
  `link` text COLLATE utf8_bin NOT NULL,
  `visable` text COLLATE utf8_bin NOT NULL,
  `id` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;




DROP TABLE IF EXISTS members;

CREATE TABLE `members` (
  `id` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `work` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `img` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `phone` text NOT NULL,
  `twitter` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO members VALUES("id7427978","name","work","assets/5c3f3a7c2cb750.30091069.jpg","239572389","kfposkpo"),
("id4937510","عمر فريد عالم","مدير ","assets/5c3cec1c00a476.06618822.jpeg","0566390713","omar1scout");



DROP TABLE IF EXISTS pages_content;

CREATE TABLE `pages_content` (
  `id` text COLLATE utf8_bin NOT NULL,
  `html` longtext COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO pages_content VALUES("id26","<p><span style=\"font-size: 20px; color: red;\">mmmmmm</span><br></p>"),
("id5c3ad54806a1c2.32753325","<p>سيسيسيسشيشس</p>"),
("id5c3ac21685acb6.94839031","<p><span style=\"font-size: 30px;\"><a class=\"fr-file fr-green\" href=\"blob:http%3A//nshama.net/98289fee-e0f6-4d3f-8b1c-d3c71a09d7df\" target=\"_blank\"></a></span></p>"),
("id5c3ba3493abd37.90137711","<p><br></p><p><br></p><p><strong><sup><span style=\"font-size: 18px;\">الأمين العام الأستاذ : فهد بن عبدالزراق الكبكبي&nbsp;</span></sup></strong></p><p><br></p><p><strong><sup><span style=\"font-size: 18px;\">​</span></sup></strong><br></p><p><strong><sup><span style=\"font-size: 18px;\">​</span></sup></strong><br></p>");



DROP TABLE IF EXISTS problem_ask;

CREATE TABLE `problem_ask` (
  `address` text COLLATE utf8_bin NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `problem` text COLLATE utf8_bin NOT NULL,
  `problem_type` text COLLATE utf8_bin NOT NULL,
  `title` text COLLATE utf8_bin NOT NULL,
  `date` text COLLATE utf8_bin NOT NULL,
  `id` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO problem_ask VALUES("ijioaj@sakfo.asf","asfjiasjfi","موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع موضوع ","شكوى","asfjijio","January 8, 2019, 6:59 am","id67440795"),
("jiosdfjio@f.asd","dasjio","jojfoas","استفسار","sfo","January 8, 2019, 6:36 am","id12603759");



DROP TABLE IF EXISTS recovery;

CREATE TABLE `recovery` (
  `email` text COLLATE utf8_bin NOT NULL,
  `type` text COLLATE utf8_bin NOT NULL,
  `key` text COLLATE utf8_bin NOT NULL
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

INSERT INTO supporters VALUES("id29261422","مركز حي الشرائع "," ","assets/5c3cecd2a4f665.43966859.jpg");



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

INSERT INTO supporters_users VALUES("test_sup","test_sup@test_sup.co","123456","test_sup","test_sup","test_sup","test_sup","test_sup","test_sup@testsup.co","test_sup","test_sup","test_sup","5c1b36ca5b13b5.13936678.jpg","1"),
("test_sup","test_sup@test_sup.co","123456","test_sup","test_sup","test_sup","test_sup","test_sup","test_sup@testsup.co","test_sup","test_sup","test_sup","5c1b36ca5b13b5.13936678.jpg","1"),
("النشامى التطوعي","eefw@qwe.qwe","123456","516516","5161","6161","15515","515151","eefw@qwe.qwe","55151","51561","5515","5c3d5f16923fa8.63724425.png","1");



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
  `access` text COLLATE utf8_bin NOT NULL,
  `profile_img` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO team_user VALUES("فريق الاول","","test@test.co","123456","5c19b5e75b7ce6.45022646.jpg","فريق الاول","[\"3\",\"5\",\"6\",\"9\",\"11\",\"12\",\"13\",\"14\"]","35723895789","87238950708907","87328950798","789723895789","78957238957","82395723897","358237897","8789275897","test@test.co","AKFPASKFP","OJIO","ASFKASJFOAS","AFOPAJ","OPJFOSPAJPFO","JOJFOJFPOQWJPOJ","[[\"POJPOQWFJIOQWJD\",\"JOP\",\"JOJFOQWJO\"], [\"IWJOP\",\"JWOFJEO\",\"PQWJOPFJQWPOJ\"], [\"JOJDWPOJDPO\",\"JOJFOPQJOPJO\",\"OPJQWFPOFJQWPO\"]]","1","");



DROP TABLE IF EXISTS teams_members;

CREATE TABLE `teams_members` (
  `email` text COLLATE utf8_bin NOT NULL,
  `team_email` text COLLATE utf8_bin NOT NULL,
  `team_name` text COLLATE utf8_bin NOT NULL,
  `person_name` text COLLATE utf8_bin NOT NULL,
  `state` text COLLATE utf8_bin NOT NULL,
  `date` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO teams_members VALUES("user@user.user1","jij","iohiohi","user","2","12, 1, 2019"),
("user@user.user1","eefw@qwe.qwe","فريق تجريبي","user","1","15, 1, 2019"),
("vakozerugo@zdfpost.net","jij","iohiohi","user","2","14, 1, 2019"),
("vakozerugo@zdfpost.net","eefw@qwe.qwe","فريق تجريبي","user","1","15, 1, 2019");



DROP TABLE IF EXISTS time__users;

CREATE TABLE `time__users` (
  `email` text COLLATE utf8_bin NOT NULL,
  `full_time` text COLLATE utf8_bin NOT NULL,
  `time_V` text COLLATE utf8_bin NOT NULL,
  `time_T` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO time__users VALUES("omar1scout@hotmail.com","0","0","0"),
("vakozerugo@zdfpost.net","484","304","0");



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

INSERT INTO topnews VALUES("assets/5c43b0ae5d7f22.48834322.jpg"," "," ","id63937744");



DROP TABLE IF EXISTS topnews2;

CREATE TABLE `topnews2` (
  `img` text NOT NULL,
  `id` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `title` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `body` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `state` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO topnews2 VALUES("assets/5c3ce8d4500891.42234299.jpg","id36551990","تجربة","25741258","true");



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
  `access` text COLLATE utf8_bin NOT NULL,
  `profile_img` text COLLATE utf8_bin NOT NULL,
  `fname` text COLLATE utf8_bin NOT NULL,
  `sname` text COLLATE utf8_bin NOT NULL,
  `tname` text COLLATE utf8_bin NOT NULL,
  `lname` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO trainers VALUES("5","5c1ad2dcbca958.31940496.jpg","jgsdiojio igojeiowj","iojiowejioj","123456","سعودي","ذكر","2018-12-01","test_t@test.co","34567890-","34567890","4567890","1","2356789hjk","ewiohfio","1","نعم","fwefweij","jweiojgio","[2,3,4,5,6,7]","صباحًا","نعم","1","","","","",""),
("5","5c1ad2dcbca958.31940496.jpg","jgsdiojio igojeiowj","iojiowejioj","123456","سعودي","ذكر","2018-12-01","test_t@test.co","34567890-","34567890","4567890","1","2356789hjk","ewiohfio","1","نعم","fwefweij","jweiojgio","[2,3,4,5,6,7]","صباحًا","نعم","1","","","","",""),
("5","5c3af7b561f1c8.66173861.jpg","wejfioj pojpofwejpojpo","opj","123","سعودي","ذكر","2019-01-01","dwqji@dsa.ads","o","kop","k","2","jiojioj","jiojio","2","نعم","ihio","hio","[\"1\",\"2\",\"7\",\"11\",\"12\"]","صباحًا","نعم","1","assets/5c3af7b5611b52.13701602.jpg","","","","");



DROP TABLE IF EXISTS trainers info;

;

INSERT INTO trainers info VALUES("5","5c1ad2dcbca958.31940496.jpg","jgsdiojio igojeiowj","iojiowejioj","123456","سعودي","ذكر","2018-12-01","test_t@test.co","34567890-","34567890","4567890","1","2356789hjk","ewiohfio","1","نعم","fwefweij","jweiojgio","[2,3,4,5,6,7]","صباحًا","نعم","1","","","","",""),
("5","5c1ad2dcbca958.31940496.jpg","jgsdiojio igojeiowj","iojiowejioj","123456","سعودي","ذكر","2018-12-01","test_t@test.co","34567890-","34567890","4567890","1","2356789hjk","ewiohfio","1","نعم","fwefweij","jweiojgio","[2,3,4,5,6,7]","صباحًا","نعم","1","","","","",""),
("5","5c3af7b561f1c8.66173861.jpg","wejfioj pojpofwejpojpo","opj","123","سعودي","ذكر","2019-01-01","dwqji@dsa.ads","o","kop","k","2","jiojioj","jiojio","2","نعم","ihio","hio","[\"1\",\"2\",\"7\",\"11\",\"12\"]","صباحًا","نعم","1","assets/5c3af7b5611b52.13701602.jpg","","","","");



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

INSERT INTO training_courses VALUES("assets/5c3d00621f9754.12959009.jpg","5c3d00621f9822.51188151","تجربة","المشاركة في الحملة الوطنية للتطعيم ضد شلل الأطفال","2018-12-14","1","vakozerugo@zdfpost.net");



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
  `jop_manger` text COLLATE utf8_bin NOT NULL,
  `profile_img` text COLLATE utf8_bin NOT NULL,
  `id_img` text COLLATE utf8_bin NOT NULL,
  `expre_value` text COLLATE utf8_bin NOT NULL,
  `fname` text COLLATE utf8_bin NOT NULL,
  `sname` text COLLATE utf8_bin NOT NULL,
  `tname` text COLLATE utf8_bin NOT NULL,
  `lname` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO users VALUES("5","omar1scout@hotmail.com","2122820570","omar1scout","1992-02-02","عمر فريد","a0566390715","سعودي","ذكر","0566390713","0566390713","0566390713","4","إدارة","إدارة عامة","1","omar1scout","0","[\"1\",\"2\",\"7\",\"8\"]","نعم","نعم","assets/5c40bba75d0eb2.28118511.jpg","assets/5c40bba75d4918.41031639.png","1541254","عمر","فريد","محمد","عالم");



DROP TABLE IF EXISTS videos;

CREATE TABLE `videos` (
  `id` text COLLATE utf8_bin NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `body` text COLLATE utf8_bin NOT NULL,
  `source` text COLLATE utf8_bin NOT NULL,
  `tag` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;




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

INSERT INTO volunteers VALUES("id14053889","4524564","رئيس","assets/5c3cec6d307b37.97441737.jpg");



DROP TABLE IF EXISTS web_info;

CREATE TABLE `web_info` (
  `tag` text COLLATE utf8_bin NOT NULL,
  `info` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO web_info VALUES("logo","assets/5c43b0d9b04fe1.51733177.png"),
("bookTags","[\"التقارير السنوية\",\"بوروينت\"]"),
("Stop___web","true"),
("VideosTags","[\"new v\"]"),
("STOPMSG","NOT WORK"),
("vote","false"),
("vote_q","تجربة"),
("vote_a","[\"ممتاز\",\"جيد\",\"مقبول\"]"),
("vote_data","[1,1,1]"),
("ads_html","assets/5c3cedeed99c73.12844554.jpg"),
("info_web_system","<div class=\"col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center wow bounceInLeft\" style=\"box-sizing: border-box; font-family: Cairo, sans-serif; position: relative; width: 1336px; min-height: 1px; padding-right: 15px; padding-left: 15px; flex: 0 0 100%; max-width: 100%; animation-name: bounceInLeft; color: #212529; font-size: 16px; visibility: visible; text-align: center !important;\" data-mce-style=\"box-sizing: border-box; font-family: Cairo, sans-serif; position: relative; width: 1336px; min-height: 1px; padding-right: 15px; padding-left: 15px; flex: 0 0 100%; max-width: 100%; animation-name: bounceInLeft; color: #212529; font-size: 16px; visibility: visible; text-align: center !important;\"><h3 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1.75rem;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1.75rem;\"><span style=\"background-color: rgb(204, 255, 255);\" data-mce-style=\"background-color: #ccffff;\">الرؤية و الرسالة والقيم</span></h3></div><div class=\"col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center wow bounceInRight\" style=\"box-sizing: border-box; font-family: Cairo, sans-serif; position: relative; width: 1336px; min-height: 1px; padding-right: 15px; padding-left: 15px; flex: 0 0 100%; max-width: 100%; animation-name: bounceInRight; color: #212529; font-size: 16px; visibility: visible; text-align: center !important;\" data-mce-style=\"box-sizing: border-box; font-family: Cairo, sans-serif; position: relative; width: 1336px; min-height: 1px; padding-right: 15px; padding-left: 15px; flex: 0 0 100%; max-width: 100%; animation-name: bounceInRight; color: #212529; font-size: 16px; visibility: visible; text-align: center !important;\"><div class=\"col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center wow bounceInRight\" style=\"box-sizing: border-box; position: relative; width: 1336px; min-height: 1px; padding-right: 15px; padding-left: 15px; flex: 0 0 100%; max-width: 100%; animation-name: bounceInRight; visibility: visible;\" data-mce-style=\"box-sizing: border-box; position: relative; width: 1336px; min-height: 1px; padding-right: 15px; padding-left: 15px; flex: 0 0 100%; max-width: 100%; animation-name: bounceInRight; visibility: visible;\"><h5 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1.25rem;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1.25rem;\">الرؤية مجتمع متكامل غني بثقافة العمل التطوعي</h5></div><div class=\"col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center wow bounceInLeft\" style=\"box-sizing: border-box; position: relative; width: 1336px; min-height: 1px; padding-right: 15px; padding-left: 15px; flex: 0 0 100%; max-width: 100%; animation-name: bounceInLeft; visibility: visible;\" data-mce-style=\"box-sizing: border-box; position: relative; width: 1336px; min-height: 1px; padding-right: 15px; padding-left: 15px; flex: 0 0 100%; max-width: 100%; animation-name: bounceInLeft; visibility: visible;\"><div class=\"col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center wow bounceInLeft\" style=\"box-sizing: border-box; position: relative; width: 1336px; min-height: 1px; padding-right: 15px; padding-left: 15px; flex: 0 0 100%; max-width: 100%; animation-name: bounceInLeft; visibility: visible;\" data-mce-style=\"box-sizing: border-box; position: relative; width: 1336px; min-height: 1px; padding-right: 15px; padding-left: 15px; flex: 0 0 100%; max-width: 100%; animation-name: bounceInLeft; visibility: visible;\"><h5 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1.25rem;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1.25rem;\">الرسالة تأسيس منظومة متكاملة متعددة الروافد للعمل التطوعي بالشراكة مع أفراد و مؤسسات المجتمع</h5></div></div><h5 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1.25rem;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1.25rem;\">الأهداف إنشاء قاعدة بيانات للعمل التطوعي في الممكلة العربية السعودية بناء شراكات مع جميع القطاعات الحكومية والخاصة العمل على تنظيم سياسات وتشريعات الأعمال التطوعية وتذليل معوقاتها تنفيذ دورات تعريفية وتدريبية للأفراد ( المتطوعين ) والمنظمات التي تستقطب المتطوعين رفع الوعي بالعمل التطوعي وتعزيزه قيم الجمعية : التميز في الأداء ، الشراكة ، الشفافية ، العمل بروح الجماعة ، المهنية</h5></div>"),
("vote_id","id23257"),
("ImagesTags","[\"التسجيل \"]"),
("info_web_2","<div style=\"box-sizing: border-box; font-family: Cairo, sans-serif; color: rgb(33, 37, 41); font-size: 16px; height: 100px;\"><br data-mce-bogus=\"1\"></div><div class=\"row\" style=\"box-sizing: border-box; font-family: Cairo, sans-serif; display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px; color: rgb(33, 37, 41); font-size: 16px;\"><div class=\"col text-right\" style=\"box-sizing: border-box; position: relative; width: 1396px; min-height: 1px; padding: 50px; flex-basis: 0px; flex-grow: 1; max-width: 100%; text-align: right !important;\"><h3 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: rgb(32, 201, 151); font-size: 1.75rem;\">خدماتنا</h3><h6 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1rem;\">التدريب والتوعية في مجال العمل التطوعي .</h6><h6 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1rem;\">ربط راغبي العمل التطوعي بالجهات المستفيدة .</h6><h6 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1rem;\">تقديم الدعم للمجموعات التطوعية وفق اتفاقيات قانونية .</h6><h6 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1rem;\">تنظيم برامج تطوعية لخدمة المجتمع .</h6><h6 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1rem;\">تنظيم الفعاليات والندوات في مجال العمل التطوعي .</h6><h6 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1rem;\">تنفيذ وتقديم الاستشارات والدراسات والاحصائيات في مجال العمل التطوعي .</h6><h6 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1rem;\">توثيق وحفظ الساعات التطوعية واستخراج قيمتها الاقتصادية بالريال السعودي .</h6></div></div>"),
("info_web_3","<h3 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #20c997; font-size: 1.75rem; text-align: right;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #20c997; font-size: 1.75rem; text-align: right;\"><br></h3><h3 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #20c997; font-size: 1.75rem; text-align: right;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #20c997; font-size: 1.75rem; text-align: right;\"><br></h3><h3 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #20c997; font-size: 1.75rem; text-align: right;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #20c997; font-size: 1.75rem; text-align: right;\"><br></h3><h3 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: rgb(32, 201, 151); font-size: 1.75rem; text-align: right;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #20c997; font-size: 1.75rem; text-align: right;\"><strong>شروط العضوية</strong></h3><h6 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #212529; font-size: 1rem; text-align: right;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #212529; font-size: 1rem; text-align: right;\">قبول طلب عضويته من مجلس الإدارة .</h6><h6 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #212529; font-size: 1rem; text-align: right;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #212529; font-size: 1rem; text-align: right;\">أن يكون فلسطيني الجنسية.</h6><h6 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #212529; font-size: 1rem; text-align: right;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #212529; font-size: 1rem; text-align: right;\">أن يكون كامل الأهلية المعتبرة شرعاً(عدا الصديق(</h6><h6 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #212529; font-size: 1rem; text-align: right;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #212529; font-size: 1rem; text-align: right;\">أن يكون غير محكوم عليه بإدانة في جريمة مخلة بالشرف أو الأمانة ما لم يكن قد رد اعتباره.</h6><h6 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #212529; font-size: 1rem; text-align: right;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #212529; font-size: 1rem; text-align: right;\">أن يكون قد سدد الاشتراك السنوي.</h6><div style=\"box-sizing: border-box; font-family: Cairo, sans-serif; color: #212529; font-size: 16px; text-align: right; height: 30px;\" data-mce-style=\"box-sizing: border-box; font-family: Cairo, sans-serif; color: #212529; font-size: 16px; text-align: right; height: 30px;\"><br></div><h3 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #20c997; font-size: 1.75rem; text-align: right;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #20c997; font-size: 1.75rem; text-align: right;\">فئات العضوية</h3><h5 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #20c997; font-size: 1.25rem; text-align: right;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #20c997; font-size: 1.25rem; text-align: right;\">عضو الشرف</h5><h6 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #212529; font-size: 1rem; text-align: right;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #212529; font-size: 1rem; text-align: right;\">هو العضو الذي تمنحه الجمعية عضويته نظير ما قدمه لها من خدمات جليلة مادية كانت أو معنوية ساعدت على تحقيق أهداف الجمعية. يحق لعضو الشرف حضور اجتماعات الجمعية العمومية و مناقشة ما يطرح فيها دون أن يكون له حق التصويت أو الترشيح لعضوية مجلس الإدارة.</h6><h5 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #20c997; font-size: 1.25rem; text-align: right;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #20c997; font-size: 1.25rem; text-align: right;\">العضو الفخري</h5><h6 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #212529; font-size: 1rem; text-align: right;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Cairo, sans-serif; font-weight: 500; line-height: 1.2; color: #212529; font-size: 1rem; text-align: right;\">هو العضو الذي تمنحه الجمعية العمومية عضوية فخرية بمجلس الإدارة و يكون له حق المناقشة في اجتماعات المجلس و لكن ليس له حق التصويت و لا يثبت بحضوره صحة الانعقاد.</h6>"),
("Contact_us","<h2 data-mce-style=\"text-align: right;\" style=\"text-align: right;\"><sup><span style=\"text-decoration: underline;\" data-mce-style=\"text-decoration: underline;\"><code>يمكنك التواصل معنا</code></span></sup></h2><h3 data-mce-style=\"text-align: right;\" style=\"text-align: right;\">يمكنك التواصل معنا و ارسال اي شكوة في اي وقت</h3><p style=\"text-align: right;\" data-mce-style=\"text-align: right;\">&nbsp;لطلب الدعم اضغط علي الزر و ابعت الشكوة الخاصة بك ولا تنسة ان تضع البريد الخاص بك لنراسلك :]</p><p><br data-mce-bogus=\"1\"></p><p><br data-mce-bogus=\"1\"></p>"),
("meta-description","wef"),
("web-title","نادي النشامى التطوعي | nshama"),
("web-title-img","assets/5c33f265cd6636.99484928.png"),
("meta-keywords","نادي النشامى التطوعي"),
("about_web","تم تأسيس نادي ” النشامى” بمكة المكرمة عام 2013 ، تحت مظلة جمعية مراكز الأحياء بمكة المكرمة ، حيث يهتم بالتطوع ونشر ثقافة التطوع بإحترافية بتمكين شباب المنطقة لتحقيق رؤية المملكة 2030 في مجال التطوع"),
("programmer_msg","false"),
("msg_p","تم حل المشاكل الخاصة بالمعارض و نأسف جدا علي هذا الخطأ و يمكن الان الاستمتاع بكل المزايا و اذا واجهتك مشكلة يمكنك الاتصال بنا مجددا , نحن نعدم الموقع اذا واجهتلك اي مشكلة , المبرمج."),
("bigtapinfo","    يجب على كل عضو في التسجيل في قاعدة البيانات لحفظ حقوق الجمعية ولأنه مطلب أمنى.\n    التعليمات الصادرة للجمعية من الوزارات والجهات الأمنية تمنع منعاً باتاً تنفيذ البرامج المختلطة.\n    يجب على عضو ان يحمل بطاقة الاحوال الشخصية /الجواز والإقامة النظامية سارية المفعول.\n\n    الالتزام بأنظمة المملكة العربية السعودية:\n        سألتزم بجميع القوانين واللوائح المعمول بها في المملكة العربية السعودية\n        سأتجنب التدخل في المسائل السياسية والثقافية والدينية التي تخالف أنظمة المملكة العربية السعودية\n        سأحترم الرموز الدينية والوطنية في المملكة العربية السعودية\n    حدود العمل:\n        لن أتصرف في أي شأن طبي او قانوني او مهني تخصصي إذا لم تكن لدي الأهلية النظامية للقيام بذلك\n        لن أقوم بجمع التبرعات بأي حال من الاحوال لمشروعي التطوعي\n        التواصل مع القسم النسائي يكون من خلال مسؤول شؤون المتطوعين والمدير التنفيذي فقط\n    التواصل والمتابعة:\n        سأقوم بإبلاغ الجمعية في حال ظهور أي مشكلة تؤثر على شخصياً او على مهمتي التطوعية\n    سلوك المتطوع:\n        سأمتنع عن أي سلوك قد يؤدي الى التأثير على سمعة الجمعية\n        سأمتنع عن المشاركة في اي نشاط او سلوك غير نزيه مالياً او أخلاقياً او إدارياً\n        سأتجنب التدخين في أماكن المبادره والفعاليات التي أشارك فيها\n        سأتجنب اي شكل من أشكال السلوك الذي قد يعتبر من قبيل التمييز والاحتقار على أساس الجنسية او العرق او السن او اللون او الإعاقة\n        سأحرص على الحفاظ على ما اتسلمه من عُهد وأدوات، ونظافة وسلامة المرافق التي سأستخدمها لتنفيذ مهمتي التطوعية\n    الاعلام والحقوق والفكرية:\n        لن أقوم بانتحال هوية أحد موظفي الجمعية التي انتمى اليها او اصرح بكوني موظفاً فيها\n        تتولى الجمعية إرسال الخطابات والتصريحات الصحفية عن الفريق بعد الاتفاق بين الفريق والجمعية\n        سأقوم بالحفاظ على سرية المعلومات التي اطلعت عليها اثناء تأديتي للمهمة التطوعية مثل: بيانات الأسر والعوائل المستفيدة\n\n"),
("ads_visable","true"),
("web_info___v","\n\n    يجب على كل عضو في التسجيل في قاعدة البيانات لحفظ حقوق الجمعية ولأنه مطلب أمنى.\n    التعليمات الصادرة للجمعية من الوزارات والجهات الأمنية تمنع منعاً باتاً تنفيذ البرامج المختلطة.\n    يجب على عضو ان يحمل بطاقة الاحوال الشخصية /الجواز والإقامة النظامية سارية المفعول.\n\n    الالتزام بأنظمة المملكة العربية السعودية:\n        سألتزم بجميع القوانين واللوائح المعمول بها في المملكة العربية السعودية\n        سأتجنب التدخل في المسائل السياسية والثقافية والدينية التي تخالف أنظمة المملكة العربية السعودية\n        سأحترم الرموز الدينية والوطنية في المملكة العربية السعودية\n    حدود العمل:\n        لن أتصرف في أي شأن طبي او قانوني او مهني تخصصي إذا لم تكن لدي الأهلية النظامية للقيام بذلك\n        لن أقوم بجمع التبرعات بأي حال من الاحوال لمشروعي التطوعي\n        التواصل مع القسم النسائي يكون من خلال مسؤول شؤون المتطوعين والمدير التنفيذي فقط\n    التواصل والمتابعة:\n        سأقوم بإبلاغ الجمعية في حال ظهور أي مشكلة تؤثر على شخصياً او على مهمتي التطوعية\n    سلوك المتطوع:\n        سأمتنع عن أي سلوك قد يؤدي الى التأثير على سمعة الجمعية\n        سأمتنع عن المشاركة في اي نشاط او سلوك غير نزيه مالياً او أخلاقياً او إدارياً\n        سأتجنب التدخين في أماكن المبادره والفعاليات التي أشارك فيها\n        سأتجنب اي شكل من أشكال السلوك الذي قد يعتبر من قبيل التمييز والاحتقار على أساس الجنسية او العرق او السن او اللون او الإعاقة\n        سأحرص على الحفاظ على ما اتسلمه من عُهد وأدوات، ونظافة وسلامة المرافق التي سأستخدمها لتنفيذ مهمتي التطوعية\n    الاعلام والحقوق والفكرية:\n        لن أقوم بانتحال هوية أحد موظفي الجمعية التي انتمى اليها او اصرح بكوني موظفاً فيها\n        تتولى الجمعية إرسال الخطابات والتصريحات الصحفية عن الفريق بعد الاتفاق بين الفريق والجمعية\n        سأقوم بالحفاظ على سرية المعلومات التي اطلعت عليها اثناء تأديتي للمهمة التطوعية مثل: بيانات الأسر والعوائل المستفيدة"),
("web_info___w_v","<div class=\"row\" style=\"margin: 0;line-height:2\">\n                        <ul style=\"font-size:18px;\"><li>يجب على كل عضو في التسجيل في قاعدة البيانات لحفظ حقوق الجمعية ولأنه مطلب أمنى.</li><li>التعليمات الصادرة للجمعية من الوزارات والجهات الأمنية تمنع منعاً باتاً تنفيذ البرامج المختلطة.</li><li>يجب على عضو ان يحمل بطاقة الاحوال الشخصية /الجواز والإقامة النظامية سارية المفعول.</li></ul>\n                        <hr>\n                        <ol><li>\n                                <strong>الالتزام بأنظمة المملكة العربية السعودية:</strong>\n                                <ol><li>سألتزم بجميع القوانين واللوائح المعمول بها في المملكة العربية السعودية</li><li>سأتجنب التدخل في المسائل السياسية والثقافية والدينية التي تخالف أنظمة المملكة العربية السعودية</li><li>سأحترم الرموز الدينية والوطنية في المملكة العربية السعودية</li></ol>\n                            </li><li>\n                                <strong>حدود العمل:</strong>\n                                <ol><li>لن أتصرف في أي شأن طبي او قانوني او مهني تخصصي إذا لم تكن لدي الأهلية النظامية للقيام بذلك</li><li>لن أقوم بجمع التبرعات بأي حال من الاحوال لمشروعي التطوعي</li><li>التواصل مع القسم النسائي يكون من خلال مسؤول شؤون المتطوعين والمدير التنفيذي فقط</li></ol>\n                            </li><li>\n                                <strong>التواصل والمتابعة:</strong>\n                                <ol><li>سأقوم بإبلاغ الجمعية في حال ظهور أي مشكلة تؤثر على شخصياً او على مهمتي التطوعية</li></ol>\n                            </li><li>\n                                <strong>سلوك المتطوع:</strong>\n                                <ol><li>سأمتنع عن أي سلوك قد يؤدي الى التأثير على سمعة الجمعية</li><li>سأمتنع عن المشاركة في اي نشاط او سلوك غير نزيه مالياً او أخلاقياً او إدارياً</li><li>سأتجنب التدخين في أماكن المبادره والفعاليات التي أشارك فيها</li><li>سأتجنب اي شكل من أشكال السلوك الذي قد يعتبر من قبيل التمييز والاحتقار على أساس الجنسية او العرق او السن او اللون او الإعاقة</li><li>سأحرص على الحفاظ على ما اتسلمه من عُهد وأدوات، ونظافة وسلامة المرافق التي سأستخدمها لتنفيذ مهمتي التطوعية</li></ol>\n                            </li><li>\n                                <strong>الاعلام والحقوق والفكرية:</strong>\n                                <ol><li>لن أقوم بانتحال هوية أحد موظفي الجمعية التي انتمى اليها او اصرح بكوني موظفاً فيها</li><li>تتولى الجمعية إرسال الخطابات والتصريحات الصحفية عن الفريق بعد الاتفاق بين الفريق والجمعية</li><li>سأقوم بالحفاظ على سرية المعلومات التي اطلعت عليها اثناء تأديتي للمهمة التطوعية مثل: بيانات الأسر والعوائل المستفيدة</li></ol>\n                            </li></ol>\n                      </div>");



