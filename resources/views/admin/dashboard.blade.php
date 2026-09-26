<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard - Rainbow Colors</title>

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

        .logout-button {
            border: 0;
            padding: 11px 18px;
            border-radius: 8px;
            background: #FDD200;
            color: #292345;
            font-weight: 700;
            cursor: pointer;
        }

        .admin-content {
            padding: 45px;
        }

        .admin-content h1 {
            margin: 0 0 8px;
            font-size: 32px;
        }

        .admin-content > p {
            margin: 0;
            color: #777;
        }

        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
            margin-top: 30px;
        }

        .dashboard-card {
            padding: 28px;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 10px 30px rgba(41, 35, 69, .08);
        }

        .dashboard-card span {
            display: block;
            margin-bottom: 10px;
            color: #888;
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .dashboard-card h2 {
            margin: 0;
            font-size: 30px;
        }

        .dashboard-card--blog {
            border-top: 4px solid #FDD200;
        }

        .dashboard-card--products {
            border-top: 4px solid #20A4F3;
        }

        .dashboard-card--website {
            border-top: 4px solid #FF4F9A;
        }

        .dashboard-actions {
            margin-top: 30px;
            padding: 30px;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 10px 30px rgba(41, 35, 69, .08);
        }

        .dashboard-actions h2 {
            margin: 0 0 20px;
        }

        .action-button {
            display: inline-flex;
            align-items: center;
            padding: 12px 20px;
            margin-right: 10px;
            border-radius: 9px;
            background: #292345;
            color: #fff;
            text-decoration: none;
            font-size: 14px;
            font-weight: 700;
        }

        .action-button:hover {
            background: #FDD200;
            color: #292345;
        }

        @media (max-width: 767px) {
            .admin-header {
                padding: 0 20px;
            }

            .admin-header img {
                width: 140px;
            }

            .admin-content {
                padding: 30px 20px;
            }

            .dashboard-grid {
                grid-template-columns: 1fr;
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

    <form method="POST" action="{{ route('admin.logout') }}">
        @csrf

        <button type="submit" class="logout-button">
            Logout
        </button>
    </form>

</header>

<main class="admin-content">

    <h1>Welcome, {{ auth()->user()->name }}</h1>

    <p>Rainbow Colors Admin Panel</p>

    <div class="dashboard-grid">

        <div class="dashboard-card dashboard-card--blog">
            <span>Blog Posts</span>
            <h2>{{ \App\Models\Blog::count() }}</h2>
        </div>

        <div class="dashboard-card dashboard-card--products">
            <span>Products</span>
            <h2>3</h2>
        </div>

        <div class="dashboard-card dashboard-card--website">
            <span>Website</span>
            <h2>Live</h2>
        </div>

    </div>

    <div class="dashboard-actions">

        <h2>Quick Actions</h2>

        <a href="{{ route('admin.blogs.index') }}" class="action-button">
            Manage Blogs
        </a>

        <a
            href="{{ url('/') }}"
            target="_blank"
            class="action-button"
        >
            View Website
        </a>

    </div>

</main>

</body>
</html>