<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Blog | Rainbow Colors</title>

    <link rel="shortcut icon"
          href="{{ asset('assets/front/images/rainbow/favicon-y.png') }}"
          type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">

    <style>
        :root {
            --purple: #292345;
            --yellow: #FDD200;
            --light: #F7F5FB;
            --text: #292345;
            --muted: #77728A;
            --border: #E5E1EF;
            --danger: #E74C3C;
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

        .logout-btn {
            color: var(--purple);
            background: var(--yellow);
        }

        .page {
            max-width: 1100px;
            margin: 45px auto 70px;
            padding: 0 20px;
        }

        .page-heading {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            margin-bottom: 30px;
        }

        .page-heading h1 {
            margin: 0 0 7px;
            font-size: 34px;
            font-weight: 800;
        }

        .page-heading p {
            margin: 0;
            color: var(--muted);
            font-size: 15px;
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
            border: 1px solid var(--border);
        }

        .form-card {
            background: #fff;
            border-radius: 18px;
            padding: 32px;
            box-shadow: 0 12px 40px rgba(41, 35, 69, .08);
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 22px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .form-group.full {
            grid-column: 1 / -1;
        }

        label {
            font-size: 14px;
            font-weight: 700;
            color: var(--purple);
        }

        input,
        select,
        textarea {
            width: 100%;
            border: 1px solid var(--border);
            border-radius: 9px;
            padding: 13px 14px;
            font-size: 14px;
            color: var(--text);
            outline: none;
            background: #fff;
            font-family: inherit;
        }

        input:focus,
        select:focus,
        textarea:focus {
            border-color: var(--yellow);
            box-shadow: 0 0 0 3px rgba(253, 210, 0, .13);
        }

        .error {
            color: var(--danger);
            font-size: 13px;
        }

        .image-preview {
            margin-top: 5px;
        }

        .image-preview img {
            width: 190px;
            height: 120px;
            object-fit: cover;
            border-radius: 10px;
            border: 1px solid var(--border);
            display: block;
        }

        .image-note {
            margin-top: 8px;
            color: var(--muted);
            font-size: 13px;
        }

        .editor-wrap {
            border: 1px solid var(--border);
            border-radius: 9px;
            overflow: hidden;
        }

        #blogEditor {
            min-height: 380px;
            font-size: 15px;
            line-height: 1.7;
        }

        .ql-toolbar.ql-snow {
            border: 0;
            border-bottom: 1px solid var(--border);
            background: #faf9fd;
        }

        .ql-container.ql-snow {
            border: 0;
        }

        .form-actions {
            margin-top: 30px;
            padding-top: 25px;
            border-top: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 12px;
        }

        .cancel-btn,
        .save-btn {
            border: 0;
            border-radius: 9px;
            padding: 14px 23px;
            font-size: 14px;
            font-weight: 800;
            cursor: pointer;
            text-decoration: none;
        }

        .cancel-btn {
            background: #eeeaf5;
            color: var(--purple);
        }

        .save-btn {
            background: var(--yellow);
            color: var(--purple);
        }

        .old-image-label {
            margin-top: 8px;
            color: var(--muted);
            font-size: 12px;
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

            .page {
                margin-top: 30px;
            }

            .page-heading {
                align-items: flex-start;
                flex-direction: column;
            }

            .page-heading h1 {
                font-size: 28px;
            }

            .form-card {
                padding: 20px;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .form-group.full {
                grid-column: auto;
            }

            .form-actions {
                flex-direction: column-reverse;
                align-items: stretch;
            }

            .cancel-btn,
            .save-btn {
                text-align: center;
            }
        }
    </style>
</head>

<body>

<header class="admin-header">
    <a href="{{ route('admin.dashboard') }}" class="admin-logo">
        <img src="{{ asset('assets/front/images/rainbow/logo.png') }}"
             alt="Rainbow Colors">
    </a>

    <div class="admin-actions">
        <a href="{{ route('admin.dashboard') }}" class="dashboard-btn">
            Dashboard
        </a>

        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout-btn">
                Logout
            </button>
        </form>
    </div>
</header>

<main class="page">

    <div class="page-heading">
        <div>
            <h1>Edit Blog</h1>
            <p>Update your Rainbow Colors article.</p>
        </div>

        <a href="{{ route('admin.blogs.index') }}" class="back-btn">
            ← Back to Blogs
        </a>
    </div>

    <div class="form-card">

        @if ($errors->any())
            <div style="background:#fff0ef;color:#c0392b;padding:15px;border-radius:9px;margin-bottom:25px;">
                <strong>Please fix the following:</strong>

                <ul style="margin:8px 0 0 18px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form
            id="blogEditForm"
            action="{{ route('admin.blogs.update', $blog->id) }}"
            method="POST"
            enctype="multipart/form-data"
        >
            @csrf
            @method('PUT')

            <div class="form-grid">

                <div class="form-group full">
                    <label for="title">Blog Title *</label>

                    <input
                        type="text"
                        id="title"
                        name="title"
                        value="{{ old('title', $blog->title) }}"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="category">Category</label>

                    <input
                        type="text"
                        id="category"
                        name="category"
                        value="{{ old('category', $blog->category) }}"
                        placeholder="e.g. Rainbow Stories"
                    >
                </div>

                <div class="form-group">
                    <label for="author">Author</label>

                    <input
                        type="text"
                        id="author"
                        name="author"
                        value="{{ old('author', $blog->author) }}"
                        placeholder="e.g. Rainbow Colors"
                    >
                </div>

                <div class="form-group">
                    <label for="published_at">Published Date</label>

                    <input
                        type="datetime-local"
                        id="published_at"
                        name="published_at"
                        value="{{ old('published_at', $blog->published_at ? $blog->published_at->format('Y-m-d\TH:i') : '') }}"
                    >
                </div>

                <div class="form-group">
                    <label for="status">Status *</label>

                    <select id="status" name="status" required>
                        <option value="draft"
                            {{ old('status', $blog->status) === 'draft' ? 'selected' : '' }}>
                            Draft
                        </option>

                        <option value="published"
                            {{ old('status', $blog->status) === 'published' ? 'selected' : '' }}>
                            Published
                        </option>
                    </select>
                </div>

                <div class="form-group full">
                    <label for="featured_image">Featured Image</label>

                    <input
                        type="file"
                        id="featured_image"
                        name="featured_image"
                        accept=".jpg,.jpeg,.png,.webp"
                    >

                    @if ($blog->featured_image)
                        <div class="image-preview">
                            <img
                                src="{{ asset('storage/' . $blog->featured_image) }}"
                                alt="{{ $blog->title }}"
                            >

                            <div class="old-image-label">
                                Current featured image
                            </div>
                        </div>
                    @endif

                    <div class="image-note">
                        Leave empty to keep the current image. Maximum 2MB.
                    </div>
                </div>

                <div class="form-group full">
                    <label for="excerpt">Excerpt</label>

                    <textarea
                        id="excerpt"
                        name="excerpt"
                        rows="4"
                        placeholder="Short description for the blog..."
                    >{{ old('excerpt', $blog->excerpt) }}</textarea>
                </div>

                <div class="form-group full">
                    <label>Blog Content *</label>

                    <div class="editor-wrap">
                        <div id="blogEditor"></div>
                    </div>

                    <textarea
                        id="content"
                        name="content"
                        hidden
                    >{{ old('content', $blog->content) }}</textarea>
                </div>

            </div>

            <div class="form-actions">
                <a
                    href="{{ route('admin.blogs.index') }}"
                    class="cancel-btn"
                >
                    Cancel
                </a>

                <button
                    type="submit"
                    class="save-btn"
                >
                    Save Changes
                </button>
            </div>

        </form>

    </div>

</main>

<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

<script>
    const blogEditor = new Quill('#blogEditor', {
        theme: 'snow',

        modules: {
            toolbar: [
                [{ header: [2, 3, false] }],
                ['bold', 'italic', 'underline', 'strike'],
                [{ list: 'ordered' }, { list: 'bullet' }],
                [{ indent: '-1' }, { indent: '+1' }],
                [{ align: [] }],
                ['blockquote', 'code-block'],
                ['link'],
                ['clean']
            ]
        },

        placeholder: 'Write your complete blog content here...'
    });

    const contentInput = document.getElementById('content');
    const blogEditForm = document.getElementById('blogEditForm');

    const existingContent = contentInput.value.trim();

    if (existingContent) {
        blogEditor.clipboard.dangerouslyPasteHTML(existingContent);
    }

    blogEditForm.addEventListener('submit', function () {
        contentInput.value = blogEditor.root.innerHTML;
    });
</script>

</body>
</html>