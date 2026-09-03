@extends('layouts.app')

@section('style')
    @include('layouts._lesson-styles')
@endsection

@section('content')
<div class="lesson-wrap" data-chapter="3">

    {{-- ===== 標題列 ===== --}}
    <div class="lesson-header">
        <h1>第 3 章 函數</h1>
        <div class="audio-wrap">
            <span>範例音檔</span>
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

        <h4>(一) 什麼是函數（Function）？</h4>
        <p>
            函數可以想成：👉「幫忙做事情的小機器」。<br><br>
            當我們有一段程式碼需要重複使用時，<br>
            就可以把它放進函數裡面。<br>
            這樣之後需要使用時，<br>
            只要呼叫函數即可，不需要一直重複撰寫相同程式。
        </p>

        <h5>🎵 音樂情境小舉例</h5>
        <p>
            假設我們有一個功能：👉 播放 Do 音<br>
            如果每次都要重新撰寫播放程式會很麻煩。<br>
            因此可以建立一個函數：
        </p>
        <pre>def play_do():
    print("播放 Do 🎵")</pre>
        <p>
            之後只要呼叫函數：<code>play_do()</code><br>
            就能執行播放 Do 音的功能。
        </p>

        <h4>(二) 函數（Function）</h4>
        <p>
            <strong>1. 建立函數：</strong>使用 def 建立函數。<br>
            如下程式碼：
        </p>
        <pre>def say_hello():
    print("Hello")</pre>
        <p>
            程式說明：<br>
            def代表建立函數。<br>
            say_hello是函數名稱。
        </p>
        <p>
            <strong>2. 呼叫函數：</strong><br>
            函數建立後不會立刻執行，<br>
            必須呼叫它才會運作。
        </p>

        <h5>🎵 音樂情境小舉例</h5>
        <p>建立函數：</p>
        <pre>def play_music():
    print("播放音樂 🎵")</pre>
        <p>呼叫函數：</p>
        <pre>play_music()</pre>
        <p>執行結果：<br>播放音樂 🎵</p>

        <h4>(三) 參數（Parameter）</h4>
        <p>
            有時候函數需要接收資料，<br>
            這些資料稱為：👉 參數（Parameter）<br>
            參數可以讓同一個函數完成不同工作。
        </p>
        <p>
            <strong>範例</strong><br>
            如下程式碼：
        </p>
        <pre>def greet(name):
    print("你好，" + name)</pre>
        <p>
            程式說明：<br>
            name就是參數。<br>
            函數執行時，可以把不同名字傳進來。就像以下這兩種情況：
        </p>
        <p>1. 呼叫函數(如果我輸入小明)：</p>
        <pre>greet("小明")</pre>
        <p>執行結果：<br>你好，小明</p>
        <p>2. 呼叫函數(如果我輸入小華)：</p>
        <pre>greet("小華")</pre>
        <p>執行結果：<br>你好，小華</p>

        <h5>🎵 音樂情境小舉例</h5>
        <p>1. 建立函數：</p>
        <pre>def play_note(note):
    print("播放音符：" + note)</pre>
        <p>2. 呼叫函數：</p>
        <pre>play_note("Do")</pre>
        <p>結果：<br>播放音符：Do</p>
        <pre>play_note("Mi")</pre>
        <p>結果：<br>播放音符：Mi</p>
        <p>同一個函數，可以播放不同音符。</p>

        <h4>(四) 傳入參數（Argument）</h4>
        <p>
            呼叫函數時傳入的資料，<br>
            稱為：👉 引數（Argument）<br>
            函數也可以同時接收多個參數。
        </p>
        <p>
            <strong>範例</strong><br>
            如下程式碼：
        </p>
        <pre>def add(a, b):
    print(a + b)</pre>
        <p>呼叫：</p>
        <pre>add(3, 5)</pre>
        <p>執行結果：<br>8</p>
        <p>
            程式說明：<br>
            a接收第一個數字。<br>
            b接收第二個數字。<br>
            函數執行：3 + 5<br>
            結果：8
        </p>

        <h5>🎵 音樂情境小舉例</h5>
        <p>假設函數需要接收兩個音符：</p>
        <pre>def play_two_notes(note1, note2):
    print(note1)
    print(note2)</pre>
        <p>呼叫：</p>
        <pre>play_two_notes("Do", "Re")</pre>
        <p>執行結果：<br>Do<br>Re</p>

        <h4>(五) 回傳值（return）</h4>
        <p>
            有時候函數計算完結果後，<br>
            希望把結果交回來使用，<br>
            就可以使用：<code>return</code>
        </p>
        <p>
            <strong>範例</strong><br>
            如下程式碼：
        </p>
        <pre>def add(a, b):
    return a + b</pre>
        <p>呼叫函數：</p>
        <pre>result = add(3, 5)</pre>
        <p>結果：<br>8</p>
        <p>
            因為函數執行後，先計算a + b ，經過計算a + b = 8，得出8<br>
            這個8回傳之後，會被存入result變數。
        </p>

        <h5>🎵 音樂情境小舉例</h5>
        <p>先建立函數：</p>
        <pre>def get_note():
    return "Do"</pre>
        <p>再呼叫函數：</p>
        <pre>note = get_note()</pre>
        <p>此時：note裡面會存放Do<br>這時候再輸出：</p>
        <pre>print(note)</pre>
        <p>可得到執行結果：<br>Do</p>

        <hr>

        <h3>範例程式說明</h3>

        <h4>範例(一)：使用函數顯示加總結果</h4>
        <p>
            請撰寫一段程式，完成以下功能：<br><br>
              1. 定義一個函數 add(a, b)<br>
              2. 函數功能：計算兩個數字的加總並印出結果<br>
              3. 讓使用者輸入兩個整數<br>
              4. 呼叫函數並傳入這兩個數字<br><br>
            提示：<br>
              • def：定義函數<br>
              • 參數：a, b<br>
              • 呼叫函數：add(num1, num2)<br>
              • int()：將字串型態轉換為整數型態
        </p>
        <pre>參考程式：

# 【第1題】定義函數 add(a, b)
# def 用來建立函數
# a、b 為函數的參數，用來接收外部傳入的兩個數字
def add(a, b):
    # 【第2題】計算兩個數字的加總
    # 將 a 與 b 相加後，存入 result 變數
    result = a + b
    # 【第2題】顯示加總結果
    print("加總結果是:", result)

# 【第3題】讓使用者輸入第一個整數
# input() 取得的資料型態為字串（string）
# 使用 int() 將字串轉換成整數（integer）
num1 = int(input("請輸入第一個數字: "))

# 【第3題】讓使用者輸入第二個整數
# 同樣使用 int() 將輸入內容轉換成整數
num2 = int(input("請輸入第二個數字: "))

# 【第4題】呼叫函數並傳入兩個數字
# 將 num1 傳給參數 a
# 將 num2 傳給參數 b
# 函數接收到資料後會執行加總並顯示結果
add(num1, num2)</pre>
        <p><strong>執行結果（假設輸入）：</strong></p>
        <pre>請輸入第一個數字: 5
請輸入第二個數字: 8

執行結果：
加總結果是: 13</pre>

        <h4>範例(二)：使用函數播放生日快樂旋律</h4>
        <img src="{{ asset('img/HBD.png') }}" alt="生日快樂五線譜">
        <p>
            此行五線譜是《生日快樂》的第一句旋律，此行音符為 Sol Sol La Sol Do(高) Si<br><br>
            請撰寫一段程式，完成以下功能：<br><br>
              1. 定義函數 play_note(note)<br>
              2. 函數功能：接收音符並播放<br>
              3. 呼叫函數播放播放旋律：<br>
                G → G → A → G → 高音C → B
        </p>
        <pre>參考程式：

# 匯入需要的套件
import time
import pygame.midi

# 初始化 MIDI 系統
pygame.midi.init()

# 建立 MIDI 播放器（0 代表預設裝置）
player = pygame.midi.Output(0)

# 設定樂器為鋼琴（0 = Piano）
player.set_instrument(0)

# 音符對照表
# 將音符名稱對應到 MIDI 數值
note_map = {
    "G":67,        # Sol
    "A":69,        # La
    "C_high":72,   # 高音 Do
    "B":71         # Si
}

# 【第1題】定義函數 play_note(note)
# note 為參數，用來接收要播放的音符名稱
def play_note(note):
    # 【第2題】根據音符名稱取得對應的 MIDI 數值
    midi_num = note_map[note]
    # 【第2題】開始播放音符
    # 100 為音量大小
    player.note_on(midi_num, 100)
    # 【第2題】讓音符持續播放 0.5 秒
    time.sleep(0.5)
    # 【第2題】停止播放音符
    player.note_off(midi_num, 100)

# 【第3題】依序呼叫函數播放《生日快樂》第一句旋律
# 第1個音：Sol（G）
play_note("G")
# 第2個音：Sol（G）
play_note("G")
# 第3個音：La（A）
play_note("A")
# 第4個音：Sol（G）
play_note("G")
# 第5個音：高音 Do（C_high）
play_note("C_high")
# 第6個音：Si（B）
play_note("B")</pre>
        <p><strong>程式執行結果：</strong></p>
        <pre>執行程式後，電腦會依序播放：
Sol → Sol → La → Sol → Do(高) → Si

也就是《生日快樂》第一句旋律：
Happy Birthday to You
🎵 G → G → A → G → C(高) → B</pre>

        <h2 id="section3-2">2. 函數的進階應用</h2>

        <h3>重點語法</h3>

        <h4>(一) 參數預設值（Default Parameter）</h4>
        <p>
            有時候函數需要接收資料，但如果使用者沒有提供資料，函數也能先使用預設值。<br>
            就像老師上音樂課時說：👉「如果不知道要唱哪首歌，就先唱《小星星》。」<br>
            這個預先準備好的內容，就是「預設值」。
        </p>
        <p><strong>範例程式：</strong></p>
        <pre>def greet(name="同學"):
    print("你好，" + name)

greet()
greet("小明")</pre>
        <p>
            <strong>程式說明</strong><br>
            建立函數時：<code>name="同學"</code><br>
            表示預設名字是「同學」。<br><br>
            如果沒有傳入資料：<code>greet()</code><br>
            執行結果：你好，同學<br><br>
            如果有傳入資料：<code>greet("小明")</code><br>
            執行結果：你好，小明<br>
            此時會使用新的資料取代預設值。
        </p>

        <h5>🎵 音樂情境小舉例</h5>
        <pre>def play_song(song="小星星"):
    print("播放：" + song)</pre>
        <p>
            呼叫：<code>play_song()</code><br>
            結果：播放：小星星<br><br>
            假如今天有輸入其他資料的話，如：生日快樂歌<br>
            這時就不會使用預設值"小星星"，而會使用"生日快樂歌"，如下：<br><br>
            呼叫：<code>play_song("生日快樂歌")</code><br>
            結果：播放：生日快樂歌
        </p>

        <h4>(二) 函數中呼叫函數</h4>
        <p>
            函數不只能自己工作，還可以請其他函數幫忙完成任務。<br>
            就像樂團演奏時：<br>
            🎹 鋼琴負責旋律<br>
            🥁 鼓負責節奏<br>
            大家一起合作完成歌曲。
        </p>
        <p><strong>範例程式：</strong></p>
        <pre>def add(a, b):
    return a + b

def show_result(x, y):
    result = add(x, y)
    print("結果是：", result)

show_result(3, 5)</pre>
        <p>
            <strong>程式說明</strong><br>
            第一個函數：<code>add()</code> 負責計算加法。<br>
            第二個函數：<code>show_result()</code> 負責顯示結果。<br><br>
            執行：<code>show_result(3, 5)</code> 時，<br>
            會先呼叫：<code>add(3, 5)</code><br>
            得到：8<br>
            再印出：結果是：8
        </p>

        <h5>🎵 音樂情境小舉例</h5>
        <pre>def play_note():
    print("播放 Do")

def play_song():
    play_note()</pre>
        <p>
            執行：<code>play_song()</code><br>
            結果：播放 Do<br>
            表示一個函數可以呼叫另一個函數來幫忙完成工作。
        </p>

        <h4>(三) 區域變數與全域變數</h4>
        <p>
            變數也有自己的活動範圍。<br>
            可以想成：<br>
            🏫 全校都能使用的東西<br>
            和<br>
            🏠 只有自己教室能使用的東西。
        </p>
        <p>
            <strong>1. 全域變數（Global Variable）</strong><br>
            全域變數是在函數外面建立的。整個程式都可以使用。<br>
            <strong>範例：</strong>
        </p>
        <pre>x = 10

def test():
    print(x)

test()</pre>
        <p>
            執行結果：10<br>
            因為：x是在函數外建立，所以整個程式都能使用。
        </p>
        <p>
            <strong>2. 區域變數（Local Variable）</strong><br>
            區域變數是在函數裡建立的。只能在該函數內使用。<br>
            <strong>範例：</strong>
        </p>
        <pre>def test():
    y = 5
    print(y)

test()</pre>
        <p>
            執行結果：5<br>
            但是函數外面不能直接使用 <code>print(y)</code>，不然會發生錯誤。
        </p>

        <h5>🎵 音樂情境小舉例</h5>
        <p>
            <code>song = "小星星"</code><br>
            如果放在函數外面，整個程式都知道目前歌曲是《小星星》。這就是全域變數。<br><br>
            如果放在函數裡：
        </p>
        <pre>def play():
    note = "Do"</pre>
        <p>
            則：<code>note</code> 只能在 <code>play()</code> 裡使用。這就是區域變數。
        </p>

        <h4>(四) 函數的模組化（Modularization）</h4>
        <p>
            模組化就是：👉 把大工作拆成很多小工作。<br>
            這樣程式會更容易閱讀、修改與維護。
        </p>

        <h5>🎵 音樂情境小舉例</h5>
        <p>
            如果要播放一首歌曲，我們可以拆成：<br>
            ① 輸入節拍<br>
            ② 計算速度<br>
            ③ 顯示結果<br>
            每個工作交給不同函數完成。
        </p>
        <p><strong>範例程式：</strong></p>
        <pre>def input_data():
    return int(input("請輸入數字："))

def calculate(n):
    return n * 2

def show(n):
    print("結果是：", n)

num = input_data()
result = calculate(num)
show(result)</pre>
        <p>
            <strong>程式說明</strong><br>
            第一步：輸入資料 <code>input_data()</code> 負責取得使用者輸入。<br>
            第二步：計算資料 <code>calculate()</code> 負責計算。例如：5 × 2 得到：10<br>
            第三步：顯示結果 <code>show()</code> 負責輸出結果。<br><br>
            整個流程：<br>
            輸入資料<br>
            &nbsp;&nbsp;&nbsp;↓<br>
            進行計算<br>
            &nbsp;&nbsp;&nbsp;↓<br>
            顯示結果<br><br>
            每個函數只負責一件事，程式會更清楚。
        </p>

        <h5>🎵 音樂情境小舉例</h5>
        <p>
            播放《生日快樂歌》時：<br>
            <code>input_song()</code> 負責選歌曲<br>
            &nbsp;&nbsp;&nbsp;↓<br>
            <code>play_song()</code> 負責播放音符<br>
            &nbsp;&nbsp;&nbsp;↓<br>
            <code>show_message()</code> 負責顯示「播放完成」<br><br>
            這就是模組化的概念。
        </p>

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

# 【第1題】定義函數 discount(price, rate=0.9)
# price：商品原價（由使用者輸入）
# rate：折扣比例（預設為 0.9 = 九折）
def discount(price, rate=0.9):
    # 【第2題】計算折扣後價格
    final_price = price * rate
    # 【第2題】回傳計算結果
    return final_price

# 【第3題】讓使用者輸入商品價格
# input() 取得字串 → 使用 int() 轉成整數
price = int(input("請輸入商品價格: "))

# 【第4題】呼叫函數（使用預設折扣 0.9）
# 因為沒有輸入 rate，所以會使用預設值 0.9
final_price = discount(price)

# 【第4題】顯示結果
print("折扣後價格為:", final_price)</pre>
        <p><strong>程式執行結果（假設輸入）：</strong></p>
        <pre>請輸入商品價格: 100

執行結果：
折扣後價格為: 90.0</pre>

        <h4>範例(二)：使用函數播放生日快樂（進階版）</h4>
        <img src="{{ asset('img/HBD.png') }}" alt="生日快樂五線譜">
        <p>
            此行五線譜是《生日快樂》的第一句旋律，此行音符為 Sol Sol La Sol Do(高) Si<br><br>
            請撰寫一段程式，完成以下功能：<br><br>
              1. 定義一個函數 play_note(note, beat=0.5)<br>
              2. 函數功能：<br>
                • 接收音符（note）<br>
                • 接收播放時間（beat，預設為 0.5 秒）<br>
                • 播放該音符<br>
              3. 播放旋律：<br>
                G → G → A → G → 高音 C → B<br>
              4. 前三個音符的節拍，設定為 2 秒
        </p>
        <pre>參考程式：

# 匯入時間與音樂套件
import time
import pygame.midi

# 【初始化 MIDI 音樂系統】
pygame.midi.init()

# 建立播放器（0 = 預設音源）
player = pygame.midi.Output(0)

# 設定樂器為鋼琴
player.set_instrument(0)

# 音符對照表（把音符轉成電腦能播放的數字）
note_map = {
    "G": 67,       # Sol
    "A": 69,       # La
    "C_high": 72,  # 高音 Do
    "B": 71        # Si
}

# ----------------------------------------
# 【第1題】定義函數 play_note(note, beat=0.5)
# note：要播放的音符
# beat：播放時間（預設 0.5 秒）
# ----------------------------------------
def play_note(note, beat=0.5):
    # 【第2題】把音符轉成 MIDI 數值
    midi_num = note_map[note]
    # 【第2題】開始播放音符
    player.note_on(midi_num, 100)
    # 【第2題】控制音符持續時間
    time.sleep(beat)
    # 【第2題】停止播放音符
    player.note_off(midi_num, 100)

# ----------------------------------------
# 【第3題】播放《生日快樂》旋律
# 前三個音：使用 2 秒（自訂 beat）
# 後三個音：使用預設 0.5 秒
# ----------------------------------------
play_note("G", 2)       # Sol（較長）
play_note("G", 2)       # Sol（較長）
play_note("A", 2)       # La（較長）
play_note("G")          # 使用預設 0.5 秒
play_note("C_high")     # 高音 Do
play_note("B")          # Si</pre>
        <p><strong>程式執行結果：</strong></p>
        <pre>程式會依序播放：
Sol（2秒）→ Sol（2秒）→ La（2秒）→ Sol → 高音Do → Si

也就是《生日快樂》第一句旋律 🎵</pre>

    </div>
</div>
@endsection
