@extends('toolbox.master')

@section('picture')
    <div class="col1">
        <img id="wrench" src="{{ asset('images/wrench.png') }}" alt="Wrench" />
    </div>
@stop

@section('col')
    <div class="col2">
@stop

@section('h1')
    <h3>XKCD Password Generator</h3>
@stop

@section('links')
    <script src="{{ asset('js/jquery-2.1.1.js') }}"></script>
    <script src="{{ asset('js/default.js') }}"></script>
@stop

@section('bar')
    <div class="bar higher"></div>
@stop
 
@section('content')
    <div id="main">
        <div class="container">
				<h6 id="result"></h6>
                {!! Form::token() !!}
                    <h2>Password Specifications</h2>
                <div class="col4 bordered">
                    <!-- Words to generate field. ---------------------------->
                    <label>Number of words: </label>
                    <input type="number" name="words" id="words" value="4">
                    <label>(Max: 9)</label>
                    <br>
                    <!-- Add a number checkbox. ------------------------------>
                    <input type="checkbox" name="num" id="num">
                    <label>Add a Number</label>
                    <br>
                    <!-- Add a symbol checkbox. ------------------------------>
                    <input type="checkbox" name="symbol" id="symbol">
                    <label>Add a Symbol</label>
                    <br>
                    <div id="symNum">
                        <!-- Number of symbols to add field ------------------>
                        <label>Number of symbols:</label>
                        <input type="number" name="symbols" id="symbols" value="1">
                        <label>(Max: 3)</label>
                        <br />
                    </div>
                    <div class="errors"></div>
                </div>    
                <h2>Display Options</h2>
                <div class="col6 bordered">
                    <h5>Separate Words By:</h5>
                    <div class="input para">
                        <!-- Letter separation choices. ---------------------->
                        <input type="radio" name="separation" value="spaces" checked>
                        <label>Spaces</label>
                        <br />
                        <input type="radio" name="separation" value="camelCase">
                        <label>Camel Case</label>
                        <br />
                        <input type="radio" name="separation" value="hyphens">
                        <label>Hyphens</label>
                    </div>
                </div>
                <div class="col6 bordered">
                    <h5>Letters Should Appear:</h5>
                    <div class="input para">
                        <!-- Letter capitalization choices. ------------------>
                        <input type="radio" name="letter" value="lower" id="lower" checked>
                        <label>Lower Case</label>
                        <br />
                        <input type="radio" name="letter" value="upper" id="upper">
                        <label>Upper Case</label>
                        <br />
                        <input type="radio" name="letter" value="capital" id="capital">
                        <label>Capitalize 1st Letter</label>
                    </div>
                </div>
                <div class="col1">
                    <!-- Form submit button. --------------------------------->
                    <button id="submit" class="XKCDsubmit">Generate</button>
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
            //submit number and csrf token and checkboxs
            $.ajax({
                method: 'POST',
                url: '/toolbox/password',
                data: {
                    _token: $('input[name="_token"]').val(), 
                    words: $('#words').val(), 
                    num: $('#num').is(':checked'),
                    symbol: $('#symbol').is(':checked'),
                    symbols: $('#symbols').val(),
                    separation: $('input[name="separation"]:checked').val(),
                    letter: $('input[name="letter"]:checked').val(),
                },
                success: function(result) {
                    //display generated password in result div
                    $('#result').text(result);
                },
                error: function (jqXHR) {
                    //Display any errors.
                   var response = JSON.parse(jqXHR.responseText);
                   //loop through error messages
                   for(var msg in response) {
                       $('.errors').append(response[msg]);
                   }
                }
            });
        });
    });
</script>
@stop