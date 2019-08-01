class StickyNavigation {
    
    constructor() {
        this.currentId = null;
        this.currentTab = null;
        this.tabContainerHeight = 70;
        let self = this;
        $('.et-hero-tab').click(function() { 
            self.onTabClick(event, $(this)); 
        });
        $(window).scroll(() => { this.onScroll(); });
        $(window).resize(() => { this.onResize(); });
    }
    
    onTabClick(event, element) {
        event.preventDefault();
        let scrollTop = $(element.attr('href')).offset().top - this.tabContainerHeight + 1;
        $('html, body').animate({ scrollTop: scrollTop }, 600);
    }
    
    // スクロースしたら
    onScroll() {
        this.checkTabContainerPosition();
        // 今いるセレクターの位置取得
        this.findCurrentTabSelector();
    }

    onResize() {
        if(this.currentId) {
            this.setSliderCss();
    }
        }
    
    // 
    checkTabContainerPosition() {
        // 画面上(x=0)から、ナブバーのトップ位置までの距離
        let offset = $('.et-hero-tabs').offset().top + $('.et-hero-tabs').height() - this.tabContainerHeight;
        
        if($(window).scrollTop() > offset) {
            // スクロール距離が、offsetよりも大きかったら、クラスを追加
            $('.navbar-link').addClass('et-hero-tabs-container--top');
        } 
        else {
            // クラスを削除
            $('.navbar-link').removeClass('et-hero-tabs-container--top');
        }
    }
    
    // 今いるセレクターを探す
    findCurrentTabSelector(element) {
        let newCurrentId;
        let newCurrentTab;
        let self = this;
        // ('要素').each(function()){}) 要素の繰り返し処理
        $('.et-hero-tab').each(function() {
            // this要素のhrefを取得し、定数に格納
            let id = $(this).attr('href');
            // offset()メソッド　要素の位置を座標で取得
            // 取得した要素の、位置情報topを座標で取得
            let offsetTop = $(id).offset().top - self.tabContainerHeight;
            let offsetBottom = $(id).offset().top + $(id).height() - self.tabContainerHeight;
            if($(window).scrollTop() > offsetTop && $(window).scrollTop() < offsetBottom) {
                newCurrentId = id;
                newCurrentTab = $(this);
                // console.log(newCurrentId, newCurrentTab)
            }
        });
        if(this.currentId != newCurrentId || this.currentId === null) {
            this.currentId = newCurrentId;
            this.currentTab = newCurrentTab;
            this.setSliderCss();
        }
        // console.log(this.currentId,this.currentTab)
    }

    // スライダーのcss（xy座標位置）を設定
    setSliderCss() {
        let width = 0;
        let left = 0;
        if(this.currentTab) {
            width = this.currentTab.css('width');
            left = this.currentTab.offset().left;
        }
        // jQueryでstyle属性を直書きする場合、$("要素").css("プロパティ","値")
        $('.et-hero-tab-slider').css('width', width);
        $('.et-hero-tab-slider').css('left', left);
    }
    
}

new StickyNavigation();