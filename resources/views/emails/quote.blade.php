<!DOCTYPE html>
<html>
    <head>
        <title>Contact Request Form</title>
    </head>
    <body>
        <div class="container">
            <div class="content">
                @foreach($msg as $message)
                    <p>{!! $msg !!}</p>
                @endforeach
            </div>
        </div>
    </body>
</html>