<option value="">{{ trans('translation.select_sub_category') }}</option>
@foreach ($data as $subcat)
<option value="{{ $subcat->id }}"> {{ $subcat->name }} </option> 
@endforeach