<?= $this->extend('layouts/auth_layout') ?>
<?= $this->section('content') ?>
<div class="container" id="container">
    <div class="form-container sign-in">
        <form>
            <h1>Sign In, here!</h1>
            <span>input your email password to sign in</span>
            <div class="form-input">
                <input type="username" placeholder="Username">
                <input type="password" placeholder="Password">
            </div>
            <button>Sign In</button>
        </form>
    </div>
    <div class="toggle-container">
        <div class="toggle">
            <div class="toggle-panel toggle-right">
                <div class="row justify-content-right">
                    <img src="assets/img/siperpus.png" alt="logo siperpus" class="img-siperpus">
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>