@extends('layouts.layout')

@section('content')
        <div class=>
         
         <div>
         <h1>Order for {{ $pizza->name}} </h1>
         <p> Pizza Type: {{ $pizza->type }} </p>
         <p> Pizza Base: {{ $pizza->base }} </p>
         <p> Extra toppings: </p>
         <ul>
         @foreach ($pizza->toppings as $topping)
         <li>{{ $topping }}</li>
         @endforeach
         
         </ul>

         <form action="/pizzas/{{$pizza->id}}" method="POST">
         @csrf
         @method('DELETE')
         <button>Complete order</button>
         </form>

         </div>

         <a href="/pizzas"> Back to all pizzas </a>
            
        </div>



@endsection
   
