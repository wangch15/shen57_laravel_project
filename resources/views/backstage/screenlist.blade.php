@extends('backstage.template')

@section('title')
    瀏覽者視窗大小報告
@endsection

@section('css')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/backstage/screenlist.css') }}">
@endsection


@section('main')
    <main class="add-news">
        <div class="title-box">
            <span class="title">Screen Size Report</span>
        </div>
        <section class="add-input-box">
            <div class="countPeople-box"><span class="countPeople">總瀏覽人數：{{$total}}</span></div>
            <table>
                <tr>
                    <th>Screen Size Resolution</th>
                    <th>Device</th>
                    <th>Visits</th>
                    <th>Percent Bar</th>
                    <th>Percent</th>
                </tr>
                @foreach ($NewCountArray as $item)

                <?php
                $percent = sprintf( "%.1f ", $item->count / $total * 100);
                $bar = round($item->count / $total * 100);
                ?>
                <tr>
                    <td>{{$item->title}}</td>
                    <td>{{$item->device}}</td>
                    <td>{{$item->count}}</td>
                    <td class="bar-box">
                        <div class="bar" style="width: {{$bar}}%;"></div>
                    </td>
                    <td>{{$percent}}%</td>
                </tr>

                @endforeach
            </table>
        </section>
    </main>
@endsection
