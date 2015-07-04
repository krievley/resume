<!DOCTYPE html>
<html>
    <head>
        <title>Contact Request Form</title>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <h3>Contact Request From Resume Website</h3>
                <p>Name: {!! $contact['name'] !!}</p><br/>
                <p>Email: {!! $contact['email'] !!}</p><br/><br/>
                <p>Message: {!! $contact['message'] !!}</p>
            </div>
        </div>
    </body>
</html>