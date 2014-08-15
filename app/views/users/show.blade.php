@extends('layouts.default')

@section('title')
{{ $user->name }} 的个人资料_@parent 
@stop

@section('content')


<div class="col-md-8 col-md-offset-2">

  <div class="panel panel-default">

    <div class="panel-heading">
      <h3 class="panel-title text-center">基本信息</h3>
    </div>
    
    <div class="panel-body ">
      <div class="">
        <div style="text-align: center;" class="pull-right">
          <a href="/summer_charlie" class="avatar">
            <img src="http://ruby-china.org/avatar/90772cf58eb0f09b4dc41d5f1ca1334c.png?s=240&amp;d=404" style="width: 120px; height: 120px; margin: 44px 54px 0px 0px;" class="img-thumbnail"></a></div><span class="label role">会员</span>
        <dl class="dl-horizontal pull-left">
          <dt> 
            <lable>&nbsp; </lable>
          </dt>
          <dd>第 {{ $user->id }} 位会员</dd>
          <dt>
            <label>Name:</label>
          </dt>
          <dd><strong>{{ $user->name }}</strong></dd>
          <dt class="adr">
            <label>公司:</label>
          </dt>
          <dd><span class="org">{{ $user->company }}</span></dd>
          <dt>
            <label><span>Twitter</span>:</label>
          </dt>
          <dd><span><a href="https://twitter.com/{{ $user->twitter_account }}" rel="nofollow" class="twitter">{{ '@' . $user->twitter_account }}</a></span></dd>
          <dt>
            <label>博客:</label>
          </dt>
          <dd><span><a href="{{ $user->personal_website }}" rel="nofollow" target="_blank" class="url">{{ $user->personal_website }}</a></span></dd>
          <dt>
            <label>签名:</label>
          </dt>
          <dd><span>{{ $user->signature }}</span></dd>
          <dt>
            <label>Since:</label>
          </dt>
          <dd><span>{{ $user->created_at }}</span></dd>
        </dl>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>  
  <div class="panel">
    
    <div class="panel-body ">
      <p>{{ $user->description }}</p>
    </div>
    
  </div>

</div>


@stop