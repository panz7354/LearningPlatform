@extends('layouts.app')

@section('style')
    @include('layouts._lesson-styles')
@endsection

@section('content')
<div class="lesson-wrap">

    {{-- ===== 標題列 ===== --}}
    <div class="lesson-header">
        <h1>第 4 章 物件導向程式設計</h1>
        <div class="audio-wrap">
            <span>範例音檔</span>
            <audio controls>
                <source src="{{ asset('audio/4_bell.mp3') }}" type="audio/mpeg">
                您的瀏覽器不支援播放
            </audio>
        </div>
    </div>

    {{-- ===== 學習目標 ===== --}}
    <div class="lesson-goals">
        <h3>學習目標</h3>
        <div class="goal-links">
            <a href="#section4-1">1. 類別裡的函數</a>
            <a href="#section4-2">2. 繼承、多型與封裝</a>
        </div>
    </div>

    {{-- ===== 主要內容 ===== --}}
    <div class="lesson-content">

        <h2 id="section4-1">1. 類別裡的函數</h2>

        <h3>重點語法</h3>

        <h4>(一) 類別（class）</h4>
        <p>
            • 類別是用來建立「物件」的設計藍圖。<br>
            • 例如：「Dog」類別就像狗狗的設計藍圖，裡面會告訴電腦：狗狗有什麼資料、狗狗可以做什麼動作。<br>
            • 就像音樂播放器也可以有自己的設計圖，裡面可以放：音符資料、播放音樂的功能。<br>
            • 如下程式碼，將「資料（屬性）」與「功能（函數）」包在一起：
        </p>
        <pre>class Dog:
    print("汪汪")</pre>
        <p>
            • <code>class Dog:</code> 代表建立一個名為 Dog 的類別。<br>
            • <code>print("汪汪")</code> 代表讓 Dog 能夠汪汪叫的功能。
        </p>

        <h4>(二) 類別中的函數（方法 method）</h4>
        <p>
            • 類別中的函數稱為「方法（method）」。<br>
            • 方法就像是物件會做的動作。<br>
            • 例如：狗狗可以「汪汪叫」、音樂播放器可以「播放音樂」<br>
            • 如下程式碼：
        </p>
        <pre>class Dog:
    def bark(self):
        print("汪汪")</pre>
        <p>
            • <code>def bark(self):</code> 代表建立一個 bark 方法。<br>
            • <code>print("汪汪")</code> 代表讓狗狗發出「汪汪」的聲音。
        </p>

        <h4>(三) self 的概念</h4>
        <p>
            • self 代表「物件自己」。可以把它想成：「這隻狗自己」或「這台音樂播放器自己」。<br>
            • 在類別的方法中，第一個參數都要寫 self。<br>
            • 如下程式碼：
        </p>
        <pre>class Dog:
    def bark(self):
        print("我是狗狗")</pre>
        <p>
            • 這裡的 self，代表正在執行 bark() 的那隻狗。<br>
            • 最外層的 class Dog 是最高統帥（定義類別）；往內縮 4 格的 def bark 則是它的下屬（定義功能）；而最深處的 print 則是該功能的具體執行內容。
        </p>
        <table>
            <tr><th>縮排層級</th><th>程式碼內容</th><th>邏輯意義</th></tr>
            <tr><td>第一層 (0 空格)</td><td>class Dog:</td><td>定義類別：宣告一個名為 Dog 的主體。</td></tr>
            <tr><td>第二層 (4 空格)</td><td>def bark(self):</td><td>定義方法：此函數隸屬於 Dog 類別，是其成員方法。</td></tr>
            <tr><td>第三層 (8 空格)</td><td>print("我是狗狗")</td><td>執行陳述式：此邏輯隸屬於 bark 方法，僅在方法被調用時執行。</td></tr>
        </table>

        <h4>(四) 建立物件並呼叫方法</h4>
        <p>
            • 建立物件是根據「狗狗設計圖」（Dog 類別），真正生產出一隻「實體的狗狗」（dog1 物件）。<br>
            • 呼叫方法是叫 dog1 這隻狗去執行「吠叫」這個動作。
        </p>
        <pre>dog1 = Dog()      # 建立物件：先產出一隻狗
dog1.bark()       # 呼叫方法：再叫牠吠叫一聲</pre>

        <h5>🎵 音樂情境小舉例</h5>
        <p>如果今天建立一個「音樂播放器」類別MusicPlayer，如下程式碼：</p>
        <pre>class MusicPlayer:
    play_music()</pre>
        <p>此播放器裡還有一個方法叫做 <code>play_music()</code>，它的功能就是播放《小星星》或《倫敦鐵橋》的旋律 🎵</p>

        <h4>(五) 類別中的參數傳入</h4>
        <p>
            • 方法（method）除了可以執行動作，也可以接收「參數」。<br>
            • 參數可以想成：「要提供給程式的小資料」。<br>
            • 例如：告訴程式這隻狗狗的名字是什麼。<br>
            • 如下程式碼：
        </p>
        <pre>class Dog:
    def bark(self, name):
        print(name + " 在叫")

dog1 = Dog()
dog1.bark("小白")</pre>
        <p>
            • name 是參數。"小白" 會傳入方法中。<br>
            • 程式執行後會輸出：小白 在叫
        </p>

        <h5>🎵 音樂情境小舉例</h5>
        <p>如果是音樂播放器：</p>
        <pre>play_music("小星星")</pre>
        <p>"小星星" 就是傳入的參數。播放器就知道要播放哪一首歌。</p>

        <h4>(六) 建構子 __init__</h4>
        <p>
            • <code>__init__</code> 是一種特別的方法。當建立物件時，<code>__init__</code> 會自動執行。<br>
            • 它的功能是：幫物件設定「一開始的資料」。<br>
            • 如下程式碼：
        </p>
        <pre>class Dog:
    def __init__(self, name):
        self.name = name  # 儲存名稱

    def bark(self):
        print(self.name + " 在叫")

dog1 = Dog("小白")
dog1.bark()</pre>
        <p>
            程式邏輯說明：<br>
            <code>dog1 = Dog("小白")</code><br>
            建立物件時，"小白" 會自動傳入 <code>__init__</code>。<br>
            接著：<code>self.name = name</code>會把名字儲存起來。<br>
            因此之後呼叫：<code>dog1.bark()</code>就能輸出：小白 在叫
        </p>

        <h5>🎵 音樂情境小舉例</h5>
        <p>如果建立音樂播放器：</p>
        <pre>music = MusicPlayer("鋼琴")</pre>
        <p>可以在建立播放器時，先設定好指定的樂器種類是鋼琴。</p>

        <h4>(七) 多個物件（理解物件概念）</h4>
        <p>
            • 同一個類別，可以建立很多不同的物件。<br>
            • 就像：可以有很多隻狗狗，也可以有很多音樂播放器<br>
            • 每個物件的資料都不同<br>
            • 如下程式碼：
        </p>
        <pre>dog1 = Dog("小白")
dog2 = Dog("小黑")

dog1.bark()
dog2.bark()</pre>
        <p>
            程式執行結果：<br>
            小白 在叫<br>
            小黑 在叫<br><br>
            概念說明：dog1 和 dog2都是根據同一個 Dog 類別建立的。但是：名字不同、資料不同。因此每個物件都可以有自己的內容。
        </p>

        <h5>🎵 音樂情境小舉例</h5>
        <p>例如建立兩個播放器：</p>
        <pre>music1 = MusicPlayer("鋼琴")
music2 = MusicPlayer("吉他")</pre>
        <p>雖然這兩個都是播放器，但分別可以播放出不同樂器的聲音。</p>

        <hr>

        <h3>範例程式說明</h3>

        <h4>範例(一)：會自我介紹的狗狗 🐶</h4>
        <p>
            請撰寫一段程式，完成以下功能：<br><br>
              1. 建立一個類別 Dog<br>
              2. 使用 __init__ 建構子，讓狗狗可以設定名字<br>
              3. 將名字存成屬性（例如：self.name）<br>
              4. 建立一個方法 say_hello()<br>
              5. 呼叫方法時，輸出：「我是小黃！」（依照不同名字改變）
        </p>
        <pre>參考程式：

# 【題號1】
# 定義一個名為 Dog 的類別
# 類別（class）可以想像成「狗狗的設計圖」
class Dog:
    # 【題號2】
    # 建構子 __init__
    # 當建立物件時，會自動執行
    # name 是建立物件時傳入的名字
    def __init__(self, name):
        # 【題號3】
        # self.name 是物件的屬性
        # 功能：將傳入的名字儲存到物件中
        # 例如：把「小黃」存進 self.name
        self.name = name

    # 【題號4】
    # 建立 say_hello() 方法
    # 功能：讓狗狗進行自我介紹
    def say_hello(self):
        # 顯示狗狗名字
        # self.name 會取得物件儲存的名字
        print("我是" + self.name + "！")

# 【題號5】
# 建立 Dog 類別的物件
# 並傳入名字「小黃」
dog1 = Dog("小黃")

# 呼叫 say_hello() 方法
# 讓狗狗進行自我介紹
dog1.say_hello()</pre>
        <p><strong>程式執行結果：</strong></p>
        <pre>我是小黃！</pre>

        <h4>範例(二)：使播放《耶誕鈴聲》旋律</h4>
        <img src="{{ asset('img/bell.jpg') }}" alt="耶誕鈴聲五線譜">
        <p>
            此行五線譜是《耶誕鈴聲》的第一句旋律，此行音符為 Si Si Si — Si Si Si — Si Re(高) Sol La Si<br>
            (其餘實作請參考進階教學內容完成)
        </p>

    </div>
</div>
@endsection
