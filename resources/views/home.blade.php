<?php

$products = config('products')

?>

@extends('layouts.main')



@section('content')


<main>
    <section class="container">
            <div class="carts">
                @foreach ($products as $product)
                <div class="content">
                <img src="{{}}" alt="{{$product['name']}}">
                <img class="img-curson" src="{{$product['backImage']}}" alt="{{$product['name']}}">


                    @foreach ($product['badges'] as $badge)
                        <span  class="discount">{{$badge['type']}}</span>
                        <span  class="sustainability">{{$badge['']}}</span>
                    @endforeach

                <span class="heart">&hearts;</span>
                <span>{{ product['brand'] }}</span>
                <span class="garment">{{ product['name'] }}</span>
                <span class="red">{{ cardsObj.lastPrice }} &euro;</span>
                <span v-if="cardsObj.fullPrice" class="cut">{{ cardsObj.fullPrice }} &euro;</span>
                </div>
                @endforeach
            </div>
    </section>
</main>
@endsection
