<ul class="app-breadcrumb breadcrumb">
    @isset($breadcrumbItems)
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        @foreach($breadcrumbItems as $bitem)
            <li class="breadcrumb-item"><a href="{{$bitem['link']}}">{{$bitem['title']}}</a></li>
        @endforeach
    @endisset
</ul>
