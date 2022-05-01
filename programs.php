<?php session_start();
include("shared.php");
include("dbconn.inc.php");
$conn = dbConnect();
echo "$component_HTMLHeader";?>
<meta name="keywords" content="Volunteering, Mission, Next Generation Leaders, Entrepreneurs, DFW, Dallas-Fort Worth">
</head>

<body>

<main>
  <?php echo "$component_Nav";?>
    <!-- programs intro row -->
    <div id="programs-headerRow" class="row d-flex align-items-center gulfBlueBG">

    <section class="col-sm">
      <!-- membership lottie animation. Should show up on right side of text for tablet and desktop. Should show up on top of the text for mobile.  -->
      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
      <lottie-player
        src="https://assets4.lottiefiles.com/packages/lf20_doyhajlr.json"
        background="transparent"
        speed="1"
        style="width: 100%; height: 70vh;"
        loop
        autoplay>
      </lottie-player>
      <!-- center-aligned section -->
      </section>

      <section class="col-sm">
      <h1 class="display-4 text-white text-center prg-display">Programs</h1>
      <p class="lead text-white text-center prg-display">The G.U.L.F is a non-profit organization dedicated to encouraging team building and individual growth through our both young adult and youth enrichment programs.</p>
      <p class="lead text-white text-center">
      <strong>Come check us out!</strong>
      </p>
      </section>
    </div>

    <div id="programs-DiamondLeagueRow" class="content flow my-5">
      <div class="even-columns">
        <div class="col prg-txt d-flex flex-column align-self-center">
          <h2>The Diamond League</h2>
          <p>Whether you like  parties,  concerts,  sports, rapping, singing,  dancing,  playing  on the computer, or thinking of all the different ways to make money, The DL has got you you covered.</p>
          <p>Get ready for the most amazing events for teens, that are put together and thrown by teens. On every 2nd Saturday of the month, come join us for fun parties all over the metroplex. Each party has its own theme and setting. All proceeds go to helping The G.U.L.F. continue shaping and building its young entreprenuers.</p>
          <button type="button" class="btn btn-primary btn-prg login" data-bs-toggle="modal" data-bs-target="#Modal1">Join Us Today</button>
        </div>
        <div class="col">
          <img src="img/thedl.jpg" class="dl-img img-fluid tdl rounded" alt="Teens playing basketball">
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="ModalLabel1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ModalLabel1">Join The Diamond League</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="" method="post">
              <p>* Required field</p>
              <label for="diamondLeagueEmail" class="form-label text-black">* Email address</label>
              <input type="email" name="diamondLeagueEmail" class="form-control" id="diamondLeague-input-Email" aria-describedby="emailHelp">
              <label for="diamondLeagueFirstName" class="form-label text-black">* First Name</label>
              <input type="name" name="diamondLeagueFirstName" class="form-control" id="diamondLeague-input-FirstName">
              <label for="diamondLeagueLastName" class="form-label text-black">* Last Name</label>
              <input type="name" name="diamondLeagueLastName" class="form-control" id="diamondLeague-input-LastName">
              <label for="diamondLeaguePhoneNumber" class="form-label text-black">Phone Number</label>
              <!-- dropdown menu for "I am interested in.."
              ***not including this dropdown right now - it will require a lot more database/SQL work on the back end and we may not have time **
              <div class="mb-3">
                <select class="form-select" name="contactInterestedIn" id="contact-input-InterestedIn" aria-label="Default select example">
                  <option selected>I am interested in...</option>
                  <option value="1">Joining The G.U.L.F. as a participant</option>
                  <option value="2">Volunteering with The G.U.L.F.</option>
                  <option value="3">Sponsorship of The G.U.L.F.</option>
                  <option value="4">Other</option>
                </select>
              </div>
              -->
              <!--Optional message from user -->
              <input type="name" name="diamondLeaguePhoneNumber" class="form-control" id="diamondLeague-input-PhoneNumber" placeholder="123-456-7890">
              <label for="diamondLeagueMessage" class="form-label text-black"></label>
              <label for="diamondLeagueMessage" class="form-label text-black">Message</label>
              <textarea class="form-control" name="diamondLeagueMessage" aria-label="With textarea" id="diamondLeague-input-textArea"></textarea>
            </form>
          </div>
          <div class="modal-footer">
            <!--Checkbox input
            ***Commenting this part out for now, don't think it's necessary.
            <div class="mb-3 form-check">
              <input type="checkbox" name="contactOptIn" class="form-check-input" id="contact-input-OptIn">
              <label class="form-check-label text-black" for="exampleCheck1">I'd like to receive occasional updates and announcements from The G.U.L.F.</label>
            </div>
            -->
            <!--submit form -->
            <button type="submit" name="Submit" class="btn btn-primary my-3">Submit</button>
          </div>
        </div>
      </div>
    </div>

    <!--
    <div class="testim-container">
      <p class="lead col-lg-6 col-md-8 col-sm-12">"I am glad that I was a part of this amazing program. Everyone there was like my second family. We all felt comfortable to share our thoughts and ideas and helped build each other into the entreprenuers we aspired to be. The G.U.L.F. inspired me to adopt a growth mindset."
      </p>
      <h6>Johnny Dixon. - Former member of The Diamond League</h6>
    </div>
    -->
    <!-- New idea for testimonial section -->
    <section class="col-sm py-5 my-5 gulfBlueBG">
      <h2 class="text-white text-center">What People Are Saying</h2>
      <blockquote class="mx-auto blockquote text-center text-white py-3 px-2 col-lg-8 col-md-10 col-sm-12">
        <p class="mx-auto pb-4 px-2 col-lg-8 col-md-10 col-sm-12">"I am glad that I was a part of this amazing program. Everyone there was like my second family. We all felt comfortable to share our thoughts and ideas and helped build each other into the entreprenuers we aspired to be. The G.U.L.F. inspired me to adopt a growth mindset."</p>
        <footer class="blockquote-footer text-white">Johnny Dixon, <cite title="Source Title">Former member of The Diamond League</cite></footer>
      </blockquote>
    </section>

    <div id="programs-BusinessApprenticeshipRow" class="content flow">

      <div class="even-columns even-columns-responsive">
        <div class="col">
          <img src="img/youthprg.jpg" class="dl-img img-fluid ybp rounded" alt="Business workers smiling for a group photo">
        </div>
        <div class="col prg-txt d-flex flex-column align-self-center">
          <h2>Youth Business Apprenticeship Program</h2>
          <p>Our Youth Business Program and monthly Youth Business Expos will be available to those who believe they are cut out to be their own bosses and learning the ins and outs of entrepreneurship. Through this program, participants will work alongside and learn from real business owners and career professionals.</p>
          <p>In our Youth Apprenticeship Program, participants will be taught invaluable skills, lessons, and business acumen from those who have stayed on path before us, and who are now young successful business men and woman.</p>
          <p>It will also focus on giving sponsors and partner companies access in offering their services, consultation, mentorship, and products to the GULF community by sponsoring and/or partnering with us, allowing youth to learn and earn as an incentive in making and maintaining passing grades and staying on the right path. A win-win for teens and the communities we're a part of.</p>
          <button type="button" class="btn btn-primary btn-prg login" data-bs-toggle="modal" data-bs-target="#Modal2">Join Us Today</button>
        </div>
      </div>
   </div>

   <!-- Modal -->
   <div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="ModalLabel2" aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="ModalLabel2">Join The Youth Business Apprenticeship Program</h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
           <p>* Indicates required field</p>
           <form class="" action="" method="post">
             <label for="contactEmail" class="form-label text-black">* Email address</label>
             <input type="email" name="contactEmail" class="form-control" id="contact-input-Email" aria-describedby="emailHelp">
             <label for="contactFirstName" class="form-label text-black">* First Name</label>
             <input type="name" name="contactFirstName" class="form-control" id="contact-input-FirstName">
             <label for="contactLastName" class="form-label text-black">* Last Name</label>
             <input type="name" name="contactLastName" class="form-control" id="contact-input-LastName">
             <label for="contactPhoneNumber" class="form-label text-black">Phone Number</label>
             <input type="name" name="contactPhoneNumber" class="form-control" id="contact-input-PhoneNumber" placeholder="123-456-7890">
             <!-- dropdown menu for "I am interested in.."
             ***not including this dropdown right now - it will require a lot more database/SQL work on the back end and we may not have time **
             <div class="mb-3">
               <select class="form-select" name="contactInterestedIn" id="contact-input-InterestedIn" aria-label="Default select example">
                 <option selected>I am interested in...</option>
                 <option value="1">Joining The G.U.L.F. as a participant</option>
                 <option value="2">Volunteering with The G.U.L.F.</option>
                 <option value="3">Sponsorship of The G.U.L.F.</option>
                 <option value="4">Other</option>
               </select>
             </div>
             -->
             <!--Optional message from user -->
            <label for="contactMessage" class="form-label text-black">Message</label>
            <textarea class="form-control" name="contactMessage" aria-label="With textarea" id="contact-input-textArea"></textarea>
           </form>
         </div>
         <div class="modal-footer">
           <!--Checkbox input
           ***Commenting this part out for now, don't think it's necessary.
           <div class="mb-3 form-check">
             <input type="checkbox" name="contactOptIn" class="form-check-input" id="contact-input-OptIn">
             <label class="form-check-label text-black" for="exampleCheck1">I'd like to receive occasional updates and announcements from The G.U.L.F.</label>
           </div>
           -->
           <!--submit form -->
           <button type="submit" name="Submit" class="btn btn-primary my-3">Submit</button>
         </div>
       </div>
     </div>
   </div>
</main>

<?php echo "$component_Footer";?>
