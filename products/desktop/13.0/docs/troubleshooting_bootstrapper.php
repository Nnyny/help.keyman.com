<?php
  require_once('includes/template.php');

  head([
    'title' => "How To - Use the Keyman Desktop Setup Bootstrapper"
  ]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">How To - Use the Keyman Desktop Setup Bootstrapper</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="troubleshooting_securitysoftware.php">Prev</a> </td><th width="60%" align="center">Chapter 6. Troubleshooting Index</th><td width="20%" align="right"> <a accesskey="n" href="troubleshooting_hidden.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both" id="troubleshooting_bootstrapper">How To - Use the Keyman Desktop Setup Bootstrapper</h2></div></div></div><h3><a name="id575108"></a>About the Bootstrapper</h3><p>The Keyman Desktop installation bootstrapper is a self-extracting executable file that contains a Windows Installer technology MSI file, and optionally keyboards.</p><p>The bootstrapper:</p><div class="orderedlist"><ol type="1"><li><p>Checks the system before starting the installation to ensure that all prerequisites are met, and optionally downloads and installs the prerequisites.</p></li><li><p>Optionally checks online for an updated version of Keyman Desktop before installing.</p></li><li><p>Starts the Keyman Desktop Windows Installer MSI package.</p></li><li><p>Installs any keyboards included.</p></li><li><p>Starts Keyman Desktop after the install completes.</p></li></ol></div><h3><a name="id575146"></a>Command Line Options</h3><p>The following command line parameters are supported in the bootstrapper:</p><div class="itemizedlist"><ul type="disc"><li><p>-c	— Continue setup after Windows restarts (this parameter is not normally required)</p></li><li><p>-s	— Run a silent installation</p></li><li><p>-o	— Do not check online for updates or prerequisites (useful with -s)</p></li><li><p>-x &lt;extractpath&gt;	— Extract all the files from the self-extracting executable to the path extractpath and exit the bootstrapper.</p></li></ul></div><h3><a name="id575192"></a>Related Topics</h3><div class="itemizedlist"><ul type="disc"><li><p>
        <a class="xref" href="start_download-install_keyman.php" title="How To - Download and Install Keyman Desktop">How To - Download and Install Keyman Desktop</a>
      </p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="troubleshooting_securitysoftware.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="troubleshooting.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="troubleshooting_hidden.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">How To - Resolve Security Software Conflicts with keyman32.dll </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> How To - Fix A Problem with an Active Keyman Keyboard Not Typing</td></tr></table></div>
