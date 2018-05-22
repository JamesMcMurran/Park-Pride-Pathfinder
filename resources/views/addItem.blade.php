@extends('layouts.app')

@section('content')
<script>
    var x = document.getElementById("demo");

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            x.value = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
        x.value = "Latitude: " + position.coords.latitude +
            "Longitude: " + position.coords.longitude;
        console.log("Latitude: " + position.coords.latitude +
            "Longitude: " + position.coords.longitude);
    }
</script>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('add_new_item') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>

                            <div class="col-md-6">
                                <select id="type">
                                    <option value="animal">Animal</option>
                                    <option value="audio">Audio Tour</option>
                                    <option value="bathroom">Bathroom</option>
                                    <option value="bench">Bench</option>
                                    <option value="grill">Grill</option>
                                    <option value="historic">Historic Info/marker</option>
                                    <option value="monument">Monument / Statue</option>
                                    <option value="parking">Parking lot</option>
                                    <option value="picnic">Picnic spot</option>
                                    <option value="plant">Plant</option>
                                    <option value="pavilion">Pavilion</option>
                                    <option value="table">Table</option>
                                    <option value="telephone">Telephone</option>
                                    <option value="trail marker">Trail marker</option>
                                    <option value="tree">Tree</option>
                                    <option value="water-fountain">Water fountain</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('description'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="geo" class="col-md-4 col-form-label text-md-right">{{ __('Geo') }}</label>

                            <div class="col-md-6">

                                <p>Click the button to get your coordinates.</p>

                                <button onclick="getLocation()">Get my location</button>

                                <input id="geo" type="text" required>
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
