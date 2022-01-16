<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link  rel="stylesheet" href="{{asset('bootstrap-5.1.3-dist/css/bootstrap.min.css')}}" >

    <link  rel="stylesheet" href="{{asset('css/style.css')}}" >

    <link  rel="stylesheet" href="{{asset('fontawesome-free-5.15.4-web/css/all.min.css')}}" >



      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      {{-- <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@500&family=Roboto:wght@100;300;400&display=swap" rel="stylesheet"> --}}
      <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@500&family=Roboto:wght@100;300;400&family=Rubik+Mono+One&display=swap" rel="stylesheet">

  <link rel="shortcut icon" href="{{asset('images/icons/logo.png')}}"/>

    <title>Arrows</title>
   
  </head>
  <body>



    <section class="header ">
            <div class="cover-color ">
                    <div class="row col-md-12">


                                                
                        <input type="checkbox" id="active">
                            <label for="active" class="menu-btn"><i id="show-icon" class="fas fa-bars"></i></label>
                            <div class="wrapper ">
                                    <ul>
                                    <li ><a href="#">Home</a></li>
                                   <li> <hr class="line-1 mt-0" style="width:550px;"> </li>
                                    <li><a href="#About">About</a></li>
                                      <li> <hr class="line-1 mt-0" style="width:550px;"> </li>
                                    <li><a href="#Our_Services">Our Services</a></li>
                                      <li> <hr class="line-1 mt-0" style="width:550px;"> </li>
                                    <li><a href="#contact_us">contact us</a></li>
                                      <li> <hr class="line-1 mt-0" style="width:550px;"> </li>
                                
                                    </ul>
                            </div>

                   
                      
                            {{-- <div class="col-md-5"></div> --}}

                            <div class="col-md-12 text-center">
                               <img src="{{asset('images/icons/logo.png')}}" class="mt-4 pointer-none" alt="logo"  width="150" height="110">
                            </div>

                            {{-- <div class="col-md-1  d-flex justify-content-sm-end" style=" margin-top: 20px">
                                    <i class="fas fa-bars mt-4 menu-icon"  ></i>
                            </div> --}}

                     

                        
                               
                                <div class="col-md-2"></div>
                                <div class="col-md-9">
                                    <hr class="line-1">
                                </div>
                       
                
                         <div class="col-md-12 col-sm-12 text-center">
                                <nav class="navMenu ">
                                        <a href="#">Home</a>
                                        <a href="#About">About</a>
                                        <a href="#Our_Services">Our Services</a>
                                        <a href="#contact_us">contact us</a>
                                        {{-- <div class="dot"></div> --}}
                                </nav>
                         </div>
                      
                            <div class="col-md-12 text-center text-white " style="margin-top:250px;">
                                    <h2 class="letter-font pointer-none">YOUR  SUCCESS IS OUR AIM</h2>
                            </div>
                       
                   
                   
                  

            </div>
            {{-- end row --}}

            <div class="row col-md-12">
            <div class="col-md-2"></div>
                <div class="col-md-8 why-arrows">
                            <h4 class="text-center text-white mt-4 title-why " > Why Arrows ?</h4>
                            <div class="row col-md-12 mt-4 container pointer-none">
                            <div class="col-md-2"></div>
                                <div class="col-md-2 col-sm-5  col-xs-5">
                                      <img src="{{asset('images/icons/time.png')}}"  alt="logo"  width="100%" >
                                      <p class=" text-center mt-4 descript"> Fast Software development. </p>
                                </div>
                                <div class="col-md-1 col-sm-1  col-xs-1"></div>
                                  <div class="col-md-2 col-sm-5 col-xs-5">
                                     <img src="{{asset('images/icons/money.png')}}"  alt="logo"  width="100%" >
                                      <p class=" text-center mt-4 descript"> Pay in monthly installments. </p>
                                </div>
                                  <div class="col-md-1 col-sm-1 col-xs-1"></div>
                                  <div class="col-md-2 col-sm-5  col-xs-5">
                                     <img src="{{asset('images/icons/support.png')}}" alt="logo"  width="100%" >
                                      <p class="text-center mt-4 descript"> 24/7 technical support. </p>
                                </div>
                            </div>
                </div>
            </div>


            </div>

    </section>



    
    <section class="container pointer-none">
        <div class="row col-md-12" id="About">
            <h3 class="text-center whowe">   Who we are   </h3>

              <div class="col-md-2"></div>
                <div class="col-md-8 ">
                  <hr class="line-1 mt-0">
              </div>
        </div>




          <div class="row col-md-12 mt-4" >
             <div class="col-md-2"></div>
                <div class="col-md-8 about-us">
                  <p class=" text-center text mt-4" > Arrows is one of the most innovative companies in the market of website and mobile apps development in Egypt, 
                  our teams consist of capable experts who aim to not only satisfy your needs but also help you unlock your full potential.</p>

                    <div class="row col-md-12" >
                        <div class="col-md-4"></div>
                          <div class="col-md-4 text-center d-flex justify-content-center about-button">
                            <p class="text-center text-about"> About us</p>
                          </div>
                    </div>
              </div>
            
           </div>




             <div class="row col-md-12 margin-t" >
             <div class="col-md-1 col-sm-12"></div>

                <div class="col-md-3 col-sm-12 about-us margin-l mt-4">
          
                    <img src="{{asset('images/icons/mission.png')}}" class="pointer-none image" alt="logo"  width="96px" >
              
                  <p class=" col-md-12 text-center text " style="margin-bottom: 84px; margin-top: 47px;">We seek to develop deep and satisfactory partnerships with our clients, we don’t view our company as a service provider but as a partner in their success as 
                  we sincerely aim for our services to be guiding steps in their road to success.</p>

                    <div class="row col-md-12" >
                        <div class="col-md-2"></div>
                          <div class="col-md-8 text-center d-flex justify-content-center about-button">
                            <p class="text-center text-about">Mission</p>
                          </div>
                    </div>
                    
              </div>


             
                <div class="col-md-3 col-sm-12 about-us margin-l mt-4">

                   <img src="{{asset('images/icons/vision.png')}}" class="pointer-none image" alt="logo"  width="96px" >
                  <p class=" col-md-12  text-center text" style=" margin-bottom: 86px;margin-top: 78px;"> We aim to be one of the leading companies in the market of information technology and software development in the 
                  MENA region and empower every business to be successful on different digital platforms.</p>

                    <div class="row col-md-12" >
                       <div class="col-md-2"></div>
                          <div class="col-md-8 text-center d-flex justify-content-center about-button" >
                            <p class="text-center text-about">vision</p>
                          </div>
                    </div>
                    
              </div>



             
                <div class="col-md-3 col-sm-12 about-us margin-l mt-4">

                   <img src="{{asset('images/icons/values.png')}}" class="pointer-none image" alt="logo"  width="96px" >

                   <p class="  col-md-12  text-center text" style=" margin-bottom: 28px;margin-top: 13px;" >
                          <p class="text-center text" > <b> Innovation </b> <br>
                            we are always looking to introduce the next big thing.  </p>
                          
                            <p class="text-center text mt-4" >  <b > Time-saving </b> <br/>
                          we value your time as much as you do .</p>


                            <p class="text-center text  mt-4" >  <b> Cost efficiency </b> <br/>
                            we aim to develop software at an affordable price.</p> 
                    </p>
                    <div class="row col-md-12" >
                       <div class="col-md-2"></div>
                          <div class="col-md-8 text-center d-flex justify-content-center about-button" >
                            <p class="text-center text-about">values</p>
                          </div>
                    </div>
                    
              </div>
            
           </div>



    </section>



  {{-- End Our services --}}
      <section class="container pointer-none">

                    <div class="row col-md-12  mt-4" id="Our_Services">
                          <h3 class="text-center whowe">   Our services  </h3>

                            <div class="col-md-2"></div>
                              <div class="col-md-8 ">
                                <hr class="line-1 mt-0">
                            </div>
                      </div>



            <div class="row col-md-12 mt-4" >
             <div class="col-md-1"></div>
                <div class="col-md-10  about-us">
                 <div class="row col-md-12"> 

                    <div class="col-md-1"></div> 
                    <div class="col-md-8"> 
                            <p class="text-service">
                            Your website is the best way to reinforce your brand identity and help tell your story to the world. 
                            We ensure this by designing a custom-made website that is tailored to fit your brand as well as your customer needs.
                              </p>
                    </div>
                 
                     <div class="col-md-3  image-service">
                          <img src="{{asset('images/icons/computer.png')}}"  alt="logo" width="142px" height="120px">
                    </div>
                     </div>      
                </div>

                    <div class="row col-md-12" >
                        <div class="col-md-4"></div>
                          <div class="col-md-4 text-center d-flex justify-content-center button-service">
                            <p class="text-center text-about "> Web development</p>
                          </div>
                    </div>
              </div>
            
           </div>



             <div class="row col-md-12 mt-4" >
             <div class="col-md-1"></div>
                <div class="col-md-10 about-us">
                    <div class="row col-md-12"> 

                    <div class="col-md-1"></div> 
                    <div class="col-md-8"> 
                          <p class="text-service">
                          According to recent studies, mobile phone users outnumber computer users,
                            having your own mobile application guarantees you more visibility and helps take you where your customers really exist and spend most of their time.
                            </p>
                    </div>
                    
                        <div class="col-md-3  image-service">
                              <img src="{{asset('images/icons/mobile.png')}}"  alt="logo"  width="142px"  height="120px">
                        </div>
                   </div>  
                </div>

                    <div class="row col-md-12" >
                        <div class="col-md-4"></div>
                          <div class="col-md-4 text-center d-flex justify-content-center button-service">
                            <p class="text-center text-about "> Mobile application</p>
                          </div>
                    </div>
              </div>
            
           </div>



           
             <div class="row col-md-12 mt-4" >
             <div class="col-md-1"></div>
                <div class="col-md-10 about-us">
                  <div class="row col-md-12"> 

                    <div class="col-md-1"></div> 
                    <div class="col-md-8"> 
                          <p class="text-service">
                          Offline advertising and traditional marketing are getting extinct by the minute and digital marketing unlocks infinite potential
                            for your brand and guarantees you steady communication with your existing customer base as well as new target audiences.
                          </p>

                    </div>
                
                 
                    <div class="col-md-3  image-service">
                          <img src="{{asset('images/icons/digital_markting.png')}}"  alt="logo" width="142px" height="120px">
                    </div>
                    </div>        
                </div>

                    <div class="row col-md-12" >
                        <div class="col-md-4"></div>
                          <div class="col-md-4 text-center d-flex justify-content-center button-service">
                            <p class="text-center text-about ">Digital markting</p>
                          </div>
                    </div>
              </div>
            
           </div>




      </section>
{{--End Our services --}}





  {{-- start Contact us --}}
      <section  class="container " id="contact_us">


                    <div class="row col-md-12  mt-4 pointer-none" >
                          <h3 class="text-center whowe">  Contact us </h3>

                            <div class="col-md-2"></div>
                              <div class="col-md-8 ">
                                <hr class="line-1 mt-0">
                            </div>
                      </div>




                      <p class="text-center  project  pointer-none">  Have a project in mind ? </p>

                       <p class="text-center  excited mt-2 pointer-none"> We are excited to hear all about it ! </p>



                        <div class="row  mt-4" >
                              <div class="col-md-1"></div>
                                  <div class="row col-md-10  about-us">
                                  <div class="row col-md-12  mt-4">
                                        {{-- <div class="col-md-1"></div> --}}
                                          <div class="col-md-5" style="margin-left: 4%;">
                                              <div class="mb-3">
                                                <label class="form-label text-form ">Name</label>
                                                <hr class="line-1 mt-0" style="width:247px;">
                                                <input type="email" class="form-control" placeholder="Enter your Name">
                                              </div>
                                              <div class="mb-3">
                                                <label  class="form-label  text-form">Phone</label>
                                                 <hr class="line-1 mt-0" style="width:247px;">
                                                <input type="email" class="form-control" placeholder="Enter your Phone">
                                              </div>  
                          
                                           </div>

                                         
                                             <div class="col-md-5" style="margin-left: 4%;">
                                              <div class="mb-3">
                                                <label class="form-label text-form">Email</label>
                                                 <hr class="line-1 mt-0" style="width:247px;">
                                                <input type="email" class="form-control" placeholder="Enter your Email">
                                              </div>
                                              <div class="mb-3">
                                                <label  class="form-label  text-form">Company name</label>
                                                 <hr class="line-1 mt-0" style="width:247px;">
                                                <input type="email" class="form-control b-radius" placeholder="Enter your Company name">
                                              </div>  
                          
                                           </div>


                                         <div class="row col-md-12  ">

                                            {{-- <div class="col-md-1"></div> --}}
                                            <div class="col-md-11" style="margin-left: 3%;" >
                                             <label class="form-label text-form">Massage</label>
                                                 <hr class="line-1 mt-0" style="width:247px;">
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" ></textarea>
                                            </div>
                                              
                                        </div>
                                           
                                    </div>
                                      <div class="row col-md-12" >
                                          <div class="col-md-4"></div>
                                            <div class="col-md-4 text-center">
                                              <p   class="text-center submit-button  mt-4 mb-4  ">Submit</p>
                                            </div>
                                      </div>
                                </div>
            
                         </div>




                         {{-- Get in touch --}}

                              
                        <h3 class="text-center whowe  pointer-none"> Get in touch </h3>
                              <div class="row col-md-12  mt-4 text-center">
                                    <div class="col-md-2"></div>

                                     <div class="col-md-2 text-center">
                                           <img src="{{asset('images/icons/phone.png')}}"  alt="logo" width="60px" height="43.57px">
                                          <br>
                                           <a href="tel:023-761-4450"> 0237614450</a>
                                          <a href="tel:011-636-0255">01116360255</a>

                                            
                                    </div>


                                    <div class="col-md-1"></div>


                                    <div class="col-md-2 text-center">
                                           <img src="{{asset('images/icons/mail.png')}}"  alt="logo" width="60px" height="43.57px"> <br>
                                           <a href = "mailto: Info@arrows-tec.com">Info@arrows-tec.com</a>

                                          
                                    </div>

                                      <div class="col-md-1"></div>
                                     <div class="col-md-2 text-center pointer-none">
                                           <img src="{{asset('images/icons/location.png')}}"  alt="logo" width="60px" height="43.57px">
                                           <p>10 Amin El- Rafaey, Dokki, Giza </p> 
                                    </div>


                              </div>


                         {{-- Get in touch --}}


      </section>



      <footer class="s-footer">


        <div class="row col-md-12">

              <div class="col-md-4">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3454.0010101946345!2d31.211733510728077!3d30.036828876144614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145846d4e440dc0f%3A0xa17673aee101ea10!2s10%20Amin%20El-Rafaey%2C%20Ad%20Doqi%20A%2C%20Dokki%2C%20Giza%20Governorate!5e0!3m2!1sen!2seg!4v1642212830380!5m2!1sen!2seg"
                            width="100%" style="border:10;" allowfullscreen="" loading="lazy"></iframe>

              
              </div>
            <div class="col-md-4 col-sm-12 text-center ">
            <div class="text mt-4">
                  <a href="#"> Home </a>
                  <a href="#About"> About </a>
                 <a href="#Our_Services"> Our services </a>
                 <a href="#contact_us"> contact us </a>
            </div>
          </div>


        <div class="col-md-4  col-sm-12 text-center ">
                      <div class="image   mt-2 mb-2">
                          <a href="#">  <img src="{{asset('images/icons/facebook.png')}}"  alt="facebook"> </a>
                          <a  href="#">  <img src="{{asset('images/icons/instgram.png')}}"  alt="instgram" > </a>
                          <a  href="#">  <img src="{{asset('images/icons/linked_in.png')}}"  alt="linked in"> </a>
                    </div>
        </div>


        
        </div>


      </footer>




  {{-- end Contact us --}}




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{asset('bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js')}}" ></script>
      <!-- jQuery -->
      <script src="{{asset('js/jquery/jquery.min.js')}}"></script>

      <script   src="{{asset('js/cutom.js')}}" ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>