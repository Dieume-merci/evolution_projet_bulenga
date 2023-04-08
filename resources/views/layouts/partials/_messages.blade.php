@if(Session::get('success', false))
<div class="alert-block justify-content-center d-flex">
    <?php $data = Session::get('success'); ?>
    @if (is_array($data))
        @foreach ($data as $msg)
            <div class="alert alert-success" role="alert">
                <i class="fa fa-check"></i>
                {{ $msg }}
            </div>
        @endforeach
    @else
    <div class="alert alert-msg bg-success text-light alert-dismissible fade show" role="alert">
        <i class="bi bi-check2-circle me-1"></i>
        {{ $data }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
</div>
@elseif(Session::get('failed', false))
<div class="alert-block justify-content-center d-flex">
    <?php $data = Session::get('failed'); ?>
    <div class="alert alert-msg bg-danger text-light alert-dismissible fade show" role="alert">
        <i class="bi bi-exclamation-triangle-fill me-1"></i>
        {{ $data }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
@endif
