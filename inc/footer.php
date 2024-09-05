<footer id="footer">
    <div class="one">
        <div class="inner">
            <div class="left">
                <ul>
                    <li><a href="http://www.katech.re.kr/privacy" onclick="window.open(this.href,'','width=800,height=700,scrollbars=yes');return false;">개인정보처리방침</a></li>
                    <li><a href="<?=DIR?>/member/mail.php" onclick="window.open(this.href,'','width=400,height=265,scrollbars=yes');return false;">이메일무단수집거부</a></li>
                    <li><a href="<?=DIR?>/mobility/sub05.php">찾아오시는 길</a></li>
                    <li><a href="<?=DIR?>/member/sitemap.php">사이트맵</a></li>
                </ul>
            </div>
            <div class="right">
                <div class="site-wrap">
                    <a href="#" class="site-title">관련사이트<i class="axi axi-ion-chevron-up"></i></a>
                    <ul class="related-site" style="display:none;">
                        <li><a href="http://www.katech.re.kr/" target="_blank" title="바로가기">한국자동차연구원</a></li>
                        <li><a href="http://library.katech.re.kr/index.ax" target="_blank" title="바로가기">한국자동차연구원 전자도서관</a></li>
                        <li><a href="http://tlo.katech.re.kr/" target="_blank" title="바로가기">한국자동차연구원 기술이전</a></li>
                        <li><a href="http://greenet.katech.re.kr/" target="_blank" title="바로가기">한국자동차연구원 그린네트워크</a></li>
                        <li><a href="http://edu.katech.re.kr/" target="_blank" title="바로가기">한국자동차연구원 인재교육</a></li>
                        <li><a href="http://h2mobility-katech.re.kr/" target="_blank" title="바로가기">한국자동차연구원 수소모빌리티연구본부</a></li>
                        <li><a href="http://e-mobility.katech.re.kr/" target="_blank" title="바로가기">한국자동차연구원 대경본부</a></li>
                        <li><a href="http://e-mobility.katech.re.kr/" target="_blank" title="바로가기">한국자동차연구원 e-모빌리티연구센터</a></li>
                        <li><a href="http://sh.katech.re.kr/" target="_blank" title="바로가기">한국자동차연구원 경기본부</a></li>
                    </ul>
                </div>
                <a href="#" class="scroll-top">TOP</a>
            </div>
        </div>
    </div>
    <div class="two">
        <div class="inner">
            <div class="left">
                <address>
                    <span>(31214)</strong>충남 천안시 동남구 풍세면 풍세로 303 한국자동차연구원</span>
                    <span>이메일 : jhpark@katech.re.kr / jhshim@katech.re.kr</span>
                </address>
                <p class="copy">Copyright(c) 2010 KATECH All rights reserved.</p>
            </div>
            <div class="right">
                <h1 class="ft-logo"><img src="<?=DIR?>/img/mobilelogo.png" alt=""></h1>
            </div>
        </div>
    </div>
</footer>
<script>
    $('.site-wrap > a').each(function(idx) {
        $(this).on("click", function(e) {
            e.preventDefault();

            var $target = $(e.target);
            var $popup = $target.next();

            if ($popup.is(":visible")) {
                $popup.stop().hide();
                $(document).off("click.family" + idx);
            } else {
                $popup.stop().show();
                $(document).on("click.family" + idx, function(e) {
                    if ($(e.target)[0] != $target[0]) {
                        $popup.stop().hide();
                        $(document).off("click.family" + idx);
                    }
                });
            }
        });
    });

</script>
