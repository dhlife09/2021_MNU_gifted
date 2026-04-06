
var price = [];
price[1] = 1400;
price[2] = 4900;
price[3] = 8420;
price[4] = 6800;
price[5] = 6800;

function displayNum(id, num) {
    var changedNum = num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById(id).innerHTML = changedNum;
}

function amountChanged(id) {
    //여기서 id값은 상품아이디에 해당함(예: 사과는 1번)
    var amount = parseInt(document.getElementById('amount_' + id).value);
    if (amount >= 0) {
        var finalPrice = parseInt(amount)*price[id];
        displayNum('total_' + id, finalPrice);
    } else if (amount<0) {
        alert('구입 수량이 0개 미만이 될 수 없습니다.');
        document.getElementById('amount_' + id).value = 0;
        amountChanged(id);
    } else {
        alert('구입 수량을 숫자로 입력해 주세요.');
        document.getElementById('amount_' + id).value = 0;
        amountChanged(id);
    }
    //Total Price 구하기
    var totalPriceCalcTemp = 0;
    for (var i=1; i!=6; i++) {
        totalPriceCalcTemp = totalPriceCalcTemp + parseInt(document.getElementById('amount_' + i).value)*price[i];
    }
    displayNum('totalPrice', totalPriceCalcTemp);
    if (totalPriceCalcTemp >= 50000) {
        //5만원 이상 5% 할인적용
        displayNum('totalPrice', totalPriceCalcTemp*0.95)
        document.getElementById('5psale').innerText = '(5% 할인이 적용됨)';
    } else {
        document.getElementById('5psale').innerText = '(5만원 이상 구입시 5% 할인)';
    }
}

for (var i=1; i!=6; i++) {
    displayNum('price_' + i, price[i]); //표에 가격 로드
    amountChanged(i)    //웹페이지가 새로고침 되었을 때도 최종 가격을 유지하기 위해 이처럼 설정
}

function purchaseOK() {
    if(!confirm("구입 요청을 하시겠습니까?")) {
        //취소를 누름
    } else {
        //확인을 누름
        var totalAmount = 0;
        for (var i=1; i!=6; i++) {
            totalAmount = totalAmount + parseInt(document.getElementById('amount_' + i).value);
        }
        if(totalAmount > 0) {
            //구매 가능한 상태
            document.amount.submit();
        } else {
            //구매 불가한 상태
            alert("구입 가능한 수량이 없습니다.");
        }
    }
}

function reset() {
    if(!confirm("현재 변경된 모든 수량을 0으로 초기화 하시겠습니까?")) {
        //취소를 누름
    } else {
        //확인을 누름
        for (var i=1; i!=6; i++) {
            document.getElementById('amount_' + i).value = 0;
            amountChanged(i)    //웹페이지가 새로고침 되었을 때도 최종 가격을 유지하기 위해 이처럼 설정
        }
    }
}