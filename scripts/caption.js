// vim: set sw=4 :

// Validate this file using JSLint at www.jslint.com.
// Options "Assume a browser", "The Good Parts", and predefined '$'.

"use strict";

// Pops the caption and its contents out.
function makedisplay() {

    //Set the opacity to 0 and height to 1px  
    $('#display .caption').animate({opacity: 0.0}, { queue: false, duration: 0 })
                          .animate({height: '1px'}, { queue: true, duration: 100 });

    //Animate the caption, opacity to 0.7 and heigth to 100px, a slide up effect
    $('#display .caption').animate({opacity: 0.7}, 100)
                          .animate({height: '11ex'}, 200, 
                          // The continuation displays the content of the caption.
                          function () { $('#display .content').animate({opacity: 0.7}, 300); 
                                    })
                          .animate({height: '10ex'}, 100);

}

// The "main" part.
$(document).ready(function () {

    // Initialise everything to hiddent / transparent
    $('#display .caption').css({opacity: 0.0});
    $('#display .content').css({opacity: 0.0});

    // Deal with the mouse events
    $("#display").mouseenter(function (event) {
        makedisplay();
    });
    
    $("#display").mouseleave(function (event) {
        $('#display .content').animate({opacity: 0.0},  50);
        $('#display .caption').animate({opacity: 0.0}, 100);
    });

});

