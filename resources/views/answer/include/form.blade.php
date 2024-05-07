<div>
    <div class="form-group">
        <label for="question_id">Pertanyaan</label>
        <select name="question_id" id="question_id" class="form-control">
            <option value="" selected disabled>Pilih Pertanyaan</option>
            @foreach ($question as $item)
                <option value="{{ $item['id'] }}"
                    {{ isset($answer) ? ($answer->question_id == $item['id'] ? 'selected' : '') : '' }}>{{ $item['name'] }}
                </option>
            @endforeach
        </select>
        @error('jawaban_pertama')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="jawaban_pertama">Jawaban Pertama</label>
        <input type="text" class="form-control @error('jawaban_pertama') is-invalid @enderror" id="jawaban_pertama"
            name="jawaban_pertama" value="{{ isset($answer) ? $answer->jawaban_pertama : old('jawaban_pertama') }}">
        @error('jawaban_pertama')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="jawaban_kedua">Jawaban Kedua</label>
        <input type="text" class="form-control @error('jawaban_kedua') is-invalid @enderror" id="jawaban_kedua"
            name="jawaban_kedua" value="{{ isset($answer) ? $answer->jawaban_kedua : old('jawaban_kedua') }}">
        @error('jawaban_kedua')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="jawaban_ketiga">Jawaban Ketiga</label>
        <input type="text" class="form-control @error('jawaban_ketiga') is-invalid @enderror" id="jawaban_ketiga"
            name="jawaban_ketiga" value="{{ isset($answer) ? $answer->jawaban_ketiga : old('jawaban_ketiga') }}">
        @error('jawaban_ketiga')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="jawaban_keempat">Jawaban Keempat</label>
        <input type="text" class="form-control @error('jawaban_keempat') is-invalid @enderror" id="jawaban_keempat"
            name="jawaban_keempat" value="{{ isset($answer) ? $answer->jawaban_keempat : old('jawaban_keempat') }}">
        @error('jawaban_keempat')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
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
