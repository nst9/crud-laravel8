@csrf
<fieldset class="form-group mb-4">
  <label for="name">Name</label>
  <input type="text" class="form-control" id="name" name="name" required value="{{ old('name', $product->name) }}">
</fieldset>
<fieldset class="form-group mb-4">
  <label for="price">Price</label>
  <input type="number" class="form-control" id="price" name="price" required
    value="{{ old('price', $product->price) }}">
</fieldset>
<div class="text-center">
  <button class="btn btn-primary" type="submit">Enviar</button>
</div>