<?php 
include_once '../inc/pub_config.php';
include '../inc/common.php'; ?>


<style>
/* ******************  메인 비주얼 ********************** */
#mainVisual{overflow:hidden; width:100%; height:1000px;  position:relative;}	/* 비주얼높이값 이미지에맞게 수정 */
.main-visual-con .slick-track,
.main-visual-con .slick-list {
	 -webkit-perspective: 2000;
	-webkit-backface-visibility: hidden;
}
.main-visual-wrap,
.main-visual-con, 
.main-visual-con .slick-list,  
.main-visual-con .slick-track, 
.main-visual-item{
	height:100%; 
}
.main-visual-con{z-index:1;}
/* 메인 비주얼 :: 이미지 */
.main-visual-item{position:relative;}
.main-visual-item .main-visual-pc-img{
	width:100%;
	height:100%;
	background-size:cover !important;
    -webkit-transform: scale(1.05,1.05);
     transform: scale(1.05,1.05);
	-webkit-transition:transform 5000ms  ease-in-out ;
    transition:transform 5000ms ease-in-out ;	
}
.main-visual-item .main-visual-m-img{display:none;}
.main-visual-img-con {position:absolute; top:50%; right:0; width:54.479vw; max-width:1045px; transform:translateY(-50%);}
.main-visual-img-con .inner-box {position:relative;}
.main-visual-img-con .inner-box .bg img {width:100%;}
.main-visual-img-con .inner-box .bg.m {display:none;}
.main-visual-img-con .icon-box {position:absolute; width:100%; height:100%;}
.main-visual-img-con .icon-box .inner {position:relative; width:100%; height:100%;}
/* 메인비주얼 :: 아이콘 */
.main-visual-img-con .icon-box .icon {position:absolute; top:50%; left:50%; }
.main-visual-img-con .icon-box .icon:not(.computer) {opacity:0;filter:Alpha(opacity=0);  transition:all 1s; /*transition-delay:1.2s; */}
.main-visual-item.first .main-visual-img-con .icon-box .icon:not(.computer) {/* transition-delay:0.5s; */}
.main-visual-img-con .icon-box .icon img {width:100%;}
/* 메인비주얼01 */
.main-visual-item01 .icon-box .icon01 {margin-top:-12.86vw; left:0; width:13.54vw; }
.main-visual-item01 .icon-box .icon02 {margin-top:-10.57vw; margin-left:-8.43vw; z-index:1; width:11.14vw; }
.main-visual-item01 .icon-box .icon03 {margin-top:-13.06vw; margin-left:3.59vw; width:12.5vw; }
.main-visual-item01 .icon-box .icon04 {margin-top:-17.34vw; margin-left:16.4vw; width:7.34vw}
.main-visual-item01 .icon-box .icon05 {margin-top:1.51vw; margin-left:15.31vw; width:3.64vw;}
.main-visual-item01 .icon-box .icon06 {margin-top:7.03vw; margin-left:6.77vw; width:11.77vw;}
.main-visual-item01 .icon-box .icon07 {margin-top:8.95vw; margin-left:-21.66vw; width:11.875vw; }
.main-visual-item01 .icon-box .icon08 {margin-top:6.61vw; margin-left:-17.7vw; width:5.15vw;}
.main-visual-item01 .icon-box .computer {top:0;  left:0; z-index:0; width:100%; height:100%; background:url("/images/main/main_visual_computer.png"); background-size:cover; }
/* 메인비주얼02 */
.main-visual-item02 .icon-box .icon01 {margin-top:-14.95vw; margin-left:-17.81vw; width:9.74vw; }
.main-visual-item02 .icon-box .icon02 {margin-top:-8.44vw; margin-left:-13.13vw; width:11.98vw; }
.main-visual-item02 .icon-box .icon03 {margin-top:-17.60vw; margin-left:-7.97vw; width:16.98vw; }
.main-visual-item02 .icon-box .icon04 {margin-top:-14.79vw; margin-left:16.41vw; width:5.21vw}
.main-visual-item02 .icon-box .icon05 {margin-top:5.57vw; margin-left:-23.70vw; width:6.72vw;}
.main-visual-item02 .icon-box .icon06 {margin-top:14.53vw; margin-left:-6.15vw; width:8.54vw;}
.main-visual-item02 .icon-box .icon07 {margin-top:1.41vw; margin-left:4.53vw; width:17.29vw; }
.main-visual-item .icon.move {animation: imgupDown 3s ease-in-out 1.1s infinite;}
.main-visual-item.active-item .main-visual-img-con .icon-box .icon {opacity:1;filter:Alpha(opacity=100);}
.ie-browser .main-visual-item .icon.move {animation:none;}

@keyframes imgupDown {
	0% {
		transform:  translateY(0px);
	}
	50% {
		transform: translateY(-0.5vw);
	}
	100% {
		transform:  translateY(0px);
	}
}

.main-visual-item .main-visual-img-con .icon-box .left { transform:translateX(2vw);  opacity:0; transition: all ease-in-out 1.2s;}
.main-visual-item .main-visual-img-con .icon-box .right { transform:translate(-2vw,2vw);  opacity:0; transition: all ease-in-out 1.2s;}
.main-visual-item .main-visual-img-con .icon-box .up {transform:translateY(1vw); transition: all ease-in-out 0.8s;}
.main-visual-item.active-item .main-visual-img-con .icon-box .left {transform:translateX(0); opacity:1;}
.main-visual-item.active-item .main-visual-img-con .icon-box .right {transform:translate(0,0); opacity:1;}
.main-visual-item.active-item .main-visual-img-con .icon-box .up {transform:translateY(0); }
.main-visual-item .main-visual-img-con .icon-box .icon.delay100 {transition-delay: 0.1s !important;} 
.main-visual-item .main-visual-img-con .icon-box .icon.delay500 {transition-delay: 0.5s !important;} 
.main-visual-item .main-visual-img-con .icon-box .icon.delay1000 {transition-delay: 1s !important;}
.main-visual-item .main-visual-img-con .icon-box .icon.delay1500 {transition-delay: 1.5s !important;} 
.main-visual-item .main-visual-img-con .icon-box .icon.delay1900 {transition-delay: 1.9s !important;} 
.main-visual-item .main-visual-img-con .icon-box .icon.delay2300 {transition-delay: 2300ms !important;}
    
/* 메인 비주얼 :: 텍스트 */
.main-visual-item .main-visual-txt-con{
	position:absolute; 
	top:50%; left:0px; top:7.29vw;
	width:100%; 
}
.main-visual-item .main-visual-txt-con .main-visual-txt-inner {width: 43.16%;}
.main-visual-item .main-visual-txt-con .main-visual-txt1{display:block; font-size:80px; font-weight:400; letter-spacing:-1px; color:#3d3939; margin-bottom:3.3vw; line-height:1.25; }
.main-visual-item .main-visual-txt-con .main-visual-txt1 em{font-weight:700;}
.main-visual-item .main-visual-txt-con .main-visual-txt2{font-size:30px; letter-spacing:-0.25px; color:#026bfa; margin-bottom:3vw; font-weight:700; }
.main-visual-item .main-visual-txt-con .main-visual-txt3{font-size:20px; letter-spacing:-0.75px; color:#717171; line-height:1.9; margin-bottom:35px; }
.main-visual-item .main-visual-txt-con .main-visual-txt3 .margin {margin-top:20px;}

/* 메인 비주얼 :: active효과 */
.main-visual-item.active-item .main-visual-pc-img{
    -webkit-transform: scale(1.0,1.0) rotate(0.002deg);
     transform: scale(1.0,1.0) rotate(0.002deg);
}
.main-visual-item .main-visual-txt2.splitting .char{
	-webkit-animation: text-fade-out 1s cubic-bezier(0.4, 0, 0.2, 1) both;
	animation: text-fade-out 1s cubic-bezier(0.4, 0, 0.2, 1) both;
}
.main-visual-item.active-item .main-visual-txt2.splitting .char{
	-webkit-animation: text-active-animation 1.5s cubic-bezier(0.4, 0, 0.2, 1) both;
	animation: text-active-animation 1s cubic-bezier(0.4, 0, 0.2, 1) both;
}

.main-visual-item .main-visual-txt-con .txt-wrap {display:block; overflow:hidden; }
.main-visual-item .txt-wrap em {display:inline-block; }
.main-visual-item.active-item .txt-wrap em {
	-webkit-animation: text-up 1.5s cubic-bezier(0.4, 0, 0.2, 1) both;
	animation: text-up 1.5s cubic-bezier(0.4, 0, 0.2, 1) both;
}
@keyframes text-active-animation {
	from {
		opacity:0;filter:Alpha(opacity=0);
		-webkit-transform: translateY(50px); 
		transform: translateY(50px); 
	}
	to {
		opacity:1.0;filter:Alpha(opacity=100);
		-webkit-transform: translateY(0); 
		transform: translateY(0); 
	}
}
@keyframes text-fade-out {
	from {
		opacity:1.0;filter:Alpha(opacity=100);
	}
	to {
		opacity:0;filter:Alpha(opacity=0);
	}
}
@keyframes text-up {
	from {
		transform: translateY(100%); 
	}
	to {
		transform: translateY(0); 
	}
}

/* 메인 비주얼 :: Control */
.main-visual-control {position:absolute; bottom: 46px; width:100%; z-index:9; }
.main-visual-control .area {position:relative; display:flex; align-items:center;}

/* 메인 비주얼 :: 스크롤아이콘 */
.main-scroll-icon {display:flex; align-items:center; text-align:center; margin-right:80px;animation: scrollupDown 1.5s ease-in-out infinite; }
.main-scroll-icon .icon { position:relative; display:block; width:50px; height:50px; border:1px solid #d2d2d2; border-radius:50%;-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
 box-sizing: border-box;  }
.main-scroll-icon .icon:before {content:""; position:absolute; left:0; top:-1px; width:100%; height:100%; background:url("/images/main/main_scroll_icon.png") center no-repeat; }
.main-scroll-icon .txt {display:block; font-size:12px; color:#7c7c7c; letter-spacing:-0.5px; font-weight:300; margin-left:8px; }
@keyframes scrollupDown {
	0% {
		transform:  translateY(-2px);
	}
	50% {
		transform: translateY(2px);
	}
	100% {
		transform:  translateY(-2px);
	}
}

/* 메인 비주얼 :: pause,play */
.main-visual-control .slick-control-btns{display:inline-block; vertical-align:top; margin-left:25px; }
.main-visual-control .slick-control-btns button{color:#808080;}
.main-visual-control .slick-control-btns button i{font-size:16px; position:relative; top:-1px; vertical-align:middle;}
.main-visual-control .slick-control-btns .slick-play-btn{display:none;}

/* 메인 비주얼 :: 화살표 */
.main-visual-arrow-counter {position:relative; text-align:center; width:170px; padding:0 50px; -webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
 box-sizing: border-box; }
.main-visual-arrow-counter .slick-arrow{position:absolute; width:22px; height:16px; top:50%;transform:translateY(-50%); border:0; cursor:pointer; z-index:9; font-size:0; background:center no-repeat; }
.main-visual-arrow-counter .slick-arrow.slick-prev{left:0; background-image:url("/images/main/main_visual_arrow_prev.png");}
.main-visual-arrow-counter .slick-arrow.slick-next{right:0; background-image:url("/images/main/main_visual_arrow_next.png");}

/* 메인 비주얼 :: 카운터 */
.main-visual-conuter{display:inline-block;  z-index:11; font-size:12px; color:#2b2b2b; letter-spacing:-0.5px; }
.main-visual-conuter span,
.main-visual-conuter .middle{display:inline-block; vertical-align:middle;}
.main-visual-conuter .middle{margin:0 16px}
.main-visual-conuter .total-num {color:#7c7c7c;}
</style>

<body>
    <?php include '../inc/head.php'; ?>

    <div id="mainContainer">
        <!-- ****************** 메인비주얼 ********************** -->
        <section id="mainVisual" class="full-height main-content">
            <article class="main-visual-wrap">
                <div class="main-visual-con">
                    <div class="main-visual-item main-visual-item01">
                        <div class="main-visual-img-con">
                            <img src="<?=DIR?>/img/mainA.png" alt="메인슬라이드 이미지1">
                        </div>
                    </div>
                    <div class="main-visual-item main-visual-item02">
                        <div class="main-visual-img-con">
                            <img src="<?=DIR?>/img/mainB.png" alt="메인슬라이드 이미지1">
                        </div>
                    </div>
                </div>
                <div class="main-visual-control">
                    <div class="area">
                        <div class="main-scroll-icon">
                            <span class="icon"></span>
                            <span class="txt">SCROLL DOWN</span>
                        </div>
                        <div class="main-visual-arrow-counter">
                            <div class="main-visual-conuter">
                                <span class="cur-num">01</span><em class="middle">·</em><span class="total-num"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </div>

    <?php include '../inc/footer.php'; ?>
</body>
</html>
