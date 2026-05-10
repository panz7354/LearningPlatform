@extends('layouts.app')

@section('style')
    @include('_lesson-styles')
@endsection

@section('content')
<div class="lesson-wrap">

    {{-- ===== 標題列 ===== --}}
    <div class="lesson-header">
        <h1>第 3 章　函數</h1>
        <div class="audio-wrap">
            <span>🎵 範例音檔</span>
            <audio controls>
                <source src="{{ asset('audio/3_HBD.mp3') }}" type="audio/mpeg">
                您的瀏覽器不支援播放
            </audio>
        </div>
    </div>

    {{-- ===== 學習目標 ===== --}}
    <div class="lesson-goals">
        <h3>學習目標</h3>
        <div class="goal-links">
            <a href="#section3-1">1. 函數與參數傳入</a>
            <a href="#section3-2">2. 函數的進階應用</a>
        </div>
    </div>

    {{-- ===== 主要內容 ===== --}}
    <div class="lesson-content">

        <h2 id="section3-1">1. 函數與參數傳入</h2>

        <h3>重點語法</h3>

        <h4>(一) 函數（Function）</h4>
        <p>1. 函數是一段「可以重複使用的程式碼」，用來完成特定功能。如下程式碼，使用 def 定義 say_hello 函數：</p>
        <pre>def say_hello():
    print("Hello")</pre>
        <p>2. 呼叫函數：定義完函數後，需要「呼叫」才會執行。如下程式碼：</p>
        <pre>say_hello()</pre>

        <h4>(二) 參數（Parameter）</h4>
        <p>1. 參數是「傳入的資料」，讓函數可以處理不同內容。如下程式碼，name 就是參數：</p>
        <pre>def greet(name):
    print("你好，" + name)</pre>
        <p>2. 函數可以同時接收多個參數。如下程式碼：</p>
        <pre>def add(a, b):
    print(a + b)

add(3, 5)</pre>
        <p>3. 回傳值（return）：函數可以回傳結果，return 會回傳函數的運算結果。如下程式碼：</p>
        <pre>def add(a, b):
    return a + b

result = add(3, 5)
print(result)</pre>

        <hr>

        <h3>範例程式說明</h3>

        <h4>範例(一)：使用函數顯示加總結果</h4>
        <p>
            請撰寫一段程式，完成以下功能：<br><br>
            　　1. 定義一個函數 add(a, b)<br>
            　　2. 函數功能：計算兩個數字的加總並印出結果<br>
            　　3. 讓使用者輸入兩個整數<br>
            　　4. 呼叫函數並傳入這兩個數字<br><br>
            提示：<br><br>
            　　• def：定義函數<br>
            　　• 參數：a, b<br>
            　　• 呼叫函數：add(num1, num2)<br>
            　　• int()：將字串型態轉換為整數型態
        </p>
        <pre>參考程式：
def add(a, b):
    result = a + b
    print("加總結果是:", result)

num1 = int(input("請輸入第一個數字: "))
num2 = int(input("請輸入第二個數字: "))

add(num1, num2)</pre>

        <h4>範例(二)：使用函數播放生日快樂旋律</h4>
        <img src="{{ asset('img/HBD.png') }}" alt="生日快樂五線譜">
        <p>
            此行五線譜是《生日快樂》的第一句旋律，此行音符為 Sol Sol La Sol Do(高) Si<br><br>
            請撰寫一段程式，完成以下功能：<br><br>
            　　1. 定義函數 play_note(note)<br>
            　　2. 函數功能：接收音符並播放<br>
            　　3. 呼叫函數播放旋律：G → G → A → G → 高音 C → B
        </p>
        <pre>參考程式：
import time
import pygame.midi

pygame.midi.init()
player = pygame.midi.Output(0)
player.set_instrument(0)

note_map = {
    "G":67,
    "A":69,
    "C_high":72,
    "B":71
}

def play_note(note):
    midi_num = note_map[note]
    player.note_on(midi_num, 100)
    time.sleep(0.5)
    player.note_off(midi_num, 100)

play_note("G")
play_note("G")
play_note("A")
play_note("G")
play_note("C_high")
play_note("B")</pre>

        <h2 id="section3-2">2. 函數的進階應用</h2>

        <h3>重點語法</h3>

        <h4>(一) 參數預設值（Default Parameter）</h4>
        <p>
            　　• 可為參數設定預設值，呼叫時可不傳入<br>
            　　• 若未傳入，會使用預設值<br><br>
            如下程式碼：
        </p>
        <pre>def greet(name="同學"):
    print("你好，" + name)

greet()        # 使用預設值
greet("小明")  # 覆蓋預設值</pre>

        <h4>(二) 函數中呼叫函數</h4>
        <p>一個函數可以呼叫另一個函數，建立模組化程式，提高程式的重用性與結構性：</p>
        <pre>def add(a, b):
    return a + b

def show_result(x, y):
    result = add(x, y)
    print("結果是:", result)

show_result(3, 5)</pre>

        <h4>(三) 區域變數與全域變數</h4>
        <p>
            　　• 全域變數：可在整個程式使用<br>
            　　• 區域變數：只能在函數內使用<br><br>
            如下程式碼：
        </p>
        <pre>x = 10  # 全域變數

def test():
    y = 5  # 區域變數
    print(x + y)

test()</pre>

        <h4>(四) 函數的模組化（Modularization）</h4>
        <p>模組化是指將一個複雜的問題，拆解成多個小功能（函數）來完成，讓程式更容易理解、撰寫與維護：</p>
        <pre>def input_data():
    return int(input("請輸入數字: "))

def calculate(n):
    return n * 2

def show(n):
    print("結果是:", n)

num = input_data()
result = calculate(num)
show(result)</pre>

        <hr>

        <h3>範例程式說明</h3>

        <h4>範例(一)：使用函數計算折扣金額</h4>
        <p>
            請撰寫一段程式，完成以下功能：<br><br>
            　　1. 定義一個函數 discount(price, rate=0.9)<br>
            　　2. 函數功能：計算折扣後價格並回傳結果<br>
            　　3. 讓使用者輸入商品價格<br>
            　　4. 呼叫函數（使用預設折扣），並顯示結果
        </p>
        <pre>參考程式：
def discount(price, rate=0.9):
    return price * rate

price = int(input("請輸入商品價格: "))
final_price = discount(price)
print("折扣後價格為:", final_price)</pre>

        <h4>範例(二)：使用函數播放生日快樂（進階版）</h4>
        <img src="{{ asset('img/HBD.png') }}" alt="生日快樂五線譜">
        <p>
            此行五線譜是《生日快樂》的第一句旋律，此行音符為 Sol Sol La Sol Do(高) Si<br><br>
            請撰寫一段程式，完成以下功能：<br><br>
            　　1. 定義一個函數 play_note(note, beat=0.5)<br>
            　　2. 函數功能：接收音符（note）和播放時間（beat，預設 0.5 秒），並播放該音符<br>
            　　3. 播放旋律：G → G → A → G → 高音 C → B<br>
            　　4. 前三個音符的節拍設定為 2 秒
        </p>
        <pre>參考程式：
import time
import pygame.midi

pygame.midi.init()
player = pygame.midi.Output(0)
player.set_instrument(0)

note_map = {
    "G":67,
    "A":69,
    "C_high":72,
    "B":71
}

def play_note(note, beat=0.5):
    midi_num = note_map[note]
    player.note_on(midi_num, 100)
    time.sleep(beat)
    player.note_off(midi_num, 100)

play_note("G", 2)
play_note("G", 2)
play_note("A", 2)
play_note("G")
play_note("C_high")
play_note("B")</pre>

    </div>
</div>
@endsection
