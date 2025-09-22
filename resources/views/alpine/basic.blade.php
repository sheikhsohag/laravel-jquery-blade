@extends('layouts.app')

@section('title', 'alpine');

@section('content')
    //alpine set up

    <div>
        <h2>Alpine set up</h2>
        <h2>Alpine.js Basic Example</h2>
        <h1 x-data="{ message: 'I ❤️ Alpine' }" x-text="message"></h1>
    </div>

    {{-- alpine countainer x-data --}}
    <div x-data="{
        count: 0,
        increment(){
            this.count++;
        },
        decrement(){
            this.count--;
        }
    }">

        <h2>Alpine.js Counter Example</h2>
        <button @click="decrement" class="bg-red-500 text-white px-4 py-2 rounded">-</button>
        <span x-text="count" class="mx-4 text-xl"></span>
        <button @click="increment" class="bg-green-500 text-white px-4 py-2 rounded">+</button>

    </div>

    {{-- initial x-data --}}

    <div x-data="{
        count: 0,

        init() {
            this.count = 0; // Initialize count to 0
            console.log('Component initialized with count:', this.count);
        },
        increment(){
            this.count++;
            console.log('Count incremented:', this.count);
        },
        decrement(){
            this.count--;
            console.log('Count decremented:', this.count);
        }

    }">

        <h2>Alpine.js Counter with Init Example</h2>
        <button @click="decrement" class="bg-red-500 text-white px-4 py-2 rounded">-</button>
        <span x-text="count" class="mx-4 text-xl"></span>
        <button @click="increment" class="bg-green-500 text-white px-4 py-2 rounded">+</button>

    </div>


    <div
        x-data="{
            init() {
                console.log('I am called first')
            }
        }"
        x-init="console.log('I am called second')"
        >
        <h2>Alpine.js Init Order Example</h2>
    </div>
@endsection


@push('scripts')
    <script></script>
@endpush
