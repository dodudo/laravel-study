<form action="/task/getform" method="post">
{{--    <input type="hidden" name="_token" value="{{csrf_token()}}">--}}
{{--    <input type="hidden" name="_method" value="PUT">--}}
    @csrf
    @method('PUT')
    用户名：<input type="text" name="user">

    <button type="submit">提交</button>
</form>
