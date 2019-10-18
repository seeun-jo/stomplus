<?php include_once 'inc/header.php' ?>
<div class="svis svis_bg1">
	<div class="con_width">
	    <span class="tit"><span>STOMPlus2</span></span>
	    <span class="txt">정산_세금계산서</span>  
    </div>
<article>
	<div id="_snb">
		<ul class="con_width">
			<li><a href="/"><i class="material-icons">home</i></a></li>
			<li class="_ovv">
				<a href="CALCULATE_1.php"><span>정산</span></a>
				<ul>
                    <li><a href="LIST_1.php">현황2</a></li>
                    <li><a href="CODE_1.php">코드관리</a></li>
                    <li><a href="FUNCTION_1.php">부가기능</a></li>
                    <li><a href="INV_1.php">매출</a></li>
                    <li><a href="TAKEIN_1.php">매입</a></li>
                    <li><a href="JAEGO_1.php">재고</a></li>
				</ul>
			</li>

			<li class="_ov">
                <a href="CALCULATE_1.php"><span><em>세금계산서</em></span></a>
                <ul>
					<li><a href="CALCULATE_2.php">수금관리</a></li>
                    <li><a href="CALCULATE_3.php">지급관리</a></li>
					<li><a href="CALCULATE_4.php">eTB응답</a></li>
				</ul> 
			</li>
		</ul>
	</div>
	<div class="sub_wrap">
		<img src="images/vat_1.png" width="100%;">
		<p>
            <span>▶ 세금계산서 관리 화면</span> : 발생된 매출자료에 대한 세금계산서 및 전자 세금계산서 발행, 국세청으로의 송수신 시에 사용
        </p>
	</div>
</article>
<?php include_once 'inc/footer.php' ?>
</div>