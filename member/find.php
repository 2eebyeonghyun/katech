<? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/common.php"; ?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/head.php"; ?>

    <div id="svis" class="svis2">
        <div class="inner">
            <h2>ID/PW 찾기</h2>
            <div class="navi">
                <span>Home</span>
                <em>
                    <i class="axi axi-chevron-right"></i>
                </em>
                <span>ID/PW 찾기</span>
            </div>
        </div>
    </div>

    <div id="wrap" class="find">
        <section>
            <article>
                <div class="inner">
                    <div class="find-view">
                        <h4>아이디 / 비밀번호 찾기</h4>
                        
                        <div class="tab">
                            <ul class="tabnav">
                                <li><a href="#tab01">아이디 찾기</a></li>
                                <li><a href="#tab02">패스워드 찾기</a></li>
                            </ul>
                            <div class="tabcontent">
                                <div id="tab01" class="tabcon">
                                    <form name="form_memberfind" action="" id="form_memberfind" onsubmit="return findid();">
                                        <ul class="id-find">
                                            <li>
                                                <input type="text" name="m_name" id="m_name" placeholder="성함을 입력해주세요." oninput="this.value = this.value.replace(/[^ㄱ-ㅎ|ㅏ-ㅣ|가-힣]/, '');">
                                            </li>
                                            <li>
                                                <input type="text" name="m_email" id="m_email" placeholder="이메일을 입력해주세요.">
                                                <button type="button" id="chkbtn" class="chkbtn" onclick="emailRequest('');">확인</button>
                                            </li>
                                        </ul>
                                        
                                        <button type="submit" class="achkbtn idchkbtn">확인하기</button>
                                        
                                        <div class="infotxt">
                                            <p>
                                                위 방법으로 아이디 / 비밀번호를 찾을 수 없을 경우<br>고객센터 <strong>041-559-3114</strong>으로 문의 주시기 바랍니다.
                                            </p>
                                        </div>
                                    </form>
                                </div>
                                <div id="tab02" class="tabcon">
                                    <form name="form_memberfind" action="" id="form_memberfind" onsubmit="return findpw();">
                                        <ul class="id-find">
                                            <li>
                                                <input type="text" name="m_id" id="m_id" placeholder="아이디를 입력해주세요.">
                                            </li>
                                            <li>
                                                <input type="text" name="m_email" id="m_email2" placeholder="이메일을 입력해주세요.">
                                                <button type="button" id="chkbtn" class="chkbtn" onclick="emailRequest('');">확인</button>
                                            </li>
                                        </ul>
                                        
                                        <button type="submit" class="achkbtn pwchkbtn">확인하기</button>
                                        
                                        <div class="infotxt">
                                            <p>
                                                위 방법으로 아이디 / 비밀번호를 찾을 수 없을 경우<br>고객센터 <strong>041-559-3114</strong>으로 문의 주시기 바랍니다.
                                            </p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </div>

    <? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/footer.php"; ?>
</body>
<script>
    $(function() {
        $('.tabcontent > div').hide();
        $('.tabnav a').click(function() {
            $('.tabcontent > div').hide().filter(this.hash).fadeIn();
            $('.tabnav a').removeClass('active');
            $(this).addClass('active');
            return false;
        }).filter(':eq(0)').click();
    });
</script>
<script language='javascript'>
	function findid(){

		var f = document.form_memberfind;
        
        if( $.trim($("#m_name").val()) == '' ){
			alert("성함을 입력해 주세요.");
			$("#m_name").select();
			return false;
		}
        if( $.trim($("#m_email").val()) == '' ){
			alert("이메일을 입력해 주세요.");
			$("#m_email").select();
			return false;
		}
        const regExp = /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;

        if($("#m_email").val().match(regExp) != null) {
            
        } else {
            alert("이메일 형식이 맞지않습니다.");
            return false;
        }
    }
    
    function findpw(){

		var f = document.form_memberfind;
        
        if( $.trim($("#m_id").val()) == '' ){
			alert("아이디를 입력해 주세요.");
			$("#m_id").select();
			return false;
		}
        if( $.trim($("#m_email2").val()) == '' ){
			alert("이메일을 입력해 주세요.");
			$("#m_email2").select();
			return false;
		}
        const regExp = /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;

        if($("#m_email").val().match(regExp) != null) {
            
        } else {
            alert("이메일 형식이 맞지않습니다.");
            return false;
        }
    }
</script>
<script>
    document.title = "회원정보찾기 :: KATECH 한국자동차연구원";
</script>
</html>
