@extends('layout.layout')

@section('title', 'Profile')
@section('main')

    <div class="row justify-content-center">
        <img class="w-50 h-50 mb-3" src="{{ url('storage/'.$user->display_picture_link) }}">
        <div class="col-lg-5">
            <main class="form-registration w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">@lang('public.my profile')</h1>
                <form action="{{ Route('edit-profile') }}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="form-floating">
                        <input type="text" name="first_name"
                            class="form-control rounded-top @error('first_name') is-invalid @enderror" id="first_name"
                            placeholder="Name" required value="{{ old('first_name', $user->first_name) }}" autofocus>
                        <label for="first_name" class="fw-bold">@lang('public.first name') </label>
                        @error('first_name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="text" name="last_name"
                            class="form-control rounded-top @error('last_name') is-invalid @enderror" id="last_name"
                            placeholder="Last Name" required value="{{ old('last_name', $user->last_name) }}">
                        <label for="last_name" class="fw-bold">@lang('public.last name') </label>
                        @error('last_name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" placeholder="name@example.com" required value="{{ old('email', $user->email) }}">
                        <label for="email" class="fw-bold" >@lang('public.email address') </label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="role_id" class="fw-bold">@lang('public.role'):
                            <select id="role_id" name="role_id" class="form-control @error('role_id') is-invalid @enderror" disabled>
                                <option value=1 {{ $user->role_id == 1 ? 'selected' : '' }}>Admin</option>
                                <option value=2 {{ $user->role_id == 2 ? 'selected' : '' }}>@lang('public.user')</option>
                            </select>
                        </label>
                        @error('role_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <p class="fw-bold" >@lang('public.gender'): </p>
                        <label for="male">@lang('public.male')</label>
                        <input type="radio" id="male" name="gender_id" value=1
                        {{ $user->gender_id == 1 ? 'checked' : '' }}>

                        <label for="female">@lang('public.female')</label>
                        <input type="radio" id="female" name="gender_id" value=2
                        {{ $user->gender_id == 2 ? 'checked' : '' }}>
                    </div>

                    <div class="mb-3 mt-6">
                        <label class="form-label fw-bold" for="flImage">@lang('public.display picture')</label>
                        <input class="form-control" id="flImage" name="display_picture_link" type="file">
                        @error('display_picture_link')
                            <p class="form-text text-danger">{{ $message }}</p>
                        @enderror
                        <img class="w-25 ratio ratio-1x1 mt-3" id="preview" src='' alt=""
                            style="aspect-ratio: 1; object-fit: cover;">
                    </div>

                    <div class="form-floating">
                        <input type="password" name="password"
                            class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password"
                            placeholder="Password" required">
                        <label for="password" class="fw-bold">@lang('public.password')</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="password" name="password_confirmation"
                            class="form-control rounded-bottom @error('password_confirmation') is-invalid @enderror" id="confirmpassword"
                            placeholder="Confirm Password" required">
                        <label for="confirmpassword" class="fw-bold">@lang('public.confirm password')</label>
                        @error('password_confirmation')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">@lang('public.save')</button>

                </form>
            </main>
        </div>
    </div>


@endsection

@push('scripts')
    <script>
        const imageInp = document.querySelector("#flImage");
        const imgEl = document.querySelector("#preview");

        imageInp.onchange = (ev) => {
            const [file] = imageInp.files;
            if (file) {
                imgEl.src = URL.createObjectURL(file);
            }
        };
    </script>
@endpush
