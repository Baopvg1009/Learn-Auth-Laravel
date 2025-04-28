{{--x là gọi đến file views/components/layout.blade.php--}}
<x-layout>

    <form action="{{route('login')}}" method="post">
        @csrf

        <h2>Log In to Your Account</h2>

        <label for="email">Email:</label>
        <input
            type="email"
            name="email"
            required
            value="{{ old('email') }}"{{--nhập lỗi form sẽ vẫn hiện lại email đã nhập--}}

        >

        <label for="password">Password:</label>
        <input
            type="password"
            name="password"
            required
        >

        <button type="submit" class="btn mt-4">Log in</button>

        <!-- validation errors -->

    </form>
</x-layout>

