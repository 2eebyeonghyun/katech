<? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/common.php"; ?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/head.php"; ?>

    <div id="svis" class="svis2">
        <div class="inner">
            <h2>검사 분야 접수</h2>
            <ul class="snb">
                <li class=""><a href="./sub01.php">시험 · 검사 분야 접수</a></li>
                <li class="active"><a href="./sub02.php">검사 분야 접수</a></li>
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
                <span>검사 분야 접수</span>
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
                    
                    <form name="test02" id="test02" method="post" class="__test" action="sub02-info.php" onsubmit="Formcheck()">
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
                                    <input type="checkbox" name="selectChk" id="checkk2-1" value="O" data-filter="test-A">
                                    <label for="checkk2-1">
                                        <div class="chkimg">
                                            <p>타이어(KC인증)</p>
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
                                        <th scope="col">검사 분야 접수</th>
                                    </tr>
                                </thead>
                                <tbody>
						            <tr>
                                        <td><input type="checkbox" name="selectChk" id=checkk2 value="selectall" onclick="selectAll(this)"></td>
						        	    <td>전체</td>
						            </tr>
                                    <tr>
                                        <td><input type="checkbox" name="selectChk" id=checkk2 value="A" data-filter="test-A"></td>
						        	    <td>타이어(KC인증)</td>
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
    document.getElementById('test02').addEventListener('submit',function(e){
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
    document.title = "검사 분야 접수 :: KATECH 한국자동차연구원";
</script>
</html>
