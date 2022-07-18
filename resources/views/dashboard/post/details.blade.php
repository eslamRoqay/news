@php($title='التفاصيل')
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
            @can('read-users')
                <li class="breadcrumb-item">
                    <a href="{{route('users')}}"
                       class="text-muted">{{trans('posts.posts')}}</a>
                </li>
            @endcan
            <li class="breadcrumb-item">
                <a href="{{route('admin')}}"
                   class="text-muted">{{__('lang.dashboard')}}</a>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection
@section('content')
    <div class="card">
        <div class="card-body row">
            <div class="form-group  col-6">
                <label>{{trans('posts.title_ar')}}<span class="text-danger">*</span></label>
                <input disabled name="title_ar" placeholder="{{trans('posts.title_ar')}}"
                       value="{{ old('title_ar', $data->title_ar ?? '') }}"
                       class="form-control  {{ $errors->has('title_ar') ? 'border-danger' : '' }}" type="text"
                       maxlength="255"/>
            </div>
            <div class="form-group  col-6">
                <label>{{trans('posts.title_en')}}<span class="text-danger">*</span></label>
                <input disabled name="title_en" placeholder="{{trans('posts.title_en')}}"
                       value="{{ old('title_en', $data->title_en ?? '') }}"
                       class="form-control  {{ $errors->has('title_en') ? 'border-danger' : '' }}" type="text"
                       maxlength="255"/>
                <span style="color: #FF5B5B" class="errors error_title_en" role="alert"></span>
            </div>
            <div class="col-lg-6  col-md-6">
                <div class="form-group ">
                    <label for="content_ar">{{trans('posts.content_ar')}}<span class="text-danger">*</span></label>
                    <textarea disabled placeholder="{{trans('posts.content_ar')}}" name="content_ar" rows="10" cols="90"
                              class="form-control     {{ $errors->has('content_ar') ? 'border-danger' : '' }}  ">{{ old('content_ar', $data->content_ar ?? '') }}</textarea>
                </div>
                <span style="color: #FF5B5B" class="errors error_content_ar" role="alert"></span>
            </div>
            <div class="col-lg-6  col-md-6">
                <div class="form-group ">
                    <label for="content_en">{{trans('posts.content_en')}}<span class="text-danger">*</span></label>
                    <textarea disabled placeholder="{{trans('posts.content_en')}}" name="content_en" rows="10" cols="90"
                              class="form-control   {{ $errors->has('content_en') ? 'border-danger' : '' }}  ">{{ old('content_en', $data->content_en ?? '') }}</textarea>
                </div>
                <span style="color: #FF5B5B" class="errors error_content_en" role="alert"></span>
            </div>

            <div class="form-group col-md-6">
                <label> {{trans('posts.image')}}  </label>
                <img class="img-thumbnail" src="{{$data->image}}" style="height: 150px; width: 150px;">
            </div>

        </div>
    </div>


    @foreach(   $data->comments as $comment )
        <div class="card mt-2">
            <div class="card-body">
                <!--begin::User-->
                <div class="d-flex align-items-center">
                    <div class="symbol symbol-60 symbol-xxl-100 mr-5 align-self-start align-self-xxl-center">
                        <div class="symbol-label" style="background-image:url({{$comment->user->image ?? 'default-image.png' }})"></div>
                        <i class="symbol-badge bg-success"></i>
                    </div>
                    <div>
                        <a  class="font-weight-bolder font-size-h5 text-dark-75 text-hover-primary">{{$comment->user->name}}</a>
                    </div>
                </div>
                <!--end::User-->
                <!--begin::Contact-->
                <div class="py-9">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <span class="font-weight-bold mr-2">{{trans('posts.comment')}}:</span>
                        <a href="#" class="text-muted text-hover-primary">{{$comment->comment}}</a>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <span class="font-weight-bold mr-2">{{trans('posts.date')}}:</span>
                        <span class="text-muted">{{$comment->created_at->diffForHumans()}}</span>
                    </div>
                </div>
                <!--end::Contact-->
                <!--begin::Nav-->
                <div class="navi navi-bold navi-hover navi-active navi-link-rounded">

                </div>
                <!--end::Nav-->
            </div>
        </div>
    @endforeach

@endsection
@section('script')
@endsection
