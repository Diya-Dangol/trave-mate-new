<?php include('includes/header.php'); ?>

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- header banner with slide show images -->
    <section id="mainBanner">
        <div class="BannerSlider">
            <div class="slide fade" style="background-image: url(assets/sanjay-hona.jpg)">
            </div>
            <div class="slide fade" style="background-image: url(assets/beijing.jpg)">
            </div>
            <div class="slide fade" style="background-image: url(assets/leonard.jpg)">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>           
        </div>    

        <div class="searchBar ">
            <div class="container">
                <div class="mainHeader">
                    <h1 class="text-white ">never stop exploring</h1>
                    <label class="text-white ">grab your bag packs and enjoy holidays</label>
                </div>
                <div class="SearchContainer">
                    <form action="/nepal.php"  class="center">
                        <div class="form-group">
                            <h3>want to travel with us?</h3>
                        </div>
                        <div class="form-group">
                            <select name="location" class="form-control">
                                <option value>where to go</option>
                                <option value="nepal">Nepal</option>
                                <option value="america">America</option>
                                <option value="south-africa">South Africa</option>
                                <option value="india">India</option>
                                <option value="oceana">Nepal</option>
                                <option value="nepal">Nepal</option>
                                <option value="nepal">Nepal</option>
                                <option value="nepal">Nepal</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control" id="date" name="date" placeholder="date" value="date">
                        </div>

                        <div class="form-group">
                            <select name="travel-type" class="form-control">
                                <option value>Travel Type</option>
                                <option value="city-tour">city tour</option>
                                <option value="adventour-tour">adventour tour</option>
                                <option value="couple-tour">couple tour</option>
                                <option value="group-tour">group tour</option>                        
                            </select>
                        </div>

                        <div class="form-group" >
                            <p style="margin: 0">Price Range</p>
                            <section class="range-slider">
                                <span class="rangeValues"></span>
                                <input value="500" min="500" max="50000" step="500" type="range">
                                <input value="50000" min="500" max="50000" step="500" type="range">
                            </section>
                        </div>

                        <div class="form-group">
                            <a href="nepal.php" class="btn"> search <i class="fa fa-search"></i></a>
                        </div>              
                    </form>
                </div>
                <div class="dotted-slider">
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span> 
                    <span class="dot" onclick="currentSlide(3)"></span> 
                </div>   
            </div>
        </div>

              
    </section>
    
    <!-- popular destination container -->
    <section id="popularDestination">
        <div class="container">
            <div class="sectionHeader">
                <h2>Popular Destinations</h2>
                <label>Choose Your Next Destination</label>
            </div>
            <div class="listLayout">
                <div class="list" style="background-image: url(assets/kathmandu.jpg)">
                    <div class="dark">
                        <i class="fa fa-binoculars"></i>   
                        <h5>Nepal <span>05 Places</span></h5>
                    </div>
                </div>
                <div class="list" style="background-image: url(assets/japan.jpg)">
                    <div class="dark">
                        <i class="fa fa-binoculars"></i>   
                        <h5>japan <span>05 Places</span></h5>
                    </div>
                </div>
                <div class="list" style="background-image: url(assets/beijing.jpg)">
                    <div class="dark">
                        <i class="fa fa-binoculars"></i>   
                        <h5>china <span>05 Places</span></h5>
                    </div>
                </div>
                <div class="list big" style="background-image: url(assets/leonard.jpg)">
                    <div class="dark">
                        <i class="fa fa-binoculars"></i>   
                        <h5>paris <span>05 Places</span></h5>
                    </div>
                </div>
                <div class="list" style="background-image: url(assets/beijing.jpg)">
                    <div class="dark">
                        <i class="fa fa-binoculars"></i>   
                        <h5>china <span>05 Places</span></h5>
                    </div>
                </div>
                <div class="list" style="background-image: url(assets/kathmandu.jpg)">
                    <div class="dark">
                        <i class="fa fa-binoculars"></i>   
                        <h5>japan <span>05 Places</span></h5>
                    </div>
                </div>
                <div class="list" style="background-image: url(assets/japan.jpg)">
                    <div class="dark">
                        <i class="fa fa-binoculars"></i>   
                        <h5>japan <span>05 Places</span></h5>
                    </div>
                </div>
                <div class="list" style="background-image: url(assets/beijing.jpg)">
                    <div class="dark">
                        <i class="fa fa-binoculars"></i>   
                        <h5>japan <span>05 Places</span></h5>
                    </div>
                </div>
                
                <div class="clear"></div>
            </div>
            <span class="button">
                <a href="nepal.php" class="btn">More Destination  <i class="fa fa-arrow-right"></i></a>
            </span>
        </div>
    </section>

    <!-- banner image with button view all packages -->
    <section class="banner">
        <div class="sectionBanner" style="background-image: url(assets/nepal.jpg)">
        <div class="dark">
            <div class="container">
                <h2>choose your next destination</h2>
                <span class="button">
                    <a href="trip-detail.php" class="btn">view all packages <i class="fa fa-arrow-right"></i></a>
                </span>
                <div class="clear"></div>
            </div>
        </div>
    </section>

    <!-- popular packages container -->
    <section id= "popularPackages">
        <div class = "container">
            <div class="sectionHeader">
                <h2>popular packages</h2>
                <label>choose your next package</label>
            </div>
            <section class="row">
                <article class="column">
                    <div class="card" style="background-image: url(assets/kathmandu.jpg)">  
                        <div class="dark">
                            <i class="fa fa-binoculars"></i>
                            <h5>
                                2 reviews
                                <span class="star">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </span>
                            </h5>
                        </div>
                    </div>                     
                    <article class="content">
                        <h3>kathmandu</h3>
                        <text>nepal</text>
                        <p>
                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci...
                        </p>
                        <article class="icon">
                            <div id="icon-text">
                                <i class="fa fa-clock-o"></i>
                                <text>3 days</text>
                            </div>
                            <div id="icon-text">
                                <i class="fa fa-calendar"></i>
                                <text>12 Jan - 16 Jan</text>
                            </div>
                            <div id="icon-text">
                                <i class="fa fa-plane"></i>
                                <text>Nepal</text>
                            </div>                    
                            <div id="icon-text">
                                <i class="fa fa-compass"></i>
                                <text>Adventurous</text>
                            </div>
                        </article>
                        <hr>
                        <article class="float-content">
                            <h4 id="price">
                                Rs.8000
                                <span>
                                    /per person
                                </span>
                            </h4>      
                           <span><a href="" class="btn">book now</a></span>
                        </article>
                        <div class="clear"></div>
                    </article> 
                </article>        
                <article class="column">
                    <div class="card" style="background-image: url(assets/kathmandu.jpg)">  
                        <div class="dark">
                            <i class="fa fa-binoculars"></i>
                            <h5>
                                2 reviews
                                <span class="star">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </span>
                            </h5>
                        </div>
                    </div>                     
                    <article class="content">
                        <h3>kathmandu</h3>
                        <text>nepal</text>
                        <p>
                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci...
                        </p>
                        <article class="icon">
                            <div id="icon-text">
                                <i class="fa fa-clock-o"></i>
                                <text>3 days</text>
                            </div>
                            <div id="icon-text">
                                <i class="fa fa-calendar"></i>
                                <text>12 Jan - 16 Jan</text>
                            </div>
                            <div id="icon-text">
                                <i class="fa fa-plane"></i>
                                <text>Nepal</text>
                            </div>                    
                            <div id="icon-text">
                                <i class="fa fa-compass"></i>
                                <text>Adventurous</text>
                            </div>
                        </article>
                        <hr>
                        <article class="float-content">
                            <h4 id="price">
                                Rs.8000
                                <span>
                                    /per person
                                </span>
                            </h4>      
                           <span><a href="" class="btn">book now</a></span>
                        </article>
                        <div class="clear"></div>
                    </article> 
                </article>        
                <article class="column">
                    <div class="card" style="background-image: url(assets/kathmandu.jpg)">  
                        <div class="dark">
                            <i class="fa fa-binoculars"></i>
                            <h5>
                                2 reviews
                                <span class="star">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </span>
                            </h5>
                        </div>
                    </div>                     
                    <article class="content">
                        <h3>kathmandu</h3>
                        <text>nepal</text>
                        <p>
                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci...
                        </p>
                        <article class="icon">
                            <div id="icon-text">
                                <i class="fa fa-clock-o"></i>
                                <text>3 days</text>
                            </div>
                            <div id="icon-text">
                                <i class="fa fa-calendar"></i>
                                <text>12 Jan - 16 Jan</text>
                            </div>
                            <div id="icon-text">
                                <i class="fa fa-plane"></i>
                                <text>Nepal</text>
                            </div>                    
                            <div id="icon-text">
                                <i class="fa fa-compass"></i>
                                <text>Adventurous</text>
                            </div>
                        </article>
                        <hr>
                        <article class="float-content">
                            <h4 id="price">
                                Rs.8000
                                <span>
                                    /per person
                                </span>
                            </h4>      
                           <span><a href="" class="btn">book now</a></span>
                        </article>
                        <div class="clear"></div>
                    </article> 
                </article>        
                <article class="column">
                    <div class="card" style="background-image: url(assets/kathmandu.jpg)">  
                        <div class="dark">
                            <i class="fa fa-binoculars"></i>
                            <h5>
                                2 reviews
                                <span class="star">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </span>
                            </h5>
                        </div>
                    </div>                     
                    <article class="content">
                        <h3>kathmandu</h3>
                        <text>nepal</text>
                        <p>
                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci...
                        </p>
                        <article class="icon">
                            <div id="icon-text">
                                <i class="fa fa-clock-o"></i>
                                <text>3 days</text>
                            </div>
                            <div id="icon-text">
                                <i class="fa fa-calendar"></i>
                                <text>12 Jan - 16 Jan</text>
                            </div>
                            <div id="icon-text">
                                <i class="fa fa-plane"></i>
                                <text>Nepal</text>
                            </div>                    
                            <div id="icon-text">
                                <i class="fa fa-compass"></i>
                                <text>Adventurous</text>
                            </div>
                        </article>
                        <hr>
                        <article class="float-content">
                            <h4 id="price">
                                Rs.8000
                                <span>
                                    /per person
                                </span>
                            </h4>      
                           <span><a href="" class="btn">book now</a></span>
                        </article>
                        <div class="clear"></div>
                    </article> 
                </article>        
                <article class="column">
                    <div class="card" style="background-image: url(assets/kathmandu.jpg)">  
                        <div class="dark">
                            <i class="fa fa-binoculars"></i>
                            <h5>
                                2 reviews
                                <span class="star">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </span>
                            </h5>
                        </div>
                    </div>                     
                        <article class="content">
                        <h3>kathmandu</h3>
                        <text>nepal</text>
                        <p>
                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci...
                        </p>
                        <article class="icon">
                            <div id="icon-text">
                                <i class="fa fa-clock-o"></i>
                                <text>3 days</text>
                            </div>
                            <div id="icon-text">
                                <i class="fa fa-calendar"></i>
                                <text>12 Jan - 16 Jan</text>
                            </div>
                            <div id="icon-text">
                                <i class="fa fa-plane"></i>
                                <text>Nepal</text>
                            </div>                    
                            <div id="icon-text">
                                <i class="fa fa-compass"></i>
                                <text>Adventurous</text>
                            </div>
                        </article>
                        <hr>
                        <article class="float-content">
                            <h4 id="price">
                                Rs.8000
                                <span>
                                    /per person
                                </span>
                            </h4>      
                           <span><a href="" class="btn">book now</a></span>
                        </article>
                        <div class="clear"></div>
                    </article> 
                </article>        
                <article class="column">
                    <div class="card" style="background-image: url(assets/kathmandu.jpg)">  
                        <div class="dark">
                            <i class="fa fa-binoculars"></i>
                            <h5>
                                2 reviews
                                <span class="star">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </span>
                            </h5>
                        </div>
                    </div>                     
                        <article class="content">
                        <h3>kathmandu</h3>
                        <text>nepal</text>
                        <p>
                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci...
                        </p>
                        <article class="icon">
                            <div id="icon-text">
                                <i class="fa fa-clock-o"></i>
                                <text>3 days</text>
                            </div>
                            <div id="icon-text">
                                <i class="fa fa-calendar"></i>
                                <text>12 Jan - 16 Jan</text>
                            </div>
                            <div id="icon-text">
                                <i class="fa fa-plane"></i>
                                <text>Nepal</text>
                            </div>                    
                            <div id="icon-text">
                                <i class="fa fa-compass"></i>
                                <text>Adventurous</text>
                            </div>
                        </article>
                        <hr>
                        <article class="float-content">
                            <h4 id="price">
                                Rs.8000
                                <span>
                                    /per person
                                </span>
                            </h4>      
                           <span><a href="" class="btn">book now</a></span>
                        </article>
                        <div class="clear"></div>
                    </article> 
                </article>        
            </section> 

            <span class="button"><a href="" class="btn">more places <i class="fa fa-search"></i></a></span>
        </div>
    </section>

    <!-- card banner -->
    <section class="banner">
        <div class="dark" style="background-image: url(assets/vacations.jpg)">
        <div class="container">
            <div class="sectionHeader">
                <h2>
                    we accept
                </h2>
            </div>
            <div class="bannerIcon">
                <i class="fa fa-cc-visa"></i>
                <i class="fa fa-cc-mastercard"></i>
                <i class="fa fa-cc-paypal"></i>
                <i class="fa fa-credit-card"></i>
                <i class="fa fa-cc-discover"></i>
            </div>
        </div>
    </section>

    <!-- about us -->
    <section id="aboutUs">
        <div class = "container">
            <div class="sectionHeader">
                <h2>About us</h2>
                <label>let's introduce ourselves</label>
            </div>
            <!--  our story  -->
            <div class="sectionAbout">       
                <div class="subHeader">
                    <h3>our story
                    </h3>
                </div>
                <div class="column story">
                    <div class="picture" style="background-image: url(assets/kathmandu.jpg)">
                    </div>
                    <div class="content paragraph">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <p>
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p>
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum 
                        </p>
                        <span><a href="" class="btn">Read more <i class="fa fa-arrow right"></i></a></span>
                    </div>
                </div>
            </div>
            <!--  our services  -->
            <div class="sectionAbout">       
                <div class="subHeader">
                    <h3>our services</h3>
                </div>
                <article class= "row">
                    <article class="column">
                        <article class='icon'>
                            <i class="fa fa-hotel"></i>
                        </article>
                        <article class="content">
                            <div class="sub-heading">
                                <h3>hotel accomodation</h3>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>                        
                        </article> 
                    </article>
                    <article class="column">
                        <article class='icon'>
                            <i class="fa fa-hotel"></i>
                        </article>
                        <article class="content">
                            <div class="sub-heading">
                                <h3>delicious food</h3>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>                        
                        </article> 
                    </article>
                    <article class="column">
                        <article class='icon'>
                            <i class="fa fa-hotel"></i>
                        </article>
                        <article class="content">
                            <div class="sub-heading">
                                <h3>luxury travel</h3>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>                        
                        </article> 
                    </article>
                
                </article>
            </div>
            <!-- our partner -->
            <div class="sectionAbout">       
                <div class="subHeader">
                    <h3>our partner</h3>
                </div>
                <article class= "row partner">
                    <article class="column">
                        <article class="content">
                            <div class="image" style="background-image: url(assets/drop.png)"></div>
                            <h5>hotel accomodation</h5>
                        </article> 
                    </article>
                    <article class="column">
                        <article class="content">
                            <div class="image" style="background-image: url(assets/drop.png)"></div>
                            <h5>hotel accomodation</h5>
                        </article> 
                    </article>
                    <article class="column">
                        <article class="content">
                            <div class="image" style="background-image: url(assets/drop.png)"></div>
                            <h5>hotel accomodation</h5>
                        </article> 
                    </article>
                    <article class="column">
                        <article class="content">
                            <div class="image" style="background-image: url(assets/drop.png)"></div>
                            <h5>hotel accomodation</h5>
                        </article> 
                    </article>
                
                
                
                </article>
            </div>
        </div>
    </section>
    

    <!-- subscribe banner -->
    <section class="banner">
        <div style="background-image: url(assets/sunset.jpg)">
            <div class="dark">
                <div class="container subscribe">
                    <div class="sectionHeader">
                        <h2>
                            subscribe our newsletter
                        </h2>
                        <label>Lorem ipsum text about why you should subscribe to our newsletter blabla. Lorem ipsum text about why you should subscribe to our newsletter blabla</label>
                    </div>
                    <!-- <div class="clear"></div> -->
                    <form action="contact.php">
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="email">
                        </div>
                        <div class="form-group">
                            <a href="" class="btn">subscribe</a>
                        </div>
                    </form>
                    <!-- <div class="clear"></div> -->
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
   
    <!-- testimonials-->
    <section id="testimonials">
        <div class="container">
            <div class="sectionHeader">
                <h2>testimonial</h2>
                <label>views from our excited travellers</label>
            </div>
            
            <section class= "row testimonial">
                <div class="column">
                    <div class="card image" style="background-image: url(assets/beijing.jpg)"></div>
                    <article class="content">
                        <div class="excerpts">
                            <h3>john smilga</h3>
                            <text>nepal</text>
                            <span class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </span>
                        </div>
                        <p>
                            <i id="left-quote" class="fa fa-quote-left"></i>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            <i id="right-quote" class="fa fa-quote-right"></i>
                        </p>
                    </article>
                </div>
                <div class="column">
                    <div class="card" style="background-image: url(assets/beijing.jpg)"></div>
                    <article class="content">
                        <div class="excerpts">
                            <h3>john smilga</h3>
                            <text>nepal</text>
                            <span class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </span>
                        </div>
                        <p>
                            <i id="left-quote" class="fa fa-quote-left"></i>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            <i id="right-quote" class="fa fa-quote-right"></i>
                        </p>
                    </article>
                </div>
                <div class="column">
                    <div class="card" style="background-image: url(assets/beijing.jpg)"></div>
                    <article class="content">
                         <div class="excerpts">
                            <h3>john smilga</h3>
                            <text>nepal</text>
                            <span class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </span>
                        </div>
                        <p>
                            <i id="left-quote" class="fa fa-quote-left"></i>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            <i id="right-quote" class="fa fa-quote-right"></i>
                        </p>
                    </article>
                </div>
                              
            </section>
        </div>
    </section>
    
    <!-- blog-->
    <section id = "blog">
        <div class="sectionHeader">
            <h2>our blog</h2>
            <label>see our exciting blog</label>
        </div>

        <!-- blog content -->
        <article class= "row">
            <article class="column">
                <div class="card blog" style="background-image: url(assets/monkey.jpg)">
                </div>    
                <article class="content">
                        <h3>showering in the ocean</h3>
                        <text>by john smillga at 9 july 2021</text>
                        <hr>
                        <text>in blog diary, travel</text>
                        <text class="comment">0 comment</text>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua... <a href="#">read more <i class="fa fa-arrow-right"></i></a>
                        </p> 
                </article> 
            </article>
            <article class="column">
                <div class="card blog" style="background-image: url(assets/monkey.jpg)">
                </div>    
                <article class="content">
                        <h3>showering in the ocean</h3>
                        <text>by john smillga at 9 july 2021</text>
                        <hr>
                        <text>in blog diary, travel</text>
                        <text class="comment">0 comment</text>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua... <a href="#">read more <i class="fa fa-arrow-right"></i></a>
                        </p> 
                </article> 
            </article>
            <article class="column">
                <div class="card blog" style="background-image: url(assets/monkey.jpg)">
                </div>    
                <article class="content">
                        <h3>showering in the ocean</h3>
                        <text>by john smillga at 9 july 2021</text>
                        <hr>
                        <text>in blog diary, travel</text>
                        <text class="comment">0 comment</text>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua... <a href="#">read more <i class="fa fa-arrow-right"></i></a>
                        </p> 
                </article> 
            </article>
        </article>       
    </section>

    
    
   <script>
        var slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("slide");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}    
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
        }
    </script>

  
        
        
<?php include('includes/footer.php'); ?>
