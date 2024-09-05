<? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/common.php"; ?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/head.php"; ?>

    <div id="svis" class="svis4">
        <div class="inner">
            <h2>의뢰 신청서 확인</h2>
            <div class="navi">
                <span>Home</span>
                <em>
                    <i class="axi axi-chevron-right"></i>
                </em>
                <span>진행 현황</span>
                <em>
                    <i class="axi axi-chevron-right"></i>
                </em>
                <span>의뢰 신청서 확인</span>
            </div>
        </div>
    </div>

    <div id="wrap" class="test testView">
        <section>
            <article>
                <div class="inner">
                    <div class="printArea">
                        <a href="javascript:print1();" class=""><i class="axi axi-print"></i>견적서</a>
                        <a href="javascript:print2();" class=""><i class="axi axi-local-atm"></i>거래명세서</a>
                    </div>
                   
                    <div class="__toparea __mt50 __toparea-first">
                        <div class="__tit1">
                            <h3>접수번호</h3>
                        </div>
                    </div>

                    <div class="progress_number">
                        <p name="t-Num">KTS2200713</p>
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
                                    <p>허남용</p>
                                </td>
                                <th scope="row"><span class="impor">사업자(주민)번호</span></th>
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

                    <table class="__tbl-write progress_write1">
                        <caption></caption>
                        <tbody>
                            <tr>
                                <th scope="row"><span class="impor">시험담당자</span></th>
                                <td colspan="3">
                                    <p>윤주호(041-559-3159) 지역코드:01</p>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><span class="impor">시험목적</span></th>
                                <td colspan="3">
                                    테스트 시험목적글입니다.
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><span class="impor">시험항목규격</span></th>
                                <td colspan="3">
                                    1. 시험항목규격 내용 #1<br>
                                    2. 시험항목규격 내용 #2<br>
                                    3. 시험항목규격 내용 #3<br><br>
                                    회사 내부 정책으로 인한 첨부 불가 : 메일 주소 회신 시 메일 송부
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
                                    테스트 시험 시료명입니다.
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><span class="impor">시료수</span></th>
                                <td>
                                    <div class="bbox_">1개</div>
                                </td>
                                <th scope="row"><span class="impor">시험후 시료처리</span></th>
                                <td>회수</td>
                            </tr>
                            <tr>
                                <th scope="row"><span class="impor">성적서</span></th>
                                <td class="pub_" colspan="3">
                                    발행종수: 1부(한글: 1종, 영문: 0종) / 용도: 확인용 (20,000원/부)
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><span class="impor">성적서명의</span></th>
                                <td colspan="3">의뢰인소속직장명의</td>
                            </tr>
                            <tr>
                                <th scope="row"><span class="impor">배송지주소</span></th>
                                <td colspan="3">충청남도 천안시 동남구 풍세면 풍세로 303</td>
                            </tr>
                            <tr>
                                <th scope="row" rowspan="2"><span class="impor">대금지불<br class="writebr_"> 업체선택</span></th>
                                <td colspan="3">업체명(이름): 한커뮤니케이션</td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <ul class="llist2_">사업자 등록번호: 12121212
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <div class="__toparea __mt50">
                        <div class="__tit1">
                            <h3>견적내용</h3>
                        </div>
                    </div>
                    
                    <table class="__tbl-write progress_write1 quotation">
                        <caption></caption>
                        <tbody>
                            <tr>
                                <th scope="row"><span class="impor">견적일자</span></th>
                                <td colspan="2">
                                    <form name="formdate" action="" method="post" id="formdate">
                                        <div class="inputbox">
                                            <div><input type="text" name="year" class="" id="year" size="4" maxlength="4" value="2022"><span class="lat">년</span></div>
                                            <div><input type="text" name="month" class="" id="month" size="2" maxlength="2" value="04"><span class="lat">월</span></div>
                                            <div><input type="text" name="day" class="" id="day" size="2" maxlength="2" value="07"><span class="lat">일</span></div>
                                        </div>
                                        <input type="submit" name="btn" id="btn" value="수정">
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><span class="impor">예상시험일정</span></th>
                                <td colspan="2">
                                    2022.04.07 ~ 2022.05.06
                                </td>
                            </tr>
                            <tr>
                                <table class="__tbl-write progress_write1 quotation-info">
                                    <colgroup>
                                        <col>
                                        <col>
                                    </colgroup>
                                    <thead>
                                        <th>시험내용</th>
                                        <th>금 액</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>성적서</td>
                                            <td>￦20,000</td>
                                        </tr>
                                        <tr>
                                            <td>소음측정</td>
                                            <td>￦500,000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </tr>
                            <tr>
                                <table class="__tbl-write progress_write1 quotation-info2">
                                    <tbody>
                                        <tr>
                                            <th>할인율</th>
                                            <td>0%</td>
                                            <th>부가세</th>
                                            <td>￦52,000</td>
                                            <th>소 계</th>
                                            <td>￦520,000</td>
                                        </tr>
                                        <tr>
                                            <th>총합계</th>
                                            <td colspan="5" class="total">￦572,000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </tr>
                        </tbody>
                    </table>

                   <div class="__toparea __mt50">
                        <div class="__tit1 _red">
                            <h3>취소/부결 사유</h3>
                        </div>
                    </div>
                    
                    <table class="__tbl-write progress_write1 quotation">
                        <tbody>
                            <tr>
                                <th>취소/부결 사유</th>
                                <td>123</td>
                            </tr>
                        </tbody>
                    </table>
                   
                    <div class="frmbtnbox">
                        <a href="/" class="">확인</a>
                        <a href="#tax-layer2" class="taxbtn">수락</a>
                        <a href="" class="">취소</a>
                    </div>
                    
                    <div class="tax-bill">
                        <div class="tax-layer">
                            <div class="popimg"></div>
                            <div id="tax-layer2" class="tax-layer2">
                                <div class="tax-container">
                                    <div class="tax-cont">
                                        <form name="taxfrm" id="taxfrm" action="" method="post">
                                            <table class="tax-table">
                                                <colgroup></colgroup>
                                                <tbody>
                                                    <tr>
                                                        <th>신청 여부</th>
                                                        <td>
                                                            <input type="radio" name="tax-select" id="tax-Y" value="Y"><label for="tax-Y">발행</label>
                                                            <input type="radio" name="tax-select" id="tax-N" value="N"><label for="tax-N">미발행</label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>발행 시기</th>
                                                        <td><input type="date"></td>
                                                    </tr>
                                                    <tr>
                                                        <th>미발행 시 사유 작성</th>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="btn-r">
								                <button type="submit" style="cursor:pointer;" class="btn-layerClose">확인</button>
								                <a href="#" class="btn-layerClose">닫기</a>
								            </div>
                                        </form>
                                    </div>
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
    $("#file").on('change',function(){
        var fileName = $("#file").val();
        $(".upload-name").val(fileName);
    });
</script>
<script>
    function print1(){
        myWindow=window.open('<?=DIR?>/progress/print1.php','','width=820,height=900');
        myWindow.focus();
        myWindow.print();
    }
    function print2(){
        myWindow=window.open('<?=DIR?>/progress/print.php','','width=820,height=900');
        myWindow.focus();
        myWindow.print();
    }
</script>
<script>
$('.taxbtn').click(function(){
        var $href = $(this).attr('href');
        layer_popup($href);
    });
    function layer_popup(el){

        var $el = $(el);    //레이어의 id를 $el 변수에 저장
        var isDim = $el.prev().hasClass('popimg'); //dimmed 레이어를 감지하기 위한 boolean 변수

        isDim ? $('.tax-layer').fadeIn() : $el.fadeIn();

        var $elWidth = ~~($el.outerWidth()),
            $elHeight = ~~($el.outerHeight()),
            docWidth = $(document).width(),
            docHeight = $(document).height();

        // 화면의 중앙에 레이어를 띄운다.
        

        $el.find('a.btn-layerClose').click(function(){
            isDim ? $('.tax-layer').fadeOut() : $el.fadeOut(); // 닫기 버튼을 클릭하면 레이어가 닫힌다.
            return false;
        });

        $('.layer .popimg').click(function(){
            $('.tax-layer').fadeOut();
            return false;
        });

    }
</script>
</html>
