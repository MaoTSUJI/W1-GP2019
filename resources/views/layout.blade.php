<!DOCTYPE html>
<html lang="ja">
    <head>
    	<meta charset="UTF-8">
    	<title>@yield('title')</title>

        {{-- FontAwesome --}}
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        {{-- cssへのリンク --}}
        <link rel="stylesheet" href="/css/stylesheet.css">
        <link rel="stylesheet" href="/css/responsive.css">
        <link rel="stylesheet" href="/css/home.css">

        {{-- bootstrapの追加 --}}
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        {{-- bootstrapの追加 --}}
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    </head>


    <body data-gr-c-s-loaded="true" cz-shortcut-listen="true">

        <section class="et-hero-tabs">

            {{-- カルーセル --}}
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="/img/carousel/topImage1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="/img/carousel/topImage2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="/img/carousel/topImage3.jpg" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>

            {{-- カルーセルスライダー --}}
{{--             <div class="worksslider inside">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="5000">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="/img/carousel/topImage1" alt="">
                      <div class="carousel-caption">
                        キャプション
                      </div>
                    </div>
                    <div class="item">
                      <img src="/img/carousel/topImage2" alt="">
                      <div class="carousel-caption">
                        キャプション
                      </div>
                    </div>
                    <div class="item">
                      <img src="/img/carousel/topImage3" alt="">
                      <div class="carousel-caption">
                        キャプション
                      </div>
                    </div>
                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div> --}}

            {{-- ナブバー リンク --}}
            <div class="navbar-link">

                <div class="header-left">
                    <img class="logo" src="/img/W1GP11th.png" alt="">
                </div>
                {{-- メニューアイコン --}}
                <div class="header-right">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars menu-icon"></span>
                    </button>
                </div>
            {{-- ↑↑↑↑↑↑↑↑↑↑ここまでオリジナル↑↑↑↑↑↑↑↑↑↑↑ --}}

                <nav class="et-hero-tabs-container">
                    <a class="et-hero-tab" href="#home">ホーム</a>
                    <a class="et-hero-tab" href="#about">大会概要</a>
                    <a class="et-hero-tab" href="#schedule">スケジュール</a>
                    <a class="et-hero-tab" href="#message">ご挨拶</a>
                    <a class="et-hero-tab" href="#access">開催場所</a>
                    <a class="et-hero-tab" href="#result">結果</a>
                    <a class="et-hero-tab" href="#entry">応募</a>
                    <span class="et-hero-tab-slider"></span>
                </nav>
                

            {{-- ↓ここも --}}
            </div>
            
        </section>

      <!-- Main -->
        <main class="et-main">



            <section class="et-slide" id="home">
                <h1>ホーム</h1>
                <h3>home</h3>

                <div class="container mt-5 mb-5">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <h4>Latest News</h4>
                            <ul class="timeline">
                                <li>
                                    <a target="_blank" href="https://www.totoprayogo.com/#">New Web Design</a>
                                    <a href="#" class="float-right">21 March, 2014</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                                </li>
                                <li>
                                    <a href="#">21 000 Job Seekers</a>
                                    <a href="#" class="float-right">4 March, 2014</a>
                                    <p>Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                                </li>
                                <li>
                                    <a href="#">Awesome Employers</a>
                                    <a href="#" class="float-right">1 April, 2014</a>
                                    <p>Fusce ullamcorper ligula sit amet quam accumsan aliquet. Sed nulla odio, tincidunt vitae nunc vitae, mollis pharetra velit. Sed nec tempor nibh...</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


            </section>





            <section class="et-slide py-4 px-3" id="about">
                <h1>大会概要</h1>
                <h3>home</h3>
            </section>
            <section class="et-slide" id="schedule">
                <h1>スケジュール</h1>
                <h3>schedule</h3>
            </section>
            <section class="et-slide" id="message">
                <h1>ご挨拶</h1>
                <h3>message</h3>
            </section>
            <section class="et-slide" id="access">
                <h1>開催場所</h1>
                <h3>access</h3>
            </section>
            <section class="et-slide" id="result">
                <h1>結果</h1>
                <h3>result</h3>
            </section>
            <section class="et-slide" id="entry">
                <h1>応募</h1>
                <h3>entry</h3>
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
        <script src="/js/navbar.js"></script>

    </body>
</html>