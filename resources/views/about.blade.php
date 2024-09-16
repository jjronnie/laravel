
@extends('layouts.main')


        <!--navbar-->
        @include('layouts.nav')
     
        <!--navbar-->

       

       

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

      
