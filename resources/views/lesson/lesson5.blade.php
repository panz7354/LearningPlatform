@extends('layouts.app')

@section('style')
    @include('layouts._lesson-styles')
@endsection

@section('content')
<div class="lesson-wrap">

    {{-- ===== 標題列 ===== --}}
    <div class="lesson-header">
        <h1>第 5 章 檔案、異常處理與模組</h1>
        <div class="audio-wrap">
            <span>範例音檔</span>
            <audio controls>
                <source src="{{ asset('audio/5_Alice.mp3') }}" type="audio/mpeg">
                您的瀏覽器不支援播放
            </audio>
        </div>
    </div>

    {{-- ===== 學習目標 ===== --}}
    <div class="lesson-goals">
        <h3>學習目標</h3>
        <div class="goal-links">
            <a href="#section5-1">1. 檔案處理</a>
            <a href="#section5-2">2. 異常處理與模組</a>
        </div>
    </div>

    {{-- ===== 主要內容 ===== --}}
    <div class="lesson-content">

        <h2 id="section5-1">1. 檔案處理</h2>

        <h3>重點語法</h3>

        <h4>(一) 什麼是檔案處理？</h4>
        <p>
            在 Python 中，「檔案處理」就是讓程式可以：<br>
            • 讀取檔案內容 📖<br>
            • 寫入資料到檔案 ✏️<br>
            • 儲存程式結果 💾
        </p>
        <p>
            就像我們平常使用：<br>
            • 記事本<br>
            • Word<br>
            • 歌詞檔<br>
            • 音樂播放清單<br><br>
            Python 也可以幫我們自動開啟與操作這些檔案。
        </p>

        <h5>🎵 常用情境小舉例</h5>
        <p>
            可以把《小星星》的音符：<br>
            C(do) C(do) G(sol) G(sol) A(la) A(la) G(sol)<br>
            存到文字檔中，之後再讓程式讀取並播放旋律。
        </p>

        <h4>(二) 開啟檔案：open()</h4>
        <p>
            使用 <code>open()</code> 可以開啟檔案。<br><br>
            <strong>基本語法</strong><br>
            <code>檔案變數 = open("檔名", "模式")</code><br><br>
            例如：<br>
            <code>file = open("music.txt", "r")</code><br><br>
            代表：<br>
            • 開啟 music.txt<br>
            • 使用 r 模式（read，讀取模式）
        </p>

        <h4>(三) 常見檔案模式</h4>
        <p>
            <strong>"r"</strong>：讀取檔案【read】<br>
            <strong>"w"</strong>：寫入檔案（會覆蓋原內容）【write】<br>
            <strong>"a"</strong>：附加內容（加在最後）【append】
        </p>

        <h5>🎵 音樂情境理解</h5>
        <p>
            假設有一份「音樂歌詞本」：<br><br>
            <strong>"r" 讀取模式</strong><br>
            👉 把歌詞打開來看<br><br>
            <strong>"w" 寫入模式</strong><br>
            👉 把原本歌詞全部擦掉重新寫<br><br>
            <strong>"a" 附加模式</strong><br>
            👉 在最後再加一段新歌詞
        </p>

        <h4>(四) 讀取檔案內容</h4>
        <p>
            <strong>read()</strong><br>
            使用 <code>read()</code> 可以一次讀取全部內容。<br>
            如下程式碼：
        </p>
        <pre>file = open("music.txt", "r") \開啟檔案，並讀取內容
data = file.read() \將剛才讀取的內容，存入變數data裡面
print(data) \顯示變數data의內容</pre>
        <p>
            邏輯說明：<br>
            開啟檔案<br>
            &nbsp;&nbsp;&nbsp;↓<br>
            讀取內容<br>
            &nbsp;&nbsp;&nbsp;↓<br>
            將內容存入變數<br>
            &nbsp;&nbsp;&nbsp;↓<br>
            顯示內容
        </p>

        <h4>(五) 寫入檔案內容</h4>
        <p>
            使用 <code>write()</code> 可以把資料寫入檔案。如下程式碼：
        </p>
        <pre>file = open("music.txt", "w") \開啟檔案music.txt（寫入模式"w"）
file.write("C D E F G") \把文字C D E F G，寫入檔案，檔案內容被儲存</pre>
        <p>
            邏輯說明：<br>
            開啟檔案（寫入模式）<br>
            &nbsp;&nbsp;&nbsp;↓<br>
            把文字寫入檔案<br>
            &nbsp;&nbsp;&nbsp;↓<br>
            檔案內容被儲存
        </p>

        <h4>(六) 關閉檔案：close()</h4>
        <p>
            檔案使用完後，要記得關閉。如下程式碼：
        </p>
        <pre>file.close()</pre>
        <p>
            為什麼要關閉檔案？<br>
            就像：<br>
            🎵 音樂播放器播放完歌曲後<br>
            要記得關掉播放器。<br><br>
            否則可能：<br>
            • 資料沒有正確儲存<br>
            • 檔案被占用<br>
            • 程式發生錯誤
        </p>

        <h4>(七) 完整檔案處理流程</h4>
        <p>如下程式碼：</p>
        <pre># 開啟檔案，用w寫入模式
file = open("music.txt", "w")

# 寫入內容Hello Music
file.write("Hello Music")

# 關閉檔案
file.close()</pre>
        <h5>📌 檔案處理流程圖</h5>
        <p>
            open()<br>
            &nbsp;&nbsp;&nbsp;↓<br>
            讀取 / 寫入<br>
            &nbsp;&nbsp;&nbsp;↓<br>
            close()
        </p>

        <hr>

        <h3>範例程式說明</h3>

        <h4>範例(一)：建立music檔案並寫入旋律 🎵</h4>
        <p>
            請撰寫一段程式，完成以下功能：<br><br>
              1. 開啟一個檔案 music.txt，使用寫入模式（"w"）<br>
              2. 將《小星星》前四個音符寫入檔案：<br>
                C C G G<br>
              3. 關閉檔案<br>
              4. 顯示「檔案寫入完成」
        </p>
        <pre>參考程式：

# 【第1題】
# 使用 open() 開啟 music.txt 檔案
# "w" 代表寫入模式（write）
file = open("music.txt", "w")

# 【第2題】
# 使用 write() 將《小星星》前四個音符寫入檔案
# 寫入內容：C C G G
file.write("C C G G")

# 【第3題】
# 使用 close() 關閉檔案
# 確保資料正確儲存
file.close()

# 【第4題】
# 顯示完成訊息
print("檔案寫入完成")</pre>
        <p><strong>程式執行結果：</strong></p>
        <pre>檔案寫入完成

📁 music.txt 檔案內容：
C C G G</pre>

        <h4>範例(二)：播放《給愛麗絲》旋律</h4>
        <img src="{{ asset('img/Alice.png') }}" alt="給愛麗絲五線譜">
        <p>
            此行五線譜是《給愛麗絲》的第一句旋律，此行音符為Mi(高) Re(高) Mi(高) Re(高) Mi(高) Si Re(高) Do(高) La<br><br>
            請撰寫一段程式，完成以下功能：<br><br>
              1. 開啟檔案 music.txt<br>
              2. 讀取檔案中的旋律內容<br>
              3. 顯示讀取到的旋律<br>
              4. 播放《給愛麗絲》第一句旋律<br>
              5. 關閉檔案<br><br>
            📌 music.txt 檔案內容（事先準備music.txt 檔案，並在檔案內，貼上以下文字內容，之後存檔）<br>
            文字內容：<br>
            E_high D_high E_high D_high E_high B D_high C_high A<br><br>
            提示（音符對應）：<br>
            • Mi(高) = E_high = 76<br>
            • Re(高) = D_high = 74<br>
            • Si = B = 71<br>
            • Do(高) = C_high = 72<br>
            • La = A = 69
        </p>
        <pre>參考程式：

# 匯入套件
import time
import pygame.midi

# 【初始化 MIDI 音樂系統】
pygame.midi.init()

# 建立播放器（0 = 預設裝置）
player = pygame.midi.Output(0)

# 設定樂器為鋼琴
player.set_instrument(0)

# 音符對照表
note_map = {
    "E_high": 76,   # 高音 Mi
    "D_high": 74,   # 高音 Re
    "B": 71,        # Si
    "C_high": 72,   # 高音 Do
    "A": 69         # La
}

# 【第1題】
# 開啟 music.txt 檔案（讀取模式）
file = open("music.txt", "r")

# 【第2題】
# 讀取檔案內容
data = file.read()

# 【第3題】
# 顯示讀取到的旋律內容
print("讀取到的旋律：")
print(data)

# 將字串切割成串列
# 例如："E_high D_high E_high" 變成：["E_high", "D_high", "E_high"]
melody = data.split()

# 設定每個音播放時間
beat = 0.5

# 【第4題】
# 依序播放旋律
for note in melody:
    # 將音符名稱轉成 MIDI 數字
    midi_num = note_map[note]
    # 開始播放音符
    player.note_on(midi_num, 100)
    # 音符持續 0.5 秒
    time.sleep(beat)
    # 停止播放音符
    player.note_off(midi_num, 100)

# 【第5題】
# 關閉檔案
file.close()</pre>
        <p><strong>程式執行結果：</strong></p>
        <pre>讀取到的旋律：
E_high D_high E_high D_high E_high B D_high C_high A

接著程式會依序播放：
Mi(高) → Re(高) → Mi(高) → Re(高)
→ Mi(高) → Si → Re(高) → Do(高) → La

也就是《給愛麗絲》的第一句旋律 🎵</pre>

        <h2 id="section5-2">2. 異常處理與模組</h2>

        <h3>重點語法</h3>

        <h4>(一) 什麼是異常處理（Exception）？</h4>
        <p>
            在程式執行時，有時可能會發生錯誤，例如：<br>
            • 使用者輸入錯誤資料<br>
            • 找不到檔案<br>
            • 數字除以 0<br><br>
            這些錯誤稱為「異常（Exception）」。<br>
            如果沒有處理錯誤，程式可能會直接停止。
        </p>

        <h5>🎵 音樂情境理解</h5>
        <p>
            就像音樂播放器：<br>
            • 如果音樂檔不存在<br>
            • 或輸入錯誤音符<br><br>
            播放器可能無法播放。<br>
            因此我們需要「錯誤處理機制」，讓程式即使發生問題，也不會直接當掉。
        </p>

        <h4>(二) try-except 錯誤處理</h4>
        <p>
            <strong>基本語法</strong>
        </p>
        <pre>try:
    可能發生錯誤的程式

except:
    發生錯誤時執行</pre>
        <p><strong>範例程式</strong></p>
        <pre>#先執行 try 內的程式。如果try 內的程式執行上都沒有錯誤，能夠正常執行完成，就不會跳到except內執行except區塊的程式碼
try:
    num = int(input("請輸入數字: "))
    print(num)

#如果有發生錯誤的話，才會跳到 except內，顯示"輸入錯誤"訊息
except:
    print("輸入錯誤")</pre>
        <p>
            邏輯說明：<br>
            先執行 try 內的程式<br>
            &nbsp;&nbsp;&nbsp;↓<br>
            如果沒有錯誤<br>
            &nbsp;&nbsp;&nbsp;↓<br>
            正常執行完成<br><br>
            但如果有發生錯誤<br>
            &nbsp;&nbsp;&nbsp;↓<br>
            跳到 except<br>
            &nbsp;&nbsp;&nbsp;↓<br>
            顯示錯誤訊息
        </p>

        <h4>(三) 常見錯誤情況</h4>
        <p>
            • <strong>輸入文字轉數字失敗</strong>：例如 <code>int("abc")</code><br>
            • <strong>除以 0</strong>：例如 <code>10 / 0</code><br>
            • <strong>找不到檔案</strong>：開啟不存在的檔案
        </p>

        <h5>🎵 音樂情境理解</h5>
        <p>
            例如：<br>
            <code>note = int("Do")</code><br>
            因為 "Do" 不是數字，所以會發生錯誤。<br>
            這時可以使用 try-except 避免程式停止。
        </p>

        <h4>(四) 模組（Module）</h4>
        <p>
            模組就是：👉 別人已經寫好的功能工具箱。<br>
            Python 可以直接匯入使用。<br><br>
            基本語法：<br>
            <code>import 模組名稱</code>
        </p>
        <p>範例程式:</p>
        <pre>import time</pre>
        <p>代表匯入 time 模組。</p>

        <h4>(五) 使用模組功能</h4>
        <p>匯入後，可以使用模組中的功能。如下程式碼：</p>
        <pre>import time

time.sleep(1)</pre>
        <p>
            功能說明：<br>
            <code>sleep(1)</code> 代表程式暫停 1 秒
        </p>

        <h5>🎵 音樂情境理解</h5>
        <p>
            播放音樂時：<br>
            <code>time.sleep(0.5)</code><br>
            代表：🎵 每個音符持續 0.5 秒。<br><br>
            如果沒有 sleep()：<br>
            音樂會瞬間播完。
        </p>

        <h4>(六) pygame.midi 模組</h4>
        <p>Python 可以使用 pygame.midi 播放音樂。</p>
        <pre># 匯入模組
import pygame.midi

# 初始化 MIDI
pygame.midi.init()

# 建立播放器
player = pygame.midi.Output(0)

# 播放音符
player.note_on(60, 100)

# 停止音符
player.note_off(60, 100)</pre>

        <h5>📌 MIDI 數字簡單理解</h5>
        <p>
            • Do（C） = 60<br>
            • Re（D） = 62<br>
            • Mi（E） = 64<br>
            • Sol（G） = 67
        </p>

        <h5>📌 程式執行流程圖</h5>
        <p>
            try<br>
            &nbsp;&nbsp;&nbsp;↓<br>
            程式是否錯誤？<br>
            &nbsp;&nbsp;&nbsp;↓<br>
            是 → except → 顯示錯誤訊息<br>
            否 → 正常執行原來的程式碼
        </p>

        <hr>

        <h3>範例程式說明</h3>

        <h4>範例(一)：輸入錯誤處理練習 🎵</h4>
        <p>
            請撰寫一段程式，完成以下功能：<br><br>
              1. 匯入 pygame.midi 與 time 模組<br>
              2. 讓使用者輸入一個數字<br>
              3. 使用 try-except 進行錯誤處理<br>
              4. 如果輸入正確：<br>
                • 播放音符 So（G）<br>
                • 顯示「播放音樂成功」<br>
              5. 如果輸入錯誤：<br>
                • 顯示「輸入錯誤，請輸入數字」<br><br>
            提示（音符對應）<br>
            • So = G = 67 🎵
        </p>
        <pre>參考程式：

# 【第1題】
# 匯入時間模組
import time
# 匯入 MIDI 音樂模組
import pygame.midi

# 初始化 MIDI 系統
pygame.midi.init()

# 建立播放器（0 = 預設裝置）
player = pygame.midi.Output(0)

# 設定樂器為鋼琴
player.set_instrument(0)

# 音符對照表
note_map = {
    "G": 67   # So
}

# 【第3題】
# 使用 try-except 進行錯誤處理
try:
    # 【第2題】
    # 讓使用者輸入數字
    # input() 預設為字串，所以使用 int() 轉為整數
    num = int(input("請輸入一個數字: "))

    # 【第4題】
    # 取得 So（G）對應的 MIDI 數字
    midi_num = note_map["G"]

    # 開始播放音符
    player.note_on(midi_num, 100)

    # 音符持續 0.5 秒
    time.sleep(0.5)

    # 停止播放音符
    player.note_off(midi_num, 100)

    # 顯示成功訊息
    print("播放音樂成功 🎵")

# 【第5題】
# 如果輸入錯誤（例如輸入文字）
except:
    # 顯示錯誤提示
    print("輸入錯誤，請輸入數字 ❌")</pre>
        <p><strong>程式執行結果1（若輸入正確）：</strong></p>
        <pre>請輸入一個數字: 5
播放音樂成功 🎵
並播放：So（G）</pre>
        <p><strong>程式執行結果2（若輸入錯誤）：</strong></p>
        <pre>請輸入一個數字: abc
輸入錯誤，請輸入數字 ❌</pre>

        <h4>範例(二)：錯誤輸入保護 + 播放《給愛麗絲》🎵</h4>
        <img src="{{ asset('img/Alice.png') }}" alt="給愛麗絲五線譜">
        <p>
            此行五線譜是《給愛麗絲》的第一句旋律，此行音符為Mi(高) Re(高) Mi(高) Re(高) Mi(高) Si Re(高) Do(高) La<br><br>
            請撰寫一段程式，完成以下功能：<br><br>
              1. 匯入 time 與 pygame.midi 模組<br>
              2. 使用 try-except 保護使用者輸入<br>
              3. 讓使用者輸入一個數字（播放速度）<br>
              4. 如果輸入正確：<br>
                • 設定節拍時間（數字 × 0.5）<br>
                • 播放《給愛麗絲》第一句旋律<br>
              5. 如果輸入錯誤：<br>
                • 顯示「輸入錯誤，請輸入數字」<br><br>
            提示（音符對應）：<br>
            • Mi(高) = E_high = 76<br>
            • Re(高) = D_high = 74<br>
            • Si = B = 71<br>
            • Do(高) = C_high = 72<br>
            • La = A = 69
        </p>
        <pre>參考程式：

# 【第1題】匯入模組（音樂 + 時間控制）
import time
import pygame.midi

# 初始化 MIDI 系統（讓電腦可以播放音樂）
pygame.midi.init()

# 建立播放器（0 = 預設音樂裝置）
player = pygame.midi.Output(0)

# 設定鋼琴音色
player.set_instrument(0)

# 音符對照表（把文字音符變成電腦可以播放的數字）
note_map = {
    "E_high": 76,   # Mi(高)
    "D_high": 74,   # Re(高)
    "B": 71,        # Si
    "C_high": 72,   # Do(高)
    "A": 69         # La
}

# 🎵 給愛麗絲第一句旋律
melody = ["E_high", "D_high", "E_high", "D_high",
          "E_high", "B", "D_high", "C_high", "A"]

# 【第2題】使用 try-except 保護輸入錯誤
try:
    # 【第3題】讓使用者輸入播放速度
    num = int(input("請輸入播放速度（數字）: "))
    # 計算節拍（數字 × 0.5）
    beat = num * 0.5
    print("開始播放《給愛麗絲》🎵，節拍為:", beat)

    # 【第4題】依序播放旋律
    for note in melody:
        # 將音符轉成 MIDI 數字
        midi_num = note_map[note]
        # 播放音符
        player.note_on(midi_num, 100)
        # 持續播放一段時間
        time.sleep(beat)
        # 停止音符
        player.note_off(midi_num, 100)

# 【第5題】輸入錯誤處理
except:
    print("輸入錯誤，請輸入數字 ❌")</pre>
        <p><strong>程式執行結果1（若正確輸入）：</strong></p>
        <pre>請輸入播放速度（數字）: 2
開始播放《給愛麗絲》🎵，節拍為: 1.0

並播放：
Mi(高) → Re(高) → Mi(高) → Re(高)
→ Mi(高) → Si → Re(高) → Do(高) → La</pre>
        <p><strong>程式執行結果2（若錯誤輸入）：</strong></p>
        <pre>請輸入播放速度（數字）: abc
輸入錯誤，請輸入數字 ❌</pre>

    </div>
</div>
@endsection
