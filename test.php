<?php

require_once 'classes/Dbconn.class.php';
    require_once 'classes/section.class.php';
    require_once 'classes/section_db.class.php';
    require_once 'classes/law.class.php';
    require_once 'classes/law_db.class.php';
    require_once 'classes/book.class.php';
    require_once 'classes/book_db.class.php';
    require_once 'classes/title.class.php';
    require_once 'classes/title_db.class.php';
    require_once 'classes/chapter.class.php';
    require_once 'classes/chapter_db.class.php';
    require_once 'classes/division.class.php';
    require_once 'classes/division_db.class.php';
    require_once 'classes/sub_division.class.php';
    require_once 'classes/sub_division_db.class.php';
    require_once 'classes/related.class.php';
    require_once 'classes/related_db.class.php';




					// $related = new RelatedDB();
     //                $sec_num = 531;
     //                $rel_sec = $related->selRelated();
     //                $rel_sec2 = $related->selRelatedBySec(531);
     //                var_dump($rel_sec);
     //                var_dump($rel_sec2);
     //                foreach($rel_sec as $r){
     //                    echo "<h4><a href='section.php?section=". $r['sec_num'] . "'>Section: " . $r['sec_num'] . "</a></h4>";
     //                    //$section = new SectionDB();
     //                    // $sec_txt = $section->selSectionByNum($r['rel_sec_num']);
     //                    // foreach($sec_txt as $s){
     //                    //     echo "<p>" . $s["sec_txt"] . "</p>";
     //                    // }
     //                }