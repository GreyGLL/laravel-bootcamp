<select name="Categories">
@foreach ($categories as $category)
    <option value="{{$category->id}}">{{$category->title}}</option>
@endforeach
</select>