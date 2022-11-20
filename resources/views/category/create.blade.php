<div class="content-wrapper">
  @include('template.header')
  @include('template.sidebar')

<h1>Tambah Data</h1>

<form action="store" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id">
    <input type="text" name="category_name" placeholder="Nama"><br>
    <input type="text" name="category_slug" placeholder="Slug"><br>
    <select name="asset_id" class="form-control">
        <option value="">-- Pilih Gambar --</option>
        @foreach($asset as $a)
        <option value="{{$a->id}}">{{$a->name}}</option>
        @endforeach
    </select>
    <input type="submit" name="submit" value="Save">
</form>

</div>
@include('template.footer')