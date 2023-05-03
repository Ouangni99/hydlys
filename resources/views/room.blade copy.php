<x-app-layout>
    <!-- Inner Banner -->
    <x-sub-menu :fill="$fill"/>
    <!-- Inner Banner End -->

    <!-- rooms Area -->
    <div class="room-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span class="sp-color">CHAMBRES</span>
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


                <div class="col-lg-12 col-md-12">
                    <div class="pagination-area">
                        {{--<a href="#" class="prev page-numbers">
                            <i class='bx bx-chevrons-left'></i>
                        </a>

                        <span class="page-numbers current" aria-current="page">1</span>
                        <a href="#" class="page-numbers">2</a>
                        <a href="#" class="page-numbers">3</a>

                        <a href="#" class="next page-numbers">
                            <i class='bx bx-chevrons-right'></i>
                        </a>--}}
                        
                        {{$rooms->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rooms Area End -->

</x-app-layout>
