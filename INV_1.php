<?php include_once 'inc/header.php' ?>
<div class="svis svis_bg1">
	<div class="con_width">
	    <span class="tit"><span>STOMPlus2</span></span>
	    <span class="txt">매출_견적관리</span>  
	</div>
<article>
	<div id="_snb">
		<ul class="con_width">
			<li><a href="/"><i class="material-icons">home</i></a></li>
			<li class="_ovv">
				<a href="INV_1.php"><span>매출</span></a>
				<ul>
					<li><a href="TAKEIN_1.php">매입</a></li> 
					<li><a href="JAEGO_1.php">재고</a></li> 
                    <li><a href="CALCULATE_1.php">정산</a></li>
                    <li><a href="LIST_1.php">현황2</a></li>
                    <li><a href="CODE_1.php">코드관리</a></li>
                    <li><a href="FUNCTION_1.php">부가기능</a></li>
				</ul>
			</li>

			<li class="_ov">
				<a href="INV_1.php"><span><em>견적관리</em></span></a>
				<ul>
					<li><a href="INV_2.php">수주관리</a></li>
					<li><a href="INV_3.php">매출관리</a></li>
					<li><a href="INV_4.php">매출자료생성</a></li>
					<li><a href="INV_5.php">품목코드대체</a></li>
				</ul> 
			</li>
		</ul>
	</div>
	<div class="sub_wrap">
		<img src="images/quo_1.png" width="100%;">
		<p>
			견적서 관리의 첫 화면이다.
		</p>
		<img src="images/quo_2.png">
		<p>
			▶ 여러 가지의 조회 조건을 적용하여, 원하는 결과를 조회 시에 사용
		</p>
		<img src="images/quo_3.png">
		<p>
			<span>▣ 추가</span> : 새로운 오더번호를 추가 시에 사용<br>
			<span>▣ 삭제</span> : 오더번호를 삭제 시에 사용<br>
			<span>▣ 수정</span> : 기존 작성한 오더번호의 내용들을 수정 시에 사용<br>
			<span>▣ 저장</span> : 추가/수정 후 작성한 내용을 저장 시에 사용<br>
			<span>▣ 복사</span> : 기존 작성된 오더번호의 내용과 같은 오더번호를 만들고자 할 시에 사용<br>
			<span>▣ 출력</span> : 작성한 오더번호의 내용을 출력 시에 사용 (견적의뢰서, 견적서, 거래명세서, Inquiry, Quotation, Invoice 등의 <span class="button">서식출력</span>)<br>
			<span>▣ 실행</span> : 작성한 오더를 수주 또는 매출로 자동연계 및 기타(발주서, 매입처별 단가 UPD, 매입처 일괄변경 등) 작업을 할 시에 사용<br>
			<span>▣ 엑셀</span> : 그리드 화면상의 내용들을 엑셀 파일로 변환 시에 사용<br>
			<span>▣ 견적의뢰송신</span> : Web 수발주 시스템을 이용한 견적의뢰 시 사용<br>
			<span>▣ 종료</span> : 견적서 관리 화면을 종료 시에 사용
		</p>
		<img src="images/quo_4.png">
		<p>
			▶ 그리드 화면에서 오른쪽 마우스를 클릭하면 나타나는 메뉴<br>
			&nbsp;&nbsp;&nbsp;<span>▣ 계산서 CHECK 일괄처리</span> : 해당 오더의 진행사항 부분 중 "세금" 란의 CHECK 표시를 일괄적으로 처리<br>
			&nbsp;&nbsp;&nbsp;<span>▣ 계산서 CHECK 일괄취소</span> : 해당 오더의 진행사항 부분 중 "세금" 란의 CHECK 표시를 일괄적으로 해제 처리<br>
			&nbsp;&nbsp;&nbsp;<span>▣ 잠금해제(Unlock)</span> : 해당 오더를 수정 시에 "이건은 다른 사용자가 수정 중입니다."라는 메시지가 나왔을 때 사용하며,<br> 
			&nbsp;&nbsp;&nbsp;메시지가 나타나는 이유는 <span>1. 다른사용자가 현재 사용중일 경우</span>, <span>2. Stomplus를 사용 종료 시에 정상적으로 종료하지 못했을 경우</span> 
			가 있으며,<br>&nbsp;&nbsp;&nbsp;첫번째 경우에는 필히 다른 사용자의 사용여부를 확인 함.
		</p>
		<img  src="images/quo_5.png">
		<p>
			<span>▣ GRID 항목설정</span> : Grid 내의 항목보기를 설정하는 메뉴이며, 재 설정 시에는 초기화 클릭 후 원하는 항목만 Check하여 조정 함.
		</p>
		<img class="size" src="images/quo_6.png">
		<img class="size" src="images/quo_7.png">
		<p>
			<span>▣ 문서번호</span> : 오더의 관리번호(신규로 생성된 견적번호는 ->수주->매출 까지 하나의 문서번호로 관리)<br>
			<span>▣ 진행상태</span> : 오더의 진행사항을 기재(다른 작업자들과의 업무 공유)<br>
			<span>▣ User</span> : 현재 오더의 로그인 작업자<br>
			<span>▣ 작성일자</span> : 오더의 작성일<br>
			<span>▣ 선적일자</span> : 해당 오더 건의 선적일<br>
			<span>▣ 선명</span> : 오더 작성 시 필요한 코드 및 선명(단축버튼 F10)<br>
			<span>▣ Hull No</span> : 선명코드에서 관리되는 선박의 상세정보 중 한가지<br>
			<span>▣ 매출처</span> : 해당 오더 건의 매출처 코드 및 매출처 명(단축버튼 F10)<br>
			<span>▣ 담당자</span> : 매출처의 업무 담당자<br>
			<span>▣ Ref No.</span> : 매출처의 오더 의뢰 번호<br>
			<span>▣ 환율</span> : 오더 작성 시 필요한 국가별 환율을 선택 기재(단축버튼 F10)<br>
			<span>▣ 부가세</span> : 구분이 [있음] 이면 매출처에 대금 청구 시 부가세를 포함하여 청구를 하고, 구분이 [없음] 이면 부가세를 뺀 대금을 청구함.<br>
			<span>▣ 비고</span> : 해당 오더의 Remark 내용들을 기재<br><br>
			<span>▶ D/C & Inv Charge</span><br>
			&nbsp;&nbsp;&nbsp;<span>▣ Discount</span> : 오더 작성 시 할인율을 기재(할인 적용 달러 및 원화 입력 시 할인율 자동 계산)<br>
			&nbsp;&nbsp;&nbsp;<span>▣ PACKING CHARGE 등</span> : 오더 작성 시 각종 운임 비용을 기재함(운임 명도 수정 가능, 달러 및 원화 입력 시 환율 적용 계산)<br><br>
			<span>▶ 세관신고</span> : 세관 EDI 신고 관련 선박 입출항 조회<br>
			<span>▶ 적재승선자</span> : 세관 EDI 신고 관련 적재승선자 입력<br>
			<span>▶ Remarks</span> : 해당 오더의 Remark 내용들을 비고란 외 기재 시 사용<br>
			<span>▶ 지출경비</span> : 해당 오더의 납품 마무리까지의 진행 경비를 기재(현황 메뉴의 매출작업 보고서 출력 시 표기)<br>
			<span>▶ 더존연계</span> : 해당 오더의 자료 일부를 더존회계로 연계 사용시에만 사용
		</p>
		<img src="images/quo_8.png">
		<p>
			<span>① 품목 추가</span> : 오더 작성 품목 추가 시 사용<br>
			<span>② 품목 삭제</span> : 오더 작성 품목 삭제 시 사용<br>
			<span>③ 다른 명세서의 DATA 가져오기</span> : 오더 작성시 과거 작성된 다른 오더의 품목을 가져오거나, 두개의 오더를 하나의 오더로 병합 시에 사용<span class="button">(아이템 병합 화면)</span><br>
			<span>④ 엑셀 불러오기</span> : 엑셀로 만들어진 견적의뢰서 등의 외부 DATA를 현재의 그리드로 가져오고자 할 때 사용<span class="button">(엑셀불러오기 화면)</span><br>
			<span>⑤ 엑셀 내보내기</span> : 현재의 오더 작성 중인 DATA를 외부의 엑셀 파일로 저장하고자 할 때 사용<span class="button">(엑셀내보내기 화면)</span><br>
			<span>⑥ 품목코드 저장</span> : 선택된 품목코드의 내역(품명, 단위, 매출단가, 매입처코드, 매입단가 등)들을 품목코드 관리상의 자료로 자동 업데이트<br>
			<span>⑦ 명세서 금액 재계산</span> : 오더의 매출 원화단가 또는 달러단가를 옵션을 주어 재 계산 시 사용<span class="button">(명세서 금액 재계산)</span><br>
			<span>⑧ Packing 작업을 위해 BOX 필드 보임/숨김</span> : 오더의 매출건에 대한 Packing List 출력 시 제품의 포장 BOX 위치를 나타내기 위하여 사용<br>
			<span>⑨ 매입처별 품목단가 업데이트</span> : 하나의 품목에 대한 다중 매입처의 매입단가를 최종 업데이트 일자로 조회 참조코자 할 시에 사용<br>
			<span>⑩, ⑪, ⑫, ⑬ 품목 이동 버튼</span> : 그리드 화면에서의 품목 이동 시 사용
		</p>
		<img src="images/quo_9.png">
		<p>
			<span>▣ 그리드설정</span> : <span class="button">Config</span>->ITEM 그리드설정 에서 정리한 해당 설정 값들 중에 원하는 설정을 선택<br>
			<span>▣ 매입처</span> : 해당 오더의 전체 매입처 또는 원하는 해당 매입처를 선택(해당 매입처 선택 시 선택한 매입처의 품명만 그리드에 나타남)<br>
			<span>▣ 참조 -> 코드</span> : 코드 체크 후 품목코드 입력 시 자동적으로 품목코드 조회 화면이 나타남<br>
			<span>▣ 참조 -> 품명</span> : 품명 체크 후 품명 입력 시 자동적으로 비슷한 품목들이 조회 화면에 나타남<br>
			<span>▣ 참조 -> Part No</span> : Part No 체크 후 Part No 입력 시 자동적으로 Part No 들이 조회 화면에 나타남<br>
			<span>▣ 품목코드 -> 단순입력</span> : 단순입력 체크의 기능은 품명을 먼저 입력 후 품목코드 란의 코드를 자동 저장 없이 입력코자 할 시에 사용<br>
			<span>▣ 품목코드 -> 자동완성</span> : 자동완성 체크의 기능은 품목코드 입력 시 자동적으로 품목코드들이 조회 화면에 나타남(참조 -> 코드 기능과 유사)<br>
			<span>▣ 정렬 -> Line</span> : Line 체크의 기능은 품목 정렬을 "No"셀의 정의된 번호로 재 정렬 시 사용<br>
			<span>▣ 정렬 -> 매입처</span> : 매입처 체크의 기능은 품목 정렬을 매입처 별로 재 정렬 시 사용<br>
			<span>▣ 정렬 -> 품명</span> : 품명 체크의 기능은 품목 정렬을 품명 순으로 재 정렬 시 사용<br>
			<span>▣ 정렬 -> 코드</span> : 코드 체크의 기능은 품목 정렬을 코드 순으로 재 정렬 시 사용<br>
			<span>▣ 정렬 -> 금액</span> : 금액 체크의 기능은 품목 정렬을 금액 순으로 재 정렬 시 사용
		</p>
		<img src="images/quo_10.png">
		<p>
			▶ 그리드 화면 해당 품목에서 오른쪽 마우스를 클릭하면 나타나는 메뉴<br>
			&nbsp;&nbsp;&nbsp;<span>▣ 단가조회(견적 기준)</span> : 해당 품목의 과거 견적자료 진행내역을 기간별로 조회 및 참조 시에 사용<br>
			&nbsp;&nbsp;&nbsp;<span>▣ 단가조회(수주 기준)</span> : 해당 품목의 과거 수주자료 진행내역을 기간별로 조회 및 참조 시에 사용<br>
			&nbsp;&nbsp;&nbsp;<span>▣ 단가조회(매출 기준)</span> : 해당 품목의 과거 매출자료 진행내역을 기간별로 조회 및 참조 시에 사용<br>
			&nbsp;&nbsp;&nbsp;<span>▣ 단가조회(매입 기준)</span> : 해당 품목의 과거 매입자료 진행내역을 기간별로 조회 및 참조 시에 사용(매입관리 사용 시 해당)<br>
			&nbsp;&nbsp;&nbsp;<span>▣ 견적수주 단가조회</span> : 해당 품목의 과거 견적 및 수주자료를 취합한 진행내역을 기간별로 조회 및 참조 시에 사용<br>
			&nbsp;&nbsp;&nbsp;- 선택 클릭 시 화면 상단에 나타나며, 화면 해제 시에는 "Esc" 를 Key In<br>
			&nbsp;&nbsp;&nbsp;<span>▣ 재고조회</span> : 해당 품목의 매입/매출 기준 재고 조회 시 사용<br>
			&nbsp;&nbsp;&nbsp;<span>▣ 마진조정</span> : 해당 품목 또는 전체 품목의 적용 마진을 일괄적으로 조정 시에 사용<br>
			&nbsp;&nbsp;&nbsp;<span>▣ 화물관리번호연계</span> : 선용품 세관신고 시스템과의 자료 연계 시 사용<br>
			&nbsp;&nbsp;&nbsp;<span>▣ 순번으로 LINE정렬</span> : 품목들의 위치를 "순번" 으로 기재된 순서대로 재정렬 시 사용<br>
			&nbsp;&nbsp;&nbsp;<span>▣ ITEM NO로 LINE정렬</span> : 품목들의 위치를 "Item" 으로 기재된 순서대로 재정렬 시 사용<br>
			&nbsp;&nbsp;&nbsp;<span>▣ 매입처별 품목단가 참조</span> : 해당 품목에 대한 다중 매입처의 매입단가를 조회 참조 시에 사용<span class="button">(매입처별 품목단가 관리)</span><br>
			&nbsp;&nbsp;&nbsp;- 클릭 체크 후 매입처코드에 포커스 이동 시 자동으로 화면이 나타나며, 화면 해제 시에는 "Esc" 를 Key In<br>
			&nbsp;&nbsp;&nbsp;- 체크 해제 후 매입처 코드에 포커스 이동 시에는 별도의 반응이 없음
		</p>
		<img class="size" src="images/quo_11.png">
		<p>
			◆ 그리드 화면 "품목사항" 줄 아무 위치에서 오른쪽 마우스를 클릭 후 <span class="color">"사용자 옵션"</span> 을 클릭 하면 나타나는 메뉴<br>
			&nbsp;&nbsp;&nbsp;▶ <span>도구모음</span><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>▣ 편집버튼</span> : 체크 유무에 따라 품목사항 줄의 1, 2번<span class="button">(품목추가, 품목삭제)</span> 버튼을 나타나고 또는 나타나지 않게 함<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>▣ 이동버튼</span> : 체크 유무에 따라 품목사항 줄의 10, 11, 12, 13번<span class="button">(이동버튼)</span> 버튼을 나타나고 또는 나타나지 않게 함<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>▣ 매입처 필터링</span> : 체크 유무에 따라 품목사항 줄의 매입처 선택<span class="button">(매입처)</span> 란이 나타나고 또는 나타나지 않게 함<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>▣ 품목참조기능</span> : 체크 유무에 따라 품목사항 줄의 참조(코드, 품명, Part No) 체크<span class="button">(참조)</span> 란이 나타나고 또는 나타나지 않게 함<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>▣ 품목코드 입력방식</span> : 체크 유무에 따라 품목사항 줄의 품목코드(단순입력, 자동완성) 체크<span class="button">(품목코드)</span> 란이 나타나고 또는 나타나지 않게 함<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>▣ 그리드설정</span> : 체크 유무에 따라 품목사항 줄의 그리드설정<span class="button">(그리드설정)</span> 란이 나타나고 또는 나타나지 않게 함
		</p>
		<img src="images/quo_12.png">
		<p>
			<span>▣ 그리드 설정편집</span> : 그리드 입력 Cell 위치를 조정하고자 할 시에 사용 <span class="buttom">(그리드설정)</span><br>
			<span>▣ 부가기능-아이템병합</span> : 체크 유무에 따라 <span class="buttom">아이템 병합 버튼</span> 이 나타나고 또는 나타나지 않게 함<br>
			<span>▣ 부가기능-엑셀가져오기</span> : 체크 유무에 따라 <span class="buttom">엑셀가져오기 버튼</span> 이 나타나고 또는 나타나지 않게 함<br>
			<span>▣ 부가기능-액셀내보내기</span> : 체크 유무에 따라 <span class="buttom">엑셀내보내기 버튼</span> 이 나타나고 또는 나타나지 않게 함<br>
			<span>▣ 부가기능-품목코드저장</span> : 체크 유무에 따라 <span class="buttom">품목코드저장 버튼</span> 이 나타나고 또는 나타나지 않게 함<br>
			<span>▣ 부가기능-금액재계산</span> : 체크 유무에 따라 <span class="buttom">금액재계산 버튼</span> 이 나타나고 또는 나타나지 않게 함<br>
			<span>▣ 부가기능-팩킹작업</span> : 체크 유무에 따라 <span class="buttom">팩킹작업 버튼</span> 이 나타나고 또는 나타나지 않게 함<br>
			<span>▣ 부가기능-매입처단가저장</span> : 체크 유무에 따라 <span class="buttom">매입처단가저장 버튼</span> 이 나타나고 또는 나타나지 않게 함<br><br>
			<span>▣ 품목정렬-매입처</span> : 체크 유무에 따라 <span class="buttom">매입처 체크 버튼</span> 이 나타나고 또는 나타나지 않게 함<br>
			<span>▣ 품목정렬-품명</span> : 체크 유무에 따라 <span class="buttom">품명 체크 버튼</span> 이 나타나고 또는 나타나지 않게 함<br>
			<span>▣ 품목정렬-코드</span> : 체크 유무에 따라 <span class="buttom">코드 체크 버튼</span> 이 나타나고 또는 나타나지 않게 함<br>
			<span>▣ 품목정렬-금액</span> : 체크 유무에 따라 <span class="buttom">금액 체크 버튼</span> 이 나타나고 또는 나타나지 않게 함
		</p>
		<img src="images/quo_13.png">
		<p>
			<span>▣ 옵션설정저장</span> : 그리드의 설정 상태 및 각종 옵션 설정값의 변경 저장 시에 사용<br>
			- <span class="buttom">"Config->사용자 환경설정->ENV->견적관리등 옵션설정 자동저장 = N"</span> 일 때만 나타남
		</p>
		<img src="images/quo_14.png">
		<p>
			▶ 보기선택<br>
			&nbsp;&nbsp;&nbsp;<span>▣ 세관신고</span> : 체크 유무에 따라 화면 오른쪽 상단의 <span class="buttom">(세관신고)</span> 탭이 나타나고 또는 나타나지 않게 함<br>
			&nbsp;&nbsp;&nbsp;<span>▣ 적재승선자</span> : 체크 유무에 따라 화면 오른쪽 상단의 <span class="buttom">(적재승선자)</span> 탭이 나타나고 또는 나타나지 않게 함<br>
			&nbsp;&nbsp;&nbsp;<span>▣ Remarks</span> : 체크 유무에 따라 화면 오른쪽 상단의 <span class="buttom">(Remarks)</span> 탭이 나타나고 또는 나타나지 않게 함<br>
			&nbsp;&nbsp;&nbsp;<span>▣ 지출경비</span> : 체크 유무에 따라 화면 오른쪽 상단의 <span class="buttom">(지출경비)</span> 탭이 나타나고 또는 나타나지 않게 함<br>
			&nbsp;&nbsp;&nbsp;<span>▣ 더존연계</span> : 체크 유무에 따라 화면 오른쪽 상단의 <span class="buttom">(더존연계)</span> 탭이 나타나고 또는 나타나지 않게 함
		</p>
		<img src="images/quo_15.png">
		<p>
			<span class="bck">(여섯개의 탭중에 선택한 탭을 화면에서 제일 앞에 나오게 함)</span><br><br>
			<span>▣ 통화별 집계표시</span> : 체크 유무에 따라 화면 하단의 오더건에 대한 통화별 매출액들이 나타나고 또는 나타나지 않게 함<br>
			<span>▣ 아이템 합계표시</span> : 체크 유무에 따라 내역입력 화면 하단의 오더건에 대한 매출액 원화, 달러 마진 등이 나타나고 또는 나타나지 않게 함<br>
			<span>▣ 그리드 폰트설정</span> : 관리 화면 및 내역입력 화면의 그리드 폰트를 변경 시에 사용<br>
			<span>▣ 해상도</span> : 화면 해상도 지원 모드 체크 시 사용
		</p>
		<img src="images/quo_16.png">
		<p>
			▶ 편집옵션<br>
				&nbsp;&nbsp;&nbsp;<span>▣ 실시간 저장</span> : 작성중인 오더 품목들을 저장 버튼을 누르지 않고 자동으로 저장하는 기능 <span class="color">(주의 : 사용 전 꼭 이씨스에 문의)</span><br>
				&nbsp;&nbsp;&nbsp;<span>▣ 품목명 메모형식 입력</span> : 오더 작성시 품명 입력 방식을 메모형식으로 변경 시 사용(라인 지정수 만큼 세로로 늘어남)<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 메모형식에 의한 품명 입력 시 줄 바꿈 변경 키는 <span class="under">"Ctrl + Enter"</span><br>
				&nbsp;&nbsp;&nbsp;<span>▣ 매입처별 품목단가 참조</span> : 오더 작성시 매입처코드 셀로 포커스 이동 시 자동으로 다중 매입처 선택 오른쪽 상단 화면에 나타남<br>
				&nbsp;&nbsp;&nbsp;<span>▣ 아이템 자동추가 라인수</span> : 오더 신규 추가 시 설정된 라인값으로 그리드에 공백의 라인을 자동 추가 시 사용<br>
				&nbsp;&nbsp;&nbsp;<span>▣ 중간품목코드참조</span> : 오더 작성 품목코드 입력 시 코드의 일부 내용으로 해당 품목을 조회 시에 사용<br>
				&nbsp;&nbsp;&nbsp;<span>▣ 중간PartNo참조</span> : 오더 작성 Part No 입력 시 Part No의 일부 내용으로 해당 품목을 조회 시에 사용<br>
				&nbsp;&nbsp;&nbsp;<span>▣ 타입별 품목조회</span> : 오더 작성시 지정된 파트 타입 별로 품목을 조회 시에 사용<br>
				&nbsp;&nbsp;&nbsp;<span>▣ 상대코드 자동완성</span> : 오더 작성 상대코드 입력 시 자동적으로 상대코드 조회 화면이 하단에 나타남<br>
				&nbsp;&nbsp;&nbsp;<span>▣ 상대코드 자동참조</span> : 오더 작성 상대코드 입력 시 자동적으로 상대코드 조회 화면이 상단에 나타남
		</p>
		<img src="images/quo_17.png">
		<p>
			<span>▶ 서식 출력</span> : 작성된 오더의 필요한 서류를 선택하여 <span class="uner">출력/메일/자동팩스/PDF 파일생성/엑셀파일 변환</span> 등의 작업을 함
		</p>
		<img src="images/quo_18.png">
		<p>
			<span>▣ 미리보기</span> : 선택한 서류에 대하여 화면으로 미리보기 한 후 출력 시에 사용<br>
			<span>▣ 바로출력</span> : 선택한 서류에 대하여 화면으로 미리보기 없이 프린터로 바로 출력 시에 사용<br>
			<span>▣ 메일발송</span> : 선택한 서류에 대하여 아웃룩 또는 아웃룩 익스프레스로 바로 메일 발송 시에 사용<br>
			<span>▣ 팩스전송</span> : 선택한 서류에 대하여 자동으로 팩스 발송 시에 사용
		</p>
		<img class="size" src="images/quo_19.png">
		<p>
			<span>▣ 엑셀저장</span> : 선택한 서류에 대한 내용들을 엑셀파일로 변환 시에 사용<br>
			<span>▣ 설정저장</span> : 선택한 서류에 대한 출력 시 설정된 옵션 및 변경된 내용들을 저장 시에 사용(화면 종료 후 재 출력 시 저장된 값에 기준함)<br>
			<span>▣ 설정초기화</span> : 선택한 서류에 대한 출력 시 설정 저장 된 값들을 초기화 하여 출력 작업 시에 사용
		</p>
		<img src="images/quo_20.png">
		<p>
			<span>▶ 다른 명세서의 DATA 가져오기(아이템 병합)</span> : 오더 작성 시 과거 작성된 다른 오더의 품목을 가져오거나, 두개의 오더를 하나의 오더로 병합 시에 사용
		</p>
		<img src="images/quo_21.png">
		<p>
			<span>▶ 엑셀파일 불러오기</span> : 오더 작성 시 엑셀파일의 품목들을 그리드로 연계 시에 사용
		</p>
		<img src="images/quo_22.png">
		<p>
			<span>▶ 엑셀파일 내보내기</span> : 오더 작성 시 그리드의 품목들을 엑셀파일로 변환 시에 사용
		</p>
		<img src="images/quo_23.png">
		<p>
			<span>▶ 명세서의 금액을 다시 계산합니다.</span> : 오더 작성 시 품목들의 매출단가를 원하는 옵션에 따라 변경 적용 시에 사용
		</p>
	</div>
</article>
<?php include_once 'inc/footer.php' ?>
</div>