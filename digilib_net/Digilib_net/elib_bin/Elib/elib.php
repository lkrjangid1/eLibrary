<?php
/*
 *  Homepage of Digilib_net
 *      ver 7.50
 *  Glasswid flwer
 *
 *  author: designed and developed by sal64dd
 *  contact: sal.uncd@gmail.com
 */

//default
ini_set("include_path", "../../");
include "elib_depend/glasswindow/Glasswid_flwer.php";

//linking
digilib_Meta("Digital Library | Books", '
<link rel="stylesheet" type="text/css" href="elib_bin/Elib/elib.css">');

echo '<body>';

//Navibar
digilib_Header();

//****START OF HTML FILE****
echo '<div class="body-cont"><div class="main">'; 

//Showcase
$Infoarr[1][1] = "#";
$Infoarr[1][2] = "Keepsakes: Australians and the Great War";
$Infoarr[1][3] = "Share in the personal stories of Australians who served during the First World War.";
$Infoarr[1][4] = "WATCH NOW";
$Infoarr[2][1] = "#";
$Infoarr[2][2] = "Revealing the Rothschild Prayer Book c.1505-1510 from the Kerry Stokes Collection";
$Infoarr[2][3] = "On show with the National Library’s medieval and Renaissance manuscripts.";
$Infoarr[2][4] = "ON NOW";
$Infoarr[3][1] = "#";
$Infoarr[3][2] = "Gems of History";
$Infoarr[3][3] = "See the behind the scenes of our latest Medieval Manuscript Project.";
$Infoarr[3][4] = "WATCH NOW";

digilib_Showcase(3,$Infoarr,"example", "38%");

//ItemBoxes

//Whats New
//settings
$elib_WhatsNew_itembox[0][0]="What's New";//title
$elib_WhatsNew_itembox[0][1]=6;//Count of items inside
$elib_WhatsNew_itembox[0][2]=3;//size
$elib_WhatsNew_itembox[0][3]=1;//vertical scroll=>1, horizontal scroll=>2;
$elib_WhatsNew_itembox[0][4]="#";//viewmore link
$elib_WhatsNew_itembox[0][5]=1;//viewmore link
//content
$elib_WhatsNew_itembox[1][0]="Oliver Twist";
$elib_WhatsNew_itembox[1][1]="Charles Dickens";
$elib_WhatsNew_itembox[1][2]="elib_bin/Elib/Book.php?bookid=00001";
$elib_WhatsNew_itembox[1][3]="elib_bin/Elib/Auth.php?authid=00001";
$elib_WhatsNew_itembox[1][4]="elib_database/database_library/Elib/Books_cover_small/00001.jpg";

$elib_WhatsNew_itembox[2][0]="title";
$elib_WhatsNew_itembox[2][1]="author";
$elib_WhatsNew_itembox[2][2]="title_link";
$elib_WhatsNew_itembox[2][3]="author_link";
$elib_WhatsNew_itembox[2][4]="cover_path";
$elib_WhatsNew_itembox[3][0]="title";
$elib_WhatsNew_itembox[3][1]="author";
$elib_WhatsNew_itembox[3][2]="title_link";
$elib_WhatsNew_itembox[3][3]="author_link";
$elib_WhatsNew_itembox[3][4]="cover_path";
$elib_WhatsNew_itembox[4][0]="title";
$elib_WhatsNew_itembox[4][1]="author";
$elib_WhatsNew_itembox[4][2]="title_link";
$elib_WhatsNew_itembox[4][3]="author_link";
$elib_WhatsNew_itembox[4][4]="cover_path";
$elib_WhatsNew_itembox[5][0]="title";
$elib_WhatsNew_itembox[5][1]="author";
$elib_WhatsNew_itembox[5][2]="title_link";
$elib_WhatsNew_itembox[5][3]="author_link";
$elib_WhatsNew_itembox[5][4]="cover_path";
$elib_WhatsNew_itembox[6][0]="title";
$elib_WhatsNew_itembox[6][1]="author";
$elib_WhatsNew_itembox[6][2]="title_link";
$elib_WhatsNew_itembox[6][3]="author_link";
$elib_WhatsNew_itembox[6][4]="cover_path";

//Digilib Recommends
//settings
$elib_Recomed_itembox[0][0]="Digilib Recommends";//title
$elib_Recomed_itembox[0][1]=6;//Count of items inside
$elib_Recomed_itembox[0][2]=3;//size
$elib_Recomed_itembox[0][3]=1;//vertical scroll=>1, horizontal scroll=>2;
$elib_Recomed_itembox[0][4]="#";//viewmore link
$elib_Recomed_itembox[0][5]=1;//viewmore link
//content
$elib_Recomed_itembox[1][0]="title";
$elib_Recomed_itembox[1][1]="author";
$elib_Recomed_itembox[1][2]="title_link";
$elib_Recomed_itembox[1][3]="author_link";
$elib_Recomed_itembox[1][4]="cover_path";
$elib_Recomed_itembox[2][0]="title";
$elib_Recomed_itembox[2][1]="author";
$elib_Recomed_itembox[2][2]="title_link";
$elib_Recomed_itembox[2][3]="author_link";
$elib_Recomed_itembox[2][4]="cover_path";
$elib_Recomed_itembox[3][0]="title";
$elib_Recomed_itembox[3][1]="author";
$elib_Recomed_itembox[3][2]="title_link";
$elib_Recomed_itembox[3][3]="author_link";
$elib_Recomed_itembox[3][4]="cover_path";
$elib_Recomed_itembox[4][0]="title";
$elib_Recomed_itembox[4][1]="author";
$elib_Recomed_itembox[4][2]="title_link";
$elib_Recomed_itembox[4][3]="author_link";
$elib_Recomed_itembox[4][4]="cover_path";
$elib_Recomed_itembox[5][0]="title";
$elib_Recomed_itembox[5][1]="author";
$elib_Recomed_itembox[5][2]="title_link";
$elib_Recomed_itembox[5][3]="author_link";
$elib_Recomed_itembox[5][4]="cover_path";
$elib_Recomed_itembox[6][0]="title";
$elib_Recomed_itembox[6][1]="author";
$elib_Recomed_itembox[6][2]="title_link";
$elib_Recomed_itembox[6][3]="author_link";
$elib_Recomed_itembox[6][4]="cover_path";

//Most Popular
//settings
$elib_Popular_itembox[0][0]="Most Popular";//title
$elib_Popular_itembox[0][1]=6;//Count of items inside
$elib_Popular_itembox[0][2]=3;//size
$elib_Popular_itembox[0][3]=1;//vertical scroll=>1, horizontal scroll=>2;
$elib_Popular_itembox[0][4]="#";//viewmore link
$elib_Popular_itembox[0][5]=1;//viewmore link
//content
$elib_Popular_itembox[1][0]="title";
$elib_Popular_itembox[1][1]="author";
$elib_Popular_itembox[1][2]="title_link";
$elib_Popular_itembox[1][3]="author_link";
$elib_Popular_itembox[1][4]="cover_path";
$elib_Popular_itembox[2][0]="title";
$elib_Popular_itembox[2][1]="author";
$elib_Popular_itembox[2][2]="title_link";
$elib_Popular_itembox[2][3]="author_link";
$elib_Popular_itembox[2][4]="cover_path";
$elib_Popular_itembox[3][0]="title";
$elib_Popular_itembox[3][1]="author";
$elib_Popular_itembox[3][2]="title_link";
$elib_Popular_itembox[3][3]="author_link";
$elib_Popular_itembox[3][4]="cover_path";
$elib_Popular_itembox[4][0]="title";
$elib_Popular_itembox[4][1]="author";
$elib_Popular_itembox[4][2]="title_link";
$elib_Popular_itembox[4][3]="author_link";
$elib_Popular_itembox[4][4]="cover_path";
$elib_Popular_itembox[5][0]="title";
$elib_Popular_itembox[5][1]="author";
$elib_Popular_itembox[5][2]="title_link";
$elib_Popular_itembox[5][3]="author_link";
$elib_Popular_itembox[5][4]="cover_path";
$elib_Popular_itembox[6][0]="title";
$elib_Popular_itembox[6][1]="author";
$elib_Popular_itembox[6][2]="title_link";
$elib_Popular_itembox[6][3]="author_link";
$elib_Popular_itembox[6][4]="cover_path";

echo '<div class="paraBox">';
prt_para($elib_WhatsNew_itembox);
prt_para($elib_Recomed_itembox);
prt_para($elib_Popular_itembox);
echo '</div>';
prt_para_css();
?>
                
                



            
            <div class="catBlock">
                <div class="cat-elem Literature">
                    <span class="title">Literature</span>
                    <div class="display">
                        <div class="cat-bk1"></div>
                        <div class="cat-bk2"></div> 
                        <div class="cat-bk3"></div>
                        <div class="cat-bk4"></div> 
                        <div class="cat-bk5"></div>
                    </div>
                    <div class="dtxt">
                        <a href="#" class="dtxt-elem">
                            Action & Adventure
                        </a>
                        <a href="#" class="dtxt-elem">
                            Drama
                        </a>
                        <a href="#" class="dtxt-elem">
                            Poetry
                        </a>
                        <a href="#" class="dtxt-elem">
                            Fantasy
                        </a>
                        <a href="#" class="dtxt-elem">
                            Horror/Thriller
                        </a>
                        <a href="#" class="dtxt-elem">
                            Indian Writing
                        </a>
                    </div>
                    <a href="#" class="more">View More &raquo;</a>
                </div>
                <div class="lnebrk"></div>
                <div class="cat-elem Non-Fiction">
                    <div class="title">Non-Fiction</div>
                    <div class="display">
                        <div class="cat-bk1"></div>
                        <div class="cat-bk2"></div> 
                        <div class="cat-bk3"></div>
                        <div class="cat-bk4"></div> 
                        <div class="cat-bk5"></div>
                    </div>
                    <div class="dtxt">
                        <a href="#" class="dtxt-elem">
                            Biographies 
                        </a>
                        <a href="#" class="dtxt-elem">
                            Autobiographies
                        </a>
                        <a href="#" class="dtxt-elem">
                            Business & Investing
                        </a>
                        <a href="#" class="dtxt-elem">
                            Health & Fitness
                        </a>
                        <a href="#" class="dtxt-elem">
                            History & Politics
                        </a> 
                    </div>
                    <a href="#" class="more">View More &raquo;</a>
                </div>
                <div class="lnebrk"></div>
                <div class="cat-elem Classics">
                    <div class="title">Classics</div>
                    <div class="display">
                        <div class="cat-bk1"></div>
                        <div class="cat-bk2"></div> 
                        <div class="cat-bk3"></div>
                        <div class="cat-bk4"></div> 
                        <div class="cat-bk5"></div>
                    </div>
                    <div class="dtxt">
                        <a href="#" class="dtxt-elem">
                            Sherlock Homes
                        </a> 
                        <a href="#" class="dtxt-elem">
                            Pickwick Papers
                        </a> 
                        <a href="#" class="dtxt-elem">
                            Little Women
                        </a> 
                        <a href="#" class="dtxt-elem">
                            The Adventures of Huckleberry Finn
                        </a>
                        <a href="#" class="dtxt-elem">
                            To Kill an Mocking Bird
                        </a> 
                    </div>
                    <a href="#" class="more">View More &raquo;</a>
                </div>
                <div class="lnebrk"></div>
                <div class="cat-elem Academic">
                    <div class="title">Academic</div>
                    <div class="display">
                        <div class="cat-bk1"></div>
                        <div class="cat-bk2"></div> 
                        <div class="cat-bk3"></div>
                        <div class="cat-bk4"></div> 
                        <div class="cat-bk5"></div>
                    </div>
                    <div class="dtxt">
                        <a href="#" class="dtxt-elem">
                            Entrance Exams
                        </a> 
                        <a href="#" class="dtxt-elem">
                            Ncert Books
                        </a> 
                        <a href="#" class="dtxt-elem">
                            Engineering
                        </a> 
                        <a href="#" class="dtxt-elem">
                            Medicine
                        </a> 
                        <a href="#" class="dtxt-elem">
                            Commerce
                        </a>
                    </div>
                    <a href="#" class="more">View More &raquo;</a>
                </div>
            </div>
            
            <!--top 10 books-->
            <div class="focusBlock1">
                <div class="title">Top 10 Must Read Books</div>
                <div class="display">
                    <div class="plane-elem plane-elem1">
                        <div class="cov">
                            <a href="#" class="cover"></a>
                            <a href="#" class="tit">Sherlock Homes</a>
                            <a href ="#" class="auth">Sir Aurthor Conan Doyle</a>
                        </div>
                        <div class="lnebrk"></div>
                        <div class="sum"></div>
                    </div>
                </div>
                <div class="cards">
                    <div class=""></div>
                </div>
                <div class="ctrl-left ctrl-elem"></div>
                <div class="ctrl-right ctrl-elem"></div>
            </div>
            
            <!--top 5 authors-->
            <div class="focusBlock2">
                <div class="plane">
                    <div class="list"></div>
                    <div class="display">
                        <div class="pic"></div>
                        <div class="text">
                            <div class="title"></div>
                            <div class="summery"></div>
                            <div class="cards"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Academic Books Section-->
            <div class="focusBlock3">
                
            </div>
            
        </div>
    </div>
    <?php digilib_Footer() ?>
    
    <script src="elib_bin/Elib/elib.js"></script>
</body>
</html>
