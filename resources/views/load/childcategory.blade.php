<option value="">Select Child Category</option>
@foreach($subcat->childs as $child)
<option value="{{ $child->id }}">{{ $child->name_en }}</option>
@endforeach