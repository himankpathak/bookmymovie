var settings = {
               rows: 5,
               cols: 15,
               rowCssPrefix: 'row-',
               colCssPrefix: 'col-',
               seatWidth: 35,
               seatHeight: 35,
               seatCss: 'seat',
               selectedSeatCss: 'selectedSeat',
               selectingSeatCss: 'selectingSeat'
           };

var tprice = [120,150,200,220];

$('#btnTicket').click(function() {
    $('div#invisible').show(500);
    $('div#visible').hide();
    $('div#visible2').hide();
    $("#ticket").prop("readonly", true);
    $('#timing option:not(:selected)').prop('disabled', true);
});

var init = function (reservedSeat) {
                var str = [], seatNo, className;
                for (i = 0; i < settings.rows; i++) {
                    for (j = 0; j < settings.cols; j++) {
                        seatNo = (j + i * settings.cols + 1);
                        className = settings.seatCss + ' ' + settings.rowCssPrefix + i.toString() + ' ' + settings.colCssPrefix + j.toString();
                        if ($.isArray(reservedSeat) && $.inArray(seatNo, reservedSeat) != -1) {
                            className += ' ' + settings.selectedSeatCss;
                        }
                        str.push('<li class="' + className + '"' +
                                  'style="top:' + (i * settings.seatHeight).toString() + 'px;left:' + (j * settings.seatWidth).toString() + 'px">' +
                                  '<a title="' + seatNo + '">' + seatNo + '</a>' +
                                  '</li>');
                    }
                }
                $('#place').html(str.join(''));
            };


            var bookedSeats = [1, 2, 24, 25, 26];
            init(bookedSeats);

var nseat = 1;
$('#timing').on('input', function() {
    nseat = document.getElementById("ticket").value;
    time = document.getElementById("timing").value;
    var amt = nseat * tprice[time];
    document.getElementById("amount").innerHTML = '&#8377; ' + amt + '.00';
    document.getElementById("amountTotal").innerHTML = '&#8377; ' + amt + '.00';
});
$('#ticket').on('input', function() {
    nseat = document.getElementById("ticket").value;
    time = document.getElementById("timing").value;
    var amt = nseat * tprice[time];
    document.getElementById("amount").innerHTML = '&#8377; ' + amt + '.00';
    document.getElementById("amountTotal").innerHTML = '&#8377; ' + amt + '.00';
});

    var selSeat = 0;

    $('.' + settings.seatCss).click(function () {

    if ($(this).hasClass(settings.selectedSeatCss)){
        alert('This seat is already reserved');
    }
    else if($(this).hasClass(settings.selectingSeatCss)){
        $(this).removeClass(settings.selectingSeatCss);
        selSeat--;
    }
    else if(nseat-selSeat==0)
        alert('You have already selected ' + nseat + ' seat(s)');
    else
    {
        $(this).toggleClass(settings.selectingSeatCss);
        selSeat++;
    }
    });

$('#btnShow').click(function () {
    var str = [];
    $.each($('#place li.' + settings.selectedSeatCss + ' a, #place li.'+ settings.selectingSeatCss + ' a'), function (index, value) {
        str.push($(this).attr('title'));
    });
    alert(str.join(','));
})

var mySeats;

$('#btnShowNew').click(function () {
    var str = [], item;
    $.each($('#place li.' + settings.selectingSeatCss + ' a'), function (index, value) {
        item = $(this).attr('title');
        str.push(item);
    });
    alert(str.join(','));

    mySeats = JSON.stringify(str);

})
