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
    <a href="signup"><button>إنشاء حساب جديد</button></a>
  </div>

  <!--   end login popupp     --->



  <!--    cart popupp     --->
  
  <!--   end cart popupp     --->

  <div class="category-details">

    <ul>
      <li><a href="/">الرئيسية</a></li>
      <li><a href="/">الكتب العربية</a></li>
      <li><a href="/">كتب إلكترونية</a></li>
      <li><a href="/">لانك الله كتاب إلكتروني</a></li>
    </ul>

  </div>
  <div class="main-details">



    <div class="details1">
      <img onclick="callImage(this);" src="assets/books/book2.webp" alt="" width="250px">
      <div style="border: olive solid 1px; width: 4rem;
 display: flex;justify-content: space-around;border-radius: 0.5rem;
"> <img src="assets/books/book2.webp" alt="" width="40px"></div>
    </div>

  <!--  books popUpp-->
  <div id="popUP">
    <div class="header">
      <button onclick="hideModule('popUP');">X</button>
      <button id="assets/book-prev">></button>
      <button id="assets/book-next">
        <</button>

    </div>
    <img id="imageView">
  </div>

    <div class="details2">
      <h1>لانك الله (كتب إلكتروني)</h1>
      <h4>عرض المزيد</h4>
      <p class="price">12.99رس
      </p>
      <div style="text-align: left;">
        <p>وحدة البيع</p>
        <h4>رقم الصنف 545454 رقم المنتج 4</h4>
      </div>
      <p style="margin-bottom: 0.9rem;"> الصيغ المتوفرة</p>
      <div class="details-select">
      

        <span><input type="checkbox" name="book"> كتاب الكتروني </span> 
         <p class="price">12.99R.S</p>

       
        <span><input type="checkbox" name="book"> كتاب مطبوع </span> <p class="price">17.99R.S</p>
      </div>



    </div>


    <div class="details3">
      <div class="details3-1">
        <div class="details3-p">
          <p><em>ملاحضة</em> سيتم إافة هذا الكتاب
            الالكتروني الى مكتبتك</p>
          <h4>إقراء المزيد</h4>
        </div>

      </div>

      <div class="details3-2"> 
        <select name="1" id="">1</select>
       <a href="assets/pages/basket.html"><button class="addtocart"> تحديث الى السلة </button></a> 
       
      </div>




      <div class="details3-3">
        <ul>
          
         
          <li>اصلي ومضمون<img src="assets/icons/star.png" alt="" width="30px"></li>
          <li>شحن سريع ومجاني<img src="assets/icons/track.png" alt="" width="30px"> </li> 
          <li>تسوق امن<img src="assets/icons/privacy.png" alt="" width="30px"> </li>
        </ul>
      </div>

      <div class="details3-4">
        <div>مشاركة<img src="assets/icons/twitter.png" width="20px" alt=""></div>
        <div>المفضلة<img src="assets/icons/insta.png" width="20px" alt=""></div>
        <div>مقارنة<img src="assets/icons/snap.png" width="20px" alt=""></div>

      </div>

    </div>

  </div>

  <!--المواصفات -->
  <p class="details-title">كتاب يتحدث عن بعض اسماء الله الحسنى وكيف نعيشها في حياتنا
    حرص المؤلف ان يكون الكتاب مناسبا لمن هم متوسطي الثقافة ويكون مناسبا
    للمحتاج والمريض والسليم
  </p>
  <h1 style="text-align: right;padding: 1rem;">المواصفات</h1>
  <table class="details-table">
    <tr>
      <td>JB54521</td>
      <th>رقم الصنف</th>
    </tr>
    <tr>
      <td>4</td>
      <th>رقم المنتج</th>
    </tr>
    <tr>
      <td>علي جابر الفيفي</td>
      <th>المؤلف</th>
    </tr>
    <tr>
      <td>دار الحضارة للنشر والتوزيع</td>
      <th>الناشر</th>
    </tr>
    <tr>
      <td>2016</td>
      <th>تاريخ النشر </th>
    </tr>
    <tr>
      <td>ُEbook</td>
      <th>صيغة الكتاب</th>
    </tr>
    <tr>
      <td>182</td>
      <th>عدد الصفحات</th>
    </tr>
    <tr>
      <td>0.0100</td>
      <th>وزن الشحن </th>
    </tr>
    <tr>
      <td>epub</td>
      <th>صيغة الملف</th>
    </tr>
    <tr>
      <td>عربي</td>
      <th>اللغة</th>
    </tr>


  </table>

  <!-- مراجعات العملاء -->
  <div class="client">
    <div class="client-header">
      <h2>مراجعات العملاء</h2>
      <button>+ اكتب مراجعتك</button>
    </div>
    <div class="client-content">
      <div>
        <h3>Good</h3>
        <p>من قبل ريم</p>
        <p>2021/11/16</p>
      </div>
      <p>good</p>

      <!--  end1   -->
      <div>
        <h3>Good</h3>
        <p>من قبل ريم</p>
        <p>2021/11/16</p>
      </div>
      <p>good</p>

      <!--  end1   -->
      <div>
        <h3>Good</h3>
        <p>من قبل ريم</p>
        <p>2021/11/16</p>
      </div>
      <p>good</p>

      <!--  end1   -->


    </div>


  </div>

<div class="similler-products">
   <h1>منتجات مشابهه</h1>


  <div><img src="assets/books/book10.jpeg" width="150px" alt="">
  <h2> لأني عبدك </h2>
  <p class="price">15رس</p>
  <p>شامل الضريبة</p>
  </div>


  <div><img src="assets/books/book11.jpeg" width="150px" alt="">
    <h2>وضيفة الدين في الحياة</h2>
    <p class="price">15رس</p>
    <p>شامل الضريبة</p>
    </div>


    
  <div><img src="assets/books/book12.jpeg" width="150px" alt="">
    <h2> اصول الدين </h2>
    <p class="price">15رس</p>
    <p>شامل الضريبة</p>
    </div>


    
  <div><img src="assets/books/book13.jpeg" width="150px" alt="">
    <h2>القدس الشريف  </h2>
    <p class="price">15رس</p>
    <p>شامل الضريبة</p>
    </div>


    
  <div><img src="assets/books/book2.webp" width="150px" alt="">
    <h2> لانك الله </h2>
    <p class="price">15رس</p>
    <p>شامل الضريبة</p>
    </div>


    
  <div><img src="assets/books/book11.jpeg" width="150px" alt="">
    <h2>وضيفة الدين في الحياة  </h2>
    <p class="price">15رس</p>
    <p>شامل الضريبة</p>
    </div>

</div>
  <!--  footer     -->




  <?php

require_once __DIR__."/includes/footer.php"; ?>