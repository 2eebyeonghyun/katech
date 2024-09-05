<? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/common.php"; ?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/head.php"; ?>

    <div id="svis" class="svis2">
        <div class="inner">
            <h2>로그인</h2>
            <div class="navi">
                <span>Home</span>
                <em>
                    <i class="axi axi-chevron-right"></i>
                </em>
                <span>로그인</span>
            </div>
        </div>
    </div>
   
    <div id="wrap" class="loginWrap">
        <section>
            <article>
                <div class="inner">
                    <form class="__login" name="loginform" id="loginfrm" method="post" onsubmit="return loginSubmit();">
					    <div class="inner">
					    	<div class="tit">
					    		<h3><span>LOGIN</span></h3>
					    		<p>홈페이지 방문을 환영합니다!<br/>다양하고 정확한 정보제공을 위해 로그인을 하신 뒤 이용해주세요.</p>
					    	</div>
					    </div>

					    <div class="area">
					    	<div class="form">
					    		<ul>
					    			<li class="text"><input type="text" placeholder="아이디" name="loginid" id="loginid"></li>
					    			<li class="pass"><input type="password" placeholder="비밀번호" name="passwd" id="passwd"></li>
					    		</ul>
					    		<button type="submit">로그인</button>
					    	</div>
					    	<ul class="link">
					    		<li><a href="<?=DIR?>/member/find.php">ID/PW찾기</a></li>
					    		<li><a href="<?=DIR?>/member/join.php">회원가입</a></li>
					    	</ul>
					    </div>
				    </form>
                </div>
            </article>
        </section>
    </div>

    <? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/footer.php"; ?>
</body>

<script>
$(document).ready(function(){
  if($("input[name=loginid]").val()){
    $("input[name=passwd]").focus();
  }else{
    $("input[name=loginid]").focus();
  }
});
function loginSubmit(){

    if( $.trim($("#loginid").val()) == '' ){
        alert("아이디를 입력해 주세요.");
        $("#loginid").focus();
        return false;
    }
    if( $.trim($("#passwd").val()) == '' ){
        alert("비밀번호를 입력해 주세요.");
        $("#passwd").focus();
        return false;
    }
}

</script>
<script>
    document.title = "로그인 :: KATECH 한국자동차연구원";
</script>
</html>
