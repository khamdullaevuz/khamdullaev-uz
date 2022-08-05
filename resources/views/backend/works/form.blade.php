<div class="mb-1 mt-1">
    <label for="name" class="form-label">Nomi:</label>
    <input type="text" class="form-control" id="name" aria-describedby="nameHelp" name="name"
           value="{{ old('name') ?? $work->name }}">
    @error('name')
    <div id="nameHelp" class="form-text">{{ $message }}</div>
    @enderror
</div>
<div class="mb-1 mt-1">
    <label for="description" class="form-label">Ma'lumot:</label>
    <textarea class="form-control" id="description" rows="3" aria-describedby="descriptionHelp"
              name="description">{{ old('description') ?? $work->description }}</textarea>
    @error('description')
    <div id="descriptionHelp" class="form-text">{{ $message }}</div>
    @enderror
</div>
<div class="mb-1 mt-1">
    <label for="link" class="form-label">Havola:</label>
    <input type="text" class="form-control" id="link" aria-describedby="linkHelp" name="link"
           value="{{ old('link') ?? $work->link }}">
    @error('link')
    <div id="linkHelp" class="form-text">{{ $message }}</div>
    @enderror
</div>
<div class="form-group mb-1 mt-1">
    <label for="inputImage">Ish uchun rasm:</label>
    <div class="input-group">
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="photo" id="inputImage" aria-describedby="photoHelp">
            <label class="custom-file-label" for="inputImage">Faylni tanlash</label>
        </div>
    </div>
    @error('photo')
    <div id="photoHelp" class="form-text">{{ $message }}</div>
    @enderror
</div>
