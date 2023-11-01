@php use Illuminate\Support\Facades\Vite; @endphp
<x-layout body-class="home">
    <div class="container page">
        <x-nav/>
        <section class="hero">
            <h1>Элегантные <br> IT решения для вашего бизнеса без мишуры</h1>
            <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, nisi odio qui rem reprehenderit
                sapiente.</h2>

            <div>
                <button class="primary large">Get in Touch</button>
            </div>
        </section>

        <section class="cards">
            @foreach(range(0, 3) as $i)
                <x-card>
                    <x-slot:title>
                        Lorem ipsum dolor.
                    </x-slot:title>

                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid maiores natus non odio placeat?
                    Delectus illo magnam optio similique soluta.
                </x-card>
            @endforeach
        </section>

        <section class="about">
            <h3 class="section-title">Обо мне</h3>
            <h4 class="section-heading">Баимбет Маргулан</h4>

            <div class="about-grid">
                <div class="about-photo">
                    <img src="{{ Vite::asset('resources/images/photo.jpg') }}" alt="">
                </div>
                @foreach(range(0, 4) as $i)
                    <div class="card">
                        <div class="card-header">
                            Lorem ipsum dolor.
                        </div>
                        <div class="card-footer">
                            Lorem ipsum dolor.
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <section class="work">
            <h3 class="section-title">Работы</h3>

            <h4 class="section-heading">Избранные</h4>

            <div class="work-grid">
                @foreach(range(0, 3) as $i)
                    <x-portfolio-item>
                        <x-slot:title>
                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                        </x-slot:title>
                        <x-slot:category>
                            Сайт
                        </x-slot:category>
                    </x-portfolio-item>
                @endforeach
            </div>
        </section>

        <section class="tech">
            <h3 class="section-title">Инструменты</h3>
            <h4 class="section-heading">Технологии</h4>

            <div class="tech-grid">
                <div class="tech-card">
                    <img src="{{ Vite::asset('resources/images/php-logo.svg') }}" alt="">
                </div>
                <div class="tech-card">
                    <img src="{{ Vite::asset('resources/images/laravel-logo.svg') }}" alt="">
                </div>
                <div class="tech-card">
                    <img src="{{ Vite::asset('resources/images/livewire-logo.svg') }}" alt="">
                </div>
                <div class="tech-card">
                    <img src="{{ Vite::asset('resources/images/alpinejs-logo.svg') }}" alt="">
                </div>
                <div class="tech-card">
                    <img src="{{ Vite::asset('resources/images/vue-logo.png') }}" alt="">
                </div>
                <div class="tech-card">
                    <img src="{{ Vite::asset('resources/images/forge-logo.svg') }}" alt="">
                </div>
                <div class="tech-description">
                    <h3>Простота и эффективность</h3>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto consequatur culpa eum ex ipsa nihil praesentium quo recusandae rerum sequi veritatis, voluptas voluptatibus? Delectus distinctio iste nemo quasi unde! Blanditiis commodi, dicta ducimus et excepturi facilis fugiat, fugit iste iure laboriosam maiores nesciunt nobis quis reprehenderit sapiente veniam voluptate! Aut facere harum hic, illum incidunt laboriosam libero quisquam totam!
                    </p>
                </div>
            </div>
        </section>
    </div>
</x-layout>
