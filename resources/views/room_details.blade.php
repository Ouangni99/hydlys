<x-app-layout>
    <!-- Inner Banner -->
    <x-sub-menu :fill="$fill"/>
    <!-- Inner Banner End -->

    <!-- Room Area -->
    <!-- Room Details Area End -->
    <div class="room-details-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="room-details-side">
                        <div class="side-bar-form">
                            <h3>Booking Sheet </h3>
                            <form method="post" action="{{route('payment.checkout')}}">
                                @csrf
                                <div class="row align-items-center">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Date d'arrivé</label>
                                            <div class="input-group">
                                                <input id="demo" type="text" class="form-control"
                                                       placeholder="09/29/2020" name="date_in">
                                                <span class="input-group-addon"></span>
                                            </div>
                                            <i class='bx bxs-calendar'></i>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Date de sortie</label>
                                            <div class="input-group">
                                                <input id="datetimepicker-check" type="text" class="form-control"
                                                       placeholder="09/29/2020" name="date_out">
                                                <span class="input-group-addon"></span>
                                            </div>
                                            <i class='bx bxs-calendar'></i>
                                        </div>
                                    </div>
                                    <input type="text" class="d-none" value="25000" name="amount">
                                    {{--    <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Nombre de perso</label>
                                                <select class="form-control">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                </select>
                                            </div>
                                        </div>
    --}}

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn btn-bg-three border-radius-5">
                                            Reserver Maintenant
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="side-bar-plan">
                            <h3>Caracteristique</h3>
                            <ul>
                                <li><a href="#">Lunch Facility</a></li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="room-details-article">
                        <div class="room-details-slider owl-carousel owl-theme">
                            <div class="room-details-item">
                                <img src="{{ asset('assets/img/room/room-details-img1.jpg') }}" alt="Images">
                            </div>
                            <div class="room-details-item">
                                <img src="{{ asset('assets/img/room/room-details-img2.jpg') }}" alt="Images">
                            </div>
                            <div class="room-details-item">
                                <img src="{{ asset('assets/img/room/room-details-img3.jpg') }}" alt="Images">
                            </div>
                        </div>

                        <div class="room-details-title">
                            <h2>Double Bed Suits With Royal Express and Super</h2>
                            <ul>
                                <li>
                                    Prix : 25000 Fcfa/Nuit
                                </li>

                            </ul>
                        </div>

                        <div class="room-details-content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore
                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip
                                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore
                            </p>
                        </div>

                        {{--<div class="room-details-review">
                            <form>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn btn-bg-three">
                                            Submit Review
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Room Details Area End -->

    <!-- Room Details Other -->
    <div class="room-details-other pb-70">
        <div class="container">
            <div class="room-details-text">
                <h2>Our Related Offer</h2>
            </div>

            <div class="row ">
                <div class="col-lg-6">
                    <div class="room-card-two">
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-4 p-0">
                                <div class="room-card-img">
                                    <a href="room-details.html">
                                        <img src="{{ asset('assets/img/room/room-style-img1.jpg') }}" alt="Images">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-7 col-md-8 p-0">
                                <div class="room-card-content">
                                    <h3>
                                        <a href="room-details.html">Luxury Room</a>
                                    </h3>
                                    <span>320 / Per Night </span>
                                    <div class="rating">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, adipiscing elit. Suspendisse et faucibus felis, sed
                                        pulvinar purus.</p>
                                    <ul>
                                        <li><i class='bx bx-user'></i> 4 Person</li>
                                        <li><i class='bx bx-expand'></i> 35m2 / 376ft2</li>
                                    </ul>

                                    <ul>
                                        <li><i class='bx bx-show-alt'></i> Sea Balcony</li>
                                        <li><i class='bx bxs-hotel'></i> Kingsize / Twin</li>
                                    </ul>

                                    <a href="room-details.html" class="book-more-btn">
                                        Book Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="room-card-two">
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-4 p-0">
                                <div class="room-card-img">
                                    <a href="room-details.html">
                                        <img src="{{ asset('assets/img/room/room-style-img2.jpg') }}" alt="Images">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-7 col-md-8 p-0">
                                <div class="room-card-content">
                                    <h3>
                                        <a href="room-details.html">Single Room</a>
                                    </h3>
                                    <span>300 / Per Night </span>
                                    <div class="rating">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, adipiscing elit. Suspendisse et faucibus felis, sed
                                        pulvinar purus.</p>
                                    <ul>
                                        <li><i class='bx bx-user'></i> 1 Person</li>
                                        <li><i class='bx bx-expand'></i> 25m2 / 276ft2</li>
                                    </ul>

                                    <ul>
                                        <li><i class='bx bx-show-alt'></i> Sea Balcony</li>
                                        <li><i class='bx bxs-hotel'></i> Smallsize / Twin</li>
                                    </ul>

                                    <a href="room-details.html" class="book-more-btn">
                                        Book Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Room Details Other End -->
    <!-- Room Area End -->


</x-app-layout>
