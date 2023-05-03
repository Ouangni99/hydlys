<style>
    .selected {
        background-color: #f0f0f0;
        border: 1px solid #333;
    }
    .selectable.selected {
  border: 2px solid blue;
}
</style>
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
            {{-- action="{{ route('submit') }}" --}}
            <form action="{{ route('payment.test') }}"  method="POST">
                @csrf
                <div class="form-group w-25">
                    <label>Le nombre de jours</label>
                    <div class="input-group">
                        <input type="number" class="form-control"
                               value="1" name="quantity">
                        <span class="input-group-addon"></span>
                    </div>
                    <i class='bx bxs-quantity'></i>
                </div>

                <div class="row pt-45">

                    @foreach($rooms as $room)
                        <div class="col-lg-4 col-md-6 selectable" data-id="{{ $room->id }}" >
                            <div class="room-card">
                                {{-- <a href="{{route('room_details',$room->id)}}">
                                    <img src="{{$room->getPicture()->getImageUrl()}}" alt="Images">
                                </a> --}}

                                    <img src="{{$room->getPicture()->getImageUrl()}}" alt="Images">

                                <div class="content">
                                    {{-- <h3><a href="{{route('room_details',$room->id)}}">{{$room->getSlug()}}</a></h3> --}}
                                    <h3>{{$room->getSlug()}}</h3>
                                    <ul>
                                        <li>{{$room->price}} FCFA</li>
                                        <li>Par nuitée</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="ids[]" value="{{ $room->id }}">
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
                <button type="submit" class="btn btn-primary mt-3">Reserver</button>

                            {{-- {{$rooms->links()}} --}}
                        </div>
                    </div>
                </div>
                <input type="hidden" name="selected_ids" id="selected_ids">
            </form>
        </div>
    </div>
    <!-- rooms Area End -->

</x-app-layout>


<script>
    var selectedIds = [];

    function toggleSelection(id) {
      var div = document.querySelector('.selectable[data-id="' + id + '"]');
      if (div.classList.contains('selected')) {
        div.classList.remove('selected');
        selectedIds = selectedIds.filter(function(selectedId) {
          return selectedId !== id;
        });
      } else {
        div.classList.add('selected');
        selectedIds.push(id);
      }
      document.getElementById('selected_ids').value = selectedIds.join(',');
    }

    document.querySelectorAll('.selectable').forEach(function(div) {
      div.addEventListener('click', function() {
        toggleSelection(this.getAttribute('data-id'));
      });
    });

    document.querySelector('form').addEventListener('submit', function(event) {
      if (selectedIds.length === 0) {
        alert('Veuillez sélectionner au moins un élément.');
        event.preventDefault();
      }
    });
  </script>

