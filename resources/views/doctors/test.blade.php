<div class="form-group">
        <label for="email" >{{ __('Email') }}</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">

          @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
     </div>



     <a class="green" href="{{url('/doctor/'.$doctors['id'].'/edit')}}">
                  <i class="ace-icon fa fa-pencil-square-o  bigger-130"></i>
                </a>

                <!-- <a href="{{url('/doctor/'.$doctors['id'].'/edit')}}"> Edit</a> -->
                <form action="{{url('/doctor/'.$doctors['id'])}}" method="post" class="inline">

                  {{method_field('DELETE')}}
                  {{ csrf_field() }}
                  <a data-id="{{$doctors['id']}}" class="red" data-toggle="modal" data-target="#confirmDelete">
                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                  </a>
                </form>

                @include('partials.confirmdelete')