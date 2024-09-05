<? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/common.php"; ?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/head.php"; ?>

    <div id="svis" style="background:url(../img/service/svis.png)no-repeat center/cover;">
        <div class="inner">
            <h2>Q&amp;A</h2>
            <ul class="snb">
                <li class=""><a href="./sub01.php">이용안내</a></li>
                <li class=""><a href="./sub02.php">성적서 진위 확인</a></li>
                <li class=""><a href="./sub03.php">공지사항</a></li>
                <li class=""><a href="./sub04.php">FAQ</a></li>
                <li class="active"><a href="./sub05.php">Q&amp;A</a></li>
            </ul>
            <div class="navi">
                <span>Home</span>
                <em>
                    <i class="axi axi-chevron-right"></i>
                </em>
                <span>고객서비스</span>
                <em>
                    <i class="axi axi-chevron-right"></i>
                </em>
                <span>Q&amp;A</span>
            </div>
        </div>
    </div>

    <div id="wrap" class="notice">
        <section>
            <article>
                <div class="inner">
                    <form action="" method="post" name="wrtfrm" id="wrtfrm" onsubmit="return subibtn();">
                        <table class="__tbl-write">
                            <tbody>
                                <tr>
                                    <th scope="col">제목</th>
                                    <td colspan="3">
                                        <p>테스트 글입니다.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col">등록자</th>
                                    <td>
                                        <p>이병현</p>
                                    </td>
                                    <th scope="col">이메일</th>
                                    <td>
                                        <p>wada0012@naver.com</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col">연락처</th>
                                    <td>
                                        <p>010-4123-6***</p>
                                    </td>
                                    <th scope="row">답변자<br class="writebr_"> 선택</th>
                                    <td>
                                        <p>(수소연료전지)기울기 안정성 시험(김기환)</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col">비밀글<br class="writebr_">여부</td>
                                    <td>
                                        <input type="checkbox" name="m_sct" id="m_sct" value="sct_Y" onclick="passwdChk();" checked>
                                        <span class="info">비밀글</span>
                                    </td>
                                    <th scope="col">패스워드</td>
                                    <td>
                                        <p>****</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col">내용</td>
                                    <td colspan="3">
                                        <p>내용</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="_btnarea">
                            <div class="_btn">
                                <a href="#none" class="modifybtn">수정</a>
                                <a href="#none" class="deletebtn">삭제</a>
                                <a href="javascript:history.back();" class="listbtn">목록</a>
                            </div>
                        </div>
                    </form>
                </div>
            </article>
        </section>
    </div>

    <? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/footer.php"; ?>
</body>

<script type="text/javascript">
    function subibtn() {
        var f = document.wrtfrm;

        if ($("input[name=m_title]").val() == "") {
            alert("글 제목을 입력해주세요.");
            $("input[name=m_title]").focus();
            return false;
        }
        if ($("input[name=m_name]").val() == "") {
            alert("작성자 이름을 입력해주세요.");
            $("input[name=m_name]").focus();
            return false;
        }
        if ($("input[name=m_email]").val() == "") {
            alert("이메일을 입력해주세요.");
            $("input[name=m_email]").focus();
            return false;
        }
        if ($("input[name=m_tel]").val() == "") {
            alert("연락처를 입력해주세요.");
            $("input[name=m_tel]").focus();
            return false;
        }
        if($("input[name=m_tel]").val()).length < 10 || $("input[name=m_tel]").val()).length > 11 ){
			alert("휴대번호는 10~11자리 입니다.");
			$("input[name=m_tel]").select();
			return false;
		}
        if ($("input[name=m_ans]").val() == "") {
            alert("답변자를 선택해주세요.");
            $("input[name=m_ans]").focus();
            return false;
        }
        if (!f.m_sct.checked) {
            alert("비밀글 여부를 선택해주세요.");
            return false;
        }
        if ($("input[name=m_pwd]").val() == "") {
            alert("패스워드를 입력해주세요.");
            $("input[name=m_pwd]").focus();
            return false;
        }
        if(f.board_content.value == ""){
            alert("글내용을 입력해 주세요.");
            f.board_content.focus();
            return false;
        }
    }
</script>
<script>
    function checkNumber(event) {
        if(event.key === '.' 
           || event.key === '-'
           || event.key >= 0 && event.key <= 9) {
            return true;
        }
        return false;
    }
</script>
</html>
