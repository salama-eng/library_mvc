<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>elibrary</title>
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/stepper.css" />
  <link rel="stylesheet" href="assets/css/login.css" />
  <link href="assets/js/main.js" />
  <?php

require_once __DIR__."/includes/header.php"; ?>

</head>

<body>

  <!--    login popupp     --->
  <div id="login" class="login">
    <button id="loginclose">X</button>
    <h1>تسجيل الدخول</h1>
    <form>
      <input type="text" placeholder="البريد الالكتروني او رقم الجوال">
      <input type="text" placeholder="كلمة السر">
      <button>تسجيل الدخول</button>
    </form>
    <h1>?ليس لديك حساب </h1>
    <a href="signup"><button>إنشاء حساب جديد</button></a>
  </div>

  <!--   end login popupp     --->


  <!--      logo and search         --->
  


    <div class="container">
        <div id="progres" class="progres">
            <div class="circle">1</div>
            <div class="circle">2</div>
            <div class="circle">3</div>
            <div class="circle">4</div>
        </div>

    </div>
   

     <div class="form">
    <div id="form1" class="form1">

    <form>
    <input type="text" placeholder="enter your name">
    <input type="text" placeholder="enter your email addres">
    <input type="text" placeholder="enter your phone number">
     
    </form>
    </div>
    <div id="form2" class="form1">

        <form >
     
            <input type="text" placeholder="enter your country">
            <input type="text" placeholder="enter your current address">
            <input type="text" placeholder="enter your zipcode">
        </form>
        
    </div>

    <div id="form3" class="form1">
   <h3>please choose your payment way</h3>
        <form>
   
      <input type="radio" name="payment" value="paypal" checked> paypal
      <input type="radio" name="payment" value="VISA" > Visa
      <input type="number" placeholder="enter your card number">
    
        </form>
    </div>

    <div id="form4"  class="form1">

        <form>
    
          <h3>GREAT!! WE ARE ABOUT TO DONE </h3>
         <label>Total Price :</label>  <p style="color: red;">745$</p>
         
    
        </form>
    </div>
    
</div> 

        <div class="container-btn">
        <button id="prev-btn" class="btn">prev</button>
        <button id="next-btn" class="btn">next</button>
    </div>
    <script>
  const nextbtn=document.getElementById('next-btn');
  const prevbtn=document.getElementById('prev-btn');
  const progres=document.getElementById('progres');
  const steps=document.querySelectorAll('.circle');/***to return array********/
  const forms=document.querySelectorAll('.form1');
  const form1=document.getElementById('form1');
  const form2=document.getElementById('form2');
  const form3=document.getElementById('form3');
  const form4=document.getElementById('form4');
  let index=-1;
  nextbtn.addEventListener("click",function(){
   index++;

  if(index>steps.length)
  {
   index=steps.length;
  }
steps.forEach((item,i)=>{
  if(i<=index)
  {
   
      item.classList.add('active'); 
      forms.forEach((item,i)=>{
      if(i==index){
        item.classList.add('active-form'); 
        let x=index;
      }
     else if(i==index-1){
        item.classList.remove('active-form'); 
      }
      if(index==3)
      {
        nextbtn.innerText="submit";
        nextbtn.onclick=function()
        {
            location.href="/";
        }
      }
    });
   }
 


});

  });

  prevbtn.addEventListener("click",function(){
   index--;
 
  steps.forEach((item,i)=>{
  if(i>index)
  {
     
      item.classList.remove('active');
   
  }

});

forms.forEach((item,i)=>{
      if(i==index+1)
      {
          item.classList.remove('active-form'); 
      }
      else if(i==index)
      item.classList.add('active-form'); 
     
  });

  });


  

    </script>

<?php

require_once __DIR__."/includes/footer.php"; ?>