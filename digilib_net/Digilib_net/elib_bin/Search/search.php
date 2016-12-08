<?php
/*search.php
========================================
Designed and Developed by Sal64dd
contact: sal.uncd@gmail.com
========================================
*/

//Booksearch=May+the+Force+be+with+you...&
//bookSearch_check=4&
//blogsSearch_check=1&
//smatSearch_check=3&
//orderSearch_check=1

ini_set("include_path", "../../");
include "elib_depend/digilib_api/digilib_std.php";
$GLOBALS['std']['meta']['title'] = 'Digital Library | Search';

digilib_std_Header();
prt_search_form();

check_get();

$q = $_SESSION["stdSRCtool"]["src"];
if($_SESSION["stdSRCtool"]["book"] || 
   $_SESSION["stdSRCtool"]["blog"] || 
   $_SESSION["stdSRCtool"]["smat"]){
    if($_SESSION["stdSRCtool"]["book"]){
        if($_SESSION["stdSRCtool"]["book"] == 1){
            if($_SESSION["stdSRCtool"]["order"]==1){
                $sql1 = array(1,array('SELECT book_id, book_title, published, rating, img FROM `lib_book_info` 
                WHERE book_title LIKE \'%'.$q.'%\' ORDER BY book_title ASC;'));
            }
            elseif($_SESSION["stdSRCtool"]["order"]==2){
                 $sql1 = array(1,array('SELECT book_id, book_title, published, rating, img FROM `lib_book_info` 
                WHERE book_title LIKE \'%'.$q.'%\' ORDER BY book_title DESC;'));
            }
            elseif($_SESSION["stdSRCtool"]["order"]==3){
                 $sql1 = array(1,array('SELECT book_id, book_title, published, rating, img FROM `lib_book_info` 
                WHERE book_title LIKE \'%'.$q.'%\' ORDER BY rating ASC;'));
            }
            elseif($_SESSION["stdSRCtool"]["order"]==4){
                 $sql1 = array(1,array('SELECT book_id, book_title, published, rating, img FROM `lib_book_info` 
                WHERE book_title LIKE \'%'.$q.'%\' ORDER BY rating DESC;'));
            }
            else{
                 $sql1 = array(1,array('SELECT book_id, book_title, published, rating, img FROM `lib_book_info` 
                WHERE book_title LIKE \'%'.$q.'%\''));
            }
            $ret1 = simonsays($sql1);
            if($ret1[0][0]){
                echo '*Can\'t Process your query. Please Try again later';
                digilib_std_Footer();
                die();
            }
            //1. Book Results
            if($ret1[1][0]->num_rows){
                echo '<div class="search_result"><h1>Books</h1><hr>';
            }
            for($i=0; $i<$ret1[1][0]->num_rows; $i++){
                $row = $ret1[1][0]->fetch_assoc();
                echo '<div class="src_elem src_elem_book"><div style="'; 
                if($row["img"]){
                    echo 'background:url(elib_database/database_library/Books_cover/'.$row["book_id"].'.jpg) 
                    center no-repeat; background-size: cover;';
                }
                echo '" class="cover">'.($row['img']?"":createcover("",$row['book_title'], 12)).'</div>
                        <div class="text">
                            <a href="elib_bin/Elib/Book.php?Book='.$row['book_id'].'" 
                            class="title">'.$row['book_title'].'</a>
                            <span class="published">'.$row['published'].'</span>
                            <span class="rating">';
                for($j=0;$j<$row['rating'];$j+=2){
                    if(($row['rating']-$j)==1){
                        echo '<span class="halfstar"></span>';
                    } else{
                        echo '<span class="fullstar"></span>';
                    }
                }
                echo '</span></div></div>';
            }if($ret1[1][0]->num_rows){
                echo '</div>';
            }
        }
        if($_SESSION["stdSRCtool"]["book"] == 2){
            if($_SESSION["stdSRCtool"]["order"]==1){
                $sql1 = array(1,array(
                'SELECT lib_book_info.book_id, lib_book_info.book_title, lib_book_info.published, 
                lib_book_info.rating, lib_book_info.img, author_info.author_id, 
                author_info.author_name, author_info.is_detailed 
                    FROM author_book_rel, author_info, lib_book_info 
                    WHERE author_info.author_name LIKE \'%'.$q.'%\'
                    AND author_info.author_id = author_book_rel.author_id 
                    AND author_book_rel.book_id = lib_book_info.book_id ORDER BY author_name ASC;'
            ));
            }
            elseif($_SESSION["stdSRCtool"]["order"]==2){
                 $sql1 = array(1,array(
                'SELECT lib_book_info.book_id, lib_book_info.book_title, lib_book_info.published, 
                lib_book_info.rating, lib_book_info.img, author_info.author_id, 
                author_info.author_name, author_info.is_detailed 
                    FROM author_book_rel, author_info, lib_book_info 
                    WHERE author_info.author_name LIKE \'%'.$q.'%\'
                    AND author_info.author_id = author_book_rel.author_id 
                    AND author_book_rel.book_id = lib_book_info.book_id ORDER BY author_name DESC;'
            ));
            }
            elseif($_SESSION["stdSRCtool"]["order"]==3){
                 $sql1 = array(1,array(
                'SELECT lib_book_info.book_id, lib_book_info.book_title, lib_book_info.published, 
                lib_book_info.rating, lib_book_info.img, author_info.author_id, 
                author_info.author_name, author_info.is_detailed 
                    FROM author_book_rel, author_info, lib_book_info 
                    WHERE author_info.author_name LIKE \'%'.$q.'%\'
                    AND author_info.author_id = author_book_rel.author_id 
                    AND author_book_rel.book_id = lib_book_info.book_id;'
            ));
            }
            elseif($_SESSION["stdSRCtool"]["order"]==4){
                 $sql1 = array(1,array(
                'SELECT lib_book_info.book_id, lib_book_info.book_title, lib_book_info.published, 
                lib_book_info.rating, lib_book_info.img, author_info.author_id, 
                author_info.author_name, author_info.is_detailed 
                    FROM author_book_rel, author_info, lib_book_info 
                    WHERE author_info.author_name LIKE \'%'.$q.'%\'
                    AND author_info.author_id = author_book_rel.author_id 
                    AND author_book_rel.book_id = lib_book_info.book_id;'
            ));
            }
            else{
                 $sql1 = array(1,array(
                'SELECT lib_book_info.book_id, lib_book_info.book_title, lib_book_info.published, 
                lib_book_info.rating, lib_book_info.img, author_info.author_id, 
                author_info.author_name, author_info.is_detailed 
                    FROM author_book_rel, author_info, lib_book_info 
                    WHERE author_info.author_name LIKE \'%'.$q.'%\'
                    AND author_info.author_id = author_book_rel.author_id 
                    AND author_book_rel.book_id = lib_book_info.book_id;'
            ));
            }
            $ret1 = simonsays($sql1);
            if($ret1[0][0]){
                echo '*Can\'t Process your query. Please Try again later';
                digilib_std_Footer();
                die();
            }

            if($ret1[1][0]->num_rows){
            echo '<div class="search_result"><h1>Authors</h1><hr>';
            }
            for($i=0; $i<$ret1[1][0]->num_rows; $i++){
                $row = $ret1[1][0]->fetch_assoc();
                echo '<div class="src_elem src_elem_book"><div style="'; 
                if($row["img"]){
                    echo 'background:url(elib_database/database_library/Books_cover/'.$row["book_id"].'.jpg) 
                    center no-repeat; background-size: cover;';
                }
                echo '" class="cover">'.($row['img']?"":createcover("",$row['book_title'], 12)).'</div>
                        <div class="text">
                            <a href="elib_bin/Elib/Book.php?Book='.$row['book_id'].'" class="title">'.$row['book_title'].'</a>
                            <a href="elib_bin/Elib/Book.php?Author='.$row['author_id'].' 
                            class="author"">'.$row['author_name'].'</a>
                            <span class="published">'.$row['published'].'</span>
                            <span class="rating">';
                for($j=0;$j<$row['rating'];$j+=2){
                    if(($row['rating']-$j)==1){
                        echo '<span class="halfstar"></span>';
                    } else{
                        echo '<span class="fullstar"></span>';
                    }
                }
                echo '</span></div></div>';
            }if($ret1[1][0]->num_rows){
                echo '</div>';
            }
        }
        if($_SESSION["stdSRCtool"]["book"] == 3){
            if($_SESSION["stdSRCtool"]["order"]==1){
                $sql1 = array(1,array('SELECT book_id, book_title, published, rating, img FROM `lib_book_info` 
                WHERE published LIKE \'%'.$q.'%\' ORDER BY book_title ASC;'));
            }
            elseif($_SESSION["stdSRCtool"]["order"]==2){
                 $sql1 = array(1,array('SELECT book_id, book_title, published, rating, img FROM `lib_book_info` 
                WHERE published LIKE \'%'.$q.'%\' ORDER BY book_title DESC;'));
            }
            elseif($_SESSION["stdSRCtool"]["order"]==3){
                 $sql1 = array(1,array('SELECT book_id, book_title, published, rating, img FROM `lib_book_info` 
                WHERE published LIKE \'%'.$q.'%\' ORDER BY rating ASC;'));
            }
            elseif($_SESSION["stdSRCtool"]["order"]==4){
                 $sql1 = array(1,array('SELECT book_id, book_title, published, rating, img FROM `lib_book_info` 
                WHERE published LIKE \'%'.$q.'%\' ORDER BY rating DESC;'));
            }
            else{
                 $sql1 = array(1,array('SELECT book_id, book_title, published, rating, img FROM `lib_book_info` 
                WHERE published LIKE \'%'.$q.'%\''));
            }
            $ret1 = simonsays($sql1);
            if($ret1[0][0]){
                echo '*Can\'t Process your query. Please Try again later';
                digilib_std_Footer();
                die();
            }
            //1. Book Results
            if($ret1[1][0]->num_rows){
                echo '<div class="search_result"><h1>Books</h1><hr>';
            }
            for($i=0; $i<$ret1[1][0]->num_rows; $i++){
                $row = $ret1[1][0]->fetch_assoc();
                echo '<div class="src_elem src_elem_book"><div style="'; 
                if($row["img"]){
                    echo 'background:url(elib_database/database_library/Books_cover/'.$row["book_id"].'.jpg) 
                    center no-repeat; background-size: cover;';
                }
                echo '" class="cover">'.($row['img']?"":createcover("",$row['book_title'], 12)).'</div>
                        <div class="text">
                            <a href="elib_bin/Elib/Book.php?Book='.$row['book_id'].'" 
                            class="title">'.$row['book_title'].'</a>
                            <span class="published">'.$row['published'].'</span>
                            <span class="rating">';
                for($j=0;$j<$row['rating'];$j+=2){
                    if(($row['rating']-$j)==1){
                        echo '<span class="halfstar"></span>';
                    } else{
                        echo '<span class="fullstar"></span>';
                    }
                }
                echo '</span></div></div>';
            }if($ret1[1][0]->num_rows){
                echo '</div>';
            }
        }
        if($_SESSION["stdSRCtool"]["book"] == 4){
            if($_SESSION["stdSRCtool"]["order"]==1){
                $sql1 = array(1,array('SELECT book_id, book_title, published, rating, img FROM `lib_book_info` 
                WHERE rating LIKE \'%'.$q.'%\' ORDER BY book_title ASC;'));
            }
            elseif($_SESSION["stdSRCtool"]["order"]==2){
                 $sql1 = array(1,array('SELECT book_id, book_title, published, rating, img FROM `lib_book_info` 
                WHERE rating LIKE \'%'.$q.'%\' ORDER BY book_title DESC;'));
            }
            elseif($_SESSION["stdSRCtool"]["order"]==3){
                 $sql1 = array(1,array('SELECT book_id, book_title, published, rating, img FROM `lib_book_info` 
                WHERE rating LIKE \'%'.$q.'%\' ORDER BY rating ASC;'));
            }
            elseif($_SESSION["stdSRCtool"]["order"]==4){
                 $sql1 = array(1,array('SELECT book_id, book_title, published, rating, img FROM `lib_book_info` 
                WHERE rating LIKE \'%'.$q.'%\' ORDER BY rating DESC;'));
            }
            else{
                 $sql1 = array(1,array('SELECT book_id, book_title, published, rating, img FROM `lib_book_info` 
                WHERE rating LIKE \'%'.$q.'%\''));
            }
            $ret1 = simonsays($sql1);
            if($ret1[0][0]){
                echo '*Can\'t Process your query. Please Try again later';
                digilib_std_Footer();
                die();
            }
            //1. Book Results
            if($ret1[1][0]->num_rows){
                echo '<div class="search_result"><h1>Books</h1><hr>';
            }
            for($i=0; $i<$ret1[1][0]->num_rows; $i++){
                $row = $ret1[1][0]->fetch_assoc();
                echo '<div class="src_elem src_elem_book"><div style="'; 
                if($row["img"]){
                    echo 'background:url(elib_database/database_library/Books_cover/'.$row["book_id"].'.jpg) 
                    center no-repeat; background-size: cover;';
                }
                echo '" class="cover">'.($row['img']?"":createcover("",$row['book_title'], 12)).'</div>
                        <div class="text">
                            <a href="elib_bin/Elib/Book.php?Book='.$row['book_id'].'" 
                            class="title">'.$row['book_title'].'</a>
                            <span class="published">'.$row['published'].'</span>
                            <span class="rating">';
                for($j=0;$j<$row['rating'];$j+=2){
                    if(($row['rating']-$j)==1){
                        echo '<span class="halfstar"></span>';
                    } else{
                        echo '<span class="fullstar"></span>';
                    }
                }
                echo '</span></div></div>';
            }if($ret1[1][0]->num_rows){
                echo '</div>';
            }
        }
        if($_SESSION["stdSRCtool"]["book"] == 5){
            if($_SESSION["stdSRCtool"]["order"]==1){
                $sql1 = array(1,array('SELECT book_id, chapters, book_title, published, rating, img FROM `lib_book_info` 
                WHERE chapters <= \''.$q.'\' ORDER BY book_title ASC;'));
            }
            elseif($_SESSION["stdSRCtool"]["order"]==2){
                 $sql1 = array(1,array('SELECT book_id, chapters, book_title, published, rating, img FROM `lib_book_info` 
                WHERE chapters <= \''.$q.'\' ORDER BY book_title DESC;'));
            }
            elseif($_SESSION["stdSRCtool"]["order"]==3){
                 $sql1 = array(1,array('SELECT book_id, chapters, book_title, published, rating, img FROM `lib_book_info` 
                WHERE chapters <= \''.$q.'\' ORDER BY rating ASC;'));
            }
            elseif($_SESSION["stdSRCtool"]["order"]==4){
                 $sql1 = array(1,array('SELECT book_id, chapters, book_title, published, rating, img FROM `lib_book_info` 
                WHERE chapters <= \''.$q.'\' ORDER BY rating DESC;'));
            }
            else{
                 $sql1 = array(1,array('SELECT book_id, chapters, book_title, published, rating, img FROM `lib_book_info` 
                WHERE chapters <= \''.$q.'\''));
            }
            $ret1 = simonsays($sql1);
            if($ret1[0][0]){
                echo '*Can\'t Process your query. Please Try again later';
                digilib_std_Footer();
                die();
            }
            //1. Book Results
            if($ret1[1][0]->num_rows){
                echo '<div class="search_result"><h1>Books</h1><hr>';
            }
            for($i=0; $i<$ret1[1][0]->num_rows; $i++){
                $row = $ret1[1][0]->fetch_assoc();
                echo '<div class="src_elem src_elem_book"><div style="'; 
                if($row["img"]){
                    echo 'background:url(elib_database/database_library/Books_cover/'.$row["book_id"].'.jpg) 
                    center no-repeat; background-size: cover;';
                }
                echo '" class="cover">'.($row['img']?"":createcover("",$row['book_title'], 12)).'</div>
                        <div class="text">
                            <a href="elib_bin/Elib/Book.php?Book='.$row['book_id'].'" 
                            class="title">'.$row['book_title'].'</a>
                            <span class="published">'.$row['published'].'</span>
                            <span class="published">Chapters: '.$row['chapters'].'</span>
                            <span class="rating">';
                for($j=0;$j<$row['rating'];$j+=2){
                    if(($row['rating']-$j)==1){
                        echo '<span class="halfstar"></span>';
                    } else{
                        echo '<span class="fullstar"></span>';
                    }
                }
                echo '</span></div></div>';
            }if($ret1[1][0]->num_rows){
                echo '</div>';
            }
        }
        if($_SESSION["stdSRCtool"]["book"] == 6){
            if($_SESSION["stdSRCtool"]["order"]==1){
                $sql1 = array(1,array('SELECT book_id, chapters, book_title, published, rating, img FROM `lib_book_info` 
                WHERE chapters >= \''.$q.'\' ORDER BY book_title ASC;'));
            }
            elseif($_SESSION["stdSRCtool"]["order"]==2){
                 $sql1 = array(1,array('SELECT book_id, chapters, book_title, published, rating, img FROM `lib_book_info` 
                WHERE chapters >= \''.$q.'\' ORDER BY book_title DESC;'));
            }
            elseif($_SESSION["stdSRCtool"]["order"]==3){
                 $sql1 = array(1,array('SELECT book_id, chapters, book_title, published, rating, img FROM `lib_book_info` 
                WHERE chapters >= \''.$q.'\' ORDER BY rating ASC;'));
            }
            elseif($_SESSION["stdSRCtool"]["order"]==4){
                 $sql1 = array(1,array('SELECT book_id, chapters, book_title, published, rating, img FROM `lib_book_info` 
                WHERE chapters >= \''.$q.'\' ORDER BY rating DESC;'));
            }
            else{
                 $sql1 = array(1,array('SELECT book_id, chapters, book_title, published, rating, img FROM `lib_book_info` 
                WHERE chapters >= \''.$q.'\''));
            }
            $ret1 = simonsays($sql1);
            if($ret1[0][0]){
                echo '*Can\'t Process your query. Please Try again later';
                digilib_std_Footer();
                die();
            }
            //1. Book Results
            if($ret1[1][0]->num_rows){
                echo '<div class="search_result"><h1>Books</h1><hr>';
            }
            for($i=0; $i<$ret1[1][0]->num_rows; $i++){
                $row = $ret1[1][0]->fetch_assoc();
                echo '<div class="src_elem src_elem_book"><div style="'; 
                if($row["img"]){
                    echo 'background:url(elib_database/database_library/Books_cover/'.$row["book_id"].'.jpg) 
                    center no-repeat; background-size: cover;';
                }
                echo '" class="cover">'.($row['img']?"":createcover("",$row['book_title'], 12)).'</div>
                        <div class="text">
                            <a href="elib_bin/Elib/Book.php?Book='.$row['book_id'].'" 
                            class="title">'.$row['book_title'].'</a>
                            <span class="published">'.$row['published'].'</span>
                            <span class="published">Chapters: '.$row['chapters'].'</span>
                            <span class="rating">';
                for($j=0;$j<$row['rating'];$j+=2){
                    if(($row['rating']-$j)==1){
                        echo '<span class="halfstar"></span>';
                    } else{
                        echo '<span class="fullstar"></span>';
                    }
                }
                echo '</span></div></div>';
            }if($ret1[1][0]->num_rows){
                echo '</div>';
            }
        }
        if($_SESSION["stdSRCtool"]["book"] == 7){
            if($_SESSION["stdSRCtool"]["order"]==1){
                $sql1 = array(1,array('SELECT book_id, pages, book_title, published, rating, img FROM `lib_book_info` 
                WHERE pages <= \''.$q.'\' ORDER BY book_title ASC;'));
            }
            elseif($_SESSION["stdSRCtool"]["order"]==2){
                 $sql1 = array(1,array('SELECT book_id, pages, book_title, published, rating, img FROM `lib_book_info` 
                WHERE pages <= \''.$q.'\' ORDER BY book_title DESC;'));
            }
            elseif($_SESSION["stdSRCtool"]["order"]==3){
                 $sql1 = array(1,array('SELECT book_id, pages, book_title, published, rating, img FROM `lib_book_info` 
                WHERE pages <= \''.$q.'\' ORDER BY rating ASC;'));
            }
            elseif($_SESSION["stdSRCtool"]["order"]==4){
                 $sql1 = array(1,array('SELECT book_id, pages, book_title, published, rating, img FROM `lib_book_info` 
                WHERE pages <= \''.$q.'\' ORDER BY rating DESC;'));
            }
            else{
                 $sql1 = array(1,array('SELECT book_id, pages, book_title, published, rating, img FROM `lib_book_info` 
                WHERE pages <= \''.$q.'\''));
            }
            $ret1 = simonsays($sql1);
            if($ret1[0][0]){
                echo '*Can\'t Process your query. Please Try again later';
                digilib_std_Footer();
                die();
            }
            //1. Book Results
            if($ret1[1][0]->num_rows){
                echo '<div class="search_result"><h1>Books</h1><hr>';
            }
            for($i=0; $i<$ret1[1][0]->num_rows; $i++){
                $row = $ret1[1][0]->fetch_assoc();
                echo '<div class="src_elem src_elem_book"><div style="'; 
                if($row["img"]){
                    echo 'background:url(elib_database/database_library/Books_cover/'.$row["book_id"].'.jpg) 
                    center no-repeat; background-size: cover;';
                }
                echo '" class="cover">'.($row['img']?"":createcover("",$row['book_title'], 12)).'</div>
                        <div class="text">
                            <a href="elib_bin/Elib/Book.php?Book='.$row['book_id'].'" 
                            class="title">'.$row['book_title'].'</a>
                            <span class="published">'.$row['published'].'</span>
                            <span class="published">Pages: '.$row['pages'].'</span>
                            <span class="rating">';
                for($j=0;$j<$row['rating'];$j+=2){
                    if(($row['rating']-$j)==1){
                        echo '<span class="halfstar"></span>';
                    } else{
                        echo '<span class="fullstar"></span>';
                    }
                }
                echo '</span></div></div>';
            }if($ret1[1][0]->num_rows){
                echo '</div>';
            }
        }
        if($_SESSION["stdSRCtool"]["book"] == 8){
            if($_SESSION["stdSRCtool"]["order"]==1){
                $sql1 = array(1,array('SELECT book_id, pages, book_title, published, rating, img FROM `lib_book_info` 
                WHERE pages >= \''.$q.'\' ORDER BY book_title ASC;'));
            }
            elseif($_SESSION["stdSRCtool"]["order"]==2){
                 $sql1 = array(1,array('SELECT book_id, pages, book_title, published, rating, img FROM `lib_book_info` 
                WHERE pages >= \''.$q.'\' ORDER BY book_title DESC;'));
            }
            elseif($_SESSION["stdSRCtool"]["order"]==3){
                 $sql1 = array(1,array('SELECT book_id, pages, book_title, published, rating, img FROM `lib_book_info` 
                WHERE pages >= \''.$q.'\' ORDER BY rating ASC;'));
            }
            elseif($_SESSION["stdSRCtool"]["order"]==4){
                 $sql1 = array(1,array('SELECT book_id, pages, book_title, published, rating, img FROM `lib_book_info` 
                WHERE pages >= \''.$q.'\' ORDER BY rating DESC;'));
            }
            else{
                 $sql1 = array(1,array('SELECT book_id, pages, book_title, published, rating, img FROM `lib_book_info` 
                WHERE pages >= \''.$q.'\''));
            }
            $ret1 = simonsays($sql1);
            if($ret1[0][0]){
                echo '*Can\'t Process your query. Please Try again later';
                digilib_std_Footer();
                die();
            }
            //1. Book Results
            if($ret1[1][0]->num_rows){
                echo '<div class="search_result"><h1>Books</h1><hr>';
            }
            for($i=0; $i<$ret1[1][0]->num_rows; $i++){
                $row = $ret1[1][0]->fetch_assoc();
                echo '<div class="src_elem src_elem_book"><div style="'; 
                if($row["img"]){
                    echo 'background:url(elib_database/database_library/Books_cover/'.$row["book_id"].'.jpg) 
                    center no-repeat; background-size: cover;';
                }
                echo '" class="cover">'.($row['img']?"":createcover("",$row['book_title'], 12)).'</div>
                        <div class="text">
                            <a href="elib_bin/Elib/Book.php?Book='.$row['book_id'].'" 
                            class="title">'.$row['book_title'].'</a>
                            <span class="published">'.$row['published'].'</span>
                            <span class="published">Pages: '.$row['pages'].'</span>
                            <span class="rating">';
                for($j=0;$j<$row['rating'];$j+=2){
                    if(($row['rating']-$j)==1){
                        echo '<span class="halfstar"></span>';
                    } else{
                        echo '<span class="fullstar"></span>';
                    }
                }
                echo '</span></div></div>';
            }if($ret1[1][0]->num_rows){
                echo '</div>';
            }
        }
        if($_SESSION["stdSRCtool"]["book"] == 9){
            if($_SESSION["stdSRCtool"]["order"]==1){
                $sql1 = array(1,array('SELECT lib_book_info.book_id, lib_book_info.book_title, 
                                        published, rating, img, genre_info.genre 
                                        FROM `lib_book_info`, `genre_book_rel`, `genre_info` 
                                        WHERE genre_info.genre LIKE \'%'.$q.'%\'
                                        AND genre_info.genre_id = genre_book_rel.genre_id
                                        AND lib_book_info.book_id = genre_book_rel.book_id
                                        ORDER BY book_title ASC;'));
            }
            elseif($_SESSION["stdSRCtool"]["order"]==2){
                 $sql1 = array(1,array('SELECT lib_book_info.book_id, lib_book_info.book_title, 
                                        published, rating, img, genre_info.genre 
                                        FROM `lib_book_info`, `genre_book_rel`, `genre_info` 
                                        WHERE genre_info.genre LIKE \'%'.$q.'%\'
                                        AND genre_info.genre_id = genre_book_rel.genre_id
                                        AND lib_book_info.book_id = genre_book_rel.book_id
                                        ORDER BY book_title DESC;'));
            }
            elseif($_SESSION["stdSRCtool"]["order"]==3){
                 $sql1 = array(1,array('SELECT lib_book_info.book_id, lib_book_info.book_title, 
                                        published, rating, img, genre_info.genre 
                                        FROM `lib_book_info`, `genre_book_rel`, `genre_info` 
                                        WHERE genre_info.genre LIKE \'%'.$q.'%\'
                                        AND genre_info.genre_id = genre_book_rel.genre_id
                                        AND lib_book_info.book_id = genre_book_rel.book_id
                                        ORDER BY rating ASC;'));
            }
            elseif($_SESSION["stdSRCtool"]["order"]==4){
                 $sql1 = array(1,array('SELECT lib_book_info.book_id, lib_book_info.book_title, 
                                        published, rating, img, genre_info.genre 
                                        FROM `lib_book_info`, `genre_book_rel`, `genre_info` 
                                        WHERE genre_info.genre LIKE \'%'.$q.'%\'
                                        AND genre_info.genre_id = genre_book_rel.genre_id
                                        AND lib_book_info.book_id = genre_book_rel.book_id
                                        ORDER BY rating DESC;'));
            }
            else{
                 $sql1 = array(1,array('SELECT lib_book_info.book_id, lib_book_info.book_title, 
                                        published, rating, img, genre_info.genre 
                                        FROM `lib_book_info`, `genre_book_rel`, `genre_info` 
                                        WHERE genre_info.genre LIKE \'%'.$q.'%\'
                                        AND genre_info.genre_id = genre_book_rel.genre_id
                                        AND lib_book_info.book_id = genre_book_rel.book_id'));
            }
            $ret1 = simonsays($sql1);
            if($ret1[0][0]){
                echo '*Can\'t Process your query. Please Try again later';
                digilib_std_Footer();
                die();
            }
            //1. Book Results
            if($ret1[1][0]->num_rows){
                echo '<div class="search_result"><h1>Books</h1><hr>';
            }
            for($i=0; $i<$ret1[1][0]->num_rows; $i++){
                $row = $ret1[1][0]->fetch_assoc();
                echo '<div class="src_elem src_elem_book"><div style="'; 
                if($row["img"]){
                    echo 'background:url(elib_database/database_library/Books_cover/'.$row["book_id"].'.jpg) 
                    center no-repeat; background-size: cover;';
                }
                echo '" class="cover">'.($row['img']?"":createcover("",$row['book_title'], 12)).'</div>
                        <div class="text">
                            <a href="elib_bin/Elib/Book.php?Book='.$row['book_id'].'" 
                            class="title">'.$row['book_title'].'</a>
                            <span class="published">'.$row['published'].'</span>
                            <span class="published">'.$row['genre'].'</span>
                            <span class="rating">';
                for($j=0;$j<$row['rating'];$j+=2){
                    if(($row['rating']-$j)==1){
                        echo '<span class="halfstar"></span>';
                    } else{
                        echo '<span class="fullstar"></span>';
                    }
                }
                echo '</span></div></div>';
            }if($ret1[1][0]->num_rows){
                echo '</div>';
            }
        }
        if($_SESSION["stdSRCtool"]["book"] == 10){
            if($_SESSION["stdSRCtool"]["order"]==1){
                $sql1 = array(1,array('SELECT book_id, book_title, published, rating, img, genre FROM `lib_book_info`,  
                WHERE description LIKE \'%'.$q.'%\' ORDER BY book_title ASC;'));
            }
            elseif($_SESSION["stdSRCtool"]["order"]==2){
                 $sql1 = array(1,array('SELECT book_id, book_title, published, rating, img FROM `lib_book_info` 
                WHERE description LIKE \'%'.$q.'%\' ORDER BY book_title DESC;'));
            }
            elseif($_SESSION["stdSRCtool"]["order"]==3){
                 $sql1 = array(1,array('SELECT book_id, book_title, published, rating, img FROM `lib_book_info` 
                WHERE description LIKE \'%'.$q.'%\' ORDER BY rating ASC;'));
            }
            elseif($_SESSION["stdSRCtool"]["order"]==4){
                 $sql1 = array(1,array('SELECT book_id, book_title, published, rating, img FROM `lib_book_info` 
                WHERE description LIKE \'%'.$q.'%\' ORDER BY rating DESC;'));
            }
            else{
                 $sql1 = array(1,array('SELECT book_id, book_title, published, rating, img FROM `lib_book_info` 
                WHERE description LIKE \'%'.$q.'%\''));
            }
            $ret1 = simonsays($sql1);
            if($ret1[0][0]){
                echo '*Can\'t Process your query. Please Try again later';
                digilib_std_Footer();
                die();
            }
            //1. Book Results
            if($ret1[1][0]->num_rows){
                echo '<div class="search_result"><h1>Books</h1><hr>';
            }
            for($i=0; $i<$ret1[1][0]->num_rows; $i++){
                $row = $ret1[1][0]->fetch_assoc();
                echo '<div class="src_elem src_elem_book"><div style="'; 
                if($row["img"]){
                    echo 'background:url(elib_database/database_library/Books_cover/'.$row["book_id"].'.jpg) 
                    center no-repeat; background-size: cover;';
                }
                echo '" class="cover">'.($row['img']?"":createcover("",$row['book_title'], 12)).'</div>
                        <div class="text">
                            <a href="elib_bin/Elib/Book.php?Book='.$row['book_id'].'" 
                            class="title">'.$row['book_title'].'</a>
                            <span class="published">'.$row['published'].'</span>
                            <span class="rating">';
                for($j=0;$j<$row['rating'];$j+=2){
                    if(($row['rating']-$j)==1){
                        echo '<span class="halfstar"></span>';
                    } else{
                        echo '<span class="fullstar"></span>';
                    }
                }
                echo '</span></div></div>';
            }if($ret1[1][0]->num_rows){
                echo '</div>';
            }
        }
        if($_SESSION["stdSRCtool"]["book"] == 11){
            if($_SESSION["stdSRCtool"]["order"]==1){
                $sql1 = array(1,array('SELECT book_id, book_title, published, rating, img FROM `lib_book_info` 
                WHERE characters LIKE \'%'.$q.'%\' ORDER BY book_title ASC;'));
            }
            elseif($_SESSION["stdSRCtool"]["order"]==2){
                 $sql1 = array(1,array('SELECT book_id, book_title, published, rating, img FROM `lib_book_info` 
                WHERE characters LIKE \'%'.$q.'%\' ORDER BY book_title DESC;'));
            }
            elseif($_SESSION["stdSRCtool"]["order"]==3){
                 $sql1 = array(1,array('SELECT book_id, book_title, published, rating, img FROM `lib_book_info` 
                WHERE characters LIKE \'%'.$q.'%\' ORDER BY rating ASC;'));
            }
            elseif($_SESSION["stdSRCtool"]["order"]==4){
                 $sql1 = array(1,array('SELECT book_id, book_title, published, rating, img FROM `lib_book_info` 
                WHERE characters LIKE \'%'.$q.'%\' ORDER BY rating DESC;'));
            }
            else{
                 $sql1 = array(1,array('SELECT book_id, book_title, published, rating, img FROM `lib_book_info` 
                WHERE characters LIKE \'%'.$q.'%\''));
            }
            $ret1 = simonsays($sql1);
            if($ret1[0][0]){
                echo '*Can\'t Process your query. Please Try again later';
                digilib_std_Footer();
                die();
            }
            //1. Book Results
            if($ret1[1][0]->num_rows){
                echo '<div class="search_result"><h1>Books</h1><hr>';
            }
            for($i=0; $i<$ret1[1][0]->num_rows; $i++){
                $row = $ret1[1][0]->fetch_assoc();
                echo '<div class="src_elem src_elem_book"><div style="'; 
                if($row["img"]){
                    echo 'background:url(elib_database/database_library/Books_cover/'.$row["book_id"].'.jpg) 
                    center no-repeat; background-size: cover;';
                }
                echo '" class="cover">'.($row['img']?"":createcover("",$row['book_title'], 12)).'</div>
                        <div class="text">
                            <a href="elib_bin/Elib/Book.php?Book='.$row['book_id'].'" 
                            class="title">'.$row['book_title'].'</a>
                            <span class="published">'.$row['published'].'</span>
                            <span class="rating">';
                for($j=0;$j<$row['rating'];$j+=2){
                    if(($row['rating']-$j)==1){
                        echo '<span class="halfstar"></span>';
                    } else{
                        echo '<span class="fullstar"></span>';
                    }
                }
                echo '</span></div></div>';
            }if($ret1[1][0]->num_rows){
                echo '</div>';
            }
        }
    }
    if($_SESSION["stdSRCtool"]["blog"]){
        
    }
    if($_SESSION["stdSRCtool"]["smat"]){
        if($_SESSION["stdSRCtool"]["smat"] == 1){
            if($_SESSION["stdSRCtool"]["order"]==1){
                $sql1 = array(1,array('SELECT `book_id`, `book_title`, `rating`, `img` FROM 
                `ncert_book_info` WHERE `book_title` LIKE \'%'.$q.'%\' ORDER BY book_title ASC;'));
            }
            elseif($_SESSION["stdSRCtool"]["order"]==2){
                 $sql1 = array(1,array('SELECT `book_id`, `book_title`, `rating`, `img` FROM 
                `ncert_book_info` WHERE `book_title` LIKE \'%'.$q.'%\' ORDER BY book_title DESC;'));
            }
            elseif($_SESSION["stdSRCtool"]["order"]==3){
                 $sql1 = array(1,array('SELECT `book_id`, `book_title`, `rating`, `img` FROM 
                `ncert_book_info` WHERE `book_title` LIKE \'%'.$q.'%\' ORDER BY rating ASC;'));
            }
            elseif($_SESSION["stdSRCtool"]["order"]==4){
                 $sql1 = array(1,array('SELECT `book_id`, `book_title`, `rating`, `img` FROM 
                `ncert_book_info` WHERE `book_title` LIKE \'%'.$q.'%\' ORDER BY rating DESC;'));
            }
            else{
                 $sql1 = array(1,array('SELECT `book_id`, `book_title`, `rating`, `img` FROM 
                `ncert_book_info` WHERE `book_title` LIKE \'%'.$q.'%\''));
            }
            
            $ret1 = simonsays($sql1);
            if($ret1[0][0]){
                echo '*Can\'t Process your query. Please Try again later';
                digilib_std_Footer();
                die();
            }
            //1. Book Results
            if($ret1[1][0]->num_rows){
                echo '<div class="search_result"><h1>Ncert Books</h1><hr>';
            }
            for($i=0; $i<$ret1[1][0]->num_rows; $i++){
                $row = $ret1[1][0]->fetch_assoc();
                echo '<div class="src_elem src_elem_book"><div style="'; 
                if($row["img"]){
                    echo 'background:url(elib_database/database_study/cover/'.$row["book_id"].'.jpg) 
                    center no-repeat; background-size: cover;';
                }
                echo '" class="cover">'.($row['img']?"":createcover("",$row['book_title'], 12)).'</div>
                        <div class="text">
                            <a href="elib_bin/Studyzone/NcertBook.php?ncBook='.$row['book_id'].'" 
                            class="title">'.$row['book_title'].'</a>
                            <span class="published">'.$row['published'].'</span>
                            <span class="rating">';
                for($j=0;$j<$row['rating'];$j+=2){
                    if(($row['rating']-$j)==1){
                        echo '<span class="halfstar"></span>';
                    } else{
                        echo '<span class="fullstar"></span>';
                    }
                }
                echo '</span></div></div>';
            }if($ret1[1][0]->num_rows){
                echo '</div>';
            }
            
        }
        if($_SESSION["stdSRCtool"]["smat"] == 2){
            
        }
        if($_SESSION["stdSRCtool"]["smat"] == 3){
            
        }
        if($_SESSION["stdSRCtool"]["smat"] == 4){
            
        }
        if($_SESSION["stdSRCtool"]["smat"] == 5){
            
        }
        if($_SESSION["stdSRCtool"]["smat"] == 6){
            
        }
    }
}
else{
    //Search Book Names, Blog Names
    if($_SESSION["stdSRCtool"]["order"]==1){
        $sql1 = array(3,array(
        'SELECT book_id, book_title, published, rating, img 
            FROM `lib_book_info` 
            WHERE book_title LIKE \'%'.$q.'%\' ORDER BY book_title ASC;',
        'SELECT blog_id, blog_title, published, rating 
            FROM `blog_info` 
            WHERE blog_title LIKE \'%'.$q.'%\' ORDER BY blog_title ASC;',
        'SELECT lib_book_info.book_id, lib_book_info.book_title, lib_book_info.published, 
        lib_book_info.rating, lib_book_info.img, author_info.author_id, 
        author_info.author_name, author_info.is_detailed 
            FROM author_book_rel, author_info, lib_book_info 
            WHERE author_info.author_name LIKE \'%'.$q.'%\'
            AND author_info.author_id = author_book_rel.author_id 
            AND author_book_rel.book_id = lib_book_info.book_id ORDER BY author_name ASC;'
    ));
    }
    elseif($_SESSION["stdSRCtool"]["order"]==2){
         $sql1 = array(3,array(
        'SELECT book_id, book_title, published, rating, img 
            FROM `lib_book_info` 
            WHERE book_title LIKE \'%'.$q.'%\' ORDER BY book_title DESC;',
        'SELECT blog_id, blog_title, published, rating 
            FROM `blog_info` 
            WHERE blog_title LIKE \'%'.$q.'%\' ORDER BY blog_title DESC;',
        'SELECT lib_book_info.book_id, lib_book_info.book_title, lib_book_info.published, 
        lib_book_info.rating, lib_book_info.img, author_info.author_id, 
        author_info.author_name, author_info.is_detailed 
            FROM author_book_rel, author_info, lib_book_info 
            WHERE author_info.author_name LIKE \'%'.$q.'%\'
            AND author_info.author_id = author_book_rel.author_id 
            AND author_book_rel.book_id = lib_book_info.book_id ORDER BY author_name DESC;'
    ));
    }
    elseif($_SESSION["stdSRCtool"]["order"]==3){
         $sql1 = array(3,array(
        'SELECT book_id, book_title, published, rating, img 
            FROM `lib_book_info` 
            WHERE book_title LIKE \'%'.$q.'%\' ORDER BY rating ASC;',
        'SELECT blog_id, blog_title, published, rating 
            FROM `blog_info` 
            WHERE blog_title LIKE \'%'.$q.'%\' ORDER BY rating ASC;',
        'SELECT lib_book_info.book_id, lib_book_info.book_title, lib_book_info.published, 
        lib_book_info.rating, lib_book_info.img, author_info.author_id, 
        author_info.author_name, author_info.is_detailed 
            FROM author_book_rel, author_info, lib_book_info 
            WHERE author_info.author_name LIKE \'%'.$q.'%\'
            AND author_info.author_id = author_book_rel.author_id 
            AND author_book_rel.book_id = lib_book_info.book_id;'
    ));
    }
    elseif($_SESSION["stdSRCtool"]["order"]==4){
         $sql1 = array(3,array(
        'SELECT book_id, book_title, published, rating, img 
            FROM `lib_book_info` 
            WHERE book_title LIKE \'%'.$q.'%\' ORDER BY book_title DESC;',
        'SELECT blog_id, blog_title, published, rating 
            FROM `blog_info` 
            WHERE blog_title LIKE \'%'.$q.'%\' ORDER BY blog_title DESC;',
        'SELECT lib_book_info.book_id, lib_book_info.book_title, lib_book_info.published, 
        lib_book_info.rating, lib_book_info.img, author_info.author_id, 
        author_info.author_name, author_info.is_detailed 
            FROM author_book_rel, author_info, lib_book_info 
            WHERE author_info.author_name LIKE \'%'.$q.'%\'
            AND author_info.author_id = author_book_rel.author_id 
            AND author_book_rel.book_id = lib_book_info.book_id;'
    ));
    }
    else{
         $sql1 = array(3,array(
        'SELECT book_id, book_title, published, rating, img 
            FROM `lib_book_info` 
            WHERE book_title LIKE \'%'.$q.'%\'',
        'SELECT blog_id, blog_title, published, rating 
            FROM `blog_info` 
            WHERE blog_title LIKE \'%'.$q.'%\'',
        'SELECT lib_book_info.book_id, lib_book_info.book_title, lib_book_info.published, 
        lib_book_info.rating, lib_book_info.img, author_info.author_id, 
        author_info.author_name, author_info.is_detailed 
            FROM author_book_rel, author_info, lib_book_info 
            WHERE author_info.author_name LIKE \'%'.$q.'%\'
            AND author_info.author_id = author_book_rel.author_id 
            AND author_book_rel.book_id = lib_book_info.book_id;'
    ));
    }
    $ret1 = simonsays($sql1);
    if($ret1[0][0]){
        echo '*Can\'t Process your query. Please Try again later';
        digilib_std_Footer();
        die();
    }
    
    //1. Book Results
    if($ret1[1][0]->num_rows){
        echo '<div class="search_result"><h1>Books</h1><hr>';
    }
    for($i=0; $i<$ret1[1][0]->num_rows; $i++){
        $row = $ret1[1][0]->fetch_assoc();
        echo '<div class="src_elem src_elem_book"><div style="'; 
        if($row["img"]){
            echo 'background:url(elib_database/database_library/Books_cover/'.$row["book_id"].'.jpg) 
            center no-repeat; background-size: cover;';
        }
        echo '" class="cover">'.($row['img']?"":createcover("",$row['book_title'], 12)).'</div>
                <div class="text">
                    <a href="elib_bin/Elib/Book.php?Book='.$row['book_id'].'" class="title">'.$row['book_title'].'</a>
                    <span class="published">'.$row['published'].'</span>
                    <span class="rating">';
        for($j=0;$j<$row['rating'];$j+=2){
            if(($row['rating']-$j)==1){
                echo '<span class="halfstar"></span>';
            } else{
                echo '<span class="fullstar"></span>';
            }
        }
        echo '</span></div></div>';
    }if($ret1[1][0]->num_rows){
        echo '</div>';
    }
    
    //1.5 Authors Results
    if($ret1[1][2]->num_rows){
        echo '<div class="search_result"><h1>Authors</h1><hr>';
    }
    for($i=0; $i<$ret1[1][2]->num_rows; $i++){
        $row = $ret1[1][2]->fetch_assoc();
        echo '<div class="src_elem src_elem_book"><div style="'; 
        if($row["img"]){
            echo 'background:url(elib_database/database_library/Books_cover/'.$row["book_id"].'.jpg) 
            center no-repeat; background-size: cover;';
        }
        echo '" class="cover">'.($row['img']?"":createcover("",$row['book_title'], 12)).'</div>
                <div class="text">
                    <a href="elib_bin/Elib/Book.php?Book='.$row['book_id'].'" class="title">'.$row['book_title'].'</a>
                    <a href="elib_bin/Elib/Book.php?Author='.$row['author_id'].' 
                    class="author"">'.$row['author_name'].'</a>
                    <span class="published">'.$row['published'].'</span>
                    <span class="rating">';
        for($j=0;$j<$row['rating'];$j+=2){
            if(($row['rating']-$j)==1){
                echo '<span class="halfstar"></span>';
            } else{
                echo '<span class="fullstar"></span>';
            }
        }
        echo '</span></div></div>';
    }if($ret1[1][2]->num_rows){
        echo '</div>';
    }
    
    //2. Blogs Results
    if($ret1[1][1]->num_rows){
        echo '<div class="search_result"><h1>Blogs</h1><hr>';
    }
    for($i=0; $i<$ret1[1][1]->num_rows; $i++){
        $row = $ret1[1][1]->fetch_assoc();
        echo '<div class="src_elem src_elem_book">
                    <div class="text">
                    <a href="elib_bin/Blogs/blog_read.php?Blog='.$row['blog_id'].'" class="title">'.$row['blog_title'].'</a>
                    <span class="published">'.$row['published'].'</span>
                    <span class="rating">';
        for($j=0;$j<$row['rating'];$j+=2){
            if(($row['rating']-$j)==1){
                echo '<span class="halfstar"></span>';
            } else{
                echo '<span class="fullstar"></span>';
            }
        }
        echo '</span></div></div>';
    }if($ret1[1][1]->num_rows){
        echo '</div>';
    }
    
}

digilib_std_Footer();
die();

function check_get(){
    //Check if q is there or not
    if(!isset($_GET["q"])){
        digilib_std_Footer();
        die();
    }
    elseif($_GET["q"]=="" || strlen(preg_replace('/\s+/u','',$_GET["q"])) == 0){
        digilib_std_Footer();
        die();
    }
    elseif(!ctype_alnum($_GET["q"])){
        digilib_std_Footer();
        die();
    }
    else{
        $_SESSION["stdSRCtool"]["src"] = clean_input($_GET["q"]);
    }

    //We have q now, lets see 
    //If we got any book specifics
    if(!isset($_GET["bookSearch_check"])){
        $_SESSION["stdSRCtool"]["book"] = 0;
    }
    elseif($_GET["bookSearch_check"]==""){
        $_SESSION["stdSRCtool"]["book"] = 0;
    }
    elseif(!is_numeric(clean_input($_GET["bookSearch_check"]))){
        $_SESSION["stdSRCtool"]["book"] = 0;
    }
    else{
        $_SESSION["stdSRCtool"]["book"] = clean_input($_GET["bookSearch_check"]);
    }

    //If we got any blog specifics
    if(!isset($_GET["blogsSearch_check"])){
        $_SESSION["stdSRCtool"]["blog"] = 0;
    }
    elseif($_GET["blogsSearch_check"]==""){
        $_SESSION["stdSRCtool"]["blog"] = 0;
    }
    elseif(!is_numeric(clean_input($_GET["blogsSearch_check"]))){
        $_SESSION["stdSRCtool"]["blog"] = 0;
    }
    else{
        $_SESSION["stdSRCtool"]["blog"] = clean_input($_GET["blogsSearch_check"]);
    }

    //If we got any Smat specifics
    if(!isset($_GET["smatSearch_check"])){
        $_SESSION["stdSRCtool"]["smat"] = 0;
    }
    elseif($_GET["smatSearch_check"]==""){
        $_SESSION["stdSRCtool"]["smat"] = 0;
    }
    elseif(!is_numeric(clean_input($_GET["smatSearch_check"]))){
        $_SESSION["stdSRCtool"]["smat"] = 0;
    }
    else{
        $_SESSION["stdSRCtool"]["smat"] = clean_input($_GET["smatSearch_check"]);
    }

    //If we got any Order specifics
    if(!isset($_GET["orderSearch_check"])){
        $_SESSION["stdSRCtool"]["order"] = 0;
    }
    elseif($_GET["orderSearch_check"]==""){
        $_SESSION["stdSRCtool"]["order"] = 0;
    }
    elseif(!is_numeric(clean_input($_GET["orderSearch_check"]))){
        $_SESSION["stdSRCtool"]["order"] = 0;
    }
    else{
        $_SESSION["stdSRCtool"]["order"] = clean_input($_GET["orderSearch_check"]);
    }

}
function nothing(){
    echo '

<div class="search_result">
    <h1>Blogs</h1><hr>
    
    <div class="src_elem src_elem_book">
        <div class="cover"></div>
        <div class="text">
            <span class="title">Blog Name</span>
            <span class="author">Author\'s Name</span>
            <span class="genre">Fantasy, Melodrama</span>
            <span class="published">12th september 2015</span>
            <span class="rating">
                <span class="fullstar"></span>
                <span class="fullstar"></span>
                <span class="fullstar"></span>
                <span class="halfstar"></span>
            </span>
        </div>
    </div>
    
    
</div>
<div class="search_result">
    <h1>Study Material</h1><hr>
    
    <div class="src_elem src_elem_book">
        <div class="cover"></div>
        <div class="text">
            <span class="title">Chapter 1: Solid State</span>
            <span class="author">Class XII</span>
            <span class="genre">Assignment</span>
        </div>
    </div>
    
    <div class="src_elem src_elem_book">
        <div class="cover"></div>
        <div class="text">
            <span class="title">SA-1</span>
            <span class="author">Class XII</span>
            <span class="genre">Sample Paper</span>
        </div>
    </div>
    
    <div class="src_elem src_elem_book">
        <div class="cover"></div>
        <div class="text">
            <span class="title">Chemistry Part I</span>
            <span class="author">Class XII</span>
            <span class="genre">Ncert Book</span>
        </div>
    </div>
    
    
    
    
</div>';
}