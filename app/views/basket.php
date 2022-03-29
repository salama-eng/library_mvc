<?php

require_once __DIR__."/includes/header.php"; ?>
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
    <a href="signup.html"><button>إنشاء حساب جديد</button></a>
  </div>

  <!--   end login popupp     --->



  <!--      logo and search         --->





  <div id="cart-container" class="cart-container">
    <div class="cart-head">
      <h2>السلة</h2>
      <img src="assets/icons/basket.png" alt="" height="50px" width="50px">
    </div>
    <div class="cart-left">
      
      <div class="cart-left1">
       <table>
        <tr><td>68.97 </td>
          <th>المجموع</th>
       
        </tr>

        <tr><td style="color: olive;">مجاني </td>
          <th>تكاليف الشحن</th>
       
        </tr>

        <tr style="color: red;font-size: x-large;"><td>68.97</td>
          <th>   المجموع الكلي   <em style="color: grey;
            font-size: x-small;font-style: normal;">    شامل الضريبة    </em></th>
        
        </tr>

       </table>
        
      </div>
      <div class="cart-left2">
    
        <p>بالضغط على انهاء ف انت توافق على سياسة الخصوصية</p>
        <a href="stepper"> <button> تحديث سلة التسوق</button></a>
      </div>





    </div>
    <div class="cart-right">


      <div class="cart-book">

        <img src="assets/books/book13.jpeg" alt="" width="90px">
        <h4>البداية والنهاية الجزء الاول</h4>
        <p>منتج قابل للخصم</p>
        <div class="note">
          <h5>ملاحضة:هذا المنتج رقمي وسيتم توصيلة
            عن طريق البريد الالكتروني</h5> <a>كيفية الحصول على المنتج</a>
        </div>
      </div>

      <div class="cart-book">

        <img src="assets/books/book4.jpeg" alt="" width="90px">
        <h4>البداية والنهاية الجزء الاول</h4>
        <p>منتج قابل للخصم</p>
        <div class="note">
          <h5>ملاحضة:هذا المنتج رقمي وسيتم توصيلة
            عن طريق البريد الالكتروني</h5> <a>كيفية الحصول على المنتج</a>
        </div>
      </div>
      <div class="cart-book">

        <img src="assets/books/book7.jpeg" alt="" width="90px">
        <h4>البداية والنهاية الجزء الاول</h4>
        <p>منتج قابل للخصم</p>
        <div class="note">
          <h5>ملاحضة:هذا المنتج رقمي وسيتم توصيلة
            عن طريق البريد الالكتروني</h5> <a>كيفية الحصول على المنتج</a>
        </div>
      </div>


    </div>
  </div>



  <?php

require_once __DIR__."/includes/footer.php"; ?>