
$('#nb-dashboard').click(function(){
    $('#profile').addClass('is-hidden');
    $('#dashboard').removeClass('is-hidden');
    $('#setting').addClass('is-hidden');
});

$('#nb-profile').click(function(){
    if( $('#profile').hasClass('is-hidden') ) {
        $('#profile').removeClass('is-hidden');
        $('#dashboard').addClass('is-hidden');
        $('#setting').addClass('is-hidden');
    }
    else {
        $('#profile').addClass('is-hidden');
        $('#dashboard').removeClass('is-hidden');
        $('#setting').addClass('is-hidden');
    }
});

$('#nb-setting').click(function(){
    if( $('#setting').hasClass('is-hidden') ) {
        $('#profile').addClass('is-hidden');
        $('#dashboard').addClass('is-hidden');
        $('#setting').removeClass('is-hidden');
    }
    else {
        $('#profile').addClass('is-hidden');
        $('#dashboard').removeClass('is-hidden');
        $('#setting').addClass('is-hidden');
    }
});

