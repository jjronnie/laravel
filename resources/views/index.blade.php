
        @extends('layouts.main')
        @section('content')
        
            
        
        
        
        
        
        <!--navbar-->
        @include('layouts.nav')
        <!--navbar-->

        <header id="home">
            <div class="header-content">
                <h1 id="typewriter" data-text ="Welcome to Horizon Trips and Tours"></h1>
                <h2 id="quote">"Your Gateway to African Adventure"</h2>
                <div class="line"></div> <br>
                
                <a
                    href="#about"
                    class="ctn"
                    onclick='removeall(); $("#quad").css("border", "2px solid whitesmoke"); $("#quad").css("border-radius", "20px");'
                    >Book Now</a
                >
            </div>
        </header>

        <!--Events-->
        <section class="events" id="events">
            <div class="container">
                <div class="title">
                    <h1 class="dark">Upcoming Events</h1>
                    <div class="line"></div>
                </div>
                <div class="row">
                    <article class="card col">
                        <img class="card-img" src="./img/img1.jfif" />
                        <h4 class="dark">Everest camp trek</h4>
                        <p class="font-color">
                            Everest base camp trek is without a doubt, one of
                            the most renowned travel destinations in the world.
                        </p>
                        <a href="#" class="ctn">View Details</a>
                    </article>
                    <article class="card col">
                        <img src="{{asset('./img/img2.jfif')}}" />
                        <h4 class="dark">Walking holidays</h4>
                        <p class="font-color">
                            Join small guided group walks, enjoy a challenging
                            trek, or a luxury private guided walk which can be
                            made especially for you.
                        </p>
                        <a href="#" class="ctn">View Details</a>
                    </article>
                    <article class="card col">
                        <img src="./img/img2.jfif" />
                        <h4 class="dark">Andaman Beaches</h4>
                        <p class="font-color">
                            Diving in Andaman Beaches is exceptional. The costal
                            belt surroundings is one of the richest coral reef
                            ecosystems in the world.
                        </p>
                        <a href="#" class="ctn">View Details</a>
                    </article>
                </div>
            </div>
        </section>
        <!--Events-->

        <!--Explore-->
        <section class="explore" id="explore">
            <div class="explore-content">
                <h1>EXPLORE THE WORLD</h1>
                <div class="line"></div>
                <p>
                    “Travel makes one modest. You see what a tiny place you
                    occupy in the world.”– Gustav Flaubert <br />Exploring will
                    make you want to pack your bag, book that ticket and jet
                    away.
                </p>
                <a href="#" class="ctn">Explore more</a>
            </div>
        </section>
        <!--Explore-->

        <!--tours-->
        <section class="tours" id="tours">
            <div class="container row">
                <div class="col content-col">
                    <h1 class="font-color">UPCOMING TOURS & DESTINATION</h1>
                    <div class="line"></div>
                    <p>
                        Wed 28 sept 2023 : Port of Spain City Tour and Birdseye
                        Fort View. <br />
                        Sat 1 oct 2023 : Tour the Gasparee Caves.<br />
                        Tues 4 oct 2023 : Trinidad North Coast Experience.
                        <br />
                        and many more ......
                    </p>
                    <a href="#" class="ctn">Learn more</a>
                </div>
                <div class="image-col">
                    <div class="image-gallery">
                        <img src="./img/img3.png" alt="" />
                        <img src="./img/img4.png" alt="" />
                        <img src="./img/img5.png" alt="" />
                        <img src="./img/img6.png" alt="" />
                    </div>
                </div>
            </div>
            <br /><br /><br /><br />
        </section>
        <!--tours-->

        <!-- About -->
        <section id="about">
            <div class="title">
                <h1 class="font-color">About Us</h1>
                <div class="line"></div>
            </div>
            <br />
            <div id="about_us">
                <div class="boxx">
                    <div class="containerx">
                        <input type="radio" name="slider" id="item-1" checked />
                        <input type="radio" name="slider" id="item-2" />
                        <input type="radio" name="slider" id="item-3" />
                        <div class="cards">
                            <label class="cardt" for="item-1" id="col-img-1">
                                <img src="./img/carousel-img4.jpg" />
                            </label>
                            <label class="cardt" for="item-2" id="col-img-2">
                                <img src="./img/carousel-img5.jpg" />
                            </label>
                            <label class="cardt" for="item-3" id="col-img-3">
                                <img src="./img/carousel-img6.jpg" />
                            </label>
                            
                        </div>
                    </div>
                    <span id="about-quad"
                        ><a href="#home"
                            ><center>
                                <h1
                                    style="
                                        font-family: var(--ff-montserrat);
                                        color: white;
                                    "
                                >
                                    Find that
                                </h1>
                                <br />
                                <img
                                    class="img2"
                                    src="./img/mountain_dark.jpg"
                                    width="200"
                                    style="border-radius: 12%"
                                />
                                <br />
                                <h1 class="logo" style="font-size: 50px">
                                    ADVENTURE
                                </h1>
                            </center>
                        </a>
                    </span>
                </div>
            </div>
        </section>
        <!-- About -->

        <!-- Contributions -->
        <div class="title">
            <h1 class="font-color">Contributors</h1>
            <div class="line"></div>
        </div>
        <section class="contributors" id="contribution">
            <div class="concard">
                <img
                    src="img/img5.png"
                    alt="profile-picture"
                    class="pfp"
                />
                <div class="text">
                    <h1>Jjuuko Ronald</h1>
                </div>
                <div class="logolink">
                    <a href="https://github.com/jjronnie" target="_blank"
                        ><img
                            src="img/GitHub120px.png"
                            alt="Github-Logo"
                            class="github-logo"
                    /></a>
                </div>
            </div>


            <div class="concard">
                <img
                    src="img/img5.png"
                    alt="profile-picture"
                    class="pfp"
                />
                <div class="text">
                    <h1>NAME</h1>
                </div>
                <div class="logolink">
                    <a href="https://github.com/jjronnie" target="_blank"
                        ><img
                            src="img/GitHub120px.png"
                            alt="Github-Logo"
                            class="github-logo"
                    /></a>
                </div>
            </div>

            <div class="concard">
                <img
                    src="img/img5.png"
                    alt="profile-picture"
                    class="pfp"
                />
                <div class="text">
                    <h1>NAME</h1>
                </div>
                <div class="logolink">
                    <a href="" target="_blank"
                        ><img
                            src="img/GitHub120px.png"
                            alt="Github-Logo"
                            class="github-logo"
                    /></a>
                </div>
            </div>

            <div class="concard">
                <img
                    src="img/img5.png"
                    alt="profile-picture"
                    class="pfp"
                />
                <div class="text">
                    <h1>NAME</h1>
                </div>
                <div class="logolink">
                    <a href="" target="_blank"
                        ><img
                            src="img/GitHub120px.png"
                            alt="Github-Logo"
                            class="github-logo"
                    /></a>
                </div>
            </div>

            <div class="concard">
                <img
                    src="img/img5.png"
                    alt="profile-picture"
                    class="pfp"
                />
                <div class="text">
                    <h1>NAME</h1>
                </div>
                <div class="logolink">
                    <a href="" target="_blank"
                        ><img
                            src="img/GitHub120px.png"
                            alt="Github-Logo"
                            class="github-logo"
                    /></a>
                </div>
            </div>

        </section>
        <!-- Contributions -->

        <!-- contact -->
        <section id="contact">
            <div class="title">
                <h1 class="font-color">Contact Us</h1>
                <div class="line"></div>
            </div>
            <div class="contact_us">
                <form class="cform" action="" method="post">
                    <div class="crow-message">
                        <h1 class="color">Send us a message</h1>
                        <div></div>
                    </div>
                    <div class="crow-in">
                        <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Your name"
                        />
                        <input
                            type="text"
                            id="email"
                            name="email"
                            placeholder="Your Email id"
                        />
                    </div>
                    <div class="crow">
                        <div class="ccol-left">
                            <select name="country" id="country">
                                <option value="Uganda">Uganda</option>
                                <option value="Russia">Russia</option>
                                <option value="usa">USA</option>
                                <option value="Japan">Japan</option>
                                <option value="France">France</option>
                                <option value="Brazil">Brazil</option>
                            </select>
                        </div>
                    </div>
                    <div class="crow">
                        <div class="ccol-left">
                            <textarea
                                type="text"
                                id="remarks"
                                name="remarks"
                                placeholder="Your Remarks....."
                                style="height: 150px"
                            ></textarea>
                        </div>
                    </div>
                    <input class="crow-s" type="submit" value="Submit" />
                </form>
                <div class="cbox">
                    <div>
                        <p class="cbox-message">
                            Prefer some other way ?<br />Reach us by using the
                            details given below
                        </p>
                        <div class="cbox-line"></div>
                    </div>
                    <div class="c_boxx">
                        <a href="mailto:ronaldjjuuko7@gmail.com"
                            ><i class="fa fa-envelope"></i>
                            Mail: tourism@horizon.com
                        </a>
                    </div>
                    <div class="c_boxx">
                        <a href="tel:+91-12345-67890"
                            ><i class="fa fa-phone"></i>
                            Phone: +256703283529
                        </a>
                    </div>
                    <div class="c_boxx">
                        <a href="#"
                            ><i class="fa fa-map-marker"></i>
                            Location: Kireka
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact  -->
        <!-- up scroll -->
        <i class="arrow"  onclick="topFunction()" id="upbtn"></i>
        <!-- end -->
        <!--footer-->

        @include('layouts.footer')
       
        <!--footer-->

        

        @endsection
 
