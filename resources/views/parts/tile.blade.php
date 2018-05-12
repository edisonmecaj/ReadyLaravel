<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
    <a href="{{ url($tile->url) }}" class="btn btn-{{$tile->color}} btn-block card">
        <span class="card-icon {{ $tile->icon }}"></span>
        <br>
        <div class="card-title">{{ $tile->label }}</div>
    </a>
</div>