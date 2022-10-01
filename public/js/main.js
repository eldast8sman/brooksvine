(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });


    // Client carousel
    $(".client-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 90,
        dots: false,
        loop: true,
        nav : false,
        responsive: {
            0:{
                items:2
            },
            576:{
                items:3
            },
            768:{
                items:4
            },
            992:{
                items:5
            },
            1200:{
                items:6
            }
        }
    });

    //Submit Mail
    $("button#submit_mail").click(function(e){
        $(".error_message").remove();
        e.preventDefault();

        var name = $("input#name");
        var email = $("input#email");
        var subject = $("input#subject");
        var message = $("textarea#message");

        if((name.val() == "") || (email.val() == "") || (subject.val() == "") || (message.val() == "")){
            if(name.val() == ""){
                name.after('<div class="col-12 error_message text-danger">Please provide your Name</div>');
            }
            if(email.val() == ""){
                email.after('<div class="col-12 error_message text-danger">Please provide your Email </div>');
            }
            if(subject.val() == ""){
                subject.after('<div class="col-12 error_message text-danger">What is the Subject of your Mail</div>');
            }
            if(message.val()){
                message.after('<div class="col-12 error_message text-danger">Message CANNOT be empty</div>');
            }
            return false;
        } else {
            var data = {
                "name": name,
                "email": email,
                "subject": subject,
                "message": subject
            }

            $.ajax({
                type: "POST",
                url: "api/send_mail",
                data: data,
                dataType: "json",
                headers: {
                    "Accept": "application/json"
                },
                success: function(data){
                    if(data.status == "success"){
                        name.empty();
                        email.empty();
                        subject.empty();
                        message.empty();

                        alert('Message sent successfully. We will get back to you soon');
                    } else {
                        alert(data.message);
                    }
                },
                error: function(data){
                    alert('Oopsie! Message could not be sent'+data.responseText);
                }
            })
        }
    })
    
})(jQuery);

