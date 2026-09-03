@extends('layouts.app')

@section('style')
    @include('layouts._lesson-styles')
@endsection

@section('content')
<div class="lesson-wrap" data-chapter="1">

    {{-- ===== 標題列 ===== --}}
    <div class="lesson-header">
        <h1>第 1 章　數值、字串與串列處理</h1>
        <div class="audio-wrap">
            <span>範例音檔</span>
            <audio controls>
                <source src="{{ asset('audio/1_star.mp3') }}" type="audio/mpeg">
                您的瀏覽器不支援播放
            </audio>
        </div>
    </div>

    {{-- ===== 章節色條 ===== --}}
    <div class="chap-accent-bar"></div>

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

        <p><strong>1. 什麼是字串（string）？</strong></p>
        <p>
            字串（string）就是「文字資料」。例如："Amy"、"倫敦鐵橋"、"嗨！"都是屬於字串。<br>
            在 Python 中：文字需要用引號 " 包起來，如下程式碼：
        </p>
        <div class="code-block">
            <div class="code-block-header">
                <div class="code-block-dots">
                    <div class="code-block-dot red"></div>
                    <div class="code-block-dot yellow"></div>
                    <div class="code-block-dot green"></div>
                </div>
                <span class="code-block-lang">Python</span>
            </div>
            <pre><span class="hl-nm">name</span> = <span class="hl-st">"Amy"</span></pre>
        </div>
        <div class="logic-block" style="margin-top:10px">
            <div class="logic-label">程式邏輯說明</div>
            <p>"Amy" 是文字資料（字串）。</p>
        </div>

        <div class="music-card">
            <span class="music-card-icon">🎵</span>
            <div class="music-card-body">
                <p class="music-card-title">音樂情境小舉例</p>
                <p>例如歌曲名稱：</p>
                <pre><span class="hl-nm">song</span> = <span class="hl-st">"小星星"</span></pre>
                <div class="logic-block" style="margin-top:10px">
                    <div class="logic-label">程式邏輯說明</div>
                    <p>"小星星" 就是一個字串。</p>
                </div>
            </div>
        </div>

        <h4>(三) 字串串接（合併文字）</h4>
        <p>字串可以使用 + 合併文字。如下程式碼：</p>
        <div class="code-block">
            <div class="code-block-header">
                <div class="code-block-dots">
                    <div class="code-block-dot red"></div>
                    <div class="code-block-dot yellow"></div>
                    <div class="code-block-dot green"></div>
                </div>
                <span class="code-block-lang">Python</span>
            </div>
            <pre><span class="hl-kw">print</span>(<span class="hl-st">"Hello"</span> + <span class="hl-st">" "</span> + <span class="hl-st">"World"</span>)</pre>
        </div>
        <div class="output-wrap">
            <div class="output-label">執行結果</div>
            <div class="output-block">Hello World</div>
        </div>
        <div class="logic-block" style="margin-top:10px">
            <div class="logic-label">程式邏輯說明</div>
            <p>"Hello" 是字串，"World" 也是字串，透過 + 可以把兩段文字接在一起。</p>
        </div>

        <div class="music-card">
            <span class="music-card-icon">🎵</span>
            <div class="music-card-body">
                <p class="music-card-title">音樂情境小舉例</p>
                <pre><span class="hl-kw">print</span>(<span class="hl-st">"正在播放："</span> + <span class="hl-st">"小星星"</span>)</pre>
                <p>執行結果：</p>
                <pre>正在播放：小星星</pre>
                <div class="logic-block" style="margin-top:10px">
                    <div class="logic-label">程式邏輯說明</div>
                    <p>程式會把兩段文字合併起來。</p>
                </div>
            </div>
        </div>

        <h4>(四) 字串與數字的轉換</h4>
        <p><strong>1. 字串與數字是不同型態</strong></p>
        <p>在 Python 中，最常見的兩種型態有：</p>
        <table>
            <tr><th>資料</th><th>型態</th></tr>
            <tr><td>"5"</td><td>字串（string）</td></tr>
            <tr><td>5</td><td>整數（int）</td></tr>
        </table>
        <p><strong>字串（string）</strong>就是「文字資料」，需要使用引號 " 包起來。如下程式碼：</p>
        <div class="code-block">
            <div class="code-block-header">
                <div class="code-block-dots">
                    <div class="code-block-dot red"></div>
                    <div class="code-block-dot yellow"></div>
                    <div class="code-block-dot green"></div>
                </div>
                <span class="code-block-lang">Python</span>
            </div>
            <pre><span class="hl-nm">a</span> = <span class="hl-st">"5"</span></pre>
        </div>
        <div class="logic-block" style="margin-top:10px">
            <div class="logic-label">程式邏輯說明</div>
            <p>雖然看起來像數字 5，但因為有引號"5"，所以 Python 會認為它是：<strong>字串</strong></p>
        </div>

        <p><strong>整數（int）</strong>就是真正可以計算的數字。如下程式碼：</p>
        <div class="code-block">
            <div class="code-block-header">
                <div class="code-block-dots">
                    <div class="code-block-dot red"></div>
                    <div class="code-block-dot yellow"></div>
                    <div class="code-block-dot green"></div>
                </div>
                <span class="code-block-lang">Python</span>
            </div>
            <pre><span class="hl-nm">b</span> = <span class="hl-nu">5</span></pre>
        </div>
        <div class="logic-block" style="margin-top:10px">
            <div class="logic-label">程式邏輯說明</div>
            <p>因為這個 5 沒有引號，所以 Python 會認為它是：<strong>數字</strong></p>
        </div>


        <p>
            不同型態的資料，不能直接混合使用，因為：<br>
            • 字串是文字<br>
            • 數字是數字
        </p>
        <p>
            因為 "5" 是屬於文字（字串），5 是屬於數字（整數），<br>
            它們是不同種類的資料，Python 不知道該怎麼直接把它們一起運算，所以不能直接混合使用。<br>
            因此要把數字和文字一起顯示，或是要讓 "5" 也能夠做加法運算，都需要先進行<strong>「型態轉換」</strong>。
        </p><br><br>

        <p><strong>2. str()：數字轉字串</strong></p>
        <p>str() 的功能是：把數字變成文字。如下程式碼：</p>
        <div class="code-block">
            <div class="code-block-header">
                <div class="code-block-dots">
                    <div class="code-block-dot red"></div>
                    <div class="code-block-dot yellow"></div>
                    <div class="code-block-dot green"></div>
                </div>
                <span class="code-block-lang">Python</span>
            </div>
            <pre><span class="hl-kw">print</span>(<span class="hl-st">"年齡是 "</span> + <span class="hl-kw">str</span>(<span class="hl-nu">18</span>))</pre>
        </div>
        <div class="output-wrap">
            <div class="output-label">執行結果</div>
            <div class="output-block">年齡是 18</div>
        </div>
        <div class="logic-block" style="margin-top:10px">
            <div class="logic-label">程式邏輯說明</div>
            <p>18 原本是數字，str(18) 會把數字轉成文字 "18"，因此才能和前面的文字一起合併。</p>
        </div>

        <div class="music-card">
            <span class="music-card-icon">🎵</span>
            <div class="music-card-body">
                <p class="music-card-title">音樂情境小舉例</p>
                <pre><span class="hl-kw">print</span>(<span class="hl-st">"目前音量："</span> + <span class="hl-kw">str</span>(<span class="hl-nu">5</span>))</pre>
                <p>執行結果：</p>
                <pre>目前音量：5</pre>
                <div class="logic-block" style="margin-top:10px">
                    <div class="logic-label">程式邏輯說明</div>
                    <p>使用 str() 後，數字 5 才能和文字一起顯示。</p>
                </div>
            </div>
        </div>

        <p><strong>3. int()：字串轉數字</strong></p>
        <p>int() 的功能是把文字數字轉成真正的數字，讓它能夠做數學計算。如下程式碼：</p>
        <div class="code-block">
            <div class="code-block-header">
                <div class="code-block-dots">
                    <div class="code-block-dot red"></div>
                    <div class="code-block-dot yellow"></div>
                    <div class="code-block-dot green"></div>
                </div>
                <span class="code-block-lang">Python</span>
            </div>
            <pre><span class="hl-nm">a</span> = <span class="hl-kw">int</span>(<span class="hl-st">"5"</span>)
<span class="hl-nm">b</span> = <span class="hl-kw">int</span>(<span class="hl-st">"3"</span>)
<span class="hl-kw">print</span>(a + b)</pre>
        </div>
        <div class="output-wrap">
            <div class="output-label">執行結果</div>
            <div class="output-block">8</div>
        </div>
        <div class="logic-block" style="margin-top:10px">
            <div class="logic-label">程式邏輯說明</div>
            <p>"5" 和 "3" 原本是文字，使用 int() 後：<br>
              "5" → 5<br>
              "3" → 3<br>
            因此可以進行加法運算。</p>
        </div>

        <div class="music-card">
            <span class="music-card-icon">🎵</span>
            <div class="music-card-body">
                <p class="music-card-title">音樂情境小舉例</p>
                <pre><span class="hl-nm">beat</span> = <span class="hl-kw">int</span>(<span class="hl-st">"4"</span>)
<span class="hl-kw">print</span>(beat + <span class="hl-nu">1</span>)</pre>
                <p>執行結果：</p>
                <pre>5</pre>
                <div class="logic-block" style="margin-top:10px">
                    <div class="logic-label">程式邏輯說明</div>
                    <p>int() 可以把音樂節拍數的文字轉成真正數字，方便計算。</p>
                </div>
            </div>
        </div>

        <hr>

        <h3>範例程式說明</h3>

        <div class="example-wrap">
            <div class="example-head">範例 (一)：計算明年年齡並顯示結果</div>
            <div class="example-body">
                <p>
                    請撰寫一段程式，完成以下功能：<br>
                    1. 讓使用者輸入「姓名」與「年齡」<br>
                    2. 將輸入的年齡轉換為整數<br>
                    3. 計算「明年的年齡」<br>
                    4. 輸出完整句子，例如：小明 明年 19 歲
                </p><br>
                <div class="hint-block">
                    <div class="hint-label">提示</div>
                    <p>• 數值運算：age + 1（加法運算）</p>
                    <p>• 字串處理：使用（+）進行字串串接</p>
                    <p>• 型態轉換：使用 int()，字串 → 數字；使用 str()，數字 → 字串</p>
                </div>
                <div class="code-block" style="margin-top:14px">
                    <div class="code-block-header">
                        <div class="code-block-dots">
                            <div class="code-block-dot red"></div>
                            <div class="code-block-dot yellow"></div>
                            <div class="code-block-dot green"></div>
                        </div>
                        <span class="code-block-lang">參考程式</span>
                    </div>
                    <pre><span class="hl-cm"># 【題號1】</span>
<span class="hl-cm"># 使用 input() 讓使用者輸入姓名</span>
<span class="hl-cm"># input() 取得的資料預設為字串（string）</span>
<span class="hl-nm">name</span> = <span class="hl-kw">input</span>(<span class="hl-st">"請輸入姓名: "</span>)

<span class="hl-cm"># 【題號2】</span>
<span class="hl-cm"># 使用 input() 讓使用者輸入年齡</span>
<span class="hl-cm"># 因為 input() 預設為字串</span>
<span class="hl-cm"># 所以需使用 int() 轉換成整數（integer）</span>
<span class="hl-nm">age</span> = <span class="hl-kw">int</span>(<span class="hl-kw">input</span>(<span class="hl-st">"請輸入年齡: "</span>))

<span class="hl-cm"># 【題號3】</span>
<span class="hl-cm"># 使用加法運算計算明年的年齡</span>
<span class="hl-cm"># 例如：18 + 1 = 19</span>
<span class="hl-nm">next_age</span> = age + <span class="hl-nu">1</span>

<span class="hl-cm"># 【題號4】</span>
<span class="hl-cm"># 使用 + 進行字串串接</span>
<span class="hl-cm"># str() 的功能是將數字轉換為字串</span>
<span class="hl-cm"># 才能和文字一起合併輸出</span>
<span class="hl-kw">print</span>(name + <span class="hl-st">" 明年 "</span> + <span class="hl-kw">str</span>(next_age) + <span class="hl-st">" 歲"</span>)</pre>
                </div>
                <div class="output-wrap" style="margin-top:10px">
                    <div class="output-label">執行結果（假設輸入）</div>
                    <div class="output-block">請輸入姓名: 小明
請輸入年齡: 18

程式輸出：
小明 明年 19 歲</div>
                </div>
            </div>
        </div>

        <div class="example-wrap">
            <div class="example-head">範例 (二)：小星星旋律播放 (簡單版)</div>
            <div class="example-body">
                <img src="{{ asset('img/star.png') }}" alt="小星星五線譜">
                <p>
                    此行五線譜是《小星星》的第一句旋律，此行歌詞為一閃一閃亮晶晶(Twinkle, twinkle, little star)<br><br>
                    請撰寫一段程式：<br>
                    1. 輸入一個數字<br>
                    2. 設定音符播放時間（數字 × 0.5）<br>
                    3. 播放兩個音：C → G
                </p><br>
                <div class="code-block" style="margin-top:14px">
                    <div class="code-block-header">
                        <div class="code-block-dots">
                            <div class="code-block-dot red"></div>
                            <div class="code-block-dot yellow"></div>
                            <div class="code-block-dot green"></div>
                        </div>
                        <span class="code-block-lang">參考程式</span>
                    </div>
                    <pre><span class="hl-cm"># 【前置準備】</span>
<span class="hl-kw">import</span> time
<span class="hl-kw">import</span> pygame.midi

pygame.midi.<span class="hl-kw">init</span>()
<span class="hl-nm">player</span> = pygame.midi.<span class="hl-kw">Output</span>(<span class="hl-nu">0</span>)
player.<span class="hl-kw">set_instrument</span>(<span class="hl-nu">0</span>)

<span class="hl-cm"># 【題號1】</span>
<span class="hl-cm"># 使用 input() 讓使用者輸入數字</span>
<span class="hl-cm"># input() 取得的是字串（string）</span>
<span class="hl-cm"># 因此需要使用 int() 轉換成整數（integer）</span>
<span class="hl-nm">num</span> = <span class="hl-kw">int</span>(<span class="hl-kw">input</span>(<span class="hl-st">"請輸入一個數字（這會影響每個音符的節拍長度）: "</span>))

<span class="hl-cm"># 【題號2】</span>
<span class="hl-cm"># 計算音符播放時間，將輸入數字乘以 0.5 秒</span>
<span class="hl-nm">beat</span> = num * <span class="hl-nu">0.5</span>

<span class="hl-cm"># str() 的功能：將數字轉換成字串，方便與文字一起顯示</span>
<span class="hl-kw">print</span>(<span class="hl-st">"目前的播放速度（節拍長度）為: "</span> + <span class="hl-kw">str</span>(beat) + <span class="hl-st">" 秒"</span>)

<span class="hl-cm"># 【題號3】 播放《小星星》的兩個音 C → G</span>

<span class="hl-cm"># 播放第一個音：中央 C（Do），MIDI 編號 60</span>
player.<span class="hl-kw">note_on</span>(<span class="hl-nu">60</span>, <span class="hl-nu">100</span>)
time.<span class="hl-kw">sleep</span>(beat)
player.<span class="hl-kw">note_off</span>(<span class="hl-nu">60</span>, <span class="hl-nu">100</span>)

<span class="hl-cm"># 播放第二個音：G（Sol），MIDI 編號 67</span>
player.<span class="hl-kw">note_on</span>(<span class="hl-nu">67</span>, <span class="hl-nu">100</span>)
time.<span class="hl-kw">sleep</span>(beat)
player.<span class="hl-kw">note_off</span>(<span class="hl-nu">67</span>, <span class="hl-nu">100</span>)</pre>
                </div>
                <div class="output-wrap" style="margin-top:10px">
                    <div class="output-label">執行結果（假設輸入）</div>
                    <div class="output-block">請輸入一個數字（這會影響每個音符的節拍長度）: 2

程式輸出：
目前的播放速度（節拍長度）為: 1.0 秒

🎵 接著會播放：
C → G（Do → Sol）</div>
                </div>
            </div>
        </div>

        <h2 id="section1-2">2. 串列與相關處理函數</h2>

        <h3>重點語法</h3>

        <h4>(一) 串列（List）是什麼？</h4>
        <p>
            串列（List）可以想成：「一個可以放很多資料的小盒子」。<br>
            裡面可以放：音符、數字、文字<br><br>
            如下程式碼：
        </p>
        <div class="code-block">
            <div class="code-block-header">
                <div class="code-block-dots">
                    <div class="code-block-dot red"></div>
                    <div class="code-block-dot yellow"></div>
                    <div class="code-block-dot green"></div>
                </div>
                <span class="code-block-lang">Python</span>
            </div>
            <pre><span class="hl-nm">melody</span> = [<span class="hl-st">"C"</span>, <span class="hl-st">"D"</span>, <span class="hl-st">"E"</span>]</pre>
        </div>
        <div class="logic-block" style="margin-top:10px">
            <div class="logic-label">程式邏輯說明</div>
            <p>
                [　] 代表建立一個串列，串列中放了 3 個音符：<br>
                C（Do）<br>
                D（Re）<br>
                E（Mi）
            </p>
        </div>


        <div class="music-card">
            <span class="music-card-icon">🎵</span>
            <div class="music-card-body">
                <p class="music-card-title">音樂情境小舉例</p>
                <p>這個串列就像一小段樂譜：<code>["C", "D", "E"]</code><br>
                代表：🎵 Do → Re → Mi<br>
                程式之後可以依照順序播放音樂。</p>
            </div>
        </div>

        <h4>(二) 串列中的資料有順序</h4>
        <p>
            串列中的資料都有自己的位置。<br>
            位置稱為：<strong>索引（index）</strong><br>
            Python 的索引是從 0 開始算。如下：
        </p>
        <table>
            <tr><th>位置(index)</th><th>資料</th></tr>
            <tr><td>0</td><td>"C"</td></tr>
            <tr><td>1</td><td>"D"</td></tr>
            <tr><td>2</td><td>"E"</td></tr>
        </table>
        <div class="code-block">
            <div class="code-block-header">
                <div class="code-block-dots">
                    <div class="code-block-dot red"></div>
                    <div class="code-block-dot yellow"></div>
                    <div class="code-block-dot green"></div>
                </div>
                <span class="code-block-lang">Python</span>
            </div>
            <pre><span class="hl-nm">melody</span> = [<span class="hl-st">"C"</span>, <span class="hl-st">"D"</span>, <span class="hl-st">"E"</span>]
<span class="hl-kw">print</span>(melody[<span class="hl-nu">0</span>])
<span class="hl-kw">print</span>(melody[<span class="hl-nu">1</span>])</pre>
        </div>
        <div class="output-wrap">
            <div class="output-label">執行結果</div>
            <div class="output-block">C
D</div>
        </div>
        <div class="logic-block" style="margin-top:10px">
            <div class="logic-label">程式邏輯說明</div>
            <p>
                melody[0] 代表取得第 1 個音符。<br>
                melody[1] 代表取得第 2 個音符。<br>
                雖然是第 1 個資料，但索引要從 0 開始。
            </p>
        </div>

        <div class="music-card">
            <span class="music-card-icon">🎵</span>
            <div class="music-card-body">
                <p class="music-card-title">音樂情境小舉例</p>
                <p>如果：<code>melody = ["Do", "Re", "Mi"]</code><br>
                那麼：<code>melody[0]</code> 就是 Do 🎵</p>
            </div>
        </div>

        <h4>(三) len()：取得串列長度</h4>
        <p>len() 的功能是計算串列中有幾個資料。如下程式碼：</p>
        <div class="code-block">
            <div class="code-block-header">
                <div class="code-block-dots">
                    <div class="code-block-dot red"></div>
                    <div class="code-block-dot yellow"></div>
                    <div class="code-block-dot green"></div>
                </div>
                <span class="code-block-lang">Python</span>
            </div>
            <pre><span class="hl-nm">melody</span> = [<span class="hl-st">"C"</span>, <span class="hl-st">"D"</span>, <span class="hl-st">"E"</span>]
<span class="hl-kw">print</span>(<span class="hl-kw">len</span>(melody))</pre>
        </div>
        <div class="output-wrap">
            <div class="output-label">執行結果</div>
            <div class="output-block">3</div>
        </div>
        <div class="logic-block" style="margin-top:10px">
            <div class="logic-label">程式邏輯說明</div>
            <p>
                melody 串列中有：C、D、E，共 3 個資料。<br>
                因此：len(melody) 會得到：3
            </p>
        </div>

        <div class="music-card">
            <span class="music-card-icon">🎵</span>
            <div class="music-card-body">
                <p class="music-card-title">音樂情境小舉例</p>
                <p>如果 melody 有很多音符，len(melody) 就可以知道：「這段旋律共有幾個音符」🎵</p>
            </div>
        </div>

        <h4>(四) 串列如何新增資料（append）</h4>
        <p>append() 的功能是：在串列最後加入新資料。如下程式碼：</p>
        <div class="code-block">
            <div class="code-block-header">
                <div class="code-block-dots">
                    <div class="code-block-dot red"></div>
                    <div class="code-block-dot yellow"></div>
                    <div class="code-block-dot green"></div>
                </div>
                <span class="code-block-lang">Python</span>
            </div>
            <pre><span class="hl-nm">melody</span> = [<span class="hl-st">"C"</span>, <span class="hl-st">"D"</span>, <span class="hl-st">"E"</span>]
melody.<span class="hl-kw">append</span>(<span class="hl-st">"F"</span>)

<span class="hl-cm"># 原本：["C", "D", "E"]</span>
<span class="hl-cm"># 加入後變成：["C", "D", "E", "F"]</span></pre>
        </div>

        <div class="music-card">
            <span class="music-card-icon">🎵</span>
            <div class="music-card-body">
                <p class="music-card-title">音樂情境小舉例</p>
                <p>原本旋律只有：🎵 Do → Re → Mi<br>
                加入 "F" 後：🎵 Do → Re → Mi → Fa，旋律變長了。</p>
            </div>
        </div>

        <h4>(五) 串列如何修改資料</h4>
        <p>可以直接改變串列中的資料。如下程式碼：</p>
        <div class="code-block">
            <div class="code-block-header">
                <div class="code-block-dots">
                    <div class="code-block-dot red"></div>
                    <div class="code-block-dot yellow"></div>
                    <div class="code-block-dot green"></div>
                </div>
                <span class="code-block-lang">Python</span>
            </div>
            <pre><span class="hl-nm">melody</span> = [<span class="hl-st">"C"</span>, <span class="hl-st">"D"</span>, <span class="hl-st">"E"</span>]
melody[<span class="hl-nu">0</span>] = <span class="hl-st">"G"</span>

<span class="hl-cm"># 修改後：["G", "D", "E"]</span></pre>
        </div>
        <div class="logic-block" style="margin-top:10px">
            <div class="logic-label">程式邏輯說明</div>
            <p>
                melody[0]代表第 1 個位置。<br>
                因此：melody[0] = "G"，會把原本的 "C" 改成 "G"。
            </p>
        </div>

        <div class="music-card">
            <span class="music-card-icon">🎵</span>
            <div class="music-card-body">
                <p class="music-card-title">音樂情境小舉例</p>
                <p>原本：🎵 Do → Re → Mi<br>
                修改後：🎵 Sol → Re → Mi，第一個音變了 🎵</p>
            </div>
        </div>

        <h4>(六) 刪除資料（remove）</h4>
        <p>remove() 的功能是：刪除指定資料。如下程式碼：</p>
        <div class="code-block">
            <div class="code-block-header">
                <div class="code-block-dots">
                    <div class="code-block-dot red"></div>
                    <div class="code-block-dot yellow"></div>
                    <div class="code-block-dot green"></div>
                </div>
                <span class="code-block-lang">Python</span>
            </div>
            <pre><span class="hl-nm">melody</span> = [<span class="hl-st">"C"</span>, <span class="hl-st">"D"</span>, <span class="hl-st">"E"</span>]
melody.<span class="hl-kw">remove</span>(<span class="hl-st">"D"</span>)

<span class="hl-cm"># 刪除後：["C", "E"]</span></pre>
        </div>
        <div class="logic-block" style="margin-top:10px">
            <div class="logic-label">程式邏輯說明</div>
            <p>
                "D" 被刪除了。<br>
                因此串列只剩：C、E
            </p>
        </div>

        <div class="music-card">
            <span class="music-card-icon">🎵</span>
            <div class="music-card-body">
                <p class="music-card-title">音樂情境小舉例</p>
                <p>原本旋律：🎵 Do → Re → Mi<br>
                刪除 Re 後：🎵 Do → Mi<br>
                旋律中的一個音被拿掉了。</p>
            </div>
        </div>

        <hr>

        <h3>範例程式說明</h3>

        <div class="example-wrap">
            <div class="example-head">範例 (一)：串列基本操作練習</div>
            <div class="example-body">
                <p>
                    請撰寫一段程式，完成以下功能：<br>
                    1. 建立一個串列，內容為：["apple", "banana", "cherry"]<br>
                    2. 印出串列中的第一個水果<br>
                    3. 在串列最後新增一個水果 "orange"<br>
                    4. 印出更新後的串列長度
                </p><br>
                <div class="hint-block">
                    <div class="hint-label">提示</div>
                    <p>• 串列建立：[]</p>
                    <p>• 索引取值：fruits[0]</p>
                    <p>• 新增資料：append()</p>
                    <p>• 長度計算：len()</p>
                </div>
                <div class="code-block" style="margin-top:14px">
                    <div class="code-block-header">
                        <div class="code-block-dots">
                            <div class="code-block-dot red"></div>
                            <div class="code-block-dot yellow"></div>
                            <div class="code-block-dot green"></div>
                        </div>
                        <span class="code-block-lang">參考程式</span>
                    </div>
                    <pre><span class="hl-cm"># 【題號1】 建立串列（List）</span>
<span class="hl-nm">fruits</span> = [<span class="hl-st">"apple"</span>, <span class="hl-st">"banana"</span>, <span class="hl-st">"cherry"</span>]

<span class="hl-cm"># 【題號2】 取出第一個水果（索引從 0 開始）</span>
<span class="hl-kw">print</span>(<span class="hl-st">"第一個水果是:"</span>, fruits[<span class="hl-nu">0</span>])

<span class="hl-cm"># 【題號3】 使用 append() 在串列最後新增資料</span>
fruits.<span class="hl-kw">append</span>(<span class="hl-st">"orange"</span>)

<span class="hl-cm"># 【題號4】 使用 len() 計算串列長度</span>
<span class="hl-kw">print</span>(<span class="hl-st">"目前共有"</span>, <span class="hl-kw">len</span>(fruits), <span class="hl-st">"個水果"</span>)</pre>
                </div>
                <div class="output-wrap" style="margin-top:10px">
                    <div class="output-label">執行結果</div>
                    <div class="output-block">第一個水果是: apple
目前共有 4 個水果</div>
                </div>
            </div>
        </div>

        <div class="example-wrap">
            <div class="example-head">範例 (二)：使用串列播放小星星旋律</div>
            <div class="example-body">
                <img src="{{ asset('img/star.png') }}" alt="小星星五線譜">
                <p>
                    此行五線譜是《小星星》的第一句旋律，此行歌詞為一閃一閃亮晶晶(Twinkle, twinkle, little star)<br><br>
                    請撰寫一段程式，完成以下功能：<br>
                    1. 建立串列：["C", "C", "G", "G"]<br>
                    2. 印出第一個音符<br>
                    3. 依序播放每個音符
                </p><br>
                <div class="code-block" style="margin-top:14px">
                    <div class="code-block-header">
                        <div class="code-block-dots">
                            <div class="code-block-dot red"></div>
                            <div class="code-block-dot yellow"></div>
                            <div class="code-block-dot green"></div>
                        </div>
                        <span class="code-block-lang">參考程式</span>
                    </div>
                    <pre><span class="hl-cm"># 【前置準備】</span>
<span class="hl-kw">import</span> time
<span class="hl-kw">import</span> pygame.midi

pygame.midi.<span class="hl-kw">init</span>()
<span class="hl-nm">player</span> = pygame.midi.<span class="hl-kw">Output</span>(<span class="hl-nu">0</span>)
player.<span class="hl-kw">set_instrument</span>(<span class="hl-nu">0</span>)

<span class="hl-nm">note_map</span> = {
    <span class="hl-st">"C"</span>: <span class="hl-nu">60</span>, <span class="hl-cm"># Do</span>
    <span class="hl-st">"G"</span>: <span class="hl-nu">67</span>  <span class="hl-cm"># Sol</span>
}

<span class="hl-cm"># 【題號1】 建立串列</span>
<span class="hl-nm">melody</span> = [<span class="hl-st">"C"</span>, <span class="hl-st">"C"</span>, <span class="hl-st">"G"</span>, <span class="hl-st">"G"</span>]

<span class="hl-cm"># 【題號2】 印出第一個音符（索引從 0 開始）</span>
<span class="hl-kw">print</span>(<span class="hl-st">"第一個音符是:"</span>, melody[<span class="hl-nu">0</span>])

<span class="hl-nm">beat</span> = <span class="hl-nu">0.5</span>

<span class="hl-cm"># 【題號3】 依序播放每個音符</span>
<span class="hl-cm"># 🎵 第 1 個音：melody[0]</span>
<span class="hl-nm">note</span> = melody[<span class="hl-nu">0</span>]
<span class="hl-nm">midi_num</span> = note_map[note]
player.<span class="hl-kw">note_on</span>(midi_num, <span class="hl-nu">100</span>)
time.<span class="hl-kw">sleep</span>(beat)
player.<span class="hl-kw">note_off</span>(midi_num, <span class="hl-nu">100</span>)

<span class="hl-cm"># 🎵 第 2 個音：melody[1]</span>
<span class="hl-nm">note</span> = melody[<span class="hl-nu">1</span>]
<span class="hl-nm">midi_num</span> = note_map[note]
player.<span class="hl-kw">note_on</span>(midi_num, <span class="hl-nu">100</span>)
time.<span class="hl-kw">sleep</span>(beat)
player.<span class="hl-kw">note_off</span>(midi_num, <span class="hl-nu">100</span>)

<span class="hl-cm"># 🎵 第 3 個音：melody[2]</span>
<span class="hl-nm">note</span> = melody[<span class="hl-nu">2</span>]
<span class="hl-nm">midi_num</span> = note_map[note]
player.<span class="hl-kw">note_on</span>(midi_num, <span class="hl-nu">100</span>)
time.<span class="hl-kw">sleep</span>(beat)
player.<span class="hl-kw">note_off</span>(midi_num, <span class="hl-nu">100</span>)

<span class="hl-cm"># 🎵 第 4 個音：melody[3]</span>
<span class="hl-nm">note</span> = melody[<span class="hl-nu">3</span>]
<span class="hl-nm">midi_num</span> = note_map[note]
player.<span class="hl-kw">note_on</span>(midi_num, <span class="hl-nu">100</span>)
time.<span class="hl-kw">sleep</span>(beat)
player.<span class="hl-kw">note_off</span>(midi_num, <span class="hl-nu">100</span>)</pre>
                </div>
                <div class="output-wrap" style="margin-top:10px">
                    <div class="output-label">執行結果</div>
                    <div class="output-block">第一個音符是：C

🎵 接著程式會播放：
C → C → G → G
（Do → Do → Sol → Sol）</div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
