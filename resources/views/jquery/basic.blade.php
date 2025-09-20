@extends('layouts.app')

@section('title', 'Basic AJAX Form')

@section('content')
    <h2>Basic AJAX Form Submit Example</h2>


    <div id="data-container" style="margin-top:20px;">
        <h4>Submitted Data:</h4>
        <ul id="data-list">

        </ul>
    </div>
@endsection

@push('scripts')
<script>
    let items = ['Item 1', 'Item 2', 'Item 3', 'Item 4', 'Item 5'];

    $('#data-list').empty();
    $.each(items, function(index, value){
        $('#data-list').append('<li>' + value + '</li>');
    })
</script>
@endpush
