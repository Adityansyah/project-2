<div>
    <form wire:submit.prevent="login()" id="">
        <div class="mb-3">
            <label for="login_id" class="form-label">Email or username</label>
            <input class="form-control" type="text" id="login_id" wire:model="login_id" placeholder="Enter your email">
            <span class="text-danger">
                @error('login_id')
                    {{ $message }}
                @enderror
            </span>
        </div>

        <div class="mb-3">
            <a href="#" class="text-muted float-end">
                <small>Forgot your password?</small></a>
            <label for="password" class="form-label">Password</label>
            <div class="input-group input-group-merge">
                <input type="password" id="password" wire:model="password" class="form-control"
                    placeholder="Enter your password">
                <div class="input-group-text" data-password="false">
                    <span class="password-eye"></span>
                </div>
            </div>
            <span class="text-danger">
                @error('password')
                    {{ $message }}
                @enderror
            </span>
        </div>

        <div class="mb-3 mb-3">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                <label class="form-check-label" for="checkbox-signin">Remember me</label>
            </div>
        </div>

        <div class="mb-3 mb-0 text-center">
            <button class="btn btn-primary" type="submit"> Log In</button>
        </div>

    </form>
</div>
