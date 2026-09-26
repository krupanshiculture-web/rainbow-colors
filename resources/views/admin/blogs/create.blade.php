<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Blog - Rainbow Colors</title>

    <link
        href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css"
        rel="stylesheet"
    >

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
            min-height: 42px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0 16px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 700;
        }

        .header-button--back {
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
            max-width: 1100px;
            margin: 0 auto;
            padding: 45px 30px;
        }

        .page-heading {
            margin-bottom: 30px;
        }

        .page-heading h1 {
            margin: 0 0 8px;
            font-size: 34px;
        }

        .page-heading p {
            margin: 0;
            color: #777;
            font-size: 14px;
        }

        .form-card {
            padding: 32px;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 10px 35px rgba(41, 35, 69, .08);
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 22px;
        }

        .form-group {
            margin-bottom: 22px;
        }

        .form-group--full {
            grid-column: 1 / -1;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #292345;
            font-size: 14px;
            font-weight: 800;
        }

        .required {
            color: #d33;
        }

        .form-control {
            width: 100%;
            min-height: 48px;
            padding: 11px 14px;
            border: 1px solid #ddd8ea;
            border-radius: 9px;
            outline: none;
            background: #fff;
            color: #292345;
            font-family: inherit;
            font-size: 14px;
        }

        .form-control:focus {
            border-color: #FDD200;
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
            line-height: 1.6;
        }

        .form-help {
            margin-top: 7px;
            color: #999;
            font-size: 12px;
        }

        .image-upload {
            padding: 18px;
            border: 1px dashed #cfc8df;
            border-radius: 10px;
            background: #faf9fd;
        }

        .image-upload input {
            width: 100%;
        }

        .status-options {
            display: flex;
            gap: 12px;
        }

        .status-option {
            position: relative;
            flex: 1;
        }

        .status-option input {
            position: absolute;
            opacity: 0;
            pointer-events: none;
        }

        .status-option label {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 48px;
            margin: 0;
            padding: 0 15px;
            border: 1px solid #ddd8ea;
            border-radius: 9px;
            cursor: pointer;
            color: #555;
            font-size: 14px;
            font-weight: 700;
        }

        .status-option input:checked + label {
            border-color: #FDD200;
            background: #fff9d9;
            color: #292345;
        }

        .blog-editor {
            overflow: hidden;
            background: #fff;
            border-radius: 9px;
        }

        .blog-editor .ql-toolbar {
            border: 1px solid #ddd8ea;
            border-radius: 9px 9px 0 0;
            background: #faf9fd;
        }

        .blog-editor .ql-container {
            min-height: 320px;
            border: 1px solid #ddd8ea;
            border-top: 0;
            border-radius: 0 0 9px 9px;
            font-family: Arial, sans-serif;
            font-size: 15px;
        }

        .blog-editor .ql-editor {
            min-height: 320px;
            line-height: 1.8;
        }

        .blog-editor .ql-editor h2 {
            font-size: 26px;
            line-height: 1.3;
        }

        .blog-editor .ql-editor h3 {
            font-size: 21px;
            line-height: 1.4;
        }

        .blog-editor .ql-editor blockquote {
            margin: 20px 0;
            padding-left: 18px;
            border-left: 4px solid #FDD200;
        }

        .error-box {
            margin-bottom: 25px;
            padding: 15px 18px;
            border-radius: 10px;
            background: #fff0f0;
            color: #c33;
        }

        .error-box ul {
            margin: 0;
            padding-left: 20px;
        }

        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 12px;
            margin-top: 10px;
            padding-top: 25px;
            border-top: 1px solid #eeeaf5;
        }

        .button {
            min-height: 48px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0 22px;
            border-radius: 9px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 800;
            cursor: pointer;
        }

        .button--cancel {
            border: 1px solid #ddd8ea;
            background: #fff;
            color: #555;
        }

        .button--save {
            border: 0;
            background: #FDD200;
            color: #292345;
        }

        .button--save:hover {
            background: #292345;
            color: #fff;
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

            .form-card {
                padding: 22px;
            }

            .form-grid {
                grid-template-columns: 1fr;
                gap: 0;
            }

            .form-group--full {
                grid-column: auto;
            }

            .status-options {
                flex-direction: column;
            }

            .form-actions {
                flex-direction: column-reverse;
            }

            .button {
                width: 100%;
            }

            .blog-editor .ql-toolbar {
                padding: 8px;
            }

            .blog-editor .ql-editor {
                min-height: 260px;
            }
        }
    </style>
</head>

<body>

<header class="admin-header">

    <a href="{{ route('admin.blogs.index') }}">
        <img
            src="{{ asset('assets/front/images/rainbow/logo.png') }}"
            alt="Rainbow Colors"
        >
    </a>

    <div class="header-actions">

        <a
            href="{{ route('admin.blogs.index') }}"
            class="header-button header-button--back"
        >
            All Blogs
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

        <h1>Add New Blog</h1>

        <p>
            Create a new Rainbow Colors article.
        </p>

    </div>

    @if ($errors->any())

        <div class="error-box">

            <strong>Please fix the following:</strong>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>

    @endif

    <form
        id="blogCreateForm"
        method="POST"
        action="{{ route('admin.blogs.store') }}"
        enctype="multipart/form-data"
    >

        @csrf

        <div class="form-card">

            <div class="form-grid">

                <div class="form-group form-group--full">

                    <label for="title">
                        Blog Title <span class="required">*</span>
                    </label>

                    <input
                        type="text"
                        id="title"
                        name="title"
                        class="form-control"
                        value="{{ old('title') }}"
                        placeholder="Enter blog title"
                        required
                    >

                </div>

                <div class="form-group">

                    <label for="category">
                        Category
                    </label>

                    <input
                        type="text"
                        id="category"
                        name="category"
                        class="form-control"
                        value="{{ old('category') }}"
                        placeholder="Example: Colours, Holi, Tips"
                    >

                </div>

                <div class="form-group">

                    <label for="author">
                        Author
                    </label>

                    <input
                        type="text"
                        id="author"
                        name="author"
                        class="form-control"
                        value="{{ old('author', auth()->user()->name) }}"
                        placeholder="Author name"
                    >

                </div>

                <div class="form-group form-group--full">

                    <label for="featured_image">
                        Featured Image
                    </label>

                    <div class="image-upload">

                        <input
                            type="file"
                            id="featured_image"
                            name="featured_image"
                            accept=".jpg,.jpeg,.png,.webp"
                        >

                        <div class="form-help">
                            JPG, JPEG, PNG or WEBP. Maximum size: 2MB.
                        </div>

                    </div>

                </div>

                <div class="form-group form-group--full">

                    <label for="excerpt">
                        Short Excerpt
                    </label>

                    <textarea
                        id="excerpt"
                        name="excerpt"
                        class="form-control"
                        placeholder="Write a short description for the blog..."
                    >{{ old('excerpt') }}</textarea>

                    <div class="form-help">
                        This text will be used as the blog preview/summary.
                    </div>

                </div>

                <div class="form-group form-group--full">

                    <label>
                        Blog Content <span class="required">*</span>
                    </label>

                    <div class="blog-editor">

                        <div id="blogEditor"></div>

                    </div>

                    <textarea
                        id="content"
                        name="content"
                        hidden
                    >{{ old('content') }}</textarea>

                    <div class="form-help">
                        Use headings, bold, italic, lists, links, quotes and alignment to format your article.
                    </div>

                </div>

                <div class="form-group">

                    <label for="published_at">
                        Published Date
                    </label>

                    <input
                        type="datetime-local"
                        id="published_at"
                        name="published_at"
                        class="form-control"
                        value="{{ old('published_at') }}"
                    >

                </div>

                <div class="form-group">

                    <label>
                        Status <span class="required">*</span>
                    </label>

                    <div class="status-options">

                        <div class="status-option">

                            <input
                                type="radio"
                                id="status_draft"
                                name="status"
                                value="draft"
                                {{ old('status', 'draft') === 'draft' ? 'checked' : '' }}
                            >

                            <label for="status_draft">
                                Draft
                            </label>

                        </div>

                        <div class="status-option">

                            <input
                                type="radio"
                                id="status_published"
                                name="status"
                                value="published"
                                {{ old('status') === 'published' ? 'checked' : '' }}
                            >

                            <label for="status_published">
                                Published
                            </label>

                        </div>

                    </div>

                </div>

            </div>

            <div class="form-actions">

                <a
                    href="{{ route('admin.blogs.index') }}"
                    class="button button--cancel"
                >
                    Cancel
                </a>

                <button
                    type="submit"
                    class="button button--save"
                >
                    Save Blog
                </button>

            </div>

        </div>

    </form>

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
    const blogCreateForm = document.getElementById('blogCreateForm');

    const oldContent = contentInput.value.trim();

    if (oldContent) {
        blogEditor.clipboard.dangerouslyPasteHTML(oldContent);
    }

    blogCreateForm.addEventListener('submit', function () {
        contentInput.value = blogEditor.root.innerHTML;
    });
</script>

</body>
</html>