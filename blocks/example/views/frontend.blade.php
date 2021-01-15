@if($slot)
<div class="{{ $class }}">
    <div class="{{ $margin }} bg-primary hover:bg-secondary p-4 rounded text-white">
        {{ $slot }}
    </div>
</div>
@endif