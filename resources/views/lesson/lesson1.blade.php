@extends('layouts.app')

@section('style')
    @include('layouts._lesson-styles')
@endsection

@section('content')
<div class="lesson-wrap">

    {{-- ===== 標題列 ===== --}}
    <div class="lesson-header">
        <h1>第 1 章　數值、字串與串列</h1>
        <div class="audio-wrap">
            <span>範例音檔</span>
            <audio controls>
                <source src="{{ asset('audio/1_star.mp3') }}" type="audio/mpeg">
                您的瀏覽器不支援播放
            </audio>
        </div>
    </div>

    {{-- ===== 學習目標 ===== --}}
    <div class="lesson-goals">
        <h3>學習目標</h3>
        <div class="goal-links">
            <a href="#section1-1">1. 數值運算與字串處理</a>
            <a href="#section1-2">2. 串列與相關處理函數</a>
        </div>
    </div>

    {{-- ===== 主要內容 ===== --}}
    <div class="lesson-content">

        <h2 id="section1-1">1. 數值運算與字串處理</h2>

        <h3>重點語法</h3>

        <h4>(一) 數值運算</h4>
        <table>
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
            1. 字串與數字為不同資料型態，不可直接混合使用。<br><br>
            2. 常用轉換函數：<br><br>
            　　• str()：數字 → 字串（用於顯示），如下程式碼：
        </p>
        <pre>print("年齡是 " + str(18))</pre>
        <p>　　• int()：字串 → 數字（用於計算），如下程式碼：</p>
        <pre>a = int("5")
b = int("3")
print(a + b)</pre>
        <p>
            總結：<br><br>
            　　• 字串可用 + 串接<br>
            　　• str()：數字轉字串<br>
            　　• int()：字串轉數字<br>
            　　• 不同型態運算前需先轉換
        </p>

        <hr>

        <h3>範例程式說明</h3>

        <h4>範例(一)：計算明年年齡並顯示結果</h4>
        <p>
            請撰寫一段程式，完成以下功能：<br><br>
            　　1. 讓使用者輸入「姓名」與「年齡」<br>
            　　2. 將輸入的年齡轉換為整數<br>
            　　3. 計算「明年的年齡」<br>
            　　4. 輸出完整句子，例如：小明明年 19 歲
        </p>
        <p>
            提示：<br><br>
            　　• 數值運算：age + 1（加法運算）<br>
            　　• 字串處理：使用（+）進行字串串接<br>
            　　• 型態轉換：使用 int()，字串 → 數字；使用 str()，數字 → 字串
        </p>
        <pre>參考程式：
# 輸入姓名（字串）
name = input("請輸入姓名: ")

# 輸入年齡（input 預設為字串，需要轉換）
age = int(input("請輸入年齡: "))

# 數值運算：計算明年年齡
next_age = age + 1

# 字串處理：將結果組合並輸出
print(name + " 明年 " + str(next_age) + " 歲")</pre>

        <h4>範例(二)：小星星旋律播放（簡單版）</h4>
        <img src="{{ asset('img/star.png') }}" alt="小星星五線譜">
        <p>
            此行五線譜是《小星星》的第一句旋律，此行歌詞為一閃一閃亮晶晶（Twinkle, twinkle, little star）<br><br>
            請撰寫一段程式：<br><br>
            　　1. 輸入一個數字<br>
            　　2. 設定音符播放時間（數字 × 0.5）<br>
            　　3. 播放兩個音：C → G
        </p>
        <pre>參考程式：
import time
import pygame.midi

pygame.midi.init()
player = pygame.midi.Output(0)
player.set_instrument(0)

num = int(input("請輸入一個數字（這會影響每個音符的節拍長度）: "))
beat = num * 0.5

print("目前的播放速度（節拍長度）為: " + str(beat) + " 秒")

# 播放第一個音：中央 C (MIDI 編號 60)
player.note_on(60, 100)
time.sleep(beat)
player.note_off(60, 100)

# 播放第二個音：高音 G (MIDI 編號 67)
player.note_on(67, 100)
time.sleep(beat)
player.note_off(67, 100)</pre>

        <h2 id="section1-2">2. 串列與相關處理函數</h2>

        <h3>重點語法</h3>

        <h4>(一) 串列（List）說明</h4>
        <p>1. 串列是一種用來「儲存多個資料」的資料型態。如下程式碼：</p>
        <pre>melody = ["C", "D", "E"]</pre>
        <p>
            　　• List 使用 [ ] 來建立<br>
            　　• List 可以存放多個值（例如音符、數字）<br>
            　　• List 資料有順序<br><br>
            2. 使用「索引（index）」取得串列中的資料，要從 0 開始，如下程式碼：
        </p>
        <pre>melody = ["C", "D", "E"]
print(melody[0])  # C
print(melody[1])  # D</pre>
        <p>3. 使用 len() 函式，可以得知串列的長度（length）。如下程式碼：</p>
        <pre>melody = ["C", "D", "E"]
len(melody)  # 3個元素</pre>

        <h4>(二) 串列（List）資料的新增、修改、刪除</h4>
        <p>1. 新增資料（append）：在串列的最後加入新資料，如下程式碼：</p>
        <pre>melody.append("F")
# 原本：["C", "D", "E"]
# 變成：["C", "D", "E", "F"]</pre>
        <p>2. 修改資料：可以直接改變指定位置的值，如下程式碼：</p>
        <pre>melody[0] = "G"  # 將第一個音符改為 G</pre>
        <p>3. 刪除資料：使用 .remove() 刪除指定的值，如下程式碼：</p>
        <pre>melody.remove("D")  # 刪除音符 D</pre>

        <hr>

        <h3>範例程式說明</h3>

        <h4>範例(一)：串列基本操作練習</h4>
        <p>
            請撰寫一段程式，完成以下功能：<br><br>
            　　1. 建立一個串列，內容為：["apple", "banana", "cherry"]<br>
            　　2. 印出串列中的第一個水果<br>
            　　3. 在串列最後新增一個水果 "orange"<br>
            　　4. 印出更新後的串列長度<br><br>
            提示：<br><br>
            　　• 串列建立：[]<br>
            　　• 索引取值：fruits[0]<br>
            　　• 新增資料：append()<br>
            　　• 長度計算：len()
        </p>
        <pre>參考程式：
# 建立串列
fruits = ["apple", "banana", "cherry"]

# 取出第一個元素（索引從 0 開始）
print("第一個水果是:", fruits[0])

# 新增資料到串列最後
fruits.append("orange")

# 印出串列長度
print("目前共有", len(fruits), "個水果")</pre>

        <h4>範例(二)：使用串列播放小星星旋律</h4>
        <img src="{{ asset('img/star.png') }}" alt="小星星五線譜">
        <p>
            此行五線譜是《小星星》的第一句旋律，此行歌詞為一閃一閃亮晶晶（Twinkle, twinkle, little star）<br><br>
            請撰寫一段程式，完成以下功能：<br>
            　　1. 建立串列：["C", "C", "G", "G"]<br>
            　　2. 印出第一個音符<br>
            　　3. 依序播放每個音符
        </p>
        <pre>參考程式：
import time
import pygame.midi

pygame.midi.init()
player = pygame.midi.Output(0)
player.set_instrument(0)

# 音符對照表
note_map = {
    "C":60,
    "G":67
}

# 建立串列（小星星前四個音）
melody = ["C", "C", "G", "G"]

print("第一個音符是:", melody[0])

beat = 0.5

# 第 1 個音
note = melody[0]
midi_num = note_map[note]
player.note_on(midi_num, 100)
time.sleep(beat)
player.note_off(midi_num, 100)

# 第 2 個音
note = melody[1]
midi_num = note_map[note]
player.note_on(midi_num, 100)
time.sleep(beat)
player.note_off(midi_num, 100)

# 第 3 個音
note = melody[2]
midi_num = note_map[note]
player.note_on(midi_num, 100)
time.sleep(beat)
player.note_off(midi_num, 100)

# 第 4 個音
note = melody[3]
midi_num = note_map[note]
player.note_on(midi_num, 100)
time.sleep(beat)
player.note_off(midi_num, 100)</pre>

    </div>
</div>
@endsection
