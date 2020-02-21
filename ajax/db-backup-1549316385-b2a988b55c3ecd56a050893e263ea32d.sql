DROP TABLE IF EXISTS active_t;

CREATE TABLE `active_t` (
  `id` text COLLATE utf8_bin NOT NULL,
  `email` text COLLATE utf8_bin NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `state` text COLLATE utf8_bin NOT NULL,
  `date` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO active_t VALUES("5c294ec4c4a041.15136281","user@user.user","جديد","3",""),
("23523","jidsajio@dsa.das","test","1","");



DROP TABLE IF EXISTS active_v;

CREATE TABLE `active_v` (
  `id` text COLLATE utf8_bin NOT NULL,
  `email` text COLLATE utf8_bin NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `state` text COLLATE utf8_bin NOT NULL,
  `date` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO active_v VALUES("1242","vakozerugo@zdfpost.net","title","2",""),
("124s2","vakozerugo@zdfpost.net","title","2",""),
("12sa42","vakozerugo@zdfpost.net","title","2",""),
("5c1b375e5fe5d4.74708972","vakozerugo@zdfpost.net","test_sup","3",""),
("5c1c40b22b9525.26052111","vakozerugo@zdfpost.net","test__","3",""),
("1242","vakozerugo@zdfpost.net","title","2",""),
("124s2","vakozerugo@zdfpost.net","title","2",""),
("12sa42","vakozerugo@zdfpost.net","title","2",""),
("5c1b375e5fe5d4.74708972","vakozerugo@zdfpost.net","test_sup","3",""),
("5c1c40b22b9525.26052111","vakozerugo@zdfpost.net","test__","3",""),
("5c290d1e2b3415.96948626","user@user.user","عنوان جديد","3",""),
("5c290d1e2b3415.96948626","user@user.user","عنوان جديد","3",""),
("5c2954dc36ff69.58770281","user@user.user","dfgiq","3",""),
("5c2955ede46060.44450421","user@user.user","saf","3",""),
("5c34b717a907d5.31990130","user@user.user1","gyu","0",""),
("23523","jidsajio@dsa.das","test","1",""),
("23523","vakozerugo@zdfpost.net","test","3",""),
("5c3cf3f3a9c543.14905635","vakozerugo@zdfpost.net","تجربة","3",""),
("5c34b717a907d5.31990130","vakozerugo@zdfpost.net","gyu","2",""),
("5c3cf3f3a9c543.14905635","jidsajio@dsa.das","تجربة","3",""),
("5c562007c78014.09766021","ey123sa@gmail.com","منتدى منطقة مكة المكرمة الأول للتطوع  ","1","2019-2-3"),
("5c562007c78014.09766021","omar1scout@hotmail.com","منتدى منطقة مكة المكرمة الأول للتطوع  ","2","2019-2-4"),
("5c562007c78014.09766021","H55m11n@gmail.com","منتدى منطقة مكة المكرمة الأول للتطوع  ","1","2019-2-3"),
("5c576a8813a1d1.29205076","ayman.ae90@gmail.com","تطعيم ضد شلل الأطفال - الجرعة الأولى","1","2019-2-3"),
("5c576b2c90af29.85781627","ayman.ae90@gmail.com","برنامج بيئي لعين شرائع النخل","1","2019-2-3"),
("5c4b9a8085aed6.19773013","ayman.ae90@gmail.com","تطعيم ضد شلل الأطفال - الجرعة الثانية","1","2019-2-3"),
("5c562007c78014.09766021","m4k-@hotmail.com","منتدى منطقة مكة المكرمة الأول للتطوع  ","1","2019-2-4"),
("5c576a8813a1d1.29205076","fhd4043781@gmail.com","تطعيم ضد شلل الأطفال - الجرعة الأولى","0","2019-2-4"),
("5c4b9a8085aed6.19773013","fhd4043781@gmail.com","تطعيم ضد شلل الأطفال - الجرعة الثانية","1","2019-2-4"),
("5c576b2c90af29.85781627","omar1scout@hotmail.com","برنامج بيئي لعين شرائع النخل","2","2019-2-4"),
("5c588eeb6f4762.02779227","omar1scout@hotmail.com","حفظ النعمة","2","2019-2-4"),
("5c576a8813a1d1.29205076","omar1scout@hotmail.com","تطعيم ضد شلل الأطفال - الجرعة الأولى","2","2019-2-4"),
("5c4b9a8085aed6.19773013","omar1scout@hotmail.com","تطعيم ضد شلل الأطفال - الجرعة الثانية","1","2019-2-4");



DROP TABLE IF EXISTS admins;

CREATE TABLE `admins` (
  `id` text COLLATE utf8_bin NOT NULL,
  `username` text COLLATE utf8_bin NOT NULL,
  `password` text COLLATE utf8_bin NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `access` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO admins VALUES("2","omar1scout@hotmail.com","123456","omar1scout","[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\",\"14\",\"15\",\"16\",\"17\",\"18\",\"19\",\"20\",\"21\",\"22\",\"23\",\"24\",\"25\",\"26\",\"27\",\"28\",\"29\",\"30\",\"31\"]"),
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
("الشركاء والداعمين","req.php?q=page6","true","link","true","e2109",""),
("المكتبة","id26","true","dropdown","true","214op",""),
("تواصل معنا","req.php?q=pagecallus","true","link","true","k0r9328e09","");



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




DROP TABLE IF EXISTS c_t_;

CREATE TABLE `c_t_` (
  `name` text COLLATE utf8_bin NOT NULL,
  `img` text COLLATE utf8_bin NOT NULL,
  `id` text COLLATE utf8_bin NOT NULL,
  `email` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO c_t_ VALUES("تجربة","../assets/5c55d8bdcbd6b4.81024276.jpg","","omar1scout@hotmail.com"),
("حضور ورشة خدمة ضيوف الرحمن 29 يناير 2019","../assets/5c577ac8bff0f7.76150339.jpg","","ey123sa@gmail.com");



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
("تجربة","../assets/5c3fc3518a9de9.72746277.png","","jidsajio@dsa.das"),
("تجربة","../assets/5c4bd6cae6e545.02960653.jpg","","omar1scout@hotmail.com"),
("تطعيم ضد شلل الأطفال","../assets/5c55a753cdd233.59976123.jpg","","omar1scout@hotmail.com"),
("الرحلة السنوية","../assets/5c55b2369259e2.74671144.jpg","","nshama.net@hotmail.com"),
("الرحلة السنوية","../assets/5c55b23787aad9.21474524.jpg","","nshama.net@hotmail.com"),
("تجربة2","../assets/5c55b25e7b5731.19629383.jpg","","nshama.net@hotmail.com"),
("تطعيم ضد شلل الأطفال - الجرعة الأولى","../assets/5c5779608d4f95.74404717.jpg","","ayman.ae90@gmail.com"),
("حضور إجتماع رقم 1 / 2019","../assets/5c577af1d98770.68895587.jpg","","fahad31751@gmail.com"),
("حضور إجتماع رقم 2 / 2019","../assets/5c577b03b527e5.48094578.jpg","","fahad31751@gmail.com"),
("حضور إجتماع رقم 3 / 2019","../assets/5c577b19573144.76155584.jpg","","fahad31751@gmail.com"),
("حضور إجتماع رقم 4/ 2019","../assets/5c577b2f171d96.25547375.jpg","","fahad31751@gmail.com"),
("حضور الملتقى التطوعي الأول لمركز حي النزهة ","../assets/5c577b6d5d9078.46307559.jpg","","albelady@outlook.com"),
("حضور ورشة خدمة ضيوف الرحمن 29 يناير 2019","../assets/5c577bbebfa327.18573152.jpg","","rana.sh.x@outlook.com"),
("حضور إجتماع حفل تدشين موقع النادي 4 / 2 / 2019","../assets/5c588da8a161e6.48482169.jpg","","fahad31751@gmail.com"),
("حضور إجتماع حفل تدشين موقع النادي 4 / 2 / 2019","../assets/5c588dce34c7d0.50390654.jpg","","omar1scout@hotmail.com"),
("حضور ورشة عمل وزارة الحج 30 يناير 2019","../assets/5c58a8dc3d3e49.90804569.jpg","","ey123sa@gmail.com"),
("حضور وقت إضافي للتطوع بمقر النادي 3 / 2 / 2019","../assets/5c58ae2e55e725.33107217.jpg","","omar1scout@hotmail.com");



DROP TABLE IF EXISTS cards;

CREATE TABLE `cards` (
  `id` text COLLATE utf8_bin NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `img` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO cards VALUES("1100603842","عبدالله بن محمد المطيري","assets/5c57671c8bb511.59906928.jpg"),
("1028754149","صالح بن راشد بن أحمد الزهراني","assets/5c57673a7795b5.32069558.jpg"),
("2139822676","أيمن محمد أبو عيشة","assets/5c577090c3f850.37721619.jpg"),
("1103727481","رنا عبدالهادي السلمي","assets/5c5770acb51ac9.71868073.jpg"),
("1086479167","عبدالله راشد البلادي","assets/5c5770d3d19799.35815786.jpg"),
("2140033651","عيسى محمد عالم","assets/5c5770f1db1302.50754368.jpg"),
("1071221251","فهد عبدالرزاق الكبكي","assets/5c57712174fc29.87401169.jpg"),
("2423915624","يعقوب محمد طيب","assets/5c57714b3d5b61.44427638.jpg"),
("1004330468","محمد بن بكر برناوي","assets/5c57733970a831.62072800.jpg");



DROP TABLE IF EXISTS certificates;

CREATE TABLE `certificates` (
  `id` text COLLATE utf8_bin NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `img` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO certificates VALUES("100","محمد بن مانع العسيري","assets/5c56316c06fe95.13191391.jpg"),
("101","عبدالله بن محمد المطيري","assets/5c56318f8bef59.86909234.jpg"),
("105","أيمن بن محفوظ","assets/5c58943abe49b7.42661589.jpg"),
("104","مشاري بن عبدالحكيم القرشي","assets/5c589421d612f7.71705716.jpg"),
("103","محمد بن بكر البرناوي","assets/5c5893fd2053e9.72272158.jpg"),
("102","حسام خطيب الخندقاوي","assets/5c5893e9688f07.02398115.jpg"),
("106","حامد الطيب طاهر","assets/5c58945e389172.40726593.jpg"),
("107","عمار محمد المطيري","assets/5c5894774cc8f9.63351631.jpg"),
("108","عبدالعزيز البردي","assets/5c5894ae8c30a4.53911248.jpg"),
("109","نعمان نور الهدى","assets/5c5894c87e5dd7.52373842.jpg"),
("110","عبدالعزيز البردي","assets/5c5894dde40f91.35126207.jpg"),
("111","محمد بكر برناوي","assets/5c58951b268ec4.74968927.jpg"),
("112","فهد عطية الثقفي","assets/5c58952f9956e2.54696425.jpg"),
("115","عمر بن فريد عالم","assets/5c58958a004487.40356112.jpg"),
("114","محمد بن علي الماطيري","assets/5c58966a9c8cb2.21458257.jpg"),
("113","محمد مانع عسيري","assets/5c58965007f8b5.55778647.jpg"),
("116","فهد شمس العالم","assets/5c589689da49d6.45711005.jpg"),
("117","فيصل بن فهد الفضلي","assets/5c5896a143f316.74938675.jpg"),
("118","فارس غازي المطرفي","assets/5c5896d963e5b3.35829767.jpg"),
("119","فهد بن عبدالرزاق الكبكبي","assets/5c58970253cb37.59186133.jpg"),
("120","فيصل بن فهد الفضلي","assets/5c58972d248fd1.56539303.jpg"),
("121","معتز بن طلال باصم","assets/5c58974e558f04.19634705.jpg"),
("122","عبدالله بن محمد المطيري","assets/5c589762f3d7e4.09695341.jpg"),
("123","أيمن بن محمد بن محفوظ","assets/5c5897780f9388.00197910.jpg"),
("124","محمد بن حامد الهلالي","assets/5c589795cadd96.49843636.jpg"),
("125","فارس غازي المطرفي ","assets/5c5897b1b0b221.02107689.jpg"),
("126","فيصل عتيق الفضلي ","assets/5c5897e654cae6.18595220.jpg"),
("127","علي سعيد العولقي","assets/5c5897fb6b1a06.06493263.jpg"),
("128","عمر فريد عالم","assets/5c589841404a61.72404316.jpg"),
("129","محمد مانع عسيري","assets/5c589854a3f5d2.82046865.jpg"),
("130","فهد بن عبدالرزاق الكبكبي","assets/5c5898a5b04aa8.51024444.jpg"),
("131","سالم المطرفي","assets/5c5898c0138768.73349027.jpg"),
("132","ياسر بن هاشم أبو النور","assets/5c5898dc4658a0.89767343.jpg"),
("133","فهد بن عطية الثقفي","assets/5c5898f4940d45.06160142.jpg"),
("134","فارس بن غازي المطرفي","assets/5c589917c70cd5.78565721.jpg"),
("135","عبدالله بن محمد المطيري","assets/5c58992b513103.74801731.jpg");



DROP TABLE IF EXISTS creater;

CREATE TABLE `creater` (
  `id` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `work` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `img` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `phone` text NOT NULL,
  `twitter` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO creater VALUES("id20282180","الشيخ صالح راشد الزهراني","عضو مؤسس","assets/5c4baf3570f832.14163887.jpg","0504587769","http://nshama.net"),
("id17626788","عبدالله باشا","عضو مؤسس","assets/5c4baf83dd9bf6.18843983.jpg","0","http://nshama.net"),
("id19010263","أيمن بن محفوظ","عضو مؤسس","assets/5c4bb2fb6bb095.50394491.jpg","0","0"),
("id20398734","محمد مانع العسيري","عضو مؤسس","assets/5c4bb2cc61ad85.67902359.jpg","0","0"),
("id96684077","عمر فريد عالم","عضو مؤسس","assets/5c3cf9e256fa28.97826589.jpg","0566390713","https://twitter.com/omar1scout"),
("id75460594","محمود عبدالرحمن","عضو مؤسس","assets/5c4bb2c0207f18.63536861.jpg"," "," "),
("id77420866","أسامة بن لسود","عضو مؤسس","assets/5c4bb0915a1a98.23819757.jpg","0","0"),
("id46108443","محفوظ عبدالرحمن","عضو مؤسس","assets/5c4bb2876353a5.20424919.jpg","  "," "),
("id44546266","عبدالله تركي العتيبي","عضو مؤسس","assets/5c4bb2e7ee6b50.73752946.jpg"," "," "),
("id47384432","عبدالله محمد المطيري","عضو مؤسس","assets/5c4bb326187b38.44719976.jpg"," "," ");



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
("id36551990"," بازيد يفتتح المقر الجديد لنادي النشامى التطوعي بمكة ","<p style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><span style=\"color: rgb(0, 128, 128);\" data-mce-style=\"color: #008080;\"><br data-mce-bogus=\"1\"></span></p><p style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><span style=\"color: rgb(0, 128, 128);\" data-mce-style=\"color: #008080;\">نادي النشامى : عمر فريد عالم</span><br data-mce-bogus=\"1\"></p><p style=\"text-align: right;\" data-mce-style=\"text-align: right;\">افتتح سعادة مدير جمعية مراكز الأحياء بمنطقة مكة المكرمة الأستاذ محمد بازيد المقر الجديد لنادي النشامى التطوعي التابع لجمعية مراكز الأحياء , وذلك بحضور عدد من المسؤولين في الجمعية وبمشاركة مدراء الجمعيات الأهلية و رؤساء الفرق التطوعية بحي الشرائع <br></p><p style=\"text-align: right;\" data-mce-style=\"text-align: right;\">ويهدف النادي إلى تأهيل واشراك الشباب في مكة المكرمة في البرامج التطوعية والمبادرات المجتمعية من خلال الأنشطة والبرامج المتنوعة التي يقدمه النادي بالاستعانة بالخبرات العالية لتطوير العديد من البرامج التطوعية <br></p><p style=\"text-align: right;\" data-mce-style=\"text-align: right;\">وكما يقدم النادي دورات تدريبية متخصصة ومتنوعة في مجالات عدة تخدم الفرد في خدمة وتطوير مجتمعه من خلال تخصصه , فيما يسعى إلى التعاون المستمر مع كبار المتخصصين في القطاع الثالث وتتبع المنهجية العلمية والميدانية في بناء وتنفيذ وتقييم البرامج المقدمة <br></p><p style=\"text-align: right;\" data-mce-style=\"text-align: right;\">وسيعمل النادي على بناء الشاب في مجال التطوع وفق رؤية المملكة 2030 لزيادة أعداد الشباب المتطوعين في المجالات العلمية والعملية واستقطاب خبراء ومدربين ذوي خبرة عالية في المجال التطوع <br></p><p style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><br></p><p><img class=\"aligncenter size-full wp-image-362603\" src=\"http://www.makkah-now.com/wp-content/uploads/2017/12/IMG_4168.jpg\" alt=\"\" style=\"display: block; margin-left: auto; margin-right: auto;\" data-mce-style=\"display: block; margin-left: auto; margin-right: auto;\" data-mce-src=\"http://www.makkah-now.com/wp-content/uploads/2017/12/IMG_4168.jpg\" width=\"482\" height=\"321\"></p><p style=\"text-align: center;\" data-mce-style=\"text-align: center;\"><img class=\"aligncenter size-full wp-image-362605\" src=\"http://www.makkah-now.com/wp-content/uploads/2017/12/IMG_4198.jpg\" alt=\"\" data-mce-src=\"http://www.makkah-now.com/wp-content/uploads/2017/12/IMG_4198.jpg\" width=\"482\" height=\"321\"></p><p style=\"text-align: center;\" data-mce-style=\"text-align: center;\"><img class=\"aligncenter size-full wp-image-362606\" src=\"http://www.makkah-now.com/wp-content/uploads/2017/12/IMG_4215.jpg\" alt=\"\" data-mce-src=\"http://www.makkah-now.com/wp-content/uploads/2017/12/IMG_4215.jpg\" width=\"482\" height=\"321\"></p><p style=\"text-align: center;\" data-mce-style=\"text-align: center;\"><img class=\"aligncenter size-full wp-image-362607\" src=\"http://www.makkah-now.com/wp-content/uploads/2017/12/IMG_4216.jpg\" alt=\"\" data-mce-src=\"http://www.makkah-now.com/wp-content/uploads/2017/12/IMG_4216.jpg\" width=\"482\" height=\"321\"></p><p style=\"text-align: center;\" data-mce-style=\"text-align: center;\"><img class=\"aligncenter size-full wp-image-362608\" src=\"http://www.makkah-now.com/wp-content/uploads/2017/12/IMG_4239.jpg\" alt=\"\" data-mce-src=\"http://www.makkah-now.com/wp-content/uploads/2017/12/IMG_4239.jpg\" width=\"482\" height=\"321\"></p><p style=\"text-align: center;\" data-mce-style=\"text-align: center;\"><img class=\"aligncenter size-full wp-image-362611\" src=\"http://www.makkah-now.com/wp-content/uploads/2017/12/IMG_4269.jpg\" alt=\"\" data-mce-src=\"http://www.makkah-now.com/wp-content/uploads/2017/12/IMG_4269.jpg\" width=\"482\" height=\"321\"></p><p style=\"text-align: center;\" data-mce-style=\"text-align: center;\"><img class=\"aligncenter size-full wp-image-362613\" src=\"http://www.makkah-now.com/wp-content/uploads/2017/12/IMG_4275.jpg\" alt=\"\" data-mce-src=\"http://www.makkah-now.com/wp-content/uploads/2017/12/IMG_4275.jpg\" width=\"482\" height=\"321\"></p><p style=\"text-align: center;\" data-mce-style=\"text-align: center;\"><img class=\"aligncenter size-full wp-image-362614\" src=\"http://www.makkah-now.com/wp-content/uploads/2017/12/IMG_4278.jpg\" alt=\"\" data-mce-src=\"http://www.makkah-now.com/wp-content/uploads/2017/12/IMG_4278.jpg\" width=\"482\" height=\"321\"></p><p style=\"text-align: center;\" data-mce-style=\"text-align: center;\"><img class=\"aligncenter size-full wp-image-362615\" src=\"http://www.makkah-now.com/wp-content/uploads/2017/12/IMG_4279.jpg\" alt=\"\" data-mce-src=\"http://www.makkah-now.com/wp-content/uploads/2017/12/IMG_4279.jpg\" width=\"482\" height=\"321\"></p><p style=\"text-align: center;\" data-mce-style=\"text-align: center;\"><img class=\"aligncenter size-full wp-image-362616\" src=\"http://www.makkah-now.com/wp-content/uploads/2017/12/IMG_4282.jpg\" alt=\"\" data-mce-src=\"http://www.makkah-now.com/wp-content/uploads/2017/12/IMG_4282.jpg\" width=\"482\" height=\"321\"></p><p style=\"text-align: center;\" data-mce-style=\"text-align: center;\"><img class=\"aligncenter size-full wp-image-362617\" src=\"http://www.makkah-now.com/wp-content/uploads/2017/12/IMG_4287.jpg\" alt=\"\" data-mce-src=\"http://www.makkah-now.com/wp-content/uploads/2017/12/IMG_4287.jpg\" width=\"482\" height=\"321\"></p><p style=\"text-align: center;\" data-mce-style=\"text-align: center;\"><img class=\"aligncenter size-full wp-image-362618\" src=\"http://www.makkah-now.com/wp-content/uploads/2017/12/IMG_4299.jpg\" alt=\"\" data-mce-src=\"http://www.makkah-now.com/wp-content/uploads/2017/12/IMG_4299.jpg\" width=\"482\" height=\"321\"></p><p style=\"text-align: center;\" data-mce-style=\"text-align: center;\"><img class=\"aligncenter size-full wp-image-362619\" src=\"http://www.makkah-now.com/wp-content/uploads/2017/12/IMG_4302.jpg\" alt=\"\" data-mce-src=\"http://www.makkah-now.com/wp-content/uploads/2017/12/IMG_4302.jpg\" width=\"482\" height=\"321\"></p>","14, 1, 2019");



DROP TABLE IF EXISTS images;

CREATE TABLE `images` (
  `id` text COLLATE utf8_bin NOT NULL,
  `img` text COLLATE utf8_bin NOT NULL,
  `title` text COLLATE utf8_bin NOT NULL,
  `tag` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO images VALUES("id5c4f73d82a7282.49730894","assets/5c4f73d82a7609.16713718.jpg","2","تنظيف البيئة - مكة المكرمة - 2019"),
("id5c4f73e735a836.79181155","assets/5c4f73e735ad45.15463980.jpg","4","تنظيف البيئة - مكة المكرمة - 2019"),
("id5c4f739498b466.76975894","assets/5c4f739498b7a7.33403779.jpg","3","تنظيف البيئة - مكة المكرمة - 2019"),
("id5c4f738155edf7.98661339","assets/5c4f738155f234.32902622.jpg","1","تنظيف البيئة - مكة المكرمة - 2019");



DROP TABLE IF EXISTS info;

CREATE TABLE `info` (
  `tag` text COLLATE utf8_bin NOT NULL,
  `data` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO info VALUES("views","3976"),
("asks","-6"),
("views","3976"),
("users_signup","2"),
("asks","-6"),
("users_signup","2"),
("subs","[\"das.asfsa.as@saf.saf\",\"das.asfsa.as@saf.saf\",\"das.asfsa.as@saf.saf\",\"das.asfsa.as@saf.saf\",\"das.asfsa.as@saf.saf\",\"Farooos177fa@gmail.com\",\"0566390713\",\"Salh75344@gmail.com \",\"Salh75344@gmail.com \",\"Salh75344@gmail.com \",\"0550578330\",\"0531655629\",\"H55m11n@gmail.com\"]");



DROP TABLE IF EXISTS links;

CREATE TABLE `links` (
  `img-link` text COLLATE utf8_bin NOT NULL,
  `link` text COLLATE utf8_bin NOT NULL,
  `visable` text COLLATE utf8_bin NOT NULL,
  `id` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO links VALUES("assets/5c5630072fc8c3.81516023.png","https://twitter.com/nshama2","true","id5c4f69b6b95991.70921573.gif"),
("assets/5c562ff0a9dc50.81662230.png","https://www.facebook.com/nshama.net/","true","id5c4f69afd8b7f2.48066780.gif"),
("assets/5c562ed8b9dfe9.20577442.png","https://www.instagram.com/nshama2","true","id5c4f69be6e9ee2.41428347.gif"),
("assets/5c562f0140a991.03817783.png","https://api.whatsapp.com/send?phone=966566390713","true","id5c4f69c5ce59e3.05349095.gif"),
("assets/5c562f27847fd0.36525770.png","https://www.youtube.com/nshama2","true","id5c4f69cd2a93b2.14941988.gif"),
("assets/5c562fa26e4324.55262870.png","nshama.net@hotmail.com","true","id5c4f69d5383f06.39186663.gif");



DROP TABLE IF EXISTS members;

CREATE TABLE `members` (
  `id` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `work` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `img` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `phone` text NOT NULL,
  `twitter` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO members VALUES("id37652585","الشيخ صالح راشد الزهراني","رئيس النادي","assets/5c4ba1607bfd80.30809523.jpg","0504588769","http://www.nshama.net"),
("id63423158","عمر فريد عالم","المدير التنفيذي","assets/5c4ba1b7d3a602.84969904.jpg","0566390713","https://twitter.com/omar1scout"),
("id80267067","فهد عبدالرزاق الكبكبي","الأمين العام","assets/5c576c579d5731.33881844.jpeg","0530353420","https://twitter.com"),
("id14568947","عبدالله محمد المطيري","مدير البرامج والأنشطة","assets/5c4ba30e5501f5.87642792.jpg","0569693788","https://twitter.com"),
("id72940312","سلطان عبدالرحيم اللبدي","مدير المتطوعين","assets/5c4ba3b087fc58.93218536.jpg","0566943296","http://www.nshama.net"),
("id20646681","رنا عبدالرحيم السلمي","مديرة القسم النسائي","assets/5c4ba3fc847f57.32181528.jpg"," ","http://www.nshama.net"),
("id59117737","فارس غازي المطرفي","عضو إداري","assets/5c4ba523541273.24764627.jpg","0568574513","http://www.nshama.net"),
("id39345006","محمد مانع العسيري","عضو إداري","assets/5c4ba558c3cf58.72575513.jpg","05424700997","http://www.nshama.net");



DROP TABLE IF EXISTS pages_content;

CREATE TABLE `pages_content` (
  `id` text COLLATE utf8_bin NOT NULL,
  `html` longtext COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO pages_content VALUES("id26","<p><span style=\"font-size: 20px; color: red;\">mmmmmm</span><br></p>"),
("id5c3ad54806a1c2.32753325","<p>سيسيسيسشيشس</p>"),
("id5c3ac21685acb6.94839031","<p><span style=\"font-size: 30px;\"><a class=\"fr-file fr-green\" href=\"blob:http%3A//nshama.net/98289fee-e0f6-4d3f-8b1c-d3c71a09d7df\" target=\"_blank\"></a></span></p>"),
("id5c3ba3493abd37.90137711","<p><br></p><p><br></p><p><strong><sup><span style=\"font-size: 18px;\">الأمين العام الأستاذ : فهد بن عبدالزراق الكبكبي&nbsp;</span></sup></strong></p><p><br></p><p><strong><sup><span style=\"font-size: 18px;\">​</span></sup></strong><br></p><p><strong><sup><span style=\"font-size: 18px;\">​</span></sup></strong><br></p>"),
("id5c4bb721466437.14410060","<p><br></p><p><br></p><p><br></p><p><span style=\"font-size: 24px; font-family: Verdana, Geneva, sans-serif;\">ن</span><span style=\"font-size: 24px; font-family: Verdana, Geneva, sans-serif;\">ادي النشامى التطوعي يعمل على أربعة مسارات رئيسية وهي</span><br></p><table style=\"width: 100%;\"><tbody><tr><td style=\"width: 49.0811%; background-color: rgb(235, 107, 86); text-align: center;\"><div><span style=\"font-family: Verdana, Geneva, sans-serif;\"><span style=\"font-size: 24px; color: rgb(255, 255, 255);\">المسار المهني</span><br></span></div></td><td style=\"width: 50.8108%; background-color: rgb(61, 142, 185); text-align: center;\"><div><span style=\"font-family: Verdana,Geneva,sans-serif;\"><br><span style=\"font-size: 24px; color: rgb(255, 255, 255);\">المسار الإجتماعي</span><br><br></span></div></td></tr><tr><td style=\"width: 49.0811%; background-color: rgb(65, 168, 95); text-align: center;\"><div><span style=\"font-family: Verdana,Geneva,sans-serif;\"><span style=\"font-size: 24px; color: rgb(255, 255, 255);\">المسار التربوي</span><br></span></div></td><td style=\"width: 50.8108%; background-color: rgb(251, 160, 38); text-align: center;\"><div><span style=\"font-family: Verdana, Geneva, sans-serif;\"><br><span style=\"font-size: 24px; color: rgb(255, 255, 255);\">المسار البيئي</span><br><br></span></div></td></tr></tbody></table><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p>");



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
  `img` text CHARACTER SET utf8 NOT NULL,
  `tag` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO supporters VALUES("id51792705","جمعية مراكز الأحياء بمكة المكرمة","المظلة الرسمية","assets/5c4ba6e0859972.43563953.jpg","الذهبي"),
("id29261422","مركز حي الشرائع "," الشريك الذهبي","assets/5c4ba646479d28.61588778.jpg","الفضي"),
("id43400544","المركز الصحي بحي الشرائع","شريك متعاون","assets/5c4ba6fa49e719.48070389.jpg","البرونزي"),
("id17075484","مؤسسة عناية للإنجاز"," الشريك الذهبي","assets/5c4ba7476aa5a5.90237955.jpg","البرونزي"),
("id30532799","إدارة تعليم مكة المكرمة","الشريك الماسي","assets/5c4ba768b86f06.15289731.png","الفضي");



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
  `date` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;




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

INSERT INTO time__users VALUES("omar1scout@hotmail.com","48","43","5"),
("vakozerugo@zdfpost.net","484","304","0"),
("fhd4043781@gmail.com","0","0","0"),
("m4k-@hotmail.com","0","0","0"),
("taeser05571@gmail.com","0","0","0"),
("ayman.ae90@gmail.com","10","10","0"),
("fasolhf@gmail.com","0","0","0"),
("yaqubattayib@gmail.com","0","0","0"),
("albelady@outlook.com","5","5","0"),
("Soma383@hotmail.com","0","0","0"),
("fahad31751@gmail.com","11","11","0"),
("ey123sa@gmail.com","14","7","7"),
("i7l0om7@gmail.com","0","0","0"),
("rana.sh.x@outlook.com","7","7","0"),
("suliman990barnawi@gmail.com","0","0","0"),
("H55m11n@gmail.com","0","0","0"),
("omar1scout@hotmail.com","48","43","5"),
("omar1scout@gmail.com","0","0","0");



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

INSERT INTO topnews VALUES("assets/5c563941a1e165.58140323.jpg","","","id54688655");



DROP TABLE IF EXISTS topnews2;

CREATE TABLE `topnews2` (
  `img` text NOT NULL,
  `id` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `title` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `body` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `state` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO topnews2 VALUES("assets/5c3ce8d4500891.42234299.jpg","id36551990"," بازيد يفتتح المقر الجديد لنادي النشامى التطوعي بمكة "," ","true");



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




DROP TABLE IF EXISTS trainers info;

;




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

INSERT INTO users VALUES("5","H55m11n@gmail.com","2157626207","Hamdan","1997-01-05","حمدان  شاكر ","123123258","غير سعودي","ذكر","0531655629","","","3","تقنية شبكات","الطب","5","طالب","طالب","[\"2\",\"3\",\"4\",\"5\",\"7\",\"8\",\"9\",\"11\",\"12\",\"13\",\"14\"]","لا","0","assets/5c5658c6b95a23.30227535.jpeg","assets/5c5658c6b97e83.65131516.jpeg","","حمدان ","شاكر ","احمد","صالح"),
("5","suliman990barnawi@gmail.com","١١٠٠٥٦١٠٣٢","برناوي","1995-04-01","سليمان احمد","١٢٣٤٥٦٧٨٩٠","سعودي","ذكر","0548106258","0125424602","0532963345","3","هندسة","هندسة مكنيكية","3","فني","تويوتا","[\"1\",\"4\",\"5\",\"7\",\"9\",\"13\",\"14\"]","نعم","لا","assets/5c573558b18285.44815349.jpeg","assets/5c5735596a8282.47995458.jpeg","","سليمان","احمد","محمد نور","برناوي "),
("5","omar1scout@hotmail.com","2122820570","omar1scout","1992-01-02","عمر فريد","a0566390715","غير سعودي","ذكر","0566390713","","","4","إدارة","إدارة عامة","3","إعلامي","عضو المنظمة العالمية للحركة الكشفية بالإقليم العربي","[\"1\",\"2\",\"4\"]","نعم","نعم","assets/5c563d7e404eb4.59959346.jpg","assets/5c563d7e408889.46778638.jpeg","لدي الخبرة الكافية في الإداري والإعلامي ","عمر","فريد","محمد","عالم"),
("5","rana.sh.x@outlook.com","1103727481","Rn.rana","1997-06-19","رنا عبدالهادي","Alsulami12214181961997","سعودي","انثى","0561381298","","","4","تمريض","اخصائية تمريض","5","طالبة","جامعة ام القرى","[\"1\",\"3\",\"4\",\"8\",\"10\",\"12\",\"14\"]","نعم","لا","assets/5c573ea4450109.64424063.jpg","assets/5c573ea4457da4.87819662.jpeg","","رنا","عبدالهادي","سفير","السلمي"),
("5","i7l0om7@gmail.com","1093946901","حليمه","1998-10-07","حليمه  عبدالله ","moon1417","سعودي","انثى","0581654073","0581654073",".","2","تمريض ",".","5","اخضائي تمريض ",".","[\"3\"]","0","0","assets/5c574155f36561.94342894.jpg","assets/5c5741565db1e5.96123727.jpg","","حليمه ","عبدالله ","عيد ","الزهراني "),
("5","ey123sa@gmail.com","2140033651","عيسى محمد","1997-03-11","عيسى محمد","eysa1234","غير سعودي","ذكر","0550389732","0550389732","0550389732","2","علمي","علمي","6","سكرتير ومشرف","العوالي","[\"1\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"12\",\"14\"]","نعم","نعم","assets/5c5743a7df70c5.84167279.jpg","assets/5c5743a7dfa560.73160575.jpg","خبره ٧ سنوات مع نادي النشامى","عيسى","محمد","عالم","عبده"),
("5","fahad31751@gmail.com","1071221251","الأمين العام","1990-12-25","فهد عبدالرزاق ","Fahad31751","سعودي","ذكر","0530353420","","","2","علمي","علمي","1","مساعد إداري","وزارة الحج والعمرة","[\"1\",\"3\",\"4\",\"6\",\"7\",\"8\",\"9\",\"12\",\"14\"]","0","نعم","assets/5c5744a824ee36.96388068.jpeg","assets/5c5744a8251aa6.58226911.jpeg","","فهد","عبدالرزاق ","أحمد ","الكبكبي"),
("5","Soma383@hotmail.com","1077975264","سامي الدوي ","1990-02-03","سامي  علي ","Ss112233","سعودي","ذكر","509991383","0557272726","0552002111","4","الاداره الصحيه ","اخصائي صحي ","2","عسكري ","الداخلية ","[\"1\"]","نعم","نعم","","","في نادي النشامى ","سامي ","علي ","احمد ","الزهراني "),
("5","albelady@outlook.com","1086479167","albelady@outlook.com","1991-04-21","عبدالله  راشد ","Aa11223344","سعودي","ذكر","0535072590","","","4","شريعه اسلامية","شريعة اسلامية","3","بائع ذهب ","قطاع خاص ","[\"9\"]","نعم","نعم","assets/5c5745dc7c7e99.91179714.jpeg","assets/5c5745dc7cd632.86488193.jpg","","عبدالله ","راشد ","مبخوت ","البلادي "),
("5","yaqubattayib@gmail.com","2423915624","yaqubattayib@gmail.com","1995-01-01","يعقوب محمد","055135591755","غير سعودي","ذكر","0551355917","","0551523682","4","الدين","الشريعة","6","مدرس ","الجعرانة","[\"1\",\"3\",\"4\",\"6\",\"7\",\"8\",\"9\",\"13\"]","نعم","نعم","assets/5c57490f0417e2.93719480.jpg","assets/5c57490f61c8e8.46037415.jpg","الناس للناس","يعقوب","محمد","طيب","مولانا"),
("5","fasolhf@gmail.com","1103629497","Fasolh","1997-10-30","فيصل فهد","1103629497","سعودي","ذكر","0535639077","012675867","0590110377","4","فيرياء","فيزياء بحته","3","مدير عام","موسسة خاصة","[\"1\",\"3\",\"4\",\"5\",\"7\",\"8\",\"9\",\"10\",\"14\"]","نعم","نعم","assets/5c57645284e9e1.05874495.jpg","assets/5c5762894d5d14.51693178.jpg","6 سنوات مع نادي النشامى ","فيصل","فهد","عتيق","الفضلي"),
("5","ayman.ae90@gmail.com","2139822676","Ayman.ae90","1997-11-27","أيمن  أبو عيشة ","ppkkll123321","غير سعودي","ذكر","+966540804357","لايوجد","+966503592394","1","علمي","موظف","1","عامل","مستوصف طبي","\"[]\"","نعم","0","assets/5c57635bcd7fe2.63781761.jpg","assets/5c57635ca9f880.41190240.jpg","هيئة الهلال الأحمر السعودي ","أيمن ","إبراهيم ","خليل","أبو عيشة "),
("5","m4k-@hotmail.com","1101033601","Ime4oo","1997-12-28","مشعل  عبدالله ","Black511Dragon75","سعودي","ذكر","٠٥٠٨٩٦٥٩٧٨","","0568717110","4","تمريض ","تمريض عام","5","طالب","ام القرى","[\"3\",\"4\",\"5\",\"7\",\"8\",\"9\",\"10\",\"12\",\"14\"]","نعم","لا","assets/5c57b7436b9dc6.32771430.jpeg","assets/5c57b744c1e293.64211368.jpeg","","مشعل ","عبدالله ","ضيف الله ","الجميعي "),
("5","fhd4043781@gmail.com","2196298620","fhd4043781@gmail.com","1998-01-09","فهد عبدالمجيد","f0560098686","غير سعودي","ذكر","0560098686","لايوجد","0549359344","4","كلية الشريعة بالحرم المكي الشريف","قسم الشريعة المستوى الخامس","5","طالب","لايوجد عمل","[\"3\",\"13\"]","نعم","0","assets/5c58a256cf8788.19593983.jpg","assets/5c58a256cfd239.61080829.jpg","مجال التطوع ف الاجتماعي وتنظيم ","فهد","شمس العالم","أمير حمزه","عبدالمجيد");



DROP TABLE IF EXISTS videos;

CREATE TABLE `videos` (
  `id` text COLLATE utf8_bin NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `body` text COLLATE utf8_bin NOT NULL,
  `source` text COLLATE utf8_bin NOT NULL,
  `tag` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO videos VALUES("id5c55afe1434bf5.70446717","نادي النشامى التطوعي"," ","https://www.youtube.com/watch?v=D_k-MY6AjwI","new v");



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




DROP TABLE IF EXISTS web_info;

CREATE TABLE `web_info` (
  `tag` text COLLATE utf8_bin NOT NULL,
  `info` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO web_info VALUES("logo","assets/5c43b0d9b04fe1.51733177.png"),
("bookTags","{\"1\":\"بوروينت\",\"2\":\"كتب تطوعية\"}"),
("Stop___web","true"),
("VideosTags","[\"new v\"]"),
("STOPMSG","NOT WORK"),
("vote","false"),
("vote_q","ما رأيك بموقع النادي الجديد "),
("vote_a","[\"ممتاز\",\"جيد\",\"يحتاج إلى تحسين\"]"),
("vote_data","[96,21,10]"),
("ads_html","assets/5c4ba586b4b914.41062124.jpg"),
("info_web_system","<h4><br></h4><h4 data-mce-style=\"text-align: right;\" style=\"text-align: right;\"><br></h4><h4 data-mce-style=\"text-align: right;\" style=\"text-align: right;\"><br></h4><h4 data-mce-style=\"text-align: right;\" style=\"text-align: right;\"><br data-mce-bogus=\"1\"></h4><h4 data-mce-style=\"text-align: right;\" style=\"text-align: right;\"><br></h4><h4 data-mce-style=\"text-align: right;\" style=\"text-align: right;\"><span style=\"background-color: rgb(128, 128, 128); color: rgb(255, 255, 255);\" data-mce-style=\"background-color: #808080; color: #ffffff;\"><strong>&nbsp;&nbsp; تعريف نادي النشامى التطوعي&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br></strong></span></h4><h4 data-mce-style=\"text-align: right;\" style=\"text-align: right;\">تم تأسيس نادي \" النشامى \" بمكة المكرمة عام 2013 ، تحت مظلة رسمية بجمعية مراكز الأحياء بمكة المكرمة ، حيث يهتم بالتطوع ونشر ثقافة التطوع بإحترافية بتمكين شباب المنطقة لتحقيق رؤية المملكة 2030 في مجال التطوع</h4><h4 data-mce-style=\"text-align: right;\" style=\"text-align: right;\"><strong>رؤيتنا : <br></strong></h4><h4><br></h4><h4 data-mce-style=\"text-align: right;\" style=\"text-align: right;\"><strong>رسالتنا : <br></strong></h4><h4><br></h4><h4 data-mce-style=\"text-align: right;\" style=\"text-align: right;\"><strong>أهدافنا : </strong></h4><h4><br></h4><h4><br></h4><h4><br></h4>"),
("ads_links","http://www.nshama.net/req.php?q=singup"),
("vote_id","id58587"),
("ImagesTags","[\"تنظيف البيئة - مكة المكرمة - 2019\"]"),
("info_web_2","<div class=\"row\" style=\"box-sizing: border-box; font-family: Cairo, sans-serif; display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px; color: #212529; font-size: 16px;\" data-mce-style=\"box-sizing: border-box; font-family: Cairo, sans-serif; display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px; color: #212529; font-size: 16px;\"><div class=\"col text-right\" style=\"box-sizing: border-box; position: relative; width: 1396px; min-height: 1px; padding: 50px; flex-basis: 0px; flex-grow: 1; max-width: 100%; text-align: right !important;\" data-mce-style=\"box-sizing: border-box; position: relative; width: 1396px; min-height: 1px; padding: 50px; flex-basis: 0px; flex-grow: 1; max-width: 100%; text-align: right !important;\"><h3 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: rgb(32, 201, 151); font-size: 1.75rem; text-align: right;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: #20c997; font-size: 1.75rem; text-align: right;\"><span style=\"color: rgb(255, 102, 0); background-color: rgb(153, 153, 153);\" data-mce-style=\"color: #ff6600; background-color: #999999;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"color: rgb(255, 255, 255);\" data-mce-style=\"color: #ffffff;\">خدماتنا&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> <br></span></h3><p><span style=\"color: rgb(255, 102, 0); background-color: rgb(153, 153, 153);\" data-mce-style=\"color: #ff6600; background-color: #999999;\"><br data-mce-bogus=\"1\"></span></p><h6 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1rem; text-align: right;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1rem; text-align: right;\">التدريب والتوعية في مجال العمل التطوعي -</h6><h6 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1rem; text-align: right;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1rem; text-align: right;\">ربط راغبي العمل التطوعي بالجهات المستفيدة -<br></h6><h6 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1rem; text-align: right;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1rem; text-align: right;\">تقديم الدعم للفرق التطوعية للإستفادة من منصتنا لإحتساب الساعات -<br></h6><h6 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1rem; text-align: right;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1rem; text-align: right;\">تنظيم برامج تطوعية لخدمة المجتمع -<br></h6><h6 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1rem; text-align: right;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1rem; text-align: right;\">تنظيم الفعاليات والندوات في مجال العمل التطوعي -<br></h6><h6 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1rem; text-align: right;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1rem; text-align: right;\">تنفيذ وتقديم الاستشارات والدراسات والاحصائيات في مجال العمل التطوعي -<br></h6><h6 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1rem; text-align: right;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1rem; text-align: right;\">توثيق وحفظ الساعات التطوعية واستخراج قيمتها الاقتصادية بالريال السعودي -</h6><h6 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1rem; text-align: right;\" data-mce-style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1rem; text-align: right;\">تعزيز العمل التطوعي بمكة المكرمة وتمكين الشباب لتحقيق رؤية المملكة 2030 -</h6></div></div>"),
("info_web_3","<p><br data-mce-style=\"text-align: center;\" style=\"text-align: center;\"></p><p><br data-mce-bogus=\"1\"></p><h1 data-mce-style=\"text-align: center;\" style=\"text-align: center;\"><strong>قريبا</strong><strong> ....</strong><br data-mce-bogus=\"1\"></h1><p><strong><br data-mce-bogus=\"1\"></strong></p>"),
("tags_sup","{\"0\":\"الذهبي\",\"2\":\"الفضي\",\"3\":\"البرونزي\",\"4\":\"البرونزي\"}"),
("Contact_us","<h2 style=\"text-align: center;\" data-mce-style=\"text-align: center;\"><sup><span style=\"text-decoration: underline;\" data-mce-style=\"text-decoration: underline;\"><code><br data-mce-bogus=\"1\"></code></span></sup></h2><h2 style=\"text-align: center;\" data-mce-style=\"text-align: center;\"><sup><span style=\"text-decoration: underline;\" data-mce-style=\"text-decoration: underline;\"><code>تواصلك في محل اهتمامنا وبكل سرية <br></code></span></sup></h2><h3 style=\"text-align: center;\" data-mce-style=\"text-align: center;\">نرجو تعبئة البيانات وإرفاق رسالتكم عبر النموذج التالي</h3><p><br data-mce-bogus=\"1\"></p><h4 style=\"text-align: center;\" data-mce-style=\"text-align: center;\"><a href=\"mailto:nshama.net@hotmail.com\">nshama.net@hotmail.com</a> <span style=\"text-decoration: underline;\" data-mce-style=\"text-decoration: underline;\">: </span><span style=\"text-decoration: underline;\" data-mce-style=\"text-decoration: underline;\">البريد الرسمي للنادي</span><br data-mce-bogus=\"1\"></h4><h4 style=\"text-align: center;\" data-mce-style=\"text-align: center;\"><span style=\"text-decoration: underline;\" data-mce-style=\"text-decoration: underline;\">العنوان</span> : مكة المكرمة - الشرائع - مخطط 7 خلف مجمع المتحدون</h4>"),
("meta-description","نادي نشامي التطوعي التابع لجمعية مراكز الأحياء بمكة المكرمة ، والذي يهدف إلى أن تكون جهة نموذجية في العمل التطوعي بمكة المكرمة من خلال تمكين الشباب ولتحقيق رؤية المملكة 2030 في مجال التطوع"),
("web-title","نادي النشامى التطوعي | nshama"),
("web-title-img","assets/5c55d2d8332850.55878803.png"),
("meta-keywords","نادي النشامى التطوعي"),
("about_web","تم تأسيس نادي ” النشامى” بمكة المكرمة عام 2013 ، تحت مظلة جمعية مراكز الأحياء بمكة المكرمة ، حيث يهتم بالتطوع ونشر ثقافة التطوع بإحترافية بتمكين شباب المنطقة لتحقيق رؤية المملكة 2030 في مجال التطوع"),
("programmer_msg","false"),
("msg_p","تم حل المشاكل الخاصة بالمعارض و نأسف جدا علي هذا الخطأ و يمكن الان الاستمتاع بكل المزايا و اذا واجهتك مشكلة يمكنك الاتصال بنا مجددا , نحن نعدم الموقع اذا واجهتلك اي مشكلة , المبرمج."),
("bigtapinfo","يجب على كل عضو التسجيل في قاعدة البيانات النادي بشكل صحيح لأنه مطلب أمني -\n\nيجب على عضو أن يحمل بطاقة الأحوال الشخصية / الجواز والإقامة النظامية سارية المفعول -\n\nالإلتزام بأنظمة المملكة العربية السعودية *\nسألتزم بجميع القوانين واللوائح المعمول بها في المملكة العربية السعودية -\nسأتجنب التدخل في المسائل السياسية والثقافية والدينية التي تخالف أنظمة المملكة العربية السعودية -\nسأحترم الرموز الدينية والوطنية في المملكة العربية السعودية - \n\nحدود العمل *\nلن أتصرف في أي شأن طبي أو قانوني أو مهني تخصصي إذا لم تكن لدي الأهلية النظامية للقيام بذلك - \nلن أقوم بجمع التبرعات بأي حال من الأحوال لمشروعي التطوعي .\nالتواصل مع القسم النسائي يكون من خلال مسؤول شؤون المتطوعين والمدير التنفيذي للنادي فقط .\n\nالتواصل والمتابعة *\nسأقوم بإبلاغ النادي في حال ظهور أي مشكلة تؤثر على شخصياً أو على مهمتي التطوعية من خلال الموقع أو التواصل المباشر مع الإدارة -\n\nسلوك المتطوع *\nسأمتنع عن أي سلوك قد يؤدي إلى التأثير على سمعة النادي -\nسأمتنع عن المشاركة في أي نشاط أو سلوك غير نزيه مالياً او أخلاقياً أو إدارياً -\nسأتجنب التدخين في أماكن المبادره والفعاليات التي أشارك فيها -\nسأتجنب أي شكل من أشكال السلوك الذي قد يعتبر من قبيل التمييز والإحتقار على أساس الجنسية أو العرق أو السن او اللون أو الإعاقة -\nسأحرص على الحفاظ على ما أتسلمه من عُهد وأدوات ، ونظافة وسلامة المرافق التي سأستخدمها لتنفيذ مهمتي التطوعية - \n\nالإعلام والحقوق والفكرية *\nلن أقوم بانتحال هوية أحد مديري النادي التي أنتمى إليها أو أصرح بكوني إدارياً فيها إلا بقرار رسمي من الإدارة - \nسأقوم بالحفاظ على سرية المعلومات التي أطلعت عليها أثناء تأديتي للمهمة التطوعية مثل : بيانات الأسر والعوائل المستفيدة والجهات الشريكة - \n\n----------------------------------------------\n\nخاص بقيادات الفرق التطوعية وتسجيل الفرق التطوعية *\n\nتطبق الشروط والأحكام أعلاه\n\nيجب أن يكون الفريق المسجل في موقع النادي مصرح من أحد الجهات الحكومية  -\nيجب ابلاغ إدارة النادي بالفعاليات التي تنشر في الموقع بمدة ١٥ يوم على الأقل وإعطاء الموافقة عليها -\nأن يكون الفريق التطوعي لديه فكرة هادفة لصالح المجتمع السعودي وتنمية أفراده من خلال الموقع -\nأن يكون أعضاء الفريق حاملين بطاقة الأحوال الشخصية /الجواز أو الإقامة النظامية سارية المفعول -\nأن يكون للفريق آلية عمل واضحة وأعمال قدمتها -\nأن يكون للفريق الرغبة بالتعلم وتطوير أنشطتها للأفضل بما يتوافق مع أهدافها والصالح العام من خلال موقع النادي -\nبعد اكمال تسجيل الفريق في الموقع يجب التواصل مع إدارة النادي لأجل إجتماعات دورية لتطوير النشاط التطوعي -"),
("ads_visable","false"),
("web_info___v","<div data-contents=\"true\"><pre data-block=\"true\" data-editor=\"cqb1r\" data-offset-key=\"abp72-0-0\" data-mce-style=\"text-align: right;\" style=\"text-align: right;\"><p style=\"\"><span style=\"color: rgb(0, 0, 0);\" data-mce-style=\"color: #000000;\"><strong>يجب على عضو أن يحمل بطاقة الأحوال الشخصية / الجواز والإقامة النظامية سارية المفعول</strong></span><span style=\"color: rgb(0, 0, 0);\" data-mce-style=\"color: #000000;\"><strong> -</strong></span><br></p></pre><div class=\"\" data-block=\"true\" data-editor=\"cqb1r\" data-offset-key=\"csj49-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><pre data-mce-style=\"text-align: right;\" style=\"text-align: right;\"><span style=\"color: rgb(0, 0, 0);\" data-mce-style=\"color: #000000;\"><strong><span style=\"color: rgb(0, 0, 0);\" data-mce-style=\"color: #000000;\"><strong>يجب على كل عضو التسجيل في قاعدة البيانات النادي بشكل صحيح لأنه مطلب أمني -</strong></span></strong></span></pre><div data-offset-key=\"csj49-0-0\" class=\"_1mf _1mk\" style=\"\"><br data-mce-bogus=\"1\"></div><div data-offset-key=\"csj49-0-0\" class=\"_1mf _1mk\" style=\"\"><br data-mce-bogus=\"1\"></div></div><div class=\"\" data-block=\"true\" data-editor=\"cqb1r\" data-offset-key=\"6pvgl-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><pre data-offset-key=\"6pvgl-0-0\" class=\"_1mf _1mk\"><span style=\"color: rgb(255, 102, 0);\" data-mce-style=\"color: #ff6600;\"><strong>الإلتزام بأنظمة المملكة العربية السعودية *</strong></span><span style=\"color: rgb(255, 102, 0);\" data-mce-style=\"color: #ff6600;\"><strong></strong></span></pre></div><div class=\"\" data-block=\"true\" data-editor=\"cqb1r\" data-offset-key=\"5rhi7-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><p style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><span data-offset-key=\"5rhi7-0-0\"><span data-text=\"true\">سألتزم بجميع القوانين واللوائح المعمول بها في المملكة العربية السعودية -<br></span></span></p></div><div class=\"\" data-block=\"true\" data-editor=\"cqb1r\" data-offset-key=\"bjp6p-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><p style=\"\"><span data-offset-key=\"bjp6p-0-0\"><span data-text=\"true\">سأتجنب التدخل في المسائل السياسية والثقافية والدينية التي تخالف أنظمة المملكة العربية السعودية -<br></span></span></p></div><div class=\"\" data-block=\"true\" data-editor=\"cqb1r\" data-offset-key=\"5i2m7-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><p style=\"\"><span data-offset-key=\"5i2m7-0-0\"><span data-text=\"true\">سأحترم الرموز الدينية والوطنية في المملكة العربية السعودية - </span></span></p></div><div class=\"\" data-block=\"true\" data-editor=\"cqb1r\" data-offset-key=\"fp4m8-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"fp4m8-0-0\" class=\"_1mf _1mk\" style=\"\"><span data-offset-key=\"fp4m8-0-0\"><br data-text=\"true\"></span></div><div data-offset-key=\"fp4m8-0-0\" class=\"_1mf _1mk\" style=\"\"><span data-offset-key=\"fp4m8-0-0\"><br data-mce-bogus=\"1\"></span></div></div><div class=\"\" data-block=\"true\" data-editor=\"cqb1r\" data-offset-key=\"ehdam-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"ehdam-0-0\" class=\"_1mf _1mk\" style=\"\"><div class=\"\" data-block=\"true\" data-editor=\"cqb1r\" data-offset-key=\"ehdam-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><pre data-offset-key=\"ehdam-0-0\" class=\"_1mf _1mk\" data-mce-style=\"text-align: right;\" style=\"text-align: right;\"><strong><span data-offset-key=\"ehdam-0-0\" style=\"color: rgb(255, 102, 0);\" data-mce-style=\"color: #ff6600;\">حدود العمل</span></strong><strong><span data-offset-key=\"ehdam-0-0\" style=\"color: rgb(255, 102, 0);\" data-mce-style=\"color: #ff6600;\"> *</span></strong></pre></div><strong><span data-offset-key=\"ehdam-0-0\" style=\"color: rgb(255, 102, 0);\" data-mce-style=\"color: #ff6600;\"></span></strong><strong><span data-offset-key=\"ehdam-0-0\" style=\"color: rgb(255, 102, 0);\" data-mce-style=\"color: #ff6600;\"></span></strong></div></div><div class=\"\" data-block=\"true\" data-editor=\"cqb1r\" data-offset-key=\"4viqr-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><p><span data-offset-key=\"4viqr-0-0\"><span data-text=\"true\">لن أتصرف في أي شأن طبي أو قانوني أو مهني تخصصي إذا لم تكن لدي الأهلية النظامية للقيام بذلك - </span></span><span data-offset-key=\"4viqr-0-0\"><span data-text=\"true\"></span></span></p></div><div class=\"\" data-block=\"true\" data-editor=\"cqb1r\" data-offset-key=\"194fd-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><p style=\"\"><span data-offset-key=\"194fd-0-0\"><span data-text=\"true\">لن أقوم بجمع التبرعات بأي حال من الأحوال لمشروعي التطوعي - <br></span></span></p></div><div class=\"\" data-block=\"true\" data-editor=\"cqb1r\" data-offset-key=\"fsfj-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><p style=\"\"><span data-offset-key=\"fsfj-0-0\"><span data-text=\"true\">التواصل مع القسم النسائي يكون من خلال مسؤول شؤون المتطوعين والمدير التنفيذي للنادي فقط - <br></span></span></p></div><div class=\"\" data-block=\"true\" data-editor=\"cqb1r\" data-offset-key=\"6n0q6-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"6n0q6-0-0\" class=\"_1mf _1mk\" style=\"\"><span data-offset-key=\"6n0q6-0-0\"><br data-text=\"true\"></span></div></div><div class=\"\" data-block=\"true\" data-editor=\"cqb1r\" data-offset-key=\"b44av-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><pre data-offset-key=\"b44av-0-0\" class=\"_1mf _1mk\"><strong><span data-offset-key=\"b44av-0-0\" style=\"color: rgb(255, 102, 0);\" data-mce-style=\"color: #ff6600;\">التواصل والمتابعة *</span></strong></pre></div><div class=\"\" data-block=\"true\" data-editor=\"cqb1r\" data-offset-key=\"892kq-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><p style=\"\"><span data-offset-key=\"892kq-0-0\"><span data-text=\"true\">سأقوم بإبلاغ النادي في حال ظهور أي مشكلة تؤثر على شخصياً أو على مهمتي التطوعية من خلال الموقع أو التواصل المباشر مع الإدارة -<br></span></span></p></div><div class=\"\" data-block=\"true\" data-editor=\"cqb1r\" data-offset-key=\"57krj-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"57krj-0-0\" class=\"_1mf _1mk\" style=\"\"><span data-offset-key=\"57krj-0-0\"><br data-text=\"true\"></span></div></div><div class=\"\" data-block=\"true\" data-editor=\"cqb1r\" data-offset-key=\"1d24j-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><pre data-offset-key=\"1d24j-0-0\" class=\"_1mf _1mk\"><span style=\"color: rgb(255, 102, 0);\" data-mce-style=\"color: #ff6600;\"><strong>سلوك المتطوع *</strong></span></pre></div><div class=\"\" data-block=\"true\" data-editor=\"cqb1r\" data-offset-key=\"50mfs-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><p style=\"\"><span data-offset-key=\"50mfs-0-0\"><span data-text=\"true\">سأمتنع عن أي سلوك قد يؤدي إلى التأثير على سمعة النادي - <br></span></span></p></div><div class=\"\" data-block=\"true\" data-editor=\"cqb1r\" data-offset-key=\"ov0r-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><p style=\"\"><span data-offset-key=\"ov0r-0-0\"><span data-text=\"true\">سأمتنع عن المشاركة في أي نشاط أو سلوك غير نزيه مالياً او أخلاقياً أو إدارياً - <br></span></span></p></div><div class=\"\" data-block=\"true\" data-editor=\"cqb1r\" data-offset-key=\"3blur-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><p style=\"\"><span data-offset-key=\"3blur-0-0\"><span data-text=\"true\">سأتجنب التدخين في أماكن المبادره والفعاليات التي أشارك فيها - <br></span></span></p></div><div class=\"\" data-block=\"true\" data-editor=\"cqb1r\" data-offset-key=\"8gpum-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><p style=\"\"><span data-offset-key=\"8gpum-0-0\"><span data-text=\"true\">سأتجنب أي شكل من أشكال السلوك الذي قد يعتبر من قبيل التمييز والإحتقار على أساس الجنسية أو العرق أو السن او اللون أو الإعاقة - <br></span></span></p></div><div class=\"\" data-block=\"true\" data-editor=\"cqb1r\" data-offset-key=\"dnroi-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><p style=\"\"><span data-offset-key=\"dnroi-0-0\"><span data-text=\"true\">سأحرص على الحفاظ على ما أتسلمه من عُهد وأدوات ، ونظافة وسلامة المرافق التي سأستخدمها لتنفيذ مهمتي التطوعية -&nbsp; </span></span></p></div><div class=\"\" data-block=\"true\" data-editor=\"cqb1r\" data-offset-key=\"ccoq-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"ccoq-0-0\" class=\"_1mf _1mk\" style=\"\"><span data-offset-key=\"ccoq-0-0\"><br data-text=\"true\"></span></div></div><div class=\"\" data-block=\"true\" data-editor=\"cqb1r\" data-offset-key=\"plj-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><pre data-offset-key=\"plj-0-0\" class=\"_1mf _1mk\"><strong><span data-offset-key=\"plj-0-0\" style=\"color: rgb(255, 102, 0);\" data-mce-style=\"color: #ff6600;\">الإعلام والحقوق والفكرية *</span></strong></pre></div><div class=\"\" data-block=\"true\" data-editor=\"cqb1r\" data-offset-key=\"bh4eo-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><p style=\"\"><span data-offset-key=\"bh4eo-0-0\"><span data-text=\"true\">لن أقوم بانتحال هوية أحد مديري النادي التي أنتمى إليها أو أصرح بكوني إدارياً فيها إلا بقرار رسمي من الإدارة - </span></span></p></div><div class=\"\" data-block=\"true\" data-editor=\"cqb1r\" data-offset-key=\"5l3ud-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><p style=\"\"><span data-offset-key=\"5l3ud-0-0\"><span data-text=\"true\">سأقوم بالحفاظ على سرية المعلومات التي أطلعت عليها أثناء تأديتي للمهمة التطوعية مثل : بيانات الأسر والعوائل المستفيدة والجهات الشريكة -&nbsp; </span></span></p></div><div class=\"\" data-block=\"true\" data-editor=\"cqb1r\" data-offset-key=\"dc9bk-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"dc9bk-0-0\" class=\"_1mf _1mk\" style=\"\"><span data-offset-key=\"dc9bk-0-0\"><br data-text=\"true\"></span></div></div><div class=\"\" data-block=\"true\" data-editor=\"cqb1r\" data-offset-key=\"5untt-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"5untt-0-0\" class=\"_1mf _1mk\" style=\"\"><span data-offset-key=\"5untt-0-0\"><span data-text=\"true\">----------------------------------------------</span></span></div></div><div class=\"\" data-block=\"true\" data-editor=\"cqb1r\" data-offset-key=\"fdbut-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"fdbut-0-0\" class=\"_1mf _1mk\" style=\"\"><span data-offset-key=\"fdbut-0-0\"><br data-text=\"true\"></span></div></div><div class=\"\" data-block=\"true\" data-editor=\"cqb1r\" data-offset-key=\"7v3hu-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><pre data-offset-key=\"7v3hu-0-0\" class=\"_1mf _1mk\"><strong><span data-offset-key=\"7v3hu-0-0\" style=\"color: rgb(255, 102, 0);\" data-mce-style=\"color: #ff6600;\">خاص بقيادات الفرق التطوعية وتسجيل الفرق التطوعية *</span></strong></pre></div><div class=\"\" data-block=\"true\" data-editor=\"cqb1r\" data-offset-key=\"a72oo-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"a72oo-0-0\" class=\"_1mf _1mk\" style=\"\"><span data-offset-key=\"a72oo-0-0\"><br data-text=\"true\"></span></div><div data-offset-key=\"a72oo-0-0\" class=\"_1mf _1mk\" style=\"\"><span data-offset-key=\"a72oo-0-0\"><br data-mce-bogus=\"1\"></span></div></div><div class=\"\" data-block=\"true\" data-editor=\"cqb1r\" data-offset-key=\"6v0nm-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"6v0nm-0-0\" class=\"_1mf _1mk\" style=\"\"><strong><span data-offset-key=\"6v0nm-0-0\" style=\"color: rgb(0, 0, 0);\" data-mce-style=\"color: #000000;\">تطبق الشروط والأحكام أعلاه</span></strong></div></div><div class=\"\" data-block=\"true\" data-editor=\"cqb1r\" data-offset-key=\"425vq-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"425vq-0-0\" class=\"_1mf _1mk\" style=\"\"><span data-offset-key=\"425vq-0-0\"><br data-text=\"true\"></span></div></div><div class=\"\" data-block=\"true\" data-editor=\"cqb1r\" data-offset-key=\"6cfb1-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><p style=\"\"><span data-offset-key=\"6cfb1-0-0\"><span data-text=\"true\">يجب أن يكون الفريق المسجل في موقع النادي مصرح من أحد الجهات الحكومية -&nbsp; <br></span></span></p></div><div class=\"\" data-block=\"true\" data-editor=\"cqb1r\" data-offset-key=\"j90m-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><p style=\"\"><span data-offset-key=\"j90m-0-0\"><span data-text=\"true\">يجب ابلاغ إدارة النادي بالفعاليات التي تنشر في الموقع بمدة ١٥ يوم على الأقل وإعطاء الموافقة عليها -&nbsp; </span></span></p></div><div class=\"\" data-block=\"true\" data-editor=\"cqb1r\" data-offset-key=\"aj14-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><p style=\"\"><span data-offset-key=\"aj14-0-0\"><span data-text=\"true\">أن يكون الفريق التطوعي لديه فكرة هادفة لصالح المجتمع السعودي وتنمية أفراده من خلال الموقع - <br></span></span></p></div><div class=\"\" data-block=\"true\" data-editor=\"cqb1r\" data-offset-key=\"7d6q0-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><p style=\"\"><span data-offset-key=\"7d6q0-0-0\"><span data-text=\"true\">أن يكون أعضاء الفريق حاملين بطاقة الأحوال الشخصية /الجواز أو الإقامة النظامية سارية المفعول -&nbsp; </span></span></p></div><div class=\"\" data-block=\"true\" data-editor=\"cqb1r\" data-offset-key=\"60q66-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><p style=\"\"><span data-offset-key=\"60q66-0-0\"><span data-text=\"true\">أن يكون للفريق آلية عمل واضحة وأعمال قدمتها -&nbsp; </span></span></p></div><div class=\"\" data-block=\"true\" data-editor=\"cqb1r\" data-offset-key=\"2tlep-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><p style=\"\"><span data-offset-key=\"2tlep-0-0\"><span data-text=\"true\">أن يكون للفريق الرغبة بالتعلم وتطوير أنشطتها للأفضل بما يتوافق مع أهدافها والصالح العام من خلال موقع النادي -&nbsp; </span></span></p></div><div class=\"\" data-block=\"true\" data-editor=\"cqb1r\" data-offset-key=\"amcg4-0-0\" style=\"\"><p style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><span data-offset-key=\"amcg4-0-0\"><span data-text=\"true\">بعد اكمال تسجيل الفريق في الموقع يجب التواصل مع إدارة النادي لأجل إجتماعات دورية لتطوير النشاط التطوعي -&nbsp; </span></span></p></div></div>"),
("web_info___w_v","<div data-contents=\"true\"><div class=\"\" data-block=\"true\" data-editor=\"6scv5\" data-offset-key=\"8047d-0-0\"><div data-offset-key=\"8047d-0-0\" class=\"_1mf _1mk\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><span data-offset-key=\"8047d-0-0\"><br data-text=\"true\"></span></div></div><div class=\"\" data-block=\"true\" data-editor=\"6scv5\" data-offset-key=\"d7jo6-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"d7jo6-0-0\" class=\"_1mf _1mk\"><span data-offset-key=\"d7jo6-0-0\"><span data-text=\"true\"><br data-mce-bogus=\"1\"></span></span></div><h5 data-offset-key=\"d7jo6-0-0\" class=\"_1mf _1mk\"><strong><span data-offset-key=\"d7jo6-0-0\" style=\"color: rgb(255, 102, 0);\" data-mce-style=\"color: #ff6600;\">أولاً : حقوق المتطوع</span></strong></h5></div><div class=\"\" data-block=\"true\" data-editor=\"6scv5\" data-offset-key=\"fno0s-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"fno0s-0-0\" class=\"_1mf _1mk\"><span data-offset-key=\"fno0s-0-0\"><br data-text=\"true\"></span></div></div><div class=\"\" data-block=\"true\" data-editor=\"6scv5\" data-offset-key=\"dk3oh-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"dk3oh-0-0\" class=\"_1mf _1mk\"><span data-offset-key=\"dk3oh-0-0\"><span data-text=\"true\">على النادي تحديد أنظمة وقوانين تنظم العمل للمتطوعين والمتطوعات بشكل محدد وواضح - </span></span></div></div><div class=\"\" data-block=\"true\" data-editor=\"6scv5\" data-offset-key=\"forfu-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"forfu-0-0\" class=\"_1mf _1mk\"><span data-offset-key=\"forfu-0-0\"><span data-text=\"true\">يجب على النادي توضيح خطة العمل في المشاريع والأنشطة التي سيشارك فيها المتطوع وتحديد دوره بوصف مكتوب لمهامه وما سيؤديه من أعمال ومدة التطوع وعدد الساعات - </span></span></div></div><div class=\"\" data-block=\"true\" data-editor=\"6scv5\" data-offset-key=\"6u1je-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"6u1je-0-0\" class=\"_1mf _1mk\"><span data-offset-key=\"6u1je-0-0\"><span data-text=\"true\">يجب تكليف المتطوع بالمهام التي تتناسب مع مؤهلاته ومهاراته وبما يسمح له بالإنجاز والإبداع - </span></span></div></div><div class=\"\" data-block=\"true\" data-editor=\"6scv5\" data-offset-key=\"24b4q-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"24b4q-0-0\" class=\"_1mf _1mk\"><span data-offset-key=\"24b4q-0-0\"><span data-text=\"true\">العمل على تحديد نظام واضح للمتابعة والحصول على تغذية راجعة لما ينجزه العضو من أعمال وتوفير معايير لأداء متعارف عليها من الجميع ويستند عليها -<br></span></span></div></div><div class=\"\" data-block=\"true\" data-editor=\"6scv5\" data-offset-key=\"3ibde-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"3ibde-0-0\" class=\"_1mf _1mk\"><span data-offset-key=\"3ibde-0-0\"><span data-text=\"true\">يجب توفير مكان وأدوات ومواد مناسبة لتأدية الأعضاء المتطوعين للأعمال المكلفين بها -</span></span></div></div><div class=\"\" data-block=\"true\" data-editor=\"6scv5\" data-offset-key=\"auai7-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"auai7-0-0\" class=\"_1mf _1mk\"><span data-offset-key=\"auai7-0-0\"><span data-text=\"true\">يجب تحديد علاقة العضو المتطوع بباقي العاملين والأعضاء الآخرين المكافئين له وإحاطته بذلك منذ بداية العمل - </span></span></div></div><div class=\"\" data-block=\"true\" data-editor=\"6scv5\" data-offset-key=\"bghan-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"bghan-0-0\" class=\"_1mf _1mk\"><span data-offset-key=\"8047d-0-0\"><span data-text=\"true\">يجب معاملة المتطوعين والمتطوعات بما يستحقونه من تقدير واحترام وعدم تعريضهم لأي شكل من أشكال سوء المعاملة وإعطائهم فرصة لتوضيح مبرراتهم والدفاع عن أنفسهم عند حدوث أي إشكال حال أدائهم للمهام المكلفين بها - </span></span></div></div><div class=\"\" data-block=\"true\" data-editor=\"6scv5\" data-offset-key=\"d0oj7-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"d0oj7-0-0\" class=\"_1mf _1mk\"><span data-offset-key=\"d0oj7-0-0\"><span data-text=\"true\">يجب أن يفي النادي بالتزاماته المالية تجاه الأعضاء المتطوعين في حال تم الاتفاق معهم على دفع مكافآت لقاء ما يقدمونه من خدمات للنادي إن وجد-</span></span></div></div><div class=\"\" data-block=\"true\" data-editor=\"6scv5\" data-offset-key=\"bkr1i-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"bkr1i-0-0\" class=\"_1mf _1mk\"><span data-offset-key=\"bkr1i-0-0\"><span data-text=\"true\">العمل على تحديد إجراءات واضحة لحفظ حقوق المتطوعين والمتطوعات الأدبية والأخلاقية تجاه ما يقدمونه من أعمال وتقارير مكتوبة وتقييمهم واطلاعهم على التقييم ولهم حق التظلم - </span></span></div></div><div class=\"\" data-block=\"true\" data-editor=\"6scv5\" data-offset-key=\"5laio-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"5laio-0-0\" class=\"_1mf _1mk\"><span data-offset-key=\"5laio-0-0\"><span data-text=\"true\">يجب على النادي انشاء ميثاق تطوع وتوقيعه مع المتطوعين والمتطوعات بعد التسجيل في الموقع - <br></span></span></div></div><div class=\"\" data-block=\"true\" data-editor=\"6scv5\" data-offset-key=\"8kfpi-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"8kfpi-0-0\" class=\"_1mf _1mk\"><span data-offset-key=\"8kfpi-0-0\"><br data-text=\"true\"></span></div><div data-offset-key=\"8kfpi-0-0\" class=\"_1mf _1mk\"><span data-offset-key=\"8kfpi-0-0\"><br data-mce-bogus=\"1\"></span></div></div><div class=\"\" data-block=\"true\" data-editor=\"6scv5\" data-offset-key=\"egqc0-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><h5 data-offset-key=\"egqc0-0-0\" class=\"_1mf _1mk\"><span style=\"color: rgb(255, 102, 0);\" data-mce-style=\"color: #ff6600;\"><strong>ثانياً : واجبات المتطوع</strong></span></h5></div><div class=\"\" data-block=\"true\" data-editor=\"6scv5\" data-offset-key=\"6la36-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"6la36-0-0\" class=\"_1mf _1mk\"><span data-offset-key=\"6la36-0-0\"><br data-text=\"true\"></span></div></div><div class=\"\" data-block=\"true\" data-editor=\"6scv5\" data-offset-key=\"cacsr-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><h6 data-offset-key=\"cacsr-0-0\" class=\"_1mf _1mk\"><strong><span data-offset-key=\"cacsr-0-0\" style=\"color: rgb(0, 0, 0);\" data-mce-style=\"color: #000000;\">الإلتزام بميثاق التطوع</span></strong></h6></div><div class=\"\" data-block=\"true\" data-editor=\"6scv5\" data-offset-key=\"t9rf-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"t9rf-0-0\" class=\"_1mf _1mk\"><span data-offset-key=\"t9rf-0-0\"><span data-text=\"true\">لا يسمح لأي فرد المشاركة التطوعية في أنشطة النادي إلا بعد تسجيله في الموقع الالكتروني الخاص بالنادي وحصوله على موافقة صريحة بالمشاركة بعد استيفاء المعلومات المطلوبة منه - </span></span></div></div><div class=\"\" data-block=\"true\" data-editor=\"6scv5\" data-offset-key=\"7e9mc-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"7e9mc-0-0\" class=\"_1mf _1mk\"><span data-offset-key=\"7e9mc-0-0\"><span data-text=\"true\">يجب على المتطوع/ـة استيفاء جميع البيانات المطلوبة للتسجيل والتي توضح خبراته ومهاراته السابقة والتي سوف يفيد النادي من خلالها وطرق الاتصال به بشكل مباشر وواضح وفق النموذج الخاص بالتسجيل الذي تعتمده النادي - </span></span></div></div><div class=\"\" data-block=\"true\" data-editor=\"6scv5\" data-offset-key=\"ifq4-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"ifq4-0-0\" class=\"_1mf _1mk\"><span data-offset-key=\"ifq4-0-0\"><span data-text=\"true\">يجب على المتطوع/ـة مراعاة المصلحة العامة وفق تعاليم الدين الإسلامي والأنظمة واللوائح الخاصة بالعمل التطوعي وعدم ممارسة أي أنشطة ذات أهداف شخصية لا تخدم أهداف النادي وقد تسيء لها بأي شكل من الأشكال - </span></span></div></div><div class=\"\" data-block=\"true\" data-editor=\"6scv5\" data-offset-key=\"5n9ct-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"5n9ct-0-0\" class=\"_1mf _1mk\"><span data-offset-key=\"5n9ct-0-0\"><span data-text=\"true\">يجب التزام المتطوع/ـة بالحرص على تقديم الخدمات المكلف بها لجميع المستفيدين منها بشكل لائق وعادل بعيداً عن أي شكل من أشكال التعصب أو التمييز -</span></span></div></div><div class=\"\" data-block=\"true\" data-editor=\"6scv5\" data-offset-key=\"dt0vh-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"dt0vh-0-0\" class=\"_1mf _1mk\"><span data-offset-key=\"dt0vh-0-0\"><span data-text=\"true\">على المتطوع الحرص على الاستقامة في سلوكه والجدية في العمل وأن يكون مثالا للقدوة والأخلاق الحميدة -</span></span></div></div><div class=\"\" data-block=\"true\" data-editor=\"6scv5\" data-offset-key=\"an9hr-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"an9hr-0-0\" class=\"_1mf _1mk\"><span data-offset-key=\"an9hr-0-0\"><span data-text=\"true\">يجب على المتطوع أن يلتزم بحضور جميع الأنشطة المتصلة بالمهام الموكلة له.</span></span></div></div><div class=\"\" data-block=\"true\" data-editor=\"6scv5\" data-offset-key=\"8nc3d-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"8nc3d-0-0\" class=\"_1mf _1mk\"><span data-offset-key=\"8nc3d-0-0\"><span data-text=\"true\">المتقدمين للتطوع من الإداريين يجب عليهم إحضار موافقة من مرجعهم بالمشاركة التطوعية إذا كان عمله في التطوع يؤثر على دوامه الرسمي -</span></span></div></div><div class=\"\" data-block=\"true\" data-editor=\"6scv5\" data-offset-key=\"1nmms-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"1nmms-0-0\" class=\"_1mf _1mk\"><span data-offset-key=\"1nmms-0-0\"><span data-text=\"true\">على المتطوع/ـة أن يحرص على حسن المظهر الشخصي باعتدال بدون مبالغة أو إهمال مع مراعاة المعايير والآداب العامة المقبولة - </span></span></div></div><div class=\"\" data-block=\"true\" data-editor=\"6scv5\" data-offset-key=\"7gdcv-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"7gdcv-0-0\" class=\"_1mf _1mk\"><span data-offset-key=\"7gdcv-0-0\"><span data-text=\"true\">إحاطة المتطوع/ـة بأنه يقوم بخدمات تطوعية دون مقابل - </span></span></div></div><div class=\"\" data-block=\"true\" data-editor=\"6scv5\" data-offset-key=\"ruga-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"ruga-0-0\" class=\"_1mf _1mk\"><span data-offset-key=\"ruga-0-0\"><span data-text=\"true\">يحق للمتطوع/ ـة الحصول على شهادة مشاركة من النادي عن كل نشاط شارك فيه وأكمل المهام الموكلة له في النشاط - </span></span></div></div><div class=\"\" data-block=\"true\" data-editor=\"6scv5\" data-offset-key=\"f0qas-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"f0qas-0-0\" class=\"_1mf _1mk\"><span data-offset-key=\"f0qas-0-0\"><span data-text=\"true\">يحق للمتطوع/ـة الذي أكمل المهام بالشكل المطلوب وفق الاتفاق التطوعي الحصول على أولوية التسجيل في الدورات التدريبية والأنشطة العلمية التي ينفذها النادي للمتخصص والحصول على شهادة المشاركة - </span></span></div></div><div class=\"\" data-block=\"true\" data-editor=\"6scv5\" data-offset-key=\"642jq-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"642jq-0-0\" class=\"_1mf _1mk\"><span data-offset-key=\"642jq-0-0\"><span data-text=\"true\">يجوز للنادي الاستغناء عن خدمات المتطوع /ـة في حال مخالفته للأنظمة بشكل يسيء </span></span><span data-offset-key=\"642jq-0-0\"><span data-text=\"true\"><span data-offset-key=\"642jq-0-0\"><span data-text=\"true\">للنادي </span></span>أو تقاعسه بشكل متكرر عن أداء الأعمال المكلف بها، أو ظهر </span></span><span data-offset-key=\"642jq-0-0\"><span data-text=\"true\"><span data-offset-key=\"642jq-0-0\"><span data-text=\"true\"><span data-offset-key=\"9h454-0-0\"><span data-text=\"true\">بال</span></span><span data-offset-key=\"9h454-0-0\"><span data-text=\"true\"><span data-offset-key=\"642jq-0-0\"><span data-text=\"true\">نادي </span></span></span></span></span></span>عدم قدرة المتطوع/ـة على أداء المهام المتفق عليها معه، أو عدم جدوى مشاركته التطوعية - </span></span></div></div><div class=\"\" data-block=\"true\" data-editor=\"6scv5\" data-offset-key=\"9h454-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"9h454-0-0\" class=\"_1mf _1mk\"><span data-offset-key=\"9h454-0-0\"><span data-text=\"true\">يحق للمتطوع /ـة الحصول على خطاب إلى الجهة التابع لها (جهة عمل/ دراسة) يفيد بمشاركته بالأعمال التطوعية الخاصة بال</span></span><span data-offset-key=\"9h454-0-0\"><span data-text=\"true\"><span data-offset-key=\"642jq-0-0\"><span data-text=\"true\">نادي </span></span>بعد تنفيذها أو الأستفاده من مشاركته التطوعية في مجال تقييم انجازه الأكاديمي أو المهني - </span></span></div></div><div class=\"\" data-block=\"true\" data-editor=\"6scv5\" data-offset-key=\"5878j-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"5878j-0-0\" class=\"_1mf _1mk\"><span data-offset-key=\"5878j-0-0\"><span data-text=\"true\">يجب عدم إقامة علاقات شخصية خاصة مع أحد الأفراد الذين يتعامل معهم خلال الأنشطة المختلفة بشكل يسيء لأهداف النادي وصورته في المجتمع لذا يجب أن تكون علاقته متوازنة مع زملائه والعاملون في النادي والمتعاملون معه بشكل يحقق أهداف المكتب - </span></span></div></div><div class=\"\" data-block=\"true\" data-editor=\"6scv5\" data-offset-key=\"c8ci6-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"c8ci6-0-0\" class=\"_1mf _1mk\"><span data-offset-key=\"c8ci6-0-0\"><br data-text=\"true\"></span></div></div><div class=\"\" data-block=\"true\" data-editor=\"6scv5\" data-offset-key=\"ccs3j-0-0\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><div data-offset-key=\"ccs3j-0-0\" class=\"_1mf _1mk\"><span data-offset-key=\"ccs3j-0-0\"><br data-text=\"true\"></span></div></div><div class=\"\" data-block=\"true\" data-editor=\"6scv5\" data-offset-key=\"en504-0-0\"><div data-offset-key=\"en504-0-0\" class=\"_1mf _1mk\" style=\"text-align: right;\" data-mce-style=\"text-align: right;\"><span data-offset-key=\"en504-0-0\"><br data-text=\"true\"></span></div></div></div>");



