<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Distributor Enquiry - Rainbow Colors</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #f5f3fa;
            font-family: Arial, sans-serif;
            color: #292345;
        }

        .admin-header {
            height: 75px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 35px;
            background: #292345;
        }

        .admin-header img {
            width: 170px;
            height: auto;
        }

        .admin-header-actions {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .header-button {
            display: inline-flex;
            align-items: center;
            padding: 10px 16px;
            border-radius: 8px;
            background: #FDD200;
            color: #292345;
            text-decoration: none;
            font-size: 13px;
            font-weight: 700;
        }

        .logout-button {
            border: 0;
            padding: 11px 18px;
            border-radius: 8px;
            background: #fff;
            color: #292345;
            font-weight: 700;
            cursor: pointer;
        }

        .admin-content {
            padding: 45px;
        }

        .page-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 25px;
        }

        .page-top h1 {
            margin: 0 0 7px;
            font-size: 32px;
        }

        .page-top p {
            margin: 0;
            color: #777;
        }

        .back-button {
            display: inline-flex;
            align-items: center;
            padding: 11px 18px;
            border-radius: 8px;
            background: #292345;
            color: #fff;
            text-decoration: none;
            font-size: 13px;
            font-weight: 700;
        }

        .details-card {
            padding: 30px;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 10px 30px rgba(41, 35, 69, .08);
        }

        .details-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 24px;
        }

        .detail-item {
            padding: 18px;
            border-radius: 10px;
            background: #f8f7fb;
        }

        .detail-item label {
            display: block;
            margin-bottom: 7px;
            color: #888;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .5px;
        }

        .detail-item p {
            margin: 0;
            color: #292345;
            font-size: 14px;
            line-height: 1.6;
            word-break: break-word;
        }

        .message-item {
            grid-column: 1 / -1;
        }

        .message-box {
            min-height: 130px;
            padding: 18px;
            border-radius: 10px;
            background: #f8f7fb;
            color: #292345;
            font-size: 14px;
            line-height: 1.7;
            white-space: pre-wrap;
        }

        .delete-area {
            margin-top: 25px;
            padding-top: 25px;
            border-top: 1px solid #eee;
        }

        .delete-button {
            border: 0;
            padding: 11px 18px;
            border-radius: 8px;
            background: #FF4F9A;
            color: #fff;
            font-size: 13px;
            font-weight: 700;
            cursor: pointer;
        }

        .contact-link {
            color: #292345;
            text-decoration: none;
            font-weight: 600;
        }

        .contact-link:hover {
            color: #20A4F3;
            text-decoration: underline;
        }

        @media (max-width: 767px) {
            .admin-header {
                padding: 0 20px;
            }

            .admin-header img {
                width: 140px;
            }

            .header-button {
                display: none;
            }

            .admin-content {
                padding: 30px 20px;
            }

            .page-top {
                align-items: flex-start;
                flex-direction: column;
            }

            .page-top h1 {
                font-size: 26px;
            }

            .details-card {
                padding: 20px;
            }

            .details-grid {
                grid-template-columns: 1fr;
            }

            .message-item {
                grid-column: auto;
            }
        }
    </style>
</head>

<body>

    <header class="admin-header">

        <img src="{{ asset('assets/front/images/rainbow/logo.png') }}" alt="Rainbow Colors">

        <div class="admin-header-actions">

            <a href="{{ route('admin.dashboard') }}" class="header-button">
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

            <div>
                <h1>Distributor Enquiry</h1>
                <p>Complete enquiry details</p>
            </div>

            <a href="{{ route('admin.distributor-inquiries.index') }}" class="back-button">
                Back to Enquiries
            </a>

        </div>

        <div class="details-card">

            <div class="details-grid">

                <div class="detail-item">
                    <label>Full Name</label>
                    <p>{{ $distributorInquiry->name }}</p>
                </div>

                <div class="detail-item">
                    <label>Company Name</label>
                    <p>{{ $distributorInquiry->company ?: '-' }}</p>
                </div>

                <div class="detail-item">
                    <label>Mobile Number</label>
                    <p>
                        <a href="tel:{{ $distributorInquiry->phone }}" class="contact-link">
                            {{ $distributorInquiry->phone }}
                        </a>
                    </p>
                </div>

                <div class="detail-item">
                    <label>Email Address</label>
                    <p>
                        <a href="mailto:{{ $distributorInquiry->email }}" class="contact-link">
                            {{ $distributorInquiry->email }}
                        </a>
                    </p>
                </div>

                <div class="detail-item">
                    <label>City</label>
                    <p>{{ $distributorInquiry->city ?: '-' }}</p>
                </div>

                <div class="detail-item">
                    <label>State</label>
                    <p>{{ $distributorInquiry->state ?: '-' }}</p>
                </div>

                <div class="detail-item">
                    <label>Business Type</label>
                    <p>
                        {{ $distributorInquiry->business_type ? str_replace('-', ' ', $distributorInquiry->business_type) : '-' }}
                    </p>
                </div>

                <div class="detail-item">
                    <label>Submitted On</label>
                    <p>
                        {{ $distributorInquiry->created_at->format('d M Y, h:i A') }}
                    </p>
                </div>

                <div class="message-item">

                    <div class="detail-item">
                        <label>Message</label>

                        <div class="message-box">
                            {{ $distributorInquiry->message ?: 'No message provided.' }}
                        </div>
                    </div>

                </div>

            </div>

            <div class="delete-area">

                <form action="{{ route('admin.distributor-inquiries.destroy', $distributorInquiry) }}" method="POST"
                    onsubmit="return confirm('Are you sure you want to delete this enquiry?')">
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
