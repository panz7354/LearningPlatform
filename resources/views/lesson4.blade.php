@extends('layouts.app')

@section('style')
    @include('_lesson-styles')
@endsection

@section('content')
<div class="lesson-wrap">

    {{-- ===== 標題列 ===== --}}
    <div class="lesson-header">
        <h1>第 4 章　物件導向程式設計</h1>
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
            • 類別是用來建立「物件」的藍圖<br>
            • 可將「資料（屬性）」與「功能（函數）」包在一起
        </p>
        <pre>class Dog:
    pass</pre>

        <h4>(二) 類別中的函數（方法 method）</h4>
        <p>
            • 類別中的函數稱為「方法（method）」<br>
            • 用來描述物件可以執行的動作
        </p>
        <pre>class Dog:
    def bark(self):
        print("汪汪")</pre>

        <h4>(三) self 的概念</h4>
        <p>
            • self 代表「物件本身」<br>
            • 在類別方法中一定要寫在第一個參數
        </p>
        <pre>class Dog:
    def bark(self):
        print("我是狗")</pre>

        <h4>(四) 建立物件並呼叫方法</h4>
        <p>
            • 建立物件是根據「狗狗設計圖」（Dog 類別），真正生產出一隻「實體的狗狗」（dog1 物件）。<br>
            • 呼叫方法是叫 dog1 這隻狗去執行「吠叫」這個動作。
        </p>
        <pre>dog1 = Dog()
dog1.bark()</pre>

        <h4>(五) 類別中的參數傳入</h4>
        <p>• 方法也可以接收參數</p>
        <pre>class Dog:
    def bark(self, name):
        print(name + " 在叫")

dog1 = Dog()
dog1.bark("小白")</pre>

        <h4>(六) 建構子 __init__</h4>
        <p>
            • 用來在建立物件時「設定初始資料」<br>
            • __init__ 會在物件建立時自動執行
        </p>
        <pre>class Dog:
    def __init__(self, name):
        self.name = name

    def bark(self):
        print(self.name + " 在叫")

dog1 = Dog("小白")
dog1.bark()</pre>

        <h4>(七) 多個物件（理解物件概念）</h4>
        <p>
            • 同一個類別可以建立多個物件<br>
            • 每個物件的資料不同
        </p>
        <pre>dog1 = Dog("小白")
dog2 = Dog("小黑")

dog1.bark()
dog2.bark()</pre>

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
class Dog:

    def __init__(self, name):
        self.name = name

    def say_hello(self):
        print("我是" + self.name + "！")

dog1 = Dog("小黃")
dog1.say_hello()</pre>

        <h4>範例(二)：使用類別播放《耶誕鈴聲》旋律</h4>
        <img src="{{ asset('img/bell.jpg') }}" alt="耶誕鈴聲五線譜">
        <p>
            此行五線譜是《耶誕鈴聲》的第一句旋律，此行音符為 Si Si Si — Si Si Si — Si Re(高) Sol La Si<br><br>
            請撰寫一段程式，完成以下功能：<br><br>
            　　1. 建立一個類別 MusicPlayer<br>
            　　2. 使用 __init__ 建構子，初始化 MIDI 播放器<br>
            　　3. 建立一個方法 play_song()<br>
            　　4. 在方法中播放《耶誕鈴聲》第一句旋律<br><br>
            提示（音符對應）：<br><br>
            　　• Si = B = 71<br>
            　　• Re(高) = D = 74<br>
            　　• Sol = G = 67<br>
            　　• La = A = 69
        </p>
        <pre>參考程式：
import time
import pygame.midi

class MusicPlayer:

    def __init__(self):
        pygame.midi.init()
        self.player = pygame.midi.Output(0)
        self.player.set_instrument(0)
        self.note_map = {
            "B": 71,
            "D_high": 74,
            "G": 67,
            "A": 69
        }
        self.beat = 0.5

    def play_song(self):
        print("播放《耶誕鈴聲》🎄")
        melody = ["B", "B", "B", "B", "B", "B", "B", "D_high", "G", "A", "B"]
        for n in melody:
            midi_num = self.note_map[n]
            self.player.note_on(midi_num, 100)
            time.sleep(self.beat)
            self.player.note_off(midi_num, 100)

music = MusicPlayer()
music.play_song()</pre>

        <h2 id="section4-2">2. 繼承、多型與封裝</h2>

        <h3>重點語法</h3>

        <h4>(一) 繼承（Inheritance）</h4>
        <p>
            　　• 繼承是指「子類別可以直接使用父類別的方法」<br>
            　　• 可重複使用程式碼，減少重複撰寫
        </p>
        <pre>class Animal:
    def speak(self):
        print("動物會發出聲音")

class Dog(Animal):
    pass

dog1 = Dog()
dog1.speak()  # 使用父類別的方法</pre>

        <h4>(二) 多型（Polymorphism）</h4>
        <p>• 不同類別可以使用「相同方法名稱」，但行為不同</p>
        <pre>class Dog:
    def speak(self):
        print("汪汪")

class Cat:
    def speak(self):
        print("喵喵")

dog = Dog()
cat = Cat()
dog.speak()
cat.speak()</pre>

        <h4>(三) 方法覆寫（Override）</h4>
        <p>
            　　• 子類別方法會「覆蓋」父類別方法<br>
            　　• 子類別可以「改寫」父類別的方法
        </p>
        <pre>class Animal:
    def speak(self):
        print("動物發聲")

class Dog(Animal):
    def speak(self):
        print("汪汪")

dog = Dog()
dog.speak()</pre>

        <h4>(四) 封裝（Encapsulation）</h4>
        <p>
            　　• 將資料與方法包在類別中<br>
            　　• self.__變數（前面加 __），使該變數成為私有屬性，外部無法直接存取
        </p>
        <pre>class Dog:
    def __init__(self, name):
        self.name = name      # 公開屬性
        self.__age = 3        # 私有屬性

    def show(self):
        print(self.name, self.__age)</pre>

        <hr>

        <h3>範例程式說明</h3>

        <h4>範例(一)：會發出不同聲音的動物 🐶🐱</h4>
        <p>
            請撰寫一段程式，完成以下功能：<br><br>
            　　1. 建立一個父類別 Animal：包含一個方法 speak()，輸出「動物會發出聲音」<br>
            　　2. 建立一個子類別 Dog，繼承 Animal：覆寫 speak()，輸出「狗狗汪汪」<br>
            　　3. 建立一個子類別 Cat，繼承 Animal：覆寫 speak()，輸出「貓咪喵喵」<br>
            　　4. 建立物件並呼叫方法，觀察不同結果
        </p>
        <pre>參考程式：
class Animal:
    def speak(self):
        print("動物會發出聲音")

class Dog(Animal):
    def speak(self):
        print("狗狗汪汪")

class Cat(Animal):
    def speak(self):
        print("貓咪喵喵")

dog = Dog()
cat = Cat()
dog.speak()
cat.speak()</pre>

        <h4>範例(二)：用類別播放《耶誕鈴聲》（進階版）</h4>
        <img src="{{ asset('img/bell.jpg') }}" alt="耶誕鈴聲五線譜">
        <p>
            此行五線譜是《耶誕鈴聲》的第一句旋律，此行音符為 Si Si Si — Si Si Si — Si Re(高) Sol La Si<br><br>
            請撰寫一段程式，完成以下功能：<br><br>
            　　1. 建立一個父類別 Music：包含一個方法 play()，輸出「開始播放音樂！」<br>
            　　2. 建立一個子類別 JingleBell，繼承 Music：覆寫 play() 方法，並在方法中播放《耶誕鈴聲》第一句旋律<br>
            　　3. 建立物件並呼叫 play() 方法<br><br>
            提示（音符對應）：<br><br>
            　　• Si = B = 71　　• Re(高) = D = 74　　• Sol = G = 67　　• La = A = 69
        </p>
        <pre>參考程式：
import time
import pygame.midi

class Music:
    def play(self):
        print("開始播放音樂 🎵")

class JingleBell(Music):

    def play(self):
        pygame.midi.init()
        player = pygame.midi.Output(0)
        player.set_instrument(0)

        note_map = {"B": 71, "D_high": 74, "G": 67, "A": 69}
        melody = ["B", "B", "B", "B", "B", "B", "B", "D_high", "G", "A", "B"]

        print("播放《耶誕鈴聲》🎄")

        for n in melody:
            midi_num = note_map[n]
            player.note_on(midi_num, 100)
            time.sleep(0.5)
            player.note_off(midi_num, 100)

song = JingleBell()
song.play()</pre>

    </div>
</div>
@endsection
