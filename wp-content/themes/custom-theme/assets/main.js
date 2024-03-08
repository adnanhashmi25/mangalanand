
jQuery(document).ready(function(){ 
    jQuery('#bg-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        items:1,
        dots: false,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 2000,
    })
 });
 jQuery(document).ready(function(){ 
  jQuery('#app-doctors').owlCarousel({
      loop:true,
      margin:10,
      nav:false,
      items:1,
      autoplay: true,
      dots: false,
      responsive : {
        600: {
          items:4
        }
      }
  })
});
jQuery(document).ready(function(){ 
  jQuery('#mission-vision').owlCarousel({
      loop:true,
      nav:false,
      items:1,
      dots: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplaySpeed: 2000,
  })
});
jQuery(document).ready(function(){ 
  jQuery('#patient-review').owlCarousel({
      loop:true,
      nav:false,
      items:1,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplaySpeed: 2000,
  })
});

/* read more hide*/
jQuery('.moreless-button').click(function() {
  jQuery('.moretext').slideToggle();
  if (jQuery('.moreless-button').text() == "Read more") {
    jQuery(this).hide();
  } else {
    jQuery(this).text("Read more")
  }
});


/* Auto scroll section*/
jQuery(document).ready(function(){
  var height = 0;
  var scrollDown = function() {
    var elementh = document.getElementById('myTab1').offsetHeight;
    var absid = document.getElementById('ofsh');
    var absh = jQuery(absid).height();
    height = height + absh;
    if (height < (elementh-100) ){
      absid.scrollTop += height;
      // elementid.scrollTo(absh, 0);
      console.log(height)
    } else{
      absid.scrollTop = 0;
      height = 0;
    }
  }
  setInterval(function() {
    scrollDown();
  }, 10000);
});

jQuery(document).ready(function(){
  var height = 0;
  var scrollDown = function() {
    var elementh = document.getElementById('myTab2').offsetHeight;
    var absid = document.getElementById('ofsh2');
    var absh = jQuery(absid).height();
    height = height + absh;
    if (height < elementh ){
      absid.scrollTop += height;
      // elementid.scrollTo(absh, 0);
      console.log(height)
    } else{
      absid.scrollTop = 0;
      height = 0;
    }
  }
  setInterval(function() {
    scrollDown();
  }, 8000);
});

jQuery(document).ready(function(){
  var height = 0;
  var scrollDown = function() {
    var elementh = document.getElementById('myTab3').offsetHeight;
    var absid = document.getElementById('ofsh3');
    var absh = jQuery(absid).height();
    height = height + absh;
    if (height < (elementh-100) ){
      absid.scrollTop += height;
      // elementid.scrollTo(absh, 0);
      console.log(height)
    } else{
      absid.scrollTop = 0;
      height = 0;
    }
  }
  setInterval(function() {
    scrollDown();
  }, 15000);
});

jQuery(document).ready(function(){
  var height = 0;
  var scrollDown = function() {
    var elementh = document.getElementById('myTab4').offsetHeight;
    var absid = document.getElementById('ofsh4');
    var absh = jQuery(absid).height();
    height = height + absh;
    if (height < elementh ){
      absid.scrollTop += height;
      // elementid.scrollTo(absh, 0);
      console.log(height)
    } else{
      absid.scrollTop = 0;
      height = 0;
    }
  }
  setInterval(function() {
    scrollDown();
  }, 8000);
});

jQuery(document).ready(function(){
  var height = 0;
  var scrollDown = function() {
    var elementh = document.getElementById('myTab5').offsetHeight;
    var absid = document.getElementById('ofsh5');
    var absh = jQuery(absid).height();
    height = height + absh;
    if (height < elementh ){
      absid.scrollTop += height;
      // elementid.scrollTo(absh, 0);
      console.log(height)
    } else{
      absid.scrollTop = 0;
      height = 0;
    }
  }
  setInterval(function() {
    scrollDown();
  }, 30000);
});

jQuery(document).ready(function(){
  var height = 0;
  var scrollDown = function() {
    var elementh = document.getElementById('myTab6').offsetHeight;
    var absid = document.getElementById('ofsh6');
    var absh = jQuery(absid).height();
    height = height + absh;
    if (height < elementh ){
      absid.scrollTop += height;
      // elementid.scrollTo(absh, 0);
      console.log(height)
    } else{
      absid.scrollTop = 0;
      height = 0;
    }
  }
  setInterval(function() {
    scrollDown();
  }, 30000);
});


 var tabChange = function() {
    var tabs = jQuery(".serv3 > li");
    var active = tabs.filter(".active").removeClass("active");
    var next = active.next("li").length
      ? active.next("li")
      : tabs.filter(":first-child")
    // Bootsrap tab show, para ativar a tab
    next.addClass("active").find("a").tab("show")
  };
  // Tab Cycle function
  var tabCycle = setInterval(tabChange, 5000);
  // Tab click event handler
  jQuery(function() {
    jQuery(".serv3 a").click(function(e) {
      e.preventDefault();
      jQuery(".serv3 .active").removeClass("active")
      // Stop the cycle
      clearInterval(tabCycle);
      // Show the clicked tabs associated tab-pane
      jQuery(this).tab("show");
      jQuery(this).parent().addClass("active");
      // Start the cycle again in a predefined amount of time
      setTimeout(function() {
        tabCycle = setInterval(tabChange, 5000);
      }, 6000);
    });
  });
  
  


  var tabChange = function() {
    var tabs = jQuery(".serv1 > li");
    var active = tabs.filter(".active").removeClass("active");
    var next = active.next("li").length
      ? active.next("li")
      : tabs.filter(":first-child")
    // Bootsrap tab show, para ativar a tab
    next.addClass("active").find("a").tab("show")
  };
  // Tab Cycle function
  var tabCycle = setInterval(tabChange, 2000);
  // Tab click event handler
  jQuery(function() {
    jQuery(".serv1 a").click(function(e) {
      e.preventDefault();
      jQuery(".serv1 .active").removeClass("active")
      // Stop the cycle
      clearInterval(tabCycle);
      // Show the clicked tabs associated tab-pane
      jQuery(this).tab("show");
      jQuery(this).parent().addClass("active");
      // Start the cycle again in a predefined amount of time
      setTimeout(function() {
        tabCycle = setInterval(tabChange, 5000);
      }, 6000);
    });
  });

  var tabChange = function() {
    var tabs = jQuery(".life > li");
    var active = tabs.filter(".active").removeClass("active");
    var next = active.next("li").length
      ? active.next("li")
      : tabs.filter(":first-child")
    // Bootsrap tab show, para ativar a tab
    next.addClass("active").find("a").tab("show")
  };
  // Tab Cycle function
  var tabCycle = setInterval(tabChange, 2000);
  // Tab click event handler
  jQuery(function() {
    jQuery(".life a").click(function(e) {
      e.preventDefault();
      jQuery(".life .active").removeClass("active")
      // Stop the cycle
      clearInterval(tabCycle);
      // Show the clicked tabs associated tab-pane
      jQuery(this).tab("show");
      jQuery(this).parent().addClass("active");
      // Start the cycle again in a predefined amount of time
      setTimeout(function() {
        tabCycle = setInterval(tabChange, 2000);
      }, 3000);
    });
  });

  jQuery('#increasetext').click(function() {
		curSize = parseInt(jQuery('p').css('font-size')) + 2;
		if (curSize <= 32)
			jQuery('p').css('font-size', curSize);
	});

	jQuery('#resettext').click(function() {
		if (curSize != 18)
			jQuery('p').css('font-size', 18);
	});

	jQuery('#decreasetext').click(function() {
		curSize = parseInt(jQuery('p').css('font-size')) - 2;
		if (curSize >= 14)
			jQuery('p').css('font-size', curSize);
	});
  

  var doctabCycle;
  var startInterval = true;
// Our Doctor Select Section
jQuery(document).ready(function(){

  //hides dropdown content
  jQuery(".size_chart").hide();
  
  //unhides first option content
  jQuery("#all").show();

  //listen to dropdown for change
  jQuery("#size_select").change(function(){
    //rehide content on change
    jQuery('.size_chart').hide();
    //unhides current item
    jQuery('#'+jQuery(this).val()).show();
  });
});

jQuery(document).ready(function(){

  //hides dropdown content
  jQuery(".size_chart1").hide();
  
  //unhides first option content
  jQuery("#all1").show();

  //listen to dropdown for change
  jQuery("#size_select1").change(function(){
    //rehide content on change
    jQuery('.size_chart1').hide();
    //unhides current item
    jQuery('#'+jQuery(this).val()).show();
  });
});

//Our Doctor Selection function

jQuery(document).ready(function(){
  jQuery('#size_select').on('change', function(){
    clearInterval(doctabCycle);
    var tabs = jQuery(".size_chart li");
    var active = tabs.filter(".active").removeClass("active");
    const value = jQuery(this).val();
    setTimeout(() => {
      jQuery('#myDocTabContent .tab-pane').filter(".active").removeClass(".show");
      console.log(jQuery('#myDocTabContent .tab-pane').filter(".active"));
    }, 500);
    if(value == 'all') {
      allDoctabChange();
    } else if(value == 'orthopaedic') {
      tabChange2();
    }
    else if(value == 'general-medicine') {
      tabChange3();
    }
    else if(value == 'physiotherapy') {
      tabChange4();
    }
    else if(value == 'gynecology') {
      tabChange5();
    }
    else if(value == 'radiology') {
      tabChange6();
    }
    else if(value == 'anesthesiology') {
      tabChange7();
    }
    else if(value == 'nephrology') {
      tabChange8();
    }
    else if(value == 'pathology') {
      tabChange9();
    }
    else if(value == 'plastic-reconstruction') {
      tabChange10();
    }
    else if(value == 'surgical-oncology') {
      tabChange11();
    }
  });
})

jQuery(document).ready(function(){
  jQuery('#size_select1').on('change', function(){
    clearInterval(doctabCycle);
    var tabs = jQuery(".size_chart1 li");
    var active = tabs.filter(".active").removeClass("active");
    const value = jQuery(this).val();
    setTimeout(() => {
      jQuery('#myDocTabContent .tab-pane').filter(".active").removeClass(".show");
      console.log(jQuery('#myDocTabContent .tab-pane').filter(".active"));
    }, 500);
    if(value == 'all1') {
      allDoctabChange();
      // jQuery("#size_select").change(tabChange().hide());
    } else if(value == 'orthopaedic1') {
      tabChange2();
      // jQuery("#size_select").change(tabChange2().hide());
    }
    else if(value == 'general-medicine1') {
      tabChange3();
    }
    else if(value == 'physiotherapy1') {
      tabChange4();
    }
    else if(value == 'gynecology1') {
      tabChange5();
    }
    else if(value == 'radiology1') {
      tabChange6();
    }
    else if(value == 'anesthesiology1') {
      tabChange7();
    }
    else if(value == 'nephrology1') {
      tabChange8();
    }
    else if(value == 'pathology1') {
      tabChange9();
    }
    else if(value == 'plastic-reconstruction1') {
      tabChange10();
    }
    else if(value == 'surgical-oncology1') {
      tabChange11();
    }
  });
})

function allDoctabChange(){
  // var tabChange = function() {
    clearInterval(doctabCycle);
    var tabs = jQuery(".serv3a > li");
    var active = tabs.filter(".active").removeClass("active");
    var next = active.next("li").length
      ? active.next("li")
      : tabs.filter(":first-child")
    // Bootsrap tab show, para ativar a tab
    next.addClass("active").find("a").tab("show")
  // };
  // Tab Cycle function
  doctabCycle = setInterval(allDoctabChange, 5000);
  // Tab click event handler
  jQuery(function() {
    jQuery(".serv3a a").click(function(e) {
      e.preventDefault();
      jQuery(".serv3a .active").removeClass("active")
      // Stop the cycle
      clearInterval(doctabCycle);
      // Show the clicked tabs associated tab-pane
      jQuery(this).tab("show");
      jQuery(this).parent().addClass("active");
      // Start the cycle again in a predefined amount of time
      setTimeout(function() {
        doctabCycle = setInterval(tabChange, 5000);
      }, 6000);
    });
  });
}

allDoctabChange();

function tabChange2(){
  // var tabChange = function() {
    clearInterval(doctabCycle);
    var tabs = jQuery(".serv3b > li");
    var active = tabs.filter(".active").removeClass("active");
    var next = active.next("li").length
      ? active.next("li")
      : tabs.filter(":first-child")
    // Bootsrap tab show, para ativar a tab
    next.addClass("active").find("a").tab("show")
  // };
  // Tab Cycle function
  doctabCycle = setInterval(tabChange2, 5000);
  // Tab click event handler
  jQuery(function() {
    jQuery(".serv3b a").click(function(e) {
      e.preventDefault();
      jQuery(".serv3b .active").removeClass("active")
      // Stop the cycle
      clearInterval(doctabCycle);
      // Show the clicked tabs associated tab-pane
      jQuery(this).tab("show");
      jQuery(this).parent().addClass("active");
      // Start the cycle again in a predefined amount of time
      setTimeout(function() {
        doctabCycle = setInterval(tabChange2, 5000);
      }, 6000);
    });
  });
}

function tabChange3(){
  // var tabChange = function() {
    clearInterval(doctabCycle);
    var tabs = jQuery(".serv3c > li");
    var active = tabs.filter(".active").removeClass("active");
    var next = active.next("li").length
      ? active.next("li")
      : tabs.filter(":first-child")
    // Bootsrap tab show, para ativar a tab
    next.addClass("active").find("a").tab("show")
  // };
  // Tab Cycle function
  doctabCycle = setInterval(tabChange3, 5000);
  // Tab click event handler
  jQuery(function() {
    jQuery(".serv3c a").click(function(e) {
      e.preventDefault();
      jQuery(".serv3c .active").removeClass("active")
      // Stop the cycle
      clearInterval(doctabCycle);
      // Show the clicked tabs associated tab-pane
      jQuery(this).tab("show");
      jQuery(this).parent().addClass("active");
      // Start the cycle again in a predefined amount of time
      setTimeout(function() {
        doctabCycle = setInterval(tabChange3, 5000);
      }, 6000);
    });
  });
}

function tabChange4(){
  // var tabChange = function() {
    clearInterval(doctabCycle);
    var tabs = jQuery(".serv3d > li");
    var active = tabs.filter(".active").removeClass("active");
    var next = active.next("li").length
      ? active.next("li")
      : tabs.filter(":first-child")
    // Bootsrap tab show, para ativar a tab
    next.addClass("active").find("a").tab("show")
  // };
  // Tab Cycle function
  doctabCycle = setInterval(tabChange4, 5000);
  // Tab click event handler
  jQuery(function() {
    jQuery(".serv3d a").click(function(e) {
      e.preventDefault();
      jQuery(".serv3d .active").removeClass("active")
      // Stop the cycle
      clearInterval(doctabCycle);
      // Show the clicked tabs associated tab-pane
      jQuery(this).tab("show");
      jQuery(this).parent().addClass("active");
      // Start the cycle again in a predefined amount of time
      setTimeout(function() {
        doctabCycle = setInterval(tabChange4, 5000);
      }, 6000);
    });
  });
}

function tabChange5(){
  // var tabChange = function() {
    clearInterval(doctabCycle);
    var tabs = jQuery(".serv3e > li");
    var active = tabs.filter(".active").removeClass("active");
    var next = active.next("li").length
      ? active.next("li")
      : tabs.filter(":first-child")
    // Bootsrap tab show, para ativar a tab
    next.addClass("active").find("a").tab("show")
  // };
  // Tab Cycle function
  doctabCycle = setInterval(tabChange5, 5000);
  // Tab click event handler
  jQuery(function() {
    jQuery(".serv3e a").click(function(e) {
      e.preventDefault();
      jQuery(".serv3e .active").removeClass("active")
      // Stop the cycle
      clearInterval(doctabCycle);
      // Show the clicked tabs associated tab-pane
      jQuery(this).tab("show");
      jQuery(this).parent().addClass("active");
      // Start the cycle again in a predefined amount of time
      setTimeout(function() {
        doctabCycle = setInterval(tabChange5, 5000);
      }, 6000);
    });
  });
}

function tabChange6(){
  // var tabChange = function() {
    clearInterval(doctabCycle);
    var tabs = jQuery(".serv3f > li");
    var active = tabs.filter(".active").removeClass("active");
    var next = active.next("li").length
      ? active.next("li")
      : tabs.filter(":first-child")
    // Bootsrap tab show, para ativar a tab
    next.addClass("active").find("a").tab("show")
  // };
  // Tab Cycle function
  doctabCycle = setInterval(tabChange6, 5000);
  // Tab click event handler
  jQuery(function() {
    jQuery(".serv3f a").click(function(e) {
      e.preventDefault();
      jQuery(".serv3f .active").removeClass("active")
      // Stop the cycle
      clearInterval(doctabCycle);
      // Show the clicked tabs associated tab-pane
      jQuery(this).tab("show");
      jQuery(this).parent().addClass("active");
      // Start the cycle again in a predefined amount of time
      setTimeout(function() {
        doctabCycle = setInterval(tabChange6, 5000);
      }, 6000);
    });
  });
}

function tabChange7(){
  // var tabChange = function() {
    clearInterval(doctabCycle);
    var tabs = jQuery(".serv3g > li");
    var active = tabs.filter(".active").removeClass("active");
    var next = active.next("li").length
      ? active.next("li")
      : tabs.filter(":first-child")
    // Bootsrap tab show, para ativar a tab
    next.addClass("active").find("a").tab("show")
  // };
  // Tab Cycle function
  doctabCycle = setInterval(tabChange7, 5000);
  // Tab click event handler
  jQuery(function() {
    jQuery(".serv3g a").click(function(e) {
      e.preventDefault();
      jQuery(".serv3g .active").removeClass("active")
      // Stop the cycle
      clearInterval(doctabCycle);
      // Show the clicked tabs associated tab-pane
      jQuery(this).tab("show");
      jQuery(this).parent().addClass("active");
      // Start the cycle again in a predefined amount of time
      setTimeout(function() {
        doctabCycle = setInterval(tabChange7, 5000);
      }, 6000);
    });
  });
}

function tabChange8(){
  // var tabChange = function() {
    clearInterval(doctabCycle);
    var tabs = jQuery(".serv3h > li");
    var active = tabs.filter(".active").removeClass("active");
    var next = active.next("li").length
      ? active.next("li")
      : tabs.filter(":first-child")
    // Bootsrap tab show, para ativar a tab
    next.addClass("active").find("a").tab("show")
  // };
  // Tab Cycle function
  doctabCycle = setInterval(tabChange8, 5000);
  // Tab click event handler
  jQuery(function() {
    jQuery(".serv3h a").click(function(e) {
      e.preventDefault();
      jQuery(".serv3h .active").removeClass("active")
      // Stop the cycle
      clearInterval(doctabCycle);
      // Show the clicked tabs associated tab-pane
      jQuery(this).tab("show");
      jQuery(this).parent().addClass("active");
      // Start the cycle again in a predefined amount of time
      setTimeout(function() {
        doctabCycle = setInterval(tabChange8, 5000);
      }, 6000);
    });
  });
}

function tabChange9(){
  // var tabChange = function() {
    clearInterval(doctabCycle);
    var tabs = jQuery(".serv3i > li");
    var active = tabs.filter(".active").removeClass("active");
    var next = active.next("li").length
      ? active.next("li")
      : tabs.filter(":first-child")
    // Bootsrap tab show, para ativar a tab
    next.addClass("active").find("a").tab("show")
  // };
  // Tab Cycle function
  doctabCycle = setInterval(tabChange9, 5000);
  // Tab click event handler
  jQuery(function() {
    jQuery(".serv3i a").click(function(e) {
      e.preventDefault();
      jQuery(".serv3i .active").removeClass("active")
      // Stop the cycle
      clearInterval(doctabCycle);
      // Show the clicked tabs associated tab-pane
      jQuery(this).tab("show");
      jQuery(this).parent().addClass("active");
      // Start the cycle again in a predefined amount of time
      setTimeout(function() {
        doctabCycle = setInterval(tabChange9, 5000);
      }, 6000);
    });
  });
}

function tabChange10(){
  // var tabChange = function() {
    clearInterval(doctabCycle);
    var tabs = jQuery(".serv3j > li");
    var active = tabs.filter(".active").removeClass("active");
    var next = active.next("li").length
      ? active.next("li")
      : tabs.filter(":first-child")
    // Bootsrap tab show, para ativar a tab
    next.addClass("active").find("a").tab("show")
  // };
  // Tab Cycle function
  doctabCycle = setInterval(tabChange10, 5000);
  // Tab click event handler
  jQuery(function() {
    jQuery(".serv3j a").click(function(e) {
      e.preventDefault();
      jQuery(".serv3j .active").removeClass("active")
      // Stop the cycle
      clearInterval(doctabCycle);
      // Show the clicked tabs associated tab-pane
      jQuery(this).tab("show");
      jQuery(this).parent().addClass("active");
      // Start the cycle again in a predefined amount of time
      setTimeout(function() {
        doctabCycle = setInterval(tabChange10, 5000);
      }, 6000);
    });
  });
}

function tabChange11(){
  // var tabChange = function() {
    clearInterval(doctabCycle);
    var tabs = jQuery(".serv3k > li");
    var active = tabs.filter(".active").removeClass("active");
    var next = active.next("li").length
      ? active.next("li")
      : tabs.filter(":first-child")
    // Bootsrap tab show, para ativar a tab
    next.addClass("active").find("a").tab("show")
  // };
  // Tab Cycle function
  doctabCycle = setInterval(tabChange11, 5000);
  // Tab click event handler
  jQuery(function() {
    jQuery(".serv3k a").click(function(e) {
      e.preventDefault();
      jQuery(".serv3k .active").removeClass("active")
      // Stop the cycle
      clearInterval(doctabCycle);
      // Show the clicked tabs associated tab-pane
      jQuery(this).tab("show");
      jQuery(this).parent().addClass("active");
      // Start the cycle again in a predefined amount of time
      setTimeout(function() {
        doctabCycle = setInterval(tabChange11, 5000);
      }, 6000);
    });
  });
}

/*Contact Forms*/
function validateContactForm(){
  console.log("inside js function");
  var name = document.getappt.name.value;
  var phone = document.getappt.phone.value;
  var email = document.getappt.email.value;
  var message = document.getappt.message.value;
  // var honeyPot = document.contactus.websitepot.value;
  // var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

  if (name == null || name == "") {
    jAlert('Please fill your Full Name');
    return false;
  }
  else if (email == null || email == "") {
    jAlert('Please enter a valid Email Address');
    return false;
  }
  else if (phone == null || phone == "") {
    jAlert('Please add your Phone Number');
    return false;
  }
  else if (message == null || message == "") {
    jAlert('Please enter the Message Code');
    return false;
  }
  else {
    var xmlhttp;

    if (window.XMLHttpRequest) {
      xmlhttp = new XMLHttpRequest();
    }
    else {
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var varMaxQuestion = xmlhttp.responseText;
            console.log("asdasd", varMaxQuestion);
            window.location = "https://www.mangalanandhospital.com/campaigns/success.php";
            //jAlert("Thank You for contacting us, we will get back to you soon...!!!", 'Alert Dialog');
            //Clear1();
        }
    }

    xmlhttp.open("POST", "page-quotemail.php?name=" + name + "&phoneno=" + phone + "&emailid=" + email + "&message=" + message ,  true);
    console.log("Here");
    xmlhttp.send();
    return false;
  }
}

function validateContactForm2(){
  console.log("inside js function");
  var name = document.getappt2.name2.value;
  var phone = document.getappt2.phone2.value;
  var email = document.getappt2.email2.value;
  var message = document.getappt2.message2.value;
  // var honeyPot = document.contactus.websitepot.value;
  // var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

  if (name == null || name == "") {
    jAlert('Please fill your Full Name');
    return false;
  }
  else if (email == null || email == "") {
    jAlert('Please enter a valid Email Address');
    return false;
  }
  else if (phone == null || phone == "") {
    jAlert('Please add your Phone Number');
    return false;
  }
  else if (message == null || message == "") {
    jAlert('Please enter the Message Code');
    return false;
  }
  else {
    var xmlhttp;

    if (window.XMLHttpRequest) {
      xmlhttp = new XMLHttpRequest();
    }
    else {
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var varMaxQuestion = xmlhttp.responseText;
            console.log("asdasd", varMaxQuestion);
            window.location = "https://www.mangalanandhospital.com/campaigns/success.php";
            //jAlert("Thank You for contacting us, we will get back to you soon...!!!", 'Alert Dialog');
            //Clear1();
        }
    }

    xmlhttp.open("POST", "quotemail.php?name=" + name + "&phoneno=" + phone + "&emailid=" + email + "&message=" + message ,  true);
    console.log("Here");
    xmlhttp.send();
    return false;
  }
}

function validateModalContactForm(){
  console.log("inside js function");
  var name = document.modalform.name1.value;
  var email = document.modalform.email1.value;
  var phone = document.modalform.phone1.value;
  var message = document.modalform.message1.value;
  // var honeyPot = document.contactus.websitepot.value;
  // var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

  if (name == null || name == "") {
    jAlert('Please fill your Full Name');
    return false;
  }
  else if (email == null || email == "") {
    jAlert('Please enter a valid Email Address');
    return false;
  }
  else if (phone == null || phone == "") {
    jAlert('Please add your Phone Number');
    return false;
  }
  else if (message == null || message == "") {
    jAlert('Please enter the Message Code');
    return false;
  }
  else {
    var xmlhttp;

    if (window.XMLHttpRequest) {
      xmlhttp = new XMLHttpRequest();
    }
    else {
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var varMaxQuestion = xmlhttp.responseText;
            console.log("asdasd", varMaxQuestion);
            window.location = "https://www.mangalanandhospital.com/campaigns/success.php";
            //jAlert("Thank You for contacting us, we will get back to you soon...!!!", 'Alert Dialog');
            //Clear1();
        }
    }

    xmlhttp.open("POST", "quotemail.php?name=" + name + "&phoneno=" + phone + "&emailid=" + email + "&message=" + message ,  true);
    console.log("Here");
    xmlhttp.send();
    return false;
  }
}

function sendData() {
  var name = document.newsletter.name.value;
  var email = document.newsletter.email.value;
  // var honeyPot = document.contactus.websitepot.value;
  var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

  if (name == null || name == "") {
    jAlert('Please Fill the First Name', 'Alert Dialog');
    return false;
  }
  else if (email == null || email == "") {
    jAlert('Please Fill the Email ID', 'Alert Dialog');
    return false;
  }
  else if (!reg.test(email)) {
    jAlert('Please Enter the Valid Email Address', 'Alert Dialog');
    return false;
  }
  else {
    var xmlhttp;

    if (window.XMLHttpRequest) {
      xmlhttp = new XMLHttpRequest();
    }
    else {
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
          var varMaxQuestion = xmlhttp.responseText;
          console.log("asdasd", varMaxQuestion);
          window.location = "https://www.mangalanandhospital.com";
          //jAlert("Thank You for contacting us, we will get back to you soon...!!!", 'Alert Dialog');
          //Clear1();
        }
    }
    xmlhttp.open("POST", "data.php?name=" + name + "&email=" + email ,  true);

    xmlhttp.send();
    return false;
  }
}