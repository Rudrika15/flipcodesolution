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


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body style="background-color: #fff;box-sizing: border-box;margin: 0px;padding: 0px;">
    <div style="height: 100vh;width: 100%;margin: 10px auto;background-color: #ebf1ff;border: solid 1px #ebf1ff;">
        <table style="width: 100%;max-width: 100%;border-collapse: collapse;">
            <tr>
                <td>
                    <table style="width: 100%;max-width: 100%;border-collapse: collapse;">
                        <tr>
                            <td
                                style="padding-top: 5px;padding-right: 20px;padding-left: 20px;background: #171823;height: 180px;">
                                <p style="margin: 0;padding: 0;text-align: center;"><img
                                        src="https://flipcodesolutions.com/img/logo.png" alt="Logo"
                                        style="width: 212px;" max-width="117"></p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td
                    style="background-color: #ebf1ff; padding-top:0;padding-right: 0px;padding-bottom: 20px;padding-left: 0px;">
                    <table
                        style="background-color: #fff;padding-top:0;padding-bottom: 0px;max-width: 620px;display: block;margin: 0 auto;border-radius: 10px;margin-top: -60px;">
                        <tr>
                            <td style="margin: 0;padding: 0;">
                                <table style="width: 100%;max-width: 100%;border-collapse: collapse;">
                                    <tbody>
                                        <tr>
                                            <td
                                                style="margin: 0;padding-top: 10px;padding-bottom: 10px;padding-right: 10px;padding-left: 10px; font-family: 'Open Sans', sans-serif;font-size: 26px;font-weight: 600;line-height: 1.25em;color: #fff;text-align: center !important;background-color: #fd6602;border-top-left-radius: 10px;border-top-right-radius: 10px;">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table style="width: 100%;max-width: 100%;border-collapse: collapse;">
                                    <tbody>
                                        <tr>
                                            <td style="height: 15px;"></td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="margin: 0;padding: 0;font-family: 'Open Sans', sans-serif;font-size: 20px;font-weight: 600;line-height: 1.25em;color: #000;text-align: center;">
                                                <p
                                                    style="font-family: 'Open Sans', sans-serif;font-size: 24px;font-weight: 700;line-height: 1.25em;color: #000;margin:0; text-align: center;">
                                                    Thank you for Contact us</p>
                                                <p
                                                    style="height:3px;width:95%;background-color:#000;margin-left: auto;margin-right: auto;">
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="height: 10px;"></td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0px;">
                                                <table cellspacing="0" cellpadding="0"
                                                    style="width: 100%;max-width: 100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td
                                                                style="padding-top: 8px;padding-bottom: 10px; padding-right: 20px;padding-left: 20px;">
                                                                <p
                                                                    style="font-family: 'Open Sans', sans-serif;font-size: 15px;font-weight: 400;line-height: 1.45em;color: #000;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;padding: 0;">
                                                                    Hello, {{ $data['name'] }}
                                                                </p>
                                                                <p
                                                                    style="font-family: 'Open Sans', sans-serif;font-size: 15px;font-weight: 400;line-height: 1.45em;color: #000l; center;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;padding: 0;">
                                                                    Thank you for reaching out to us. We appreciate your
                                                                    interest . I'd be happy to assist you with any
                                                                    questions you have.
                                                                </p>
                                                                <p
                                                                    style="font-family: 'Open Sans', sans-serif;font-size: 15px;font-weight: 400;line-height: 1.45em;color: #000l; center;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;padding: 0;">
                                                                    Please feel free to share your specific inquiries,
                                                                    and I'll do my best to provide the information you
                                                                    need.</p>
                                                                <p
                                                                    style="font-family: 'Open Sans', sans-serif;font-size: 15px;font-weight: 400;line-height: 1.45em;color: #000l; center;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;padding: 0;">

                                                                    Looking forward to hearing from you.
                                                                </p>
                                                                <br>
                                                                <p
                                                                    style="font-family: 'Open Sans', sans-serif;font-size: 15px;font-weight: 400;line-height: 1.45em;color: #000;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;padding: 0;">
                                                                    Thank you,
                                                                </p>
                                                                <p
                                                                    style="font-family: 'Open Sans', sans-serif;font-size: 15px;font-weight: 500;line-height: 1.45em;color: #1e1e1e;margin-top: 0px;margin-right: 0;margin-bottom: 10px;margin-left: 0;padding: 0;">
                                                                    flipcodesolutions private limited
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="height: 45px;"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="margin: 0;padding: 0;">
                                <table style="width: 100%;max-width: 100%;border-collapse: collapse;">
                                    <tbody>
                                        <tr>
                                            <td
                                                style="margin: 0;padding-top: 10px;padding-bottom: 10px;padding-right: 10px;padding-left: 10px; font-family: 'Open Sans', sans-serif;font-size: 26px;font-weight: 600;line-height: 1.25em;color: #fff;text-align: center !important;background-color: #fd6602;border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>
