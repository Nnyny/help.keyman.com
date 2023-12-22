<?php
  require_once('includes/template.php');

  head([
    'title' => "On-Screen Keyboard Module"
  ]);

  require_once('includes/__docheader.php');
?>
<h1 class="title" id="osk">On-Screen Keyboard Module</h1>
<p>
    The On-Screen Keyboard module is exposed to the developer as <code class="code">window.keyman.osk</code>.
 </p>

  <dl>
  <dt><a href='addEventListener'><code>addEventListener</code> Function</a></dt>
  <dd>Adds an event listener for user-handling of On-Screen keyboard events.</dd>
  </dl>

  <dl>
  <dt><a href='getRect'><code>getRect</code> Function</a></dt>
  <dd>Get absolute position and size of OSK window.</dd>
  </dl>

  <dl>
  <dt><a href='setRect'><code>setRect</code> Function</a></dt>
  <dd>Set absolute position and size of desktop OSK window.</dd>
  </dl>

  <dl>
  <dt><a href='setPos'><code>setPos</code> Function</a></dt>
  <dd>Set absolute position and size of desktop OSK window, limited to screen.</dd>
  </dl>

  <dl>
  <dt><a href='hide'><code>hide</code> Function</a></dt>
  <dd>Hide the OSK.</dd>
  </dl>

  <dl>
  <dt><a href='isEnabled'><code>isEnabled</code> Function</a></dt>
  <dd>Return the user-defined OSK visibility as set by prior calls to show or hide.</dd>
  </dl>

  <dl>
  <dt><a href='isVisible'><code>isVisible</code> Function</a></dt>
  <dd>Return the actual visibility of the On-Screen Keyboard.</dd>
  </dl>

  <dl>
  <dt><a href='removeEventListener'><code>removeEventListener</code> Function</a></dt>
  <dd>Removes a user-defined event handler.</dd>
  </dl>

  <dl>
  <dt><a href='restorePosition'><code>restorePosition</code> Function</a></dt>
  <dd>Move OSK back to default position, floating under active input element.</dd>
  </dl>

  <dl>
  <dt><a href='show'><code>show</code> Function</a></dt>
  <dd>Display, hide or toggle OSK visibility.</dd>
  </dl>

  <dl>
  <dt><a href='userLocated'><code>userLocated</code> Function</a></dt>
  <dd>Determine whether or not the OSK has been moved from its default position by the user.</dd>
  </dl>

  <dl>
  <dt><a href='classes'>Class Names and Identifiers for On-Screen Keyboard and Other KeymanWeb Elements</a></dt>
  <dd>The appearance of the KeymanWeb on-screen keyboard, menu amd other elements can be customized by a web designer by redefining (or adding to) the default styles.</dd>
  </dl>