@extends('backstage.template')

@section('title')
    一般消息編輯
@endsection

@section('css')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/backstage/edit-news.css') }}">
@endsection


@section('main')
    <main class="add-news">
        <div class="title">
            編輯一般消息
        </div>
        <section class="add-input-box">
            <form action="/admin/news-edit-upload/{{ $editnews->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="edit-img-box">
                    <span>目前圖片預覽</span>
                    <img src="{{ $editnews->img_path }}" alt="">
                </div>
                <div class="add-title">
                    <label for="date">時間</label><input type="text" name="date" id="date"
                        value="{{ $editnews->date }}" required>
                </div>
                <div class="add-title">
                    <label for="title">標題</label><input type="text" name="title" id="title"
                        value="{{ $editnews->title }}" required>
                </div>
                <div class="add-title">
                    <label for="title">重新上傳圖片<span>(建議尺寸為600*600px, 72dpi)</span></label><input type="file"
                        accept="image/png, image/jpeg, image/jpg" name="img" id="img">
                </div>
                <div class="add-content">
                    <label for="main-news-content">內容<span>(可輸入任意行數)</span></label>
                    <textarea id="summernote2" name="content" id="news-content" required>

                    {{ $editnews->content }}

                    </textarea>
                    <script>
                        $(document).ready(function() {
                            $('#summernote2').summernote({
                                height: 300,
                                toolbar: [
                                    // [groupName, [list of button]]
                                    ['style', ['bold', 'underline','strikethrough']],
                                    ['para', ['ul', 'ol']],
                                    ['clear',['clear']]
                                ]
                            });
                        });
                    </script>
                </div>
                <?php
                $hidden = $editnews->hidden;
                ?>
                <div class="btnArea">
                    <div>
                        <label for="hidden{{ $editnews->id }}">
                            <input type="checkbox" name="hidden" id="hidden{{ $editnews->id }}" class="show-content" @if ($hidden) checked @endif>
                            <span class="show-content">隱藏</span>
                        </label>
                    </div>
                    <div>
                        <button type="submit">確定更改</button>
                        <a href="/admin/news-list">取消</a>
                    </div>
                </div>
            </form>
        </section>

    </main>
@endsection
