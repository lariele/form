<div class="{{ $wrapperClass ?? '' }}">
    @if($editing)
        <input x-model={{ $slug }} type="text" class="{{ $inputClass ?? '' }} form-control form-control-sm" />
    @else
        <a href="{{ $route ?? '' }}" class="{{ $class ?? "font-medium whitespace-nowrap" }}">
            {{ $value ?? '' }}
        </a>
    @endif
    {{ $after ?? '' }}
</div>
