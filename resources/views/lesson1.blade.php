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
        <h1>第1章 數值、字串與串列</h1>

        <div class="audio-player-simple">
            <span>範例音檔：</span>
            <audio controls>
                <source src="{{ asset('audio/1_star.mp3') }}" type="audio/mpeg">
                您的瀏覽器不支援播放
            </audio>
        </div>
    </div>

    <div class="learn">
        <h3 style="margin-top: 20px">學習目標：</h3>
        <div class="af">
            <a href="#section2-1" >1. 數值運算與字串處理</a>
            <a href="#section2-2" >2. 串列與相關處理函數</a>
        </div>
    </div>

    <div class="content">
        <h2 id="section2-1">1. 數值運算與字串處理</h2>
        <h3>重點語法</h3>
        <h4>(一) 數值運算</h4>
        <table border="1">
            <tr><th>運算符</th><th>功能</th><th>範例</th></tr>
            <tr><td>+</td><td>加法</td><td>3 + 2 = 5</td></tr>
            <tr><td>-</td><td>減法</td><td>5 - 2 = 3</td></tr>
            <tr><td>*</td><td>乘法</td><td>3 * 2 = 6</td></tr>
            <tr><td>/</td><td>除法</td><td>6 / 2 = 3.0</td></tr>
            <tr><td>//</td><td>整數除法（取整數）</td><td>7 // 2 = 3</td></tr>
            <tr><td>%</td><td>取餘數</td><td>7 % 2 = 1</td></tr>
            <tr><td>**</td><td>次方</td><td>2 ** 3 = 8</td></tr>
        </table>

        <h4>(二) 字串處理</h4>
        <p>1. 字串（string）為「文字資料」，需用引號表示，如下程式碼：</p>
        <pre>name = "Amy"</pre>
        <p>2. 字串可使用 + 進行串接（合併文字），如下程式碼：</p>
        <pre>print("Hello" + " " + "World")</pre>

        <h4>(三) 字串與數字的轉換</h4>
        <p>
            1. 字串與數字為不同資料型態，不可直接混合使用。
            <br><br>
            2. 常用轉換函數：
            <br><br>
            　　•　str()：數字 → 字串（用於顯示），如下程式碼：
        </p>
        <pre>print("年齡是 " + str(18))</pre>
        <p>　　•　int()：字串 → 數字（用於計算），如下程式碼：</p>
        <pre>a = int("5")
b = int("3")
print(a + b)
</pre>
        <p>
            總結：
            <br><br>
            　　•　字串可用 + 串接
            <br>
            　　•　str()：數字轉字串
            <br>
            　　•　int()：字串轉數字
            <br>
            　　•　不同型態運算前需先轉換
        </p>
        <hr>
        <h3>範例程式說明</h3>
        <h4>範例(一)：計算明年年齡並顯示結果</h4>
        <p>
            請撰寫一段程式，完成以下功能：
            <br><br>
            　　1.　讓使用者輸入「姓名」與「年齡」
            <br>
            　　2.　將輸入的年齡轉換為整數
            <br>
            　　3.　計算「明年的年齡」
            <br>
            　　4.　輸出完整句子，例如：小明明年 19 歲
        </p>
        <p>
            提示：
            <br><br>
            　　•　數值運算：age + 1（加法運算）
            <br>
            　　•　字串處理：使用（+）進行字串串接
            <br>
            　　•　型態轉換：使用int()，字串 → 數字；使用str()，數字 → 字串
        </p>
        <pre>
參考程式：
# 輸入姓名（字串）
name = input("請輸入姓名: ")

# 輸入年齡（input 預設為字串，需要轉換）
age = int(input("請輸入年齡: "))

# 數值運算：計算明年年齡
next_age = age + 1

# 字串處理：將結果組合並輸出
print(name + " 明年 " + str(next_age) + " 歲")
</pre>
        <h4>範例(二)：小星星旋律播放 (簡單版)</h4>
        <img src="{{ asset('img/star.png') }}" alt="">
        <p>
            此行五線譜是《小星星》的第一句旋律，此行歌詞為一閃一閃亮晶晶(Twinkle, twinkle, little star)
            <br><br>
            請撰寫一段程式：
            <br><br>
            　　1.　輸入一個數字
            <br>
            　　2.　設定音符播放時間（數字 × 0.5）
            <br>
            　　3.　播放兩個音：C → G
        </p>
        <pre>
參考程式：
#匯入套件
import time             # 匯入時間套件，控制音符之間的停頓長度
import pygame.midi      # 匯入音樂套件，播放 MIDI 音訊

pygame.midi.init()               # 初始化 MIDI 系統
player = pygame.midi.Output(0)   # 開啟編號 0的預設播放器
player.set_instrument(0)         # 設定樂器編號0 代表鋼琴

#取得使用者輸入，因為input() 取得的是「字串」，所以必須用 int() 轉成「整數」，之後才能做數學運算
num = int(input("請輸入一個數字（這會影響每個音符的節拍長度）: "))

#計算節拍長度：將輸入的數字乘以 0.5 秒，決定每個音符要響多久
beat = num * 0.5

#顯示結果：輸出時必須用 str() 將計算出的數字轉回「字串」，才能與前後的字串，顯示合併後的字串內容
print("目前的播放速度（節拍長度）為: " + str(beat) + " 秒")

#音樂播放邏輯 (Note On -> Sleep -> Note Off) ---
# 播放第一個音：中央 C (MIDI 編號 60)
player.note_on(60, 100)    # 按下琴鍵（音高 60, 力度 100）
time.sleep(beat)           # 讓程式「暫停」一段時間，這段時間內聲音會持續響著
player.note_off(60, 100)   # 放開琴鍵（停止播放音高 60）

# 播放第二個音：高音 G (MIDI 編號 67)
player.note_on(67, 100)    # 按下琴鍵（音高 67, 力度 100）
time.sleep(beat)           # 維持節拍長度
player.note_off(67, 100)   # 放開琴鍵</pre>

        <h2 id="section2-2">2. 串列與相關處理函數</h2>
        <h3>重點語法</h3>
        <h4>(一) 串列（List）說明</h4>
        <p>1. 串列是一種用來「儲存多個資料」的資料型態。如下程式碼：</p>
        <pre>melody = ["C", "D", "E"]</pre>
        <p>
            　　•　List使用 [ ] 來建立
            <br>
            　　•　List可以存放多個值（例如音符、數字）
            <br>
            　　•　List資料有順序
            <br><br>
            2.使用「索引(index)」取得串列中的資料，要從 0 開始，因為串列中的第一個位置是 0（不是 1）。如下程式碼：
        </p>
        <pre>
melody = ["C", "D", "E"]
print(melody[0])  # C
print(melody[1])  # D
</pre>
        <p>3.使用len()函式，可以得知串列的長度（length）。如下程式碼，使用 len() 取得串列中有幾個元素：</p>
        <pre>melody = ["C", "D", "E"]
len(melody)  # 3個元素
</pre>

        <h4>(二) 串列（List）資料的新增、修改、刪除</h4>
        <p>1.新增資料（append）：是在串列的最後加入新資料，如下程式碼：</p>
        <pre>melody.append("F")
原本：["C", "D", "E"]
變成：["C", "D", "E", "F"]
</pre>
        <p>2.修改資料：可以直接改變指定位置的值，如下程式碼：</p>
        <pre>melody[0] = "G"  #將第一個音符改為 G</pre>
        <p>3.刪除資料：使用.remove()刪除指定的值，如下程式碼：</p>
        <pre>melody.remove("D")  #刪除音符 D</pre>

        <hr>

        <h3>範例程式說明</h3>
        <h4>範例(一)：串列基本操作練習</h4>
        <p>
            請撰寫一段程式，完成以下功能：
            <br><br>
            　　1.　建立一個串列，內容為：["apple", "banana", "cherry"]<br>
            　　2.　印出串列中的第一個水果 <br>
            　　3.　在串列最後新增一個水果 "orange" <br>
            　　4.　印出更新後的串列長度
            <br><br>
            提示：
            <br><br>
            　　•　串列建立：[]<br>
            　　•　索引取值：fruits[0]<br>
            　　•　新增資料：append()<br>
            　　•　長度計算：len()
        </p>
        <pre>參考程式：
# 建立串列
fruits = ["apple", "banana", "cherry"]

# 取出第一個元素（索引從 0 開始）
print("第一個水果是:", fruits[0])

# 新增資料到串列最後
fruits.append("orange")

# 印出串列長度
print("目前共有", len(fruits), "個水果")
</pre>
        <h4>範例(二)：使用串列播放小星星旋律</h4>
        <img src="{{ asset('img/star.png') }}" alt="">
        <p>
            此行五線譜是《小星星》的第一句旋律，此行歌詞為一閃一閃亮晶晶(Twinkle, twinkle, little star)
            <br><br>
            請撰寫一段程式，完成以下功能：
            <br><br>
            　　1.　建立串列：["C", "C", "G", "G"]
            <br>
            　　2.　印出第一個音符
            <br>
            　　3.　依序播放每個音符
        </p>
        <pre>參考程式：
#匯入套件
import time             # 匯入時間套件，控制音符之間的停頓長度
import pygame.midi      # 匯入音樂套件，播放 MIDI 音訊

# 初始化 MIDI 系統
pygame.midi.init()              # 啟動 MIDI 功能
player = pygame.midi.Output(0)  # 建立播放器（0 = 預設裝置）
player.set_instrument(0)        # 設定樂器為鋼琴

# 音符對照表（音符 → MIDI 數值）
note_map = {
    "C":60,   # Do
    "G":67    # So
}

# 建立串列（小星星前四個音）
melody = ["C", "C", "G", "G"]

# 印出第一個音符（索引從 0 開始）
print("第一個音符是:", melody[0])

# 設定每個音符播放時間（0.5 秒）
beat = 0.5

# 🎵 第 1 個音（melody[0]）
note = melody[0]                 # 取得串列第 0 個音符（C）
midi_num = note_map[note]        # 將音符轉為 MIDI 數值（60）
player.note_on(midi_num, 100)    # 開始播放音符
time.sleep(beat)                 # 持續 0.5 秒
player.note_off(midi_num, 100)   # 停止播放

# 🎵 第 2 個音（melody[1]）
note = melody[1]
midi_num = note_map[note]
player.note_on(midi_num, 100)
time.sleep(beat)
player.note_off(midi_num, 100)

# 🎵 第 3 個音（melody[2]）
note = melody[2]
midi_num = note_map[note]
player.note_on(midi_num, 100)
time.sleep(beat)
player.note_off(midi_num, 100)

# 🎵 第 4 個音（melody[3]）
note = melody[3]
midi_num = note_map[note]
player.note_on(midi_num, 100)
time.sleep(beat)
player.note_off(midi_num, 100)
</pre>
    </div>


@endsection
