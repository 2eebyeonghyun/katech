<? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/common.php"; ?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/head.php"; ?>

    <div id="wrap" class="main">
        <div class="mainvisual">
            <div class="swiper mainSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="<?=DIR?>/img/mainA.png" alt="메인슬라이드 이미지1">
                        <div class="txt">
                            <h4 data-aos="fade-up" data-aos-duration="2000" data-aos-delay="0">
                            	<img src="<?=DIR?>/img/slide-logo.png" alt="">
                            </h4>
                            <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">정확하고 신속한 시험 · 검사 신뢰와 기술, 미래가치창조의 중심! 한국자동차연구원이 미래를 만들어갑니다.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="<?=DIR?>/img/mainB.png" alt="메인슬라이드 이미지2">
                        <div class="txt">
                            <h4><img src="<?=DIR?>/img/slide-logo.png" alt=""></h4>
                            <p>정확하고 신속한 시험 · 검사 신뢰와 기술, 미래가치창조의 중심! 한국자동차연구원이 미래를 만들어갑니다.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="<?=DIR?>/img/mainC.png" alt="메인슬라이드 이미지3">
                        <div class="txt">
                            <h4><img src="<?=DIR?>/img/slide-logo.png" alt=""></h4>
                            <p>정확하고 신속한 시험 · 검사 신뢰와 기술, 미래가치창조의 중심! 한국자동차연구원이 미래를 만들어갑니다.</p>
                        </div>
                    </div>
                </div>
                
                <div class="slide-navi">
                    <div class="slide-navi-detail">
                        <div class="swiper-pager">
                            <button type="button" class="slideBtn btn-prev">이전 슬라이드</button>
                            <div class="pager-fraction"></div>
                            <button type="button" class="slideBtn btn-next">다음 슬라이드</button>
                        </div>
                        <div class="swiper-auto">
                            <button type="button" class="slideBtn btn-play">슬라이드 재생</button>
                            <button type="button" class="slideBtn btn-stop active">슬라이드 일시정지</button>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $(function(){     
                    var swiper = new Swiper(".mainSwiper", {
                        cssMode: true,
                        centeredSlides: true,
                        speed: 800,
                        effect: 'slide',
                        autoplay: {
                            delay: 6000,
                            disableOnInteraction: false,
                        },
                        navigation: {
                            nextEl: ".mainSwiper .slide-navi .slideBtn.btn-next",
                            prevEl: ".mainSwiper .slide-navi .slideBtn.btn-prev",
                        },
                        pagination: {
                            el: ".mainSwiper .slide-navi .pager-fraction",
                            type: "fraction",
                            clickable: true,
                        },
                        autoplayDisableOnInteraction: true,
                        autoHeight: true,
                    });
                    
                    $('.mainSwiper .swiper-auto > button').on('click',function(){
                        $('.mainSwiper .swiper-auto > button').toggleClass('active');
                        
                        if($(this).hasClass('btn-play')){
                            swiper.autoplay.start();
                        }else{
                            swiper.autoplay.stop();
                        }
                    })
                });

            </script>
        </div>

        <section>
            <article>
                <div class="inner">
                    <div class="quickmenu_">
                        <div class="left_">
                            <img src="<?=DIR?>/img/logo.png" alt="">
                        </div>
                        <div class="right_">
                            <ul class="quicklist_">
                                <li class="quickitem">
                                    <span class="circle-box"></span>
                                    <div class="text">
                                        <p class="ko-txt">본부 소개</p>
                                        <p class="en-txt pc-txt">About KATECH</p>
                                        <p class="en-txt mobile-txt">About</p>
                                        <a href="<?=DIR?>/mobility/sub01.php" class="viewmore">바로가기<span class="material-icons">chevron_right</span></a>
                                    </div>
                                </li>
                                <li class="quickitem">
                                    <span class="circle-box"></span>
                                    <div class="text">
                                        <p class="ko-txt">연구원 위치</p>
                                        <p class="en-txt pc-txt">Location KATECH</p>
                                        <p class="en-txt mobile-txt">Location</p>
                                        <a href="<?=DIR?>/mobility/sub05.php" class="viewmore">바로가기<span class="material-icons">chevron_right</span></a>
                                    </div>
                                </li>
                                <li class="quickitem">
                                    <span class="circle-box"></span>
                                    <div class="text">
                                        <p class="ko-txt pc-txt">KATECH 홈페이지</p>
                                        <p class="ko-txt mobile-txt">KATECH</p>
                                        <p class="en-txt">Home</p>
                                        <a href="http://www.katech.re.kr/" target="_blank" class="viewmore">바로가기<span class="material-icons">chevron_right</span></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </article>
            <article>
                <div class="inner">
                    <div class="servicebox_">
                        <h4 class="boxheadtxt_">KATECH INFORMATION</h4>
                        <div class="servicelist_">
                            <div class="serviceitem_">
                                <a href="<?=DIR?>/service/sub01.php">
                                    <div class="text">
                                        <p class="commonhead_kr">이용안내</p>
                                        <p class="commonhead_en">Guide</p>
                                    </div>
                                </a>
                            </div>
                            <div class="serviceitem_">
                                <a href="<?=DIR?>/equipment/sub01.php">
                                    <div class="text">
                                        <p class="commonhead_kr">장비안내</p>
                                        <p class="commonhead_en">Equipment Guide</p>
                                    </div>
                                </a>
                            </div>
                            <div class="serviceitem_">
                                <a href="<?=DIR?>/test/sub01.php">
                                    <div class="text">
                                        <p class="commonhead_kr">신청서 작성</p>
                                        <p class="commonhead_en">Fill In</p>
                                    </div>
                                </a>
                            </div>
                            <div class="serviceitem_">
                                <a href="<?=DIR?>/service/sub02.php">
                                    <div class="text">
                                        <p class="commonhead_kr">성적서 조회</p>
                                        <p class="commonhead_en">Check Report</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="noticebox_">
                        <div class="text">
                            <h4 class="boxheadtxt_">KATECH NOTICE</h4>
                            <a href="<?=DIR?>/service/sub03.php" class="notice_more">VIEW MORE +</a>
                        </div>
                        <ul class="noticelist_">
                            <li class="listitem" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="0">
                                <a href="#none">
                                    <dl>자동차부품연구원, 한국자동차연구원(KATECH) 으로 기관명 변경</dl>
                                    <dd>자동차부품연구원(원장 허남용) 이 “한국자동차연구원”으로 기관명이 바뀌었습니다. 이번 기관명 변경은 자동차부품연구원이 국내 자동차 전문 대표 연구기관으로서의 아이덴티티를 좀 더 강화하고, 최근 자동차산업의 새로운 패러다임 변화와 함께 AI, 빅데이타, ICT 서비스로 확장됨에 따라, 미래 산업 변화에 적극 대응하기 위한 조치로 지난 10월 임시이사회 및 11월 산업통상자원부 최종승인을 거쳐 확정되었습니다. (2019.11.13.변경)</dd>
                                </a>
                            </li>
                            <li class="listitem" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="150">
                                <a href="#none">
                                    <dl>KOLAS 국제공인시험기관 인정범위 확대 인정에 따른 인정범위 안내</dl>
                                    <dd>국가기술표준기본법 제23조(시험기관 인정)와 공인기관인정제도운영요령의 규정에 의거, 다음과 같이 자동차부품연구원의 KOLAS 국제공인시험기관 인정범위를 안내드립니다.</dd>
                                </a>
                            </li>
                            <li class="listitem" data-aos="fade-up" data-aos-duration="2500" data-aos-delay="300">
                                <a href="#none">
                                    <dl>자동차부품연구원, 한국자동차연구원(KATECH) 으로 기관명 변경</dl>
                                    <dd>자동차부품연구원(원장 허남용) 이 “한국자동차연구원”으로 기관명이 바뀌었습니다. 이번 기관명 변경은 자동차부품연구원이 국내 자동차 전문 대표 연구기관으로서의 아이덴티티를 좀 더 강화하고, 최근 자동차산업의 새로운 패러다임 변화와 함께 AI, 빅데이타, ICT 서비스로 확장됨에 따라, 미래 산업 변화에 적극 대응하기 위한 조치로 지난 10월 임시이사회 및 11월 산업통상자원부 최종승인을 거쳐 확정되었습니다. (2019.11.13.변경)</dd>
                                </a>
                            </li>
                            <li class="listitem" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="450">
                                <a href="#none">
                                    <dl>KOLAS 국제공인시험기관 인정범위 확대 인정에 따른 인정범위 안내</dl>
                                    <dd>국가기술표준기본법 제23조(시험기관 인정)와 공인기관인정제도운영요령의 규정에 의거, 다음과 같이 자동차부품연구원의 KOLAS 국제공인시험기관 인정범위를 안내드립니다.</dd>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="locationbox_">
                        <div class="text">
                            <h4 class="boxheadtxt_">KATECH LOCATION</h4>
                        </div>

                        <div class="mapbox_">
                            <div id="daumRoughmapContainer1646383288490" class="root_daum_roughmap root_daum_roughmap_landing" style="width:100%;"></div>
                            <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
                            <script charset="UTF-8">
                                new daum.roughmap.Lander({
                                        "timestamp": "1646383288490",
                                        "key": "29d74",
                                        "mapWidth": "100%",
                                        "mapHeight": "250"
                                    })
                                    .render();

                            </script>
                        </div>

                        <div class="mapinfo_">
                            <strong class="mapname_">KATECH 한국자동차연구원</strong>
                            <p class="map_txt_ko">(31214) 충남 천안시 동남구 풍세면 풍세로 303 한국자동차연구원</p>
                            <p class="map_txt_en">(31214) Korea Automobile Research Institute 303 Pungse-ro, Pungse-myeon, Dongnam-gu, Cheonan-si, Chungcheongnam-do.</p>
                            <ul>
                                <li class="map_tel">
                                    <dl>
                                        <dt>전화</dt>
                                        <dd>041-559-3114</dd>
                                    </dl>
                                </li>
                                <li class="map_tel">
                                    <dl>
                                        <dt>팩스</dt>
                                        <dd>041-559-3114</dd>
                                    </dl>
                                </li>
                                <li class="map_tel">
                                    <dl>
                                        <dt>이메일</dt>
                                        <dd>jhpark@katech.re.kr /<br class="mobile-txt"> jhshim@katech.re.kr</dd>
                                    </dl>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </article>
            <article>
                <div class="inner">
                    <div class="qa_">
                        <ul>
                            <li class="faq">
                                <a href="<?=DIR?>/service/sub04.php">
                                    <div class="text">
                                        <h4>FAQ</h4>
                                        <p>궁금하신 점을 자주하는 질문을 통해 확인하실 수 있습니다.</p>
                                    </div>
                                </a>
                            </li>
                            <li class="qna">
                                <a href="<?=DIR?>/service/sub05.php">
                                    <div class="text">
                                        <h4>Q&amp;A</h4>
                                        <p>한국자동차연구원의 시험/검사에 대한 정보를 문의하실 수 있습니다.</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </article>
            <div class="reveal fade-right">
                <span class="circle circle_rt1"></span>
            </div>
        </section>
        
        <style>
    		.quick-menu-area {display: none; background: #fff; position: fixed; right: 0px; opacity: 1; border-radius: 8px; width: 60px; bottom:120px; z-index: 100; box-shadow: rgba(0,0,0,0.1) 0 10px 20px; transition: all 0.5s ease;}
    		.quick-menu-area.active {opacity: 1; right: 10px}
    		.quick-menu-area li {padding: 8px 0; position: relative}
    		.quick-menu-area li span {position: absolute; color: #fff; border-radius: 30px; padding: 4px 0px; width: 80px; text-align: center; background: rgba(0,0,0,0.8); right: 100px; top: 20px; font-size: 11px; display: block; opacity: 0; transition: all 0.5s ease}
    		.quick-menu-area li a {text-align: center; line-height: 50px; display: block; transition: all 0.3s ease; color:#a27b73; width:50px; height: 50px; margin: auto}
    		.quick-menu-area li:nth-child(3) a {color: #f90}
    		.quick-menu-area li:hover a {color: #fff; background:#a27b73; border-radius: 50%;  box-shadow: rgba(0,0,0,0.2) 0 8px 6px}
    		.quick-menu-area li:hover span {display: block; right: 50px; opacity: 1}
    		.quick-menu-area li a i {font-size: 18px;}
    		.ac-kakao {box-shadow: rgba(0,0,0,0.1) 0 10px 20px; width: 40px; height: 40px; margin: 10px auto; background: #fdcd21; border-radius: 50%; text-align: center}
    		.ac-kakao a {display: block; color: #461b0e; font-size: 18px; line-height: 38px}
    		
    		@media (max-width:640px) {
    		    .quick-menu-area {display: none; }
    		}
		</style>
        
        <div class="quick-menu-area">
        	<div class="ac-kakao">
        		<a href="#none">
        			<i class="axi axi-cloud7"></i>
        		</a>
        	</div>
        	<ul>
        		<li>
        			<span>마이페이지</span>
        			<a href="#none">
        				<i class="axi axi-user"></i>
        			</a>
        		</li>
        		<li>
        			<span>고객센터</span>
        			<a href="#none">
        				<i class="axi axi-headset-m"></i>
        			</a>
        		</li>
        		<li>
        			<span>리뷰 이벤트</span>
        			<a href="#none">
        				<i class="axi axi-star3"></i>
        			</a>
        		</li>
        		<li>
        			<span>공지사항</span>
        			<a href="#none">
        				<i class="axi axi-calendar-o"></i>
        			</a>
        		</li>
        	</ul>
        </div>
    </div>

    <? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/footer.php"; ?>
</body>
</html>
