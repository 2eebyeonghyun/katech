<? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/common.php"; ?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/head.php"; ?>
    
    <div id="svis" style="background:url(../img/service/svis.png)no-repeat center/cover;">
        <div class="inner">
            <h2>성적서 진위 확인</h2>
            <ul class="snb">
                <li class=""><a href="./sub01.php">이용안내</a></li>
                <li class="active"><a href="./sub02.php">성적서 진위 확인</a></li>
                <li class=""><a href="./sub03.php">공지사항</a></li>
                <li class=""><a href="./sub04.php">FAQ</a></li>
                <li class=""><a href="./sub05.php">Q&amp;A</a></li>
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
                <span>성적서 진위 확인</span>
            </div>
        </div>
    </div>
    
    <div id="wrap" class="service02">
        <section>
            <article>
                <div class="inner">
                    <div class="text">
                        <h4 class="headtxt">성적서 진위 확인</h4>
                        <div class="box">
                            <p>성적서 진위확인 번호는 성적서 상단에 있는 <span>접수번호 10자리</span>를 입력하신 후 버튼을 누르시면 됩니다</p>
                        </div>
                    </div>
                </div>
            </article>
            <article>
                <div class="inner">
                    <div class="left">
                        <form name="verifrm" id="verifrm" method="post" onsubmit="return subibtn();">
                        <table class="veritable">
                            <colgroup></colgroup>
                            <tbody>
                                <tr>
                                    <th>
                                        <h3>성적서 번호</h3>
                                        <span><img src="<?=DIR?>/img/ico/check-ico1.png" alt="성적서 번호"></span>
                                    </th>
                                    <td>
                                        <h3>성적서 번호</h3>
                                        <p class="info">작성하신 성적서의 번호를 입력해 주세요.</p>
                                        <input type="text" name="verinum" id="verinum" class="veri_ verinum" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)" placeholder="ex) KTS16000-1">
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <h3>성적서 업체명</h3>
                                        <span><img src="<?=DIR?>/img/ico/check-ico2.png" alt="성적서 업체명"></span>
                                    </th>
                                    <td>
                                        <h3>성적서 업체명</h3>
                                        <p class="info">성적서에 기입하신 업체명을 입력해 주세요.</p>
                                        <input type="text" name="veriname" id="veriname" class="veri_ verinum" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)">
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <h3>접수 일자</h3>
                                        <span><img src="<?=DIR?>/img/ico/check-ico3.png" alt="접수일자"></span>
                                    </th>
                                    <td>
                                        <h3>접수 일자</h3>
                                        <p class="info">작성하신 성적서의 접수 일자를 입력해 주세요.</p>
                                        <input type="text" name="veridate" id="veridate" class="veri_ verinum" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)" maxlength="8" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="ex) 20220413">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <div class="veribtn-box">
                            <button type="submit" class="veribtn">검색</button>
                        </div>
                    </form>
                    </div>
                    <div class="right">
                        <div class="img">
                            <img src="<?=DIR?>/img/service/service-sub02.png" alt="">
                        </div>
                    </div>
                </div>
            </article>
            
            <article id="veri-2" style="display: none;">
                <div class="inner">
                    <h4 class="veri-nae">성적서 내용</h4>
                    <table class="__tbl-list veritable2">
                        <colgroup></colgroup>
                        <tbody>
                            <tr>
                                <th>성적서 번호</th>
                                <td>KTS220513-1</td>
                            </tr>
                            <tr>
                                <th>페이지 수</th>
                                <td>1 페이지</td>
                            </tr>
                            <tr>
                                <th>회사명</th>
                                <td>한커뮤니케이션</td>
                            </tr>
                            <tr>
                                <th>접수일</th>
                                <td>2022년 04월 13일</td>
                            </tr>
                            <tr>
                                <th>대표자</th>
                                <td>LEE BYEONG HYUN</td>
                            </tr>
                            <tr>
                                <th>시험시작일</th>
                                <td>2022년 04월 20일</td>
                            </tr>
                            <tr>
                                <th>주소</th>
                                <td>서울특별시 강남구 테헤란로 152</td>
                            </tr>
                            <tr>
                                <th>시험종료일</th>
                                <td>2022년 04월 21일</td>
                            </tr>
                            <tr>
                                <th>시료명</th>
                                <td>짚 레니게이드 1.3 AWD</td>
                            </tr>
                            <tr>
                                <th>성적서 발급일</th>
                                <td>2022년 04월 28일</td>
                            </tr>
                            <tr>
                                <th>시험규격</th>
                                <td>산업통상자원부고시 제2022-14호</td>
                            </tr>
                            <tr>
                                <th>성적서 용도</th>
                                <td>제출용</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </article>
        </section>
    </div>

    <? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/footer.php"; ?>
</body>
<script language='javascript'>
	function subibtn(){
		var f = document.verifrm;

        if($("#verinum").val() == ""){
            alert("성적서 번호를 입력해주세요.");
            $("#verinum").focus();
            return false;
        }
        if($("#veriname").val() == ""){
            alert("성적서 업체명을 입력해주세요.");
            $("#veriname").focus();
            return false;
        }
        if($("#veridate").val() == ""){
            alert("접수일자를 입력해주세요.");
            $("#veridate").focus();
            return false;
        }
        if($("#veridate").val().length < 8){
            alert("접수일자는 8자리 입니다.");
            $("#veridate").focus();
            return false;
        }
        
        var con = document.getElementById("veri-2");
        
        if(con.style.display == 'none'){
            con.style.display = 'block';
        }else{
            con.style.display = 'none';
        }
        return false;
        
    }
</script>
<script>
    document.title = "성적서 진위 확인 :: KATECH 한국자동차연구원";
</script>
</html>
