@section('content')
<main>
    <table>
        <tr>
            <th>
                <a href="?sort=no&order=ASC" class="sort">▲</a><br>
                    id<br>
                <a href="?sort=no&order=DESC" class="sort">▼</a>
            </th>
            <th>
                内容
            </th>
            <th>
                <a href="?sort=updated_at&order=ASC" class="sort">▲</a><br>
                    ID最終更新日時<br>
                <a href="?sort=updated_at&order=DESC" class="sort">▼</a>
            </th>                                     <!--order by 以降の文章でどれをソートするかを記述する -->
            <th>
                <form action="admin_new_edit?mode=new&ramen_new_no=" method="post"><input type="submit" value="新規登録">{{ csrf_field() }}</form>
            </th>
        </tr>
        <tr>
            @foreach ($request as $requests)
            <tr>
                <td>{{ $requests->no }}</td>
                <td>{{ $requests->contents }}</td>
                <td>{{ $requests->updated_at }}</td>
                <td>
                    <form action="admin_new_edit?mode=edit&ramen_new_no={{$requests->no}}" method="post" ><input type="submit" name="fix" value="編集" class="fix_btn">{{ csrf_field() }}</form>
                    <form action="admin_new_conf?mode=del&ramen_new_no={{$requests->no}}" method="post"><input type="submit" name="del" value="消去" class="del_btn">{{ csrf_field() }}</form>
                </td>
            </tr>
            @endforeach
        </tr>
    </table>
    {{$request}}
</main>
@endsection
