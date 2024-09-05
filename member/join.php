<? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/common.php"; ?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/head.php"; ?>

    <div id="svis" class="svis2">
        <div class="inner">
            <h2>회원가입</h2>
            <div class="navi">
                <span>Home</span>
                <em>
                    <i class="axi axi-chevron-right"></i>
                </em>
                <span>회원가입</span>
            </div>
        </div>
    </div>

    <div id="wrap" class="member">
        <section>
            <article>
                <div class="inner">
                    <form name="signupform" id="signupform" method="post" action="" onsubmit="return frmcheck();">
                        <div class="__tit1">
                            <h3>이용약관</h3>
                        </div>
                        <div class="__agree">
                            <div class="area">
                                <?include_once '../inc/provision.php';?>
                            </div>
                            <div class="lab">
                                <label>
                                    <input type="checkbox" name="agreement1">
                                    이용약관에 동의합니다.
                                </label>
                            </div>
                        </div>

                        <div class="__tit1 __mt50">
                            <h3>개인정보 수집 및 이용 안내</h3>
                        </div>
                        <div class="__agree">
                            <div class="area">
                                <?include_once '../inc/privacy.php';?>
                            </div>
                            <div class="lab">
                                <label>
                                    <input type="checkbox" name="agreement2">
                                    개인정보 수집 및 이용에 대해 동의합니다.
                                </label>
                            </div>
                        </div>
                        
                        <div class="allchkbox-area">
                            <div class="allchkbox">
                                <label>
                                    <input type="checkbox" name="selectChk" class="checkk" value="selectAll" onclick="selectAll(this)">전체이용동의
                                </label>
                            </div>
                        </div>

                        <div class="__toparea __mt50">
                            <div class="__tit1">
                                <h3>기업(기관)정보</h3>
                            </div>
                        </div>

                        <table class="__tbl-write company_write">
                            <caption></caption>
                            <tbody>
                                <tr>
                                    <th scope="row"><span class="impor">업체명</span></th>
                                    <td>
                                        <input type="text" class="__form1" style="width:300px;" name="com-name" id="com-name" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="impor">대표자명</span></th>
                                    <td>
                                        <input type="text" class="__form1" style="width:300px;" name="com-ceo" id="com-ceo" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)" oninput="this.value = this.value.replace(/[^ㄱ-ㅎ|ㅏ-ㅣ|가-힣]/, '');">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="impor">사업자번호</span></th>
                                    <td>
                                        <input type="text" class="__form1" style="width:300px;" name="com-num" id="com-num" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)" onkeypress="return checkNumber(event)">
                                        <span class="dib fs_11" id="commentEmail">( '-'제외 Full Number 입력 )</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="impor">업종(종목)</span></th>
                                    <td>
                                        <input type="text" class="__form1" style="width:300px;" name="com-type" id="com-type" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="impor">전화번호</span></th>
                                    <td>
                                        <input type="text" class="__form1" style="width:300px;" name="com-tel" id="com-tel" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)" maxlength="12" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                        <span class="dib fs_11" id="commentEmail">( '-'제외 Full Number 입력 )</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="impor">팩스번호</span></th>
                                    <td>
                                        <input type="text" class="__form1" style="width:300px;" name="com-fax" id="com-fax" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                        <span class="dib fs_11" id="commentEmail">( '-'제외 Full Number 입력 )</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="impor">주소</span></th>
                                    <td>
                                        <div class="locadiv_">
                                            <input type="text" class="__form1 loca_" style="width:300px;" name="" id="com-postcode" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)">
                                            <a href="javascript:cube_execDaumPostcode2();"><button type="button" class="locationbtn">우편번호 검색</button></a>
                                        </div>
                                        <div class="__mt10">
                                            <ul class="__dtbl" style="max-width:800px;">
                                                <li class="td"><input type="text" class="__form1" name="" id="com-addr1"></li>
                                                <li class="td tac" style="width:5px;"></li>
                                                <li class="td"><input type="text" class="__form1" name="" id="com-addr2"></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="impor">사업자<br class="writebr_">등록증</span></th>
                                    <td>
                                        <div class="filebox">
                                            <input class="upload-name" style="width:300px;" value="첨부파일" placeholder="첨부파일" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)">
                                            <label for="file">파일찾기</label> 
                                            <input type="file" id="file">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <div class="__toparea __mt50">
                            <div class="__tit1">
                                <h3>기본정보</h3>
                            </div>
                        </div>

                        <table class="__tbl-write join_write">
                            <caption></caption>
                            <tbody>
                                <tr>
                                    <th scope="row"><span class="impor">성명</span></th>
                                    <td>
                                        <input type="text" class="__form1" style="width:300px;" name="m_name" id="m_name" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)" oninput="this.value = this.value.replace(/[^ㄱ-ㅎ|ㅏ-ㅣ|가-힣]/, '');">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="impor">아이디</span></th>
                                    <td>
                                        <input type="text" class="__form1" style="width:300px;" name="m_id" id="m_id" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)" onkeyup="checkId(this.value);">
                                        <span class="dib fs_11" id="commentId">* 아이디는 6자 이상, 12자 이하로 작성해주세요.</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="impor">비밀번호</span></th>
                                    <td>
                                        <input type="password" class="__form1" style="width:300px;" name="m_passwd1" id="m_passwd1" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)">
                                        <span class="dib fs_11">
                                            * 영문과 숫자가 최소 하나 이상 포함되어야 하며 8자 이상
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="impor">비밀번호<br class="writebr_"> 확인</span></th>
                                    <td>
                                        <input type="password" class="__form1" style="width:300px;" name="m_passwd2" id="m_passwd2" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)">
                                        <span class="dib fs_11">* 입력 오류 방지를 위하여 똑같이 한 번 더 입력해 주세요.</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="impor">휴대폰</span></th>
                                    <td>
                                        <input type="text" class="__form1" id="m_tel" id="m_tel" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)" maxlength="11" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" style="width: 300px;">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="impor">E-mail</span></th>
                                    <td class="mailarea">
                                        <input type="text" class="__form1" id="m_email" id="m_email" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)" style="width: 300px;">
                                        <button type="submit" class="mailchk">인증받기</button>
                                        <span class="dib fs_11" id="commentEmail">* 아이디/패스워드찾기 등에 필요한 정보이니 정확하게 기입해 주세요.</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="impor">이메일 확인</span></th>
                                    <td>
                                        <input type="text" class="__form1" id="m_emailchk" id="m_emailchk" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)" style="width: 300px;">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="impor">주소</span></th>
                                    <td>
                                        <div class="locadiv_">
                                            <input type="text" class="__form1 loca_" style="width:300px;" name="m_zip" id="cube_postcode" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)">
                                            <a href="javascript:cube_execDaumPostcode();"><button type="button" class="locationbtn">우편번호 검색</button></a>
                                        </div>
                                        <div class="__mt10">
                                            <ul class="__dtbl" style="max-width:800px;">
                                                <li class="td"><input type="text" class="__form1" name="m_addr1" id="m_addr1"></li>
                                                <li class="td tac" style="width:5px;"></li>
                                                <li class="td"><input type="text" class="__form1" name="m_addr2" id="m_addr2"></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="__botarea">
                            <div class="cen">
                                <a href="/" class="joincanbtn">취소</a>
                                <button type="submit" class="joinbtn">회원가입</button>
                            </div>
                        </div>

                    </form>
                </div>
            </article>
        </section>
    </div>

    <? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/footer.php"; ?>
</body>
<script>
    function selectAll(selectAll)  {
        const checkboxes = document.querySelectorAll('input[type="checkbox"]');
        
        checkboxes.forEach((checkbox) => {
            checkbox.checked = selectAll.checked;
        })
    }
</script>
<script src="https://ssl.daumcdn.net/dmaps/map_js_init/postcode.v2.js"></script>
<script>
    function cube_execDaumPostcode() {
        new daum.Postcode({
            oncomplete: function(data) {
                // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                var fullAddr = ''; // 최종 주소 변수
                var extraAddr = ''; // 조합형 주소 변수

                // 사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                    fullAddr = data.roadAddress;

                } else { // 사용자가 지번 주소를 선택했을 경우(J)
                    fullAddr = data.jibunAddress;
                }

                // 사용자가 선택한 주소가 도로명 타입일때 조합한다.
                if (data.userSelectedType === 'R') {
                    //법정동명이 있을 경우 추가한다.
                    if (data.bname !== '') {
                        extraAddr += data.bname;
                    }
                    // 건물명이 있을 경우 추가한다.
                    if (data.buildingName !== '') {
                        extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                    }
                    // 조합형주소의 유무에 따라 양쪽에 괄호를 추가하여 최종 주소를 만든다.
                    fullAddr += (extraAddr !== '' ? ' (' + extraAddr + ')' : '');
                }

                // 우편번호와 주소 정보를 해당 필드에 넣는다.
                document.getElementById('cube_postcode').value = data.zonecode; //5자리 새우편번호 사용
                document.getElementById('m_addr1').value = fullAddr;

                // 커서를 상세주소 필드로 이동한다.
                document.getElementById('m_addr2').focus();
            }
        }).open();
    }

    function cube_execDaumPostcode2() {
        new daum.Postcode({
            oncomplete: function(data) {
                // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                var fullAddr = ''; // 최종 주소 변수
                var extraAddr = ''; // 조합형 주소 변수

                // 사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                    fullAddr = data.roadAddress;

                } else { // 사용자가 지번 주소를 선택했을 경우(J)
                    fullAddr = data.jibunAddress;
                }

                // 사용자가 선택한 주소가 도로명 타입일때 조합한다.
                if (data.userSelectedType === 'R') {
                    //법정동명이 있을 경우 추가한다.
                    if (data.bname !== '') {
                        extraAddr += data.bname;
                    }
                    // 건물명이 있을 경우 추가한다.
                    if (data.buildingName !== '') {
                        extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                    }
                    // 조합형주소의 유무에 따라 양쪽에 괄호를 추가하여 최종 주소를 만든다.
                    fullAddr += (extraAddr !== '' ? ' (' + extraAddr + ')' : '');
                }

                // 우편번호와 주소 정보를 해당 필드에 넣는다.
                document.getElementById('com-postcode').value = data.zonecode; //5자리 새우편번호 사용
                document.getElementById('com-addr1').value = fullAddr;

                // 커서를 상세주소 필드로 이동한다.
                document.getElementById('com-addr2').focus();
            }
        }).open();
    }
</script>
<script language='javascript'>
    function frmcheck() {

        var f = document.signupform;

        if (!f.agreement1.checked) {
            alert('홈페이지 이용약관에 동의하셔야 합니다.');
            return false;
        }
        if (!f.agreement2.checked) {
            alert('개인정보 취급방침에 동의하셔야 합니다.');
            return false;
        }
        if ($.trim($("#com-name").val()) == '') {
            alert("업체명을 등록해 주세요.");
            $("#com-name").select();
            return false;
        }
        if ($.trim($("#com-ceo").val()) == '') {
            alert("대표자명을 입력해 주세요.");
            $("#com-ceo").select();
            return false;
        }
        if ($.trim($("#com-num").val()) == '') {
            alert("사업자번호를 입력해 주세요.");
            $("#com-num").select();
            return false;
        }
        if ($.trim($("#com-tel").val()) == '') {
            alert("회사 번호를 입력해 주세요.");
            $("#com-tel").select();
            return false;
        }
        if ($.trim($("#com-tel").val()).length < 8 || $.trim($("#com-tel").val()).length > 12) {
            alert("회사 번호는 8~12자리 입니다.");
            $("#com-tel").select();
            return false;
        }
        if ($.trim($("#com-fax").val()) == '') {
            alert("팩스번호를 입력해 주세요.");
            $("#com-fax").select();
            return false;
        }
        if ($.trim($("#m_name").val()) == '') {
            alert("이름을 입력해 주세요.");
            $("#m_name").select();
            return false;
        }
        if ($.trim($("#m_id").val()) == '') {
            alert("아이디를 입력해 주세요.");
            $("#m_id").select();
            return false;
        }
        if ($.trim($("#m_passwd1").val()) == '') {
            alert("비밀번호를 입력해 주세요.");
            $("#m_passwd1").select();
            return false;
        }
        if ($.trim($("#m_passwd1").val()).length < 8 || $.trim($("#m_passwd1").val()).length > 15) {
            alert("비밀번호는 8~15자리 입니다.");
            $("#m_passwd1").select();
            return false;
        }
        if ($.trim($("#m_passwd2").val()) == '') {
            alert("비밀번호를 다시한번 입력해 주세요.");
            $("#m_passwd2").select();
            return false;
        }
        if ($.trim($("#m_passwd1").val()) != $.trim($("#m_passwd2").val())) {
            alert("비밀번호가 서로 같지 않습니다.\n\n다시 입력하여 주세요.");
            $("#m_passwd2").select();
            return false;
        }
        if ($.trim($("#m_tel").val()) == '') {
            alert("휴대번호를 입력해 주세요.");
            $("#m_tel").select();
            return false;
        }
        if ($.trim($("#m_tel").val()).length < 10 || $.trim($("#m_tel").val()).length > 11) {
            alert("휴대번호는 10~11자리 입니다.");
            $("#m_tel").select();
            return false;
        }
        if ($.trim($("#m_email").val()) == '') {
            alert("이메일을 입력해 주세요.");
            $("#m_email").select();
            return false;
        }
        if ($.trim($("#m_emailchk").val()) == '') {
            alert("이메일을 인증을 확인해 주세요.");
            $("#m_emailchk").select();
            return false;
        }
        if ($("input[name=m_zip]").val() == "") {
            alert("주소를 선택해주세요.");
            $("input[name=m_zip]").focus();
            return false;
        }
        if ($("input[name=m_addr1]").val() == "") {
            alert("주소를 선택해주세요.");
            $("input[name=m_addr1]").focus();
            return false;
        }
        if ($("input[name=m_addr2]").val() == "") {
            alert("주소를 선택해주세요.");
            $("input[name=m_addr2]").focus();
            return false;
        }
        return true;

    }


    // 아이디 중복 체크
    function checkId(arg) {

        var f = document.signupform;

        if (!checkCode(arg)) {

            $('#commentId').html("* 한글 및 특수문자, 공백은 넣을 수 없습니다.");
            f.m_id.value = "";
            f.m_id.focus();
            f.idDuplicateYn.value = "N";
            return false;

        } else if (arg.length < 6 || arg.length > 12) {

            $('#commentId').html("* 아이디는 <em class='hColor1'>6자 이상, 12자 이하로 작성</em>해주세요.");
            f.m_id.focus();
            f.idDuplicateYn.value = "N";
            return false;

        } else {

            $.ajax({
                cache: false,
                async: false,
                type: "POST",
                data: "m_id=" + arg,
                url: "/_core/act/?at=checkid",
                success: function(data) {
                    if (data != null) {

                        if (data != "true") {
                            $('#commentId').html("* <em class='hColor1'>이미 사용중인 아이디</em>입니다.");
                            f.idDuplicateYn.value = "N";
                        } else {
                            $('#commentId').html("* <font color='blue'>사용 가능한 아이디</font>입니다.");
                            f.idDuplicateYn.value = "Y";
                        }

                    } // end if
                } // success
            });

        } // end if

    }

    // 영문+숫자 only
    function checkCode(arg) {

        for (var i = 0; i < arg.length; i++) {

            var k = arg.charCodeAt(i);
            if (!(k > 96 && k < 123 || k > 64 && k < 91 || k > 47 && k < 58)) {
                return false;
            }
        }
        return true;
    }

    // number only
    function checkNumber() {
        var objEv = event.srcElement;
        var numPattern = /([^0-9])/;
        numPattern = objEv.value.match(numPattern);
        if (numPattern != null) {
            alert("숫자만 입력해 주세요 ! ");
            objEv.value = "";
            objEv.focus();
            return false;
        }
    }

    // 영문 대/소문자 숫자 특수문자 체크
    function isInputCheckText(text) {
        var s = (isCase(text));
        var s_1 = s.split("/");
        if (s_1[0] > 0) s_1[0] = 1;
        if (s_1[1] > 0) s_1[1] = 1;
        if (s_1[2] > 0) s_1[2] = 1;
        if (s_1[3] > 0) s_1[3] = 1;
        if ((parseInt(s_1[0]) + parseInt(s_1[1]) + parseInt(s_1[2]) + parseInt(s_1[3])) < 3) {
            return true;
        } else {
            return false;
        }
    }

    // 영문자검사  대문자/ 소문자/ 숫자
    function isCase(input) {
        var chars1 = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        var chars2 = "abcdefghijklmnopqrstuvwxyz";
        var chars3 = "0123456789";
        var chars4 = "'`!@#$%^&*()-=~_+\|,./<>?;:\"[]{}";
        return containsChar(input, chars1, chars2, chars3, chars4);
    }

    function containsChar(input, chars1, chars2, chars3, chars4) {
        var cnt1 = 0;
        var cnt2 = 0;
        var cnt3 = 0;
        var cnt4 = 0;
        for (var inx = 0; inx < input.length; inx++) {
            if (chars1.indexOf(input.charAt(inx)) != -1) {
                cnt1++;
            }
            if (chars2.indexOf(input.charAt(inx)) != -1) {
                cnt2++;
            }
            if (chars3.indexOf(input.charAt(inx)) != -1) {
                cnt3++;
            }
            if (chars4.indexOf(input.charAt(inx)) != -1) {
                cnt4++;
            }
        }
        return (cnt1 + "/" + cnt2 + "/" + cnt3 + "/" + cnt4);
    }

</script>
<script>
    var data = {
        "b_no": ["xxxxxxx"] // 사업자번호 "xxxxxxx" 로 조회 시,
    };

    $.ajax({
        url: "https://api.odcloud.kr/api/nts-businessman/v1/status?serviceKey=xxxxxx", // serviceKey 값을 xxxxxx에 입력
        type: "POST",
        data: JSON.stringify(data), // json 을 string으로 변환하여 전송
        dataType: "JSON",
        contentType: "application/json",
        accept: "application/json",
        success: function(result) {
            console.log(result);
        },
        error: function(result) {
            console.log(result.responseText); //responseText의 에러메세지 확인
        }
    });

</script>
<script>
    $("#file").on('change',function(){
        var fileName = $("#file").val();
        $(".upload-name").val(fileName);
    });
</script>
<script>
    document.title = "회원가입 :: KATECH 한국자동차연구원";
</script>
</html>
