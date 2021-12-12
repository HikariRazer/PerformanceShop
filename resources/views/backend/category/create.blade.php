<form action="{{ route('category.store') }}" method="POST">
    @csrf
  <label for="category_name">Category name:</label><br>
  <input type="text" id="category_name" name="category_name"><br>
  <input type="submit" value="Submit">
</form>