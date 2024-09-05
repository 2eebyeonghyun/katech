<? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/common.php"; ?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/head.php"; ?>

    <div id="svis" style="background:url(../img/service/svis.png)no-repeat center/cover;">
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
                    <div class="equipment_title">
					    <h3>장비 상세정보</h3>
				    </div>
                   
                    <div class="equipment_info">
					    <div class="eq_img">
					    	<img src="<?=DIR?>/img/equipment/equipmentimg.jpg" alt="장비 이미지">
					    </div>
					    <div class="eq_info">
					    	<p class="eq_title">
					    		구조/충돌 해석 시스템 (Structure/Crash Analysis System)
					    	</p>
					    	<ul class="info_list">
					    		<li><strong>장비명(국문)</strong>구조/충돌 해석 시스템</li>
					    		<li><strong>장비명(영문)</strong>Structure/Crash Analysis System</li>
					    		<li><strong>모델명</strong>ABAQUS</li>
					    		<li><strong>제조사</strong>Dassault Systemes</li>
					    		<li><strong>공급사</strong>(주)브이이엔지</li>
					    		<li><strong>관리자</strong>이현철(TEL. 062-960-9261)</li>
					    	</ul>
					    </div>
				    </div>
               
                    <div class="equipment_info2">
                        <table class="__tbl-list equipment_view">
                            <caption></caption>
                            <colgroup>
                                <col>
                                <col>
                            </colgroup>
                            <tbody>
						        <tr>
						    	    <th>규격/사양</th>
						    	    <td>구조/진동/동역학/충돌 해석 시스템 - 피로내구 해석 시스템 - Laptop Workstation</td>
						        </tr>
                                <tr>
                                    <th>활용분야/용도</th>
                                    <td>
                                        <ul>
                                            <li>
                                                <span>1)</span><p>SIMULIA Abaqus/CAE Extended</p>
                                                <ul>
                                                    <li><span>·</span><p>Pre/Post Processor (전후처리기)</p></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span>2)</span><p>SIMULIA Abaqus Extended Tokens</p>
                                                <ul>
                                                    <li><span>·</span><p>General Analyses (범용 해석)</p></li>
                                                    <li><span>·</span><p>Linear Perturbation Analyses (선형 섭동 해석)</p></li>
                                                    <li><span>·</span><p>Explicit Analysis (외연적 해석)</p></li>
                                                    <li><span>·</span><p>fe-safe (내구 수명 예측)</p></li>
                                                    <li><span>·</span><p>Isight (설계 자동화와 최적화)</p></li>
                                                    <li><span>·</span><p>Tosca</p></li>
                                                </ul>
                                            </li>
                                            <li><span>3)</span><p>Abaqus Composite Modeler</p></li>
                                            <li><span>4)</span><p>nCode DesignLife Auto Body/Chassis Package</p></li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="pagemovebox">
                        <ul>
                            <li>
                                <span>이전장비<i class="axi axi-angle-up"></i></span>
                                <a href="#none">해석데이터 전후처리기</a>
                            </li>
                            <li>
                                <span>다음장비<i class="axi axi-angle-down"></i></span>
                                <a href="#none">유동해석 프로그램</a>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="_btnarea">
                        <div class="_btn">
                            <a href="javascript:history.back();" class="listbtn">목록</a>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </div>

    <? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/footer.php"; ?>
</body>

</html>
