  @csrf
  <div class="col-md-6">
      <div class="col-md-12 p-2">
          <label for="inputEmail4" class="form-label">Product Name*</label>
          <input type="text" value="{{old('name') ?? $product->name}}" name="name" class="form-control" id="inputEmail4" required>
      </div>
      <div class="col-md-12 p-2">
          <label for="inputEmail4" class="form-label">Product Link*</label>
          <input type="link" value="{{old('link') ?? $product->link}}" name="link" class="form-control" id="inputEmail4" required>
      </div>
      <div class="col-md-12 p-2">
          <label for="inputEmail4" class="form-label">Product Image* <span class="text-muted small">630x630</span></label>
          <input type="file" value="" name="image" class="form-control" id="inputEmail4">
      </div>
      <div class="col-md-12 p-2">
          <label for="inputEmail4" class="form-label">Product Category*</label>
          <select class="js-states form-control" name="category_id" tabindex="-1">
              <optgroup label="Select Degree">
                  <option value="">Select a Category</option>
                  @foreach($categories as $category)
                  <option value="{{$category->id}}">{{$category->name}}</option>
                  @endforeach

              </optgroup>
          </select>
      </div>

  </div>
  <div class="col-md-6">
      <div class="col-md-12 p-2">
          <label for="inputEmail4" class="form-label">Price <span class="text-muted small">(Optional)</span></label>
          <input type="text" value="{{old('price') ?? $product->price}}" name="price" class="form-control" id="inputEmail4">
      </div>
      <div class="col-md-12 p-2">
          <label for="inputEmail4" class="form-label">Product Description <span class="text-muted small">(Optional)</span></label>
          <textarea name="description" class="form-control" id="" cols="10" rows="10">{{old('description') ?? $product->description}}</textarea>
      </div>
  </div>