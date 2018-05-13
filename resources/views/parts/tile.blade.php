<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 tile-col">
    <a @isset($edit) @else href="{{ url($tile->url) }}"@endisset class="btn btn-{{$tile->color}} btn-block tile">
        <div class="row">
            <div class="col-xs-6">
                <span class="tile-counter">{{ $tile->value}}</span>
            </div>
            <div class="col-xs-6">
                <span class="tile-icon {{ $tile->icon }}"></span>
            </div>
        </div>
        <br>
        <div class="tile-title">{{ __($tile->label) }}</div>
    </a>
    @isset($edit)
    <div class="btn-group btn-group-justified" role="group">
        <a class="btn btn-default btn-move-left"><i class="fas fa-chevron-left"></i></a>
        <a href="{{ url('tiles/'.$tile->id.'/edit') }}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
        <a href="{{ url('tiles/'.$tile->id.'/delete') }}" class="btn btn-danger"><i class="fas fa-times"></i></a>
        <a class="btn btn-default btn-move-right"><i class="fas fa-chevron-right"></i></a>
    </div>    
    @endisset
</div>