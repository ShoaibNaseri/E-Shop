@csrf
<div class="col-md-12">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" value="{{old('email') ?? $contact->email}}" name="email" class="form-control" id="inputEmail4" required>
</div>
<div class="col-md-12">
    <label for="inputEmail4" class="form-label">Phone</label>
    <input type="text" value="{{old('phone') ?? $contact->phone}}" name="phone" class="form-control" id="inputEmail4" required>
</div>
<div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <textarea name="adress" value="" class="form-control" id="" cols="20" rows="5" required>{{old('adress') ?? $contact->adress}}</textarea>
</div>