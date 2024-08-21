<!DOCTYPE html>
<html>
<head>
    <title>ItsolutionStuff.com</title>
</head>
<body>
    <h1>{{ $mailData['title'] }}</h1>
    <p>{{ $mailData['body'] }}</p>
    <p>{!! $mailData['url'] !!}</p>
    
    <p>Test Mail</p>
    <br>

    {{-- <form action="{{ route('veryfiedEmail', ['partner_id' => $mailData['partner_id']]) }}" method="POST">
        @csrf
        <button type="submit">Verified</button>
    </form> --}}
    

     {{-- <a href="" style="background-color:green;padding:10px;text-decoration:none;color:white"> <b>Verified You Email Address </b></a> --}}
    <p>Thank you</p>
</body>
</html>