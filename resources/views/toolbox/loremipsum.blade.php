@extends('toolbox.master')

@section('picture')
    <div class="col1">
        <img id="robot" src="{{ asset('images/robot.png') }}" alt="Robot" />
    </div>
@stop

@section('col')
    <div class="col2">
@stop

@section('h1')
    <h3>Lorem Ipsum Generator</h3>
@stop

@section('bar')
    <div class="bar higher"></div>
@stop
 
@section('content')
    <div id="main">
        <div class="container">
            <h2>How many paragraphs do you want?</h2>
            <div class="col4">
                    {!! Form::token() !!}
                    <!-- Paragraph generator field. -->
                    <label>Paragraphs:</label>
                    <input id="number" name="number" type="number" value="4">
                    <label>(Max: 99)</label>
                    <!-- Div to hold error messages -->
                    <div class="errors"></div>
                    <br/><br/>
                    <!-- Submit Form -->
                    <button id="submit" class="LIsubmit">Submit</button>
            </div>
            <div class="col4">
               <p id="result"></p>
            </div>
        </div>
    </div>
<script>
    //Ajax function to submit request asynchronously.
    $(document).ready(function() {
        //when submit button is clicked...
        $('#submit').on('click', function() {
            //Clear any of the response divs.
            $('#result').empty();
            $('.errors').empty();
            //submit number and csrf token
            $.ajax({
                method: 'POST',
                url: '/toolbox/loremipsum',
                data: {number: $('#number').val(), _token: $('input[name="_token"]').val()},
                success: function(result) {
                    //Put result in paragraph.
                    $('#result').html(result);
                },
                error: function (jqXHR) {
                    //Display any errors.
                   var response = JSON.parse(jqXHR.responseText);
                   console.log(response.number);
                   $('.errors').text(response.number);
                }
            });
        });
    });
</script>
@stop