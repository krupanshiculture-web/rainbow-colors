<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Contact Enquiry</title>
</head>
<body style="font-family: Arial, sans-serif; background: #f7f5fb; padding: 30px;">

    <div style="max-width: 650px; margin: auto; background: #ffffff; padding: 30px; border-radius: 12px;">

        <h2 style="color: #292345; margin-top: 0;">
            New Rainbow Contact Enquiry
        </h2>

        <p style="color: #666;">
            A new enquiry has been submitted through the Rainbow Colors website.
        </p>

        <hr>

        <p>
            <strong>Name:</strong>
            {{ $inquiry['name'] }}
        </p>

        <p>
            <strong>Email:</strong>
            {{ $inquiry['email'] }}
        </p>

        <p>
            <strong>Phone:</strong>
            {{ $inquiry['phone'] }}
        </p>

        <p>
            <strong>Subject:</strong>
            {{ $inquiry['subject'] ?: 'Not specified' }}
        </p>

        <p>
            <strong>Message:</strong>
        </p>

        <div style="background: #f7f5fb; padding: 15px; border-radius: 8px;">
            {{ $inquiry['message'] ?: 'No message provided.' }}
        </div>

    </div>

</body>
</html>