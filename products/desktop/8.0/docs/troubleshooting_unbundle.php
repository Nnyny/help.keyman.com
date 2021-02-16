<?php
  require_once('includes/template.php');

  head([
    'title' => "How To - Unbundle Keyman Keyboards From Keyman 6.2 or Earlier"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">How To - Unbundle Keyman Keyboards From Keyman 6.2 or Earlier</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="troubleshooting_bootstrapper.php">Prev</a> </td><th width="60%" align="center">Chapter 6. Troubleshooting Index</th><td width="20%" align="right"> <a accesskey="n" href="context.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both" id="troubleshooting_unbundle">How To - Unbundle Keyman Keyboards From Keyman 6.2 or Earlier</h2></div></div></div><p>If you have received a Keyman keyboard bundled with Keyman 6.2 or an earlier version of Keyman, you can follow the steps below to unbundle the Keyman keyboard and use it in Keyman Desktop.</p><h3><a name="id626532"></a>Unbundling a keyboard layout from a Keyman 5 or Keyman 6 bundled installer</h3><div class="orderedlist"><ol type="1"><li><p>Start the bundled installer.</p></li><li><p> From the initial setup screen, click About and leave the installer open on this screen.</p></li><li><p>Open the Windows Start menu, click Run, type %temp%, and press enter.</p></li><li><p>In the Explorer window which opens, look for a folder with a name that begins with the letters kmt and ends with a few random letters and numbers. Open that folder.</p></li><li><p>In that folder you will find one or more .kmp files. Copy the .kmp file(s) to another folder on your computer.</p></li><li><p>Return to the Keyman 6 bundled installer and exit it.</p></li></ol></div><p>You will now have a copy of your desired Keyman keyboard layout without having to install Keyman 6. You can delete the bundled installer package.</p><h3><a name="id626668"></a>Related Topics</h3><div class="itemizedlist"><ul type="disc"><li><p>
        <a class="xref" href="start_download-install_keyboard.php" title="How To - Download and Install a Keyman Keyboard">How To - Download and Install a Keyman Keyboard</a>
      </p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="troubleshooting_bootstrapper.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="troubleshooting.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="context.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">How To - Use the Keyman Desktop Setup Bootstrapper </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Chapter 7. Context Help</td></tr></table></div>