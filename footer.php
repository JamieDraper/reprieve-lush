
    
 	

    <script>
    var yourFeedUrl = "https://reprieve.bsd.net/page/sf/mwlyhvr2m2mdkjjv34mmy4tsklvc8z7w";
    var person = {};
    
    
    
    //get names from names.json
    var namesData = {};
    
    //get signers from feed
    var signers = [];
    
    //get list of names displayed to check if previous one was already there
    var namesList = [];
    
    var signersLength = 0;
    
    var loadedNames = false;
    var loadedSigners = false;
    var namesScroll;
    signersDisplayed = 0;
    
    function isScrolledIntoView(el) {
        var elemTop = el.getBoundingClientRect().top;
        var elemBottom = el.getBoundingClientRect().bottom;
    
        var isVisible = (elemTop >= 0) && (elemBottom <= window.innerHeight);
        return isVisible;
    }
    
    function numberWithCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }


    
    function toTitleCase(str){
        return str.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
    }
    
    function checkRepeatSigner(signature){
    	if(signersDisplayed != 0){
    		if(signature == signers[signersDisplayed-1]){
    			return false;
    		} else {
    			return true;
    		}	
    	} else {
    		return true;
    	}
    }
    
    function checkSafeSigner(signature){
    	var smallSig = signature.toLowerCase();
    	if(namesData[smallSig]){
    		return true;
    	} else {	
    		return false;
    	}
    }
    
    function nextSigner(){
    		signature = signers[signersDisplayed];
    		console.log(typeof(signature));
    		if (typeof(signature) == "undefined") {
    			clearInterval(namesScroll);
    		} else {
    			// if it's not right for us, move on to next one
    			if(checkSafeSigner(signature) && checkRepeatSigner(signature)){
    				
    				var min = 100;
    				var max = 1000;
    				// and the formula is:
    				var random = Math.floor(Math.random() * (max - min + 1)) + min;
    
    				var time = 1000+random;
    
    				namesScroll = setTimeout(function(){
    				    console.log(signature);
    					$('#signers').prepend("<p class='shown'>"+signature+" added their name</p>");
    					$('#signers p:eq(0)').hide();
    					$('#signers p:eq(0)').show('slow', function() { 
    		                signersDisplayed++;
    		                nextSigner();
    	                });	
    				}, time);
    			} else {
    				signersDisplayed++;
    				nextSigner();			
    			}
    		}	
    }
    
    function deployTheScroller(){
    	console.log("Scroller deployed");
    	//namesScroll = setInterval(function(){ 
    		nextSigner();
    	//}, 1800);
    }
    
    	var start = moment("06-23-2014", "MM-DD-YYYY");
    	var now  = moment();
    	var days = now.diff(start, 'seconds', true);
    
    	var clock = $('.your-clock').FlipClock(days, {
    		clockFace: 'DailyCounter',
    		countdown: false
    	});
    
    function initialSignup(form) {
        $('.error').remove();
        console.log('hidden');
        person['firstname'] = $('#firstname').val();
        person['lastname'] = $('#lastname').val();
        person['email'] = $('#email').val();
        $('.slide:eq(1)').show();
        var nextSlide = $('.slide:eq(1)');
        $(window).scrollTo($(nextSlide), 800);
        
        $.post(jQuery(form).attr('action'), jQuery(form).serialize(), function(
            response) {
            console.log(response);
        });
        
        $('h1, h2, h3, p').each(function() {
            $(this).html($(this).html().replace("firstname", person[
                'firstname']));
            $(this).html($(this).html().replace("Firstname", person[
                'firstname']));
        });
        // disable submit button to prevent multiple submits
        jQuery('#initial-signup input[type=submit]').prop('disabled', true).addClass(
            'disabled');
        setTimeout(function() { // just for demo
            jQuery('#initial-signup input[type=submit]').prop(
                'disabled', false).removeClass('disabled');
        }, 1500);
    }
    
    function blinkCounter() {
        var counterLocation;
        if ($('.navbar .counter').css('display') === "none") {
            // blink just slide 7 counter
            counterLocation = ".slide7 ";
        } else {
            // blink navbar counter
            counterLocation = ".navbar ";
        }
        $(counterLocation + '.counter').fadeOut();
        $(counterLocation + '.counter').fadeIn();
        $(counterLocation + '.counter').fadeOut();
        $(counterLocation + '.counter').fadeIn();
        $(counterLocation + '.counter').fadeOut();
        $(counterLocation + '.counter').fadeIn();
    }
    
    function deployCounter() {
      var now = moment();
      var nowGMT = moment.tz(now, 'Europe/London');
      var countTo = moment();
    
      // set countTo hour based on current time of day
      var countToMins;
      var countToHour;
      var nowHour = nowGMT.hour();
    
      // every second
      if (nowHour < 6) {
          countToHour = 6;
      } else if (nowHour < 12) {
          countToHour = 12;
      } else if (nowHour < 18) {
          countToHour = 18;
      } else {
          // set to midnight, add one day
          countToHour = 0;
          countTo.date(nowGMT.date() + 1);  
      }
      countTo.hour(countToHour);
      countTo.minutes(0);
      countTo.seconds(0);
      
      var incrementSecond = setInterval(function(){
        var current = moment();
        var currentGMT = moment.tz(current, 'Europe/London');
        if (countTo <= currentGMT) {
            clearInterval(incrementSecond);
            blinkCounter();
          setTimeout(function(){
            deployCounter();
          }, 2000);
        }
        var diff = moment(countTo.diff(currentGMT));
        $('.hours').html(diff.hours());
        $('.mins').html(diff.minutes());
        $('.seconds').html(diff.seconds());
        
        // if time single digit, prepend a 0.
        $('.mins, .seconds').each(function(){
          if ($(this).text().length < 2) {
            $(this).html('0' + $(this).html());
          }
        });
      }, 1000);
    }
        
    $( document ).ready( function() {
        
        $('slide').hide();
        $('slide:eq(0)').show();
        
        $.get('https://reprieve.bsd.net/utils/cons_counter/signup_counter.ajax.php?signup_form_id=45', function(data) { 
          numPeople = numberWithCommas(data);
          console.log(numPeople);
          $('.slide:eq(0) .form-wrapper h3').html("Add your name with "+numPeople+" others:");
        });
        
        deployCounter();
        
        $( function() {
             var min = 0;
             var max = 2000;
             var middle = Math.round(min+((max-min)/2));
             $( "#first-q-slider" ).slider({
          			value: middle,
          			step: 5,
          			max: max,
          			min: min,
          			orientation: "horizontal",
          			range: "min",
          			animate: true
             });
             
             $('#first-q-slider').append("<p class='label-item label-right'>2,000</p>");
     		 $('#first-q-slider').append("<p class='label-item label-left'>0</p>");
     		 $('#first-q-slider').find('.ui-slider-handle').append("<p class='label-item label-middle'>"+middle+"</p>");
     		 
     		 $('#first-q-slider').on( "slide", function( event, ui ) {
     			 	$('#first-q-slider').find('.label-middle').html(ui.value);
     			 });
         
        } );
        
        

        // scroller code
        $.getJSON( "https://reprieve.bsd.net/page/-/names.json", function( response ) {
			console.log(response);
			$(response).each(function(){
				namesData[this.name] = true;
			});

			console.log(namesData);
			
			//finished then flick switch and if names is loaded, deploy the scroller 
			loadedNames = true;
			if(loadedSigners == true){
				deployTheScroller();
			}


    	});
    	
    	$.get( yourFeedUrl, function( response ) {
                $(response).find('item').each(function() {
    			    var signup = $(this).children().get(2);
    			    var firstRaw = $(signup).children().get(0);
    			    var firstText = $(firstRaw).text();
    			    var res = firstText.split(" ");
    			    var firstname = toTitleCase(res[0]);
    			 	signers[signersLength] = firstname;
    			 	signersLength++;
    			});
    
    			//finished then flick switch and if names is loaded, deploy the scroller 
    			loadedSigners = true;
    			if(loadedNames == true){
    				deployTheScroller();
    			}
    	});
    
    	$('#signup-container').append($('#signup'));
    	$('#signup-container').append($('#signupfooter p:eq(0)'));
    	$('#header-container').prepend($('#signupheader'));
    	$('#signers').before($('#totaliser'));
    	$('#issues').prepend($('#main-container'));
    	
    
        
        

        $(window).resize(function() {

            
            
            if ($(window).width() >= 768) {
                $('.navbar-right').after($('.navbar-header'));
            }    
            
            var newHeight = $(window).height()-40;
            $('.slide').css('min-height', newHeight+'px');
            
            
            if ($(window).width() >= 965) {
                $('.slide4').css('padding-top', "86.0167px");
                var newHeight = $(window).height()-85.0167;
                $('.slide3-a, .slide3-b, .slide3-c').css('min-height', newHeight+'px');
            }
            
            else if ($(window).width() >= 753) {
                $('.slide4').css('padding-top', "75px");
                var newHeight = $(window).height()-75;
                $('.slide3-a, .slide3-b, .slide3-c').css('min-height', newHeight+'px');
            }
            
            else if ($(window).width() >= 617) {
                $('.slide4').css('padding-top', "140.25px");
                var newHeight = $(window).height()-140.25;
                $('.slide3-a, .slide3-b, .slide3-c').css('min-height', newHeight+'px');
            }
            else {
                $('.slide4').css('padding-top', "121.55px");
                var newHeight = $(window).height()-121.55;
                $('.slide3-a, .slide3-b, .slide3-c').css('min-height', newHeight+'px');
            }
            /*
            if ($(window).width() >= 753) {
                $('.slide4').css('padding-top', "75px");
                var newHeight = $(window).height()-75;
                $('.slide3-a, .slide3-b, .slide3-c').css('min-height', newHeight+'px');
            }
            */
        });
        
        $(window).trigger('resize');
        
        // SLIDE 1 CLICK HANDLERS

        
        $('#initial-signup').validate({
            submitHandler: function(form, e) { // for demo
                console.log('in submitHandler');
                e.preventDefault();
                initialSignup(form);
                
            },
            rules: {
                
                firstname: "required",
                
                email: {
                    required: true,
                    email: true
                },
                lastname: {
                    required: true
                }
            },
            messages: {
                firstname: "Please enter your first name",
                email: {
                    required: "Please enter your email address",
                    email: "Please enter a valid email address"
                },
                lastname: "Please enter your last name"
            }
        });
        
        
        /*
        $('.slide1 form .submit').click(function(e){
            e.preventDefault();
            // VALIDATE AND SUBMIT SIGNUP
            
            
        });
        */
        
        // SLIDE 2 CLICK HANDLERS
        
        $('.slide2 .share-click').click(function(){
            // implement share dialog
            var nextSlide = $('.slide:eq(2)');
            nextSlide.show();
            $(window).scrollTo($(nextSlide), 800);
        });
        
        $('.slide2 .skip').click(function(){
            var nextSlide = $('.slide:eq(2)');
            nextSlide.show();
            $(window).scrollTo($(nextSlide), 800);
        });
        
        // SLIDE 3 CLICK HANDLERS
        $('.slide3 .q1-results').click(function(){
            var nextSlide = $('.slide:eq(3)');
            nextSlide.show();
            $(window).scrollTo($(nextSlide), 800);
            
            $(window).scroll(function(){
                
                var fixButtons = $('.fixed-buttons-marker').offset().top < $(this).height() + $(this).scrollTop();
                console.log(fixButtons);
                if (fixButtons && $('.slide5').is(':hidden') && $('.slide6').is(':hidden')) {
                    $('.slide4 .inline-buttons').addClass('fixed-buttons');    
                } else {
                    $('.slide4 .inline-buttons').removeClass('fixed-buttons');     
                }
                
            });
        });
        
        $('.slide3 .facing-death').click(function(){
            var nextSlide = $('.slide:eq(4)');
            nextSlide.show();
            $(window).scrollTo($(nextSlide), 800);
        });
        
        // SLIDE 4 CLICK HANDLERS
        
        $('.slide4 .convicted-child').click(function(){
            $('.slide4 .inline-buttons').removeClass('fixed-buttons');  
            $('.slide3-a .inline-buttons').appendTo('.slide3-c');
            var nextSlide = $('.slide:eq(4)');
            nextSlide.show();
            $(window).scrollTo($(nextSlide), 800);
        });
        
        $('.slide4 .kidnapped-state').click(function(){
            $('.slide4 .inline-buttons').removeClass('fixed-buttons'); ;
            $('.slide3-a .inline-buttons').appendTo('.slide3-c');
            var nextSlide = $('.slide:eq(5)');
            nextSlide.show();
            $(window).scrollTo($(nextSlide), 800);
        });
        
        // GO TO DONATE SLIDE HANDLERS
        $('.goto-donate').click(function(){
            $('.navbar .counter').fadeOut();
            var nextSlide = $('.slide:eq(6)');
            nextSlide.show();
            $(window).scrollTo($(nextSlide), 800);
        });
        
        

    });
    </script> 
</body>
</html>