$(document).ready(function(){

    $('a').on('click', function(event) {
        if (this.hash !== '') {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){
                window.location.hash = hash;
            });
        }
    });

    // $('#menuToggle, .menu-close').on('click', function(){
    //     $('#menuToggle').toggleClass('active');
    //     $('body').toggleClass('body-push-toleft');
    //     $('#menu').toggleClass('menu-open');
    // });

    $('#form_contact').submit(function(event) {
        $('.waiting-text').show(100);
        var formData = {
            'name': $('input[name="name"]').val(),
            'email': $('input[name="email"]').val(),
            'phone': $('input[name="phone"]').val()
        };
        $.ajax({
            url: '/contact/receipt',
            type: 'post',
            data: formData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            dataType: 'json',
            success: function (data) {
                if (data.status == 1) {
                    $('input[name="name"]').val('');
                    $('input[name="email"]').val('');
                    $('input[name="phone"]').val('');
                    $('.waiting-text').hide();
                    $('.success-text').show(500);
                    setTimeout(function(){
                        $('.success-text').hide(500);
                    }, 8000);
                }
            }
        });
        event.preventDefault();
    });

});