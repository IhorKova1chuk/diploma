<?php include_once "../app/include/header.php"; ?>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card" style="width: 100%; max-width: 400px;">
            <div class="card-body">
                <h5 class="card-title text-center">Вхід</h5>
                <form action="#" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Логін</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Пароль</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember">
                        <label class="form-check-label" for="remember">Запам'ятати мене</label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Увійти</button>
                </form>
                <div class="text-center mt-3">
                    <a href="#" class="text-decoration-none">Забули пароль?</a>
                </div>
            </div>
        </div>
    </div>
<?php include_once "../app/include/footer.php"; ?>