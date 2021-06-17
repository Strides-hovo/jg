@extends('layouts.admin')

@section('title','admin panel')

@section('content')


    <div class="content table_content mt-120">
        
            <div class="table_wrapper w-100">
                <table class="table operations" data-action="getoperations">
                    <tbody>
                    	<tr class="table_header">
                        <th>логин</th>
                        <th>e-mail</th>
                        <th>дату регистрации</th>
                        <th>рефовода</th>
                        <th>вложил</th>
                        <th>вывел</th>
                        <th>открыто</th>
                        <th><button>редактировать</button></th>
                    </tr>
                    @foreach ($users as $user)
                        @if($user->hasRole('user') )
                            <tr class="row visible confirmed">
		                        <td><p class="p-10">{{ $user->name }}</p></td>
		                        <td><p class="p-10">{{ $user->email }}</p></td>
		                        <td><p class="p-10">{{ $user->created_at }}</a></td>
		                        <td><p class="p-10">UAH</p></td>
		                        <td><p class="p-10">10 000</p></td>
		                        <td><p class="p-10">14 000</p></td>
		                        <td><p class="p-10">10 000</p></td>
		                        <td>
		                        	<form action="{{ route('admin.user.edit',$user) }}" method="GET">
		                        		<button type="submit" class="btn-edit">редактировать</button>	
		                        	</form>
		                        </td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>

@endsection
