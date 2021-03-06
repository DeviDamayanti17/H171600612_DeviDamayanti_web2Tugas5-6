@csrf

<div class="form-group row">
        <label form ="judul" class="col-md-4 col-form-label text-md-right">{{ __('Judul') }}</label>

        <div class="col-md-6">
            <input id="judul" type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') }}" required autofocus>

            @error('judul')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
</div>
 <div class="form-group row">
        <label form ="isi" class="col-md-4 col-form-label text-md-right">{{ __('Isi') }}</label>

        <div class="col-md-6">
            <input id="isi" type="text" class="form-control @error('isi') is-invalid @enderror" name="isi" value="{{ old('isi') }}" required autofocus>

            @error('isi')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

</div>
 <div class="form-group row">
        <label form ="pengumuman_id" class="col-md-4 col-form-label text-md-right">{{ __('pengumuman_id') }}</label>

        <div class="col-md-6">
            <input id="pengumuman_id" type="text" class="form-control @error('pengumuman_id') is-invalid @enderror" name="pengumuman_id" value="{{ old('pengumuman_id') }}" required autofocus>

            @error('pengumuman_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
</div>
<input id="users_id" type="hidden" class="form-control @error('users_id') is-invalid @enderror" name="users_id" value="{{ Auth::id() }}" required autocomplete="users_id" autofocus>

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Simpan Data') }}
            </button>
            <a href="{!! route('pengumuman.index')!!}" class="btn btn-danger">
                {{ __('Batal') }}
            </a>
    </div>
</div>