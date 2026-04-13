@extends('layouts.app')

@section('style')
    <style>
        h2{
            margin-top: 40px;
        }
        h3, h4{
            margin-top: 50px;
            padding-left: 40px;
        }
        h1, p{
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
    </style>
@endsection

@section('content')
    <h1>第0章 Pygame 套件介紹</h1>

    <div class="learn">
        <h3 style="margin-top: 20px">學習目標：</h3>
        <div class="af">
            <a href="#section2-1" >1. Pygame套件概述</a>
            <a href="#section2-2" >2. pygame.midi的核心概念</a>
            <a href="#section2-3" >3. 常見程式碼與邏輯說明</a>
            <a href="#section2-4" >4. 整體程式邏輯</a>
            <a href="#section2-5" >5. 範例程式說明</a>
        </div>
    </div>

    <div class="content">
        <h2 id="section2-1">1. Pygame套件概述</h2>
        {{-- <h3>1. Pygame套件概述</h3> --}}
        <p>
            pygame 是一個以 Python 為基礎的多媒體開發套件，主要用於遊戲開發與互動式應用程式設計。幫助開發者能夠以較為簡單的方式，建立具備視覺與聽覺互動效果的程式。
            本研究採用 Pygame 套件中的 pygame.midi 模組作為音樂輸出工具，透過 MIDI 音高數值來控制音符播放，將程式邏輯（如迴圈與條件判斷）轉化為具體可感知之聲音回饋，促進學習理解。
        </p>

        <br>

        <h2 id="section2-2">2. pygame.midi的核心概念</h2>
        <h3>MIDI 是什麼？</h3>
        <p>
            MIDI（Musical Instrument Digital Interface）是一種用數字表示音樂的標準系統，音高範圍為 0～127，其中中央 C 為 60。
            因為電腦在處理音樂時，必須將這些音符轉換為對應的數值，才能進行播放。因此在 MIDI 系統中，音符會被轉換成數字，MIDI 將音高編號為 0～127，
            共 128 個音。而唱名do是在鋼琴鍵盤中間的基準音，do被設在大約中間的位置（第60號）。
        </p>

        <h3>音名與唱名</h3>
        <p>
            我們常用 <strong>唱名（do re mi）</strong>或 <strong>音名（C D E）</strong>來表示音符，在樂理規則中，<strong>唱名do是在鋼琴鍵盤中間的基準音</strong>，以中央 C為基準音。
            關於唱名與音名之對應規則如下：唱名do所對應的音名是C，唱名re所對應的音名是D，唱名mi所對應的音名是E，依此類推，詳見下表：
        </p>
        <table border="1">
            <tr><th>唱名</th><th>音名</th></tr>
            <tr><td>do</td><td>C</td></tr>
            <tr><td>re</td><td>D</td></tr>
            <tr><td>mi</td><td>E</td></tr>
            <tr><td>fa</td><td>F</td></tr>
            <tr><td>sol</td><td>G</td></tr>
            <tr><td>la</td><td>A</td></tr>
            <tr><td>si</td><td>B</td></tr>
        </table>

        <h3>音符與對應的MIDI數值</h3>
        <p>
            在 MIDI 系統中，這些音符會被轉換成數字，MIDI 將音高編號為 0～127，共 128 個音，而do「中央 C」被設在大約中間的位置（第60號）。電腦在處理音樂時，必須將這些音符轉換為對應的數值，才能進行播放。
            音符需透過 note_map 轉換為 MIDI 數值才能播放。
        </p>
        <table border="1">
            <tr><th>唱名</th><th>音名</th><th>MIDI</th></tr>
            <tr><td>do</td><td>C</td><td>60</td></tr>
            <tr><td>re</td><td>D</td><td>62</td></tr>
            <tr><td>mi</td><td>E</td><td>64</td></tr>
            <tr><td>fa</td><td>F</td><td>65</td></tr>
            <tr><td>sol</td><td>G</td><td>67</td></tr>
            <tr><td>la</td><td>A</td><td>69</td></tr>
            <tr><td>si</td><td>B</td><td>71</td></tr>
        </table>
        <p>
            舉例說明：雖然學習者在程式中看到的是 "G" 這樣的音符名稱（音名），但實際上電腦無法直接播放文字形式的音符，因此必須透過「音符對照表（note_map）」將音符名稱轉換為對應的 MIDI 數值（例如 67），才能讓 pygame.midi 成功播放聲音。
            換句話說：電腦不是在播放「G」，而是在播放「67」這個數字所代表的音高。
            這個轉換過程就是：<strong>唱名／音名 → MIDI數值 → 電腦播放聲音</strong>
        </p>

        <h2 id="section2-3">3. 常見程式碼</h2>
        <h3>初始化系統</h3>
        <p>
            功能：
            <br><br>
            　　•　啟動 MIDI 系統
            <br>
            　　•　初始化音樂控制的程式
        </p>
        <pre>import pygame.midi pygame.midi.init()</pre>

        <h3>建立播放器</h3>
        <p>
            概念：
            <br><br>
            　　•　建立一個「播放裝置」
            <br>
            　　•　0 代表預設裝置
            <br><br>
            可以理解為：取得一台虛擬鋼琴
        </p>
        <pre>player = pygame.midi.Output(0)</pre>

        <h3>設定樂器</h3>
        <p>
            功能：
            <br><br>
            　　•　設定音色（樂器）
            <br>
            　　•　0 = 鋼琴
            <br><br>
            MIDI 有 128 種樂器（包括鋼琴、小提琴、吉他等）
        </p>
        <pre>player.set_instrument(0)</pre>

        <h3>播放音符</h3>
        <p>
            概念：開始彈一個音
        </p>
        <table border="1">
            <tr><th>參數</th><th>意義</th></tr>
            <tr><td>midi_num</td><td>音高（例如 67）</td></tr>
            <tr><td>velocity</td><td>音量（0~127）</td></tr>
        </table>
        <pre>player.note_on(midi_num, velocity)</pre>

        <h3>控制時間</h3>
        <p>
            功能：控制音符持續多久
            <br>
            如果沒有這行程式碼，會變成音符瞬間結束（聽不到）
        </p>
        <pre>time.sleep(beat)</pre>

        <h3>停止音符</h3>
        <p>
            功能：放開琴鍵，停止聲音
        </p>
        <pre>player.note_off(midi_num, velocity)</pre>

        <h2 id="section2-4">4. 程式流程</h2>
        <ol>
            <li>建立音符資料</li>
            <li>迴圈取出音符</li>
            <li>轉換為 MIDI</li>
            <li>播放音符</li>
            <li>等待時間</li>
            <li>停止音符</li>
        </ol>

        <h2 id="section2-5">5. 範例程式說明</h2>
        <h3>範例(一)：播放 Do Re Mi</h3>
        <p>
            請撰寫一段程式，使用 pygame.midi 播放三個音符：
            <br><br>
            •　　Do（C）→ Re（D）→ Mi（E）
            <br>
            •　　每個音符播放 0.5 秒。
        </p>
        <hr>
        <h4>提示</h4>
        <p>
            •　　使用 note_on() 播放音符 <br>
            •　　使用 time.sleep() 控制時間 <br>
            •　　使用 note_off() 停止音符 <br>
            •　　不需要使用迴圈
        </p>
        <h4>參考程式</h4>
        <pre>import time
import pygame.midi

# 初始化 MIDI 系統
pygame.midi.init()

# 建立播放器（虛擬鋼琴）
player = pygame.midi.Output(0)

# 設定樂器（0 = 鋼琴）
player.set_instrument(0)

# 音符對照表
note_map = {
    "C":60,  # Do
    "D":62,  # Re
    "E":64   # Mi
}

# 每個音播放時間
beat = 0.5

print("播放 Do Re Mi 🎵")

# 播放 Do（C）
midi_num = note_map["C"]        # 取得 C 的 MIDI 數值（60）
player.note_on(midi_num, 100)   # 播放音符
time.sleep(beat)                # 持續 0.5 秒
player.note_off(midi_num, 100)  # 停止音符

# 播放 Re（D）
midi_num = note_map["D"]
player.note_on(midi_num, 100)
time.sleep(beat)
player.note_off(midi_num, 100)

# 播放 Mi（E）
midi_num = note_map["E"]
player.note_on(midi_num, 100)
time.sleep(beat)
player.note_off(midi_num, 100)
        </pre>

        {{-- <h3>範例講解</h3>
        <img src="五線譜範例圖片.png" alt="五線譜" style="max-width: 100%;"></img>
        <p>
            淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述
            淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述
            淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述
            淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述
            淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述淺顯文字敘述
        </p>

        <h3>範例程式碼 (含註解)</h3>
        <img src="程式碼截圖.png" alt="程式碼" style="max-width: 100%;">

        <br><br>
        <button class="start-btn">進入實作</button>

        <h2 id="section2-2" style="margin-top: 50px;">2.2 for迴圈</h2>
        <p>準備放置 for 迴圈的內容...</p> --}}
    </div>


@endsection
