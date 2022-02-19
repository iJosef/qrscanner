<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Tinos&display=swap" rel="stylesheet">
    <title></title>
    <style>
        body {
            font-family: 'Roboto Condensed', sans-serif;
            font-family: 'Tinos', serif;
        }
        .parent {
            display: flex;
            text-align: center;
        }

        .child {
            margin: auto;
        }
    </style>
</head>
<body>

<div class="parent">
    <div class="child">

        <h1>Scan me to get CV sent to your mailbox</h1>

        {{-- {!! QrCode::size(250)->generate(url('/receive_resume')); !!} --}}
        {!! QrCode::size(250)->generate('https://bit.ly/3oYWdFC'); !!}
        {{-- <img src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->size(250)->generate('https://google.com')) }}" alt=""> --}}

        <p>- By Joseph Emeruwa 🤓</p>

    </div>
</div>

</body>
</html>
