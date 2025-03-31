<!DOCTYPE html>
<html>

<head>
    <title>TEDxJumeirahBeachPark Confirmation Mail</title>
</head>

<body>
    <p>{{ $data['title'] }}</p>
    <p>Thank you for registering your interest in our event. We appreciate your time and enthusiasm.</p>
    <p>Our team is carefully reviewing submissions and as we move through the selection process, we’ll reach out with the next steps if your application progresses.</p>

    <p>Thank you for your understanding and we appreciate your patience.</p>
    <p>We look forward to the possibility of collaborating.</p>

    <p>Best regards,</p>
    <br>
    <p>TEDxJumeirahBeachPark Team</p>
    <p>Mobile: +971 507728672</p>
    <a href="https://www.tedxjumeirahbeachpark.com/">
        <img src="{{ $message->embed(public_path('assets_main/assets/images/logo/logo-black.png')) }}" width="15%" alt="Logo">
    </a>
</body>

</html>