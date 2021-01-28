@props(['value'])

<label {{ $attributes->merge(['class' => 'form-group has-top-label']) }}>
    {{ $slot }}
    <span>{{$value}}</span>
</label>
