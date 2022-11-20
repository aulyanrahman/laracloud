<h1>Edit Data</h1>
<a href="/category">Kembali</a>

<form action="{{$category->id}}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="id" placeholder="ID" value="{{$category->id}}"><br>
    <input type="text" name="category_name" placeholder="Nama" value="{{$category->category_name}}"><br>
    <input type="text" name="category_slug" placeholder="Slug" value="{{$category->category_slug}}"><br>
    <label for="asset_id">Asset</label>
	<select name="asset_id" class="form-control">
        @foreach($casset as $b)
			<option value="<?= $b->id ?>" <?= $category->asset_id === $b->id ? 'selected' : '' ?>><?= $b->name ?></option>
        @endforeach
    </select>
    <input type="submit" name="submit" value="Save">
</form>