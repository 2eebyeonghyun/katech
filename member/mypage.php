<? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/common.php"; ?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/head.php"; ?>

    <div id="svis" class="svis2">
        <div class="inner">
            <h2>마이페이지</h2>
<!--
            <ul class="snb">
                <li class="active"><a href="./mypage.php">회원정보수정</a></li>
                <li class=""><a href="./mypage2.php">고객서비스 내역</a></li>
            </ul>
-->
            <div class="navi">
                <span>Home</span>
                <em>
                    <i class="axi axi-chevron-right"></i>
                </em>
                <span>마이페이지</span>
                <em>
                    <i class="axi axi-chevron-right"></i>
                </em>
                <span>회원정보수정</span>
            </div>
        </div>
    </div>
   
    <div id="wrap" class="member">
        <section>
            <article>
                <div class="inner">
                    <div class="__toparea-first __mt50">
                        <div class="__tit1">
                            <h3>회원정보수정</h3>
                        </div>
                    </div>
                   
                    <div class="mypageinfobox_">
                        <h5>참고사항</h5>
                        <p>회원가입을 위해서는 <span>가입자의 직장정보가 데이터베이스에 등록되어 있는지 아래의 검색을 이용하여 가장 먼저 확인</span>하셔야 합니다. 업체정보가 기존에 등록되어 있을 경우에는 나머지 필수 항목을 기입한 후 즉시 회원가입을 하실 수 있지만, <span>등록되어 있지 않을 경우에는 업체정보관리자에게 사업자등록증을 메일로 송부</span>하여 업체정보 등록 처리 완료 후에 가입 절차를 밟으셔야 합니다.</p>
                        <p class="tip">※ 일부 개인의 경우에는 업체정보관리자와의 사전 협의를 통해서 주민등록번호 등의 정보를 업체정보 데이터베이스에 우선 등록하셔야 합니다.</p>
                    </div>
                   
                    <form name="signupform" id="signupform" method="post" action="" onsubmit="return frmcheck();">
                        <!--<table class="__tbl-write company_write">
                            <caption></caption>
                            <tbody>
                                <tr>
                                    <th scope="row"><span class="impor">직장정보</span></th>
                                    <td>
                                        <div class="compadiv_">
                                            <a href="javascript:find_cominfo('mem');" class="companySearchbtn">검색</a>
                                            <input type="text" class="__form1 compa_" style="width:300px;" name="m_compa" value="3128204676">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>-->
                       
                        <table class="__tbl-write company_write">
                            <caption></caption>
                            <tbody>
                                <tr>
                                    <th scope="row"><span class="impor">업체명</span></th>
                                    <td>
                                        <p>한국자동차연구원</p>
                                        <span class="dib fs_11" id="commentId">* 수정은 고객센터로 문의</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="impor">대표자명</span></th>
                                    <td>
                                        <p>나승식</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="impor">사업자번호</span></th>
                                    <td>
                                        <p>3128204676</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="impor">업종(종목)</span></th>
                                    <td>
                                        <p>제조업</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="impor">전화번호</span></th>
                                    <td>
                                        <p>043-000-0000</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="impor">팩스번호</span></th>
                                    <td>
                                        <p>043-000-0000</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="impor">주 소</span></th>
                                    <td>
                                        <p>충청남도 천안시 동남구 풍세면 풍세로 303</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="__tbl-write join_write">
                            <caption></caption>
                            <tbody>
                                <tr>
                                    <th scope="row"><span class="impor">성명</span></th>
                                    <td>
                                        <p>이병현</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="impor">등록번호</span></th>
                                    <td>
                                        <p>312820*******</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="impor">사업자등록증</span></th>
                                    <td>
                                        <div class="filebox">
                                            <input class="upload-name" style="width:300px;" value="첨부파일" placeholder="첨부파일" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)">
                                            <label for="file">파일찾기</label> 
                                            <input type="file" id="file">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="impor">아이디</span></th>
                                    <td>
                                        <p>hannet1004</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="impor">비밀번호</span></th>
                                    <td>
                                        <input type="password" class="__form1" style="width:300px;" name="m_passwd1" id="m_passwd1" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)" value="hannnet1004">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="impor">비밀번호<br class="writebr_"> 확인</span></th>
                                    <td>
                                        <input type="password" class="__form1" style="width:300px;" name="m_passwd2" id="m_passwd2" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)" value="hannnet1004">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="impor">휴대폰</span></th>
                                    <td>
                                        <input type="text" class="__form1" id="m_tel" id="m_tel" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)" maxlength="11" onkeypress="return checkNumber(event)" style="width: 300px;" value="01041236154">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="impor">E-mail</span></th>
                                    <td>
                                        <input type="text" class="__form1" id="m_email" id="m_email" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)" style="width: 300px;" value="wada0012@naver.com">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="impor">주소</span></th>
                                    <td>
                                        <div class="locadiv_">
                                            <input type="text" class="__form1 loca_" style="width:300px;" name="m_zip" id="cube_postcode" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)" value="31214">
                                            <a href="javascript:cube_execDaumPostcode();"><button type="button" class="locationbtn">우편번호 검색</button></a>
                                        </div>
                                        <div class="__mt10">
                                            <ul class="__dtbl" style="max-width:800px;">
                                                <li class="td"><input type="text" class="__form1" name="m_addr1" id="m_addr1" value="충남 천안시 동남구 풍세면 풍세로 303"></li>
                                                <li class="td tac" style="width:5px;"></li>
                                                <li class="td"><input type="text" class="__form1" name="m_addr2" id="m_addr2" value="한국자동차연구원"></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="__botarea">
                            <div class="cen">
                                <button type="submit" class="joinbtn">수정완료</button>
                                <a href="#none" class="cancelbtn">취소</a>
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
    document.title = "마이페이지 :: KATECH 한국자동차연구원";
</script>
</html>
