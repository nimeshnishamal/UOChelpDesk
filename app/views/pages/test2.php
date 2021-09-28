<?php require APPROOT . '/views/inc/header.php'; ?>


<?php
/* This is how you echo out database information on the screen
foreach ($data['users'] as $user) {
    echo "Information: " . $user->user_name . $user->user_email;
    echo "<br>";
}
*/
?>

<div class="container">
      <div class="column-1 box">
        
        <div class="card">
          <img src="public\img\default\avatar-girl.png" alt="Girl" style="width:50%; border-radius: 50%; margin-top: 1rem">
          <h2>Lavinka Guruge</h2>
          <p class="pplTitle">Faculty of Science</p>

          <p><button class="mainbtn pplButtonMain">View Profile</button></p>
          <p><button class="pplButton">Add a complaint</button></p>
          <p><button class="pplButton">My Inquiries</button></p>
          <p><button class="pplButton">Messages</button></p>
          <p><button class="pplButton">Help</button></p><br>
          <p></p>


        </div>
      </div>
      <div class="column-2 box">
        <h1>Dashboard</h1>

        <h2>Services</h2>

        <!-- <div class="main"> -->

        <!------------------------- 3 cards--------------------------- -->
  <ul class="cards">
    <li class="cards_item">
      <div class="dashCard">
        <div class="dashCard_content">
          <h2 class="dashCard_title">Student & Staff Affairs</h2>
          <p class="dashCard_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
          <!-- <button class="btn card_btn">View Services</button> -->
        </div>
      </div>
    </li>
    <li class="cards_item">
       <div class="dashCard" style="background-color: #fb6161">
        
        <div class="dashCard_content">
          <h2 class="dashCard_title">Student Councellor</h2>
          <p class="dashCard_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
          <!-- <button class="btn card_btn">Read More</button> -->
        </div>
      </div>
    </li>
    <li class="cards_item">
       <div class="dashCard">
        <div class="dashCard_content">
          <h2 class="dashCard_title">Scholarships</h2>
          <p class="dashCard_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
          <!-- <button class="btn card_btn">Read More</button> -->
        </div>
      </div>
    </li>
    
  </ul>

  <h2>Popular</h2>

  <h2>Announcements</h2>
</div>

        <br>
        

       
      </div>
      
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
