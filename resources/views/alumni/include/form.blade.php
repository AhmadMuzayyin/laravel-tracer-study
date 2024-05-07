<div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="name">First Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    value="{{ isset($alumni) ? $alumni->name : old('name') }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name"
                    name="last_name" value="{{ isset($alumni) ? $alumni->last_name : old('last_name') }}">
                @error('last_name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
            value="{{ isset($alumni) ? $alumni->email : old('email') }}">
        @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat"
            value="{{ isset($alumni) ? ($alumni->alumni != [] ? $alumni->alumni->alamat : old('alamat')) : old('alamat') }}">
        @error('alamat')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="tempat_lahir">Tempat / Tanggal Lahir</label>
        <div class="row">
            <div class="col">
                <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir"
                    name="tempat_lahir"
                    value="{{ isset($alumni) ? ($alumni->alumni != [] ? $alumni->alumni->tempat_lahir : old('tempat_lahir')) : old('tempat_lahir') }}">
                @error('tempat_lahir')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col">
                <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror"
                    id="tanggal_lahir" name="tanggal_lahir"
                    value="{{ isset($alumni) ? ($alumni->alumni != [] ? $alumni->alumni->tanggal_lahir : old('tanggal_lahir')) : old('tanggal_lahir') }}">
                @error('tanggal_lahir')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="tahun_lulus">Tahun Lulus</label>
        <input type="year" class="form-control @error('tahun_lulus') is-invalid @enderror" id="tahun_lulus"
            name="tahun_lulus"
            value="{{ isset($alumni) ? ($alumni->alumni != [] ? $alumni->alumni->tahun_lulus : old('tahun_lulus')) : old('tahun_lulus') }}">
        @error('tahun_lulus')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <button class="btn btn-primary" type="submit">
            @if (isset($alumni))
                {{ _('Save changes') }}
            @else
                {{ _('Save') }}
            @endif
        </button>
    </div>
</div>
