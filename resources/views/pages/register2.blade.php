<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>DGital - Digital Agency HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/register_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
  </head>

  <body dir="rtl">
    <div class="container-xxl p-0">
      <!-- Spinner Start -->
      <div
        id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
      >
        <div
          class="spinner-grow text-primary"
          style="width: 3rem; height: 3rem"
          role="status"
        >
          <span class="sr-only">Loading...</span>
        </div>
      </div>
      <!-- Spinner End -->

      <!-- Navbar-->
      <nav
          class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-2 py-lg-0"
        >
          <a href="" class="navbar-brand p-0">
            <img src="img/أبطال الديجيتال.png" alt="Logo" />
          </a>
          <button
            class="navbar-toggler text-light"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
          >
            <span class="fa fa-bars"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="index.html" class="nav-item nav-link active">الرئيسية</a>
                <a href="blog.html" class="nav-item nav-link">المقالات</a>
                <a href="" class="nav-item nav-link">مشروع المؤسسة</a>
                <a href="contact.html" class="nav-item nav-link">تواصل معنا</a>
            </div>
            <a href="login.html" class="btn rounded-3 py-1 px-3 ms-2 d-none d-lg-block"
              >دخول</a
            >
            <a
              href="#register"
              class="btn rounded-3 py-1 px-3 ms-3 d-none d-lg-block"
              style="background-color: #fba504"
              >التسجيل</a
            >
          </div>
        </nav>
      <!-- Navbar-->
      <!-- register -->
      <div class="container" id="register">
        <div class="card">
            <div class="form">
                <div class="left-side" dir="ltr">
                    <ul class="progres_bar">
                        <li>المعلومات الشخصية</li>
                        <li>المعلومات الدراسية</li>
                        <!-- <li>Company Location</li> -->
                        <li>الحساب</li>
                    </ul>
                </div>
                <div class="right-side ">
                    <div class="main active">
                        <div class="manage">
                            <h3 class="my-2 text-secondary">إستمارة التسجيل</h3>
                        </div>
                        <div class="input_div">
                            <div class="input_text"> <input class="written_name" type="text"  required> <label>السمية</label> </div>
                            <div class="input_text"> <input type="text"  required> <label>الكنية</label> </div>
                        </div>
                        <div class="input_div">
                            <div class="input_text"> <input type="text"  required> <label>الإيمايل ديالك</label> </div>
                            <div class="input_text"> <input type="number"  required> <label>*0600000000</label> </div>
                        </div>
                        <h5 class="text-muted my-3 mx-2">الجنس</h5>
                        <div class="d-flex my-2 mx-2">
                            <div class="form-check">
                                <input type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="text-muted" for="flexRadioDefault1">
                                  ذكر
                                </label>
                              </div>
                              <div class="form-check">
                                <input type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="text-muted" for="flexRadioDefault2">
                                  أنثى
                                </label>
                              </div>
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                            <input class="chois" type="file" id="formFileMultiple" multiple>
                        </div>
                        <div class="button step_1"> <button class="next_btn">التالي</button> </div>
                    </div>
                    <!-- <div class="main">
                        <div class="manage">
                            <h3>Manage your freelance buisness with us</h3>
                        </div>
                        <div class="input_div">
                            <div class="input_text"> <select>
                                    <option>Type of entity</option>
                                    <option>OPC</option>
                                    <option>LLP</option>
                                    <option>Private Limited Company</option>
                                    <option>Public Limited Company</option>
                                </select> </div>
                            <div class="input_text"> <input type="text" require required> <label>Name of Company</label> </div>
                        </div>
                        <div class="input_div">
                            <div class="input_text"> <textarea placeholder="Describe Buisness Activity"></textarea> </div>
                        </div>
                        <div class="input_div">
                            <div class="input_text"> <input type="number" required> <label>Share Capital (INR)</label> </div>
                            <div class="input_text"> <input type="number" require required> <label>Number of Directors</label> </div>
                        </div>
                        <div class="button step_2 m_top"> <button class="prev_btn">السابق</button> <button class="next_btn">التالي</button> </div>
                    </div> -->
                    <div class="main ">
                        <div class="manage">
                            <h3>المعلومات الشخصية</h3> 
                        </div>
                        <div class="d-flex">
                        <div class="col-md-4">
                            <label for="inputState" class="form-label text-dark mx-2">القسم</label>
                            <select id="inputState" class="form-select">
                              <option selected>Choose...</option>
                              <option>3/1</option>
                              <option>3/2</option>
                              <option>3/3</option>
                              <option>3/4</option>
                              <option>3/5</option>
                              <option>3/6</option>
                              <option>3/7</option>
                              <option>3/8</option>
                              <option>3/9</option>
                              <option>3/10</option>
                              <option>3/11</option>
                              <option>3/12</option>
                            </select>
                          </div>
                          
                        <div class="d-flex flex-column mx-2">
                            <label for="inputState" class="form-label text-dark mt-1 mx-5">مكرر في السنة 3 ؟</label>
                            <div class="d-flex mx-5">
                                <div class="form-check">
                                    <input type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="text-muted" for="flexRadioDefault1">
                                      نعم
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                    <label class="text-muted" for="flexRadioDefault2">
                                      لا
                                    </label>
                                  </div>
                            </div>
                        </div>
                    </div>
                        <div class="input_div">
                            <div class="input_text"> <input type="text"  required> <label>معدل الدورة الأولى</label> </div>
                        </div>
                        <div class="input_div">
                            <div class="input_text"> <input type="text" required> <label>مهنة الأب</label> </div>
                            <input type="checkbox" class="mt-3" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="text-muted mt-2" for="flexRadioDefault2">
                                  متوفي
                                </label>
                        </div>
                        <div class="input_div">
                            <div class="input_text"> <input type="text"  required> <label>مهنة الأم</label> </div>
                            <input type="checkbox" class="mt-3" name="flexRadioDefault" id="flexRadioDefault2" >
                                <label class="text-muted mt-2" for="flexRadioDefault2">
                                  متوفية
                                </label>
                        </div>
                        <div class="button step_2 step_3"> <button class="prev_btn">السابق</button> <button class="next_btn">التالي</button> </div>
                    </div>
                    <div class="main ">
                        <div class="manage">
                            <h3> إنشاء الحساب</h3>
                        </div>
                        <div class="input_div">
                            <div class="input_text mt-5"> <input type="text" require required> <label>الإيمايل ديالك</label> </div>
                        </div>
                        <div class="input_div">
                            <div class="input_text"> <input class="pass_type" type="password" require required> <label>كلمة السر</label> <i class="fa fa-eye-slash password_eye"></i> </div>
                            <div class="input_text"> <input class="confirm_pass_type" type="password" require required> <label>اعد كلمة السر</label> <i class="fa fa-eye-slash con_eye"></i> </div>
                        </div>
                        <div class="button step_2 step_4"> <button class="prev_btn">السابق</button> <button class="sbmt_btn">تسجل</button> </div>
                    </div>
                    <div class="main " style="padding: 100px;">
                        <div class="manage">
                            <h3>هنيئا لك &nbsp;<span class="shown_name"></span></h3>
                            <h4>تم تسجيل حساب عملك بنجاح</h4>
                        </div> <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                            <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                            <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" /> </svg>   
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end registre -->
       <!-- Footer Start -->
        
       <div class="container-fluid text-light footers wow fadeIn" data-wow-delay="0.1s" dir="rtl">
        <div class="container py-5 px-lg-5">
            <div class="row g-5">
                <div class="col-md-4 col-lg-3">
                    <p class="section-title text-white h5 mb-4"><strong>العنوان</strong><span></span></p>
                    <p><i class="fa fa-map-marker-alt me-3"></i> الثانوية الإعدادية علال الفاسي</p>
                    <p><i class="fa fa-phone-alt me-3"></i > 09876 543 212+</p>
                    <p><i class="fa fa-envelope me-3"></i> info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <p class="section-title text-white h5 mb-4">Quick Link<span></span></p>
                    <a class="btn btn-link text-end" href="index.html"> شكون حنا</a>
                    <a class="btn btn-link text-end" href="contact.html"> تواصل معنا</a>
                    <a class="btn btn-link text-end" href="">سياسة الخصوصية</a>
                    <a class="btn btn-link text-end" href="">الشروط والأحكام</a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <p class="section-title text-white h5 mb-4"><strong>نادي أبطال الديجيتال</strong><span></span></p>
                    <p>الهدف هو اننا نحاولو نكتشفو المواهب المعلوماتية و نطوروها بشكل أفضل كما اننا غادي نحرصو على اندماجكم باش ينجح هاد الكلوب</p>
                    
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="row g-3 my-5">
                            <img class="img-fluid" src="img/أبطال الديجيتال.png" alt="Image">
                    </div>
                </div>
            </div>
        </div>
        <div class="px-lg-2">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="index.html">Degital</a>, جميع الحقوق محفوظة. 
                        
                        <!--/*** This template is free as long as you keep the footers author’s credit link/attribution link/backlink. If you'd like to use the template without the footers author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        <!-- Designed By <a class="border-bottom" href="">OUALI Rida</a><br><br> -->
                    </div>
                    <div class="col-md-6 text-center text-md-end" dir="ltr">
                        <div class="footers-menu">
                            <a href="">FQAs</a>
                            <a href="">مساعدة</a>
                            <a href="">Cookies</a>
                            <a href="">الرئيسية</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


      <!-- Back to Top -->
      <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"
        ><i class="bi bi-arrow-up"></i
      ></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/script.js"></script>
    <script src="js/register.js"></script>
  </body>
</html>


