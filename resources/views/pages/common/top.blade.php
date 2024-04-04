<div class="col-md-12 rt_subheader">
    <div class="rt_subheader_main">
        <h3 class="rt_subheader_title mb-mob-2">Hello {{ Auth::user()->name }}!</h3>
        <div class="rt_breadcrumb mb-mob-2">
            <a href="{{ route('home') }}" class="rt_breadcrumb_home_icon"><i class="feather ft-home"></i></a>
            <span class="rt_breadcrumb_separator"><i class="feather ft-chevrons-right"></i></span>
            <a href="{{ route('home') }}" class="breadcrumb_link"> Home </a>
            <span class="rt_breadcrumb_separator"><i class="feather ft-chevrons-right"></i></span>
            <a href="{{ route('dashboard') }}" class="breadcrumb_link"> Main Dashboard </a>
        </div>
    </div>
    <div class="subheader_btns">
        <a href="javascript:void(0)" class="btn btn-sm btn-primary btn-inverse-primary" data-toggle="modal"
            data-target="#exampleModalCenter" title="Add New Record">
            <span>Add New Record</span>&nbsp;
            <i class="feather ft-plus mr-0"></i>
        </a>
        {{-- <a href="#" class="btn btn-sm btn-primary btn-inverse-primary"><i class="feather ft-watch mr-0"></i></a> --}}
        <a href="javascript:void(0)" class="btn btn-sm btn-primary btn-inverse-primary">
            <span>Today:</span>&nbsp;
            <span>{{ \Carbon\Carbon::now()->format('D, M j, Y \a\t g:ia') }}</span>
            <i class="feather ft-calendar ml-2"></i>
        </a>
    </div>
</div>
