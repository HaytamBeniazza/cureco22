function harazid(){
    document.getElementById('alae').innerHTML+= `
    <h3>add new product</h3>
    <div class="form-group">
    <label for="image">Image: <sup>*</sup></label>
    <input type="file" name="image[]" class="form-control form-control-lg" required>
  </div>
    <div class="form-group">
    <label for="title">Title: <sup>*</sup></label>
    <input type="text" name="title[]" class="form-control form-control-lg" required>
  </div>
  <div class="form-group">
    <label for="price">Price: <sup>*</sup></label>
    <input type="number" name="price[]" class="form-control form-control-lg" required>
  </div>
  <div class="form-group">
    <label for="quantity">Quantity: <sup>*</sup></label>
    <input type="number" name="quantity[]" class="form-control form-control-lg" required>
  </div>

</div>`
return false;
}