@extends('backstage.template')

@section('title')
主要消息上傳
@endsection

@section('css')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/backstage/add-main-news.css')}}">
@endsection


@section('main')
    <main class="add-news">
        <div class="title">
            主要消息 / 新增消息
        </div>
        <section class="add-input-box">
            <form action="/admin/addmainnews" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="add-title">
                    <label for="date">時間<span class="memo-span red">(必填)</span></label><input type="text" name="date" id="date" placeholder="請輸入時間 ( 格式範例 2022 / 10 / 31 Tue )" required>
                </div>
                <div class="add-title">
                    <label for="title">標題<span class="memo-span red">(必填)</span></label><input type="text" name="title" id="title" placeholder="請輸入標題" required>
                </div>
                <div class="add-title">
                    <label for="title">上傳圖片<span class="memo-span"><span class="red">(必填)</span>建議尺寸為600*600px, 72dpi</span></label><input type="file"
                        accept="image/png, image/jpeg, image/jpg" name="img" id="img" required>
                </div>
                <div class="add-content">
                    <label for="index-content">簡要內容<span class="memo-span"><span class="red">(必填)</span>請輸入五行以內文字</span></label>
                    <textarea id="summernote" name="content1" id="index-content" required>
                    </textarea>
                    <script>
                        $(document).ready(function() {
                            $('#summernote').summernote({
                                height: 100,
                                placeholder: '請輸入簡要內容 ( 此區塊內容會出現在首頁，建議行數為 5 行以內 )',
                                inheritPlaceholder: true,
                                toolbar: [
                                    // [groupName, [list of button]]
                                    ['style', ['bold', 'underline','strikethrough']],
                                    ['para', ['ul', 'ol']],
                                    ['clear',['clear']]
                                ]
                            });
                            $('#summernote').summernote('code', '');
                        });
                    </script>
                    <label for="news-content">詳細內容<span class="memo-span"><span class="red">(必填)</span>可輸入任意行數</span></label>
                    <textarea id="summernote2" name="content2" id="news-content" required>
                    </textarea>
                    <script>
                        $(document).ready(function() {
                            $('#summernote2').summernote({
                                height: 300,
                                placeholder: '請輸入詳細內容 ( 此區塊內容會出現在詳細頁，可輸入任意行數內文 )',
                                inheritPlaceholder: true,
                                toolbar: [
                                    // [groupName, [list of button]]
                                    ['style', ['bold', 'underline','strikethrough']],
                                    ['para', ['ul', 'ol']],
                                    ['clear',['clear']]
                                ]
                            });
                            $('#summernote2').summernote('code', '');
                        });
                    </script>
                </div>
                <div class="btnArea">
                    <button type="submit">新增消息</button>
                </div>
            </form>
        </section>
    </main>
    <script>
        const placeHolder = document.querySelector('.note-placeholder')
        placeHolder.style.display='block'
        // placeHolder.forEach(e=>{
        //     console.log(e);
        //     e.style.display='block'
        // })
    </script>
@endsection
