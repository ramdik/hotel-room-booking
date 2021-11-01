// variables
let getTotalValue = document.querySelector('#getTotal');
let getDays = document.querySelector('#days');
let price = document.querySelector('#price');
let grandTotal = document.querySelector('#grand-total');
let getTypeRoom = document.querySelector('#type-room');
let getBreakfast = document.querySelector('#breakfast');
let showTotal = document.querySelector('#show-total');
let submit = document.querySelector('#submit');
let cancel = document.querySelector('#cancel');

// getRoomType price when type room selected
getTypeRoom.addEventListener('change', (e) => {
    if (getTypeRoom.value == "Standar") {
        price.value = 500000;
    } else if (getTypeRoom.value == "Deluxe") {
        price.value = 800000;
    } else if (getTypeRoom.value == "Family") {
        price.value = 1000000;
    }

    e.preventDefault();
});

// getGrandTotal value
getTotalValue.addEventListener('click', (e) => {
    // convert text to int
    getDaysVal = parseInt(getDays.value)

    // getDiscount when order more than three days
    if (getDays.value > 3) {
        let totalPrice = getDaysVal * price.value;
        let getDiscount = totalPrice - (totalPrice * 10 / 100);
        showTotal.value = getDiscount.toLocaleString('id', {style: 'currency', currency: 'IDR'});
        grandTotal.value = getDiscount;
    } else {
        let total = getDaysVal * price.value;
        showTotal.value = total.toLocaleString('id', {style: 'currency', currency: 'IDR'});
        grandTotal.value = total;
    }

    // getBreakfast price when checked
    if (getBreakfast.checked == true) {
        let total = parseInt(grandTotal.value) + 80000;
        showTotal.value = total.toLocaleString('id', {style: 'currency', currency: 'IDR'});
        grandTotal.value = total;
    } else {
        grandTotal.value = grandTotal.value.toLocaleString('id', {style: 'currency', currency: 'IDR'});;
    }

    e.preventDefault();
},false);

// cancel button
cancel.addEventListener('click', function(e) {
    window.location = "index.php#order-now";
    e.preventDefault();
},false);