<x-app-layout>
    <div>
        <h1>登录</h1>

        <form action="{{ route('login') }}" method="POST">
            @csrf

            <input type="text" name="email" placeholder="邮箱">
            <input type="password" name="password" placeholder="密码">


            <div class="mt-3">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">记住我</label>

                <br />
                <button type="submit" class="btn btn-primary">登录</button>
            </div>
        </form>
    </div>
</x-app-layout>
