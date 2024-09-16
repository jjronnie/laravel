 <!--navbar-->
 <nav class="navbar glass" style="height: 70px">
    <span
        ><a href="#home" style="display: flex; align-items: center"
            ><img
                class="img2"
                src="./img/mountain.png"
                width="40"
                style="margin: -25px -10px -25px -20px"
            />
            <h1 class="logo">&nbsp;HORIZON TOURS</h1></a
        ></span
    >
    <ul class="nav-links">
        <li>
            <a href="{{route('home')}}" id="pri" class=" cir_border">Home</a>
        </li>
        
        <li>
            <a href="{{route('about')}}" id="quint" class="cir_border">About</a>
        </li>
        
        <li>
            <a href="{{route('contact')}}" id="hept" class="cir_border">Contact</a>
        </li>
        <li>
            <div>
                <input
                    type="checkbox"
                    class="checkbox dark"
                    id="checkbox"
                />
                <label for="checkbox" class="label">
                    <i class="fa fa-moon-o"></i>
                    <i class="fa fa-sun-o"></i>
                    <div class="ball"></div>
                </label>
            </div>
        </li>
    </ul>
    <img src="./img/menu-btn.png" alt="" class="menu-btn" />
</nav>
<!--navbar-->