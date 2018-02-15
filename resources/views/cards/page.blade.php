<div class="card  mb-4">
    <div class="card-header">
        <a class="" href="{{route('seo::pages.show',$record->id)}}">  #{{$record->id}} {{$record->getTitle()}}</a>
    </div>
    <div class="card-body">
        <div class="card-text">
            {{$record->getDescription()}}
        </div>
    </div>
    <div class="card-footer">
        <label class="badge badge-secondary">{{$record->robot_index}}</label>
        <label class="badge badge-secondary">{{$record->robot_follow}}</label>
        <label class="badge badge-secondary">{{$record->page_images_count}} &nbsp;&nbsp;  <i class="fa fa-image"></i></label>

        <a target="_blank" href="{{url($record->getFullUrl())}}">Visit page</a>

        &nbsp;
        <a target="_blank"
           href="https://developers.facebook.com/tools/debug/sharing/?q={{urlencode($record->getFullUrl())}}">
            <i class="fa fa-facebook-official"></i> Preview
        </a>

        <div class="" style="float: right">
            <a href="{{route('seo::pages.meta',$record->id)}}">
                <span class="fa fa-pencil"></span>
            </a>
            &nbsp;&nbsp;
            @include('seo::forms.destroy',['route'=>route('seo::pages.destroy',$record->id)])
        </div>
    </div>
</div>
