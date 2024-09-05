<? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/common.php"; ?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/head.php"; ?>

    <div id="svis" class="svis2">
        <div class="inner">
            <h2>사이트맵</h2>
            <div class="navi">
                <span>Home</span>
                <em>
                    <i class="axi axi-chevron-right"></i>
                </em>
                <span>사이트맵</span>
            </div>
        </div>
    </div>

    <div id="wrap" class="sitemap_">
        <section class="sitemapview">
            <article>
                <h2><img src="<?=DIR?>/img/sitemap-logo.png" alt="사이트맵 로고"></h2>
                <div class="sitemap">
                    <ul class="sitemaplist">
                        <li class="list list1">
                            <a href="#none">고객서비스</a>
                            <ul class="dept2">
                                <li>
                                    <a href="<?=DIR?>/service/sub01.php">이용 안내</a>
                                </li>
                                <li>
                                    <a href="<?=DIR?>/service/sub02.php">성적서 진위 확인</a>
                                </li>
                                <li>
                                    <a href="<?=DIR?>/service/sub03.php">공지사항</a>
                                </li>
                                <li>
                                    <a href="<?=DIR?>/service/sub04.php">FAQ</a>
                                </li>
                                <li>
                                    <a href="<?=DIR?>/service/sub05.php">Q&amp;A</a>
                                </li>
                            </ul>
                        </li>
                        <li class="list list2">
                            <a href="#none">시험 장비</a>
                            <ul class="dept2">
                                <li>
                                    <a href="<?=DIR?>/equipment/sub01.php">장비 안내</a>
                                </li>
                                <li>
                                    <a href="<?=DIR?>/equipment/sub02.php">장비 현황</a>
                                </li>
                                <li>
                                    <a href="<?=DIR?>/equipment/sub03.php">장비 자료</a>
                                </li>
                            </ul>
                        </li>
                        <li class="list list3">
                            <a href="#none">시험 검사 접수</a>
                            <ul class="dept2">
                                <li>
                                    <a href="<?=DIR?>/test/sub01.php">시험·분석 분야 접수</a>
                                </li>
                                <li>
                                    <a href="<?=DIR?>/test/sub02.php">검사 분야 접수</a>
                                </li>
                            </ul>
                        </li>
                        <li class="list list4">
                            <a href="#none">진행 현황</a>
                            <ul class="dept2">
                                <li>
                                    <a href="<?=DIR?>/progress/sub01.php">접수 현황</a>
                                </li>
                                <li>
                                    <a href="<?=DIR?>/progress/sub02.php">시험 현황</a>
                                </li>
                                <li>
                                    <a href="<?=DIR?>/progress/sub03.php">시험 취소 신청</a>
                                </li>
                                <li>
                                    <a href="<?=DIR?>/progress/sub04.php">성적서/세금계산서</a>
                                </li>
                            </ul>
                        </li>
                        <li class="list list5">
                            <a href="#none">모빌리티 시험인증본부</a>
                            <ul class="dept2">
                                <li>
                                    <a href="<?=DIR?>/mobility/sub01.php">소개</a>
                                </li>
                                <li>
                                    <a href="<?=DIR?>/mobility/sub02.php">주요업무</a>
                                </li>
                                <li>
                                    <a href="<?=DIR?>/mobility/sub03.php">조직도</a>
                                </li>
                                <li>
                                    <a href="<?=DIR?>/mobility/sub04.php">인증현황</a>
                                </li>
                                <li>
                                    <a href="<?=DIR?>/mobility/sub05.php">오시는 길</a>
                                </li>
                            </ul>
                        </li>
                        <li class="list list6">
                            <a href="#none">회원페이지</a>
                            <ul class="dept2">
                                <li>
                                    <a href="<?=DIR?>/member/login.php">로그인</a>
                                </li>
                                <li>
                                    <a href="<?=DIR?>/member/join.php">회원가입</a>
                                </li>
                                <li>
                                    <a href="<?=DIR?>/member/find.php">ID/PW 찾기</a>
                                </li>
                                <li>
                                    <a href="<?=DIR?>/member/mypage.php">마이페이지</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </article>
        </section>
    </div>

    <? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/footer.php"; ?>
</body>
<script>
    document.title = "사이트맵 :: KATECH 한국자동차연구원";
</script>
</html>
