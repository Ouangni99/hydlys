<x-app-layout>
    <!-- Inner Banner -->
    <x-sub-menu :fill="$fill"/>
    <!-- Inner Banner End -->

     <!-- Book Area -->
     <div class="book-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="book-img">
                        <img src="assets/img/book-img.jpg" alt="Images">
                        <div class="book-shape">
                            <img src="assets/img/shape/shape1.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="booking-form">
                        <h3>Fiche de réservation </h3>
                        <form>
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Votre nom</label>
                                        <input type="text" name="name"  class="form-control" required data-error="Please enter your name" placeholder="Votre nom">
                                        <i class='bx bx-user'></i>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Votre email</label>
                                        <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Votre email">
                                        <i class='bx bx-mail-send'></i>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Enregistrement</label>
                                        <div class="input-group date">
                                            <input id="datetimepicker" type="text" class="form-control" placeholder="09/29/2020">
                                            <span class="input-group-addon"></span>
                                        </div>
                                        <i class='bx bxs-calendar'></i>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Sortir</label>
                                        <div class="input-group">
                                            <input id="datetimepicker-check" type="text" class="form-control" placeholder="09/29/2020">
                                            <span class="input-group-addon"></span>
                                        </div>
                                        <i class='bx bxs-calendar'></i>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nombre de personnes</label>
                                        <select class="form-control">
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                            <option>04</option>
                                            <option>05</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nombre de chambres</label>
                                        <select class="form-control">
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                            <option>04</option>
                                            <option>05</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn btn-bg-two border-radius-5">
                                        Réserver
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Book Area End -->

</x-app-layout>
