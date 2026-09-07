<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Application Received</title>
</head>
<body>

    <h1>Application Received</h1>

    <p>Dear {{ $application->full_name }},</p>

    <p>
        Thank you for applying for the
        <strong>{{ $application->position }}</strong>
        position.
    </p>

    <p>
        We have successfully received your application and will review
        it together with the other applications received.
    </p>

    <p>
        If your application is shortlisted, we will contact  you using
        the contact details you provided.
    </p>

    <p>
        <strong>Application Details</strong>
    </p>

    <ul>
        <li><strong>Name:</strong> {{ $application->full_name }}</li>
        <li><strong>Position:</strong> {{ $application->position }}</li>
        <li><strong>Email:</strong> {{ $application->email }}</li>
    </ul>

    <p>
        Kind regards,<br>
        Recruitment Team
    </p>

</body>
</html>
