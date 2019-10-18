<?php include_once 'inc/header.php' ?>
<div class="svis svis_bg1">
	<div class="con_width">
	    <span class="tit"><span>STOMPlus2</span></span>
	    <span class="txt">부가기능_SQL Bakcup</span>  
	</div>
<article>
	<div id="_snb">
		<ul class="con_width">
			<li><a href="/"><i class="material-icons">home</i></a></li>
			<li class="_ovv">
				<a href="FUNCTION_1.php"><span>부가기능</span></a>
				<ul>
					<li><a href="INV_1.php">매출</a></li> 
					<li><a href="TAKEIN_1.php">매입</a></li> 
                    <li><a href="JAEGO_1.php">재고</a></li>
                    <li><a href="CALCULATE_1.php">정산</a></li>
                    <li><a href="LIST_1.php">현황2</a></li>
                    <li><a href="CODE_1.php">코드관리</a></li>
				</ul>
			</li>

			<li class="_ov">
				<a href="FUNCTION_4.php"><span><em>SQL Backup</em></span></a>
				<ul>
                    <li><a href="FUNCTION_5.php">단축키 모음</a></li>
                    <li><a href="FUNCTION_1.php">사용자 관리</a></li>
                    <li><a href="FUNCTION_2.php">ITEM 그리드설정</a></li>
                    <li><a href="FUNCTION_3.php">서류별 서식설정</a></li>
				</ul> 
			</li>
		</ul>
	</div>
	<div class="sub_wrap">
		<img src="images/backup_1.png">
		<p>
            <span>▶ SLQ Database Full Backup</span><br><br>
            &nbsp;&nbsp;&nbsp;- STOMPlus에서 사용되는 모든 DataBase 자료를 지정된 경로(FILE PATH)의 별도의 저장 위치로 복사하는 작업<br>
            &nbsp;&nbsp;&nbsp;&nbsp;(물리적으로 다른 디스크, 외장형 디스크 사용을 권장함)
		</p>
	</div>
</article>
<?php include_once 'inc/footer.php' ?>
</div>