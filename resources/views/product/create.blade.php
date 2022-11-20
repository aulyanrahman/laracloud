<div class="content-wrapper">
  @include('template.header')
  @include('template.sidebar')

<h1>Tambah Data</h1>

<form action="store" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id">
    <input type="text" name="product_name" placeholder="Nama"><br>
    <input type="text" name="product_slug" placeholder="Slug"><br>
    <input type="number" name="price" placeholder="Price"><br>
    <input type="text" name="description" placeholder="Description"><br>
    <input type="submit" name="submit" value="Save">
</form>

</div>
@include('template.footer')