<!DOCTYPE html>
<html>
<head>
    <title>Inquiry Received</title>
</head>
<body style="font-family: Arial, sans-serif; text-align: center; background-color: #f4f4f4; padding: 20px;">
    <div style="max-width: 500px; margin: auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0px 0px 10px rgba(0,0,0,0.1);">
        <div style="width:100%;display:block;background:black;padding:15px;margin-bottom:25px;box-sizing:border-box"> 
            <img src="https://grepublichub.store/img/logo.png" alt="SUPER RECHARGE" style="width: 100%; max-width: 120px; display: block; margin: 0 auto;">
        </div>
        <h2>Thank You, {{ $name }}!</h2>
        <p>We have received your inquiry and will get back to you soon.</p>
        <p><strong>Your Message:</strong></p>
        <blockquote style="font-style: italic; color: #555;">"{{ $content }}"</blockquote>
        <p>We appreciate your patience.</p>
        <p style="font-size: 12px; color: #888;">If you have any urgent concerns, please contact us directly.</p>
    </div>
</body>
</html>
