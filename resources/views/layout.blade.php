<!DOCTYPE html>
<html lang="ja">
    <head>
    	<meta charset="UTF-8">
    	<title>@yield('title')</title>

        {{-- cssへのリンク --}}
        <link rel="stylesheet" href="/css/stylesheet.css">
        <link rel="stylesheet" href="/css/responsive.css">
        {{-- FontAwesome --}}
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


        {{-- bootstrapの追加 --}}
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    </head>
    <body data-gr-c-s-loaded="true" cz-shortcut-listen="true">
       
  <!-- Hero -->
    <!-- Just an image -->
        {{-- <nav class="navbar navbar-light bg-light">
          <a class="navbar-brand" href="#">
            <img src="/img/W1GP11th.png" width="50" height="30" alt="">
          </a>
        </nav> --}}
        {{--  --}}

        <section class="et-hero-tabs">
            <h1>ここにカルーセル</h1>
            <h3>Sliding content with sticky tab nav</h3>


            {{-- ナビゲーションバー --}}
            <div class="et-hero-tabs-container">
                <span class="fa fa-bars menu-icon"></span>

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

        {{-- フッター --}}
        <footer style="left: 0px; bottom: 0px">
             <div class="container">
                <div class="col-md-12 text-center">
                    <p class="copyright">© W1-GP 2019 実行委員会 All rights reserved.</p>
                </div>
            </div>
        </footer>

        {{-- javascript --}}
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <!-- Plugin JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="/js/style.js"></script>

    </body>
</html>