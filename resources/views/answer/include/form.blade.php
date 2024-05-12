<div>
    <div class="form-group">
        <label for="question_id">Pertanyaan</label>
        <select name="question_id" id="question_id" class="form-control">
            <option value="" selected disabled>Pilih Pertanyaan</option>
            @foreach ($question as $item)
                <option value="{{ $item['id'] }}"
                    {{ isset($answer) ? ($answer->id == $item['id'] ? 'selected' : '') : '' }}>
                    {{ $item['name'] }}
                </option>
            @endforeach
        </select>
        @error('question_id')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    @if (request()->routeIs('answer.index'))
        <div class="form-group">
            <label for="jawaban_pertama">Jawaban Pertama</label>
            <input type="text" class="form-control @error('jawaban_pertama') is-invalid @enderror"
                id="jawaban_pertama" name="jawaban_pertama" value="{{ old('jawaban_pertama') }}">
            @error('jawaban_pertama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="jawaban_kedua">Jawaban Kedua</label>
            <input type="text" class="form-control @error('jawaban_kedua') is-invalid @enderror" id="jawaban_kedua"
                name="jawaban_kedua" value="{{ old('jawaban_kedua') }}">
            @error('jawaban_kedua')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="jawaban_ketiga">Jawaban Ketiga</label>
            <input type="text" class="form-control @error('jawaban_ketiga') is-invalid @enderror" id="jawaban_ketiga"
                name="jawaban_ketiga" value="{{ old('jawaban_ketiga') }}">
            @error('jawaban_ketiga')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="jawaban_keempat">Jawaban Keempat</label>
            <input type="text" class="form-control @error('jawaban_keempat') is-invalid @enderror"
                id="jawaban_keempat" name="jawaban_keempat" value="{{ old('jawaban_keempat') }}">
            @error('jawaban_keempat')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    @else
        @foreach ($answer->answer as $val)
            <div class="form-group">
                <label for="jawaban_{{ Illuminate\Support\Str::slug($val->status) }}">Jawaban Pertama</label>
                <input type="text"
                    class="form-control @error("jawaban_{{ Illuminate\Support\Str::slug($val->status) }}") is-invalid @enderror"
                    id="jawaban_{{ Illuminate\Support\Str::slug($val->status) }}"
                    name="jawaban_{{ Illuminate\Support\Str::slug($val->status) }}" value="{{ $val->jawaban }}">

                @error("jawaban_{{ Illuminate\Support\Str::slug($val->status) }}")
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        @endforeach
    @endif
    <div class="form-group">
        <button class="btn btn-primary" type="submit">
            @if (isset($answer))
                {{ _('Save changes') }}
            @else
                {{ _('Save') }}
            @endif
        </button>
    </div>
</div>
