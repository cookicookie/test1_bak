@section('content')
<main>
    <form action="admin_new_done?mode=<?=$_GET['mode']?>&ramen_new_no=@if(!empty($request)){{$request->no}}@endif" method="post">
        {{ csrf_field() }}
    <table>
        <tr>
            <td class="a">内容を確認してください</td>
            <td>{{$request->contents}}</td>
        </tr>
    </table>
    <input type="submit" name="submit" class="check_btn" value="完了">
    <input type="hidden" name="contents" class="check_btn" value="{{$request->contents}}">
    </form>
</main>
@endsection
