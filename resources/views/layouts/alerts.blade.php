@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade rounded-0 show" style="position: fixed;
    top: 20px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 1000000;">
        <ul class="m-0">
            @foreach ($errors->all() as $error)
                <li>@fa(['icon' => 'exclamation-circle']){{ $error }}</li>
            @endforeach
        </ul>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
@endif

@if($message = session('success'))
    <div class="alert alert-success alert-dismissible fade rounded-0 show" style="position: fixed;
    top: 20px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 1000000;">
    <strong class="mr-2">Success |  </strong> {{$message}}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
@endif