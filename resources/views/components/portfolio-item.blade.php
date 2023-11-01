@php use Illuminate\Support\Facades\Vite; @endphp

<div {{ $attributes->class(['portfolio-item']) }}>
    <div class="item-preview">
        <img src="{{ Vite::asset('resources/images/portfolio-preview.png') }}" alt="">
    </div>

    <div class="item-title">
        <span>{{ $title }}</span>
    </div>

    <div class="item-category">
        <span>{{ $category }}</span>
    </div>
</div>
