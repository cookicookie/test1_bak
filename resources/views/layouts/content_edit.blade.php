@section('content')
<main>
    <form action="admin_new_conf?mode=<?=$_GET['mode']?>&ramen_new_no=@if(!empty($request)){{$request->no}}@endif" method="post">
        {{ csrf_field() }}
    <table>
        <tr>
            <td>内容</td>
        <td>
            <input type='text' name="contents" class="ramen_new_content" value="@if(!empty($request)){{$request->contents}}@endif">
        </td>
        </tr>
    </table>
    <input type="submit" name="send" class="check_btn" value="確認画面へ">
    <input type="hidden" name="no" class="check_btn" value="@if(!empty($request)){{$request->no}}@endif">
    </form>
</main>
@endsection
