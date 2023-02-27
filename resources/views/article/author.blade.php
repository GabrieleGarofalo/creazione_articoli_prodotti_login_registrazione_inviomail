<x-layout>

    <x-header

    title="I nostri Articoli"

    />
    <div class="container my-5">
        <div class=" row justify-content-center">
            @if ($articles->isNotEmpty())
            @foreach ($articles as $article)
            <div class=" col-12 col-md-8 col-lg-6">
                <x-article-card

                :article="$article"

                />


            </div>
            @endforeach

            @endif



        </div>
    </div>

</x-layout>
