  @csrf
  <div class="col-md-12">
      <label for="inputEmail4" class="form-label">Category Name</label>
      <input type="text" value="{{old('name') ?? $category->name}}" name="name" class="form-control" id="inputEmail4" required>
  </div>
  <div class="col-md-12">
      <label for="inputEmail4" class="form-label">Category Description</label>
      <textarea name="description" class="form-control" id="" cols="30" rows="10">{{old('name') ?? $category->description}}</textarea>
  </div>