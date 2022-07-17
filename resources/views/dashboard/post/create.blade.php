@php($title=trans('posts.create_post'))
@extends('adminLayouts.app')
@section('title')
    {{$title}}
@endsection
@section('header')

@endsection
@section('breadcrumb')
    <div class="d-flex align-items-baseline flex-wrap mr-5">
        <!--begin::Breadcrumb-->
        <h5 class="text-success font-weight-bold my-1 mr-5">{{$title}}</h5>
        <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
            @can('read-posts')
                <li class="breadcrumb-item">
                    <a href="{{route('posts')}}"
                       class="text-muted">{{trans('posts.posts')}}</a>
                </li>
            @endcan
            <li class="breadcrumb-item">
                <a href="{{route('admin')}}"
                   class="text-muted">{{trans('lang.dashboard')}}</a>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection
@section('content')
    @can('create-posts')
        <div class="card">
            <div class="card-body">
                <form method="post"  id="form" action="{{route('posts.store')}}" enctype="multipart/form-data">
                    @csrf
                    @include('dashboard.post.form')
                </form>
            </div>
        </div>
    @endcan
@endsection
@section('script')
    <script>
        var avatar2 = new KTImageInput('kt_image_1');
    </script>
    <script>
        $(document).ready(function() {
            $(document).on('submit', 'form', function() {
                $('button').attr('disabled', 'disabled');
            });
        });
    </script>

@endsection

