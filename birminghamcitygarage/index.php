<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/images/fav.png">
    <title>Landing Page </title>
    <meta name="description" content="Unlock business growth with Landing Page.">
    <meta name="keyword" content="IT Services, IT Consulting, Graphic Designing, Multimedia Services, UI/UX Designing, Mobile App Development Services, Digital Marketing Services, Customer Services, Software Solutions, Business Management Solutions, Cloud & Tech Solutions, Quality Assurance Services">
    <meta name="author" content="Landing">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    

  </head>
  <body>
    <!-- Common TopHeader Navigation --> 
    <?php include_once("header.php") ?>

    <!-- Home Section -->
    <section class="home" id="home">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="d-flex justify-content-center">
              <div class="col-lg-6">
                <div class="home-contant">
                  <h1 class="text-white headtxtfont">Car Repairing & Service Made Easy</h1>
                  <p class="text-white">A fair price in seconds, mechanics you can trust, next-day service at your door</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="d-flex marginbotm">
              <div class="col-lg-1"></div>
              <div class="col-lg-2">
                <div class="servcart">
                  <div class="bannr">
                    <div class="innerbannr">
                      <a href="#">
                        <img class="roundimg" src="assets/images/icon-1.png" alt="Home Image 1"/>
                      </a>
                    </div>
                  </div>
                  <p class="text-white text-center">Cheaper Than Franchise</p>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="servcart">
                  <div class="bannr">
                    <div class="innerbannr">
                      <a href="#">
                        <img class="roundimg" src="assets/images/icon-2.png" alt="Home Image 2"/>
                      </a>
                    </div>
                  </div>
                  <p class="text-white text-center">Instant Fixed Price</p>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="servcart">
                  <div class="bannr">
                    <div class="innerbannr">
                      <a href="#">
                        <img class="roundimg" src="assets/images/icon-3.png" alt="Home Image 3" />
                      </a>
                    </div>
                  </div>
                  <p class="text-white text-center">Qualified Mechanics</p>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="servcart">
                  <div class="bannr">
                    <div class="innerbannr">
                      <a href="#">
                        <img class="roundimg" src="assets/images/icon-4.png" alt="Home Image 4" />
                      </a>
                    </div>
                  </div>
                  <p class="text-white text-center">1 Year Repair Warranty</p>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="servcart">
                  <div class="bannr">
                    <div class="innerbannr">
                      <a href="#">
                        <img class="roundimg" src="assets/images/icon-5.png" alt="Home Image 5" />
                      </a>
                    </div>
                  </div>
                  <p class="text-white text-center">Next Day Booking</p>
                </div>
              </div>
              <div class="col-lg-1"></div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="conatactcenter">
              <div class="contactarea">
                <h3 class="text-white hdingtxtfont">Check Instant Price & Book Service</h3>
                <div class="inputs">
                  <form id="contact-form" method="post" action="#">
                    <div class="d-flex mobildflxnone">
                      <div class="col-lg-3 col-sm-3">
                        <input type="text" id="regno" class="form-control" name="regno" placeholder="Reg Number" required>
                      </div>
                      <div class="col-lg-3 col-sm-3">
                        <input type="text" id="pcode" class="form-control" name="pcode" placeholder="Postal Code" required>
                      </div>
                      <div class="col-lg-3 col-sm-3">
                        <div class="select-wrapper">
                          <select class="form-control drpdwnservice">
                            <option>Select Service</option>
                            <option>ABC</option>
                            <option>DEF</option>
                            <option>GHI</option>
                          </select>
                          <i class="fa fa-caret-down" aria-hidden="true"></i>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-3">
                        <button name="submit" type="submit" class="btn btn-danger">GET A QUOTE</button>
                      </div>
                    </div>
                    <div class="note text-warning">Don't know your vehicle registration?</div>
                    <div class="d-flex mobildflxnone mt-1 ">
                      <div class="mesg text-white"> Average saving is calculated as the potential saving between the average and maximum quote per job </div>
                      <div class="pric text-white"> Average Saving: <span class="pricdigit">$0.00</span>
                      </div>
                    </div>
                    <div id="auto-response">
                      <p class="text-white p-3"> Thank you for getting in touch. Our team will get back to you as soon as possible! </p>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


     <!-- Services Section -->
     <section class="services" id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="d-flex justify-content-center">
              <div class="col-lg-8">
                <h3 class="text-center mt-5 headertextfonts"> Our Services </h3>
                <p class="text-center descript"> Join Mechanic as a mechanic or garage and accept the work you want. Free to join, with great perks and discounts. </p>
              </div>
            </div>
          </div>
          <div class="col-lg-12">

            <div class="tab-content">
              <div id="repair" class="tab-pane fade show active">
                <img class="mx-auto d-block" src="assets/images/service-main-img.png" alt="services main image">
              </div>
              <div id="inspection" class="tab-pane fade">
                <img class="mx-auto d-block" src="assets/images/service-main-img1.png" alt="services main image">
              </div>
              <div id="servicing" class="tab-pane fade">
                <img class="mx-auto d-block" src="assets/images/service-main-img2.png" alt="services main image">
              </div>
              <div id="tyres" class="tab-pane fade">
                <img class="mx-auto d-block" src="assets/images/service-main-img3.png" alt="services main image">
              </div>
              <div id="mot" class="tab-pane fade">
                <img class="mx-auto d-block" src="assets/images/service-main-img.png" alt="services main image">
              </div>
              <div id="diagnostic" class="tab-pane fade">
                <img class="mx-auto d-block" src="assets/images/service-main-img1.png" alt="services main image">
              </div>
            </div>
            
            <ul class="nav justify-content-evenly mb-5 mt-5">
              <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#repair">
                  <img class="servcimg" src="assets/images/repair-icon.png" alt="repair icon">
                  <p class="text-center mt-2 text-black">Repair</p>
                </a>
              </li>
              <li class="nav-item">
                <!-- <a class="nav-link borderbtm" data-bs-toggle="tab" href="#Locations">Top Locations</a> -->
                <a class="nav-link" data-bs-toggle="tab" href="#inspection">
                  <img class="servcimg" src="assets/images/inspection-icon.png" alt="inspection icon">
                  <p class="text-center mt-2 text-black">Pre-Inspection</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#servicing">
                  <img class="servcimg" src="assets/images/servicing-icon.png" alt="servicing icon">
                  <p class="text-center mt-2 text-black">Servicing</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tyres">
                  <img class="servcimg" src="assets/images/tyres-icon.png" alt="tyres icon">
                  <p class="text-center mt-2 text-black">Tyres</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#mot">
                  <img class="servcimg" src="assets/images/mot-icon.png" alt="mot icon">
                  <p class="text-center mt-2 text-black">MOT</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#diagnostic">
                  <img class="servcimg" src="assets/images/diagnostic-icon.png" alt="diagnostic icon">
                  <p class="text-center mt-2 text-black">Diagnotic</p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>


    <!-- Banner Section -->
    <section class="banner" id="banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="d-flex justify-content-center">
              <div class="col-lg-10">
                <h3 class="text-center mt-5 headertextfonts text-white">Apply to Be A Mechanic</h3>
                <p class="text-center descript text-white"> Join Mechanic as a mechanic or garage and accept the work you want. Free to join, with great perks and discounts. </p>
              </div>
            </div>
            <div class="btnstyl mb-5">
              <a href="" class="banerbtn">WORK WITH MECHANIC</a>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Testimonials Section -->
    <section class="testimonials">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="d-flex justify-content-center">
              <div class="col-lg-8">
                <h3 class="text-center mt-5 headertextfonts">What Our Customers Are Saying</h3>
                <p class="text-center descript"> Join ClickMechanic as a mechanic or garage and accept the work you want. Free to join, with great perks and discounts. </p>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="d-flex cardarea">
              <div class="d-flex slider">
                <div class="card width">
                  <div class="circularimg">
                    <div class="tstmonalrounder">
                      <a href="#">
                        <img class="tstmonlrndimg" src="assets/images/testimonial-1.png"  alt="testimonial Image 1"/>
                      </a>
                    </div>
                  </div>
                  <h5 class="fontfmly">Simon Rebbitt</h5>
                  <p class="text-center pfontsiz">The support staff are on hand to help, and the work gets done quickly and at a very</p>
                  <div class="d-flex">
                    <img class="starsize" src="assets/images/star.png" alt="star icon">
                    <img class="starsize" src="assets/images/star.png" alt="star icon">
                    <img class="starsize" src="assets/images/star.png" alt="star icon">
                    <img class="starsize" src="assets/images/star.png" alt="star icon">
                    <img class="starsize" src="assets/images/star.png" alt="star icon">
                  </div>
                </div>
                <div class="card width">
                  <div class="circularimg">
                    <div class="tstmonalrounder">
                      <a href="#">
                        <img class="tstmonlrndimg" src="assets/images/testimonial-2.png"   alt="testimonial Image 2"/>
                      </a>
                    </div>
                  </div>
                  <h5 class="fontfmly">Simon Rebbitt</h5>
                  <p class="text-center pfontsiz">The support staff are on hand to help, and the work gets done quickly and at a very</p>
                  <div class="d-flex">
                    <img class="starsize" src="assets/images/star.png" alt="star icon">
                    <img class="starsize" src="assets/images/star.png" alt="star icon">
                    <img class="starsize" src="assets/images/star.png" alt="star icon">
                    <img class="starsize" src="assets/images/star.png" alt="star icon">
                    <img class="starsize" src="assets/images/star1.png" alt="star icon">
                  </div>
                </div>
                <div class="card width">
                  <div class="circularimg">
                    <div class="tstmonalrounder">
                      <a href="#">
                        <img class="tstmonlrndimg" src="assets/images/testimonial-3.png"   alt="testimonial Image 3"/>
                      </a>
                    </div>
                  </div>
                  <h5 class="fontfmly">Simon Rebbitt</h5>
                  <p class="text-center pfontsiz">The support staff are on hand to help, and the work gets done quickly and at a very</p>
                  <div class="d-flex">
                    <img class="starsize" src="assets/images/star.png" alt="star icon">
                    <img class="starsize" src="assets/images/star.png" alt="star icon">
                    <img class="starsize" src="assets/images/star.png" alt="star icon">
                    <img class="starsize" src="assets/images/star.png" alt="star icon">
                    <img class="starsize" src="assets/images/star.png" alt="star icon">
                  </div>
                </div>
                <div class="card width">
                  <div class="circularimg">
                    <div class="tstmonalrounder">
                      <a href="#">
                        <img class="tstmonlrndimg" src="assets/images/testimonial-1.png"   alt="testimonial Image 4"/>
                      </a>
                    </div>
                  </div>
                  <h5 class="fontfmly">Simon Rebbitt</h5>
                  <p class="text-center pfontsiz">The support staff are on hand to help, and the work gets done quickly and at a very</p>
                  <div class="d-flex">
                    <img class="starsize" src="assets/images/star.png" alt="star icon">
                    <img class="starsize" src="assets/images/star.png" alt="star icon">
                    <img class="starsize" src="assets/images/star.png" alt="star icon">
                    <img class="starsize" src="assets/images/star.png" alt="star icon">
                    <img class="starsize" src="assets/images/star.png" alt="star icon">
                  </div>
                </div>
                <div class="card width">
                  <div class="circularimg">
                    <div class="tstmonalrounder">
                      <a href="#">
                        <img class="tstmonlrndimg" src="assets/images/testimonial-2.png"   alt="testimonial Image 5"/>
                      </a>
                    </div>
                  </div>
                  <h5 class="fontfmly">Simon Rebbitt</h5>
                  <p class="text-center pfontsiz">The support staff are on hand to help, and the work gets done quickly and at a very</p>
                  <div class="d-flex">
                    <img class="starsize" src="assets/images/star.png" alt="star icon">
                    <img class="starsize" src="assets/images/star.png" alt="star icon">
                    <img class="starsize" src="assets/images/star.png" alt="star icon">
                    <img class="starsize" src="assets/images/star.png" alt="star icon">
                    <img class="starsize" src="assets/images/starhalf.png" alt="star icon">
                  </div>
                </div>
                <div class="card width">
                  <div class="circularimg">
                    <div class="tstmonalrounder">
                      <a href="#">
                        <img class="tstmonlrndimg" src="assets/images/testimonial-3.png"   alt="testimonial Image 6"/>
                      </a>
                    </div>
                  </div>
                  <h5 class="fontfmly">Simon Rebbitt</h5>
                  <p class="text-center pfontsiz">The support staff are on hand to help, and the work gets done quickly and at a very</p>
                  <div class="d-flex">
                    <img class="starsize" src="assets/images/star.png" alt="star icon">
                    <img class="starsize" src="assets/images/star.png" alt="star icon">
                    <img class="starsize" src="assets/images/star.png" alt="star icon">
                    <img class="starsize" src="assets/images/star.png" alt="star icon">
                    <img class="starsize" src="assets/images/star.png" alt="star icon">
                  </div>
                </div>
                <div class="card width">
                  <div class="circularimg">
                    <div class="tstmonalrounder">
                      <a href="#">
                        <img class="tstmonlrndimg" src="assets/images/testimonial-1.png"   alt="testimonial Image 7"/>
                      </a>
                    </div>
                  </div>
                  <h5 class="fontfmly">Simon Rebbitt</h5>
                  <p class="text-center pfontsiz">The support staff are on hand to help, and the work gets done quickly and at a very</p>
                  <div class="d-flex">
                    <img class="starsize" src="assets/images/star.png" alt="star icon">
                    <img class="starsize" src="assets/images/star.png" alt="star icon">
                    <img class="starsize" src="assets/images/star.png" alt="star icon">
                    <img class="starsize" src="assets/images/star.png" alt="star icon">
                    <img class="starsize" src="assets/images/star1.png" alt="star icon">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="dots-container mb-5">
              <div class="d-flex justify-content-center">
                <div class="slidr black"></div>
                <div class="slidr"></div>
                <div class="slidr"></div>
                <div class="slidr"></div>
                <div class="slidr"></div>
                <div class="slidr mobilshw"></div>
                <div class="slidr mobilshw"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Tabs Section -->
    <section class="tabs" id="tabs">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="d-flex justify-content-center">
              <div class="col-lg-6">
                <h3 class="text-center mt-5 headertextfonts text-white">Book Repairs For Hundreds Of Makes and Faults</h3>
                <p class="text-center descript text-white mb-4"> Book a vetted mechanic to fix your car at your home or office. </p>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <ul class="nav justify-content-center">
              <li class="nav-item">
                <a class="nav-link borderbtm active" data-bs-toggle="tab" href="#Makes">Top Makes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link borderbtm" data-bs-toggle="tab" href="#Locations">Top Locations</a>
              </li>
              <li class="nav-item">
                <a class="nav-link borderbtm" data-bs-toggle="tab" href="#Jobs">Top Jobs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link borderbtm" data-bs-toggle="tab" href="#Categories">Top Categories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link borderbtm" data-bs-toggle="tab" href="#Estimated">Price Estimated</a>
              </li>
            </ul>
            <div class="tab-content mt-4">
              <div id="Makes" class="tab-pane fade zoom show active">
                <div class="d-flex justify-content-center">
                  <img class="tablinetwoimages" src="assets/images/buick.png" alt="cars brand logo">
                  <img class="tablinetwoimages" src="assets/images/ford.png" alt="cars brand logo">
                  <img class="tablinetwoimages" src="assets/images/lexus.png" alt="cars brand logo">
                  <img class="tablinetwoimages" src="assets/images/toyota.png" alt="cars brand logo">
                  <img class="tablinetwoimages" src="assets/images/cadillac.png" alt="cars brand logo">
                </div>
                <div class="d-flex justify-content-center">
                  <img class="tablinethreimages" src="assets/images/cheverolet.png" alt="cars brand logo">
                  <img class="tablinethreimages" src="assets/images/honda.png" alt="cars brand logo">
                  <img class="tablinethreimages" src="assets/images/nissan.png" alt="cars brand logo">
                  <img class="tablinethreimages" src="assets/images/mitsubhisi.png" alt="cars brand logo">
                  <img class="tablinethreimages" src="assets/images/hyundai.png" alt="cars brand logo">
                </div>
              </div>
              <div id="Locations" class="tab-pane fade zoom">
                <div class="d-flex justify-content-center">
                  <img class="tablineoneimages" src="assets/images/buick.png" alt="cars brand logo">
                  <img class="tablineoneimages" src="assets/images/buick.png" alt="cars brand logo">
                  <img class="tablineoneimages" src="assets/images/buick.png" alt="cars brand logo">
                  <img class="tablineoneimages" src="assets/images/buick.png" alt="cars brand logo">
                  <img class="tablineoneimages" src="assets/images/buick.png" alt="cars brand logo">
                </div>
                <div class="d-flex justify-content-center">
                  <img class="tablinetwoimages" src="assets/images/ford.png" alt="cars brand logo">
                  <img class="tablinetwoimages" src="assets/images/ford.png" alt="cars brand logo">
                  <img class="tablinetwoimages" src="assets/images/ford.png" alt="cars brand logo">
                  <img class="tablinetwoimages" src="assets/images/ford.png" alt="cars brand logo">
                  <img class="tablinetwoimages" src="assets/images/ford.png" alt="cars brand logo">
                </div>
              </div>
              <div id="Jobs" class="tab-pane fade zoom">
                <div class="d-flex justify-content-center">
                  <img class="tablinetwoimages" src="assets/images/ford.png" alt="cars brand logo">
                  <img class="tablinetwoimages" src="assets/images/ford.png" alt="cars brand logo">
                  <img class="tablinetwoimages" src="assets/images/ford.png" alt="cars brand logo">
                  <img class="tablinetwoimages" src="assets/images/ford.png" alt="cars brand logo">
                  <img class="tablinetwoimages" src="assets/images/ford.png" alt="cars brand logo">
                </div>
                <div class="d-flex justify-content-center">
                  <img class="tablinethreimages" src="assets/images/lexus.png" alt="cars brand logo">
                  <img class="tablinethreimages" src="assets/images/lexus.png" alt="cars brand logo">
                  <img class="tablinethreimages" src="assets/images/lexus.png" alt="cars brand logo">
                  <img class="tablinethreimages" src="assets/images/lexus.png" alt="cars brand logo">
                  <img class="tablinethreimages" src="assets/images/lexus.png" alt="cars brand logo">
                </div>
              </div>
              <div id="Categories" class="tab-pane fade zoom">
                <div class="d-flex justify-content-center">
                  <img class="tablinethreimages" src="assets/images/lexus.png" alt="cars brand logo">
                  <img class="tablinethreimages" src="assets/images/lexus.png" alt="cars brand logo">
                  <img class="tablinethreimages" src="assets/images/lexus.png" alt="cars brand logo">
                  <img class="tablinethreimages" src="assets/images/lexus.png" alt="cars brand logo">
                  <img class="tablinethreimages" src="assets/images/lexus.png" alt="cars brand logo">
                </div>
                <div class="d-flex justify-content-center">
                  <img class="tablineoneimages" src="assets/images/buick.png" alt="cars brand logo">
                  <img class="tablineoneimages" src="assets/images/buick.png" alt="cars brand logo">
                  <img class="tablineoneimages" src="assets/images/buick.png" alt="cars brand logo">
                  <img class="tablineoneimages" src="assets/images/buick.png" alt="cars brand logo">
                  <img class="tablineoneimages" src="assets/images/buick.png" alt="cars brand logo">
                </div>
              </div>
              <div id="Estimated" class="tab-pane fade zoom">
                <div class="d-flex justify-content-center">
                  <img class="tablinetwoimages" src="assets/images/ford.png" alt="cars brand logo">
                  <img class="tablinetwoimages" src="assets/images/ford.png" alt="cars brand logo">
                  <img class="tablinetwoimages" src="assets/images/ford.png" alt="cars brand logo">
                  <img class="tablinetwoimages" src="assets/images/ford.png" alt="cars brand logo">
                  <img class="tablinetwoimages" src="assets/images/ford.png" alt="cars brand logo">
                </div>
                <div class="d-flex justify-content-center">
                  <img class="tablineoneimages" src="assets/images/buick.png" alt="cars brand logo">
                  <img class="tablineoneimages" src="assets/images/buick.png" alt="cars brand logo">
                  <img class="tablineoneimages" src="assets/images/buick.png" alt="cars brand logo">
                  <img class="tablineoneimages" src="assets/images/buick.png" alt="cars brand logo">
                  <img class="tablineoneimages" src="assets/images/buick.png" alt="cars brand logo">
                </div>
              </div>
            </div>
          </div><div class="col-lg-12"><div class="btnstyl mb-5 mt-4"><a href="" class="banerbtn">VIEW MORE</a></div></div>
        </div>
      </div>
    </section>



    <!-- Booking Section -->
    <section class="booking" id="booking">
      <div class="container">.
        <div class="row">
          <div class="col-lg-6">
            <h3 class="mt-4 headertextbokng"> Book A Mechanic Online Today </h3>
            <p class="descriptbokng"> Get an instant quote, then book a vetted mechanic to fix your car at your home or office. </p>
            <input type="text" id="RegistNum" name="RegistNum" placeholder="Your Registration Number ">
            <a href="#" class="atextdecoration">I don't know my registration number</a>
            <input type="text" id="Postalcod" name="Postalcod" placeholder="Your Postal Code ">
            <div class="mt-3 mb-5"><a class="bookingbtn" href="">Send A Quote Request</a></div>
            <div class="d-flex justify-content-evenly higt">
              <img class="certificimgmob" src="assets/images/vetted-mechanic.png" alt="First certificate">
              <img class="certificimgmob" src="assets/images/save-upto-50.png" alt="First certificate">
              <img class="certificimgmob" src="assets/images/fast-booking.png" alt="First certificate">
            </div>
          </div>
          <div class="col-lg-1"></div>
          <div class="col-lg-5">
            <img class="imagesizmob" src="assets/images/book-online-image.png" alt="Booking main image">
          </div>
        </div>
      </div>
    </section>
    <!-- Common Footer Navigation -->
    <?php include_once("footer.php") ?>

    <!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="assets/js/custom.js"></script>
  </body>
</html>