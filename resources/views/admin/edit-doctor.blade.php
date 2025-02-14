<x-app-layout>
    <x-slot name="header">
        @include('admin/asset')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <br />
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl	 mx-auto sm:px-16 lg:px-16">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <br />
                <form method="POST" action="{{ url('/update/doctor/admin/'.$doctor->id) }}">
                    @csrf
                    <div class="card-box p-7">
                        <div class="row">
                            <div class="col-md-6 ">
                                <h5 class="card-title">@lang('personal_details'):</h5>
                                <br />
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">@lang('full_name'):</label>
                                    <div class="col-lg-6">
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="name"
                                            placeholder="
                                    {{ old('name')}}"
                                            value="{{ $doctor->name }}"
                                            name="name"
                                        />
                                        @error('fullname')
                                        <label class="error" style="color: red;">{{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">@lang('email'):</label>
                                    <div class="col-lg-6">
                                        <input type="email" class="form-control" id="email" value="{{ $doctor->email }}" name="email" />
                                        @error('email')
                                        <span class="error" style="color: red;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">@lang('birthday'):</label>
                                    <div class="col-lg-6">
                                        <input type="date" class="form-control" id="myDate" value="{{ $doctor->doctor->birthday }}" name="birthday" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5 class="card-title">@lang('profesional_details')</h5>
                                <br />
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">@lang('speciality'):</label>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <select
                                                    class="form-control select"
                                                    name="specialty"
                                                    value="
                                            {{ old('depart')}}"
                                                    id="depart"
                                                >
                                                    @foreach($specializity as $key => $depart)
                                                    <option value="{{ $depart->id }}">{{ $depart->specialty }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    @error('depart')
                                    <label class="error">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">@lang('phone'):</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="phone" value="{{ $doctor->doctor->phone }}" id="phone" />
                                        @error('phone')
                                        <label class="error" style="color: red;">{{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">@lang('work_address'):</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="work_address" value="{{ $doctor->doctor->work_address }}" id="work_address" />
                                        @error('phone')
                                        <label class="error" style="color: red;">{{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">@lang('remark'):</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="remark" value="{{ $doctor->doctor->remark }}" id="remark" />
                                        @error('phone')
                                        <label class="error" style="color: red;">{{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 float-right">
                            <button type="submit" class="btn btn-info float-right">@lang('save')</button>
                        </div>
                    </div>
                    <div class="form-group row">
                    <div class="text-right" style="top:40px:">
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @if(Session::has('success'))
    <script>
        swal("Success","{{Session::get('success')}}","success",{
            button:"ok",
        })
    </script>
    @endif
</x-app-layout>
