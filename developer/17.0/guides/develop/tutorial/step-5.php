<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 5: Rules with Context"
  ]);
?>

<h1>Step 5: Rules with Context</h1>

<h2>Rules with Context</h2>

<p>Very often we want a keyboard to produce different output based on more than just the last keystroke. For example, in the Quick
French keyboard, we want the key <kbd>e</kbd> to produce one of <samp>è</samp>, <samp>é</samp>, <samp>ë</samp>, <samp>ê</samp>, or just
<samp>e</samp>, depending on what was typed immediately before it. To do this we must make our rules look at the context.</p>

<p>The context is the output from previous rules; that is, the characters that are displayed on the screen. We can make a rule work
with only certain context by putting this before the plus sign in the rule:</p>

<pre><code class="language-keyman">"^" + "e" > "ê"
</code></pre>

<p>With this rule, whenever an <kbd>e</kbd> is typed, if it was preceded by a caret (<samp>^</samp>), the output will be <samp>ê</samp>.
It is important to remember that the context consists of <span class="emphasis"><em>output from previous rules</em></span>, not the
previous keystrokes. To emphasize this point, consider the four rules below:</p>

<pre><code class="language-keyman">+ "a" > "b"
+ "b" > "c"
"b" + "c" > "d"
"c" + "d" > "e"
</code></pre>

<p>With these rules, typing <kbd>b</kbd><kbd>c</kbd> would produce the output <samp>cc</samp>, and not <samp>d</samp>, as you might
initially expect. This is because the key <kbd>b</kbd> is converted by the second rule into the output <samp>c</samp>, while the third
rule expects a context of <samp>b</samp>, and not <samp>c</samp>; we would have to type <kbd>a</kbd><kbd>c</kbd> to get <samp>d</samp>.</p>

<p>However, if a key has no matching rule, the output will be the same as the key: so the output <samp>e</samp> will be produced for either
of the inputs <kbd>c</kbd><kbd>d</kbd> (because <kbd>c</kbd> by itself has no rule), and <kbd>b</kbd><kbd>d</kbd>.</p>

<h2>Continuing the Quick French keyboard</h2>

<p>Now we know how to create context-dependent rules, we can continue making the Quick French keyboard. Let's start with the rules
for acute-accented characters, using the ANSI codes from the table we prepared earlier:</p>

<pre><code class="language-keyman">c lowercase characters with acute accent
"'" + "a" > U+00E1
"'" + "e" > U+00E9
"'" + "i" > U+00ED
"'" + "o" > U+00F3
"'" + "u" > U+00FA
"'" + "y" > U+00FD

c uppercase characters with acute accent
"'" + "A" > U+00C1
"'" + "E" > U+00C9
"'" + "I" > U+00CD
"'" + "O" > U+00D3
"'" + "U" > U+00DA
"'" + "Y" > U+00DD
</code></pre>

<p>We can also create similar rules for the other thirty-odd accented characters.</p>

<p>As you can see, even for a simple keyboard like this we quickly end up with a large number of rules, which makes for clumsiness. We
can make things simpler using stores, and the <code class="language-keyman">any()</code> and <code class="language-keyman">index()</code> statements.</p>

<ul>
  <li><a href="step-6">Continue with Step 6: Stores, <code class="language-keyman">any()</code>, and <code class="language-keyman">index()</code></a></li>
  <li><a href="step-4">Back to Step 4: The Keyboard Body</a></li>
</ul>
