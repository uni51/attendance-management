<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>LaravelSample - 出席管理</title>
    <!-- 出席データの取得は  Vue.js +  axiosで行うのでAjax通信となります。Ajax通信にCSRF保護を加えるため、
    metaタグにトークンを埋め込んでおく必要があります。 -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Laravel Mix（webpackのラッパー）を使ってCSSやJavaScriptファイルを読み込んでいます。
    設定ファイルはnode_modules/laravel-mix/setup/webpack.config.jsに配置されています。
    また、読み込むアセットを追加・変更したい場合はプロジェクトルートのwebpack.mix.jsを編集します。 -->
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
</head>
 
<body>
<header class="global-header">
    <section class="header-text">
        <h1><a href="{{ route('home') }}">出席管理</a></h1>
 
        <div class="tag-line">出席とるよ！！</div>
    </section>
</header>
 
<main id="app" class="container">
    @yield('content')
</main>
 
<script src="{{ mix('js/app.js') }}"></script>
</body>
 
</html>