<?php include_once 'inc/header.php' ?>
<div class="svis svis_bg1">
	<div class="con_width">
	    <span class="tit"><span>STOMPlus2</span></span>
	    <span class="txt">정산_수금관리</span>  
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
                <a href="CALCULATE_2.php"><span><em>수금관리</em></span></a>
                <ul>
                    <li><a href="CALCULATE_3.php">지급관리</a></li>
					<li><a href="CALCULATE_4.php">eTB응답</a></li>
                    <li><a href="CALCULATE_1.php">세금계산서</a></li>
				</ul> 
			</li>
		</ul>
	</div>
	<div class="sub_wrap">
		<img src="images/MISU0001.png">
		<p>
            <span>▶ 수금 관리 화면</span> : 발생된 매출자료에 대한 거래처별 수금관리 내역 등록 시에 사용(출력조회는 <span class="under">현황->미수금 현황</span> 메뉴에서 사용)
		</p>
		<img src="images/MISU0002.png">
		<p>
            <span>▶ 수금 관리 화면(외화)</span> : 발생된 매출자료에 대한 거래처별 수금관리 내역 등록 시에 사용(출력조회는 <span class="under">현황->미수금 현황</span> 메뉴에서 사용)
        </p>
	</div>
</article>
<?php include_once 'inc/footer.php' ?>
</div>