<?php session_start();
srand(time());
$text=" ";
for($i=0; $i<5; $i++){
    switch(rand(0,62)){
        case 0: $text=$text."0";break;
        case 1: $text=$text."1";break;
        case 2: $text=$text."2";break;
        case 3: $text=$text."3";break;
        case 4: $text=$text."4";break;
        case 5: $text=$text."5";break;
        case 6: $text=$text."6";break;
        case 7: $text=$text."7";break;
        case 8: $text=$text."8";break;
        case 9: $text=$text."9";break;
        
        case 10: $text=$text."a";break;
        case 12: $text=$text."b";break;
        case 13: $text=$text."c";break;
        case 14: $text=$text."d";break;
        case 15: $text=$text."e";break;
        case 16: $text=$text."f";break;
        case 17: $text=$text."g";break;
        case 18: $text=$text."h";break;
        case 19: $text=$text."i";break;
        case 20: $text=$text."j";break;
        case 21: $text=$text."k";break;
        case 22: $text=$text."l";break;
        case 23: $text=$text."m";break;
        case 24: $text=$text."n";break;
        case 25: $text=$text."o";break;
        case 26: $text=$text."p";break;
        case 27: $text=$text."q";break;
        case 28: $text=$text."r";break;
        case 29: $text=$text."s";break;
        case 30: $text=$text."t";break;
        case 31: $text=$text."u";break;
        case 32: $text=$text."v";break;
        case 33: $text=$text."w";break;
        case 34: $text=$text."x";break;
        case 35: $text=$text."y";break;
        case 36: $text=$text."z";break;
        
        case 37: $text=$text."A";break;
        case 38: $text=$text."B";break;
        case 39: $text=$text."C";break;
        case 40: $text=$text."D";break;
        case 41: $text=$text."E";break;
        case 42: $text=$text."F";break;
        case 43: $text=$text."G";break;
        case 44: $text=$text."H";break;
        case 45: $text=$text."I";break;
        case 46: $text=$text."J";break;
        case 47: $text=$text."K";break;
        case 48: $text=$text."L";break;
        case 49: $text=$text."M";break;
        case 50: $text=$text."N";break;
        case 51: $text=$text."O";break;
        case 52: $text=$text."P";break;
        case 53: $text=$text."Q";break;
        case 54: $text=$text."R";break;
        case 55: $text=$text."S";break;
        case 56: $text=$text."T";break;
        case 57: $text=$text."U";break;
        case 58: $text=$text."V";break;
        case 59: $text=$text."W";break;
        case 60: $text=$text."X";break;
        case 61: $text=$text."Y";break;
        case 62: $text=$text."Z";break;   
    }
}
$_SESSION["capcode"]=$text;
$fontfile="../../elib_depend/style/fonts/mics/black_casper_reg.ttf";

$size=3;
$h=150;
$w=330;

$im  =  ImageCreate ( $w,  $h );

$fill = ImageColorAllocate ( $im ,  83,  203, 241 );    
$light = ImageColorAllocate ( $im,  255,  255,  255 );    
$corners = ImageColorAllocate ( $im ,  153 , 153 ,  102 );    
$dark = ImageColorAllocate ( $im , 51, 51 , 0 );    
$black = ImageColorAllocate ( $im , 0, 0 , 0 );    

$colors[1] = ImageColorAllocate ( $im ,  5 , 171 ,  224 );    
$colors[2] = ImageColorAllocate ( $im ,  255*0.95 , 255*0.95 ,  255*0.95 );    
$colors[3] = ImageColorAllocate ( $im ,  255*0.9 , 255*0.9 ,  255*0.9 );    
$colors[4] = ImageColorAllocate ( $im ,  255*0.85 , 255*0.85 ,  255*0.85 );    

$c=1;
$anz=1;
$step=4/$anz;
for($i=0;$i<$anz;$i+=1)
{
    $size=rand(24,72);
    if($size < 36){
        $x=rand(0,155);
    }
    else{
        $x=rand(0,30);
    }
    $y=rand(100,150);
    $color=$colors[$c];
    $c+=$step;
    ImageTTFText ($im, $size, 0, $x, $y, $color, $fontfile, $text);
}

ImageLine ( $im , 0 ,0, $w-1, 0, $light );    
ImageLine ( $im , 0 ,0, 0, $h-2, $light );    
ImageLine ( $im , $w-1,0, $w-1, $h, $dark );    
ImageLine ( $im , 0 ,$h-1, $w-1, $h-1, $dark );    
ImageSetPixel ( $im , 0 ,$h-1, $corners );    
ImageSetPixel ( $im , $w-1 ,0, $corners );    
header("Content-type: image/png");
ImagePNG ( $im );
?>