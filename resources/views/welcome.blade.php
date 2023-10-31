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

        <section class="work">
            <h3 class="section-title">Работы</h3>

            <h4>Избранные</h4>

            <div class="work-grid">
                @foreach(range(0, 3) as $i)
                    <x-portfolio-item :light="in_array($loop->index, [0, 3])">
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
    </div>
</x-layout>
