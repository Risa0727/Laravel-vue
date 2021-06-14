<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Title</title>
  </head>
  <body>
    <h1>sample</h1>
    <P>Laravel8でVueを使う</P>
    <a href="https://biz.addisteria.com/laravel8_vue_install/" target="_blank">インストール方法</a><br>
    <a href="https://www.ritolab.com/entry/171" target="_blank">簡単なカウントアップ・ダウンのサンプル</a>

    <div id="app">
        <sample-component></sample-component>
    </div>


    <a href="https://qiita.com/minato-naka/items/9241d9c7a7433985056d" target="_blank">Vue.js + LaravelでシンプルなSPA構築</a>
    <script src="{{ asset('/js/app.js') }}"></script>
  </body>
</html>
