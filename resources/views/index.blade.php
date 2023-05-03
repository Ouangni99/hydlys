<x-app-layout>

    <!-- Banner Area -->
    <div class="banner-area">
        <div class="container">
            <div class="banner-content">
                <h1>Découvrez nos hôtel & résidence pour votre prochain séjour</h1>
                <p>
                    Nous vous invitons à vous régaler dans un cadre trendy et élégant. Le restaurant offre un lieu de
                    vie idéal pour un repas convivial, une savoureuse cuisine Africaine et Européenne.
                </p>
                <div class="banner-btn">
                    <a href="#" class="default-btn btn-bg-one border-radius-5">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->

    <!-- Banner Form Area -->
    <div class="banner-form-area">
        <div class="container">
            <div class="banner-form">
                <form>
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-3">
                            <div class="form-group">
                                <label>HEURE D'ARRIVÉE</label>
                                <div class="input-group">
                                    <input id="demo" type="text" class="form-control demo"
                                           placeholder="11/02/2020">
                                    <span class="input-group-addon"></span>
                                </div>
                                <i class='bx bxs-chevron-down'></i>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3">
                            <div class="form-group">
                                <label>HEURE DE SORTIE</label>
                                <div class="input-group">
                                    <input id="demo" type="text" class="form-control demo"
                                           placeholder="11/02/2020" name="date_out">
                                    <span class="input-group-addon"></span>
                                </div>
                                <i class='bx bxs-chevron-down'></i>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <a class="default-btn btn-bg-one border-radius-5" href="{{ route('room_list') }}">
                                Réserver
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Banner Form Area End -->

    <!-- About Area -->
    <div class="about-area pt-100 pb-70">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="storage/rooms/accueil1.jpg" alt="Images">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title">
                            <span>Qui sommes nous</span>
                            <h2>Vous avez de nombreuses raisons de nous choisir par rapport aux autres.</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tristique augue quis
                                neque ornare fermentum.
                                In sit amet mattis diam. Sed id aliquam nulla. In porttitor et turpis non pretium.
                            </p>
                        </div>

                        <ul>
                            <li>
                                <i class="flaticon-restaurant"></i>
                                <div class="content">
                                    <h3>Restaurant</h3>
                                    <p>
                                        Nous sommes l'une des meilleures entreprises sur le marché mondial et nous
                                        disposons d'un restaurant.
                                        pour tous nos guides et tous nos clients.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <i class="flaticon-wifi-signal-1"></i>
                                <div class="content">
                                    <h3>Accès gratuit au Wifi</h3>
                                    <p>
                                        C'est l'endroit où vous obtiendrez une zone wifi gratuite à un prix raisonnable
                                        et cela vous aidera à passer des moments heureux et colorés.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- About Area End -->

    <!-- Services Area -->
    <div class="services-area pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span>Nos services</span>
                <h2>Nos services sur le marché mondial pour la réservation de nos clients</h2>
            </div>
            <div class="services-slider owl-carousel owl-theme pt-45">
                <div class="services-item">
                    <i class="flaticon-hotel"></i>
                    <h3><a href="service-details.html">Réservation de chambres d'hôtel dans les lieux souhaités</a></h3>
                    <p>Vous pouvez facilement réserver une chambre d'hôtel dans un endroit qui vous convient. Cela vous
                        permettra de vous sentir bien.</p>
                    <a href="service-details.html" class="get-btn">Obtenir le service</a>
                </div>

                <div class="services-item">
                    <i class="flaticon-resort"></i>
                    <h3><a href="service-details.html">Réservation d'un centre de villégiature dans un endroit
                            approprié</a></h3>
                    <p>OVous pouvez facilement réserver une chambre dans un centre de villégiature à l'endroit qui vous
                        convient le mieux. Cela vous permettra de vous sentir bien..</p>
                    <a href="service-details.html" class="get-btn">Obtenir le service</a>
                </div>

                <div class="services-item">
                    <i class="flaticon-buildings"></i>
                    <h3><a href="service-details.html">Réservation de salles de désherbage à l'endroit approprié</a>
                    </h3>
                    <p>La réservation d'une salle de désherbage est possible dans un endroit approprié, comme vous le
                        souhaitez. Cela vous permettra de vous sentir bien.</p>
                    <a href="service-details.html" class="get-btn">Obtenir le service</a>
                </div>

                <div class="services-item">
                    <i class="flaticon-calendar"></i>
                    <h3><a href="service-details.html">Réservez dès maintenant pour garantir la disponibilité</a></h3>
                    <p>Vous pouvez facilement réserver une chambre d'hôtel dans un endroit qui vous convient. Cela vous
                        permettra de vous sentir bien.</p>
                    <a href="service-details.html" class="get-btn">Obtenir le service</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Area End -->

    <!-- Reservation Area -->
    <div class="reservation-area section-bg pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="reservation-content">
                        <div class="section-title">
                            <h2><a href="reservation.html">Réservez facilement pour un sejour agréable</a></h2>
                            <p>
                                C'est l'un des faits les plus importants et les plus cruciaux qui nous aide à faire une
                                réservation facilement. Cette réservation vous aidera à faire votre voyage et votre
                                période de voyage facilement.
                                période de voyage. Cela vous aidera à rendre votre voyage plus facile et un voyage plus
                                facile est plus utile pour vous. Alors, c'est parti !
                            </p>
                        </div>
                        <a href="#" class="default-btn btn-bg-one border-radius-5">Réservation rapide</a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="reservation-img">
                        <img src="assets/img/reservation/reservation-img.jpg" alt="Images">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Reservation Area End -->

    <!-- Specialty Area End -->
    <div class="specialty-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span>SPÉCIALITÉ</span>
                <h2>Nos secteurs de spécialisation et tous les autres détails</h2>
            </div>

            <div class="row pt-45 align-items-center">
                <div class="col-lg-6 col-xxl-7">
                    <div class="specialty-img">
                        <img src="assets/img/specialty/specialty-img1.jpg" alt="Images">
                    </div>
                </div>

                <div class="col-lg-6 col-xxl-5">
                    <div class="specialty-list">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="specialty-list-card">
                                    <i class="flaticon-decoration"></i>
                                    <h3>Décoration de l'espace</h3>
                                    <p>Nous sommes très attentifs à notre chambre et à toutes les décorations de la
                                        station. Alors, essayez-nous.</p>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="specialty-list-card">
                                    <i class="flaticon-champagne-glass"></i>
                                    <h3>Restaurant</h3>
                                    <p>Vous pouvez facilement bénéficier d'un accès au restaurant de haut niveau à un
                                        prix raisonnable...</p>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="specialty-list-card">
                                    <i class="flaticon-fireworks"></i>
                                    <h3>hotel & Résidence 5 étoiles</h3>
                                    <p>Hydlys est une agence bien connue et l'agence est l'une des meilleures selon 5
                                        Star Retting. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Specialty Area End -->

    <!-- rooms Area -->
    <div class="room-area pt-100 pb-70 section-bg">
        <div class="container">
            <div class="section-title text-center">
                <span>CHAMBRES</span>
                <h2>Nos chambres et tarifs</h2>
            </div>
            <div class="row pt-45">

                @foreach($rooms as $room)
                    <div class="col-lg-4 col-md-6">
                        <div class="room-card">
                            <a href="{{route('room_details',$room->id)}}">
                                <img src="{{$room->getPicture()->getImageUrl()}}" alt="Images">
                            </a>
                            <div class="content">
                                <h3><a href="{{route('room_details',$room->id)}}">{{$room->getSlug()}}</a></h3>
                                <ul>
                                    <li>{{$room->price}} FCFA</li>
                                    <li>Par nuitée</li>
                                </ul>
                                {{--<div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star-half'></i>
                                </div>--}}
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
    <!-- rooms Area End -->

    <!-- FAQ Area -->
    <div class="faq-area pt-100 pb-70 section-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xxl-7">
                    <div class="faq-img">
                        <img src="assets/img/faq/faq-img1.jpg" alt="Images">
                    </div>
                </div>

                <div class="col-lg-6 col-xxl-5">
                    <div class="faq-content">
                        <div class="section-title">
                            <h2>Question frequement posées</h2>
                        </div>

                        <div class="faq-accordion">
                            <ul class="accordion">
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='bx bx-plus'></i>
                                        Comment réserver une chambre ou un lieu de villégiature ?
                                    </a>

                                    <div class="accordion-content">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo.
                                            Mauris a ante placerat,
                                            dignissim orci eget, viverra ante. Mauris ornare pellentesque augue.
                                            Curabitur leo nibh, ultrices
                                            vel ultricies eu, vulputate at felis.
                                        </p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='bx bx-plus'></i>
                                        Comment pourrai-je ajouter des éléments sur le portail d'administration ?
                                    </a>

                                    <div class="accordion-content">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo.
                                            Mauris a ante placerat,
                                            dignissim orci eget, viverra ante. Mauris ornare pellentesque augue.
                                            Curabitur leo nibh, ultrices
                                            vel ultricies eu, vulputate at felis.
                                        </p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='bx bx-plus'></i>
                                        Quels sont les avantages de ces agences ?
                                    </a>

                                    <div class="accordion-content">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo.
                                            Mauris a ante placerat,
                                            dignissim orci eget, viverra ante. Mauris ornare pellentesque augue.
                                            Curabitur leo nibh, ultrices
                                            vel ultricies eu, vulputate at felis.
                                        </p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title active" href="javascript:void(0)">
                                        <i class='bx bx-plus'></i>
                                        Comment effectuer le paiement de la réservation de la chambre ?
                                    </a>

                                    <div class="accordion-content show">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo.
                                            Mauris a ante placerat,
                                            dignissim orci eget, viverra ante. Mauris ornare pellentesque augue.
                                            Curabitur leo nibh, ultrices
                                            vel ultricies eu, vulputate at felis.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ Area End -->
</x-app-layout>
