<nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/"><i class="bi bi-house-door"></i></a></li>
    <?php $segments = ''; ?>
        @for($i = 1; $i <= count(Request::segments()); $i++)
            <?php $segments .= '/'. Request::segment($i); ?>
            @if($i < count(Request::segments()))
                <li class="breadcrumb-item">{{ ucfirst(Request::segment($i)) }}</li>
            @else
                <li class="breadcrumb-item active">{{ ucfirst(Request::segment($i)) }}</li>
            @endif
        @endfor
    </ol>
</nav>
