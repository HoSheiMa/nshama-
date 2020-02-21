<?php



session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin']) && $_SESSION['log_admin'] == true) {



    $q = "DELETE FROM `appbar` WHERE 1";
    mysqli_query($c, $q);

    $q = "DELETE FROM `dropdown-info` WHERE 1";
    mysqli_query($c, $q);

    $q1 = "INSERT INTO `appbar` (`title`, `link`, `visable`, `type`, `freeze`, `id_`) VALUES
('الصفخة الرائسية ', 'index.php', 'true', 'link', 'true', 'sad090'),
('عن المجموعة ', 'id234', 'true', 'dropdown', 'true', 'e21ef'),
('خدماتنا', 'req.php?q=page7', 'true', 'link', 'true', 'k09d0'),
('المتطوعين', 'req.php?q=page4', 'true', 'link', 'true', 'e0i012e'),
('العضويات', 'req.php?q=page5', 'true', 'link', 'true', 'e21j09'),
('شركاء و داعمين', 'req.php?q=page6', 'true', 'link', 'true', 'e2109'),
('المعارض', 'id26', 'true', 'dropdown', 'true', '214op'),
('اتصل بنا', 'req.php?q=pagecallus', 'true', 'link', 'true', 'k0r9328e09');
";

    $q2 = "INSERT INTO `dropdown-info` (`id`, `link`, `title`, `visable`, `freeze`, `id_`) VALUES
('id234', 'req.php?q=page1', 'الرؤية و الرساله و القيم', 'true', 'true', '132'),
('id234', 'req.php?q=page2', 'المؤسسين', 'true', 'true', '24124'),
('id234', 'req.php?q=page3', 'اعضاء مجلس الادارة و الموظفين', 'true', 'true', '323f'),
('id234', 'req.php?q=team_views', 'الفرق التطوعية', 'true', 'true', 'fdsw3'),
('id234', 'req.php?q=support_____', 'الجهات المستفيده', 'true', 'true', 'd233'),
('id26', 'req.php?q=BookShowCase', 'معرض الكتب', 'true', 'true', 'fre98'),
('id26', 'req.php?q=ImagesShowCase', 'معرض الصور', 'true', 'true', 'vu98u0e9'),
('id26', 'req.php?q=Videos', 'معرض الفيديهات', 'true', 'true', 'er90vi93');
";

    mysqli_query($c, $q1);
    mysqli_query($c, $q2);


}