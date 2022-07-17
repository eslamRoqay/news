@php($title=trans('posts.posts'))
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
        <div class="text-right">
        <div class="card-header">
            @can('create-posts')

            <a href="{{route('posts.create')}}" class="btn btn-sm btn-light-success font-weight-bolder mr-2">
                <i class="fa fa-plus"></i>{{trans('lang.create')}}</a>
            @endcan
        </div>
        </div>
        <form action="{{ route('posts.deletes') }}" method="post" id="delete-form">
            @csrf
            @can('delete-posts')
                <button type="submit" style="display:none; margin-right: 10px;" class="btn btn-danger delete-selected-btn"><i class="fa fa-trash"></i> حذف المحدد  </button>
            @endcan
            <div class="card-body">
            {!! $dataTable->table(['class' => 'table table-bordered table-checkable dataTable  dtr-inline'], true) !!}
        </form>
    </div>
    </div>
@endsection
@section('script')
    {!! $dataTable->scripts() !!}
    <script src="assets/js/work.js"></script>

{{--    <script type="text/javascript">--}}
{{--        function update_active(el) {--}}
{{--            if (el.checked) {--}}
{{--                var status = 'active';--}}
{{--            } else {--}}
{{--                var status = 'unactive';--}}
{{--            }--}}
{{--            $.post('{{ route('posts.change_status') }}', {--}}
{{--                _token: '{{ csrf_token() }}',--}}
{{--                id: el.value,--}}
{{--                status: status--}}
{{--            }, function (data) {--}}
{{--                if (data == 1) {--}}
{{--                    toastr.success(".....             {{trans('lang.statuschanged')}}");--}}
{{--                } else {--}}
{{--                    toastr.error("{{trans('lang.statuschanged')}}");--}}
{{--                }--}}
{{--            });--}}
{{--        }--}}

{{--        function phonelimit(string) {--}}
{{--            var first_string = string.substring(0);--}}
{{--            var int_string = parseInt(first_string);--}}
{{--            if(int_string == 0){--}}
{{--                $("#phone").val('');--}}
{{--                return false;--}}
{{--            }--}}

{{--            if (string.length < 11) {--}}
{{--                return string;--}}
{{--            } else {--}}
{{--                alert('عفوا رقم الجوال 10 اراقم فقط');--}}
{{--            }--}}
{{--        }--}}

{{--        function removeSpaces(string) {--}}
{{--            return string.split(' ').join('');--}}
{{--        }--}}
{{--    </script>--}}
@endsection

