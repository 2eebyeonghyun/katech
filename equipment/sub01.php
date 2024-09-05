<? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/common.php"; ?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/head.php"; ?>

    <div id="svis" class="svis3">
        <div class="inner">
            <h2>장비 안내</h2>
            <ul class="snb">
                <li class="active"><a href="./sub01.php">장비 안내</a></li>
                <li class=""><a href="./sub02.php">장비 현황</a></li>
                <li class=""><a href="./sub03.php">장비 자료</a></li>
            </ul>
            <div class="navi">
                <span>Home</span>
                <em>
                    <i class="axi axi-chevron-right"></i>
                </em>
                <span>시험 장비</span>
                <em>
                    <i class="axi axi-chevron-right"></i>
                </em>
                <span>장비 안내</span>
            </div>
        </div>
    </div>
   
    <div id="wrap" class="eqipment1">
        <section>
            <article>
                <div class="inner">
                    <div class="list-search-form">
                    	<form action="sform" method="get">
                    		<select name="searchType">
                    			<option value="tit+subj" selected="selected">전체</option>
                    			<option value="">장비명</option>
                    			<option value="">담당자</option>
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

                    <table class="__tbl-list equipment_table">
                        <caption></caption>
                        <colgroup>
                            <col>
                            <col>
                            <col>
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="col">이미지</th>
                                <th scope="col">장비명</th>
                                <th scope="col">담당자</th>
                            </tr>
                        </thead>
                        <tbody>
						    <tr>
                                <td class="__p"><a href="./equipment_view.php"><img src="<?=DIR?>/img/equipment/equipmentimg.jpg" alt="장비 이미지"></a></td>
							    <td class="subject">
								    <a href="./equipment_view.php">
								        <p class="ko">구조/충돌 해석 시스템</p>
								        <p class="en">Structure/Crash Analysis System</p>
								    </a>
				    			</td>
							    <td class="name">이현철 (062-960-9261)</td>
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
    document.title = "장비 안내 :: KATECH 한국자동차연구원";
</script>
</html>
