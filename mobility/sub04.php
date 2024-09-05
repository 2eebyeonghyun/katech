<? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/common.php"; ?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/head.php"; ?>

    <div id="svis" class="svis5">
        <div class="inner">
            <h2>인증현황</h2>
            <ul class="snb">
                <li class=""><a href="./sub01.php">소개</a></li>
                <li class=""><a href="./sub02.php">주요업무</a></li>
                <li class=""><a href="./sub03.php">조직도</a></li>
                <li class="active"><a href="./sub04.php">인증현황</a></li>
                <li class=""><a href="./sub05.php">오시는 길</a></li>
            </ul>
            <div class="navi">
                <span>Home</span>
                <em>
                    <i class="axi axi-chevron-right"></i>
                </em>
                <span>모빌리티 시험인증본부</span>
                <em>
                    <i class="axi axi-chevron-right"></i>
                </em>
                <span>인증현황</span>
            </div>
        </div>
    </div>

    <div id="wrap" class="notice">
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

                    <table class="__tbl-list">
                        <caption></caption>
                        <colgroup>
                            <col>
                            <col>
                            <col>
                            <col>
                            <col>
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="col">번호</th>
                                <th scope="col">제목</th>
                                <th scope="col">첨부</th>
                                <th scope="col">등록일</th>
                                <th scope="col">조회</th>
                            </tr>
                        </thead>
                        <tbody>
						    <tr>
							    <td class="__p">1</td>
							    <td class="subject">
								    <a href="<?=DIR?>/mobility/notice_view.php">테스트 페이지입니다.</a>
				    			</td>
							    <td class="file"><i class="axi axi-file-text"></i></td>
							    <td class="date">2022.03.08</td>
							    <td class="__p">28</td>
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
    document.title = "인증현황 :: KATECH 한국자동차연구원";
</script>
</html>
