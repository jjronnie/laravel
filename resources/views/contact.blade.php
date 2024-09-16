@extends('layouts.main')

{{-- navigation --}}
@include('layouts.nav')

    <!-- Contact Us Section -->
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
                <option value="USA">USA</option>
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
              Prefer some other way? <br />Reach us by using the
              details given below
            </p>
            <div class="cbox-line"></div>
          </div>
          <div class="c_boxx">
            <a href="mailto:tourism@horizon.com">
              <i class="fa fa-envelope"></i> Mail: tourism@horizon.com
            </a>
          </div>
          <div class="c_boxx">
            <a href="tel:+256703283529">
              <i class="fa fa-phone"></i> Phone: +256703283529
            </a>
          </div>
          <div class="c_boxx">
            <a href="#">
              <i class="fa fa-map-marker"></i> Location: Kireka
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer -->
    @include('layouts.footer')
    
    <!-- End Footer -->
 