@extends('layouts.app')

@section('style')
    @include('layouts._lesson-styles')
@endsection

@section('content')
<div class="lesson-wrap">

    {{-- ===== 標題列 ===== --}}
    <div class="lesson-header">
        <h1>第 2 章　流程控制、選擇性敘述與迴圈</h1>
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
        <p>條件判斷可以想成：「程式在做選擇題」。程式會先判斷條件是否成立，再決定要做什麼事情。</p>
        <p>例如：</p>
        <ul>
            <li>如果今天下雨 ☔ → 要記得帶雨傘</li>
            <li>如果今天不會下雨 ☔ → 不用帶雨傘</li>
            <li>如果肚子餓 🍔 → 去吃飯</li>
            <li>如果按下播放鍵 🎵 → 播放音樂</li>
        </ul>
        <p>這些都屬於「條件判斷」。</p>

        <h4>(二) if-else 條件判斷</h4>
        <pre>if 條件:
    條件成立時執行的程式
else:
    條件不成立時執行的程式</pre>
        <p>簡單理解：<br>
        👉 if 表示：「如果…」<br>
        👉 else 表示：「不然就…」<br>
        程式會根據條件，選擇不同的結果。</p>
        <h5>音樂情境小舉例</h5>
        <p>判斷成績是否及格，程式碼如下：</p>
        <pre>score = 80

if score >= 60:
    print("及格")
else:
    print("不及格")</pre>
        <p>程式邏輯說明：<br>
        如果：score >= 60 成立，就輸出：及格，否則輸出：不及格。</p>

        <h4>(三) if / elif / else 條件判斷</h4>
        <p>有時候：不只兩種情況，而是很多種選擇，這時可以使用 if、elif、else。</p>
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
            程式判斷順序：程式會「由上往下」判斷。順序如下：<br>
            　　1️⃣ 先檢查 if<br>
            　　2️⃣ if 不成立 → 檢查 elif<br>
            　　3️⃣ 都不成立 → 執行 else
        </p>
        <h5>音樂情境小舉例</h5>
        <pre>speed = 3

if speed == 1:
    print("慢速播放 🎵")
elif speed == 2:
    print("正常播放 🎵")
else:
    print("快速播放 🎵")</pre>
        <p>程式邏輯說明：<br>
        程式會根據 speed 數字：1 → 慢速、2 → 正常、其他 → 快速，來決定音樂的播放速度。</p>

        <hr>

        <h3>範例程式說明</h3>

        <h4>範例(一)：判斷輸入數字的種類</h4>
        <p>
            請撰寫一段程式，讓使用者輸入一個整數，並判斷該數字為：<br>
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

# 第一種情況：如果數字大於 0
if num > 0:
    # 顯示正數訊息
    print("你輸入的是正數")

# 第二種情況：如果數字等於 0
elif num == 0:
    # 顯示 0 的訊息
    print("你輸入的是 0")

# 第三種情況：如果以上條件都不成立，代表數字一定小於 0
else:
    # 顯示負數訊息
    print("你輸入的是負數")</pre>
        <p>程式執行結果：</p>
        <pre>假設輸入：
請輸入一個整數: -5

輸出：
你輸入的是負數</pre>

        <h4>範例(二)：決定是否播放旋律（if-else）</h4>
        <img src="{{ asset('img/London_Bridge.png') }}" alt="倫敦鐵橋五線譜">
        <p>
            此行五線譜是《倫敦鐵橋》的第一句旋律，此行音符為：So La So Fa Mi Fa So<br><br>
            請撰寫一段程式，讓使用者輸入一個整數：<br>
            　　• 如果是偶數 → 播放音符 So（G）<br>
            　　• 如果是奇數 → 不播放音樂，並顯示【不播放音樂】文字
        </p>
        <pre>參考程式：
# 【前置準備】
# 匯入需要的套件
# 匯入 time 套件
# 功能：控制音符播放時間
import time

# 匯入 pygame.midi 套件
# 功能：播放 MIDI 音樂
import pygame.midi

# 初始化 MIDI 系統
pygame.midi.init()

# 建立 MIDI 播放器
# 0 代表預設播放裝置
player = pygame.midi.Output(0)

# 設定樂器為鋼琴
# 0 = 鋼琴
player.set_instrument(0)

# 建立音符對照表
# So（G）對應 MIDI 數值 67
note_map = {
    "G": 67
}

# 設定音符播放時間（秒）
beat = 0.5

# 【題號1】
# 讓使用者輸入一個整數
# input() 預設取得的是字串（string）
# 使用 int() 轉換成整數（integer）
num = int(input("請輸入一個整數: "))

# 【題號2】
# 使用 if-else 判斷輸入的數字是偶數還是奇數
# num % 2 == 0
# % 為取餘數運算
# 若除以 2 的餘數為 0，代表是偶數
if num % 2 == 0:
    # 顯示提示訊息
    print("播放 So（G）🎵")
    # 取得 So（G）對應的 MIDI 數值
    midi_num = note_map["G"]
    # 開始播放音符
    # 第一個參數：音高
    # 第二個參數：音量（0~127）
    player.note_on(midi_num, 100)
    # 讓音符持續播放 0.5 秒
    time.sleep(beat)
    # 停止播放音符
    player.note_off(midi_num, 100)
else:
    # 如果是奇數，則不播放音樂
    print("不播放音樂 ❌")</pre>
        <p>程式執行結果（範例一）：</p>
        <pre>假設輸入：
請輸入一個整數: 8

輸出：
播放 So（G）🎵</pre>
        <p>並播放：So（G）</p>
        <p>程式執行結果（範例二）：</p>
        <pre>假設輸入：
請輸入一個整數: 5

輸出：
不播放音樂 ❌</pre>
        <p>不會播放任何音符。</p>

        <h2 id="section2-2">2. for 迴圈</h2>

        <h3>重點語法</h3>

        <h4>(一) 什麼是 for 迴圈？</h4>
        <p>
            for 迴圈可以想成：<br>
            👉「幫程式重複做事情的小助手」。<br><br>
            當有很多資料需要：<br>
            　　• 一個一個處理<br>
            　　• 一個一個播放<br>
            　　• 一個一個顯示<br><br>
            就很適合使用 for 迴圈。
        </p>
        <h5>音樂情境小舉例</h5>
        <p>
            如果有一段旋律：🎵 Do → Re → Mi → Fa<br>
            程式需要：👉 一個一個播放音符，這時就能使用 for 迴圈。
        </p>

        <h4>(二) for 迴圈語法</h4>
        <p>基本語法：</p>
        <pre>for 變數 in 串列:
    要重複執行的程式</pre>
        <p>
            簡單理解：<br>
            👉 for 表示：「重複做」<br>
            👉 變數：用來暫時存放目前的資料<br>
            👉 in 表示：「從串列裡面取資料」
        </p>
        <p>範例說明，如下程式碼：</p>
        <pre>melody = ["C", "D", "E"]

for note in melody:
    print(note)</pre>
        <p>程式執行結果：</p>
        <pre>C
D
E</pre>
        <p>
            程式邏輯說明：<br>
            程式會：<br>
            　　1️⃣ 先取出 "C"，放進變數 note<br>
            　　2️⃣ 再取出 "D"<br>
            　　3️⃣ 再取出 "E"<br>
            直到所有音符都處理完。
        </p>
        <h5>音樂情境理解</h5>
        <p>
            如果 melody 是：["C", "D", "E"]，就代表：🎵 Do → Re → Mi<br>
            for 迴圈會：👉 依序播放每個音符。
        </p>

        <h4>(三) 索引（index）是什麼？</h4>
        <p>串列中的每個資料，都有自己的位置編號，這個編號稱為：👉 索引（index）</p>
        <p>重點觀念：Python 的索引：👉 從 0 開始，不是從 1 開始。</p>
        <p>範例，如下程式碼：</p>
        <pre>melody = ["G", "A", "G", "F"]</pre>
        <p>對應位置如下：</p>
        <table>
            <tr><th>位置（index）</th><th>音符</th></tr>
            <tr><td>0</td><td>G</td></tr>
            <tr><td>1</td><td>A</td></tr>
            <tr><td>2</td><td>G</td></tr>
            <tr><td>3</td><td>F</td></tr>
        </table>
        <p>
            什麼是 melody[i]？<br>
            melody[i] 代表：👉 使用位置編號，取得對應的資料，就像：用座號找同學。
        </p>
        <h5>音樂情境小舉例</h5>
        <p>
            如果：melody = ["Do", "Re", "Mi"]，那麼：<br>
            melody[0] 👉 是 Do 🎵<br>
            melody[1] 👉 是 Re 🎵<br>
            melody[2] 👉 是 Mi 🎵
        </p>
        <p>範例說明，如下程式碼：</p>
        <pre>i = 1
print(melody[i])</pre>
        <p>程式執行結果：</p>
        <pre>A</pre>
        <p>
            程式邏輯說明：<br>
            因為：i = 1，代表取：👉 第 1 個位置，而 melody 中：
        </p>
        <table>
            <tr><th>index</th><th>音符</th></tr>
            <tr><td>0</td><td>G</td></tr>
            <tr><td>1</td><td>A</td></tr>
        </table>
        <p>所以：melody[1] 會得到：A</p>
        <h5>音樂情境理解</h5>
        <p>
            《倫敦鐵橋》第一句：🎵 So → La → So → Fa → Mi → Fa → So<br>
            歌詞對應：🎵 London Bridge is falling down
        </p>
        <p>
            for 迴圈就像一位音樂播放器，會按照旋律串列中的順序：<br>
            　　• 讀取音符<br>
            　　• 播放音符<br>
            　　• 停止音符<br>
            　　• 再播放下一個音符<br>
            直到整段旋律播放完成。
        </p>

        <hr>

        <h3>範例程式說明</h3>

        <h4>範例(一)：for 迴圈基礎練習</h4>
        <p>
            請撰寫一段程式，使用 for 迴圈，依序印出數字 1 到 5。<br><br>
            提示：<br>
            　　• for：用來重複執行程式<br>
            　　• range(1, 6)：代表從 1 到 5（不包含 6）<br>
            　　• i：每次迴圈的數值
        </p>
        <pre>參考程式：
# 【題號1】
# 使用 for 迴圈依序印出數字 1 到 5
# range(1, 6) 會產生：1、2、3、4、5
# 注意：6 不會被包含進去
for i in range(1, 6):
    # i 代表目前迴圈執行到的數字
    # 第一次 i = 1
    # 第二次 i = 2
    # 第三次 i = 3
    # 第四次 i = 4
    # 第五次 i = 5
    print(i)</pre>
        <p>程式執行結果：</p>
        <pre>1
2
3
4
5</pre>

        <h4>範例(二)：使用 for 迴圈播放旋律</h4>
        <img src="{{ asset('img/London_Bridge.png') }}" alt="倫敦鐵橋五線譜">
        <p>
            此行五線譜是《倫敦鐵橋》的第一句旋律，此行音符為：So La So Fa Mi Fa So<br>
            請撰寫一段程式，使用 for 迴圈播放《倫敦鐵橋》第一句旋律。
        </p>
        <pre>參考程式：
# 【前置準備】
# 匯入需要的套件
# 匯入 time 套件
# 功能：控制音符播放時間長度
import time

# 匯入 pygame.midi 套件
# 功能：播放 MIDI 音樂
import pygame.midi

# 初始化 MIDI 系統
pygame.midi.init()

# 建立 MIDI 播放器
# 0 代表使用預設播放裝置
player = pygame.midi.Output(0)

# 設定樂器
# 0 = 鋼琴
player.set_instrument(0)

# 建立音符對照表（字典 Dictionary）
# 功能：將音符名稱轉換成 MIDI 數值
# 電腦實際播放的是 MIDI 數字，不是 G、A、F、E
note_map = {
    "G": 67,   # So
    "A": 69,   # La
    "F": 65,   # Fa
    "E": 64    # Mi
}

# 【題號1】
# 建立旋律串列（List）
# 將《倫敦鐵橋》第一句旋律存入串列
# So La So Fa Mi Fa So
melody = ["G", "A", "G", "F", "E", "F", "G"]

# 設定每個音符播放時間
# 單位：秒
beat = 0.5

# 顯示提示訊息
print("播放《倫敦鐵橋》🎵")

# 【題號2】
# 使用 for 迴圈依序播放旋律
# n 代表目前取出的音符
# for 迴圈會從串列第一個音符開始
# 一個一個取出直到全部播放完成
for n in melody:
    # 將目前音符轉換成 MIDI 數值
    # 例如：n = "G" → midi_num = 67
    midi_num = note_map[n]
    player.note_on(midi_num, 100)
    time.sleep(beat)
    player.note_off(midi_num, 100)</pre>

    </div>
</div>
@endsection
