@csrf
<div class="col-md-12">
    <label for="inputEmail4" class="form-label">About Page Main Title</label>
    <input type="text" value="{{old('title') ?? $about->aboutTitle}}" name="aboutTitle" class="form-control" id="inputEmail4" required>
</div>
<div class="col-12">
    <label for="inputAddress" class="form-label">About Page Description</label>
    <textarea required name="aboutDescription" value="" class="form-control" id="" cols="20" rows="5">{{old('description') ?? $about->aboutDescription}}</textarea>
</div>
<div class="col-12">
    <label for="inputAddress2" class="form-label">Image <span class="text-muted small">Transparet background and 545x440 pxs</span></label>
    <input type="file" class="form-control" id="inputAddress2" name="aboutImage" placeholder="Apartment, studio, or floor">
</div>