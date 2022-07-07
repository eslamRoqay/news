<div class="card-body row">
    <div class="form-group  col-12">
        <label>{{trans('posts.title')}}<span class="text-danger">*</span></label>
        <input name="title" placeholder="ادخل العنوان" value="{{ old('title', $data->title ?? '') }}"
               class="form-control  {{ $errors->has('title') ? 'border-danger' : '' }}" type="text"
               maxlength="255"/>
        <span style="color: #FF5B5B" class="errors error_title" role="alert"></span>
    </div>
    <div class="col-lg-12  col-md-12">
        <div class="form-group ">
            <label for="content">{{trans('posts.content')}}<span class="text-danger">*</span></label>
            <textarea name="content" rows="10" cols="90"
                      class="form-control   {{ $errors->has('content') ? 'border-danger' : '' }}  ">{{ old('content', $data->content ?? '') }}</textarea>
        </div>
        <span style="color: #FF5B5B" class="errors error_content" role="alert"></span>
    </div>

    <div class="form-group col-md-6">
        <label> {{trans('posts.image')}}  </label>
        <div class="col-lg-8">

            <div class="image-input image-input-outline" id="kt_image_1">
                <div class="image-input-wrapper {{ $errors->has('image') ? 'border-danger' : '' }}"
                     style="background-image: url({{old('image', $data->image ?? 'default-image.png' )}})"></div>
                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-warning btn-shadow"
                       data-action="change" data-toggle="tooltip" title=""
                       data-original-title="اختر صوره">
                    <i class="fa fa-pen icon-sm text-muted"></i>
                    <input type="file" value="{{old('image', $data->image ?? '')}}" name="image"
                           accept=".png, .jpg, .jpeg"/>
                </label>
                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-warning btn-shadow"
                      data-action="cancel" data-toggle="tooltip" title="Cancel avatar">

                      <i class="ki ki-bold-close icon-xs text-muted"></i>
                     </span>
            </div>
        </div>
    </div>

</div>
<div class="card-footer text-left">
    <button type="Submit" id="submit" class="btn btn-success btn-default ">حفظ</button>
    <a href="{{ URL::previous() }}" class="btn btn-secondary">الغاء</a>
</div>

