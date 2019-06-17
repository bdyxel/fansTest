@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('个人资料') }}</div>

                <div class="card-body">
                    <form action="{{ route('userInfoStore') }}" method="POST" enctype="multipart/form-data" >
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('邮箱') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $user_info['email'] }}"  autofocus disabled="">
                            </div>
                            
                            <label for="file" class="col-md-4 col-form-label text-md-right">{{ __('上传二维码') }}</label>
                            <div class="col-md-6">
                                <input id="file_upload" name="file_upload" type="file" multiple="true">
                            </div>
                            
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('手机号') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ $user_info['phone'] }}"  autofocus>

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('提交') }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
