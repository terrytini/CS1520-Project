//Not my code -------- (provided by the slick website)
$(document).on('ready', function() {
  $('.fade').slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear'
  });
  $('.one-time').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true
  });
});
//Not my code - From StackOverflow
//http://stackoverflow.com/questions/17722497/scroll-smoothly-to-specific-element-on-page
function currentYPosition() {
    // Firefox, Chrome, Opera, Safari
    if (self.pageYOffset) return self.pageYOffset;
    // Internet Explorer 6 - standards mode
    if (document.documentElement && document.documentElement.scrollTop)
        return document.documentElement.scrollTop;
    // Internet Explorer 6, 7 and 8
    if (document.body.scrollTop) return document.body.scrollTop;
    return 0;
}

function elmYPosition(eID) {
    var elm = document.getElementById(eID);
    var y = elm.offsetTop;
    var node = elm;
    while (node.offsetParent && node.offsetParent != document.body) {
        node = node.offsetParent;
        y += node.offsetTop;
    } return y;
}

function smoothScroll(eID) {
    var startY = currentYPosition();
    var stopY = elmYPosition(eID);
    var distance = stopY > startY ? stopY - startY : startY - stopY;
    if (distance < 100) {
        scrollTo(0, stopY); return;
    }
    var speed = Math.round(distance / 100);
    if (speed >= 30) speed = 30;
    var step = Math.round(distance / 25);
    var leapY = stopY > startY ? startY + step : startY - step;
    var timer = 0;
    if (stopY > startY) {
        for ( var i=startY; i<stopY; i+=step ) {
            setTimeout("window.scrollTo(0, "+leapY+")", timer * speed);
            leapY += step; if (leapY > stopY) leapY = stopY; timer++;
        } return;
    }
    for ( var i=startY; i>stopY; i-=step ) {
        setTimeout("window.scrollTo(0, "+leapY+")", timer * speed);
        leapY -= step; if (leapY < stopY) leapY = stopY; timer++;
    }
    return false;
}

var firstName,lastName,emailAddress,text;

$("#contactForm").submit(function (e) {
    e.preventDefault();
    var form = $('#contactForm');
    $.ajax({
        url: "php/submit.php",
        type: "GET",
        data: {"firstname": firstName, "lastname": lastName, "email": emailAddress, "questiontext": text},
        success: function (data){
            $("#formDiv").append("We have successfully received your submission.");
        },
        error: function(xhr){
          $("#formDiv").append("Something went wrong with receiving your submission.");
        }
    });
});

//----END of Not My Code-------------------

function resetForm (event){
	document.getElementById("contactForm").reset();
}
function validation(event) {
	firstName = document.getElementById("firstname").value;
  lastName = document.getElementById("lastname").value;
  emailAddress = document.getElementById("email").value;
  text = document.getElementById("questiontext").value;
	var errMessage = "";
	if ( !firstName ) {
		errMessage += "Need an entry for first name!<br />";
	}
  if ( !emailAddress ) {
    errMessage += "Need an entry for e-mail address!<br />";
  }
	if (!firstName || !emailAddress) {
		document.getElementById('notification').innerHTML = "<u>Error</u>: " + errMessage;
	}
	else {
		document.getElementById('notification').innerHTML = "";
		document.getElementById("formDiv").innerHTML = "<br />Thank you for your submission " + firstName +"!<br /><br />" ;
	}
}
