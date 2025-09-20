@extends('layouts.app')

@section('title', 'Basic AJAX Form')

@section('content')
    <h2>Basic AJAX Form Submit Example</h2>


    <div id="data-container" style="margin-top:20px;">
        <h4>Submitted Data:</h4>
        <ul id="data-list" class="text-green-500">
        </ul>
    </div>

    <form action="" id="auth-form">
        <label for="email" class="py-1 text-red-300">Email:</label>
        <input type="text" name="email" id="email" placeholder="Email" class="border rounded my-3 py-1 text-red-800">


        <label for="password" class="py-1 text-red-300">Password:</label>
        <input type="password" name="password" id="password" placeholder="Password"
            class="border rounded my-3 py-1 text-red-800">


        <button type="submit" id="submit-button"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
    </form>

    <div>
        <div class="fade py-40">
            <h1>this is fade. is fate no fade</h1>
        </div>

        <div class="flex justify-center toggle py-40">
            <button id="toggle-button" class="btn bg-blue-500 py-2 px-4 rounded">Toggle</button>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            let items = ['Item 1', 'Item 2', 'Item 3', 'Item 4', 'Item 5', 'Item 6'];

            $('#data-list').empty();
            $.each(items, function(index, value) {
                $('#data-list').append('<li class="text-green-700">' + value + '</li>');
            });


            $('#auth-form').on('submit', function(e) {
                e.preventDefault(); // prevent form submission

                let email = $('#email').val().trim();
                let password = $('#password').val().trim();

                // Clear previous errors
                $('#email-error').remove();
                $('#password-error').remove();

                // Validate email
                if (email === '') {
                    $('#email').after(
                        '<span id="email-error" class="text-red-500">Email is required</span>');
                    return;
                }

                // Email format regex
                let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailPattern.test(email)) {
                    $('#email').after(
                        '<span id="email-error" class="text-red-500">Enter a valid email</span>');
                    return;
                }

                // Validate password
                if (password === '') {
                    $('#password').after(
                        '<span id="password-error" class="text-red-500">Password is required</span>');
                    return;
                }

                console.log('Email:', email, 'Password:', password);
                // Continue with AJAX or form submission here
            });

            $('#toggle-button').click(function() {
                $('.fade').fadeTo(1000, 0.5);
            });

            $('#toggle-button').hover(
                function() { $(this).addClass('bg-blue-700 cursor-pointer text-white'); },
                function() { $(this).removeClass('bg-blue-700'); }
            );



        });
    </script>
@endpush
