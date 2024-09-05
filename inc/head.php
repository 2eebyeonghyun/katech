<?php
$dep = $_GET['dep'];
$dep2 = $_GET['dep2'];
?>
   

<header id="header">
    <div class="login_area">
        <div class="login_area_inner">
            <a href="<?=DIR?>/member/login.php" class="login">LOGIN </a>
            <a class="space"> &nbsp | &nbsp </a>
            <a href="<?=DIR?>/member/join.php" class="join"> JOIN</a>
            <a class="space"> &nbsp | &nbsp </a>
            <a href="<?=DIR?>/member/mypage.php" class="join"> MYPAGE</a>
        </div>
    </div>

    <div class="inner">
        <h1 class="logo"><a href="<?=DIR?>/">한국자동차연구원</a></h1>
        <button type="button" class="mnu"><i></i></button>
        <nav class="nav">

            <!--kor_eng-->
            <div class="login_area_inner">
                <a href="<?=DIR?>/member/login.php" class="login">LOGIN </a>
                <a class="space"> &nbsp | &nbsp </a>
                <a href="<?=DIR?>/member/join.php" class="join"> JOIN</a>
                <a class="space"> &nbsp | &nbsp </a>
                <a href="<?=DIR?>/member/mypage.php" class="join"> MYPAGE</a>
            </div>

            <ul class="gnb">
                <li class="<?if($dep=='sub1') echo 'active' ?>">
                    <a href="<?=DIR?>/service/sub01.php?dep=sub1&dep2=dep1"><span>고객서비스</span></a>
                    <ul>
                        <li><a href="<?=DIR?>/service/sub01.php?dep=sub1&dep2=dep1">이용 안내</a></li>
                        <li><a href="<?=DIR?>/service/sub02.php?dep=sub1&dep2=dep2">성적서 진위 확인</a></li>
                        <li><a href="<?=DIR?>/service/sub03.php?dep=sub1&dep2=dep3">공지사항</a></li>
                        <li><a href="<?=DIR?>/service/sub04.php?dep=sub1&dep2=dep4">FAQ</a></li>
                        <li><a href="<?=DIR?>/service/sub05.php?dep=sub1&dep2=dep5">Q&amp;A</a></li>         
                    </ul>
                </li>
                <li class="<?if($dep=='sub2') echo 'active' ?>">
                    <a href="<?=DIR?>/equipment/sub01.php?dep=sub2&dep2=dep1"><span>시험 장비</span></a>
                    <ul>
                        <li><a href="<?=DIR?>/equipment/sub01.php?dep=sub2&dep2=dep1">장비 안내</a></li>
                        <li><a href="<?=DIR?>/equipment/sub02.php?dep=sub2&dep2=dep2">장비 현황</a></li>
                        <li><a href="<?=DIR?>/equipment/sub03.php?dep=sub2&dep2=dep3">장비 자료</a></li>
                    </ul>
                </li>
                <li class="<?if($dep=='sub3') echo 'active' ?>">
                    <a href="<?=DIR?>/test/sub01.php?dep=sub3&dep2=dep1"><span>시험 검사 접수</span></a>
                    <ul>
                        <li><a href="<?=DIR?>/test/sub01.php?dep=sub3&dep2=dep1">시험·분석 분야 접수</a></li>
                        <li><a href="<?=DIR?>/test/sub02.php?dep=sub3&dep2=dep2">검사 분야 접수</a></li>
                    </ul>
                </li>
                <li class="<?if($dep=='sub4') echo 'active' ?>">
                    <a href="<?=DIR?>/progress/sub01.php?dep=sub4&dep2=dep1"><span>진행 현황</span></a>
                    <ul>
                        <li><a href="<?=DIR?>/progress/sub01.php?dep=sub4&dep2=dep1">접수 현황</a></li>
                        <li><a href="<?=DIR?>/progress/sub02.php?dep=sub4&dep2=dep2">시험 현황</a></li>
                        <li><a href="<?=DIR?>/progress/sub03.php?dep=sub4&dep2=dep3">시험 취소 신청</a></li>
                        <li><a href="<?=DIR?>/progress/sub04.php?dep=sub4&dep2=dep4">거래명세서</a></li>
                    </ul>
                </li>
                <li class="<?if($dep=='sub5') echo 'active' ?>">
                    <a href="<?=DIR?>/mobility/sub01.php?dep=sub5&dep2=dep1"><span>모빌리티 시험인증본부</span></a>
                    <ul>
                        <li><a href="<?=DIR?>/mobility/sub01.php?dep=sub5&dep2=dep1">소개</a></li>
                        <li><a href="<?=DIR?>/mobility/sub02.php?dep=sub5&dep2=dep2">주요업무</a></li>
                        <li><a href="<?=DIR?>/mobility/sub03.php?dep=sub5&dep2=dep3">조직도</a></li>
                        <li><a href="<?=DIR?>/mobility/sub04.php?dep=sub5&dep2=dep4">인증현황</a></li>
                        <li><a href="<?=DIR?>/mobility/sub05.php?dep=sub5&dep2=dep5">오시는 길</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>
