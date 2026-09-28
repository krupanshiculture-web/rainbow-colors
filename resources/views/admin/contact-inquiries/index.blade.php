<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact Enquiries - Rainbow Colors</title>

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
            max-width: 1400px;
            margin: 0 auto;
            padding: 45px 30px;
        }

        .page-top {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            gap: 25px;
            margin-bottom: 30px;
        }

        .page-top h1 {
            margin: 0 0 8px;
            font-size: 32px;
            font-weight: 800;
        }

        .page-top p {
            margin: 0;
            color: #77738a;
            font-size: 14px;
        }

        .search-box {
            display: flex;
            gap: 10px;
            width: min(460px, 100%);
        }

        .search-box input {
            flex: 1;
            min-width: 0;
            height: 44px;
            padding: 0 14px;
            border: 1px solid #ddd9e8;
            border-radius: 8px;
            outline: none;
            background: #ffffff;
        }

        .search-box input:focus {
            border-color: #5a4e8c;
        }

        .search-box button {
            height: 44px;
            padding: 0 20px;
            border: 0;
            border-radius: 8px;
            background: #292345;
            color: #ffffff;
            cursor: pointer;
        }

        .table-card {
            overflow: hidden;
            background: #ffffff;
            border-radius: 14px;
            box-shadow: 0 10px 35px rgba(41, 35, 69, 0.08);
        }

        .table-card__top {
            padding: 18px 22px;
            border-bottom: 1px solid #eeeaf4;
            color: #77738a;
            font-size: 14px;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            min-width: 1050px;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 15px 18px;
            border-bottom: 1px solid #eeeaf4;
            text-align: left;
            vertical-align: middle;
            font-size: 13px;
        }

        th {
            background: #fbfaff;
            color: #5a5474;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        td {
            color: #45405f;
        }

        td strong {
            color: #292345;
        }

        td a {
            color: #292345;
            text-decoration: none;
        }

        td a:hover {
            color: #ff4f9a;
        }

        .subject-badge {
            display: inline-flex;
            align-items: center;
            padding: 6px 9px;
            border-radius: 20px;
            background: #f0edfa;
            color: #5a4e8c;
            font-size: 11px;
            font-weight: 700;
        }

        .action-buttons {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .action-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 7px 11px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 12px;
            font-weight: 600;
        }

        .action-button--view {
            background: #292345;
            color: #ffffff;
        }

        .action-button--delete {
            border: 0;
            background: #ffe8ef;
            color: #d72f67;
            cursor: pointer;
        }

        .empty-state {
            padding: 60px 20px;
            text-align: center;
            color: #77738a;
        }

        .pagination {
            padding: 20px 22px;
        }

        @media (max-width: 900px) {
            .admin-header {
                padding: 0 20px;
            }

            .admin-content {
                padding: 30px 20px;
            }

            .page-top {
                flex-direction: column;
                align-items: stretch;
            }

            .search-box {
                width: 100%;
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

            .search-box {
                flex-direction: column;
            }

            .search-box button {
                width: 100%;
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

        <div>
            <h1>Contact Enquiries</h1>

            <p>
                Manage enquiries received through the website contact form.
            </p>
        </div>

        <form
            method="GET"
            action="{{ route('admin.contact-inquiries.index') }}"
            class="search-box"
        >

            <input
                type="text"
                name="search"
                value="{{ $search }}"
                placeholder="Search name, email, phone or subject..."
            >

            <button type="submit">
                Search
            </button>

        </form>

    </div>


    <div class="table-card">

        <div class="table-card__top">

            @if($search)
                Showing search results for:
                <strong>{{ $search }}</strong>

                — {{ $inquiries->total() }} result(s)

            @else
                Total Contact Enquiries:
                <strong>{{ $inquiries->total() }}</strong>
            @endif

        </div>


        @if(session('success'))

            <div style="
                margin: 20px;
                padding: 14px 16px;
                border-radius: 8px;
                background: #eaf9f0;
                color: #21864b;
                font-size: 14px;
            ">
                {{ session('success') }}
            </div>

        @endif


        @if($inquiries->count())

            <div class="table-wrapper">

                <table>

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Subject</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach($inquiries as $inquiry)

                            <tr>

                                <td>
                                    {{ $inquiries->firstItem() + $loop->index }}
                                </td>

                                <td>
                                    <strong>
                                        {{ $inquiry->name }}
                                    </strong>
                                </td>

                                <td>
                                    <a href="mailto:{{ $inquiry->email }}">
                                        {{ $inquiry->email }}
                                    </a>
                                </td>

                                <td>
                                    <a href="tel:{{ $inquiry->phone }}">
                                        {{ $inquiry->phone }}
                                    </a>
                                </td>

                                <td>

                                    <span class="subject-badge">
                                        {{ $inquiry->subject ?: 'General Enquiry' }}
                                    </span>

                                </td>

                                <td>
                                    {{ $inquiry->created_at->format('d M Y, h:i A') }}
                                </td>

                                <td>

                                    <div class="action-buttons">

                                        <a
                                            href="{{ route('admin.contact-inquiries.show', $inquiry) }}"
                                            class="action-button action-button--view"
                                        >
                                            View
                                        </a>

                                        <form
                                            method="POST"
                                            action="{{ route('admin.contact-inquiries.destroy', $inquiry) }}"
                                            onsubmit="return confirm('Are you sure you want to delete this enquiry?');"
                                        >

                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="action-button action-button--delete"
                                            >
                                                Delete
                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

            <div class="pagination">
                {{ $inquiries->links() }}
            </div>

        @else

            <div class="empty-state">
                No contact enquiries found.
            </div>

        @endif

    </div>

</main>

</body>
</html>