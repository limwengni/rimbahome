<!DOCTYPE html>
<html>
<head>
<title>Rimba Home</title>
<link rel="icon" href="rimbahome-house-logo.png" sizes="16x16 32x32" type="image/png">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("images/home.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}

.difference, .diffcol, .diffheader, .price, .pricecol, .priceheader{
  border-collapse: collapse;
  margin-left: auto; 
  margin-right: auto;
  width: 100%;
}

.diffcol, .diffheader {
  border: 3px solid #969393;
  text-align: left;
  padding: 8px;
  width: 50%;
}

.diffrow:nth-child(even), .pricerow:nth-child(even) {
  background-color: #dddddd;
}

.pricecol, .priceheader {
  border: 3px solid #969393;
  text-align: center;
  padding: 8px;
  width: 33.33%;
}
  
.container{
    width : 100%;
    height : auto;
  display : flex;
  flex-direction  : row;
  justify-content : space-around; 
  flex-flow : wrap;
  
}
  
.container2{
    width : 100%;
    height : auto;
  display : flex;
  flex-direction  : row;
  justify-content : space-around; 
  flex-flow : wrap;
  
}
  
.next{
    width : 20%;
    height : 300px;
    margin : 20px;
    box-sizing : border-box;
    text-align :  center;
    margin-bottom : -50px;
    
  }
  
.next2{
    width : 20%;
    height : 300px;
    margin : 20px;
    box-sizing : border-box;
    text-align :  center;
    
  }

.separator{
    display: flex;
    align-items: center;
    text-align: center;
  }

.separator::before,
.separator::after {
  content: '';
  flex: 1;
  border-bottom: 3px solid #000;
}

.separator:not(:empty)::before {
  margin-right: .25em;
}

.separator:not(:empty)::after {
  margin-left: .25em;
}

.divider2{
    height: 3px;
    background-color: black;
    margin-left: 200px;
    margin-right: 200px;
}
.button {
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
  
.button1 {
  color: white; 
  border: 3px solid #9AC4BB;
}

.button1:hover {
  background-color: #9AC4BB;
  color: white;
}

@media (min-width: 320px) and (max-width: 600px){
  .divider2{
    height: 3px;
    background-color: black;
    margin-left: 50px;
    margin-right: 50px;
  }
}
  
</style>
</head>
  
<body>
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide" style="padding: 21px;"><img src="images/rimbahome-logo.png" alt="logo" width="100" height="45"></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button" style="padding: 30px;"><i class='fa fa-info-circle'></i> ABOUT</a>
      <a href="#work" class="w3-bar-item w3-button" style="padding: 30px;"><i class="fa fa-th"></i> HOW IT WORKS</a>
      <a href="#instructions" class="w3-bar-item w3-button" style="padding: 30px;"><i class='fa fa-edit'></i> INSTRUCTIONS</a>
      <a href="#perks" class="w3-bar-item w3-button" style="padding: 30px;"><i class='fa fa-gift'></i> PERKS</a>
      <a href="#ideas" class="w3-bar-item w3-button" style="padding: 30px;"><i class='fa fa-lightbulb-o'></i> IDEAS</a>
      <a href="#team" class="w3-bar-item w3-button" style="padding: 30px;"><i class="fa fa-user"></i> TEAM</a>
      <a href="#contact" class="w3-bar-item w3-button" style="padding: 30px;"><i class="fa fa-address-book-o" ></i> CONTACT</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" style="padding: 30px;" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">CLOSE ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">HOW IT WORKS</a>
  <a href="#instructions" onclick="w3_close()" class="w3-bar-item w3-button">INSTRUCTIONS</a>
  <a href="#perks" onclick="w3_close()" class="w3-bar-item w3-button">PERKS</a>
  <a href="#ideas" onclick="w3_close()" class="w3-bar-item w3-button">IDEAS</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Welcome to <b><i style="color:#c7f2e9" >RimbaHome</i></b></span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Welcome to <b><i style="color:#c7f2e9" >RimbaHome</i></b></span><br>
    <span class="w3-large" style="color: white"><b><i>Provide measured security & ease of accessibility</b></i></span>
    <p><a href="#about" <button class="button button1"><b>Learn more</b></button>
</a></p>
  </div> 
</header>

<!-- Benefit/Why Rimbahome -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <div class="separator"><h3 class="w3-center" style="font-size:30px"><b>About RimbaHome</b> <i class="fa fa-info-circle"></i></h3></div>
  <h3 class="w3-center">Benefits Of Using RimbaHome<div class="divider2"></div></h3>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
    <i class="fa fa-thumbs-up" style="font-size:70px"></i>
      <p class="w3-large">Satisfaction</p>
      <p>We provide convinience for all residents, management and security</p>
    </div>
    <div class="w3-quarter">
     <i class="fa fa-dollar" style="font-size:70px"></i>
      <p class="w3-large">Free Of Charge</p>
      <p>App-free for Consumer (Residence)</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-lock" style="font-size:70px"></i>
      <p class="w3-large">Security</p>
      <p>Allow visitor entry in easy steps (maximum 2 steps for security)</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-check-square-o" style="font-size:70px;"></i>
      <p class="w3-large">Simplicity</p>
      <p></p>Minimize security personnel involvement </p>
    </div>
  </div>
  <div class = "comparison" style = "padding : 40px">
     <h3 class="w3-center" style = "padding-bottom : 30px;">Price Comparison<div class="divider2"></div></h3>
    <table class="price">
  <tr class="pricerow">
    <th class="priceheader" style="text-align: center; vertical-align: middle;">Company</th>
    <th class="priceheader" style="text-align: center; vertical-align: middle;">App</th>
    <th class="priceheader" style="text-align: center; vertical-align: middle;">Price</th>
  </tr>
  <tr class="pricerow">
    <td class="pricecol">JagaApp</td>
    <td class="pricecol">Y</td>
    <td class="pricecol">$$$</td>
  </tr>
  <tr class="pricerow">
    <td class="pricecol">MyTaman</td>
    <td class="pricecol">Y</td>
    <td class="pricecol">$$$</td>
  </tr>
  <tr class="pricerow">
    <td class="pricecol">i-Neighbour</td>
    <td class="pricecol">Y</td>
    <td class="pricecol">$$</td>
  </tr>
  <tr class="pricerow">
    <td class="pricecol">RimbaHome</td>
    <td class="pricecol">N</td>
    <td class="pricecol">$</td>
  </tr>
  
</table>
  </div>
</div>

<div style="width: 100%; height: 10px; background-color:#dddddd;"></div>

<!-- Difference in Security -->
<div class="w3-container w3-white" style="padding:128px 16px">
  <div class="w3-row-padding">
    <div>
      <h3 style="text-align: center; padding-bottom : 30px;">How Is It Different In Terms Of Security?<div class="divider2"></div></h3>
      <table class="difference">
        <th class="diffheader" style="text-align: center; vertical-align: middle;">RimbaHome</th>
        <th class="diffheader" style="text-align: center; vertical-align: middle;">Other Competitors</th>
        <tr class="diffrow">
          <th class="diffheader" colspan="2" style="text-align: center; vertical-align: middle;">Residents</th>
        </tr>
        <tr class="diffrow">
          <td class="diffcol">
            <ul>
              <li>
                Visitor management & notifications
              </li>
              <li>
                One-click approval
              </li>
          </ul>
          </td>
          <td class="diffcol">
            <ul>
              <li>
                Need to install app to be notified
              </li>
            </ul>
          </td>
        </tr>
        <tr class="diffrow">
          <th class="diffheader" colspan="2" style="text-align: center; vertical-align: middle;">Visitors/Deliveries/Contractors</th>
        </tr>
        <tr class="diffrow">
          <td class="diffcol">
            <ul>
              <li>
                Self-register verification
              </li>
              <li>
                Entry upon approval without manual “show license”   process
              </li>
            </ul>
          </td>
          <td class="diffcol">
            <ul>
              <li>
                Requires QR Code
              </li>
              <li>
                Multiple entry check
              </li>
              <li>
                Require visitor “pass”
              </li>
            </ul>
          </td>
        </tr>
      </table>
    </div>
  </div>
</div>

<!-- How It Works(Walk-in) -->
<div class="w3-container w3-light-grey" style="padding:128px 16px;" id="work">
  <div class="separator"><h3 class="w3-center" style="font-size:30px"><b>How It Works?</b> <i class="fa fa-th"></i></h3></div>
  <h3 class="w3-center">How It Works For Walk-In Visitors<div class="divider2"></div></h3>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    
    <div class="w3-quarter" style="width: 33.33%">
    <img src="images/qr-code.png" alt="check" width="100" height="100">
      <p class="w3-large">Step 1: Visitor Scans QR Code</p>
    </div>
    
    <div class="w3-quarter" style="width: 33.33%">
     <img src="images/sign-in.png" alt="check" width="100" height="100">
      <p class="w3-large">Step 2: Visitor Registers</p>
    </div>
    
    <div class="w3-quarter" style="width: 33.33%">
      <img src="images/entry.png" alt="entry" width="100" height="100">
      <p class="w3-large">Step 3: Allow Visitor Entry</p>
    </div>
  </div>
</div>
  
<div style="width: 100%; height: 10px; background-color:white;"></div>
  
<!-- How It Works(Pre-registered) -->
<div class="w3-container w3-light-grey" style="padding:128px 16px">
  <h3 class="w3-center">How It Works For Pre-Registered Visitors<div class="divider2"></div></h3>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter" style="width: 33.33%">
    <img src="images/sign-in.png" alt="check" width="100" height="100">
      <p class="w3-large">Step 1: Visitor Pre-Register</p>
    </div>
    <div class="w3-quarter" style="width: 33.33%">
     <img src="images/check.png" alt="check" width="100" height="100">
      <p class="w3-large">Step 2: Visitor Arrival, Security Checks Approval Status</p>
    </div>
    <div class="w3-quarter" style="width: 33.33%">
      <img src="images/entry.png" alt="entry" width="100" height="100">
      <p class="w3-large">Step 3: Allow Visitor Entry</p>
    </div>
  </div>
</div>

<div style="width: 100%; height: 10px; background-color:white;"></div>
  
<!-- What's Happening -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="instructions">
  <div class="w3-row-padding">
    <div>
      <div class="separator"><h3 style="text-align: center; font-size: 30px"><b>Ways Of Registration</b> <i class='fa fa-edit'></i></h3></div>
      <div style="padding-top: 30px;">
      <table class="difference">
        <th class="diffheader" style="text-align: center; vertical-align: middle; background-color: #dddddd;">Pre-Registration(Visitor)</th>
        <th class="diffheader" style="text-align: center; vertical-align: middle; background-color: #dddddd;">Without Pre-Registration</th>
        <tr>
          <td class="diffcol">
            <ol>
              <li>
                Visitor given a link shared by resident 
              </li>
              <li>
                Visitor pre-register details
              </li>
              <li>
                Resident approves visitor
              </li>
              <li>
                Visitor arrival, security verifies number plate
& driver face (compared to licensed
uploaded), checks resident approval
              </li>
              <li>
                Visitor allowed for entry
              </li>
          </ol>
          </td>
          <td class="diffcol">
            <ol>
              <li>
                Visitor arrival, scans a QR code
                <ol>
                  <li>
                    Registers entry
                  </li>
                  <li>
                    Resident receives notification and
approve/reject visitor
                  </li>
                  <li>
                    Security calls resident phone number
attached to house
                  </li>
                </ol>
              </li>
              <li>
                Visitor allowed for entry
              </li>
            </ol>
          </td>
        </tr>
        
      </table>
      </div>
    </div>
  </div>
</div>

  <!-- What else is included -->
<div class="w3-container w3-white" style="padding:128px 16px" id="perks">
  <div class="w3-row-padding">
    <div>
      <div class="separator"><h3 style="text-align: center; font-size: 30px"><b>The Perks</b> <i class='fa fa-gift'></i></h3></div>
      <div style="padding-top: 30px;">
      <table class="difference">
        <th class="diffheader" style="text-align: center; vertical-align: middle; font-size:18px; background-color: #dddddd;" >What would be provided</th>
        <tr>
          <td class="diffcol">
            <ol>
              <li>
                Each township is provided with standalone server
              </li>
              <li>
                Website & landing page for each township
                <ul>
                  <li>
                    Notification blast
                  </li>
                  <li>
                    News
                  </li>
                  <li>
                    Announcement board
                  </li>
                  <li>
                    Discussion board
                  </li>
                </ul>
                <li>
                Secured encrypted files & data to prevent leakage of data
              </li>
              <li>
                Admin panel for management use only
              </li>
          </td>
        </tr>
        
      </table>
      </div>
    </div>
  </div>
</div>

  <!-- Whats Next -->
<div class="w3-container w3-light-grey" style="padding:80px 10px" id="ideas">
  <div class="separator"><h3 class="w3-center" style="font-size:30px"><b>Ideas</b> <i class='fa fa-lightbulb-o'></i></h3></div>
  <div class = "container" style="padding-top: 30px;">
    <div class = "next">
      <img src="images/tax.png" alt="check" width="100" height="100">
      <p class="w3-large">Resident fees management</p>
    </div>
    <div class = "next">
      <img src="images/alarm.png" alt="check" width="100" height="100">
      <p class="w3-large">Resident Notifications</p>
    </div>
    <div class = "next">
      <img src="images/cashless-payment.png" alt="check" width="100" height="100">
      <p class="w3-large">Online payment portal for residents</p>
    </div>
  </div>

  <div class = "container2">
    <div class = "next2">
      <img src="images/smartphone.png" alt="check" width="100" height="100">
      <p class="w3-large">Mobile App</p>
    </div>
    <div class = "next2">
      <img src="images/reward-card.png" alt="check" width="100" height="100">
      <p class="w3-large">Points to Earn Rewards</p>
    </div>
    
  </div>
 
</div>

  
  
<!-- Team Section -->
<div class="w3-container w3-white" style="padding:128px 16px" id="team">
  <div class="separator"><h3 class="w3-center" style="font-size:30px"><b>The Team</b> <i class="fa fa-user"></i></h3></div>
  <p class="w3-center w3-large">The Ones Who Runs This Company</p>
  <div class="w3-row-padding w3-color" style="margin-top:64px">
    <div class="w3-col l4 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="images/byte2c.png" alt="byte2c" style="width:100%">
        <div class="w3-container">
          <h3>Byte2c</h3>
          <p class="w3-opacity">Founding Company, Tech & Innovation</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l4 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="images/penduline.png" alt="penduline" style="width:100%">
        <div class="w3-container">
          <h3>Penduline RA</h3>
          <p class="w3-opacity">Operations</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l4 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="images/manickam.png" alt="manickam" style="width:100%">
        <div class="w3-container">
          <h3>Manickam</h3>
          <p class="w3-opacity">Security</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
  </div>
</div>
  
<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:80px 8px" id="contact">
     <div style="padding:10px">
  <div class="separator"><h3 class="w3-center" style="font-size:30px"><b>Contact</b> <i class="fa fa-address-book-o" ></i> </h3></div>
  <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
  <div style="margin-top:48px">
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Kuala Lumpur, Malaysia</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +603 12345678</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: enquiries@rimbahome.com</p>
  </div>
  
    <br>
    <section>
      <div style="padding:20px">
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-black" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
      </div>
      </section>
    <!-- Image of location/map -->
       <div >
         <div class="w3-image w3-color" style="width: 100%; display: block; margin-left: auto; margin-right: auto;"><iframe width="40%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=kuala%20lumpur,%20malaysia+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" style="display: block; margin-left: auto; margin-right: auto;"><a href="https://www.maps.ie/distance-area-calculator.html">distance maps</a></iframe></div>
         </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-24">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  
  <p>Powered by <a href="https://youtu.be/dQw4w9WgXcQ" style="color:red" class="w3-hover-text-green">Byte2c</a></p>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>
