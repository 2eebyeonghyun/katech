<? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/common.php"; ?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/head.php"; ?>

    <div id="svis" class="svis4">
        <div class="inner">
            <h2>시험 현황</h2>
            <ul class="snb">
                <li class=""><a href="./sub01.php">접수 현황</a></li>
                <li class="active"><a href="./sub02.php">시험 현황</a></li>
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
                <span>시험 현황</span>
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
                                    <a href="#none">테스트 접수현황입니다.</a>
                                </td>
                                <td>￦7,282,000</td>
                                <td><p class="progress_type clear_type">시험완료</p></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>KTS220546</td>
                                <td>2022.03.18</td>
                                <td class="subject">
                                    <a href="#none">테스트 접수현황입니다.</a>
                                </td>
                                <td>￦7,282,000</td>
                                <td><p class="progress_type progress_type4">시험중</p></td>
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
    document.title = "시험 현황 :: KATECH 한국자동차연구원";
</script>
</html>
