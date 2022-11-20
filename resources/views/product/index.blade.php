<div class="content-wrapper">
  @include('template.header')
  @include('template.sidebar')

<h1>Index Data</h1>
<a href="product/create">Tambah Data</a>

<table border="1">
    <tr>
        <td>ID</td>
        <td>Nama</td>
        <td>Slug</td>
        <td>Harga</td>
        <td>Deskripsi</td>
        <td>Aksi</td>
    </tr>
    @foreach($product as $p)
        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->product_name}}</td>
            <td>{{$p->product_slug}}</td>
            <td>{{$p->price}}</td>
            <td>{{$p->description}}</td>
            <td>
                <a href="/product/{{$p->id}}/edit">Edit</a>
                <form action="/product/{{$p->id}}" method="POST">
                    @csrf @method('delete')
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
    @endforeach
</table>

</div>
@include('template.footer')