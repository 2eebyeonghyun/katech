<? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/common.php"; ?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/head.php"; ?>

    <div id="svis" class="svis4">
        <div class="inner">
            <h2>접수 신청</h2>
            <div class="navi">
                <span>Home</span>
                <em>
                    <i class="axi axi-chevron-right"></i>
                </em>
                <span>진행 현황</span>
                <em>
                    <i class="axi axi-chevron-right"></i>
                </em>
                <span>접수 신청</span>
            </div>
        </div>
    </div>
   
    <div id="wrap" class="test">
        <section>
            <article>
                <div class="inner">
                    <div class="__toparea __mt50">
                        <div class="__tit1">
                            <h3>시험분석분야 및 신청</h3>
                        </div>
                    </div>
                    
                    <div class="mypageinfobox_">
                        <h5>알려드립니다</h5>
                        <p class="prinfo">※ 신청서 작성 전에 담당자와 협의 후 신청 바랍니다.</p>
                        <p class="prinfo">※ 업체정보가 변경된 경우 관리자에게 문의해 주세요.</p>
                    </div>
                    
                    <div class="__toparea __mt50">
                        <div class="__tit1">
                            <h3>신청서 정보</h3>
                        </div>
                    </div>
                    
                    <table class="__tbl-write company_write">
                        <caption></caption>
                        <tbody>
                            <tr>
                                <th scope="row"><span class="impor">이름</span></th>
                                <td>
                                    <p>이병현</p>
                                </td>
                                <th scope="row"><span class="impor">거래상태</span></th>
                                <td>
                                    <p>정상</p>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><span class="impor">연락처</span></th>
                                <td>
                                    <p>01041236154</p>
                                </td>
                                <th scope="row"><span class="impor">이메일</span></th>
                                <td>
                                    <p>wada0012@naver.com</p>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><span class="impor">회사명</span></th>
                                <td colspan="3">
                                    <p>한국자동차연구원</p>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><span class="impor">대표자</span></th>
                                <td>
                                    <p>나승식</p>
                                </td>
                                <th scope="row"><span class="impor">사업자번호</span></th>
                                <td>
                                    <p>3128204676</p>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><span class="impor">주 소</span></th>
                                <td colspan="3">
                                    <p>충청남도 천안시 동남구 풍세면 풍세로 303</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <div class="__toparea __mt50">
                        <div class="__tit1">
                            <h3>의뢰 내용</h3>
                        </div>
                    </div>
                    
                    <form name="progressfrm" method="post" class="__progress" onsubmit="return frmcheck();">
                        <table class="__tbl-write progress_write1">
                            <caption></caption>
                            <tbody>
                                <tr>
                                    <th scope="row"><span class="impor">시험담당자</span></th>
                                    <td colspan="3"><p>윤주호(041-559-3159)</p></td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="impor">시험목적</span></th>
                                    <td colspan="3">
                                        <input type="text" class="__form1" name="t-cause" id="t-cause" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="impor">시험항목규격</span></th>
                                    <td colspan="3">
                                        <textarea name="t-standard" id="board_content" maxlength="200" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="impor">첨부파일</span></th>
                                    <td colspan="3">
                                        <div class="filebox">
                                            <input class="upload-name" value="첨부파일" placeholder="첨부파일" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)">
                                            <label for="file">파일찾기</label> 
                                            <input type="file" id="file">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="impor">시험 시료명</span></th>
                                    <td colspan="3">
                                        <input type="text" class="__form1" name="t-sampleName" id="t-sampleName" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="impor">시료수</span></th>
                                    <td>
                                        <div class="bbox_">
                                            <input type="text" class="__form1" name="t-sample" id="t-sample" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)" size="10" maxlength="3">개
                                        </div>
                                    </td>
                                    <th scope="row"><span class="impor">시험후 시료처리</span></th>
                                    <td>
                                        <input type="checkbox" name="t-sample2" id=t-sample2>회수
                                    </td>
                                </tr>
                                <tr>
                                	<th scope="row" rowspan="2"><span class="impor">적합성진술</span></th>
                                	<td colspan="3">
                                		<label><input type="radio" name="suitCom" id="suit1" value="0" for="suit1" onclick="">미포함</label>
                                		<label><input type="radio" name="suitCom" id="suit2" value="1" for="suit2" onclick="" checked>포함</label>
                                	</td>
                                </tr>
                                <tr>
                                	<td colspan="3">
                                		<ul class="llist1_ suit-list">
                                			<li>
                                				<p>적용시험항목</p>
                                				<input type="text" name="suit-text" id="suitability1">
                                			</li>
                                			<li>
                                				<p>의사결정규칙</p>
                                				<input type="text" name="suit-text" id="suitability2">
                                			</li>
                                		</ul>
                                	</td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="impor">성적서</span></th>
                                    <td class="pub_" colspan="3">
                                        발행종수
                                        <select name="pubNum" id="pubNum" class="select-a" onchange="func()">
                                            <option value="선택" selected="selected">선택</option>
                                            <option value="1">1부</option>
                                            <option value="2">2부</option>
                                            <option value="3">3부</option>
                                            <option value="4">4부</option>
                                            <option value="5">5부</option>
                                            <option value="6">6부</option>
                                            <option value="7">7부</option>
                                            <option value="8">8부</option>
                                            <option value="9">9부</option>
                                        </select>
                                        ( 한글
                                        <select name="pubNumKo" id="pubNumKo" class="select-b" onchange="func()">
                                            <option value="선택" selected="selected">선택</option>
                                            <option value="0">0부</option>
                                            <option value="1">1부</option>
                                            <option value="2">2부</option>
                                            <option value="3">3부</option>
                                            <option value="4">4부</option>
                                            <option value="5">5부</option>
                                            <option value="6">6부</option>
                                            <option value="7">7부</option>
                                            <option value="8">8부</option>
                                            <option value="9">9부</option>
                                        </select>
                                        , 영문
                                        <select name="pubNumEn" id="pubNumEn" class="select-b" onchange="func()">
                                            <option value="선택" selected="selected">선택</option>
                                            <option value="0">0부</option>
                                            <option value="1">1부</option>
                                            <option value="2">2부</option>
                                            <option value="3">3부</option>
                                            <option value="4">4부</option>
                                            <option value="5">5부</option>
                                            <option value="6">6부</option>
                                            <option value="7">7부</option>
                                            <option value="8">8부</option>
                                            <option value="9">9부</option>
                                        </select>
                                        ) / 표기
                                        <select name="pubNumUse" id="pubNumUse" class="select-a">
                                            <option value="확인용" selected="selected">확인용</option>
                                            <option value="제출용">제출용</option>
                                            <option value="현대차초도품승인용">현대차초도품승인용</option>
                                            <option value="현대차정기검사용">현대차정기검사용</option>
                                            <option value="직접입력">직접입력</option>
                                        </select>
                                        <input type="checkbox" name="KOLAS_YN" value="Y">KOLAS<br>
                                        <span class="fontBlue">※ 전자파시험 신청시 국문, 영문 성적서 중 택1을 원칙으로 하며 필요시 담당자와 사전협의요망</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="impor">성적서용도</span></th>
                                    <td colspan="3">
                                        <label>
                                            <input type="checkbox" name="Prot" value="유럽법규" checked>유럽법규
                                        </label>
                                        <label>
                                            <input type="checkbox" name="Prot" value="국내법규">국내법규
                                        </label>
                                        <label>
                                            <input type="checkbox" name="Prot" value="국내완성차(HKMC)">국내완성차(HKMC)
                                        </label>
                                        <label>
                                            <input type="checkbox" name="Prot" value="국내완성차(그외)">국내완성차(그외)
                                        </label>
                                        <label>
                                            <input type="checkbox" name="Prot" value="해외완성차">해외완성차
                                        </label>
                                        <label>
                                            <input type="checkbox" name="Prot" value="디버깅대책">디버깅대책
                                        </label>
                                        <label>
                                            <input type="checkbox" name="Prot" value="자체확인용">자체확인용
                                        </label><br>
                                        <span class="fontBlue">※ 시험의뢰 성적서 활용 용도를 1개 이상 선택</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" rowspan="2"><span class="impor">성적서발행<br>업체명 선택</span></th>
                                    <td colspan="3">
                                        <label><input type="radio" name="RptCom" onclick="" checked>의뢰업체명</label>
                                        <label><input type="radio" name="RptCom" onclick="">타업체명<!--<a href="javascript:find_cominfo('apr')">(검색)</a>--></label>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <ul class="llist1_">
                                            <li>
                                                <p>업체명(이름)</p>
                                                <input type="text" name="RptName" id="RptName" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)" readonly>
                                            </li>
                                            <li>
                                                <p>사업자(주민)<br>등록번호</p>
                                                <input type="text" name="compa_" id="compa_" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)" readonly>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="impor">배송지주소</span></th>
                                    <td colspan="3">
                                        <input type="text" class="__form1" name="m_addr1" id="m_addr1" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)" readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" rowspan="2"><span class="impor">대금지불<br class="writebr_"> 업체선택</span></th>
                                    <td colspan="3">
                                        <label><input type="radio" name="PayCom" onclick="" checked>신청업체명</label>
                                        <label><input type="radio" name="PayCom" onclick="">타업체명&nbsp;(미 등록업체는 관리자에게 문의바랍니다.)<!--<a href="javascript:find_cominfo('app');">검색</a>--></label>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <ul class="llist2_">
                                            <li>
                                                <p>업체명(이름)</p>
                                                <input type="text" name="" id="com-name" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)" readonly>
                                            </li>
                                            <li>
                                                <p>사업자(주민)<br>등록번호</p>
                                                <input type="text" name="" id="com-num" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)" readonly>
                                            </li>
                                            <li>
                                                <p>계산서담당<br>(이름)</p>
                                                <input type="text" name="CoBname" id="CoBname" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)">
                                            </li>
                                            <li>
                                                <p>계산서발송<br>(메일)</p>
                                                <input type="text" name="CoBmail" id="CoBmail" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)">
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <div class="hadan">
                            <p class="annae">한국자동차연구원 시험검사업무요령 제11조 규정에 의하여 신청합니다.</p>
                            <div class="dateWrap">
                                <div class="date">
                                    <div><p>2022</p><span>년</span></div>
                                    <div><p>04</p><span>월</span></div>
                                    <div><p>07</p><span>일</span></div>
                                </div>
                                <p class="ceo">한국자동차연구원장 귀하</p>
                            </div>
                        </div>
                        
                        <div class="frmbtnbox">
                            <button type="submit" class="frmbtn" id="frmbtn" onclick="fnPrint();">작성완료<i class="axi axi-ion-chevron-right"></i></button>
                            <a href="/" class="cancelbtn">취소하기</a>
                        </div>
                    </form>
                </div>
            </article>
        </section>
    </div>

    <? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/footer.php"; ?>
</body>
<script>
    $("#file").on('change',function(){
        var fileName = $("#file").val();
        $(".upload-name").val(fileName);
    });
</script>
<script language='javascript'>
	function frmcheck(){

		var f = document.progressfrm;

        if($("#t-cause").val() == ""){
            alert("시험 목적을 입력해 주세요.");
            $("#t-cause").focus();
            return false;
        }
        if($("#board_content").val() == ""){
            alert("시험항목 규격을 입력해 주세요.");
            $("#board_content").focus();
            return false;
        }
        if($("#t-sampleName").val() == ""){
            alert("시험 시료명을 입력해 주세요.");
            $("t-sampleName").focus();
            return false;
        }
        if($("#t-sample").val() == ""){
            alert("시료수를 입력해 주세요.");
            $("#t-sample").focus();
            return false;
        }
        if($("select[name=pubNum]").val() == "선택"){
            alert("발행종수를 선택해주세요.");
            $("#pubNum").focus();
            return false;
        }
        if($("select[name=pubNumKo]").val() == "선택"){
            alert("국문용 발행 개수를 선택해 주세요.");
            $("#pubNumKo").focus();
            return false;
        }
        if($("select[name=pubNumEn]").val() == "선택"){
            alert("영문용 발행 개수를 선택해 주세요.");
            $("#pubNumEn").focus();
            return false;
        }
        if($("#CoBname").val() == ""){
            alert("계산서담당자 성함을 입력해 주세요.");
            $("#CoBname").focus();
            return false;
        }
        if($("#CoBmail").val() == ""){
            alert("계산서발송 메일을 입력해 주세요.");
            $("#CoBmail").focus();
            return false;
        }
    }
</script>
<script>
 function func(){
    // id로 접근하여 select 태그를 가져온다.
    var pubNum = document.getElementById("pubNum");
    var pubNumKo = document.getElementById("pubNumKo");
    var pubNumEn = document.getElementById("pubNumEn");

    // value가 숫자로 잘 정리 되어 있기 때문에 value 값을 가져온다.
    var num = punNum.options[pubNum.selectedIndex].value;
    var ko = pubNumKo.options[pubNumKo.selectedIndex].value;
    var en = punNumEn.options[pubNumEn.selectedIndex].value;

    // num = ko + en 이 맞는지 확인 후 같지 않으면 alert을 띄운다.
    if(num == (ko + en)){
        alert("발행 종수의 합계가 맞지 않습니다.");
        return false;
    }
}
</script>
<script>
	$(document).ready(function(){
		$("input:radio[name=suitCom]").click(function(){
			
			if($("input[name=suitCom]:checked").val() == "1"){
				$("input:text[name=suit-text]").attr("disabled",false); // radio 버튼의 value 값이 1이라면 활성화
			}else if($("input[name=suitCom]:checked").val() == "0"){
				$("input:text[name=suit-text]").attr("disabled",true); // radio 버튼의 value 값이 0이라면 비활성화
			}
		});
	});
</script>
</html>
