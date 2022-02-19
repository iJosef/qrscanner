<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!------ Include the above in your HEAD tag ---------->

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Tinos&display=swap" rel="stylesheet">
</head>
<body>
   <div class="container">
      <div class="col-md-6 mx-auto text-center">
         <div class="header-title">
            <h1 class="wv-heading--title" style="visibility: hidden">
               Check out — it’s free!
            </h1>
            <h2 class="wv-heading--subtitle">
               Kindly enter your email to get CV sent to you.
            </h2>
         </div>
      </div>
      <div class="row">
         <div class="col-md-4 mx-auto">
            <div class="myform form ">
               <form method="post" id="send_mail_to_visitor" enctype="multipart/form-data">
                   @csrf
                  <div class="form-group">
                     <input type="email" name="email"  class="form-control my-input" id="email" placeholder="Email" required>
                  </div>
                  <div class="text-center ">
                     <button type="submit" class=" btn btn-block send-button tx-tfm"> <span id="form_spinner"><i class="fa fa-paper-plane-o"></i></span> Receive  CV</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script>
        $('#send_mail_to_visitor').submit(function(event) {
            $('#form_spinner').html('');
            $('#form_spinner').append('<i class="fa fa-spinner fa-pulse fa-1x fa-fw"></i>');
            event.preventDefault();
            $.post('/send_mail_to_visitor', $('#send_mail_to_visitor').serialize() , function(data, status) {
                console.log(data);
                if (data.status == "success") {
                    swal({
                        title: "Done!",
                        text: data.message,
                        icon: "success",
                        button: "OK!",
                    });
                    $('#form_spinner').html('');
                    $('#email').val('');
                    $('#form_spinner').append('<i class="fa fa-paper-plane-o"></i>');
                } else {
                    swal({
                        title: "Oops!",
                        text: data.message,
                        icon: "error",
                        button: "OK!",
                    });
                    $('#form_spinner').html('');
                    $('#form_spinner').append('<i class="fa fa-paper-plane-o"></i>');
                }
            })
        })
   </script>
</body>
</html>
