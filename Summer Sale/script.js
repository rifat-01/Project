let sum = 0;

function inputValue(getValueId) {

    const getValue = parseFloat(document.getElementById(getValueId).innerText);

    sum = sum + getValue;

    if (sum >= 200) {
        document.getElementById('apply').disabled = false;
        document.getElementById('coupon').disabled = false;
    }

    if (sum > 0) {
        document.getElementById('makePurchase').disabled = false;
    }

    document.getElementById('totalPrice').innerText = sum.toFixed(2);
    document.getElementById('total').innerText = sum.toFixed(2);
}

let count = 0;
function cardNameText(getCardName) {
    count++;
    const li = document.createElement('li');
    li.classList.add('newClass');
    li.innerText = count + '. ' + document.getElementById(getCardName).innerText;
    document.getElementById('cardNameShow').appendChild(li);
}


function kitcheCardClick1() {
    inputValue('price1');
    cardNameText('card1');
}
function kitcheCardClick2() {
    inputValue('price2');
    cardNameText('card2')
}
function kitcheCardClick3() {
    inputValue('price3');
    cardNameText('card3')
}

function sportsCardClick1() {
    inputValue('price4');
    cardNameText('card4')
}
function sportsCardClick2() {
    inputValue('price5');
    cardNameText('card5')
}
function sportsCardClick3() {
    inputValue('price6');
    cardNameText('card6')
}

function furnitureCardClick1() {
    inputValue('price7');
    cardNameText('card7')
}
function furnitureCardClick2() {
    inputValue('price8');
    cardNameText('card8')
}
function furnitureCardClick3() {
    inputValue('price9');
    cardNameText('card9')
}

function applyBtn() {
    const coupon = document.getElementById('coupon');

    if (coupon.value == 'SELL200') {
        let totalprice = parseFloat(document.getElementById('totalPrice').innerText);
        let discount = totalprice * 0.2

        document.getElementById('discount').innerText = discount.toFixed(2);
        document.getElementById('total').innerText = (totalprice.toFixed(2) - discount.toFixed(2)).toFixed(2);
    }
    else {
        alert('Invalid Coupon Code! Enter a valid Coupon Code and get your discount');
    }

    coupon.value = '';
}

function goHome() {
    const deleteButtons = document.querySelectorAll('.newClass');

    console.log(deleteButtons);
    for (const deleteButton of deleteButtons) {
        deleteButton.remove();
    }

    document.getElementById('totalPrice').innerText = '00.00';
    document.getElementById('discount').innerText = '00.00';
    document.getElementById('total').innerText = '00.00';
    sum = 0;
    count = 0;

    if (sum <= 0) {
        document.getElementById('makePurchase').disabled = true;
        document.getElementById('apply').disabled = true;
        document.getElementById('coupon').disabled = true;
    }

}