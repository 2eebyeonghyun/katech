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
                    <form action="" method="post" name="wrtfrm" id="wrtfrm" onsubmit="return subibtn();">
                        <table class="__tbl-write">
                            <tbody>
                                <tr>
                                    <th scope="col">제목</th>
                                    <td colspan="3">
                                        <input type="text" class="__form1" name="m_title" id="m_title" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col">등록자</th>
                                    <td>
                                        <input type="text" class="__form1" name="m_name" id="m_name" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)">
                                    </td>
                                    <th scope="col">이메일</th>
                                    <td>
                                        <input type="text" class="__form1" id="m_email" id="m_email" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col">연락처</th>
                                    <td>
                                        <input type="text" class="__form1" id="m_tel" id="m_tel" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)" maxlength="11" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                    </td>
                                    <th scope="row">답변자<br class="writebr_"> 선택</th>
                                    <td>
                                        <select name="m_ans" class="__form1" id="m_ans">
                                            <option value="선택" selected="selected">선택</option>
                                            <option value="김기환|">(수소연료전지)기울기 안정성 시험(김기환)</option>
                                            <option value="김기환|">(수소연료전지)방풍 시험(김기환)</option>
                                            <option value="김기환|">(수소연료전지)부하 변동 특성 시험(김기환)</option>
                                            <option value="김기환|">(수소연료전지)온습도 및 불순물 환(김기환)</option>
                                            <option value="김기환|">(수소연료전지)진동 시험(김기환)</option>
                                            <option value="고윤기|ygkim@katec.re.kr">2축 고무부시 내구시험(고윤기)</option>
                                            <option value="현효진|jjyang@katech.re.kr">3차원 비교 분석 (품질검사)(현효진)</option>
                                            <option value="김도현|">3차원 좌표 측정(김도현)</option>
                                            <option value="김도현|dhkim@katech.re.kr">3차원 좌표 측정, 3D 스캔(김도현)</option>
                                            <option value="이상훈|">3차원 측정(이상훈)</option>
                                            <option value="이태희|thlee@katech.re.kr">3차원 형상 데이터 취득(이태희)</option>
                                            <option value="김태림|leedw@katech.re.kr">3차원측정(대구)(김태림)</option>
                                            <option value="김진평|dokim@katech.re.kr">3차원측정(천안)(김진평)</option>
                                            <option value="이태희|thlee@katech.re.kr">3축 내구 시험 평가(이태희)</option>
                                            <option value="이현철|">3D 스캔 및 3D 쾌속조형(이현철)</option>
                                            <option value="김도현|dhkim@katech.re.kr">3D 프린팅(김도현)</option>
                                            <option value="임현택|htlim@katech.re.kr">3D 형상 분석(임현택)</option>
                                            <option value="임양순|yslim@katech.re.kr">4륜 독립 차대동력계 기반 주행특성(임양순)</option>
                                            <option value="김태림|leedw@katech.re.kr">4X4 섀시 다이나모미터 기반 주행(김태림)</option>
                                            <option value="김태림|leedw@katech.re.kr">4X4 섀시 다이나모미터 연계 자동(김태림)</option>
                                            <option value="강종수|ykseo@katech.re.kr">6자유도 진동시험(강종수)</option>
                                            <option value="조성현|sjkwag@katech.re.kr">가상 드라이빙 시뮬레이터(조성현)</option>
                                            <option value="조성현|sjkwag@katech.re.kr">가상주행기반 V2X 통신 시뮬레이터(조성현)</option>
                                            <option value="김도현|">가상환경 디자인 및 설계 검증(김도현)</option>
                                            <option value="이건학|ghlee@katech.re.kr">가속수명시험(HALT)(이건학)</option>
                                            <option value="남충우|">가스 리크디텍터(남충우)</option>
                                            <option value="남택송|tsnam@katech.re.kr">가스부식(SO2/H2S)(남택송)</option>
                                            <option value="김성옥|sokim@katech.re.kr">가스부식시험(SO2, NOX)(김성옥)</option>
                                            <option value="성창현|songhs@katech.re.kr">가혹도 측정 시험(성창현)</option>
                                            <option value="윤정환|jhyoon@katech.re.kr">간이 중금속 분석(윤정환)</option>
                                            <option value="최범진|bjchoi@katech.re.kr">개방 회로(Open Circuit)(최범진)</option>
                                            <option value="남택송|tsnam@katech.re.kr">결로(남택송)</option>
                                            <option value="윤주호|jhyun@katech.re.kr">경도(비커스경도 제외)(윤주호)</option>
                                            <option value="김성옥|sokim@katech.re.kr">고가속 수명시험(HALT)(김성옥)</option>
                                            <option value="김성옥|tsnam@katech.re.kr">고가속 스트레스(HAST)(김성옥)</option>
                                            <option value="김준규|">고마찰로(공동)(김준규)</option>
                                            <option value="김준규|">고마찰로(단독)(김준규)</option>
                                            <option value="김준규|">고마찰로(살수시)_공동(김준규)</option>
                                            <option value="김준규|">고마찰로(살수시)_단독(김준규)</option>
                                            <option value="고윤기|ygkim@katec.re.kr">고무시편점탄성시험(고윤기)</option>
                                            <option value="이현철|hclee@katech.re.kr">고분자소재 사출성형(이현철)</option>
                                            <option value="이태희|thlee@katech.re.kr">고성능 쿠페 활용 주행 성능 평가(이태희)</option>
                                            <option value="이현철|hclee@katech.re.kr">고속 인장강도 시험(이현철)</option>
                                            <option value="조영수|">고속 주행 차량 성능 및 배기가스 (조영수)</option>
                                            <option value="심경석|kssim@katech.re.kr">고속 휠 코너링 피로 시험(심경석)</option>
                                            <option value="하진욱|skjeoung@katech.re.kr">고속충격 시험(하진욱)</option>
                                            <option value="이상훈|sokim@katech.re.kr">고심도 광학현미경 관찰 및 분석(이상훈)</option>
                                            <option value="윤주호|jhyun@katech.re.kr">고압 균질(윤주호)</option>
                                            <option value="김진평|dokim@katech.re.kr">고온 인장강도시(김진평)</option>
                                            <option value="송종호|jhsong@katech.re.kr">고온인장 시험(송종호)</option>
                                            <option value="남택송|tsnam@katech.re.kr">고저온작동한계(남택송)</option>
                                            <option value="남택송|tsnam@katech.re.kr">고저전압작동한계(남택송)</option>
                                            <option value="강래청|rckang@katech.re.kr">고전압 구동시스템 및 부품시험(강래청)</option>
                                            <option value="이상훈|">고전압 노이즈 주입 시 고장영향 분(이상훈)</option>
                                            <option value="김성진|sjkim@katech.re.kr">고정밀 위치 기반 FCWS 성능 검(김성진)</option>
                                            <option value="김성진|sjkim@katech.re.kr">고정밀 위치 기반 LDWS 성능 검(김성진)</option>
                                            <option value="최범진|bjchoi@katech.re.kr">고조파 전류 측정 (Harmonic(최범진)</option>
                                            <option value="정길성|gsjung@katech.re.kr">고토크, 고속용 xEV 모터성능시험(정길성)</option>
                                            <option value="이호성|leehs@katech.re.kr">공랭식 오일쿨러 성능 평가 시험(이호성)</option>
                                            <option value="최범진|">과도 전압 방사(최범진)</option>
                                            <option value="최범진|bjchoi@katech.re.kr">과도 전압 방사 (Voltage T(최범진)</option>
                                            <option value="최범진|bjchoi@katech.re.kr">과전압(Over Voltage)(최범진)</option>
                                            <option value="김도현|">광파 측정(3차원 측정)(김도현)</option>
                                            <option value="박선홍|sunhpark@katech.re.kr">광학성능 평가(박선홍)</option>
                                            <option value="박정민|ykseo@katech.re.kr">교류 발전기 성능 및 내구시험(박정민)</option>
                                            <option value="박정민|ykseo@katech.re.kr">교류발전기 소음 시험(박정민)</option>
                                            <option value="최범진|bjchoi@katech.re.kr">교류전압 인가(Superimpose(최범진)</option>
                                            <option value="김기환|">구조해석(김기환)</option>
                                            <option value="박정민|">구조해석(박정민)</option>
                                            <option value="최범진|bjchoi@katech.re.kr">그라운드 및 전원 오프셋(Groun(최범진)</option>
                                            <option value="정창현|jeongch@katech.re.kr">그린 드라이브 DHIL 시뮬레이터 (정창현)</option>
                                            <option value="이태희|">금속 3D 프린팅(이태희)</option>
                                            <option value="이현철|">금속 성분 및 조직 분석(광주)(이현철)</option>
                                            <option value="김진평|dokim@katech.re.kr">금속강도,연신율,단면수축율,항복점,(김진평)</option>
                                            <option value="이태희|thlee@katech.re.kr">금속성분분석(영암)(이태희)</option>
                                            <option value="정우영|wychung@katech.re.kr">금속성형성 평가(정우영)</option>
                                            <option value="김진평|dokim@katech.re.kr">금속조직사진(광학현미경)(김진평)</option>
                                            <option value="이현철|">기계적 접합(SPR, Blind R(이현철)</option>
                                            <option value="김지윤|">기계적 충격 시험(김지윤)</option>
                                            <option value="남택송|tsnam@katech.re.kr">낙하(남택송)</option>
                                            <option value="안휘|">낙하 시험(안휘)</option>
                                            <option value="윤정환|jhyoon@katech.re.kr">난연성 시험 - 고온(윤정환)</option>
                                            <option value="윤정환|jhyoon@katech.re.kr">난연성 시험 - 상온(윤정환)</option>
                                            <option value="김영필|">내광성 시험(김영필)</option>
                                            <option value="남택송|tsnam@katech.re.kr">내마모(내마모성&amp;표면손상성)(남택송)</option>
                                            <option value="하진욱|skjeoung@katech.re.kr">내선크림성 시험(하진욱)</option>
                                            <option value="남택송|tsnam@katech.re.kr">내수(IPX2,IPX3,IPX4,I(남택송)</option>
                                            <option value="남택송|tsnam@katech.re.kr">내수성(남택송)</option>
                                            <option value="이평찬|pclee@katech.re.kr">내스크래치 시험(이평찬)</option>
                                            <option value="이태희|thlee@katech.re.kr">내열 및 내습성 평가(이태희)</option>
                                            <option value="하진욱|skjeoung@katech.re.kr">내열 CYCLE성(하진욱)</option>
                                            <option value="하진욱|skjeoung@katech.re.kr">내열성, 내습성(하진욱)</option>
                                            <option value="김진평|dokim@katech.re.kr">내열성, 내습성시험(김진평)</option>
                                            <option value="윤정환|jhyoon@katech.re.kr">내열싸이클시험(윤정환)</option>
                                            <option value="윤정환|jhyoon@katech.re.kr">내유성시험(윤정환)</option>
                                            <option value="남택송|tsnam@katech.re.kr">내전압/작동전압 시험(남택송)</option>
                                            <option value="김영필|">내진성 시험(김영필)</option>
                                            <option value="오미혜|mhoh@katech.re.kr">내후성 시험(weather-o-me(오미혜)</option>
                                            <option value="하진욱|skjeoung@katech.re.kr">내후성/내광성 시험(하진욱)</option>
                                            <option value="김진호|ehlee@katech.re.kr">내후성/자외선 시험(김진호)</option>
                                            <option value="남택송|tsnam@katech.re.kr">내후성및내광성(남택송)</option>
                                            <option value="이호성|leehs@katech.re.kr">냉각시스템의 구성 부품 성능 평가(이호성)</option>
                                            <option value="남택송|">냉수충격시험(남택송)</option>
                                            <option value="김해룡|bjchoi@katech.re.kr">노출지수 평가(Exposure In(김해룡)</option>
                                            <option value="박광민|bhlee2@katech.re.kr">다단감속기 성능평가 시험(박광민)</option>
                                            <option value="최범진|bjchoi@katech.re.kr">단락 회로(Short Circuit(최범진)</option>
                                            <option value="전광기|chnam@katech.re.kr">단차시험로(공동)(전광기)</option>
                                            <option value="전광기|chnam@katech.re.kr">단차시험로(단독)(전광기)</option>
                                            <option value="박광민|yjchu@katech.re.kr">단축/다축 진동 및 내구시험(박광민)</option>
                                            <option value="남택송|jjyang@katech.re.kr">대형 배터리시스템용 염수분무시험(남택송)</option>
                                            <option value="정길성|gsjung@katech.re.kr">대형 엔진 및 후처리 부품 성능평가(정길성)</option>
                                            <option value="한창수|cshahn@katech.re.kr">대형 BLDC모터 성능 및 내구시험(한창수)</option>
                                            <option value="김형민|">대형복합진동시험(김형민)</option>
                                            <option value="정성필|spjung@katech.re.kr">대형세단 활용 주행 성능 평가(정성필)</option>
                                            <option value="강대준|djkang@katech.re.kr">댐퍼의 제어 특성 측정(강대준)</option>
                                            <option value="신석산|shchung@katech.re.kr">데이터 계측 및 변환 장치(신석산)</option>
                                            <option value="유시복|sbyu@katec.re.kr">데이터 보존(유시복)</option>
                                            <option value="김진용1|kimjy@katech.re.kr">데이터저장(김진용1)</option>
                                            <option value="신석산|shchung@katech.re.kr">도로 노면 측정(신석산)</option>
                                            <option value="이재혁|">도로환경 3차원 측정(대구)(이재혁)</option>
                                            <option value="김준규|">도심로(공동)(김준규)</option>
                                            <option value="김준규|">도심로(단독)(김준규)</option>
                                            <option value="김준규|">도심로(제어 및 통신시스템 사용시)(김준규)</option>
                                            <option value="김준규|">도심로(제어 및 통신시스템 사용시)(김준규)</option>
                                            <option value="윤정환|jhyoon@katech.re.kr">동적발열측정(윤정환)</option>
                                            <option value="김준규|">동적플랫폼(공동)(김준규)</option>
                                            <option value="김준규|">동적플랫폼(단독)(김준규)</option>
                                            <option value="김준규|">동적플랫폼(살수시)_공동(김준규)</option>
                                            <option value="김준규|">동적플랫폼(살수시)_단독(김준규)</option>
                                            <option value="송현석|ykseo@katech.re.kr">등속조인트 내구시험 (송현석)</option>
                                            <option value="김준규|">등판로(18%, 20%, 30%)_(김준규)</option>
                                            <option value="김준규|">등판로(18%, 20%, 30%)_(김준규)</option>
                                            <option value="전광기|chnam@katech.re.kr">등판로(공동)(전광기)</option>
                                            <option value="전광기|chnam@katech.re.kr">등판로(단독)(전광기)</option>
                                            <option value="서영교|ykseo@katech.re.kr">디젤인젝터 내구/커먼레일 연료펌프 (서영교)</option>
                                            <option value="윤정환|jhyoon@katech.re.kr">레오미터측정(윤정환)</option>
                                            <option value="정우영|wychung@katech.re.kr">레이저 가공(정우영)</option>
                                            <option value="최범진|bjchoi@katech.re.kr">로드 덤프(Load Dump)(최범진)</option>
                                            <option value="김영필|">릴 내구시험(김영필)</option>
                                            <option value="이태희|thlee@katech.re.kr">마모 및 마찰 특성 분석(이태희)</option>
                                            <option value="최현주|hchoi@katech.re.kr">마모시험(왕복식)(최현주)</option>
                                            <option value="최현주|hchoi@katech.re.kr">마모시험(회전식)(최현주)</option>
                                            <option value="김형민|hmkim@katech.re.kr">마스터 실린더, 부스터, 휠실린더 (김형민)</option>
                                            <option value="이현철|hclee@katech.re.kr">마이크로 비커스 경도 측정(이현철)</option>
                                            <option value="김영필|">마이크로슬립 마모시험(김영필)</option>
                                            <option value="이현철|">마찰기반 접합(RFSSW, FDS)(이현철)</option>
                                            <option value="나병철|jykim@katech.re.kr">마찰특성 평가시험(나병철)</option>
                                            <option value="김진호|ehlee@katech.re.kr">먼지 시험(김진호)</option>
                                            <option value="남택송|tsnam@katech.re.kr">먼지(6종/8종/DIN40050-9(남택송)</option>
                                            <option value="조성현|sjkwag@katech.re.kr">멀티유저 가상드라이빙 통신시뮬레이터(조성현)</option>
                                            <option value="박정민|">모달시험(낙하충격)(박정민)</option>
                                            <option value="박정민|ykseo@katech.re.kr">모달시험(주파수 및 댐핑 측정)(박정민)</option>
                                            <option value="김영필|">모의 충돌 시험(김영필)</option>
                                            <option value="윤득선|dsyun@katech.re.kr">모터 성능 및 로직 신뢰성 평가(윤득선)</option>
                                            <option value="박광민|gmpark@katech.re.kr">모터 성능 시험(20kW, 120k(박광민)</option>
                                            <option value="이병화|bhlee2@katech.re.kr">모터 성능 시험(5kW, 50kW)(이병화)</option>
                                            <option value="김락민|swpark@katech.re.kr">모터 성능 측정(김락민)</option>
                                            <option value="남택송|tsnam@katech.re.kr">모터성능(와이퍼/윈도우 등)(남택송)</option>
                                            <option value="현효진|jjyang@katech.re.kr">모형제작(현효진)</option>
                                            <option value="현효진|jjyang@katech.re.kr">모형제작(연공)(현효진)</option>
                                            <option value="유시복|sbyu@katec.re.kr">무결성 기능 검증(유시복)</option>
                                            <option value="윤정환|jhyoon@katech.re.kr">무늬점도측정(윤정환)</option>
                                            <option value="남택송|tsnam@katech.re.kr">무향실(남택송)</option>
                                            <option value="김주형|">미래차 자율주행 부품 및 섀시부품 (김주형)</option>
                                            <option value="이태희|thlee@katech.re.kr">미세조직분석(이태희)</option>
                                            <option value="이현철|hclee@katech.re.kr">박판성형 해석(이현철)</option>
                                            <option value="이승욱|">반도체 패키지 내부 분석(이승욱)</option>
                                            <option value="고윤기|ygkim@katec.re.kr">방진고무 : 동적,정적 특성시험, (고윤기)</option>
                                            <option value="고윤기|ygkim@katec.re.kr">방진고무 1축 내구시험(고윤기)</option>
                                            <option value="고윤기|ygkim@katec.re.kr">방진고무 3축 내구 시뮬레이션 시험(고윤기)</option>
                                            <option value="김태림|">방진고무 다축 시험(김태림)</option>
                                            <option value="정길성|gsjung@katech.re.kr">배기시험 분석용 FT-IR(시간당)(정길성)</option>
                                            <option value="박준성|jspark@katech.re.kr">배터리 방전 시험(박준성)</option>
                                            <option value="현정은|jehyun@katech.re.kr">배터리 수명, 출력, 전압, 전류 (현정은)</option>
                                            <option value="최범진|bjchoi@katech.re.kr">배터리 충방전(Charge &amp; Di(최범진)</option>
                                            <option value="최범진|bjchoi@katech.re.kr">버스트(Burst)(최범진)</option>
                                            <option value="김영필|">버클 관성 해리력 시험(김영필)</option>
                                            <option value="김영필|">버클 내구성 시험(김영필)</option>
                                            <option value="김영필|">버클 웨빙 권입/권출 시험(김영필)</option>
                                            <option value="김형민|hmkim@katech.re.kr">버튼 내구시험(다목적 내구시험)(김형민)</option>
                                            <option value="설한빛|">베어링의 기계적 전기적 스트레스에 (설한빛)</option>
                                            <option value="전광기|chnam@katech.re.kr">벨지안로(공동)(전광기)</option>
                                            <option value="전광기|chnam@katech.re.kr">벨지안로(단독)(전광기)</option>
                                            <option value="박승욱|">변속기 및 관련 부품 성능평가(박승욱)</option>
                                            <option value="박광민|yjchu@katech.re.kr">변속시스템 NVH 개선(박광민)</option>
                                            <option value="최범진|bjchoi@katech.re.kr">복사 방출(Radiated Emis(최범진)</option>
                                            <option value="최범진|bjchoi@katech.re.kr">복사 방출(Radiated Emis(최범진)</option>
                                            <option value="최범진|bjchoi@katech.re.kr">복사내성 (Radiated Immu(최범진)</option>
                                            <option value="최범진|bjchoi@katech.re.kr">복사내성 (Radiated Immu(최범진)</option>
                                            <option value="최범진|bjchoi@katech.re.kr">복사내성 (Radiated Immu(최범진)</option>
                                            <option value="최범진|bjchoi@katech.re.kr">복사내성 (Radiated Immu(최범진)</option>
                                            <option value="최범진|">복사내성, 무선기기 내성(최범진)</option>
                                            <option value="최범진|">복사방출/전도방출(최범진)</option>
                                            <option value="정성필|spjung@katech.re.kr">복합 다축 휠 내구 성능시험(정성필)</option>
                                            <option value="이현철|">복합 사이클 부식시험(이현철)</option>
                                            <option value="김지윤|jjyang@katech.re.kr">복합 환경 진동 시험(김지윤)</option>
                                            <option value="오미혜|nikim@katech.re.kr">복합소재 기계적 물성 시험(오미혜)</option>
                                            <option value="오미혜|mhoh@katech.re.kr">복합소재 내열특성 분석(오미혜)</option>
                                            <option value="오미혜|nikim@katech.re.kr">복합재료압출(오미혜)</option>
                                            <option value="정길성|gsjung@katech.re.kr">복합환경진동시험(대형)(정길성)</option>
                                            <option value="김준규|">부분정면충돌-인체 상해치 (차체/부(김준규)</option>
                                            <option value="김준규|">부분정면충돌-차체/부품성능 계측(김준규)</option>
                                            <option value="김태림|leedw@katech.re.kr">부쉬 동특성/정특성 평가(김태림)</option>
                                            <option value="윤정환|jhyoon@katech.re.kr">부압시험(윤정환)</option>
                                            <option value="하진욱|skjeoung@katech.re.kr">부착성 시험(하진욱)</option>
                                            <option value="서영교|ykseo@katech.re.kr">부품 강도 및 내구성 시험 : Li(서영교)</option>
                                            <option value="서영교|ykseo@katech.re.kr">부품 강도 및 내구성 시험 : Ro(서영교)</option>
                                            <option value="고웅희|whko@katech.re.kr">부품 강도 및 내구성시험 : Rot(고웅희)</option>
                                            <option value="이태희|thlee@katech.re.kr">부품 실차 시험 평가 계측(이태희)</option>
                                            <option value="신민경|mgshin@katech.re.kr">부품, 시스템, 차량의 실시간 주행(신민경)</option>
                                            <option value="고웅희|whko@katech.re.kr">부품강도시험 및 내구성시험(Line(고웅희)</option>
                                            <option value="박광민|gmpark@katech.re.kr">부품진동 특성 시험(모달테스트)(박광민)</option>
                                            <option value="최범진|bjchoi@katech.re.kr">부하 회로(Load Circuit)(최범진)</option>
                                            <option value="이경태|jjyang@katech.re.kr">브레이크 라이닝 및 디스크(이경태)</option>
                                            <option value="서영교|ykseo@katech.re.kr">브레이크 마스터 실린더 내구시험(서영교)</option>
                                            <option value="김형민|hmkim@katech.re.kr">브레이크 마찰시험(김형민)</option>
                                            <option value="김형민|hmkim@katech.re.kr">브레이크 부품 성능 및 기능 시험(김형민)</option>
                                            <option value="최성진|sjchoi@katech.re.kr">브레이크 성능 및 내구시험(DYNA(최성진)</option>
                                            <option value="정성필|spjung@katech.re.kr">브레이크 성능, 내구 및 NVH 시(정성필)</option>
                                            <option value="박정민|ykseo@katech.re.kr">브레이크 주변부품 성능 및 내구시험(박정민)</option>
                                            <option value="이호성|leehs@katech.re.kr">블로워/컨덴서 팬 성능 평가 시험(이호성)</option>
                                            <option value="윤주호|jhyun@katech.re.kr">비금속강도,연신율,단면수축율,항복점(윤주호)</option>
                                            <option value="김형민|hmkim@katech.re.kr">비디오 현미경(광학현미경)(김형민)</option>
                                            <option value="전광기|chnam@katech.re.kr">빨래판로(공동)(전광기)</option>
                                            <option value="전광기|chnam@katech.re.kr">빨래판로(단독)(전광기)</option>
                                            <option value="유시복|sbyu@katec.re.kr">사고기록정보 생성시각(유시복)</option>
                                            <option value="유시복|sbyu@katec.re.kr">사고기록정보의 부합성(유시복)</option>
                                            <option value="이현철|hclee@katech.re.kr">사출성형 해석/부품충돌 해석(이현철)</option>
                                            <option value="현효진|seojw@katech.re.kr">사형제작(현효진)</option>
                                            <option value="이현철|">상온 및 고온 피로시험(이현철)</option>
                                            <option value="신현동|hdshin@katech.re.kr">상온진동시험(신현동)</option>
                                            <option value="정길성|gsjung@katech.re.kr">상온진동시험(대형)(정길성)</option>
                                            <option value="김주형|">상용차량의 휠하중 6축 분력 측정(김주형)</option>
                                            <option value="노형주|hjnoh@katech.re.kr">상용차용 FCWS 성능 계측 시험(노형주)</option>
                                            <option value="노형주|hjnoh@katech.re.kr">상용차용 LDWS 성능 계측 시험(노형주)</option>
                                            <option value="남택송|tsnam@katech.re.kr">색차 측정(남택송)</option>
                                            <option value="최성규|">샤프트 비틀림시험(최성규)</option>
                                            <option value="고윤기|ygkim@katec.re.kr">서스펜션 부시 3축 시뮬레이션시험(고윤기)</option>
                                            <option value="최범진|bjchoi@katech.re.kr">서지 내성시험 (Surge Tran(최범진)</option>
                                            <option value="전광기|chnam@katech.re.kr">선회로(공동)(전광기)</option>
                                            <option value="전광기|chnam@katech.re.kr">선회로(단독)(전광기)</option>
                                            <option value="전광기|chnam@katech.re.kr">선회로/살수시(공동)(전광기)</option>
                                            <option value="전광기|chnam@katech.re.kr">선회로/살수시(단독)(전광기)</option>
                                            <option value="김도현|">설계 변수 최적화 및 기구, 구조,(김도현)</option>
                                            <option value="이현철|hclee@katech.re.kr">섬유직물재단(이현철)</option>
                                            <option value="강래청|rckang@katech.re.kr">센서, 제어기 실시간 성능평가시험(강래청)</option>
                                            <option value="임양순|yslim@katech.re.kr">센서, 제어기, 차량 연동 종합 성(임양순)</option>
                                            <option value="이현철|hclee@katech.re.kr">소성가공 공정해석(이현철)</option>
                                            <option value="남택송|tsnam@katech.re.kr">소음강도 및 진동측정(소음레벨 및 (남택송)</option>
                                            <option value="이주엽|">소음레벨 및 주파수 분석(이주엽)</option>
                                            <option value="김준규|">소음발생로(공동)(김준규)</option>
                                            <option value="전광기|chnam@katech.re.kr">소음발생로(공동)(전광기)</option>
                                            <option value="김준규|">소음발생로(단독)(김준규)</option>
                                            <option value="전광기|chnam@katech.re.kr">소음발생로(단독)(전광기)</option>
                                            <option value="김준규|">소음시험로(김준규)</option>
                                            <option value="김진용1|kimjy@katech.re.kr">소음측정(김진용1)</option>
                                            <option value="이현철|">소재 고속 고온 데이터 분석(이현철)</option>
                                            <option value="이현철|hclee@katech.re.kr">소재/부품 고속 물성 분석(이현철)</option>
                                            <option value="서영호|kwonsj@katech.re.kr">소형 내연기관 자동차의 연비/배출가(서영호)</option>
                                            <option value="서영호|parthi@katech.re.kr">소형 전기구동 자동차의 연비 성능시(서영호)</option>
                                            <option value="한창수|cshahn@katech.re.kr">소형 BLDC모터 성능 및 내구시험(한창수)</option>
                                            <option value="김주형|chnam@katech.re.kr">소형차량의 휠 하중 6축 분력 측정(김주형)</option>
                                            <option value="전광기|kkjeon@katech.re.kr">소형트럭용 타이어 Wet Grip (전광기)</option>
                                            <option value="이태희|thlee@katech.re.kr">쇽업소버 성능 내구 시험(영암)(이태희)</option>
                                            <option value="김태림|tlkim@katech.re.kr">쇽업소버 시험(대구)(김태림)</option>
                                            <option value="서영교|ykseo@katech.re.kr">쇽업쇼버 시험(천안)(서영교)</option>
                                            <option value="남충우|">수소용기 누설 육안검사(남충우)</option>
                                            <option value="송현석|songhs@katech.re.kr">스티어링 시스템 성능 및 내구시험(송현석)</option>
                                            <option value="서영교|ykseo@katech.re.kr">스티어링 컬럼 내구시험(서영교)</option>
                                            <option value="이태희|thlee@katech.re.kr">스포츠 쿠페 활용 주행 성능 평가(이태희)</option>
                                            <option value="정성필|spjung@katech.re.kr">스포츠카 활용 주행 성능 평가(정성필)</option>
                                            <option value="전광기|kkjeon@katech.re.kr">승용차용 타이어 Wet Grip 성(전광기)</option>
                                            <option value="조준호|jhcho@katech.re.kr">시스템 전자파 노이즈 분석(3D)(조준호)</option>
                                            <option value="현효진|jjyang@katech.re.kr">시작품모델링시스템(현효진)</option>
                                            <option value="이태희|">시제품 가공 및 지그 제작(이태희)</option>
                                            <option value="김도현|">시제품 제작(레진/알루미늄/플라스틱(김도현)</option>
                                            <option value="윤정환|jhyoon@katech.re.kr">시차 주사 열량 분석(DSC)(윤정환)</option>
                                            <option value="최범진|bjchoi@katech.re.kr">신호선 전도내성 (Transient(최범진)</option>
                                            <option value="최범진|bjchoi@katech.re.kr">신호선 전도방출(Conducted (최범진)</option>
                                            <option value="김용은|jsjeon@katech.re.kr">실 차량 통신 네트워크 환경 시험(김용은)</option>
                                            <option value="조성현|sjkwag@katech.re.kr">실도로 기반 가상 3D-Map(조성현)</option>
                                            <option value="이정욱|julee@katech.re.kr">실도로 기반 연료소모량 측정 단말기(이정욱)</option>
                                            <option value="박선홍|sunhpark@katech.re.kr">실도로 조도환경기반 영상인식 시험(박선홍)</option>
                                            <option value="조영수|">실도로 주행 배기가스 분석 시험(조영수)</option>
                                            <option value="김서겸|">실시간 열화분석 집속이온빔(F.I.(김서겸)</option>
                                            <option value="박선홍|sunhpark@katech.re.kr">실차 기반 운전자 사용성 평가(박선홍)</option>
                                            <option value="구건우|">실차 기후환경 모사시험(환경챔버)(구건우)</option>
                                            <option value="최형진|hjchoi@katech.re.kr">실차 및 HILS 제어로직 시험(최형진)</option>
                                            <option value="구건우|">실차 배출가스 및 연비 성능시험(C(구건우)</option>
                                            <option value="최형진|hjchoi@katech.re.kr">실차 성능, 내구 및 HILS 제어(최형진)</option>
                                            <option value="김진용1|kimjy@katech.re.kr">실차 조향 정밀 제어 및 조향 데이(김진용1)</option>
                                            <option value="김태림|tlkim@katech.re.kr">실차 주행 성능 시험(스팅어)(김태림)</option>
                                            <option value="김태림|tlkim@katech.re.kr">실차 주행 성능 시험(G80)(김태림)</option>
                                            <option value="박광민|yjchu@katech.re.kr">실차 주행 NVH 시험(박광민)</option>
                                            <option value="서영호|kwonsj@katech.re.kr">실차탑재형 실시간 연비 및 배출가스(서영호)</option>
                                            <option value="신석산|shchung@katech.re.kr">아날로그/CAN 데이터 계측(신석산)</option>
                                            <option value="전광기|chnam@katech.re.kr">아스팔트보수로(공동)(전광기)</option>
                                            <option value="전광기|chnam@katech.re.kr">아스팔트보수로(단독)(전광기)</option>
                                            <option value="하진욱|skjeoung@katech.re.kr">압축 시험(하진욱)</option>
                                            <option value="안휘|">에어백 정적 전개 시험(안휘)</option>
                                            <option value="나병철|jykim@katech.re.kr">엔진 및 부품 내구 성능 평가 (5(나병철)</option>
                                            <option value="나병철|jykim@katech.re.kr">엔진 및 부품 성능 시험(나병철)</option>
                                            <option value="오세두|sdoh@katech.re.kr">엔진 및 부품 성능시험(오세두)</option>
                                            <option value="강정호|jhkang@katech.re.kr">엔진 및 엔진부품, 후처리시스템 평(강정호)</option>
                                            <option value="이종인|jilee@katech.re.kr">엔진 및 엔진부품, 후처리시스템 평(이종인)</option>
                                            <option value="강정호|jhkang@katech.re.kr">엔진 및 엔진부품, 후처리시스템 평(강정호)</option>
                                            <option value="이종인|jilee@katech.re.kr">엔진 및 엔진부품, 후처리시스템 평(이종인)</option>
                                            <option value="강정호|jhkang@katech.re.kr">엔진 및 엔진부품, 후처리시스템 평(강정호)</option>
                                            <option value="이종인|jilee@katech.re.kr">엔진 및 엔진부품, 후처리시스템 평(이종인)</option>
                                            <option value="강정호|jhkang@katech.re.kr">엔진 및 엔진부품, 후처리시스템 평(강정호)</option>
                                            <option value="이종인|jilee@katech.re.kr">엔진 및 엔진부품, 후처리시스템 평(이종인)</option>
                                            <option value="강정호|jhkang@katech.re.kr">엔진 및 엔진부품, 후처리시스템 평(강정호)</option>
                                            <option value="이종인|jilee@katech.re.kr">엔진 및 엔진부품, 후처리시스템 평(이종인)</option>
                                            <option value="조영수|">엔진 성능 내구 평가 및 배기분석(조영수)</option>
                                            <option value="최범진|bjchoi@katech.re.kr">엔진 시동시 전압 변동(Change(최범진)</option>
                                            <option value="김명환|kimmh@katec.re.kr">연료전지평가(김명환)</option>
                                            <option value="하진욱|skjeoung@katech.re.kr">연필경도 측정(하진욱)</option>
                                            <option value="김기환|">열/유동해석(김기환)</option>
                                            <option value="허형석|hsheo@katech.re.kr">열교환기 시험(허형석)</option>
                                            <option value="하진욱|skjeoung@katech.re.kr">열분석기(TA) - DTA, TGA(하진욱)</option>
                                            <option value="오미혜|mhoh@katech.re.kr">열전도도 측정(오미혜)</option>
                                            <option value="윤정환|jhyoon@katech.re.kr">열전도도측정(윤정환)</option>
                                            <option value="이현철|">열전이 특성 분석(이현철)</option>
                                            <option value="윤정환|jhyoon@katech.re.kr">열중량 분석(TGA)(윤정환)</option>
                                            <option value="송종호|jhsong@katech.re.kr">열충격 사이클 및 노출 내구 평가 (송종호)</option>
                                            <option value="남택송|tsnam@katech.re.kr">열충격 시험(남택송)</option>
                                            <option value="안휘|">열충격 시험(안휘)</option>
                                            <option value="이태희|thlee@katech.re.kr">열충격 시험(대형)(이태희)</option>
                                            <option value="남택송|tsnam@katech.re.kr">열충격시험(대형)(남택송)</option>
                                            <option value="남택송|tsnam@katech.re.kr">열충격시험(소형)(남택송)</option>
                                            <option value="남택송|tsnam@katech.re.kr">열충격시험(중형)(남택송)</option>
                                            <option value="이호성|leehs@katech.re.kr">열화상카메라 표면온도 측정 시험(이호성)</option>
                                            <option value="이병화|thlee@katech.re.kr">염수 살수 시험(이병화)</option>
                                            <option value="남택송|tsnam@katech.re.kr">염수분무,복합부식,복합내후성사이클(남택송)</option>
                                            <option value="이태희|hclee@katech.re.kr">염수분무시험(이태희)</option>
                                            <option value="서영교|ykseo@katech.re.kr">오일필터 여과효율 시험(서영교)</option>
                                            <option value="서영교|ykseo@katech.re.kr">오일필터 임펄스 시험(서영교)</option>
                                            <option value="남택송|tsnam@katech.re.kr">오존(남택송)</option>
                                            <option value="윤정환|jhyoon@katech.re.kr">오존시험(윤정환)</option>
                                            <option value="남택송|tsnam@katech.re.kr">온,습도(고저온방치및작동,온도사이클(남택송)</option>
                                            <option value="최현주|hchoi@katech.re.kr">온/습도시험(최현주)</option>
                                            <option value="강종수|">온도/습도시험(-65℃ ~ 200℃(강종수)</option>
                                            <option value="남택송|tsnam@katech.re.kr">온도특성(남택송)</option>
                                            <option value="안휘|">온습도 시험 (저온, 고온방치, 온(안휘)</option>
                                            <option value="정길성|gsjung@katech.re.kr">온습도 Cycle(정길성)</option>
                                            <option value="이현철|hclee@katech.re.kr">온열간 성형성 시험(이현철)</option>
                                            <option value="성창현|ykseo@katech.re.kr">와이퍼시스템 내구시험(성창현)</option>
                                            <option value="지영준|jjyang@katech.re.kr">왁스패턴 제작(지영준)</option>
                                            <option value="남택송|tsnam@katech.re.kr">워크인챔버(남택송)</option>
                                            <option value="이호성|leehs@katech.re.kr">워터펌프 성능 평가 시험(이호성)</option>
                                            <option value="김준규|">원선회로(공동)(김준규)</option>
                                            <option value="김준규|">원선회로(단독)(김준규)</option>
                                            <option value="윤정환|jhyoon@katech.re.kr">유기성분분석(FT-IR)(윤정환)</option>
                                            <option value="이준호|">유동해석(이준호)</option>
                                            <option value="김태림|leedw@katech.re.kr">유압부품 성능 및 내구시험(김태림)</option>
                                            <option value="노상호|shnoh@katech.re.kr">유체 점도 측정(노상호)</option>
                                            <option value="허형석|hsheo@katech.re.kr">유체기계시험(허형석)</option>
                                            <option value="이주엽|">유해물질 분석시험(AAS)(이주엽)</option>
                                            <option value="윤주호|jhyun@katech.re.kr">유해물질 분석시험(AAS, GC-M(윤주호)</option>
                                            <option value="김해룡|bjchoi@katech.re.kr">유해성 평가(EMF assessme(김해룡)</option>
                                            <option value="이현철|">이축 인장 및 압축 시험(이현철)</option>
                                            <option value="김락민|">인버터 성능, 제어특성평가, 48V(김락민)</option>
                                            <option value="김락민|">인버터 성능,제어특성평가(김락민)</option>
                                            <option value="하진욱|skjeoung@katech.re.kr">인장 시험(하진욱)</option>
                                            <option value="김성옥|">인장강도시험(김성옥)</option>
                                            <option value="나병철|jykim@katech.re.kr">인젝터시험(나병철)</option>
                                            <option value="김주형|">일반 차량의 가감속 제어 연속 시험(김주형)</option>
                                            <option value="윤주호|jhyun@katech.re.kr">일반측정(길이, 폭, 부피, 지름,(윤주호)</option>
                                            <option value="최범진|">임펄스(최범진)</option>
                                            <option value="최범진|bjchoi@katech.re.kr">임펄스(Impulse)(최범진)</option>
                                            <option value="윤주호|jhyun@katech.re.kr">입자의 분산(윤주호)</option>
                                            <option value="전광기|chnam@katech.re.kr">자갈길로(공동)(전광기)</option>
                                            <option value="전광기|chnam@katech.re.kr">자갈길로(단독)(전광기)</option>
                                            <option value="최범진|bjchoi@katech.re.kr">자계 방출(Magnetic Emis(최범진)</option>
                                            <option value="최범진|bjchoi@katech.re.kr">자계내성 (Magnetic Immu(최범진)</option>
                                            <option value="이혁기|hlee@katech.re.kr">자동차 기능안전 소프트웨어 검증(이혁기)</option>
                                            <option value="김수민|">자동차 등화장치 성능시험(김수민)</option>
                                            <option value="이태희|">자동차 부시 내구 시험(이태희)</option>
                                            <option value="이태희|">자동차 부시 특성 시험(이태희)</option>
                                            <option value="정성필|gsjung@katech.re.kr">자동차용 타이어(KC인증)(정성필)</option>
                                            <option value="신석산|">자율주행 버츄얼 테스트 환경구현(신석산)</option>
                                            <option value="김문식|">자율주행시스템 및 HMI 모듈, 시(김문식)</option>
                                            <option value="김준규|">자전거시험로(공동)(김준규)</option>
                                            <option value="김준규|">자전거시험로(단독)(김준규)</option>
                                            <option value="이태희|thlee@katech.re.kr">잔류응력 측정(이태희)</option>
                                            <option value="전광기|chnam@katech.re.kr">장파형로(공동)(전광기)</option>
                                            <option value="전광기|chnam@katech.re.kr">장파형로(단독)(전광기)</option>
                                            <option value="임현택|htlim@katech.re.kr">재료 경도 측정(임현택)</option>
                                            <option value="윤정환|jhyoon@katech.re.kr">재료 사출성형(윤정환)</option>
                                            <option value="윤정환|jhyoon@katech.re.kr">재료 압출성형(윤정환)</option>
                                            <option value="김도현|">재료물성시험(퍼스널 모빌리티 브레이(김도현)</option>
                                            <option value="김준규|">저마찰로(공동)(김준규)</option>
                                            <option value="김준규|">저마찰로(단독)(김준규)</option>
                                            <option value="김준규|">저마찰로(살수시)_공동(김준규)</option>
                                            <option value="김준규|">저마찰로(살수시)_단독(김준규)</option>
                                            <option value="이경훈|">저소음발생장치평가(이경훈)</option>
                                            <option value="조준호|jhcho@katech.re.kr">저주파수 전자파 노이즈 및 인체영향(조준호)</option>
                                            <option value="남택송|tsnam@katech.re.kr">적외선조사환경(온도/습도제어)(남택송)</option>
                                            <option value="최범진|bjchoi@katech.re.kr">전기 부하 작동시 전압 변동(Cha(최범진)</option>
                                            <option value="박상욱|swpark@katech.re.kr">전기자동차용 고전력 충방전시험(박상욱)</option>
                                            <option value="고영진|">전기적 고장안전성 시험 (배터리 충(고영진)</option>
                                            <option value="최범진|bjchoi@katech.re.kr">전기적 빠른 과도현상 내성시험 (E(최범진)</option>
                                            <option value="김도현|">전기차 실증 데이터 분석(김도현)</option>
                                            <option value="최범진|">전도 과도 내성(ISO 7637-2(최범진)</option>
                                            <option value="최범진|bjchoi@katech.re.kr">전도 과도내성 (Conducted (최범진)</option>
                                            <option value="최범진|bjchoi@katech.re.kr">전도 잡음 측정 (Conducted(최범진)</option>
                                            <option value="송현석|songhs@katech.re.kr">전동워터펌프(송현석)</option>
                                            <option value="김철수|cskim@katech.re.kr">전력변환모듈 전력 사이클 시험(김철수)</option>
                                            <option value="고영진|">전력측정(고영진)</option>
                                            <option value="최범진|bjchoi@katech.re.kr">전압 강하(Voltage Dip)(최범진)</option>
                                            <option value="최범진|bjchoi@katech.re.kr">전압 단속(Intermittent (최범진)</option>
                                            <option value="강호준|hjkang@katech.re.kr">전압 및 전류측정 시험(강호준)</option>
                                            <option value="최범진|bjchoi@katech.re.kr">전압 변동 및 플리커 측정 (Vol(최범진)</option>
                                            <option value="최범진|bjchoi@katech.re.kr">전압 순단(Power Voltage(최범진)</option>
                                            <option value="최범진|bjchoi@katech.re.kr">전압 하강(Reset Behavio(최범진)</option>
                                            <option value="남택송|tsnam@katech.re.kr">전압강하/암전류 시험(남택송)</option>
                                            <option value="최범진|bjchoi@katech.re.kr">전원 역극성(Reverse Volt(최범진)</option>
                                            <option value="최범진|bjchoi@katech.re.kr">전원선 전도내성 (Conducted(최범진)</option>
                                            <option value="최범진|bjchoi@katech.re.kr">전원선 전도방출(Conducted (최범진)</option>
                                            <option value="고영진|">전원시스템 성능안전성 시험 (배터리(고영진)</option>
                                            <option value="고영진|">전원시스템 Rollover 평가 시(고영진)</option>
                                            <option value="김기환|">전자계-열/유동-구조 연성해석(김기환)</option>
                                            <option value="김기환|">전자계해석(김기환)</option>
                                            <option value="최범진|bjchoi@katech.re.kr">전자파 인체 흡수율 평가(SAR)(최범진)</option>
                                            <option value="박상욱|">전해질막 이온전도도 측정(박상욱)</option>
                                            <option value="남택송|tsnam@katech.re.kr">절연저항/접촉저항 시험(남택송)</option>
                                            <option value="이현철|">점탄성 특성 분석(이현철)</option>
                                            <option value="이현철|">접합시편 제작(이현철)</option>
                                            <option value="김준규|">정면충돌-인체 상해치 (차체/부품성(김준규)</option>
                                            <option value="김준규|">정면충돌-차체/부품성능 계측(김준규)</option>
                                            <option value="지영준|ehlee@katech.re.kr">정밀주조용 왁스패턴 제작(지영준)</option>
                                            <option value="최범진|">정전기(최범진)</option>
                                            <option value="최범진|bjchoi@katech.re.kr">정전기(Electrostatic D(최범진)</option>
                                            <option value="강호준|hjkang@katech.re.kr">제어로직 분석 시험(강호준)</option>
                                            <option value="권성진|sjkwon@katech.re.kr">제어시스템 개발용 HILS 시험(권성진)</option>
                                            <option value="윤주호|jhyun@katech.re.kr">제진시험(윤주호)</option>
                                            <option value="편범준|parkji@katech.re.kr">조향토크앵글센서(TAS) 성능 시험(편범준)</option>
                                            <option value="이경태|">좌석 및 안전벨트 앵커리지 시험(이경태)</option>
                                            <option value="이경태|">좌석 헤드레스트 임팩트 시험(이경태)</option>
                                            <option value="이경태|">좌석 헤드레스트 정적 강도 시험(이경태)</option>
                                            <option value="김형민|hmkim@katech.re.kr">주사전자현미경 결함부위관찰(S.E.(김형민)</option>
                                            <option value="이현철|hclee@katech.re.kr">주조해석(이현철)</option>
                                            <option value="현효진|ehlee@katech.re.kr">주조해석(현효진)</option>
                                            <option value="박선홍|sunhpark@katech.re.kr">주행 시뮬레이터 기반 HMI 평가 (박선홍)</option>
                                            <option value="이태희|thlee@katech.re.kr">주행 재현 현가 특성 평가(이태희)</option>
                                            <option value="이태희|">주행 하중 및 동특성 실차 계측(이태희)</option>
                                            <option value="이태희|">주행거리 400km급 부품 실증용 (이태희)</option>
                                            <option value="김주형|">주행시험 데이터 측정(김주형)</option>
                                            <option value="김태림|">주행저항 측정시험(김태림)</option>
                                            <option value="서영호|kwonsj@katech.re.kr">중대형 자동차의 연비/배출가스 성능(서영호)</option>
                                            <option value="정길성|gsjung@katech.re.kr">중소형 엔진 및 후처리 부품 성능평(정길성)</option>
                                            <option value="김철수|cskim@katech.re.kr">직류변환장치 전력 사이클 시험(김철수)</option>
                                            <option value="김준규|">직선로(고석주행로)_공동(김준규)</option>
                                            <option value="김준규|">직선로(고석주행로)_단독(김준규)</option>
                                            <option value="전광기|chnam@katech.re.kr">직선로(공동)(전광기)</option>
                                            <option value="전광기|chnam@katech.re.kr">직선로(단독)(전광기)</option>
                                            <option value="전광기|chnam@katech.re.kr">직선로/살수시(공동)(전광기)</option>
                                            <option value="전광기|chnam@katech.re.kr">직선로/살수시(단독)(전광기)</option>
                                            <option value="구영모|ymgoo@katech.re.kr">진공 분위기 로 시험(구영모)</option>
                                            <option value="신현동|hdshin@katech.re.kr">진동환경복합시험(중형)(신현동)</option>
                                            <option value="윤주호|jhyun@katech.re.kr">질량(중량무게)(윤주호)</option>
                                            <option value="신성근|">차대동력계 기반 실차 ADAS 및 (신성근)</option>
                                            <option value="김용은|jsjeon@katech.re.kr">차량 고속 CAN 통신 시험(김용은)</option>
                                            <option value="심경석|kssim@katech.re.kr">차량 및 부품 NVH 특성 시험(심경석)</option>
                                            <option value="박광민|gmpark@katech.re.kr">차량 부품 충격 시험(박광민)</option>
                                            <option value="유시복|sbyu@katec.re.kr">차량 시뮬레이터 기반의 운전자 뇌파(유시복)</option>
                                            <option value="조성현|sjkwag@katech.re.kr">차량 시뮬레이터 기반의 차량 센서 (조성현)</option>
                                            <option value="박지훈|parkjh@katech.re.kr">차량 전기전자 아키텍처 평가(박지훈)</option>
                                            <option value="곽수진|yhhwang@katech.re.kr">차량 제어기 실시간 분석시험(곽수진)</option>
                                            <option value="박광민|gmpark@katech.re.kr">차량 NVH 시뮬레이션(박광민)</option>
                                            <option value="김태림|leedw@katech.re.kr">차량속도 및 자세 측정(김태림)</option>
                                            <option value="최성진|jkkim@katech.re.kr">차량용 파워트레인 부품(변속기, 부(최성진)</option>
                                            <option value="김주형|">차량의 종횡방향 거동 및 정밀 위치(김주형)</option>
                                            <option value="박준성|jspark@katech.re.kr">차량전장품시험(박준성)</option>
                                            <option value="강호준|hjkang@katech.re.kr">차량통신 신호파형 및 전압/전류파형(강호준)</option>
                                            <option value="이현철|hclee@katech.re.kr">차체 샤시 부품 열 충격 평가(이현철)</option>
                                            <option value="이현철|hclee@katech.re.kr">차체/부품 정동강성 측정(이현철)</option>
                                            <option value="이현철|hclee@katech.re.kr">차체/샤시부품 구조/충돌/진동/피로(이현철)</option>
                                            <option value="이현철|hclee@katech.re.kr">차체부품 고유진동수 측정(이현철)</option>
                                            <option value="이현철|hclee@katech.re.kr">차체부품 정/동강성 해석(이현철)</option>
                                            <option value="윤정환|jhyoon@katech.re.kr">착향 시험(윤정환)</option>
                                            <option value="정성필|spjung@katech.re.kr">초고속 휠/타이어 모듈 성능 시험(정성필)</option>
                                            <option value="윤정환|jhyoon@katech.re.kr">초고속원심분리(윤정환)</option>
                                            <option value="김도현|">초소형 전기차 실증 데이터 분석(김도현)</option>
                                            <option value="김회용|kimhy@katech.re.kr">초소형자동차 제동, 조향 성능 평가(김회용)</option>
                                            <option value="김회용|kimhy@katech.re.kr">초소형자동차 주행거리 시험(김회용)</option>
                                            <option value="김회용|kimhy@katech.re.kr">초소형자동차 주행하중 측정(김회용)</option>
                                            <option value="권성진|sjkwon@katech.re.kr">초음파 기반 동방성/이방성 탄성 물(권성진)</option>
                                            <option value="남택송|tsnam@katech.re.kr">초음파검사(남택송)</option>
                                            <option value="박정원|jwpark@katech.re.kr">초저속차량 속도측정시험(박정원)</option>
                                            <option value="엄지용|">충방전 용량시험(엄지용)</option>
                                            <option value="정진범|dhshin@katec.re.kr">충전기 효율측정 시험(정진범)</option>
                                            <option value="김준규|">측면충돌-인체 상해치 (차체/부품성(김준규)</option>
                                            <option value="김준규|">측면충돌-차체/부품성능 계측(김준규)</option>
                                            <option value="김준규|">침수로(김준규)</option>
                                            <option value="유시복|sbyu@katec.re.kr">카메라 기본 성능(유시복)</option>
                                            <option value="유시복|sbyu@katec.re.kr">카메라 렌즈각(유시복)</option>
                                            <option value="유시복|sbyu@katec.re.kr">카메라의 번호판 식별 성능(유시복)</option>
                                            <option value="권성진|">카바타 가상튜닝 서비스(권성진)</option>
                                            <option value="김태림|">카바타 성능해석 자동화/최적화 소프(김태림)</option>
                                            <option value="김태림|">카바타 차량동역학 해석용 다분야 C(김태림)</option>
                                            <option value="김태림|">카바타 튜닝부품 유한요소 생성 소프(김태림)</option>
                                            <option value="권성진|">카바타 튜닝O2O 서비스(권성진)</option>
                                            <option value="이태희|thlee@katech.re.kr">캘리퍼 내구 시험(이태희)</option>
                                            <option value="이태희|thlee@katech.re.kr">캘리퍼 성능 시험(이태희)</option>
                                            <option value="정진범|dhshin@katec.re.kr">컨버터 효율측정 시험(정진범)</option>
                                            <option value="최범진|">케이블 차폐 측정(최범진)</option>
                                            <option value="이태희|thlee@katech.re.kr">쿼터 서스펜션 특성 시험 평가(이태희)</option>
                                            <option value="정성필|spjung@katech.re.kr">타이어 복합 연비 시험(정성필)</option>
                                            <option value="전광기|kkjeon@katech.re.kr">타이어 소음 공인시험로 임대(전광기)</option>
                                            <option value="전광기|kkjeon@katech.re.kr">타이어 소음성능 공인측정시험(전광기)</option>
                                            <option value="윤주호|jhyun@katech.re.kr">타이어 접지저항시험(윤주호)</option>
                                            <option value="윤주호|jhyun@katech.re.kr">타이어 접착내구시험(윤주호)</option>
                                            <option value="이진우|leejw@katech.re.kr">타이어 Rolling Resista(이진우)</option>
                                            <option value="전광기|kkjeon@katech.re.kr">타이어 Wet Grip 성능 공인시(전광기)</option>
                                            <option value="김주형|chnam@katech.re.kr">타이어(휠) 거동 정밀 측정(김주형)</option>
                                            <option value="김회용|kimhy@katech.re.kr">타이어센서 부품시험(김회용)</option>
                                            <option value="이현철|hclee@katech.re.kr">탄소/유리섬유직물직조(이현철)</option>
                                            <option value="김준규|">터널(공동)(김준규)</option>
                                            <option value="김준규|">터널(단독)(김준규)</option>
                                            <option value="조영수|yscho@katech.re.kr">터보차저 성능 내구 시험(조영수)</option>
                                            <option value="고영진|yjko@katech.re.kr">토크 측정(고영진)</option>
                                            <option value="오미혜|mhoh@katech.re.kr">투과율 측정(오미혜)</option>
                                            <option value="박현진|yjchu@katech.re.kr">튜닝부품 및 시제품 제작 3차원 프(박현진)</option>
                                            <option value="김태림|">튜닝부품 성능시험용 차량 주행 재현(김태림)</option>
                                            <option value="김태림|">튜닝부품 소재특성 분석장비(김태림)</option>
                                            <option value="이태희|thlee@katech.re.kr">튜닝차량 활용 주행 성능 평가(이태희)</option>
                                            <option value="전광기|">트럭버스용 타이어 Wet Grip (전광기)</option>
                                            <option value="김준규|">특수시험로(벨지안로)_공동(김준규)</option>
                                            <option value="김준규|">특수시험로(벨지안로)_단독(김준규)</option>
                                            <option value="김준규|">특수시험로(빨래판로)_공동(김준규)</option>
                                            <option value="김준규|">특수시험로(빨래판로)_단독(김준규)</option>
                                            <option value="김준규|">특수시험로(표준악로)_공동(김준규)</option>
                                            <option value="김준규|">특수시험로(표준악로)_단독(김준규)</option>
                                            <option value="김준규|">특수시험로(BUMP)_공동(김준규)</option>
                                            <option value="김준규|">특수시험로(BUMP)_단독(김준규)</option>
                                            <option value="이현철|hclee@katech.re.kr">판재 고속/고온 물성 분석(이현철)</option>
                                            <option value="김도현|">퍼스널 모빌리티 자세분석, 시계성 (김도현)</option>
                                            <option value="윤정환|jhyoon@katech.re.kr">포깅 시험(윤정환)</option>
                                            <option value="윤정환|jhyoon@katech.re.kr">표면 스크래치분석(윤정환)</option>
                                            <option value="이주엽|">표면 정밀 분석 및 물성 분석(AF(이주엽)</option>
                                            <option value="민준원|jwmin@katech.re.kr">표면조도측정(민준원)</option>
                                            <option value="전광기|chnam@katech.re.kr">표준악로(공동)(전광기)</option>
                                            <option value="전광기|chnam@katech.re.kr">표준악로(단독)(전광기)</option>
                                            <option value="민준원|jwmin@katech.re.kr">플라즈마 용사 시스템(민준원)</option>
                                            <option value="서영교|ykseo@katech.re.kr">필터 종합 성능시험(서영교)</option>
                                            <option value="김형민|hmkim@katech.re.kr">하이드로백 수명시험(김형민)</option>
                                            <option value="구건우|">하이브리드/내연기관 엔진 연비 및 (구건우)</option>
                                            <option value="고웅희|whko@katech.re.kr">항온항습조(고웅희)</option>
                                            <option value="이현철|hclee@katech.re.kr">해석 전처리(이현철)</option>
                                            <option value="심경석|kssim@katech.re.kr">현가계 K&amp;C 특성 시험(심경석)</option>
                                            <option value="남택송|tsnam@katech.re.kr">호스반복가압(남택송)</option>
                                            <option value="김태림|leedw@katech.re.kr">환경/반무향실(김태림)</option>
                                            <option value="조준호|jhcho@katech.re.kr">회로 전자파 노이즈 분석(조준호)</option>
                                            <option value="박승욱|">회전부품 데이터 수집(박승욱)</option>
                                            <option value="박승욱|">회전부품 성능평가를 위한 구동(박승욱)</option>
                                            <option value="김준규|">횡경사 시험기(김준규)</option>
                                            <option value="윤주호|jhyun@katech.re.kr">휘발성유기화합물분석(간이분석, 소재(윤주호)</option>
                                            <option value="윤정환|jhyoon@katech.re.kr">휘발성유기화합물분석(실차-국토교통부(윤정환)</option>
                                            <option value="윤정환|jhyoon@katech.re.kr">휘발성유기화합물분석(실차-ISO법)(윤정환)</option>
                                            <option value="심경석|kssim@katech.re.kr">휠 충격 시험(심경석)</option>
                                            <option value="정성필|spjung@katech.re.kr">휠/타이어 고속 내구 성능시험(Sl(정성필)</option>
                                            <option value="김완철|wckim@katech.re.kr">흡/배기계통 부품 성능 및 내구시험(김완철)</option>
                                            <option value="남택송|tsnam@katech.re.kr">흡음율/차음율(남택송)</option>
                                            <option value="이현철|">흡차음 측정(이현철)</option>
                                            <option value="최영진|">aaaa(최영진)</option>
                                            <option value="전광기|chnam@katech.re.kr">ABS로(공동)(전광기)</option>
                                            <option value="전광기|chnam@katech.re.kr">ABS로(단독)(전광기)</option>
                                            <option value="김문식|">ADAS 센서 및 시스템 성능 시험(김문식)</option>
                                            <option value="이혁기|hlee@katech.re.kr">AEB VRU 성능 평가(이혁기)</option>
                                            <option value="김진호|jjyang@katech.re.kr">Automatic valve 시험((김진호)</option>
                                            <option value="이병현|">Battery Pack 성능시험(용(이병현)</option>
                                            <option value="이병현|">Battery Pack 수명시험(이병현)</option>
                                            <option value="최성규|">BIW 굽힘, 비틀림강성 측정(최성규)</option>
                                            <option value="남택송|tsnam@katech.re.kr">BLOWER MOTOR 내구(남택송)</option>
                                            <option value="정진범|dhshin@katec.re.kr">BMS 기본 성능시험(정진범)</option>
                                            <option value="정진범|dhshin@katec.re.kr">BMS 동작내구 시험(정진범)</option>
                                            <option value="정진범|dhshin@katec.re.kr">BMS 동작환경특성 시험(정진범)</option>
                                            <option value="김형민|hmkim@katech.re.kr">BSR 가진(김형민)</option>
                                            <option value="김형민|hmkim@katech.re.kr">BSR 소음측정(김형민)</option>
                                            <option value="강호준|hjkang@katech.re.kr">CAN 데이터 링크 계층 측정, 전(강호준)</option>
                                            <option value="박준성|">CAN 데이터 송신/수신 측정(박준성)</option>
                                            <option value="김도현|">CAN 데이터, GPS, IMU 데(김도현)</option>
                                            <option value="전광기|kkjeon@katech.re.kr">Car-to-Car FCW 및 AE(전광기)</option>
                                            <option value="김진호|jjyang@katech.re.kr">Cas flow adjuster 시(김진호)</option>
                                            <option value="김진호|jjyang@katech.re.kr">CNG Compatibility 시(김진호)</option>
                                            <option value="김진호|jjyang@katech.re.kr">CNG filter 시험(Annex(김진호)</option>
                                            <option value="유시복|sbyu@katec.re.kr">CSWS 성능평가(유시복)</option>
                                            <option value="김회용|kimhy@katech.re.kr">e모빌리티 주행 데이터 계측 시험(김회용)</option>
                                            <option value="김회용|kimhy@katech.re.kr">e모빌리티 차량동특성 성능 평가(김회용)</option>
                                            <option value="김회용|kimhy@katech.re.kr">e모빌리티 핵심부품 강도 및 내구성(김회용)</option>
                                            <option value="이지호|">ECU 기능 및 성능 시험(이지호)</option>
                                            <option value="신석산|shchung@katech.re.kr">ECU 성능분석 시험(신석산)</option>
                                            <option value="김진호|jjyang@katech.re.kr">ECU 시험(Annex4H)(김진호)</option>
                                            <option value="신석산|shchung@katech.re.kr">ECU 신호분석 시험(신석산)</option>
                                            <option value="강호준|hjkang@katech.re.kr">ECU 캘리브레이션, ECU I/O(강호준)</option>
                                            <option value="이병화|bhlee2@katech.re.kr">EPT 성능 평가 시험(이병화)</option>
                                            <option value="정진범|dhshin@katec.re.kr">ESS 동작환경특성 시험(정진범)</option>
                                            <option value="정진범|dhshin@katec.re.kr">ESS 보유용량 시험(정진범)</option>
                                            <option value="정진범|dhshin@katec.re.kr">ESS 시간율 용량 시험(정진범)</option>
                                            <option value="정진범|dhshin@katec.re.kr">ESS 싸이클 내구 시험(정진범)</option>
                                            <option value="정진범|dhshin@katec.re.kr">ESS 에너지밀도 시험(정진범)</option>
                                            <option value="정진범|dhshin@katec.re.kr">ESS 자가방전 시험(정진범)</option>
                                            <option value="정진범|dhshin@katec.re.kr">ESS 출력밀도 시험(정진범)</option>
                                            <option value="정진범|dhshin@katec.re.kr">ESS 출력특성 시험(정진범)</option>
                                            <option value="정진범|dhshin@katec.re.kr">ESS 충/방전 효율 시험(정진범)</option>
                                            <option value="정진범|dhshin@katec.re.kr">ESS DC-IR 시험(정진범)</option>
                                            <option value="정진범|dhshin@katec.re.kr">ESS OCV 시험(정진범)</option>
                                            <option value="조수연|sycho@katech.re.kr">EV용 Battery 충방전 시험(조수연)</option>
                                            <option value="김진호|jjyang@katech.re.kr">Excess flow valve 시(김진호)</option>
                                            <option value="김진평|dokim@katech.re.kr">Extensometer 사용시(김진평)</option>
                                            <option value="편범준|parkji@katech.re.kr">FCWS 성능 계측 시험(편범준)</option>
                                            <option value="김진호|jjyang@katech.re.kr">Flexible fuel lines(김진호)</option>
                                            <option value="하진욱|skjeoung@katech.re.kr">FT-IR 분석(건당)(하진욱)</option>
                                            <option value="윤주호|jhyun@katech.re.kr">GAS CHROMATOGRAPHY((윤주호)</option>
                                            <option value="오미혜|mhoh@katech.re.kr">GC/MS System(가스크로마토(오미혜)</option>
                                            <option value="김영필|">G-Lock 시험(김영필)</option>
                                            <option value="이태희|thlee@katech.re.kr">GPS 기반 차량 계측(이태희)</option>
                                            <option value="강래청|rckang@katech.re.kr">HILS 기반 모터 평가(강래청)</option>
                                            <option value="신석산|shchung@katech.re.kr">HILS 기반 차량 거동 특성 평가(신석산)</option>
                                            <option value="조준호|hylee@katech.re.kr">IEEE802.11p 파형 생성 및(조준호)</option>
                                            <option value="윤주호|jhyun@katech.re.kr">INDUCTIVE COUPLED P(윤주호)</option>
                                            <option value="김진호|jjyang@katech.re.kr">Injector 시험(Annex4G(김진호)</option>
                                            <option value="박세경|">INSPECTION(박세경)</option>
                                            <option value="전광기|kkjeon@katech.re.kr">ISO 10844 소음노면 인증용 (전광기)</option>
                                            <option value="곽수진|yhhwang@katech.re.kr">LDWS 성능 평가(곽수진)</option>
                                            <option value="김진호|jjyang@katech.re.kr">LPG filter(김진호)</option>
                                            <option value="김진호|jjyang@katech.re.kr">LPG Injector(김진호)</option>
                                            <option value="김진호|jjyang@katech.re.kr">LPG pressure regula(김진호)</option>
                                            <option value="김진호|jjyang@katech.re.kr">LPG Pressure relief(김진호)</option>
                                            <option value="곽수진|yhhwang@katech.re.kr">LSS(Lane Support Sy(곽수진)</option>
                                            <option value="김진호|jjyang@katech.re.kr">Manual valve 시험(Ann(김진호)</option>
                                            <option value="김철수|cskim@katech.re.kr">MCU의 무부하 출력 성능 측정(김철수)</option>
                                            <option value="김진호|jjyang@katech.re.kr">Mixer 시험(Annex4G.2)(김진호)</option>
                                            <option value="김진호|jjyang@katech.re.kr">Non-return valve 시험(김진호)</option>
                                            <option value="이혁기|">OTA 시뮬레이션 기반 레이더 센서(이혁기)</option>
                                            <option value="조준호|jhcho@katech.re.kr">PCB 전자파 노이즈 분석(2D/3(조준호)</option>
                                            <option value="남택송|tsnam@katech.re.kr">PCB부품 무연솔더강도(Lead P(남택송)</option>
                                            <option value="전광기|kkjeon@katech.re.kr">PG 기반 실차 제동 및 가속 성능(전광기)</option>
                                            <option value="김진호|jjyang@katech.re.kr">Pressure regulator (김진호)</option>
                                            <option value="김진호|jjyang@katech.re.kr">Pressure relief dev(김진호)</option>
                                            <option value="김진호|jjyang@katech.re.kr">Pressure relief dev(김진호)</option>
                                            <option value="김진호|jjyang@katech.re.kr">Pressure relief val(김진호)</option>
                                            <option value="김진호|jjyang@katech.re.kr">Pressure sensor 시험((김진호)</option>
                                            <option value="남택송|tsnam@katech.re.kr">PTC(남택송)</option>
                                            <option value="김진호|jjyang@katech.re.kr">Receptacle 시험(Annex(김진호)</option>
                                            <option value="최범진|bjchoi@katech.re.kr">RLC 측정(최범진)</option>
                                            <option value="고웅희|whko@katech.re.kr">Road Simulator Full(고웅희)</option>
                                            <option value="고웅희|whko@katech.re.kr">Road Simulator Half(고웅희)</option>
                                            <option value="김진호|bhlee2@katech.re.kr">Salt spray test(김진호)</option>
                                            <option value="김진호|jjyang@katech.re.kr">Temperature sensor (김진호)</option>
                                            <option value="박세경|">TEST(박세경)</option>
                                            <option value="박지현|">test2(박지현)</option>
                                            <option value="최성진|jkkim@katech.re.kr">TM Dynamometer 내구시험(최성진)</option>
                                            <option value="조성현|hbpark@katech.re.kr">V2X 단말기 서명 통신 기능 검증(조성현)</option>
                                            <option value="조성현|sjkwag@katech.re.kr">V2X 통신 (IEEE 802.11(조성현)</option>
                                            <option value="조성현|sjkwag@katech.re.kr">V2X 통신 규격 및 수신 성능 측(조성현)</option>
                                            <option value="조성현|sjkwag@katech.re.kr">V2X 통신 규격(IEEE 1609(조성현)</option>
                                            <option value="조성현|sjkwag@katech.re.kr">V2X 통신 물리규격(PHY:IEE(조성현)</option>
                                            <option value="조성현|hbpark@katech.re.kr">V2X 통신 표준 적합성 시험(ET(조성현)</option>
                                            <option value="최범진|">V2X 통신부품 평가(최범진)</option>
                                            <option value="김해룡|hylee@katech.re.kr">V2x용 통신부품의 무선성능 평가 (김해룡)</option>
                                            <option value="김문식|">VILS 기반 ADAS 및 자율주행(김문식)</option>
                                            <option value="조성현|hbpark@katech.re.kr">WAVE 통신 표준 적합성 시험(I(조성현)</option>
                                            <option value="김진평|dokim@katech.re.kr">X-선 잔류응력 측정(김진평)</option>
                                            <option value="김락민|swpark@katech.re.kr">xEV용 고속 모터 성능시험(김락민)</option>
                                            <option value="김락민|swpark@katech.re.kr">xEV용 모터 성능시험(김락민)</option>
                                            <option value="임현택|htlim@katech.re.kr">X-Ray Stress Analyz(임현택)</option>
                                            <option value="이태호|jjyang@katech.re.kr">X-ray, CT 분석(이태호)</option>
                                            <option value="김형민|hmkim@katech.re.kr">X-ray, CT 분석(신뢰성)(김형민)</option>
                                            <option value="관리자">기타(관리자)</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col">비밀글<br class="writebr_">여부</td>
                                    <td>
                                        <input type="checkbox" name="m_sct" id="m_sct" value="sct_Y" onclick="secret_option(this);">
                                        <span class="info">비밀글</span>
                                    </td>
                                    <th scope="col">패스워드</td>
                                    <td>
                                        <input type="password" class="__form1" name="m_pwd" id="m_pwd" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)" size="10" maxlength="10">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col">내용</td>
                                    <td colspan="3">
                                        <textarea name="board_content" id="board_content"></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="writelinkbox_">
                            <button type="submit" class="submitbtn">작성하기</button>
                        </div>
                    </form>
                </div>
            </article>
        </section>
    </div>

    <? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/footer.php"; ?>
</body>

<script type="text/javascript">
    function subibtn() {
        var f = document.wrtfrm;

        if ($("input[name=m_title]").val() == "") {
            alert("글 제목을 입력해주세요.");
            $("input[name=m_title]").focus();
            return false;
        }
        if ($("input[name=m_name]").val() == "") {
            alert("작성자 이름을 입력해주세요.");
            $("input[name=m_name]").focus();
            return false;
        }
        if ($("input[name=m_email]").val() == "") {
            alert("이메일을 입력해주세요.");
            $("input[name=m_email]").focus();
            return false;
        }
        if ($("input[name=m_tel]").val() == "") {
            alert("연락처를 입력해주세요.");
            $("input[name=m_tel]").focus();
            return false;
        }
        if( $.trim($("#m_tel").val()).length < 10 || $.trim($("#m_tel").val()).length > 11 ){
			alert("휴대번호는 10~11자리 입니다.");
			$("#m_tel").select();
			return false;
		}
        if ($("input[name=m_ans]").val() == "") {
            alert("답변자를 선택해주세요.");
            $("input[name=m_ans]").focus();
            return false;
        }
//        if (!f.m_sct.checked) {
//            alert("비밀글 여부를 선택해주세요.");
//            return false;
//        }
        if ($("input[name=m_pwd]").val() == "") {
            alert("패스워드를 입력해주세요.");
            $("input[name=m_pwd]").focus();
            return false;
        }
        if(f.board_content.value == ""){
            alert("글내용을 입력해 주세요.");
            f.board_content.focus();
            return false;
        }
    }
</script>
<script>
    function checkNumber(event) {
        if(event.key === '.' 
           || event.key === '-'
           || event.key >= 0 && event.key <= 9) {
            return true;
        }
        return false;
    }
</script>
<script>
    function secret_option(obj){
        if(!obj.checked)
            {
                document.all.m_sct.value = sct_Y;
                document.all.secret_pin_111.style.display = "none";
            }
        else{
                document.all.m_sct.value = sct_Y;
                document.all.secret_pin_111.style.display = "block";
        }
    }
</script>
</html>
