@extends('layouts.app')

@section('title', 'AJAX Form')

@section('content')
    <h2>AJAX Form Submit Example</h2>

    <form id="ajaxForm">
        <label>Name:</label>
        <input type="text" name="name" id="name"><br><br>

        <label>Email:</label>
        <input type="email" name="email" id="email"><br><br>

        <button type="submit">Submit</button>
    </form>

    <div id="response" style="margin-top:20px; color:green;"></div>
@endsection

@push('scripts')
<script>
$(document).ready(function () {
    $("#ajaxForm").on("submit", function (e) {
        e.preventDefault();

        $.ajax({
            url: "{{ route('form.submit') }}",
            type: "POST",
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                name: $("#name").val(),
                email: $("#email").val()
            },
            success: function (response) {
                if(response.success){
                    $("#response").html(response.message);
                    $("#ajaxForm")[0].reset();
                }
            },
            error: function (xhr) {
                console.log(xhr);
                let errors = xhr.responseJSON.errors;
                console.log(errors);
                let msg = "";
                $.each(errors, function (key, value) {
                    msg += value[0] + "<br>";
                });
                $("#response").css("color","red").html(msg);
            }
        });
    });
});
</script>
@endpush
