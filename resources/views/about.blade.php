<x-app-layout>
    <!-- Inner Banner -->
    <x-sub-menu :fill="$fill"/>
    <!-- Inner Banner End -->

    <!-- About Area -->
    <div class="about-area pt-100 pb-70">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="assets/img/about/about-img3.jpg" alt="Images">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title">
                            <h2>We Have More Than 20+ Global & International Experience</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt ante tellus,
                                sit amet rhoncus massa aliquam sit amet. Cras porttitor mauris quis mattis ornare.
                                In efficitur at sem quis pretium. Aenean sit amet neque ut dolor lacinia rutrum.
                                In vulputate pellentesque turpis et porta.
                            </p>
                        </div>

                        <div class="about-form">
                            <form>
                                <div class="row align-items-center">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <label>Check in</label>
                                            <div class="input-group" >
                                                <input id="datetimepicker" type="text" class="form-control" placeholder="09/29/2020">
                                                <span class="input-group-addon"></span>
                                            </div>
                                            <i class='bx bxs-calendar'></i>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <label>Persons</label>
                                            <select class="form-control">
                                                <option>01</option>
                                                <option>02</option>
                                                <option>03</option>
                                                <option>04</option>
                                                <option>05</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <label>Check Out</label>
                                            <div class="input-group">
                                                <input id="datetimepicker-check" type="text" class="form-control" placeholder="09/29/2020">
                                                <span class="input-group-addon"></span>
                                            </div>
                                            <i class='bx bxs-calendar'></i>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn btn-bg-three border-radius-5">
                                            Check Availability
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Area End -->

    <!-- Choose Area -->
    <div class="choose-area pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>Why You Choose Our Hotel & Resort Form the All of the Other's</h2>
            </div>
            <div class="row pt-45">
                <div class="col-lg-4 col-md-6">
                    <div class="choose-card">
                        <i class="flaticon-restaurant"></i>
                        <h3>Restaurant Facilities</h3>
                        <p>We are one of the best company in the global market and we have restaurant facilities for all of our guide</p>
                        <a href="#" class="read-btn">Read More</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="choose-card">
                        <i class="flaticon-wifi-signal-1"></i>
                        <h3>Free Wifi Facilities</h3>
                        <p>
                            This is the place where I will get a free wifi zone at a reasonable price and this will
                            help you to make a colorful life
                        </p>
                        <a href="#" class="read-btn">Read More</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div class="choose-card">
                        <i class="flaticon-fireworks"></i>
                        <h3>5 Stars Rettings</h3>
                        <p>
                            Atoli is well known agency and the agency is one of the best by 5-star retting and
                            we will be benefited .
                        </p>
                        <a href="#" class="read-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Choose Area End -->

    <!-- Ability Area -->
    <div class="ability-area section-bg pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="ability-content">
                        <div class="section-title">
                            <h2>Our Ability to the Global and International Market</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt ante tellus,
                                sit amet rhoncus massa aliquam sit amet. Cras porttitor mauris quis mattis ornare.
                                In efficitur at sem quis pretium. Aenean sit amet neque ut dolor lacinia rutrum.
                                In vulputate pellentesque turpis et porta.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="ability-counter">
                                    <h3 class="text-color">14K</h3>
                                    <p>5 Star Retting Reviews</p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="ability-counter">
                                    <h3 class="text-color">225K</h3>
                                    <p>Items Served Breakfast</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="ability-img-2">
                        <img src="assets/img/ability-img2.jpg" alt="Images">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ability Area  End -->

</x-app-layout>
