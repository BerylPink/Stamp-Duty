

{{-- Primary Alert --}}
@if(Session::has('primary'))
<div class="alert alert-primary alert-dismissible fade show" role="alert">
  <strong>Processing!</strong> {{ Session::get('primary') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span>&times;</span>
  </button>
</div>
@endif



{{-- Secondary Alert --}}
@if(Session::has('secondary'))
<div class="alert alert-secondary alert-dismissible fade show" role="alert">
  <strong>Almost there!</strong> {{ Session::get('secondary') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span>&times;</span>
  </button>
</div>
@endif


{{-- Success Alert --}}
@if($message = Session::get('success'))

{{-- <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> {{ Session::get('success') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span>&times;</span>
  </button>
</div> --}}

<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <i class="icon-tick"></i><strong>Success!</strong> {{ Session::get('success') }}
</div>

@endif

{{-- Custom Alert --}}
@if(Session::has('flash_message'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> {{ Session::get('flash_message') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span>&times;</span>
  </button>
</div>
@endif

{{-- Danger Alert --}}
@if(Session::has('danger'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> {{ Session::get('danger') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span>&times;</span>
  </button>
</div>
@endif

{{-- Warning Alert --}}
@if(Session::has('warning'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Something went wrong!</strong> {{ Session::get('warning') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span>&times;</span>
  </button>
</div>
@endif

{{-- Informational Alert --}}
@if(Session::has('info'))
<div class="alert alert-info alert-dismissible fade show" role="alert">
  <strong>Heads Up!</strong> {{ Session::get('info') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span>&times;</span>
  </button>
</div>
@endif

{{-- Light Alert --}}
@if(Session::has('light'))
<div class="alert alert-light alert-dismissible fade show" role="alert">
  <strong>Heads Up!</strong> {{ Session::get('light') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span>&times;</span>
  </button>
</div>
@endif

{{-- Dark Alert --}}
@if(Session::has('dark'))
<div class="alert alert-dark alert-dismissible fade show" role="alert">
  <strong>Note to User!</strong> {{ Session::get('dark') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span>&times;</span>
  </button>
</div>
@endif

{{-- Authentication Alert --}}
@if(Session::has('status'))
<div class="alert alert-status alert-dismissible fade show" role="alert">
  <strong>Note to User!</strong> {{ Session::get('status') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span>&times;</span>
  </button>
</div>
@endif

{{-- If the page has any error passed to it --}}
@if(count($errors) > 0)

  <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
    <i class="icon-warning2"></i><strong>Oh snap!</strong> Something went wrong.
    <ul>
      @foreach($errors->all() as $error)
        <li> {{ $error }} </li>
      @endforeach
    </ul>
  </div>


@endif

@if ($message = Session::get('error'))
{{-- <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong> {{ $message }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span>&times;</span>
    </button>
  </div> --}}
  
  <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
    <i class="icon-warning2"></i><strong>Oh snap!</strong> {{ $message }}.
  </div>
@endif

{{-- @if($errors->has('email'))
  <span class="invalid-feedback">
      <strong> {{ $error->('email') }} </strong>      
  </span>
@endif

@if($errors->has('password'))
  <span class="invalid-feedback">
      <strong> {{ $error->first('password') }} </strong>      
  </span>
@endif
 --}}

