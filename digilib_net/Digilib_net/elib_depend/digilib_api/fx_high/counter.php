<?php 
//counter.php
//A PEN BY cnanney
//http://codepen.io/cnanney/pen/rydfj
//forked by Sal64dd: sal.uncd@gmail.com
//used solely for private and non commercial purposes

function inc_counter(){
	$dat = 0;
	if(file_exists('count_log.txt')){
		$fil = fopen('count_log.txt', r+);
		$dat = fread($fil, filesize('count_log.txt'));
		fwrite($fil, ++$dat);
		fclose($fil);
	}
	else{
		$fil = fopen('count_log.txt', w);
		fwrite($fil, ++$dat);
		fclose($fil);
	}
	counter_disp($dat);
}

function counter_disp(){

//HTML
echo '
<div class="counter-wrapper">
  <ul class="flip-counter default" id="c1"></ul>
</div>
';

//Jscript
echo '
// Script to control the counter:
// https://github.com/cnanney/css-flip-counter/blob/master/js/flipcounter.js

var defaults = {
  value: 1000, inc: 123, pace: 1000, auto: true
};

var c1 = new flipCounter('c1', defaults);

// TODO: fix script to handle multiple counters better.
';

echo '
.flip-counter.default .digit {
  position: relative;
  z-index: 0;
  width: 60px;
  height: 90px;
  margin-left: 10px;
  background-color: black;
  text-align: center;
  line-height: 0;
  -webkit-text-stroke: 2px;
  -webkit-perspective: 300px;
  -moz-perspective: 300px;
  -ms-perspective: 300px;
  perspective: 300px;
  -webkit-box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.5);
  -moz-box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.5);
  box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.5);
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}
.flip-counter.default .digit:last-child {
  margin-left: 0;
}
.flip-counter.default .digit span {
  position: absolute;
  left: 0;
  height: 45px;
  width: 60px;
  overflow: hidden;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  font-size: 90px;
  font-family: 'Ubuntu', sans-serif;
  font-weight: 700;
  text-indent: 2px;
  background-color: black;
  color: white;
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}
.flip-counter.default .digit span.front {
  top: 0;
  padding-top: 45px;
}
.flip-counter.default .digit span.back {
  bottom: 0;
}
.flip-counter.default .digit .line {
  position: absolute;
  z-index: 10;
  height: 45px;
  width: 60px;
  border-bottom: 1px solid rgba(0, 0, 0, 0.7);
  -webkit-box-shadow: 0px 5px 7px -4px rgba(0, 0, 0, 0.7);
  -moz-box-shadow: 0px 5px 7px -4px rgba(0, 0, 0, 0.7);
  box-shadow: 0px 5px 7px -4px rgba(0, 0, 0, 0.7);
}
.flip-counter.default .digit .hinge {
  position: absolute;
  z-index: 5;
  height: 45px;
  width: 60px;
  -webkit-transform-style: preserve-3d;
  -moz-transform-style: preserve-3d;
  -ms-transform-style: preserve-3d;
  transform-style: preserve-3d;
  -webkit-transition: -webkit-transform 0.3s ease-in;
  -moz-transition: -moz-transform 0.3s ease-in;
  transition: transform 0.3s ease-in;
  -webkit-transform-origin: 50% 100%;
  -moz-transform-origin: 50% 100%;
  -ms-transform-origin: 50% 100%;
  -o-transform-origin: 50% 100%;
  transform-origin: 50% 100%;
}
.flip-counter.default .digit .hinge span {
  height: 0px;
  z-index: 5;
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  -ms-backface-visibility: hidden;
  backface-visibility: hidden;
}
.flip-counter.default .digit .hinge span.front {
  padding-top: 45px;
}
.flip-counter.default .digit .hinge span.back {
  height: 45px;
  -webkit-transform: rotateX(180deg);
  -moz-transform: rotateX(180deg);
  -ms-transform: rotateX(180deg);
  -o-transform: rotateX(180deg);
  transform: rotateX(180deg);
}
.flip-counter.default .digit.animate .hinge {
  -webkit-transform: rotateX(-180deg);
  -moz-transform: rotateX(-180deg);
  -ms-transform: rotateX(-180deg);
  -o-transform: rotateX(-180deg);
  transform: rotateX(-180deg);
}
.flip-counter.default .digit-delimiter {
  padding-top: 38px;
  margin-right: -5px;
  font-family: 'Ubuntu', sans-serif;
  font-weight: 700;
  font-size: 52px;
  color: black;
  text-indent: 3.33333333px;
  text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);
}
.counter-wrapper {
  float: right;
  position: relative;
  left: -50%;
  margin-top: 20px;
}
.flip-counter {
  position: relative;
  left: 50%;
  list-style-type: none;
}
.flip-counter li {
  float: right;
}
.no-csstransforms3d span.back {
  display: none;
}
.clearfix {
  *zoom: 1;
}
.clearfix:before,
.clearfix:after {
  display: table;
  content: "";
  line-height: 0;
}
.clearfix:after {
  clear: both;
}
';
}

?>