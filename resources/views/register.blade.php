@section('extra-css')
    <style>
        h6 {
            display: inline-block;
            vertical-align: center;
            padding-right: 5px;
        }

        h3 {
            display: inline-block;
            vertical-align: center;
        }

        .edit-button {
            display: inline-block;
            float: right;
        }

        .submit-left-button {
            display: inline-block;
            float: left;
        }
    </style>

@endsection

{{-- Page title --}}
@section('title', "Registrar")

<h1>Registrar</h1>

<form class="user" method="POST" action="{{ route('Register-post') }}">
    @csrf

    <h2>Car</h2>
    {{-- plate --}}
    <div class="form-group">
        <input
            type="text"
            id="plate"
            name="plate"
            class="form-control form-control-user  @error('plate') is-invalid @enderror"
            value="{{ old('plate') }}"
            required
            autocomplete="plate"
            autofocus
            placeholder="{{ __('plate') }}"
            >

                            @error('plate')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                            {{-- model --}}
                            <div class="form-group">
                                <input
                                    type="text"
                                    id="model"
                                    name="model"
                                    class="form-control form-control-user  @error('model') is-invalid @enderror"
                                    value="{{ old('model') }}"
                                    required
                                    autocomplete="model"
                                    autofocus
                                    placeholder="{{ __('Model') }}"
                                >

                                @error('model')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            {{-- brand --}}
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <select 
                                    type="text"
                                    id="brand"
                                    name="brand"
                                    class="form-control form-control-user  @error('brand') is-invalid @enderror"
                                    value="{{ old('brand') }}"
                                    required
                                    autocomplete="brand"
                                    autofocus
                                    placeholder="{{ __('brand') }}"
                                    >
                                        <option value="mazda">Mazda</option>
                                        <option value="toyota">Toyota</option>
                                        <option value="chevrolet">Chevrolet</option>
                                    </select>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            

    <h2>User</h2>
    <div class="form-group">
        <input
            type="text"
            id="name"
            name="name"
            class="form-control form-control-user  @error('name') is-invalid @enderror"
            value="{{ old('name') }}"
            required
            autocomplete="name"
            autofocus
            placeholder="{{ __('Name') }}"
            >

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
        <input
            type="text"
            id="identity_card"
            name="identity_card"
            class="form-control form-control-user  @error('identity_card') is-invalid @enderror"
            value="{{ old('identity_card') }}"
            required
            autocomplete="identity_card"
            autofocus
            placeholder="{{ __('Identity card') }}"
            >

                            @error('identity_card')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                    {{ __('Register') }}
                            </button>
</form>