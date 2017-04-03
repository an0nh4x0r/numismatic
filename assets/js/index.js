var rangeSlider = $("#ex2").slider({});

$('#range_submit').on('click', function () {
    alert(rangeSlider.slider('getValue'));
});