let tab__item1 = document.querySelector('.tab__item1');
let tab__item2 = document.querySelector('.tab__item2');
let genPlan = document.querySelector('.GenPlan');
let Options = document.querySelector('.Options');

tab__item2.addEventListener('click', () => {
    genPlan.classList.add('none');
    Options.classList.remove('none');
    tab__item2.classList.add('tab__item-active')
    tab__item1.classList.remove('tab__item-active')
})
tab__item1.addEventListener('click', () => {
    genPlan.classList.remove('none');
    Options.classList.add('none');
    tab__item2.classList.remove('tab__item-active')
    tab__item1.classList.add('tab__item-active')
})


// ползунок для выбора цены 
$(".polzunok-price").slider({
    min: 1500000,
    max: 14500000,
    values: [4500000, 14500000],
    range: true,
    animate: "fast",
    slide: function (event, ui) {
        $(".polzunok-input-price-left").val(ui.values[0]);
        $(".polzunok-input-price-right").val(ui.values[1]);
    }
});
$(".polzunok-input-price-left").val($(".polzunok-price").slider("values", 0));
$(".polzunok-input-price-right").val($(".polzunok-price").slider("values", 1));
$(".polzunok-container-price input").change(function () {
    var input_left = $(".polzunok-input-price-left").val().replace(/[^0-9]/g, ''),
        opt_left = $(".polzunok-price").slider("option", "min"),
        where_right = $(".polzunok-price").slider("values", 1),
        input_right = $(".polzunok-input-price-right").val().replace(/[^0-9]/g, ''),
        opt_right = $(".polzunok-price").slider("option", "max"),
        where_left = $(".polzunok-price").slider("values", 0);
    if (input_left > where_right) {
        input_left = where_right;
    }
    if (input_left < opt_left) {
        input_left = opt_left;
    }
    if (input_left == "") {
        input_left = 0;
    }
    if (input_right < where_left) {
        input_right = where_left;
    }
    if (input_right > opt_right) {
        input_right = opt_right;
    }
    if (input_right == "") {
        input_right = 0;
    }
    $(".polzunok-input-price-left").val(input_left);
    $(".polzunok-input-price-right").val(input_right);
    if (input_left != where_left) {
        $(".polzunok-price").slider("values", 0, input_left);
    }
    if (input_right != where_right) {
        $(".polzunok-price").slider("values", 1, input_right);
    }
});



// ползунок для выбора квадратуру 
$(".polzunok-m2").slider({
    min: 31,
    max: 125,
    values: [41, 125],
    range: true,
    animate: "fast",
    slide: function (event, ui) {
        $(".polzunok-input-m2-left").val(ui.values[0]);
        $(".polzunok-input-m2-right").val(ui.values[1]);
    }
});
$(".polzunok-input-m2-left").val($(".polzunok-m2").slider("values", 0));
$(".polzunok-input-m2-right").val($(".polzunok-m2").slider("values", 1));
$(".polzunok-container-m2 input").change(function () {
    var input_left = $(".polzunok-input-m2-left").val().replace(/[^0-9]/g, ''),
        opt_left = $(".polzunok-m2").slider("option", "min"),
        where_right = $(".polzunok-m2").slider("values", 1),
        input_right = $(".polzunok-input-m2-right").val().replace(/[^0-9]/g, ''),
        opt_right = $(".polzunok-m2").slider("option", "max"),
        where_left = $(".polzunok-m2").slider("values", 0);
    if (input_left > where_right) {
        input_left = where_right;
    }
    if (input_left < opt_left) {
        input_left = opt_left;
    }
    if (input_left == "") {
        input_left = 0;
    }
    if (input_right < where_left) {
        input_right = where_left;
    }
    if (input_right > opt_right) {
        input_right = opt_right;
    }
    if (input_right == "") {
        input_right = 0;
    }
    $(".polzunok-input-m2-left").val(input_left);
    $(".polzunok-input-m2-right").val(input_right);
    if (input_left != where_left) {
        $(".polzunok-m2").slider("values", 0, input_left);
    }
    if (input_right != where_right) {
        $(".polzunok-m2").slider("values", 1, input_right);
    }
});



// ползунок для выбора квадратуру 
$(".polzunok-floor").slider({
    min: 1,
    max: 13,
    values: [3, 13],
    range: true,
    animate: "fast",
    slide: function (event, ui) {
        $(".polzunok-input-floor-left").val(ui.values[0]);
        $(".polzunok-input-floor-right").val(ui.values[1]);
    }
});
$(".polzunok-input-floor-left").val($(".polzunok-floor").slider("values", 0));
$(".polzunok-input-floor-right").val($(".polzunok-floor").slider("values", 1));
$(".polzunok-container-floor input").change(function () {
    var input_left = $(".polzunok-input-floor-left").val().replace(/[^0-9]/g, ''),
        opt_left = $(".polzunok-floor").slider("option", "min"),
        where_right = $(".polzunok-floor").slider("values", 1),
        input_right = $(".polzunok-input-floor-right").val().replace(/[^0-9]/g, ''),
        opt_right = $(".polzunok-floor").slider("option", "max"),
        where_left = $(".polzunok-floor").slider("values", 0);
    if (input_left > where_right) {
        input_left = where_right;
    }
    if (input_left < opt_left) {
        input_left = opt_left;
    }
    if (input_left == "") {
        input_left = 0;
    }
    if (input_right < where_left) {
        input_right = where_left;
    }
    if (input_right > opt_right) {
        input_right = opt_right;
    }
    if (input_right == "") {
        input_right = 0;
    }
    $(".polzunok-input-floor-left").val(input_left);
    $(".polzunok-input-floor-right").val(input_right);
    if (input_left != where_left) {
        $(".polzunok-floor").slider("values", 0, input_left);
    }
    if (input_right != where_right) {
        $(".polzunok-floor").slider("values", 1, input_right);
    }
});




var checkboxes = document.querySelectorAll('input.subOption'),
    checkall = document.getElementById('option');

for(var i=0; i<checkboxes.length; i++) {
  checkboxes[i].onclick = function() {
    var checkedCount = document.querySelectorAll('input.subOption:checked').length;

    checkall.checked = checkedCount > 0;
    checkall.indeterminate = checkedCount > 0 && checkedCount < checkboxes.length;
  }
}

checkall.onclick = function() {
  for(var i=0; i<checkboxes.length; i++) {
    checkboxes[i].checked = this.checked;
  }
}