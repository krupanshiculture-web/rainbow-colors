<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Manage Blogs - Rainbow Colors</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #f5f3fa;
            color: #292345;
            font-family: Arial, sans-serif;
        }

        .admin-header {
            min-height: 75px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            padding: 0 35px;
            background: #292345;
        }

        .admin-header img {
            width: 170px;
            height: auto;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .header-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 42px;
            padding: 0 16px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 700;
        }

        .header-button--dashboard {
            background: rgba(255, 255, 255, .1);
            color: #fff;
        }

        .header-button--logout {
            border: 0;
            background: #FDD200;
            color: #292345;
            cursor: pointer;
        }

        .admin-content {
            max-width: 1400px;
            margin: 0 auto;
            padding: 45px 30px;
        }

        .page-heading {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            gap: 25px;
            margin-bottom: 30px;
        }

        .page-heading h1 {
            margin: 0 0 7px;
            font-size: 34px;
            line-height: 1.1;
        }

        .page-heading p {
            margin: 0;
            color: #777;
            font-size: 14px;
        }

        .add-blog-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 48px;
            padding: 0 20px;
            border-radius: 10px;
            background: #FDD200;
            color: #292345;
            text-decoration: none;
            font-size: 14px;
            font-weight: 800;
        }

        .alert-success {
            margin-bottom: 22px;
            padding: 14px 18px;
            border-radius: 10px;
            background: #eaf9f0;
            color: #187443;
            font-size: 14px;
            font-weight: 600;
        }

        .blog-table-wrap {
            overflow-x: auto;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 10px 35px rgba(41, 35, 69, .08);
        }

        .blog-table {
            width: 100%;
            min-width: 900px;
            border-collapse: collapse;
        }

        .blog-table th {
            padding: 18px 20px;
            background: #292345;
            color: #fff;
            text-align: left;
            font-size: 12px;
            font-weight: 800;
            letter-spacing: .7px;
            text-transform: uppercase;
        }

        .blog-table th:first-child {
            border-radius: 18px 0 0 0;
        }

        .blog-table th:last-child {
            border-radius: 0 18px 0 0;
        }

        .blog-table td {
            padding: 17px 20px;
            border-bottom: 1px solid #eeeaf5;
            vertical-align: middle;
            font-size: 14px;
        }

        .blog-table tbody tr:last-child td {
            border-bottom: 0;
        }

        .blog-table tbody tr:hover {
            background: #faf9fd;
        }

        .blog-image {
            width: 82px;
            height: 58px;
            overflow: hidden;
            border-radius: 8px;
            background: #eeeaf5;
        }

        .blog-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .blog-image--empty {
            display: flex;
            align-items: center;
            justify-content: center;
            color: #aaa;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .blog-title {
            max-width: 280px;
            color: #292345;
            font-weight: 800;
            line-height: 1.4;
        }

        .blog-slug {
            margin-top: 4px;
            color: #999;
            font-size: 12px;
        }

        .category {
            display: inline-flex;
            padding: 7px 10px;
            border-radius: 20px;
            background: #f0eef7;
            color: #5a4e8c;
            font-size: 12px;
            font-weight: 700;
        }

        .status {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 7px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 800;
        }

        .status::before {
            content: "";
            width: 7px;
            height: 7px;
            border-radius: 50%;
        }

        .status--published {
            background: #eaf9f0;
            color: #187443;
        }

        .status--published::before {
            background: #36C96F;
        }

        .status--draft {
            background: #fff6d6;
            color: #856700;
        }

        .status--draft::before {
            background: #FDD200;
        }

        .date {
            color: #666;
            line-height: 1.5;
        }

        .actions {
            display: flex;
            align-items: center;
            gap: 7px;
        }

        .action-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 36px;
            padding: 0 11px;
            border-radius: 7px;
            text-decoration: none;
            font-size: 12px;
            font-weight: 800;
        }

        .action-button--edit {
            background: #eeeaf8;
            color: #292345;
        }

        .action-button--view {
            background: #eaf6fd;
            color: #1475a8;
        }

        .action-button--delete {
            border: 0;
            background: #fff0f0;
            color: #c33;
            cursor: pointer;
        }

        .empty-state {
            padding: 70px 30px;
            text-align: center;
        }

        .empty-state h2 {
            margin: 0 0 8px;
            font-size: 22px;
        }

        .empty-state p {
            margin: 0 0 22px;
            color: #777;
        }

        .pagination {
            margin-top: 25px;
        }

        @media (max-width: 767px) {
            .admin-header {
                padding: 15px 20px;
                flex-wrap: wrap;
            }

            .admin-header img {
                width: 145px;
            }

            .admin-content {
                padding: 30px 18px;
            }

            .page-heading {
                align-items: flex-start;
                flex-direction: column;
            }

            .add-blog-button {
                width: 100%;
            }
        }
    </style>
</head>

<body>

<header class="admin-header">

    <a href="{{ route('admin.dashboard') }}">
        <img
            src="{{ asset('assets/front/images/rainbow/logo.png') }}"
            alt="Rainbow Colors"
        >
    </a>

    <div class="header-actions">

        <a
            href="{{ route('admin.dashboard') }}"
            class="header-button header-button--dashboard"
        >
            Dashboard
        </a>

        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf

            <button
                type="submit"
                class="header-button header-button--logout"
            >
                Logout
            </button>
        </form>

    </div>

</header>

<main class="admin-content">

    <div class="page-heading">

        <div>
            <h1>Blog Management</h1>

            <p>
                Create, edit and manage Rainbow Colors articles.
            </p>
        </div>

        <a
            href="{{ route('admin.blogs.create') }}"
            class="add-blog-button"
        >
            + Add New Blog
        </a>

    </div>

    @if (session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($blogs->count())

        <div class="blog-table-wrap">

            <table class="blog-table">

                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Blog</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Published</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($blogs as $blog)

                        <tr>

                            <td>
                                @if ($blog->featured_image)

                                    <div class="blog-image">
                                        <img
                                            src="{{ asset('storage/' . $blog->featured_image) }}"
                                            alt="{{ $blog->title }}"
                                        >
                                    </div>

                                @else

                                    <div class="blog-image blog-image--empty">
                                        No Image
                                    </div>

                                @endif
                            </td>

                            <td>

                                <div class="blog-title">
                                    {{ $blog->title }}
                                </div>

                                <div class="blog-slug">
                                    /{{ $blog->slug }}
                                </div>

                            </td>

                            <td>

                                @if ($blog->category)
                                    <span class="category">
                                        {{ $blog->category }}
                                    </span>
                                @else
                                    —
                                @endif

                            </td>

                            <td>

                                @if ($blog->status === 'published')

                                    <span class="status status--published">
                                        Published
                                    </span>

                                @else

                                    <span class="status status--draft">
                                        Draft
                                    </span>

                                @endif

                            </td>

                            <td>

                                <div class="date">

                                    @if ($blog->published_at)
                                        {{ $blog->published_at->format('d M Y') }}
                                    @else
                                        Not published
                                    @endif

                                </div>

                            </td>

                            <td>

                                <div class="actions">

                                    <a
                                        href="{{ route('admin.blogs.edit', $blog) }}"
                                        class="action-button action-button--edit"
                                    >
                                        Edit
                                    </a>

                                    <a
                                        href="{{ route('admin.blogs.show', $blog) }}"
                                        class="action-button action-button--view"
                                    >
                                        View
                                    </a>

                                    <form
                                        method="POST"
                                        action="{{ route('admin.blogs.destroy', $blog) }}"
                                        onsubmit="return confirm('Are you sure you want to delete this blog?');"
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
            {{ $blogs->links() }}
        </div>

    @else

        <div class="blog-table-wrap">

            <div class="empty-state">

                <h2>No Blogs Yet</h2>

                <p>
                    Start building your Rainbow Colors blog by creating your first article.
                </p>

                <a
                    href="{{ route('admin.blogs.create') }}"
                    class="add-blog-button"
                >
                    + Create First Blog
                </a>

            </div>

        </div>

    @endif

</main>

</body>
</html>