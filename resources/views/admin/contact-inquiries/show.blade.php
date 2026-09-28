<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact Enquiry - Rainbow Colors</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f7f5fb;
            color: #292345;
        }

        .admin-header {
            min-height: 76px;
            padding: 0 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #292345;
        }

        .admin-header img {
            width: 180px;
            max-width: 100%;
        }

        .admin-header__actions {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .admin-header a,
        .logout-button {
            padding: 10px 18px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            background: transparent;
            color: #ffffff;
            text-decoration: none;
            font-size: 14px;
            cursor: pointer;
        }

        .logout-button {
            background: #ff4f9a;
            border-color: #ff4f9a;
        }

        .admin-content {
            max-width: 900px;
            margin: 0 auto;
            padding: 45px 30px;
        }

        .page-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 25px;
        }

        .page-top h1 {
            margin: 0;
            font-size: 30px;
            font-weight: 800;
        }

        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 10px 16px;
            border-radius: 8px;
            background: #292345;
            color: #ffffff;
            text-decoration: none;
            font-size: 13px;
        }

        .inquiry-card {
            background: #ffffff;
            border-radius: 14px;
            box-shadow: 0 10px 35px rgba(41, 35, 69, 0.08);
            overflow: hidden;
        }

        .inquiry-card__header {
            padding: 22px 25px;
            background: #292345;
            color: #ffffff;
        }

        .inquiry-card__header h2 {
            margin: 0 0 6px;
            font-size: 20px;
        }

        .inquiry-card__header span {
            color: #c8c4d8;
            font-size: 13px;
        }

        .inquiry-details {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 0;
        }

        .detail-item {
            padding: 20px 25px;
            border-bottom: 1px solid #eeeaf4;
        }

        .detail-item:nth-child(odd) {
            border-right: 1px solid #eeeaf4;
        }

        .detail-item--full {
            grid-column: 1 / -1;
            border-right: 0 !important;
        }

        .detail-label {
            display: block;
            margin-bottom: 7px;
            color: #77738a;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.6px;
        }

        .detail-value {
            color: #292345;
            font-size: 15px;
            line-height: 1.6;
            word-break: break-word;
        }

        .detail-value a {
            color: #292345;
            text-decoration: none;
        }

        .detail-value a:hover {
            color: #ff4f9a;
        }

        .message-box {
            padding: 16px;
            border-radius: 8px;
            background: #f7f5fb;
            white-space: pre-wrap;
        }

        .inquiry-actions {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 10px;
            padding: 20px 25px;
            border-top: 1px solid #eeeaf4;
        }

        .delete-button {
            padding: 10px 16px;
            border: 0;
            border-radius: 8px;
            background: #ffe8ef;
            color: #d72f67;
            cursor: pointer;
            font-size: 13px;
            font-weight: 600;
        }

        @media (max-width: 700px) {
            .admin-header {
                padding: 0 20px;
            }

            .admin-content {
                padding: 30px 20px;
            }

            .page-top {
                align-items: flex-start;
                flex-direction: column;
            }

            .inquiry-details {
                grid-template-columns: 1fr;
            }

            .detail-item:nth-child(odd) {
                border-right: 0;
            }

            .detail-item--full {
                grid-column: auto;
            }
        }

        @media (max-width: 575px) {
            .admin-header {
                min-height: 70px;
                padding: 0 15px;
            }

            .admin-header img {
                width: 145px;
            }

            .admin-header__actions a {
                display: none;
            }

            .admin-content {
                padding: 25px 15px;
            }

            .page-top h1 {
                font-size: 26px;
            }

            .inquiry-card__header,
            .detail-item,
            .inquiry-actions {
                padding-left: 18px;
                padding-right: 18px;
            }
        }
    </style>
</head>

<body>

<header class="admin-header">

    <img
        src="{{ asset('assets/front/images/rainbow/logo.png') }}"
        alt="Rainbow Colors"
    >

    <div class="admin-header__actions">

        <a href="{{ route('admin.dashboard') }}">
            Dashboard
        </a>

        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf

            <button type="submit" class="logout-button">
                Logout
            </button>
        </form>

    </div>

</header>


<main class="admin-content">

    <div class="page-top">

        <h1>Contact Enquiry</h1>

        <a
            href="{{ route('admin.contact-inquiries.index') }}"
            class="back-button"
        >
            ← Back to Enquiries
        </a>

    </div>


    <div class="inquiry-card">

        <div class="inquiry-card__header">

            <h2>
                {{ $contactInquiry->name }}
            </h2>

            <span>
                Received on
                {{ $contactInquiry->created_at->format('d M Y, h:i A') }}
            </span>

        </div>


        <div class="inquiry-details">

            <div class="detail-item">

                <span class="detail-label">
                    Full Name
                </span>

                <div class="detail-value">
                    {{ $contactInquiry->name }}
                </div>

            </div>


            <div class="detail-item">

                <span class="detail-label">
                    Subject
                </span>

                <div class="detail-value">
                    {{ $contactInquiry->subject ?: 'General Enquiry' }}
                </div>

            </div>


            <div class="detail-item">

                <span class="detail-label">
                    Email Address
                </span>

                <div class="detail-value">

                    <a href="mailto:{{ $contactInquiry->email }}">
                        {{ $contactInquiry->email }}
                    </a>

                </div>

            </div>


            <div class="detail-item">

                <span class="detail-label">
                    Phone Number
                </span>

                <div class="detail-value">

                    <a href="tel:{{ $contactInquiry->phone }}">
                        {{ $contactInquiry->phone }}
                    </a>

                </div>

            </div>


            <div class="detail-item detail-item--full">

                <span class="detail-label">
                    Message
                </span>

                <div class="detail-value">

                    <div class="message-box">
                        {{ $contactInquiry->message ?: 'No message provided.' }}
                    </div>

                </div>

            </div>

        </div>


        <div class="inquiry-actions">

            <form
                method="POST"
                action="{{ route('admin.contact-inquiries.destroy', $contactInquiry) }}"
                onsubmit="return confirm('Are you sure you want to delete this enquiry?');"
            >

                @csrf
                @method('DELETE')

                <button type="submit" class="delete-button">
                    Delete Enquiry
                </button>

            </form>

        </div>

    </div>

</main>

</body>
</html>