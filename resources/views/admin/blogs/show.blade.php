<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $blog->title }} | Rainbow Colors</title>

    <link rel="shortcut icon"
          href="{{ asset('assets/front/images/rainbow/favicon-y.png') }}"
          type="image/x-icon">

    <style>
        :root {
            --purple: #292345;
            --yellow: #FDD200;
            --pink: #FF4F9A;
            --blue: #20A4F3;
            --light: #F7F5FB;
            --text: #292345;
            --muted: #77728A;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: var(--light);
            color: var(--text);
            font-family: Arial, sans-serif;
        }

        .admin-header {
            height: 77px;
            padding: 0 34px;
            background: var(--purple);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .admin-logo img {
            width: 175px;
            display: block;
        }

        .admin-actions {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .admin-actions a,
        .admin-actions button {
            border: 0;
            text-decoration: none;
            cursor: pointer;
            padding: 12px 18px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 700;
        }

        .dashboard-btn {
            color: #fff;
            background: rgba(255, 255, 255, .12);
        }

        .edit-btn {
            color: var(--purple);
            background: var(--yellow);
        }

        .logout-btn {
            color: var(--purple);
            background: var(--yellow);
        }

        .page {
            max-width: 1000px;
            margin: 45px auto 80px;
            padding: 0 20px;
        }

        .top-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            gap: 15px;
        }

        .back-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 18px;
            border-radius: 8px;
            background: #fff;
            color: var(--purple);
            text-decoration: none;
            font-weight: 700;
            border: 1px solid #e5e1ef;
        }

        .preview-label {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            color: var(--muted);
            font-size: 13px;
            font-weight: 700;
        }

        .preview-label span {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--yellow);
        }

        .blog-card {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 45px rgba(41, 35, 69, .08);
        }

        .featured-image {
            width: 100%;
            height: 430px;
            background: #eeeaf5;
            overflow: hidden;
        }

        .featured-image img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
        }

        .blog-content {
            padding: 45px 55px 60px;
        }

        .blog-meta {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
        }

        .category {
            display: inline-flex;
            padding: 7px 12px;
            border-radius: 30px;
            background: rgba(253, 210, 0, .16);
            color: #806900;
            font-size: 12px;
            font-weight: 800;
        }

        .status {
            display: inline-flex;
            padding: 7px 12px;
            border-radius: 30px;
            font-size: 12px;
            font-weight: 800;
        }

        .status.draft {
            background: #fff4cf;
            color: #856d00;
        }

        .status.published {
            background: #e4f8ec;
            color: #18824a;
        }

        .date {
            color: var(--muted);
            font-size: 13px;
        }

        .blog-title {
            margin: 0 0 18px;
            font-size: clamp(34px, 5vw, 58px);
            line-height: 1.08;
            letter-spacing: -1.5px;
            font-weight: 800;
            color: var(--purple);
        }

        .author {
            margin-bottom: 30px;
            color: var(--muted);
            font-size: 14px;
        }

        .author strong {
            color: var(--purple);
        }

        .excerpt {
            padding: 22px 25px;
            margin-bottom: 35px;
            border-left: 4px solid var(--yellow);
            background: #faf9fd;
            color: #575269;
            font-size: 17px;
            line-height: 1.75;
            border-radius: 0 10px 10px 0;
        }

        .article-content {
            color: #4d485d;
            font-size: 16px;
            line-height: 1.85;
        }

        .article-content h2 {
            margin: 40px 0 15px;
            color: var(--purple);
            font-size: 30px;
            line-height: 1.25;
        }

        .article-content h3 {
            margin: 32px 0 12px;
            color: var(--purple);
            font-size: 23px;
            line-height: 1.3;
        }

        .article-content p {
            margin: 0 0 20px;
        }

        .article-content strong {
            color: var(--purple);
        }

        .article-content ul,
        .article-content ol {
            margin: 0 0 25px;
            padding-left: 25px;
        }

        .article-content li {
            margin-bottom: 8px;
        }

        .article-content blockquote {
            margin: 25px 0;
            padding: 18px 22px;
            border-left: 4px solid var(--pink);
            background: #fff4fa;
            color: #5d5360;
            font-style: italic;
        }

        .article-content pre {
            padding: 18px;
            overflow-x: auto;
            border-radius: 10px;
            background: var(--purple);
            color: #fff;
        }

        .article-content a {
            color: #1685c5;
            text-decoration: underline;
        }

        .article-content img {
            max-width: 100%;
            height: auto;
            border-radius: 12px;
        }

        .blog-footer {
            margin-top: 45px;
            padding-top: 25px;
            border-top: 1px solid #e8e4ef;
            color: var(--muted);
            font-size: 13px;
        }

        @media (max-width: 767px) {
            .admin-header {
                padding: 0 16px;
            }

            .admin-logo img {
                width: 135px;
            }

            .admin-actions a,
            .admin-actions button {
                padding: 10px 12px;
                font-size: 12px;
            }

            .dashboard-btn {
                display: none;
            }

            .page {
                margin-top: 30px;
            }

            .top-actions {
                align-items: flex-start;
                flex-direction: column;
            }

            .featured-image {
                height: 260px;
            }

            .blog-content {
                padding: 30px 22px 40px;
            }

            .blog-title {
                font-size: 36px;
            }

            .article-content {
                font-size: 15px;
            }
        }
    </style>
</head>

<body>

<header class="admin-header">

    <a href="{{ route('admin.dashboard') }}" class="admin-logo">
        <img
            src="{{ asset('assets/front/images/rainbow/logo.png') }}"
            alt="Rainbow Colors"
        >
    </a>

    <div class="admin-actions">

        <a
            href="{{ route('admin.dashboard') }}"
            class="dashboard-btn"
        >
            Dashboard
        </a>

        <a
            href="{{ route('admin.blogs.edit', $blog->id) }}"
            class="edit-btn"
        >
            Edit Blog
        </a>

        <form
            action="{{ route('admin.logout') }}"
            method="POST"
        >
            @csrf

            <button
                type="submit"
                class="logout-btn"
            >
                Logout
            </button>
        </form>

    </div>

</header>

<main class="page">

    <div class="top-actions">

        <a
            href="{{ route('admin.blogs.index') }}"
            class="back-btn"
        >
            ← Back to Blogs
        </a>

        <div class="preview-label">
            <span></span>
            Admin Preview
        </div>

    </div>

    <article class="blog-card">

        @if ($blog->featured_image)

            <div class="featured-image">
                <img
                    src="{{ asset('storage/' . $blog->featured_image) }}"
                    alt="{{ $blog->title }}"
                >
            </div>

        @endif

        <div class="blog-content">

            <div class="blog-meta">

                @if ($blog->category)
                    <span class="category">
                        {{ $blog->category }}
                    </span>
                @endif

                <span class="status {{ $blog->status }}">
                    {{ ucfirst($blog->status) }}
                </span>

                @if ($blog->published_at)
                    <span class="date">
                        {{ $blog->published_at->format('d M Y') }}
                    </span>
                @endif

            </div>

            <h1 class="blog-title">
                {{ $blog->title }}
            </h1>

            @if ($blog->author)
                <div class="author">
                    By <strong>{{ $blog->author }}</strong>
                </div>
            @endif

            @if ($blog->excerpt)
                <div class="excerpt">
                    {{ $blog->excerpt }}
                </div>
            @endif

            <div class="article-content">
                {!! $blog->content !!}
            </div>

            <div class="blog-footer">
                Last updated:
                {{ $blog->updated_at->format('d M Y, h:i A') }}
            </div>

        </div>

    </article>

</main>

</body>
</html>