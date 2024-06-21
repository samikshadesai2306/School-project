<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="mini project.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />  

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>contact</title>

    


</head>
<body>
        <!-- Navigation bar -->
        <header>
     
     <div class="head-bar">
           <div class="news">
             <a style="color: white;"><marquee behavior="" direction="left">Admission open for year 2024-25.For Admission from click here>> OR  call on <i class="fa-solid fa-phone"></i> 8378910099 </marquee></a> 
           </div>
         <div class="social-icon">
           <a href="https://m.facebook.com/story.php?story_fbid=280665674907235&id=100088914127331&sfnsn=wiwspwa&mibextid=RUbZ1f"><i class="fa-brands fa-facebook"></i></a>
           <a href="#"> <i class="fa-brands fa-whatsapp"></i></a>
           <a href="https://youtube.com/@prakashpatil6925?si=MGfxjyJaBVBh4w4n"> <i class="fa-brands fa-youtube"></i></a>
         </div>
     </div>
   

</header>       
<!-- Manu bar  ....Main page      -->
<div class="image-contact">     
          <div class="menubar">
              <div class="tab"><a href="mini project.html">Home</a></div> 
              <div class="tab"><a href="acadmics.html">Academics</a></div>
              <div class="tab"><a href="about.html">About Us</a></div>
              <div class="tab"><a href="gallery.html">Gallery</a></div>
              <div class="tab"><a href="contact.html">Contact Us</a></div>
              
         </div> 
         
</div>   
<div class="gallery-text"><p><b>Contact Us</b></p></div>  




<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $message=$_POST['message'];
  

$servername = "localhost";
$username = "root";
$password = "";
$database = "dbharry";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
  die("sorry we failed to connect = ".mysqli_connect_error());
}
else{
 // echo "connection was successfully....<BR>";
}
$sql = "INSERT INTO `school_contact` (`Sr.no`, `Name`, `Email`, `Message`, `Date`) VALUES ('', '$name', '$email', '$message',current_timestamp())";
$result = mysqli_query($conn,$sql);
if($result){
  
  // echo " Data submited successfully";
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Your entry has been Submited successfully!</strong> 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
    <apan aria-hidden = "true"></span>
    </button>
  </div>';

}
else{

  // echo "we are facing some technical issues AND your entry was not successfully!" .mysqli_error($conn);
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> we are facing some technical issues AND your entry was not successfully!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
    <apan aria-hidden = "true"></span>
    </button>
  </div>';


}
}
?>
<div class="contact-back-image">
 <div class="contact">

        <div class="contact1">
              <div class="con-add"><h3>Office Timing</h3>
                <P style="margin-top: 3rem;"> 10am to 5pm.<br>For Queries cantact us between 11am to 6pm</P>
            </div>
            <br>
            <div class="con-add"><h3>School Address</h3>
             <P style="margin-top: 3rem;"> Sangavade Madhyamik Vidhyalay Sangavade
              A/P Sangavade,SangavadeVadi road Near lakshi narasih temple</P>
            </div>
        </div> 
        
    <div class="con-form">
      <div class="container9">
          <h2>Contact Us</h2>
          <form id="contactForm" action="contact.php" method="post">
              <input type="text" name="name" placeholder="Your Name" required>
              <input type="email" name="email" placeholder="Your Email" required>
              <textarea name="message" placeholder="Your Message" required></textarea>
              <input type="submit" value="Submit">
          </form>
      </div>
    </div>  
 </div>
</div>  

   
<div class="conatact2">
  <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7874960.217241453!2d70.19818971562502!3d15.473917260317913!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc0fdb871c0155d%3A0x1d91bdec1ff82338!2sSangavade%20madhyamic%20vidyalya%20sangavade!5e0!3m2!1sen!2sin!4v1712048895654!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div> 
        



<?php
require 'footer.php';
?>

  <!-- last-section  -->
  <!-- <div class="last-container">
    <div class="box1"><a href="contact.html">
        <p class="icons"><i class="fa-solid fa-calendar-days"></i> Visit Today</p>
        </a>
    </div>
    <div class="box2"><a href="#">
       <p class="icons"> <i class="fa-solid fa-globe"></i> Online Application</p>      
        <p class="icons1">just click for Addmission</p>
        </a>
    </div>
      <div class="box3"><a href="contact.html">
        <p  class="icons"><i class="fa-regular fa-bell"></i> Enquiry</p>
        <p class="icons1" >  For Enquiry Contact us Between 9am-5pm</p>
        </a>
    </div>
  </div> -->
  <!-- Footer Section -->

  <!-- <footer>
    <div class="foot-msg">
        <p>MAKING A BETTER WORLD THROUGH EDUCATION</p>
    </div> 
  <div class="footer">
    <div class="footer-logo">
    </div>
    <div class="foot-add"><b> Address:</b><br>
      A/P Sangavade,SangavadeVadi road Near lakshi narasih temple</P>
    </div>
    <div class="foot-manu">
            <a href="mini project.html">Home</a><br><br>
            <a href="acadmics.html">Acadmics</a><br><br>
            <a href="about.html">About Us</a><br><br>
            <a href="gallery.html">Gallery</a><br><br>
            <a href="contact.html">Contact Us</a><br><br>
    </div>
    <div class="foot-icon">
          <a href="#"><i class="fa-brands fa-facebook"></i></a>
          <a href="#"> <i class="fa-brands fa-whatsapp"></i></a>
          <a href="#"> <i class="fa-brands fa-youtube"></i></a>
    <div class="copyright">  
          <p>© Sangavade Madhyamik Vidhyalay Sangavade.All Right Reserveds</p>
    </div>
  </div> 
  <hr style="border-color: whitesmoke;">    
</footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script> -->
</body>
</html> 