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
        <h1>第3章 函數</h1>

        <div class="audio-player-simple">
            <span>範例音檔：</span>
            <audio controls>
                <source src="{{ asset('audio/3_HBD.mp3') }}" type="audio/mpeg">
                您的瀏覽器不支援播放
            </audio>
        </div>
    </div>

    <div class="learn">
        <h3 style="margin-top: 20px">學習目標：</h3>
        <div class="af">
            <a href="#section2-1" >1. 函數與參數傳入</a>
            <a href="#section2-2" >2. 函數的進階應用</a>
        </div>
    </div>

    <div class="content">
        <h2 id="section2-1">1. 函數與參數傳入</h2>
        <h3>重點語法</h3>
        <h4>(一) 函數（Function）</h4>
        <p>1.函數是一段「可以重複使用的程式碼」，用來完成特定功能。如下程式碼，使用 def 定義say_hello函數：</p>
        <pre>def say_hello():
    print("Hello")
</pre>
        <p>2. 呼叫函數：定義完函數後，需要「呼叫」才會執行。如下程式碼，呼叫say_hello函數後，才能print("Hello")：</p>
        <pre>say_hello()</pre>

        <h4>(二) 參數（Parameter）</h4>
        <p>1. 參數是「的資料」，讓函數可以處理不同內容。如下程式碼，name 就是參數，將參數name傳入greet函數中：</p>
        <pre>def (name):
    print("你好，" + name)
</pre>
        <p>2. 傳入參數（Argument）函數可以同時接收多個參數。如下程式碼：</p>
        <pre>def add(a, b):
    print(a + b)

add(3, 5)
</pre>
        <p>3. 回傳值（return）函數可以回傳結果， return會回傳函數的運算結果。如下程式碼：</p>
        <pre>def add(a, b):
    return a + b

result = add(3, 5)
print(result)
</pre>
        <hr>
        <h3>範例程式說明</h3>
        <h4>範例(一)：使用函數顯示加總結果</h4>
        <p>
            請撰寫一段程式，完成以下功能：<br><br>
            　　1.　定義一個函數 add(a, b) <br>
            　　2.　函數功能：計算兩個數字的加總並印出結果 <br>
            　　3.　讓使用者輸入兩個整數 <br>
            　　4.　呼叫函數並傳入這兩個數字
        </p>
        <p>
            提示：<br><br>
            　　•　def：定義函數<br>
            　　•　參數：a, b<br>
            　　•　呼叫函數：add(num1, num2)<br>
            　　•　int()：將字串型態轉換為整數型態<br>
        </p>
        <pre>參考程式：
# 定義函數（含兩個參數）
def add(a, b):
    result = a + b              # 計算加總
    print("加總結果是:", result)  # 顯示結果

# 使用者輸入（需轉為整數）
num1 = int(input("請輸入第一個數字: "))
num2 = int(input("請輸入第二個數字: "))

# 呼叫函數並傳入參數
add(num1, num2)
</pre>
        <h4>範例(二)：使用函數播放生日快樂旋律</h4>
        <img src="{{ asset('img/HBD.png') }}" alt="">
        <p>
            此行五線譜是《生日快樂》的第一句旋律，此行音符為Sol Sol La Sol Do(高) Si
            <br>
            請撰寫一段程式，完成以下功能：
            <br><br>
            　　1.　定義函數 play_note(note)<br>
            　　2.　函數功能：接收音符並播放<br>
            　　3.　呼叫函數播放播放旋律：G → G → A → G → 高音C → B
        </p>
        <pre>參考程式：
import time
import pygame.midi

# 初始化 MIDI
pygame.midi.init()
player = pygame.midi.Output(0)
player.set_instrument(0)

# 音符對照表（高音 Do）
note_map = {
    "G":67,
    "A":69,
    "C_high":72,  # 高音 Do
    "B":71        # Si
}

# 函數：播放音符
def play_note(note):
    midi_num = note_map[note]
    player.note_on(midi_num, 100)
    time.sleep(0.5)
    player.note_off(midi_num, 100)

# 播放旋律
play_note("G")
play_note("G")
play_note("A")
play_note("G")
play_note("C_high")  # 高音 Do
play_note("B")       # Si
</pre>
        <h2 id="section2-2">2. 函數的進階應用</h2>
        <h3>重點語法</h3>
        <h4>(一) 參數預設值（Default Parameter）</h4>
        <p>
            　　•　可為參數設定預設值，呼叫時可不傳入 <br>
            　　•　若未傳入，會使用預設值<br><br>
            如下程式碼：
        </p>
        <pre>def greet(name="同學"):
    print("你好，" + name)

greet()        # 使用預設值
greet("小明")  # 覆蓋預設值
</pre>

        <h4>(二) 函數中呼叫函數</h4>
        <p>1. 一個函數可以呼叫另一個函數，建立模組化程式。如下程式碼，可提高程式的重用性與結構性：</p>
        <pre>def add(a, b):
    return a + b

def show_result(x, y):
    result = add(x, y)
    print("結果是:", result)

show_result(3, 5)
</pre>
        <h4>(三) 區域變數與全域變數</h4>
        <p>
            　　•　全域變數：可在整個程式使用<br>
            　　•　區域變數：只能在函數內使用<br><br>
            如下程式碼：
        </p>
        <pre>x = 10  # 全域變數

def test():
    y = 5  # 區域變數
    print(x + y)

test()
</pre>
        <h4>(四) 函數的模組化（Modularization）</h4>
        <p>
            1. 模組化是指將一個複雜的問題，拆解成多個小功能（函數）來完成，幫助程式更容易理解、撰寫與維護。
            <br>如下程式碼，函數input_data()負責「輸入資料」；函數calculate(n)負責「計算」；函數show(n)負責「輸出結果」，透過模組化將程式拆分成多個函數，讓程式更清楚、易維護且可重複使用：</p>
        <pre>def input_data():
    return int(input("請輸入數字: "))

def calculate(n):
    return n * 2

def show(n):
    print("結果是:", n)

num = input_data()
result = calculate(num)
show(result)
</pre>
        <hr>
        <h3>範例程式說明</h3>
        <h4>範例(一)：使用函數計算折扣金額</h4>
        <p>
            請撰寫一段程式，完成以下功能：<br><br>
            　　1.　定義一個函數 discount(price, rate=0.9) <br>
            　　2.　函數功能：計算折扣後價格並回傳結果 <br>
            　　3.　讓使用者輸入商品價格 <br>
            　　4.　呼叫函數（使用預設折扣），並顯示結果
        </p>
        <pre>參考程式：
# 定義函數（含預設參數）
def discount(price, rate=0.9):
    return price * rate  # 回傳折扣後價格

# 使用者輸入
price = int(input("請輸入商品價格: "))

# 呼叫函數（使用預設折扣 0.9）
final_price = discount(price)

# 顯示結果
print("折扣後價格為:", final_price)
</pre>
        <h4>範例(二)：使用函數播放生日快樂（進階版）</h4>
        <img src="{{ asset('img/HBD.png') }}" alt="">
        <p>
            此行五線譜是《生日快樂》的第一句旋律，此行音符為Sol Sol La Sol Do(高) Si <br>
            請撰寫一段程式，完成以下功能：<br><br>
            　　1.　定義一個函數 play_note(note, beat=0.5) <br>
            　　2.　函數功能：<br>
            　　　　•　接收音符（note）<br>
            　　　　•　接收播放時間（beat，預設為 0.5 秒）<br>
            　　　　•　播放該音符<br>
            　　3.　播放旋律：G → G → A → G → 高音 C → B<br>
            　　4.　前三個音符的節拍，設定為2秒
        </p>
        <pre>參考程式：
import time
import pygame.midi

# 初始化 MIDI
pygame.midi.init()
player = pygame.midi.Output(0)
player.set_instrument(0)

# 音符對照表
note_map = {
    "G":67,
    "A":69,
    "C_high":72,  # 高音 Do
    "B":71
}

# 定義函數
def play_note(note, beat=0.5):
    midi_num = note_map[note]
    player.note_on(midi_num, 100)
    time.sleep(beat)
    player.note_off(midi_num, 100)

# 呼叫函數（後面三音都使用預設值）
play_note("G", 2) # 使用不同節拍（2秒）
play_note("G", 2) # 使用不同節拍（2秒）
play_note("A", 2) # 使用不同節拍（2秒）
play_note("G")
play_note("C_high")
play_note("B")
</pre>
    </div>


@endsection
