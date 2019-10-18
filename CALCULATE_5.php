<?php include_once 'inc/header.php' ?>
<div class="svis svis_bg1">
	<div class="con_width">
	    <span class="tit"><span>STOMPlus2</span></span>
	    <span class="txt">정산_eTB응답</span>  
    </div>
<article>
	<div id="_snb">
		<ul class="con_width">
			<li><a href="/"><i class="material-icons">home</i></a></li>
			<li class="_ovv">
				<a href="CALCULATE_1.php"><span>정산</span></a>
				<ul>
                    <li><a href="ACCOUNT_1.php">회계</a></li>
                    <li><a href="LIST_1.php">현황2</a></li>
                    <li><a href="CODE_1.php">코드관리</a></li>
                    <li><a href="FUNCTION_1.php">부가기능</a></li>
                    <li><a href="INV_1.php">매출</a></li>
                    <li><a href="TAKEIN_1.php">매입</a></li>
                    <li><a href="JAEGO_1.php">재고</a></li>
				</ul>
			</li>

			<li class="_ov">
                <a href="CALCULATE_5.php"><span><em>eTB응답</em></span></a>
                <ul>
                    <li><a href="CALCULATE_6.php">회계자료 생성</a></li>
                    <li><a href="CALCULATE_7.php">회계S/W 실행</a></li>
                    <li><a href="CALCULATE_1.php">세금계산서</a></li>
                    <li><a href="CALCULATE_2.php">일일전표발행</a></li>
                    <li><a href="CALCULATE_3.php">수금관리</a></li>
                    <li><a href="CALCULATE_4.php">지급관리</a></li>
				</ul> 
			</li>
		</ul>
	</div>
	<div class="sub_wrap">
    <img class="etb" src="images/etb001.png" height="350px;">
    <img src="images/etb002.png" height="350px;">
	<p>
        <span>▶ eTB응답수신 진행</span> : 서버에 접속하여 수신문서를 받음. 수신된 문서가 있을 시 <span>eTB응답 등록창</span>으로 수신문서 리스트를 보여줌
    </p>
    <img src="images/etb003.png">
    <p>
        <span>▶ eTB응답통보</span><br>
        &nbsp;&nbsp;&nbsp;- 응답 유형별 통보내용을 확인하는 메뉴<br>
        &nbsp;&nbsp;&nbsp;- KTNET 오류, 거부(화주)등의 내용은 통보내용을 확인하여 오류를 수정하도록 한다.
    </p>
    </div>
</article>
<?php include_once 'inc/footer.php' ?>
</div>