<? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/common.php"; ?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/head.php"; ?>

    <div id="svis" style="background:url(../img/service/svis.png)no-repeat center/cover;">
        <div class="inner">
            <h2>Q&amp;A</h2>
            <ul class="snb">
                <li class=""><a href="./sub01.php">이용안내</a></li>
                <li class=""><a href="./sub02.php">성적서 진위 확인</a></li>
                <li class=""><a href="./sub03.php">공지사항</a></li>
                <li class=""><a href="./sub04.php">FAQ</a></li>
                <li class="active"><a href="./sub05.php">Q&amp;A</a></li>
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
                <span>Q&amp;A</span>
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
                    			<option value="tit+" selected="selected">전체</option>
                    			<option value="tit">제목</option>
                    			<option value="">등록자</option>
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
                    
                    <table class="__tbl-list __tbl-list2">
                        <caption></caption>
                        <colgroup>
                            <col>
                            <col>
                            <col>
                            <col>
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="col">번호</th>
                                <th scope="col">제목</th>
                                <th scope="col">등록자</th>
                                <th scope="col">등록일</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
							    <td class="__p">4</td>
							    <td class="subject secret-view">
								    <a href="#secretPopup" class="Popbtn">테스트 Q&amp;A 게시글입니다.<i class="axi axi-lock-outline"></i></a>
								    <div class="pop-layer">
								        <div class="popimg"></div>
								        <div id="secretPopup" class="pop-layer2">
								            <div class="pop-container">
								                <div class="pop-conts">
								                    <form name="secretfrm" id="secretfrm" action="./qna_view.php" method="post" onsubmit="return secretbtn();">
                                                        <div class="topimg">
                                                            <h1 class="lock-img">
                                                                <img src="<?=DIR?>/img/ico/lock-ico.png" alt="">
                                                            </h1>
                                                        </div>
								                        <div class="secretinfo">
								                            <h3>한국자동차연구원</h3>
								                            <p>글을 확인하시려면 비밀번호를 입력해주세요.</p>
								                            <input type="password" name="m_pwd" id="m_pwd" placeholder="Enter your password">
								                        </div>
								                        <div class="btn-r">
								                            <a href="#" class="btn-layerClose">닫기</a>
								                            <button type="submit" style="cursor:pointer;" class="btn-layerClose btn-submit">확인</button>
								                        </div>
								                    </form>
								                </div>
								            </div>
								        </div>
								    </div>
				    			</td>
							    <td>이***</td>
							    <td class="date">2022.03.08</td>
						    </tr>
						    <tr>
							    <td class="__p">3</td>
							    <td class="subject resu_">
								    <a href="./qna_view.php"><span><img src="<?=DIR?>/img/ico/re-ico.gif" alt=""></span>테스트 Q&amp;A 게시글입니다.<i class="axi axi-lock-outline"></i></a>
				    			</td>
							    <td>관리자</td>
							    <td class="date">2022.03.08</td>
						    </tr>
						    <tr>
							    <td class="__p">2</td>
							    <td class="subject">
								    <a href="./qna_view.php">테스트 Q&amp;A 게시글입니다.</a>
				    			</td>
							    <td>이***</td>
							    <td class="date">2022.03.08</td>
						    </tr>
                            <tr>
							    <td class="__p">1</td>
							    <td class="subject">
								    <a href="./qna_view.php">테스트 Q&amp;A 게시글입니다.</a>
				    			</td>
							    <td>이***</td>
							    <td class="date">2022.03.08</td>
						    </tr>
                        </tbody>
                    </table>
                    
                    <div class="__botarea">
					    <div class="cen">
					    	<?php include '../inc/paging.php'; ?>
					    </div>
				    </div>
               
                    <div class="writelinkbox_">
                        <a href="notice_write.php">글작성</a>
                    </div>
                </div>
            </article>
        </section>
    </div>

    <? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/footer.php"; ?>
</body>
<script>
$('.Popbtn').click(function(){
        var $href = $(this).attr('href');
        layer_popup($href);
    });
    function layer_popup(el){

        var $el = $(el);    //레이어의 id를 $el 변수에 저장
        var isDim = $el.prev().hasClass('popimg'); //dimmed 레이어를 감지하기 위한 boolean 변수

        isDim ? $('.pop-layer').fadeIn() : $el.fadeIn();

        var $elWidth = ~~($el.outerWidth()),
            $elHeight = ~~($el.outerHeight()),
            docWidth = $(document).width(),
            docHeight = $(document).height();

        // 화면의 중앙에 레이어를 띄운다.
        

        $el.find('a.btn-layerClose').click(function(){
            isDim ? $('.pop-layer').fadeOut() : $el.fadeOut(); // 닫기 버튼을 클릭하면 레이어가 닫힌다.
            return false;
        });

        $('.layer .popimg').click(function(){
            $('.pop-layer').fadeOut();
            return false;
        });

    }
    
    function secretbtn() {
        var f = document.secretfrm;
        
        if( $.trim($("#m_pwd").val()) == '' ){
			alert("비밀번호 입력해주세요.");
			$("#m_pwd").select();
			return false;
		}
    }
</script>
<script>
    document.title = "Q&A :: KATECH 한국자동차연구원";
</script>
</html>
