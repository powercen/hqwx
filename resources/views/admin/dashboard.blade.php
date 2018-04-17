<div class="alert alert-success">登陆成功</div>
<div>
    <a class="btn btn-success" onclick="document.getElementById('logoutform').submit()">退出登陆</a>
    <form action="{{ route('logout') }}" method="post" id="logoutform">@csrf</form>
</div>
