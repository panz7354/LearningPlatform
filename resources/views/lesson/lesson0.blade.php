@extends('layouts.app')

@section('style')
    @include('layouts._lesson-styles')
@endsection

@section('content')
<div class="lesson-wrap">

    {{-- ===== 標題列 ===== --}}
    <div class="lesson-header">
        <h1>第 0 章　Pygame 套件介紹</h1>
        <div class="audio-wrap">
            <span>範例音檔</span>
            <audio controls>
                <source src="{{ asset('audio/0_do-re-mi.mp3') }}" type="audio/mpeg">
                您的瀏覽器不支援播放
            </audio>
        </div>
    </div>

    {{-- ===== 學習目標 ===== --}}
    <div class="lesson-goals">
        <h3>學習目標</h3>
        <div class="goal-links">
            <a href="#section0-1">1. Pygame 套件概述</a>
            <a href="#section0-2">2. pygame.midi 概念</a>
            <a href="#section0-3">3. 常見程式碼與邏輯說明</a>
            <a href="#section0-4">4. 整體程式邏輯</a>
            <a href="#section0-5">5. 範例程式說明</a>
        </div>
    </div>

    {{-- ===== 主要內容 ===== --}}
    <div class="lesson-content">

        <h2 id="section0-1">1. Pygame 套件概述</h2>
        <p>
            pygame 是一個以 Python 為基礎的多媒體開發套件，主要用於遊戲開發與互動式應用程式設計。幫助開發者能夠以較為簡單的方式，建立具備視覺與聽覺互動效果的程式。
        </p>
        <p>
            本研究採用 Pygame 套件中的 pygame.midi 模組作為音樂輸出工具，透過 MIDI 音高數值來控制音符播放，將程式邏輯（如迴圈與條件判斷）轉化為具體可感知之聲音回饋，促進學習理解。
        </p>

        <h2 id="section0-2">2. pygame.midi 的核心概念</h2>

        <h3>MIDI 是什麼？</h3>
        <p>
            MIDI（Musical Instrument Digital Interface）是一種用數字表示音樂的標準系統，音高範圍為 0～127，其中中央 C 為 60。
            電腦在處理音樂時，必須將音符轉換為對應的數值才能進行播放。在 MIDI 系統中，do 被設在大約中間的位置（第 60 號）。
        </p>

        <h3>音名與唱名</h3>
        <p>
            我們常用 <strong>唱名（do re mi）</strong>或 <strong>音名（C D E）</strong>來表示音符。唱名與音名的對應規則如下：
        </p>
        <table>
            <tr><th>唱名</th><th>音名</th></tr>
            <tr><td>do</td><td>C</td></tr>
            <tr><td>re</td><td>D</td></tr>
            <tr><td>mi</td><td>E</td></tr>
            <tr><td>fa</td><td>F</td></tr>
            <tr><td>sol</td><td>G</td></tr>
            <tr><td>la</td><td>A</td></tr>
            <tr><td>si</td><td>B</td></tr>
        </table>

        <h3>音符與對應的 MIDI 數值</h3>
        <p>
            音符需透過 note_map 轉換為 MIDI 數值才能播放。電腦不是在播放「G」，而是在播放「67」這個數字所代表的音高。
            這個轉換過程就是：<strong>唱名／音名 → MIDI 數值 → 電腦播放聲音</strong>
        </p>
        <table>
            <tr><th>唱名</th><th>音名</th><th>MIDI</th></tr>
            <tr><td>do</td><td>C</td><td>60</td></tr>
            <tr><td>re</td><td>D</td><td>62</td></tr>
            <tr><td>mi</td><td>E</td><td>64</td></tr>
            <tr><td>fa</td><td>F</td><td>65</td></tr>
            <tr><td>sol</td><td>G</td><td>67</td></tr>
            <tr><td>la</td><td>A</td><td>69</td></tr>
            <tr><td>si</td><td>B</td><td>71</td></tr>
        </table>

        <h2 id="section0-3">3. 常見程式碼</h2>

        <h3>初始化系統</h3>
        <p>功能：啟動 MIDI 系統，初始化音樂控制的程式。</p>
        <pre>import pygame.midi
pygame.midi.init()</pre>

        <h3>建立播放器</h3>
        <p>概念：建立一個「播放裝置」，0 代表預設裝置。可以理解為：取得一台虛擬鋼琴。</p>
        <pre>player = pygame.midi.Output(0)</pre>

        <h3>設定樂器</h3>
        <p>功能：設定音色（樂器）。0 = 鋼琴。MIDI 有 128 種樂器（包括鋼琴、小提琴、吉他等）。</p>
        <pre>player.set_instrument(0)</pre>

        <h3>播放音符</h3>
        <p>概念：開始彈一個音。</p>
        <table>
            <tr><th>參數</th><th>意義</th></tr>
            <tr><td>midi_num</td><td>音高（例如 67）</td></tr>
            <tr><td>velocity</td><td>音量（0~127）</td></tr>
        </table>
        <pre>player.note_on(midi_num, velocity)</pre>

        <h3>控制時間</h3>
        <p>功能：控制音符持續多久。如果沒有這行程式碼，音符會瞬間結束（聽不到）。</p>
        <pre>time.sleep(beat)</pre>

        <h3>停止音符</h3>
        <p>功能：放開琴鍵，停止聲音。</p>
        <pre>player.note_off(midi_num, velocity)</pre>

        <h2 id="section0-4">4. 程式流程</h2>
        <ol>
            <li>建立音符資料</li>
            <li>迴圈取出音符</li>
            <li>轉換為 MIDI</li>
            <li>播放音符</li>
            <li>等待時間</li>
            <li>停止音符</li>
        </ol>

        <h2 id="section0-5">5. 範例程式說明</h2>

        <h3>範例(一)：播放 Do Re Mi</h3>
        <p>
            請撰寫一段程式，使用 pygame.midi 播放三個音符：
            Do（C）→ Re（D）→ Mi（E），每個音符播放 0.5 秒。
        </p>
        <hr>
        <h4>提示</h4>
        <p>
            • 使用 note_on() 播放音符<br>
            • 使用 time.sleep() 控制時間<br>
            • 使用 note_off() 停止音符<br>
            • 不需要使用迴圈
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
player.note_off(midi_num, 100)</pre>

    </div>
</div>
@endsection
