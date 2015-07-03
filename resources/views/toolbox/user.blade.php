@extends('toolbox.master')

@section('picture')
    <div class="col1">
        <img id="cloud" src="{{ asset('images/cloud.png') }}" alt="Cloud" />
    </div>
@stop

@section('col')
    <div class="col2">
@stop

@section('h1')
    <h3>Random User Generator</h3>
@stop

@section('bar')
    <div class="bar higher"></div>
@stop
 
@section('content')
    <div id="main">
        <div class="container">
            <h2>How many users do you want?</h2>
            <div class="col4">
                    {!! Form::token() !!}
                    <!-- Users to generate field. -->
                    <label>Users: </label>
                    <input id="number" type="number" name="number" value="4">
                    <label>(Max: 99)</label>
                    <!-- Div to hold error messages -->
                    <div class="errors"></div>
                    <p>
                        Include...<br/>
                        <!-- Checkbox to include birthday. -->
                        <input type="checkbox" name="birthday" id="birthday">
                        <label>Birthday: </label>
                        <br/>
                        <!-- Checkbox to include profile. -->
                        <input type="checkbox" name="profile" id="profile">
                        <label>Profile: </label>
                        <br/>
                        <br/>
                        <!-- Form submit button. -->
                        <button id="submit" class="RUsubmit">Generate</button>
                    </p>
                </form>
            </div>
            <div class="col4" id="result"></div>
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
            //submit number and csrf token and checkboxs
            $.ajax({
                method: 'POST',
                url: '/toolbox/user',
                data: {
                    number: $('#number').val(), 
                    _token: $('input[name="_token"]').val(), 
                    birthday: $('#birthday').is(':checked'), 
                    profile: $('#profile').is(':checked'),
                },
                success: function(result) {
                    //Loop through results
                    for(var row in result) {
                        //Divide users by paragraph
                        $('#result').append('<p>');
                        for(var item in result[row]) {
                            //Append user items to paragraph
                            $('#result').append(result[row][item] + '<br/>');
                        }
                        //close paragraph
                        $('#result').append('</p>');
                    }
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