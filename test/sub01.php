<? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/common.php"; ?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/head.php"; ?>

    <div id="svis" class="svis2">
        <div class="inner">
            <h2>시험 · 검사 분야 접수</h2>
            <ul class="snb">
                <li class="active"><a href="./sub01.php">시험 · 검사 분야 접수</a></li>
                <li class=""><a href="./sub02.php">검사 분야 접수</a></li>
            </ul>
            <div class="navi">
                <span>Home</span>
                <em>
                    <i class="axi axi-chevron-right"></i>
                </em>
                <span>시험 검사 접수</span>
                <em>
                    <i class="axi axi-chevron-right"></i>
                </em>
                <span>시험 · 검사 분야 접수</span>
            </div>
        </div>
    </div>
   
    <div id="wrap" class="test">
        <section>
            <article>
                <div class="inner">
                    <div class="list-search-form">
                    	<form action="sform" method="get">
                    		<select name="searchType">
                    			<option value="" selected="selected">시험분야</option>
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
                    
                    <form name="test01" id="test01" method="post" class="__test" action="sub01-info.php" onsubmit="Formcheck()">
                        <div class="checklist_">
                            <ul>
                                <li>
                                    <input type="checkbox" name="selectChk" id="checkk" value="selectall" onclick="selectAll(this)">
                                    <label for="checkk">
                                        <div class="chkimg">
                                            <p>전체선택</p>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectChk" id="checkk2" value="A" data-filter="test-A">
                                    <label for="checkk2">
                                        <div class="chkimg">
                                            <p>측정</p>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectChk" id="checkk3" value="B" data-filter="test-B">
                                    <label for="checkk3">
                                        <div class="chkimg">
                                            <p>소음/진동</p>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectChk" id="checkk4" value="C" data-filter="test-C">
                                    <label for="checkk4">
                                        <div class="chkimg">
                                            <p>환경시험</p>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectChk" id="checkk5" value="D" data-filter="test-D">
                                    <label for="checkk5">
                                        <div class="chkimg">
                                            <p>부식시험</p>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectChk" id="checkk6" value="E" data-filter="test-E">
                                    <label for="checkk6">
                                        <div class="chkimg">
                                            <p>전기전자</p>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectChk" id="checkk7" value="F" data-filter="test-F">
                                    <label for="checkk7">
                                        <div class="chkimg">
                                            <p>부품시험</p>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectChk" id="checkk8" value="G" data-filter="test-G">
                                    <label for="checkk8">
                                        <div class="chkimg">
                                            <p>전자파</p>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectChk" id="checkk9" value="H" data-filter="test-H">
                                    <label for="checkk9">
                                        <div class="chkimg">
                                            <p>기기분석</p>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectChk" id="checkk10" value="I" data-filter="test-I">
                                    <label for="checkk10">
                                        <div class="chkimg">
                                            <p>연비 및 배출가스</p>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectChk" id="checkk11" value="J" data-filter="test-J">
                                    <label for="checkk11">
                                        <div class="chkimg">
                                            <p>엔진 출력</p>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectChk" id="checkk12" value="K" data-filter="test-K">
                                    <label for="checkk12">
                                        <div class="chkimg">
                                            <p>주행시험</p>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectChk" id="checkk13" value="L" data-filter="test-L">
                                    <label for="checkk13">
                                        <div class="chkimg">
                                            <p>냉각 및 공조시험</p>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectChk" id="checkk14" value="M" data-filter="test-M">
                                    <label for="checkk14">
                                        <div class="chkimg">
                                            <p>타이어성능시험</p>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectChk" id="checkk15" value="N" data-filter="test-N">
                                    <label for="checkk15">
                                        <div class="chkimg">
                                            <p>CNG부품시험</p>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectChk" id="checkk16" value="O" data-filter="test-O">
                                    <label for="checkk16">
                                        <div class="chkimg">
                                            <p>블랙박스성능시험</p>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectChk" id="checkk17" value="P" data-filter="test-P">
                                    <label for="checkk17">
                                        <div class="chkimg">
                                            <p>ADAS</p>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectChk" id="checkk18" value="Q" data-filter="test-Q">
                                    <label for="checkk18">
                                        <div class="chkimg">
                                            <p>충돌안전성</p>
                                        </div>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="mobile-checklist_">
                            <table class="__tbl-list mobile-checklist_table">
                                <caption></caption>
                                <colgroup>
                                    <col>
                                    <col>
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th scope="col">선택</th>
                                        <th scope="col">시험 · 검사 분야</th>
                                    </tr>
                                </thead>
                                <tbody>
						            <tr>
                                        <td><input type="checkbox" name="selectChk" id=checkk value="selectall" onclick="selectAll(this)"></td>
						        	    <td>전체</td>
						            </tr>
                                    <tr>
                                        <td><input type="checkbox" name="selectChk" id=checkk value="A" data-filter="test-A"></td>
						        	    <td>측정</td>
						            </tr>
                                    <tr>
                                        <td><input type="checkbox" name="selectChk" id=checkk value="B" data-filter="test-B"></td>
						        	    <td>소음/진동</td>
						            </tr>
                                    <tr>
                                        <td><input type="checkbox" name="selectChk" id=checkk value="C" data-filter="test-C"></td>
						        	    <td>환경시험</td>
						            </tr>
                                    <tr>
                                        <td><input type="checkbox" name="selectChk" id=checkk value="D" data-filter="test-D"></td>
						        	    <td>부식시험</td>
						            </tr>
                                    <tr>
                                        <td><input type="checkbox" name="selectChk" id=checkk value="E" data-filter="test-E"></td>
						        	    <td>전기전자</td>
						            </tr>
                                    <tr>
                                        <td><input type="checkbox" name="selectChk" id=checkk value="F" data-filter="test-F"></td>
						        	    <td>부품시험</td>
						            </tr>
                                    <tr>
                                        <td><input type="checkbox" name="selectChk" id=checkk value="G" data-filter="test-G"></td>
						        	    <td>전자파</td>
						            </tr>
                                    <tr>
                                        <td><input type="checkbox" name="selectChk" id=checkk value="H" data-filter="test-H"></td>
						        	    <td>기기분석</td>
						            </tr>
                                    <tr>
                                        <td><input type="checkbox" name="selectChk" id=checkk value="I" data-filter="test-I"></td>
						        	    <td>연비 및 배출가스</td>
						            </tr>
                                    <tr>
                                        <td><input type="checkbox" name="selectChk" id=checkk value="J" data-filter="test-J"></td>
						        	    <td>엔진 출력</td>
						            </tr>
                                    <tr>
                                        <td><input type="checkbox" name="selectChk" id=checkk value="K" data-filter="test-K"></td>
						        	    <td>주행시험</td>
						            </tr>
                                    <tr>
                                        <td><input type="checkbox" name="selectChk" id=checkk value="L" data-filter="test-L"></td>
						        	    <td>냉각 및 공조시험</td>
						            </tr>
                                    <tr>
                                        <td><input type="checkbox" name="selectChk" id=checkk value="M" data-filter="test-M"></td>
						        	    <td>타이어성능시험</td>
						            </tr>
                                    <tr>
                                        <td><input type="checkbox" name="selectChk" id=checkk value="N" data-filter="test-N"></td>
						        	    <td>CNG부품시험</td>
						            </tr>
                                    <tr>
                                        <td><input type="checkbox" name="selectChk" id=checkk value="O" data-filter="test-O"></td>
						        	    <td>블랙박스성능시험</td>
						            </tr>
                                    <tr>
                                        <td><input type="checkbox" name="selectChk" id=checkk value="P" data-filter="test-P"></td>
						        	    <td>ADAS</td>
						            </tr>
                                    <tr>
                                        <td><input type="checkbox" name="selectChk" id=checkk value="Q" data-filter="test-Q"></td>
						        	    <td>충돌안전성</td>
						            </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="frmbtnbox">
                            <button type="submit" class="frmbtn" id="frmbtn">다음항목<i class="axi axi-ion-chevron-right"></i></button>
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
        const checkboxes = document.getElementsByName('selectChk');
        
        checkboxes.forEach((checkbox) => {
            checkbox.checked = selectAll.checked;
        })
    }
</script>
<script>
    document.getElementById('test01').addEventListener('submit',function(e){
        e.preventDefault();
        
        const len = document.querySelectorAll('input[name="selectChk"]:checked').length;
        if(len === 0){
            alert('시험 · 검사 분야를 선택해주세요.');
            
            return;
        }
        this.submit();
    });
</script>
<script>
    document.title = "시험 · 분석 분야 접수 :: KATECH 한국자동차연구원";
</script>
</html>
