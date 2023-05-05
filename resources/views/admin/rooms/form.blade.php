@extends('admin.admin')

@section('title', $room->exists ? "Editer un bien" : "Créer un bien")

@section('content')

    <h1>@yield('title')</h1>

    <form class="vstack gap-2"
          action="{{ route($room->exists ? 'rooms.update' : 'rooms.store', $room) }}" method="post"
          enctype="multipart/form-data">

        @csrf
        @method($room->exists ? 'put' : 'post')

        <div class="row">
            <div class="col ">
                <div class="col vstack gap-2" style="flex: 100">
                    <div class="row ">
                        <div class="col row">
                            @include('shared.input', ['class' => 'col', 'name' => 'pieces', 'value' => $room->pieces, 'type'=>'number'])
                            @include('shared.input', ['class' => 'col', 'name' => 'rooms_number', 'value' => $room->rooms_number, 'type'=>'number'])
                            @include('shared.input', ['class' => 'col', 'name' => 'price', 'label' => 'Prix', 'value' => $room->price, 'type'=>'number'])
                            <div class="form-group col">
                                <label for="type">Type</label>
                                <select name="type" id="type" class="form-control">
                                    @foreach(\App\Enums\RoomType::cases() as $k => $v)
                                        <option
                                            @selected($room->type) value="{!! $v->value !!}">{{ $v->value }}</option>
                                    @endforeach
                                </select>
                                {{--@error($name)
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror--}}
                            </div>
                        </div>


                    </div>
                    <div class="row">

                        <div class="col row">
                            @include('shared.input', ['class' => 'col', 'name' => 'description', 'label' => 'Description', 'value' => $room->description, 'type'=>'textarea'])

                        </div>

                    </div>
                    <div>
                        <button class="btn btn-primary">
                            @if($room->exists)
                                Modifier
                            @else
                                Créer
                            @endif
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="vstack " style="flex: 25">
                    <div class="room-details-slider owl-carousel owl-theme">
                        @foreach($room->pictures as $picture)
                            <div id="picture{{ $picture->id }}" class="position-relative room-details-item">
                                <img src="{{ $picture->getImageUrl() }}" alt="" class="w-100 d-block">
                                <button type="button"
                                        class="btn btn-danger position-absolute bottom-0 w-100 start-0"
                                        hx-delete="{{ route('pictures.destroy', $picture) }}"
                                        hx-target="#picture{{ $picture->id }}"
                                        hx-swap="delete"
                                >
                            <span class="htmx-indicator spinner-border spinner-border-sm" role="status"
                                  aria-hidden="true"></span>
                                    Supprimer
                                </button>
                            </div>
                        @endforeach
                    </div>
                    @include('shared.upload', ['name' => 'pictures', 'label' => 'Images', 'multiple' => true])
                </div>
            </div>
        </div>

    </form>

@endsection
