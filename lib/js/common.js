$(function () {
    // alert 
    $.extend({
        alertMethod: function (text) {

            $('#alert').html(text).addClass('active')

            setTimeout(function () {

                $('#alert').removeClass('active')
            }, 2000);
        }
    })

    $('#nav-btn').on('click', function () {

        $(this).toggleClass('open')
        $('header .nav-mobile').toggleClass('active')
    })

    $('.nav-mobile .arrow').on('click', function() {
        
        $(this).toggleClass('active').siblings('.sub-menu').toggleClass('active')
    })
    // PC 滚动吸顶

    $(window).scroll(function () {

        if ($(window).scrollTop() > 50) {

            $('header').addClass('fixed')
            $('#brick').show()
        } else {
            $('header').removeClass('fixed')
            $('#brick').hide()
        }
    })

    // 表单验证
    $('#submit').on('click', function () {

        if ($('#user_name').val() == '') {

            $.alertMethod('Please enter your name.')
            return false
        }
        if ($('#email').val() == '') {

            $.alertMethod('Please enter your email address.')
            return false
        }
        if ($('#message').val() == '') {

            $.alertMethod('Please enter message.')
            return false
        }
    })

    if (window.location.hash == '#wpcf7-f6-o1') {
        $.alertMethod('Success,Thank you for your message.')
    }

    if (window.location.hash == '#wpcf7-f143-o1') {
        $.alertMethod('Success,Thank you for your message.')
    }

    $('#menu-left-menu .arrow').on('click', function() {
        
        $(this).parent().addClass('active').siblings().removeClass('active')
    })
})