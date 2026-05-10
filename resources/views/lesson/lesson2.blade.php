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

        <h4>(一) if-else 條件判斷</h4>
        <pre>if 條件:
    條件成立時執行的程式
else:
    條件不成立時執行的程式</pre>
        <p>此語法用來根據條件判斷結果，執行不同程式區塊。</p>

        <h4>(二) if / elif / else 條件判斷</h4>
        <p>
            程式會「由上往下」判斷：<br><br>
            　　1. 先檢查 if<br>
            　　2. 不成立 → 檢查 elif<br>
            　　3. 都不成立 → 執行 else<br><br>
            並且「只會執行其中一個區塊」。
        </p>
        <p>
            <strong>if 條件：</strong><br>
            　　✔ 如果條件成立 → 執行程式<br>
            　　✔ 如果不成立 → 跳過<br><br>
            <strong>elif 條件：</strong><br>
            　　✔ 可以有很多個 elif<br>
            　　✔ 只要有一個條件成立，就會執行，後面就不再判斷<br><br>
            <strong>else：</strong><br>
            　　✔ 當以上條件都不成立時，執行最後的情況<br>
            　　✔ 不需要寫條件，代表「其他所有情況」
        </p>

        <hr>

        <h3>範例程式說明</h3>

        <h4>範例(一)：判斷輸入數字的種類</h4>
        <p>
            請撰寫一段程式，讓使用者輸入一個整數，並判斷該數字：<br><br>
            　　• 正數<br>
            　　• 0<br>
            　　• 負數<br><br>
            提示：<br><br>
            　　• if：第一個條件判斷<br>
            　　• elif：多條件判斷（else if）<br>
            　　• else：其他所有情況
        </p>
        <pre>參考程式：
num = int(input("請輸入一個整數: "))

if num > 0:
    print("你輸入的是正數")
elif num == 0:
    print("你輸入的是 0")
else:
    print("你輸入的是負數")</pre>

        <h4>範例(二)：決定是否播放旋律（if-else）</h4>
        <img src="{{ asset('img/London_Bridge.png') }}" alt="倫敦鐵橋五線譜">
        <p>
            此行五線譜是《倫敦鐵橋》的第一句旋律，此行音符為：So La So Fa Mi Fa So<br><br>
            請撰寫一段程式，讓使用者輸入一個整數：<br><br>
            　　• 如果是偶數 → 播放音符 So（G）<br>
            　　• 如果是奇數 → 不播放音樂，並顯示【不播放音樂】文字
        </p>
        <pre>參考程式：
import time
import pygame.midi

pygame.midi.init()
player = pygame.midi.Output(0)
player.set_instrument(0)

note_map = {"G":67}
beat = 0.5

num = int(input("請輸入一個整數: "))

if num % 2 == 0:
    print("播放 So（G）🎵")
    midi_num = note_map["G"]
    player.note_on(midi_num, 100)
    time.sleep(beat)
    player.note_off(midi_num, 100)
else:
    print("不播放音樂 ❌")</pre>

        <h2 id="section2-2">2. for 迴圈</h2>

        <h3>重點語法</h3>

        <h4>(一) for 迴圈</h4>
        <p>
            for 迴圈是 Python 中常用的重複執行結構，主要用來依序讀取資料集合（如串列 list）中的每一個元素，並對每個元素執行相同的程式動作。基本語法如下：
        </p>
        <pre>for 變數 in 串列:
    要重複執行的程式</pre>
        <p>程式執行時，for 迴圈會從串列的第一個元素開始，依序取出每一個資料，直到所有資料都被處理完成為止。</p>

        <h4>(二) 索引（index）概念</h4>
        <p>
            在程式中，串列（list）中的每個資料都有一個位置編號，這個編號就叫做「索引」。<br><br>
            舉例：melody = ["G", "A", "G", "F"]
        </p>
        <table>
            <tr><th>位置（index）</th><th>音符</th></tr>
            <tr><td>0</td><td>G</td></tr>
            <tr><td>1</td><td>A</td></tr>
            <tr><td>2</td><td>G</td></tr>
            <tr><td>3</td><td>F</td></tr>
        </table>
        <p>
            <strong>重點說明</strong><br><br>
            　　• i 代表「目前播放到第幾個音符」<br>
            　　• melody[i] 用來「取出該位置的音符」，如下程式碼：
        </p>
        <pre>i = 1
print(melody[i])  # 會印出 A</pre>

        <hr>

        <h3>範例程式說明</h3>

        <h4>範例(一)：for 迴圈基礎練習</h4>
        <p>
            提示：<br><br>
            　　• for：用來重複執行程式<br>
            　　• range(1, 6)：代表從 1 到 5（不包含 6）<br>
            　　• i：每次迴圈的數值
        </p>
        <pre>參考程式：
for i in range(1, 6):
    print(i)</pre>

        <h4>範例(二)：使用 for 迴圈播放旋律</h4>
        <img src="{{ asset('img/London_Bridge.png') }}" alt="倫敦鐵橋五線譜">
        <p>
            此行五線譜是《倫敦鐵橋》的第一句旋律，此行音符為：So La So Fa Mi Fa So<br>
            請撰寫一段程式，使用 for 迴圈播放《倫敦鐵橋》第一句旋律。
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
    "F":65,
    "E":64
}

melody = ["G", "A", "G", "F", "E", "F", "G"]
beat = 0.5

print("播放《倫敦鐵橋》🎵")

for n in melody:
    midi_num = note_map[n]
    player.note_on(midi_num, 100)
    time.sleep(beat)
    player.note_off(midi_num, 100)</pre>

    </div>
</div>
@endsection
