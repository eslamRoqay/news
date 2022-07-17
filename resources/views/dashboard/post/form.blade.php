<div class="card-body row">
    <div class="form-group  col-6">
        <label>{{trans('posts.title_ar')}}<span class="text-danger">*</span></label>
        <input name="title_ar" placeholder="ادخل العنوان" value="{{ old('title_ar', $data->title_ar ?? '') }}"
               class="form-control  {{ $errors->has('title_ar') ? 'border-danger' : '' }}" type="text"
               maxlength="255"/>
        <span style="color: #FF5B5B" class="errors error_title_ar" role="alert"></span>
    </div>
    <div class="form-group  col-6">
        <label>{{trans('posts.title_en')}}<span class="text-danger">*</span></label>
        <input name="title_en" placeholder="ادخل العنوان" value="{{ old('title_en', $data->title_en ?? '') }}"
               class="form-control  {{ $errors->has('title_en') ? 'border-danger' : '' }}" type="text"
               maxlength="255"/>
        <span style="color: #FF5B5B" class="errors error_title_en" role="alert"></span>
    </div>
    <div class="col-lg-6  col-md-6">
        <div class="form-group ">
            <label for="content_ar">{{trans('posts.content_ar')}}<span class="text-danger">*</span></label>
            <textarea name="content_ar" rows="10" cols="90"
                      class="form-control   {{ $errors->has('content_ar') ? 'border-danger' : '' }}  ">{{ old('content_ar', $data->content_ar ?? '') }}</textarea>
        </div>
        <span style="color: #FF5B5B" class="errors error_content_ar" role="alert"></span>
    </div>
    <div class="col-lg-6  col-md-6">
        <div class="form-group ">
            <label for="content_en">{{trans('posts.content_en')}}<span class="text-danger">*</span></label>
            <textarea name="content_en" rows="10" cols="90"
                      class="form-control   {{ $errors->has('content_en') ? 'border-danger' : '' }}  ">{{ old('content_en', $data->content_en ?? '') }}</textarea>
        </div>
        <span style="color: #FF5B5B" class="errors error_content_en" role="alert"></span>
    </div>

    <div class="form-group col-md-6">
        <label> {{trans('posts.image')}}  </label>
        <div class="col-lg-8">
            <div class="image-input image-input-outline" id="kt_image_1">
                <div class="image-input-wrapper {{ $errors->has('image') ? 'border-danger' : '' }}"
                     style="background-image: {{ $data->image ?? 'd'}}"></div>
                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                       data-action="change" data-toggle="tooltip" title=""
                       data-original-title="اختر صوره">
                    <i class="fa fa-pen icon-sm text-muted"></i>
                    <input type="file" value="{{ old('image', $data->image ?? '') }}"
                           name="image"
                           accept=".png, .jpg, .jpeg"/>
                </label>
                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
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

