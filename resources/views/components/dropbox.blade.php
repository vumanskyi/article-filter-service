@if(request()->get($name)&& $class)
<input type="hidden" class="{{ $class . '__hidden'  }}" value="{{ implode(',', request()->get($name)) }}">
@endif
<select
    multiple
    data-style="bg-white rounded-pill px-4 py-3 shadow-sm"
    name="{{ $name . '[]' }}"
    class="{{ $class ? $class : 'selectpicker' }} w-10 form-control search-slt"
>
    <option value="" disabled>{{ __($placeholder) }}</option>
    @foreach($data as $d)
        <option value="{{ $d->id }}"> {{ $d->name }}</option>
    @endforeach
</select><!-- End -->
