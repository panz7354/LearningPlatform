@extends('layouts.app')

@section('style')
    <style>
        h2{
            margin-top: 40px;
        }
        h3{
            margin-top: 30px;
            padding-left: 40px;
        }
        h4{
            margin-top: 40px;
            padding-left: 40px;
        }
        p{
            padding: 10px 40px;
        }
        .learn{
            background-color: #4a5c73;
            color: white;
            margin-left: 0%;
            padding: 10px 40px 50px;
        }
        .learn a{
            color: white;
        }
        .af{
            display: flex;
            justify-content: space-around;
            padding-bottom: 10px 0px 20px;
        }
        .content{
            padding: 20px 70px;
        }
        .start-btn{
            cursor: pointer;
            padding: 10px 20px;
            background-color: #8fa5c1;
            color: white;
            border: none;
            border-radius: 5px;
        }
        .start-btn:hover{
            background-color: #7b90a8;
        }
        table{
            margin-left: 40px;
        }
        pre {
            background-color: #f7f6f3;
            border-radius: 6px;
            border: 1px solid #ededed;
            padding: 16px 20px;
            margin: 15px 40px;
            overflow-x: auto;
            font-family: 'Consolas', 'Monaco', 'Courier New', monospace; /* 開發者常用的等寬字體 */
            font-size: 14px;
            line-height: 1.5;          /* 舒適的閱讀行高 */
            color: rgb(193, 0, 0);            /* Notion 預設的深灰色文字 */
        }

        /* 確保 pre 裡面的 code 標籤不會干擾排版 */
        pre code {
            font-family: inherit;
            color: inherit;
        }

        /* 標題與播放器的容器 */
        .header-container {
            display: flex;
            justify-content: space-between; /* 標題在左，播放器在右 */
            align-items: center;           /* 垂直置中 */
            padding: 20px 40px;            /* 配合您原本的 padding */
        }

        .audio-player-simple {
            background: #fff;
            padding: 5px 10px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .audio-player-simple span {
            font-size: 14px;
            color: #666;
            font-weight: bold;
        }

        /* 縮小播放器尺寸 */
        .audio-player-simple audio {
            height: 50px;
            width: 300px;
        }

        img{
            display: block;
            margin: 0 auto;
            width: 80%;
        }

        @media screen and (max-width: 768px) {
            /* 1. 標題與播放器改為上下堆疊 */
            .header-container {
                flex-direction: column;
                align-items: flex-start; /* 靠左對齊 */
                padding: 20px 15px;      /* 縮減左右間距 */
                gap: 15px;               /* 標題和播放器增加一點垂直距離 */
            }

            /* 2. 學習目標選單改為垂直排列 */
            .af {
                flex-direction: column;
                gap: 15px; /* 每個連結之間的上下距離 */
                padding-left: 20px;
            }

            /* 3. 縮小整體內外邊距，把空間還給文字 */
            .content {
                padding: 20px 15px;
            }

            h3, h4, p {
                padding-left: 0;
                padding-right: 0;
            }

            table {
                margin-left: 0;
                width: 100%;    /* 讓表格撐滿手機畫面 */
            }

            pre {
                margin: 15px 0; /* 取消程式碼區塊兩側的 40px margin */
            }

            .learn {
                padding: 10px 15px 30px;
            }
        }
    </style>
@endsection

@section('content')
    <div class="header-container">
        <h1>第4章 物件導向程式設計</h1>

        <div class="audio-player-simple">
            <span>範例音檔：</span>
            <audio controls>
                <source src="{{ asset('audio/4_bell.mp3') }}" type="audio/mpeg">
                您的瀏覽器不支援播放
            </audio>
        </div>
    </div>

    <div class="learn">
        <h3 style="margin-top: 20px">學習目標：</h3>
        <div class="af">
            <a href="#section2-1" >1. 類別裡的函數</a>
            <a href="#section2-2" >2. 繼承、多型與封裝</a>
        </div>
    </div>

    <div class="content">
        <h2 id="section2-1">1. 類別裡的函數</h2>
        <h3>重點語法</h3>
        <h4>(一) 類別（class）</h4>
        <p>
            •　類別是用來建立「物件」的藍圖<br>
            •　可將「資料（屬性）」與「功能（函數）」包在一起
        </p>
        <pre>class Dog:
    pass
</pre>

        <h4>(二) 類別中的函數（方法 method）</h4>
        <p>
            •　類別中的函數稱為「方法（method）」<br>
            •　用來描述物件可以執行的動作:
        </p>
        <pre>class Dog:
    def bark(self):
        print("汪汪")
</pre>

        <h4>(三) self 的概念</h4>
        <p>
            •　self 代表「物件本身」<br>
            •　在類別方法中一定要寫在第一個參數
        </p>
        <pre>class Dog:
    def bark(self):
        print("我是狗")
</pre>

        <h4>(四) 建立物件並呼叫方法</h4>
        <p>
            •　建立物件是根據「狗狗設計圖」（Dog 類別），真正生產出一隻「實體的狗狗」（dog1 物件）。<br>
            •　呼叫方法是叫 dog1 這隻狗去執行「吠叫」這個動作。
        </p>
        <pre>dog1 = Dog()      # 建立物件：先產出一隻狗
dog1.bark()       # 呼叫方法：再叫牠吠叫一聲
</pre>

        <h4>(五) 類別中的參數傳入</h4>
        <p>•　方法也可以接收參數</p>
        <pre>
class Dog:
    def bark(self, name):
        print(name + " 在叫")

dog1 = Dog()
dog1.bark("小白")
</pre>

        <h4>(六) 建構子 __init__</h4>
        <p>
            •　用來在建立物件時「設定初始資料」<br>
            •　__init__會在物件建立時自動執行
        </p>
        <pre>class Dog:
    def __init__(self, name):
        self.name = name  # 儲存名稱

    def bark(self):
        print(self.name + " 在叫")

dog1 = Dog("小白")
dog1.bark()
</pre>

        <h4>(七) 多個物件（理解物件概念）</h4>
        <p>
            •　同一個類別可以建立多個物件<br>
            •　每個物件的資料不同
        </p>
        <pre>dog1 = Dog("小白")
dog2 = Dog("小黑")

dog1.bark()
dog2.bark()
</pre>

        <hr>
        <h3>範例程式說明</h3>
        <h4>範例(一)：會自我介紹的狗狗 🐶</h4>
        <p>
            請撰寫一段程式，完成以下功能：<br><br>
            　　1.　建立一個類別 Dog <br>
            　　2.　使用 __init__ 建構子，讓狗狗可以設定名字 <br>
            　　3.　將名字存成屬性（例如：self.name） <br>
            　　4.　建立一個方法 say_hello() <br>
            　　5.　呼叫方法時，輸出：「我是小黃！」（依照不同名字改變）int()：將字串型態轉換為整數型態
        </p>
        <pre>參考程式：
# 定義類別 Dog
class Dog:

    # 建構子：建立物件時自動執行
    def __init__(self, name):
        self.name = name  # 將名字存到物件中

    # 方法：狗狗自我介紹
    def say_hello(self):
        print("我是" + self.name + "！")

# 建立物件（設定名字為小黃）
dog1 = Dog("小黃")

# 呼叫方法
dog1.say_hello()
</pre>
        <h4>範例(二)：使播放《耶誕鈴聲》旋律</h4>
        <img src="{{ asset('img/bell.jpg') }}" alt="">
        <p>
            此行五線譜是《耶誕鈴聲》的第一句旋律，此行音符為Si Si Si---Si Si Si ---Si Re(高) Sol La Si
            <br>
            請撰寫一段程式，完成以下功能：
            <br><br>
            　　1.　建立一個類別 MusicPlayer<br>
            　　2.　使用 __init__ 建構子，初始化 MIDI 播放器<br>
            　　3.　建立一個方法 play_song() <br>
            　　4.　在方法中播放《耶誕鈴聲》第一句旋律：Si Si Si — Si Si Si — Si Re(高) Sol La Si
        </p>
        <p>
            提示（音符對應）<br><br>
            　　•　Si = B = 71 <br>
            　　•　Re(高) = D = 74 <br>
            　　•　Sol = G = 67 <br>
            　　•　La = A = 69
        </p>
        <pre>參考程式：
import time
import pygame.midi

# 定義類別
class MusicPlayer:

    # 建構子：初始化 MIDI
    def __init__(self):
        pygame.midi.init()
        self.player = pygame.midi.Output(0)
        self.player.set_instrument(0)  # 鋼琴

        # 音符對照表
        self.note_map = {
            "B": 71,
            "D_high": 74,
            "G": 67,
            "A": 69
        }

        self.beat = 0.5

    # 播放歌曲的方法
    def play_song(self):
        print("播放《耶誕鈴聲》🎄")

        melody = ["B", "B", "B", "B", "B", "B", "B", "D_high", "G", "A", "B"]

        for n in melody:
            midi_num = self.note_map[n]
            self.player.note_on(midi_num, 100)
            time.sleep(self.beat)
            self.player.note_off(midi_num, 100)

# 建立物件並播放
music = MusicPlayer()
music.play_song()
</pre>
        <h2 id="section2-2">2. 繼承、多型與封裝</h2>
        <h3>重點語法</h3>
        <h4>(一) 繼承（Inheritance）</h4>
        <p>
            　　•　繼承是指「子類別可以直接使用父類別的方法」<br>
            　　•　可重複使用程式碼，減少重複撰寫
        </p>
        <pre>class Animal:
    def speak(self):
        print("動物會發出聲音")

# Dog 繼承 Animal
class Dog(Animal):
    pass

dog1 = Dog()
dog1.speak()  # 使用父類別的方法
</pre>

        <h4>(二) 多型（Polymorphism）</h4>
        <p>•　不同類別可以使用「相同方法名稱」，但行為不同。方法名稱相同（speak），不同物件有不同結果</p>
        <pre>class Dog:
    def speak(self):
        print("汪汪")

class Cat:
    def speak(self):
        print("喵喵")

dog = Dog()
cat = Cat()

dog.speak()
cat.speak()
</pre>
        <h4>(三) 方法覆寫（Override）</h4>
        <p>
            •　子類別方法會「覆蓋」父類別方法<br>
            •　子類別可以「改寫」父類別的方法
        </p>
        <pre>class Animal:
    def speak(self):
        print("動物發聲")

class Dog(Animal):
    def speak(self):
        print("汪汪")

dog = Dog()
dog.speak()
</pre>

        <h4>(四) 封裝（Encapsulation）</h4>
        <p>
            •　將資料與方法包在類別中 <br>
            •　可限制資料被直接修改，保護資料不被隨意修改<br>
            •　self.__變數（前面加 __），使該變數成為私有屬性，外部無法直接存取
        </p>
        <pre>class Dog:
    def __init__(self, name):
        self.name = name      # 公開屬性
        self.__age = 3        # 私有屬性（前面加 __）

    def show(self):
        print(self.name, self.__age)
</pre>

        <hr>
        <h3>範例程式說明</h3>
        <h4>範例(一)：會發出不同聲音的動物 🐶🐱</h4>
        <p>
            請撰寫一段程式，完成以下功能：<br><br>
            　　1.　建立一個父類別 Animal：包含一個方法 speak()，輸出：「動物會發出聲音」 <br>
            　　2.　建立一個子類別 Dog，繼承 Animal：覆寫（override）speak() 方法，輸出：「狗狗汪汪」 <br>
            　　3.　建立一個子類別 Cat，繼承 Animal ：覆寫（override）speak() 方法，輸出：「貓咪喵喵」 <br>
            　　4.　建立物件並呼叫方法，觀察不同結果
        </p>
        <pre>參考程式：
# 父類別
class Animal:
    def speak(self):
        print("動物會發出聲音")

# 子類別 Dog（繼承 Animal）
class Dog(Animal):
    # 覆寫方法
    def speak(self):
        print("狗狗汪汪")

# 子類別 Cat（繼承 Animal）
class Cat(Animal):
    # 覆寫方法
    def speak(self):
        print("貓咪喵喵")

# 建立物件
dog = Dog()
cat = Cat()

# 呼叫方法
dog.speak()
cat.speak()
</pre>

        <h4>範例(二)：用類別播放《耶誕鈴聲》（進階版）</h4>
        <img src="{{ asset('img/bell.jpg') }}" alt="">
        <p>
            此行五線譜是《耶誕鈴聲》的第一句旋律，此行音符為Si Si Si---Si Si Si ---Si Re(高) Sol La Si <br>
            請撰寫一段程式，完成以下功能：<br><br>
            　　1.　建立一個父類別 Music：包含一個方法 play()，輸出「開始播放音樂 ！」  <br>
            　　2.　建立一個子類別 JingleBell，繼承 Music：覆寫play() 方法，並在方法中播放《耶誕鈴聲》第一句旋律<br>
            　　3.　建立物件並呼叫 play() 方法<br>
        </p>
        <p>
            提示（音符對應）：<br><br>
            　　Si = B = 71 <br>
            　　Re(高) = D = 74<br>
            　　Sol = G = 67<br>
            　　La = A = 69
        </p>
        <pre>參考程式：
import time
import pygame.midi

# 父類別
class Music:
    def play(self):
        print("開始播放音樂 🎵")

# 子類別
class JingleBell(Music):

    # 覆寫方法
    def play(self):
        pygame.midi.init()
        player = pygame.midi.Output(0)
        player.set_instrument(0)

        note_map = {
            "B": 71,
            "D_high": 74,
            "G": 67,
            "A": 69
        }

        melody = ["B", "B", "B", "B", "B", "B", "B", "D_high", "G", "A", "B"]

        print("播放《耶誕鈴聲》🎄")

        for n in melody:
            midi_num = note_map[n]
            player.note_on(midi_num, 100)
            time.sleep(0.5)
            player.note_off(midi_num, 100)

# 建立物件
song = JingleBell()

# 呼叫方法
song.play()
</pre>
    </div>


@endsection
