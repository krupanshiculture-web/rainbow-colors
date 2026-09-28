<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Distributor Enquiries - Rainbow Colors</title>

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

        .success-message {
            margin-bottom: 20px;
            padding: 14px 18px;
            border-radius: 10px;
            background: rgba(54, 201, 111, .12);
            border: 1px solid rgba(54, 201, 111, .25);
            color: #249451;
            font-size: 14px;
            font-weight: 600;
        }

        .table-card {
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 10px 30px rgba(41, 35, 69, .08);
            overflow: hidden;
        }

        .table-wrapper {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            min-width: 1050px;
            border-collapse: collapse;
        }

        th {
            padding: 17px 18px;
            background: #292345;
            color: #fff;
            text-align: left;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: .5px;
        }

        td {
            padding: 17px 18px;
            border-bottom: 1px solid #eee;
            font-size: 13px;
            vertical-align: middle;
        }

        tbody tr:hover {
            background: #faf9fd;
        }

        .business-type {
            display: inline-block;
            padding: 6px 9px;
            border-radius: 6px;
            background: #f5f3fa;
            color: #292345;
            font-size: 11px;
            font-weight: 700;
            text-transform: capitalize;
        }

        .action-buttons {
            display: flex;
            align-items: center;
            gap: 7px;
        }

        .view-button,
        .delete-button {
            border: 0;
            padding: 8px 12px;
            border-radius: 7px;
            font-size: 12px;
            font-weight: 700;
            cursor: pointer;
            text-decoration: none;
        }

        .view-button {
            background: #20A4F3;
            color: #fff;
        }

        .delete-button {
            background: #FF4F9A;
            color: #fff;
        }

        .empty-state {
            padding: 60px 20px;
            text-align: center;
            color: #888;
        }

        .pagination {
            display: flex;
            justify-content: center;
            padding: 25px;
        }

        .search-box {
            margin-bottom: 22px;
            padding: 18px;
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 10px 30px rgba(41, 35, 69, .06);
        }

        .search-box form {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .search-box input {
            flex: 1;
            min-width: 0;
            height: 44px;
            padding: 0 14px;
            border: 1px solid #e5e2ed;
            border-radius: 8px;
            outline: none;
            color: #292345;
            font-size: 13px;
        }

        .search-box input:focus {
            border-color: #FDD200;
        }

        .search-box button {
            height: 44px;
            padding: 0 20px;
            border: 0;
            border-radius: 8px;
            background: #292345;
            color: #fff;
            font-size: 13px;
            font-weight: 700;
            cursor: pointer;
        }

        .search-box button:hover {
            background: #FDD200;
            color: #292345;
        }

        .search-box a {
            display: inline-flex;
            align-items: center;
            height: 44px;
            padding: 0 16px;
            border-radius: 8px;
            background: #f5f3fa;
            color: #292345;
            text-decoration: none;
            font-size: 13px;
            font-weight: 700;
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

        .enquiry-summary {
            display: flex;
            gap: 15px;
            margin-bottom: 22px;
        }

        .enquiry-summary>div {
            min-width: 170px;
            padding: 18px 20px;
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 10px 30px rgba(41, 35, 69, .06);
        }

        .enquiry-summary span {
            display: block;
            margin-bottom: 6px;
            color: #888;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .enquiry-summary strong {
            color: #292345;
            font-size: 24px;
        }

        @media (max-width: 767px) {
            .enquiry-summary {
                flex-direction: column;
            }

            .enquiry-summary>div {
                width: 100%;
            }
        }

        @media (max-width: 767px) {
            .search-box form {
                flex-wrap: wrap;
            }

            .search-box input {
                flex-basis: 100%;
            }
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

            .page-top h1 {
                font-size: 26px;
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
                <h1>Distributor Enquiries</h1>
                <p>Manage distributor enquiries received from the website.</p>
            </div>
        </div>

        <div class="search-box">
            <form method="GET" action="{{ route('admin.distributor-inquiries.index') }}">

                <input type="text" name="search" value="{{ $search }}"
                    placeholder="Search name, company, phone, email or city...">

                <button type="submit">
                    Search
                </button>

                @if ($search)
                    <a href="{{ route('admin.distributor-inquiries.index') }}">
                        Clear
                    </a>
                @endif

            </form>
        </div>

        @if (session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        <div class="enquiry-summary">
            <div>
                <span>Total Enquiries</span>
                <strong>{{ \App\Models\DistributorInquiry::count() }}</strong>
            </div>

            @if ($search)
                <div>
                    <span>Search Results</span>
                    <strong>{{ $inquiries->total() }}</strong>
                </div>
            @endif
        </div>

        <div class="table-card">

            <div class="table-wrapper">

                <table>

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Company</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>City</th>
                            <th>Business</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($inquiries as $inquiry)
                            <tr>

                                <td>
                                    {{ $inquiries->firstItem() + $loop->index }}
                                </td>

                                <td>
                                    <strong>{{ $inquiry->name }}</strong>
                                </td>

                                <td>
                                    {{ $inquiry->company ?: '-' }}
                                </td>

                                <td>
                                    <a href="tel:{{ $inquiry->phone }}" class="contact-link">
                                        {{ $inquiry->phone }}
                                    </a>
                                </td>

                                <td>
                                    <a href="mailto:{{ $inquiry->email }}" class="contact-link">
                                        {{ $inquiry->email }}
                                    </a>
                                </td>

                                <td>
                                    {{ $inquiry->city ?: '-' }}
                                </td>

                                <td>
                                    @if ($inquiry->business_type)
                                        <span class="business-type">
                                            {{ str_replace('-', ' ', $inquiry->business_type) }}
                                        </span>
                                    @else
                                        -
                                    @endif
                                </td>

                                <td>
                                    {{ $inquiry->created_at->format('d M Y') }}
                                </td>

                                <td>

                                    <div class="action-buttons">

                                        <a href="{{ route('admin.distributor-inquiries.show', $inquiry) }}"
                                            class="view-button">
                                            View
                                        </a>

                                        <form action="{{ route('admin.distributor-inquiries.destroy', $inquiry) }}"
                                            method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this enquiry?')">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="delete-button">
                                                Delete
                                            </button>
                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="9">
                                    <div class="empty-state">
                                        No distributor enquiries found.
                                    </div>
                                </td>
                            </tr>
                        @endforelse

                    </tbody>

                </table>

            </div>

            @if ($inquiries->hasPages())
                <div class="pagination">
                    {{ $inquiries->links() }}
                </div>
            @endif

        </div>

    </main>

</body>

</html>
