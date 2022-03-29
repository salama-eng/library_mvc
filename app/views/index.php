<?php

require_once __DIR__."/includes/header.php"; ?>

  <!--    login popupp     --->
  <div id="login" class="login">
    <button id="loginclose">X</button>
    <h1>تسجيل الدخول</h1>
    <form action="login" method="POST">
      <input type="text" placeholder="البريد الالكتروني او رقم الجوال">
      <input type="text" placeholder="كلمة السر">
      <input style="background-color:rgb(255, 0, 0); color: white;" type="submit" name="login" value="تسجيل الدخول">
    </form>
    <h1>?ليس لديك حساب </h1>
    <a href="users/register"><button>إنشاء حساب جديد</button></a>
  </div>

  <!--   end login popupp     --->



  <!--      logo and search         --->

  <!--      hogo and search end      --->



  <!--    cart popupp     --->
  
  <!--   end cart popupp     --->


  <!-- Slideshow container -->

  <div class="slider">
    <img class="mySlides" src="assets/adds/home4.jpg">
    <img class="mySlides" src="assets/adds/home3.jpg">
    <img class="mySlides" src="assets/adds/home2.jpg">
    <img class="mySlides" src="assets/adds/home1.jpg">
  </div>
  

  <!-- Slideshow container  end -->




  <!-- departements icons container   -->
  <a href="category">
<h1 class="h1main">تصفح حسب القسم</h1></a>
<a href="category">
<div class="dep-icon">
  <div class="dep-icon1"><img src="/icon1.png" alt=""></div>
  <div class="dep-icon1"><img src="assets/icons/icon2.png" alt=""></div>
  <div class="dep-icon1"><img src="assets/icons/icon3.png" alt=""></div>
  <div class="dep-icon1"><img src="assets/icons/icon4.png" alt=""></div>
  <div class="dep-icon1"><img src="assets/icons/icon5.png" alt=""></div>
  <div class="dep-icon1"><img src="assets/icons/icon6.png" alt=""></div>
  <div class="dep-icon1"><img src="assets/icons/icon7.png" alt=""></div>
  
</div></a>




  <!-- departements icons container  end -->

 <!-- ADDS container   -->


 <div class="adds">
   <div class="add"><img src="assets/adds/add1.png" alt=""></div>
   <div class="add"><img src="assets/adds/add2.png" alt=""></div>
   <div class="add"><img src="assets/adds/add3.png" alt=""></div>
   <div class="add"><img src="assets/adds/add4.png" alt=""></div>
   <div class="add"><img src="assets/adds/add5.png" alt="" width="100%"></div>
  

   
 </div>
 
 
 
 
   <!-- ADDS container  -->
 
  <!-- Timer -->
  <h1 class="h1main" >العروض الحالية</h1>
  <div id="timer" class="timer">

    <div class="book">
      <div id="days"></div>
     <a href="details"><img src="assets/books/book10.jpeg" alt="" height="250rem" width="180rem"></a> 
      <div class="booktype">
        <h1 class="search_key">كتاب الكتروني</h1>
        <img src="assets/icons/logo.png" alt="" height="50rem">
      </div>
      <p>كبرياء وهو كتاب الكتروني</p>
      <h4>17.9<span style="font-size:0.8rem;">ر.س</span></h4>
      <img src="assets/icons/star.png" alt="" height="30rem">

        <!--  basket =====================-->

      <img onclick="basket_count1()" src="assets/icons/basket2.png"
       alt="" height="35rem" style="background-color: rgb(247, 12, 12);
       border-radius: 50%;padding:.2rem;"
       >
      <img src="assets/icons/close.png" alt="" height="30rem">
      
    </div>




   <!--<div id="hours"></div>:
    <div id="min"></div>:
    <div id="sec"></div>--> 

  </div>
  <!-- main end-->


  <!--  books-->
  <h1 class="h1main" >الكتب الدينية</h1>
  <div class="books" id="books">

  









    
   




   








  







    
   
   
  </div>







  
  <!--  books end-->

  <!--  books popUpp-->
 
  <!--  footer     -->
  
  <?php

require_once __DIR__."/includes/footer.php"; ?>