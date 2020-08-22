@extends('layouts.app', ['company' => $company, 'branches' => $branches, 'company_setups'=>$company_setups, 'user_roles' => $user_roles, 'user_permissions' => $user_permissions])

@section('content')
<div class="container-fluid"> 
    <div class="card content-wrapper">
        <div class="card-header module-header"><b>{{__('DASHBOARD') }}</b></div>
        <div class="card-body">    
            <div class="content-view">
                <clients-component></clients-component>
            <div>
        </div>
    </div>
</div>
@endsection
