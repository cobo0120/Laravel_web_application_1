@extends('layouts.app')
 
@section('content')
<html>
 <body>

   <h4>プロフィール</h4>   
     <div style="margin-top: 30px;">   
       <table class="table table-striped">  
         <tr>
           <th>氏名（ログインID）</th>
          <td>{{ Auth::user()->name }}</td>
         </tr>  

          <tr>
           <th>メールアドレス</th>
            <td>{{ Auth::user()->email }}</td>
          </tr>

          <tr>
           <th>部署名</th>
          <td>{{ Auth::user()->department_id }}</td>
          </tr>

          <tr>  
          <td><button type="button" class="btn btn-danger w-25"><a style="text-decoration:none; color:white;" href="{{ route('posts.edit_password') }}">パスワード変更</a></button></td>
          </tr>
        </table>
       </div>
      </body>
    </html>
   @endsection