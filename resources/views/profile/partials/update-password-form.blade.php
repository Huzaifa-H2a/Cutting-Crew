<section>
    <h2>Update Password</h2>
    <p>Ensure your account is using a long, random password to stay secure.</p>

    <form method="post" action="{{ route('password.update') }}">
        @csrf
        @method('put')

        <div>
        <div class="col-md-4">
        <label class="form-label" for="current_password">Current Password</label>
        <input type="password" class="form-control" name="current_password" id="current_password" required autocomplete="current-password"/>
        @error('current_password')<span class="text-danger">{{$message}}</span>@enderror
        </div>

        <div class="col-md-4">
        <label class="form-label" for="password_confirmation">New Password</label>
        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required autocomplete="new-password"/>
        @error('password_confirmation')<span class="text-danger">{{$message}}</span>@enderror
        </div>

        <div class="col-md-4">
        <label class="form-label" for="password">Confirm Password</label>
        <input type="password" class="form-control" name="password" id="password" required autocomplete="new-password"/>
        @error('password')<span class="text-danger">{{$message}}</span>@enderror
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary">Save</button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
