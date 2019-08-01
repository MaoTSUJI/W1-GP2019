<!DOCTYPE html>
<html lang="ja">
    <head>
    	<meta charset="UTF-8">
    	<title>@yield('title')</title>

        {{-- cssへのリンク --}}
        <link rel="stylesheet" href="/css/stylesheet.css">

    </head>
    <body data-gr-c-s-loaded="true" cz-shortcut-listen="true">
       
  <!-- Hero -->
    <section class="et-hero-tabs">
        <h1>ここにカルーセル</h1>
        <h3>Sliding content with sticky tab nav</h3>

        {{-- ナビゲーションバー --}}
        <div class="et-hero-tabs-container">
            <a class="et-hero-tab" href="#home">ホーム</a>
            <a class="et-hero-tab" href="#about">大会概要</a>
            <a class="et-hero-tab" href="#schedule">スケジュール</a>
            <a class="et-hero-tab" href="#message">ご挨拶</a>
            <a class="et-hero-tab" href="#access">開催場所</a>
            <a class="et-hero-tab" href="#result">結果</a>
            <a class="et-hero-tab" href="#entry">応募</a>
          <span class="et-hero-tab-slider"></span>
        </div>
    </section>

  <!-- Main -->
    <main class="et-main">
        <section class="et-slide" id="home">
            <h1>ホーム</h1>
            <h3>something about es6</h3>
        </section>
        <section class="et-slide" id="about">
            <h1>大会概要</h1>
            <h3>something about flexbox</h3>
        </section>
        <section class="et-slide" id="schedule">
            <h1>スケジュール</h1>
            <h3>something about react</h3>
        </section>
        <section class="et-slide" id="message">
            <h1>ご挨拶</h1>
            <h3>something about angular</h3>
        </section>
        <section class="et-slide" id="access">
            <h1>開催場所</h1>
            <h3>something about other</h3>
        </section>
        <section class="et-slide" id="result">
            <h1>結果</h1>
            <h3>something about other</h3>
        </section>
        <section class="et-slide" id="entry">
            <h1>応募</h1>
            <h3>something about other</h3>
        </section>
    </main>

{{--         {{- フッター --}}
        {{-- <footer style="position: absolute; left: 0px; bottom: 0px"> --}}
             {{-- <div class="container"> --}}
                {{-- <div class="col-md-12 text-center"> --}}
                    {{-- <p class="copyright">© W1-GP 2019 実行委員会 All rights reserved.</p> --}}
                {{-- </div> --}}
            {{-- </div> --}}
        {{-- </footer> --}}

        <!-- Plugin JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="/js/style.js"></script>

    </body>
</html>