
<x-layout>
    <x-header

    title="I nostri Prodotti"

    />

    @if ($products->isNotEmpty())

    <div class="container my-5">
        <div class=" row justify-content-center">
            @foreach ($products as $product )
    <div class="col-12 col-md-6 col-lg-6">

        <x-card-product


        :product='$product'

        />

    </div>

    @endforeach
    @endif
</div>
</div>
</x-layout>

