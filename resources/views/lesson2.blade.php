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
        <h1>第2章 流程控制、選擇性敘述與迴圈</h1>

        <div class="audio-player-simple">
            <span>範例音檔：</span>
            <audio controls>
                <source src="{{ asset('audio/2_London_Bridge.mp3') }}" type="audio/mpeg">
                您的瀏覽器不支援播放
            </audio>
        </div>
    </div>

    <div class="learn">
        <h3 style="margin-top: 20px">學習目標：</h3>
        <div class="af">
            <a href="#section2-1" >1. 選擇性敘述</a>
            <a href="#section2-2" >2. for迴圈</a>
        </div>
    </div>

    <div class="content">
        <h2 id="section2-1">1. 選擇性敘述</h2>
        <h3>重點語法</h3>
        <h4>(一) if-else 條件判斷</h4>
        <pre>if 條件:
    條件成立時執行的程式
else:
    條件不成立時執行的程式
</pre>
        <p>此語法用來根據條件判斷結果，執行不同程式區塊。</p>

        <h4>(二) if / elif / else 條件判斷</h4>
        <p>
            程式會「由上往下」判斷：<br><br>
            　　1.　先檢查 if <br>
            　　2.　不成立 → 檢查 elif <br>
            　　3.　都不成立 → 執行 else <br><br>
            並且「只會執行其中一個區塊」
        </p>
        <p>
            <strong>if 條件:</strong><br>
            　　✔ 如果條件成立 → 執行程式<br>
            　　✔ 如果不成立 → 跳過<br><br>

            <strong>elif 條件:</strong><br>
            　　✔ 可以有很多個 elif<br>
            　　✔ 只要有一個條件成立，就會執行，後面就不再判斷<br><br>

            <strong>else:</strong><br>
            　　✔ 當以上條件都不成立時，執行最後的情況<br>
            　　✔ 不需要寫條件，代表「其他所有情況」<br>
        </p>
        <hr>
        <h3>範例程式說明</h3>
        <h4>範例(一)：判斷輸入數字的種類</h4>
        <p>
            請撰寫一段程式，讓使用者輸入一個整數，並判斷該數字，將結果顯示出來：<br><br>
            　　•　正數<br>
            　　•　0<br>
            　　•　負數
        </p><p>
            提示：<br><br>
            　　•　if：第一個條件判斷<br>
            　　•　elif：多條件判斷（else if）<br>
            　　•　else：其他所有情況<br>
        </p>
        <pre>參考程式：
# 讓使用者輸入整數
num = int(input("請輸入一個整數: "))

# 判斷數字種類
if num > 0:
    print("你輸入的是正數")
elif num == 0:
    print("你輸入的是 0")
else:
    print("你輸入的是負數")
</pre>
        <h4>範例(二)：決定是否播放旋律(if-else)</h4>
        <img src="{{ asset('img/London_Bridge.png') }}" alt="">
        <p>
            此行五線譜是《倫敦鐵橋》的第一句旋律，此行音符為：So La So Fa Mi Fa So
            <br>
            請撰寫一段程式，讓使用者輸入一個整數：
            <br><br>
            　　•　如果是偶數 → 播放音符 So（G）
            <br>
            　　•　如果是奇數 → 不播放音樂，並顯示【不播放音樂】文字
        </p>
        <pre>參考程式：
# 匯入套件
import time              # 用來控制時間（讓音符有長度）
import pygame.midi       # 用來播放 MIDI 音樂

# 初始化 MIDI 播放器
pygame.midi.init()                   # 啟動 MIDI 系統
player = pygame.midi.Output(0)       # 選擇輸出裝置（通常 0 是預設）
player.set_instrument(0)             # 設定樂器（0 = 鋼琴）

# 音符對照表
# 這裡只使用一個音符：So（G），G 對應的 MIDI 數字是 67
note_map = {"G":67}

# 每個音符播放時間（秒）
beat = 0.5

# 讓使用者輸入整數
# input() 取得的是字串，需要用 int() 轉成整數
num = int(input("請輸入一個整數: "))

# if-else 條件判斷
# num % 2 == 0 → 判斷是否為偶數
if num % 2 == 0:
    print("播放 So（G）🎵")

    # 取得 G 音對應的 MIDI 數字
    midi_num = note_map["G"]

    # 播放音符（音量 100）
    player.note_on(midi_num, 100)

    # 維持聲音 0.5 秒
    time.sleep(beat)

    # 停止播放音符
    player.note_off(midi_num, 100)

else:
    # 如果是奇數，不播放音樂
    print("不播放音樂 ❌")
</pre>
        <h2 id="section2-2">2. for迴圈</h2>
        <h3>重點語法</h3>
        <h4>(一) for 迴圈</h4>
        <p>
            for 迴圈是 Python 中常用的重複執行結構，主要用來依序讀取資料集合（如串列 list）中的每一個元素，並對每個元素執行相同的程式動作。
            <br>當資料需要逐一處理時，使用 for 迴圈可以讓程式結構更簡潔清楚。基本語法如下：
        </p>
        <pre>for 變數 in 串列:
    要重複執行的程式
</pre>
        <p>程式執行時，for 迴圈會從串列的第一個元素開始，依序取出每一個資料，並存入變數中，直到串列中的所有資料都被處理完成為止。</p>

        <h4>(二)索引（index）概念</h4>
        <p>
            在程式中，<strong>串列（list）中的每個資料都有一個位置編號</strong>，這個編號就叫做「索引」。<br><br>
            舉例：melody = ["G", "A", "G", "F"] <br><br>
            對應關係如下：
        </p>
        <table border="1">
            <tr><th>位置（index）</th><th>音符</th></tr>
            <tr><td>0</td><td>G</td></tr>
            <tr><td>1</td><td>A</td></tr>
            <tr><td>2</td><td>G</td></tr>
            <tr><td>3</td><td>F</td></tr>
        </table>
        <p>
            <strong>重點說明</strong><br><br>
            　　•　i代表「目前播放到第幾個音符」<br>
            　　•　melody[i]用來「取出該位置的音符」，就像用「號碼」去拿對應的東西<br><br>
            如下程式碼：
        </p>
        <pre>i = 1
print(melody[i])  # 會印出 A
</pre>
        <hr>
        <h3>範例程式說明</h3>
        <h4>範例(一)：for 迴圈基礎練習</h4>
        <p>
            提示：<br><br>
            　　•　for：用來重複執行程式 <br>
            　　•　range(1, 6)：代表從 1 到 5（不包含 6） <br>
            　　•　i：每次迴圈的數值 <br>
        </p>
        <pre>參考程式：
# 使用 for 迴圈印出 1 到 5
for i in range(1, 6):
    print(i)
</pre>
        <h4>範例(二)：使用 for 迴圈播放旋律</h4>
        <img src="{{ asset('img/London_Bridge.png') }}" alt="">
        <p>
            此行五線譜是《倫敦鐵橋》的第一句旋律，此行音符為：So La So Fa Mi Fa So <br>
            請撰寫一段程式，使用 for 迴圈播放《倫敦鐵橋》第一句旋律
        </p>
        <pre>參考程式：
# 匯入需要的套件
import time              # 用來控制時間（讓音符有長度）
import pygame.midi       # 用來播放 MIDI 音樂

# 初始化 MIDI 播放器
pygame.midi.init()                   # 啟動 MIDI 系統
player = pygame.midi.Output(0)       # 選擇輸出裝置（通常 0 是預設）
player.set_instrument(0)             # 設定樂器（0 = 鋼琴）

# 音符對照表，這裡的音符是「字母」，例如 G、A、F、E
# 但電腦實際播放聲音時，需要的是「數字」（MIDI 編號）
# 所以我們用一個字典（dictionary）來做對照轉換
note_map = {
    "G":67,   # So → MIDI 67
    "A":69,   # La → MIDI 69
    "F":65,   # Fa → MIDI 65
    "E":64    # Mi → MIDI 64
}

# 建立旋律（用串列儲存音符），這裡存的是「音符名稱（字母）」，不是數字！
# 《倫敦鐵橋》第一句旋律：G A G F E F G
melody = ["G", "A", "G", "F", "E", "F", "G"]

# 每個音符播放 0.5 秒
beat = 0.5

print("播放《倫敦鐵橋》🎵")

# 使用 for 迴圈播放旋律
for n in melody:

    # 將音符（字母）轉換成 MIDI 數字
    # 例如：n = "G" → midi_num = 67
    midi_num = note_map[n]

    # 播放音符
    # 100 代表音量（0~127）
    player.note_on(midi_num, 100)

    # 讓音符持續一段時間（0.5 秒）
    time.sleep(beat)

    # 停止播放音符
    player.note_off(midi_num, 100)
</pre>
    </div>


@endsection
