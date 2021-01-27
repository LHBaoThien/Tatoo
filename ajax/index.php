<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Demo Ajax</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>
<body>
<div class="container-fluid">
    <h1>Demo Ajax</h1>
    <h2 id="message">Xin Chào:</h2>
    <form id="form-login">
        <div class="row">
            <div class="col">
            <input id="first_name" name="first_name" type="text" class="form-control" placeholder="First name">
            </div>
            <div class="col">
            <input id="last_name" name="last_name" type="text" class="form-control" placeholder="Last name">
            </div>
        </div>
        <br>
        <a id="submit_form" class="btn btn-primary" href="javascript:void(0)">Submit</a>
    </form>
</div>
<script>

$( "#submit_form" ).on( "click", function() {
    var formdata = $("#form-login").serializeArray();
    console.log(formdata);
    var data = {};
    $(formdata ).each(function(index, obj){
        data[obj.name] = obj.value;
    });
    console.log(data);
    var request = $.ajax({
    url: "ajax.php",
    method: "POST",
    data: data,
    dataType: "json"
    });
    request.done(function( data ) {
        $('#message').html(data.message);
        //$( "#message" ).animate({ "margin-left": "+=400px" }, "slow" );
        var h2 = $("h2");
        h2.animate({left: '100px'}, "high");
        h2.animate({fontSize: '3em'}, "high");
    });
    request.fail(function( jqXHR, textStatus ) {
    //   alert( "Request failed: " + textStatus );
    });
});
</script>
</body>
</html>

