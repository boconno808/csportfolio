$(document).ready(function () {
    $('.menu-toggler').on('click', function() {
        $(this).toggleClass('open');
        $('.top-nav').toggleClass('open');
        $("body").toggleClass("hidden");
    });


    $('.top-nav .nav-link').on('click', function() {
        $('.menu-toggler').removeClass('open');
        $('.top-nav').removeClass('open');
        $("body").removeClass("hidden");
    });

    $('nav a[href*="#"]').on('click', function() {
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top - 100
        }, 1000);
    });

    $('#up').on('click', function() {
        $('html, body').animate({
            scrollTop: 0
        }, 2000);
    });

    AOS.init({
        easing: 'ease',
        duration: 1800,
        once: true
    });

    // $("#submit").on('click', function() {
    //     let name = $("#name").val();
    //     let email = $("#email").val();
    //     let subject = $("#subject").val();
    //     let message = $("#message").val();
    //     $("#returnmessage").empty(); // To empty previous error/success message.
    //     // Checking for blank fields.
    //     $('.form-horizontal input').on('focus', function(){
    //         $("#returnmessage").empty();
    //     })
    //     if (name == '' || email == '' ) {
    //         $("#returnmessage").empty()
    //                 .append('Please fill all the required fields');
    //     }else {
    //         console.log('query in last else');
    //         // Returns successful data submission message when the entered information is stored in database.
    //         $.post("mailer.php", {
    //             inputName: name,
    //             inputEmail: email,
    //             inputSubject: subject,
    //             inputMessage: message
    //         });
    //     }
    // });
});