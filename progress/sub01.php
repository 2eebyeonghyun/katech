<? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/common.php"; ?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/head.php"; ?>

    <div id="svis" class="svis4">
        <div class="inner">
            <h2>접수 현황</h2>
            <ul class="snb">
                <li class="active"><a href="./sub01.php">접수 현황</a></li>
                <li class=""><a href="./sub02.php">시험 현황</a></li>
                <li class=""><a href="./sub03.php">시험 취소 신청</a></li>
                <li class=""><a href="./sub04.php">거래명세서</a></li>
            </ul>
            <div class="navi">
                <span>Home</span>
                <em>
                    <i class="axi axi-chevron-right"></i>
                </em>
                <span>진행 현황</span>
                <em>
                    <i class="axi axi-chevron-right"></i>
                </em>
                <span>접수 현황</span>
            </div>
        </div>
    </div>

    <div id="wrap" class="progress">
        <section>
            <article>
                <div class="inner">
                    <div class="list-search-form">
                    	<form action="sform" method="get">
                    		<select name="searchType">
                    			<option value="tit+subj" selected="selected">제목 + 내용</option>
                    			<option value="tit">제목</option>
                    			<option value="subj">내용</option>
                    		</select>
                    		<div>
                    			<label for></label>
                    			<input type="text" name="searchText" value>
                    			<button type="submit">
                    				<span>검색</span>
                    			</button>
                    		</div>
                    	</form>
                    </div>

                    <table class="__tbl-list progress_table1">
                        <caption></caption>
                        <colgroup>
                            <col>
                            <col>
                            <col>
                            <col>
                            <col>
                            <col>
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="col">접수번호</th>
                                <th scope="col">신청일</th>
                                <th scope="col">목적</th>
                                <th scope="col">금액(VAT)</th>
                                <th scope="col">상태</th>
                                <th scope="col">기타</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>KTS220549</td>
                                <td>2022.03.18</td>
                                <td class="subject">
                                    <a href="<?=DIR?>/progress/progress_view.php">테스트 접수현황입니다.</a>
                                </td>
                                <td>￦7,282,000</td>
                                <td>
                                    <p class="progress_type progress_type1">수락</p>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>KTS220548</td>
                                <td>2022.03.18</td>
                                <td class="subject">
                                    <a href="<?=DIR?>/progress/progress_view.php">테스트 접수현황입니다.</a>
                                </td>
                                <td>￦7,282,000</td>
                                <td>
                                    <p class="progress_type progress_type2">작성완료</p>
                                </td>
                                <td>
                                    <a href="#secretPopup" class="cancle">취소하기</a>
                                    <div class="pop-layer">
                                        <div class="popimg"></div>
                                        <div id="secretPopup" class="canclebox">
                                            <div class="pop-container">
                                                <div class="pop-conts">
                                                    <div class="secretinfo">
                                                        <p>접수 신청을 취소하시겠습니까?</p>
                                                    </div>
                                                    <div class="btn-r">
                                                        <button type="submit" style="cursor:pointer;" class="btn-layerClose">확인</button>
                                                        <a href="#" class="btn-layerClose">닫기</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>KTS220547</td>
                                <td>2022.03.18</td>
                                <td class="subject">
                                    <a href="<?=DIR?>/progress/progress_view.php">테스트 접수현황입니다.</a>
                                </td>
                                <td>￦7,282,000</td>
                                <td>
                                    <p class="progress_type progress_type3">견적확인</p>
                                </td>
                                <td>
                                    <a href="#none" class="cancle">취소하기</a>
                                </td>
                            </tr>
                            <tr>
                                <td>KTS220546</td>
                                <td>2022.03.18</td>
                                <td class="subject">
                                    <a href="<?=DIR?>/progress/progress_view.php">테스트 접수현황입니다.</a>
                                </td>
                                <td>￦7,282,000</td>
                                <td>
                                    <p class="progress_type progress_type4">시험중</p>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>KTS220545</td>
                                <td>2022.03.18</td>
                                <td class="subject">
                                    <a href="<?=DIR?>/progress/progress_view.php">테스트 접수현황입니다.</a>
                                </td>
                                <td>￦7,282,000</td>
                                <td>
                                    <p class="progress_type clear_type">시험완료</p>
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="__botarea">
                        <div class="cen">
                            <?php include '../inc/paging.php'; ?>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </div>

    <? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/footer.php"; ?>
</body>
<script>
    $('.cancle').click(function() {
        var $href = $(this).attr('href');
        layer_popup($href);
    });

    function layer_popup(el) {

        var $el = $(el); //레이어의 id를 $el 변수에 저장
        var isDim = $el.prev().hasClass('popimg'); //dimmed 레이어를 감지하기 위한 boolean 변수

        isDim ? $('.pop-layer').fadeIn() : $el.fadeIn();

        var $elWidth = ~~($el.outerWidth()),
            $elHeight = ~~($el.outerHeight()),
            docWidth = $(document).width(),
            docHeight = $(document).height();

        // 화면의 중앙에 레이어를 띄운다.


        $el.find('a.btn-layerClose').click(function() {
            isDim ? $('.pop-layer').fadeOut() : $el.fadeOut(); // 닫기 버튼을 클릭하면 레이어가 닫힌다.
            return false;
        });

        $('.layer .popimg').click(function() {
            $('.pop-layer').fadeOut();
            return false;
        });

    }
</script>
<script>
    document.title = "접수 현황 :: KATECH 한국자동차연구원";
</script>
</html>
