<?php include_once 'inc/header.php' ?>
<div class="svis svis_bg1">
	<div class="con_width">
	    <span class="tit"><span>STOMPlus2</span></span>
	    <span class="txt">코드관리_품목코드</span>  
    </div>
<article>
	<div id="_snb">
		<ul class="con_width">
			<li><a href="/"><i class="material-icons">home</i></a></li>
			<li class="_ovv">
				<a href="CODE_1.php"><span>코드관리</span></a>
				<ul>
                    <li><a href="FUNCTION_1.php">부가기능</a></li>
                    <li><a href="INV_1.php">매출</a></li>
                    <li><a href="TAKEIN_1.php">매입</a></li>
                    <li><a href="JAEGO_1.php">재고</a></li>
                    <li><a href="CALCULATE_1.php">정산</a></li>
                    <li><a href="LIST_1.php">현황2</a></li>
				</ul>
			</li>

			<li class="_ov">
                <a href="CODE_1.php"><span><em>품목코드</em></span></a>
                <ul>
					<li><a href="CODE_2.php">품목조회</a></li>
                    <li><a href="CODE_3.php">ISSA CODE</a></li>
                    <li><a href="CODE_4.php">매입처별 품목단가</a></li>
                    <li><a href="CODE_5.php">매출처코드</a></li>
                    <li><a href="CODE_6.php">매입처코드</a></li>
                    <li><a href="CODE_7.php">선박코드</a></li>
                    <li><a href="CODE_8.php">정박항코드</a></li>
                    <li><a href="CODE_9.php">승선자명단</a></li>
                    <li><a href="CODE_10.php">환율관리</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="sub_wrap">
        <img src="images/code_1.png" width="100%;">
        <img src="images/code_2.png">
		<p>
            <span>▣ 회사코드</span> : 품목코드 관리를 거래처별로 조회 및 관리 시에 선택 사용<br>
            <span>▣ 검색조건</span> : 검색 시 원하는 조건 값을 선택하여 조회 시에 사용<br>
            <span>▣ 엑셀 UP</span> : 엑셀파일로 만들어진 품목코드 내역을 신규로 품목코드 관리에 추가 변환 시에 사용<br>
            <span>▣ 엑셀 DOWN</span> : 품폭코드 관리의 품목코드들을 엑셀파일로 변환 시에 사용
        </p>
        <img src="images/code_3.png">
		<p>
            <span>▣ 품목코드</span> : 품목의 고유 식별 코드(중복 불가능)<br>
            <span>▣ 품명</span> : 품목의 명칭<br>
            <span>▣ 규격</span> : 품목의 규격 기재<br>
            <span>▣ 단위</span> : 품목의 단위 기재<br>
            <span>▣ 메이커.타입</span> : 품목의 메이커 또는 타입 기재<br>
            <span>▣ 분류</span> : 품목의 대 분류 기재<br>
            <span>▣ PART NO.</span> : 품목의 PART NO. 기재<br>
            <span>▣ 위치정보1</span> : 품목의 재고 위치1 기재<br>
            <span>▣ 위치정보2</span> : 품목의 재고 위치2 기재<br>
            <span>▣ 비고</span> : 품목의 비고사항 기재<br>
            <span>▣ 납기</span> : 품목의 납품 납기일 기재<br>
        </p>
        <img src="images/code_4.png">
		<p>
            <span>▣ 매입단가원화</span> : 품목의 매입 원화단가 기재<span class="under">(견적서/수주서/매출 관리에서 품목코드 입력 시 자동 연계 됨)</span><br>
            <span>▣ 매입단가외화</span> : 품목의 매입 외화단가 기재<span class="under">(견적서/수주서/매출 관리에서 품목코드 입력 시 자동 연계 됨)</span><br>
            <span>▣ 매출단가원화</span> : 품목의 매출 원화단가 기재<span class="under">(견적서/수주서/매출 관리에서 품목코드 입력 시 자동 연계 됨)</span><br>
            <span>▣ 매출단가외화</span> : 품목의 매출 외화단가 기재<span class="under">(견적서/수주서/매출 관리에서 품목코드 입력 시 자동 연계 됨)</span><br>
            <span>▣ 마진율</span> : 품목의 판매 마진율을 기재<span class="under">(견적서/수주서/매출 관리에서 품목코드 입력 시 자동 연계 및 계산 적용 됨)</span><br>
            <span>▣ 단가수정일</span> : 품목의 단가 수정일자 기재<br>
            <span>▣ 물품구분</span> : EDI 신고 연계 시 자동으로 물품을 구분코자 사용<span class="under">(견적서/수주서/매출 관리에서 품목코드 입력 시 자동 연계 됨)</span><br>
            <span>▣ EDI구분</span> : EDI 신고 연계 시 자동으로 EDI 신청 작성을 구분코자 사용<span class="under">(견적서/수주서/매출 관리에서 품목코드 입력 시 자동 연계 됨)</span><br>
            <span>▣ 재고관리구분</span> : 품목에 대한 재고관리 체크 여부<span class="under">(견적서/수주서/매출 관리에서 품목코드 입력 시 자동 연계 됨)</span><br>
            <span>▣ 도면 있음</span> : 품목에 대한 생산 설계 도면의 유무 체크<br>
            <span>▣ 샘플 있음</span> : 품목에 대한 샘플 재고 유무 체크<br>
            <span>▣ 매출부가세 있음</span> : 품목에 대한 매출 발생 시 부가세 유무 체크<span class="under">(견적서/수주서/매출 관리에서 품목코드 입력 시 자동 연계 됨)</span>
        </p>
        <img src="images/code_5.png">
		<p>
            <span>▣ 지정매입처</span> : 품목에 대한 지정 매입처의 코드 기재<span class="under">(견적서/수주서/매출 관리에서 품목코드 입력 시 자동 연계 됨)</span><br>
            <span>▣ 견적의뢰처1~3</span> : 품목에 대한 지정 견적의뢰처1~3의 코드 기재<span class="under">(견적서/수주서/매출 관리에서 품목코드 입력 시 자동 연계 됨)</span><br>
            <span>▣ 상대코드</span> : 품목에 대한 상대 거래처 코드 입력 및 관리<span class="under">(견적서/수주서/매출 관리의 출력 작업 시 설정 체크 후 출력 됨)</span>
        </p>
	</div>
</article>
<?php include_once 'inc/footer.php' ?>
</div>