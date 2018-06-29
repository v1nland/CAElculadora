$(function () {
    $('input[name="nombreBanco1"]').hide();
    $('input[name="montoCuotaBanco1"]').hide();
    $('input[name="gastoAdicionalBanco1"]').hide();

    //show it when the checkbox is clicked
    $('input[name="checkbox1"]').on('click', function () {
        if ($(this).prop('checked')) {
            $('input[name="nombreBanco1"]').fadeIn();
            $('input[name="montoCuotaBanco1"]').fadeIn();
            $('input[name="gastoAdicionalBanco1"]').fadeIn();
        } else {
            $('input[name="nombreBanco1"]').hide();
            $('input[name="montoCuotaBanco1"]').hide();
            $('input[name="gastoAdicionalBanco1"]').hide();
        }
    });

    $('input[name="nombreBanco2"]').hide();
    $('input[name="montoCuotaBanco2"]').hide();
    $('input[name="gastoAdicionalBanco2"]').hide();

    //show it when the checkbox is clicked
    $('input[name="checkbox2"]').on('click', function () {
        if ($(this).prop('checked')) {
            $('input[name="nombreBanco2"]').fadeIn();
            $('input[name="montoCuotaBanco2"]').fadeIn();
            $('input[name="gastoAdicionalBanco2"]').fadeIn();
        } else {
            $('input[name="nombreBanco2"]').hide();
            $('input[name="montoCuotaBanco2"]').hide();
            $('input[name="gastoAdicionalBanco2"]').hide();
        }
    });

    $('input[name="nombreBanco3"]').hide();
    $('input[name="montoCuotaBanco3"]').hide();
    $('input[name="gastoAdicionalBanco3"]').hide();

    //show it when the checkbox is clicked
    $('input[name="checkbox3"]').on('click', function () {
        if ($(this).prop('checked')) {
            $('input[name="nombreBanco3"]').fadeIn();
            $('input[name="montoCuotaBanco3"]').fadeIn();
            $('input[name="gastoAdicionalBanco3"]').fadeIn();
        } else {
            $('input[name="nombreBanco3"]').hide();
            $('input[name="montoCuotaBanco3"]').hide();
            $('input[name="gastoAdicionalBanco3"]').hide();
        }
    });

    $('input[name="nombreBanco4"]').hide();
    $('input[name="montoCuotaBanco4"]').hide();
    $('input[name="gastoAdicionalBanco4"]').hide();

    //show it when the checkbox is clicked
    $('input[name="checkbox4"]').on('click', function () {
        if ($(this).prop('checked')) {
            $('input[name="nombreBanco4"]').fadeIn();
            $('input[name="montoCuotaBanco4"]').fadeIn();
            $('input[name="gastoAdicionalBanco4"]').fadeIn();
        } else {
            $('input[name="nombreBanco4"]').hide();
            $('input[name="montoCuotaBanco4"]').hide();
            $('input[name="gastoAdicionalBanco4"]').hide();
        }
    });
});
