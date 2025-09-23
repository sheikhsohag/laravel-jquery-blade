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
        increment() {
            this.count++;
        },
        decrement() {
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
        increment() {
            this.count++;
            console.log('Count incremented:', this.count);
        },
        decrement() {
            this.count--;
            console.log('Count decremented:', this.count);
        }

    }">

        <h2>Alpine.js Counter with Init Example</h2>
        <button @click="decrement" class="bg-red-500 text-white px-4 py-2 rounded">-</button>
        <span x-text="count" class="mx-4 text-xl"></span>
        <button @click="increment" class="bg-green-500 text-white px-4 py-2 rounded">+</button>

    </div>


    <div x-data="{
        init() {
            console.log('I am called first')
        }
    }" x-init="console.log('I am called second')">
        <h2>Alpine.js Init Order Example</h2>
    </div>

    <div x-data="{ show: false }">
        <h2>Alpine.js Show/Hide Example</h2>
        <button @click="show = !show" class="bg-blue-500 text-white px-4 py-2 rounded">
            Toggle Content
        </button>
        <div x-show="show" x-transition.duration.1000ms x-cloak class="mt-4 p-4 bg-gray-100 rounded">
            This content is conditionally shown or hidden.
        </div>

    </div>



    {{-- x-on click example --}}

    <div x-data="{
        count: 0,
        increment() {
            this.count++;
        },
        decrement() {
            this.count--;
        },
        isActive: false,

        toggleActive() {
            this.isActive = !this.isActive;
            console.log('isActive:', this.isActive);
        }
    }">
        <h2>Alpine.js x-on Click Example</h2>
        <button x-on:click="decrement" class="bg-red-500 text-white px-4 py-2 rounded">-</button>
        <span x-show="isActive" x-text="count" class="mx-4 text-xl"></span>
        <button x-on:click="increment" class="bg-green-500 text-white px-4 py-2 rounded">+</button>

        <div class="mt-4">
            <button x-on:click="toggleActive" :class="isActive ? 'bg-green-500' : 'bg-gray-500'"
                class="text-white px-4 py-2 rounded">
                Toggle Active State
            </button>
            <p class="mt-2" x-text="isActive ? 'Active' : 'Inactive'"></p>
        </div>



        //mouse keyboard event

        <div>
            <h2>Alpine.js Keyboard and Mouse Events Example</h2>
            <div x-data="{ message: 'I ❤️ Alpine' }">
                <button type="button" @click="message = 'selected'" @click.shift="message = 'added to selection'">
                    @mousemove.shift="message = 'add to selection'"
                    @mouseout="message = 'select'"
                    x-text="message"></button>
            </div>
        </div>

        <button type="button"
    @click="message = 'selected'"
    @click.shift="message = 'added to selection'">
    @mousemove.shift="message = 'add to selection'"
    @mouseout="message = 'select'"
    x-text="message"></button>



    <div x-data="{ count: 0 }" class="p-4">
  <button
    @click="count++"
    class="bg-blue-500 text-white px-4 py-2 rounded"
  >
    Click Me
  </button>

  <p>Clicked: <span x-text="count"></span> times</p>

  <div
    @mouseenter="console.log('Mouse entered')"
    @mouseleave="console.log('Mouse left')"
    class="mt-4 p-4 border"
  >
    Hover over me
  </div>
</div>


<div
  x-data="{
    message: 'I ❤️ Alpine',

    mouseEnter() {
      this.message = 'Mouse entered the div';
    },
    mouseLeave() {
      this.message = 'Mouse left the div';
    },
    clickDiv() {
        this.message = 'Div clicked!';
    },
    mouseOver() {
      this.message = 'Mouse is over the div';
    }

  }"
  class="p-6 border rounded bg-gray-100"
  @mouseenter="mouseEnter()"
  @mouseleave="mouseLeave()"
  @mouseover="mouseOver()"
  @click="clickDiv()"
>
  <p x-text="message"></p>
</div>

{{--
<div x-data="{
    isHovered: false,
    isClicked: false
}">
    <div class="box"
         @mouseenter="isHovered = true"
         @mouseleave="isHovered = false"
         @click="isClicked = !isClicked"
         :class="{
             'bg-blue-200': isHovered,
             'bg-green-200': isClicked
         }">

        <p x-show="isHovered">Hovering over box!</p>
        <p x-show="isClicked">Box clicked!</p>
    </div>
</div> --}}




<div x-data="{ name: '', log: '' }" x-init="$watch('name', value => log = 'Name changed to: ' + value)">
  <input type="text" x-model="name" placeholder="Type your name" class="border p-2">

  <p class="mt-2 text-blue-600" x-text="log"></p>
</div>




<div x-data="{ count: 0, message: '' }"
     x-init="$watch('count', (newValue) => message = 'Count is now ' + newValue)">

  <button @click="count++">Increment</button>

  <p x-text="message"></p>
</div>





    @endsection


    @push('scripts')
        <script></script>
    @endpush
