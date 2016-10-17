
    <?php require ('header.php'); ?>
    <nav class="navbar navbar-fixed-top">
      <div class="container navbar-container">
        <div class="navbar-right">
              <img class="logo" alt="Brand" src="http://www.reprieve.org.uk/wp-content/themes/reprieve/assets/images/logo-white@2x.png">
          </div>
        <div class="navbar-header">
          <h1 class="counter">Time to next execution: <span class="hours">0</span>:<span class="mins">00</span>:<span class="seconds">00</span></h1>
        </div>
        
          
        </div>
    </nav>
    <div class="container">

    <!-- ////// slide 1 ////// -->
    
    <div class="slide slide1 row">
      <div class="col-xs-12 col-sm-8">
        <h1>An execution takes place somewhere in the world every 6 hours.</h1>
        <h2>Help stop the death penalty. Add your name to the global record of opposition now:</h2>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="form-wrapper">
        <h3></h3>
        
            <form action="https://reprieve.cp.bsd.net/page/sapi/lush-petition" method="post" id="initial-signup" class="form1" novalidate="novalidate">
                    <input type="hidden" name="source" class="source" value="">
                    <input type="hidden" name="subsource" class="subsource" value="">
                    <!-- <h4>Add your name:</h4> -->
                      <div class="fieldset" id="firstname-cont">
                                      <div class="formLabel" style="display: none;">
                                          <label class="field">Your firstname<span class="required" aria-required="true">*</span></label>
                                      </div>
                                      <div class="input">
                                          <div class="form-group has-feedback">
                                              <input size="16" id="firstname" name="firstname" type="text" class="text form-control" placeholder="Firstname*" required="required" aria-required="true">
                                          </div>
                                      </div>
                                  </div>          
                          <div class="fieldset" id="lastname-cont-2">
                                      <div class="formLabel" style="display: none;">
                                          <label class="field">Your lastname<span class="required" aria-required="true">*</span></label>
                                      </div>
                                      <div class="input">
                                          <div class="form-group has-feedback">
                                              <input size="16" id="lastname" name="lastname" type="text" class="text form-control" placeholder="Lastname*" required="required" aria-required="true">
                                          </div>
                                      </div>
                             </div>  
                        <div class="fieldset" id="email-cont">
                                      <div class="formLabel" style="display: none;">
                                          <label class="field">Your email address<span class="required" aria-required="true">*</span></label>
                                      </div>
                                      <div class="input">
                                          <div class="form-group has-feedback">
                                              <input type="email" class="text form-control" size="48" id="email" name="email" placeholder="Email address*" required="required" aria-required="true">
                                          </div> 
                                      </div>
                                  </div>                    
        
                            <div class="fieldset" id="zip-cont">
                                      <div class="formLabel" style="display: none;">
                                          <label class="field">Postcode</label>
                                      </div>
                                      <div class="input">
                                          <div class="form-group has-feedback">
                                              <input size="8" id="zip" name="zip" type="text" class="text form-control google-fill" data-google="postal_code" placeholder="Postcode">
                                              
                                          </div>
                                      </div>
                            </div>
            
    
                        <button class="button" id="first-submit">Stop an execution</button>  
                    </form>
                    <div id="signers-wrapper">
                      
                      	
                      		
                      			<div id="signers">
                      		
                      			</div>
                      		
                      	
                    </div>
                </div> <!-- ./ form wrapper -->
        
      </div>
    </div>
    
    <div class="slide slide2" style="display:none;">
      <!-- ///// slide 2 ////// -->
      
      <h1>Thank you, firstname. You’re officially on the record.</h1>
      <h2>Let people know where you stand – and ask your friends and family to join the movement too:</h2>
      
      
      
          <div class="facebook_outer row">
              <div class="facebook_inner">
                  <table class="facebook_table">
                      <tr>
                          <td class="facebook_img_cell">
                              <a class="share-click fbShareLink fbShareImage" data-href=
                              "" target="_blank">
                              <div class="topImageContainer">
                                  <div class="topImageHolder">
                                      <div class="topImageInner"></div>
                                  </div>
                              </div></a>
                          </td>
                      </tr>
                      <tr>
                          <td class="facebook_text_cell">
                              <p class="facebook_share_text_top" id="fb-og-title">An execution takes places somewhere in the world every six hours - and the next one is in X hours and y minutes.</p>
                              <p class="facebook_share_text_bottom" id=
                              "fb-og-description">I’ve just joined the global movement to abolish the death penalty. Add your name too, and help stop an execution today >></p>
                          </td>
                      </tr>
                  </table>
              </div>
          </div>
          <div class="share-wrapper">
            <a href="javascript:;" class="button share-click fbShareButton" data-href="">Share on Facebook</a>
            <a href="javascript:;" class="button skip">Skip</a>
          </div>
      
      
      
    </div> <!-- ./ slide 2 -->
    <!-- ////// slide 3 ////// -->
    <div class="slide slide3" style="display:none;">
      <h1>Firstname, let’s talk about the death penalty.</h1>
      <h2>First: how many people do you think were executed in 2015?</h2>
      
      <div class="slider-container">
        <div id="first-q-slider" class="slider">
        </div>
      </div>
      
      <div class="inline-buttons">
        <button class="button q1-results">Find out</button>
        <button class="button facing-death">Meet someone facing death instead</button>
      </div>
      
    
    </div> <!-- ./ slide -->
    
    </div> <!-- ./ container -->
    
    <div class="slide slide4" style="display:none;">
      <!-- ///// slide 4 ////// -->
      
      <div class="slide3-a">
            <ul class="fade-in-lines">
              <li><h3>Firstname.</h3></li>
              <li><h3>Today, 37 countries still practice capital punishment...</h3></li>
              <li><h3>… and between them, they executed at least 1,634 people in 2015</h3></li>
            </ul>
          
          <div class="fixed-buttons-marker"></div>
          <div class="inline-buttons">
              <button class="button kidnapped-state">Meet someone kidnapped by the state</button>
              <button class="button convicted-child">Meet someone convicted as a child</button>
          </div>

      </div>
      <div class="slide3-b">
        <div class="sliders-copy">
          <h3>Crimes punishable by death now include adultery, blasphemy, homosexuality and pro-democracy demonstrations...</h3>
          <h3>… and around the world, girls as young as 9 can be sentenced to death</h3>
        </div>
      </div>
      <div class="slide3-c">
        <div class="sliders-copy">
        <h3>So long as the death penalty exists, innocent people will be put to death.</h3>
        <h3>For every 10 people who have been executed since the reinstatement of the US death penalty, one person has been found innocent and freed.</h3>
        <h3 class="last-copy">Reprieve aims to end the death penalty worldwide and assists prisoners facing execution. Meet someone we’re representing using the buttons below.</h3>
        </div>
        
      </div>
      
      
      
    </div> <!-- ./ slide 4 -->
    <div class="container">
    <div class="slide slide5 row" style="display:none;">
    <!-- //// SLIDE 5 //// -->
      <div class="col-xs-12 col-md-6">
        <div class="person-profile">
          <img src="ali-al-nimr.png" class="profile-img img-responsive" />
          <h3>Ali al-Nimr</h3>
          <p>Accused of participating in a pro-democracy demonstration.</p>
          <p>Convicted as a child by Saudi Arabian authorities.</p>
          <p>Could be beheaded at any moment.</p>
        </div>
        
      </div>
      <div class="col-xs-12 col-md-6 petition-body">
        <p>Ali al-Nimr was 17 years old when he was sentenced to death by Saudi Arabian authorities. His ‘crimes’ included participating in a pro-democracy demonstration and “explaining how to give first aid to protesters”.</p>
        <p>He could now be crucified at any moment.</p>
        <p>Reprieve is providing Ali with a lawyer and campaigning to spare his life. Firstname, please sign our petition to save young Ali al-Nimr:</p>
        <button class="button">Sign the petition to save Ali’s life</button>
      </div>
      <div class="col-xs-12">
        <button class="button goto-donate">How else can I help?</button>
      </div>
      
    </div>
    
    <div class="slide slide6" style="display:none;">
    <!-- //// SLIDE 6 //// -->
      <div class="col-xs-12 col-md-6">
        <div class="person-profile">
          <img src="andy-tsege.png" class="profile-img img-responsive" />
          <h3>Andy Tsege</h3>
          <p>Kidnapped on command of the Ethiopian government.</p>
          <p>Held in solitary confinement for over a year.</p>
          <p>Sentenced to death without a fair trial.</p>
        </div>
        
      </div>
      <div class="col-xs-12 col-md-6 petition-body">
        <p>Andy Tsenge is a father of three from London.</p>
        <p>As a prominent figure in Ethiopian politics, Andy was kidnapped and taken from his children and partner in 2014.</p>
        <p>Reprieve are campaigning alongside Andy’s family – will you please add your name to demand Andy’s release?</p>
        <button class="button">Demand Andy’s release</button>
      </div>
      <div class="col-xs-12">
        <button class="button goto-donate">How else can I help?</button>
      </div>
      
    </div>
    
    <div class="slide slide7" style="display:none;">
    <!-- //// SLIDE 7 //// -->
      <h1>Firstname, you can help defend people facing execution</h1>
      <h2>The work our lawyers and investigators do to defend people like Andy is entirely funded by people like you. Please donate to help stop the execution of another human being.</h2>
      <div class="donate-buttons">
        <button class="button donate-button">Donate £x</button>
        <button class="button donate-button">Donate £x</button>
        <button class="button donate-button">Donate £x</button>
      </div>
      <div class="counter">
        <h1 class="counter"><span class="counter-span">Time to next execution: <span class="hours">0</span>:<span class="mins">00</span>:<span class="seconds">00</span></span>
      </div>
    </div>
    
  </div> <!-- ./ container -->
   <?php require ('footer.php'); ?>
       