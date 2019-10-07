@extends('weui.layout')

@section('title')
新闻 详情
@endsection

@section('content')
<header class="wy-header">
  <div class="wy-header-icon-back"><span></span></div>
  <div class="wy-header-title">新闻详情</div>
</header>
<div class="weui-content">
  <article class="weui-article">
    <h1>热烈祝贺蓝之蓝股份上市</h1>
    <h3 class="wy-news-time">2016-02-06</h3>
    <section class="wy-news-info">
      <p>热烈祝贺蓝之蓝股份上市热烈祝贺蓝之蓝股份上市热烈祝贺蓝之蓝股份上市热烈祝贺蓝之蓝股份上市热烈祝贺蓝之蓝股份上市热烈祝贺蓝之蓝股份上市热烈祝贺蓝之蓝股份上市</p>
      <p>
        <img src="upload/ban1.jpg" alt="">
        <img src="upload/ban2.jpg" alt="">
      </p>
    </section>
  </article>
  
</div>

<script src="lib/jquery-2.1.4.js"></script> 
<script src="lib/fastclick.js"></script> 
<script type="text/javascript" src="js/jquery.Spinner.js"></script>
<script>
  $(function() {
    FastClick.attach(document.body);
  });
</script>

<script src="js/jquery-weui.js"></script>
@endsection