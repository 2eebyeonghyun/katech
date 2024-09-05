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
                <span>시험 · 검사 분야 접수</span>
            </div>
        </div>
    </div>
   
    <div id="wrap" class="test">
        <section>
            <article>
                <div class="inner">       
                    <form name="testInfo" id="testInfo" action="<?=DIR?>/progress/progress_write.php" method="post" class="__test">
                        <?php include '../inc/checklist2.php'; ?>
                        
                        <div class="frmbtnbox">
                            <button type="submit" class="frmbtn">신청서작성<i class="axi axi-ion-chevron-right"></i></button>
                        </div>
                    </form>
                </div>
            </article>
        </section>
    </div>

    <? include $_SERVER['DOCUMENT_ROOT']."/katech/inc/footer.php"; ?>
</body>
<script>
    document.getElementById('testInfo').addEventListener('submit',function(e){
        e.preventDefault();
        
        const len = document.querySelectorAll('input[name="IndexNo"]:checked').length;
        if(len === 0){
            alert('시험항목을 선택해주세요.');
            
            return;
        }
        this.submit();
    });
</script>
<script type="text/javascript">
    var maxCount = 15;
    var count = 0;

    function CountChecked(field) {
        if (field.checked) {
            count += 1;
        } else {
            count -= 1;
        }

        if (count > maxCount) {
            alert("선택항목은 10개까지만 선택가능합니다!");
            field.checked = false;
            count -= 1;
        }
    }
</script>
<script>
    document.title = "검사 분야 접수 :: KATECH 한국자동차연구원";
</script>
</html>
