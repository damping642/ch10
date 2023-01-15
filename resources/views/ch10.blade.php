<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CH10-使用ORM進行資料庫存取：使用Laravel</title>
</head>
<body>
    <h1>CH10-4</h1>
    <h2>使用Eloquent ORM操作資料庫</h2>
    <ul>
    <li>SELECT 搜尋
        <ul>
            <li><a href="{{url('/api/select/all')}}" target="_blank">
                搜尋全部資料(回傳所有欄位)
                <br>(URL: {{url('/api/select/all')}})</a>
            </li>
        </ul>
    </li>

    <li>INSERT 新增 (此為範例網址。讀者可以自行修改網址中的參數)
        <ul>
            <li><a href="{{url('/api/insert/Tomato/5')}}" target="_blank">
                新增一筆資料(name=Tomato, price=5)
                <br>(URL: {{url('/api/insert/Tomato/5')}})</a>
            </li>
        </ul>
    </li>

    <li>UPDATE 更新 (此為範例網址。讀者可以自行修改網址中的參數)
        <ul>
            <li><a href="{{url('/api/update/1/Apple/2')}}" target="_blank">
                更新一筆資料(id=1,name=Apple,price=2)
                <br>(URL: {{url('/api/update/1/Apple/2')}})</a>
            </li>
        </ul>      
    </li>

    <li>DELETE 刪除 (此為範例網址。讀者可以自行修改網址中的參數)
        <ul>
            <li><a href="{{url('/api/delete/1')}}" target="_blank">
                刪除一筆資料(id=1)
                <br>(URL: {{url('/api/delete/1')}})</a>
            </li>
        </ul>      
    </li>
    </ul>
</body>
</html>