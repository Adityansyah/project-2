<div>
    <form action="#">

        <div class="mb-3">
            <label for="fullname" class="form-label">Full Name</label>
            <input class="form-control" type="text" id="fullname" placeholder="Enter your name" required="">
        </div>

        <div class="mb-3">
            <label for="emailaddress" class="form-label">Email address</label>
            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" placeholder="Enter your password">
                <div class="input-group-text" data-password="false">
                    <span class="password-eye"></span>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="checkbox-signup">
                <label class="form-check-label" for="checkbox-signup">I accept <a href="#"
                        class="text-muted">Terms and Conditions</a></label>
            </div>
        </div>

        <div class="mb-3 text-center">
            <button class="btn btn-primary" type="submit"> Sign Up </button>
        </div>

    </form>
</div>
