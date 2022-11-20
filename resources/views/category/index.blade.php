<div class="content-wrapper">
  @include('template.header')
  @include('template.sidebar')

<h1>Index Data</h1>
<a href="category/create">Tambah Data</a>

<table border="1">
    <tr>
        <td>ID</td>
        <td>Nama</td>
        <td>Slug</td>
        <td>Asset</td>
        <td>Aksi</td>
    </tr>
    @foreach($category as $c)
        <tr>
            <td>{{$c->id}}</td>
            <td>{{$c->category_name}}</td>
            <td>{{$c->category_slug}}</td>
            <td><img src="{{$c->path}}" style="max-width: 150px; margin: auto;"></td>
            <td>
                <a href="/category/{{$c->id}}/edit">Edit</a>
                <form action="/category/{{$c->id}}" method="POST">
                    @csrf @method('delete')
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
    @endforeach
</table>

</div>
@include('template.footer')