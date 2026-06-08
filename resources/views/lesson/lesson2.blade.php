@extends('layouts.app')

@section('style')
    @include('layouts._lesson-styles')
@endsection

@section('content')
<div class="lesson-wrap">

    {{-- ===== 標題列 ===== --}}
    <div class="lesson-header">
        <h1>第 2 章 流程控制、選擇性敘述與迴圈</h1>
        <div class="audio-wrap">
            <span>範例音檔</span>
            <audio controls>
                <source src="{{ asset('audio/2_London_Bridge.mp3') }}" type="audio/mpeg">
                您的瀏覽器不支援播放
            </audio>
        </div>
    </div>

    {{-- ===== 學習目標 ===== --}}
    <div class="lesson-goals">
        <h3>學習目標</h3>
        <div class="goal-links">
            <a href="#section2-1">1. 選擇性敘述</a>
            <a href="#section2-2">2. for 迴圈</a>
        </div>
    </div>

    {{-- ===== 主要內容 ===== --}}
    <div class="lesson-content">

        <h2 id="section2-1">1. 選擇性敘述</h2>

        <h3>重點語法</h3>

        <h4>(一) 什麼是條件判斷？</h4>
        <p>條件判斷可以想成：「程式在做選擇題」。</p>
        <p>
            程式會先判斷條件是否成立，<br>
            再決定要做什麼事情。
        </p>
        <p>例如：<br><br>
            • 如果今天下雨 ☔ → 要記得帶雨傘<br>
            • 如果今天不會下雨 ☔ → 不用帶雨傘<br>
            • 如果肚子餓 🍔 → 去吃飯<br>
            • 如果按下播放鍵 🎵 → 播放音樂
        </p>
        <p>這些都屬於「條件判斷」。</p>

        <h4>(二) if-else 條件判斷</h4>
        <pre>if 條件:
    條件成立時執行的程式
else:
    條件不成立時執行的程式</pre>
        <p>
            簡單理解：<br>
            👉 <strong>if</strong>表示：「如果…」<br>
            👉 <strong>else</strong>表示：「不然就…」<br>
            程式會根據條件：選擇不同的結果。
        </p>

        <h5>📌 生活小舉例(判斷成績是否及格)</h5>
        <p>程式碼如下：</p>
        <pre>score = 80

if score >= 60:
    print("及格")
else:
    print("不及格")</pre>
        <p>
            程式邏輯說明：<br>
            如果：score >= 60成立，就輸出：及格<br>
            否則輸出：不及格
        </p>

        <h4>(三) if / elif / else 條件判斷</h4>
        <p>
            有時候：不只兩種情況，而是很多種選擇。<br>
            這時可以使用：
        </p>
        <table>
            <tr><th>語法</th><th>功能</th></tr>
            <tr><td>if</td><td>第一個條件判斷</td></tr>
            <tr><td>elif</td><td>其他條件判斷</td></tr>
            <tr><td>else</td><td>前面都不成立時執行</td></tr>
        </table>
        <p>基本語法如下：</p>
        <pre>if 條件:
    程式內容
elif 條件:
    程式內容
else:
    程式內容</pre>
        <p>
            程式判斷順序：程式會：👉「由上往下」判斷。<br>
            順序如下：<br>
            1️⃣ 先檢查 if<br>
            2️⃣ if 不成立 → 檢查 elif<br>
            3️⃣ 都不成立 → 執行 else
        </p>

        <h5>🎵 音樂情境小舉例</h5>
        <pre>speed = 3

if speed == 1:
    print("慢速播放 🎵")
elif speed == 2:
    print("正常播放 🎵")
else:
    print("快速播放 🎵")</pre>
        <p>
            程式邏輯說明：<br>
            程式會根據 speed 數字：<br>
            1 → 慢速<br>
            2 → 正常<br>
            其他 → 快速<br>
            來決定音樂的播放速度。
        </p>

        <hr>

        <h3>範例程式說明</h3>

        <h4>範例(一)：判斷輸入數字的種類</h4>
        <p>
            請撰寫一段程式，讓使用者輸入一個整數，並判斷該數字為：<br><br>
            • 正數<br>
            • 0<br>
            • 負數<br><br>
            並將結果顯示出來。<br><br>
            提示：<br>
            • if：第一個條件判斷<br>
            • elif：多條件判斷（else if）<br>
            • else：其他所有情況
        </p>
        <pre>參考程式：

# 【題號1】
# 使用 input() 讓使用者輸入一個整數
# input() 預設取得的是字串（string）
# 因此需要使用 int() 轉換成整數（integer）
num = int(input("請輸入一個整數: "))

# 【題號2】
# 使用 if、elif、else 判斷數字種類
# 第一種情況：
# 如果數字大於 0
if num > 0:
    # 顯示正數訊息
    print("你輸入的是正數")

# 第二種情況：
# 如果數字等於 0
elif num == 0:
    # 顯示 0 的訊息
    print("你輸入的是 0")

# 第三種情況：
# 如果以上條件都不成立
# 代表數字一定小於 0
else:
    # 顯示負數訊息
    print("你輸入的是負數")</pre>
        <p><strong>程式執行結果（假設輸入）：</strong></p>
        <pre>請輸入一個整數: -5

輸出：
你輸入的是負數</pre>

        <h4>範例(二)：決定是否播放旋律(if-else)</h4>
        <img src="{{ asset('img/London_Bridge.png') }}" alt="倫敦鐵橋五線譜">
        <p>
            此行五線譜是《倫敦鐵橋》的第一句旋律，此行音符為 So La So Fa Mi Fa So<br><br>
            請撰寫一段程式，完成以下功能：<br><br>
              1. 讓使用者輸入文字：<br>
                若輸入「Play」，則播放《倫敦鐵橋》旋律。<br>
                若輸入其他文字，則顯示「停止播放」。<br><br>
            提示：<br>
            • 字串判斷：使用 if text == "Play":
        </p>
        <pre>參考程式：

# 【前置準備】
import time
import pygame.midi

# 初始化 MIDI 系統
pygame.midi.init()
player = pygame.midi.Output(0)
player.set_instrument(0)

note_map = {
    "G": 67,   # So
    "A": 69,   # La
    "F": 65,   # Fa
    "E": 64    # Mi
}

melody = ["G", "A", "G", "F", "E", "F", "G"]

# 【題號1】
# 讓使用者輸入指令
command = input("請輸入指令 (輸入 Play 開始播放): ")

# 判斷指令是否為 "Play"
if command == "Play":
    print("開始播放《倫敦鐵橋》🎵")
    for note in melody:
        midi_num = note_map[note]
        player.note_on(midi_num, 100)
        time.sleep(0.5)
        player.note_off(midi_num, 100)
else:
    print("停止播放 🚫")</pre>

        <h2 id="section2-2">2. for 迴圈</h2>
        <p>此區塊可依後續提供的 Markdown 內容繼續填補 2.2 的教學語法與進階範例。</p>

    </div>
</div>
@endsection
