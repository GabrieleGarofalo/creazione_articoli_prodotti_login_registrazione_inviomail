<x-layout>
    <x-header

    title='Prodotti di '

    />

    @if (session('message'))
    <div class="alert alert-success text-center">
        <p class="m-0">
            {{session('message')}} </p>

        </div>

        @endif

        <div class="container my-5">
            <div class=" row justify-content-center">


                @foreach ($products as $product )
                <div class="col-12 col-md-8 col-lg-6">

                    <x-card-product


                    :product='$product'

                    />

                </div>
                @endforeach


            </div>
        </div>
    </x-layout>
